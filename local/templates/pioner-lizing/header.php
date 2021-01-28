<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?global $APPLICATION;?>
<!DOCTYPE html>
<html lang="<?=LANGUAGE_ID?>">
<head>
	<title><?$APPLICATION->ShowTitle();?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<?$APPLICATION->ShowHead();?>
	<link rel="icon" type="image/png" href="<?=SITE_TEMPLATE_PATH?>/favicon.png">
	<!-- Favicons -->
	<!-- <link rel="apple-touch-icon" href="img/logo/logo_180.png" sizes="180x180">
	<link rel="icon" href="img/logo/logo_32.png" sizes="32x32" type="image/png">
	<link rel="icon" href="img/logo/logo_16.png" sizes="16x16" type="image/png">
	<link rel="icon" href="img/logo/favicon.ico"> -->

	<?$APPLICATION->AddHeadString('<script src="https://yastatic.net/es5-shims/0.0.2/es5-shims.min.js"></script>',true)?>
	<?$APPLICATION->AddHeadString('<script src="https://yastatic.net/share2/share.js" async="async"></script>',true)?>
<<<<<<< HEAD
=======

>>>>>>> 566b7848f0b2f2776e7e546e21263df99fc8f306
	<?$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH .'/js/jquery-3.5.1.min.js' );?>
	<?$APPLICATION->AddHeadScript( SITE_TEMPLATE_PATH . '/js/owl.carousel.min.js' );?>
	<?$APPLICATION->AddHeadScript( SITE_TEMPLATE_PATH . '/js/bootstrap.min.js' );?>
	<?$APPLICATION->AddHeadScript( SITE_TEMPLATE_PATH . '/js/bootstrap.bundle.min.js' );?>
	<?$APPLICATION->AddHeadScript( SITE_TEMPLATE_PATH . '/js/rangeslider.js' );?>
	<?$APPLICATION->AddHeadScript( SITE_TEMPLATE_PATH . '/js/script.js' );?>

	<?$APPLICATION->SetAdditionalCSS('https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;700&display=swap' );?>

	<?$APPLICATION->SetAdditionalCSS( SITE_TEMPLATE_PATH . '/css/bootstrap.css' );?>
	<?$APPLICATION->SetAdditionalCSS( SITE_TEMPLATE_PATH . '/css/owl.carousel.min.css' );?>
	<?$APPLICATION->SetAdditionalCSS( SITE_TEMPLATE_PATH . '/css/owl.theme.default.css' );?>
	<?$APPLICATION->SetAdditionalCSS( SITE_TEMPLATE_PATH . '/css/rangeslider.css' );?>
	<?$APPLICATION->SetAdditionalCSS( SITE_TEMPLATE_PATH . '/css/custom_preloader_style.css' );?>
	<?$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH . "/script.js");?>
</head>
<body class="<? $APPLICATION->AddBufferContent('BodyStyleClass'); ?>">
	<?$APPLICATION->IncludeComponent("bitrix:main.include", "", array(
		"AREA_FILE_SHOW" => "file",
		"PATH" => SITE_TEMPLATE_PATH."/include_areas/seo.php",
	));?>
	<header class="header <? $APPLICATION->AddBufferContent('HeaderStyleClass'); ?>">
		<div class="main-menu_container">
			<div class="container h-100">
				<nav class="navbar">
<<<<<<< HEAD
					<a class="navbar-brand" href="/"></a>
=======
					<a class="navbar-brand" href="<?= HOST_PIONEER_LEASING ?>/"></a>
