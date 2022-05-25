<?php
//Interface having one method area 

use shape as GlobalShape;

interface Shape 
{
public function area();
}
//class rectangle in implementing the interface Shape & responsible to give implementation for the method area
class Rectangle 
{
public $length=0;
public $width=0;
public function __construct($l,$w)
{
$this->length=$l;
$this->width=$w;
}
public function area()
{
echo "Area of a Rectangle: ".$this->length*$this->width;
}
}
//Class Square is extending rectangle & overriding the method area with different implementation 
class Square extends Rectangle
{
public $side=0;
public function __construct($side)
{
$this->side=$side;
}
public function area()
{
echo "\nArea of a Square: ".pow($this->side,2);
}
}
//class Circle in implementing the interface Shape & responsible to give implementation for the method area
class Circle 
{
public $rad=0;
public function __construct($rad)
{
$this->rad=$rad;
}
public function area()
{
echo "\nArea of circle: ".(2*3.1421*$this->rad*$this->rad);
}
}
//object of class rectangle
$obj1=new Rectangle(4,6);
$obj1->area();
//object of class Square
$obj2=new Square(5);
$obj2->area();
//object of class Circle
$obj3=new Circle(5.5);
$obj3->area();
?>
