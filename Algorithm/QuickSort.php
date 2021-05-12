<?php

function partition (&$array, $left, $right)
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
        }
    }

    // swap $array[$i + 1] and $pivot ($array[$right])
    $temp = $array[$i + 1];
    $array[$i + 1] = $array[$right];
    $array[$right] = $temp;
    return ($i + 1);
}

function quicksort(&$array, $left, $right) {
    if ($left < $right) {
        $pivotIndex = partition($array, $left, $right);
        quicksort($array, $left, $pivotIndex - 1 );
        quicksort($array, $pivotIndex, $right);
    }
}

// A utility function to
// pruint an array of size n
function printArray(&$arr, $n)
{
    for ( $i = 0; $i < $n; $i++)
    echo $arr[$i]." ";
    echo "<br>";
}

?>
