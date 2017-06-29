<?php
/**
 * Created by PhpStorm.
 * User: Olga
 * Date: 6/28/2017
 * Time: 9:10 PM
 */
$arr = array("January","February","March","April","May","June","July","August","September","October","November","December");
$month = date("F");
echo $month;
foreach ($arr as $item){
    if ($item!=$month){
        echo "$item<br/>";
    } else {
        echo "<b>$item</b><br/>";
    }
}