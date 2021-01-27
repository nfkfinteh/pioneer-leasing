<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?php
if (!isset($_REQUEST['perpage']))
{
	$_REQUEST['perpage'] = 9;
}
?>
<div class="sale-filter">
    <form name="<?echo $arResult["FILTER_NAME"]."_form"?>" action="<?echo $arResult["FORM_ACTION"]?>" method="get">
        <?foreach($arResult["ITEMS"] as $arItem):
            if(array_key_exists("HIDDEN", $arItem)):
                echo $arItem["INPUT"];
            endif;
        endforeach;?>

        <?foreach($arResult["ITEMS"] as $arItem):?>
			<?if(!array_key_exists("HIDDEN", $arItem)):?>
     			<div class="sale-filter-node">
                	<div class="sale-filter-label">
						<?=$arItem["NAME"]?>
                    </div>
                    <div class="sale-filter-input">
                        <?php
							if ($arItem['INPUT_NAME'] == 'arrFilter_pf[category]')
							{
								$arItem['INPUT'] = str_replace('(все)', 'Все предложения', $arItem['INPUT']);
								$arItem['INPUT'] = str_replace('arrFilter_pf[category]', 'arrFilter_pf[category]" id="sale-category-select" ', $arItem['INPUT']); 
								
								print($arItem["INPUT"]);	
							} else {
								$arItem['INPUT'] = str_replace('&nbsp;по&nbsp;', '', $arItem['INPUT']);
								$arItem['INPUT'] = str_replace('arrFilter_pf[price][LEFT]', 'arrFilter_pf[price][LEFT]" placeholder="От" ', $arItem['INPUT']);
								$arItem['INPUT'] = str_replace('arrFilter_pf[price][RIGHT]', 'arrFilter_pf[price][RIGHT]" placeholder="До" ', $arItem['INPUT']);
								
								print($arItem["INPUT"]);
							};
						?>
                    </div>
				</div>
            <?endif?>
        <?endforeach;?>
        <div class="sale-filter-node">
        	<input type="submit" name="set_filter" value="Показать" /><input type="hidden" name="set_filter" value="Y" />
        </div>
    </form>
	<div class="bg_pagination_perpage">
    	<ul>
        	<li class="bg_pagination_perpage_title">
            	Показывать по:
            </li>
        	
            <li class="bg_pagination_perpage_page<? if ($_REQUEST['perpage'] == 9) print(' active'); ?>">
            	<? if ($_REQUEST['perpage'] == 9) { ?>
                	9
                <? } else { ?>
                	<a href="?perpage=9">9</a>
                <? }?>
    		</li>
            
            <li class="bg_pagination_perpage_separator">|</li>
            
            <li class="bg_pagination_perpage_page<? if ($_REQUEST['perpage'] == 18) print(' active'); ?>">
            	<? if ($_REQUEST['perpage'] ==18) { ?>
                	18
                <? } else { ?>
                	<a href="?perpage=18">18</a>
                <? }?>
    		</li>
 			
            <li class="bg_pagination_perpage_separator">|</li>
            
            <li class="bg_pagination_perpage_page<? if ($_REQUEST['perpage'] == 36) print(' active'); ?>">
            	<? if ($_REQUEST['perpage'] == 36) { ?>
                	36
                <? } else { ?>
                	<a href="?perpage=36">36</a>
                <? }?>
    		</li>
        </ul>
    </div>
	<div class="clear"></div>
</div>
<div class="sale-filter-footer-line"></div>