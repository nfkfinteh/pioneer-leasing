<?
$isShowSecMenu = true;
require_once $_SERVER['DOCUMENT_ROOT'].'/bitrix/header.php';
$APPLICATION->SetTitle("Облигации четвертый выпуск | ООО «Пионер-Лизинг»");
$APPLICATION->SetPageProperty("title", "Облигации четвертый выпуск | ООО «Пионер-Лизинг»");
$APPLICATION->SetPageProperty("description", "Приобрести биржевые облигации ООО «Пионер-Лизинг» 4-го выпуска онлайн");
?>
<main class="pt-double-menu" role="main">
	<div class="container">
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
	<? $APPLICATION->IncludeComponent("bitrix:news.list", "banner", array(
        "IBLOCK_TYPE" => CONTENT_IBLOCK_TYPE,
        "IBLOCK_ID" => BANNERS_INVESTORS_IBLOCK_ID,
        "NEWS_COUNT" => 1,
        "SORT_BY1" => "SORT",
        "SORT_ORDER1" => "ASC",
        "SORT_BY2" => "ACTIVE_FROM",
        "SORT_ORDER2" => "DESC",
        "FIELD_CODE" => array("PREVIEW_PICTURE","DETAIL_PICTURE"),
	    "PROPERTY_CODE" => array("RATE","TEXT_AFTER_RATE","TITLE_RATE","SUB_TITLE_RATE","RIGHT_TEXT","TYPE"),
	    "FILTER_NAME" => BANNER_INVESTOR_FOURTH_FILTER_NAME,
        "CHECK_DATES" => "Y",
        "ADD_divS_CHAIN" => "N",
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

	<div class="container container-2">
		<div class="block-h2">
			<h2 class="header-width">Начните инвестировать в доходные инструменты</h2>
			<h3 class="header-width mt-5">Биржевые облигации ООО «Пионер-Лизинг» (краткое наименование / ISIN-код: ПионЛизБП4 / RU000A102LF6)</h3>
			<div class="row">
				<div class="col-12 col-md-6">
					<p class="mt-4">20 апреля 2018 года Московская Биржа присвоила идентификационный номер программе биржевых облигаций ООО «Пионер-Лизинг» на 10 млрд рублей. В рамках данной программы 17 декабря 2020 года зарегистрирован четвертый выпуск на 350 млн рублей со сроком обращения 10 лет.</p>
					<p class="mt-4">Номинальная стоимость одной облигации равна 1000 рублей. Ставка 1-4 купонов, регулярных процентных выплат по облигациям, установлена на уровне 12% годовых. Периодичность выплаты купона – 4 раза в год (ежеквартально).</p>
					<p class="mt-4 mb-0">Дата начала размещения выпуска – 25 декабря 2020 года.</p>
				</div>
				<div class="col-12 col-md-6">
					<p class="mt-4">Дата окончания размещения - Датой окончания размещения Облигаций является наиболее ранняя из следующих дат: а) 350-й день с даты начала размещения Биржевых облигаций (10.12.2021); б) дата размещения последней Биржевой облигации выпуска.</p>
					<p class="mt-4">Идентификационный номер программы – 4-00331-R-001P-02E от 20.04.2018.</p>
					<p class="mt-4">Регистрационный номер выпуска – 4B02-04-00331-R-001P от 17.12.2020.</p>
					<p class="mt-4">Андеррайтер – АО «НФК-Сбережения» (краткое наименование: ИК НФК-Сбер, код участника торгов – GC0294900000)</p>
					<div class="btn-blocks-investor">
						<a class="btn btn-main btn-auto mt-3" href="/investor/docs/Memorandum_Pioner-Lizing_BO-P04.pdf" target="_blank">Инвестиционный меморандум</a>
					    <?$APPLICATION->IncludeComponent("bitrix:main.include", "", array(
					        "AREA_FILE_SHOW" => "file",
					        "PATH" => SITE_TEMPLATE_PATH."/include_areas/investor/chetvertyj-vypusk/why_you_should_buy_btn.php",
					    ));?>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="bg-gradient">
		<div class="container container-2">
			<div class="block-h2">
				<h2 class="header-width">
					<?$APPLICATION->IncludeComponent("bitrix:main.include", "", array(
						"AREA_FILE_SHOW" => "file",
						"PATH" => SITE_TEMPLATE_PATH."/include_areas/banner_how_become_investor/title.php",
					));?>
				</h2>
				<? $APPLICATION->IncludeComponent("bitrix:news.list", "banner_how_become_investor", array(
					"IBLOCK_ID" => BANNER_HOW_BECOME_INVESTOR_IBLOCK_ID,
					"IBLOCK_TYPE" => CONTENT_IBLOCK_TYPE,
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
					"IS_QUARTERLY" => true,
				)); ?>
				<div class="row mt-5">
					<div class="col-12 col-md-6">
						<?$APPLICATION->IncludeComponent("bitrix:main.include", "", array(
							"AREA_FILE_SHOW" => "file",
							"PATH" => SITE_TEMPLATE_PATH."/include_areas/banner_how_become_investor/first_text.php",
						));?>
					</div>
					<div class="col-12 col-md-6">
						<?$APPLICATION->IncludeComponent("bitrix:main.include", "", array(
							"AREA_FILE_SHOW" => "file",
							"PATH" => SITE_TEMPLATE_PATH."/include_areas/banner_how_become_investor/second_text.php",
						));?>
					</div>
				</div>
				<?$APPLICATION->IncludeComponent("bitrix:main.include", "", array(
					"AREA_FILE_SHOW" => "file",
					"PATH" => SITE_TEMPLATE_PATH."/include_areas/banner_how_become_investor/btn.php",
				));?>
			</div>
		</div>
	</div>

	<div class="container container-2">
		<div class="block-h2">
			<h2 class="header-width">ООО «Пионер-Лизинг» от первых лиц: <br>о четвертом выпуске облигаций</h2>
			<iframe src="https://www.youtube.com/embed/7MkTw08si-o" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
		</div>
	</div>

	<div class="bg-gray">
		<div class="container container-2">
			<div class="block-h2" style="padding-bottom: 10em;">
				<h2 class="header-width">
					<?$APPLICATION->IncludeComponent("bitrix:main.include", "", array(
						"AREA_FILE_SHOW" => "file",
						"PATH" => SITE_TEMPLATE_PATH."/include_areas/investor/chetvertyj-vypusk/why_you_should_buy_title.php",
					));?>
				</h2>

				<div class="row mt-4">
					<? $APPLICATION->IncludeComponent("bitrix:news.list", "why_you_should_buy", array(
						"PARENT_SECTION_CODE" => "chetvertyj-vypusk",
						"INCLUDE_SUBSECTIONS" => "Y",
						"IBLOCK_ID" => WHY_YOU_SHOULD_BUY_IBLOCK_ID,
						"IBLOCK_TYPE" => CONTENT_IBLOCK_TYPE,
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
			</div>
		</div>
	</div>


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



</main>

<?require_once $_SERVER['DOCUMENT_ROOT'].'/bitrix/footer.php';?>