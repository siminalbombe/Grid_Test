<?php

$ID = $_GET['gkey'];
echo "Group Key: ";
if ($ID=="")
    echo "no Group Key entered";
echo $ID;
$sql = "SELECT * FROM test.persontype WHERE ID = ?";

//TEST

if ($stmt = $conn->prepare($sql)) {

    /* execute statement */
    $stmt->execute();

    /* bind result variables */
    $stmt->bind_result($FetchedID);

    /* fetch values */
    while ($stmt->fetch()) {
        printf ("ID from DB %s<br>", $FetchedID);
    }

    /* close statement */
    $stmt->close();
}


//TEST
$conn->close();