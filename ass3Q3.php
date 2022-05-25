<?php

$str1=$_POST['str'];
$str2="";
for($i=strlen($str1)-1;$i>=0;$i--)
{
$str2.=$str1[$i];
}
if($str1==$str2)
{
echo "Given String is Palindrome";
}
else
{
echo "Given String is not palindrome";
}
?>