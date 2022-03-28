<?php 

	$error = "";
	
	if(isset($_GET['msg'])){
		if($_GET['msg'] == 'error'){
			$error = "invalid username/password";
		}
	}

?>


<html>
<head>
	<title>Login</title>
</head>
<body>

<center>
<fieldset  style="width:600px" >

		<table >
			<tr>
				<td>
					Welcome to STUDY VERSE :-) 
				</td>
			</tr>
		</table>
		<table align="right">

			<tr >
				<td > 
				
				</td>
			</tr>
		
</table>	

</fieldset></center>
 <br></br>

	<center>
	<form  method="POST" action="../controller/loginchck.php" >

		<fieldset align="center"  style="width:200px" >
			<legend>Login</legend> 
			<table>
				<tr><td></td></tr>
			</table>
		<table >

			<tr>
			<td> Select User</td>  
			<td>
		    <select name ="select_user" >

		   	<option  value="manager">Manager</option>
		   	<option  value="admin">Admin</option>
		   	<option  value="teacher">Teacher</option>
		   	<option  value="student">Student</option>
		    
		    </select>
		   
		    </td>
			 
			</tr>
			<tr>
				<td>Username</td>
				<td><input type="text" name="username" value=""></td>
			</tr>
			<tr>
				<td>Password</td>
				<td><input type="password" name="password" value=""></td>
			</tr>
			<tr>
				<td><br></br></td>
				<td><input type="submit" name="submit" value="Submit"></td>
			</tr>

			<tr>
				<td><br></br></td>
				<td align="right"><a href="forgotpass.php">Fogot password </a></td> 
			</tr>

			<tr> <td></td> <td> Don't have account ? </td> </tr>

		<tr>  
			<td></td>  
			
			<td> 

			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
		    
		    <a href="preg.php">Click Here </a> 

			</td> 


		</tr>
		<tr align="center">
			<td> <?php echo $error; ?></td>

		</tr>
			
		</table>
		</fieldset>
		
	</form>
	</center>


</body>
</html>