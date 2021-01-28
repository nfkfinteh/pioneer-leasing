<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
?>

<div class="block-h2">
    <div class="row">
        <div class="col-12 col-lg-5 col-xl-6">
            <h2>
                <?$APPLICATION->IncludeComponent("bitrix:main.include", "", array(
                    "AREA_FILE_SHOW" => "file",
                    "PATH" => SITE_TEMPLATE_PATH."/include_areas/sale/title.php",
                ));?>
            </h2>
            <p class="mt-5">
                <?$APPLICATION->IncludeComponent("bitrix:main.include", "", array(
                    "AREA_FILE_SHOW" => "file",
                    "PATH" => SITE_TEMPLATE_PATH."/include_areas/sale/text_seo.php",
                ));?>
            </p>
            <p>
                <?$APPLICATION->IncludeComponent("bitrix:main.include", "", array(
                    "AREA_FILE_SHOW" => "file",
                    "PATH" => SITE_TEMPLATE_PATH."/include_areas/contacts/sale_phone.php",
                ));?>
            </p>
        </div>
        <div class="col-12 col-lg-7 col-xl-6 d-flex align-items-end">
            <? $APPLICATION->IncludeComponent("bitrix:news.list", "banner-sale", array(
                "IBLOCK_TYPE" => CONTENT_IBLOCK_TYPE,
                "IBLOCK_ID" => BANNERS_IBLOCK_ID,
                "NEWS_COUNT" => 1,
                "SORT_BY1" => "SORT",
                "SORT_ORDER1" => "ASC",
                "SORT_BY2" => "ACTIVE_FROM",
                "SORT_ORDER2" => "DESC",
                "FIELD_CODE" => array("PREVIEW_PICTURE","DETAIL_PICTURE"),
                "PROPERTY_CODE" => array("LINK","IS_MODAL","LINK_TEXT"),
                "FILTER_NAME" => BANNER_SALE_FILTER_NAME,
                "CHECK_DATES" => "Y",
                "ADD_SECTIONS_CHAIN" => "N",
                "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
                "INCLUDE_SUBSECTIONS" => "Y",
                "AJAX_MODE" => "N",
                "SET_TITLE" => "N",
                "SET_BROWSER_TITLE" => "N",
                "SET_META_DESCRIPTION" => "N",
                "SET_META_KEYWORDS" => "N",
                "SHOW_404" => "N",
                "SET_STATUS_404" => "N",
                "MESSAGE_404" => "",
                "CACHE_TYPE" => CACHE_TYPE,
                "CACHE_TIME" => CACHE_TIME,
                "CACHE_FILTER" => CACHE_FILTER,
                "CACHE_GROUPS" => CACHE_GROUPS,
            )); ?>
        </div>
    </div>
    <?$APPLICATION->IncludeComponent(
        "bitrix:catalog.filter",
        "pioneer-leasing",
        Array(
            "IBLOCK_TYPE" => $arParams["IBLOCK_TYPE"],
            "IBLOCK_ID" => $arParams["IBLOCK_ID"],
            "FILTER_NAME" => $arParams["LIST_FILTER_NAME"],
            "FIELD_CODE" => array(),
            "PROPERTY_CODE" => array("category"),//,"price"
            "PRICE_CODE" => array(),
            "CACHE_TYPE" => $arParams["CACHE_TYPE"],
            "CACHE_TIME" => $arParams["CACHE_TIME"],
            "CACHE_GROUPS" => $arParams["CACHE_GROUPS"],
            "LIST_HEIGHT" => "5",
            "TEXT_WIDTH" => "20",
            "NUMBER_WIDTH" => "5",
            "SAVE_IN_SESSION" => "N"
        )
    );?>

    <?$APPLICATION->IncludeComponent(
        "bitrix:news.list",
        $templateName,
        Array(
            "SET_SEO" => "Y",
            "IBLOCK_TYPE" => $arParams["IBLOCK_TYPE"],
            "IBLOCK_ID" => $arParams["IBLOCK_ID"],
            "NEWS_COUNT" => $arParams["NEWS_COUNT"],
            "SORT_BY1" => $arParams["SORT_BY1"],
            "SORT_ORDER1" => $arParams["SORT_ORDER1"],
            "SORT_BY2" => $arParams["SORT_BY2"],
            "SORT_ORDER2" => $arParams["SORT_ORDER2"],
            "FIELD_CODE" => $arParams["LIST_FIELD_CODE"],
            "PROPERTY_CODE" => $arParams["LIST_PROPERTY_CODE"],
            "DISPLAY_PANEL" => $arParams["DISPLAY_PANEL"],
            "SET_TITLE" =>  ((!empty($arResult["VARIABLES"]["SECTION_ID"])) || (!empty($arResult["VARIABLES"]["SECTION_CODE"]))) ? $arParams["SET_TITLE"] : "N",
            "SET_LAST_MODIFIED" => $arParams["SET_LAST_MODIFIED"],
            "MESSAGE_404" => $arParams["MESSAGE_404"],
            "SET_STATUS_404" => $arParams["SET_STATUS_404"],
            "SHOW_404" => $arParams["SHOW_404"],
            "FILE_404" => $arParams["FILE_404"],
            "INCLUDE_IBLOCK_INTO_CHAIN" => $arParams["INCLUDE_IBLOCK_INTO_CHAIN"],
            "ADD_SECTIONS_CHAIN" => $arParams["ADD_SECTIONS_CHAIN"],
            "CACHE_TYPE" => $arParams["CACHE_TYPE"],
            "CACHE_TIME" => $arParams["CACHE_TIME"],
            "CACHE_FILTER" => $arParams["CACHE_FILTER"],
            "CACHE_GROUPS" => $arParams["CACHE_GROUPS"],
            "DISPLAY_TOP_PAGER" => $arParams["DISPLAY_TOP_PAGER"],
            "DISPLAY_BOTTOM_PAGER" => $arParams["DISPLAY_BOTTOM_PAGER"],
            "PAGER_TITLE" => $arParams["PAGER_TITLE"],
            "PAGER_TEMPLATE" => $arParams["PAGER_TEMPLATE"],
            "PAGER_SHOW_ALWAYS" => $arParams["PAGER_SHOW_ALWAYS"],
            "PAGER_DESC_NUMBERING" => $arParams["PAGER_DESC_NUMBERING"],
            "PAGER_DESC_NUMBERING_CACHE_TIME" => $arParams["PAGER_DESC_NUMBERING_CACHE_TIME"],
            "PAGER_SHOW_ALL" => $arParams["PAGER_SHOW_ALL"],
            "PAGER_BASE_LINK_ENABLE" => $arParams["PAGER_BASE_LINK_ENABLE"],
            "PAGER_BASE_LINK" => $arParams["PAGER_BASE_LINK"],
            "PAGER_PARAMS_NAME" => $arParams["PAGER_PARAMS_NAME"],
            "DISPLAY_DATE" => $arParams["DISPLAY_DATE"],
            "DISPLAY_NAME" => "Y",
            "DISPLAY_PICTURE" => $arParams["DISPLAY_PICTURE"],
            "DISPLAY_PREVIEW_TEXT" => $arParams["DISPLAY_PREVIEW_TEXT"],
            "PREVIEW_TRUNCATE_LEN" => $arParams["PREVIEW_TRUNCATE_LEN"],
            "ACTIVE_DATE_FORMAT" => $arParams["LIST_ACTIVE_DATE_FORMAT"],
            "USE_PERMISSIONS" => $arParams["USE_PERMISSIONS"],
            "GROUP_PERMISSIONS" => $arParams["GROUP_PERMISSIONS"],
            "FILTER_NAME" => $arParams["LIST_FILTER_NAME"],
            "HIDE_LINK_WHEN_NO_DETAIL" => $arParams["HIDE_LINK_WHEN_NO_DETAIL"],
            "CHECK_DATES" => $arParams["CHECK_DATES"],
            "STRICT_SECTION_CHECK" => $arParams["STRICT_SECTION_CHECK"],
            "PARENT_SECTION" => $arResult["VARIABLES"]["SECTION_ID"],
            "PARENT_SECTION_CODE" => $arResult["VARIABLES"]["SECTION_CODE"],
            "DETAIL_URL" => $arResult["FOLDER"].$arResult["URL_TEMPLATES"]["detail"],
            "SECTION_URL" => $arResult["FOLDER"].$arResult["URL_TEMPLATES"]["section"],
            "IBLOCK_URL" => $arResult["FOLDER"].$arResult["URL_TEMPLATES"]["news"],
        ),
        $component
    );?>
</div>