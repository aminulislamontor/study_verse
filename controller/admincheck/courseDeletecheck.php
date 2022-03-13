<?php 
	session_start();
	
	if(isset($_REQUEST['delete'])){
		
		$name = $_REQUEST['name'];
		$status = $_REQUEST['status'];
		$id = $_REQUEST['id'];

		if($name != null && $status != null){
			
			$file = fopen('../../models/teachertxt/courseList.txt', 'r');
			$updatedContent = "";

			while(!feof($file)){
				$line = fgets($file);
				$user = explode('|', $line);
				
				if($user[0] != $id){
					
					$updatedContent .= $line;

				}
				//$updatedContent .= $line;
				
			}

			$file = fopen('../../models/teachertxt/courseList.txt', 'w');
			fwrite($file, $updatedContent);
			header('location: ../../views/admin/courseApproval.php');

		}else{
			echo "null submission";
		}
	}
	else 
		header('location: ../../views/admin/courseApproval.php');

?>