<? if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();


foreach ($arResult['ITEMS'] as $k => $item) {
    if ($item['PREVIEW_PICTURE']) {
        $file = CFile::ResizeImageGet($item['PREVIEW_PICTURE']['ID'], array('width'=>500, 'height'=>500), BX_RESIZE_IMAGE_PROPORTIONAL, true);
        $item['PREVIEW_PICTURE_BIG'] = $item['PREVIEW_PICTURE'];
        $item['PREVIEW_PICTURE']['SRC'] = $file['src'];
    }

    $arResult['ITEMS'][$k] = $item;
}