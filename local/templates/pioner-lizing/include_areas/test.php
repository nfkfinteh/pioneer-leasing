<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");
CModule::IncludeModule("subscribe");
// если есть post запрос с почтой то исполняем код
if($_POST["email"]) {
    $EMAIL = $_POST["email"];
    /* получим значение пользователя */
    if ($USER->IsAuthorized()){
        global $USER;
        $USER = $USER->GetID() ;
    }
    else {
       $USER = NULL ;
    }
    /* определим рубрики активные рубрики подписок */
    $RUB_ID = array();
    $rub = CRubric::GetList(array(), array("ACTIVE"=>"Y"));
    while($rub->ExtractFields("r_")):
     $RUB_ID = array($r_ID) ;
    endwhile;
  
    /* создадим массив на подписку */
    $subscr = new CSubscription;
    $arFields = Array(
        "USER_ID" => $USER,
        "FORMAT" => "html/text",
        "EMAIL" => $EMAIL,
        "ACTIVE" => "Y",
        "RUB_ID" => $RUB_ID,
        "SEND_CONFIRM" => "Y"
    );
    $idsubrscr = $subscr->Add($arFields);
  
    if($idsubrscr) {
      $popuptitle = '<span style="color: green">Удачно</span>';
      $popuptext =  $EMAIL .' подписан на рассылку';
    }
    else {
      $popuptitle = '<span style="color: red">Ошибка</span>';
      $popuptext =   $EMAIL .' уже был подписан на рассылку';
    }
    /* если ajax не подключен */
    if ($_POST["action"] != "ajax") {
       header('Location: '.$_SERVER['HTTP_REFERER']);
    }
}
  
?>
<? if($popuptitle || $popuptext):?>
<script type="text/javascript" >
$.gritter.add({
    title: '<? echo $popuptitle;?> ',
    text: '<? echo $popuptext;?> ',
    sticky: false,
    time: 2500
});
</script>
<? endif ;?>
  
<form action="/test/index.php" name="subscribe"   method="post">
    <label>Подписаться на новости:</label>
    <input type="text" value="" title="Ваш e-mail" class="mailing-text" name="email"/> <br />
    <input type="submit" value="Подписаться" title="" class="mailing-submit" /><br />
</form>

























<?
/*
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");

CModule::IncludeModule('iblock');
CModule::IncludeModule('catalog');

$bs = new CIBlockElement;

$arFilter = array(
        'IBLOCK_ID' => 5, 
		'PROPERTY_category' => 1,
    );
    
$obElement = $bs->GetList(Array("RAND"=>"ASC"),$arFilter, false, Array ("nTopCount" => 3));


while( $arElement = $obElement->GetNext())
{
	print('<h2>'.$arElement['NAME'].'</h2>');	
};

while( $arElement = $obElement->GetNext() )
{
    $arRes = CCatalogProduct::GetByIDEx($arElement['ID']);

    if($arRes['PRODUCT']['QUANTITY'] != 0)
    {
        CIBlockElement::SetPropertyValuesEx(
            $arElement['ID'], 
            false, 
            array('IN_STOCK' => 
                array( 'VALUE' => '29' ),
            )
        );
    }
    else
    {
        CIBlockElement::SetPropertyValuesEx(
            $arElement['ID'], 
            false, 
            array('IN_STOCK' => 
                array( 'VALUE' => '' ),
            )
        );
    }
}