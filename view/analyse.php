<?php
/**
 * Created by PhpStorm.
 * User: simon.hofmann
 * Date: 14/05/2017
 * Time: 18:38
 */

session_start();
include "../php/checkforlogin.php";
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
<div class="center">
    <form>
        Bitte eine Probandengruppe auswählen:<br>
        <select name="groupname">
            <?php
            include '../php/getAllGroupsForSelect.php';
            ?>
        </select>
        <br>
        <br>
        <input type="submit" value="submit" class="button">
    </form>
    <br>

    <table border="1">
        <th style="visibility: hidden"></th> <th colspan="2" style="text-align: center">Mittelwert</th>
        <tr><td>Personentypen</td><td>Konkordanz</td><td>Diskordanz</td></tr>

        <?php
            include '../php/calcStatistics.php';
        ?>
    </table>
    <br>
    <form action="config.php">
        <input class="button" value="Zurück" type="submit">
    </form>
</div>
</body>
</html>