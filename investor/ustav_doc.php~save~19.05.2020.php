<?
$array_buh_doc = array(
	'Свидетельство о постановке на учет в налоговом органе.pdf' => 'Свидетельство о постановке на учет в налоговом органе',
	'Выписка из протокола_назначение ЕИО.pdf' => 'Выписка из протокола_назначение ЕИО',
	'Протокол собрания участников № 3 от 22 июня 2017 г. о размещении коммерческих облигаций.pdf' => 'Протокол собрания участников № 3 от 22 июня 2017 г. о размещении коммерческих облигаций',
	'Протокол собрания участников № 4 от 23  июня 2017 г. об утверждении решения о выпуске коммерческих облигаций.pdf' => 'Протокол собрания участников № 4 от 23  июня 2017 г. об утверждении решения о выпуске коммерческих облигаций',
	'ustav_08.04.2019.pdf' => 'Устав ООО "Пионер-Лизинг" 2019 г.',
	'Банковские реквизиты расчетного счета эмитента для оплаты копий.pdf' => 'Реквизиты банковского счета и порядок расчета стоимости изготовления копий документов',
	'Список участников на 22.05.2018.pdf' => 'Список участников на 22.05.2018',
	'Перечень инсайдерской информации ООО Пионер-Лизинг.pdf' => 'Перечень инсайдерской информации  ООО «Пионер-Лизинг»'
);
?>

<div class="content ust_doc content_tab" style="position: relative; margin-top: 15px;">
	<h1 style="    padding: 25px 0 40px 0;">Уставные и внутренние документы</h1>
	<div class="list_doc"> 
		<div class="line_list">
			<? foreach ($array_buh_doc as $key => $item){?>
			<div class="item_doc">
				<a href="/investors/?DOC=<?=$key?>">
					<div class="img_doc"></div>
					<div class="title_doc"><?=$item?></div>
				</a>
			</div>
			<?}?>
		</div>
	</div>
</div>