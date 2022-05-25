<?php
function f()
{
$cnt=func_num_args();
$num=func_get_arg(0);
if($cnt==1)
{
echo "The Negation of ".$num." is : ".(-1)*$num;
}
else
{
$num1=func_get_arg(0);
$num2=func_get_arg(1);
echo "<table border=2px>";
for($i=1;$i<=$num2;$i++)
{
echo "<tr>";
echo "<td>";
echo " ".$i." * ".$num1." = ".($num1*$i);
echo "</td>";
echo "</tr>";
}
echo "</table>";
}
}
echo "call done";
$num1=(int)$_POST['num1'];
$num2=$_POST['num2'];
if($num2=="")
f($num1);
else
f($num1,$num2);
?>
