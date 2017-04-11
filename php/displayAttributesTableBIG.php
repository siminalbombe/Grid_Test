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
        $array = displayAllData($array);
    }
    return $array;
}
function displayAllData($array){

   $row = 2;
   for ($i=0; $i<=$row; $i++){
       echo "<tr>";
       echo "<td>".array_shift($array)."</td><td>".array_shift($array)."</td>";
       echo "</tr>";
   }

   echo "</tr>";
   return $array;
}

function test($var, $count){
    if ($count <= 2){
        return;
    }
    if ($var==""){
        return;
    }
    echo $var."<br>";
}

$tempAttributes = $_SESSION['attributes'];
$tempPersons = $_SESSION['persons'];
$count = 0;
foreach ($tempPersons as $val){
    test($val, $count);
    $count++;
}


echo "<table>";
$tempAttributes = displayTableForAttributes($tempAttributes);
echo "</table>";
