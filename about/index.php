<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("tags", "Пионер-лизинг");
$APPLICATION->SetPageProperty("keywords_inner", "Пионер лизинг Чебоксары");
$APPLICATION->SetPageProperty("keywords", "Пионер-лизинг");
$APPLICATION->SetPageProperty("description", "Компания ООО «Пионер-Лизинг» предлагает различные продукты лизинга для бизнеса. О компании. Наш телефон : (8352) 45-89-89");
$APPLICATION->SetPageProperty("title", "О компании | ООО «Пионер-Лизинг»");
$APPLICATION->SetTitle("Компания ООО «Пионер-Лизинг»");
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
        <div class="block-h2">
            <h1 class="header-width"><?$APPLICATION->ShowTitle(false)?></h1>
            <div class="row mt-5">
                <div class="col-12 col-md-6">
                    <p>ООО «Пионер-Лизинг» существует на рынке лизинговых услуг более 15 лет. Компания работает по всей России, как с крупными организациями, так и с индивидуальными предпринимателями. Особое внимание Пионер-Лизинг уделяет работе с малым и средним бизнесом.</p>
                    <p>ООО «Пионер-Лизинг» всегда ставит интересы своих клиентов на первое место, поэтому предлагает широкий ассортимент лизинговых продуктов, с помощью которых можно приобрести автотранспорт, спецтехнику, оборудование и коммерческую недвижимость.</p>

                    <?/*?>
                    <p class="mt-4">Наши клиенты также имеют возможность воспользоваться субсидией из республиканского бюджета Чувашской Республики на возмещение части затрат на уплату лизинговых платежей по договорам лизинга, заключенным с российскими лизинговыми компаниями на приобретение технологического оборудования, используемого для реализации перспективных и приоритетных инновационных проектов. Таким образом, ряд наших клиентов уже компенсировали свои затраты на приобретение спецтранспорта и оборудования.</p>
                    <?*/?>
                    <div class="ranking_item">
                        <a href="//www.raexpert.ru/rankingtable/leasing/2019/4" target="_blank" class="rank_logo">
                            <div class="img"><img alt="Рейтинговое агенство Expert" src="/local/templates/pioner-lizing/img/Logo_ExpertRA.png"></div>
                        </a>
                        <p class="h3">
                            <a href="//www.raexpert.ru/rankingtable/leasing/2019/4" target="_blank">Российское кредитное агентство RAEX («Эксперт РА»)</a>
                            Место в рэнкинге ЛК по объему портфеля: <span class="h2">83</span>
                        </p>
                    </div>
                    <div class="ranking_item">
                        <a href="//acra-ratings.ru/ratings/issuers/277" target="_blank" class="rank_logo">
                            <div class="img">
                                <svg xmlns="http://www.w3.org/2000/svg" width="124" height="32" viewBox="0 0 124 32">
                                    <path d="M110.385,31l-1.571-4H98l-1.6,4H86.964L99.205,1h8.714L120.2,31h-9.819Zm-4.8-12.443-2.168-7.075-2.21,7.075-0.447,1.364h5.287ZM80,21H75L74.984,31h-9V1H80a10.691,10.691,0,0,1,7.711,2.9A9.233,9.233,0,0,1,91,11a8.846,8.846,0,0,1-3.289,6.877A10.834,10.834,0,0,1,80,21ZM79,8H74.984v6H79a2.916,2.916,0,0,0,3-3A2.942,2.942,0,0,0,79,8ZM54,31L44,18,43.984,31h-9V1h9L44,13,52,1H63L53,15,65,31H54ZM22.813,27H12l-1.6,4H0.963L13.205,1h8.714L34.2,31H24.385Zm-3.232-8.445-2.168-7.075L15.2,18.555,14.756,19.92h5.287Z"></path>
                                </svg>
                            </div>
                        </a>
                        <p class="h3">
                            <a href="//acra-ratings.ru/ratings/issuers/277" target="_blank">Аналитическое кредитное рейтинговое агентство (АКРА)</a>
                            Кредитный рейтинг: <span class="h2">BB(RU)</span> прогноз «Стабильный»
                        </p>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <h3>Направление лизинговых операций:</h3>
                    <p class="list-style">Лизинг автотранспортных средств (легковой и грузовой автотранспорт)</p>
                    <p class="list-style">Лизинг автобусов (туристические, городские, пригородные автобусы)</p>
                    <p class="list-style">Лизинг специальной техники и оборудования</p>
                    <p class="list-style">Лизинг коммерческой недвижимости</p>
                    <a class="btn btn-main btn-255 mt-5" target="_blank" href="/upload/static/pioneer_leasing_presentation.pdf">Скачать презенатцию</a>
                </div>
            </div>
        </div>
    </div>


    <div class="bg-gradient">
        <div class="container container-2">
            <div class="block-h2">
                <h2 class="header-width">Преимущества работы с ООО «Пионер-Лизинг»</h2>
                <div class="row">
                    <div class="col-12 col-md-4">
                        <div class="adv-card adv-card_vertical">
                            <img class="adv-card__image" src="<?=SITE_TEMPLATE_PATH?>/img/icons/contract_white.svg" alt="Надежность">
                            <div>
                                <h3 class="adv-card__title">Простота и скорость</h3>
                                <p class="list-style">Время оформления сделки от 1 дня</p>
                                <p class="list-style">Одобрение по 2м документам</p>
                                <p class="list-style">Подписание документов через ЭДО</p>
                                <p class="list-style">Финансируем компании, зарегистрированные недавно</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-4">
                        <div class="adv-card adv-card_vertical">
                            <img class="adv-card__image" src="<?=SITE_TEMPLATE_PATH?>/img/icons/budget_white.svg" alt="Привлекательность">
                            <div>
                                <h3 class="adv-card__title">Выгодные условия</h3>
                                <p class="list-style">Первоначальный взнос от 0%</p>
                                <p class="list-style">Низкий процент удорожания</p>
                                <p class="list-style">Удобный график выплат</p>
                                <p class="list-style">Индивидуальный подход к каждому клиенту</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-4">
                        <div class="adv-card adv-card_vertical">
                            <img class="adv-card__image" src="<?=SITE_TEMPLATE_PATH?>/img/icons/calendar_white.svg" alt="Скорость">
                            <div>
                                <h3 class="adv-card__title">Скидки и партнерские программы</h3>
                                <p class="list-style">До 25% скидки от РРЦ от автодилеров на легковые авто</p>
                                <p class="list-style">До 10% скидки от РРЦ от поставщиков на грузовой транспорт и спецтехнику</p>
                                <p class="list-style">Гарантия юридической проверки всего транспорта</p>
                                <p class="list-style">Детально проработанная корпоративная цепочка поставщиков и услуг для предоставления максимальной выгоды клиенту</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="container container-2">
        <div class="block-h3" style="margin-bottom: 5em;">
            <div class="row text-justify">
                <div class="col-12 col-md-6">
                    <p>ООО «Пионер-Лизинг» – динамично развивающаяся компания, которая постоянно исследует рынок в поисках оптимально выгодных предложений для своих клиентов и партнеров. На сегодняшний день здесь постоянно действуют специальные предложения, индивидуальный подход и комплексные решения по приобретению в лизинг автотранспортных средств, автобусной техники, специальной техники и оборудования.</p>
                </div>
                <div class="col-12 col-md-6">
                    <p>Если вы желаете стать клиентом или партнером компании – просто свяжитесь с менеджерами Пионер-Лизинг по телефонам, указанным на сайте,или закажите звонок.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="question-block custom_question-block">
        <div class="container">
            <?$APPLICATION->IncludeComponent(
                "pioneer_custom:main.feedback",
                "pioneer_callback_form",
                array(
                    "COMPONENT_TEMPLATE" => "pioneer_callback_form",
                    "EMAIL_TO" => "mail@pioneer-leasing.ru",
                    "EVENT_MESSAGE_ID" => array(
                        0 => "7",
                    ),
                    "OK_TEXT" => "Спасибо, ваше сообщение принято.",
                    "REQUIRED_FIELDS" => array(
                        0 => "NAME",
                        1 => "PHONE",
                    ),
                    "USE_CAPTCHA" => "N",
                    "AJAX_MODE" => "Y",
                    "AJAX_OPTION_SHADOW" => "N",
                    "AJAX_OPTION_JUMP" => "N",
                    "AJAX_OPTION_STYLE" => "Y",
                    "AJAX_OPTION_HISTORY" => "N"
                ),
                false
            );?>
        </div>
        <div class="custom_question-image">
            <img alt="" src="<?= SITE_TEMPLATE_PATH ?>/img/woman-question_simple_v2.png">
        </div>
    </div>
    <div class="container container-2">
        <div class="block-h2">
            <h2 class="header-width">Группа компаний</h2>
            <div class="row mt-5">
                <div class="col-12 col-md-6">
                    <p>В 2016 году ООО «Пионер-Лизинг» образовал одну группу компаний с АО «НФК-Сбережения». Данное решение позволило диверсифицировать бизнес,
