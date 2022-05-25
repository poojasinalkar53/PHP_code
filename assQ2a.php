<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Bill</title>
</head>
<body>
<form action="paybill.php" method="post">
<?php for($i=1;$i<=5;$i++)
{?> <br>
<input type="text" name="<?php echo "code".$i ?>" placeholder="<?php echo "Enter Code 
of $i th Item: "?>" > <br>
<input type="text" name="<?php echo "name".$i ?>" placeholder="<?php echo "Enter Name 
of $i th Item: "?>" > <br>
<input type="text" name="<?php echo "rate".$i ?>" placeholder="<?php echo "Enter Rate 
of $i th Item: "?>" > <br>
<input type="text" name="<?php echo "quantity".$i ?>" placeholder="<?php echo "Enter 
Quantity of $i th Item: "?>" > <br> <br>
<?php
if($i==5)
{
?>
<input type="submit" value="Submit"> <br>
<?php
}
}
?>
</form>
</body>
</html>