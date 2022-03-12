
<?php

require('../header.php');

?>

<html>
<head>
	<title>Teacher Transiction</title>
</head>
<body>

	<a href="../manager/phome.php"> back </a> |
	  <a href="../../controller/managercheck/logout.php"> logout </a>
<br><br>
		
		<table border="1">
			<tr>
				<td>ID</td>
				<td>USERNAME</td>
				<td>PAYMENT</td>
				


			</tr>
			<?php
			$file = fopen('../../models/teachertxt/teacherpaymenthistory.txt', 'r');
			
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