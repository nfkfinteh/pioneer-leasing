<?
AddEventHandler("iblock", "OnAfterIBlockElementAdd", "OnAfterIBlockElementAddHandler");
AddEventHandler("iblock", "OnAfterIBlockElementUpdate", "OnAfterIBlockElementUpdateHandler");
AddEventHandler('main', 'OnBeforeEventSend', "OnBeforeEventSendHandler");
AddEventHandler('main', 'OnEpilog', 'onEpilog');
AddEventHandler("main", "OnEndBufferContent", "OnEndBufferContentHandler");


function OnEndBufferContentHandler(&$content)
{
    $currentPage = $GLOBALS['APPLICATION']->GetCurPage();
    if ((strpos($currentPage, 'bitrix/admin') !== false)
        || (strpos($currentPage, 'bitrix/tools/captcha.php') !== false)
    ) {
        return;
    }


    //w3c validator
    $content = str_replace(" type=\"text/javascript\"", false, $content);
    $content = str_replace(" charset=\"utf-8\" charset=\"UTF8\"", false, $content);
    $content = str_ireplace(' charset="UTF8"></script>', '></script>', $content);
    $content = str_ireplace(' charset="utf-8"></script>', '></script>', $content);
    $content = str_replace("charset=\"utf-8\"></script>", '></script>', $content);
    $content = str_ireplace('data-></script>', '></script>', $content);


    //canonical
    if (!preg_grep("/PAGEN_(.*)/i", array_keys($_REQUEST))) {
        $curDir = $GLOBALS['APPLICATION']->GetCurDir();
        $curPage = $GLOBALS['APPLICATION']->GetCurUri();
        $curPageSimple  = $GLOBALS['APPLICATION']->GetCurPage();
        if (strpos($curDir, '/amp/') === false) {
            //canonical на все страницы, где оно не установлено
            $host = (CMain::IsHTTPS()) ? 'https://' . $_SERVER["SERVER_NAME"] : 'http://' . $_SERVER["SERVER_NAME"];
            if ((strripos($content, 'rel="canonical"') === false) && (strripos($content, "rel='canonical'") === false)) {
                $CanonicalURL = '';
                if ($curDir == $curPageSimple) {
                    $CanonicalURL = $curDir;
                } elseif (strripos($curPageSimple, 'index.php') !== false) {
                    $CanonicalURL = $curDir;
                } elseif (strripos($curPageSimple, '.html') !== false) {
                    $CanonicalURL = $curPageSimple;
                } else {
                    $CanonicalURL = $curDir;
                }
                $content = str_ireplace('<head>', '<head><link href="'.$host.$CanonicalURL.'" rel="canonical" />', $content);
            }
        }
    }

    //Добавляем ООО, кавычки
    $arReplace = array(
        '"Пионер-Лизинг"' => '«Пионер-Лизинг»',
        '“Пионер-лизинг”' => '«Пионер-Лизинг»',
        '«Пионер-Лизинг»' => 'ООО «Пионер-Лизинг»',
        '«Пионер - Лизинг»' => 'ООО «Пионер - Лизинг»',
        '"Пионер-Лизинг"' => 'ООО "Пионер-Лизинг"',
        '"Пионер - Лизинг"' => 'ООО "Пионер - Лизинг"',
        'ООО ООО' => 'ООО',
        'ОООООО' => 'ООО',
    );
    foreach ($arReplace as $key => $value) {
        $content = str_ireplace($key, $value, $content);
    }
}


function OnAfterIBlockElementAddHandler(&$arFields)
{
    if ($arFields['IBLOCK_ID'] == IBLOCK_SALES)
    {
        //Функция рассылки
        sendSubscribe($arFields);

        //Ресайз изображений
        sale_resize_image($arFields);
    };
}


function OnAfterIBlockElementUpdateHandler(&$arFields)
{
    if ($arFields['IBLOCK_ID'] == IBLOCK_SALES)
    {
        //Ресайз изображений
        sale_resize_image($arFields);
    };
}



function OnBeforeEventSendHandler($arFields, $arTemplate)
{
    CModule::IncludeModule("iblock");
    $message = '';
    foreach ($arFields as $key => $value) {
        $message .= $key.": ".$value.PHP_EOL;
    }
    $arProp = array(
        'MESSAGE' => $message,
        'EVENT_NAME' => $arTemplate["EVENT_NAME"],
        'ID' => $arTemplate["ID"],
    );
    $iblock = new CIBlockElement();
    $res = $iblock->Add([
        'IBLOCK_TYPE'     => SYSTEM_IBLOCK_TYPE,
        'IBLOCK_ID'       => MAIL_LOG_IBLOCK_ID,
        'NAME'            => $arTemplate["EVENT_NAME"]." ".ConvertTimeStamp(time(), "FULL"),
        'ACTIVE_FROM'     => ConvertTimeStamp(time(), "FULL"),
        'ACTIVE'          => 'N',
        'PROPERTY_VALUES' => $arProp
    ]);
}

function onEpilog() {
    global $APPLICATION;
    //301 редирект со старых новостей
    $curPage = $GLOBALS['APPLICATION']->GetCurUri();
    $curDir = $APPLICATION->GetCurDir();
    if (stripos($curPage, '/news/') !== false) {
        CModule::IncludeModule("iblock");
        if ((!empty($_GET["id"])) && (!empty($_GET["news_id"]))) {
            $arFilter = Array("IBLOCK_ID"=>NEWS_IBLOCK_ID, "ID" => $_GET["news_id"]);
            $arSelect = Array("ID", "SECTION_PAGE_URL");
            $rsEl = CIBlockElement::GetList(
                array(),
                $arFilter,
                false,
                false,
                Array("ID", "DETAIL_PAGE_URL")
            );
            if ($obEl = $rsEl->GetNextElement()) {
                $arEl = $obEl->GetFields();
                if ($curDir != $arEl["~DETAIL_PAGE_URL"]) {
                    localredirect($arEl["~DETAIL_PAGE_URL"], false, '301 Moved permanently');
                }
            }
        } elseif (!empty($_GET["id"])) {
            $arFilter = Array("IBLOCK_ID"=>NEWS_IBLOCK_ID, "ID" => $_GET["id"]);
            $arSelect = Array("ID", "SECTION_PAGE_URL");
            $arNavParams = Array("nPageSize" => 1);
            $rsSections = CIBlockSection::GetList(Array(), $arFilter, false, $arSelect, $arNavParams);
            if ($arSect = $rsSections->GetNext())  {
                if ($curDir != $arSect["~SECTION_PAGE_URL"]) {
                    localredirect($arSect["~SECTION_PAGE_URL"], false, '301 Moved permanently');
                }
            }
        }
    }

    if ($page = preg_grep("/PAGEN_(.*)/i", array_keys($_REQUEST))) {
        $page = intval($_REQUEST[reset($page)]);
        //h1
        $GLOBALS['APPLICATION']->SetTitle($GLOBALS['APPLICATION']->GetTitle(false) . ' — стр ' . $page);
        //title
        $title = $GLOBALS['APPLICATION']->GetProperty('title');
        $GLOBALS['APPLICATION']->SetPageProperty('title', $title . ' — стр ' . $page);
        //description
        $description = $GLOBALS['APPLICATION']->GetProperty('description');
        $GLOBALS['APPLICATION']->SetPageProperty('description', $description . ' — стр ' . $page);
    }
}