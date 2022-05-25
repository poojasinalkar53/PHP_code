<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Document</title>
</head>
<body>
<?php
$arr=$_POST['control'];
?>
<form>
<?php
foreach ($arr as $value)
{
if($value=="textbox")
{ ?>
<input type="text" name="textb" value="A textBox"> <br>
<?php
} else if($value=="checkbox")
{ ?>
<input type="checkbox" name="checkb" value="A Check Box"> <br>
<?php
} else if($value=="Reset button")
{ ?>
<input type="reset" name="resetb" value="A Reset Button"> <br>
<?php } else if($value=="password")
{ ?>
<input type="password" name="passb" value="A Password"> <br>
<?php }
} ?>
</form>
</body>
</html>
