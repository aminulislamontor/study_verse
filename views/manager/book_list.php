
<?php

require('../header.php');

?>

<html>
<head>
	<title>Book list</title>
</head>
<body>

	<a href="../../views/manager/phome.php"> back </a> |
	  <a href="../../controller/managercheck/logout.php"> logout </a>
<br><br>
		
		<table border="1">
			<tr>
				<td>BOOK_ID</td>
				<td>BOOK NAME</td>
				<td>WRITER NAME</td>
				<td>ACTION</td>


			</tr>
			<?php
			$file = fopen('../../models/managertxt/booklist.txt', 'r');
			
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
					<a href="../../views/manager/bookedit.php?id=<?=$userArray[0]?>"> EDIT </a> |
						<a href="../../views/manager/bookdelete.php?id=<?=$userArray[0]?>"> DELETE </a> 
				</td>
			</tr>
			<?php
		}
				}
			?>
			
		</table>
		
	
</body>
</html>