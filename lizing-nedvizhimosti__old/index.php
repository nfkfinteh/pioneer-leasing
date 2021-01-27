<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Лизинг недвижимости");
?>

<main role="main">
	<div class="bg-gradient bg-gradient_house pt-menu">
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
			<h1 class="top-banner__title">Лизинг<br>недвижимости</h1>
			<div class="row">
				<div class="col-xl-8">
					<div class="row">
						<div class="top-banner__list col-12 col-md-6 col-xxl-4">
							<div class="top-banner__list-title">Объекты лизинга</div>
							<div class="top-banner__list-description">Здания и помещения коммерческого назначения (производственные, офисные, складские, торговые и др.)</div>
						</div>
						<div class="top-banner__list col-12 col-md-6 col-xxl-4">
							<div class="top-banner__list-title">Срок лизинга</div>
							<div class="top-banner__list-description">до 25 лет</div>
						</div>
						<div class="top-banner__list col-12 col-md-6 col-xxl-4">
							<div class="top-banner__list-title">Объем сделки</div>
							<div class="top-banner__list-description">от 300 тыс. до 100 млн руб.</div>
						</div>
						<div class="col-12 col-md-6 col-xxl-4 mb-5">
							<div class="top-banner__list-title">Авансовый платеж</div>
							<div class="top-banner__list-description">от 10%</div>
						</div>
						<div class="top-banner__list col-12 col-md-6 col-xxl-4">
							<div class="top-banner__list-title">Удорожание от общей стоимости имущества в год</div>
							<div class="top-banner__list-description">от 8%</div>
						</div>
						<div class="top-banner__list col-12 col-md-6 col-xxl-4">
							<div class="top-banner__list-title">Лизингополучатель</div>
							<div class="top-banner__list-description">Юридические лица (ООО, ЗАО и прочие формы собственности), индивидуальные предприниматели</div>
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
					<a href="/upload/docs/leasing-real-for-ip.docx" class="document">
						<div class="document__title">Лизинг для ИП</div>
						<div class="document__description">(.docx - <?php
                        
                        $filename = $_SERVER['DOCUMENT_ROOT'].'/upload/docs/' . 'leasing-real-for-ip.docx';
                        echo sprintf('%01.2f', @filesize($filename) / 1048576);

                        ?>Mb)</div>
					</a>
				</div>
				<div class="col-12 col-md-6 col-lg-4 col-xxl-3">
					<a href="/upload/docs/leasing-real-for-yl.docx" class="document">
						<div class="document__title">Лизинг для юридических лиц</div>
						<div class="document__description">(.docx - <?php
                        
                        $filename = $_SERVER['DOCUMENT_ROOT'].'/upload/docs/' . 'leasing-real-for-yl.docx';
                        echo sprintf('%01.2f', @filesize($filename) / 1048576);

                        ?>Mb)</div>
					</a>
				</div>
				<div class="col-12 col-md-6 col-lg-4 col-xxl-3">
					<a href="/upload/docs/leasing-real-for-fl.docx" class="document">
						<div class="document__title">Лизинг для физических лиц</div>
						<div class="document__description">(.docx - <?php
                        
                        $filename = $_SERVER['DOCUMENT_ROOT'].'/upload/docs/' . 'leasing-real-for-fl.docx';
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
				<h2 class="header-width">Лизинг коммерческой недвижимости</h2>
				<div class="row mt-5">
					<div class="col-12 col-md-6">
						ООО «Пионер-Лизинг» предлагает в лизинг широкий выбор коммерческой недвижимости для производственных, торговых и административных нужд – это могут быть отдельно стоящие здания или встроенные помещения соответствующего назначения. Данная услуга доступна юридическим лицам и индивидуальным предпринимателям. Мы предложим Вам наиболее выгодную схему приобретения объекта недвижимости в лизинг в день обращения, с удобным графиком платежей.
					</div>
					<div class="col-12 col-md-6">
						Лизинг недвижимости позволяет без крупных единовременных затрат приобрести коммерческую недвижимость для осуществления текущей деятельности Вашей компании, а также эффективно планировать Ваш бизнес. Кроме того, лизинг коммерческой недвижимости – это выгодная альтернатива аренде, поскольку график лизинговых платежей остается фиксированным на весь период действия договора, благодаря чему Вы застрахованы от непредвиденных расходов.
					</div>
				</div>
				<h3 class="header-width mt-5">Приобретение коммерческой недвижимости в лизинг несет в себе ряд неоспоримых преимуществ:</h3>
                <div class="row mt-4">
                    <div class="col-12 col-md-6"><div class="list-style">Вы платите ежемесячные взносы за «свое» имущество – по договору финансовой аренды с последующим выкупом;</div></div>
                    <div class="col-12 col-md-6"><div class="list-style">Вы точно знаете, сколько лизинговых платежей Вам нужно будет внести и какими суммами;</div></div>
                    <div class="col-12 col-md-6"><div class="list-style">Лизинговые платежи признаются расходами лизингополучателя и уменьшают налогооблагаемую базу по налогу на прибыль;</div></div>
                    <div class="col-12 col-md-6"><div class="list-style">Если Ваша компания является плательщиком НДС, то с суммы лизинговых платежей НДС возмещается в полном объеме;</div></div>
                    <div class="col-12 col-md-6"><div class="list-style">При нахождении предмета лизинга на балансе предприятия, Вы, благодаря применению ускоренного механизма амортизации (с коэффициентом до 3), значительно сэкономите на налоге на прибыль;</div></div>
                    <div class="col-12 col-md-6"><div class="list-style">При заключении договора лизинга вы платите от 10% стоимости объекта недвижимости;</div></div>
                </div>
                <div class="row mt-5">
                    <div class="col-12 col-lg-6">
                        Мы предложим вам наиболее выгодную схему приобретения объекта недвижимости в лизинг в день обращения, с удобным графиком платежей.
                    </div>
                </div>
			</div>
		</div>
	</div>
	<div class="container container-2">
		<div class="block-h3">
			<h3 class="header-width">Основные требования</h3>
            <div class="row mt-4">
                <div class="col-12 col-md-6"><div class="list-style">Зарегистрированное в ЕГРП право собственности на объект недвижимости без обременений по распоряжению и использованию;</div></div>
                <div class="col-12 col-md-6"><div class="list-style">Зарегистрированное в ЕГРП право собственности или аренды на земельный участок, занятый предметом лизинга, являющегося отдельно стоящим зданием или сооружением.</div></div>
            </div>
		</div>
	</div>
	<div class="question-block">
        <div class="container">
            <?$APPLICATION->IncludeComponent(
                "pioneer_custom:main.feedback", 
                "pioneer_callback_form", 
                array(
                    "COMPONENT_TEMPLATE" => "pioneer_callback_form",
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
	<div class="container container-2">
		<div class="block-h2">
			<h2 class="header-width">Возвратный лизинг нежилых помещений</h2>
            <div class="row mt-4">
                <div class="col-12 col-md-6">
                    <p class="mt-3">Наша компания одна из немногих, кто занимается возвратным лизингом недвижимости. Его суть заключается в следующем: вы как собственник нежилого помещения сначала продаете его ООО «Пионер-Лизинг», а затем арендуете этот же объект у нас. То есть вы выступаете и в качестве продавца, и в качестве лизингополучателя. В результате меняется лишь собственник имущества, а его пользователем остаетесь вы, получив в свое распоряжение дополнительные средства.</p>
                    <p class="mt-4">В жизни случаются ситуации, когда срочно нужны крупные суммы денег: на открытие собственного дела, поддержание бизнеса, лечение, ремонт, и т.д. Самыми доступными кажутся такие способы получения средств, как кредит под залог недвижимости и просто займ под залог. Среди предлагаемых банками услуг широко распространено кредитование под залог, в основном, только приобретаемой недвижимости, кредитование под залог имеющейся недвижимости является довольно редким и затруднительным, и зачастую сопряжено с дополнительными расходами заемщика в виде страхования, оценки и т.п. Тогда как операция возвратного лизинга позволяет владельцам недвижимости временно высвобождать связанный капитал за счет продажи имущества и одновременно продолжать фактически пользоваться им на правах аренды.</p>
                </div>
                <div class="col-12 col-md-6">
                    <p class="mt-4 mt-md-0">Этот вид лизинга успешно используется для получения денег с последующим вложением в бизнес и прочих нужд, связанных с привлечением крупных сумм: вы можете получить на руки до 80% стоимости вашей недвижимости по договору лизинга. Схема проста: будучи владельцем недвижимости, вы продаете ее ООО «Пионер-Лизинг», и сразу же получаете в аренду с правом выкупа. Полученные деньги вы можете потратить на свое усмотрение, никаких отчетов не требуется. Вас приятно удивят выгодные условия по договору лизинга, отличающиеся от других схем финансирования. Договор заключается на срок до 25 лет с удобным для вас графиком погашения и приемлемыми суммами платежей.</p>
                    <p class="mt-4">Финансирование в форме лизинга серьезно проработано с точки зрения защиты прав клиентов (лизингополучателей) на уровне федерального законодательства. Так, согласно действующему российскому законодательству договоры лизинга недвижимого имущества проходят обязательную государственную регистрацию в Федеральной службе государственной регистрации, кадастра и картографии (Росреестре). Также законодательство предусматривает переход по наследству всех прав на имущество в рамках лизингового договора.</p>
                </div>
            </div>
		</div>
	</div>
	<div class="bg-gray">
		<div class="container container-2">
			<div class="block-h3">
				<div class="row">
					<div class="col-12 col-md-6 col-lg-4">
						<h3>Объекты лизинга</h3>
						<p class="mt-3">Здания и помещения коммерческого назначения (производственные, офисные, складские, торговые и др.)</p>
					</div>
					<div class="col-12 col-md-6 col-lg-4">
						<h3>Срок лизинга</h3>
						<p class="mt-3">до 25 лет</p>
					</div>
					<div class="col-12 col-md-6 col-lg-4">
						<h3>Объем сделки</h3>
						<p class="mt-3">от 300 тыс. до 100 млн руб.</p>
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