<?php

class CalcValues
{
    public $arr;
    public $avg;
    public $sum;
    public $min;
    public $max;
    public $size;

    function __construct($arr)
    {
        if ( gettype($arr) != "array" || $arr == []) {
            echo "<br>";
            echo "Incorrect input";
            $this->arr = [];
            return; 
        }

        $this->arr = $arr;
        $this->sum = 0; 
        $this->min = $arr[0][0];
        $this->max = $arr[0][0];
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

    public function echoArray()
    {
        echo "<br>";
        echo "values:<br>";
        foreach($this->arr as $row) {
            foreach($row as $value){
                echo "$value, ";
            }
            echo "<br>";
        }
    }

    public function echoValues()
    {
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
$Arr1 = new CalcValues($array1);
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
$Arr2 = new CalcValues($array2);
$Arr2->echoArray();
$Arr2->echoValues();
echo "<br>"; 

// test 3
echo "<br>";
$array3 = [];
$Arr3 = new CalcValues($array3);
$Arr3->echoArray();
$Arr3->echoValues();
echo "<br>"; 

// test 4
echo "<br>";
$array4 = 0;
$Arr4 = new CalcValues($array4);
$Arr4->echoArray();
$Arr4->echoValues();
echo "<br>"; 

?>
