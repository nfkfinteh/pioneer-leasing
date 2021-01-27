<?
if(!defined("B_PROLOG_INCLUDED")||B_PROLOG_INCLUDED!==true)die();
/**
 * Bitrix vars
 *
 * @var array $arParams
 * @var array $arResult
 * @var CBitrixComponentTemplate $this
 * @global CMain $APPLICATION
 * @global CUser $USER
 */
?>
<form action="<?=POST_FORM_ACTION_URI?>" method="POST">
	<?=bitrix_sessid_post()?>
	<input type="hidden" name="PARAMS_HASH" value="<?=$arResult["PARAMS_HASH"]?>">
	<input type="hidden" name="MESSAGE" value="Форма с картой на главной">
	<input type="text" name="fax" style="display:none;">
	<div class="input input_color_gray input_w-175 map-contacts__input">
		<input class="input__input" name="user_name" id="map-contacts-fio" type="text">
		<label class="input__label" for="map-contacts-fio"><?=GetMessage("MFT_NAME")?><?if(empty($arParams["REQUIRED_FIELDS"]) || in_array("NAME", $arParams["REQUIRED_FIELDS"])):?> <span class="mf-req">*</span><?endif?></label>
	</div>
	<div class="input input_color_gray map-contacts__input">
		<input class="input__input" name="user_phone" id="map-contacts-phone" type="text">
		<label class="input__label" for="map-contacts-phone"><?=GetMessage("MFT_PHONE")?><?if(empty($arParams["REQUIRED_FIELDS"]) || in_array("PHONE", $arParams["REQUIRED_FIELDS"])):?> <span class="mf-req">*</span><?endif?></label>
	</div>
	<div class="checkbox map-contacts__checkbox">
		<input class="checkbox__input" type="checkbox" value="" name="map-contacts-check" id="map-contacts-check" checked>
		<label class="checkbox__label" for="map-contacts-check">Даю согласие на <a class="doted-link" href="#" target="_blank">обработку персональных данных</a></label>
	</div>
	<button class="btn btn-main btn-255 map-contacts__button" name="submit" id="map-contacts__button" type="submit" value="<?=GetMessage("MFT_SUBMIT")?>"><?=GetMessage("MFT_SUBMIT")?></button>
	<div class="mfeedback mfeedback-dark">
		<?if(!empty($arResult["ERROR_MESSAGE"]))
		{
			foreach($arResult["ERROR_MESSAGE"] as $v)
				ShowError($v);
		}
		if(strlen($arResult["OK_MESSAGE"]) > 0)
		{
			?><div class="mf-ok-text"><?=$arResult["OK_MESSAGE"]?></div><?
		}
		?>
	</div>
</form>
<script>
	$(document).ready(function () {
			$('.input__input').on("change", function (ev) {
				if ($(this).val())
						$(this).addClass('input__input_fill');
				else
						$(this).removeClass('input__input_fill');
			});

			$('.input__input, .input-date__input').each(function () {
				const labelWidth = $(this).next('label').prop('clientWidth');
				$(this).css({'--labelWidth': labelWidth+30+'px'});
			})

			var checker = document.getElementById('map-contacts-check');
			var sendbtn = document.getElementById('map-contacts__button');
			checker.onchange = function() {
			sendbtn.disabled = !this.checked;
			};
	});
</script>