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
        $this->arr = $arr;
        $this->size = sizeof($arr);
        $this->sum = 0; 
        $this->min = $arr[0];
        $this->max = $arr[0];
        
        for ($i=0; $i<$this->size; $i++) {
            $this->sum += $this->arr[$i];
            
            if ($this->arr[$i] < $this->min) {
                $this->min = $this->arr[$i];
            }

            if ($this->arr[$i] > $this->max) {
                $this->max = $this->arr[$i];
            }
        }

        $this->avg = $this->sum / $this->size;
    }

    public function echoArray()
    {
        echo "<br>";
        echo "values: ";
        foreach($this->arr as $value) {
            echo "$value, ";
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

// Ttest1
$arr1 = [5, 12, 17, 9, 3];
$Arr1 = new CalcValues($arr1);
$Arr1->echoArray();
$Arr1->echoValues();
echo "<br>";

// Ttest2
$arr2 = [13, 4, 8, 14, 1];
$Arr2 = new CalcValues($arr2);
$Arr2->echoArray();
$Arr2->echoValues();
echo "<br>";

// Ttest3
$arr3 = [9, 5, 3, 7, 21];
$Arr3 = new CalcValues($arr3);
$Arr3->echoArray();
$Arr3->echoValues();
echo "<br>";

?>
