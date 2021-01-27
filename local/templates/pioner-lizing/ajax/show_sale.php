<?php
//define('LANG', 'ru');
//define("NO_KEEP_STATISTIC", true);
 
require_once($_SERVER['DOCUMENT_ROOT'] . "/bitrix/modules/main/include/prolog_before.php");
CModule::IncludeModule('main');
 
@set_time_limit(30000);
ini_set('max_execution_time', 30000);
?>
<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?
	require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");
	CModule::IncludeModule('iblock');
	
	$ID = $_POST['element_id'];
	$IBLOCK_ID = 5;
	
	$res = CIBlockElement::GetByID($ID);
	$arResult = $res->GetNext();
	
	$db_props = CIBlockElement::GetProperty($IBLOCK_ID, $ID, "sort", "asc", array());
	$PROPS = array();
	while($ar_props = $db_props->Fetch())
	{
		if ($ar_props['CODE'] != 'photos')
		{
			$PROPS[$ar_props['CODE']] = $ar_props['VALUE'];
		};
	};
	
	$db_props = CIBlockElement::GetProperty($IBLOCK_ID, $ID, "sort", "asc", array("CODE" => "photos"));
	$IMGS = array();
	while($ar_props = $db_props->Fetch())
	{
		$src = CFile::GetPath($ar_props['VALUE']);
		if (!empty($src))
		{
			$IMGS[] = $src;
		};
	};
	
	$PROPS['photos'] = $IMGS;	
	
?>
	<a href="javascript:$('#show-fsale').fadeOut('fast'); void(0);" class="fixed-button-close"></a>
	<div class="show-fsale-header">
        <?= strip_tags(html_entity_decode($arResult['NAME'], ENT_QUOTES, 'UTF-8'), "") ?>
    </div>
    <div class="show-fsale-adress">
    	<?= $PROPS['adress'] ?>
    </div>
    	<?php
			if (count($PROPS['photos']) > 0)
			{
		?>
    <div class="show-fsale-imgs">
    	<div class="show-fsale-pagination-imgs">
        	<ul style="width:<?= count($PROPS['photos'])*15; ?>px">
        	<?php
				for ($i=0; $i< count($PROPS['photos']); $i++)
				{
					if ($i == 0)
					{
						$class = "class=\"active\"";
					} else {
						$class = "";
					};
					print('<li '.$class.'><a title="Изображение '.($i+1).'" href="javascript:void(0);" onClick="show_sale_img('.$i.', this);"></a></li>');						
				};
			?>
            </ul>
        </div>
		<?php
			for ($i=0; $i< count($PROPS['photos']); $i++)
			{
				$img = $PROPS['photos'][$i];
				if ($i == 0)
				{
					$class = "";
				} else {
					$class = "class=\"img-hide\"";
				};
?>
	<img <?= $class ?> src="<?= $img ?>" alt="<?= $arResult['NAME'] ?>" onClick="show_next_sale_img(this);" title="<?= $arResult['NAME'] ?>" />
<?php
			};
		?>
    </div>
		<?php
			};
		?>
	<div class="show-fsale-introtext">
    	<?= $arResult['PREVIEW_TEXT'] ?>
    </div>
    <div class="show-fsale-submit">
    	<a href="javascript:$('#show-fsale').fadeOut('fast'); $('#send-order').attr('data-id', '<?= $arResult['ID'] ?>'); $('#send-order').fadeIn('fast'); void(0);">Подать заявку</a>
    </div>