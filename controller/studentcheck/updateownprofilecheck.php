<?php 
	session_start();
	
	if(isset($_REQUEST['update'])){
		
		$username = $_REQUEST['username'];
		$password = $_REQUEST['password'];
		$email = $_REQUEST['email'];
		$id = $_REQUEST['id'];
		$userType = $_REQUEST['userType'];
		$phoneNumber = $_REQUEST['phoneNumber'];

		$src = $_FILES['myfile']['tmp_name'];
		$des = "../upload/".$_FILES['myfile']['name'];

		move_uploaded_file($src, $des);

		if($username != null && $password != null && $email != null){
			
			$file = fopen('../../models/user.txt', 'r');
			$updatedContent = "";

			while(!feof($file)){
				$line = fgets($file);
				$user = explode('|', $line);
				
				if($user[0] == $id){
					$line = $id."|".$username."|".$password."|".$email."|".$userType."|".$phoneNumber."\r\n";
					//$updatedContent .= $line;
				}
				$updatedContent .= $line;
				
			}

			$file = fopen('../../models/user.txt', 'w');
			fwrite($file, $updatedContent);
			header('location: ../../views/student/updateownprofile.php');

		}else{
			echo "null submission";
		}
	}
	else header('location: ../../views/student/shome.php');

?>