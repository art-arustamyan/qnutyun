<?php
	session_start();
	if(isset($_SESSION['user'])){
		header('location:home.php');
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Document</title>
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container">
	<div class="row">
		<div class="col-md-4 col-md-offset-4">
		        	<form method="POST" action="login.php">
		                	<div class="form-group">
		                    	<input class="form-control" placeholder="Enter Username" type="text" name="username" required>
		                	</div>
		                	<div class="form-group">
		                    	<input class="form-control" placeholder="Enter Password" type="password" name="password" required>
		                	</div>
		                	<button type="submit" name="login">Login</button>
		        	</form>
		    <?php
		    	if(isset($_SESSION['message'])){
		    		?>
					        <?php echo $_SESSION['message']; ?>
		    		<?php
 
		    		unset($_SESSION['message']);
		    	}
		    ?>
		</div>
	</div>
</div>
</body>
</html>