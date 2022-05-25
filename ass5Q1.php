<?php
$file1=$_POST['file1'];
$file2 = $_POST['file2'];
//to open a file
$f1= fopen($file1, 'r'); //file 1 is open in read mode
$f2= fopen($file2, 'a'); //file 2 is open in append mode
$data= fread($f1,filesize($file1)); //to copy data of file1
fwrite($f2,$data); //pasting this data into file2
//close files
fclose($f1);
fclose($f2);
echo "file is appended";
?>
