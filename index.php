<?php
class Rectangle {
    var $width;
    var $height;

    function __construct($width,$height)
    {
        $this->width = $width;
        $this->height = $height;
    }

    function getArea() {
        return $this->width * $this->height;
    }

    function getPerimeter() {
        return ($this->width + $this->height)*2;
    }

    function display() {
        return "Area is :".$this->getArea()."Perimeter is :".$this->getPerimeter();
    }
}

$rectang1 = new Rectangle('1','3');
echo $rectang1->display();
$rectang2 = new Rectangle('5','4');
echo $rectang2->display();