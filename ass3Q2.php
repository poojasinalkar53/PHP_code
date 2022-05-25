<?php
$str1=$_POST['str1'];
$str2=$_POST['str2'];
$opr=$_POST['radio'];
if($opr=="Replace")
{
echo "String is get Replaced";
}
else if($opr=="Search")
{
if(strstr($str1,$str2))
echo "String Searched successfully";
else
echo "String Not Exist";
}
else if($opr=="Concat")
{
$newstr=$str1.$str2;
echo "String After Concatenation: ".$newstr;
}
?>