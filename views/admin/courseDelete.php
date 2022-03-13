<?php 
	include('../header.php');

	$id = $_GET['id'];

	$file = fopen('../../models/teachertxt/courseList.txt', 'r');

	while (!feof($file)) {
		$user = fgets($file);
		$userArray = explode('|', $user);
		if($userArray[0] == $id){
			break;
		}
	}
?>

<html>
<head>
	<title>Delete User</title>
</head>
<body>

	<a href="courseApproval.php"> Back </a> |
	<a href="../../controller/managercheck/logout.php"> logout </a>
	<br><br>

	<form method="POST" action="../../controller/admincheck/courseDeletecheck.php">
		<input type="hidden" name="id" value="<?=$id?>"/>
		
		<fieldset>
			<legend>Delete User</legend>
		<table>
			<tr>
				<td>Name</td>
				<td><input type="text" name="name" value="<?=$userArray[1]?>"></td>
			</tr>
            <tr>
				<td>Fee</td>
				<td><input type="text" name="fee" value="<?=$userArray[3]?>"></td>
			</tr>
			<tr>
				<td>Status</td>
				<td><input type="text" name="status" value="<?=$userArray[2]?>"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" name="delete" value="Delete"></td>
				<td><input type="submit" name="back" value="Back"></td>
				
			</tr>
		</table>
		</fieldset>
	</form>
</body>
</html>