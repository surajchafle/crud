<?php 

require_once 'php_action/db_connect.php';

if($_GET['id']) {
	$id = $_GET['id'];

	$sql = "SELECT * FROM student WHERE id = {$id}";
	$result = $connect->query($sql);

	$data = $result->fetch_assoc();

	$connect->close();

?>

<!DOCTYPE html>
<html>
<head>
	<title>Edit Member</title>

	<style type="text/css">
		fieldset {
			margin: auto;
			margin-top: 100px;
			width: 50%;
		}

		table tr th {
			padding-top: 20px;
		}
	</style>

</head>
<body>

<fieldset>
	<legend>Edit Member</legend>

	<form action="php_action/update.php" method="post">
		<table cellspacing="0" cellpadding="0">
			<tr>
				<th>Name</th>
				<td><input type="text" name="name" placeholder="Name" value="<?php echo $data['name'] ?>" /></td>
			</tr>		
			<tr>
				<th>Date of birth</th>
				<td><input type="text" name="dob" placeholder="date of birth" value="<?php echo $data['dob'] ?>" /></td>
			</tr>
			<tr>
				<th>Age</th>
				<td><input type="text" name="age" placeholder="Age" value="<?php echo $data['age'] ?>" /></td>
			</tr>
			<tr>
				<th>Address</th>
				<td><input type="text" name="address" placeholder="Address" value="<?php echo $data['address'] ?>" /></td>
			</tr>
			<tr>
				<th>city</th>
				<td><input type="text" name="city" placeholder="city" value="<?php echo $data['city'] ?>" /></td>
			</tr>
			<tr>
				<th>State</th>
				<td><input type="text" name="state" placeholder="state" value="<?php echo $data['state'] ?>" /></td>
			</tr>
			<tr>
				<input type="hidden" name="id" value="<?php echo $data['id']?>" />
				<td><button type="submit" name="update">Save Changes</button></td>
				<td><a href="index.php"><button type="button">Back</button></a></td>
			</tr>
		</table>
	</form>

</fieldset>

</body>
</html>

<?php
}
?>