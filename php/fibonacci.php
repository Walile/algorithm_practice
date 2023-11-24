<?php

// calculate fibonacci
function fibonacci($number){

        if ($number == 0){
            return 0;
        }
        if ($number == 1){
            return 1;
        }
        if ($number > 1){
            return (fibonacci($number-2) + fibonacci($number-1));
        }
    
}

foreach(range(0, 9) as $i){
    echo fibonacci($i) . PHP_EOL ;
}