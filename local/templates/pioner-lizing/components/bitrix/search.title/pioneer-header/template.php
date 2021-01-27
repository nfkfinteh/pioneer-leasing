<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);?>
<?
$INPUT_ID = trim($arParams["~INPUT_ID"]);
if(strlen($INPUT_ID) <= 0)
	$INPUT_ID = "title-search-input";
$INPUT_ID = CUtil::JSEscape($INPUT_ID);

$CONTAINER_ID = trim($arParams["~CONTAINER_ID"]);
if(strlen($CONTAINER_ID) <= 0)
	$CONTAINER_ID = "title-search";
$CONTAINER_ID = CUtil::JSEscape($CONTAINER_ID);


$host = (CMain::IsHTTPS()) ? 'https://' . $_SERVER["SERVER_NAME"] : 'http://' . $_SERVER["SERVER_NAME"];

if($arParams["SHOW_INPUT"] !== "N"):?>
	<div class="show-search-title-block ml-auto">
		<img src="<?= SITE_TEMPLATE_PATH ?>/img/icons/search-icon-gray.svg" alt="">
		<img class="yellow-icon" src="<?= SITE_TEMPLATE_PATH ?>/img/icons/search-icon-yellow.svg" alt="">
		<span><?=GetMessage("CT_BST_SEARCH_BUTTON");?></span>
	</div>
	<div id="<?echo $CONTAINER_ID?>" class="search-block">
		<div class="container search-container" itemscope itemtype="http://schema.org/WebSite">
			<link itemprop="url" href="<?= $host ?>/"/>
			<form action="<?echo $arResult["FORM_ACTION"]?>" itemprop="potentialAction" itemscope itemtype="http://schema.org/SearchAction">
				<span class="search-form-title"><?=GetMessage("CT_BST_SEARCH_BUTTON");?></span>
				<meta itemprop="target" content="<?= $host ?>/search/?q={q}"/>
				<input itemprop="query-input" id="<?echo $INPUT_ID?>" type="text" name="q" value="" autocomplete="off" />
				<input name="s" type="submit" class="btn" value="<?=GetMessage("SEARCH_GO");?>" />
				<div class="close-search-title-block">
					<img src="<?= SITE_TEMPLATE_PATH ?>/img/icons/search-icon-close.svg" alt="">
				</div>
			</form>
		</div>
	</div>
<?endif?>
<script>
	BX.ready(function(){
		new JCTitleSearch({
			'AJAX_PAGE' : '<?echo CUtil::JSEscape(POST_FORM_ACTION_URI)?>',
			'CONTAINER_ID': '<?echo $CONTAINER_ID?>',
			'INPUT_ID': '<?echo $INPUT_ID?>',
			'MIN_QUERY_LEN': 2
		});
	});
</script>
