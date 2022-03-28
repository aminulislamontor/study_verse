<?php 
	session_start();
	$select_user= $_REQUEST['select_user'];
	if($select_user=='manager')
	{
		require('../models/managertxt/database.php');
	}
	else if($select_user=='admin')
	{
		require('../models/admintxt/database.php');
	}
	else if($select_user=='student')
	{
		require('../models/studenttxt/database.php');
	}
	else if($select_user=='teacher')
	{
		require('../models/teachertxt/database.php');
	}



	if(isset($_REQUEST['submit'])){
		 

		 if( $select_user=='manager')
		 {
		$username = $_REQUEST['username'];
		$password = $_REQUEST['password'];
		
		//echo $select_user;

		if($username != null && $password != null && $select_user!= null){

			$status= login($username,$password,$select_user);
			if($status)
			{
				$_SESSION['status'] = true;
				$_SESSION['current_user'] = $username;
			setcookie('status', 'true', time()+3600, '/');
		header('location: ../views/manager/phome.php');
			}
			else 
			{
				header('location: ../../views/login.php?msg=error');
			}

		}
		else echo "you have missed to fill-- username/password";
	}

			else if( $select_user=='admin')
		 {
		$username = $_REQUEST['username'];
		$password = $_REQUEST['password'];
		

		if($username != null && $password != null && $select_user!= null){

			$status= login($username,$password,$select_user);
			if($status)
			{
				$_SESSION['status'] = true;
				$_SESSION['current_user'] = $username;
			setcookie('status', 'true', time()+3600, '/');
		header('location: ../../views/admin/phome.php');
			}
			else 
			{
				header('location: ../../views/login.php?msg=error');
			}
		}
}			

else if( $select_user=='student')
		 {
		$username = $_REQUEST['username'];
		$password = $_REQUEST['password'];
		

		if($username != null && $password != null && $select_user!= null){

			$status= login($username,$password,$select_user);
			if($status)
			{
				$_SESSION['status'] = true;
				$_SESSION['current_user'] = $username;
			setcookie('status', 'true', time()+3600, '/');
		header('location: ../../views/student/phome.php');
			}
			else 
			{
				header('location: ../../views/login.php?msg=error');
			}
		}
}

		else if( $select_user=='teacher')
		 {
		$username = $_REQUEST['username'];
		$password = $_REQUEST['password'];
		

		if($username != null && $password != null && $select_user!= null){

			$status= login($username,$password,$select_user);
			if($status)
			{
				$_SESSION['status'] = true;
				$_SESSION['current_user'] = $username;
			setcookie('status', 'true', time()+3600, '/');
		header('location: ../../views/teacher/phome.php');
			}
			else 
			{
				header('location: ../../views/login.php?msg=error');
			}
		}
}






			//$file = fopen('../models/user.txt', 'r');

			/*while(!feof($file)){

				$user = fgets($file);
				$userArry = explode('|', $user);
				$admintype = "admin";
				$managerType = "manager";
				$teacherType = "teacher";
				$studentType = "student";*/
				
				
				/*if(trim($userArry[1]) == $username && trim($userArry[2]) == $password && trim($userArry[4]) == $admintype){
					$_SESSION['status'] = true;
					$_SESSION['current_user'] = $userArry;
					setcookie('status', 'true', time()+3600, '/');
					header('location: ../views/admin/ahome.php');
				}else if(trim($userArry[1]) == $username && trim($userArry[2]) == $password && trim($userArry[4]) == $managerType){
					$_SESSION['status'] = true;
					$_SESSION['current_user'] = $userArry;
					setcookie('status', 'true', time()+3600, '/');
					header('location: ../views/manager/phome.php');
				}else if(trim($userArry[1]) == $username && trim($userArry[2]) == $password && trim($userArry[4]) == $teacherType){
					$_SESSION['status'] = true;
					$_SESSION['current_user'] = $userArry;
					setcookie('status', 'true', time()+3600, '/');
					header('location: ../views/manager/phome.php');
				}else if(trim($userArry[1]) == $username && trim($userArry[2]) == $password && trim($userArry[4]) == $studentType){
					$_SESSION['status'] = true;
					$_SESSION['current_user'] = $userArry;
					setcookie('status', 'true', time()+3600, '/');
					header('location: ../views/student/shome.php');
				}*/
			
}
			

		
		else{
			echo "null submission";
		}
	
?>