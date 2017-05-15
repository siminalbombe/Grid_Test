<?php
/**
 * Created by PhpStorm.
 * User: simon.hofmann
 * Date: 15/05/2017
 * Time: 08:39
 */

session_start();
echo $_SESSION['groupkey'];

$stmt = "SELECT ID FROM grid.group where groupkey='".$_SESSION['groupkey']."'";
$id = null;

$result = $conn->query($select);
while ($row = $result->fetch_assoc()) {
    foreach ($row as $val){
        $id = $val;
    }
}

echo $id;