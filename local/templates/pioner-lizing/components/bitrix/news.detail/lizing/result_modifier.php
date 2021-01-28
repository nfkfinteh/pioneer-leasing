<? if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();
if (!empty($arResult['DETAIL_PICTURE']['SRC'])) {
    $this->SetViewTarget("BACKGROUND_PICT_BANNER");
    ?>
    style = "background: url('<?= $arResult['DETAIL_PICTURE']['SRC'] ?>') center top no-repeat;"
    <?
    $this->EndViewTarget();
}

$cp = $this->__component;
if (is_object($cp)) {
	$cp->arResult["SHOW_QUESTIONS_BANNER"] = $arResult['DISPLAY_PROPERTIES']['SHOW_QUESTIONS_BANNER']['~VALUE'];
	$cp->arResult["HTML_AFTER_BANNER"] = $arResult['DISPLAY_PROPERTIES']['HTML_AFTER_BANNER']['~VALUE']['TEXT'];
	$cp->arResult["LAST_BLOCK_DESCRIPTION"] = $arResult['DISPLAY_PROPERTIES']['LAST_BLOCK_DESCRIPTION'];
	$cp->SetResultCacheKeys(array("SHOW_QUESTIONS_BANNER","HTML_AFTER_BANNER","LAST_BLOCK_DESCRIPTION"));
}