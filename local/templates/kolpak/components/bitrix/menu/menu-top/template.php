<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<nav class="menu-top">
    <ul class="menu-top__list">
    <?foreach($arResult as $arItem):?>
        <?if($arItem['SELECTED']):?>
            <li class="menu-top__item"><span class="menu-top__link active"><?=$arItem["TEXT"]?></span></li>
        <?else:?>
            <li class="menu-top__item"><a href="<?=$arItem["LINK"]?>" class="menu-top__link"><?=$arItem["TEXT"]?></a></li>
        <?endif;?>
    <?endforeach?>
    </ul>
    <div class="menu-top__close"><i class="fa fa-xmark"></i></div>
</nav>
