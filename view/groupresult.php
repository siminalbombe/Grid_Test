<?php
/**
 * Created by PhpStorm.
 * User: simon.hofmann
 * Date: 16/05/2017
 * Time: 13:30
 */
session_start();
include '../php/checkforlogin.php';

?>
<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>GRID-Erstellte Umfrage</title>
    <link rel="stylesheet" href="../bootstrap_min.css">
</head>

<body>
<h2>Erstellte Umfrage</h2><br>
<div class="divleft" >
    <?php
    include '../php/checkValidInput.php';
    if ($_SESSION['invalidInput']){
        echo "Die Eingaben sind nicht für die Datenbank zulässig.<br> Vermeiden sie Ausdrücke wie DROP, etc. (SQL-Befehle).";
        echo "<form action='create.php'><input type='submit' class='button' value='Zurück'></form>";
    }
    else {
        include '../db/uploadGroup.php';
    }
    ?>
    <form action="config.php">
        <input type="submit" value="Zurück" class="button">
    </form>
</div>
</body>
</html>