<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?
$strTitle = "";
?>

<div class="news-section-list">
	<h3>Архив новостей</h3>
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

	
	print('<ul>');
	for ($i = 0; $i<count($arResult["SECTIONS"]); $i++)
	{
		$arSection = $arResult["SECTIONS"][$i];
		
		$class = "";
		$show_subs = false;
		if (($_REQUEST['id'] == $arSection['ID']) OR ($arSection['ID'] == $select_node['IBLOCK_SECTION_ID']))
		{
			$class .= " select-node";
			$show_subs = true;
		};
		
		if ($arSection["DEPTH_LEVEL"] == 1)
		{
			print('<li class="'.$class.'">
				<a href="'.$arSection["SECTION_PAGE_URL"].'">'.$arSection["NAME"].'<div class="expand-icon"></div></a>
				<ul>');
					for ($j = 0; $j<count($arResult["SECTIONS"]); $j++)
					{
						$classSub = "";
						$arSubSection = $arResult["SECTIONS"][$j];
						if ($arSubSection['IBLOCK_SECTION_ID'] == $arSection['ID'])
						{
							if ($_REQUEST['id'] == $arSubSection['ID'])
							{
								$classSub .= " select-sub-node";
							};
							
							print('<li class="'.$classSub.'">
								<a href="'.$arSubSection["SECTION_PAGE_URL"].'">'.$arSubSection["NAME"].'</a>
							</li>');
						};
					};
				print('</ul>
			</li>');
		};
	};
	print('</ul>');
	?>
</div>
<?=($strTitle?'<br/><h2>'.$strTitle.'</h2>':'')?>
