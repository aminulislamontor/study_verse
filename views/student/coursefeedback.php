
<?php

require('../header.php');

?>

<html>
<head>
	<title>User list</title>
</head>
<body>

	<a href="../student/shome.php"> back </a> |
	  <a href="../../controller/logout.php"> logout </a>
<br><br>
		
		<table border="1">
			<tr>
				<td>ID</td>
				<td>COURSENAME</td>
				<td>FEEDBACK</td>
				


			</tr>
			<?php
			$file = fopen('../../models/studenttxt/coursefeedback.txt', 'r');
			
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
				
				
				
			</tr>
			<?php
		}
				}
			?>
			
		</table>
		
	
</body>
</html>