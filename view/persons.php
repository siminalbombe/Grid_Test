<?php
session_start();
include '../db/connect.php';
?>


<!DOCTYPE html>
<html lang="de">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>GRID-Persons</title>
    <link rel="stylesheet" href="../bootstrap_min.css">
</head>
<body>
<h2>
    Person Types for specific Group
</h2>
<div class="divleft">
<p>
    <?php
    $text = "Im Folgenden finden sie eine Liste von allgemein charakterisierten Personen.<br>
    Bitte ordnen Sie diesen jeweils eine konkrete, ihnen bekannte Person aus ihrer beruflichen Gegenwart oder Vergangenheit zu.<br>
    Die gewählte Person sollte der gennannten Beschreibung möglichst genau entsprechen.<br>
    Notieren sie den Namen bitte in der jeweiligen Zeile.<br>
    Die Angabe von Personen ist nicht notwendig.<br>
    Diese ist zur ihrer Unterstützung vorhanden.
    </p>
    <p>
    Diese Seite dient ausschließlich ihrer Orientierung.<br>
    Für die Auswertung werden diese nicht benötigt und auch nicht gespeichert.
    </p>";
    echo $text;
    ?>
</div>
<hr>
<div class="divleft">
    <form action="attributes.php" method="get" >
        <?php
        include '../php/getAllPersonsFromDBWithGroupKey.php';
        ?>
        <input type="submit" class="button" value="Umfrage starten"
            <?php
                if ($_SESSION['gkeyfalse'])
                    echo "hidden";
            ?>
        >
    </form>
    <form action='groupkey.html' <?php if($_SESSION['gkeyfalse'] == false) echo "hidden";?>>
        False Group Key entered!<br>
        <input type='submit' value='Zurück' class="button">
    </form>
    <form action="groupkey.html" <?php if(!$_SESSION['gkeyfalse'] == false) echo "hidden";?>>
        <input type="submit" class="button" value="Zurück">
    </form>
</div>



</body>
</html>
