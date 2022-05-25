<?php
$dir=$_POST['dir'];
if(!is_dir($dir)) // to check directory exist or not
{
    echo "directory doesn't exist";
}
$files=array();
foreach(scandir($dir)as $file) 
{
    if('.'=== $file)continue;
    if('. .'=== $file)continue;
    $files[]=$file;
}
var_dump($files); //displays value along with data type
?>
