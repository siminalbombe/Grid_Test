<?php
$conn = new mysqli("localhost", "root", "mysql", "test"); //connection string
if ($conn->connect_errno) {
    echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}
echo "<p style=\"text-align: center\">Succesfully connected! </p>";

