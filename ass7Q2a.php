<?php
error_reporting(0);
$Mname=$_POST['Mname'];
$Mno=$_POST['Mno'];
$Ryear=$_POST['Ryear'];
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
$mysql="Insert into Moive(Mno,Mname,Ryear) Values ($Mno,'$Mname',$Ryear)";
$result=mysqli_query($conn,$mysql) or die("Something Went wrong");
if($result)
echo "<h1>Congratulation $Mname Movie's data Added Successfully🎉🎉🎉 </h1>";
else
echo "Sorry data not added";
?>
