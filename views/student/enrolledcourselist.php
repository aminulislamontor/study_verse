<?php

require('../header.php');

?>

<html>
<head>
	<title>Enrolled Course list</title>
</head>
<body>

	<a href="../../views/student/shome.php"> back </a> |
	  <a href="../../controller/logout.php"> logout </a>
<br><br>
		
		<table border="1">
			<tr>
				<td>COURSE ID</td>
				<td>COURSE NAME </td>
				<td>Status</td>
				<td>ACTION</td>


			</tr>
			<?php
			$file = fopen('../../models/studenttxt/enrolledcourselist.txt', 'r');
			
			while(!feof($file)){

				$user = fgets($file);
				$userArray = explode('|', $user);
				
                if( $userArray[0] != null && $userArray[1] != null &&$userArray[2] != null  )
			{
				?>
			

			<tr>
				<td><?=$userArray[0]?></td>
				<td><?=$userArray[1]?></td>
				<td><?=$userArray[2]?></td>
				

				
				<td>
						<a href="../../views/student/removecourse.php?id=<?=$userArray[0]?>"> REMOVE </a> 
				</td>
			</tr>
			<?php
		}
				}
			?>
			
		</table>
		
	
</body>
</html>