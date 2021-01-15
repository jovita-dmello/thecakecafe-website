<?php
include('conctn.php');
if(isset($_POST["Login"]))
{
	$userid = $_POST["userid"];
	$pass = $_POST["password"];
	$sql = mysqli_query($conn,"SELECT count(*) as total from customer where userid ='".$userid."' and pass = '".$pass."' ") or die(mysqli_error($conn));
	$rw =mysqli_fetch_array($sql);

	if($rw['total'] > 0) { 
	header('location:home.php?id='.$userid);

	}
	else{
		echo "<script>alert('Invalid Userid or Password')</script>";
	}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login Form</title>
	<link rel="stylesheet" type="text/css" href="css/login.css">
	<link rel="icon" href="Image/brand-logo.gif" type="image/gif" sizes="16x16">
	<link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/a81368914c.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="UTF-8">
</head>
<body>
	<div class="container">
		<div class="img">
			<img alt="Cake" src="image/Login/cake.svg">
		</div>	
		<div class="login-container">
			<form action="" method="POST">
				<img class="avatar" alt="Logo" src="image/Login/avatar.svg">
				<h2>Welcome To Mom's Kitchen</h2>
				<div class="input-sec one">
					<div class="icon">
						<i class="fas fa-user"></i>
					</div>
					<div>
						<h5>Username</h5>
						<input class="input" type="text" name="userid">
					</div>
				</div>
				<div class="input-sec pass">
					<div class="icon">
						<i class="fas fa-lock"></i>
					</div>
					<div class=>
						<h5>Password</h5>
						<input class="input" type="Password" name="password">
					</div>
				</div>
				<a href="register.php">Don't have an account? Sign up</a>
				<input class="login-btn" type="submit" name="Login" value="Login">
			</form>		
		</div>	
	</div>
	<script type="text/javascript" src="js/main.js"></script>
</body>
</html>
