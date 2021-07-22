<?php
$name=$_POST["name"];
$marks=$_POST["Marks"];
$gender=$_POST["gender"];
	$email=$_POST["email"];
$nationality=$_POST["nationality"];
echo "Basic Student Information <br>";
echo"Name:".$name;echo "<br>";
echo"Gender:".$gender;echo "<br>";
echo"Email:".$email;echo "<br>";
echo"Nationality:".$nationality;echo "<br>";
echo"You scored on grade";

switch($marks){
	case $marks>80:
		echo ": Grade A";
		break;
	case $marks>70:
		echo ": Grade B";
		break;
	case $marks>60:
		echo ": Grade C";
		break;
	case $marks<50:
		echo ": Fail";
		break;
			default:
		echo "No marks";
		break;

}
?>