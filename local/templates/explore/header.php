<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();//проверка?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?$APPLICATION->ShowHead();//подключение скриптов?>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title><?$APPLICATION->ShowTitle()?></title>
    <?
        use Bitrix\Main\Page\Asset;

        Asset::getInstance()->addCss(SITE_TEMPLATE_PATH."/css/normalize.css");
        Asset::getInstance()->addCss(SITE_TEMPLATE_PATH."/css/bootstrap-grid.min.css");
        Asset::getInstance()->addCss("https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css");
        Asset::getInstance()->addCss("https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/assets/owl.carousel.min.css");
    ?>
		</head>
		<body>
        <?$APPLICATION->ShowPanel();?>
			<div class="wrapper">
                <!-- / ========= header ========= \ -->
                <header class="header">
                    <div class="container">
                        <div class="header-flex">
                            <?php
                            $curPage = $APPLICATION->GetCurPage(true);
                            if (
                                $curPage == SITE_DIR."index.php"
                            ){?>

                                <div class="logo"><span>ex</span>plore</div>

                            <?}else{?>

                                <div class="logo"><a href="/"><span>ex</span>plore</a></div>

                            <?}?>
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
                            <div class="account">
                                <div class="account__cart">
                                    <a href="#"><img src="<?=SITE_TEMPLATE_PATH?>/img/header_cart.png" alt=""></a>
                                    <span class="account__badge">0</span>
                                </div>
                                <a href="#" class="account__btn">
                                    My Account
                                </a>
                            </div>
                            <a href="#" class="phone-menu"><i class="fa fa-bars" aria-hidden="true"></i></a>
                        </div>
                    </div>
                </header>
