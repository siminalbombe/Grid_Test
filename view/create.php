<?php
/**
 * Created by PhpStorm.
 * User: simon.hofmann
 * Date: 15/05/2017
 * Time: 12:51
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
    <title>GRID-Umfrage erstellen</title>
    <link rel="stylesheet" href="../bootstrap_min.css">
</head>

<body>
<h2>Konfiguration</h2><br>
<div class="div" >
    <form action="groupresult.php">
        Geben sie nachfolgend die Personentypen ein, die sie hinzufügen möchten:<br>
        <?php include '../php/createTableFormForGroups.php';?>
        <br>
        <input class="button" value="Diese Umfrage erstellen" type="submit"><br>
    </form>
    <br>

    <form action="../view/config.php">
        <input class="button" type="submit" value="Zurück">
    </form>
</div>
</body>
</html>
