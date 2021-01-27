<?php
define('LANG', 'ru');
define("NO_KEEP_STATISTIC", true);
 
require_once($_SERVER['DOCUMENT_ROOT'] . "/bitrix/modules/main/include/prolog_before.php");
CModule::IncludeModule('main');
 
@set_time_limit(30000);
ini_set('max_execution_time', 30000);
?>

<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");
CModule::IncludeModule("subscribe");

if (($_GET["action"] == 'confirm') AND ($_GET["name"] == 'subscribe') AND (isset($_GET["code"])) AND (isset($_GET["id"])))
{
	$CONFIRM_CODE = $_GET["code"];
	$ID = $_GET["id"];

	$subscr = new CSubscription;
	
	if($subscr->Update($ID, array("CONFIRM_CODE"=>$CONFIRM_CODE)))
	{
		
	};
	
	header('location: /');
};

if (($_GET["action"] == 'delete') AND ($_GET["name"] == 'subscribe') AND (isset($_GET["id"])))
{
	$CONFIRM_CODE = $_GET["code"];
	$ID = $_GET["id"];

	$subscr = new CSubscription;
	
	if($subscr->Delete($ID))
	{
		
	};
	
	header('location: /');
};
?>