<?php
/**
 * Created by PhpStorm.
 * User: simon.hofmann
 * Date: 16/05/2017
 * Time: 16:09
 */
session_start();

if ($_SESSION['ini'] == true){
    $id = 1;
    $_SESSION['ini'] = false;
}

$selectedOption = $_GET['groupname'];
$id = substr($selectedOption, -2,1);


$stmt1 = "SELECT AVG(K1) AS MWKon, AVG(D1) AS MWDis, name FROM grid.proband JOIN grid.group ON proband.groupID = group.ID WHERE groupID = $id;";
$stmt2 = "SELECT AVG(K2) AS MWKon, AVG(D2) AS MWDis, name FROM grid.proband JOIN grid.group ON proband.groupID = group.ID WHERE groupID = $id;";
$stmt3 = "SELECT AVG(K3) AS MWKon, AVG(D3) AS MWDis, name FROM grid.proband JOIN grid.group ON proband.groupID = group.ID WHERE groupID = $id;";
$stmt4 = "SELECT AVG(K4) AS MWKon, AVG(D4) AS MWDis, name FROM grid.proband JOIN grid.group ON proband.groupID = group.ID WHERE groupID = $id;";
$stmt5 = "SELECT AVG(K5) AS MWKon, AVG(D5) AS MWDis, name FROM grid.proband JOIN grid.group ON proband.groupID = group.ID WHERE groupID = $id;";
$stmt6 = "SELECT AVG(K6) AS MWKon, AVG(D6) AS MWDis, name FROM grid.proband JOIN grid.group ON proband.groupID = group.ID WHERE groupID = $id;";
$stmt7 = "SELECT AVG(K7) AS MWKon, AVG(D7) AS MWDis, name FROM grid.proband JOIN grid.group ON proband.groupID = group.ID WHERE groupID = $id;";
$stmt8 = "SELECT AVG(K8) AS MWKon, AVG(D8) AS MWDis, name FROM grid.proband JOIN grid.group ON proband.groupID = group.ID WHERE groupID = $id;";
$stmt9 = "SELECT AVG(K9) AS MWKon, AVG(D9) AS MWDis, name FROM grid.proband JOIN grid.group ON proband.groupID = group.ID WHERE groupID = $id;";
$stmt10 = "SELECT AVG(K10) AS MWKon, AVG(D10) AS MWDis, name FROM grid.proband JOIN grid.group ON proband.groupID = group.ID WHERE groupID = $id;";
$stmt11 = "SELECT AVG(K11) AS MWKon, AVG(D11) AS MWDis, name FROM grid.proband JOIN grid.group ON proband.groupID = group.ID WHERE groupID = $id;";
$stmt12 = "SELECT AVG(K12) AS MWKon, AVG(D12) AS MWDis, name FROM grid.proband JOIN grid.group ON proband.groupID = group.ID WHERE groupID = $id;";
$stmt13 = "SELECT AVG(K13) AS MWKon, AVG(D13) AS MWDis, name FROM grid.proband JOIN grid.group ON proband.groupID = group.ID WHERE groupID = $id;";
$stmt14 = "SELECT AVG(K14) AS MWKon, AVG(D14) AS MWDis, name FROM grid.proband JOIN grid.group ON proband.groupID = group.ID WHERE groupID = $id;";
$stmt15 = "SELECT AVG(K15) AS MWKon, AVG(D15) AS MWDis, name FROM grid.proband JOIN grid.group ON proband.groupID = group.ID WHERE groupID = $id;";
$stmt16 = "SELECT AVG(K16) AS MWKon, AVG(D16) AS MWDis, name FROM grid.proband JOIN grid.group ON proband.groupID = group.ID WHERE groupID = $id;";
$stmt17 = "SELECT AVG(K17) AS MWKon, AVG(D17) AS MWDis, name FROM grid.proband JOIN grid.group ON proband.groupID = group.ID WHERE groupID = $id;";
$stmt18 = "SELECT AVG(K18) AS MWKon, AVG(D18) AS MWDis, name FROM grid.proband JOIN grid.group ON proband.groupID = group.ID WHERE groupID = $id;";
$stmt19 = "SELECT AVG(K19) AS MWKon, AVG(D19) AS MWDis, name FROM grid.proband JOIN grid.group ON proband.groupID = group.ID WHERE groupID = $id;";
$stmt20 = "SELECT AVG(K20) AS MWKon, AVG(D20) AS MWDis, name FROM grid.proband JOIN grid.group ON proband.groupID = group.ID WHERE groupID = $id;";

$stmts = array();
$stmts[] = $stmt1;
$stmts[] = $stmt2;
$stmts[] = $stmt3;
$stmts[] = $stmt4;
$stmts[] = $stmt5;
$stmts[] = $stmt6;
$stmts[] = $stmt7;
$stmts[] = $stmt8;
$stmts[] = $stmt9;
$stmts[] = $stmt10;
$stmts[] = $stmt11;
$stmts[] = $stmt12;
$stmts[] = $stmt13;
$stmts[] = $stmt14;
$stmts[] = $stmt15;
$stmts[] = $stmt16;
$stmts[] = $stmt17;
$stmts[] = $stmt18;
$stmts[] = $stmt19;
$stmts[] = $stmt20;

$names = array();
$selectPersonNames = "SELECT first, second, third, fourth, fifth, sixth, seventh, eigth, ninth, tenth, 
            eleventh, twelth, thirteenth, fourteenth, fifteenth, sixteenth, seventeenth, eigteenth, nineteenth, twentieth FROM grid.group WHERE ID = ".$id.";";
$result = $conn->query($selectPersonNames);
while ($row = $result->fetch_assoc()) {
    $names[0] = $row['first'];
    $names[1] = $row['second'];
    $names[2] = $row['third'];
    $names[3] = $row['fourth'];
    $names[4] = $row['fifth'];
    $names[5] = $row['sixth'];
    $names[6] = $row['seventh'];
    $names[7] = $row['eigth'];
    $names[8] = $row['ninth'];
    $names[9] = $row['tenth'];
    $names[10] = $row['eleventh'];
    $names[11] = $row['twelth'];
    $names[12] = $row['thirteenth'];
    $names[13] = $row['fourteenth'];
    $names[14] = $row['fifteenth'];
    $names[15] = $row['sixteenth'];
    $names[16] = $row['seventeenth'];
    $names[17] = $row['eigteenth'];
    $names[18] = $row['nineteenth'];
    $names[19] = $row['twentieth'];
}

$counter = 0;
foreach ($stmts as $query){
    $result = $conn->query($query);
    while ($row = $result->fetch_assoc()) {
        echo "<tr><td>".$names[$counter]."</td><td>".$row['MWKon']."</td><td>".$row['MWDis']."</td></tr>";
        $counter++;
    }
}