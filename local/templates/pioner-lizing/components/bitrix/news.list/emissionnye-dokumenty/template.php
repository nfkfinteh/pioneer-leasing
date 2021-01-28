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

<div class="row">
    <?
    foreach ($arResult['ITEMS'] as $k => $arItem) {
        $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
        $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
        ?>
        <div class="col-12 col-md-6 col-xl-4" id="<?= $this->GetEditAreaId($arItem['ID']) ?>">
			<a href="<?= $arItem['DISPLAY_PROPERTIES']['FILE']['FILE_VALUE']['SRC'] ?>" class="document" target="__blank">
				<div class="document__title"><?= $arItem['~NAME'] ?></div>
				<div class="document__description">
					<?
					$type = "";
					if ($arItem['DISPLAY_PROPERTIES']['FILE']['FILE_VALUE']['CONTENT_TYPE'] == "application/pdf") {
						$type = ".pdf - ";
					}
					?>
					(<?= $type ?><?= sprintf('%01.2f', @filesize($_SERVER['DOCUMENT_ROOT'].$arItem['DISPLAY_PROPERTIES']['FILE']['FILE_VALUE']['SRC']) / 1048576);?> Mb)
				</div>
			</a>
		</div>
    <? } ?>
</div>


