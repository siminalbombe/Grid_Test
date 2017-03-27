<?php

$ID = $_GET['gkey'];
echo "Group Key: ";
if ($ID=="")
    echo "no Group Key entered";
echo $ID;

$select = "SELECT * FROM test.persontype ";

$result = $conn->query($select);
while ($row2 = $result->fetch_assoc()) {
    echo "{$row2['first']}";
}
echo "<br>TEST";