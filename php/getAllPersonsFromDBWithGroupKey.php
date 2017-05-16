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

$item = strtolower($_GET['gkey']);
$_SESSION['groupkey'] = $item;

if ($item=="" || (strpos($item,'drop')!==false) || (strpos($item,'delete')!==false) || (strpos($item,'update')!==false) || (strpos($item,'create')!==false) || (strpos($item,'insert')!==false)){
    $_SESSION['gkeyfalse'] = true;
}
else{
    $_SESSION['gkeyfalse'] = false;

    $select = "SELECT * FROM grid.group where groupkey ='".$item."'";
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