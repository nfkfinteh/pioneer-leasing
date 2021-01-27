<div class="sale-index-subscribe">
<?php
	require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");
	
	CModule::IncludeModule('iblock');
	CModule::IncludeModule('catalog');
	
	$bs = new CIBlockElement;
	
	$arFilter = array(
		'IBLOCK_ID' => 5, 
		'ACTIVE' => 'Y', 
	);
	
	$LIMIT = 1;
	$indexPageClass = "this-is-index-page";
	
	switch ($APPLICATION->GetCurPage())
	{	
		case '/leasing-services/real-estate-leasing/index.php':
			$arFilter = array(
				'IBLOCK_ID' => 5, 
				'PROPERTY_category' => 1,
				'ACTIVE' => 'Y', 
			);
			$LIMIT = 3;
			$indexPageClass = "";
		break;	
		
		case '/leasing-services/leasing-of-vehicles/index.php':
			$arFilter = array(
				'IBLOCK_ID' => 5, 
				'PROPERTY_category' => 2,
				'ACTIVE' => 'Y', 
			);
			$LIMIT = 3;
			$indexPageClass = "";
		break;

		case '/leasing-services/equipment-leasing/index.php':
			$arFilter = array(
				'IBLOCK_ID' => 5, 
				'PROPERTY_category' => 3,
				'ACTIVE' => 'Y', 
			);
			$LIMIT = 3;
			$indexPageClass = "";
		break;
	};

	$arSelectFields = Array(
		"ID",
		"NAME", 
		"ACTIVE", 
		"PROPERTIES", 
		"PREVIEW_PICTURE", 
		"DETAIL_PICTURE", 
		"PROPERTY_PREVIEW_PICTURE", 
		"PROPERTY_price_per_month", 
		"PROPERTY_price", 
		"PROPERTY_adress",
		"PROPERTY_photos",
		"PROPERTY_category",
    );
		
	$obElement = $bs->GetList(
		Array("SORT"=>"DESC"),
		$arFilter, 
		false, 
		Array ("nTopCount" => $LIMIT), 
		$arSelectFields 
	);
	
?>
	<div class="index-sale-title <?=$indexPageClass?>">Распродажа</div>   
<?php	
	
	$arr = array();
	while($arElement = $obElement->GetNext())
	{
		/*
		print('<!--');
		print_r($arElement);
		print('-->');
		*/
		if (in_array($arElement['ID'], $arr) === true)
		{
			continue;
		};
		$arr[] = $arElement['ID'];
		
		$IMG_SRC = CFile::GetPath($arElement["PREVIEW_PICTURE"]);
		
		if (strtolower($arElement['PROPERTY_PRICE_PER_MONTH_VALUE']) == 'да')
		{
			$PRICE_PER_MONTH = 'Y';
		} else {
			$PRICE_PER_MONTH = 'N';
		};
?>
		<div class="sale-node" data-id="<?= $arElement['ID'] ?>">
			<a href="javascript:show_sale('<?= $arElement['ID'] ?>', '<?= SITE_TEMPLATE_PATH ?>'); void(0);">
				<div class="sale-node-inner">
					<div class="sale-node-title">
						<div class="sale-node-name">
							<?= html_entity_decode($arElement['NAME'], ENT_QUOTES, 'UTF-8') ?>
						</div>
						<div class="sale-node-price">
							<?php if($arElement['PROPERTY_PRICE_VALUE']==0) {?>
								цена по запросу
							<?php }else {?>
								<span><?php if ($PRICE_PER_MONTH == 'Y') print('от '); ?></span>
								<?= number_format($arElement['PROPERTY_PRICE_VALUE'],  0, '', ' ') ?>
								<span><?php if ($PRICE_PER_MONTH == 'Y') print(' в месяц'); ?></span>
							<?php } ?>
						</div>
					</div>
					<div class="sale-node-img">
						<?php 
							if (!empty($IMG_SRC))
							{
						?>
						<img 
							src="<?= $IMG_SRC ?>" 
							alt="<?= $arElement['NAME'] ?>" 
							title="<?= $arElement['NAME'] ?>" 
						/>
						<? }; ?>
					</div>
				</div>
			</a>
		</div>
<?php
	};
?>
<div class="sale-node-footer-info">
    <div class="sale-node-footer-subscribe">
        <a href="javascript:clearModalFields(); setPlaceholders(); $('#send-subscribe').fadeIn('fast'); void(0);" class="button-green">подписаться</a>
    </div>
    <div class="sale-node-footer-show-all">
		<a href="/sale/"><u>Все предложения</u> +</a>
    </div>
</div>
</div>