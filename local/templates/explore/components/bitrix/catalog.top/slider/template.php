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
$this->setFrameMode(true);
?>
<section class="feature">
    <div class="container">
        <h2 class="section-title">
            featured items
        </h2>
        <p class="section-descr feature-descr text-center">
            Let’s see featured items!
        </p>

        <div class="owl-carousel feature-items">
            <?if($arParams["DISPLAY_TOP_PAGER"]):?>
                <?=$arResult["NAV_STRING"]?><br />
            <?endif;?>
            <?foreach($arResult["ITEMS"] as $arItem):?>
                <?
                $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
                $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
                ?>
                <article class="item" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
                    <div class="item__pic">
                        <a href="<?= $arItem["DETAIL_PAGE_URL"]?>"><img src="<?= $arItem["DETAIL_PICTURE"]["SRC"]?>"></a>
                    </div>
                    <div class="item__descr">
                        <div class="item__title">
                            <a href="/catalog/<?= $arItem["DETAIL_PAGE_URL"]?>" class="section-subtitle"><?= $arItem["NAME"]?></a>
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
                            <?= $arItem["CATALOG_PURCHASING_PRICE"]?>
                        </div>

                        <?php if ($arItem["CATALOG_QUANTITY"] > 0): ?>
                            <div>Количество товара - <?= $arItem["CATALOG_QUANTITY"]?></div>
                            <form action="" method="POST">
                                <input type="text" value="1" class="order-input order-input-small" name="order-count">
                                <input type="hidden" value="<?= $arItem['ID']?>" name="order-id" class="product-id">
                                <input type="hidden" value="<?= $arItem['CATALOG_QUANTITY']?>" class="product-quan">
                                <input type="submit" value="Заказать" class="order-btn-small">
                            </form>
                        <?php else: ?>
                            <div>Нет в наличии</div>
                        <?php endif; ?>

                    </div>
                </article>
            <?endforeach;?>
        </div>
    </div>
</section>