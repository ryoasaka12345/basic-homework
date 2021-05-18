<?php

function printArray($array, $n) 
{
    echo "[";
    foreach ($array as $elem) {
        echo "$elem ";
    }
    echo "]";
}

function partition(&$array, $left, $right)
{
    $pivot = $array[($right+$left) / 2];
    $i = $left;
    $j = $right;
    while ($i <= $j) {
        while ($array[$i] < $pivot) $i++;
        while ($array[$j] > $pivot) $j--;

        if ($i <= $j) {
            $temp = $array[$i];
            $array[$i] = $array[$j];
            $array[$j] = $temp;
            $i++;
            $j--;
        }
    }

    return $i;
    // $array[ <  $i] is smaller than $pivot
    // $array[ >= $i] is greater or equal $pivot
}

function quicksort(&$array, $left, $right)
{
    if($left < $right) {
        $pivotIndex = partition($array, $left, $right);
        quicksort($array, $left, $pivotIndex - 1);
        quicksort($array, $pivotIndex, $right);
    }
}

// Test 1
$arr = [0, 2, 1, 9 , 7];
$n = count($arr);
printArray($arr, $n);
quicksort($arr, 0, $n-1);
echo "<br>";
printArray($arr, $n);
echo "<br>Output: ";
echo $arr[$n-1] + $arr[$n-2];

echo "<br>";

// Test 2
echo "<br>";
$arr = [4, 11, 13, 6, 2];
$n = count($arr);
printArray($arr, $n);
quicksort($arr, 0, $n-1);
echo "<br>";
printArray($arr, $n);
echo "<br>Output: ";
echo $arr[$n-1] + $arr[$n-2];

echo "<br>";

// Test 3
echo "<br>";
$arr = [5, 1, 6, 3, 7, 0, 2, 4, 10];
$n = count($arr);
printArray($arr, $n);
quicksort($arr, 0, $n-1);
echo "<br>";
printArray($arr, $n);
echo "<br>Output: ";
echo $arr[$n-1] + $arr[$n-2];

echo "<br>";

?>
