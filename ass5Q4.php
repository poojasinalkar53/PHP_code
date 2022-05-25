<?php
$name=$_POST['dir'];
$ext=$_POST['ext'];
if(!($dp=opendir($name))) // open a directory handle
{
    die("can't open the directory");
}
else{
    while($file=readdir($dp)) //read entry from directory handle
    {
        $d_dir=explode(".",$file); //breaks string into array
        $a = strcmp($d_dir[1],$ext); //strcmp used to compair two string
        if($a==0)
        {
            echo "the file names".$file."has".$ext."extension<br>";
        }
    }
}
closedir($dp);
?>
