<?php
/**
 * Created by PhpStorm.
 * User: Olga
 * Date: 6/28/2017
 * Time: 10:23 PM
 */
$arr = array();
for ($i=1;$i<=10;$i++) {
    $arr[] = rand(-10, 10);
}
echo "<pre>";
print_r($arr);
echo "</pre>";

$res = 1;
$new_arr = array();
foreach ($arr as $key=>$value){
    if($value>0){
        if($key%2==0){
            $res*=$value;
        } else {
            $new_arr[] = $value;
        }
    }
}
echo "Произведение положительных элементов с четными индексами: " . $res . "<br/>";
echo "Положительные элементы с нечетными индексами:";

echo "<pre>";
print_r($new_arr);
echo "</pre>";