>>>>>>> 566b7848f0b2f2776e7e546e21263df99fc8f306
					<button class="navbar-toggler" type="button" data-toggle="modal" data-target="#navbarModal" aria-expanded="false">
						<svg width="22" height="18" viewBox="0 0 22 18" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path fill-rule="evenodd" clip-rule="evenodd" d="M0 0H22V2.75002H0V0ZM22 7.24998H0V10H22V7.24998ZM11 14.5H0V17.25H11V14.5Z" fill="#FFCD15" />
						</svg>
						<span class="navbar-toggler__text">Меню</span>
					</button>
					<?/*?>
					<div class="navbar-divider"></div>
					<?*/?>
					<div class="navbar-dropdown">
						<div class="navbar-dropdown_title">
							<?$APPLICATION->IncludeComponent("bitrix:main.include", "", array(
								"AREA_FILE_SHOW" => "file",
								"PATH" => SITE_TEMPLATE_PATH."/include_areas/header/menu_lizing.php",
							));?>
							<?/*?>
							<svg height="7" viewBox="0 0 14 7" width="14" xmlns="http://www.w3.org/2000/svg">
								<path
									d="m7.00037 6.0929 6.32263-5.982549c.1555-.1471351.4049-.1471352.5604 0 .1555.147134.1555.383104 0 .530239l-6.60431 6.24906c-.1555.14713-.40488.14713-.56038 0l-6.601353-6.24906c-.0762825-.072179-.11735729-.169343-.11735729-.263732 0-.094388.03814129-.191552.11735729-.263732.155498-.1471339.404882-.1471339.560381 0z"
									fill="currentColor"
								/>
							</svg>
							<?*/?>
						</div>



						<div class="navbar-dropdown__menu navbar-dropdown__menu-simple">
							<div class="container">
								<?$APPLICATION->IncludeComponent(
									"bitrix:menu",
									"pioner_menu_main",
									Array(
										"ROOT_MENU_TYPE" => "top",
										"MAX_LEVEL" => "4",
										"CHILD_MENU_TYPE" => "",
										"USE_EXT" => "N",
										"DELAY" => "N",
										"ALLOW_MULTI_SELECT" => "N",
										"MENU_CACHE_TYPE" => CACHE_TYPE,
										"MENU_CACHE_TIME" => CACHE_TIME,
										"MENU_CACHE_USE_GROUPS" => "Y",
										"MENU_CACHE_GET_VARS" => array()
									)
								);?>
							</div>
						</div>
						<?/*?>
						<div class="navbar-dropdown__menu">
							<div class="container">
								<?$APPLICATION->IncludeComponent(
									"bitrix:menu",
									"pioner_menu_main",
									Array(
										"ROOT_MENU_TYPE" => "top",
										"MAX_LEVEL" => "4",
										"CHILD_MENU_TYPE" => "",
										"USE_EXT" => "N",
										"DELAY" => "N",
										"ALLOW_MULTI_SELECT" => "N",
										"MENU_CACHE_TYPE" => CACHE_TYPE,
										"MENU_CACHE_TIME" => CACHE_TIME,
										"MENU_CACHE_USE_GROUPS" => "Y",
										"MENU_CACHE_GET_VARS" => array()
									)
								);?>
								<? $APPLICATION->IncludeComponent("bitrix:news.list", "banner-header", array(
									"IBLOCK_TYPE" => CONTENT_IBLOCK_TYPE,
									"IBLOCK_ID" => BANNERS_IBLOCK_ID,
									"NEWS_COUNT" => 1,
									"SORT_BY1" => "SORT",
									"SORT_ORDER1" => "ASC",
									"SORT_BY2" => "ACTIVE_FROM",
									"SORT_ORDER2" => "DESC",
									"FIELD_CODE" => array("PREVIEW_PICTURE","DETAIL_PICTURE"),
									"PROPERTY_CODE" => array("LINK","IS_MODAL","LINK_TEXT"),
									"FILTER_NAME" => BANNER_HEADER_FILTER_NAME,
									"CHECK_DATES" => "Y",
									"ADD_SECTIONS_CHAIN" => "N",
									"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
									"INCLUDE_SUBSECTIONS" => "Y",
									"AJAX_MODE" => "N",
									"SET_TITLE" => "N",
									"SET_BROWSER_TITLE" => "N",
									"SET_META_DESCRIPTION" => "N",
									"SET_META_KEYWORDS" => "N",
									"SHOW_404" => "N",
									"SET_STATUS_404" => "N",
									"MESSAGE_404" => "",
									"CACHE_TYPE" => CACHE_TYPE,
									"CACHE_TIME" => CACHE_TIME,
									"CACHE_FILTER" => CACHE_FILTER,
									"CACHE_GROUPS" => CACHE_GROUPS,
								)); ?>

							</div>
						</div>
						<?*/?>
					</div>


					<?$APPLICATION->IncludeComponent("bitrix:main.include", "", array(
						"AREA_FILE_SHOW" => "file",
						"PATH" => SITE_TEMPLATE_PATH."/include_areas/header/menu_investor.php",
					));?>


					<div class="navbar-dropdown navbar-dropdown__min-width d-lg-block mobile-hide mr-auto ml-5">
						<div class="navbar-dropdown_title">
							<?$APPLICATION->IncludeComponent("bitrix:main.include", "", array(
								"AREA_FILE_SHOW" => "file",
								"PATH" => SITE_TEMPLATE_PATH."/include_areas/header/menu_more_text.php",
							));?>
						</div>
						<div class="navbar-dropdown__menu navbar-dropdown__menu-simple">
							<div class="container">
								<?$APPLICATION->IncludeComponent(
									"bitrix:menu",
									"pioner_menu_main",
									Array(
										"ROOT_MENU_TYPE" => "side_menu",
										"MAX_LEVEL" => "4",
										"CHILD_MENU_TYPE" => "side_menu_sub",
										"USE_EXT" => "N",
										"DELAY" => "N",
										"ALLOW_MULTI_SELECT" => "N",
										"MENU_CACHE_TYPE" => CACHE_TYPE,
										"MENU_CACHE_TIME" => CACHE_TIME,
										"MENU_CACHE_USE_GROUPS" => "Y",
										"MENU_CACHE_GET_VARS" => array()
									)
								);?>
							</div>
						</div>
					</div>


					<?$APPLICATION->IncludeComponent(
						"bitrix:search.title",
						"pioneer-header",
						Array(
							"CATEGORY_0" => array(),
							"CATEGORY_0_TITLE" => "",
							"CHECK_DATES" => "N",
							"CONTAINER_ID" => "title-search",
							"INPUT_ID" => "title-search-input",
							"ORDER" => "rank",
							"PAGE" => "#SITE_DIR#search/",
							"SHOW_INPUT" => "Y",
							"SHOW_OTHERS" => "N",
							"TOP_COUNT" => "5",
							"USE_LANGUAGE_GUESS" => "N"
						)
					);?>



					<?$APPLICATION->IncludeComponent("bitrix:main.include", "", array(
						"AREA_FILE_SHOW" => "file",
						"PATH" => SITE_TEMPLATE_PATH."/include_areas/header/btn_call_modal_leasing.php",
					));?>
					<div class="navbar-contacts">
						<div class="navbar-phone">
							<?$APPLICATION->IncludeComponent("bitrix:main.include", "", array(
								"AREA_FILE_SHOW" => "file",
								"PATH" => SITE_TEMPLATE_PATH."/include_areas/header/navbar-phone.php",
							));?>
						</div>

						<div class='header_navbar_block_social-callback'>
							<div class='header_navbar_block_social header_navbar_block_social__white'>
								<?$APPLICATION->IncludeComponent("bitrix:main.include", "", array(
									"AREA_FILE_SHOW" => "file",
									"PATH" => SITE_TEMPLATE_PATH."/include_areas/social_white.php",
								));?>
							</div>
							<div class='header_navbar_block_social header_navbar_block_social__black'>
								<?$APPLICATION->IncludeComponent("bitrix:main.include", "", array(
									"AREA_FILE_SHOW" => "file",
									"PATH" => SITE_TEMPLATE_PATH."/include_areas/social.php",
								));?>
							</div>
							<div class='header_navbar_block_callback'>
								<button class="navbar-callback" type="button" data-toggle="modal" data-target="#callbackModal">
									<svg width="22" height="22" viewBox="0 0 22 22" xmlns="http://www.w3.org/2000/svg">
										<path
											d="M21.4227 16.9723L16.9698 14.0025C16.4047 13.6286 15.6473 13.7516 15.2295 14.2851L13.9324 15.953C13.7657 16.1728 13.4627 16.2366 13.2216 16.1026L12.9748 15.9666C12.1569 15.5207 11.1392 14.9656 9.08877 12.9143C7.0383 10.863 6.48215 9.84441 6.03633 9.02794L5.90104 8.78119C5.76524 8.54007 5.82779 8.23575 6.04767 8.06771L7.71427 6.77093C8.24752 6.35309 8.37069 5.59578 7.99731 5.03048L5.02775 0.577286C4.64508 0.00163523 3.87734 -0.171172 3.28493 0.184969L1.4229 1.30357C0.837839 1.64755 0.408602 2.20464 0.225195 2.85811C-0.445319 5.30138 0.0591021 9.51809 6.27026 15.7304C11.2111 20.6712 14.8893 21.9999 17.4175 21.9999C17.9993 22.0024 18.5789 21.9267 19.1406 21.7748C19.7941 21.5916 20.3513 21.1623 20.695 20.5771L21.8147 18.716C22.1713 18.1234 21.9986 17.3552 21.4227 16.9723ZM21.1829 18.3398L20.0659 20.202C19.8191 20.6244 19.4183 20.935 18.9477 21.0687C16.6923 21.688 12.752 21.175 6.78899 15.2117C0.826024 9.24827 0.313182 5.308 0.932399 3.05209C1.06627 2.58085 1.37723 2.1796 1.80015 1.93237L3.66219 0.815229C3.91923 0.660553 4.25245 0.735528 4.4185 0.985329L6.03161 3.40733L7.38552 5.43814C7.54766 5.68334 7.49439 6.01198 7.26308 6.19343L5.5961 7.49021C5.0888 7.87814 4.94393 8.58007 5.25626 9.13716L5.38863 9.37768C5.85718 10.2371 6.43971 11.3062 8.56643 13.4327C10.6932 15.5592 11.7618 16.1418 12.6208 16.6104L12.8616 16.7431C13.4186 17.0554 14.1206 16.9106 14.5085 16.4032L15.8052 14.7361C15.9866 14.5049 16.3151 14.4517 16.5604 14.6137L21.0129 17.5834C21.2628 17.7494 21.3378 18.0828 21.1829 18.3398Z"
											fill="currentColor"
										/>
										<path
											d="M12.35 3.69998C15.6346 3.70363 18.2963 6.36543 18.3 9.65001C18.3 9.84332 18.4567 10 18.65 10C18.8433 10 19 9.84332 19 9.65001C18.9959 5.97898 16.021 3.00402 12.35 3C12.1567 3 12 3.15668 12 3.34999C12 3.5433 12.1567 3.69998 12.35 3.69998Z"
											fill="currentColor"
										/>
										<path
											d="M12.3571 5.71426C14.5258 5.71681 16.2832 7.47422 16.2857 9.64287C16.2857 9.84012 16.4457 10 16.6429 10C16.8401 10 17 9.84012 17 9.64287C16.997 7.07988 14.9201 5.00293 12.3571 5C12.1599 5 12 5.15988 12 5.35713C12 5.55438 12.1599 5.71426 12.3571 5.71426Z"
											fill="currentColor"
										/>
										<path
											d="M12.375 7.74998C13.41 7.75121 14.2487 8.58996 14.25 9.62501C14.25 9.83213 14.4179 10 14.625 10C14.8321 10 15 9.83213 15 9.62501C14.9983 8.17594 13.8241 7.00163 12.375 7C12.1679 7 12 7.16787 12 7.37499C12 7.58211 12.1679 7.74998 12.375 7.74998Z"
											fill="currentColor"
										/>
									</svg>
									<?$APPLICATION->IncludeComponent("bitrix:main.include", "", array(
										"AREA_FILE_SHOW" => "file",
										"PATH" => SITE_TEMPLATE_PATH."/include_areas/header/navbar-callback-btn.php",
									));?>
								</button>
							</div>
						</div>

					</div>
				</nav>
			</div>
		</div>
		<? if($isShowSecMenu == true) :?>
