<?php

$sum = 0; 
for ($i = 0; $i <= 51; $i++) {
    if ($i%2 != 0) {
        $sum += $i;
    }
}

echo "the sum of the odd numbers between 0 to 50 is $sum";

?>

