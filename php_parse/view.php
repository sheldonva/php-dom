<?php    
$xml = new domdocument();
$xml->load("students.xml");

$students = $xml->getElementsByTagName("student");

//print_r($students);


foreach ($students as $student){
	$id = $student->getattribute("id");
	$name = $student->getElementsByTagName("name")->item(0)->nodeValue;
	$birthday=$student->getElementsByTagName("birthday")->item(0)->nodeValue;
	$course=$student->getElementsByTagName("course")->item(0)->nodeValue;
	
	
	echo "<b>Student No.:</b> $id<br>";
	echo "<b>Full Name:</b> $name<br>";
	echo "<b>Birthday:</b> $birthday<br>";
	echo "<b>Course:</b> $course<br>";
	
	echo "<br>";
}

?>