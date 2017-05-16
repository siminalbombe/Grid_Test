<?php
/**
 * Created by PhpStorm.
 * User: simon.hofmann
 * Date: 14/05/2017
 * Time: 19:26
 */
session_start();

include '../db/connect.php';

$persontypes = array();
$select = "SELECT ID,name FROM grid.group";
$result = $conn->query($select);
while ($row = $result->fetch_assoc()) {
    echo "<option name=\"".$row['name']."\">".$row['name']." (ID ".$row['ID'].")</option>";
}