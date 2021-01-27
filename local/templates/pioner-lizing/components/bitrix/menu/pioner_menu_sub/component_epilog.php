<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
if (!empty($arResult['BODY_CLASS'])) {
    $APPLICATION->SetPageProperty("body-class", $arResult['BODY_CLASS']);
}