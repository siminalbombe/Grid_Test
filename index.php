<?php
session_start();
include 'C:\Users\Simon.hofmann\PhpstormProjects\untitled\connect.php';
//include 'script/select_pdo.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>PHP Test</title>
    <link rel="stylesheet" href="bootstrap_min.css">
</head>

<body>
<p>
<form method="post" action="">
    <?php
    include 'C:\Users\Simon.hofmann\PhpstormProjects\untitled\select_person_types.php';
    ?>
</form>

</p>



</body>
</html>
