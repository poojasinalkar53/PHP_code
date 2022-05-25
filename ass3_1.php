<?php
error_reporting(0);
function xstrstr($str1,$str2) //This function searches first occurrence of $str2 in $str1 (case sensitive)
{
$str3="";
for($i=0;$i<strlen($str1);$i++)
{
for($j=$i;$j<(strlen($str2)+$i);$j++)
{
$str3.=$str1[$j]; 
}
if($str3==$str2)
{
return $i;
}
else
{
$str3="";
}
}
return -1;
}
$str2="it";
$str1="if it is works don't touch it";
$int= xstrstr($str1,$str2);
echo $int;
?>