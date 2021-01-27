<?php
define('STOP_STATISTICS', true);
define('NO_KEEP_STATISTIC', 'Y');
define('NO_AGENT_STATISTIC', 'Y');
define('NO_AGENT_CHECK', true);
define('DisableEventsCheck', true);

require_once($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");

set_time_limit(0);

CModule::IncludeModule("iblock");
CModule::IncludeModule("main");

global $USER;
//Проверка на админа
if (!$USER->IsAdmin()) { CHTTP::SetStatus("404 Not Found"); @define("ERROR_404","Y"); die; }

$arParams = array(
	"replace_space"=>"_",
	"replace_other"=>"_",
	"change_case" => "L",
	"delete_repeat_replace" => true
);
global $APPLICATION;
$arSelect = Array("ID", "NAME", "DETAIL_TEXT");
$arFilter = Array("IBLOCK_ID"=>3, "ACTIVE"=>"Y");
$db = CIBlockElement::GetList(Array(), $arFilter, false, false, $arSelect);
$arItemsChange = array();
while ($arEl = $db->fetch()) {
	preg_match_all('/src="(.[^"]*)"/m', $arEl['DETAIL_TEXT'], $matches, PREG_SET_ORDER, 0);
	$pattern = "<img.*?src=[\"\"'](?<url>.*?)[\"\"'].*?>";
	preg_match_all($pattern, $arEl['DETAIL_TEXT'], $matches);
	$pattern = '~\bbackground(-image)?\s*:(.*?)\(\s*(\'|")?(?<image>.*?)\3?\s*\)~i';
	preg_match_all($pattern, $arEl['DETAIL_TEXT'], $matches_background);
	$arImg = array_merge ($matches['url'], $matches_background['image']);
	foreach ($arImg as $key => $url) {
		if (!file_exists($_SERVER["DOCUMENT_ROOT"].$url)) {
			$arFileName = explode("/", $url);
			$FileName = end($arFileName);
			$url_iconv = iconv('CP1251','UTF-8',$FileName);
			$urlImg = str_ireplace($FileName, $url_iconv, $url);
			$arEl['DETAIL_TEXT'] = str_ireplace($url, $urlImg, $arEl['DETAIL_TEXT']);
			$arItemsChange[$arEl['ID']] = $arEl['DETAIL_TEXT'];

		}
	}
}


foreach ($arItemsChange as $ID => $DETAIL_TEXT) {
	cdump("---------");
	cdump($ID);
	cdump($DETAIL_TEXT);
	$arFieldsProdBX = Array(
		"DETAIL_TEXT" => $DETAIL_TEXT,
	);
	$obElement = new CIBlockElement();
	$elID = $obElement->Update($ID, $arFieldsProdBX);
	if( $elID < 1 ) {
		cdump($obElement->LAST_ERROR);
	}
}

echo 'Готово!';
require_once($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/epilog_after.php");