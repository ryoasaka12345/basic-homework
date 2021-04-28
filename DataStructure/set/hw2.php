<?php

require('set.php');

$dict = new Set();

$day1Words = ["Hello", "Hi", "Good morning", "Good night"];
$day2Words = ["Hi", "Name", "Age"];
$day3Words = ["Good morning", "How are you", "Fine", "Thank"];

$allDays = [$day1Words, $day2Words, $day3Words];

foreach ($allDays as $day) {
    foreach ($day as $word) {
        $dict->add($word);
    }
}

print_r($dict->get());
?>
