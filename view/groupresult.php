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
<div class="div" >
    <?php

    include '../db/uploadGroup.php';
    ?>
</div>
</body>
</html>