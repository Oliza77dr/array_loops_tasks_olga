<?php
/**
 * Created by PhpStorm.
 * User: Olga
 * Date: 6/28/2017
 * Time: 9:33 PM
 */
$arr = array("Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday");
$day = date("l");
foreach ($arr as $item){
    if ($item==$day){
        echo "<i>$item</i><br/>";
    } else {
        echo $item."<br/>";
    }
}