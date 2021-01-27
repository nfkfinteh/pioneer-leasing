<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<div class="row mt-5">
<?php
if (count($arResult["ITEMS"]) > 0)
{
?>
<?if($arParams["DISPLAY_TOP_PAGER"]):?>
	<p><?=$arResult["NAV_STRING"]?></p>
<?endif?>
<?php
	foreach($arResult["ITEMS"] as $arElement)
	{
?>
	<div class="col-12 col-md-6 col-xl-4">
		<a href="<?= $arElement['DETAIL_PAGE_URL'] ?>" class="sale-card">
			<div class="sale-card__blackout">
				<?php 
					if (!empty($arElement['PREVIEW_PICTURE']['SRC']))
					{
				?>
				<img class="sale-card__image"
					src="<?= $arElement['PREVIEW_PICTURE']['SRC'] ?>" 
					alt="<?= $arElement['ALT'] ?>" 
					title="<?= $arElement['TITLE'] ?>" 
				/>
				<? }; ?>
			</div>
			<div class="sale-card__label">
					<div class="sale-card__title"><?= html_entity_decode($arElement['NAME'], ENT_QUOTES, 'UTF-8') ?></div>
					<div class="sale-card__price">
						<?php if($arElement['PROPERTIES']['price']['VALUE'] == 0){
							?>Цена по запросу<?
						} else { ?>
						<span><?php if ($arElement['PROPERTIES']['price_per_month']['VALUE_XML_ID'] == 'Y') print('от '); ?></span>
							<?= number_format($arElement['PROPERTIES']['price']['VALUE'],  0, '', ' ') ?> 
							<?php if ($arElement['PROPERTIES']['price_per_month']['VALUE_XML_ID'] != 'Y')
							{
							?>
								<span class="rouble">i</span>
							<?php	
							}
							?>
							<span><?php if ($arElement['PROPERTIES']['price_per_month']['VALUE_XML_ID'] == 'Y') print(' в месяц'); ?></span>
						<?php }?>
					</div>
			</div>
		</a>
	</div>
<?php
	};
?>
<?php
	if (count($arResult["ITEMS"]) > 6)
	{
?>
<?if($arParams["DISPLAY_BOTTOM_PAGER"]):?>
	<p><?=$arResult["NAV_STRING"]?></p>
<?endif?>
<?php
	} else {
?>
<?php	
	};
?>
<?php
} else {
?>
<p>
Извините, подходящих предложений по вашему запросу не обнаружено.
</p>
<br>
<?php
};
?>
</div>

