<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Лизинг автобусов");
?>
<main role="main">
	<div class="bg-gradient bg-gradient_bus pt-menu">
		<div class="top-banner container">
			<div class="top-banner__breadcrumbs">
				<?$APPLICATION->IncludeComponent(
               "pioneer_custom:breadcrumb",
               "",
               Array(
                  "PATH" => "",
                  "SITE_ID" => "wb",
                  "START_FROM" => "0"
               )
            );?>
			</div>
			<h1 class="top-banner__title">Лизинг<br>автобусов</h1>
			<div class="row">
				<div class="col-xl-8">
					<div class="row">
						<div class="top-banner__list col-12 col-md-6 col-xxl-4">
							<div class="top-banner__list-title">Объекты лизинга</div>
							<div class="top-banner__list-description">Туристические, междугородние и городские автобусы от российского и импортного производства</div>
						</div>
						<div class="top-banner__list col-12 col-md-6 col-xxl-4">
							<div class="top-banner__list-title">Срок лизинга</div>
							<div class="top-banner__list-description">до 5 лет</div>
						</div>
						<div class="top-banner__list col-12 col-md-6 col-xxl-4">
							<div class="top-banner__list-title">Объем сделки</div>
							<div class="top-banner__list-description">от 300 тыс. до 100 млн руб.</div>
						</div>
						<div class="col-12 col-md-6 col-xxl-4 mb-5">
							<div class="top-banner__list-title">Авансовый платеж</div>
							<div class="top-banner__list-description">от 0%</div>
						</div>
						<div class="top-banner__list col-12 col-md-6 col-xxl-4">
							<div class="top-banner__list-title">Удорожание от общей стоимости имущества в год</div>
							<div class="top-banner__list-description">от 2%</div>
						</div>
						<div class="top-banner__list col-12 col-md-6 col-xxl-4">
							<div class="top-banner__list-title">Лизингополучатель</div>
							<div class="top-banner__list-description">Юридические лица (ООО, ЗАО и прочие формы собственности) и индивидуальные предприниматели</div>
						</div>
                    </div>
                    <div class="col-12 col-md-6">
                        <a href = "#contacts"><button class="btn btn-main btn-255 mt-n4" type="button">Оставить заявку</button></a>
                        <div class="top-banner__minitext">
                            <p class="top-banner__minitext-p">Лизингополучатель обязан застраховать предмет аренды от рисков утраты, повреждения на полную стоимость без франшизы на весь срок договора + 1 месяц.</p>
                            <p class="top-banner__minitext-p">Сумма платежей может быть изменена Лизингодателем в порядке, предусмотренном законом.</p>
                        </div>
                    </div>
				</div>
			</div>
		</div>
	</div>
	<div class="container container-2">
		<div class="block-h2">
			<h2 class="header-width">Перечень документов для оформления договора лизинга:</h2>
			<div class="row">
				<div class="col-12 col-md-6 col-lg-4 col-xxl-3">
					<a href="/upload/docs/leasing-for-ip.docx" class="document">
						<div class="document__title">Лизинг для ИП</div>
						<div class="document__description">(.docx - <?php
                        
                        $filename = $_SERVER['DOCUMENT_ROOT'].'/upload/docs/' . 'leasing-for-ip.docx';
                        echo sprintf('%01.2f', @filesize($filename) / 1048576);

                        ?>Mb)</div>
					</a>
				</div>
				<div class="col-12 col-md-6 col-lg-4 col-xxl-3">
					<a href="/upload/docs/leasing-for-yl.docx" class="document">
						<div class="document__title">Лизинг для юридических лиц</div>
						<div class="document__description">(.docx - <?php
                        
                        $filename = $_SERVER['DOCUMENT_ROOT'].'/upload/docs/' . 'leasing-for-yl.docx';
                        echo sprintf('%01.2f', @filesize($filename) / 1048576);

                        ?>Mb)</div>
					</a>
				</div>
				<div class="col-12 col-md-6 col-lg-4 col-xxl-3">
					<a href="/upload/docs/leasing-for-fl.docx" class="document">
						<div class="document__title">Лизинг для физических лиц</div>
						<div class="document__description">(.docx - <?php
                        
                        $filename = $_SERVER['DOCUMENT_ROOT'].'/upload/docs/' . 'leasing-for-fl.docx';
                        echo sprintf('%01.2f', @filesize($filename) / 1048576);

                        ?>Mb)</div>
					</a>
				</div>
			</div>
			<p class="text-gray font-weight-light mt-5">Если скачать не получается, пожалуйста, свяжитесь с нами по телефонам:<br>
			+7 (8352) 45-89-89, 45-45-60, и мы предоставим Вам списки необходимых документов.</p>
		</div>
	</div>
	<div class="bg-gray">
		<div class="container container-2">
			<div class="block-h2">
				<h2 class="header-width">Лизинг с особыми преимуществами</h2>
				<div class="row mt-5">
					<div class="col-12 col-md-6">
						<p>ООО «Пионер-Лизинг» предоставляет в лизинг юридическим лицам и индивидуальным предпринимателям автобусы для городских и междугородних пассажирских перевозок, а также для работы на туристических и экскурсионных маршрутах.</p>
						<p>Мы предлагаем в лизинг различные модели автобусов от известных производителей – как отечественных, так и зарубежных марок (Yutong, Zhong Tong, Higer, King Long, Ankai, ПАЗ, КАВЗ, ЛиАЗ, НефАЗ, ЛАЗ, МАЗ, VolgaBus, Hyundai, Mercedes-Benz, FOXBUS и др.). Исходя из Ваших потребностей, мы поможем подобрать для Вас оптимальную модель автобуса и предложим наиболее выгодный вариант приобретения объекта в лизинг в кратчайшие сроки, с минимальным пакетом документов.</p>
					</div>
					<div class="col-12 col-md-6">
						<p>Мы всегда учитываем пожелания наших клиентов, поэтому предлагаем индивидуальные графики лизинговых платежей, минимальный авансовый платеж – от 0% и низкий процент удорожания. Для постоянных клиентов мы предоставляем специальные цены и дополнительные условия по сервису.</p>
						<p>Вы можете приобрести в лизинг на выгодных условиях как новые автобусы, так и б/у автобусы с пробегом в отличном состоянии (с тщательной предпродажной подготовкой) от надежных партнеров-поставщиков.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="static-map">
    <div class="yandex_map" id="wrapMap"><iframe style="pointer-events: none;" src="https://yandex.ru/map-widget/v1/?um=constructor%3A2e498709b5f8a25413d014a0713912bc95f1b470dc9f2f0651d3dfca4df326c2&amp;source=constructor" width="100%"  frameborder="0"></iframe></div>
        <div class="container">
            <div class="d-flex justify-content-end align-items-center">
                <div class="map-ticket">
                    <div class="map-contacts">
                        <h2>Контакты</h2>
                        <div class="map-contacts__content">
                            <div class="map-contacts__left">
                                <span class="map-contacts__label">Адрес</span>
                                <p>Общество с ограниченной ответственностью «Пионер-Лизинг»</p>
                                <p>428001, г. Чебоксары, пр-т М. Горького, д. 5, корп. 2</p>
                                <p>Пн-Пт 09:00-18:00</p>
                                <span class="map-contacts__label">Телефон</span>
                                <p><a href="tel:+78352458989">+7 (8352) <span class="h3">45-89-89</span></a><span
                                        class="h3">, </span><a href="tel:454560"><span class="h3">45-45-60</span></a></p>
                                <span class="map-contacts__label">E-mail</span>
                                <p><a href="mailto:mail@pioneer-leasing.ru">mail@pioneer-leasing.ru</a></p>
                            </div>
                            <div class="map-contacts__right">
                                <h3>Получить консультацию по лизингу</h3>
                                <?$APPLICATION->IncludeComponent(
                                "pioneer_custom:main.feedback",
                                "pioneer_callback_form_map",
                                array(
                                "COMPONENT_TEMPLATE" => "pioneer_callback_form_map",
                                "EMAIL_TO" => "Onwardtothegoal@gmail.com",
                                "EVENT_MESSAGE_ID" => array(
                                0 => "7",
                                ),
                                "OK_TEXT" => "Спасибо, ваше сообщение принято.",
                                "REQUIRED_FIELDS" => array(
                                0 => "NAME",
                                1 => "PHONE",
                                ),
                                "USE_CAPTCHA" => "N",
                                "AJAX_MODE" => "Y",
                                "AJAX_OPTION_SHADOW" => "N",
                                "AJAX_OPTION_JUMP" => "N",
                                "AJAX_OPTION_STYLE" => "Y",
                                "AJAX_OPTION_HISTORY" => "N"
                                ),
                                false
                                );?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<script>
    // создаём элемент <div>, который будем перемещать вместе с указателем мыши пользователя
    var mapTitle = document.createElement('div'); mapTitle.className = 'mapTitle';
    // вписываем нужный нам текст внутрь элемента
    mapTitle.textContent = 'Нажмите для активации карты';
    // добавляем элемент с подсказкой последним элементов внутрь нашего <div> с id wrapMap
    wrapMap.appendChild(mapTitle);
    // по клику на карту
    wrapMap.onclick = function() {
        // убираем атрибут "style", в котором прописано свойство "pointer-events"
        this.children[0].removeAttribute('style');
        // удаляем элемент с интерактивной подсказкой
        mapTitle.parentElement.removeChild(mapTitle);
    }
    // по движению мыши в области карты
    wrapMap.onmousemove = function(event) {
        // показываем подсказку
        mapTitle.style.display = 'block';
        // двигаем подсказку по области карты вместе с мышкой пользователя
        if(event.offsetY > 10) mapTitle.style.top = event.offsetY + 20 + 'px';
        if(event.offsetX > 10) mapTitle.style.left = event.offsetX + 20 + 'px';
    }
    // при уходе указателя мыши с области карты
    wrapMap.onmouseleave = function() {
        // прячем подсказку
        mapTitle.style.display = 'none';
    }
</script>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>