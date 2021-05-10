<?php

class Queue {
    /** @var array queue element */
    private $elements;

    public function __construct()
    {
        $this->elements = array(); //initialize queue element
    }

    /**
    * insert an element
    * @param int $num
    * @return void
    */
    public function enqueue($num)
    {
        array_unshift($this->elements, $num); //array_unshift: Prepend one or more elements to the beginning of an array (https://www.php.net/manual/en/function.array-unshift.php)
    }

    /**
    * delete front element
    * @return void
    */
    public function dequeue()
    {
        if (!$this->isEmpty()) { //check if queue is not empty
            unset($this->elements[sizeof($this->elements) - 1]); // same to pop function in stack
        }    
    }

    /**
    * get front element
    * @return int
    */
    public function front()
    {
        if (!$this->isEmpty()) {
            return $this->elements[sizeof($this->elements) - 1]; // same to top function in stack
        }
    
        return null;    
    }

    /**
    * check queue is empty or not
    * @return boolean
    */
    public function isEmpty()
    {
        return empty($this->elements);
    }
}

?>
