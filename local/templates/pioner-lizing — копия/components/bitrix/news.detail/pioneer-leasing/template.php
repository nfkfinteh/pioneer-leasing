<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?php	
	$d = strtotime($arResult['ACTIVE_FROM']);
	$ACTIVE_FROM = date('Y-m-d H:i:s', $d);
	
	$q = mysql_query("
		SELECT
		b_iblock_element.ID,
		b_iblock_element.ACTIVE_FROM,
		b_iblock_element.DATE_CREATE,
		b_iblock_element.IBLOCK_ID,
		b_iblock_element.`NAME`
		FROM
		b_iblock_element
		WHERE
		b_iblock_element.IBLOCK_ID = 3 AND 
		DATE(b_iblock_element.ACTIVE_FROM) <= DATE('".$ACTIVE_FROM."')
		ORDER BY b_iblock_element.ACTIVE_FROM DESC
		LIMIT 2
	");
	if ($q)
	{
		if (mysql_num_rows($q) == 2)
		{
			while ($data = mysql_fetch_assoc($q))
			{
				$prevNews = $data;	
			};
		} else {
			$prevNews = NULL;
		};
	} else {
		print(mysql_error());
	};
	
	
	$q = mysql_query("
		SELECT
			b_iblock_element.ID,
			b_iblock_element.ACTIVE_FROM,
			b_iblock_element.DATE_CREATE,
			b_iblock_element.IBLOCK_ID,
			b_iblock_element.`NAME`
		FROM
			b_iblock_element
		WHERE
			b_iblock_element.IBLOCK_ID = 3 AND 
			DATE(b_iblock_element.ACTIVE_FROM) >= DATE('".$ACTIVE_FROM."')
		ORDER BY b_iblock_element.ACTIVE_FROM ASC
		LIMIT 2
	");
	if ($q)
	{
		if (mysql_num_rows($q) == 2)
		{
			while ($data = mysql_fetch_assoc($q))
			{
				$nextNews = $data;	
			};
		} else {
			$nextNews = NULL;
		};
	} else {
		print(mysql_error());
	};
?>

<?php
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

<div class="news-detail">
<?php
	if (!empty($arResult["DETAIL_PICTURE"]['SRC']))
	{
?>
	<div class="news-detail-img">
        <img 
            src="<?=$arResult["DETAIL_PICTURE"]["SRC"]?>" 
            alt="<?= $arResult["DETAIL_PICTURE"]['ALT'] ?>" title="<?= $arResult["DETAIL_PICTURE"]['TITLE'] ?>" 
            width="140" 
        />
    </div>
<?php
	};
?>

    <div class="news-detail-date">
    	<i class="calendar-icon"></i> <div><?= $NEWS_DATE ?></div>
    </div>
    <div class="news-detail-title">
    	<h1><?= $arResult['NAME'] ?></h1>
    </div>
    <div class="news-text">
    	<?= $arResult["DETAIL_TEXT"] ?>
    </div>
    <div class="news-detail-paganation">
    	<div class="news-detail-paganation-prev">
			<?php 
                if (isset($prevNews['ID']))
                {
            ?>
                <a href="/news/?id=<?= $arResult['IBLOCK_SECTION_ID'] ?>&news_id=<?= $prevNews['ID'] ?>">← <u>предыдущая новость</u></a>
            <?php 
                };
            ?>
        </div>
        
       	<div class="news-detail-paganation-all"> 
        	<a href="/news/"><u>к списку новостей</u></a>
       	</div>
		
        <div class="news-detail-paganation-next">
			<?php 
                if (isset($nextNews['ID']))
                {
            ?>
                <a href="/news/?id=<?= $arResult['IBLOCK_SECTION_ID'] ?>&news_id=<?= $nextNews['ID'] ?>"><u>следующая новость</u> →</a>
            <?php
                };
            ?>
        </div>
    </div>
</div>