<?php

require ('LinkedList.php');

class LinkedList_hw1 extends LinkedList
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
    * delete all node which have value is $data
    * @param int $data
    */
    public function deleteAll($data)
    {
        if ($this->head == null) { // linked list is empty
            echo "List is empty.";
            return;
        }

        $current = $this->head; // shallow copy
        $prev = null;
        while ($current != null) {
            if ($current->getData() == $data) {
                if ($prev == null) {
                    $current = $current->getNext();
                    $this->head  = $current;
                } else {
                    $current = $current->getNext();
                    $prev->setNext($current);
                }
                echo $this->visit(). "<br>"; // output log
            } else {
                $prev = $current; // shallow copy
                $current = $current->getNext();
            }
        }
    }
}

// test1
$list1 = new LinkedList_hw1([10, 4, 1, 2, 5, 2, 3]);
echo "[Test 1]<br>"; 
$list1->visit();

echo "<br>↓↓↓↓↓↓↓↓↓↓↓↓↓↓<br>";
$list1->deleteAll(10);
echo "↓↓↓↓↓↓↓↓↓↓↓↓↓↓<br>";

$list1->visit();
echo "<br>";


echo "<br>";
// test2
$list2 = new LinkedList_hw1([10, 4, 1, 2, 5, 2, 3]); // init linked list: $head = null
echo "[Test 2]<br>"; 
$list2->visit();

echo "<br>↓↓↓↓↓↓↓↓↓↓↓↓↓↓<br>";
$list2->deleteAll(2);
echo "↓↓↓↓↓↓↓↓↓↓↓↓↓↓<br>";

$list2->visit();
echo "<br>";


echo "<br>";

// test3
$list3 = new LinkedList_hw1([2, 2, 2, 2, 2, 2, 2, 2]); // init linked list: $head = null
echo "[Test 3]<br>"; 
$list3->visit();

echo "<br>↓↓↓↓↓↓↓↓↓↓↓↓↓↓<br>";
$list3->deleteAll(2);
echo "↓↓↓↓↓↓↓↓↓↓↓↓↓↓<br>";

$list3->visit();
echo "<br>";
?>  
