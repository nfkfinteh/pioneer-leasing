<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>



<h1 class="news-text-title"><?= $arResult['NAME'] ?></h1>
<div class="row">
    <div class="col-12 col-md-6 col-lg-6 order-2 order-md-1">
        <div class="fotorama" data-nav="thumbs" data-thumbwidth="157" data-thumbheight="98" data-allowfullscreen="false" data-autoplay="true"
            data-thumbmargin="18">
            <?foreach($arResult['PROPERTIES']['photos']['VALUE'] as $key=>$arItem):?>
            <img src="<?=CFile::GetPath($arItem);?>" alt="<?=$arResult['PROPERTIES']['photos']['DESCRIPTION'][$key]?>">
            <?endforeach;?>
        </div>
    </div>
    <div class="col-12 col-md-6 col-lg-6 order-2 order-md-1">
        <p class="sale-text"><?= $arResult['PREVIEW_TEXT'] ?></p>
        <button class="btn btn-main btn-255 navbar-btn" type="button" data-toggle="modal"
          data-target="#leasingAppModal">Подать заявку на лизинг</button>
    </div>
</div>


<link href="https://cdnjs.cloudflare.com/ajax/libs/fotorama/4.6.4/fotorama.css" rel="stylesheet">
<script src="https://cdnjs.cloudflare.com/ajax/libs/fotorama/4.6.4/fotorama.js" async></script>