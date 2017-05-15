<?php
session_start();
include 'C:\Users\Simon.hofmann\PhpstormProjects\untitled\db\connect.php';

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
<p>
    Im Folgenden finden sie eine Liste von allgemein charakterisierten Personen.<br>
    Bitte ordnen Sie diesen jeweils eine konkrete, ihnen bekannte Person aus ihrer beruflichen Gegenwart oder Vergangenheit zu.<br>
    Die gewählte Person sollte der gennannten Beschreibung möglichst genau entsprechen.<br>
    Notieren sie den Namen bitte in der jeweiligen Zeile.<br>
    Die Angabe von Personen ist nicht notwendig.<br>
    Diese ist zur ihrer Unterstützung vorhanden.
</p>
<p>
    Diese Seite dient ausschließlich ihrer Orientierung.<br>
    Für die Auswertung werden diese nicht benötigt und auch nicht gespeichert.
</p>

<div class="div">
    <form action="attributes.php" method="get" >
        <?php
        include 'C:\Users\Simon.hofmann\PhpstormProjects\untitled\php\getAllPersonsFromDBWithGroupKey.php';
        ?>
        <input type="submit" class="button">
    </form>
</div>



</body>
</html>
