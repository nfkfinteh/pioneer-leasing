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


<div class="preim_containernb containernb">
    <?
    foreach ($arResult['ITEMS'] as $k => $item) {
        $this->AddEditAction($item['ID'], $item['EDIT_LINK'], CIBlock::GetArrayByID($item["IBLOCK_ID"], "ELEMENT_EDIT"));
        $this->AddDeleteAction($item['ID'], $item['DELETE_LINK'], CIBlock::GetArrayByID($item["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
        ?>
        <div class="preim_item fade-in-left wow" id="<?= $this->GetEditAreaId($item['ID']) ?>">
            <?if (!empty($item['PREVIEW_PICTURE']['SRC'])) { ?>
                <div class="preim_item__img">
                    <img src="<?= $item['PREVIEW_PICTURE']['SRC'] ?>" alt="<?= $item['PREVIEW_PICTURE']['ALT'] ?>">
                </div>
            <? } ?>
            <? if (!empty($item['~PREVIEW_TEXT'])) { ?>
                <h4><?= $item['~PREVIEW_TEXT'] ?></h4>
            <? } ?>
            <p><?= $item['~NAME'] ?></p>
        </div>
    <? } ?>
</div>