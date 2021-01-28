<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?
 $arrFormat = array(
	 '01' => 'января',
	 '02' => 'февраля',
	 '03' => 'марта',
	 '04' => 'апреля',
	 '05' => 'мая',
	 '06' => 'июня',
	 '07' => 'июля',
	 '08' => 'августа',
	 '09' => 'сентября',
	 '10' => 'октября',
	 '11' => 'ноября',
	 '12' => 'декабря'
 );

 list($d,$n) = explode('.', $arResult["DISPLAY_ACTIVE_FROM"]);
?>

<div class="block-h2 detail-container">
	<div class="row">
		<div class="col-12 col-md-6 col-lg-6 order-2 order-md-1">
	        <h1 class="news-text-title"><?= $arResult['NAME'] ?></h1>
            <time class="" datetime="<?echo $arResult["DISPLAY_ACTIVE_FROM"]?>"><?echo $d.' '.$arrFormat[$n]?></time>
            <?php
                if (!empty($arResult["DETAIL_PICTURE"]['SRC']))
                {
            ?>
                <div class="news-detail-img">
                    <img 
                        src="<?=$arResult["DETAIL_PICTURE"]["SRC"]?>" 
                        alt="<?= $arResult["DETAIL_PICTURE"]['ALT'] ?>" title="<?= $arResult["DETAIL_PICTURE"]['TITLE'] ?>"/>
                </div>
            <?php
                };
            ?>
            <div class="news-text">
                <?= $arResult["DETAIL_TEXT"] ?>
            </div>
            <div class="detail-nav">
                <?if(is_array($arResult["TOLEFT"])):?>
                    <a href="<?=$arResult["TOLEFT"]["URL"]?>">
                    <span class="detail-nav_prev">&#5176;</span> Предыдущая новость
                    </a>
                    <?endif?>
                    <?if(is_array($arResult["TORIGHT"])):?>
                    <a href="<?=$arResult["TORIGHT"]["URL"]?>">
                    Следующая новость <span class="detail-nav_next">&#5171;</span>
                    </a>
                <?endif?>
            </div>
        </div>
        
        <div class="col-12 col-md-6 col-lg-6 order-2 order-md-1">
	        <?$APPLICATION->IncludeComponent(
                "bitrix:news.list", 
                "pioneer-detail", 
                array(
                    "ACTIVE_DATE_FORMAT" => "d.m.Y",
                    "ADD_ELEMENT_CHAIN" => "Y",
                    "ADD_SECTIONS_CHAIN" => "Y",
                    "AJAX_MODE" => "N",
                    "AJAX_OPTION_ADDITIONAL" => "",
                    "AJAX_OPTION_HISTORY" => "N",
                    "AJAX_OPTION_JUMP" => "N",
                    "AJAX_OPTION_STYLE" => "Y",
                    "BROWSER_TITLE" => "-",
                    "CACHE_FILTER" => "N",
                    "CACHE_GROUPS" => "Y",
                    "CACHE_TIME" => "36000000",
                    "CACHE_TYPE" => "A",
                    "CHECK_DATES" => "Y",
                    "DETAIL_ACTIVE_DATE_FORMAT" => "d.n",
                    "DETAIL_DISPLAY_BOTTOM_PAGER" => "N",
                    "DETAIL_DISPLAY_TOP_PAGER" => "N",
                    "DETAIL_FIELD_CODE" => array(
                        0 => "",
                        1 => "",
                    ),
                    "DETAIL_PAGER_SHOW_ALL" => "N",
                    "DETAIL_PAGER_TEMPLATE" => "",
                    "DETAIL_PAGER_TITLE" => "",
                    "DETAIL_PROPERTY_CODE" => array(
                        0 => "",
                        1 => "",
                    ),
                    "DETAIL_SET_CANONICAL_URL" => "N",
                    "DETAIL_URL" => "?id=#SECTION_ID#&news_id=#ELEMENT_ID#",
                    "DISPLAY_BOTTOM_PAGER" => "Y",
                    "DISPLAY_DATE" => "Y",
                    "DISPLAY_NAME" => "Y",
                    "DISPLAY_PICTURE" => "Y",
                    "DISPLAY_PREVIEW_TEXT" => "Y",
                    "DISPLAY_TOP_PAGER" => "N",
                    "FIELD_CODE" => array(
                        0 => "",
                        1 => "",
                    ),
                    "FILTER_NAME" => "arrFilter",
                    "HIDE_LINK_WHEN_NO_DETAIL" => "N",
                    "IBLOCK_ID" => "3",
                    "IBLOCK_TYPE" => "news",
                    "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
                    "INCLUDE_SUBSECTIONS" => "Y",
                    "LIST_ACTIVE_DATE_FORMAT" => "Y-m-d",
                    "LIST_FIELD_CODE" => array(
                        0 => "",
                        1 => "",
                    ),
                    "LIST_PROPERTY_CODE" => array(
                        0 => "",
                        1 => "",
                    ),
                    "MESSAGE_404" => "",
                    "META_DESCRIPTION" => "-",
                    "META_KEYWORDS" => "-",
                    "NEWS_COUNT" => "3",
                    "PAGER_BASE_LINK_ENABLE" => "N",
                    "PAGER_DESC_NUMBERING" => "N",
                    "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
                    "PAGER_SHOW_ALL" => "N",
                    "PAGER_SHOW_ALWAYS" => "Y",
                    "PAGER_TEMPLATE" => "pioneer-news-nav",
                    "PAGER_TITLE" => "",
                    "PARENT_SECTION" => $_GET['id'],
                    "PARENT_SECTION_CODE" => "",
                    "PREVIEW_TRUNCATE_LEN" => "",
                    "PROPERTY_CODE" => array(
                        0 => "",
                        1 => "",
                    ),
                    "SEF_MODE" => "N",
                    "SET_BROWSER_TITLE" => "Y",
                    "SET_LAST_MODIFIED" => "N",
                    "SET_META_DESCRIPTION" => "Y",
                    "SET_META_KEYWORDS" => "Y",
                    "SET_STATUS_404" => "Y",
                    "SET_TITLE" => "N",
                    "SHOW_404" => "N",
                    "SORT_BY1" => "ACTIVE_FROM",
                    "SORT_BY2" => "SORT",
                    "SORT_ORDER1" => "DESC",
                    "SORT_ORDER2" => "ASC",
                    "STRICT_SECTION_CHECK" => "N",
                    "USE_CATEGORIES" => "N",
                    "USE_FILTER" => "N",
                    "USE_PERMISSIONS" => "N",
                    "USE_RATING" => "N",
                    "USE_REVIEW" => "N",
                    "USE_RSS" => "N",
                    "USE_SEARCH" => "N",
                    "USE_SHARE" => "N",
                    "COMPONENT_TEMPLATE" => "pioneer"
                ),
                false
            );?>
        </div>
    </div>
</div>
