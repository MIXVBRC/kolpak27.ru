<?php

$text = null;
$text2 = null;


$text = $_POST['data'];
//$text2 = $_POST['data'];

if ($text) {
//    $text = str_replace(['<div>', '</div>'], ['',PHP_EOL], $text);
    $text = strip_tags($text);

//    $arText = explode(PHP_EOL, $text);
    $arText = explode(PHP_EOL, $text);

    $arText = array_diff($arText, ['']);

    $result = '<table class="inner-table"><tbody>';

    $result .= '<tr style="background-color: #4891ce; color: #fff;">';
//    $result .= '<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>';
//    $result .= '<td>ACUFEX Pro эргономичная рукоятка</td>';
//    $result .= '<td>ACUFEX стандартная петлевая рукоятка</td>';
//    $result .= '<td>ACUFEX сигарная рукоятка</td>';
//    $result .= '<td>Изображение</td>';
    $result .= '<td>Артикул</td>';
    $result .= '<td>Описание</td>';
    $result .= '</tr>';

    $color = '';
    foreach ($arText as &$data) {

        $data = strip_tags($data);

        if (preg_match('/@[a-zA-Z0-9]+@/',$data, $find)) {
            $color='#'.str_replace('@', '', $find[0]);
            continue;
        }

        if (trim($data)) {
            if ((int)substr($data, 0, 4) <= 0) {
                $result .= '<tr>';
                $result .= '<td  style="background-color: '.$color.';"></td>';
                $result .= '<td colspan="2" class="inner-table5__title">'.trim($data).'</td>';
                $result .= '</tr>';
            } else {
                $result .= '<tr class="inner-table5__item">';

//                $result .= '<td  style="background-color: '.$color.';"></td>';
//                $result .= '<td> </td>';
                $result .= '<td>'.trim(substr($data, 0, 9)).'</td>';
//                $result .= '<td>'.trim(substr($data, 8, 7)).'</td>';
                $result .= '<td>'.trim(substr($data, 9)).'</td>';
//                $result .= '<td>'.trim(substr($data, 7)).'</td>';

                $result .= '</tr>';
            }
        }
    }
    $result .= '</tbody></table>';

    $result = preg_replace("/1{5,}/", ' ', $result);
    echo $result;
}

if ($text2) {
    $text = $text2;

    $text = strip_tags($text);
    $arTable = explode(PHP_EOL, $text);

    $result = '<table class="inner-table"><tbody>';
    $result .= '<tr style="background-color: #4891ce; color: #fff;">';

    $result .= '<td>Артикул</td>';
    $result .= '<td>Описание линейки</td>';
    $result .= '<td>Высота кончика</td>';
    $result .= '<td>Ширина рабочей части</td>';
    $result .= '<td>Ширина кончика</td>';

    $result .= '<td>Название</td>';
    $result .= '<td>Изображение</td>';

    $result .= '</tr>';

    foreach ($arTable as $tr) {

        $arTd = explode('|', $tr);

        $result .= '<tr>';

        foreach ($arTd as $td) {
            $td = trim($td);
            $result .= '<td>'.$td.'</td>';
        }
        $result .= '</tr>';
    }
    $result .= '</tbody></table>';

    echo $result;
}

//if ($text3) {
//    $text = $text2;
//
//    $text = strip_tags($text);
//    $arTable = explode(PHP_EOL, $text);
//
//    $result = '<table class="inner-table"><tbody>';
//    $result .= '<tr style="background-color: #4891ce; color: #fff;">';
//    $result .= '<td>Артикул</td>';
//    $result .= '<td>Название</td>';
//    $result .= '<td>Высота кончика</td>';
//    $result .= '<td>Ширина рабочей части</td>';
//    $result .= '<td>Ширина кончика</td>';
//    $result .= '</tr>';
//
//    foreach ($arTable as $tr) {
//
//        $arTd = explode('|', $tr);
//
//        $result .= '<tr>';
//
//        foreach ($arTd as $td) {
//            $td = trim($td);
//            $result .= '<td>'.$td.'</td>';
//        }
//        $result .= '</tr>';
//    }
//    $result .= '</tbody></table>';
//
//    echo $result;
//}

