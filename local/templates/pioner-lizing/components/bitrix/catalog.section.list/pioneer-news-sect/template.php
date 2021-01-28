<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<div class="col-12 col-md-4 col-lg-3 order-1 order-md-2">
	<div class="news-archive news-archive_sticky_160">
		<h3>Архив новостей</h3>
		<div class="news-archive__years">
<?
$strTitle = "";
?>
	<?
	$TOP_DEPTH = $arResult["SECTION"]["DEPTH_LEVEL"];
	$CURRENT_DEPTH = $TOP_DEPTH;


	for ($i = 0; $i<count($arResult["SECTIONS"]); $i++)
	{
		$arSection = $arResult["SECTIONS"][$i];

		$class = "";
		$show_subs = false;
		if (($arSection['ID'] == $arParams['SELECTED_SECT_ID']))
		{
			$show_subs = true;
		};
		if (($arSection['CODE'] == $arParams['SELECTED_SECT_CODE']))
		{
			$show_subs = true;
		};

		if ($arSection["DEPTH_LEVEL"] == 1)
		{?>

		<a class="news-archive__btn" <?if(!$show_subs){?>href="<?=$arSection["SECTION_PAGE_URL"]?>"<?}?>><?=$arSection["NAME"]?></a>
				<?

		};
	};
	?>
		</div>
	</div>
</div>
