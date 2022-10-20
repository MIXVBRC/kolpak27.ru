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

<div class="detail">
    <div class="detail__about">
        <div class="detail__img">
            <img src="<?=$arResult["DETAIL_PICTURE"]["SRC"]?>" alt="<?=$arResult["DETAIL_PICTURE"]["ALT"]?>">
        </div>

        <div class="detail__info">

            <?if ($arResult['PROPERTIES']['SPECIFICATIONS']['VALUE']):?>
            <div class="detail__specifications">
                <div class="detail__specifications-title">
                    <h2><?=$arResult['PROPERTIES']['SPECIFICATIONS']['NAME']?></h2>
                </div>
                <div class="detail__specifications-text">
                    <ul>
                        <?foreach ($arResult['PROPERTIES']['SPECIFICATIONS']['VALUE'] as $key=>$value):?>
                        <li>
                            <span class="detail__specifications-text-name"><?=$value?>:</span>
                            <span class="li-dots"></span>
                            <span class="detail__specifications-text-value"><?=$arResult['PROPERTIES']['SPECIFICATIONS']['DESCRIPTION'][$key]?></span>
                        </li>
                        <?endforeach;?>
                    </ul>
                </div>
            </div>
            <?endif;?>

        </div>
    </div>
    <div class="detail__blocks">
        <?if ($arResult["DETAIL_TEXT"]):?>
        <div class="detail__description">
            <div class="detail__description-title">
                <h2>Описание</h2>
            </div>
            <div class="detail__text">
                <?=$arResult["DETAIL_TEXT"]?>

                <?foreach ($arResult['PROPERTIES']['DETAIL_TEXT_IMAGES']['VALUE'] as $key => $src):?>
                    <img src="<?=$src?>" alt="image_<?=$key?>" style="max-width: 100%;">
                <?endforeach?>

            </div>
        </div>
        <?endif;?>
    </div>
</div>
