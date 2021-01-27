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

$arSelect = Array("ID", "NAME", "PREVIEW_PICTURE", "DETAIL_PICTURE");
$arFilter = Array("IBLOCK_ID"=>3, "ACTIVE"=>"Y");
$db = CIBlockElement::GetList(Array(), $arFilter, false, false, $arSelect);
$arItemsChange = array();
while ($arEl = $db->fetch()) {
	$arGenFile = $arFilePreview = $arFileDetail = array();
	if (!empty($arEl["PREVIEW_PICTURE"])) {
		$arFilePreview = CFile::GetFileArray($arEl["PREVIEW_PICTURE"]);
	}
	if (!empty($arEl["DETAIL_PICTURE"])) {
		$arFileDetail = CFile::GetFileArray($arEl["DETAIL_PICTURE"]);
	}

	if (!file_exists($_SERVER["DOCUMENT_ROOT"].$arFileDetail['SRC'])) {
		$urlImg = $arFileDetail['SRC'];
        $url_iconv = iconv('CP1251','UTF-8',$arFileDetail['ORIGINAL_NAME']);
        $urlImg = str_ireplace($arFileDetail['ORIGINAL_NAME'], $url_iconv, $urlImg);
	   	if (file_exists($_SERVER["DOCUMENT_ROOT"].$urlImg)) {
			$arFileName = explode(".", $arFileDetail['ORIGINAL_NAME']);
			$FileType = end($arFileName);
			$arGenFile = CFile::MakeFileArray($_SERVER["DOCUMENT_ROOT"].$urlImg);
			$arGenFile['name'] = Cutil::translit($arEl["NAME"],"ru",$arParams).".".$FileType;
			$arFieldsProdBX = Array(
				"DETAIL_PICTURE" => $arGenFile,
				"PREVIEW_PICTURE" => $arGenFile,
			);
			$obElement = new CIBlockElement();
			$elID = $obElement->Update($arEl['ID'], $arFieldsProdBX);
	   	}
	}
}


echo 'Готово!';
require_once($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/epilog_after.php");