<?php
function f()
{
$cnt=func_num_args();
$num=func_get_arg(0);
if($cnt==1)
{
$fact=1;
for($i=1;$i<=$num;$i++)
{
$fact=$fact*$i;
}
echo "Value of Factorial ".$num." is ".$fact;
}
else if(func_get_arg(0)>func_get_arg(1))
{
echo "Enter Valid Number";
}
else
{
$num1=func_get_arg(0);
$num2=func_get_arg(1);
echo "<table border=2px>";
for($i=1;$i<=10;$i++)
{
echo "<tr>";
for($j=$num1;$j<=$num2;$j++)
{
echo "<td>";
echo " ".$j." * ".$i." = ".$i*$j;
echo "</td>";
}
echo "</tr>";
}
echo "</table>";
}
}
$num1=(int)$_POST['num1'];
$num2=$_POST['num2'];
if($num2=="")
f($num1);
else
f($num1,$num2);
?>