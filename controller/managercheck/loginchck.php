<?php 
	session_start();

	if(isset($_REQUEST['submit'])){
		
		$username = $_REQUEST['username'];
		$password = $_REQUEST['password'];

		if($username != null && $password != null){

			$file = fopen('../../models/user.txt', 'r');

			
			while(!feof($file)){

				$user = fgets($file);
				$userArry = explode('|', $user);
				$admintype = "admin";
				$managerType = "manager";
				$teacherType = "teacher";
				$studentType = "student";
				
				
				if(trim($userArry[1]) == $username && trim($userArry[2]) == $password && trim($userArry[4]) == $admintype){
					$_SESSION['status'] = true;
					$_SESSION['current_user'] = $userArry;
					setcookie('status', 'true', time()+3600, '/');
					header('location: ../../views/manager/phome.php');
				}else if(trim($userArry[1]) == $username && trim($userArry[2]) == $password && trim($userArry[4]) == $managerType){
					$_SESSION['status'] = true;
					$_SESSION['current_user'] = $userArry;
					setcookie('status', 'true', time()+3600, '/');
					header('location: ../../views/manager/phome.php');
				}else if(trim($userArry[1]) == $username && trim($userArry[2]) == $password && trim($userArry[4]) == $teacherType){
					$_SESSION['status'] = true;
					$_SESSION['current_user'] = $userArry;
					setcookie('status', 'true', time()+3600, '/');
					header('location: ../../views/manager/phome.php');
				}else if(trim($userArry[1]) == $username && trim($userArry[2]) == $password && trim($userArry[4]) == $studentType){
					$_SESSION['status'] = true;
					$_SESSION['current_user'] = $userArry;
					setcookie('status', 'true', time()+3600, '/');
					header('location: ../../views/manager/phome.php');
				}
			}

			echo "invalid username/password";

		}else{
			echo "null submission";
		}
	}
?>