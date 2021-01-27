<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<div class="row mt-5">
	<div class="col-12 col-xxl-10">
		<form name="<?echo $arResult["FILTER_NAME"]."_form"?>" action="<?echo $arResult["FORM_ACTION"]?>" method="get">
			<div class="row">
				<?foreach($arResult["ITEMS"] as $arItem):
					if(array_key_exists("HIDDEN", $arItem)):
						echo $arItem["INPUT"];
					endif;
			endforeach;?>
			<?foreach($arResult["ITEMS"] as $arItem):?>
					<?if(!array_key_exists("HIDDEN", $arItem)):?>
						<?if($arItem["TYPE"] == "SELECT"){?>
							<div class="col-12 col-sm-6 col-lg-3 col-xxl-3 order-3 order-lg-1 mt-4 mt-lg-0">
								<h3><?=$arItem["NAME"]?></h3>
								<select class="input-select mt-4" name="<?=$arItem["INPUT_NAME"]?>" id="category">
								<?foreach ($arItem["LIST"] as $key => $listItem): ?>
								<option value="<?=$key?>" <?if($arItem["INPUT_VALUE"] == $key){?>selected<?}?>><?=str_replace('(все)', 'Все предложения', $listItem)?></option>
								<? endforeach;?>
								</select>
							</div>
						<?}?>
						<?if($arItem["TYPE"] == "RANGE"){?>
							<div class="col-12 col-sm-6 col-lg-3 col-xxl-3 order-1 order-lg-2">
									<h3><?=$arItem["NAME"]?></h3>
									<div class="input input_color_gray mt-4 w-100">
										<input class="input__input" name="<?=$arItem["INPUT_NAMES"]["0"]?>" id="from-price" value="<?=$arItem["INPUT_VALUES"]["0"]?>">
										<label class="input__label" for="from-price">От</label>
									</div>
							</div>
							<div class="col-12 col-sm-6 col-lg-3 col-xxl-3 order-2 order-lg-3 mt-3 d-flex align-items-end">
									<div class="input input_color_gray w-100">
										<input class="input__input" name="<?=$arItem["INPUT_NAMES"]["1"]?>" id="to-price" value="<?=$arItem["INPUT_VALUES"]["1"]?>">
										<label class="input__label" for="to-price">До</label>
									</div>
							</div>
						<?}?>
					<?endif?>
			<?endforeach;?>
			<div class="col-12 col-sm-6 col-lg-3 col-xxl-3 order-4 mt-3 mt-md-0 d-flex align-items-end">
						<button class="btn btn-main w-100" type="submit" name="set_filter" value="Показать">Показать</button>
						<input type="hidden" name="set_filter" value="Y" />
				</div>
			</div>
		</form>
	</div>
</div>
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
	});
</script>