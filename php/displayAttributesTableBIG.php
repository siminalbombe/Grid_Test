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
    echo "<td colspan=2 id=\"firsttd\">test</td>";
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

function displayTableForInput($attributes){
    for ($i=0; $i<=11; $i++){
        echo "<tr>";
        $attributes = displayAttributeItem($attributes);
        displayInputs();
        echo "</tr>";
    }
}

function displayAttributeItem($attributes){
    echo "<td>".array_shift($attributes)."</td>";
    echo "<td>".array_shift($attributes)."</td>";
    return $attributes;
}

function displayInputs(){
    for ($i=0; $i<=4; $i++){
        echo "<td>";
        echo "<input type=\"checkbox\">";
        echo "</td>";
    }
}

//function breaksInAttributes($attributes){
//    for ($i=0; $i<=(sizeof($attributes-1)); $i++){
//        current($attributes) = wordwrap();
//    }
//}

$tempAttributes = $_SESSION['attributes'];

$tempPersons = $_SESSION['persons'];
$tempPersons= delete_ID_GKEY_NAME($tempPersons);


echo "<form action='../view/login.php' method='get'><table>";
$tempPersons = displayFirstRow($tempPersons);
displayTableForInput($tempAttributes);
echo "</table></form>";
