<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */

if (empty($arResult['ITEMS'])) {
    return;
}

foreach ($arResult['ITEMS'] as $k => $item) {
    if ($item['PREVIEW_PICTURE']) {
        $file = CFile::ResizeImageGet($item['PREVIEW_PICTURE']['ID'], array('width'=>250, 'height'=>250), BX_RESIZE_IMAGE_PROPORTIONAL, true);
        $item['PREVIEW_PICTURE_BIG'] = $item['PREVIEW_PICTURE'];
        $item['PREVIEW_PICTURE']['SRC'] = $file['src'];
    }

    $arResult['ITEMS'][$k] = $item;
}