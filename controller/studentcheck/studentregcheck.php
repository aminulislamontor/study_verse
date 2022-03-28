<?php

	session_start();

	$select_user= $_REQUEST['select_user'];
	
	if($select_user=='student')
	{
		require('../models/studenttxt/database.php');
	}
	
	
	if(isset($_REQUEST['submit'])){


		//$id = rand();
		$username = $_REQUEST['username'];
		$password = $_REQUEST['password'];
		$email = $_REQUEST['email'];
		$select_user=$_REQUEST['select_user'];
		$dob = $_REQUEST['dob'];

		$gender= $_REQUEST['gender'];
		$degree= $_REQUEST['education'];
		$bloodgroup= $_REQUEST['bg1'];

		
		

		if($username != null && $password != null && $email != null && $dob != null && $gender != null&& $degree != null && $bloodgroup != null ){
		

			$status= preg($username,$password,$email,$dob,$gender,$degree,$bloodgroup,$select_user);
			if($status)
			{
				header('location: ../../views/student/student_list.php');
			}

			/*$user = $id."|".$username."|".$password."|".$email."|".$dob."|".$gender."|".$degree."|".$bloodgroup."\r\n";
			$file = fopen('../../models/user.txt', 'a');
			fwrite($file, $user);
			fclose($file);*/
			;
			
		}else{
			echo "null submission";
		}
	
	}
	else 
	{
		header('location: ../../views/preg.php');
	}
?>