<?php

require ('LinkedList.php');

class LinkedList_hw2 extends LinkedList
{
    /**
    * generate linked list from an array
    */
    public function __construct($array)
    {
        foreach ($array as $elem) {
            $this->insert($elem);
        }
    }
    
    /**
    * Insert a $ins_node to Head
    * @param Node $node
    */
    public function insertToHead($node)
    {
        $node->setNext($this->head);
        $this->head = $node;
    }

    /**
    * return head
    */
    public function getHead()
    {
        return $this->head;
    }

    /**
    * reverse 
    */
    public function reverse()
    {
        $initial_head = $this->getHead();

        while ($initial_head->getNext() != null) {
            $tmp = $initial_head->getNext()->getNext(); // shallow copy
            $this->insertToHead($initial_head->getNext());
            $initial_head->setNext($tmp);
            echo $this->visit(). "<br>"; // output log
            
            if ($initial_head->getNext() == null) {
                break;
            }
        }
    }
}

/**
* test 1
*/
$list1 = new LinkedList_hw2([1, 2, 3, 4, 5]);

echo "<br>[reverse test]<br>";
$list1->visit();
echo "<br>↓↓↓↓↓↓↓↓↓↓↓↓↓↓<br>";

$list1->reverse();
echo "↓↓↓↓↓↓↓↓↓↓↓↓↓↓<br>";
$list1->visit();

echo "<br>";
/**
* test 2
*/
$list1 = new LinkedList_hw2([1, 2, 3, 4, 5, 6, 7, 8, 9]);

echo "<br>[reverse test]<br>";
$list1->visit();
echo "<br>↓↓↓↓↓↓↓↓↓↓↓↓↓↓<br>";

$list1->reverse();
echo "↓↓↓↓↓↓↓↓↓↓↓↓↓↓<br>";
$list1->visit();

echo "<br>";
/**
* test 3
*/
$list1 = new LinkedList_hw2([1]);

echo "<br>[reverse test]<br>";
$list1->visit();
echo "<br>↓↓↓↓↓↓↓↓↓↓↓↓↓↓<br>";

$list1->reverse();
echo "↓↓↓↓↓↓↓↓↓↓↓↓↓↓<br>";
$list1->visit();
?>
