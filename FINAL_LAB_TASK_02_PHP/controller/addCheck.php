<?php
	
	require_once('../model/dbConnection.php');
	require_once('../model/productModel.php');
	if($_POST['submit'])
	{
		$name = $_POST['name'];
		$bPrice = $_POST['bPrice'];
		$sPrice = $_POST['sPrice'];

		if($name == '' || $bPrice == '' || $sPrice == '')
		{
			echo "Null Submission";
		}
		else
		{
			$displayable = "No";
			if(isset($_POST['check']))
			{
				global $displayable;
				$displayable = "Yes";
			}	
			$productDetails = array('name' => $name, 'bPrice' => $bPrice, 'sPrice' => $sPrice, 'display' => $displayable);
			$connection = getConnection();
			$check = insertProduct($productDetails);
			if($check)
			{
				echo "Product added successfully!!!";
			}
			else
			{
				echo "Error occured!!!!";
			}

		}
	}
