<?
include_once($_SERVER['DOCUMENT_ROOT'].'/bitrix/modules/main/include/urlrewrite.php');
CHTTP::SetStatus("404 Not Found");
@define("ERROR_404", "Y");
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Страница не найдена");
$APPLICATION->SetPageProperty("header-class", "404");
?>
<main class="pt-menu" role="main">
    <div class="container container-404">
        <div class="row text-center">
            <div class="col-md-12">
                <h1 class="font-size-60">404</h1>
                <p>Страница не найдена</p>
                <a href="/" class="btn btn-main btn-255 w-auto">Перейти на главную страницу</a>
            </div>
        </div>
    </div>
</main>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>