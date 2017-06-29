<?php
/**
 * Created by PhpStorm.
 * User: Olga
 * Date: 6/28/2017
 * Time: 9:57 PM
 */
$num = "123";
if (is_numeric($num)){
$l = strlen($num);
$sum = 0;
for ($i=0;$i<$l;$i++){
    $sum+=$num[$i];
}
echo $sum." - это сумма всех цифр в числе ".$num;
} else {
    echo "Необходимо вводить только цифры";
}