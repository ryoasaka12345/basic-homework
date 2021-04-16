<?php

function judgePrime($m)
{
    if ($m == 1) {
        return true;
    }

    for ($i = 2; $i <= $m; $i++) {
        if ($m % $i == 0) {
            break;
        }
    }

    if ($m == $i) {
        return true;
    } else {
        return false;
    }
}

function enumPrime($l)
{
    $primes = array();

    for ($i = 1; $i <= $l; $i++) {
        if (judgePrime($i)) {
            array_push($primes, $i);
        }
    }

    return $primes;
}


foreach (enumPrime(100) as $prime) {
    echo "$prime ";
}

?>