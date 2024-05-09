<?php
$xml = new DOMDocument("1.0");
$xml->load("students.xml");

//$xml->preserveWhiteSpace = false;
//$xml->formatOutput = true;
// documant

$rootTag = $xml->getElementsByTagName("students")->item(0);

$dataTag = $xml->createElement ("student");
$name = $xml->createElement("name",$_REQUEST["fullName"]);
$bday = $xml->createElement("birthday",$_REQUEST["birthday"]);
$course = $xml->createElement("course",$_REQUEST["course"]);


$dataTag->setAttribute("id",$_REQUEST["studId"]);
$dataTag->appendChild($name);
$dataTag->appendChild($bday );
$dataTag->appendChild($course);

$rootTag->appendChild($dataTag);

$xml->save("students.xml");
echo "Saved!";

?>