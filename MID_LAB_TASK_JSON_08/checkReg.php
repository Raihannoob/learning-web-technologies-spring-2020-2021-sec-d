<?php
   		if (isset($_POST['submit'])) {
		$name=$_POST['name'];
		$email=$_POST['email'];
		$username=$_POST['username'];
		$password=$_POST['password'];
		$Confirmpassword=$_POST['confirmPassword'];
		$day=$_POST['day'];
		$month=$_POST['month'];
		$year=$_POST['year'];

   		if($name == "" || $email == "" || $username == ""||$password == "" ||$Confirmpassword == "" || $day == "" ||$month =="" || $year == "")
		{
			echo "Fill All Data properly ";
		}
		else if ($password != $Confirmpassword){
			echo "Please put your password again.....";
		}
		else
		{
   			$info = [];
		
  			$formdata = [
	      					'name'     			=> $_POST['name'],
							'email'    			=>$_POST['email'],
							'username' 			=> $_POST['username'],
							'password'			=> $_POST['password'],
							'confirmPassword'   => $_POST['confirmPassword'],
							'gender'   			=>$_POST['gender'],
							'day'     			=> $_POST['day'],
							'month'    			=> $_POST['month'],
							'year'     			=> $_POST['year']
	  					];

	   		$jsondata	 = file_get_contents('user.json');
			$info 		 = json_decode($jsondata, true);
			array_push($info,$formdata);
			$jsondata = json_encode($info, JSON_PRETTY_PRINT);
		   

		   if(file_put_contents('user.json', $jsondata)) {
		        header('location: login.html');

		    }
		   else {
		        echo "wrong";
		   }
	}
}

?>