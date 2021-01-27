<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?php
	$isIPad = (bool) strpos($_SERVER['HTTP_USER_AGENT'],'iPad');
	
	$class = ' not-hover';
	
	if ($isIPad)
	{
		$class = "";
	};
	
	if(strstr($_SERVER['HTTP_USER_AGENT'],'iPod') || strstr($_SERVER['HTTP_USER_AGENT'],'iPhone'))
	{
		$class = "";
	}
	
?>


<?if (!empty($arResult)):?>

<div class="top-menu pioneer-menu <?=$class ?>">





<ul id="top-menu">

<?

$previousLevel = 0;

foreach($arResult as $arItem):?>

	<?php

		$class = "";

		if (($previousLevel == 0) AND ($arItem['ITEM_INDEX'] == 0))

		{

			$arItem["LINK"] = '/';

			if ($APPLICATION->GetCurPage() == '/index.php')

			{

				$class .= ' item-selected ';

			}

		};

		

		

		if ($arItem["SELECTED"])

		{

			$class .= " item-selected ";

		};

	?>

	<?if ($previousLevel && $arItem["DEPTH_LEVEL"] < $previousLevel):?>

		<?=str_repeat("</ul></li>", ($previousLevel - $arItem["DEPTH_LEVEL"]));?>

	<?endif?>



	<?if ($arItem["IS_PARENT"]):?>



		<?if ($arItem["DEPTH_LEVEL"] == 1):?>

			<li class="<?= $class ?>">

                <a href="<?=$arItem["LINK"]?>" class="<?if ($arItem["SELECTED"]):?>root-item-selected<?else:?>root-item<?endif?>">

                	<div class="tm-left-bg"></div>

                    <div class="tm-right-bg"></div>

                    <div class="tm-text"><?=$arItem["TEXT"]?></div>

                </a>

				<ul>

		<?else:?>

			<li<?if ($arItem["SELECTED"]):?> class="item-selected"<?endif?>><a href="<?=$arItem["LINK"]?>" class="parent"><?=$arItem["TEXT"]?></a>

				<ul>

		<?endif?>



	<?else:?>



		<?if ($arItem["PERMISSION"] > "D"):?>



			<?if ($arItem["DEPTH_LEVEL"] == 1):?>

				<li class="<?= $class ?>">

                	<a href="<?=$arItem["LINK"]?>" class="<?if ($arItem["SELECTED"]):?>root-item-selected<?else:?>root-item<?endif?>">

                        <div class="tm-left-bg"></div>

                        <div class="tm-right-bg"></div>

                        <div class="tm-text"><?=$arItem["TEXT"]?></div>

                    </a>

                </li>

			<?else:?>

				<li<?if ($arItem["SELECTED"]):?> class="item-selected"<?endif?>>

                	<a href="<?=$arItem["LINK"]?>">

						<div class="tm-left-bg"></div>

                        <div class="tm-right-bg"></div>

                        <div class="tm-text"><?=$arItem["TEXT"]?></div>

                    </a>

                </li>

			<?endif?>



		<?else:?>



			<?if ($arItem["DEPTH_LEVEL"] == 1):?>

				<li class="<?= $class ?>">

                	<a href="" class="<?if ($arItem["SELECTED"]):?>root-item-selected<?else:?>root-item<?endif?>" title="<?=GetMessage("MENU_ITEM_ACCESS_DENIED")?>">

						<div class="tm-left-bg"></div>

                        <div class="tm-right-bg"></div>

                        <div class="tm-text"><?=$arItem["TEXT"]?></div>

                    </a>

                </li>

			<?else:?>

				<li class="<?= $class ?>">

                	<a href="" class="denied" title="<?=GetMessage("MENU_ITEM_ACCESS_DENIED")?>">

						<div class="tm-left-bg"></div>

                        <div class="tm-right-bg"></div>

                        <div class="tm-text"><?=$arItem["TEXT"]?></div>

                    </a>

                </li>

			<?endif?>



		<?endif?>



	<?endif?>



	<?$previousLevel = $arItem["DEPTH_LEVEL"];?>



<?endforeach?>



<?if ($previousLevel > 1)://close last item tags?>

	<?=str_repeat("</ul></li>", ($previousLevel-1) );?>

<?endif?>



</ul>

<div class="menu-clear-left"></div>

</div>

<?endif?>