<?php
session_start();
/**
 * Created by PhpStorm.
 * User: simon.hofmann
 * Date: 21/03/2017
 * Time: 00:52
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
    <title>GRID-Login</title>
    <link rel="stylesheet" href="../../bootstrap_min.css">
</head>

<body>

<h2>Login Page</h2>

<div class="center">
    <form action="check.php" method="get">
        Username<br>
        <input type="text" name="username"><br>
        Password<br>
        <input type="password" name="password"><br><br>
        <input type="submit" value="Login" class="button">
    </form>
    <br>
    <form action="../../index.php">
        <input type="submit" value="Zurück" class="button">
    </form>
</div>

</body>
</html>