<?php

function factorialOfNumber($n)
{
    $fact = 1;
    for($i=$n; $i>0; $i--){
        $fact *= $i;
    }

    return $fact;
}

echo factorialOfNumber(10);
?>