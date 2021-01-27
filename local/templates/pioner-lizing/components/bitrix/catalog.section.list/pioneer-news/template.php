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

	
	//Получаем активный
	$select_node = NULL;
	for ($i = 0; $i<count($arResult["SECTIONS"]); $i++)
	{
		$arSection = $arResult["SECTIONS"][$i];
		
		if ($_REQUEST['id'] == $arSection['ID'])
		{
			$select_node = $arSection;
			break;
		};
	};

	for ($i = 0; $i<count($arResult["SECTIONS"]); $i++)
	{
		$arSection = $arResult["SECTIONS"][$i];
		
		$class = "";
		$show_subs = false;
		if (($_REQUEST['id'] == $arSection['ID']))
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
