<?php
/**
 * Created by PhpStorm.
 * User: Olga
 * Date: 6/28/2017
 * Time: 10:11 PM
 */
$s = "442158755745";
$number = 7;
$l = strlen($s);
$count = 0;
for ($i=0;$i<$l;$i++){
    if ($s[$i]==$number){
        $count++;
    }
}
echo "Число $number встречается $count раз(а)";
