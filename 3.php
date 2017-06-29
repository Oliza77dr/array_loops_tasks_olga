<?php
/**
 * Created by PhpStorm.
 * User: Olga
 * Date: 6/28/2017
 * Time: 5:37 PM
 */
$sum = 0;
$arr = array(26, 17, 136, 12, 79, 15);
foreach ($arr as $elem){
    $sum+=$elem*$elem;
}
echo $sum;