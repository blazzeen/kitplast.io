<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
<div id="content-wrapper">
    <header>
        <div class="header_banner">
            <!--Шапка сайта-->
            <div class="nav_block">
                <div class="company_block">
                    <div class="logo_block">
                        <div class="logotype"></div> <!--Логотип-->
                        <p>Производитель пластиковых <br> и алюминиевых конструкций</p>
                    </div>
                    <div class="phone_block">
                        <span>Звоните</span>
                        <p>8 (917) 799-69-68</p>
                        <span>Ежедневно с 9:00-21:00</span>
                    </div>
                </div>
                <div class="location_block">
                    <div class="location_img"></div>
                    <p>Стерлитамак</p>
                </div>
            </div>
            <!--Приветствие-->
            <div class="greetings_block">
                <h2>Остекление <br> коттеджей и квартир </h2>
                <h3>В Стерлитамаке и Стерлитамакских районах</h3>
                <h4>стоимостью от 5000 до 30000 за м<sup>2</sup></h4>
                <div class="pro_block">
                    <div class="number_block">
                        <p>17</p>
                        <span><b>лет</b> на рынке <br> остекления</span>
                    </div>
                    <div class="number_block">
                        <p>5</p>
                        <span><b>лет</b> гарантии <br> на монтаж</span>
                    </div>
                    <div class="number_block">
                        <p>2</p>
                        <span><b>дня</b> срок <br> изготовления</span>
                    </div>
                </div>
                <!--Кнопка для вызова модального окна-->
                <button id="openModalBtn">Оставить заявку</button>
               
                <div class="partner_block">
                    <img src="assets/img/partner_grain.png" alt="partner_grain">
                    <img src="assets/img/partner_deceu.png" alt="partner_deceu">
                    <img src="assets/img/partner_rehau.png" alt="partner_rehau">
                </div>
            </div>
        </div><!-- Модальное окно -->
        <div id="myModal" class="modal">
            <div class="modal-content">
                <span class="close">&times;</span>
                <div class="modal_block">
                    
                    <!-- Форма -->
                    <form id="myForm"> 
                        <div class="modal_img"></div>
                        <h2 id="modalTitle">Введите Ваш <br>номер телефона</h2>
                        <h3>и мы Вам перезвоним в ближайшее время</h3>
                        <div class="input-container" style="margin-top:25px">
                            <input type="text" id="name" name="name" placeholder="Ваше имя" required
                                title="Введите ваше полное имя">
                            <div class="input-tooltip">Введите ваше полное имя (например: Иван)</div>
                            <div class="error-message" id="name-error"></div>
                        </div>
                        
                        <div class="input-container">
                            <input type="tel" id="phone" name="phone" placeholder="Ваш номер телефона" required
                                pattern="8\d{10}" title="Номер должен начинаться с 8 и содержать 11 цифр">
                            <div class="input-tooltip">Введите номер в формате 80000000000 (11 цифр, начинается с 8)</div>
                            <div class="error-message" id="phone-error"></div>
                        </div>
                        
                        <button type="submit" id="submitBtn" disabled>Перезвоните мне</button>
                        
                        <div class="checkbox-container">
                            <input type="checkbox" id="policy" name="policy" required>
                            <label for="policy">Я даю <a href="#">согласие на обработку персональных данных</a></label>
                            <div class="error-message" id="policy-error"></div>
                        </div>
                    </form>
                    
                    <!-- Сообщение после отправки -->
                    <div id="thankYouMessage">
                        <div class="modal_block_2">
                            <h2>Спасибо!</h2>
                            <h3>Мы свяжемся с Вами в ближайшее время</h3>
                            <hr class="hr_modal">
                            <h3>Если у Вас срочный вопрос</h3>
                            <h4>Звоните</h4>
                            <div class="num_block">
                                <div class="phone_img"></div>
                                <h4><a href="#">8 (917) 799-69-68</a></h4>
                            </div>
                            <h5>Ежедневно с 9:00-21:00</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    
    
