<?php

require ('LinkedList.php');

class LinkedList_hw3 extends LinkedList
{
    /**
    * generate linked list from an array
    * @param array $array
    */
    public function __construct($array)
    {
        foreach ($array as $elem) {
            $this->insert($elem);
        }
    }
    
    /**
    * return head node.
    */
    public function getHead()
    {
        return $this->head;
    }

    /**
    * Deleat head and set the next node to head.
    * And then, return previous head node.
    */
    public function deleteHead()
    {
        $tmp = $this->head;
        $this->head = $this->head->getNext();
        $tmp->setNext(null);
        return $tmp;
    }

    /**
    * Insert a $node to Head
    * @param Node $node
    */
    public function insertToHead($node)
    {
        $node->setNext($this->head);
        $this->head = $node;
    }
}

/**
* Marge list $B into list $A and then generate sorted combine list.
*/
function mergeLists($A, $B)
{
    echo "↓↓↓↓↓↓↓↓↓↓↓↓↓↓<br>";
    if ($A->getHead()->getData() > $B->getHead()->getData()) {
        $A->insertToHead($B->deleteHead());
        echo $A->visit(). "<br>"; // output log
    }
    $current = $A->getHead(); // shallow copy
    while ($B->getHead() != null) {
        while ( $current->getNext() != null) {
            if ( $current->getNext()->getData() > $B->getHead()->getData()) {
                break;
            } else {
                $current = $current->getNext();
            }
        }
        $tmp = $B->deleteHead();
        $tmp->setNext($current->getNext());
        $current->setNext($tmp);
        echo $A->visit(). "<br>"; // output log
    }
    echo "↓↓↓↓↓↓↓↓↓↓↓↓↓↓<br>";
    return $A;
}

// test 1
echo "[test 1]<br>";
$listB = new LinkedList_hw3([5, 7, 9]);
echo "-A- <br>";
$listB->visit();

echo "<br>";
$listA = new LinkedList_hw3([4, 6, 7]);
echo "-B- <br>";
$listA->visit();

echo "<br>";
$listA = mergeLists($listA, $listB);
echo "-combine A and B- <br>";
$listA->visit();
echo "<br>";

echo "<br>";

// test 2
echo "[test 2]<br>";
$listB = new LinkedList_hw3([1, 3, 7, 8]);
echo "-A- <br>";
$listB->visit();

echo "<br>";
$listA = new LinkedList_hw3([2, 4, 5, 6, 9]);
echo "-B- <br>";
$listA->visit();

echo "<br>";
$listA = mergeLists($listA, $listB);
echo "-combine A and B- <br>";
$listA->visit();
echo "<br>";

echo "<br>";

// test 3
echo "[test 3]<br>";
$listB = new LinkedList_hw3([1]);
echo "-A- <br>";
$listB->visit();

echo "<br>";
$listA = new LinkedList_hw3([1]);
echo "-B- <br>";
$listA->visit();

echo "<br>";
$listA = mergeLists($listA, $listB);
echo "-combine A and B- <br>";
$listA->visit();
echo "<br>";

echo "<br>";

// test 4
echo "[test 4]<br>";
$listB = new LinkedList_hw3([1, 3, 5, 7, 8, 10, 11]);
echo "-A- <br>";
$listB->visit();

echo "<br>";
$listA = new LinkedList_hw3([2, 4, 6, 9]);
echo "-B- <br>";
$listA->visit();

echo "<br>";
$listA = mergeLists($listA, $listB);
echo "-combine A and B- <br>";
$listA->visit();
echo "<br>";

echo "<br>";

?>
