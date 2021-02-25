<?php
    session_start();
	if(isset($_POST['Submit'])){
    
        if($_POST['current'] == $_POST['new'])
        {
            echo "New Password should not be same as the Current Password<br>";
        }
        if($_POST['new'] != $_POST['confirmnew'])
        {
            echo "New Password must match with the Retyped Password<br>";
        }
    }

?>

<!DOCTYPE html>
<html>
<head>
	<title>Registration</title>
</head>
<body>
	<table border="1" width="100%" cellspacing="0">
		<tr>
			<td align="right">
				<a href="publichome.php"> <img src="logo.png" align="left"> </a> 
				<a href="publichome.php"> Home </a> 
				&nbsp | &nbsp
				<a href="login.php"> Login </a>
				&nbsp | &nbsp
				<a href="regestration.php"> Registration </a>
			</td>
		</tr>
		<tr>
			<td colspan="2">
				<br>
				<form>
		<table border="0" cellspacing="0" cellpadding="5">
			<tr>
				<td colspan="2">
				<form method="POST" action="" >
					<fieldset >
						<legend>CHANGE PASSWORD</legend>
						Current Password<br 
						/>
						<input type="password" name="Password"/><br 
						/>
						New Password<br />
						<input type="password" name="new" /><br
						 />
						Retype New Password<br 
						/>
						<input type="password" name="confirmnew"
						/>								
						<hr 
						/>
						<input type="submit" name="Submit" value="Submit">   
						<a href="publichome.html">Home</a>						
					</fieldset>
					</form>
				</td>
			</tr>
		</table>
	</form>
			<br>
			</td>
		</tr>
		<tr>
			<td colspan="2">
				<center> Copyright &copy 2017 </center>
			</td>
		</tr>
	</table>
</body>
</html>