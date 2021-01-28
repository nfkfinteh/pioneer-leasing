<? if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();

foreach($arResult as $key => $arItem) {
	if (strripos($arItem["LINK"], 'http') === false) {
	    $arResult[$key]["LINK"] = HOST_PIONEER_LEASING.$arItem["LINK"];
	}
}
