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
$user = $_POST['user']; 
$color = $_POST['color']; 
if( ( $user != null ) and ( $color != null ) ) 
{ 
setcookie( "username", $user , time() + 86400 ); // 24 hours 
setcookie( "bgcolor", $color, time() + 86400 ); 
echo "Value from Cookie : ";
echo "<br>.Username : ".$user; 
echo "<br>Background Color : ".$color; 
}
?>
<form action="ass6Q6a.php">
<br><br>
<input type = "submit" value = "submit">
</form>
</body>
</html>