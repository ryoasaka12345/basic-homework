<?php

class OperateArray
{
    public $arr;
    public $avg;
    public $sum;
    public $min;
    public $max;
    public $size;
    public $cnt;

    function __construct($arr)
    {
        if ( gettype($arr) != "array" || $arr == []) {
            echo "<br>";
            echo "Incorrect input <br>";
            $this->arr = [];
            return; 
        }

        $this->arr = $arr;
    }

    //calculate sum, avg, min, max
    public function calcValues(){
        if (gettype($this->arr) != "array" || $this->arr == []) {
            echo "calcValues(): set correct array <br>";
            return;
        }

        $this->sum = 0; 
        $this->min = $this->arr[0][0];
        $this->max = $this->arr[0][0];
        $this->cnt = 0;

        foreach ($this->arr as $row) {
            foreach ($row as $value) {
                $this->sum += $value;
                $this->cnt += 1;

                if ($value < $this->min) {
                    $this->min = $value;
                }
        
                if ($value > $this->max) {
                    $this->max = $value;
                }
            }
        }
        $this->avg = round($this->sum / $this->cnt);
    }

    // output elements of the array
    public function echoArray()
    {
        if (gettype($this->arr) != "array" || $this->arr == []) {
            echo "echoArray(): set correct array <br>";
            return;
        }

        echo "<br>";
        echo "values:<br>";
        foreach($this->arr as $row) {
            foreach($row as $value){
                echo "$value, ";
            }
            echo "<br>";
        }
    }

    // output sum, avg, min and max
    public function echoValues()
    {
        if (gettype($this->arr) != "array" || $this->arr == []) {
            echo "echoValues(): set correct array <br>";
            return;
        }

        echo "<br>";
        echo "AVG: ". $this->avg;
        echo ", SUM: ". $this->sum;
        echo ", MIN: ". $this->min;
        echo ", MAX: ". $this->max;
    }
}

// test 1
echo "<br>";
$array1 = [
    [5, 12, 17, 9, 13],
    [13, 4, 8, 14, 1], 
    [9, 5, 3, 17, 21]
];
$Arr1 = new OperateArray($array1);
$Arr1->calcValues();
$Arr1->echoArray();
$Arr1->echoValues();
echo "<br>";

// test 2
echo "<br>";
$array2 = [
    [5, 12],
    [13, 4, 8, 14, 1, 10, 20, 40], 
    [9, 5, 3, 17, 21]
];
$Arr2 = new OperateArray($array2);
$Arr2->calcValues();
$Arr2->echoArray();
$Arr2->echoValues();
echo "<br>"; 

// test 3
echo "<br>";
$array3 = [];
$Arr3 = new OperateArray($array3);
$Arr3->calcValues();
$Arr3->echoArray();
$Arr3->echoValues();
echo "<br>"; 

// test 4
echo "<br>";
$array4 = 0;
$Arr4 = new OperateArray($array4);
$Arr4->calcValues();
$Arr4->echoArray();
$Arr4->echoValues();
echo "<br>"; 

?>
