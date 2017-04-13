<?php
/**
 * Created by PhpStorm.
 * User: simon.hofmann
 * Date: 31/03/2017
 * Time: 21:12
 */

session_start();

function delete_ID_GKEY_NAME($persons){
    for ($i=0; $i<=2;$i++){
        unset($persons[$i]);
    }
    return $persons;
}

function displayFirstRow($persons){
    echo "<tr>";
    echo "<td colspan=2 id=\"firsttd\"></td>";
    $count = 0;
    foreach ($persons as $item) {
        allTypesInFirstRow($item);
        $count++;
        if ($count>=5){
            echo "</tr>";
            $persons = deleteFirstElements($persons, $count-1);
            return $persons;
        }
    }
    echo "</tr>";

}

function deleteFirstElements ($persons, $number){
    for ($i=0; $i<=$number; $i++){
        array_shift($persons);
    }
    return $persons;
}

function allTypesInFirstRow($type){
    echo "<td>".$type."</td>";
}

function displayAttributes(){

}
$tempAttributes = $_SESSION['attributes'];
$tempPersons = $_SESSION['persons'];
$tempPersons= delete_ID_GKEY_NAME($tempPersons);

echo "<table>";
displayFirstRow($tempPersons);

echo "</table>";

