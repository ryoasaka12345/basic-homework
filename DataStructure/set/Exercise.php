<?php

require('set.php');

function extractMonth($date)
{
    $timestamp = strtotime($date); 
    return date("m", $timestamp); 
}

$set = new Set(); 

$set->add(extractMonth("2019/01/14")); // add month 01, set (1)
$set->add(extractMonth("2019/10/04")); // add month 10, set (1, 10)
$set->add(extractMonth("2019/01/02")); // add month 01, set (1, 10)
$set->add(extractMonth("2019/03/02")); // add month 03, set (1, 10, 3)
$set->add(extractMonth("2019/01/02")); // add month 01, set (1, 10, 3)

print_r($set->get());


?>
