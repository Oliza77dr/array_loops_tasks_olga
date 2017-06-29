<?php
/**
 * Created by PhpStorm.
 * User: Olga
 * Date: 6/28/2017
 * Time: 5:48 PM
 */
$en = array();
$ru = array();
$arr = array('green'=>'зеленый', 'red'=>'красный','blue'=>'голубой');
foreach ($arr as $k_en=>$k_ru){
    $en[]=$k_en;
    $ru[]=$k_ru;
}
echo "<pre>";
print_r($en);
echo "</pre>";

echo "<pre>";
print_r($ru);
echo "</pre>";