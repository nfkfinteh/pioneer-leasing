<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?> <?php
	$sliderCalcType = 0;
	$slideCalcTitle = 'Программа утилизации';
  
  switch ($APPLICATION->GetCurPage())
	{	
		case '/leasing-services/real-estate-leasing/index.php':
			$sliderCalcType = 1;
			$slideCalcTitle = 'Лизинг недвижимости';
		break;	
		
		case '/leasing-services/leasing-of-vehicles/index.php':
			$sliderCalcType = 2;
			$slideCalcTitle = 'Лизинг автотранспорта';
		break;

		case '/leasing-services/equipment-leasing/index.php':
			$sliderCalcType = 3;
			$slideCalcTitle = 'Лизинг оборудования';
		break;
  };
  
  
?> 
<div class="slider-calc-block slider-calc-type-&lt;img id=" src="/bitrix/images/fileman/htmledit2/php.gif" border="0" style="padding-bottom: 35px;""> 
  <br /> 
  <div class="slider-block" style="background: none !important;"> 	
  <?php
	if ($APPLICATION->GetCurPage() == '/index.php')
	{
  ?>
	<div id="slider-index-first">
    <!--Слайдер-->
    <!--1-->
	<a href="https://pioneer-leasing.ru/news/?id=43&news_id=212" style="text-decoration:none;">
      <img src="<?=SITE_TEMPLATE_PATH?>/images/pioneer_vinner_nagradu.png" alt="Пионер-Лизинг стал победителем премии LEADER LEASING AWARDS в номинации «За развитие лизинга для малого и среднего бизнеса»!" title="Пионер-Лизинг стал победителем премии LEADER LEASING AWARDS в номинации «За развитие лизинга для малого и среднего бизнеса»!" style="margin-top:0px; width: 610px;" />
    </a>
    <!--<a href="https://pioneer-leasing.ru/news/?id=43&news_id=197" style="text-decoration:none;display: none;">
      <img src="<?=SITE_TEMPLATE_PATH?>/images/investors_ms_3_3_1.png" alt="Как стать инвестором пионер-лизинг" title="Как стать инвестором пионер-лизинг" style="margin-top:0px; width: 640px;" />
    </a>-->
	<a href="http://pioneer-leasing.ru/news/?id=39&news_id=129" style="text-decoration:none;display: none;">
		<img src="<?=SITE_TEMPLATE_PATH?>/images/pioneer-lizing-stavki-saytав.png" alt="Лизинг оборудования" title="Лизинг оборудования" style="margin-top:0px; width: 640px;" />
	</a>
	<a href="https://pioneer-leasing.ru/investor/" style="text-decoration:none;display: none;">
      <img src="<?=SITE_TEMPLATE_PATH?>/images/tretiy_vupusk_m.png" alt="Биржевые облигации ООО «Пионер-Лизинг» 3-го выпуска" title="Биржевые облигации ООО «Пионер-Лизинг» 3-го выпуска" style="margin-top:0px; width: 610px;" />
    </a>
		<a href="/leasing-services/real-estate-leasing/" style="text-decoration:none; display:none;">
			<div class="slider-title">
				Лизинг недвижимости
			</div>
			<img src="<?=SITE_TEMPLATE_PATH?>/images/leasing-home.png" alt="Лизинг недвижимости" title="Лизинг недвижимости" style="margin-top:40px;" width="608" height="289"  />
		</a>		
		<a href="/leasing-services/leasing-of-vehicles/" style="text-decoration:none; display:none;">
			<div class="slider-title">
				Лизинг автотранспорта
			</div>
			<img src="<?=SITE_TEMPLATE_PATH?>/images/leasing-car.png" alt="Лизинг автотранспорта" title="Лизинг автотранспорта" style="margin-top:40px;" width="608" height="289"  />
		</a>		
		<a href="/leasing-services/equipment-leasing/" style="text-decoration:none; display:none;">
			<div class="slider-title">
				Лизинг оборудования
			</div>
			<img src="<?=SITE_TEMPLATE_PATH?>/images/leasing-odorudovanie.png" alt="Лизинг оборудования" title="Лизинг оборудования" style="margin-top:40px;" width="608" height="289"  />
		</a>
	</div>

    <div class="slider-nav-block" style="display:none;"> 	 
      <div class="slider-nav active" onclick="javascript:showSlide(1, this); void(0);"></div>
     
      <div class="slider-nav-separator"></div>
     	 
      <div class="slider-nav" onclick="javascript:showSlide(2, this); void(0);"></div>
     
      <div class="slider-nav-separator"></div>
     
      <div class="slider-nav" onclick="javascript:showSlide(3, this); void(0);"></div>
     
      <div class="slider-nav-separator"></div>
     
      <div class="slider-nav" onclick="javascript:showSlide(4, this); void(0);"></div>
     </div>
     
     <script type="text/javascript">
     	showSlide(parseInt('<?=$sliderCalcType?>'), $('.slider-nav-block .slider-nav:eq('+(parseInt('<?=$sliderCalcType?>')-1)+')'), true);
	 </script>


  <?php
	} else {  
 ?>
 <style>
 .sl_title{ 
    clear: both;
    color: #505050;
    font-family: pfdin-bold;
    font-size: 30px;
    letter-spacing: 0.025em;
    font-weight: normal;
    text-transform: uppercase;
    padding: 35px 0px 18px 29px;
    }
 </style>
 <h3 class="sl_title"><?=$slideCalcTitle;?></h3>
    <!--<div class="slider-title"><?=$slideCalcTitle?></div>   -->
    <div class="slider-img">	    
      <!--<img onclick="document.location='/leasing-services/leasing-of-vehicles/#action'; void(0);" src="<?=SITE_TEMPLATE_PATH?>/images/leasing-car2.png" alt="Программа утилизации" title="Программа утилизации" width="638" height="268" style="margin-left:29px; margin-top:39px;"  />-->
      <img onclick="document.location='/leasing-services/real-estate-leasing/'; void(0);" src="<?=SITE_TEMPLATE_PATH?>/images/leasing-home.png" alt="Лизинг недвижимости" title="Лизинг недвижимости." width="608" height="289"  /> 
      <img onclick="document.location='/leasing-services/leasing-of-vehicles/#action'; void(0);" src="<?=SITE_TEMPLATE_PATH?>/images/leasing-car.png" alt="Лизинг автотранспорта" title="Лизинг автотранспорта" width="631" height="293"  /> 
      <img onclick="document.location='/leasing-services/equipment-leasing/'; void(0);" src="<?=SITE_TEMPLATE_PATH?>/images/leasing-odorudovanie.png" alt="Лизинг оборудования" title="Лизинг оборудования" width="632" height="313"  /> 
    </div>
    <div class="slider-nav-block">
    <!-- 	 
      <div class="slider-nav active" onclick="javascript:showSlide(1, this); void(0);"></div>
      <div class="slider-nav-separator"></div>     	 -->
      <div class="slider-nav active" onclick="javascript:showSlide(1, this); void(0);"></div>     
      <div class="slider-nav-separator"></div>
      <div class="slider-nav" onclick="javascript:showSlide(2, this); void(0);"></div>
      <div class="slider-nav-separator"></div>
      <div class="slider-nav" onclick="javascript:showSlide(3, this); void(0);"></div>
     </div>
     
     <script type="text/javascript">
     	showSlide(parseInt('<?=$sliderCalcType?>'), $('.slider-nav-block .slider-nav:eq('+(parseInt('<?=$sliderCalcType?>')-0)+')'), true);
	 </script>
<?php
	};
 ?>
   </div>
 
  <div class="calc-block"> 		 
    <div class="calc-title"> 	Калькулятор лизинга </div>
   
    <div class="calc-select"> <select id="select-leasing-type" name="select-leasing-type"> <option value="-1" selected="selected">Выберите предмет лизинга</option> <option value="1">Недвижимость</option> <option value="2">Автотранспорт</option> <option value="3">Оборудование</option> </select> </div>
   
    <div class="calc-trackbar calc-trackbar-one"> 	 
      <div class="calc-trackbar-title">Стоимость имущества (руб)</div>
     
      <div class="calc-trackbar-value calc-input-val"><input onkeyup="keyUpCalcInput(this, 1);" style="letter-spacing: -0.05em;" onblur="blurCalcInput(this, 1);" maxlength="10" type="text" value="0" placeholder="300 000" /></div>
     
      <div id="trackbar-one" style="display: none;"></div>
     </div>
   
    <div class="calc-trackbar calc-trackbar-two"> 	 
      <div class="calc-trackbar-title">Первоначальный взнос (%)</div>
     
      <div class="calc-trackbar-value calc-input-val"><input onkeyup="keyUpCalcInput(this, 2);" onblur="blurCalcInput(this, 2);" type="text" value="" placeholder="0" /></div>
     	 
      <div id="trackbar-two"></div>
     </div>
   
    <div class="calc-trackbar calc-trackbar-three"> 	 
      <div class="calc-trackbar-title">Срок лизинга (месяцев)</div>
     
      <div class="calc-trackbar-value calc-input-val"><input onkeyup="keyUpCalcInput(this, 3);" onblur="blurCalcInput(this, 3);" type="text" value="" placeholder="0" /></div>
     	 
      <div id="trackbar-three"></div>
     
      <div class="trackbar-timeline"></div>
     </div>
   
    <div class="calc-footer-tline"></div>
   
    <div class="calc-footer-mline"></div>
   
    <div class="calc-footer-bline"></div>
   
    <div class="calc-footer"> 	 
      <div class="calc-footer-row"> 
        <div class="calc-footer-row-left"> 			 
          <div>Первоначальный платеж</div>
         	 		 
          <div> 	<span class="calc-show-info-link" onclick="if ($(this).attr('data-click') == 'true') $('#show-calc-info').fadeIn('fast'); void(0);" data-click="false">Ежемеcячный платеж</span> </div>
         </div>
       
        <div class="calc-footer-row-right"> 	 
          <div><strong id="calc-advance">0</strong></div>
         	 
          <div><strong id="calc-paying">0</strong></div>
         </div>
       			</div>
     
      <div class="calc-footer-submit"> 	<a class="button-yellow" href="javascript:clearModalFields(); setPlaceholders(); $('#send-order').fadeIn('fast'); void(0);" > 	Подать заявку</a></div>
     
 </div>
   </div>
 
  <div class="calc-bottom-line"></div>
 </div>