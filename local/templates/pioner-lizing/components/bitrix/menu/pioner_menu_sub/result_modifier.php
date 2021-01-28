<?

foreach($arResult as $key => $arItem) {
    if (strripos($arItem["LINK"], 'http') === false) {
        $arResult[$key]["LINK"] = HOST_PIONEER_LEASING.$arItem["LINK"];
    }
}


$arResult['BODY_CLASS'] = "";
foreach ($arResult as $key => $arItem) {
	if ($arItem['PARAMS']['SHOW_CHILDREN'] == "Y") {
		$arResult['BODY_CLASS'] = 'show_sub_menu';
	}
    if ($arItem['PARAMS']['CHILDREN_ITEM'] == "Y") {
        if (($arItem["SELECTED"]) && ($arResult['TREE'][$parentKey]['LINK'] != $arItem['LINK'])) {
            $arResult['TREE'][$parentKey]['SELECTED_ORIG'] = $arResult['TREE'][$parentKey]['SELECTED'];
            $arResult['TREE'][$parentKey]['SELECTED'] = $arItem["SELECTED"];
        }
        if ($arResult['TREE'][$parentKey]['LINK'] == $arItem['LINK']) {
            if (isset($arResult['TREE'][$parentKey]['SELECTED_ORIG'])) {
                $arItem['SELECTED'] = $arResult['TREE'][$parentKey]['SELECTED_ORIG'];
            } else {
                $arItem['SELECTED'] = $arResult['TREE'][$parentKey]['SELECTED'];
            }

        }

        $arResult['TREE'][$parentKey]['CHILDREN'][] = $arItem;
    } else {
        $parentKey = $key;
        $arResult['TREE'][$key] = $arItem;
    }
}

$this->__component->SetResultCacheKeys(['BODY_CLASS']);