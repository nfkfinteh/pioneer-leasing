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


$host = (CMain::IsHTTPS()) ? 'https://' . $_SERVER["SERVER_NAME"] : 'http://' . $_SERVER["SERVER_NAME"];

$arSelect = Array();
$arFilter = Array("IBLOCK_ID"=>18);
if (!empty($_GET['type'])) {
	if ($_GET['type'] == "banner") {
		$arFilter['PROPERTY_TYPE_VALUE'] = "Баннер";
	} elseif ($_GET['type'] == "bus") {
		$arFilter['PROPERTY_TYPE_VALUE'] = "Остановка";
	}

}


$rsEl = CIBlockElement::GetList(Array(), $arFilter, false, false, $arSelect);
$arItems = array();
while ($obEl = $rsEl->GetNextElement()) {
	$arFields = $obEl->GetFields();
	$arProps = $obEl->GetProperties();
	$arItemsTEmp[$arFields['ID']] = $arFields;
	$arItemsTEmp[$arFields['ID']]['arProps'] = $arProps;
	$arPoints = explode(",", $arProps['COORDS']['VALUE']);
	$curMonth = date('n');
	$textA = 'Сторона А: Cвободна';
	$statusTextA = '1';
	if (is_array($arProps['SIDE_A']['VALUE_XML_ID'])) {
		if (in_array($curMonth, $arProps['SIDE_A']['VALUE_XML_ID'])) {
			$textA = 'Сторона А: Занята';
			$statusTextA = '0';
		}
	}
	$textB = 'Сторона B: Cвободна';
	$statusTextB = '1';
	if (is_array($arProps['SIDE_B']['VALUE_XML_ID'])) {
		if (in_array($curMonth, $arProps['SIDE_B']['VALUE_XML_ID'])) {
			$textB = 'Сторона B: Занята';
			$statusTextB = '0';
		}
	}

	$img = $host."/local/scripts/map/";

	if ($arProps['TYPE']['VALUE'] == "Баннер") {
		$arr_img_scheet = array(
		    array(
		        'img/nrm_blbord_red.png',
		        'img/nrm_blbord_red_green.png',
		        'img/nrm_blbord_red_yellow.png'
		    ),
		    array(
		        'img/nrm_blbord_red_green.png',
		        'img/nrm_blbord_green.png',
		        'img/nrm_blbord_green_yellow.png'
		    ),
		    array(
		        'img/nrm_blbord_yellow_red.png',
		        'img/nrm_blbord_yellow_green.png',
		        'img/nrm_blbord_yellow.png'
		    )
	    );
	} else {
		$arr_img_scheet = array(
		    array(
		        'img/znrm_stopbus_red.png',
		        'img/znrm_stopbus_red_green.png',
		        'img/znrm_stopbus_red_yellow.png'
		    ),
		    array(
		        'img/znrm_stopbus_red_green.png',
		        'img/znrm_stopbus_green.png',
		        'img/znrm_stopbus_green_yellow.png'
		    ),
		    array(
		        'img/znrm_stopbus_yellow_red.png',
		        'img/znrm_stopbus_yellow_green.png',
		        'img/znrm_stopbus_yellow.png'
		    )
	    );
	}

    $img .= $arr_img_scheet[$statusTextA][$statusTextB];

	$arItems[$arFields['ID']] = array(
		'id' => $arFields['ID'],
		'x' => $arPoints[0],
		'y' => $arPoints[1],
		'img' => $img,
		'imgA' => $host.CFile::GetPath($arFields["PREVIEW_PICTURE"]),
		'imgB' => $host.CFile::GetPath($arFields["DETAIL_PICTURE"]),
		'statusText' => $statusTextA.'-'.$statusTextB,
		'textA' => $textA,
		'textB' => $textB,
		'adress' => $arFields["NAME"],
	);
}

header("Access-Control-Allow-Origin: *");
echo json_encode($arItems,  JSON_FORCE_OBJECT), "\n\n";