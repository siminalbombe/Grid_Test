<?php
/**
 * Created by PhpStorm.
 * User: simon.hofmann
 * Date: 14/05/2017
 * Time: 19:26
 */
session_start();

include '../db/connect.php';
$select = "SELECT name FROM grid.group";
echo "TEST";
$result = $conn->query($select);
echo "TEST";
while ($row = $result->fetch_assoc()) {
    foreach ($row as $val) {
        echo "<option>".$val."</option>";
    }
}