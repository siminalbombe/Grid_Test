<?php
/**
 * Created by PhpStorm.
 * User: simon.hofmann
 * Date: 15/05/2017
 * Time: 08:39
 */

function getColumns(){
    $columns = null;
    for ($i=1; $i<=20; $i++){
        $columns .= "K".$i.",";
    }
    for ($i=1; $i<=20; $i++){
        $columns .= "D".$i;
        if ($i!=20)
            $columns.=",";
    }
    return $columns;
}

function getValues($konkordanz, $diskordanz){
    $values = null;
    foreach ($konkordanz as $item){
        $values .= $item.",";
    }

    $counter = 0;
    foreach ($diskordanz as $item){
        $values .= $item;
        if ($counter != (count($diskordanz)-1))
            $values .= ",";
        $counter++;
    }
    return $values;
}


session_start();
include 'connect.php';

echo "Group Key: ".$_SESSION['groupkey']."<br>";

$stmt = "SELECT ID FROM grid.group where groupkey='".$_SESSION['groupkey']."'";
$id = null;

$result = $conn->query($stmt);
while ($row = $result->fetch_assoc()) {
    foreach ($row as $val){
        $id = $val;
    }
}

echo "Group-ID: ".$id."<br>";

$konkordanz = $_SESSION['Konkordanz'];
$diskordanz = $_SESSION['Diskordanz'];

$columns = getColumns();
$values = getValues($konkordanz, $diskordanz);

$insert = "INSERT INTO grid.proband (".$columns.", groupID) values(".$values.",".$id.")";
echo $insert;

if ($conn->query($insert) === TRUE) {
    echo "<br>New record created successfully.<br>";
    echo "Your ID: ".$conn->insert_id;
}