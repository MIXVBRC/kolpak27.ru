<?php
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

/**
 * @global CMain $APPLICATION
 */

global $APPLICATION;

//delayed function must return a string
if(empty($arResult))
	return "";

$strReturn = '';

//we can't use $APPLICATION->SetAdditionalCSS() here because we are inside the buffered function GetNavChain()
$css = $APPLICATION->GetCSSArray();
if(!is_array($css) || !in_array("/bitrix/css/menu-top/font-awesome.css", $css))
{
	$strReturn .= '<link href="'.CUtil::GetAdditionalFileURL("/bitrix/css/menu-top/font-awesome.css").'" type="text/css" rel="stylesheet" />'."\n";
}

$strReturn .= '<div class="breadcrumbs" itemprop="http://schema.org/breadcrumb" itemscope itemtype="http://schema.org/BreadcrumbList"><a href="/" title="Главная" itemprop="name" class="breadcrumbs__item">Главная</a>';

$itemSize = count($arResult);
for($index = 0; $index < $itemSize; $index++)
{
	$title = htmlspecialcharsex($arResult[$index]["TITLE"]);

	if($arResult[$index]["LINK"] <> "" && $index != $itemSize-1)
	{
		$strReturn .= '<a href="'.$arResult[$index]["LINK"].'" title="'.$title.'" itemprop="name" class="breadcrumbs__item"><i class="fa fa-angle-right"></i>'.$title.'</a>';
	}
	else
	{
		$strReturn .= '<div class="breadcrumbs__item"><i class="fa fa-angle-right"></i>'.$title.'</div>';
	}
}

$strReturn .= '</div>';

return $strReturn;
