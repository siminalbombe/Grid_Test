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
$select = "SELECT ID,name FROM grid.group;";
echo "<option>".$select."</option>";
if (isset($result)) {
    $result = $conn->query($select);
}
else{
    echo "statement doesn't work";
}
while ($row = $result->fetch_assoc()) {
    echo "<option name=\"".$row['name']."\">".$row['name']." (ID ".$row['ID'].")</option>";
}