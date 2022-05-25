<?php
error_reporting(0);
$name=$_POST['name'];
$mail=$_POST['mail'];
echo "<h2>";
echo ucwords($name);
echo "<h2>";
if (str_contains($mail,'@')) { 
echo 'Mail Address Contains @ Symbol';
}
else
{
echo 'Mail Address Doesn\'t Contains @ Symbol';
}
echo "</h2>";
echo "<script>console.log('user Mail ID: " . $mail . "' );</script>";
?>