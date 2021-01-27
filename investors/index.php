<?
require_once $_SERVER['DOCUMENT_ROOT'].'/bitrix/header.php';

$APPLICATION->SetTitle("Инвесторам");

$APPLICATION->SetAdditionalCSS( '/investor/style.css' );
?><link rel="stylesheet" type="text/css" media="all" href="<?=SITE_TEMPLATE_PATH?>/css/datepicker.css" />
<script type="text/javascript" src="<?=SITE_TEMPLATE_PATH?>/js/moment.min.js"></script>        
<script type="text/javascript" src="<?=SITE_TEMPLATE_PATH?>/js/datepicker.js"></script>
<?

if ( isset( $_REQUEST['DOC'] ) && ( !empty( $_REQUEST['DOC'] ) ) )
{
    $META_B       = $_REQUEST['DOC'];
	$META['URI']  = $_REQUEST['DOC'];
	$META['TYPE'] = 'PDF';

        ?>
            <h1 class="contacts-page-title"><?= $META['TITLE'] ?></h1>

            <div class="investor-preview">
                <?
                    switch ( $META['TYPE'] )
                    {
                            case 'PDF':
                            {
								$URI = '/investor/docs/'.$META['URI'];

                                ?>
                                    <iframe src="<?= $URI ?>" height="100%" width="100%" id="pdf"></iframe>
                                <?
                            }
                            break;
                            case 'IMG':
                            {
                                $URI = '/investor/' . $META['URI'];

                                ?>
                                    <img src="<?= $URI ?>" id="img">
                                <?
                            }
                            break;
                     }
                 ?>
            </div>

            <a class="investor-back" href="/investor/">< Вернуться назад</a>

        <?

}
else
{

    ?>
	<!--Управление вкладками-->
	<style>
		    .up_menu {	
				list-style-type: none;
    			width: 137px;
    			margin-top: 21px;
				display: none;
				position: absolute;
    			left: 0;
				-moz-border-radius: 5px;
				-webkit-border-radius: 5px;
				border: 2px solid #1fab54;
    
			}
			.up_menu li {
				cursor: pointer;
				color: #FFF;
				text-decoration: none;
				text-shadow: 0px -1px 0px #007122;
				font-family: pfdin-bold;
				font-weight: normal;
				font-size: 13px;
				text-transform: uppercase;
				letter-spacing: 0.055em;
				padding: 10px 0px 0px 12px;
				height: 30px !important;
				background: #1fab54 !important;
			}
			
			#investr_up_menu{
				overflow: inherit; 
				position: relative;
			}
			.activ_tab:hover .up_menu{
				display:block;
			}

			.activ_tab:hover #box_up_menu{
				z-index: 100;
				height: 100%;
			}

			#box_up_menu {
				position: absolute;
    			left: 0;
				width: 100%;    			
			}
			#box_up_menu:hover .up_menu{
				display:block;
			}
			.investoram_ii{
				display:none;
			}
	</style>
	<div class="content button_tab">
	<div class="tab activ_tab" id="investr_up_menu">
			<a href="#" data="investoram_iii" >Как стать инвестором</a>
		</div>
		<div class="tab">
			<a href="#" data="kompany">Общие сведения</a>
		</div>
		<div class="tab">
			<a href="#" data="news_inv">Новости</a>
		</div>
		<div class="tab">
			<a href="#" data="buh_doc">Бухгалтерская отчетность</a>
		</div>
		<div class="tab">
			<a href="#" data="ust_doc">Уставные документы</a>
		</div>
		<div class="tab">
			<a href="#" data="emis_doc">Эмиссионные документы</a>
		</div>
		<div class="tab">
			<a href="https://disclosure.skrin.ru/disclosure/2128702350" target="_blanck" data="raskr_info">Раскрытие информации</a>
		</div>
	</div>
