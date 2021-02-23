<?php


	
	if(isset($_POST['submit'])){

		$name 		= $_POST['Name'];
		$email		= $_POST['Email'];
		$Username 	= $_POST['UserName'];
		$Pass		= $_POST['Password'];
 		$ConfirmPassword = $_POST['ConfirmPassword'];
		$radio 		= $_POST["gender"];
	    $day 		= $_POST['date'];
	    $month 		= $_POST['month'];
	    $year 		= $_POST['year'];


	 if($name == "" || $email == "" || $Username == "" || $Pass== "" ||$ConfirmPassword == "" || $day == "" ||  $month == "" ||  $year == "" ){
		 echo "null submission...";
	 }
	 else{
		 echo "Submitted Successfully";
	 }

}





?>

<!DOCTYPE html>
<html>
<head>
	<title>Regestration</title>
</head>
<body>
	<form method="POST" action="">
		<fieldset>
			<legend> <b>Regestration</b></legend>
				<table>
					<tr>
						<td> Name </td>
						<td> :<input type="text" name="Name"/> 
						<br/> </td>
					</tr>
					<tr>
						<td> Email </td>
						<td> :<input type="email" name="Email"/> 
						<br/> </td>
					</tr>
					<tr>
						<td> User Name </td>
						<td> :<input type="username" name="UserName"/> 
						<br/> </td>
					</tr>
					<tr>
						<td> Password </td>
						<td> :<input type="password" name="Password"/> 
						<br/> </td>
					</tr>
					<tr>
						<td> Confirm Password </td>
						<td> :<input type="password" name="ConfirmPassword"/> 
						<br/> </td>
					</tr>
			</table>
				<fieldset>
					<legend>Gender</legend>
					    <input type='radio' name='gender' value='Male'>Male
            			<input type='radio' name='gender' value='Female'>Female
            			<input type='radio' name='gender' value='Others'>Others
				</fieldset>
				<fieldset>
					<legend>Date Of Birth</legend>
							<input type="number" name="date"> /
							<input type="number" name="month"> /
							<input type="number" name="year"> 
				</fieldset>
			<hr>
			<input type="reset" name="reset" value="Reset">
			<input type="submit" name="submit" value="Submit">
		</fieldset>
	</form>
</body>
</html>