<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("title", "Новости - Поможем деньгами в любых обстоятельствах");
$APPLICATION->SetTitle("Новости - компания \"Пионер - Лизинг\"");
?>
<main class="pt-menu" role="main">
    <div class="container">
        <?$APPLICATION->IncludeComponent(
               "bitrix:breadcrumb",
               "",
               Array(
                  "PATH" => "",
                  "SITE_ID" => "s1",
                  "START_FROM" => "0"
               )
            );?>
    </div>
    <div class="container container-2">
        <?$APPLICATION->IncludeComponent("bitrix:news", "news", array(
            'NEWS_MAIN_SET_TITLE' => 'N',
            "DETAIL_PROPERTY_CODE" => array(),
            "LIST_PROPERTY_CODE" => array(),
            "IBLOCK_ID" => NEWS_IBLOCK_ID,
            "IBLOCK_TYPE" => NEWS_IBLOCK_TYPE,
            "TEMPLATE_THEME" => "site",
            "FILTER_NAME" => "",
            "NEWS_COUNT" => "6",
            "USE_SEARCH" => "Y",
            "USE_RSS" => "N",
            "NUM_NEWS" => "9",
            "NUM_DAYS" => "180",
            "YANDEX" => "N",
            "USE_RATING" => "N",
            "USE_CATEGORIES" => "N",
            "USE_REVIEW" => "N",
            "USE_FILTER" => "Y",
            "SHOW_TAGS" => 'Y',
            "SORT_BY2" => "SORT",
            "SORT_ORDER2" => "ASC",
            "SORT_BY1" => "ACTIVE_FROM",
            "SORT_ORDER1" => "DESC",
            "CHECK_DATES" => "Y",
            "SEF_MODE" => "Y",
            "SEF_FOLDER" => "/news/",
            "AJAX_MODE" => "N",
            "AJAX_OPTION_SHADOW" => "Y",
            "AJAX_OPTION_JUMP" => "N",
            "AJAX_OPTION_STYLE" => "Y",
            "AJAX_OPTION_HISTORY" => "N",
            "CACHE_FILTER" => CACHE_FILTER,
            "CACHE_GROUPS" => CACHE_GROUPS,
            "CACHE_TIME" => CACHE_TIME,
            "CACHE_TYPE" => CACHE_TYPE,
            "DISPLAY_PANEL" => "Y",
            "SET_TITLE" => "Y",
            "SET_STATUS_404" => "Y",
            "SHOW_404" => "Y",
            "MESSAGE_404" => "",
            "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
            "ADD_SECTIONS_CHAIN" => "Y",
            "ADD_ELEMENT_CHAIN" => "Y",
            "USE_PERMISSIONS" => "N",
            "PREVIEW_TRUNCATE_LEN" => "",
            "LIST_ACTIVE_DATE_FORMAT" => "j F",
            "LIST_FIELD_CODE" => array("PREVIEW_PICTURE","DETAIL_PICTURE","DETAIL_TEXT","PREVIEW_TEXT"),
            "HIDE_LINK_WHEN_NO_DETAIL" => "N",
            "DISPLAY_NAME" => "Y",
            "META_KEYWORDS" => "-",
            "META_DESCRIPTION" => "-",
            "BROWSER_TITLE" => "-",
            "DETAIL_ACTIVE_DATE_FORMAT" => "j F",
            "DETAIL_FIELD_CODE" => array("PREVIEW_PICTURE","DETAIL_PICTURE","DETAIL_TEXT","PREVIEW_TEXT"),
            "DETAIL_DISPLAY_TOP_PAGER" => "N",
            "DETAIL_DISPLAY_BOTTOM_PAGER" => "Y",
            "DETAIL_PAGER_TITLE" => "Страница",
            "DETAIL_PAGER_TEMPLATE" => "pioneer-news-nav",
            "DETAIL_PAGER_SHOW_ALL" => "Y",
            "DISPLAY_TOP_PAGER" => "N",
            "DISPLAY_BOTTOM_PAGER" => "Y",
            "PAGER_TITLE" => "",
            "PAGER_SHOW_ALWAYS" => "N",
            "PAGER_TEMPLATE" => "pioneer-news-nav",
            "PAGER_DESC_NUMBERING" => "N",
            "PAGER_DESC_NUMBERING_CACHE_TIME" => CACHE_TIME,
            "PAGER_SHOW_ALL" => "N",
            "DISPLAY_DATE" => "Y",
            "DISPLAY_PICTURE" => "Y",
            "DISPLAY_PREVIEW_TEXT" => "Y",
            "AJAX_OPTION_ADDITIONAL" => "",
            "SLIDER_PROPERTY" => "",
            "SEF_URL_TEMPLATES" => array(
                    "news" => "",
                    "section" => "#SECTION_CODE_PATH#/",
                    "detail" => "#SECTION_CODE_PATH#/#ELEMENT_CODE#/",
                ),
            ),
            false
        );?>
    </div>
</main>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>