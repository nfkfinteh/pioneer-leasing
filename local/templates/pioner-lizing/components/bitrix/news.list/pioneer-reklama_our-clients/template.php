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
<div class="slider_containernb">
    <div class="swiper-container">
        <div class="swiper-wrapper">
            <?
            foreach ($arResult['ITEMS'] as $k => $item) {
                $this->AddEditAction($item['ID'], $item['EDIT_LINK'], CIBlock::GetArrayByID($item["IBLOCK_ID"], "ELEMENT_EDIT"));
                $this->AddDeleteAction($item['ID'], $item['DELETE_LINK'], CIBlock::GetArrayByID($item["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
                ?>
                <?if (!empty($item['PREVIEW_PICTURE']['SRC'])) { ?>
                    <div class="swiper-slide swiper-slide-center" id="<?= $this->GetEditAreaId($item['ID']) ?>">
                        <img src="<?= $item['PREVIEW_PICTURE']['SRC'] ?>" alt="<?= $item['PREVIEW_PICTURE']['ALT'] ?>">
                    </div>
                <? } ?>
            <? } ?>
        </div>
    </div>
    <div class="swiper-button-prev-unique"></div>
    <div class="swiper-button-next-unique"></div>
</div>
