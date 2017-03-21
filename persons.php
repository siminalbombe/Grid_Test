<?php
/**
 * Created by PhpStorm.
 * User: simon.hofmann
 * Date: 22/03/2017
 * Time: 00:22
 */

function createTable(){

}

function checkForNullsIn($result){

}

function getAllPersonTypesForSpecificGroup(){

    //get all types from database
    //call "checkForNullIn" to delete all Null-values

}
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
    <link rel="stylesheet" href="bootstrap_min.css">
</head>
<body>
<h2>
    Person Types for specific Group
</h2>

<?php
getAllPersonTypesForSpecificGroup();
createTable();

?>
<div align="center">
    <form action="attributes.php" method="post" >
        <input type="submit" class="button">
    </form>
</div>
</body>
</html>