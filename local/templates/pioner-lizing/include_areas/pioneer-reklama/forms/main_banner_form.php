<form method="post" action="/scripts/forms_actions.php" class="js-reklama-form">
	<div class='js-message-form'></div>
	<?=bitrix_sessid_post();?>
	<input type="hidden"
	   name="method"
	   value="add-CallMe">
	<input type="text" name="fax" style="display:none;">
	<input class="input-text" type="text" name="CONTACTS" placeholder="Введите ваши контакты">
	<input class="button" type="submit" value="Получить">
</form>