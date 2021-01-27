<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?php 
if (!isset($_REQUEST['news_id']))
{
?>
<?php 
if (count($arResult["ITEMS"]) > 0)
{
?>
<?if($arParams["DISPLAY_TOP_PAGER"]):?>
	<p><?=$arResult["NAV_STRING"]?></p>
<?endif?>

<? foreach($arResult["ITEMS"] as $arElement) { ?>
<?php
	$d = strtotime($arElement['DATE_ACTIVE_FROM']);
	
	switch (date('m', $d))
	{
		case 1: $month = 'января'; break;
		case 2: $month = 'февраля'; break;
		case 3: $month = 'марта'; break;
		case 4: $month = 'апреля'; break;
		case 5: $month = 'мая'; break;
		case 6: $month = 'июня'; break;
		case 7: $month = 'июля'; break;
		case 8: $month = 'августа'; break;
		case 9: $month = 'сентября'; break;
		case 10: $month = 'октября'; break;
		case 11: $month = 'ноября'; break;
		case 12: $month = 'декабря'; break;
	};
	
	$day = date('d', $d);
	
	$NEWS_DATE = $day.' '.$month;
?>
		<div class="news-list__item">
			<?php
			if (!empty($arElement['PREVIEW_PICTURE']['SRC']))
			{
		?>
			<div class="news-list__image">
				<a href="/news/?id=<?= $arElement['~IBLOCK_SECTION_ID'] ?>&news_id=<?= $arElement['ID'] ?>">
					<img src="<?= $arElement['PREVIEW_PICTURE']['SRC'] ?>"
						srcset="<?= $arElement['PREVIEW_PICTURE']['SRC'] ?>"
						alt="<?= $arElement['PREVIEW_PICTURE']['ALT'] ?>">
				</a>
			</div>
			<div class="news-list__text">
				<a href="/news/?id=<?= $arElement['~IBLOCK_SECTION_ID'] ?>&news_id=<?= $arElement['ID'] ?>">
					<h3><?= $arElement['NAME'] ?></h3>
				</a>
				<p><?= $arElement['PREVIEW_TEXT'] ?></p>
				<time class="" datetime="2020-06-18"><?= $NEWS_DATE ?></time>
			</div>
		</div>
		<?php
			}
		?>

		<? } ?>

<?if($arParams["DISPLAY_BOTTOM_PAGER"]):?>
	
<?endif?>
<?php
};
?>
<?php
} else {
?>
<?$APPLICATION->IncludeComponent(
	"bitrix:news.detail",
	"pioneer-leasing",
	Array(
		"DISPLAY_DATE" => "Y",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"USE_SHARE" => "N",
		"AJAX_MODE" => "N",
		"IBLOCK_TYPE" => "news",
		"IBLOCK_ID" => "3",
		"ELEMENT_ID" => $_REQUEST['news_id'],
		"ELEMENT_CODE" => "",
		"CHECK_DATES" => "Y",
		"FIELD_CODE" => array(),
		"PROPERTY_CODE" => array(),
		"IBLOCK_URL" => "",
		"META_KEYWORDS" => "-",
		"META_DESCRIPTION" => "-",
		"BROWSER_TITLE" => "NAME",
		"SET_TITLE" => "Y",
		"SET_STATUS_404" => "N",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
		"ADD_SECTIONS_CHAIN" => "Y",
		"USE_PERMISSIONS" => "N",
		"CACHE_TYPE" => "A",
		"CACHE_TIME" => "36000000",
		"CACHE_GROUPS" => "Y",
		"PAGER_TEMPLATE" => "",
		"DISPLAY_TOP_PAGER" => "N",
		"DISPLAY_BOTTOM_PAGER" => "N",
		"PAGER_TITLE" => "Страница",
		"PAGER_SHOW_ALL" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"AJAX_OPTION_HISTORY" => "N"
	)
);?>
<?php
};
?>