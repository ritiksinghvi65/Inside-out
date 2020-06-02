<?php
$name = $_POST["name"];
$phone = $_POST["phone"];
$email = $_POST["email"];

$conn = new mysqli('insideout.com','root','','newdata');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into formdata(name, phone, email) values(?, ?, ?)");
		$stmt->bind_param("sis", $name, $phone, $email);
		$execval = $stmt->execute();
		echo $execval;
		header("Location: http://insideout.com");
		echo "<script>alert('Register successfully')</script>";
		$stmt->close();
		$conn->close();
	}
?>