<?php
/**
 * Created by PhpStorm.
 * User: simon.hofmann
 * Date: 17/03/2017
 * Time: 10:47
 */


function displayTablefor6Attributes() : void
{
    echo "<table>";
    for ($row=0;$row<=2;$row++) {
        displayRowInTable($row);
    }
    echo "</table>";
}

function displayRowInTable($row)
{
    echo "<tr>";
    for ($index=0;$index<=1;$index++){
        displayFieldInTable($row, $index);
    }
    echo "</tr>";
}

function displayFieldInTable($row, $index)
{
    echo "<td><input type=\"text\" action=\"bigTable.php\" name=\".$row.\"_\".$index\"> </input>";
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
    <title>GRID-Attributes</title>
    <link rel="stylesheet" href="bootstrap_min.css">
</head>

<body>
<h2 align="center">Grid-Umfrage Teil II</h2>
<p>Bitte beschreiben Sie sich in ihrer beruflichen Umgebung angand der folgenden Aussagen mit mindestens 3 bis maximal 6 Adjektiven. </p>

<form>
    1. So bin ich und so möchte ich auch bleiben</br>
    <?php
    displayTablefor6Attributes();
    ?>

    2. So möchte ich nicht werden</br>
    <?php
    displayTablefor6Attributes();
    ?>

    3. Folgende Eigenschaften mag ich an mir selbst nicht</br>
    <?php
    displayTablefor6Attributes();
    ?>

    4. Manchmal wünschte ich mir, ich wäre so</br>
    <?php
    displayTablefor6Attributes();
    ?>
</form>

</body>
</html>



