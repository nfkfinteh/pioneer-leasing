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
<?
 $arrFormat = array(
	 '01' => 'января',
	 '02' => 'февраля',
	 '03' => 'марта',
	 '04' => 'апреля',
	 '05' => 'мая',
	 '06' => 'июня',
	 '07' => 'июля',
	 '08' => 'августа',
	 '09' => 'сентября',
	 '10' => 'октября',
	 '11' => 'ноября',
	 '12' => 'декабря'
 );

 
?>
<h2 class="header-width">Новости компании</h2>
<div class="row mt-5">
	<div class="col-12 col-md-8 col-lg-9 order-2 order-md-1">
<?foreach($arResult["ITEMS"] as $arItem):?>
	
	<?

	list($d,$n) = explode('.', $arItem["DISPLAY_ACTIVE_FROM"]);


	$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
	$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
	?>
	<div class="news-list__item" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
		<div class="news-list__image">
			<a href="<?=$arItem["DETAIL_PAGE_URL"]?>">
				<img
					src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>"
					alt="<?=$arItem["PREVIEW_PICTURE"]["ALT"]?>"
					title="<?=$arItem["PREVIEW_PICTURE"]["TITLE"]?>"
					/>
			</a>
		</div>
		<div class="news-list__text">
				<a href="<?=$arItem["DETAIL_PAGE_URL"]?>"><h3><?echo $arItem["NAME"]?></h3></a>
				<?
				$res = strip_tags($arItem["DETAIL_TEXT"]);
				?>
				<p><?=TruncateText($res, 180)?></p>
				<time class="" datetime="<?echo $arItem["DISPLAY_ACTIVE_FROM"]?>"><?echo $d.' '.$arrFormat[$n]?></time>
		</div>
	</div>
<?endforeach;?>
</div>
	<?$APPLICATION->IncludeComponent(
		"bitrix:catalog.section.list",
		"pioneer-news",
		Array(
			"IBLOCK_ID" => "3",
			"SECTION_ID" => "#SECTION_ID#",
			"SECTION_CODE" => "",
			"SECTION_URL" => "/news/?id=#ID#",
			"COUNT_ELEMENTS" => "N",
			"TOP_DEPTH" => "2",
			"SECTION_FIELDS" => array(),
			"SECTION_USER_FIELDS" => array(),
			"ADD_SECTIONS_CHAIN" => "Y",
			"CACHE_TYPE" => "N",
			"CACHE_TIME" => "36000000",
			"CACHE_GROUPS" => "Y"
		),
		$component
	);?>
</div>
<?if($arParams["DISPLAY_BOTTOM_PAGER"]):?>
	<?=$arResult["NAV_STRING"]?>
<?endif;?>