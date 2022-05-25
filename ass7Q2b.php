<?php
$Mname=$_POST['Mname'];
$Ryear=$_POST['Ryear'];
error_reporting(0);
$servername = "localhost";
$username = "root";
$password = "Pass@12345";
$dbname="DB";
// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);
// Check connection
if ($conn->connect_error) {
die("Connection failed: " .$conn->connect_error);
return 0;
}
else
{
// echo "Connected successfully"; 
}
$mysql="update Moive set Ryear='$Ryear' where Mname='$Mname'";
$result=mysqli_query($conn,$mysql) or die("Something Went wrong");
if($result)
echo "<h1>Congratulation $Mname Movie's data Updated Successfully🎉🎉🎉 </h1>";
else
echo "Sorry data not Updated";
?>
