<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Reading XML file</title>
</head>
<body>
<?php
error_reporting(0);
$xml=simplexml_load_file("books.xml");
echo "<h1>Book Data: </h1>";
$list=$xml->book;
for($i=0;$i<count($list);$i++)
{
echo "<br>Book Name: ".$list[$i]->book_title;
echo "<br>Publishing Year: ".$list[$i]->book_pub_year;
echo "<br>Book Author: ".$list[$i]->book_author;
echo "<br>";
}
?>
</body>
</html>