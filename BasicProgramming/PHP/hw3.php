<?php

function judgePrime($n){
    for ($i=2; $i<=$n; $i++){
        if ($n%$i==0){
            break;
        }
    }
    
    if ($n==$i){
        echo "$n is primenumber.";
    }else{
        echo "$n is not primenumber.";
    }
}

judgePrime(11);

?>