<?php if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();//проверка?>
<?php use Bitrix\Main\Page\Asset; ?>
<?php $bScriptInFooter = ! $USER->IsAdmin(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php $APPLICATION->ShowMeta("keywords")?>
    <?php $APPLICATION->ShowMeta("description")?>
    <?php $APPLICATION->ShowCSS()?>
    <?php
        if (!$bScriptInFooter) {
            $APPLICATION->ShowHeadStrings();
            $APPLICATION->ShowHeadScripts();
        }
    ?>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title><?php $APPLICATION->ShowTitle()?></title>
    <?php
        Asset::getInstance()->addCss(SITE_TEMPLATE_PATH."/css/normalize.css");
        Asset::getInstance()->addCss(SITE_TEMPLATE_PATH."/css/bootstrap-grid.min.css");
        Asset::getInstance()->addCss("https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css");
        Asset::getInstance()->addCss("https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/assets/owl.carousel.min.css");

        Asset::getInstance()->addJs("https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js");
        Asset::getInstance()->addJs("https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/owl.carousel.min.js");
        Asset::getInstance()->addJs(SITE_TEMPLATE_PATH."/js/script.js");
    ?>
		</head>
		<body>
        <?php $APPLICATION->ShowPanel();?>
			<div class="wrapper">
                <!-- / ========= header ========= \ -->
                <header class="header">
                    <div class="container">
                        <div class="header-flex">
                            <?php
                            $curPage = $APPLICATION->GetCurPage(true);
                            if ($curPage == SITE_DIR."index.php"): ?>

                                <div class="logo"><span>ex</span>plore</div>

                            <?php else: ?>

                                <div class="logo"><a href="/"><span>ex</span>plore</a></div>

                            <?php endif; ?>
                            <ul class="nav">
                                <li class="nav__item">
                                    <a href="#" class="nav__link active">Home</a>
                                </li>
                                <li class="nav__item">
                                    <a href="#" class="nav__link">Mens</a>
                                </li>
                                <li class="nav__item">
                                    <a href="#" class="nav__link">Womens</a>
                                </li>
                                <li class="nav__item">
                                    <a href="#" class="nav__link">Kids</a>
                                </li>
                                <li class="nav__item">
                                    <a href="#" class="nav__link">Blog</a>
                                </li>
                            </ul>
                            <?$APPLICATION->IncludeComponent(
                                "bitrix:sale.basket.basket.line",
                                "",
                                Array(
                                    "HIDE_ON_BASKET_PAGES" => "Y",
                                    "PATH_TO_AUTHORIZE" => "",
                                    "PATH_TO_BASKET" => SITE_DIR."personal/cart/",
                                    "PATH_TO_ORDER" => SITE_DIR."personal/order/make/",
                                    "PATH_TO_PERSONAL" => SITE_DIR."personal/",
                                    "PATH_TO_PROFILE" => SITE_DIR."personal/",
                                    "PATH_TO_REGISTER" => SITE_DIR."login/",
                                    "POSITION_FIXED" => "N",
                                    "SHOW_AUTHOR" => "Y",
                                    "SHOW_EMPTY_VALUES" => "Y",
                                    "SHOW_NUM_PRODUCTS" => "Y",
                                    "SHOW_PERSONAL_LINK" => "Y",
                                    "SHOW_PRODUCTS" => "N",
                                    "SHOW_TOTAL_PRICE" => "Y"
                                )
                            );?>
                            <a href="#" class="phone-menu"><i class="fa fa-bars" aria-hidden="true"></i></a>
                        </div>
                    </div>
                </header>
                <?php
                $curPage = $APPLICATION->GetCurPage(true);
                if ($curPage != SITE_DIR."index.php"): ?>

                    <div class="container mt-8">

                <?php endif; ?>
