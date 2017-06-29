<?php
/**
 * Created by PhpStorm.
 * User: Olga
 * Date: 6/28/2017
 * Time: 5:56 PM
 */
$arr = array(1, 2, 3, 4, 5, 6, 7, 8, 9);

//использование foreach
$str1 = "";
foreach ($arr as $item){
    $str1.=$item;
    }
echo $str1.' - первая строка, foreach<br/>';

$num = count($arr);
//использование for
$str2 = "";
for ($i=0;$i<$num;$i++){
    $str2.=$arr[$i];
}
echo $str2.' - вторая строка, for<br/>';

//использование while
$str3 = "";
$i=0;
while ($i<$num){
    $str3.=$arr[$i];
    $i++;
}
echo $str2.' - третья строка, while';

