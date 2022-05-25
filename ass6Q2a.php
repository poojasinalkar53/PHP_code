<html>
<head>
<title>Session Test</title>
</head>
<?php session_start(); ?>
<body bgcolor="<?php echo $_SESSION['bgcolor']; ?>">
<br>
Is username is set : 
<?php
echo isset($_SESSION['username']);
echo "<br>Session id : ".session_id();
?>
<h1>Welcome <?php echo $_SESSION['username']; ?></h1>
<br>
<?php
echo ("Session info: "); 
print_r($_SESSION); 
session_destroy();
?>
</body>
</html>