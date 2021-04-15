<?php

$n = 20;
$ans = "";

function judgePrime($m){
    if ($m==1) return true;

    for ($i=2; $i<=$m; $i++) if ($m%$i==0) break;
    
    if ($m==$i) return true;
    else return false;
}

for ($i=1; $i<=$n; $i++) if (judgePrime($i)) $ans .= " $i";

echo $ans;

?>