<?php
/**
 * Created by PhpStorm.
 * User: Olga
 * Date: 6/28/2017
 * Time: 8:55 PM
 */
$arr = array(1,2,3,4,5,6,7,8,9);
foreach ($arr as $item){
    if ($item%3==0){
        echo $item."<br/>";
    } else {
        echo $item.", ";
    }
}