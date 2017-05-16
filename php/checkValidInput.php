<?php
/**
 * Created by PhpStorm.
 * User: simon.hofmann
 * Date: 16/05/2017
 * Time: 14:26
 */
session_start();

$inputs = array();
$inputs[] = $_GET['name'];
$inputs[] = $_GET['first'];
$inputs[] = $_GET['second'];
$inputs[] = $_GET['third'];
$inputs[] = $_GET['fourth'];
$inputs[] = $_GET['fifth'];
$inputs[] = $_GET['sixth'];
$inputs[] = $_GET['seventh'];
$inputs[] = $_GET['eigth'];
$inputs[] = $_GET['ninth'];
$inputs[] = $_GET['tenth'];
$inputs[] = $_GET['eleventh'];
$inputs[] = $_GET['twelth'];
$inputs[] = $_GET['thirteenth'];
$inputs[] = $_GET['fourteenth'];
$inputs[] = $_GET['fifteenth'];
$inputs[] = $_GET['sixteenth'];
$inputs[] = $_GET['seventeenth'];
$inputs[] = $_GET['eigteenth'];
$inputs[] = $_GET['nineteenth'];
$inputs[] = $_GET['twentieth'];

foreach ($inputs as $item){
    $item = strtolower($item);
    if ((strpos($item,'drop')!==false) || (strpos($item,'delete')!==false) || (strpos($item,'update')!==false) || (strpos($item,'create')!==false) || (strpos($item,'insert')!==false)){
        $_SESSION['invalidInput'] = true;
    }
    else
    {
        $_SESSION['invalidInput'] = false;
    }
}