<?php
include "database.php";
	$firstName=$_POST["firstName"];
$lastName=$_POST["lastName"];
$age=$_POST["age"]; echo"<br>";
$sql="INSERT INTO students(firstName,lastName,age)values('$firstName','$lastName','$age')";
if($conn->query($sql) === TRUE){
	echo "New record created successfully";
}
else{
	echo"Error: " .$sql . "<br>" .$conn->error;
}
$conn->close();
echo"Student Information" ;echo"<br>";

echo "First Name:"; echo $firstName; echo"<br>"; 
 echo "Last Name:";echo $lastName;  echo"<br>"; 
echo "Age:";echo $age; 

	?>