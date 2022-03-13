
<?php

require('../header.php');

?>

<html>
<head>
	<title>Teacher Fee</title>
</head>
<body>

	<a href="../../views/manager/phome.php"> back </a> |
	  <a href="../../controller/managercheck/logout.php"> logout </a>
<br><br>
		
		<table border="1">
			<tr>
				<td>TEACHER_ID</td>
				<td>TEACHER NAME</td>
				<td>Course NAME</td>
				<td>COURSE FEE</td>
				


			</tr>
			<?php
			$file = fopen('../../models/teachertxt/teacherfee.txt', 'r');
			
			while(!feof($file)){

				$user = fgets($file);
				$userArray = explode('|', $user);
				
                if( $userArray[0] != null && $userArray[1] != null &&$userArray[2] != null &&  $userArray[3] != null )
			{
				?>
			

			<tr>
				<td><?=$userArray[0]?></td>
				<td><?=$userArray[1]?></td>
				<td><?=$userArray[2]?></td>
				<td><?=$userArray[3]?></td>
				

				
			</tr>
			<?php
		}
				}
			?>
			
		</table>
		
	
</body>
</html>