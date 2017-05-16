<?php
/**
 * Created by PhpStorm.
 * User: simon.hofmann
 * Date: 02/05/2017
 * Time: 10:24
 */

session_start();

function calcKonkordanz (){
    $array = array();
    for ($column=0; $column<5; $column++){
        $temp = iterateThroughForm($column,0,2, true);
        $temp += iterateThroughForm($column,3,5, false);
        $array[] = $temp;
    }
    return $array;
}

function calcDiskordanz() {
    $array = array();
    for ($column=0; $column<5; $column++){
        $temp = iterateThroughForm($column,6,8, true);
        $temp += iterateThroughForm($column,9,11, false);
        $array[] = $temp;
    }
    return $array;
}

function iterateThroughForm ($column ,$startRow, $endRow, $checked){
    $temp = 0;
    for ($row=$startRow; $row<=$endRow; $row++){
        $cell = $row.$column;
        if ($checked && $_GET[$cell]) {
            $temp++;
        }
        if (!$checked && !$_GET[$cell]){
            $temp++;
        }
    }
    return $temp;

}

$temp1 = calcKonkordanz();
$temp2 = calcDiskordanz();

$tempKonkordanz = $_SESSION['Konkordanz'];
$tempDiskordanz = $_SESSION['Diskordanz'];

foreach ($temp1 as $item){
    $tempKonkordanz[] = $item;
}
foreach ($temp2 as $item){
    $tempDiskordanz[] = $item;
}

$_SESSION['Konkordanz'] = $tempKonkordanz;
$_SESSION['Diskordanz'] = $tempDiskordanz;

echo "Konkordanz: ";
print_r($_SESSION['Konkordanz']);
echo "<br>Diskordanz: ";
print_r($_SESSION['Diskordanz']);
echo "<br>";