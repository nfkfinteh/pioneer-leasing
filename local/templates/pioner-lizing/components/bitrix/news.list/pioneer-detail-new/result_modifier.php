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
	if (!file_exists($_SERVER["DOCUMENT_ROOT"].$item['PREVIEW_PICTURE']['UNSAFE_SRC'])) {
		unset($item['PREVIEW_PICTURE']);
	}
    if ($item['PREVIEW_PICTURE']) {
        $file = CFile::ResizeImageGet($item['PREVIEW_PICTURE']['ID'], array('width'=>255, 'height'=>255), BX_RESIZE_IMAGE_PROPORTIONAL, true);
        $item['PREVIEW_PICTURE_BIG'] = $item['PREVIEW_PICTURE'];
        $item['PREVIEW_PICTURE']['SRC'] = $file['src'];
    }

    $arResult['ITEMS'][$k] = $item;
}