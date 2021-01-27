<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?
global $APPLICATION;

//$APPLICATION->AddHeadScript('https://code.jquery.com/jquery-3.2.1.min.js');
//$APPLICATION->AddHeadScript('https://code.jquery.com/jquery-2.2.4.min.js');
$APPLICATION->AddHeadScript('https://code.jquery.com/jquery-1.12.4.min.js');


$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH .'/js/jquery.browser.min.js' );
$APPLICATION->AddHeadScript('https://api-maps.yandex.ru/2.0/?load=package.full&lang=ru-RU' );

$APPLICATION->AddHeadScript( SITE_TEMPLATE_PATH . '/js/cusel.js' );
$APPLICATION->AddHeadScript( SITE_TEMPLATE_PATH . '/js/placeholder.js' );
$APPLICATION->AddHeadScript( SITE_TEMPLATE_PATH . '/js/jquery.trackbar.js' );
$APPLICATION->AddHeadScript( SITE_TEMPLATE_PATH . '/js/scripts.js' );

$APPLICATION->SetAdditionalCSS( SITE_TEMPLATE_PATH . '/css/trackbar.css' );
$APPLICATION->SetAdditionalCSS( SITE_TEMPLATE_PATH . '/css/cusel.css' );
?>

<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?$APPLICATION->ShowHead();?>
    <script type="text/javascript">
        bxSession.Expand(1440, 'afed1227de23716c34d489ac1620b71a', false, '995471644c5ed01aabc3b2691d1f9e49');
    </script>
    <script type="text/javascript">
        bxSession.Expand(1440, 'afed1227de23716c34d489ac1620b71a', false, '995471644c5ed01aabc3b2691d1f9e49');
    </script>
    <script type="text/javascript">var _ba = _ba || []; _ba.push(["aid", "d6bd280d46f0d8c5560b236aec268c5a"]); _ba.push(["host", "pioneer-leasing.ru"]); (function() {var ba = document.createElement("script"); ba.type = "text/javascript"; ba.async = true;ba.src = (document.location.protocol == "https:" ? "https://" : "http://") + "bitrix.info/ba.js";var s = document.getElementsByTagName("script")[0];s.parentNode.insertBefore(ba, s);})();</script>

    <title><?$APPLICATION->ShowTitle();?></title>
    <link rel="icon" type="image/png" href="/bitrix/templates/pioner-lizing/images/favicon.png">
    
</head>

<body>
<div id="panel"><?$APPLICATION->ShowPanel();?></div>
 	
<div class="body-block"> 	
  <div class="body-inner"> 			
    <div class="header" style="position: relative;"> 
      <div style="float: left; position: absolute; top: 14px; right: 322px;"> 
 </div>
     	
      <div class="left"> 	<a href="/" > 		<img src="<?=SITE_TEMPLATE_PATH?>/images/logo.png" alt="Пионер-Лизинг" width="152" height="130"  /> </a> </div>
     
      <div class="right"> 	
        <p class="contacts-phones"> 	<span class="contacts-phones-code">+7 (8352)</span> <span class="contacts-phones-list">45-89-89, 45-45-60</span> </p>
       					
        <p class="contacts-adress"> 	428001, г. Чебоксары, пр-т М. Горького, д. 5, корп. 2 </p>
       
        <div class="feedback-call-block"> 	
          <div class="left feedback-call-img"> 	<a href="javascript:clearModalFields(); $('#request-call').fadeIn('fast'); void(0);" > 	<img src="<?=SITE_TEMPLATE_PATH?>/images/feedback-call.png" alt="Получить бесплатную консультацию"  /> </a> </div>
         
          <div class="left feedback-call-link"> 		<a href="javascript:clearModalFields(); setPlaceholders(); $('#request-call').fadeIn('fast'); void(0);" class="feedback-call" >Получить бесплатную консультацию</a> </div>
         </div>
       </div>
     </div>
   <?$APPLICATION->IncludeComponent(
	"bitrix:menu",
	"pioner_menu",
	Array(
		"ROOT_MENU_TYPE" => "top",
		"MAX_LEVEL" => "4",
		"CHILD_MENU_TYPE" => "left",
		"USE_EXT" => "N",
		"DELAY" => "N",
		"ALLOW_MULTI_SELECT" => "N",
		"MENU_CACHE_TYPE" => "A",
		"MENU_CACHE_TIME" => "3600",
		"MENU_CACHE_USE_GROUPS" => "Y",
		"MENU_CACHE_GET_VARS" => array()
	)
);?> 			
    <div class="content">