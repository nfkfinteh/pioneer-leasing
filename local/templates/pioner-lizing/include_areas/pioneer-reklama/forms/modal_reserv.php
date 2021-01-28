<form method="post" action="/scripts/forms_actions.php" class="js-reklama-form">
	<div class='js-message-form'></div>
	<?=bitrix_sessid_post();?>
	<input type="hidden"
	   name="method"
	   value="add-Request">
	<input type="text" name="fax" style="display:none;">
    <input name="NAME" type="text" placeholder="Ваше имя">
    <input name="EMAIL" class="email" type="text" placeholder="Ваша электронная почта">
    <input name="PHONE" class="inptel" type="text" placeholder="Ваш номер телефона">
    <input name="ADDRESS" type="text" placeholder="Адрес щита">
    <input type="submit" value="Отправить" class="button">
</form>