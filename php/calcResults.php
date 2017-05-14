<?php
/**
 * Created by PhpStorm.
 * User: simon.hofmann
 * Date: 02/05/2017
 * Time: 10:24
 */

session_start();
function calcKonkordanz (){
    iterateThroughForm(0,5);
}

function calcDiskordanz() {
    iterateThroughForm(6,11);
}

function iterateThroughForm ($startRow, $endRow){
    for ($row=$startRow; $row<=$endRow; $row++){
        for ($column=0; $column<5; $column++){
            $cell = $row.$column;
            if (isset ($_GET[$cell])) {
                $_SESSION['Konkordanz'] =
            }
            else{

            }
        }
    }
}

calcKonkordanz();
calcDiskordanz();