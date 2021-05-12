<?php

require 'QuickSort.php';

// Test 1
$arr = [0, 2, 1, 9 , 7];
$n = count($arr);
printArray($arr, $n);
quickSort($arr, 0, $n-1);
echo "Output: ";
echo $arr[$n-1] + $arr[$n-2];

echo "<br>";

// Test 2
echo "<br>";
$arr = [4, 11, 13, 6, 2];
$n = count($arr);
printArray($arr, $n);
quickSort($arr, 0, $n-1);
echo "Output: ";
echo $arr[$n-1] + $arr[$n-2];

echo "<br>";

// Test 3
echo "<br>";
$arr = [5, 1, 6, 3, 7, 0, 2, 4, 10];
$n = count($arr);
printArray($arr, $n);
quickSort($arr, 0, $n-1);
echo "Output: ";
echo $arr[$n-1] + $arr[$n-2];

?>
