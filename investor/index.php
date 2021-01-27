<?
$isShowSecMenu = true;
require_once $_SERVER['DOCUMENT_ROOT'].'/bitrix/header.php';
$APPLICATION->AddChainItem("Третий выпуск", "/investor/");
$APPLICATION->SetPageProperty("title", "Облигации третий выпуск | ООО «Пионер-Лизинг»");
$APPLICATION->SetPageProperty("description", "Открыть счет и приобрести биржевые облигации ООО «Пионер-Лизинг» 1-го, 2-го и 3-го выпуска. Онлайн");
$APPLICATION->SetTitle("Инвесторам");
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
		"FILTER_NAME" => BANNER_INVESTOR_THIRD_FILTER_NAME,
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
			<h3 class="header-width mt-5">Биржевые облигации ООО «Пионер-Лизинг» 3-го выпуска (краткое наименование/ISIN-код: ПионЛизБП3/RU000A1013N6)</h3>
			<div class="row">
				<div class="col-12 col-md-6">
					<p class="mt-4">24 октября 2019 года Московская Биржа присвоила идентификационный номер 3-му выпуску биржевых облигаций ООО «Пионер-Лизинг» объемом 400 млн рублей, размещаемому в рамках Программы биржевых облигаций.</p>
					<p class="mt-4">Дата начала размещения выпуска – 26 ноября 2019 года.Уровень листинга: 3.</p>
					<p class="mt-4 mb-0">Срок обращения облигаций – 3600 дней. Номинальная стоимость одной облигации – 1000 рублей. Периодичность выплаты купонов – 12 раз в год (каждые 30 дней). Ставка 1-го купона установлена в размере 13,25% годовых. Ставки со 2-го по 120-й купоны будут рассчитываться по формуле: ключевая ставка Банка России + 6%.</p>
				</div>
				<div class="col-12 col-md-6">
					<p class="mt-4">Датой окончания размещения Облигаций является наиболее ранняя из следующих дат: а) 360-й день с даты начала размещения Биржевых облигаций (20.11.2020); б) дата размещения последней Биржевой облигации выпуска.</p>
					<p class="mt-4">Идентификационный номер выпуска – 4B02-03-00331-R-001P от 24.10.2019</p>
					<p class="mt-4">Идентификационный номер программы – 4-00331-R-001P-02E от 20.04.2018</p>
					<p class="mt-4">Андеррайтер – АО «НФК-Сбережения» (краткое наименование: ИК НФК-Сбер, код участника торгов – GC0294900000)</p>
					<a class="btn btn-main btn-260 mt-3" href="/investor/docs/memorandum_3v.pdf" target="_blank">Инвестиционный меморандум</a>
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
			<h2 class="header-width">Интервью с учредителем ООО "Пионер-Лизинг" Евгением Наумовым</h2>
			<iframe src="https://www.youtube.com/embed/A8dyciL_6N4" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
		</div>
	</div>

	<div class="bg-gray">
		<div class="container container-2">
			<div class="block-h2">
				<h2 class="header-width">
					<?$APPLICATION->IncludeComponent("bitrix:main.include", "", array(
						"AREA_FILE_SHOW" => "file",
						"PATH" => SITE_TEMPLATE_PATH."/include_areas/investor/tretiy-vypusk/why_you_should_buy_title.php",
					));?>
				</h2>

				<div class="row mt-4">
					<? $APPLICATION->IncludeComponent("bitrix:news.list", "why_you_should_buy", array(
						"PARENT_SECTION_CODE" => "tretiy-vypusk",
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

	<div class="container container-2">
		<div class="block-h2" style="margin-bottom: 5em;">
			<h2 class="header-width">Опционная программа от ООО «НФК – СТРУКТУРНЫЕ ИНВЕСТИЦИИ»</h2>
			<div class="row">
				<div class="col-12 col-md-6">
					<p class="mt-4 mb-0">В рамках опционной программы любой инвестор в течение срока обращения облигаций может приобрести внебиржевой Опцион Put, дающий право продать по номиналу облигации в выбранный срок. Таким образом, инвестор изначально получает максимальную доходность с учетом длительного обращения облигаций, а опционная программа позволяет, с одной стороны, оптимизировать срок удержания ценных бумаг с учетом индивидуальных потребностей каждого инвестора, а с другой, - дает возможность эмитенту облигаций осуществлять более точное планирование денежных потоков. Инвестор при покупке опциона имеет выбор сроков его исполнения: через 1 год, через 2 года и через 3 года с момента покупки опциона.</p>
				</div>
				<div class="col-12 col-md-6">
					<p class="mt-4">Продавцом внебиржевых опционов является ООО «НФК-СИ». Поручителем по денежным обязательствам выступает ООО «Пионер-Лизинг» (на основании безотзывной публичной оферты).</p>
					<p class="mt-4">Подать поручение на покупку опциона можно в личном кабинете брокера АО «НФК-Сбережения».</p>
					<a class="btn btn-main btn-260 mt-3" href="https://lk.nfksber.ru/" target="_blank">Приобрести опцион</a>
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



	<div class="container container-2">
		<div class="block-h3 text-gray fsz-12">
			<p>
				<sup>1</sup> По данным официального сайта Банка России (https://www.cbr.ru/statistics/pdko/int_rat/) по итогам сентября 2019 года средняя ставка по вкладам со сроком свыше года составила 6,28%, а по данным официального сайта Московской Биржи (https://www.moex.com/ru/index/RGBITR) доходность индекса государственных облигаций RGBITR по состоянию на 20.11.2019 года составила 6,36%.
			</p>
		</div>
	</div>

</main>
    <?
require_once $_SERVER['DOCUMENT_ROOT'].'/bitrix/footer.php';