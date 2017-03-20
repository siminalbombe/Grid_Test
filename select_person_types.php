<?php

function printTableHeader($string){
    echo "<th>".$string."</th>";
}
function printTableRow10times($string){
    echo "<tr>";
    for ($i=0; $i<=9; $i++){
        echo $string;
    }
    echo "</tr>";
}
/**
 * @param $conn
 * @param $selectPersonTypes
 * @return array
 */
function getAllPersonTypesFromDB($conn, $selectPersonTypes): array
{
    $result = $conn->query($selectPersonTypes);
    $persontypes = array();
    while ($row = $result->fetch_assoc()) {
        $persontypes = getAllColumns($row, $persontypes);
    }
    return $persontypes;
}
/**
 * @param $row
 * @param $persontypes
 * @return mixed
 */
function getAllColumns($row, $persontypes)
{
    $i = 0;
    $persontypes[$i] = $row['first'];
    $i++;
    $persontypes[$i] = $row['second'];
    $i++;
    $persontypes[$i] = $row['third'];
    $i++;
    $persontypes[$i] = $row['fourth'];
    $i++;
    $persontypes[$i] = $row['fifth'];
    $i++;
    $persontypes[$i] = $row['sixth'];
    $i++;
    $persontypes[$i] = $row['seventh'];
    $i++;
    $persontypes[$i] = $row['eigth'];
    $i++;
    $persontypes[$i] = $row['ninth'];
    $i++;
    $persontypes[$i] = $row['tenth'];
    $i++;
    $persontypes[$i] = $row['eleventh'];
    $i++;
    $persontypes[$i] = $row['twelth'];
    $i++;
    $persontypes[$i] = $row['thirteenth'];
    $i++;
    $persontypes[$i] = $row['fourteenth'];
    $i++;
    $persontypes[$i] = $row['fifteenth'];
    $i++;
    $persontypes[$i] = $row['sixteenth'];
    $i++;
    $persontypes[$i] = $row['seventeenth'];
    $i++;
    $persontypes[$i] = $row['eigteenth'];
    $i++;
    $persontypes[$i] = $row['nineteenth'];
    $i++;
    $persontypes[$i] = $row['twentieth'];
    return $persontypes;
}

echo "<table border=\"1\" align=\"center\">";
$selectPersonTypes = "select * from test.persontype";
$persontypes = getAllPersonTypesFromDB($conn, $selectPersonTypes);


for ($i=0; $i<=9; $i++){
    printTableHeader($persontypes[$i]);
}

for ($i=0; $i<=12; $i++){
    $printRadioButtons ="<td><input type=\"radio\" class=\"radio\">  </input></td>";
    printTableRow10times($printRadioButtons);
}
echo "</table>";