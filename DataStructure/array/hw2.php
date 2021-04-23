<?php

function addElements($arrayA, $arrayB){
    if ( gettype($arrayA) != "array" || gettype($arrayB) != "array") {
        echo "Incorrect input";
        echo "<br>";
        return []; 
    }

    $lenA = count($arrayA);
    $lenB = count($arrayB);

    if ($lenA > $lenB){
        for ($p=0; $p < $lenA-$lenB; $p++){
            array_push($arrayB, 0);
        } 
    } else {
        for ($p=0; $p < $lenB-$lenA; $p++){
            array_push($arrayA, 0);
        }
    }
    
    $arrayC = [];
    for($i=0; $i < count($arrayA); $i++) {
        $arrayC[$i] = $arrayA[$i] + $arrayB[$i];
    }
    return $arrayC;
}

// Test 1
$arrayA = [1, 2, 3, 4, 5];
$arrayB = [4, 5, 3, 2, 10];
echo "<br>";
echo "Input A: ";
print_r($arrayA);
echo "<br>";
echo "Input B: ";
print_r($arrayB);
echo "<br>";

$arrayC = addElements($arrayA, $arrayB);
echo "Output C: ";
print_r($arrayC);
echo "<br>";

// Test 2
$arrayA = [1, 2, 3, 4, 5];
$arrayB = [4, 5, 3, 2, 10, 15, 20];
echo "<br>";
echo "Input A: ";
print_r($arrayA);
echo "<br>";
echo "Input B: ";
print_r($arrayB);
echo "<br>";

$arrayC = addElements($arrayA, $arrayB);
echo "Output C: ";
print_r($arrayC);
echo "<br>";

// Test 3
$arrayA = [1, 2, 3, 4, 5, 6, 7, 8, 9];
$arrayB = [4, 5, 3, 2, 10];
echo "<br>";
echo "Input A: ";
print_r($arrayA);
echo "<br>";
echo "Input B: ";
print_r($arrayB);
echo "<br>";

$arrayC = addElements($arrayA, $arrayB);
echo "Output C: ";
print_r($arrayC);
echo "<br>";

// Test 4
$arrayA = [];
$arrayB = [];
echo "<br>";
echo "Input A: ";
print_r($arrayA);
echo "<br>";
echo "Input B: ";
print_r($arrayB);
echo "<br>";

$arrayC = addElements($arrayA, $arrayB);
echo "Output C: ";
print_r($arrayC);
echo "<br>";

// Test 5
$arrayA = 3;
$arrayB = 5;
echo "<br>";
echo "Input A: ";
print_r($arrayA);
echo "<br>";
echo "Input B: ";
print_r($arrayB);
echo "<br>";

$arrayC = addElements($arrayA, $arrayB);
echo "Output C: ";
print_r($arrayC);
echo "<br>";

?>
