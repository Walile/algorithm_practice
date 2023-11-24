<?php
// multiplication_table

foreach(range(1, 9) as $i) {
    foreach(range(1, $i) as $j) {
        $k = $i * $j;
        $calculation = sprintf("$i x $j = $k   ", $i, $j, $k);
        echo $calculation;
    }
    echo PHP_EOL;
}