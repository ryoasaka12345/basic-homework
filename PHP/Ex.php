<?php
    $a = [6, 2, 5, 10, 11, 1, 17, 20];

    // Set default min and max value.
    $min = $a[0];
    $max = $a[0];

    foreach($a as $key => $value){
        if ($value < $min){
            $min = $value;
        }

        if ($value > $min){
            $max = $value;
        }
    }

    echo "Min: $min, Max: $max";
?>