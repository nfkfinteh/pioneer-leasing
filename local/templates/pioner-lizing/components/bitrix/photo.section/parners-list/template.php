<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<div class="clients-logos">
	<ul>       
   	<?php
		$i=0;
   		foreach($arResult["ROWS"] as $arItems)
		{
			foreach($arItems as $arItem)
			{
				if (is_array($arItem))
				{
					if ($arResult['NAV_RESULT']->bShowAll == 1)
					{
						$i++;
						if ($i > 12)
						{
							$class = "";//HIDE
						} else {
							$class = "";
						};
					};
					print('<li class="'.$class.'">
						<div>
							<img src="'.$arItem['PICTURE']['SRC'].'" 
							alt="'.$arItem['PICTURE']['ALC'].'" 
							title="'.$arItem['PICTURE']['TITLE'].'" 
							width="'.$arItem['PICTURE']['WIDTH'].'" 
							height="'.$arItem['PICTURE']['HEIGHT'].'" />
						</div>
            		</li>');
				}
			}
		}
   ?>
	</ul>
</div>