<?php
session_start();
if (!isset($_SESSION['user']) ||(trim ($_SESSION['user']) == '')){
	header('location:index.php');
}
 
include_once('User.php');
 
$user = new User();
 
//fetch user data
$sql = "SELECT * FROM users WHERE id = '".$_SESSION['user']."'";
$row = $user->details($sql);
 
?>
<!DOCTYPE html>
<html>
<head>
	<title>PHP Login using OOP Approach</title>
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
	<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
	<script src="js/main.js"></script>
</head>
<body>
			<h2>Welcome to Home <?php echo $row['login']; ?></h2>
			<a href="logout.php" class="btn btn-danger">Logout</a>

	<div id="root"  >
			<h2>Books Table</h2>
		
		<table border="1" cellpadding="15" cellspacing="0">
			<thead>
				<tr>
					<th>ID</th>
					<th>books_name</thd>
				</tr>
			</thead>
			<tbody id="res">
				
			</tbody>
		</table>

	</div>
</body>
</html>
