<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
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

<div class="top-carousels__main-carousel order-1 order-md-2">
	<?foreach($arResult["ITEMS"] as $arItem):
		$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
		$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
		?>
		<div class="main-carousel__item">
			<a href="<?= $arItem["DETAIL_PAGE_URL"] ?>">
				<?if ($arItem["PREVIEW_PICTURE"]):?>
					<img
						class="main-carousel__image"
						src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>"
						alt="<?=$arItem["PREVIEW_PICTURE"]["ALT"]?>"
						/>
				<?endif;?>
				<h2 class="main-carousel__title" id="<?= $this->GetEditAreaId($arItem['ID']); ?>"><?= $arItem["~NAME"] ?></h2>
				<?if (!empty($arItem['~PREVIEW_TEXT'])) {?>
					<p class="main-carousel__description"><?= $arItem['~PREVIEW_TEXT'] ?></p>
				<? } ?>
				<span class="main-carousel__link btn btn-main" >Узнать больше</span>
			</a>
		</div>
	<?endforeach;?>
</div>