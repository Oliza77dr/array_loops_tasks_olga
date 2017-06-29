<?php
/**
 * Created by PhpStorm.
 * User: Olga
 * Date: 6/28/2017
 * Time: 5:44 PM
 */
$arr = array('Коля' => '200', 'Вася' => '300', 'Петя' => '400');
foreach($arr as $name=>$sum){
    echo $name." - зарплата ".$sum." долларов <br/>";
}