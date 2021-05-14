<?php

require('QuickSort_sol2.php');

function genPairs($arr1, $arr2)
{
    $arr = [];
    foreach ($arr1 as $elem1){
        foreach ($arr2 as $elem2){
            $arr[] = [$elem1, $elem2, $elem1 + $elem2];
        }
    }
    return $arr;
}

// test1
$arr1 = [11, 1];
$arr2 = [4, 2];
$pairs = genPairs($arr1, $arr2);
quickSort2($pairs, 0, count($pairs)-1);
print_r($pairs);

// test1
$arr1 = [11, 7, 1];
$arr2 = [4, 6, 2];
$pairs = genPairs($arr1, $arr2);
quickSort2($pairs, 0, count($pairs)-1);
print_r($pairs);
?>
