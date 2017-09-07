<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?if (!empty($arResult)):?>
<ul class="site-link">
<?
foreach($arResult as $arItem):
	if($arParams["MAX_LEVEL"] == 1 && $arItem["DEPTH_LEVEL"] > 1) 
		continue;
?>
    <?if($arItem["ITEM_INDEX"] === 0):?>

        <li class="title"><?=$arItem["TEXT"]?></li>

    <?else:?>

        <li><a href="<?=$arItem["LINK"]?>"><?=$arItem["TEXT"]?></a></li>

    <?endif?>
	
<?endforeach?>

</ul>

<?endif?>