<?php

class Shape
{
    public $width;
    public $height;
    

    function __construct($width, $height) {
        $this->width = $width;
        $this->height = $height;
    }
}

class triangle extends shape
{
    function area()
    {
        return ($this->width * $this->height) / 2;
    }
}

class rectangle extends Shape
{
    function area()
    {
        return $this->width * $this->height;
    }
}

// test
$tri = new triangle(10, 20);
$rect = new rectangle(10, 20);

echo "tri: width=". $tri->width. ", height=". $tri->height. ", area=". $tri->area();
echo "<br>";
echo "rect: width=". $rect->width. ", height=". $rect->height. ", area=". $rect->area();

?>