<<<<<<< HEAD
		<link rel="stylesheet" type="text/css" media="all" href="<?=SITE_TEMPLATE_PATH?>/css/datepicker.css" />
		<script type="text/javascript" src="<?=SITE_TEMPLATE_PATH?>/js/moment.min.js"></script>
		<script type="text/javascript" src="<?=SITE_TEMPLATE_PATH?>/js/datepicker.js"></script>
			<div class="second-menu">
				<div class="container h-100">
					<?$APPLICATION->IncludeComponent(
				"bitrix:menu",
				"pioner_menu_sub",
				array(
					"ROOT_MENU_TYPE" => "sub_menu",
					"MAX_LEVEL" => "4",
					"CHILD_MENU_TYPE" => "",
					"USE_EXT" => "N",
					"DELAY" => "N",
					"ALLOW_MULTI_SELECT" => "N",
					"MENU_CACHE_TYPE" => "A",
					"MENU_CACHE_TIME" => "3600",
					"MENU_CACHE_USE_GROUPS" => "Y",
					"MENU_CACHE_GET_VARS" => array(
					),
					"COMPONENT_TEMPLATE" => "pioner_menu_sub"
				),
				false
			);?>
				</div>
			</div>
		<? endif;?>
=======
			<link rel="stylesheet" type="text/css" media="all" href="<?=SITE_TEMPLATE_PATH?>/css/datepicker.css" />
			<script type="text/javascript" src="<?=SITE_TEMPLATE_PATH?>/js/moment.min.js"></script>
			<script type="text/javascript" src="<?=SITE_TEMPLATE_PATH?>/js/datepicker.js"></script>
				<div class="second-menu">
					<div class="container h-100">
						<?$APPLICATION->IncludeComponent(
					"bitrix:menu",
					"pioner_menu_sub",
					array(
						"ROOT_MENU_TYPE" => "sub_menu",
						"MAX_LEVEL" => "4",
						"CHILD_MENU_TYPE" => "",
						"USE_EXT" => "N",
						"DELAY" => "N",
						"ALLOW_MULTI_SELECT" => "N",
						"MENU_CACHE_TYPE" => "A",
						"MENU_CACHE_TIME" => "3600",
						"MENU_CACHE_USE_GROUPS" => "Y",
						"MENU_CACHE_GET_VARS" => array(
						),
						"COMPONENT_TEMPLATE" => "pioner_menu_sub"
					),
					false
				);?>
					</div>
				</div>
		<? endif; ?>
