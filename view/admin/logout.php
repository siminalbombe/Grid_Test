<?php
/**
 * Created by PhpStorm.
 * User: simon.hofmann
 * Date: 14/05/2017
 * Time: 09:36
 */


?>


<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>GRID-Logout</title>
    <link rel="stylesheet" href="../../bootstrap_min.css">
</head>

<body>
<h2>Logout</h2>
<div class="center">

    <?php

    session_start();
    session_destroy();

    echo "<p>Logout erfolgreich</p>";
    ?>
    <a href="../../index.php">Weiter zur Startseite</a>
</div>

</body>
</html>