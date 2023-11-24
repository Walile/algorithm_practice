<?php

function pyramind($n) {
    $pyramind = array();
    $midKey = $n;
    $rowRange = $midKey + $n;
    
    // Create the pyramind
    foreach(range(0, $n) as $row){
        foreach(range(0, $rowRange) as $value){
            $pyramind[$row][$value] = ' ';
            if ($value == $midKey){
                $pyramind[$row][$value] = '*';
            }
            if ($value >= ($midKey - $row) && $value <= $midKey + $row){
                $pyramind[$row][$value] = '*';
            }
        }
    }
    return $pyramind;
}


function printPyramind($pyramind) {
    foreach ($pyramind as $row) {
        foreach ($row as $col) {
            echo $col;
        }
        echo "\n";
    }
}

$pyramind = pyramind(10);
printPyramind($pyramind);