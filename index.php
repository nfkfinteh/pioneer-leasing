<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("description", "Компания Пионер-Лизинг предлагает различные продукты лизинга для крупного, среднего и малого бизнеса на выгодных условиях и в кратчайшие сроки");
$APPLICATION->SetPageProperty("tags", "лизинг автомобилей, авто в лизинг, лизинг, лизинговые компании, втб 24 лизинг, втб лизинг, каркаде лизинг, лизинг калькулятор, балтийский лизинг, лизинговый калькулятор, европлан лизинг, лизинг официальный сайт");
$APPLICATION->SetPageProperty("title", "Лизинг по всей России - лизинговая компания ООО «Пионер-Лизинг»");
$APPLICATION->SetPageProperty("NOT_SHOW_NAV_CHAIN", "Y");
$APPLICATION->SetTitle("Ставки по лизингу упали");
$APPLICATION->SetPageProperty("header-class", "header_transparent top");
?>
<main role="main">
	<div class="bg-mainpage pt-menu">45678
		<div class="top-carousels container">
			<div class="top-carousels__title">
				<h1 class="top-carousels__title-first top-carousels__title">
					<?php $APPLICATION->ShowTitle(false)?>
				</h1>
				<span class="top-carousels__title-second">
				<?$APPLICATION->IncludeComponent("bitrix:main.include", "", array(
				"AREA_FILE_SHOW" => "file",
				"PATH" => SITE_TEMPLATE_PATH."/include_areas/index/main_banner_subtitle.php",
				));?>
				</span>
			</div>
			<? $APPLICATION->IncludeComponent("bitrix:news.list", "lizing", array(
				"IBLOCK_ID" => LIZING_IBLOCK_ID,
				"IBLOCK_TYPE" => CONTENT_IBLOCK_TYPE,
				"NEWS_COUNT" => UNLIMITED_COUNT,
				"SORT_BY2" => "ACTIVE_FROM",
				"SORT_BY1" => "SORT",
				"SORT_ORDER2" => "DESC",
				"SORT_ORDER1" => "ASC",
				"FIELD_CODE" => array("PREVIEW_PICTURE","DETAIL_PICTURE"),
				"PROPERTY_CODE" => array(""),
				"FILTER_NAME" => "",
				"CHECK_DATES" => "Y",
				"ADD_SECTIONS_CHAIN" => "N",
				"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
				"INCLUDE_SUBSECTIONS" => "Y",
				"AJAX_MODE" => "N",
				"SET_TITLE" => "N",
				"SET_BROWSER_TITLE" => "N",
				"SET_META_DESCRIPTION" => "N",
				"SET_META_KEYWORDS" => "N",
				"SHOW_404" => "N",
				"SET_STATUS_404" => "N",
				"MESSAGE_404" => "",
				"CACHE_TYPE" => CACHE_TYPE,
				"CACHE_TIME" => CACHE_TIME,
				"CACHE_FILTER" => CACHE_FILTER,
				"CACHE_GROUPS" => CACHE_GROUPS,
				"ACTIVE_DATE_FORMAT" => "j F",
			)); ?>



			<a href="#about" class="top-carousels__down-btn order-3"></a>
		</div>
	</div>
	<div class="about" id="about">
		<div class="container">
			<h2>
				<?$APPLICATION->IncludeComponent("bitrix:main.include", "", array(
					"AREA_FILE_SHOW" => "file",
					"PATH" => SITE_TEMPLATE_PATH."/include_areas/about/block_about_title.php",
				));?>
			</h2>
			<div class="row">
				<div class="about__image-block col-12 col-md-6 order-2 order-md-1 ">
				</div>
				<div class="about__text-block col-12 col-md-6 order-1 order-md-2 pt-5">
					<h3 class="mt-5">
						<?$APPLICATION->IncludeComponent("bitrix:main.include", "", array(
							"AREA_FILE_SHOW" => "file",
							"PATH" => SITE_TEMPLATE_PATH."/include_areas/about/block_about_text_title.php",
						));?>
					</h3>
					<p class="mt-4">
						<?$APPLICATION->IncludeComponent("bitrix:main.include", "", array(
							"AREA_FILE_SHOW" => "file",
							"PATH" => SITE_TEMPLATE_PATH."/include_areas/about/block_about_text.php",
						));?>
					</p>
					<?$APPLICATION->IncludeComponent("bitrix:main.include", "", array(
						"AREA_FILE_SHOW" => "file",
						"PATH" => SITE_TEMPLATE_PATH."/include_areas/about/block_about_btn_call_modal_leasing.php",
					));?>
					<?$APPLICATION->IncludeComponent("bitrix:main.include", "", array(
						"AREA_FILE_SHOW" => "file",
						"PATH" => SITE_TEMPLATE_PATH."/include_areas/about/block_about_expert_ranking.php",
					));?>
				</div>
			</div>
		</div>
	</div>

	<? $APPLICATION->IncludeComponent("bitrix:news.list", "advantages", array(
		"IBLOCK_ID" => ADVANTAGES_IBLOCK_ID,
		"IBLOCK_TYPE" => CONTENT_IBLOCK_TYPE,
		"NEWS_COUNT" => UNLIMITED_COUNT,
		"SORT_BY1" => "SORT",
		"SORT_ORDER1" => "ASC",
		"SORT_BY2" => "ACTIVE_FROM",
		"SORT_ORDER2" => "DESC",
		"FIELD_CODE" => array("PREVIEW_PICTURE","DETAIL_PICTURE"),
		"PROPERTY_CODE" => array("IMG"),
		"FILTER_NAME" => "",
		"CHECK_DATES" => "Y",
		"ADD_SECTIONS_CHAIN" => "N",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
		"INCLUDE_SUBSECTIONS" => "Y",
		"AJAX_MODE" => "N",
		"SET_TITLE" => "N",
		"SET_BROWSER_TITLE" => "N",
		"SET_META_DESCRIPTION" => "N",
		"SET_META_KEYWORDS" => "N",
		"SHOW_404" => "N",
		"SET_STATUS_404" => "N",
		"MESSAGE_404" => "",
		"CACHE_TYPE" => CACHE_TYPE,
		"CACHE_TIME" => CACHE_TIME,
		"CACHE_FILTER" => CACHE_FILTER,
		"CACHE_GROUPS" => CACHE_GROUPS,
		"ACTIVE_DATE_FORMAT" => "j F",
	)); ?>

	<div class="question-block custom_question-block">
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
		<div class="custom_question-image">
			<img alt="" src="<?= SITE_TEMPLATE_PATH ?>/img/woman-question_simple_v2.png">
		</div>
	</div>

	<div class="big-news-container">
		<div class="container">
			<?$APPLICATION->IncludeComponent("bitrix:main.include", "", array(
				"AREA_FILE_SHOW" => "file",
				"PATH" => SITE_TEMPLATE_PATH."/include_areas/index/block_news_link_all.php",
			));?>
			<h2>
				<?$APPLICATION->IncludeComponent("bitrix:main.include", "", array(
					"AREA_FILE_SHOW" => "file",
					"PATH" => SITE_TEMPLATE_PATH."/include_areas/index/block_news_title.php",
				));?>
			</h2>
		</div>
		<div class="container">
			<? $APPLICATION->IncludeComponent("bitrix:news.list", "pioneer_main_slider_bottom", array(
				"IBLOCK_ID" => NEWS_IBLOCK_ID,
				"IBLOCK_TYPE" => NEWS_IBLOCK_TYPE,
				"NEWS_COUNT" => "6",
				"SORT_BY1" => "ACTIVE_FROM",
				"SORT_BY2" => "SORT",
				"SORT_ORDER1" => "DESC",
				"SORT_ORDER2" => "ASC",
				"FIELD_CODE" => array("PREVIEW_PICTURE","DETAIL_PICTURE"),
				"PROPERTY_CODE" => array(""),
				"FILTER_NAME" => "",
				"CHECK_DATES" => "Y",
				"ADD_SECTIONS_CHAIN" => "N",
				"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
				"INCLUDE_SUBSECTIONS" => "Y",
				"AJAX_MODE" => "N",
				"SET_TITLE" => "N",
				"SET_BROWSER_TITLE" => "N",
				"SET_META_DESCRIPTION" => "N",
				"SET_META_KEYWORDS" => "N",
				"SHOW_404" => "N",
				"SET_STATUS_404" => "N",
				"MESSAGE_404" => "",
				"CACHE_TYPE" => CACHE_TYPE,
				"CACHE_TIME" => CACHE_TIME,
				"CACHE_FILTER" => CACHE_FILTER,
				"CACHE_GROUPS" => CACHE_GROUPS,
				"ACTIVE_DATE_FORMAT" => "j F",
			)); ?>
		</div>
	</div>


	<div class="partners-container container">
		<h2>
			<?$APPLICATION->IncludeComponent("bitrix:main.include", "", array(
				"AREA_FILE_SHOW" => "file",
				"PATH" => SITE_TEMPLATE_PATH."/include_areas/index/block_clients_title.php",
			));?>
		</h2>
		<? $APPLICATION->IncludeComponent("bitrix:news.list", "pioneer_brands", array(
			"IBLOCK_ID" => PARTNER_IBLOCK_ID,
			"IBLOCK_TYPE" => PARTNER_IBLOCK_TYPE,
			"NEWS_COUNT" => UNLIMITED_COUNT,
			"SORT_BY1" => "SORT",
			"SORT_ORDER1" => "ASC",
			"SORT_BY2" => "ACTIVE_FROM",
			"SORT_ORDER2" => "DESC",
			"FIELD_CODE" => array("PREVIEW_PICTURE","DETAIL_PICTURE"),
			"PROPERTY_CODE" => array(""),
			"FILTER_NAME" => "",
			"CHECK_DATES" => "Y",
			"ADD_SECTIONS_CHAIN" => "N",
			"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
			"INCLUDE_SUBSECTIONS" => "Y",
			"AJAX_MODE" => "N",
			"SET_TITLE" => "N",
			"SET_BROWSER_TITLE" => "N",
			"SET_META_DESCRIPTION" => "N",
			"SET_META_KEYWORDS" => "N",
			"SHOW_404" => "N",
			"SET_STATUS_404" => "N",
			"MESSAGE_404" => "",
			"CACHE_TYPE" => CACHE_TYPE,
			"CACHE_TIME" => CACHE_TIME,
			"CACHE_FILTER" => CACHE_FILTER,
			"CACHE_GROUPS" => CACHE_GROUPS,
		)); ?>
	</div>


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
 <?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
