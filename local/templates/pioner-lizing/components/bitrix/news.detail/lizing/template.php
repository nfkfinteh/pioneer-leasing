<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?
\Bitrix\Main\Loader::includeModule('dev2fun.opengraph');
\Dev2fun\Module\OpenGraph::Show($arResult['ID'],'element');
?>

        <div class="big_banner_text_block">
            <h1 class="top-banner__title" id="<?echo $this->GetEditAreaId($arResult['ID'])?>"><?= $arResult['DISPLAY_PROPERTIES']['DETAIL_TITLE']['~VALUE'] ?></h1>
            <? if (!empty($arResult['DISPLAY_PROPERTIES']['DETAIL_SUBTITLE'])): ?>
                <p class="top-banner__desc"><?= $arResult['DISPLAY_PROPERTIES']['DETAIL_SUBTITLE']['~VALUE'] ?></p>
            <? endif; ?>
            <button class="btn btn-main btn-255 mt-n4" type="button" data-toggle="modal" data-target="#leasingAppModalDetail">Оставить заявку</button>
            <button class="btn btn-main btn-255 mt-n4 btn-transparent" type="button" data-toggle="modal" data-target="#callbackModal">Получить консультацию</button>
        </div>
        <div class="row">
            <div class="col-xl-12">
                <div class="top-description">
                    <? if (!empty($arResult['DISPLAY_PROPERTIES']['TOP_DESCRIPTION'])): ?>
                        <div class="row">
                            <? foreach ($arResult['DISPLAY_PROPERTIES']['TOP_DESCRIPTION']['~VALUE'] as $key => $propVal): ?>
                                <div class="top-banner__list col-12 col-md-6 col-xxl-4">
                                    <div class="top-banner__list-title"><?= $propVal ?></div>
                                    <div class="top-banner__list-description"><?= $arResult['DISPLAY_PROPERTIES']['TOP_DESCRIPTION']['~DESCRIPTION'][$key] ?></div>
                                </div>
                            <? endforeach; ?>
                        </div>
                    <? endif; ?>
                </div>
            </div>
            <div class="col-12 col-md-12">
                <div class="top-banner__minitext">
                    <p class="top-banner__minitext-p">Лизингополучатель обязан застраховать предмет аренды от рисков утраты, повреждения на полную стоимость без франшизы на весь срок договора + 1 месяц.</p>
                    <p class="top-banner__minitext-p">Сумма платежей может быть изменена Лизингодателем в порядке, предусмотренном законом.</p>
                </div>
            </div>
        </div>
    </div>
</div>
<? if (!empty($arResult['DISPLAY_PROPERTIES']['DOCUMENTS'])): ?>
    <div class="container container-2">
        <div class="block-h2">
            <h2 class="header-width">Перечень документов для оформления договора лизинга:</h2>
            <div class="row">
                <? foreach ($arResult['DISPLAY_PROPERTIES']['DOCUMENTS']['FILE_VALUE'] as $arFile):
                    $type = "";
                    if ($arFile['CONTENT_TYPE'] == "application/pdf") {
                        $type = ".pdf - ";
                    }
                    if ($arFile['CONTENT_TYPE'] == "application/vnd.openxmlformats-officedocument.wordprocessingml.document") {
                        $type = ".docx - ";
                    }
                    ?>
                    <div class="col-12 col-md-6 col-lg-4 col-xxl-3">
                        <a href="<?= $arFile['SRC'] ?>" target="_blank" class="document">
                            <div class="document__title"><?= $arFile['ORIGINAL_NAME'] ?></div>
                            <div class="document__description">(<?= $type ?><?= sprintf('%01.2f', @filesize($_SERVER['DOCUMENT_ROOT'].$arFile['SRC']) / 1048576);?> Mb)</div>
                        </a>
                    </div>
                <? endforeach; ?>
            </div>
            <p class="text-gray font-weight-light mt-5">Если скачать не получается, пожалуйста, свяжитесь с нами по телефонам:<br>
            +7 (8352) 45-89-89, 45-45-60, и мы предоставим Вам списки необходимых документов.</p>
        </div>
    </div>
<? endif; ?>

<div class="bg-gray">
    <div class="container container-2">
        <div class="block-h2">
            <? if (!empty($arResult['DISPLAY_PROPERTIES']['TITLE_DETAIL_TEXT'])): ?>
                <h2 class="header-width font-size-32"><?= $arResult['DISPLAY_PROPERTIES']['TITLE_DETAIL_TEXT']['~VALUE'] ?></h2>
            <? endif; ?>
            <? if (!empty($arResult['~DETAIL_TEXT'])): ?>
                <div class="row mt-5">
                    <?= $arResult['~DETAIL_TEXT'] ?>
                </div>
            <? endif; ?>
            <? if (!empty($arResult['DISPLAY_PROPERTIES']['TITLE_LIST'])): ?>
                <h3 class="header-width mt-5 font-size-24"><?= $arResult['DISPLAY_PROPERTIES']['TITLE_LIST']['~VALUE'] ?></h3>
            <? endif; ?>
            <? if (!empty($arResult['DISPLAY_PROPERTIES']['LIST'])): ?>
                <div class="row mt-4">
                    <? foreach ($arResult['DISPLAY_PROPERTIES']['LIST']['~VALUE'] as $key => $propVal): ?>
                        <div class="col-12 col-md-6">
                            <div class="list-style">
                                <?= $propVal ?>
                            </div>
                        </div>
                    <? endforeach; ?>
                </div>
            <? endif; ?>
            <? if (!empty($arResult['DISPLAY_PROPERTIES']['AFTER_LIST_TEXT'])): ?>
                <div class="row mt-5">
                    <div class="col-12 col-lg-6">
                        <?= $arResult['DISPLAY_PROPERTIES']['AFTER_LIST_TEXT']['~VALUE'] ?>
                    </div>
                </div>
            <? endif; ?>
        </div>
    </div>
</div>
<? if (!empty($arResult['DISPLAY_PROPERTIES']['BASIC_REQUIREMENT'])): ?>
    <div class="container container-2">
        <div class="block-h3">
            <h3 class="header-width"><?= $arResult['DISPLAY_PROPERTIES']['BASIC_REQUIREMENT']['NAME'] ?></h3>
            <div class="row mt-4">
                <? foreach ($arResult['DISPLAY_PROPERTIES']['BASIC_REQUIREMENT']['~VALUE'] as $key => $propVal): ?>
                    <div class="col-12 col-md-6">
                        <div class="list-style">
                            <?= $propVal ?>
                        </div>
                    </div>
                <? endforeach; ?>
            </div>
        </div>
    </div>
<? endif; ?>