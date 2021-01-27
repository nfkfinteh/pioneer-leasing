<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
?>
<div class="news-carousel owl-carousel owl-theme">
	<?foreach($arResult["ITEMS"] as $arItem):?>
		<div class="news-carousel__item">
			<time class="news-carousel__date" datetime="<?echo $arItem["DISPLAY_ACTIVE_FROM"]?>"><?echo $arItem["DISPLAY_ACTIVE_FROM"]?></time>
			<a href="<?=$arItem["DETAIL_PAGE_URL"]?>"><h3 class="news-carousel__title"><?echo $arItem["NAME"]?></h3></a>
			<p class="news-carousel__description"><?
				$res = strip_tags($arItem["DETAIL_TEXT"]);
				?>
				<?=TruncateText($res, 180)?>
			</p>
		</div>
	<?endforeach;?>
</div>