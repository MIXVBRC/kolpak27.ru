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
<div class="elements">
    <?if($arParams["DISPLAY_TOP_PAGER"]):?>
        <?=$arResult["NAV_STRING"]?>
    <?endif;?>
    <div class="elements__list">
        <?foreach($arResult["ITEMS"] as $arItem):?>
        <?
        $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
        $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
        $arItem["PREVIEW_PICTURE"]["SRC"] = $arItem["PREVIEW_PICTURE"]["SRC"]?$arItem["PREVIEW_PICTURE"]["SRC"]:'/no_photo.png';
        ?>
            <div class="elements__item" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
                <div class="elements__img">
                    <img src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" alt="<?=$arItem["PREVIEW_PICTURE"]["ALT"]?>">
                </div>
                <div class="elements__info">
                    <div class="elements__name">
                        <a class="elements__link" href="<?=$arItem["DETAIL_PAGE_URL"]?>"><?=$arItem["NAME"]?></a>
                    </div>
                    <div class="elements__specifications-text">
                        <ul>
                            <?foreach ($arItem['PROPERTIES']['SPECIFICATIONS']['VALUE'] as $key=>$value):?>
                                <li>
                                    <span class="elements__specifications-text-name"><?=$value?>:</span>
                                    <span class="li-dots"></span>
                                    <span class="elements__specifications-text-value"><?=$arResult['PROPERTIES']['SPECIFICATIONS']['DESCRIPTION'][$key]?></span>
                                </li>
                            <?endforeach;?>
                        </ul>
                    </div>
                    <div class="elements__more"><a href="<?=$arItem["DETAIL_PAGE_URL"]?>">Подробнее</a></div>
                </div>
            </div>
        <?
        endforeach;
        ?>
    </div>
    <?if($arParams["DISPLAY_BOTTOM_PAGER"]):?>
        <?=$arResult["NAV_STRING"]?>
    <?endif;?>
</div>




