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

$arSelect = Array("ID", "PREVIEW_PICTURE");
$arFilter = Array("IBLOCK_ID"=>3, "ACTIVE"=>"Y", "!PREVIEW_PICTURE"=>false);
$db = CIBlockElement::GetList(Array(), $arFilter, false, false, $arSelect);
$arItemsChange = array();
while ($arEl = $db->fetch()) {
	$arFile = CFile::GetFileArray($arEl["PREVIEW_PICTURE"]);
	if ( ($arFile['ORIGINAL_NAME'] == "obligatsii.jpg") && ($arFile['FILE_SIZE'] == "11225") ) {
		$arEl["AR_PREVIEW_PICTURE"] = $arFile;
		$arItemsChange[$arEl['ID']] = $arEl;
	}
}

foreach ($arItemsChange as $ID => $arData) {
	$arFieldsProdBX = Array(
		"PREVIEW_PICTURE" => CFile::MakeFileArray($_SERVER["DOCUMENT_ROOT"]."/upload/static/news-img.jpg")
	);
	$obElement = new CIBlockElement();
	$elID = $obElement->Update($arData['ID'], $arFieldsProdBX);
}

echo 'Готово!';
require_once($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/epilog_after.php");