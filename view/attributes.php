<?php
/**
 * Created by PhpStorm.
 * User: simon.hofmann
 * Date: 17/03/2017
 * Time: 10:47
 */

session_start();

$tablenr = 0;

function displayTable($tablenr)
{
    displayTablefor6Attributes($tablenr);
    $tablenr++;
    return $tablenr;
}

function displayTablefor6Attributes($tablenr)
{
    echo "<table>";
    echo "<tr><td>Beschreibung</td><td>Gegenteil</td></tr>";
    for ($row=0;$row<=2;$row++) {
        displayRowInTable($tablenr, $row);
    }
    echo "</table>";
}

function displayRowInTable($tablenr,$row)
{
    echo "<tr>";
    for ($index=0;$index<=1;$index++){
        displayFieldInTable($tablenr, $row, $index);
    }
    echo "</tr>";
}

function displayFieldInTable($tablenr, $row, $index)
{
    $name = $tablenr."_".$row."_".$index;
    echo "<td><input type=\"text\" name=\"$name\" ></td>";
}

?>

<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>GRID-Teil I</title>
    <link rel="stylesheet" href="../bootstrap_min.css">
</head>

<body>
<h2>Grid-Attributes</h2>
<p>Bitte beschreiben Sie sich in ihrer beruflichen Umgebung anhand der folgenden Aussagen mit 3 Adjektiven und ihren Gegenteilen. </p>

<form action="bigTable_0_5.php" method="get">
    <h6>1. So bin ich und so möchte ich auch bleiben</h6>
    <?php
    $tablenr = displayTable($tablenr);
    ?>

    <br>
    <h6>2. So möchte ich nicht werden</h6>
    <?php
    $tablenr = displayTable($tablenr);
    ?>

    <br>
    <h6>3. Folgende Eigenschaften mag ich an mir selbst nicht</h6>
    <?php
    $tablenr = displayTable($tablenr);
    ?>

    <br>
    <h6>4. Manchmal wünschte ich mir, ich wäre so</h6>
    <?php
    $tablenr = displayTable($tablenr);
    ?>
    <input type="submit" value="use this attributes" class="button">
</form>


</body>
</html>