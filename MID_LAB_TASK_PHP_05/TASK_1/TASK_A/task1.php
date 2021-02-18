<?php

	//print_r($_GET['myname']);
	//print_r($_POST);

	if(isset($_POST['submit'])){

		$name 		= $_POST['myname'];

		if($name == ""){
			echo "null submission...";
		}else{
			echo "Name:".$name;
		}

	}else{
		echo "invalid request...";
	}
?> 