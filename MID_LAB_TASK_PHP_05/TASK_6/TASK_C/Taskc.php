<!DOCTYPE html>
<html>

<head>
    <title>BLOOD GROUP</title>
</head>

<body>
    <form method="POST" action="#">
        <fieldset >
            <legend>BLOOD GROUP</legend>
            <select name="BloodGroup" >
				<option value="A+"
				<?php
				if(isset($_POST['submit'])){
					if($_POST["BloodGroup"] == "A+"){ 
							echo "selected";
					}
				}?>
				>A+</option>
				<option value="A-"
				<?php
				if(isset($_POST['submit'])){
					if($_POST["BloodGroup"] == "A-"){ 
							echo "selected";
					}
				}
				?>
				>A-</option>
				<option value="B+"
				<?php
				if(isset($_POST['submit'])){
					if($_POST["BloodGroup"] == "B+"){ 
							echo "selected";
					}
				}?>
				>B+</option>
				<option value="B-"
				<?php
				if(isset($_POST['submit'])){
					if($_POST["BloodGroup"] == "B-"){ 
							echo "selected";
					}
				}?>
				>B-</option>
				<option value="AB+"
				<?php
				if(isset($_POST['submit'])){
					if($_POST["BloodGroup"] == "AB+"){ 
							echo "selected";
					}
				}?>
				>AB+</option>
				<option value="AB-"
				<?php
				if(isset($_POST['submit'])){
					if($_POST["BloodGroup"] == "AB-"){ 
							echo "selected";
					}
				}?>
				>AB-</option>
				<option value="O+"
				<?php
				if(isset($_POST['submit'])){
					if($_POST["BloodGroup"] == "O+"){ 
							echo "selected";
					}
				}?>
				>O+</option>
				<option value="O-"
				<?php
				if(isset($_POST['submit'])){
					if($_POST["BloodGroup"] == "O-"){ 
							echo "selected";
					}
				}?>
				>O-</option>
			</select>
			<hr>
			<input type="submit" name="submit" value="Submit">
        </fieldset>
        <br>
    </form>    
</body>

</html>