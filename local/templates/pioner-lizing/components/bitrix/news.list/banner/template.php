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

<?
foreach ($arResult['ITEMS'] as $k => $arItem) {
	$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
	$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));

	$classImg = $classBlock = '';
	if ( (empty($arItem['DISPLAY_PROPERTIES']['SUB_TITLE_RATE']['DISPLAY_VALUE'])) && (empty($arItem['DISPLAY_PROPERTIES']['TITLE_RATE']['DISPLAY_VALUE'])) ) {
		$classImg = 'small_img';
		$classBlock = 'min_text_block';
	}

	?>
	<div class="big-banner-block <?= $classBlock ?>" id="<?= $this->GetEditAreaId($arItem['ID']) ?>">
		<div class="container big-banner-block__wrap" >
			<div class="big-banner-block__1-text">
				<h1 class="big-banner-block__name">
					<?= $arItem['~NAME'] ?>
				</h1>
			</div>
			<div class="big-banner-block__2-text">
				<? if (!empty($arItem['DISPLAY_PROPERTIES']['TITLE_RATE']['DISPLAY_VALUE'])): ?>
					<p class="big-banner-block__title_rate">
						<?= $arItem['DISPLAY_PROPERTIES']['TITLE_RATE']['DISPLAY_VALUE'] ?>
					</p>
				<? endif; ?>
				<? if (!empty($arItem['DISPLAY_PROPERTIES']['SUB_TITLE_RATE']['DISPLAY_VALUE'])): ?>
					<p class="big-banner-block__sub_title_rate">
						<?= $arItem['DISPLAY_PROPERTIES']['SUB_TITLE_RATE']['DISPLAY_VALUE'] ?>
					</p>
				<? endif; ?>
				<? if (!empty($arItem['DISPLAY_PROPERTIES']['RATE']['DISPLAY_VALUE'])): ?>
					<p class="big-banner-block__rate">
						<?= $arItem['DISPLAY_PROPERTIES']['RATE']['DISPLAY_VALUE'] ?>
					</p>
				<? endif; ?>
				<? if (!empty($arItem['DISPLAY_PROPERTIES']['TEXT_AFTER_RATE']['DISPLAY_VALUE'])): ?>
					<span class="big-banner-block__text_after_rate">
						<?= $arItem['DISPLAY_PROPERTIES']['TEXT_AFTER_RATE']['DISPLAY_VALUE'] ?>
					</span>
				<? endif; ?>
			</div>
			<?
			if (!empty($arItem['PREVIEW_PICTURE']['SRC'])): ?>
				<div class="big-banner-block__3-img <?= $classImg ?>">
					<img src="<?= $arItem['PREVIEW_PICTURE']['SRC'] ?>" alt="<?= $arItem['PREVIEW_PICTURE']['ALT'] ?>" class="big_img" />
				</div>
			<? endif; ?>
			<? if (!empty($arItem['DISPLAY_PROPERTIES']['RIGHT_TEXT']['DISPLAY_VALUE'])): ?>
				<div class="big-banner-block__4-text">
					<p class="big-banner-block__right_text">
						<?= $arItem['DISPLAY_PROPERTIES']['RIGHT_TEXT']['DISPLAY_VALUE'] ?>
					</p>
				</div>
			<? endif; ?>
		</div>
	</div>
<? } ?>