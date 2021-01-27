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
    <div class="col-12 col-md-6" id="<?= $this->GetEditAreaId($arItem['ID']) ?>">
        <div class="list-style">
            <h3><?= $arItem['~NAME'] ?></h3>
            <? if (!empty($arItem['~PREVIEW_TEXT'])) { ?>
                <p class="mt-4">
                    <?= $arItem['~PREVIEW_TEXT'] ?>
                </p>
            <? } ?>
        </div>
    </div>
<? } ?>
<?
$class = "btn-list-why_you_should_buy mt-3";
if (count($arResult['ITEMS']) % 2 == 0) {
    $class = 'offset-xl-6 mt-3 btn-list-why_you_should_buy_after';
}
?>
<div class="col-12 col-md-6 <?= $class ?>">
    <?$APPLICATION->IncludeComponent("bitrix:main.include", "", array(
        "AREA_FILE_SHOW" => "file",
        "PATH" => SITE_TEMPLATE_PATH."/include_areas/investor/vtoroy-vypusk/why_you_should_buy_btn.php",
    ));?>
</div>