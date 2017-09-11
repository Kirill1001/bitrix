<?php require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");?>
    <!-- / ========= banner ========= \ -->
<?$APPLICATION->IncludeComponent(
    "bitrix:news.detail",
    "banner",
    Array(
        "ACTIVE_DATE_FORMAT" => "d.m.Y",
        "ADD_ELEMENT_CHAIN" => "N",
        "ADD_SECTIONS_CHAIN" => "Y",
        "AJAX_MODE" => "N",
        "AJAX_OPTION_ADDITIONAL" => "",
        "AJAX_OPTION_HISTORY" => "N",
        "AJAX_OPTION_JUMP" => "N",
        "AJAX_OPTION_STYLE" => "Y",
        "BROWSER_TITLE" => "-",
        "CACHE_GROUPS" => "Y",
        "CACHE_TIME" => "36000000",
        "CACHE_TYPE" => "A",
        "CHECK_DATES" => "Y",
        "DETAIL_URL" => "",
        "DISPLAY_BOTTOM_PAGER" => "Y",
        "DISPLAY_DATE" => "Y",
        "DISPLAY_NAME" => "Y",
        "DISPLAY_PICTURE" => "Y",
        "DISPLAY_PREVIEW_TEXT" => "Y",
        "DISPLAY_TOP_PAGER" => "N",
        "ELEMENT_CODE" => "",
        "ELEMENT_ID" => 37,
        "FIELD_CODE" => array("", ""),
        "IBLOCK_ID" => "2",
        "IBLOCK_TYPE" => "banner",
        "IBLOCK_URL" => "",
        "INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
        "MESSAGE_404" => "",
        "META_DESCRIPTION" => "-",
        "META_KEYWORDS" => "-",
        "PAGER_BASE_LINK_ENABLE" => "N",
        "PAGER_SHOW_ALL" => "N",
        "PAGER_TEMPLATE" => ".default",
        "PAGER_TITLE" => "Страница",
        "PROPERTY_CODE" => array("", ""),
        "SET_BROWSER_TITLE" => "Y",
        "SET_CANONICAL_URL" => "N",
        "SET_LAST_MODIFIED" => "N",
        "SET_META_DESCRIPTION" => "Y",
        "SET_META_KEYWORDS" => "Y",
        "SET_STATUS_404" => "N",
        "SET_TITLE" => "Y",
        "SHOW_404" => "N",
        "STRICT_SECTION_CHECK" => "N",
        "USE_PERMISSIONS" => "N",
        "USE_SHARE" => "N"
    )
);?>
    <!-- / ========= feature ========= \ -->
    <section class="feature">
        <div class="container">
            <h2 class="section-title">
                featured items
            </h2>
            <p class="section-descr feature-descr text-center">
                Let’s see featured items!
            </p>
            <div class="owl-carousel feature-items">

                <article class="item">
                    <div class="item__pic">
                        <a href="#"><img src="img/feature-item1.png" alt=""></a>
                    </div>
                    <div class="item__descr">
                        <div class="item__title">
                            <a href="#" class="section-subtitle">Vaber Jinish Very Stylish</a>
                        </div>
                        <ul class="item__rating">
                            <li class="item__star">
                                <i class="fa fa-star" aria-hidden="true"></i>
                            </li>
                            <li class="item__star">
                                <i class="fa fa-star" aria-hidden="true"></i>
                            </li>
                            <li class="item__star">
                                <i class="fa fa-star" aria-hidden="true"></i>
                            </li>
                            <li class="item__star">
                                <i class="fa fa-star" aria-hidden="true"></i>
                            </li>
                            <li class="item__star">
                                <i class="fa fa-star" aria-hidden="true"></i>
                            </li>
                        </ul>
                        <div class="section-price">
                            $255
                        </div>
                    </div>
                </article>

                <article class="item">
                    <div class="item__pic">
                        <a href="#"><img src="img/feature-item2.png" alt=""></a>
                    </div>
                    <div class="item__descr">
                        <div class="item__title">
                            <a href="#" class="section-subtitle">Vaber Jinish Very Stylish</a>
                        </div>
                        <ul class="item__rating">
                            <li class="item__star">
                                <i class="fa fa-star" aria-hidden="true"></i>
                            </li>
                            <li class="item__star">
                                <i class="fa fa-star" aria-hidden="true"></i>
                            </li>
                            <li class="item__star">
                                <i class="fa fa-star" aria-hidden="true"></i>
                            </li>
                            <li class="item__star">
                                <i class="fa fa-star" aria-hidden="true"></i>
                            </li>
                            <li class="item__star">
                                <i class="fa fa-star" aria-hidden="true"></i>
                            </li>
                        </ul>
                        <div class="section-price">
                            $255
                        </div>
                    </div>
                </article>

                <article class="item">
                    <div class="item__pic">
                        <a href="#"><img src="img/feature-item3.png" alt=""></a>
                    </div>
                    <div class="item__descr">
                        <div class="item__title">
                            <a href="#" class="section-subtitle">Vaber Jinish Very Stylish</a>
                        </div>
                        <ul class="item__rating">
                            <li class="item__star">
                                <i class="fa fa-star" aria-hidden="true"></i>
                            </li>
                            <li class="item__star">
                                <i class="fa fa-star" aria-hidden="true"></i>
                            </li>
                            <li class="item__star">
                                <i class="fa fa-star" aria-hidden="true"></i>
                            </li>
                            <li class="item__star">
                                <i class="fa fa-star" aria-hidden="true"></i>
                            </li>
                            <li class="item__star">
                                <i class="fa fa-star" aria-hidden="true"></i>
                            </li>
                        </ul>
                        <div class="section-price">
                            $255
                        </div>
                    </div>
                </article>

                <article class="item">
                    <div class="item__pic">
                        <a href="#"><img src="img/feature-item1.png" alt=""></a>
                    </div>
                    <div class="item__descr">
                        <div class="item__title">
                            <a href="#" class="section-subtitle">Vaber Jinish Very Stylish</a>
                        </div>
                        <ul class="item__rating">
                            <li class="item__star">
                                <i class="fa fa-star" aria-hidden="true"></i>
                            </li>
                            <li class="item__star">
                                <i class="fa fa-star" aria-hidden="true"></i>
                            </li>
                            <li class="item__star">
                                <i class="fa fa-star" aria-hidden="true"></i>
                            </li>
                            <li class="item__star">
                                <i class="fa fa-star" aria-hidden="true"></i>
                            </li>
                            <li class="item__star">
                                <i class="fa fa-star" aria-hidden="true"></i>
                            </li>
                        </ul>
                        <div class="section-price">
                            $255
                        </div>
                    </div>
                </article>

                <article class="item">
                    <div class="item__pic">
                        <a href="#"><img src="img/feature-item2.png" alt=""></a>
                    </div>
                    <div class="item__descr">
                        <div class="item__title">
                            <a href="#" class="section-subtitle">Vaber Jinish Very Stylish</a>
                        </div>
                        <ul class="item__rating">
                            <li class="item__star">
                                <i class="fa fa-star" aria-hidden="true"></i>
                            </li>
                            <li class="item__star">
                                <i class="fa fa-star" aria-hidden="true"></i>
                            </li>
                            <li class="item__star">
                                <i class="fa fa-star" aria-hidden="true"></i>
                            </li>
                            <li class="item__star">
                                <i class="fa fa-star" aria-hidden="true"></i>
                            </li>
                            <li class="item__star">
                                <i class="fa fa-star" aria-hidden="true"></i>
                            </li>
                        </ul>
                        <div class="section-price">
                            $255
                        </div>
                    </div>
                </article>

                <article class="item">
                    <div class="item__pic">
                        <a href="#"><img src="img/feature-item3.png" alt=""></a>
                    </div>
                    <div class="item__descr">
                        <div class="item__title">
                            <a href="#" class="section-subtitle">Vaber Jinish Very Stylish</a>
                        </div>
                        <ul class="item__rating">
                            <li class="item__star">
                                <i class="fa fa-star" aria-hidden="true"></i>
                            </li>
                            <li class="item__star">
                                <i class="fa fa-star" aria-hidden="true"></i>
                            </li>
                            <li class="item__star">
                                <i class="fa fa-star" aria-hidden="true"></i>
                            </li>
                            <li class="item__star">
                                <i class="fa fa-star" aria-hidden="true"></i>
                            </li>
                            <li class="item__star">
                                <i class="fa fa-star" aria-hidden="true"></i>
                            </li>
                        </ul>
                        <div class="section-price">
                            $255
                        </div>
                    </div>
                </article>

                <article class="item">
                    <div class="item__pic">
                        <a href="#"><img src="img/feature-item1.png" alt=""></a>
                    </div>
                    <div class="item__descr">
                        <div class="item__title">
                            <a href="#" class="section-subtitle">Vaber Jinish Very Stylish</a>
                        </div>
                        <ul class="item__rating">
                            <li class="item__star">
                                <i class="fa fa-star" aria-hidden="true"></i>
                            </li>
                            <li class="item__star">
                                <i class="fa fa-star" aria-hidden="true"></i>
                            </li>
                            <li class="item__star">
                                <i class="fa fa-star" aria-hidden="true"></i>
                            </li>
                            <li class="item__star">
                                <i class="fa fa-star" aria-hidden="true"></i>
                            </li>
                            <li class="item__star">
                                <i class="fa fa-star" aria-hidden="true"></i>
                            </li>
                        </ul>
                        <div class="section-price">
                            $255
                        </div>
                    </div>
                </article>

                <article class="item">
                    <div class="item__pic">
                        <a href="#"><img src="img/feature-item2.png" alt=""></a>
                    </div>
                    <div class="item__descr">
                        <div class="item__title">
                            <a href="#" class="section-subtitle">Vaber Jinish Very Stylish</a>
                        </div>
                        <ul class="item__rating">
                            <li class="item__star">
                                <i class="fa fa-star" aria-hidden="true"></i>
                            </li>
                            <li class="item__star">
                                <i class="fa fa-star" aria-hidden="true"></i>
                            </li>
                            <li class="item__star">
                                <i class="fa fa-star" aria-hidden="true"></i>
                            </li>
                            <li class="item__star">
                                <i class="fa fa-star" aria-hidden="true"></i>
                            </li>
                            <li class="item__star">
                                <i class="fa fa-star" aria-hidden="true"></i>
                            </li>
                        </ul>
                        <div class="section-price">
                            $255
                        </div>
                    </div>
                </article>

                <article class="item">
                    <div class="item__pic">
                        <a href="#"><img src="img/feature-item3.png" alt=""></a>
                    </div>
                    <div class="item__descr">
                        <div class="item__title">
                            <a href="#" class="section-subtitle">Vaber Jinish Very Stylish</a>
                        </div>
                        <ul class="item__rating">
                            <li class="item__star">
                                <i class="fa fa-star" aria-hidden="true"></i>
                            </li>
                            <li class="item__star">
                                <i class="fa fa-star" aria-hidden="true"></i>
                            </li>
                            <li class="item__star">
                                <i class="fa fa-star" aria-hidden="true"></i>
                            </li>
                            <li class="item__star">
                                <i class="fa fa-star" aria-hidden="true"></i>
                            </li>
                            <li class="item__star">
                                <i class="fa fa-star" aria-hidden="true"></i>
                            </li>
                        </ul>
                        <div class="section-price">
                            $255
                        </div>
                    </div>
                </article>

            </div>

        </div>
    </section>

<?php require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>