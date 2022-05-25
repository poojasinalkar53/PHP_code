<?php
error_reporting(0);
$code=array(0);
$name=array(0);
$rate=array(0);
$qty=array(0);
$bill=array(0);
$total=0;
echo "<h2>Your Final Bill </h2>";
echo "<table style=\"width:50%\" border=1px>";
$arr=array("Code"," Product Name","Rate","Quantity","Total");
foreach($arr as $value)
{
echo "<th>";
echo $value;
echo "</th>";
}
$data=array(0);
for($i=1;$i<=5;$i++)
{
$data[0]=$code[$i]=$_POST["code$i"];
$data[1]=$name[$i]=$_POST["name$i"];
$data[2]=$rate[$i]=$_POST["rate$i"];
$data[3]=$qty[$i]=$_POST["quantity$i"];
$data[4]=$bill[$i]=(int)$qty[$i]*(float)$rate[$i];
$total+=$bill[$i];
echo "<tr>";
foreach($data as $value)
{
echo "<td>".$value."</td>";
}
echo "</tr>";
}
echo "</table>";
echo "<br>Total Amount: $total";
?>