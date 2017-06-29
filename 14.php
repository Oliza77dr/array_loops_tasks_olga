<?php
/**
 * Created by PhpStorm.
 * User: Olga
 * Date: 6/28/2017
 * Time: 8:07 PM
 */
$arr = array(4, 2, 5, 19, 13, 0, 10);
$e = 4;
$pres = false;
foreach ($arr as $item){
    if ($item==$e){
        $pres = true;
        break;
    }
}
if ($pres == true){
    echo "Есть";
} else {
    echo "Нет";
}


