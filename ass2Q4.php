<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Document</title>
</head>
<body>
<br>
<form method="post">
<br>
<input type="text" name="state" placeholder="Enter The State Name">
<br>
<br>
<input type="text" name="sth" placeholder="Enter The Donation for South">
<br>
<br>
<input type="text" name="wst" placeholder="Enter The Donation for West"> <br>
<br>
<input type="text" name="nth" placeholder="Enter The Donation for North"> <br>
<br>
<input type="text" name="est" placeholder="Enter The Donation for East"> <br> <br>
<input type="submit" value="submit">
</form>
<?php
if($_POST)
{
$state=$_POST['state'];
echo "State Name: ".$state;
$total=0;
$south=(float)$_POST['sth'];
$total+=$south;
$north=(float)$_POST['nth'];
$total+=$north;
$west=(float)$_POST['wst'];
$total+=$west;
$east=(float)$_POST['est'];
$total+=$east;
echo "<br> The Total Donation: ".$total;
echo "<br> Donation by South: ".round(($south/$total)*100,2);
echo "<br> Donation by North: ".round(($north/$total)*100,2);
echo "<br> Donation by East: ".round(($east/$total)*100,2);
echo "<br> Donation by West: ".round(($west/$total)*100,2);
}
?>
</body>
</html>