<?php
/**
 * Created by PhpStorm.
 * User: simon.hofmann
 * Date: 31/03/2017
 * Time: 21:12
 */

session_start();
//display table for attributes
function displayTableForAttributes($array){
    $tablemax = 3;
    for ($i=0; $i<=$tablemax; $i++){
        echo "<table>";
        $array = displayAllData($array);
        echo "</table>";
    }
    return $array;
}
function displayAllData($array){
   echo "<tr>";
   echo "<td>".array_shift($array)."</td><td>".array_shift($array)."</td>";
   echo "</tr>";
   return $array;
}

function displayForEach($normal, $opposite){
    foreach ($normal as $val){
        echo "<tr>";
        echo "<td>".$val."</td><td>".array_shift($opposite)."</td>";
        echo "</tr>";
    }
}

$temp = $_SESSION['attributes'];
$temp = displayTableForAttributes($temp, 0);
$temp = displayTableForAttributes($temp, 2);