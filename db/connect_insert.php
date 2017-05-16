<?php
/**
 * Created by PhpStorm.
 * User: simon.hofmann
 * Date: 15/05/2017
 * Time: 19:15
 */

$conn = new mysqli("localhost", "root", "mysql", "grid"); //connection string
if ($conn->connect_errno) {
    echo "Failed to connect to MySQL: (" . $conn->connect_errno . ") " . $conn->connect_error;
}