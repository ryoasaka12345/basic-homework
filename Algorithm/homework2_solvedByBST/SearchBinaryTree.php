<?php
require('BinaryTree.php');

class SearchBinaryTree extends BinaryTree
{
	public function insert($data) 
    {          
		if($this->root == NULL) {
		    $this->root = new Node($data);
		} else {
			$current = $this->root;
			while(true) {
                if($data[0] + $data[1] <= $current->getSum()) {
                
                    if($current->getLeft()) {
                        $current = $current->getLeft();
                    } else {
                        $current->setLeft(new Node($data));
                        break; 
                    }

                } else if($data[0] + $data[1] > $current->getSum()){

                    if($current->getRight()) {
                        $current = $current->getRight();
                    } else {
                        $current->setRight(new Node($data));
                        break; 
                    }

                } else {
                    break;
                }
			} 
		}
	}

    // Outputs data when it is not possible to move to the left node.
    // Finish when k data have been output.
    public function traverseInOrder($node, &$k)
    {
        if($node == null) 
            return;

        if ($k > 0) 
            $this->traverseInOrder($node->getLeft(), $k);

        if ($k > 0) {
            $tmp = $node->getData();
            echo "[". $tmp[0]. ", ". $tmp[1]. "]";
            echo "<br>";
            $k -= 1;
        }

        if($k > 0)
            $this->traverseInOrder($node->getRight(), $k);
    }
}  
?>
