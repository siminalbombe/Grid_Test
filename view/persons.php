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

<?php
include 'C:\Users\Simon.hofmann\PhpstormProjects\untitled\php\getAllPersonsFromDB.php';
include  'C:\Users\Simon.hofmann\PhpstormProjects\untitled\php\displayPersonsForUser.php';
$conn->close();
?>

<div align="center">
    <form action="../attributes.php" method="post" >
        <input type="submit" class="button">
    </form>
</div>
</body>
</html>
