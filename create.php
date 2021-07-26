<!DOCTYPE html>
<html>
<head>
	<title>Add Member</title>

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
	<legend>Add Member</legend>

	<form action="php_action/create.php" method="post">
		<table cellspacing="0" cellpadding="0">
			<tr>
				<th>Name</th>
				<td><input type="text" name="name" placeholder="Name" /></td>
			</tr>		
			<tr>
				<th>Last Name</th>
				<td><input type="date" name="dob" placeholder="date of birth" /></td>
			</tr>
			<tr>
				<th>Age</th>
				<td><input type="text" name="age" placeholder="Age" /></td>
			</tr>
			<tr>
				<th>Address</th>
				<td><input type="text" name="address" placeholder="address" /></td>
			</tr>
			<tr>
				<tr>
				<th>City</th>
				<td><input type="text" name="city" placeholder="City" /></td>
			</tr>
			<tr>
				<th>State</th>
				<td><input type="text" name="state" placeholder="state" /></td>
			</tr>
			
			<tr>
				<td><button type="submit" name="create">Save Changes</button></td>
				<td><a href="index.php"><button type="button">Back</button></a></td>
			</tr>
		</table>
	</form>

</fieldset>

</body>
</html>