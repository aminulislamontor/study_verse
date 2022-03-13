<?php 
	session_start();
	
	if(isset($_REQUEST['Remove'])){
		
		$name = $_REQUEST['name'];
		$status = $_REQUEST['status'];
		$id = $_REQUEST['id'];
		$fee = $_REQUEST['fee'];

		if($name != null && $status != null && $id != null){
			
			$file = fopen('../../models/studenttxt/enrolledCourseList.txt', 'r');
			$updatedContent = "";

			while(!feof($file)){
				$line = fgets($file);
				$user = explode('|', $line);
				
				if($user[0] != $id){
					
					$updatedContent .= $line;

				}
				//$updatedContent .= $line;
				
			}

			$file = fopen('../../models/studenttxt/enrolledCourseList.txt', 'w');
			fwrite($file, $updatedContent);
			header('location: ../../views/student/enrolledcourselist.php');

		}else{
			echo "null submission";
		}
	}
	else 
		header('location: ../../views/student/enrolledcourselist.php');

?>