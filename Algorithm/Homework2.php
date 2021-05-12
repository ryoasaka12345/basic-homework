<?php

require('QuickSort.php');

$arr1 = [11, 7, 1];
$arr2 = [4, 6, 2];
$result = [];

$k = 3;

quicksort($arr1, 0, count($arr1) - 1);
quicksort($arr2, 0, count($arr2) - 1);

for ($i = 0; $i < $k; $i++) {
    $pair = [$arr1[0], $arr2[$i]];
    array_push($result, $pair);
}

foreach ($result as $arr) {
    echo "[", $arr[0], ", ", $arr[1], "], ";
}

?>
