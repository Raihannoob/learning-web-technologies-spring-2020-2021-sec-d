<?php
session_start();
require_once('../model/dbConnection.php');
require_once('../model/productModel.php');
$id = $_GET['id'];
$connection = getConnection();
$selectedProduct = getProductById($id);
$_SESSION['id'] = $id;
?>

<div id="main_content">
	<form method="POST" action="../controller/deleteCheck.php">
		<fieldset style="width: 30%">
			<legend>DELETE PRODUCT</legend>
			Name: <?php echo $selectedProduct['Name']; ?> <br>
			Buying Price: <?php echo $selectedProduct['Buyingprice']; ?> <br>
			Selling Price: <?php echo $selectedProduct['sellingprice']; ?> <br>
			Displayable: <?php if ($selectedProduct['Display'] == 'Yes') {
								echo "Yes";
							} else {
								echo "No";
							} ?>
			<hr>
			<input type="submit" name="delete" value="Delete">
		</fieldset>
	</form>
</div>