получить инструмент надежного размещения краткосрочной ликвидности для лизинговой компании, минуя кредитные учреждения, через брокера, имеющего прямой доступ к торгам на Московской и Санкт-Петербургской биржах.</p>
                </div>
                <div class="col-12 col-md-6">
                    <p>Инвестиционная компания «НФК-Сбережения»более 15-лет работает на российском финансовом рынке, является одним из крупнейших операторов рынка ценных бумаг на территории Приволжского федерального округа.</p>
                    <p>Важными преимуществами тандема ООО «Пионер-Лизинг» и АО «НФК-Сбережения» являются возможности использования профучастника в качестве финансового консультанта и андеррайтера при размещении ценных бумаг, в том числе среди клиентов АО «НФК-Сбережения».</p>
                </div>
            </div>
        </div>
    </div>


    <div class="bg-gray">
        <div class="container container-2">
            <div class="block-h2">
                <h2 class="header-width">Основные принципы работы:</h2>
                <div class="row">
                    <div class="col-12 col-md-6">
                        <p class="list-style mt-5">Финансируем малый и средний бизнес, ИП, юридические лица, в том числе компании, зарегистрированные недавно.</p>
                        <p class="list-style mt-5">Практикуем индивидуальный подход к каждому клиенту.</p>
                        <p class="list-style mt-5">Принимаем решения по заключению договора лизинга в течение 1 дня с момента предоставления пакета документов.</p>
                        <p class="list-style mt-5">Не преподносим сюрпризов в виде скрытых платежей и комиссионных вознаграждений.</p>
                        <p class="list-style mt-5">Помогаем значительно сэкономить на налогах (НДС, налог на прибыль,ускоренная амортизация).</p>
                    </div>
                    <div class="col-12 col-md-6">
                        <p class="list-style mt-5">Предлагаем клиентам решения по принципу «одного окна»,  благодаря длительному сотрудничеству с автодилерами и страховыми компаниями.</p>
                        <p class="list-style mt-5">Сопровождение всех этапов сделки (поиск машины, документооборот, помощь в урегулировании убытков по страховым случаям, прочие нестандартные ситуации) персональным менеджером, который возьметна себя решение любых возникших вопросов.</p>
                        <!-- <p class="list-style mt-5">Не преподносим сюрпризов в виде скрытых платежей и комиссионных вознаграждений.</p>
                        <p class="list-style mt-5">Помогаем значительно сэкономить на налоге на прибыль, благодаря применению ускоренного механизма амортизации (коэффициент до 3-х). Если ваша компания является плательщиком НДС, то с суммы лизинговых платежей возмещается налог на добавленную стоимость в полном объёме. Также лизинговые платежи признаются расходами лизингополучателя и уменьшают налогооблагаемую базу по налогу на прибыль.</p> -->
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="container container-2">
        <div class="block-h3 text-gray fsz-12">
            <p>* По размеру собственных средств по состоянию на 31 июля 2016 г. из числа некредитных организаций, зарегистрированных в Чувашской Республике.</p>
        </div>
    </div>
</main>
 <?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>