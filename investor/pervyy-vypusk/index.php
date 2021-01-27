<?
require_once $_SERVER['DOCUMENT_ROOT'].'/bitrix/header.php';
$APPLICATION->SetTitle("Инвесторам");
$APPLICATION->SetPageProperty("title", "Облигации первый выпуск | ООО «Пионер-Лизинг»");
$APPLICATION->SetPageProperty("description", "Приобрести биржевые облигации ООО «Пионер-Лизинг» 1-го, 2-го и 3-го выпуска онлайн");
?>

<link rel="stylesheet" type="text/css" media="all" href="<?=SITE_TEMPLATE_PATH?>/css/datepicker.css" />
<script type="text/javascript" src="<?=SITE_TEMPLATE_PATH?>/js/moment.min.js"></script>
<script type="text/javascript" src="<?=SITE_TEMPLATE_PATH?>/js/datepicker.js"></script>

	<div class="second-menu">
		<div class="container h-100">
			<?$APPLICATION->IncludeComponent(
		"bitrix:menu",
		"pioner_menu_sub",
		array(
			"ROOT_MENU_TYPE" => "sub_menu",
			"MAX_LEVEL" => "4",
			"CHILD_MENU_TYPE" => "",
			"USE_EXT" => "N",
			"DELAY" => "N",
			"ALLOW_MULTI_SELECT" => "N",
			"MENU_CACHE_TYPE" => "A",
			"MENU_CACHE_TIME" => "3600",
			"MENU_CACHE_USE_GROUPS" => "Y",
			"MENU_CACHE_GET_VARS" => array(
			),
			"COMPONENT_TEMPLATE" => "pioner_menu_sub"
		),
		false
	);?>
		</div>
	</div>
		<main class="pt-double-menu" role="main">
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



			<? $APPLICATION->IncludeComponent("bitrix:news.list", "banner", array(
                "IBLOCK_TYPE" => CONTENT_IBLOCK_TYPE,
                "IBLOCK_ID" => BANNERS_INVESTORS_IBLOCK_ID,
                "NEWS_COUNT" => 1,
                "SORT_BY1" => "SORT",
                "SORT_ORDER1" => "ASC",
                "SORT_BY2" => "ACTIVE_FROM",
                "SORT_ORDER2" => "DESC",
                "FIELD_CODE" => array("PREVIEW_PICTURE","DETAIL_PICTURE"),
			    "PROPERTY_CODE" => array("RATE","TEXT_AFTER_RATE","TITLE_RATE","SUB_TITLE_RATE","RIGHT_TEXT","TYPE"),
			    "FILTER_NAME" => BANNER_INVESTOR_FIRST_FILTER_NAME,
                "CHECK_DATES" => "Y",
                "ADD_divS_CHAIN" => "N",
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


			<div class="container container-2">
				<div class="block-h2">
					<h2 class="header-width">Начните инвестировать в доходные инструменты</h2>
					<h3 class="header-width mt-5">Биржевые облигации ООО «Пионер-Лизинг» (краткое наименование/ISIN-код:
						ПионЛизБП1/RU000A0ZZAT8)</h3>
					<div class="row">
						<div class="col-12 col-md-6">
							<p class="mt-4">20 апреля 2018 года Московская Биржа присвоила идентификационный номер программе
								биржевых облигаций ООО «Пионер-Лизинг» на 10 млрд рублей. В рамках данной программы 31 мая 2018
								года был зарегистрирован дебютный выпуск на 100 млн рублей со сроком обращения 5 лет.</p>
							<p class="mt-4">Номинальная стоимость одной облигации равна 1000 рублей. Ставка 1-12 купонов,
								регулярных процентных выплат по облигациям, установлена на уровне 12,25% годовых. Периодичность
								выплаты купона – 12 раз в год (ежемесячно). К данному доходу применяется льгота по налогу на
								доходы физических лиц (НДФЛ), как и к доходам по банковским депозитам.</p>
							<p class="mt-4 mb-0">Дата начала размещения выпуска – 26 июня 2018 года.</p>
						</div>
						<div class="col-12 col-md-6">
							<p class="mt-4">Дата окончания размещения - Датой окончания размещения Облигаций является наиболее
								ранняя из следующих дат: а) 350-й день с даты начала размещения Биржевых облигаций (11.06.2019);
								б) дата размещения последней Биржевой облигации выпуска.</p>
							<p class="mt-4">Идентификационный номер программы – 4-00331-R-001P-02E от 20.04.2018.</p>
							<p class="mt-4">Идентификационный номер выпуска – 4B02-01-00331-R-001P от 31.05.2018.</p>
							<p class="mt-4">Андеррайтер – АО «НФК-Сбережения» (краткое наименование: ИК НФК-Сбер, код участника
								торгов – GC0294900000)</p>
							<a class="btn btn-main btn-260 mt-3" href="/investor/docs/%D0%9F%D0%B8%D0%BE%D0%BD%D0%B5%D1%80-%D0%9B%D0%B8%D0%B7%D0%B8%D0%BD%D0%B3%20%D0%B8%D0%BD%D0%B2%D0%B5%D1%81%D1%82%D0%B8%D1%86%D0%B8%D0%BE%D0%BD%D0%BD%D1%8B%D0%B9%20%D0%BC%D0%B5%D0%BC%D0%BE%D1%80%D0%B0%D0%BD%D0%B4%D1%83%D0%BC.pdf" target="_blank">Инвестиционный меморандум</a>
						</div>
					</div>
				</div>
			</div>


			<div class="bg-gradient">
				<div class="container container-2">
					<div class="block-h2">
						<h2 class="header-width">
							<?$APPLICATION->IncludeComponent("bitrix:main.include", "", array(
								"AREA_FILE_SHOW" => "file",
								"PATH" => SITE_TEMPLATE_PATH."/include_areas/banner_how_become_investor/title.php",
							));?>
						</h2>
						<? $APPLICATION->IncludeComponent("bitrix:news.list", "banner_how_become_investor", array(
							"IBLOCK_ID" => BANNER_HOW_BECOME_INVESTOR_IBLOCK_ID,
							"IBLOCK_TYPE" => CONTENT_IBLOCK_TYPE,
							"NEWS_COUNT" => UNLIMITED_COUNT,
							"SORT_BY1" => "SORT",
							"SORT_ORDER1" => "ASC",
							"SORT_BY2" => "ACTIVE_FROM",
							"SORT_ORDER2" => "DESC",
							"FIELD_CODE" => array("PREVIEW_PICTURE","DETAIL_PICTURE"),
							"PROPERTY_CODE" => array(""),
							"FILTER_NAME" => "",
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
						<div class="row mt-5">
							<div class="col-12 col-md-6">
								<?$APPLICATION->IncludeComponent("bitrix:main.include", "", array(
									"AREA_FILE_SHOW" => "file",
									"PATH" => SITE_TEMPLATE_PATH."/include_areas/banner_how_become_investor/first_text.php",
								));?>
							</div>
							<div class="col-12 col-md-6">
								<?$APPLICATION->IncludeComponent("bitrix:main.include", "", array(
									"AREA_FILE_SHOW" => "file",
									"PATH" => SITE_TEMPLATE_PATH."/include_areas/banner_how_become_investor/second_text.php",
								));?>
							</div>
						</div>
						<?$APPLICATION->IncludeComponent("bitrix:main.include", "", array(
							"AREA_FILE_SHOW" => "file",
							"PATH" => SITE_TEMPLATE_PATH."/include_areas/banner_how_become_investor/btn.php",
						));?>
					</div>
				</div>
			</div>

			<div class="container container-2">
				<div class="block-h2">
					<h2 class="header-width">Покупка облигаций<br>ООО «Пионер-Лизинг»</h2>
					<h3 class="mt-5">Ставка купонного дохода 12,25%</h3>
					<label class="mt-2" for="change_val">Инвестиции</label>
					<div class="row mt-2">
						<div class="col-12 col-md-8 col-xxl-5">
							<span class="h3" id="change_val_lab" for="change_val_lab">1 000 000</span> <span class="h3">руб. </span>(количество облигаций: <span id="change_val_lab_kol">1000</span> шт.)
							<div class="mt-4"></div>
							<input data-rangeslider id="change_val" type="range" min="1000" max="10000000" step="1000" value="1000000">
						</div>
						<div class="col-12"></div>
						<div class="col-12 col-md-6 col-xxl-5 mt-5">
							<h3>Расчет купонного дохода</h3>
							<div class="row mt-5">
								<div class="col-12 col-sm-6 col-md-12 col-xl-6">
									<div class="input-date input-date_color_gray w-100">
										<input class="input-date__input" name="by-date" type="text" id="startDate" value="<?=date("d.m.Y")?>">
										<label class="input-date__label" for="startDate">Дата покупки</label>
									</div>
								</div>
								<div class="col-12 col-sm-6 col-md-12 col-xl-6 mt-3 mt-sm-0 mt-md-3 mt-xl-0">
									<div class="input-date input-date_color_gray w-100">
										<input class="input-date__input" name="sale-date" type="text" id="endDate" value="<?php
											$date = date_create(date("d.m.Y"));
											date_modify($date, '+12 month');
											echo date_format($date, 'd.m.Y');?>"  />
										<label class="input-date__label" for="endDate">Дата продажи</label>
									</div>
								</div>
							</div>
							<div class="checkbox mt-4">
								<input class="checkbox__input" type="checkbox" value="" name="reinvest-check"
									id="reinvest_dohod">
								<label class="checkbox__label text-gray" for="reinvest_dohod">
									Реинвестировать купонный доход
								</label>
							</div>
							<div id="alert_data" style="height: 0px;">
								<div class="alert alert-danger" role="alert">
									Вы ввели дату покупки облигаций позднее даты продажи, пожалуйста исправьте!
								</div>
							</div>
						</div>
						<div class="col-12 col-md-6 col-xxl-5 offset-xxl-1 mt-5 order-2 order-md-1">
							<h3>Расчет дохода от продажи облигаций</h3>
							<div class="row mt-5">
								<div class="col-12 col-sm-6 col-md-12 col-xl-6">
									<div class="input input_color_gray">
										<input class="input__input" name="by-price" id="start_sale" type="text">
										<label class="input__label" for="start_sale">Цена покупки</label>
									</div>
								</div>
								<div class="col-12 col-sm-6 col-md-12 col-xl-6 mt-3 mt-sm-0 mt-md-3 mt-xl-0">
									<div class="input input_color_gray">
										<input class="input__input" name="sale-price" id="end_sale" type="text">
										<label class="input__label" for="end_sale">Цена продажи</label>
									</div>
								</div>
							</div>
							<p class="mt-4 mb-2">Доход от продажи облигаций: <span id="dohod_sale">0.00</span> руб.</p>
							<p>НДФЛ1, возникающий при продаже облигаций : <span id="ndfl">0.00</span> руб.</p>
						</div>
						<div class="col-12 col-md-6 col-xl-5 mt-3 order-1 order-md-2">
							<p class="text-gray">Расчет купонного дохода</p>
							<span class="h2 text-main" id="kup_dohod">0.00</span> <span class="h2 text-main">руб.</span>
						</div>
						<div class="col-12 col-md-6 col-xl-5 offset-xl-1 mt-3 order-3">
							<p class="text-gray">Общий доход</p>
							<span class="h2"><span id="dohod_ob">0.00</span> руб.</span>
						</div>
					</div>
					<a class="btn btn-main btn-255 mt-5" href="https://nfksber.ru/open_account/" target="_blank">Открыть счет и купить</a>
				</div>
			</div>


			<div class="bg-gray">
				<div class="container container-2" style="padding-bottom: 5em;">
					<div class="block-h2">
						<h2 class="header-width">
							<?$APPLICATION->IncludeComponent("bitrix:main.include", "", array(
								"AREA_FILE_SHOW" => "file",
								"PATH" => SITE_TEMPLATE_PATH."/include_areas/investor/pervyy-vypusk/why_you_should_buy_title.php",
							));?>
						</h2>

						<div class="row mt-4">
							<? $APPLICATION->IncludeComponent("bitrix:news.list", "why_you_should_buy", array(
								"PARENT_SECTION_CODE" => "pervyy-vypusk",
								"INCLUDE_SUBSECTIONS" => "Y",
								"IBLOCK_ID" => WHY_YOU_SHOULD_BUY_IBLOCK_ID,
								"IBLOCK_TYPE" => CONTENT_IBLOCK_TYPE,
								"NEWS_COUNT" => UNLIMITED_COUNT,
								"SORT_BY1" => "SORT",
								"SORT_ORDER1" => "ASC",
								"SORT_BY2" => "ACTIVE_FROM",
								"SORT_ORDER2" => "DESC",
								"FIELD_CODE" => array("PREVIEW_PICTURE","DETAIL_PICTURE"),
								"PROPERTY_CODE" => array(""),
								"FILTER_NAME" => "",
								"CHECK_DATES" => "Y",
								"ADD_SECTIONS_CHAIN" => "N",
								"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
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
					<h2 class="header-width">Итоги размещения дебютного выпуска биржевых облигаций ООО «Пионер-Лизинг»</h2>
					<div class="row mt-5">
						<div class="col-12 col-md-6 position-relative">
							<p>3 декабря 2018 года «Пионер-Лизинг» завершил размещение дебютного выпуска 5-летних биржевых
								облигаций объемом 100 млн рублей. В настоящее время указанные облигации доступны для совершения
								сделок на Московской Бирже среди неограниченного круга лиц.</p>
							<p class="mt-4">Для всех тех, кто уже приобрел данные облигации или только планирует их покупать,
								мы подготовили специальную презентацию о результатах привлечения и освоения инвестиций от 1-го
								выпуска.</p>
							<a class="btn btn-main btn-255 absolute-left-bottom d-none d-md-inline-block" href="/upload/Itogovy_vypusk_Pioner_lizing-szhaty.pdf" target="_blank">Скачать
								презентацию</a>
						</div>
						<div class="col-12 col-md-6">
							<h3>Из нашей презентации Вы узнаете:</h3>
							<ul class="pioner-ul mb-md-0">
								<li>Объем привлеченных и вложенных в лизинг средств.</li>
								<li>Распределение инвестиций по сегментам.</li>
								<li>Список лизингового имущества, профинансированного за счет облигационного выпуска.</li>
								<li>Финансовые показатели ООО «Пионер-Лизинг» после освоения инвестиций, привлеченных благодаря
									биржевым облигациям.</li>
								<li>Фактические и планируемые выплаты по купонам.</li>
								<li>Предварительные условия 2-го выпуска биржевых облигаций.</li>
							</ul>
							<a class="btn btn-main btn-255 d-inline-block d-md-none" href="/upload/Itogovy_vypusk_Pioner_lizing-szhaty.pdf" target="_blank">Скачать презентацию</a>
						</div>
					</div>
				</div>
			</div>

		</main>
<script>
// $('.input__input, .input-date__input').each(function () {
// 	const labelWidth = $(this).next('label').prop('clientWidth');
// 	$(this).css({'--labelWidth': labelWidth+30+'px'});
// 	console.log(labelWidth)
// });

// $(".tabs__content").css({'position':'absolute','visibility':'hidden', 'display':'block'});
// 	$('.input__input, .input-date__input').each(function () {
// 		const labelWidth = $(this).next('label').prop('clientWidth');
// 		var labelWidth_change = $(this).css({'--labelWidth': labelWidth+30+'px'});
// 		console.log(labelWidth);
// 	});
// $(".tabs__content").removeAttr('style');


	$('ul.tabs__caption').on('click', 'li:not(.active)', function () {
		$('html, body').animate({scrollTop: 0},500);
		$(".tabs__content").css({'position':'absolute','visibility':'hidden', 'display':'block'});
		$('.input__input, .input-date__input').each(function () {
			const labelWidth = $(this).next('label').prop('clientWidth');
			$(this).css({'--labelWidth': labelWidth+30+'px'});
			// console.log(labelWidth)
		});
		$(this)
				.addClass('active').siblings().removeClass('active')
				.closest('div.tabs').find('div.tabs__content').removeClass('active').eq($(this).index()).addClass('active');
		$(".tabs__content").removeAttr('style');
	});

	function jsDate(idname) {
    var date = String(document.getElementById(idname).value);
    var date_parse = Number(Date.parse(date.replace(/(\d+)\.(\d+)\.(\d+)/, '$2/$1/$3')));
    return date_parse;
}

// Расчет купонного дохода
function kupon_dohod() {
    // вычисление введеных дат
    var summa = Number(document.getElementById("change_val").value); //Number($('#change_val').val);
    var start_date_p = jsDate('startDate');
    var end_date_p = jsDate('endDate');
    var current_date = new Date();
    var kol_day = (end_date_p - start_date_p) / 86400000;

    //если дата продажи больше даты покупки делаем вычисление если нет то просим пользователя изменить даты
        var Prosent = 12.25;
        var itogo = (summa * Prosent) / 36500;
        var kp_dohod_it = itogo * kol_day;
        // расчет реинвестирования купонного дохода
        var kol_kup_per = kol_day / 30;
        var it_reinv_doh = Math.pow(1.010068, kol_kup_per);
        var a = it_reinv_doh - 1;
        var reinvest_doh = summa * a;
        var check_rd = document.getElementById("reinvest_dohod");
        var reinvest_kd = 0;

        if (check_rd.checked) {
            // $('#labelcheck').html(reinvest_doh.toFixed(2));
            $('#kup_dohod').html(reinvest_doh.toFixed(2));
            reinvest_kd = Number(reinvest_doh.toFixed(2));
        } else {
            //$('#labelcheck').html('0.00 руб.');
            $('#kup_dohod').html(kp_dohod_it.toFixed(2));
            reinvest_kd = Number(kp_dohod_it.toFixed(2));
        }
        //$('#kup_dohod').html(kp_dohod_it.toFixed(2));

        var kol_vo = Number(document.getElementById("change_val_lab_kol").innerHTML);
        var start_price = Number(document.getElementById("start_sale").value);
        var end_price = Number(document.getElementById("end_sale").value);
        var dohod = Number((end_price - start_price) * kol_vo);
        var ndfl = dohod * 0.13;

        $('#dohod_sale').html(dohod.toFixed(2));
        $('#ndfl').html(ndfl.toFixed(2));
        console.log(reinvest_kd + ' + ' + dohod);
        var itogov_dohod = (reinvest_kd + dohod) - ndfl;

        $('#dohod_ob').html(itogov_dohod.toFixed(2));
}
//
function valueView(data) {
    document.getElementById('change_val_lab').innerHTML = data;
    document.getElementById('change_val_lab_kol').innerHTML = data / 1000;
}


$(document).ready(function () {

            kupon_dohod();

            $('#startDate').datepicker({
                // Можно выбрать тольо даты, идущие за сегодняшним днем, включая сегодня
                minDate: new Date()
            })

            $('#endDate').datepicker({
                // Можно выбрать тольо даты, идущие за сегодняшним днем, включая сегодня
                minDate: new Date()
            })

            $('#change_val').on('input', function () {
                var label_sum = $('#change_val_lab');
                var ed_sum = $('#change_val_lab_kol');
                var summa = Number($(this).val());
                var kol_vo = summa / 1000;

                $(label_sum).html(summa.toFixed(2));
                $(ed_sum).html(kol_vo);

                kupon_dohod();
            });
            // Дата покупки
            $('#startDate').on('focusout', function () {
                kupon_dohod();
            });
            // Дата продажи
            $('#endDate').on('focusout', function () {
                kupon_dohod();
            });
            // цена продажи
            $('#end_sale').on('focusout', function () {
                kupon_dohod();
            });

            $('#reinvest_dohod').on('click', function () {
                kupon_dohod();
            });
});
</script>
    <?
require_once $_SERVER['DOCUMENT_ROOT'].'/bitrix/footer.php';