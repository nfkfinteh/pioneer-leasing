<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
/**
 * @var array $arParams
 * @var array $arResult
 * @global CMain $APPLICATION
 * @global CUser $USER
 * @global CDatabase $DB
 * @var CBitrixComponentTemplate $this
 * @var string $templateName
 * @var string $templateFile
 * @var string $templateFolder
 * @var string $componentPath
 * @var CBitrixComponent $component
 */
$this->setFrameMode(true);

use Bitrix\Main\Localization\Loc;

if (empty($arResult['ITEMS'])) {
    return;
}

foreach ($arResult['ITEMS'] as $k => $arItem) {
	$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
	$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
    if (empty($arItem['PREVIEW_PICTURE'])) {
        continue;
    }
	?>
    <div class="navbar-dropdown__banner" id="<?= $this->GetEditAreaId($arItem['ID']) ?>">
        <? if (!empty($arItem['DISPLAY_PROPERTIES']['LINK'])) { ?>
            <a href="<?= $arItem['DISPLAY_PROPERTIES']['LINK']['~VALUE'] ?>" <?if ($arItem['DISPLAY_PROPERTIES']['IS_MODAL']) { ?>data-toggle="modal" <? } ?>>
        <? } ?>

            <img class="h-100" src="<?= $arItem['PREVIEW_PICTURE']['SRC'] ?>" srcset="<?= $arItem['DETAIL_PICTURE']['SRC'] ?> 2x" alt="<?= $arItem['PREVIEW_PICTURE']['ALT'] ?>" />

        <? if (!empty($arItem['DISPLAY_PROPERTIES']['LINK'])) { ?>
            </a>
        <? } ?>
    </div>
<? } ?>