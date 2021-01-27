<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("title", "Клиенты и патнеры");
$APPLICATION->SetTitle("Клиенты и партнеры");
?> 
<h1>Клиенты и партнеры</h1>
 <br>
 <?$APPLICATION->IncludeComponent(
	"bitrix:photo.section",
	"parners-list",
	Array(
		"AJAX_MODE" => "N",
		"IBLOCK_TYPE" => "partners",
		"IBLOCK_ID" => "4",
		"SECTION_ID" => $_REQUEST["SECTION_ID"],
		"SECTION_CODE" => "",
		"SECTION_USER_FIELDS" => array(),
		"ELEMENT_SORT_FIELD" => "sort",
		"ELEMENT_SORT_ORDER" => "asc",
		"FILTER_NAME" => "arrFilter",
		"FIELD_CODE" => array(),
		"PROPERTY_CODE" => array(),
		"SECTION_URL" => "",
		"DETAIL_URL" => "",
		"PAGE_ELEMENT_COUNT" => "1000",
		"LINE_ELEMENT_COUNT" => "3",
		"META_KEYWORDS" => "-",
		"META_DESCRIPTION" => "-",
		"BROWSER_TITLE" => "-",
		"SET_TITLE" => "Y",
		"SET_STATUS_404" => "N",
		"ADD_SECTIONS_CHAIN" => "Y",
		"CACHE_TYPE" => "A",
		"CACHE_TIME" => "36000000",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"PAGER_TEMPLATE" => ".default",
		"DISPLAY_TOP_PAGER" => "N",
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"PAGER_TITLE" => "Фотографии",
		"PAGER_SHOW_ALWAYS" => "Y",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "Y",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"AJAX_OPTION_HISTORY" => "N"
	)
);?> 
<p>ООО &laquo;Пионер-Лизинг&raquo; – динамично развивающаяся компания, идущая в ногу со временем. Мы открыты к сотрудничеству, и постоянно исследуем рынок в поисках оптимально выгодных предложений для наших клиентов и партнеров. На сегодняшний день у нас действуют специальные предложения по приобретению в лизинг автотранспорта, коммерческой и жилой недвижимости. Также мы предлагаем услуги по страхованию предметов лизинга в ведущих страховых компаниях города по принципу «одного окна». Если вы желаете стать нашим клиентом или партнером &ndash; просто свяжитесь с нашими менеджерами по вышеуказанным телефонам. </p>
 
<div class="parnters-bottom-line"></div>
 <?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>