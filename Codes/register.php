<?php
$conn=mysqli_connect("localhost","root","","checker1");
//mysqli_select_db("store");
if(isset($_POST["register"]))
{
  $NAME=$_POST["name"];
  $PHONE=$_POST["contact"];
  $USERID=$_POST["userid"];
  $PASS=$_POST["password"];
  $query="insert into customer values('$USERID','$PASS','$NAME',$PHONE)";
  if(mysqli_query($conn,$query))
  {
	header("location:Login.php");
  }
  else 
  {
	  echo "<script>alert('Invalid Entry')</script>";
  }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Create Your Account</title>
	<link rel="stylesheet" type="text/css" href="css/register.css">
	<link rel="icon" href="Image/brand-logo.gif" type="image/gif" sizes="16x16">
	<link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/a81368914c.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="UTF-8">
</head>
<body>
	<div class="container">	
		<div class="img">
			<img alt="Wave" src="image/Login/wave1.png">
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
						<h5>Full Name</h5>
						<input class="input" type="text" name="name">
					</div>
				</div>
				<div class="input-sec one">
					<div class="icon">
						<i class="fas fa-user"></i>
					</div>
					<div>
						<h5>Contact No:</h5>
						<input class="input" type="text" name="contact">
					</div>
				</div>
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
					<div>
						<h5>Password</h5>
						<input class="input" type="Password" name="password">
					</div>
				</div>
				<input class="reg-btn" type="submit" name="register" value="register">
			</form>		
		</div>	
	</div>
	<script type="text/javascript" src="js/register.js"></script>
</body>
</html>
