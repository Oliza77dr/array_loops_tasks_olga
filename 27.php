<?php
/**
 * Created by PhpStorm.
 * User: Olga
 * Date: 6/28/2017
 * Time: 11:24 PM
 */
$colors = array('red','yellow','blue','gray','maroon','brown','green');
$row = 15;
$col = 14;

$n_colors = count($colors);
echo "<table>";
for ($i=0;$i<$row;$i++){
    echo "<tr>";
    for ($j=0;$j<$col;$j++){
        echo "<td style='background-color:".$colors[rand(0,$n_colors-1)].";'>";
        echo rand(100,1000);
        echo "</td>";
    }
    echo "</tr>";
}
echo "</table>";