>>>>>>> 566b7848f0b2f2776e7e546e21263df99fc8f306
	</header>

	<div class="modal fade" id="navbarModal" tabindex="-1" role="dialog" aria-label="Меню" aria-hidden="true">
		<div class="modal-dialog navbar-dialog" role="document">
			<div class="modal-content navbar-content">
				<button type="button" class="navbar-close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
				<?$APPLICATION->IncludeComponent(
					"bitrix:menu",
					"pioner_menu",
					array(
						"ROOT_MENU_TYPE" => "side_menu",
						"MAX_LEVEL" => "1",
						"USE_EXT" => "N",
						"DELAY" => "N",
						"ALLOW_MULTI_SELECT" => "N",
						"MENU_CACHE_TYPE" => CACHE_TYPE,
						"MENU_CACHE_TIME" => CACHE_TIME,
						"MENU_CACHE_USE_GROUPS" => "N",
						"MENU_CACHE_GET_VARS" => array(
						),
						"COMPONENT_TEMPLATE" => "pioner_menu"
					),
					false
				);?>
				<? $APPLICATION->IncludeComponent("bitrix:news.list", "banner-navbar-menu", array(
					"IBLOCK_TYPE" => CONTENT_IBLOCK_TYPE,
					"IBLOCK_ID" => BANNERS_IBLOCK_ID,
					"NEWS_COUNT" => 1,
					"SORT_BY1" => "SORT",
					"SORT_ORDER1" => "ASC",
					"SORT_BY2" => "ACTIVE_FROM",
					"SORT_ORDER2" => "DESC",
					"FIELD_CODE" => array("PREVIEW_PICTURE","DETAIL_PICTURE"),
					"PROPERTY_CODE" => array("LINK","IS_MODAL","LINK_TEXT"),
					"FILTER_NAME" => BANNER_MENU_SIDEBAR_FILTER_NAME,
					"CHECK_DATES" => "Y",
					"ADD_SECTIONS_CHAIN" => "N",
					"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
					"INCLUDE_SUBSECTIONS" => "Y",
					"AJAX_MODE" => "N",
					"SET_TITLE" => "N",
					"SET_BROWSER_TITLE" => "N",
					"SET_META_DESCRIPTION" => "N",
					"SET_META_KEYWORDS" => "N",
					"SHOW_404" => "N",
					"SET_STATUS_404" => "N",
					"MESSAGE_404" => "",
					"CACHE_TYPE" => CACHE_TYPE,
					"CACHE_TIME" => CACHE_TIME,
					"CACHE_FILTER" => CACHE_FILTER,
					"CACHE_GROUPS" => CACHE_GROUPS,
				)); ?>

				<div class="navbar-social">
					<?$APPLICATION->IncludeComponent("bitrix:main.include", "", array(
						"AREA_FILE_SHOW" => "file",
						"PATH" => SITE_TEMPLATE_PATH."/include_areas/social.php",
					));?>
				</div>
			</div>
		</div>
	</div>
	<?$APPLICATION->ShowPanel();?>