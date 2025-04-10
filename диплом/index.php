<?php
    session_start();
    include("inc/header.php");
?>
<main>
    <!--О нас-->
    <section>
        <div class="about_block fixed-container">
            <div class="opis_block">
                <h1>Производим и устанавливаем окна <br> с гарантией качества</h1>
                <h2>Окна, произведенные нашей компанией, сочетают в себе современные технологии и высокое качество. Они не только обеспечивают комфорт и энергоэффективность, но и создают уют в домах наших клиентов на долгие годы.</h2>
                <div class="about_banner"></div>
            </div>
            <div class="req_block">
                <div class="req_frame">
                    <img src="assets/img/about_cachestvo.png" alt="about_cachestvo">
                    <div class="req_title">
                        <h2>Высокое качество продукции</h2>
                        <h3>используем только надежные <br> материалы и современные технологии <br>  для производства окон.</h3>
                    </div>
                </div>
                <div class="req_frame">
                    <img src="assets/img/about_montaj.png" alt="about_montaj">
                    <div class="req_title">
                        <h2>Профессиональный монтаж</h2>
                        <h3>гарантируем точность установки <br>и долговечность конструкции.</h3>
                    </div>
                </div>
                <div class="req_frame">
                    <img src="assets/img/about_podhod.png" alt="about_podhod">
                    <div class="req_title">
                        <h2>Индивидуальный подход</h2>
                        <h3>предлагаем решения, полностью <br> соответствующие вашим <br>потребностям и требованиям.</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--Каталог-->
    <section>
        <div class="catalog_block fixed-container">
            <h1>Каталог наших проектов</h1>
            <h2>Широкий выбор окон для любого стиля и дизайна. Высокое качество, <br> отличная изоляция и энергоэффективность.</h2>
            <div class="catalog_frame">
                <div class="img_container">
                    <img src="assets/img/catalog_1.png" alt="Остекление жилого дома">
                    <p class="caption">Остекление жилого дома</p>
                </div>
                <div class="img_container">
                    <img src="assets/img/catalog_2.png" alt="Алюминиевые витражи">
                    <p class="caption">Алюминиевые витражи</p>
                </div>
                <div class="img_container">
                    <img src="assets/img/catalog_3.png" alt="Многоквартирные дома">
                    <p class="caption">Многоквартирные дома</p>
                </div>
                <div class="img_container">
                    <img src="assets/img/catalog_4.png" alt="Остекление балконов">
                    <p class="caption">Остекление балконов</p>
                </div>
            </div>
        </div>
        <div id="fullScreenModal" class="full-screen-modal">
            <div class="full-screen-content">
                <span class="close-full-screen">&times;</span>
                <p id="fullScreenCaption" class="full-screen-caption"></p>
                <img class="full-screen-image" id="fullScreenImage" src="" alt="">
                <div class="arrow arrow-left">&lt;</div>
                <div class="arrow arrow-right">&gt;</div>
            </div>
        </div>
    </section>

    <!--Квиз-->
    <section>
        <div class="kviz_block fixed-container">
            <h1>За 1 минуту пройдите тест и получите подборку <br>подходящих для себя оконных конструкций</h1>
            <h2>Бонус за прохождение опроса бесплатная доставка и москитная сетка в подарок</h2>
        </div>
    </section>

    <!--Работы по остеклению-->
    <section>
        <div class="work_block fixed-container">
            <h1>Работы по остеклению <br>Вашего объекта выполняются от 5 дней</h1>
            <div class="work_frame">
                <div class="work_group">
                    <p>1 день</p>
                    <div class="group">
                        <div class="frame">
                            <img src="assets/img/rabota_1.svg" alt="rabota_1">
                            <p>Заявка</p>
                        </div>
                        <div class="frame">
                            <img src="assets/img/rabota_2.svg" alt="rabota_2">
                            <p>Бесплатный замер</p>
                        </div>
                    </div>
                </div>
                <div class="work_group">
                    <p>7-14 дней</p>
                    <div class="group">
                        <div class="frame">
                            <img src="assets/img/rabota_3.svg" alt="rabota_3">
                            <p>Расчет стоимости</p>
                        </div>
                        <div class="frame">
                            <img src="assets/img/rabota_4.svg" alt="rabota_4">
                            <p>Внесение предоплаты</p>
                        </div>
                        <div class="frame">
                            <img src="assets/img/rabota_5.svg" alt="rabota_5">
                            <p>Изготовление</p>
                        </div>
                    </div>
                </div>
                <div class="work_group">
                    <p>1-2 дня</p>
                    <div class="group">
                        <div class="frame">
                            <img src="assets/img/rabota_6.svg" alt="rabota_6">
                            <p>Доставка и  монтаж</p>
                        </div>
                        <div class="frame">
                            <img src="assets/img/rabota_7.svg" alt="rabota_7">
                            <p>Постоплата</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--Контакты-->
    <section></section>
</main>
<?php
    include("inc/footer.php");
?>