<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

/** @var array $arParams */
/** @var array $arResult */
/** @var CBitrixComponentTemplate $this */

/** @var PageNavigationComponent $component */
$component = $this->getComponent();

$this->setFrameMode(true);

?>
<nav aria-label="Постраничная навигация">
   <ul class="pagination">
   

	<?if ($arResult["CURRENT_PAGE"] > 1):?>
		<?if ($arResult["CURRENT_PAGE"] > 2):?>
			<li class="page-item">
				<a class="page-link" href="<?=htmlspecialcharsbx($component->replaceUrlTemplate($arResult["CURRENT_PAGE"]-1))?>">&lt;</a>
			</li>
		<?else:?>
			<li class="page-item">
				<a class="page-link" href="<?=htmlspecialcharsbx($arResult["URL"])?>">&lt;</a>
			</li>
		<?endif?>
			<li class="page-item"><a class="page-link" href="<?=htmlspecialcharsbx($arResult["URL"])?>">1</a></li>
	<?else:?>
			<li class="page-item disabled">
				<a class="page-link" href="#" tabindex="-1" aria-disabled="true">&lt;</a>
			</li>
			<li class="page-item active"><a class="page-link" href="#">1</a></li>
	<?endif?>

	<?
	$page = $arResult["START_PAGE"] + 1;
	while($page <= $arResult["END_PAGE"]-1):
	?>
		<?if ($page == $arResult["CURRENT_PAGE"]):?>
			<li class="page-item active"><a class="page-link" href="#"><?=$page?></a></li>
		<?else:?>
			<li class="page-item"><a class="page-link" href="<?=htmlspecialcharsbx($component->replaceUrlTemplate($page))?>"><?=$page?></a></li>
		<?endif?>
		<?$page++?>
	<?endwhile?>

	<?if($arResult["CURRENT_PAGE"] < $arResult["PAGE_COUNT"]):?>
		<?if($arResult["PAGE_COUNT"] > 1):?>
			<li class="page-item"><a class="page-link" href="<?=htmlspecialcharsbx($component->replaceUrlTemplate($arResult["PAGE_COUNT"]))?>"><?=$arResult["PAGE_COUNT"]?></a></li>
		<?endif?>
			<li class="page-item">
				<a class="page-link" href="<?=htmlspecialcharsbx($component->replaceUrlTemplate($arResult["CURRENT_PAGE"]+1))?>">&gt;</a>
			</li>
	<?else:?>
		<?if($arResult["PAGE_COUNT"] > 1):?>
			<li class="page-item active"><a class="page-link" href="#"><?=$arResult["PAGE_COUNT"]?></a></li>
		<?endif?>
			<li class="page-item disabled">
				<a class="page-link" href="#" tabindex="-1" aria-disabled="true">&gt;</a>
			</li>
	<?endif?>
<?endif?>



	</ul>
</nav>