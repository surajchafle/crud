<?php 

require_once 'db_connect.php';

if(isset($_POST['create'])) {
	$name = $_POST['name'];
	$dob = $_POST['dob'];
	$age = $_POST['age'];
	$address = $_POST['address'];
    $city = $_POST['city'];
    $state = $_POST['state'];


	$sql = "INSERT INTO student (name, dob, age, address, city, state) VALUES ('$name', '$dob', '$age', '$address','$city','$state')";
	if($connect->query($sql) === TRUE) {
		echo "<p>New Record Successfully Created</p>";
		echo "<a href='../create.php'><button type='button'>Back</button></a>";
		echo "<a href='../index.php'><button type='button'>Home</button></a>";
	} else {
		echo "Error " . $sql . ' ' . $connect->connect_error;
	}

	$connect->close();
}

?>