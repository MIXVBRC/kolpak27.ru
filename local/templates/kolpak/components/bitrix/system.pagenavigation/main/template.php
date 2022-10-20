<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

/** @var array $arParams */
/** @var array $arResult */
/** @var CBitrixComponentTemplate $this */

$this->setFrameMode(true);

if(!$arResult["NavShowAlways"])
{
	if ($arResult["NavRecordCount"] == 0 || ($arResult["NavPageCount"] == 1 && $arResult["NavShowAll"] == false))
		return;
}

$strNavQueryString = ($arResult["NavQueryString"] != "" ? $arResult["NavQueryString"]."&amp;" : "");
$strNavQueryStringFull = ($arResult["NavQueryString"] != "" ? "?".$arResult["NavQueryString"] : "");

$colorSchemes = array(
	"green" => "bx-green",
	"yellow" => "bx-yellow",
	"red" => "bx-red",
	"blue" => "bx-blue",
);
if(isset($colorSchemes[$arParams["TEMPLATE_THEME"]]))
{
	$colorScheme = $colorSchemes[$arParams["TEMPLATE_THEME"]];
}
else
{
	$colorScheme = "";
}
?>

<div class="pagination <?=$colorScheme?>">
	<div class="pagination__body">
		<ul class="pagination__list">


        <?if ($arResult["NavPageNomer"] > 1):?>
            <li class="pagination__item"><a class="pagination__link" href="<?=$arResult["sUrlPath"]?><?=$strNavQueryStringFull?>">1</a></li>
        <?else:?>
            <li class="pagination__item"><div class="pagination__link pagination__active">1</div></li>
        <?endif?>

        <?
        $arResult["nStartPage"]++;
        while($arResult["nStartPage"] <= $arResult["nEndPage"]-1):
        ?>
            <?if ($arResult["nStartPage"] == $arResult["NavPageNomer"]):?>
                <li class="pagination__item"><div class="pagination__link pagination__active"><?=$arResult["nStartPage"]?></div></li>
            <?else:?>
                <li class="pagination__item"><a class="pagination__link" href="<?=$arResult["sUrlPath"]?>?<?=$strNavQueryString?>PAGEN_<?=$arResult["NavNum"]?>=<?=$arResult["nStartPage"]?>"><?=$arResult["nStartPage"]?></a></li>
            <?endif?>
            <?$arResult["nStartPage"]++?>
        <?endwhile?>

        <?if($arResult["NavPageNomer"] < $arResult["NavPageCount"]):?>
            <?if($arResult["NavPageCount"] > 1):?>
                <li class="pagination__item"><a class="pagination__link" href="<?=$arResult["sUrlPath"]?>?<?=$strNavQueryString?>PAGEN_<?=$arResult["NavNum"]?>=<?=$arResult["NavPageCount"]?>"><?=$arResult["NavPageCount"]?></a></li>
            <?endif?>
        <?else:?>
            <?if($arResult["NavPageCount"] > 1):?>
                <li class="pagination__item"><div class="pagination__link pagination__active"><?=$arResult["NavPageCount"]?></div></li>
            <?endif?>

        <?endif?>


		</ul>
		<div style="clear:both"></div>
	</div>
</div>
