<?php
$name=$_POST["name"];
$passoword=$_POST["passoword"];
$gender=$_POST["gender"];
$email=$_POST["email"];
$phoneCode=$_POST["phoneCode"];
$phone=$_POST["phone"];	
echo $name; echo"<br>";
echo $passoword; echo"<br>";
echo $gender; echo"<br>";
echo $email; echo"<br>";
echo $phone ;
if(!empty($name) || !empty($passoword) || !empty($gender) || !empty($email) || !empty($phoneCode) || !empty($phone)){
	$host ="localhost";
	$dbUsername ="root";
	$dbPassword ="";
	$dbname ="registration";
	$conn =new mysqli($host,$dbUsername,$dbPassword,$dbname);
	if(mysqli_connect_error()){
		die('Connect Error('. mysqli_connect_errno().')'.mysqli_connect_error());}
	
	
	else{
		$SELECT ="SELECT email From register Where email= ? Limit 1";
		$INSERT ="INSERT into register (name,passoword,gender,email,phoneCode,phone) values($name,$passoword,$gender,$email,$phoneCode,$phone)";
		$stmt =$conn->prepare($SELECT);
		$stmt->bind_param("s", $email);
		$stmt->execute();
		$stmt->bind_result($email);
		$stmt->store_result();
		$rnum = $stmt->num_rows;
		if($rnum==0){
			$stmt->close();
			$stmt = $conn->prepare($INSERT);
			$stmt->bind_param("ssssii", $name,$passoword,$gender,$email,$phoneCode,$phone);
			$stmt->execute();
			echo "New record inserted successfully";
		}
		else{
			echo "someone already register use this email";
		}
		
	}
	$stmt->close();
	$conn->close();
	
	
} 
else {
	echo "All field re required";
	die();
}

?>

