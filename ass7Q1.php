<?php
error_reporting(0);
$Hname=$_POST['Hname'];
// echo "Works with $Hname";
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
//to create the table 
echo "<table style=\"width:50%\" border=1px>";
$arr=array("Doc. No."," Doctor Name","Address","City","Area");
foreach($arr as $value)
{
echo "<th bgcolor='pink' text-align: center>";
echo $value;
echo "</th>";
}
//to retrieve the data
$mysql="Select * from doctor where Dno in (Select Dno from works where Hno=(Select Hno from 
Hospital where Hname='$Hname'))";
$result=mysqli_query($conn,$mysql) or die("Something Went wrong");
$data=array(0);
while($row=mysqli_fetch_array($result))
{
$DB[0]=$row['Dno'];
$DB[1]=$row['Dname'];
$DB[2]=$row['Address'];
$DB[3]=$row['City'];
$DB[4]=$row['Area'];
echo "<tr>";
foreach($DB as $value)
{
echo "<td style='text-align:center'>".$value."</td>";
}
echo "</tr>";
}
?>
