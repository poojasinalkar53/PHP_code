<?php
//error_reporting(0);
$Aname=$_POST['Aname'];
// echo "Works with $Aname";
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
$mysql="select Mname from Moive where Mno in (select Mno from work where Ano=(select Ano from 
actor where Aname='$Aname'))";
echo "<h1>$Aname Acted in Following Movies:</h1>";
$result=mysqli_query($conn,$mysql) or die("Something Went wrong");
while($row=mysqli_fetch_array($result))
{
echo "<h3>".$row['Mname']."</h3>";
}
?>