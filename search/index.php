<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Поиск");
?>
<main class="pt-menu" role="main">
	<div class="container container-page-search">
		 <?$APPLICATION->IncludeComponent(
		"bitrix:search.page",
		"pioneer",
		Array(
			"AJAX_MODE" => "N",
			"AJAX_OPTION_ADDITIONAL" => "",
			"AJAX_OPTION_HISTORY" => "N",
			"AJAX_OPTION_JUMP" => "N",
			"AJAX_OPTION_STYLE" => "Y",
	        "CACHE_GROUPS" => CACHE_GROUPS,
	        "CACHE_TIME" => CACHE_TIME,
	        "CACHE_TYPE" => CACHE_TYPE,
			"COLOR_NEW" => "000000",
			"COLOR_OLD" => "C8C8C8",
			"COLOR_TYPE" => "Y",
			"DEFAULT_SORT" => "rank",
			"DISPLAY_BOTTOM_PAGER" => "Y",
			"DISPLAY_TOP_PAGER" => "N",
			"FILTER_NAME" => "",
			"FONT_MAX" => "50",
			"FONT_MIN" => "10",
			"NO_WORD_LOGIC" => "N",
			"PAGER_SHOW_ALWAYS" => "Y",
			"PAGER_TEMPLATE" => "pioneer-news-nav",
			"PAGER_TITLE" => " ",
			"PAGE_RESULT_COUNT" => "10",
			"PATH_TO_USER_PROFILE" => "",
			"PERIOD_NEW_TAGS" => "",
			"RATING_TYPE" => "",
			"RESTART" => "Y",
			"SHOW_CHAIN" => "Y",
			"SHOW_ITEM_DATE_CHANGE" => "Y",
			"SHOW_ITEM_TAGS" => "Y",
			"SHOW_ORDER_BY" => "Y",
			"SHOW_RATING" => "",
			"SHOW_TAGS_CLOUD" => "N",
			"SHOW_WHEN" => "N",
			"SHOW_WHERE" => "N",
			"TAGS_INHERIT" => "Y",
			"TAGS_PAGE_ELEMENTS" => "20",
			"TAGS_PERIOD" => "",
			"TAGS_SORT" => "NAME",
			"TAGS_URL_SEARCH" => "",
			"USE_LANGUAGE_GUESS" => "Y",
			"USE_SUGGEST" => "N",
			"USE_TITLE_RANK" => "Y",
			"WIDTH" => "100%",
			"arrFILTER" => array("no"),
			"arrWHERE" => array()
		)
	);?>
	</div>
</main>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>