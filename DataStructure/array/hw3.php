<?php

$array = [
    [5, 12, 17, 9, 13],
    [13, 4, 8, 14, 1],
    [9, 5, 3, 17, 21]
];

$size = count($array);
$avg = 0;
$sum = 0;
$min = $array[0][0];
$max = $array[0][0];

foreach ($array as $row) {
    foreach ($row as $value) {
        $sum  += $value;

        if ($value < $min) {
            $min = $value;
        }

        if ($value > $max) {
            $max = $value;
        }
    }
}

$avg = round($sum/$size);

echo "<br>";
$array = [
    [5, 12, 17, 9, 13],
    [13, 4, 8, 14, 1], 
    [9, 5, 3, 17, 21]
];

echo "Input:<br>";

foreach ($array as $row) {
    foreach ($row as $value) {
        echo "$value, ";
    }
    echo "<br>";
}

echo "<br>";
echo "AVG: $avg, SUM: $sum, MIN: $min, MAX: $max ";
echo "<br>";

?>
