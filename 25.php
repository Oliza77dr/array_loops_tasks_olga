<?php
/**
 * Created by PhpStorm.
 * User: Olga
 * Date: 6/28/2017
 * Time: 10:23 PM
 */
$arr = array();
$i=0;
while ($i<=10){
    $arr[] = rand(1,99);
    $i++;
}
echo "<pre>";
print_r($arr);
echo "</pre>";

//поиск максимального элемента
$ind_max = array();//массив индексов элементов с максимальным значением
$max = $arr[0];
foreach ($arr as $key=>$value){
    if ($value>$max) {
        $max = $value;
    }
}
//поиск всех индексов максимальных элементов
    foreach ($arr as $key=>$value){
        if ($value==$max) {
        $ind_max[] = $key;
         }
    }
echo $max." - максимальный элемент<br/>";
//поиск минимального элемента
$ind_min = array();//массив индексов элементов с минимальным значением
$min = $arr[0];
foreach ($arr as $key=>$value){
    if ($value<$min) {
        $min = $value;
    }
}
//поиск всех индексов минимальных элементов
    foreach ($arr as $key=>$value){
        if ($value==$min) {
        $ind_min[] = $key;
        }
    }
echo $min." - минимальный элемент";
//замена максимального и минимального значений
foreach ($ind_max as $x) {
    $arr[$x] = $min;
    }
foreach ($ind_min as $y) {
    $arr[$y] = $max;
    }
//вывод массива
echo "<pre>";
print_r($arr);
echo "</pre>";