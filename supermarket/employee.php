<?php
include "databaseEmployee.php";
include "database.php";
$name=$_POST["name"];
$appointment=$_POST["appointment"];
echo $name; echo "<br>";
echo $appointment; echo "<br>";
$sql="INSERT INTO employee(name,appointment)values('$name','$appointment')";
if($conn->query($sql) === TRUE ){
	echo "New record created successfully"; echo "<br>";
}
else{
	echo"Error: " .$sql . "<br>" .$conn->error;
}
$sql=$sql = "SELECT id, username,email FROM customerr";
$result = $conn->query($sql);
if($result->num_rows>0){
while($row = $result->fetch_assoc()){
	
    echo "id: " . $row["id"]. " Name: " . $row["username"]. " " . $row["email"]. "<br>";
	}}
  
 else {
  echo "0 results";
}

	


?>