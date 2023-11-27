<?php
// pascal trangle 
function pascal($arr){

    foreach($arr as $k => $row){
        foreach($row as $key => $value){
            if ($key == 0){
                continue;
            }
            if ($key == (count($row) - 1)){
                continue;
            }
            if ($key > 0){
                // calculate trangle value
                $preIndex = $arr[$k - 1][$key - 1];
                $nowIndex = $arr[$k - 1][$key];
                $arr[$k][$key] = $preIndex + $nowIndex;
            }
        }
    }

    return $arr;
}

function printArray($arr){
    foreach($arr as $row){
        // echo pascal($i) . PHP_EOL;
    
        foreach($row as $j){
            echo $j . ' ';
        }
        echo PHP_EOL;
    }
}


////// generate default value 1 array
$array = array();

foreach(range(0, 10) as $i){
    // echo pascal($i) . PHP_EOL;

    foreach(range(0, $i) as $j){
        $array[$i][$j] = 1;
    }

}


////// generate pascal trangle value
$pascalTrangle = pascal($array);

///// print pascal trangle
printArray($pascalTrangle);