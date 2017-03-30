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


$gkey = $_GET['gkey'];
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
echo "<table><form>";
$indexOfPersons=0;
foreach ($persons as $val){
    printArray($val, $indexOfPersons);
    $indexOfPersons++;
}
echo "</form></table>";