<?php
include "databaseProduct.php";
$name=$_POST["name"];
$price=$_POST["price"];
echo $name; echo "<br>";
echo $price; echo "<br>";
$sql="INSERT INTO product(name,price)values('$name','$price')";
if($conn->query($sql) === TRUE ){
	echo "New record created successfully";
}
else{
	echo"Error: " .$sql . "<br>" .$conn->error;
}
$conn->close();

?>