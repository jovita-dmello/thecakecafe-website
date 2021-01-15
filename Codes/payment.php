<?php  
include('conctn.php');
$userid=$_GET['id'];
//echo $userid;
$cid=1;
$total=$_GET['total'];
$prid=$_GET['pid'];
$qty=$_GET['qty'];
//echo $prid;
//echo $total;

if(isset($_POST["pay"]))
{	
  $NAME=$_POST["name"];
  $PHONE=$_POST["phone"];
  $HOUSE=$_POST["house"];
  $STREET=$_POST["street"];
  $CITY=$_POST["city"];
  $PIN=$_POST["pincode"];
  $SHAPE=$_POST["cakeshape"];
  $MESSAGE=$_POST["message"];
  $USERID=$userid;
  $PRID=$prid;
  $QTY=$qty;
  $TOTAL=$total;


  $ADDRESS= $HOUSE.",".$STREET.",".$CITY.",".$PIN.",".$PHONE;
  $DETAIL=$MESSAGE.",". $SHAPE;

  $query="insert into `orders`(userid,prid,qty,total,name,address,detail) values('$USERID',$PRID,$QTY,$TOTAL,'$NAME','$ADDRESS','$DETAIL')";
  if(mysqli_query($conn,$query))
  {
	$sql1="DELETE from cart where userid='$USERID'";
	if(mysqli_query($conn, $sql1)){
		
		$sql2="INSERT INTO payment(userid,cid,total) VALUES('$USERID',$cid,$TOTAL)";
		if(mysqli_query($conn, $sql2)){
			header('Location:order.php?id='.$userid);
		} 
	else {
		echo 'query error: '. mysqli_error($conn);
		}
	} 
	else {
		echo 'query error: '. mysqli_error($conn);
	}
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
	<title>Payment</title>

	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" type="text/css" href="bootstrap-4/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/payment-t.css">
    <link rel="icon" href="Image/brand-logo.gif" type="image/gif" sizes="16x16">
    <link rel="stylesheet" type="text/css" href="fontawesome-free-5.15.1-web\css\all.css">
</head>
<body>
<!--Navigation Bar--> 
<nav class="navbar navbar-expand-lg sticky-top navbar-light bg-light">
  <a class="navbar-brand pl-5" href="#">
    <img src="Image/home/brand-logo.png" width="50" height="50" class="d-inline-block align-top" alt="brand-logo" loading="lazy">
    Moms Kitchen
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link pr-5" href="home.php?id=<?php echo$userid;?>">Home<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item dropdown pr-5">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Category
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <a class="dropdown-item" href="con-cake.php?id=<?php echo $userid;?>">Classic Cakes</a>
            <a class="dropdown-item" href="exotic-cakes.php?id=<?php echo $userid;?>">Exotic Cakes</a>
            <a class="dropdown-item" href="premium-cakes.php?id=<?php echo $userid;?>">Premium Cakes</a>
          </div>
        </li>
      <li class="nav-item">
        <a class="nav-link pr-5" href="blog.php?id=<?php echo $userid;?>">Blog</a>
      <li class="nav-item dropdown pr-5">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Account
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="account.php?id=<?php echo $userid;?>">Your Profile</a>
          <a class="dropdown-item" href="order.php?id=<?php echo $userid;?>">Your Orders</a>
          <a class="dropdown-item" href="Login.php">Sign out</a>
        </div>
      </li>
      </li>
      <li class="nav-item">
        <a class="nav-link pr-5" href="cart.php?uid=<?php echo $userid;?>&pid=0">Cart</a>
      </li>
    </ul>
  </div>
</nav>
<!--END of Navigation Bar-->

  	<!--Check Out Form-->
  	<section class="Check_out py-5">
  		<div class="container">
		<div class="row">
			<div class="col-lg-4">
				<div class="product_info">
					<img src="Image/home/brand-logo.png" alt="brand-logo">
					<div class="content">
						<h3>THE CAKE <br/>CAFE</h3>
						<p>SINCE 2015</p>
					</div>    
				</div>
			</div>
			<form class="col-lg-8" method="POST">
				<h4 class="mt-2">Billing Address</h4><hr>
				<div class="form-group">
					<label for="name">Name</label>
         		 	<input id="name" type="text" class="form-control" name="name" placeholder=" Full Name">
				</div>
				<div class="form-group">
					<label for="mob">Mobile Number</label>
         			<input type="text" id="mob" class="form-control" name="phone" placeholder="Mobile Number">
				</div>
				<div class="row">
					<div class="form-group col-lg-6">
						<label for="house">House No:/Name</label>
	         		 	<input id="house" type="text" class="form-control" name="house" placeholder="House Name">
					</div>	
					<div class="form-group col-lg-6">
						<label for="area">Street/Area</label>
	         		 	<input id="area" type="text" class="form-control" name="street" placeholder="Street/Area">
					</div>
				</div>
				<div class="row">
					<div class="form-group col-lg-6">
						<label for="city">City</label>
	         		 	<input id="city" type="text" class="form-control" name="city" placeholder="City">
					</div>	
					<div class="form-group col-lg-6">
						<label for="area">PinCode</label>
	         		 	<input id="pin" type="text" class="form-control" name="pincode" placeholder="PinCode">
					</div>
				</div><br>
				<h4>Cake Details</h4><hr>
				<div class="form-group">
					<label for="cake-mssg">Message on Cake</label>
					<textarea id="cake-mssg" class="form-control" type="text" name="message" placeholder="ex: Happy Birthday" rows="3"></textarea>
				</div>
				<div class="form-group">
					<label for="shape">Shape</label>
					<select id="shape" name="cakeshape" class="form-control">
	    				<option value="Circle">Circle</option>
	    				<option value="Square">Square</option>
	    				<option value="Rectangle">Rectangle</option>
	    				<option value="Heart">Heart</option>
  					</select>
				</div>
				<br>
				<input type="submit" name="pay" class="btn-pay mt-2" value="Place Order"/>
			</form>
		</div>
	</div> 		
  	</section>
  	<!--END OF Check Out Form -->



	<!-- Footer -->
	<footer class="page-footer font-small elegant-color bg-light">
	  	<div class="container">
	    	<div class="row d-flex justify-content-left">
	      	<div class="col d-flex justify-content-left my-5 pt-2">
		        <a class="icon">
		          <i class="fab fa-facebook-f fb fa-lg white-text mx-3 mx-md-4 fa-2x"> </i>
		        </a>
		        <a class="icon">
		          <i class="fab fa-twitter twitter fa-lg white-text mx-3 mx-md-4 fa-2x"> </i>
		        </a>
		        <a class="icon" href="https://instagram.com/momskitchen.knr?igshid=1k3rn5jcahgnm">
		          <i class="fab fa-instagram insta fa-lg white-text mx-3 mx-md-4 fa-2x"> </i>
		        </a>
		        <a class="icon" href="https://instagram.com/momskitchen.knr?igshid=1k3rn5jcahgnm">
	          <i class="fab fa-whatsapp whatsapp fa-lg white-text mx-3 mx-md-4 fa-2x"> </i>
	        </a>
	     	 </div>	
	     	 <div class="col d-flex justify-content-right my-5 pt-2">
	      		<input type="text" placeholder="Enter Your Email Address" name="">
	      		<button class="footer-notify">GET NOTIFIED</button>
	     	</div>
	    </div>
	</div>
	<div class="footer-copyright text-center py-2">
		<p> ©Copyright Moms Kitchen All Rights Reserved</p>
	</div>
	</footer>
	<!-- END of Footer -->


	<script src="bootstrap-4/js/jquery-3.5.1.slim.min.js"></script>  
  	<script src="bootstrap-4/js/popper.min.js"></script> 
  	<script type="text/javascript" src="bootstrap-4/js/bootstrap.min.js"></script>
</body>
</html>