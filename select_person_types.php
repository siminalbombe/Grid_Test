<?php

$id = 100;
$sql = "SELECT * FROM test.persontype WHERE ID = ?";
$statement = $conn->prepare($sql);
$statement->bind_param('i', $id);
$statement->execute();

$result = $statement->get_result();

while($row = $result->fetch_assoc()) {
    echo $row['spaltenname'];
}
