<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?if (!empty($arResult)):?>
<div class="navbar-dropdown__links">

<?
foreach($arResult as $arItem):
	if($arParams["MAX_LEVEL"] == 1 && $arItem["DEPTH_LEVEL"] > 1)
		continue;
?>
<?
//if($arItem["SELECTED"]):?>
	<div class="navbar-dropdown__links-sub-div <?=$arItem["PARAMS"]["CLASS"]?>">
      <a href="<?=$arItem["LINK"]?>"><?=$arItem["TEXT"]?></a>
   	</div>
	<?/*else:?>
		<li><a href="<?=$arItem["LINK"]?>"><?=$arItem["TEXT"]?></a></li>
	<?endif*/?>

<?endforeach?>

</div>
<?endif?>