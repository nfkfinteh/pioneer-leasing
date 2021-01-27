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

$arGenNewImg = array();

$arSelect = Array("ID", "PREVIEW_PICTURE", "DETAIL_PICTURE");
$arFilter = Array("IBLOCK_ID"=>3, "ACTIVE"=>"Y", "!DETAIL_PICTURE"=>false);
$db = CIBlockElement::GetList(Array(), $arFilter, false, false, $arSelect);
$arItemsChange = array();
while ($arEl = $db->fetch()) {
	$arFilePreview = CFile::GetFileArray($arEl["PREVIEW_PICTURE"]);
	$arFileDetail = CFile::GetFileArray($arEl["DETAIL_PICTURE"]);
	$needChange = false;
	if (empty($arFilePreview['SRC'])) {
		$needChange = true;
	} elseif (($arFilePreview['HEIGHT'] < 255) || ($arFilePreview['WIDTH'] < 255)) {
		$needChange = true;
	}
	if ($needChange) {
		$arGenNewImg[$arEl['ID']] = array(
			'ID' => $arEl['ID'],
			'arFilePreview' => $arFilePreview,
			'arFileDetail' => $arFileDetail,
		);
	}
}



foreach ($arGenNewImg as $ID => $arData) {
	$arFile = CFile::MakeFileArray($_SERVER["DOCUMENT_ROOT"].$arData['arFileDetail']['SRC']);
	cdump("-----------");
	cdump($arData);
	cdump($arFile);
	if ($arFile) {
		$arFieldsProdBX = Array(
			"PREVIEW_PICTURE" => $arFile
		);
		$obElement = new CIBlockElement();
		$elID = $obElement->Update($arData['ID'], $arFieldsProdBX);

		if( $elID < 1 ) {
			cdump($obElement->LAST_ERROR);
		}
	}

}

echo 'Готово!';
require_once($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/epilog_after.php");