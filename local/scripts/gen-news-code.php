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

$arSelect = Array("ID", "CODE", "NAME");
$arFilter = Array("IBLOCK_ID"=>3, "CODE"=>false);
$db = CIBlockElement::GetList(Array(), $arFilter, false, false, $arSelect);
$arItemsChange = array();
while ($arEl = $db->fetch()) {
	$newCode = Cutil::translit($arEl["NAME"],"ru",$arParams);
	$arElArray = Array(
		"CODE" => $newCode,
	);
	$el = new CIBlockElement;
	$resUp = $el->Update($arEl['ID'], $arElArray);
}

echo 'Готово!';
require_once($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/epilog_after.php");