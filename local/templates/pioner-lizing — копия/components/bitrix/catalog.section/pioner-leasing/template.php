<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?php
if (count($arResult["ITEMS"]) > 0)
{
?>
<div class="catalog-section sale-list">
<?if($arParams["DISPLAY_TOP_PAGER"]):?>
	<p><?=$arResult["NAV_STRING"]?></p>
<?endif?>
<?php
	foreach($arResult["ITEMS"] as $arElement)
	{
?>
	
	<div class="sale-node" data-id="<?= $arElement['ID'] ?>">
    	<a href="javascript:show_sale('<?= $arElement['ID'] ?>', '<?= SITE_TEMPLATE_PATH ?>'); void(0);">
            <div class="sale-node-inner">
                <div class="sale-node-title">
                    <div class="sale-node-name">
                        <?= html_entity_decode($arElement['NAME'], ENT_QUOTES, 'UTF-8') ?>
                    </div>
                    <div class="sale-node-price">
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
                <div class="sale-node-img">
                    <?php 
                        if (!empty($arElement['PREVIEW_PICTURE']['SRC']))
                        {
                    ?>
                    <img 
                        src="<?= $arElement['PREVIEW_PICTURE']['SRC'] ?>" 
                        alt="<?= $arElement['ALT'] ?>" 
                        title="<?= $arElement['TITLE'] ?>" 
                    />
                    <? }; ?>
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
	<script type="text/javascript">
		$(document).ready(function ()
		{
			$('.bg_pagination_perpage').remove();
		});
	</script>
<?php	
	};
?>
</div>
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




