<?php
session_start();

function printArray($value, $index){
    if($index<=2){ //non relevant user values=2(ID, name, groupkey)
        return;
    }
    if ($value==""){
        echo "<td></td><td>"."<input name='".$index."' hidden></td></tr>";
    }
    else{
        echo "<tr><td>".$value."</td>";
        echo "<td>"."<input name='".$index."'></td></tr>";
    }
}

function countPersons($array){
    $array = remove_ID_Gkey_Name($array);
    $array = removeNotExistentPersons($array);

    return count($array);
}

function remove_ID_Gkey_Name($array){
    for ($i=0; $i<=2; $i++){
        array_shift($array);
    }
    return $array;
}

function removeNotExistentPersons($array){
    $count=0;
    foreach ($array as $val){
        if ($val == ""){
            unset($array[$count]);
        }
        $count++;
    }
    return $array;
}

$gkey = $_GET['gkey'];
$_SESSION['groupkey'] = $gkey;

echo "Group Key: ";
if ($gkey=="")
    echo "no Group Key entered";
echo $gkey."<br>";


$select = "SELECT * FROM grid.group where groupkey ='".$gkey."'";
echo "<br>";
$persons = array();
$indexOfPersons = 0;
$result = $conn->query($select);
while ($row = $result->fetch_assoc()) {
    foreach ($row as $val){
        $persons[$indexOfPersons] = $val;
        $indexOfPersons++;
    }
}

$_SESSION['persons'] = $persons;
$_SESSION['numberofpersons'] = countPersons($persons);
echo "Anzahl Typen: <b>".$_SESSION['numberofpersons']."</b>";
echo "<table>";
$indexOfPersons=0;
foreach ($persons as $val){
    printArray($val, $indexOfPersons);
    $indexOfPersons++;
}
echo "</table>";