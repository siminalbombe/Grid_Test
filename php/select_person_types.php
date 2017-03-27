<?php

$ID = $_GET['gkey'];
echo "Group Key: ";
if ($ID=="")
    echo "no Group Key entered";
echo $ID;
$sql = "SELECT * FROM test.persontype WHERE ID = ?";
$statement = $conn->prepare($sql);
$statement->bind_param('i', $ID);
$statement->execute();

$result = $statement->get_result();
$columnNames = $result->fetch_fields();
//foreach ($columnNames as $val){
//    echo "column name: ".$val."<br>";
//}

while($row = $result->fetch_assoc()) {
    echo $row['first'];

}
echo "<br>TEST";