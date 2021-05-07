<?php

require('queue.php');

function calcTime($pri_array, $dep_array)
{
    $time = 0;

    $pri = new Queue();
    foreach($pri_array as $elem) {
        $pri->enqueue($elem);
    }

    $dep = new Queue();
    foreach($dep_array as $elem) {
        $dep->enqueue($elem);
    }

    while (!$pri->isEmpty()) {
        if ($pri->front() == $dep->front()) {
            $time += 2;
            $pri->dequeue();
            $dep->dequeue();
        } else {
            $time += 1;
            $pri->enqueue($pri->front());
            $pri->dequeue();
        }
    }

    return $time;
}

// test 1
echo calcTime($pri_array=[2, 1, 3], $dep_array=[1, 2, 3]). "<br>";

// test 2
echo calcTime($pri_array=[2, 1, 3, 4], $dep_array=[1, 2, 3, 4]). "<br>";
            
?>
