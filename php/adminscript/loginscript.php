<?php
/**
 * Created by PhpStorm.
 * User: simon.hofmann
 * Date: 13/05/2017
 * Time: 21:23
 */
session_start();

$username = (string)$_GET['username'];
$password = (string)$_GET['password'];
$dbpassword = null;

$select = "SELECT username, login FROM grid.admin where username='".$username."'";

$result = $conn->query($select);
while ($row = $result->fetch_assoc()) {
    $dbpassword = $row['login'];
}
echo "<div class='center'>";
if (password_verify($password, $dbpassword) == true){
    $_SESSION['user'] = $username;
    echo "<h2>Login</h2>";
    die('<p>Login erfolgreich.</p> <a href="config.php">Weiter zu Config.php</a>');
}
else{
    echo "Invalid input<br>Please try again!";
    echo "<form action=\"login.php\"><input type='submit' value='Go back' class='button'></form>";
}
echo "</div>";