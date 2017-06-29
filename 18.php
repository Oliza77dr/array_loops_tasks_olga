<?php
/**
 * Created by PhpStorm.
 * User: Olga
 * Date: 6/28/2017
 * Time: 9:26 PM
 */
$arr = array("Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday");
foreach ($arr as $item){
    if (($item=="Sunday")||($item=="Saturday")){
        echo "<b>$item</b><br/>";
    } else {
        echo $item."<br/>";
    }
}