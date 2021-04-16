<?php

function judgePrime($n)
{
    for ($i = 2; $i <= $n; $i++) {
        if ($n % $i == 0) {
            break;
        }
    }
    
    if ($n == 1 or $n == $i) {
        echo "$n is primenumber. <br />";
    } else {
        echo "$n is not primenumber. <br />";
    }
}

for ($n = 1; $n <= 11; $n++) judgePrime($n);

?>