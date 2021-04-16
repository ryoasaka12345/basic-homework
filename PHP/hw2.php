<?php

$n = 10;

function factorialOfNumber($n)
{
    $fact = 1;
    for ($i = $n; $i > 1; $i--) {
        $fact *= $i;
    }

    echo "$n! = $fact";
}

factorialOfNumber($n);

?>