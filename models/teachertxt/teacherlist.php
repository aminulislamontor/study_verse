<?php



function registration( $userName ,$password,$userType)
{
	$con=mysqli_connect('localhost', 'root','','study_verse_db');
	$sql= "INSERT into login_tbl VALUES('{$userName}','{$password}','{$userType}')";
	if(mysql_query($con,$sql))
	{
		echo"registration done";

		header('location: ../../views/login.php');

	}
	else echo"error founded ";

}



?>