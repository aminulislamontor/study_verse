<?php 
	session_start();
	
	if(isset($_REQUEST['update'])){
		
        $id = $_REQUEST['id'];
		$name = $_REQUEST['name'];
		$status = $_REQUEST['status'];
        $fee = $_REQUEST['fee'];

		if($name != null && $status != null){
			
			$file = fopen('../../models/teachertxt/courseList.txt', 'r');
			$updatedContent = "";

			while(!feof($file)){
				$line = fgets($file);
				$user = explode('|', $line);
				
				if($user[0] == $id){
					$line = $id."|".$name."|".$status."|".$fee."\r\n";
				}
				$updatedContent .= $line;
				
			}

			$file = fopen('../../models/teachertxt/courseList.txt', 'w');
			fwrite($file, $updatedContent);
			header('location: ../../views/admin/courseApproval.php');

		}else{
			echo "null submission";
		}
	}
?>