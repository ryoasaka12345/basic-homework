<?php

function isPrimeNumber($n) {
    if ($n == 0 || $n == 1) {
        return false;
    }

    $m = $n/2;
    for ($i = 2; $i <= $m; $i++) {
        if ($n%$i == 0) {
            return false;
        }
        
    }
    
    return true;
}

for ($n = 0; $n <= 11; $n++) {
    if (isPrimeNumber($n)) {
        echo "$n is prime number <br>";
    } else {
        echo "$n is not prime number <br>";
    }
}

?>

