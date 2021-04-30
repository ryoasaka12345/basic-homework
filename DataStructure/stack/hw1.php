<?php

require ('stack.php');

class Stack_hw1 extends Stack
{
    public function size()
    {
        return count($this->elements);
    }
}

function hw1($words)
{
    $stack = new Stack_hw1();

    for ($i=0; $i < count($words); $i++) {
        $top = $stack->top();
        if ($top == $words[$i] ) {
            $stack->pop();
        } else {
            $stack->push($words[$i]);
        }
    }
    return $stack->size();
}

// Test 1
$words = ["ab", "aa", "aa", "bcd", "ab"];

echo "Input : ";
foreach ($words as $elem) {
    echo "$elem ";
}

echo "<br> Output : ". hw1($words);

echo "<br>";

// Test 2
$words = ["hello", "world", "world", "hello"];

echo "Input : ";
foreach ($words as $elem) {
    echo "$elem ";
}

echo "<br> Output : ". hw1($words);
?>
