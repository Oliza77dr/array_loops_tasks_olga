<?php
/**
 * Created by PhpStorm.
 * User: Olga
 * Date: 6/28/2017
 * Time: 7:32 PM
 */
$n = 1000;
$num = 0;
do{
    $n/=2;
    $num++;
} while ($n>50);
echo $num;
echo "<br/>";
echo $n;