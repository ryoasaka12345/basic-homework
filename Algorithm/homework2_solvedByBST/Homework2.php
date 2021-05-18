<?php

require('SearchBinaryTree.php');

function pushPairs($BST, $arr1, $arr2)
{
    foreach ($arr1 as $elem1){
        foreach ($arr2 as $elem2){
            $BST->insert([$elem1, $elem2]);
        }
    }
}
    
// test 1
$BST = new SearchBinaryTree();
$arr1 = [11, 7, 1];
$arr2 = [4, 6, 2];
$k = 3;
pushPairs($BST, $arr1, $arr2);
$BST->traverseInOrder($BST->getRoot(), $k); // output

echo "<br>";
// test 2
$BST = new SearchBinaryTree();
$arr1 = [4, 6, 2];
$arr2 = [11, 7, 1];
$k = 3;
pushPairs($BST, $arr1, $arr2);
$BST->traverseInOrder($BST->getRoot(), $k); // output

echo "<br>";
// test 3
$BST = new SearchBinaryTree();
$arr1 = [1, 2, 3, 4, 5];
$arr2 = [6, 7, 8, 9, 10, 11, 12];
$k = 5;
pushPairs($BST, $arr1, $arr2);
$BST->traverseInOrder($BST->getRoot(), $k); // output   

?>
