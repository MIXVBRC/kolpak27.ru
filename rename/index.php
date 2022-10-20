<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Title");
?>
<?

$arWords = [
    'Шестигранный разъем' => 'Гексоганальное отверстие',
    'Двойное отверстие' => 'Комбинированное отверстие',
    'двойное отверстие' => 'комбинированное отверстие',
    'с двумя отверстиями' => 'комбинированное отверстие',
    'Торкс драйв' => 'Stardrive',
    'торкс драйв' => 'stardrive',
    'Торксдрайв' => 'Stardrive',
    'торксдрайв' => 'stardrive',
    'Torxdrive' => 'Stardrive',
    'torxdrive' => 'stardrive',
    'торкс' => 'stardrive',
    'Стопорный' => 'Блокируемый',
    'стопорный' => 'блокируемый',
    'Cortex' => 'кортикальный',
    'cortex' => 'кортикальный',
    'CORTEX' => 'кортикальный',
    'Половинная резъба' => 'Частичная резъба',
    'Чистый титан' => 'Титан',
    'Отверстие головки' => 'Отверстия в Т образном расширении',
    'Фиксирующая' => 'Блокируемая',
    'фиксирующая' => 'блокируемая',
    'Блокирующая' => 'Блокируемая',
    'блокирующая' => 'блокируемая',
    'запорная' => 'блокируемая',
    'Запирающая' => 'Блокируемая',

    ', торкс, саморез' => '',
    ', квадратный, саморез' => '',
    '-Mini' => '',
    '-Мини-' => ' ',
    '-Мини' => '',
    '-мини-' => ' ',
    '-мини' => '',
    ' Arc' => '',
    ' дуга' => '',
    ', саморез, Stardrive' => '',
    ' адаптера' => '',
    ' образного' => '',
    ' образной адаптации' => '',

    'H-образная ' => 'H-',
    'H-' => 'H-образная ',

    'L-образная ' => 'L-',
    'L-' => 'L-образная ',

    'Т-образная ' => 'Т-',
    'Т-' => 'Т-образная ',

    'Y-образная ' => 'Y-',
    'Y-' => 'Y-образная ',

    'U-образная ' => 'U-',
    'U-' => 'U-образная ',

    'n-образная ' => 'n-',
    'n-' => 'n-образная ',
    'n ' => 'n-образная ',
];


CModule::IncludeModule('iblock');
$dbElements = \Bitrix\Iblock\ElementTable::getList([
    'filter' => [
        'IBLOCK_ID' => 5,
    ],
    'select' =>  ['ID','NAME'],
])->fetchAll();

//foreach ($dbElements as &$element) {
//    foreach ($arWords as $a => $b) {
//        $element['NAME'] = str_replace($a, $b, $element['NAME']);
//    }
//}

$allElems = $dbElements;

$arElementsId = [];

foreach ($dbElements as $element) {
    $arElementsId[] = $element['ID'];
}

$dbElements = CIBlockElement::GetList([],
    [
        'IBLOCK_ID' => 5,
    ],
    false, false,
    [
        'ID',
        'NAME',
        'PROPERTY_SPECIFICATIONS'
    ]
);

$arProperties = [];

foreach ($arElementsId as $elementId) {
    $dbProperty = CIBlockElement::GetProperty(5, $elementId, [], ['CODE'=>'SPECIFICATIONS']);
    while($arProperty = $dbProperty->Fetch()) {

//        foreach ($arWords as $a => $b) {
//            $arProperty['DESCRIPTION'] = str_replace($a, $b, $arProperty['DESCRIPTION']);
//            $arProperty['VALUE'] = str_replace($a, $b, $arProperty['VALUE']);
//        }
        $arProperties[$elementId][] = [
            'VALUE' => $arProperty['VALUE'],
            'DESCRIPTION' => $arProperty['DESCRIPTION'],
            'VALUE_ID' => $arProperty['PROPERTY_VALUE_ID']
        ];
    }
}

$arElementsRenamed = [];

foreach ($allElems as $element){

    pre('ID: ' . $element['ID']);
    pre($element['NAME']);
    pre('Характеристики:');
    $arElementsRenamed[$element['ID']]['NAME'] = $element['NAME'];
    foreach ($arProperties[$element['ID']] as $property) {
        pre('    ' . $property['VALUE'] . ': ' . trim($property['DESCRIPTION']));

        $arElementsRenamed[$element['ID']]['SPECIFICATIONS'][] = [
            'VALUE' => $property['VALUE'],
            'DESCRIPTION' => $property['DESCRIPTION']
        ];
    }
    pre('<br>');
    pre('---------------------------------------------------------------');
    pre('<br>');


}

//pre($arElementsRenamed);

//$CIBlockElement = new CIBlockElement;
//
//foreach ($arElementsRenamed as $id => $elementRenamed) {
//
//    $result = $CIBlockElement->Update($id, [
//        'PROPERTY_VALUES'=> [
//            'SPECIFICATIONS' => $elementRenamed['SPECIFICATIONS']
//        ],
//        'NAME' => $elementRenamed['NAME'],
//    ]);
//
//    if ($result) {
//        pre($id.': true');
//    } else {
//        pre($id.': false');
//    }
//
//}

?>

    <br>
    <br>
    <br>
    <br>
    <br>



<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>