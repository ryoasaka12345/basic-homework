<?php

require('tree.php');
require('queue.php');

class TreeHw extends BT
{
    public function insertFirst($key)
    {
        $queue = new Queue();
        $queue->enqueue($this->root);

        while (!$queue->isEmpty()) {
            $current = $queue->front();
            $queue->dequeue();

            if ($current->getleft() == null) {
                $current->setLeft(new Node($key));
                return;
            } else {
                $queue->enqueue($current->getLeft());
            }

            if ($current->getRight() == null) {
                $current->setRight(new Node($key));
                return;
            } else {
                $queue->enqueue($current->getRight());
            }
        }
    }

    public function lookOver()
    {
        $l = 0; // level
        $w = 0; // width

        $queue = new Queue();
        $queue->enqueue($this->root);

        echo "<br> -level 0- <br>";
        while (!$queue->isEmpty()) {
            if ($w != 0 && $w%(2**$l) == 0) {
                $l += 1;
                echo "<br> -level $l- <br>";
                $w = 0;
            }

            $current = $queue->front();
            $queue->dequeue();

            $left = $current->getLeft();
            $right = $current->getRight();
            $key = $current->getData();

            if ($left != null) {
                echo "[". $left->getData();
                $queue->enqueue($left);
            } else {
                echo "[null";
            }

            echo "|". $current->getData(). "|";

            if ($right != null) {
                echo $right->getData(). "] ";
                $queue->enqueue($right);
            } else {
                echo "null] ";
            }

            $w += 1;
        } 
    }
}

$root = new Node(10, null, null);
$bt = new TreeHw($root);

echo "notation: [Left node | key | Right node]";
echo "<br><br>";

echo "===initial BT===";
$bt->lookOver();

echo "<br>";

echo "<br> ===insert 11===";
$bt->insertFirst(11);
$bt->lookOver();

echo "<br>";

echo "<br> ===insert 9, 7, 15, 8===";
$bt->insertFirst(7);
$bt->insertFirst(9);
$bt->insertFirst(12);
$bt->insertFirst(15);
$bt->insertFirst(8);
$bt->getRoot()->getLeft()->setRight(null); // delete 12
$bt->lookOver();

echo "<br>";

echo "<br> ===insert 12 to the first position===";
$bt->insertFirst(12);
$bt->lookOver();

?>
