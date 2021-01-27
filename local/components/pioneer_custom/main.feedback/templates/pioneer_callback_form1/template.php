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
	<input type="hidden" name="MESSAGE" value="Есть вопросы? На главной">
	<div class="row">
		<div class="col-12 col-md-6 col-xl-8 offset-md-6 offset-xl-4">
			<div class="question-block__title">Есть вопросы?</div>
			<p class="question-block__description">Мы готовы ответить на все Ваши вопросы и дать профессиональную консультацию. Пожалуйста, заполните заявку, и мы свяжемся с Вами в ближайшее время.</p>
		</div>
		<div class="col-12 col-md-6 col-xl-4 offset-md-6 offset-xl-4 offset-xxl-4 col-xxl-3">
			<div class="input input_w-175">
					<input class="input__input" name="user_name" id="fio1" type="text">
					<label class="input__label" for="fio1"><?=GetMessage("MFT_NAME")?><?if(empty($arParams["REQUIRED_FIELDS"]) || in_array("NAME", $arParams["REQUIRED_FIELDS"])):?> <span class="mf-req">*</span><?endif?></label>
			</div>
		</div>
		<div class="col-12 col-md-6 col-xl-4 col-xxl-2 col-xxxl-3 offset-md-6 offset-xl-0 mt-3 mt-xl-0">
			<div class="input">
					<input class="input__input" name="user_phone" id="phone1" type="text">
					<label class="input__label" for="phone1"><?=GetMessage("MFT_PHONE")?><?if(empty($arParams["REQUIRED_FIELDS"]) || in_array("PHONE", $arParams["REQUIRED_FIELDS"])):?> <span class="mf-req">*</span><?endif?></label>
			</div>
		</div>
		<div class="col-12 col-md-6 col-xl-4 col-xxl-3 col-xxxl-2 offset-md-6 offset-xl-4 offset-xxl-0 mt-3 mt-xxl-0">
			<button class="btn btn-main w-100" name="submit" type="submit" value="<?=GetMessage("MFT_SUBMIT")?>"><?=GetMessage("MFT_SUBMIT")?></button>
			<div class="mfeedback">
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
		</div>
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
			});
	});
</script>