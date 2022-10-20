<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<div class="menu-bottom">
    <ul class="menu-bottom__list">
    <?foreach($arResult as $arItem):?>
        <?if($arItem['SELECTED']):?>
            <li class="menu-bottom__item"><span class="menu-bottom__link active"><?=$arItem["TEXT"]?></span></li>
        <?else:?>
            <li class="menu-bottom__item"><a href="<?=$arItem["LINK"]?>" class="menu-bottom__link"><?=$arItem["TEXT"]?></a></li>
        <?endif;?>
    <?endforeach?>
    </ul>
</div>
