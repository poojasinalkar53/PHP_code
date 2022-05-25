<?php
$xml_doc = new DOMDocument();
$xml_doc->load('books.xml');
$x = $xml_doc->documentElement;
echo "<h2>Book data</h2>";
foreach ($x->childNodes AS $item) {;
print_r ($item->nodeValue);
echo "<br>";
}
$Bname=$xml_doc->getElementsByTagName("book_title");
echo "<h2>Books Names</h2>";
foreach($Bname as $value)
{
echo "<br>".$value->nodeValue;
}
$xml_doc->save('my.doc');
?>