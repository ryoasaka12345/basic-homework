<?php

require('QuickSort_sol3.php');

function genPairs($arr1, $arr2, &$pairs, &$sums)
{
    foreach ($arr1 as $elem1){
        foreach ($arr2 as $elem2){
            $pairs[] = [$elem1, $elem2];
            $sums[] = $elem1 + $elem2;
        }
    }
}

// test1
$arr1 = [11, 1];
$arr2 = [4, 2];
$pairs = [];
$sums = [];
genPairs($arr1, $arr2, $pairs, $sums);
quickSort2($sums, $pairs, 0, count($pairs)-1);
print_r($pairs);

// test1
$arr1 = [11, 7, 1];
$arr2 = [4, 6, 2];
$pairs = [];
$sums = [];
genPairs($arr1, $arr2, $pairs, $sums);
quickSort2($sums, $pairs, 0, count($pairs)-1);
print_r($pairs);


?>
