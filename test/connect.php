<?php
    $id = $_post['id'];
	$firstName = $_POST['firstName'];
	$lastName = $_POST['lastName'];
	
	print_r($_POST);

	// Database connection
	$conn = new mysqli('localhost','root','','aaa');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$sql = "INSERT INTO farm (id,firstname, lastname) VALUES ('$id','$firstName', '$lastName')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

	}
?>