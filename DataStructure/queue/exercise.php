<?php

require('queue.php');

$queue = new Queue(); // declare a queue:()
$queue->enqueue("A"); // insert A to queue:(A) 
$queue->enqueue("B"); // insert B to queue:(BA)
$queue->enqueue("C"); // insert B to queue:(CBA)

while(!$queue->isEmpty()) {
    echo $queue->front() . " ";
    $queue->dequeue();
}


?>
