<?php
define('LOG_FILENAME', $_SERVER['DOCUMENT_ROOT'] . '/bitrix/logs/log_' . date('Y_m_d') . '.txt');
<<<<<<< HEAD
=======
define('HOST_PIONEER_LEASING', 'https://pioneer-leasing.ru');
>>>>>>> 566b7848f0b2f2776e7e546e21263df99fc8f306

//Типы инфоблоков
define('CONTENT_IBLOCK_TYPE', 'content');
define('SYSTEM_IBLOCK_TYPE', 'system');
define('NEWS_IBLOCK_TYPE', 'news');
define('SALE_IBLOCK_TYPE', 'sale');
define('PARTNER_IBLOCK_TYPE', 'partners');

//Инфоблоки
define('BANNERS_INVESTORS_IBLOCK_ID', 8); //Баннеры Инвесторам
define('IBLOCK_SALES', 5);
define('MAIL_LOG_IBLOCK_ID', 9);//Почтовый лог отправленных сообщений
define('NEWS_IBLOCK_ID', 3);//Новости
define('SALE_IBLOCK_ID', 5);//Распродажа
define('ADVANTAGES_IBLOCK_ID', 10);//Преимущества
define('PARTNER_IBLOCK_ID', 4);//Список партнеров
define('BANNERS_IBLOCK_ID', 11); //Баннеры
define('BUKHGALTERSKAYA_OTCHETNOST_IBLOCK_ID', 12); //Бухгалтерская отчетность
define('USTAVNYE_DOKUMENTY_IBLOCK_ID', 13); //Документы компании
define('EMISSIONNYE_DOKUMENTY_IBLOCK_ID', 14); //Эмиссионные документы
define('LIZING_IBLOCK_ID', 15); //Лизинг
define('BANNER_HOW_BECOME_INVESTOR_IBLOCK_ID', 16); //Баннер Как стать инвестором
define('WHY_YOU_SHOULD_BUY_IBLOCK_ID', 17); //Почему стоит покупать облигации ООО «Пионер-Лизинг»


//Фильтры
define('BANNER_INVESTOR_FIRST_FILTER_NAME', 'BannerInvestorFirstFilterName');
define('BANNER_INVESTOR_SECOND_FILTER_NAME', 'BannerInvestorSecondFilterName');
define('BANNER_INVESTOR_THIRD_FILTER_NAME', 'BannerInvestorThirdFilterName');
<<<<<<< HEAD
=======
define('BANNER_INVESTOR_FOURTH_FILTER_NAME', 'BannerInvestorFourthFilterName');
>>>>>>> 566b7848f0b2f2776e7e546e21263df99fc8f306
define('BANNER_SALE_FILTER_NAME', 'BannerSaleFilterName');
define('BANNER_HEADER_FILTER_NAME', 'BannerHeaderFilterName');
define('BANNER_MENU_SIDEBAR_FILTER_NAME', 'BannerMenuSidebarFilterName');



define('UNLIMITED_COUNT', 99999);
define('CACHE_TYPE', 'A');
define('CACHE_TIME', 86400);
define('CACHE_FILTER', 'N');
define('CACHE_GROUPS', 'N');