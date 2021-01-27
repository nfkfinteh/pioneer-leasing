<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("description", "Контакты: Пионер-Лизинг, лизинговые услуги для физических, юридических лиц, ИП на выгодных условиях");
$APPLICATION->SetPageProperty("title", "Контакты | ООО «Пионер-Лизинг»");
$APPLICATION->SetTitle("Контакты");
?>
<main role="main" class="pt-menu">
    <div class="static-big-map">
        <div class="yandex_map" id="wrapMap">
            <iframe style="pointer-events: none;" src="https://yandex.ru/map-widget/v1/?um=constructor%3A2e498709b5f8a25413d014a0713912bc95f1b470dc9f2f0651d3dfca4df326c2&amp;source=constructor" width="100%"  frameborder="0"></iframe>
        </div>
        <div class="container">
            <div class="d-flex justify-content-center align-items-end flex-column">
                <div class="map-ticket">
                    <div class="map-contacts">
                        <h1>
                            <?$APPLICATION->ShowTitle(false)?>
                        </h1>
                        <div class="map-contacts__content">
                            <div class="map-contacts__left">
                                <span class="map-contacts__label">
                                    <?$APPLICATION->IncludeComponent("bitrix:main.include", "", array(
                                        "AREA_FILE_SHOW" => "file",
                                        "PATH" => SITE_TEMPLATE_PATH."/include_areas/contacts/addr_title.php",
                                    ));?>
                                </span>
                                <p>
                                    <?$APPLICATION->IncludeComponent("bitrix:main.include", "", array(
                                        "AREA_FILE_SHOW" => "file",
                                        "PATH" => SITE_TEMPLATE_PATH."/include_areas/contacts/company_full.php",
                                    ));?>
                                </p>
                                <p>
                                    <?$APPLICATION->IncludeComponent("bitrix:main.include", "", array(
                                        "AREA_FILE_SHOW" => "file",
                                        "PATH" => SITE_TEMPLATE_PATH."/include_areas/contacts/addr.php",
                                    ));?>
                                </p>
                                <p>
                                    <?$APPLICATION->IncludeComponent("bitrix:main.include", "", array(
                                        "AREA_FILE_SHOW" => "file",
                                        "PATH" => SITE_TEMPLATE_PATH."/include_areas/contacts/work_time.php",
                                    ));?>
                                </p>
                                <span class="map-contacts__label">
                                    <?$APPLICATION->IncludeComponent("bitrix:main.include", "", array(
                                        "AREA_FILE_SHOW" => "file",
                                        "PATH" => SITE_TEMPLATE_PATH."/include_areas/contacts/phone_title.php",
                                    ));?>
                                </span>
                                <p>
                                    <?$APPLICATION->IncludeComponent("bitrix:main.include", "", array(
                                        "AREA_FILE_SHOW" => "file",
                                        "PATH" => SITE_TEMPLATE_PATH."/include_areas/contacts/form_phone.php",
                                    ));?>
                                </p>
                                <span class="map-contacts__label">
                                    <?$APPLICATION->IncludeComponent("bitrix:main.include", "", array(
                                        "AREA_FILE_SHOW" => "file",
                                        "PATH" => SITE_TEMPLATE_PATH."/include_areas/contacts/email_title.php",
                                    ));?>
                                </span>
                                <p>
                                    <?$APPLICATION->IncludeComponent("bitrix:main.include", "", array(
                                        "AREA_FILE_SHOW" => "file",
                                        "PATH" => SITE_TEMPLATE_PATH."/include_areas/contacts/email.php",
                                    ));?>
                                </p>
                            </div>
                            <div class="map-contacts__right">
                                <h3>
                                    <?$APPLICATION->IncludeComponent("bitrix:main.include", "", array(
                                        "AREA_FILE_SHOW" => "file",
                                        "PATH" => SITE_TEMPLATE_PATH."/include_areas/forms/consultation_title.php",
                                    ));?>
                                </h3>
                                <?$APPLICATION->IncludeComponent(
                                	"pioneer_custom:main.feedback",
                                	"pioneer_callback_form_map",
                                	array(
                                		"COMPONENT_TEMPLATE" => "pioneer_callback_form_map",
                                		"EMAIL_TO" => "mail@pioneer-leasing.ru",
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
                    <div class="map-requisites">
                        <div class="map-requisites__content">
                            <h2>
                                <?$APPLICATION->IncludeComponent("bitrix:main.include", "", array(
                                    "AREA_FILE_SHOW" => "file",
                                    "PATH" => SITE_TEMPLATE_PATH."/include_areas/contacts/requisites_title.php",
                                ));?>
                            </h2>
                            <div class="d-inline-block mr-4">
                                <span class="text-gray">
                                    <?$APPLICATION->IncludeComponent("bitrix:main.include", "", array(
                                        "AREA_FILE_SHOW" => "file",
                                        "PATH" => SITE_TEMPLATE_PATH."/include_areas/contacts/inn_title.php",
                                    ));?>
                                </span>
                                <br>
                                <?$APPLICATION->IncludeComponent("bitrix:main.include", "", array(
                                    "AREA_FILE_SHOW" => "file",
                                    "PATH" => SITE_TEMPLATE_PATH."/include_areas/contacts/inn.php",
                                ));?>
                            </div>
                            <div class="d-inline-block mr-4">
                                <span class="text-gray">
                                    <?$APPLICATION->IncludeComponent("bitrix:main.include", "", array(
                                        "AREA_FILE_SHOW" => "file",
                                        "PATH" => SITE_TEMPLATE_PATH."/include_areas/contacts/kpp_title.php",
                                    ));?>
                                </span>
                                <br>
                                <?$APPLICATION->IncludeComponent("bitrix:main.include", "", array(
                                    "AREA_FILE_SHOW" => "file",
                                    "PATH" => SITE_TEMPLATE_PATH."/include_areas/contacts/kpp.php",
                                ));?>
                            </div>
                            <div class="d-inline-block mr-4">
                                <span class="text-gray">
                                    <?$APPLICATION->IncludeComponent("bitrix:main.include", "", array(
                                        "AREA_FILE_SHOW" => "file",
                                        "PATH" => SITE_TEMPLATE_PATH."/include_areas/contacts/ogrn_title.php",
                                    ));?>
                                </span>
                                <br>
                                <?$APPLICATION->IncludeComponent("bitrix:main.include", "", array(
                                    "AREA_FILE_SHOW" => "file",
                                    "PATH" => SITE_TEMPLATE_PATH."/include_areas/contacts/ogrn.php",
                                ));?>
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