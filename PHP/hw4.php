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

function getPrimeNumbers($tn) {
    $result = [];

    for ($i = 1; $i <= $tn; $i++) {
        if (isPrimeNumber($i)) {
            array_push($result, $i);
        }
    }

    return $result;
}

print_r(getPrimeNumbers(10));

?>

