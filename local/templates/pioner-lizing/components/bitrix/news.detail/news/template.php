<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?
\Bitrix\Main\Loader::includeModule('dev2fun.opengraph');
\Dev2fun\Module\OpenGraph::Show($arResult['ID'],'element');
?>
<div class="col-12 col-md-6 col-lg-6 order-2 order-md-1">
    <h1 class="news-text-title"><?= $arResult['NAME'] ?></h1>
    <time class="" datetime="<?echo $arResult["DISPLAY_ACTIVE_FROM"]?>"><?echo $arResult["DISPLAY_ACTIVE_FROM"]?></time>
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

    <div class="detail-share">
		<div class="ya-share2" data-services="vkontakte,facebook,odnoklassniki,twitter,viber,whatsapp,telegram"></div>
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