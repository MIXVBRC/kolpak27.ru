<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<div class="menu-inner">
    <ul class="menu-inner__list">
    <?foreach($arResult as $arItem):?>
        <?if ($arItem['SELECTED']):?>
            <li class="menu-inner__item active"><span class="menu-inner__link"><?=$arItem["TEXT"]?></span></li>
        <?else:?>
            <li class="menu-inner__item"><a href="<?=$arItem["LINK"]?>" class="menu-inner__link"><?=$arItem["TEXT"]?></a></li>
        <?endif;?>
    <?endforeach?>
    </ul>
</div>