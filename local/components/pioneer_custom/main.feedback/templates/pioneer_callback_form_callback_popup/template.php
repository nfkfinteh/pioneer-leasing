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
<div class="leasing-app leasing-app_callback">
			<h5 class="modal-title leasing-app__title" id="leasingAppModalLongTitle">Заказать звонок</h5>
			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">&times;</span>
			</button>
			<form action="<?=POST_FORM_ACTION_URI?>" method="POST" id="form_popup_callback">
				<?=bitrix_sessid_post()?>
				<input type="hidden" name="PARAMS_HASH" value="<?=$arResult["PARAMS_HASH"]?>">
				<input type="hidden" name="MESSAGE" value="Форма заказа звонка">
				<input type="hidden" name="SUBJECT" value="Заявка на звонок с сайта Пионер-Лизинг">
				<input type="text" name="fax" style="display:none;">
				<div class="input input_color_gray input_w-175 leasing-app__input">
						<input class="input__input" name="user_name" id="leasing-app-fio_callback" type="text">
						<label class="input__label" for="leasing-app-fio_callback"><?=GetMessage("MFT_NAME")?><?if(empty($arParams["REQUIRED_FIELDS"]) || in_array("NAME", $arParams["REQUIRED_FIELDS"])):?> <span class="mf-req">*</span><?endif?></label>
				</div>
				<div class="input input_color_gray leasing-app__input">
						<input class="input__input" name="user_phone" id="leasing-app-phone_callback" type="text">
						<label class="input__label" for="leasing-app-phone_callback"><?=GetMessage("MFT_PHONE")?><?if(empty($arParams["REQUIRED_FIELDS"]) || in_array("PHONE", $arParams["REQUIRED_FIELDS"])):?> <span class="mf-req">*</span><?endif?></label>
				</div>
				<div class="input input_color_gray input_w-175 leasing-app__input">
						<input class="input__input" name="TIME" id="leasing-app-time_callback" type="text">
						<label class="input__label" for="leasing-app-time_callback"><?=GetMessage("MFT_TIME")?><?if(empty($arParams["REQUIRED_FIELDS"]) || in_array("TIME", $arParams["REQUIRED_FIELDS"])):?> <span class="mf-req">*</span><?endif?></label>
				</div>
				<div class="checkbox checkbox-16 leasing-app__checkbox">
						<input class="checkbox__input" type="checkbox" value="" name="leasing-app-check" id="leasing-app-check1" checked>
						<label class="checkbox__label" for="leasing-app-check1">
							Даю согласие на <a class="doted-link" href="/investor/docs/Политика конфиденциальности.pdf" target="_blank">обработку персональных данных</a>
						</label>
				</div>
				<button class="btn btn-main w-100 leasing-app__button" id="leasing-app__button1" type="submit" name="submit" value="<?=GetMessage("MFT_SUBMIT_POPUP_CALLBACK")?>"><?=GetMessage("MFT_SUBMIT_POPUP_CALLBACK")?></button>
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
</div>
<script>
	$(document).ready(function () {
			$('.modal').on('shown.bs.modal', function (e) {
				$(this).find('.input__input').each(function () {
					const labelWidth = $(this).next('label').prop('clientWidth');
					$(this).css({'--labelWidth': labelWidth+30+'px'});
					if ($(this).val())
							$(this).addClass('input__input_fill');
					else
							$(this).removeClass('input__input_fill');
				});
			});
			$('.input__input').on("change", function (ev) {
				if ($(this).val())
						$(this).addClass('input__input_fill');
				else
						$(this).removeClass('input__input_fill');
			});
			$('.input__input, .input-date__input').each(function () {
				const labelWidth = $(this).next('label').prop('clientWidth');
				$(this).css({'--labelWidth': labelWidth+30+'px'});
			});

			var checker = document.getElementById('leasing-app-check1');
			var sendbtn = document.getElementById('leasing-app__button1');
			checker.onchange = function() {
			sendbtn.disabled = !this.checked;
			};
	});
</script>