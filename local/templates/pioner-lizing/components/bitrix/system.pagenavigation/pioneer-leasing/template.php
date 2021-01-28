<? if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

if (!isset($_REQUEST['perpage']))
{
	$_REQUEST['perpage'] = 9;
}
	
if (!$arResult["NavShowAlways"])
{
	if (0 == $arResult["NavRecordCount"] || (1 == $arResult["NavPageCount"] && false == $arResult["NavShowAll"]))
		return;
}
if ('' != $arResult["NavTitle"])
	$arResult["NavTitle"] .= ' ';

$arSizes = array(5, 10, 15, 20, 25, 30, 40, 50, 100);
if (0 < $arResult['NavPageSize'] && !in_array($arResult['NavPageSize'], $arSizes))
	$arSizes[] = $arResult['NavPageSize'];
sort($arSizes);

$strSelectPath = $arResult['sUrlPathParams'].($arResult["bSavePage"] ? '&PAGEN_'.$arResult["NavNum"].'='.(true !== $arResult["bDescPageNumbering"] ? 1 : '').'&' : '').'SHOWALL_'.$arResult["NavNum"].'=0&SIZEN_'.$arResult["NavNum"].'=';

?>
<div class="bx_pagination_bottom">
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

	<div class="bx_pagination_section_two">
		<div class="bx_pg_section bx_pg_show_col">
			<span class="bx_wsnw"><?
			if (!$arResult["NavShowAll"])
			{
			?>
				<span class="bx_pg_text"><? echo GetMessage('nav_size_descr'); ?></span>
				<div class="bx_pagination_select_container">
					<select onchange="if (-1 < this.selectedIndex) {location.href='<? echo $strSelectPath; ?>'+this[selectedIndex].value};"><?
					foreach ($arSizes as &$intOneSize)
					{
						?><option value="<? echo $intOneSize; ?>"<? echo ($arResult['NavPageSize'] == $intOneSize ? ' selected="selected"' : ''); ?>><? echo $intOneSize; ?></option>
						<?
					}
					unset($intOneSize);
					?>
					</select>
				</div><?
			}
			?>
				<? echo $arResult["NavTitle"]; ?><?=$arResult["NavFirstRecordShow"]; ?> - <?=$arResult["NavLastRecordShow"]?> <?=GetMessage("nav_of")?> <?=$arResult["NavRecordCount"]?>
			</span>
		</div>
	</div>

	<div class="bx_pagination_section_one">
		<div class="bx_pg_section pg_pagination_num">
			<div class="bx_pagination_page"><?
