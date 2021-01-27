<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?if (!empty($arResult)):?>
	<ul class="second-menu__menu">
		<?
		foreach($arResult['TREE'] as $arItem):
			if($arParams["MAX_LEVEL"] == 1 && $arItem["DEPTH_LEVEL"] > 1)
				continue;
			?>
			<?if(!empty($arItem['CHILDREN'])):?>
				<li class="<?if($arItem["SELECTED"]):?>active<?endif;?> second-menu__dropdown <?if ($arItem['PARAMS']['SHOW_CHILDREN'] == "Y") { echo 'show_child_menu_block'; }?>">
					<a href="<?=$arItem["LINK"]?>"><?=$arItem["TEXT"]?></a>
					<ul class="second-menu__submenu tabs__caption">
						<?foreach($arItem['CHILDREN'] as $arChildren):?>
							<li class="<?if($arChildren["SELECTED"]):?>active<?endif;?>"><a href="<?=$arChildren["LINK"]?>"><?=$arChildren["TEXT"]?></a></li>
						<?endforeach;?>
					</ul>
				</li>
			<?else:?>
				<li <?if( $arItem["SELECTED"] ):?> class="active"<?endif?>>
					<a href="<?=$arItem["LINK"]?>"<?
						foreach($arItem['PARAMS'] as $attr => $attrItem):
							echo $attr .'="'. $attrItem.'"';
							endforeach;
						?>>
						<?=$arItem["TEXT"]?>
					</a>
				</li>
			<?endif?>
		<?endforeach?>
	</ul>
<?endif?>