<?php

require('con.php');

function login ($username, $password,$select_user)
{
	$con=getConnection();
	$sql= "select * from (notun ekta student login table banaya ekhane nam ta lekhen ) where userName ='{$username}' and password ='{$password}' and userType= '{$select_user}'";
	$result = mysqli_query($con, $sql);

	if(mysqli_num_rows($result))
	{
		return true;
	}
	else return false;


}
function preg ($username, $password,$email,$dob,$gender,$degree,$bloodgroup,$select_user)
{
	$con=getConnection();
	$sql= "insert into student_reg_table values('','{$username}','{$password}',
	'{$email}','{$dob}','{$gender}','{degree}','{bloodgroup}', '{$select_user}')";
	

	if(mysqli_query($con, $sql))
	{
		return true;
	}
	else return false;


}


?>