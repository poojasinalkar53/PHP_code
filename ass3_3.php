<?php
error_reporting(0);
$str1="You are a great";
$str2=" Kavya";
$pos=18;
X_replace($str1,$str2,$pos);
function X_replace($str1,$str2,$pos) //Function to replace $str2 in $str1 from given position 
{
$newstr="";
for($i=0;$i<=$pos;$i++)
{
$newstr.=$str1[$i]; 
}
for($j=0;$j<=strlen($str2);$j++)
{
$newstr.=$str2[$j]; 
}
echo $newstr;
}
?>
