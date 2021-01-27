<div class="ymap-top-line"></div>
<div id="ymap"></div>

<?php
	if ($APPLICATION->GetCurPage() == '/contacts/index.php')
	{
?>
<style>
	#ymap
	{
		height:445px;
	}
	
	.ymap-top-line
	{
		height:15px;
		clear:both;
		width:100%;
		width:100%;
	}
</style>
<?php
	}
?>

<script type="text/javascript">
ymaps.ready(init);
    var map, myPlacemark;
    function init(){     
        myMap = new ymaps.Map ("ymap", {
            center: [56.148313, 47.19859],
            zoom: 16
        });
		
		myMap.controls.add('mapTools');
		myMap.controls.add('zoomControl');
		myMap.controls.add('typeSelector');
		
		myPlacemark = new ymaps.Placemark([56.148313, 47.19859], { 
            hintContent: 'ООО "Пионер-Лизинг"', 
            balloonContent: 'ООО "Пионер-Лизинг"' , 
        }, {
			iconImageHref : '<?=SITE_TEMPLATE_PATH?>/images/ymap-placeholder.png', 	
			iconImageSize : [38, 37], 
			iconImageOffset : [-10, -37], 
			
		});

        myMap.geoObjects.add(myPlacemark);
    }
</script>