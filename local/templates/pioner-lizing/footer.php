<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<footer class="container footer text-center">
    <div class="row align-items-center">
        <div class="col-12 col-md-6 col-lg-3 col-xxl-2 col-xxxl">
            <span>
                &copy; <?= date('Y') ?>&nbsp;
                <?$APPLICATION->IncludeComponent("bitrix:main.include", "", array(
                    "AREA_FILE_SHOW" => "file",
                    "PATH" => SITE_TEMPLATE_PATH."/include_areas/contacts/company.php",
                ));?>
                <br>
                <?$APPLICATION->IncludeComponent("bitrix:main.include", "", array(
                    "AREA_FILE_SHOW" => "file",
                    "PATH" => SITE_TEMPLATE_PATH."/include_areas/footer/all_rights_reserved.php",
                ));?>
            </span>
        </div>
        <div class="col-12 mt-3 col-md-6 mt-md-0 col-lg-4 col-xxl-3 col-xxxl">
            <?$APPLICATION->IncludeComponent("bitrix:main.include", "", array(
                "AREA_FILE_SHOW" => "file",
                "PATH" => SITE_TEMPLATE_PATH."/include_areas/footer/privacity.php",
            ));?>
        </div>
        <div class="col-12 mt-3 col-md-6 col-lg-5 mt-lg-0 col-xxl-4 col-xxxl-3">
            <span>
                <?$APPLICATION->IncludeComponent("bitrix:main.include", "", array(
                    "AREA_FILE_SHOW" => "file",
                    "PATH" => SITE_TEMPLATE_PATH."/include_areas/contacts/addr.php",
                ));?>
                <br>
                <?$APPLICATION->IncludeComponent("bitrix:main.include", "", array(
                    "AREA_FILE_SHOW" => "file",
                    "PATH" => SITE_TEMPLATE_PATH."/include_areas/contacts/phone_footer.php",
                ));?>
            </span>
        </div>
        <div class="col-12 mt-3 col-md-6 col-xxl-3 mt-xxl-0 col-xxxl-3">
            <?$APPLICATION->IncludeComponent("bitrix:main.include", "", array(
                "AREA_FILE_SHOW" => "file",
                "PATH" => SITE_TEMPLATE_PATH."/include_areas/footer/btn-consultation-modal.php",
            ));?>
        </div>
        <div class="col-12 mt-3 col-lg-6 col-xxl-12 col-xxxl mt-xxxl-0">
            <div class="footer__social-container">
                <?$APPLICATION->IncludeComponent("bitrix:main.include", "", array(
                    "AREA_FILE_SHOW" => "file",
                    "PATH" => SITE_TEMPLATE_PATH."/include_areas/social.php",
                ));?>
            </div>
        </div>
    </div>
</footer>
<div class="modal fade" id="leasingAppModal" tabindex="-1" role="dialog" aria-labelledby="leasingAppModalLongTitle" aria-hidden="true">
    <div class="modal-dialog mw-fc modal-dialog-centered" role="document">
        <div class="modal-content br-8">
            <?$APPLICATION->IncludeComponent(
                "pioneer_custom:main.feedback",
                "pioneer_callback_form_popup",
                array(
                    "COMPONENT_TEMPLATE" => "pioneer_callback_form_popup",
                    "EMAIL_TO" => "mail@pioneer-leasing.ru",
                    "EVENT_MESSAGE_ID" => array(
                        0 => "7",
                    ),
                    "OK_TEXT" => "Спасибо, ваше сообщение принято.",
                    "REQUIRED_FIELDS" => array(
                        0 => "NAME",
                        1 => "PHONE",
                    ),
                    "USE_CAPTCHA" => "N",
                    "AJAX_MODE" => "Y",
                    "AJAX_OPTION_SHADOW" => "N",
                    "AJAX_OPTION_JUMP" => "N",
                    "AJAX_OPTION_STYLE" => "Y",
                    "AJAX_OPTION_HISTORY" => "N"
                ),
                false
            );?>
        </div>
    </div>
</div>
<div class="modal fade" id="subscribeModal" tabindex="-1" role="dialog" aria-labelledby="subscribeModalTitle" aria-hidden="true">
    <div class="modal-dialog mw-fc modal-dialog-centered" role="document">
        <div class="modal-content br-8">
            <?$APPLICATION->IncludeComponent(
                "pioneer_custom:main.feedback",
                "pioneer_callback_form_popup_subs",
                array(
                    "COMPONENT_TEMPLATE" => "pioneer_callback_form_popup_subs",
                    "EMAIL_TO" => "mail@pioneer-leasing.ru",
                    "EVENT_MESSAGE_ID" => array(
                        0 => "7",
                    ),
                    "OK_TEXT" => "Спасибо, ваше сообщение принято.",
                    "REQUIRED_FIELDS" => array(
                        0 => "NAME",
						1 => "PHONE",
                    ),
                    "USE_CAPTCHA" => "N",
                    "AJAX_MODE" => "Y",
                    "AJAX_OPTION_SHADOW" => "N",
                    "AJAX_OPTION_JUMP" => "N",
                    "AJAX_OPTION_STYLE" => "Y",
                    "AJAX_OPTION_HISTORY" => "N"
                ),
                false
            );?>
        </div>
    </div>
</div>


