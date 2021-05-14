<?php

function partition2 (&$array, $left, $right)
{
    $pivot = $array[$right][2];
    $i = $left - 1;

    for ($j = $left; $j < $right; $j++) {
        if ($array[$j][2] < $pivot) {
            $i++;
            // swap $array[$i] and $array[$j]
            $tmp = $array[$i];
            $array[$i] = $array[$j];
            $array[$j] = $tmp;
        }
    }

    // swap $array[$i + 1] and pivot ($array[$right])
    $tmp = $array[$i + 1];
    $array[$i + 1] = $array[$right];
    $array[$right] = $tmp;
    return ($i + 1);
}

function quicksort2(&$array, $left, $right) {
    if ($left < $right) {
        $pivotIndex = partition2($array, $left, $right);
        quicksort2($array, $left, $pivotIndex - 1);
        quicksort2($array, $pivotIndex, $right);
    }
}
