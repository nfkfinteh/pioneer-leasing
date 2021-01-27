<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<div class="last-news-list-title">Новости</div>
<div class="last-news-list">
<? foreach($arResult["ITEMS"] as $arItem)
{
	$d = strtotime($arItem['ACTIVE_FROM']);
	
	switch (date('m', $d))
	{
		case 1: $month = 'января'; break;
		case 2: $month = 'февраля'; break;
		case 3: $month = 'марта'; break;
		case 4: $month = 'апреля'; break;
		case 5: $month = 'мая'; break;
		case 6: $month = 'июня'; break;
		case 7: $month = 'июля'; break;
		case 8: $month = 'августа'; break;
		case 9: $month = 'сентября'; break;
		case 10: $month = 'октября'; break;
		case 11: $month = 'ноября'; break;
		case 12: $month = 'декабря'; break;
	};
	
	$day = date('d', $d);
	
	$NEWS_DATE = $day.' '.$month;
?>
	<div class="last-news-node">
    	<div class="last-news-date">
        	<i class="calendar-news-icon"></i>
        	<?= $NEWS_DATE ?>
        </div>
        <div class="last-news-link">
            <a href="/news/?id=<?= $arItem['~IBLOCK_SECTION_ID'] ?>&news_id=<?= $arItem['ID'] ?>">
				<?= $arItem['NAME'] ?>
            </a>
        </div>
    </div>
<?php
}
?>
	<div class="last-news-show-all">
    	<a href="/news/">
        	<u>Все новости</u> +
        </a>
    </div>
</div>
