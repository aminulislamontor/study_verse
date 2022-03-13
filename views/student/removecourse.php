<?php 
	include('../header.php');

	$id = $_GET['id'];

	$file = fopen('../../models/studenttxt/enrolledcourselist.txt', 'r');

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
	<title> Remove Course </title>
</head>
<body>

	<a href="enrolledcourselist.php"> Back </a> |
	<a href="../../controller/logout.php"> logout </a>
	<br><br>

	<form method="POST" action="../../controller/studentcheck/courseremovecheck.php">
		<input type="hidden" name="id" value="<?=$id?>"/>
		
		<fieldset>
			<legend> Remove Course </legend>
		<table>
			<tr>
				<td> Course Name </td>
				<td><input type="text" name="name" value="<?=$userArray[1]?>"></td>
			</tr>
			<tr>
				<td> Status </td>
				<td><input type="text" name="status" value="<?=$userArray[2]?>"></td>
			</tr>
			<tr>
				<td>Fee</td>
				<td><input type="text" name="fee" value="<?=$userArray[3]?>"></td>
			</tr>
			
			<tr>
				<td></td>
				<td><input type="submit" name="Remove" value="Remove"></td>
				<td><input type="submit" name="back" value="Back"></td>
				
			</tr>
		</table>
		</fieldset>
	</form>
</body>
</html>