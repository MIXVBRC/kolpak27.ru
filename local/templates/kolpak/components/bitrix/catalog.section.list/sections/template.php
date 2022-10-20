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

$strSectionEdit = CIBlock::GetArrayByID($arParams["IBLOCK_ID"], "SECTION_EDIT");
$strSectionDelete = CIBlock::GetArrayByID($arParams["IBLOCK_ID"], "SECTION_DELETE");
$arSectionDeleteParams = array("CONFIRM" => GetMessage('CT_BCSL_ELEMENT_DELETE_CONFIRM'));
?>
<?if ($arResult['SECTIONS']):?>
<div class="sections">
    <div class="sections__list">
        <?foreach ($arResult['SECTIONS'] as $arSection):
            $this->AddEditAction($arSection['ID'], $arSection['EDIT_LINK'], $strSectionEdit);
            $this->AddDeleteAction($arSection['ID'], $arSection['DELETE_LINK'], $strSectionDelete, $arSectionDeleteParams);
            $arSection["PICTURE"]["SRC"] = $arSection["PICTURE"]["SRC"]?$arSection["PICTURE"]["SRC"]:'/no_photo.png';
            ?>

            <a class="sections__item" href="<?=$arSection['SECTION_PAGE_URL']?>" id="<? echo $this->GetEditAreaId($arSection['ID']); ?>">
                <img class="sections__img" src="<?=$arSection['PICTURE']['SRC']?>" alt="<?=$arSection['PICTURE']['ALT']?>">
                <div class="sections__name"><?=$arSection['NAME']?></div>
            </a>

        <?endforeach;?>
    </div>
</div>
<?endif;?>
