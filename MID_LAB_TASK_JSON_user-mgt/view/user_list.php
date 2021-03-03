<?php
	
	$title = "User List Page";
	include('header.php');
	$myfile = fopen('file.json', 'r');
	$data 	= fread($myfile, filesize('file.json'));
	
	$user = '{
				"name": "alamin", 
				"id": 12,
				"email": "alamin@gmail.com" 
			}';
	$json 	= json_decode($user, true);
	//print_r($json['name']);

			$name = $json['name'];
			$id = $json['id'];
			$e = $json['email'];
			




?>

	<div id="page_title">
		<h1>User List Page</h1>		
	</div>

	<div id="nav_bar">
		
		<a href="home.php">Back</a> |		
		<a href="../controller/logout.php">Logout</a>		
	</div>

	<div id="main_content">
	
		<table border="1">
			<tr>
				<td>ID</td>
				<td>NAME</td>
				<td>EMAIL</td>
				<td>ACTION</td>
			</tr>
			<tr>
				<td><?php  echo $id;  ?></td>
				<td><?php echo $name;  ?></td>
				<td><?php echo $e;  ?> </td>
				<td>
					<a href="edit.php?id=1"> EDIT </a> |
					<a href="delete.php?id=1"> DELETE </a> 
				</td>
			</tr>
			
			
		</table>
			
	</div>

<?php include('footer.php') ?>