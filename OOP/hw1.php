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

class Triangele extends Shape
{
    function area()
    {
        return ($this->width * $this->height) / 2;
    }
}

class Rectangle extends Shape
{
    function area()
    {
        return $this->width * $this->height;
    }
}

// test
$tri = new Triangle(10, 20);
$rect = new Rectangle(10, 20);

echo "tri: width=". $tri->width. ", height=". $tri->height. ", area=". $tri->area();
echo "<br>";
echo "rect: width=". $rect->width. ", height=". $rect->height. ", area=". $rect->area();

?>
