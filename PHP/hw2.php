<?php

$n = 10;

function factorialOfNumber($n) {
    $result = 1;
    for ($i = $n; $i > 1; $i--) {
        $result *= $i;
    }

    echo  $result;
}

echo "$n! = ", factorialOfNumber(10);

?>