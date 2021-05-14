<?php

function partition2 (&$array, &$array2, $left, $right)
{
    $pivot = $array[$right];
    $i = $left - 1;

    for ($j = $left; $j < $right; $j++) {
        if ($array[$j] < $pivot) {
            $i++;
            // swap $array[$i] and $array[$j]
            $tmp = $array[$i];
            $array[$i] = $array[$j];
            $array[$j] = $tmp;

            // swap $array[$i] and $array[$j]
            $tmp = $array2[$i];
            $array2[$i] = $array2[$j];
            $array2[$j] = $tmp;
        }
    }

    // swap $array[$i + 1] and pivot ($array[$right])
    $tmp = $array[$i + 1];
    $array[$i + 1] = $array[$right];
    $array[$right] = $tmp;

    // swap $array2[$i + 1] and pivot ($array2[$right])
    $tmp = $array2[$i + 1];
    $array2[$i + 1] = $array2[$right];
    $array2[$right] = $tmp;

    return ($i + 1);
}

function quicksort2(&$array, &$array2, $left, $right) {
    if ($left < $right) {
        $pivotIndex = partition2($array, $array2, $left, $right);
        quicksort2($array, $array2, $left, $pivotIndex - 1);
        quicksort2($array, $array2, $pivotIndex, $right);
    }
}
