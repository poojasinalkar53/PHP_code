<?php
function xstr_rev($str,$n) //To reverse the string str from n to 0
{
if($n>strlen($str)) //if n is greater than length of string str
{
echo "Position is out of Range";
return;
}
$newstr="";
for($i=$n;$i>=0;$i--)
{
$newstr.=$str[$i];
}
echo $newstr;
}
$str="Radhe Radhe";
$n=9;
xstr_rev($str,$n);
?>