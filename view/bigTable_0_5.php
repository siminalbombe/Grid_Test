<?php

session_start();

function getAttributesInArray(){
    $temp = iterateThroughTables();
    $_SESSION['attributes'] = $temp;
    return $temp;
}
//iterate through all tables of attributes
function iterateThroughTables(){
    $array = array();
    for ($table=0; $table<=3; $table++){
        $array = iterateThroughRows($array, $table);
    }
    return $array;
}
//iterate through all rows of attribute table
function iterateThroughRows($array, $table){
    for ($row=0; $row<=2; $row++){
        $array = toggleField($array, $table, $row);
    }
    return $array;
}
//Get attributes from Get/Post variable in every field
function toggleField($array, $table, $row){
    for ($field=0; $field<=1; $field++){
        $index = $table.'_'.$row.'_'.$field;
        $array[$table.'_'.$row.'_'.$field] = $_GET[$index];
    }
    return $array;
}
?>

<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Grid-Teil II</title>
    <link rel="stylesheet" href="../bootstrap_min.css">
</head>

<body>
<h2>Grid - Teil II</h2>

<?php
$attributes = getAttributesInArray();
include '../php/displayCheckboxesFIRST.php';
?>

</body>
</html>