<?php
/**
 * Created by PhpStorm.
 * User: simon.hofmann
 * Date: 14/05/2017
 * Time: 01:54
 */
session_start();
if(!isset($_SESSION['user'])) {
    die('Bitte zuerst <a href="login.php">einloggen</a>');
}

//Abfrage der Nutzer ID vom Login
$username = $_SESSION['user'];
?>


<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>GRID-Config</title>
    <link rel="stylesheet" href="../bootstrap_min.css">
</head>

<body>
<div align="center">
    <form>
        <input class="button" value="Umfrage erstellen"><br>
        <input class="button" value="Umfrage analysieren">
    </form>
</div>
</body>
</html>
