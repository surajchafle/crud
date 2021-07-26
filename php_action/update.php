<?php 

require_once 'db_connect.php';

if(isset($_POST['update'])) {
	$name = $_POST['name'];
	$dob = $_POST['dob'];
	$age = $_POST['age'];
	$address = $_POST['address'];
    $city = $_POST['city'];
    $state = $_POST['state'];
	$id = $_POST['id'];

	$sql  = "UPDATE student SET name = '$name', dob = '$dob', age = '$age', address = '$address', city = '$city', state = '$state' WHERE id = {$id}";
	if($connect->query($sql) === TRUE) {
		echo "<p>Succcessfully Updated</p>";
		echo "<a href='../edit.php?id=".$id."'><button type='button'>Back</button></a>";
		echo "<a href='../index.php'><button type='button'>Home</button></a>";
	} else {
		echo "Erorr while updating record : ". $connect->error;
	}

	$connect->close();

}

?>