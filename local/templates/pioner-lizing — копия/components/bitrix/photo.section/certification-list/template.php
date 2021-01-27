<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>


<div class="certificates-list">
	<div class="certificates-left">
    	<a href="javascript:certificateSlide(true); void(0);">
        	<div class="certificates-left-icon"></div>
        </a>
    </div>
	<div class="certificates-inner-list">
        <table>       
            <tbody>
                <tr>
       <?php
            foreach($arResult["ROWS"] as $arItems)
            {
                foreach($arItems as $arItem)
                {
                    if (is_array($arItem))
                    {
                        print('<td>
                            <div>
                                <img src="'.$arItem['PICTURE']['SRC'].'" 
                                alt="'.$arItem['PICTURE']['ALC'].'" 
                                title="'.$arItem['PICTURE']['TITLE'].'" 
                                width="'.$arItem['PICTURE']['WIDTH'].'" 
                                height="'.$arItem['PICTURE']['HEIGHT'].'" />
                            </div>
                        </td>');
                    }
                }
            }
       ?>
                </tr>
            </tbody>
        </table>
    </div>
	<div class="certificates-right">
    	<a href="javascript:certificateSlide(false); void(0);">
        	<div class="certificates-right-icon"></div>
        </a>
	</div>
    <div class="clear"></div>
</div>
<div class="certificates-bottom-line"></div>