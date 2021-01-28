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

<div class="row mt-5">
    <?
    $num = 0;
    foreach ($arResult['ITEMS'] as $k => $arItem) {
        $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
        $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
        $num++;
        ?>
        <div class="how-invest col-12 col-md-4" id="<?= $this->GetEditAreaId($arItem['ID']) ?>">
			<div class="how-invest__number"><?= sprintf("%02d", $num); ?></div>
<<<<<<< HEAD
=======
            <?if ($arParams['IS_QUARTERLY']) {
                $arItem['~NAME'] = str_ireplace("ежемесячный", "ежеквартальный", $arItem['~NAME']);
            }?>
>>>>>>> 566b7848f0b2f2776e7e546e21263df99fc8f306
			<div class="how-invest__text"><?= $arItem['~NAME'] ?></div>
		</div>
    <? } ?>
</div>


