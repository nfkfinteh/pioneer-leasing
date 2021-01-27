<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("description", "Пионер-реклама");
$APPLICATION->SetPageProperty("title", "Пионер-реклама | ООО «Пионер-Лизинг»");
$APPLICATION->SetTitle("Пионер-реклама");
$APPLICATION->SetPageProperty("header-class", "header_transparent top");
$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH.'/css/css-reklama/style.css');
$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH.'/css/css-reklama/animate.css');
$APPLICATION->SetAdditionalCSS('https://unpkg.com/swiper/swiper-bundle.min.css');
$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH.'/js/js-reklama/script.js');
$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH.'/js/js-reklama/input-mask.js');
$APPLICATION->AddHeadScript('https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js');
$APPLICATION->AddHeadScript('https://unpkg.com/swiper/swiper-bundle.min.js');
$APPLICATION->AddHeadScript('https://api-maps.yandex.ru/2.1/?apikey=4a2d30b7-f8d1-47b8-b31a-dd40270bd104&lang=ru_RU');
?>
<main role="main">
<div class="main">
    <div class="video-bg">
        <video autoplay muted loop class="video">
            <source src="<?=SITE_TEMPLATE_PATH.'/img/video-reklama/pioneer.mp4'?>" type="video/mp4">
        </video>
    </div>
    <div class="main_containernb">
        <div class="main-offer_containernb">
            <h1>Рекламные конструкции в Чебоксарах</h1>
            <p>Оставь заявку и получи адресную программу с ценами в течении 5 минут!</p>
            <form action="">
                <input class="input-text" type="text" placeholder="Введите ваши контакты">
                <input class="button" type="submit" value="Получить">
            </form>
        </div>
    </div>
</div>
<div class="preim">
    <h2>Эффективная реклама в Чебоксарах</h2>
    <p>Оцените наши возможности для решения широкого спектра задач Вашей организации!</p>
    <div class="preim_containernb containernb">
        <div class="preim_item fade-in-right wow">
            <div class="preim_item__img">
                <img src="<?=SITE_TEMPLATE_PATH.'/img/img-reklama/money.png'?>" alt="">
            </div>
            <h4>0.01 рубля</h4>
            <p>Стоимость медиконтакта</p>
        </div>
        <div class="preim_item fade-in-right wow">
            <div class="preim_item__img">
                <img src="<?=SITE_TEMPLATE_PATH.'/img/img-reklama/ppls.png'?>" alt="">
            </div>
            <h4>1 миллион</h4>
            <p>Суммарная аудитория всех поверхностей</p>
        </div>
        <div class="preim_item fade-in-left wow">
            <div class="preim_item__img">
                <img src="<?=SITE_TEMPLATE_PATH.'/img/img-reklama/mega.png'?>" alt="">
            </div>
            <h4>55 млн</h4>
            <p>Медиаконтактов в месяц</p>
        </div>
        <div class="preim_item fade-in-left wow">
            <div class="preim_item__img">
                <img src="<?=SITE_TEMPLATE_PATH.'/img/img-reklama/desc.png'?>" alt="">
            </div>
            <h4>48</h4>
            <p>Собственных поверхностей</p>
        </div>
    </div>
</div>
<div class="map">
    <div id="map" style="width: 100%;"></div>
</div>
<div class="desc">
    <div class="desc_containernb containernb">
        <div class="desc_item">
            <h4>Наружная реклама</h4>
            <p>- это способ заявить о себе на динамичном, высококонкурентном рынке. Это визитная карточка Вашей
                компании. Это то, что видит в первую очередь потенциальный покупатель.
                Он видит её считанные секунды, и именно в эти секунды принимается очень важное для нас решение -
                покупать или всё-таки не покупать.
                Согласитесь, важность этого решения трудно переоценить!</p>
        </div>
        <div class="desc_item">
            <h4>Наши рекламные щиты</h4>
            <p>расположены по всему городу в тех местах, где Ваша реклама будет наиболее заметна.</p>
        </div>
    </div>
    <div class="desk-img">
        <img src="<?=SITE_TEMPLATE_PATH.'/img/img-reklama/desc-img.png'?>" alt="">
    </div>
</div>
<div class="more-desc">
    <h2>ООО "Пионер-Лизинг" - это современное агентство</h2>
    <div class="more-desc_containernb containernb">
        <div class="more-desc_img">
            <img src="<?=SITE_TEMPLATE_PATH.'/img/img-reklama/ruslan.png'?>" alt="">
        </div>
        <div class="more-desc_item">
            <p>С 2013 года ООО "Пионер-Лизинг" является собственником поверхностей, предоставляя их рекламодателям на
                любой, в том числе длительный срок.
                За время сотрудничества в сфере наружной рекламы мы выработали уникальный сервис и высокое качество
                предоставления рекламных услуг.</p>
            <p><a href="https://pioneer-leasing.ru/">ООО "Пионер-Лизинг"</a> - это многопрофильная организация,
                занимающаяся предоставлением лизинга и аренды, в том числе рекламных щитов в г.Чебоксары.</p>
        </div>
    </div>
</div>
<div class="actual">
    <div class="actual-dark">
        <div class="actual_containernb containernb">
            <h2 class="fade-in-bottom wow">Актуальность поверхностей на сегодня</h2>
            <p class="fade-in-bottom wow">Укажите адрес электронной почты и получите адресную программу со свободными
                щитами и актуальными ценами</p>
            <button class="button fade-in-bottom wow button-js">Получить</button>
        </div>
    </div>
