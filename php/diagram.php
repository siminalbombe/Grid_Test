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
    echo "<br>ATTRIBUTES (STRIPPED): ";
    print_r($necessaryAttributes);
    echo "<br>";
    return $necessaryAttributes;
}

function stripArray($all, $stripcount)
{
    //Delete first unnecessary attributes
    for ($i = 0; $i <= $stripcount - 1; $i++) {
        array_shift($all);
    }
    echo "<br>ATTRIBUTES (STRIPPED-FIRST): ";
    print_r($all);
    //Delete last unnecessary attributes
    while (count($all) > 6){
        array_pop($all);
    }
    echo "<br>ATTRIBUTES (STRIPPED-LAST): ";
    print_r($all);
    return $all;
}

function concatArray($temp, $array){
    foreach ($temp as $item){
        $array[] = $item;
    }
    return $array;
}

$attributes = $_SESSION['attributes'];
$akzeptieren = array();
$aufsuchen = array();
$meiden = array();
$kritisieren = array();

echo "ATTRIBUTES: ";
print_r($attributes);

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
                <li>1</li>
                <li>2</li>
                <li>3</li>
            </ul>
        </td>
        <td></td>
        <td><b>Akzeptieren</b>
            <ul>
                <li>4</li>
                <li>5</li>
                <li>6</li>
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
                <li>7</li>
                <li>8</li>
                <li>9</li>
            </ul>
        </td>
        <td></td>
        <td>
            <ul><b>Aufsuchen</b>
                <li>10</li>
                <li>11</li>
                <li>12</li>
            </ul>
        </td>
    </tr>
    </tbody>
</table>
</div>