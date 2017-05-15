<?php
/**
 * Created by PhpStorm.
 * User: simon.hofmann
 * Date: 14/05/2017
 * Time: 18:38
 */

session_start();
?>

<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>GRID-Analyse</title>
    <link rel="stylesheet" href="../bootstrap_min.css">
</head>

<body>
<h2>Analyse</h2>
<div align="center">
    <form>
        Bitte eine Probandengruppe auswählen:<br>
        <select>
            <?php
            include '../php/getAllGroupsForSelect.php';
            ?>
        </select>
        <input type="submit" value="submit">
    </form>
    <table border="1">
        <tr><td hidden></td><td>Varianz</td><td>Mittelwert</td></tr>

        <?php

        ?>
    </table>

</div>
</body>
</html>