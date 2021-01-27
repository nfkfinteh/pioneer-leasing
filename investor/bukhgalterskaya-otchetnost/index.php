<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Бухгалтерские документы и отчетность");
$APPLICATION->SetPageProperty("title", "Отчетность, документы | ООО «Пионер-Лизинг»");
$APPLICATION->SetPageProperty("description", "Документы, отчетность, информация для клиентов на сайте компании ООО «Пионер-Лизинг»");
?>
<div class="second-menu">
    <div class="container h-100">
        <?$APPLICATION->IncludeComponent(
			"bitrix:menu",
			"pioner_menu_sub",
			array(
				"ROOT_MENU_TYPE" => "sub_menu",
				"MAX_LEVEL" => "4",
				"CHILD_MENU_TYPE" => "",
				"USE_EXT" => "N",
				"DELAY" => "N",
				"ALLOW_MULTI_SELECT" => "N",
				"MENU_CACHE_TYPE" => "A",
				"MENU_CACHE_TIME" => "3600",
				"MENU_CACHE_USE_GROUPS" => "Y",
				"MENU_CACHE_GET_VARS" => array(
				),
				"COMPONENT_TEMPLATE" => "pioner_menu_sub"
			),
			false
		);?>
    </div>
</div>
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
	<div class="container container-2">
		<div class="block-h2">
            <h1 class="header-width"><? $GLOBALS["APPLICATION"]->ShowTitle(false); ?></h1>
            <? $APPLICATION->IncludeComponent("bitrix:news.list", "bukhgalterskaya-otchetnost", array(
				"IBLOCK_ID" => BUKHGALTERSKAYA_OTCHETNOST_IBLOCK_ID,
				"IBLOCK_TYPE" => CONTENT_IBLOCK_TYPE,
				"NEWS_COUNT" => UNLIMITED_COUNT,
				"SORT_BY1" => "ACTIVE_FROM",
				"SORT_BY2" => "SORT",
				"SORT_ORDER1" => "ASC",
				"SORT_ORDER2" => "ASC",
				"FIELD_CODE" => array("PREVIEW_PICTURE","DETAIL_PICTURE"),
				"PROPERTY_CODE" => array("FILE"),
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
	</div>
</main>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>