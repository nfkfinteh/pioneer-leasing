<?
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

$this->setFrameMode(true);

if(!$arResult["NavShowAlways"])
{
	if ($arResult["NavRecordCount"] == 0 || ($arResult["NavPageCount"] == 1 && $arResult["NavShowAll"] == false))
		return;
}

$strNavQueryString = ($arResult["NavQueryString"] != "" ? $arResult["NavQueryString"]."&amp;" : "");
$strNavQueryStringFull = ($arResult["NavQueryString"] != "" ? "?".$arResult["NavQueryString"] : "");
?>

<!--pagination-->
<div class="row justify-content-between align-items-center pr-lg-4">
	<?if ($arResult["NavPageNomer"] > 1):?>
	    <div class="col-auto">
	        <a href="<?=$arResult["sUrlPath"]?>?<?=$strNavQueryString?>PAGEN_<?=$arResult["NavNum"]?>=<?=($arResult["NavPageNomer"]-1)?>" class="btn btn-outline-white">Назад</a>
	    </div>
	<?else:?>
		<div class="col-auto">
		</div>
	<?endif?>

    <div class="col-auto">
        <nav>
            <ul class="pagination mb-0">
            	<?
			    $arResult['minPage'] = 1;
			    $arResult['maxPage'] = $arResult['NavPageCount'];
			    for ($i=$arResult['minPage'];$i<=$arResult['maxPage'];$i++){
			    	if ($i > $arResult['NavPageCount']) continue;
					if ($i==$arResult['NavPageNomer']) {//текущая страница?>
						<li class="page-item active">
							<a class="page-link" href="<?= $arResult["sUrlPath"].'?'.$strNavQueryString.'PAGEN_'.$arResult["NavNum"].'='.$i ?>">
								<?=$i?>
							</a>
                		</li>
					<?} else {?>
						<li class="page-item">
							<a class="page-link" href="<?= $arResult["sUrlPath"].'?'.$strNavQueryString.'PAGEN_'.$arResult["NavNum"].'='.$i ?>"><?=$i?></a>
                		</li>
					<?}
				}
				?>
            </ul>
        </nav>
    </div>

    <?if($arResult["NavPageNomer"] < $arResult["NavPageCount"]):?>
	    <div class="col-auto">
	        <a href="<?=$arResult["sUrlPath"]?>?<?=$strNavQueryString?>PAGEN_<?=$arResult["NavNum"]?>=<?=($arResult["NavPageNomer"]+1)?>" class="btn btn-outline-white">Вперед</a>
	    </div>
	<?else:?>
		<div class="col-auto">
		</div>
	<?endif?>
</div>