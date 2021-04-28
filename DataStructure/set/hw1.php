<?php

require('set.php');

$array = [1, 2, 3, 4, 5, 2, -1, 5, 2, 7, 11, 11, -5];
$set = new Set();
foreach ($array as $elem) {
    $set->add($elem);
}
print_r($set->get());

?>
