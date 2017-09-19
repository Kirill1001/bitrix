<? if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();

/**
 * @global CMain $APPLICATION
 * @var array $arParams
 * @var array $arResult
 * @var CatalogSectionComponent $component
 * @var CBitrixComponentTemplate $this
 * @var string $templateName
 * @var string $componentPath
 */

$this->setFrameMode(true);


// номер текущей страницы
$curPage = $arResult["NAV_RESULT"]->NavPageNomer;
// всего страниц - номер последней страницы
$totalPages = $arResult["NAV_RESULT"]->NavPageCount;
// номер постраничной навигации на странице
$navNum = $arResult["NAV_RESULT"]->NavNum;
?>

<?php if($arParams["LOAD_AJAX"] != "Y"):?>
    <div class="products-list">
<?php endif;?>
    <?php foreach ($arResult["ITEMS"] as $arItem): ?>
        <article class="product">
            <div class="product__pic">
                <a href="<?= $arItem["DETAIL_PAGE_URL"]?>"><img src="<?= $arItem["DETAIL_PICTURE"]["SRC"]?>" class="product__img"></a>
            </div>
            <div class="product__descr">
                <div class="product__subtitle">
                    <a href="/catalog/<?= $arItem["DETAIL_PAGE_URL"]?>" class="section-subtitle"><?= $arItem["NAME"]?></a>
                </div>
                <p class="section-descr">
                    <?= $arItem["DETAIL_TEXT"]?>
                </p>

                <div class="section-price product__price">
                    <?= $arItem["CATALOG_PURCHASING_PRICE"]?>
                </div>
                <div><?=$navNum?></div>

                <?php if ($arItem["CATALOG_QUANTITY"] > 0):?>
                    <a href="#" class="product__overlay">add to cart</a>
                <?php else: ?>
                    <a href="#" class="product__overlay">not available</a>
                <?php endif; ?>
            </div>
        </article>
    <?php endforeach;?>
<?php if($arParams["LOAD_AJAX"] != "Y"):?>
    </div>
<?php endif;?>

<?php if($arParams["LOAD_AJAX"] != "Y"):?>
    <?php if($totalPages > 1):?>
        <a href="#" class="products-btn">
            more
        </a>
    <?php endif;?>
    <script>
        $('.products-btn').on('click', function(e) {
            let curPage = 1;
            let loadUrl = location.href;
            if(location.search != ''){
                loadUrl += '&';
            }
            else{
                loadUrl += '?';
            }
            loadUrl  += 'PAGEN_'+ <?=$navNum?> +'=' + (++curPage);
            $.ajax({
                type: "POST",
                url: loadUrl,
                data: {
                    LOAD_AJAX: 'Y'
                },
                success: function(){

                }
            }).done(function(data) {
                $('.products-list').append(data);
            });
            e.preventDefault();
        });
    </script>
<?php endif;?>