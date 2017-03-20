<?php
/**
 * Created by PhpStorm.
 * User: simon.hofmann
 * Date: 17/03/2017
 * Time: 10:47
 */


function displayRowInTable(){
    echo    "<tr><td><input type=\"text\"> </input></td><td><input type=\"text\"> </input></td></tr>";
}
function displayTable(){
    echo "<table>";
    for ($i=0;i<=2;$i++) {
        displayRowInTable();
    }
    echo "</table>";
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

<form>
    1. So bin ich und so möchte ich auch bleiben</br>
    <?php
    displayTable();
    ?>

    2. So möchte ich nicht werden</br>
    <?php
    displayTable();
    ?>

    3. Folgende Eigenschaften mag ich an mir selbst nicht</br>
    <?php
    displayTable();
    ?>

    4. Manchmal wünschte ich mir, ich wäre so</br>
    <?php
    displayTable();
    ?>
</form>

</body>
</html>