<div class="clearfix"></div>
<!--Вкладка как стать инвестором третий выпуск-->
<div class="content investoram_iii content_tab" style="position: relative; margin-top: 15px;">
	<div class="tabs-header" style="width: 100%;margin-top: 25px;">
		<ul> 	 
			<li class="gradient" data="investoram">Первый выпуск</li>     
			<li class="separator"></li>     
			<li class="gradient" data="investoram_ii">Второй выпуск</li>     
			<li class="separator"></li>     
			<li class="active gradient" data="investoram_iii">Третий выпуск</li>
		</ul>
	</div>
		<img src="<?=SITE_TEMPLATE_PATH?>/images/main_inv_stavka_vupuska_3.png" style="margin-bottom: 25px; display: inline-block; margin-top: 39px;"/>
		<h1 class="contacts-page-title">Биржевые облигации ООО «Пионер-Лизинг» 3-го выпуска (краткое наименование: ПионЛизБП3)</h1>        
        <div class="row" style="margin-top: 20px;">
                <div class="col-left">
                    <p>24 октября 2019 года Московская Биржа присвоила идентификационный номер 3-му выпуску биржевых облигаций ООО «Пионер-Лизинг» объемом 400 млн рублей, размещаемому в рамках Программы биржевых облигаций.</p>
					<p style="margin-top: 25px;">Дата начала размещения выпуска – 26 ноября 2019 года.Уровень листинга: 3.</p>
                    <p style="margin-top: 12px;">Срок обращения облигаций – 3600 дней. Номинальная стоимость одной облигации – 1000 рублей. Периодичность выплаты купонов – 12 раз в год (каждые 30 дней). Ставка 1-го купона установлена в размере 13,25% годовых. Ставки со 2-го по 120-й купоны будут рассчитываться по формуле: ключевая ставка Банка России + 6%.</p>                    
                </div>
                <div class="col-right">                    
					<p>Датой окончания размещения Облигаций является наиболее ранняя из следующих дат: а) 360-й день с даты начала размещения Биржевых облигаций (20.11.2020); б) дата размещения последней Биржевой облигации выпуска.</p>
                    <p style="margin-top: 18px;">Идентификационный номер выпуска – 4B02-03-00331-R-001P от 24.10.2019</p>
                    <p style="margin-top: 17px;margin-bottom: 20px;">Идентификационный номер программы – 4-00331-R-001P-02E от 20.04.2018</p>
					<p style="margin-bottom: 15px;">Андеррайтер – АО «НФК-Сбережения» (краткое наименование: ИК НФК-Сбер, код участника торгов – GC0294900000)</p>
					<a href="https://pioneer-leasing.ru/investors/?DOC=memorandum_3v" class="fix_button" data="emis_doc"  target="_blank" style="padding: 17px 31px;width: 205px;">Инвестиционный меморандум</a>
                </div>
        </div>
        <div class="clearfix"></div>
		<!--
		<h1 class="contacts-page-title" style="margin-top: 50px;">Интервью с учредителем ООО "Пионер-Лизинг" Наумовым Евгением Леонидовичем.</h1>
		<iframe style="margin-left: 19%; margin-top: 50px;" width="560" height="315" src="https://www.youtube.com/embed/vPGkc2ncCiM" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        <div class="clearfix"></div>-->
        <h1 class="contacts-page-title" style="margin-top: 50px;">Как стать инвестором</h1>
		<div class="row" style="margin-top: 33px;">
			<div class="big_nabers"><span class="big_n">1</span><p>Открыть счет у брокера и внести на него деньги.</p></div>
			<div class="big_nabers"><span class="big_n">2</span><p>Приобрести облигации ООО «Пионер-Лизинг».</p></div>
        	<div class="big_nabers"><span class="big_n">3</span><p>Получать ежемесячный купонный доход по программе.</p></div>
		</div>
		<div class="clearfix"></div>
		<div class="row" style="margin-top: 35px;">
			<div class="col-left">
				<p>Акционерное общество «Инвестиционная компания «НФК-Сбережения» оказывает брокерские услуги на всей территории Российской Федерации как профессионалам, так и начинающим участникам рынка ценных бумаг посредством удаленного заключения договоров. Компания предлагает своим клиентам различные варианты брокерского обслуживания на фондовом рынке – путем передачи заявок на совершение сделок брокеру по телефону или через торговый терминал.</p>
			</div>
			<div class="col-right">
				<p>Если у Вас еще нет брокерского счета, Вы можете открыть счет онлайн прямо сейчас у нашего надежного партнера – АО «НФК-Сбережения», выступающего андеррайтером выпуска биржевых облигаций ООО «Пионер-Лизинг».</p>
				<a href="https://nfksber.ru/open_account/" target="_blank" class="fix_button" style="margin: 24px 0;display: block;width: 162px;height: 17px;">Открыть счет</a>
			</div>
		</div>
		<div class="clearfix"></div>
        <h1 class="contacts-page-title" style="margin-top: 50px;">Почему стоит покупать облигации ООО «Пионер-Лизинг»</h1>
		<div class="row poch_investr" style="margin-top: 20px;">
        	<div class="col-left">
				<h3>Купонная ставка превышает ключевую ставку Банка России на 6%</h3>
				<p>Указанная ставка значительно превышает ставки по вкладам в крупнейших российских банках или по ОФЗ.<sup>1</sup></p>
				<h3>Привязка к ключевой ставке Банка России</h3>
				<p>Формула расчета купонной ставки обеспечивает сохранение ее привлекательности вне зависимости от изменения конъюнктуры рынка и способствует сохранению стабильных цен на вторичном рынке.</p>
				<h3>Льгота по НДФЛ</h3>
				<p>Облигации подпадают под льготное налогообложение. Доход в пределах ключевой ставки ЦБ, увеличенной на 5%, не облагается НДФЛ.</p>
				<h3>Ежемесячная выплата процентов</h3>
				<p>Предусмотрена регулярная выплата купонного дохода: каждые 30 дней – 12 раз в год.</p>				
				<h3>Высокая ликвидность</h3>
				<p>Обращение на Московской Бирже позволяет каждому инвестору в удобный момент приобрести или реализовать облигации по рыночной цене.</p>				
			</div>
			<div class="col-right">								
				<h3>Возможность реинвестирования</h3>
				<p>Реинвестирование купонов (покупка на проценты дополнительных финансовых инструментов) позволит увеличить доходность вложений.</p>
				<h3>Длительный срок обращения</h3>
				<p>Вложения в облигации позволяют обеспечить регулярный высокий уровень дохода на горизонте порядка 10 лет (3600 дней).</p>
				<h3>Максимальная доступность</h3>
				<p>Минимальный лот равен одной облигации номиналом в 1000 руб.</p>
				<h3>Возможность «индивидуальной оферты» </h3>
				<p>Предусмотрена опционная программа, позволяющая инвесторам через покупку Опционов Put получить возможность реализовать ценные бумаги через один, два или три года по усмотрению инвестора.</p>
				<h3>Поддержка маркетмейкера</h3>
				<p>Повышает ликвидность ценных бумаг, обеспечивает устойчивость ценообразования и улучшает возможности совершения сделок купли-продажи по рыночным ценам в рамках вторичного обращения на Московской Бирже.</p>
				<a href="https://pioneer-leasing.ru/investor/?DOC=presentation_3" class="fix_button" data="emis_doc"  target="_blank" style="margin-top: 13px;padding: 17px 31px;width: 205px;">Презентация для инвесторов</a>
			</div>
		</div>
		<div class="clearfix"></div>
        <h1 class="contacts-page-title" style="margin-top: 50px;">Опционная программа от ООО «НФК – СТРУКТУРНЫЕ ИНВЕСТИЦИИ»</h1>
		<div class="row poch_investr" style="margin-top: 20px;">
        	<div class="col-left">				
				<p>В рамках опционной программы любой инвестор в течение срока обращения облигаций может приобрести внебиржевой Опцион Put, дающий право продать по номиналу облигации в выбранный срок. Таким образом, инвестор изначально получает максимальную доходность с учетом длительного обращения облигаций, а опционная программа позволяет, с одной стороны, оптимизировать срок удержания ценных бумаг с учетом индивидуальных потребностей каждого инвестора, а с другой, - дает возможность эмитенту облигаций осуществлять более точное планирование денежных потоков. Инвестор при покупке опциона имеет выбор сроков его исполнения: через 1 год, через 2 года и через 3 года с момента покупки опциона.</p>
			</div>
			<div class="col-right">
				<p>Продавцом внебиржевых опционов является ООО «НФК-СИ». Поручителем по денежным обязательствам выступает ООО «Пионер-Лизинг» (на основании безотзывной публичной оферты).</p>				
				<p>Подать поручение на покупку опциона можно в личном кабинете брокера АО «НФК-Сбережения».</p>
				<a href="https://lk.nfksber.ru/" class="fix_button" data="emis_doc"  target="_blank" style="margin-top: 22px;padding: 17px 31px;width: 205px;">Приобрести опцион</a>
			</div>
		</div>	
		<div class="clearfix"></div>
		<h1 class="contacts-page-title" style="margin-top: 50px;">Заказать консультацию</h1>
		<div class="row">
			<div class="col-left">
				<p style="margin-top: 27px;">Мы готовы ответить на все Ваши вопросы и дать профессиональную консультацию. Пожалуйста, заполните заявку, и мы перезвоним в удобное для Вас время.</p>
			</div>
		</div>
		<div class="clearfix"></div>
		<div class="row form_call">
			<input type="text" placeholder="Ваше Имя" id="konsult_Name">
			<input  type="text" placeholder="Контактный телефон" id="konsult_tel">
			<span data="investoram" id="konsult_send" class="fix_button" style="display: inline-block;width: 162px;height: 16px;cursor: pointer;">Заказать</span>
		</div>		
		<p class="snoska"><sup>1</sup>По данным официального сайта Банка России (https://www.cbr.ru/statistics/pdko/int_rat/) по итогам сентября 2019 года средняя ставка по вкладам со сроком свыше года составила 6,28%, а по данным официального сайта Московской Биржи (https://www.moex.com/ru/index/RGBITR) доходность индекса государственных облигаций RGBITR по состоянию на 20.11.2019 года составила 6,36%.</p>
    </div>
<div class="clearfix"></div>
<!--Вкладка как стать инвестором второй выпуск-->
<div class="content investoram_ii content_tab" style="position: relative; margin-top: 15px;">
	<div class="tabs-header" style="width: 100%;margin-top: 25px;">
		<ul> 	 
			<li class="gradient" data="investoram">Первый выпуск</li>     
			<li class="separator"></li>     
			<li class="active gradient" data="investoram_ii">Второй выпуск</li>     
			<li class="separator"></li>     
			<li class="gradient" data="investoram_iii">Третий выпуск</li>
		</ul>
	</div>
		<img src="<?=SITE_TEMPLATE_PATH?>/images/investors_3_3.png" style="margin-bottom: 25px; display: inline-block; margin-top: 39px; width: 100%;"/>
		<h1 class="contacts-page-title" style="margin-top: 50px;">Итоги размещения второго выпуска биржевых облигаций ООО «Пионер-Лизинг»</h1>
		<div class="row" style="margin-top: 20px;">
			<div class="col-left">
				<p>13 сентября 2019 года «Пионер-Лизинг» завершил размещение второго выпуска биржевых облигаций объемом 300 млн рублей. В настоящее время указанные облигации доступны для совершения сделок на Московской Бирже среди неограниченного круга лиц.</p>
				<p style="margin-top: 18px;">Для всех тех, кто уже приобрел данные облигации или только планирует их покупать, мы подготовили специальную презентацию о результатах привлечения и освоения инвестиций.</p>
			</div>
			<div class="col-right">
				<p>Из нашей презентации Вы узнаете:</p>
				<ul>
					<li>Объем привлеченных и вложенных в лизинг средств.</li>
					<li>Распределение инвестиций по сегментам.</li>
					<li>Данные по динамике показателей ООО «Пионер-Лизинг» после освоения инвестиций, привлеченных благодаря биржевым облигациям.</li>
					<li> Фактические и планируемые выплаты по купонам.</li>						
				</ul>
				<!--<a href="javascript:clearModalFields(); setPlaceholders(); $('#ask-presentation').fadeIn('fast'); void(0);" data="investoram" target="_blank"class="fix_button" style="    margin: 24px 0;
					display: block;
					width: 187px;
					height: 17px;
					padding: 17px 40px;">Скачать презентацию</a> Itogovy_vypusk_Pioner_lizing_szhaty.pdf --> 
				<a href="https://pioneer-leasing.ru/upload/IIVupusk_lite.pdf" target="_blank" class="fix_button metrika metrika_pl_present" style="    margin: 24px 0;
					display: block;
					width: 187px;
					height: 17px;
					padding: 17px 40px;" data="investoram">Скачать презентацию</a>
			</div>
		</div>
		<h1 class="contacts-page-title">Начните инвестировать в доходные инструменты</h1>
        <h2>Биржевые облигации ООО «Пионер-Лизинг» 2-го выпуска (краткое наименование/ISIN-код: ПионЛизБП2/RU000A1006C3)</h2>
        <div class="row" style="margin-top: 20px;">
                <div class="col-left">
                    <p>11 марта 2019 года Московская Биржа присвоила идентификационный номер 2-му выпуску биржевых облигаций ООО «Пионер-Лизинг» объемом 300 млн рублей, размещаемому в рамках Программы биржевых облигаций.</p>
					<p style="margin-top: 25px;">Дата начала размещения выпуска – 15 марта 2019 года.<br>Уровень листинга: 3.</p>
                    <p style="margin-top: 12px;">Срок обращения облигаций – 3600 дней. Номинальная стоимость одной облигации – 1000 рублей. Периодичность выплаты купонов – 12 раз в год (каждые 30 дней). Ставка 1-го купона установлена в размере 14% годовых. Ставки со 2-го по 120-й купоны будут рассчитываться по формуле: ключевая ставка Банка России + 6,25%.</p>                    
                </div>
                <div class="col-right">                    
					<p>Датой окончания размещения Облигаций является наиболее ранняя из следующих дат: а) 360-й день с даты начала размещения Биржевых облигаций (09.03.2020); б) дата размещения последней Биржевой облигации выпуска.</p>
                    <p style="margin-top: 18px;">Идентификационный номер выпуска – 4B02-02-00331-R-001P от 11.03.2019</p>
                    <p style="margin-top: 17px;margin-bottom: 20px;">Идентификационный номер программы – 4-00331-R-001P-02E от 20.04.2018</p>
					<p style="margin-bottom: 15px;">Андеррайтер – АО «НФК-Сбережения» (краткое наименование: ИК НФК-Сбер, код участника торгов – GC0294900000)</p>
					<a href="https://pioneer-leasing.ru/investors/?DOC=%D0%9F%D0%B8%D0%BE%D0%BD%D0%B5%D1%80-%D0%9B%D0%B8%D0%B7%D0%B8%D0%BD%D0%B3%20%D0%BC%D0%B5%D0%BC%D0%BE%D1%80%D0%B0%D0%BD%D0%B4%D1%83%D0%BC%202-%D0%B9%20%D0%B2%D1%8B%D0%BF%D1%83%D1%81%D0%BA%20130319" class="fix_button" data="emis_doc"  target="_blank" style="padding: 17px 31px;width: 205px;">Инвестиционный меморандум</a>
                </div>
        </div>
        <div class="clearfix"></div>
			<h1 class="contacts-page-title" style="margin-top: 50px;">Интервью с учредителем ООО "Пионер-Лизинг" Наумовым Евгением Леонидовичем.</h1>
		<iframe style="margin-left: 19%; margin-top: 50px;" width="560" height="315" src="https://www.youtube.com/embed/vPGkc2ncCiM" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        <div class="clearfix"></div>
        <h1 class="contacts-page-title" style="margin-top: 50px;">Как стать инвестором</h1>
		<div class="row" style="margin-top: 33px;">
			<div class="big_nabers"><span class="big_n">1</span><p>Открыть счет у брокера и внести на него деньги.</p></div>
			<div class="big_nabers"><span class="big_n">2</span><p>Приобрести облигации ООО «Пионер-Лизинг».</p></div>
        	<div class="big_nabers"><span class="big_n">3</span><p>Получать ежемесячный купонный доход по программе.</p></div>
		</div>
		<div class="clearfix"></div>
		<div class="row" style="margin-top: 35px;">
			<div class="col-left">
				<p>Акционерное общество «Инвестиционная компания «НФК-Сбережения» оказывает брокерские услуги на всей территории Российской Федерации как профессионалам, так и начинающим участникам рынка ценных бумаг посредством удаленного заключения договоров. Компания предлагает своим клиентам различные варианты брокерского обслуживания на фондовом рынке – путем передачи заявок на совершение сделок брокеру по телефону или через торговый терминал.</p>
			</div>
			<div class="col-right">
				<p>Если у Вас еще нет брокерского счета, Вы можете открыть счет онлайн прямо сейчас у нашего надежного партнера – АО «НФК-Сбережения», выступающего андеррайтером выпуска биржевых облигаций ООО «Пионер-Лизинг».</p>
				<a href="https://nfksber.ru/open_account/" class="fix_button" style="margin: 24px 0;display: block;width: 162px;height: 17px;">Открыть счет</a>
			</div>
		</div>
		<div class="clearfix"></div>
        <h1 class="contacts-page-title" style="margin-top: 50px;">Почему стоит покупать облигации ООО «Пионер-Лизинг»</h1>
		<div class="row poch_investr" style="margin-top: 20px;">
        	<div class="col-left">
				<h3>Купонная ставка превышает ключевую ставку Банка России на 6,25%</h3>
				<p>Указанная ставка значительно превышает ставки по вкладам в крупнейших российских банках или по ОФЗ.</p>
				<h3>Привязка к ключевой ставке Банка России</h3>
				<p>Формула расчета купонной ставки обеспечивает сохранение ее привлекательности вне зависимости от изменения конъюнктуры рынка и способствует сохранению стабильных цен на вторичном рынке.</p>
				<h3>Льгота по НДФЛ</h3>
				<p>Облигации подпадают под льготное налогообложение. Доход в пределах ключевой ставки ЦБ, увеличенной на 5%, не облагается НДФЛ.</p>
				<h3>Ежемесячная выплата процентов</h3>
				<p>Предусмотрена регулярная выплата купонного дохода: каждые 30 дней – 12 раз в год.</p>
				<h3>Максимальная доступность</h3>
				<p>Минимальный лот равен одной облигации номиналом в 1000 руб.</p>
			</div>
			<div class="col-right">				
				<h3>Возможность реинвестирования</h3>
				<p>Реинвестирование купонов (покупка на проценты дополнительных финансовых инструментов) позволит увеличить доходность вложений.</p>
				<h3>Высокая ликвидность</h3>
				<p>Обращение на Московской Бирже позволяет каждому инвестору в удобный момент приобрести или реализовать облигации по рыночной цене.</p>
				<h3>Длительный срок обращения</h3>
				<p>Вложения в облигации позволяют обеспечить регулярный высокий уровень дохода на горизонте порядка 10 лет (3600 дней).</p>
				<h3>Возможность «индивидуальной оферты» </h3>
				<p>Предусмотрена опционная программа, позволяющая инвесторам через покупку опционов пут получить возможность реализовать ценные бумаги через один, два или три года по усмотрению инвестора.</p>
				<a href="https://pioneer-leasing.ru//investor/docs/Presentation%202%20issue.pdf" class="fix_button" data="emis_doc"  target="_blank" style="margin-top: 13px;padding: 17px 31px;width: 205px;">Презентация для инвесторов</a>
			</div>
		</div>
		<div class="clearfix"></div>
        <h1 class="contacts-page-title" style="margin-top: 50px;">Опционная программа от ООО «НФК – СТРУКТУРНЫЕ ИНВЕСТИЦИИ»</h1>
		<div class="row poch_investr" style="margin-top: 20px;">
        	<div class="col-left">				
				<p>В рамках опционной программы любой инвестор в течение срока обращения облигаций может приобрести внебиржевой Опцион Put, дающий право продать по номиналу облигации в выбранный срок. Таким образом, инвестор изначально получает максимальную доходность с учетом длительного обращения облигаций, а опционная программа позволяет, с одной стороны, оптимизировать срок удержания  ценных бумаг с учетом индивидуальных потребностей каждого инвестора, а с другой, - дает возможность эмитенту облигаций осуществлять более точное планирование денежных потоков. Инвестор при покупке опциона имеет выбор сроков его исполнения: через 1 год, через 2 года и через 3 года с момента покупки опциона.</p>
			</div>
			<div class="col-right">
				<p>Продавцом внебиржевых опционов является ООО «НФК-СИ». Поручителем по денежным обязательствам выступает ООО «Пионер-Лизинг» (на основании безотзывной публичной оферты). </p>				
				<p>Подать поручение на покупку опциона можно в личном кабинете брокера АО «НФК-Сбережения» или через интернет-сервис «Магазин финансовых продуктов».</p>
				<a href="https://shop.nfksber.ru" class="fix_button" data="emis_doc"  target="_blank" style="margin-top: 22px;padding: 17px 31px;width: 205px;">Приобрести опцион</a>
			</div>
		</div>	
		<div class="clearfix"></div>
		<h1 class="contacts-page-title" style="margin-top: 50px;">Заказать консультацию</h1>
		<div class="row">
			<div class="col-left">
				<p style="margin-top: 27px;">Мы готовы ответить на все Ваши вопросы и дать профессиональную консультацию. Пожалуйста, заполните заявку, и мы перезвоним в удобное для Вас время.</p>
			</div>
		</div>
		<div class="clearfix"></div>
		<div class="row form_call">
			<input type="text" placeholder="Ваше Имя" id="konsult_Name">
			<input  type="text" placeholder="Контактный телефон" id="konsult_tel">
			<span data="investoram" id="konsult_send" class="fix_button" style="display: inline-block;width: 162px;height: 16px;cursor: pointer;">Заказать</span>
		</div>		
    </div>