</div>
<div class="rent-shld">
    <h2 class="fade-in-top wow">Как арендовать щит?</h2>
    <div class="rent-shld_containernb">
        <div class="rent-shld_item fade-in-top wow">
            <h5>Выберите рекламный щит</h5>
            <p>Вас заинтересовал определённый щит, но Вы не знаете свободен ли он? Оставьте электронную почту и мы
                вышлем актуальную адресную программу</p>
        </div>
        <div class="rent-shld_item fade-in-top wow">
            <h5>Дизайн и печать</h5>
            <p>Щит свободен? Тогда делаем для Вас красочный дизайн и печатаем баннер, согласно Вашим предпочтениям</p>
        </div>
        <div class="rent-shld_item fade-in-top wow">
            <h5>Подписываем договор</h5>
            <p>Пока согласованный баннер будут монтировать, мы с Вами успеем подписать договор</p>
        </div>
        <div class="rent-steps">
            <span>1</span>
            <span>2</span>
            <span>3</span>
        </div>
        <div class="rent-shld_btn">
            <button class="button button-js">Забронировать</button>
        </div>
    </div>
</div>
<div class="print">
    <div class="actual-dark">
        <div class="actual_containernb containernb">
            <h2 class="fade-in-bottom wow">Печать и монтаж баннера</h2>
            <p class="fade-in-bottom wow">Так же у нас вы сможете заказать печать вашего баннера по низким ценам в
                г.Чебоксары. Это достигается за счёт партнерских отношений с ведущими типографиями г.Чебоксары, которые
                предоставляют нам существенные скидки!</p>
            <p class="fade-in-bottom wow">Монтаж баннеров происходит исключительно в согласованное время, без задержек.
            </p>
            <button class="button fade-in-bottom wow button-js">Заказать печать</button>
        </div>
    </div>
</div>
<div class="our-clients" id="contacts">
    <div class="our-clients_heading">
        <h2>Наши клиенты</h2>
        <p>Нас выбирают крупнейшие компании в своих отраслях</p>
    </div>
    <div class="slider_containernb">
        <div class="swiper-container">
            <div class="swiper-wrapper">
                <!-- Slides -->
                <div class="swiper-slide swiper-slide-center"><img
                        src="<?=SITE_TEMPLATE_PATH.'/img/img-reklama/slide1.png'?>" alt=""></div>
                <div class="swiper-slide swiper-slide-center"><img
                        src="<?=SITE_TEMPLATE_PATH.'/img/img-reklama/slide2.png'?>" alt=""></div>
                <div class="swiper-slide swiper-slide-center"><img
                        src="<?=SITE_TEMPLATE_PATH.'/img/img-reklama/slide3.png'?>" alt=""></div>
                <div class="swiper-slide swiper-slide-center"><img
                        src="<?=SITE_TEMPLATE_PATH.'/img/img-reklama/slide4.png'?>" alt=""></div>
                <div class="swiper-slide swiper-slide-center"><img
                        src="<?=SITE_TEMPLATE_PATH.'/img/img-reklama/slide5.png'?>" alt=""></div>
                <div class="swiper-slide swiper-slide-center"><img
                        src="<?=SITE_TEMPLATE_PATH.'/img/img-reklama/slide6.png'?>" alt=""></div>
                <div class="swiper-slide swiper-slide-center"><img
                        src="<?=SITE_TEMPLATE_PATH.'/img/img-reklama/slide7.png'?>" alt=""></div>
                <div class="swiper-slide swiper-slide-center"><img
                        src="<?=SITE_TEMPLATE_PATH.'/img/img-reklama/slide8.png'?>" alt=""></div>
                <div class="swiper-slide swiper-slide-center"><img
                        src="<?=SITE_TEMPLATE_PATH.'/img/img-reklama/slide9.png'?>" alt=""></div>
                <div class="swiper-slide swiper-slide-center"><img
                        src="<?=SITE_TEMPLATE_PATH.'/img/img-reklama/slide10.png'?>" alt=""></div>
                <div class="swiper-slide swiper-slide-center"><img
                        src="<?=SITE_TEMPLATE_PATH.'/img/img-reklama/moloko.png'?>" alt=""></div>
                <!-- If we need navigation buttons -->
            </div>
        </div>
        <div class="swiper-button-prev-unique"></div>
        <div class="swiper-button-next-unique"></div>
    </div>
</div>
<div class="overlay overlay-offer">
    <div class="popup">
        <h5>Бронируйте щиты!</h5>
        <p>Получите скидку до 5% и бесплатный монтаж!</p>
        <form action="">
            <input type="text" placeholder="Ваше имя">
            <input class="email" type="text" placeholder="Ваша электронная почта">
            <input class="inptel" type="tel" placeholder="Ваш номер телефона">
            <input type="text" placeholder="Адрес щита">
            <input type="submit" value="Заказать" class="button">
        </form>
    </div>
    <div class="close"></div>
</div>
<div class="overlay overlay-btn">
    <div class="popup">
        <h5>Оставьте заявку</h5>
        <p>Мы ответим в течении 10 минут!</p>
        <form action="">
            <input type="text" placeholder="Ваше имя">
            <input class="email" type="text" placeholder="Ваша электронная почта">
            <input class="inptel" type="tel" placeholder="Ваш номер телефона">
            <input type="text" placeholder="Адрес щита">
            <input type="submit" value="Отправить" class="button">
        </form>
    </div>
    <div class="close"></div>
</div>
</main>
 <?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>