<div class="modal fade" id="leasingAppModalDetail" tabindex="-1" role="dialog" aria-labelledby="leasingAppModalLongTitleDetail" aria-hidden="true">
    <div class="modal-dialog mw-fc modal-dialog-centered" role="document">
        <div class="modal-content br-8">
            <?$APPLICATION->IncludeComponent(
                "pioneer_custom:main.feedback",
                "pioneer_callback_form_popup_leasing_detail",
                array(
                    "COMPONENT_TEMPLATE" => "pioneer_callback_form_popup",
                    "EMAIL_TO" => "mail@pioneer-leasing.ru",
                    "EVENT_MESSAGE_ID" => array(
                        0 => "7",
                    ),
                    "OK_TEXT" => "Спасибо, ваше сообщение принято.",
                    "REQUIRED_FIELDS" => array(
                        0 => "NAME",
                        1 => "PHONE",
                    ),
                    "USE_CAPTCHA" => "N",
                    "AJAX_MODE" => "Y",
                    "AJAX_OPTION_SHADOW" => "N",
                    "AJAX_OPTION_JUMP" => "N",
                    "AJAX_OPTION_STYLE" => "Y",
                    "AJAX_OPTION_HISTORY" => "N"
                ),
                false
            );?>
        </div>
    </div>
</div>


<div class="modal fade" id="callbackModal" tabindex="-1" role="dialog" aria-labelledby="callbackModalTitle" aria-hidden="true">
    <div class="modal-dialog mw-fc modal-dialog-centered" role="document">
        <div class="modal-content br-8">
            <?$APPLICATION->IncludeComponent(
                "pioneer_custom:main.feedback",
                "pioneer_callback_form_callback_popup",
                array(
                    "COMPONENT_TEMPLATE" => "pioneer_callback_form_callback_popup",
                    "EMAIL_TO" => "mail@pioneer-leasing.ru",
                    "EVENT_MESSAGE_ID" => array(
                        0 => "7",
                    ),
                    "OK_TEXT" => "Спасибо, ваше сообщение принято.",
                    "REQUIRED_FIELDS" => array(
                        0 => "NAME",
						1 => "PHONE",
                    ),
                    "USE_CAPTCHA" => "N",
                    "AJAX_MODE" => "Y",
                    "AJAX_OPTION_SHADOW" => "N",
                    "AJAX_OPTION_JUMP" => "N",
                    "AJAX_OPTION_STYLE" => "Y",
                    "AJAX_OPTION_HISTORY" => "N"
                ),
                false
            );?>
        </div>
    </div>
</div>

<div class="card-modal modal fade" id="card-modal" tabindex="-1" role="dialog" aria-labelledby="CardModalLabel" aria-hidden="true">
    <div class="card-modal__dialog modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="card-modal__header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <div class="card-modal__carousele owl-carousel owl-theme owl-dark">

                </div>
            </div>
            <div class="card-modal__body">
                <h2 class="card-modal__title" id="CardModalLabel"></h2>
                <div class="card-modal__description"></div>
            </div>
            <div class="card-modal__footer">
                <button type="button" class="btn btn-main btn-400 d-block mx-auto" id="btn-bid-modal" data-toggle="modal" data-target="#card-modal-confirm">Подать заявку на лизинг</button>
            </div>
        </div>
    </div>
</div>

<div class="card-modal-confirm modal fade" id="card-modal-confirm" tabindex="-1" role="dialog" aria-labelledby="CardModalConfirmLabel" aria-hidden="true">
    <div class="card-modal-confirm__dialog modal-dialog modal-dialog-centered" role="document">
        <div class="card-modal-confirm__content modal-content">
            <div class="card-modal-confirm__header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h2 class="card-modal-confirm__title" id="CardModalConfirmLabel">Оформить заявку</h2>
            </div>
            <div class="card-modal-confirm__body">
                <div class="input input_color_gray w-100 mt-4">
                    <input class="input__input" name="modal-confirm-fio" id="modal-confirm-fio" type="text">
                    <label class="input__label" for="modal-confirm-fio">Фамилия Имя Отчество</label>
                </div>
                <div class="input input_color_gray w-100 mt-4">
                    <input class="input__input" name="modal-confirm-phone" id="modal-confirm-phone" type="text" required>
                    <label class="input__label" for="modal-confirm-phone">Телефон *</label>
                </div>
                <div class="input input_color_gray w-100 mt-4">
                    <input class="input__input" name="modal-confirm-email" id="modal-confirm-email" type="email" required>
                    <label class="input__label" for="modal-confirm-email">Электронная почта *</label>
                </div>
                <div class="input input_color_gray w-100 mt-4">
                    <input class="input__input" name="modal-confirm-date" id="modal-confirm-date" type="text" required>
                    <label class="input__label" for="modal-confirm-date">Данные заявки</label>
                </div>
                <span class="fsz-12 text-gray d-block mt-3">* - поля, обязательные для заполнения</span>
                <button type="submit" class="btn btn-main btn-400 w-100 mt-4">Отправить заявку</button>
            </div>
            <div class="card-modal-confirm__footer">
                <p class="fsz-12 text-gray mt-4">Результаты расчета не являются публичной офертой и могут быть уточнены при заключении договора.</p>
            </div>
        </div>
    </div>
</div>


<?$APPLICATION->IncludeComponent("bitrix:main.include", "", array(
    "AREA_FILE_SHOW" => "file",
    "PATH" => SITE_TEMPLATE_PATH."/include_areas/footer/include_ajax.php",
));?>


</body>
</html>