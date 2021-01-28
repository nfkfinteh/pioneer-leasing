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
<? foreach ($arResult['ITEMS'] as $k => $item) {
    $this->AddEditAction($item['ID'], $item['EDIT_LINK'], CIBlock::GetArrayByID($item["IBLOCK_ID"], "ELEMENT_EDIT"));
    $this->AddDeleteAction($item['ID'], $item['DELETE_LINK'], CIBlock::GetArrayByID($item["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
    ?>
    <div class="rent-shld_item fade-in-top wow" id="<?= $this->GetEditAreaId($item['ID']) ?>">
        <h5><?= $item['~NAME'] ?></h5>
        <? if (!empty($item['~PREVIEW_TEXT'])) { ?>
            <p><?= $item['~PREVIEW_TEXT'] ?></p>
        <? } ?>
    </div>
<? } ?>
<div class="rent-steps">
    <? for ($i=1; $i <= count($arResult['ITEMS']) ; $i++) { ?>
        <span><?= $i ?></span>
    <? } ?>
</div>