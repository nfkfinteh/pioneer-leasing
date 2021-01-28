<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?if (!empty($arResult)):?>
<ul class="navbar-menu">

<?


foreach($arResult as $arItem):
	if($arParams["MAX_LEVEL"] == 1 && $arItem["DEPTH_LEVEL"] > 1)
		continue;
?>
<?
//if($arItem["SELECTED"]):?>

	<li class="nav-item <?=$arItem["PARAMS"]["CLASS"]?>">
		<a class="nav-link" href="<?=$arItem["LINK"]?>"><?=$arItem["TEXT"]?></a>
	</li>

	<?/*else:?>
		<li><a href="<?=$arItem["LINK"]?>"><?=$arItem["TEXT"]?></a></li>
	<?endif*/?>

<?endforeach?>
<div class="side_menu_dropdown">
	Лизинговые программы <svg height="7" viewBox="0 0 14 7" width="14" xmlns="http://www.w3.org/2000/svg">
	<path
		d="m7.00037 6.0929 6.32263-5.982549c.1555-.1471351.4049-.1471352.5604 0 .1555.147134.1555.383104 0 .530239l-6.60431 6.24906c-.1555.14713-.40488.14713-.56038 0l-6.601353-6.24906c-.0762825-.072179-.11735729-.169343-.11735729-.263732 0-.094388.03814129-.191552.11735729-.263732.155498-.1471339.404882-.1471339.560381 0z"
		fill="currentColor" /></svg></div>
	<div class="navbar-dropdown__menu_mobile">
				<?$APPLICATION->IncludeComponent(
				"bitrix:menu",
				"pioner_menu_main",
				Array(
				"ROOT_MENU_TYPE" => "top",
				"MAX_LEVEL" => "4",
				"CHILD_MENU_TYPE" => "",
				"USE_EXT" => "N",
				"DELAY" => "N",
				"ALLOW_MULTI_SELECT" => "N",
				"MENU_CACHE_TYPE" => "A",
				"MENU_CACHE_TIME" => "3600",
				"MENU_CACHE_USE_GROUPS" => "Y",
				"MENU_CACHE_GET_VARS" => array()
				)
				);?>
	</div>
<<<<<<< HEAD
<a class="side_menu_dropdown_link" href="/investor">Инвесторам</a>
=======
<a class="side_menu_dropdown_link" href="<?= HOST_PIONEER_LEASING ?>/investor/chetvertyj-vypusk/">Инвесторам</a>
>>>>>>> 566b7848f0b2f2776e7e546e21263df99fc8f306
</ul>
<?endif?>