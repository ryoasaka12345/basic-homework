<?php

$arrayA = [1, 2, 3, 4, 5];
$arrayB = [4, 5, 3, 2, 10];
$arrayC = [];

for($i=0; $i < count($arrayA); $i++) {
    $arrayC[$i] = $arrayA[$i] + $arrayB[$i];
}

echo "Input A: ";
print_r($arrayA);
echo "<br>";

echo "Input B: ";
print_r($arrayB);
echo "<br>";

echo "Output C: ";
print_r($arrayC);
echo "<br>";

?>
