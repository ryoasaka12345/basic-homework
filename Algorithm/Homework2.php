<?php

function partition(&$sums, &$pairs, $left, $right)
{
    $pivot = $sums[($right+$left) / 2];
    $i = $left;
    $j = $right;
    while ($i <= $j) {
        while ($sums[$i] < $pivot) $i++;
        while ($sums[$j] > $pivot) $j--;

        if ($i <= $j) {
            // swap sums[$i] and sums[$j]
            $temp = $sums[$i];
            $sums[$i] = $sums[$j];
            $sums[$j] = $temp;
            // swap pairs[$i] and pairs[$j]
            $temp = $pairs[$i];
            $pairs[$i] = $pairs[$j];
            $pairs[$j] = $temp;

            $i++;
            $j--;
        }
    }

    return $i;
    // $array[ <  $i] is smaller than $pivot
    // $array[ >= $i] is greater or equal $pivot
}

function quicksort(&$sums, &$pairs, $left, $right)
{
    if($left < $right) {
        $pivotIndex = partition($sums, $pairs, $left, $right);
        quicksort($sums, $pairs, $left, $pivotIndex - 1);
        quicksort($sums, $pairs, $pivotIndex, $right);
    }
}

function printArray($array) 
{
    echo "<br>[";
    foreach ($array as $elem) {
        echo "$elem ";
    }
    echo "]";
}

function genPairs($arr1, $arr2, &$sums, &$pairs)
{
    foreach ($arr1 as $elem1){
        foreach ($arr2 as $elem2){
            $pairs[] = [$elem1, $elem2];
            $sums[] = $elem1 + $elem2;
        }
    }
}

// test1
$k = 3;
$arr1 = [11, 7, 1];
$arr2 = [4, 6, 2];
printArray($arr1);
printArray($arr2);

$pairs = [];
$sums = [];
genPairs($arr1, $arr2, $sums, $pairs);
quickSort($sums, $pairs, 0, count($sums)-1);

echo "<br>";
for ($i = 0; $i < $k; $i++) {
    echo "[", $pairs[$i][0] , ", ", $pairs[$i][1], "] "; 
}

echo "<br>";

// test2
$k = 3;
$arr1 = [11, 7];
$arr2 = [4, 6];
printArray($arr1);
printArray($arr2);

$pairs = [];
$sums = [];
genPairs($arr1, $arr2, $sums, $pairs);
quickSort($sums, $pairs, 0, count($sums)-1);

echo "<br>";
for ($i = 0; $i < $k; $i++) {
    echo "[", $pairs[$i][0] , ", ", $pairs[$i][1], "] "; 
}

echo "<br>";

// test1
$k = 3;
$arr1 = [4, 6, 2];
$arr2 = [11, 7, 1];
printArray($arr1);
printArray($arr2);

$pairs = [];
$sums = [];
genPairs($arr1, $arr2, $sums, $pairs);
quickSort($sums, $pairs, 0, count($sums)-1);

echo "<br>";
for ($i = 0; $i < $k; $i++) {
    echo "[", $pairs[$i][0] , ", ", $pairs[$i][1], "] "; 
}

echo "<br>";
?>
