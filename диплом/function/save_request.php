<?php
header('Content-Type: application/json; charset=utf-8');

$connect = require_once 'config.php';

// Получаем данные из тела запроса в формате JSON
$json = file_get_contents('php://input');
$data = json_decode($json, true);

error_log("Запрос получен: " . print_r($data, true)); // Логируем полученные данные

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Извлекаем данные из JSON
    $name = isset($data['name']) ? trim($data['name']) : '';
    $phone = isset($data['phone']) ? trim($data['phone']) : '';
    $policy = isset($data['policy']) ? (bool)$data['policy'] : false;

    error_log("Имя: " . $name . ", Телефон: " . $phone . ", Согласие: " . ($policy ? 'да' : 'нет'));

    // Проверяем обязательные поля
    if (empty($name) || empty($phone) || !$policy) {
        http_response_code(400);
        $error_message = empty($name) ? 'Пожалуйста, укажите ваше имя.' : 
                        (empty($phone) ? 'Пожалуйста, укажите ваш телефон.' : 
                        'Необходимо дать согласие на обработку персональных данных.');
        
        error_log("Ошибка: " . $error_message);
        echo json_encode(['success' => false, 'error' => $error_message]);
        exit;
    }

    // Валидация телефона (простая проверка на минимальную длину)
    if (strlen($phone) < 5) {
        http_response_code(400);
        $error_message = 'Пожалуйста, укажите корректный номер телефона.';
        error_log("Ошибка: " . $error_message);
        echo json_encode(['success' => false, 'error' => $error_message]);
        exit;
    }

    // Подготавливаем SQL-запрос (добавлено поле для timestamp)
    $sql = "INSERT INTO user_request (name, phone, created_at) VALUES (?, ?, NOW())";
    $stmt = $connect->prepare($sql);

    if ($stmt === false) {
        http_response_code(500);
        $error_message = 'Ошибка подготовки запроса: ' . $connect->error;
        error_log("Ошибка: " . $error_message);
        echo json_encode(['success' => false, 'error' => $error_message]);
        exit;
    }

    $stmt->bind_param("ss", $name, $phone);

    if ($stmt->execute()) {
        $success_message = 'Ваша заявка успешно отправлена! Мы свяжемся с вами в ближайшее время.';
        error_log("Успех: " . $success_message);
        echo json_encode([
            'success' => true, 
            'message' => $success_message,
            'data' => [
                'name' => $name,
                'phone' => $phone,
                'timestamp' => date('Y-m-d H:i:s')
            ]
        ]);
    } else {
        http_response_code(500);
        $error_message = 'Ошибка при сохранении заявки: ' . $stmt->error;
        error_log("Ошибка: " . $error_message);
        echo json_encode(['success' => false, 'error' => $error_message]);
    }

    $stmt->close();
} else {
    http_response_code(405);
    $error_message = 'Метод не поддерживается. Используйте POST.';
    error_log("Ошибка: " . $error_message);
    echo json_encode(['success' => false, 'error' => $error_message]);
}

$connect->close();
?>