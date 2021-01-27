<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
?>
<main role="main">
	<div class="bg-gradient pt-menu" <?$APPLICATION->ShowViewContent('BACKGROUND_PICT_BANNER');?> >
		<div class="top-banner container">
			<div class="top-banner__breadcrumbs">
				<?$APPLICATION->IncludeComponent(
               "bitrix:breadcrumb",
               "",
               Array(
                  "PATH" => "",
                  "SITE_ID" => "s1",
                  "START_FROM" => "0"
               )
            );?>
			</div>
			<?$ElementID = $APPLICATION->IncludeComponent(
				"bitrix:news.detail",
				$templateName,
				Array(
					"DISPLAY_DATE" => $arParams["DISPLAY_DATE"],
					"DISPLAY_NAME" => $arParams["DISPLAY_NAME"],
					"DISPLAY_PICTURE" => $arParams["DISPLAY_PICTURE"],
					"DISPLAY_PREVIEW_TEXT" => $arParams["DISPLAY_PREVIEW_TEXT"],
					"IBLOCK_TYPE" => $arParams["IBLOCK_TYPE"],
					"IBLOCK_ID" => $arParams["IBLOCK_ID"],
					"FIELD_CODE" => $arParams["DETAIL_FIELD_CODE"],
					"PROPERTY_CODE" => $arParams["DETAIL_PROPERTY_CODE"],
					"DETAIL_URL" => $arResult["FOLDER"].$arResult["URL_TEMPLATES"]["detail"],
					"SECTION_URL" => $arResult["FOLDER"].$arResult["URL_TEMPLATES"]["section"],
					"META_KEYWORDS" => $arParams["META_KEYWORDS"],
					"META_DESCRIPTION" => $arParams["META_DESCRIPTION"],
					"BROWSER_TITLE" => $arParams["BROWSER_TITLE"],
					"SET_CANONICAL_URL" => $arParams["DETAIL_SET_CANONICAL_URL"],
					"DISPLAY_PANEL" => $arParams["DISPLAY_PANEL"],
					"SET_LAST_MODIFIED" => $arParams["SET_LAST_MODIFIED"],
					"SET_TITLE" => "Y",
					"MESSAGE_404" => $arParams["MESSAGE_404"],
					"SET_STATUS_404" => $arParams["SET_STATUS_404"],
					"SHOW_404" => $arParams["SHOW_404"],
					"FILE_404" => $arParams["FILE_404"],
					"INCLUDE_IBLOCK_INTO_CHAIN" => $arParams["INCLUDE_IBLOCK_INTO_CHAIN"],
					"ADD_SECTIONS_CHAIN" => $arParams["ADD_SECTIONS_CHAIN"],
					"ACTIVE_DATE_FORMAT" => $arParams["DETAIL_ACTIVE_DATE_FORMAT"],
					"CACHE_TYPE" => $arParams["CACHE_TYPE"],
					"CACHE_TIME" => $arParams["CACHE_TIME"],
					"CACHE_GROUPS" => $arParams["CACHE_GROUPS"],
					"USE_PERMISSIONS" => $arParams["USE_PERMISSIONS"],
					"GROUP_PERMISSIONS" => $arParams["GROUP_PERMISSIONS"],
					"DISPLAY_TOP_PAGER" => $arParams["DETAIL_DISPLAY_TOP_PAGER"],
					"DISPLAY_BOTTOM_PAGER" => $arParams["DETAIL_DISPLAY_BOTTOM_PAGER"],
					"PAGER_TITLE" => $arParams["DETAIL_PAGER_TITLE"],
					"PAGER_SHOW_ALWAYS" => "N",
					"PAGER_TEMPLATE" => $arParams["DETAIL_PAGER_TEMPLATE"],
					"PAGER_SHOW_ALL" => $arParams["DETAIL_PAGER_SHOW_ALL"],
					"CHECK_DATES" => $arParams["CHECK_DATES"],
					"ELEMENT_ID" => $arResult["VARIABLES"]["ELEMENT_ID"],
					"ELEMENT_CODE" => $arResult["VARIABLES"]["ELEMENT_CODE"],
					"SECTION_ID" => $arResult["VARIABLES"]["SECTION_ID"],
					"SECTION_CODE" => $arResult["VARIABLES"]["SECTION_CODE"],
					"IBLOCK_URL" => $arResult["FOLDER"].$arResult["URL_TEMPLATES"]["news"],
					"USE_SHARE" => $arParams["USE_SHARE"],
					"SHARE_HIDE" => $arParams["SHARE_HIDE"],
					"SHARE_TEMPLATE" => $arParams["SHARE_TEMPLATE"],
					"SHARE_HANDLERS" => $arParams["SHARE_HANDLERS"],
					"SHARE_SHORTEN_URL_LOGIN" => $arParams["SHARE_SHORTEN_URL_LOGIN"],
					"SHARE_SHORTEN_URL_KEY" => $arParams["SHARE_SHORTEN_URL_KEY"],
					"ADD_ELEMENT_CHAIN" => (isset($arParams["ADD_ELEMENT_CHAIN"]) ? $arParams["ADD_ELEMENT_CHAIN"] : ''),
					'STRICT_SECTION_CHECK' => (isset($arParams['STRICT_SECTION_CHECK']) ? $arParams['STRICT_SECTION_CHECK'] : ''),
				),
				$component
			);?>

    <? if (!empty($component->arData['SHOW_QUESTIONS_BANNER'])): ?>
    	<div class="question-block custom_question-block ">
            <div class="container">
                <?$APPLICATION->IncludeComponent(
                    "pioneer_custom:main.feedback",
                    "pioneer_callback_form",
                    array(
                        "COMPONENT_TEMPLATE" => "pioneer_callback_form",
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
            <div class="custom_question-image img-h-100">
                <img src="<?= SITE_TEMPLATE_PATH ?>/img/woman-question_simple_v2.png">
            </div>
        </div>
    <? endif; ?>

    <? if (!empty($component->arData['HTML_AFTER_BANNER'])): ?>
    	<div class="container container-2">
    		<div class="block-h2">
                <?= $component->arData['HTML_AFTER_BANNER'] ?>
    		</div>
    	</div>
    <? endif; ?>

    <? if (!empty($component->arData['LAST_BLOCK_DESCRIPTION']['~VALUE'])): ?>
    	<div class="bg-gray">
    		<div class="container container-2">
    			<div class="block-h3">
    				<div class="row">
                        <? foreach ($component->arData['LAST_BLOCK_DESCRIPTION']['~VALUE'] as $key => $propVal): ?>
        					<div class="col-12 col-md-6 col-lg-4">
        						<h3><?= $propVal ?></h3>
        						<p class="mt-3"><?= $component->arData['LAST_BLOCK_DESCRIPTION']['~DESCRIPTION'][$key] ?></p>
        					</div>
                        <? endforeach; ?>
    				</div>
    			</div>
    		</div>
    	</div>
    <? endif; ?>

	<div class="static-map">
        <div class="yandex_map" id="wrapMap"><iframe style="pointer-events: none;
	    filter: brightness(80%);
    -ms-filter: brightness(80%);
    -webkit-filter: brightness(80%);
    -moz-filter: brightness(80%);
    -o-filter: brightness(80%);" src="https://yandex.ru/map-widget/v1/?um=constructor%3A2e498709b5f8a25413d014a0713912bc95f1b470dc9f2f0651d3dfca4df326c2&amp;source=constructor" width="100%"  frameborder="0"></iframe></div>
        <div class="container">
            <div class="d-flex justify-content-end align-items-center">
                <div class="map-ticket">
                    <div class="map-contacts">
                        <h2>
                            <?$APPLICATION->IncludeComponent("bitrix:main.include", "", array(
                                "AREA_FILE_SHOW" => "file",
                                "PATH" => SITE_TEMPLATE_PATH."/include_areas/index/block_contacts_title.php",
                            ));?>
                        </h2>
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