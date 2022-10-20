<?

function pre($data) {
    echo '<pre>';
    print_r($data);
    echo '</pre>';
}

AddEventHandler("iblock", "OnBeforeIBlockSectionAdd", "OnBeforeIBlockElementAddHandler");

\Bitrix\Main\Loader::includeModule('iblock');

function OnBeforeIBlockElementAddHandler(&$arFields)
{
    $arFields['CODE'] = $arFields['CODE'].'-'.rand(0,10000);
    return $arFields;
}
