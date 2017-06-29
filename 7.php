<?php
/**
 * Created by PhpStorm.
 * User: Olga
 * Date: 6/28/2017
 * Time: 5:53 PM
 */
$arr = array(2, 5, 9, 15, 0, 4);
foreach ($arr as $item){
    if (($item>3)&&($item<10)){
        echo $item."<br/>";
    }
}