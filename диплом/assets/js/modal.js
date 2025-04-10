// Открытие/закрытие модального окна
const modal = document.getElementById("myModal");
const openModalBtn = document.getElementById("openModalBtn");
const closeBtn = document.getElementsByClassName("close")[0];
const form = document.getElementById("myForm");
const submitBtn = document.getElementById("submitBtn");

openModalBtn.onclick = function() {
  modal.style.display = "block";
  document.getElementById("myForm").style.display = "flex";
  document.getElementById("thankYouMessage").style.display = "none";
  document.getElementById("myForm").reset();
  document.body.classList.add("modal-open"); // Добавляем класс к body
  validateForm(); // Убедитесь, что эта функция существует и работает корректно
}

closeBtn.onclick = function() {
  modal.style.display = "none";
  document.body.classList.remove("modal-open"); // Удаляем класс с body
}

// Валидация формы в реальном времени
function validateForm() {
    const name = document.getElementById("name").value.trim();
    const phone = document.getElementById("phone").value.trim();
    const policyChecked = document.getElementById("policy").checked;
    
    let isValid = true;
    
    // Валидация имени
    if (name.length < 2) {
        document.getElementById("name-error").textContent = "Имя должно содержать минимум 2 символа";
        document.getElementById("name-error").style.display = "block";
        isValid = false;
    } else {
        document.getElementById("name-error").style.display = "none";
    }
    
    // Валидация телефона
    const phoneRegex = /^8\d{10}$/;
    if (!phoneRegex.test(phone)) {
        document.getElementById("phone-error").textContent = "Номер должен начинаться с 8 и содержать 11 цифр";
        document.getElementById("phone-error").style.display = "block";
        isValid = false;
    } else {
        document.getElementById("phone-error").style.display = "none";
    }
    
    // Валидация чекбокса
    if (!policyChecked) {
        document.getElementById("policy-error").style.display = "block";
        isValid = false;
    } else {
        document.getElementById("policy-error").style.display = "none";
    }
    
    submitBtn.disabled = !isValid;
    return isValid;
}

// Слушатели событий для валидации в реальном времени
form.addEventListener("input", function() {
    validateForm();
});

document.getElementById("policy").addEventListener("change", function() {
    validateForm();
});

// Обработка отправки формы
form.addEventListener("submit", function(e) {
    e.preventDefault();
    
    if (!validateForm()) {
        return;
    }
    
    // Собираем данные формы
    const formData = new FormData(this);
    const data = {};
    formData.forEach((value, key) => {
        data[key] = value;
    });
    
    // Отправка данных на сервер
    fetch('function/save_request.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
        },
        body: JSON.stringify(data)
    })
    .then(response => response.json())
    .then(data => {
        if (data.success) {
            // Скрываем форму и показываем сообщение
            document.getElementById("myForm").style.display = "none";
            document.getElementById("thankYouMessage").style.display = "block";
        } else {
            alert("Произошла ошибка: " + (data.error || 'Неизвестная ошибка'));
        }
    })
    .catch((error) => {
        console.error('Error:', error);
        alert("Произошла ошибка при отправке формы");
    });
});