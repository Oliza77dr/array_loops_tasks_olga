<?php
/**
 * Created by PhpStorm.
 * User: Olga
 * Date: 6/28/2017
 * Time: 7:41 PM
 */
$x = 10;
$y = 10;
echo "<table>";
$i = 1;
    while ($i<=$x){
        echo "<tr>";
            $j = 1;
            while ($j<=$y){
                echo "<td style='border:solid 1px grey;'>";echo $i*$j;echo "</td>";
                $j++;
            }
        echo "</tr>";
        $i++;
    }
echo "</table>";