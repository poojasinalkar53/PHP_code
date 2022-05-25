<html>
<head>
<title>Session Test</title>
</head>
<body>
<form action ="ass6Q2a.php" method = "post">
<?php
session_start();
$user = $_POST['user']; 
$color = $_POST['color']; 
if( ( $user != null ) and ( $color != null ) ) 
{ 
$_SESSION['username'] = $user;
$_SESSION['bgcolor'] = $color;
echo "Value from Session : ";
echo "<br>.Username : ".$_SESSION['username']; 
echo "<br>Background Color : ".$_SESSION['bgcolor'];
} 
?>
<br><br>
<input type = "submit" value = "submit">
</form>
</body>
</html>