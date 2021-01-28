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
	?>
	<div class="subscribe-block w-100" id="<?= $this->GetEditAreaId($arItem['ID']) ?>">
        <h2><?= $arItem['~NAME'] ?></h2>
        <? if (!empty($arItem['~PREVIEW_TEXT'])) { ?>
            <p>
                <?= $arItem['~PREVIEW_TEXT'] ?>
            </p>
        <? } ?>

        <? if (!empty($arItem['DISPLAY_PROPERTIES']['LINK'])) { ?>
	        <a class="btn btn-main btn-255 mt-4" <?if ($arItem['DISPLAY_PROPERTIES']['IS_MODAL']) { ?>data-toggle="modal" <? } ?> href="<?= $arItem['DISPLAY_PROPERTIES']['LINK']['~VALUE'] ?>"><?= $arItem['DISPLAY_PROPERTIES']['LINK_TEXT']['DISPLAY_VALUE'] ?></a>
	    <? } ?>

        <? if (!empty($arItem['PREVIEW_PICTURE'])) { ?>
			<img src="<?= $arItem['PREVIEW_PICTURE']['SRC'] ?>" alt="<?= $arItem['PREVIEW_PICTURE']['ALT'] ?>" class="subscribe-block__image">
		<? } ?>
    </div>
<? } ?>