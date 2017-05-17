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
        echo "<tr><td style=\"min-width:200px\">".$item."</td></tr>";

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


/*echo "<b>Akzeptieren:</b> ";
print_r($akzeptieren);

echo "<b>Kritisieren:</b> ";
print_r($kritisieren);

echo "<b>Meiden:</b> ";
print_r($meiden);

echo "<br>AUFSUCHEN: ";
print_r($aufsuchen);*/

include 'showResult.php';

?>



<div class="center">
<table>
    <tbody>
    <tr>
        <td><b>Kritisieren</b>
            <table border="1">
                <?php displayAttributesInDiagram($kritisieren);?>
            </table>
        </td>
        <td></td>
        <td><b>Akzeptieren</b>
            <table border="1">
                <?php displayAttributesInDiagram($akzeptieren);?>
            </table>
        </td>
    </tr>
    <tr>
        <td></td>
        <td><img src="../img/Handlungstendenzen.png"></td>
        <td></td>
    </tr>
    <tr>
        <td>
            <table border="1"><b>Meiden</b>
                <?php displayAttributesInDiagram($meiden);?>
            </table>
        </td>
        <td></td>
        <td>
            <table border="1"><b>Aufsuchen</b>
                <?php displayAttributesInDiagram($aufsuchen);?>
            </table>
        </td>
    </tr>
    </tbody>
</table>
</div>