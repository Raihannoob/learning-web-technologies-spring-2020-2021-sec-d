<?php
	
	if(isset($_POST['Submit']))
	{
		$currentPassword = $_POST['password'];
		$newPassword = $_POST['newpassword'];
		$RetypeNewPassword = $_POST['RetypeNewPassword'];

		if($currentPassword !== $newPassword && $newPassword == $RetypeNewPassword)
		{
			echo "Password Changed Successfully";
		}
        else
        {
            echo "New Passwordshould not be same as the Current Password New Password must match with the Retyped Password Please Try Again";
        }
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>New password Regestration </title>
</head>
<body>
	<form method="POST" action="">
		<fieldset>
			<legend> Change Password </legend>
				<table>
				<tr>
					<td>Current Password: </td>
					<td> <input type="password" name="password"/> 
					<br/> </td>
				</tr>

				<tr>
					<td> New Password: </td>
					<td> <input type="password" name="newpassword"/> <br/></td> 
				</tr>

				<tr>
					<td>Retype New Password: </td>
					<td> <input type="password" name="RetypeNewPassword"/> <br/></td> 
				</tr>
			</table>
			<hr>
			
			<input type="submit" name="Submit" value="Submit">
		</fieldset>
	</form>
</body>
</html>