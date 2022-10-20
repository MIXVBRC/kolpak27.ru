<? if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();

$arResult["DETAIL_PICTURE"]["SRC"] = $arResult["DETAIL_PICTURE"]["SRC"]?:'/no_photo.png';

foreach ($arResult['PROPERTIES']['DETAIL_TEXT_IMAGES']['VALUE'] as &$fileId) {
    $fileId = CFile::GetPath($fileId);
}

