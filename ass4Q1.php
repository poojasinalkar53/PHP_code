<?php
define("pi",3.1421);
interface shape
{
function area();
function volume();
const p=3;
}
class cylinder implements shape
{ 
public $r=0;
public $h=0;
function __construct($rad,$height)
{
$this->r=$rad;
$this->h=$height;
}
public function area()
{
return (2*pi*$this->r*$this->h)+2*pi*$this->r*$this->r;
}
public function volume()
{
return pi*$this->r*$this->r*$this->h;
}
}
$r=(float)readline("Enter The radius :");
$h=(float)readline("Enter The Height: :");
$myobj=new cylinder($r,$h);
echo "volume of Cylinder: ".$myobj->volume();
echo "\nArea of Cylinder: ".$myobj->area();
?>
