<?php
include "database.php";
$name=$_POST["name"];
$email=$_POST["email"];
$countryCode=$_POST["countryCode"];
$phone=$_POST["phone"];
$password=$_POST["password"];
echo $name; echo "<br>";
echo $email; echo "<br>";
echo $countryCode; echo "<br>";
echo $phone; echo "<br>";
echo $password; echo "<br>";
$sql="INSERT INTO customerr(username,email,countryCode,phone,password)values('$name','$email','$countryCode','$phone','$password')";
if($conn->query($sql) === TRUE ){
	echo "New record created successfully";
}
else{
	echo"Error: " .$sql . "<br>" .$conn->error;
}
$conn->close();
?>