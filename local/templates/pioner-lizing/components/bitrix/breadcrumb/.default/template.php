<?php
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

/**
 * @global CMain $APPLICATION
 */
global $APPLICATION;

//delayed function must return a string
if(empty($arResult))
	return "";

//we can't use $APPLICATION->SetAdditionalCSS() here because we are inside the buffered function GetNavChain()

$strReturn .= '<ul class="breadcrumbs" itemscope itemtype="http://schema.org/BreadcrumbList">';
$position = 1;
$itemSize = count($arResult);
for($index = 0; $index < $itemSize; $index++)
{
	$title = htmlspecialcharsex($arResult[$index]["TITLE"]);

	$nextRef = ($index < $itemSize-2 && $arResult[$index+1]["LINK"] <> ""? ' itemref="bx_breadcrumb_'.($index+1).'"' : '');
	$child = ($index > 0? ' itemprop="child"' : '');
	$arrow = ($index > 0? '<span class="nav-separator">/</span>' : '');;

	if($arResult[$index]["LINK"] <> "" && $index != $itemSize-1)
	{
		$strReturn .= '
			<li class="breadcrumbs__item" id="bx_breadcrumb_'.$index.'" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem" class="breadcrumb-item">
				<a itemprop="item" href="'.$arResult[$index]["LINK"].'" title="'.$title.'" itemprop="url">
					<meta itemprop="position" content="'.$position++.'" />
					'.$arrow.'
					<span itemprop="name">'.$title.'</span>
				</a>
			</li>';
	}
	else
	{
		$strReturn .= '
			<li class="breadcrumbs__item">
				'.$arrow.''.$title.'
			</li>';
	}
}


return $strReturn;
?>
