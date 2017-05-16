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

$gkey = strtolower($_GET['gkey']);
$_SESSION['groupkey'] = $gkey;


if ($gkey=="" || (strpos($gkey,'drop')!==false) || (strpos($gkey,'delete')!==false) || (strpos($gkey,'update')!==false) || (strpos($gkey,'create')!==false) || (strpos($gkey,'insert')!==false)){
    $_SESSION['gkeyfalse'] = true;
}
else{
    $_SESSION['gkeyfalse'] = false;

    $select = "SELECT * FROM grid.group where groupkey ='".$gkey."'";
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
    if (countPersons($persons)== 0){
        $_SESSION['gkeyfalse'] = true;
    }
    else{
        echo "Group Key: <b>".$_GET['gkey']."</b><br>";
        echo "Anzahl Typen: <b>".$_SESSION['numberofpersons']."</b><br><br>";
        echo "<table>";
        $indexOfPersons=0;
        foreach ($persons as $val){
            printArray($val, $indexOfPersons);
            $indexOfPersons++;
        }
        echo "</table>";
    }

}