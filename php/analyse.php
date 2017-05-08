<?php
/**
 * Created by PhpStorm.
 * User: simon.hofmann
 * Date: 02/05/2017
 * Time: 10:24
 */
function calcKonkordanz (){
    iterateThroughForm(0,5);
}

function calcDiskordanz() {
    iterateThroughForm(6,11);
}

function iterateThroughForm ($startRow, $endRow){
    for ($i=$startRow; $i<=$endRow; $i++){
        for ($k=0; $k<=5; $k++){
            $cell = $i.$k;
            if (isset ($_GET[$cell])) {
                echo "True ".$cell."<br>";
            }
            else{
                echo "False ".$cell."<br>";
            }
        }
    }
}

calcKonkordanz();
calcDiskordanz();