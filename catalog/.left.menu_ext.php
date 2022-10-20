<?
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

global $APPLICATION;

$aMenuLinksExt = $APPLICATION->IncludeComponent(
    "bitrix:menu.sections",
    "",
    Array(
        "ID" => $_REQUEST["ELEMENT_CODE"],
        "IBLOCK_TYPE" => "catalog",
        "IBLOCK_ID" => "5",
        "SECTION_URL" => "/catalog/#SECTION_CODE_PATH#/",
        "CACHE_TIME" => "3600",
        'DEPTH_LEVEL' => 1
    )
);

$aMenuLinks = array_merge($aMenuLinks, $aMenuLinksExt);
?>
