<?php
/**
 * Created by PhpStorm.
 * User: Olga
 * Date: 6/28/2017
 * Time: 5:07 PM
 */
$sum = 0;
$arr = array(1, 20, 15, 17, 24, 35);
foreach ($arr as $elem){
    $sum+=$elem;
}
echo $sum;