<div class="clearfix"></div>
<!--Вкладка как стать инвестором первый выпуск-->
<div class="content investoram content_tab" style="position: relative; margin-top: 15px;">
	<div class="tabs-header" style="width: 100%;margin-top: 25px;">
		<ul> 	 
			<li class="active gradient" data="investoram">Первый выпуск</li>     
			<li class="separator"></li>     
			<li class="gradient" data="investoram_ii">Второй выпуск</li>     
			<li class="separator"></li>     
			<li class="gradient" data="investoram_iii">Третий выпуск</li>
		</ul>
	</div>	
	<img src="<?=SITE_TEMPLATE_PATH?>/images/instrukt_inv.png" style="margin-bottom: 25px; display: inline-block; margin-top: 39px;"/>
	<div>
		<div id="ask-presentation" class="ask-question blackmask-container" style="display: none;">
		<div class="blackmask" onclick="$(this).parents('.blackmask-container').fadeOut('fast');"></div>
		<div class="ask-question-block">
			<a href="javascript:$('#ask-presentation').fadeOut('fast'); void(0);" class="fixed-button-close"></a>
			<div class="ask-question-header">
			</div>
			<div class="ask-question-fields">
				<div class="ask-question-field">
					<p>Введите адрес электронной почты на который выслать презентацию</p>
				</div>
				<div class="ask-question-field">
					<input type="text" id="ask-question-email" data-validate="email" placeholder="Ваш e-mail *">
				</div>
				<div class="send-subscribe-field" style="color:#999;">
					Нажимая на кнопку я даю <a href="#">согласие</a> на обработку персональных данных и согласие на коммуникацию
				</div>
				<div class="ask-question-submit" style="padding-top:20px;">
					<a class="button-green" href="javascript:ask_presentation(); void(0);">Отправить</a>
				</div>
			</div>
		</div>
	</div>
	<div class="clearfix"></div>
		<h1 class="contacts-page-title" style="margin-top: 50px;">Итоги размещения дебютного выпуска биржевых облигаций ООО «Пионер-Лизинг»</h1>
		<div class="row" style="margin-top: 20px;">
			<div class="col-left">
				<p>3 декабря 2018 года «Пионер-Лизинг» завершил размещение дебютного выпуска 5-летних биржевых облигаций объемом 100 млн рублей. В настоящее время указанные облигации доступны для совершения сделок на Московской Бирже среди неограниченного круга лиц.</p>
				<p style="margin-top: 18px;">Для всех тех, кто уже приобрел данные облигации или только планирует их покупать, мы подготовили специальную презентацию о результатах привлечения и освоения инвестиций от 1-го выпуска.</p>
			</div>
			<div class="col-right">
				<p>Из нашей презентации Вы узнаете:</p>
				<ul>
					<li>Объем привлеченных и вложенных в лизинг средств.</li>
					<li>Распределение инвестиций по сегментам.</li>
					<li>Список лизингового имущества, профинансированного за счет облигационного выпуска.</li>
					<li>Финансовые показатели ООО «Пионер-Лизинг» после освоения инвестиций, привлеченных благодаря биржевым облигациям.</li>
					<li>Фактические и планируемые выплаты по купонам.</li>
					<li>Предварительные условия 2-го выпуска биржевых облигаций.</li>
				</ul>
				<!--<a href="javascript:clearModalFields(); setPlaceholders(); $('#ask-presentation').fadeIn('fast'); void(0);" data="investoram" target="_blank"class="fix_button" style="    margin: 24px 0;
					display: block;
					width: 187px;
					height: 17px;
					padding: 17px 40px;">Скачать презентацию</a> Itogovy_vypusk_Pioner_lizing_szhaty.pdf --> 
				<a href="https://pioneer-leasing.ru/upload/Itogovy_vypusk_Pioner_lizing-szhaty.pdf" target="_blank" class="fix_button metrika metrika_pl_present" style="    margin: 24px 0;
					display: block;
					width: 187px;
					height: 17px;
					padding: 17px 40px;" data="investoram">Скачать презентацию</a>


			</div>
		</div>
	</div>
	<h1 class="contacts-page-title" style="margin-top: 50px;">Начните инвестировать в доходные инструменты</h1>
	<h2>Биржевые облигации ООО «Пионер-Лизинг» (краткое наименование/ISIN-код: ПионЛизБП1/RU000A0ZZAT8)</h2>
	<div class="row" style="margin-top: 20px;">
			<div class="col-left">
				<p>20 апреля 2018 года Московская Биржа присвоила идентификационный номер программе биржевых облигаций ООО «Пионер-Лизинг» на 10 млрд рублей. В рамках данной программы 31 мая 2018 года был зарегистрирован дебютный выпуск на 100 млн рублей со сроком обращения 5 лет.</p>
				<p style="margin-top: 39px;">Номинальная стоимость одной облигации равна 1000 рублей. Ставка 1-12 купонов, регулярных процентных выплат по облигациям, установлена на уровне 12,25% годовых. Периодичность выплаты купона – 12 раз в год (ежемесячно). К данному доходу применяется льгота по налогу на доходы физических лиц (НДФЛ), как и к доходам по банковским депозитам.</p>
				<p style="margin-top: 20px;">Дата начала размещения выпуска – 26 июня 2018 года. </p>
			</div>
			<div class="col-right">
				<p>Дата окончания размещения - Датой окончания размещения Облигаций является наиболее ранняя из следующих дат: а) 350-й день с даты начала размещения Биржевых облигаций (11.06.2019); б) дата размещения последней Биржевой облигации выпуска.</p>
				<p style="margin-top: 18px;">Идентификационный номер программы – 4-00331-R-001P-02E от 20.04.2018.</p>
				<p style="margin-top: 17px;margin-bottom: 10px;">Идентификационный номер выпуска – 4B02-01-00331-R-001P от 31.05.2018.</p>
				<p style="margin-bottom: 15px;">Андеррайтер – АО «НФК-Сбережения» (краткое наименование:<br> ИК НФК-Сбер, код участника торгов – GC0294900000)</p>
				<a href="https://pioneer-leasing.ru/investor/docs/%D0%9F%D0%B8%D0%BE%D0%BD%D0%B5%D1%80-%D0%9B%D0%B8%D0%B7%D0%B8%D0%BD%D0%B3%20%D0%B8%D0%BD%D0%B2%D0%B5%D1%81%D1%82%D0%B8%D1%86%D0%B8%D0%BE%D0%BD%D0%BD%D1%8B%D0%B9%20%D0%BC%D0%B5%D0%BC%D0%BE%D1%80%D0%B0%D0%BD%D0%B4%D1%83%D0%BC.pdf" class="fix_button" data="emis_doc"  target="_blank" style="padding: 17px 31px;width: 205px;">Инвестиционный меморандум</a>
			</div>
	</div>
	<div class="clearfix"></div>
	<h1 class="contacts-page-title" style="margin-top: 50px;">Как стать инвестором</h1>
	<div class="row" style="margin-top: 33px;">
		<div class="big_nabers"><span class="big_n">1</span><p>Открыть счет у брокера и внести на него деньги.</p></div>
		<div class="big_nabers"><span class="big_n">2</span><p>Приобрести облигации ООО «Пионер-Лизинг».</p></div>
		<div class="big_nabers"><span class="big_n">3</span><p>Получать ежемесячный купонный доход по программе.</p></div>
	</div>
	<div class="clearfix"></div>
	<div class="row" style="margin-top: 35px;">
		<div class="col-left">
			<p>Акционерное общество «Инвестиционная компания «НФК-Сбережения» оказывает брокерские услуги на всей территории Российской Федерации как профессионалам, так и начинающим участникам рынка ценных бумаг посредством удаленного заключения договоров. Компания предлагает своим клиентам различные варианты брокерского обслуживания на фондовом рынке – путем передачи заявок на совершение сделок брокеру по телефону или через торговый терминал.</p>
		</div>
		<div class="col-right">
			<p>Если у Вас еще нет брокерского счета, Вы можете открыть счет онлайн прямо сейчас у нашего надежного партнера – АО «НФК-Сбережения», выступающего андеррайтером выпуска биржевых облигаций ООО «Пионер-Лизинг».</p>
			<a href="https://nfksber.ru/open_account/" class="fix_button metrika metrika_pl_opsheet" style="margin: 24px 0;display: block;width: 162px;height: 17px;">Открыть счет</a>
		</div>
	</div>
	<div class="clearfix"></div>
	<h1 class="contacts-page-title" style="margin-top: 50px;">Почему стоит покупать облигации ООО «Пионер-Лизинг»</h1>
	<div class="row poch_investr" style="margin-top: 20px;">
		<div class="col-left">
			<h3>Высокая ликвидность</h3>
			<p>Обращение на Московской Бирже позволяет каждому инвестору в удобный момент приобрести или реализовать облигации по рыночной цене.</p>
			<h3>Возможность реинвестирования</h3>
			<p>Реинвестирование купонов (покупка на проценты дополнительных финансовых инструментов) позволит увеличить доходность Ваших вложений.</p>
			<h3>Защита капитала</h3>
			<p>Облигации застрахованы от снижения цены за счет возможности их продажи эмитенту по номиналу с сохранением накопленного купонного дохода.</p>
			<h3>Льгота по НДФЛ</h3>
			<p>Купоны в пределах ключевой ставки ЦБ, увеличенной на 5%, по закону, так же, как и проценты по банковским депозитам, освобождаются от НДФЛ.</p>
		</div>
		<div class="col-right">
			<h3>Купонная ставка 12,25% годовых</h3>
			<p>Доходность наших облигаций в разы превышает ставки по вкладам в крупнейших российских банках или по ОФЗ.</p>
			<h3>Максимальная доступность</h3>
			<p>Номинал одной облигации составляет всего 1000 рублей – минимальный лот может купить любой инвестор.</p>
			<h3>Дополнительный доход</h3>
			<p>Вы можете получить дополнительный доход от роста цены облигации на биржевом рынке.</p>
			<h3>Ежемесячная выплата процентов</h3>
			<p>Вы получаете купонный доход по облигациям регулярно, каждые 30 дней – 12 раз в год.</p>

			<a href="https://nfksber.ru/userfiles/present_pioneer_leasing.pdf" data="investoram" target="_blank"class="fix_button" style="    margin: 24px 0;
				display: block;
				width: 187px;
				height: 17px;
				padding: 17px 40px;">Презентация для инвесторов</a>
		</div>
	</div>
	<div class="clearfix"></div>
	<h1 class="contacts-page-title" style="margin-top: 50px;">Покупка облигаций ООО «Пионер-Лизинг» <br><span style="font-size: 20px;">ставка купонного дохода 12,25%</span></h1>
	<div class="row">
		<div class="container calculaytor">
			<h3>Инвестиции: </h3>
				<div class="form-group">
					<label id="change_val_lab" for="change_val_lab">1000000</label> руб. (количество облигаций: <span id="change_val_lab_kol">1000</span> шт.)
					<div class="clearfix"></div>
					<div id="minus_inv" class="polz_button minus" ></div>
					<input id="change_val" class="metrika metrika_pl_polzunok" type="range" min="1000" max="10000000" step="1000" value="1000000"  style="width:94%;border:none;outline-width: 0;float:left;"> 
					<div id="plus_inv" class="polz_button plus" ></div>
				</div>
			<div class="col-left data">
				<h3>Расчет купонного дохода:</h3>
				<h3 style="width: 47%; float: left;" class="left_h">Дата покупки:</h3><h3>Дата продажи:</h3>
				<input type="text" class="form-control left_input" id="startDate" value="<?=date("d.m.Y")?>" style=""/>
							<input type="text" class="form-control right_input" id="endDate" value="<?php 
								$date = date_create(date("d.m.Y"));
								date_modify($date, '+12 month');
								echo date_format($date, 'd.m.Y');?>"  />
				<!--Уведомление о неправильной дате-->
				<div id="alert_data">
					<div class="alert alert-danger" role="alert">
						Вы ввели дату покупки облигаций позднее даты продажи, пожалуйста исправьте! 
					</div>
				</div>
				<div class="alert alert-success" role="alert">
					<div class="form-check">
						<input type="checkbox" class="form-check-input" id="reinvest_dohod">
						<label class="form-check-label" for="exampleCheck1">Реинвестировать купонный доход <span id="labelcheck"></span></label>
					</div>                    
				</div>
				<div class="alert alert-primary" role="alert">
					<h5>Расчет купонного дохода: <span id="kup_dohod">0.00</span> руб.</h5>
				</div>

				<!---->
			</div>
			<div class="col-right">
				<h3>Расчет дохода от продажи облигаций:</h3>
				<h3 style="width: 47%; float: left;" class="left_h">Цена покупки:</h3><h3>Цена продажи:</h3>
				<input type="text" class="form-control left_input" id="start_sale" value="1000">
				<input type="text" class="form-control right_input" id="end_sale" value="1000">
				<div class="alert alert-primary" role="alert">
					<h5>Доход от продажи облигаций: <span id="dohod_sale">0.00</span> руб.</h5>
					<h5>НДФЛ<sup>1</sup>, возникающий при продаже облигаций : <span id="ndfl">0.00</span> руб.</h5>
				</div>
				<div class="alert alert-primary" role="alert">
					<h5>Общий доход: <span id="dohod_ob">0.00</span> руб.</h5>
				</div>
			<!---->
			</div>
		</div>
	</div>
	<div class="clearfix"></div>
	<h1 class="contacts-page-title" style="margin-top: 50px;">Заказать консультацию</h1>
	<div class="row">
		<div class="col-left">
			<p style="margin-top: 27px;">Мы готовы ответить на все Ваши вопросы и дать профессиональную консультацию. Пожалуйста, заполните заявку, и мы перезвоним в удобное для Вас время.</p>
		</div>
	</div>
	<div class="clearfix"></div>
	<div class="row form_call">
		<input type="text" placeholder="Ваше Имя" id="konsult_Name">
		<input  type="text" placeholder="Контактный телефон" id="konsult_tel">
		<span data="investoram" id="konsult_send" class="fix_button metrika metrika_pl_konsult" style="display: inline-block;width: 162px;height: 16px;cursor: pointer;">Заказать</span>
	</div>
		<p class="snoska"><sup>1</sup>Доход по купонному доходу освобождается от НДФЛ согласно Налоговому Кодексу ст. 214.2 п.1, однако доход от полученной разницы между покупной стоимостью облигации и стоимостью продажи подлежит налогообложению по ставке 13%</p>		
</div>
<div class="clearfix"></div>
<!--Вкладка о компании-->
	<? include "kompany.php" ;?>
<!--Вкладка новости-->
<? include "news.php" ;?>
<!--Список бухгалтерских документов-->
<? include "buh_doc.php" ;?>
<!--Список уставных документов-->
<? include "ustav_doc.php"; ?>
<!--Список эмиссионых документов-->
<? include "emis_doc.php"; ?>
<!--Раскрытие информации-->
<div class="content raskr_info content_tab" style="position: relative; margin-top: 15px;margin-bottom: 68px;">
<h1 style="padding: 25px 0 40px 0;">Раскрытие информации</h1>
	<p>Официальная страница "ООО "Пионер-Лизинг" с раскрытием информации доступна по ссылке:</p>
	<a href="https://disclosure.skrin.ru/disclosure/2128702350" target="_blank"><img src="<?=SITE_TEMPLATE_PATH?>/images/clicker.png" alt="раскрытие информации"/> https://disclosure.skrin.ru/disclosure/2128702350</a>
</div>
<script src="<?=SITE_TEMPLATE_PATH?>/js/script.js"></script>
    <? }
require_once $_SERVER['DOCUMENT_ROOT'].'/bitrix/footer.php';