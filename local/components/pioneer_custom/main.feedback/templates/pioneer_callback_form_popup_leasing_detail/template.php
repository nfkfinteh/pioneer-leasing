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
$pageTitle = $GLOBALS['APPLICATION']->GetTitle();
?>

<div class="leasing-app">
		<div class="leasing-app__left d-none d-md-block">
			<img class="leasing-app__img" src="<?=SITE_TEMPLATE_PATH?>/img/leasingApp.png" srcset="<?=SITE_TEMPLATE_PATH?>/img/leasingApp@2x.png 2x" width="350" height="580" alt="Заявка на лизинг">
		</div>
		<div class="leasing-app__right">
			<h5 class="modal-title leasing-app__title" id="leasingAppModalLongTitleDetail">Заявка на лизинг</h5>
			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">&times;</span>
			</button>
			<form action="<?=POST_FORM_ACTION_URI?>" method="POST" id="form_popup">
				<?=bitrix_sessid_post()?>
				<input type="hidden" name="PARAMS_HASH" value="<?=$arResult["PARAMS_HASH"]?>">
				<input type="hidden" name="MESSAGE" value="Заявка на <?= $pageTitle ?>">
				<input type="text" name="fax" style="display:none;">
				<div class="input input_color_gray input_w-175 leasing-app__input">
						<input class="input__input" name="user_name" id="leasing-app-fio" type="text">
						<label class="input__label" for="leasing-app-fio"><?=GetMessage("MFT_NAME")?><?if(empty($arParams["REQUIRED_FIELDS"]) || in_array("NAME", $arParams["REQUIRED_FIELDS"])):?> <span class="mf-req">*</span><?endif?></label>
				</div>
				<div class="input input_color_gray leasing-app__input">
						<input class="input__input" name="user_phone" id="leasing-app-phone" type="text">
						<label class="input__label" for="leasing-app-phone"><?=GetMessage("MFT_PHONE")?><?if(empty($arParams["REQUIRED_FIELDS"]) || in_array("PHONE", $arParams["REQUIRED_FIELDS"])):?> <span class="mf-req">*</span><?endif?></label>
				</div>
				<div class="input input_color_gray input_w-145 leasing-app__input">
						<input class="input__input" name="user_email" id="leasing-app-email" type="email">
						<label class="input__label" for="leasing-app-email"><?=GetMessage("MFT_EMAIL_POPUP")?></label>
				</div>
				<div class="input input_color_gray input_w-145 leasing-app__input">
						<textarea class="input__input" name="TEXT" id="leasing-app-text" type="text"></textarea>
						<label class="input__label" for="leasing-app-text"><?=GetMessage("MFT_TEXT_POPUP")?></label>
				</div>
				<div class="checkbox checkbox-16 leasing-app__checkbox">
						<input class="checkbox__input" type="checkbox" value="" name="leasing-app-check" id="leasing-app-check" checked>
						<label class="checkbox__label" for="leasing-app-check">
							Даю согласие на <a class="doted-link" href="/investor/docs/Политика конфиденциальности.pdf" target="_blank">обработку персональных данных</a>
						</label>
				</div>
				<button class="btn btn-main w-100 leasing-app__button" id="leasing-app__button" type="submit" name="submit" value="<?=GetMessage("MFT_SUBMIT_POPUP")?>"><?=GetMessage("MFT_SUBMIT_POPUP")?></button>
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

			var checker = document.getElementById('leasing-app-check');
			var sendbtn = document.getElementById('leasing-app__button');
			checker.onchange = function() {
			sendbtn.disabled = !this.checked;
			};
	});
</script>