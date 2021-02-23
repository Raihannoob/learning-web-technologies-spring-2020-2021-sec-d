<?php
	if(isset($_POST['Submit']))
	{
		if(strlen($_POST['Username'])<2)
		{
			echo "User Name must contain at least two (2) characters";
		}
		elseif(strlen($_POST['Password'])<8)
		{
			echo "Password must not be less than eight (8) characters";
            
		}

		
		for ($i=0; $i < strlen($_POST['Password']); $i++) { 
			if($_POST['Password'][$i] === '@' || $_POST['Password'][$i] === '#' || $_POST['Password'][$i] === '$' || $_POST['Password'][$i] === '%')
			{
				$status = true;
				break;
				
			}
            else{
                $status = false;
            }
		}

		if($status === false)
		{
			echo "Password must contain at least one of the special characters (@, #, $, %)";
		}

		else{
			echo "Log IN Successful";
		}
	} 
?>

<!DOCTYPE html>
<html>
<head>
	<title>LOGIN</title>
</head>
<body>
	<form method="POST" action="">
		<fieldset>
			<legend> Login </legend>
				<table>
				<tr>
					<td>Username: </td>
					<td> <input type="text" name="Username"/> 
					<br/> </td>
				</tr>

				<tr>
					<td> Password: </td>
					<td> <input type="password" name="Password"/> <br/></td>
				</tr>
			</table>
			<hr>
			<input type="checkbox" name="checkbox"> Remember Me
			<br> <br>
			<input type="submit" name="Submit" value="Submit"> <a href=""> Forgot Password? </a>
		</fieldset>
	</form>
</body>
</html>