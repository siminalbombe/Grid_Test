<?php
/**
 * Created by PhpStorm.
 * User: simon.hofmann
 * Date: 15/05/2017
 * Time: 19:37
 */
session_start();

function getEverySecond($all, $stripcount){
    $array = stripArray($all, $stripcount);
    $counter=0;
    $necessaryAttributes = array();
    foreach ($array as $item){
        if ($counter % 2 === 0 && $counter <= 5){
            $necessaryAttributes[] = $item;
        }
        $counter++;
    }
    echo "<br>";
    return $necessaryAttributes;
}

function stripArray($all, $stripcount)
{
    //Delete first unnecessary attributes
    for ($i = 0; $i <= $stripcount - 1; $i++) {
        array_shift($all);
    }
    //Delete last unnecessary attributes
    while (count($all) > 6){
        array_pop($all);
    }
    return $all;
}

function concatArray($temp, $array){
    foreach ($temp as $item){
        $array[] = $item;
    }
    return $array;
}

function displayAttributesInDiagram($attributes){
    foreach ($attributes as $item){
        echo "<li>".$item."</li>";

    }
}

$attributes = $_SESSION['attributes'];
$akzeptieren = array();
$aufsuchen = array();
$meiden = array();
$kritisieren = array();

//AKZEPTIEREN
$akzeptieren = getEverySecond($attributes,0);
$temp = getEverySecond($attributes,7);
$akzeptieren = concatArray($temp, $akzeptieren);

//KRITISIEREN
$kritisieren = getEverySecond($attributes,12);
$temp = getEverySecond($attributes,19);
$kritisieren = concatArray($temp, $kritisieren);

//MEIDEN
$meiden = getEverySecond($attributes,6);
$temp = getEverySecond($attributes,1);
$meiden = concatArray($temp, $meiden);

//AUFSUCHEN
$aufsuchen = getEverySecond($attributes,18);
$temp = getEverySecond($attributes,13);
$aufsuchen = concatArray($temp, $aufsuchen);


echo "<b>Akzeptieren:</b> ";
print_r($akzeptieren);

echo "<b>Kritisieren:</b> ";
print_r($kritisieren);

echo "<b>Meiden:</b> ";
print_r($meiden);

echo "<br>AUFSUCHEN: ";
print_r($aufsuchen);
?>



<div align="center">
<table>
    <tbody>
    <tr>
        <td><b>Kritisieren</b>
            <ul>
                <?php displayAttributesInDiagram($kritisieren);?>
            </ul>
        </td>
        <td></td>
        <td><b>Akzeptieren</b>
            <ul>
                <?php displayAttributesInDiagram($akzeptieren);?>
            </ul>
        </td>
    </tr>
    <tr>
        <td></td>
        <td><img src="../img/Handlungstendenzen.png"></td>
        <td></td>
    </tr>
    <tr>
        <td>
            <ul><b>Meiden</b>
                <?php displayAttributesInDiagram($meiden);?>
            </ul>
        </td>
        <td></td>
        <td>
            <ul><b>Aufsuchen</b>
                <?php displayAttributesInDiagram($aufsuchen);?>
            </ul>
        </td>
    </tr>
    </tbody>
</table>
</div>