<?php
/**
 * Created by PhpStorm.
 * User: simon.hofmann
 * Date: 13/05/2017
 * Time: 21:23
 */
session_start();

$username = $_GET['username'];
$password = $_GET['password'];

$statement = $pdo->prepare("SELECT username FROM grid.Admin WHERE username = :username");
echo "TEST";
/*
$result = $statement->execute(array('username' => $username));
$user = $statement->fetch();

//Überprüfung des Passworts
if (password_verify($password, $user['login'])) {
    $_SESSION['userid'] = $user['id'];
    die('Login erfolgreich. Weiter zu <a href="geheim.php">internen Bereich</a>');
} else {
    $errorMessage = "E-Mail oder Passwort war ungültig<br>";
}


*/