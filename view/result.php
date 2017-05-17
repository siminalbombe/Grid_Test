<?php
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
    <title>Grid-Teil II</title>
    <link rel="stylesheet" href="../bootstrap_min.css">
</head>

<body>

<h2>Grid - Result</h2>
<div class="divleft">
    Die Umfrage ist beendet.<br>
    Sie können sich im unten dargestellten Diagram ihre Ergebnisse ansehen.<br>
    Ihre Ergebnisse wurden erfasst und gespeichert.<br>
    Sie können diese Seite nun verlassen.
</div>
<hr>
<div id="results">
    <?php
    include '../php/calcResults.php';
    include '../db/uploadResult.php';
    include '../php/diagram.php';
    ?>
</div>
<form action="../index.php" >
    <input type="submit" class="button" style="position: absolute; bottom: 0px;" value="Zur Startseite">
</form>

</body>
</html>