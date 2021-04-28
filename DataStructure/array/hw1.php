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
    
    // set $this->arr
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
    public function calcValues()
    {
        if (gettype($this->arr) != "array" || $this->arr == []) {
            echo "calcValues(): set correct array <br>";
            return;
        }
        
        $this->sum = 0; 
        $this->min = $this->arr[0];
        $this->max = $this->arr[0];
        $this->cnt = 0;
        
        foreach ($this->arr as $value) {
            $this->sum += $value;
            $this->cnt += 1;

            if ($value < $this->min) {
                $this->min = $value;
            }

            if ($value > $this->max) {
                $this->max = $value;
            }
        }

        $this->avg = $this->sum / $this->cnt;
    }

    // output elements of the array
    public function echoArray()
    {
        if (gettype($this->arr) != "array" || $this->arr == []) {
            echo "echoArray(): set correct array <br>";
            return;
        }

        echo "<br>";
        echo "values: ";
        foreach($this->arr as $value) {
            echo "$value, ";
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

// Test1
$arr1 = [5, 12, 17, 9, 3];
$Arr1 = new OperateArray($arr1);
$Arr1->calcValues();
$Arr1->echoArray();
$Arr1->echoValues();
echo "<br>";

// Test2
$arr2 = [13, 4, 8, 14, 1];
$Arr2 = new OperateArray($arr2);
$Arr2->calcValues();
$Arr2->echoArray();
$Arr2->echoValues();
echo "<br>";

// Test3
$arr3 = [9, 5, 3, 7, 21];
$Arr3 = new OperateArray($arr3);
$Arr3->calcValues();
$Arr3->echoArray();
$Arr3->echoValues();
echo "<br>";

// Test4
$arr4 = [];
$Arr4 = new OperateArray($arr4);
$Arr4->calcValues();
$Arr4->echoArray();
$Arr4->echoValues();
echo "<br>";

// Test5
$arr5 = 5;
$Arr5 = new OperateArray($arr5);
$Arr5->calcValues();
$Arr5->echoArray();
$Arr5->echoValues();
echo "<br>";

?>
