<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Рассылка");
?>

<?php
//Подписка
if (isset($_GET["confirmCode"]))
{
	if (!empty($_GET["confirmCode"]))
	{
		$p = mysql_pconnect($DB->DBHost, $DB->DBLogin, $DB->DBPassword);
		mysql_select_db($DB->DBName);
		
		$q = mysql_query("SELECT * FROM b_subscription WHERE (CONFIRM_CODE ='".mysql_escape_string($_GET["confirmCode"])."') LIMIT 1");
		if ($q)
		{
			if (mysql_num_rows($q) > 0)
			{
				$data = mysql_fetch_assoc($q);
				$q = mysql_query("UPDATE 
					b_subscription
				SET 
					CONFIRMED = 'Y' 
				WHERE 
					(ID = ".($data['ID']*1).")");
				if ($q)
				{
					print('Вы успешно подписались на рассылку.');
				} else {
					print('Ошибка при подключении к базе данных');
				};
			} else {
				print('Код подтверждения не найден');
			};
		} else {
			print('Ошибка при подключении к базе данных');
		};
		
	};
}

if (isset($_GET["unConfirmCode"]))
{
	if (!empty($_GET["unConfirmCode"]))
	{
		$p = mysql_pconnect($DB->DBHost, $DB->DBLogin, $DB->DBPassword);
		mysql_select_db($DB->DBName);
		
		$q = mysql_query("SELECT * FROM b_subscription WHERE (CONFIRM_CODE ='".mysql_escape_string($_GET["unConfirmCode"])."') LIMIT 1");
		if ($q)
		{
			if (mysql_num_rows($q) > 0)
			{
				$data = mysql_fetch_assoc($q);
				$q = mysql_query("UPDATE 
					b_subscription
				SET 
					CONFIRMED = 'N' 
				WHERE 
					(ID = ".($data['ID']*1).")");
				if ($q)
				{
					print('Вы успешно отписались от рассылки.');
				} else {
					print('Ошибка при подключении к базе данных');
				};
			} else {
				print('Код подтверждения не найден');
			};
		} else {
			print('Ошибка при подключении к базе данных');
		};
		
	};
}
?> 


<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>