<?php
/**
 * Created by PhpStorm.
 * User: Olga
 * Date: 6/28/2017
 * Time: 11:53 PM
 */

$x = 1;
$y = 10;
echo "<table>";
    for ($i=$x;$i<=$y;$i++){
    echo "<tr>";
        for ($j=$x;$j<=$y;$j++){
        echo "<td style='border:groove;'>";echo $i*$j;echo "</td>";
        }
        echo "</tr>";
    }
    echo "<table>";
