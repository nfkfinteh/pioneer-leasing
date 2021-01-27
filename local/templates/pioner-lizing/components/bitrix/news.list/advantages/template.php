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
?>

<div class="bg-gray">
    <div class="advantages container">
        <h2><?= $arResult['~NAME'] ?></h2>
        <div class="advantages__content row d-none d-md-flex">
            <?
            foreach ($arResult['ITEMS'] as $k => $arItem) {
                $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
                $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
                ?>
                <div class="col-12 col-md-6 col-xl-4" id="<?= $this->GetEditAreaId($arItem['ID']) ?>">
                    <div class="adv-card">
                        <?if (!empty($arItem['DISPLAY_PROPERTIES']['IMG']['FILE_VALUE'])) {?>
                            <img class="adv-card__image" src="<?= $arItem['DISPLAY_PROPERTIES']['IMG']['FILE_VALUE']['SRC'] ?>" alt="<?= $arItem['NAME'] ?>">
                        <? } ?>
                        <div>
                            <h3 class="adv-card__title"><?= $arItem['~NAME'] ?></h3>
                            <?if (!empty($arItem['~PREVIEW_TEXT'])) {?>
                                <p class="adv-card__description"><?= $arItem['~PREVIEW_TEXT'] ?></p>
                            <? } ?>
                        </div>
                    </div>
                </div>
            <? } ?>
        </div>
        <div class="adv-carousele owl-carousel owl-theme owl-dark d-block d-md-none">
            <?
            foreach ($arResult['ITEMS'] as $k => $arItem) {
                ?>
                <div>
                    <div class="adv-card">
                        <?if (!empty($arItem['DISPLAY_PROPERTIES']['IMG']['FILE_VALUE'])) {?>
                            <img class="adv-card__image" src="<?= $arItem['DISPLAY_PROPERTIES']['IMG']['FILE_VALUE']['SRC'] ?>" alt="<?= $arItem['NAME'] ?>">
                        <? } ?>
                        <div>
                            <h3 class="adv-card__title"><?= $arItem['~NAME'] ?></h3>
                            <?if (!empty($arItem['~PREVIEW_TEXT'])) {?>
                                <p class="adv-card__description"><?= $arItem['~PREVIEW_TEXT'] ?></p>
                            <? } ?>
                        </div>
                    </div>
                </div>
            <? } ?>
        </div>
    </div>
</div>


