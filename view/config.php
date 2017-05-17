<?php
/**
 * Created by PhpStorm.
 * User: simon.hofmann
 * Date: 14/05/2017
 * Time: 01:54
 */
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
    <title>GRID-Config</title>
    <link rel="stylesheet" href="../bootstrap_min.css">
</head>

<body>
<h2>Konfiguration</h2><br>
<div class="center">
    <form action="create.php">
        <input class="button" value="Umfrage erstellen" type="submit"><br>
    </form>
    <form action="analyse.php">
        <input class="button" value="Umfrage analysieren" type="submit">
    </form>
    <form action="showAllGroups.php">
        <input class="button" value="Existierende Umfragen" >
    </form>
    <br>
    <form action="logout.php">
        <input class="button" value="Logout" type="submit">
    </form>

</div>
</body>
</html>