if ($arResult["NavShowAll"])
{
?>
				<span class="bx_pg_text"><? echo GetMessage('nav_all_descr'); ?></span>
				<ul>
					<li><a href="<?=$arResult['sUrlPathParams']; ?>SHOWALL_<?=$arResult["NavNum"]?>=0&SIZEN_<?=$arResult["NavNum"]?>=<?=$arResult['NavPageSize']; ?>"><? echo GetMessage('nav_show_pages'); ?></a></li>
				</ul>
<?
}
else
{
?>
				<span class="bx_pg_text"><? echo GetMessage('nav_pages'); ?></span>
				<ul>
<?
	if (true === $arResult["bDescPageNumbering"])
	{
		?><li><?
		if ($arResult["NavPageNomer"] < $arResult["NavPageCount"])
		{
			?><a href="<?=$arResult['sUrlPathParams']; ?>PAGEN_<?=$arResult["NavNum"]?>=<?=($arResult["NavPageNomer"]+1)?>&SIZEN_<?=$arResult["NavNum"]?>=<?=$arResult['NavPageSize']; ?>" title="<? echo GetMessage('nav_prev_title'); ?>">
            	<div class="prev-bpage"></div>
            </a><?
		}
		else
		{
			?>
            <a href="javascript:void(0)" class="default-cursor" title="<? echo GetMessage('nav_prev_title'); ?>">
				<div class="prev-bpage"></div>
           	</a>
			<?
		}
		?></li><?
		$NavRecordGroup = $arResult["NavPageCount"];
		while ($NavRecordGroup >= 1)
		{
			$NavRecordGroupPrint = $arResult["NavPageCount"] - $NavRecordGroup + 1;
			$strTitle = GetMessage(
				'nav_page_num_title',
				array('#NUM#' => $NavRecordGroupPrint)
			);
			if ($NavRecordGroup == $arResult["NavPageNomer"])
			{
				?><li class="bx_active" title="<? echo GetMessage('nav_page_current_title'); ?>"><? echo $NavRecordGroupPrint; ?></li><?
			}
			elseif ($NavRecordGroup == $arResult["NavPageCount"] && $arResult["bSavePage"] == false)
			{
				?><li><a href="<?=$arResult['sUrlPathParams']; ?>SIZEN_<?=$arResult["NavNum"]?>=<?=$arResult['NavPageSize']; ?>" title="<? echo $strTitle; ?>"><?=$NavRecordGroupPrint?></a></li><?
			}
			else
			{
				?><li><a href="<?=$arResult['sUrlPathParams']; ?>PAGEN_<?=$arResult["NavNum"]?>=<?=$NavRecordGroup?>&SIZEN_<?=$arResult["NavNum"]?>=<?=$arResult['NavPageSize']; ?>" title="<? echo $strTitle; ?>"><?=$NavRecordGroupPrint?></a></li><?
			}
			if (1 == ($arResult["NavPageCount"] - $NavRecordGroup) && 2 < ($arResult["NavPageCount"] - $arResult["nStartPage"]))
			{
				$middlePage = floor(($arResult["nStartPage"] + $NavRecordGroup)/2);
				$NavRecordGroupPrint = $arResult["NavPageCount"] - $middlePage + 1;
				$strTitle = GetMessage(
					'nav_page_num_title',
					array('#NUM#' => $NavRecordGroupPrint)
				);
				?><li><a href="<?=$arResult['sUrlPathParams']; ?>PAGEN_<?=$arResult["NavNum"]?>=<?=$middlePage?>&SIZEN_<?=$arResult["NavNum"]?>=<?=$arResult['NavPageSize']; ?>" title="<? echo $strTitle; ?>">...</a></li><?
				$NavRecordGroup = $arResult["nStartPage"];
			}
			elseif ($NavRecordGroup == $arResult["nEndPage"] && 3 < $arResult["nEndPage"])
			{
				$middlePage = ceil(($arResult["nEndPage"] + 2)/2);
				$NavRecordGroupPrint = $arResult["NavPageCount"] - $middlePage + 1;
				$strTitle = GetMessage(
					'nav_page_num_title',
					array('#NUM#' => $NavRecordGroupPrint)
				);
				?><li><a href="<?=$arResult['sUrlPathParams']; ?>PAGEN_<?=$arResult["NavNum"]?>=<?=$middlePage?>&SIZEN_<?=$arResult["NavNum"]?>=<?=$arResult['NavPageSize']; ?>" title="<? echo $strTitle; ?>">...</a></li><?
				$NavRecordGroup = 2;
			}
			else
			{
				$NavRecordGroup--;
			}
		}
		?><li><?
		if ($arResult["NavPageNomer"] > 1)
		{
			?><a href="<?=$arResult['sUrlPathParams']; ?>PAGEN_<?=$arResult["NavNum"]?>=<?=($arResult["NavPageNomer"]+1)?>&SIZEN_<?=$arResult["NavNum"]?>=<?=$arResult['NavPageSize']; ?>" title="<? echo GetMessage('nav_next_title'); ?>">
            	<div class="next-bpage"></div>
            </a><?
		}
		else
		{
			?>
                <a href="javascript:void(0)" class="default-cursor" title="<? echo GetMessage('nav_next_title'); ?>">
                    <div class="next-bpage"></div>
                </a>
			<?
		}
		?></li><?
	}
	else
	{
?>
					<li><?
		if (1 < $arResult["NavPageNomer"])
		{
			?><a href="<?=$arResult['sUrlPathParams']; ?>PAGEN_<?=$arResult["NavNum"]?>=<?=($arResult["NavPageNomer"]-1)?>&SIZEN_<?=$arResult["NavNum"]?>=<?=$arResult['NavPageSize']; ?>" title="<? echo GetMessage('nav_prev_title'); ?>">
            	<div class="prev-bpage"></div>
            </a><?
		}
		else
		{
			?><a href="javascript:void(0)" class="default-cursor" title="<? echo GetMessage('nav_prev_title'); ?>">
                    <div class="prev-bpage"></div>
                </a>
			<?
		}
		?></li><?
		$NavRecordGroup = 1;
		while($NavRecordGroup <= $arResult["NavPageCount"])
		{
			$strTitle = GetMessage(
				'nav_page_num_title',
				array('#NUM#' => $NavRecordGroup)
			);
			if ($NavRecordGroup == $arResult["NavPageNomer"])
			{
				?><li class="bx_active" title="<? echo GetMessage('nav_page_current_title'); ?>"><a href="javascript:void(0);"><? echo $NavRecordGroup; ?></a></li><?
			}
			elseif ($NavRecordGroup == 1 && $arResult["bSavePage"] == false)
			{
				?><li><a href="<?=$arResult['sUrlPathParams']; ?>SIZEN_<?=$arResult["NavNum"]?>=<?=$arResult['NavPageSize']; ?>" title="<? echo $strTitle; ?>"><?=$NavRecordGroup?></a></li><?
			}
			else
			{
				?><li><a href="<?=$arResult['sUrlPathParams']; ?>PAGEN_<?=$arResult["NavNum"]?>=<?=$NavRecordGroup?>&SIZEN_<?=$arResult["NavNum"]?>=<?=$arResult['NavPageSize']; ?>" title="<? echo $strTitle; ?>"><?=$NavRecordGroup?></a></li><?
			}
			if ($NavRecordGroup == 2 && $arResult["nStartPage"] > 3 && $arResult["nStartPage"] - $NavRecordGroup > 1)
			{
				$middlePage = ceil(($arResult["nStartPage"] + $NavRecordGroup)/2);
				$strTitle = GetMessage(
					'nav_page_num_title',
					array('#NUM#' => $middlePage)
				);
				?><li><a href="<?=$arResult['sUrlPathParams']; ?>PAGEN_<?=$arResult["NavNum"]?>=<?=$middlePage?>&SIZEN_<?=$arResult["NavNum"]?>=<?=$arResult['NavPageSize']; ?>" title="<? echo $strTitle; ?>">...</a></li><?
				$NavRecordGroup = $arResult["nStartPage"];
			}
			elseif ($NavRecordGroup == $arResult["nEndPage"] && $arResult["nEndPage"] < ($arResult["NavPageCount"] - 2))
			{
				$middlePage = floor(($arResult["NavPageCount"] + $arResult["nEndPage"] - 1)/2);
				$strTitle = GetMessage(
					'nav_page_num_title',
					array('#NUM#' => $middlePage)
				);
				?><li><a href="<?=$arResult['sUrlPathParams']; ?>PAGEN_<?=$arResult["NavNum"]?>=<?=$middlePage?>&SIZEN_<?=$arResult["NavNum"]?>=<?=$arResult['NavPageSize']; ?>" title="<? echo $strTitle; ?>">...</a></li><?
				$NavRecordGroup = $arResult["NavPageCount"]-1;
			}
			else
			{
				$NavRecordGroup++;
			}
		}
			?>
					<li><?
		if ($arResult["NavPageNomer"] < $arResult["NavPageCount"])
		{
			?><a href="<?=$arResult['sUrlPathParams']; ?>PAGEN_<?=$arResult["NavNum"]?>=<?=($arResult["NavPageNomer"]+1)?>&SIZEN_<?=$arResult["NavNum"]?>=<?=$arResult['NavPageSize']; ?>" title="<? echo GetMessage('nav_next_title'); ?>">
            	<div class="next-bpage"></div>
            </a><?
		}
		else
		{
			?><a href="javascript:void(0)" class="default-cursor" title="<? echo GetMessage('nav_next_title'); ?>">
                    <div class="next-bpage"></div>
                </a><?
		}
		?></li><?
		if ($arResult["bShowAll"])
		{
			?><li><a href="<?=$arResult['sUrlPathParams']; ?>SHOWALL_<?=$arResult["NavNum"]?>=1&SIZEN_<?=$arResult["NavNum"]?>=<?=$arResult["NavPageSize"]?>"><? echo GetMessage('nav_all'); ?></a></li><?
		}
	}
?>
				</ul><?
}
?>
			</div>
		</div>
	</div>
</div>