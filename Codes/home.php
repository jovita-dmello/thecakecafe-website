<?php 
include('conctn.php');
$userid=$_GET['id'];
$sql="SELECT count(cid) as num from cart";
$res=mysqli_query($conn,$sql);
$arr=mysqli_fetch_assoc($res);//,MYSQLI_ASSOC);
$no_of_item_cart=$arr['num'];


//New Arrival Section
//Choco-Blackberry
if(isset($_POST['Choco-Blackberry']))
{

	$sql = "SELECT price FROM products  WHERE prid=6";
	$result = mysqli_query($conn, $sql);
	$addc = mysqli_fetch_assoc($result);//,MYSQLI_ASSOC);
	$price=$addc['price'];
	$qty=$_POST['quantity'];
	$total=$price*$qty;
	if($no_of_item_cart==0){
 	$sql="INSERT into cart(cid,prid,qty,total,userid) values(1,6,'$qty','$total','$userid')";
	if(mysqli_query($conn,$sql)){echo " 0 item";}
	header('location:cart.php?uid='.$userid.'&pid=6');
 }	
 else{
	echo "enter";
	mysqli_query($conn,"UPDATE cart
	SET prid=6,qty=$qty,total=$total where cid=1");
	mysqli_query($conn,"UPDATE cart
	SET userid=$userid where cid=1");
	header('location:cart.php?uid='.$userid.'&pid=6');//unicorn CUPCAKE pid=2*/
	}
}

//Rafalo
if(isset($_POST['Rafalo']))
{

	$sql = "SELECT price FROM products  WHERE prid=18";
	$result = mysqli_query($conn, $sql);
	$addc = mysqli_fetch_assoc($result);//,MYSQLI_ASSOC);
	$price=$addc['price'];
	$qty=$_POST['quantity'];
	$total=$price*$qty;
	if($no_of_item_cart==0){
 		$sql="INSERT into cart(cid,prid,qty,total,userid) values(1,18,'$qty','$total','$userid')";
		if(mysqli_query($conn,$sql))
	 	header('location:cart.php?uid='.$userid.'&pid=18');
 	}	
 	else{
	mysqli_query($conn,"UPDATE cart
	SET prid=18,qty=$qty,total=$total where cid=1");
	mysqli_query($conn,"UPDATE cart
	SET userid=$userid where cid=1");
	header('location:cart.php?uid='.$userid.'&pid=18');//unicorn CUPCAKE pid=2*/
	}
}

//Nutella
if(isset($_POST['Nutella']))
{

	$sql = "SELECT price FROM products  WHERE prid=30";
	$result = mysqli_query($conn, $sql);
	$addc = mysqli_fetch_assoc($result);//,MYSQLI_ASSOC);
	$price=$addc['price'];
	$qty=$_POST['quantity'];
	$total=$price*$qty;
	if($no_of_item_cart==0){
 	$sql="INSERT into cart(cid,prid,qty,total,userid) values(1,30,'$qty','$total','$userid')";
	if(mysqli_query($conn,$sql)){echo " 0 item";}
	header('location:cart.php?uid='.$userid.'&pid=30');
 }	
 else{
	echo "enter";
	mysqli_query($conn,"UPDATE cart
	SET prid=30,qty=$qty,total=$total where cid=1");
	mysqli_query($conn,"UPDATE cart
	SET userid=$userid where cid=1");
	header('location:cart.php?uid='.$userid.'&pid=30');//unicorn CUPCAKE pid=2*/
	}
}

//Chocolate-Mousse
if(isset($_POST['Chocolate-Mousse']))
{

	$sql = "SELECT price FROM products  WHERE prid=29";
	$result = mysqli_query($conn, $sql);
	$addc = mysqli_fetch_assoc($result);//,MYSQLI_ASSOC);
	$price=$addc['price'];
	$qty=$_POST['quantity'];
	$total=$price*$qty;
	if($no_of_item_cart==0){
 	$sql="INSERT into cart(cid,prid,qty,total,userid) values(1,29,'$qty','$total','$userid')";
	if(mysqli_query($conn,$sql)){echo " 0 item";}
	header('location:cart.php?uid='.$userid.'&pid=29');
 }	
 else{
	echo "enter";
	mysqli_query($conn,"UPDATE cart
	SET prid=29,qty=$qty,total=$total where cid=1");
	mysqli_query($conn,"UPDATE cart
	SET userid=$userid where cid=1");
	header('location:cart.php?uid='.$userid.'&pid=29');//unicorn CUPCAKE pid=2*/
	}
}

//TOP RATED SECTION
//Raspberry
if(isset($_POST['Raspberry']))
{

	$sql = "SELECT price FROM products  WHERE prid=7";
	$result = mysqli_query($conn, $sql);
	$addc = mysqli_fetch_assoc($result);//,MYSQLI_ASSOC);
	$price=$addc['price'];
	$qty=$_POST['quantity'];
	$total=$price*$qty;
	if($no_of_item_cart==0){
 	$sql="INSERT into cart(cid,prid,qty,total,userid) values(1,7,'$qty','$total','$userid')";
	if(mysqli_query($conn,$sql)){echo " 0 item";}
	header('location:cart.php?uid='.$userid.'&pid=7');
 }	
 else{
	echo "enter";
	mysqli_query($conn,"UPDATE cart
	SET prid=7,qty=$qty,total=$total where cid=1");
	mysqli_query($conn,"UPDATE cart
	SET userid=$userid where cid=1");
	header('location:cart.php?uid='.$userid.'&pid=7');//unicorn CUPCAKE pid=2*/
	}
}

//Rainbow
if(isset($_POST['Rainbow']))
{

	$sql = "SELECT price FROM products  WHERE prid=32";
	$result = mysqli_query($conn, $sql);
	$addc = mysqli_fetch_assoc($result);//,MYSQLI_ASSOC);
	$price=$addc['price'];
	$qty=$_POST['quantity'];
	$total=$price*$qty;
	if($no_of_item_cart==0){
 		$sql="INSERT into cart(cid,prid,qty,total,userid) values(1,32,'$qty','$total','$userid')";
		if(mysqli_query($conn,$sql))
	 	header('location:cart.php?uid='.$userid.'&pid=32');
 	}	
 	else{
	mysqli_query($conn,"UPDATE cart
	SET prid=32,qty=$qty,total=$total where cid=1");
	mysqli_query($conn,"UPDATE cart
	SET userid=$userid where cid=1");
	header('location:cart.php?uid='.$userid.'&pid=32');//unicorn CUPCAKE pid=2*/
	}
}

//Chocolate-Tres-Leches
if(isset($_POST['Chocolate-Tres-Leches']))
{

	$sql = "SELECT price FROM products  WHERE prid=31";
	$result = mysqli_query($conn, $sql);
	$addc = mysqli_fetch_assoc($result);//,MYSQLI_ASSOC);
	$price=$addc['price'];
	$qty=$_POST['quantity'];
	$total=$price*$qty;
	if($no_of_item_cart==0){
 	$sql="INSERT into cart(cid,prid,qty,total,userid) values(1,31,'$qty','$total','$userid')";
	if(mysqli_query($conn,$sql)){echo " 0 item";}
	header('location:cart.php?uid='.$userid.'&pid=31');
 }	
 else{
	echo "enter";
	mysqli_query($conn,"UPDATE cart
	SET prid=31,qty=$qty,total=$total where cid=1");
	mysqli_query($conn,"UPDATE cart
	SET userid=$userid where cid=1");
	header('location:cart.php?uid='.$userid.'&pid=31');//unicorn CUPCAKE pid=2*/
	}
}

if(isset($_POST['Red-Velvet']))
{

	$sql = "SELECT price FROM products  WHERE prid=17";
	$result = mysqli_query($conn, $sql);
	$addc = mysqli_fetch_assoc($result);//,MYSQLI_ASSOC);
	$price=$addc['price'];
	$qty=$_POST['quantity'];
	$total=$price*$qty;
	if($no_of_item_cart==0){
 	$sql="INSERT into cart(cid,prid,qty,total,userid) values(1,17,'$qty','$total','$userid')";
	if(mysqli_query($conn,$sql)){echo " 0 item";}
	header('location:cart.php?uid='.$userid.'&pid=17');
 }	
 else{
	echo "enter";
	mysqli_query($conn,"UPDATE cart
	SET prid=17,qty=$qty,total=$total where cid=1");
	mysqli_query($conn,"UPDATE cart
	SET userid=$userid where cid=1");
	header('location:cart.php?uid='.$userid.'&pid=17');//unicorn CUPCAKE pid=2*/
	}
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Home</title>

	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="Image/brand-logo.gif" type="image/gif" sizes="16x16">
    <link rel="stylesheet" type="text/css" href="bootstrap-4/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/home.css">
    <link rel="stylesheet" type="text/css" href="css/fonts.css">
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



<!--Image Slider -->	
<div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel" data-interval="2500">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="Image/home/slider1.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <div class="container">
        	<div class="row justify-content-start">
        		<div class="col-lg-8 mx-auto">
        		<a href="con-cake.php?id=<?php echo $userid;?>">
        			<button class="btn-shop btn-success mt-3 ml-2">SHOP NOW</button>
        		</a>
        		</div>
        	</div>        	
        </div>
      </div>
    </div>
    <div class="carousel-item">
      <img src="Image/home/slider2.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <div class="container">
        	<div class="row justify-content-start">
        		<div class="col-lg-8 mx-auto">
        		<a href="exotic-cakes.php?id=<?php echo $userid;?>">
        			<button class="btn-shop btn-success mt-3 ml-2">SHOP NOW</button>
        		</a>
        		</div>
        	</div>        	
        </div>
      </div>
    </div>
    <div class="carousel-item">
      <img src="Image/home/slider3.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <div class="container">
        	<div class="row justify-content-start">
        		<div class="col-lg-8 mx-auto">
        		<a href="premium-cakes.php?id=<?php echo $userid;?>">
        			<button class="btn-shop btn-success mt-3 ml-2">SHOP NOW</button>
        		</a>	
        		</div>
        	</div>        	
        </div>
      </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<!--END of Slider-->	



<!--Subscribe bar-->	
<section class="subscribe">
	<div class="container py-4 ">
		<div class="row">
			<div class="col-lg-3 col-md-6 col-sm-6 col-12">
				<div class="row ml-2 my-2">
						<span><i> <img src="Image/icons/shield.svg" width="40px;" height="40px;"></i></span>
						<h5 class="pt-2"style="font-family:'Fredoka One', cursive;">Safe</h5>
				</div>	
			</div>
			<div class="col-lg-3 col-md-6 col-sm-6 col-12">
				<div class="row ml-2 my-2">
						<span><i><img src="Image/icons/customer-service.svg" width="40px;" height="40px;"></i></span>
						<h5 class="pt-2"style="font-family:'Fredoka One', cursive;">24x7 Service</h5>
				</div>
			</div>
			<div class="col-lg-3 col-md-6 col-sm-6 col-12">
				<div class="row ml-2 my-2">
					<span><i><img src="Image/icons/delivery-girl.png" width="40px;" height="40px;"></i></span>	
					<h5 class="pt-2" style="font-family:'Fredoka One', cursive;">Contactless Delivery</h5>
				</div>
			</div>
			<div class="col-lg-3 col-md-6 col-sm-6 col-12">
				<div class="row ml-2">
					<input type="text" name="email" placeholder="Enter email">
					<button class="btn-sub btn-success">SUBSCRIBE</button>
				</div>
			</div>			
		</div>	
	</div>
</section>
<!--END of Subscribe bar -->	



<!--New Arrival Section -->
<section class="collections">
	<div class="container py-5">
		<h1 class="text-center">NEW ARRIVALS</h1><hr>
		<div class="row py-5">
			<div class="col-lg-3">
				<form method="POST">
		        <div class="card">
			        <img src="Image/Cakes/6.jpg" alt="cake" class="img-fluid mb-3">
			        <input class="btn-add-cart" type="submit" value="Add to Cart" name="Choco-Blackberry">
			        <h5>Choco-Blackberry</h5>
			        <p>
				        <small><del>Rs.800</del><span id="price">Rs.700</span></small>
				        <input type="number" required name="quantity" min="1" max="24" class="qty">
				        <span id="unit">Kg</span>
			        </p>
		        </div>
		        </form>
      		</div>
			<div class="col-lg-3">
				<form method="POST">
	          	<div class="card">
		            <img src="Image/Cakes/18.jpg" alt="cake" class="img-fluid mb-3">
		            <input class="btn-add-cart" type="submit" value="Add to Cart" name="Rafalo">
		            <h5>Rafalo</h5>
		            <p>
		            	<small><del>Rs.1000</del><span id="price">Rs.950</span></small>
		              	<input type="number" required name="quantity" min="1" max="24" class="qty">
		              	<span id="unit">Kg</span>
		            </p>
	          	</div>
	          	</form>
	        </div>
			<div class="col-lg-3">	
				<form method="POST">
	          	<div class="card">
		            <img src="Image/Cakes/30.jpg" alt="cake" class="img-fluid mb-3">
		            <input class="btn-add-cart" type="submit" value="Add to Cart" name="Nutella">
		            <h5>Nutella</h5>
		            <p>
			            <small><del>Rs.1750</del><span id="price">Rs.1700</span></small>
			            <input type="number" required name="quantity" min="1" max="24" class="qty">
			            <span id="unit">Kg</span>
		            </p>
	          	</div>
	          	</form>
	        </div>
			<div class="col-lg-3">
				<form method="POST">
	          	<div class="card">
	            	<img src="Image/Cakes/29.jpg" alt="cake" class="img-fluid mb-3">
	            	<input class="btn-add-cart" type="submit" value="Add to Cart" name="Chocolate-Mousse">
	            	<h5>Chocolate Mousse</h5>
	            	<p>
	              		<small><del>Rs.1250</del><span id="price">Rs.1200</span></small>
	              		<input type="number" required name="quantity" min="1" max="24" class="qty">
	              		<span id="unit">Kg</span>
	            	</p>
	          	</div>
	          	</form>
	        </div>
		</div>
	</div>		
</section>
<!--End of New Arrival Section -->



<!--Parallex Section -->
<section class="parallex py-5">
	<div class="container py-5 text-center text-white"> 
		<div class="row py-4">
			<div class="col-lg-9">
				<h1>PREMIUM CAKES</h1>
				<a href="premium-cakes.php?id=<?php echo $userid;?>">
				<button class="btn-pa">SHOP NOW</button>
				</a>
			</div>
		</div>
	</div>	
</section>
<!--End of Parallex Section -->


<!--TOP RATED Section -->
<section class="collections">
	<div class="container py-5">
		<h1 class="text-center">TOP SELLING CAKES</h1><hr>
		<div class="row py-5">
			<div class="col-lg-3">
				<form method="POST">
	        	<div class="card">
		        	<img src="Image/Cakes/7.jpg" alt="cake" class="img-fluid mb-3">
		        	<input class="btn-add-cart" type="submit" value="Add to Cart" name="Raspberry">
		        	<h5>Raspberry</h5>
		        	<p>
			            <small><del>Rs.800</del><span id="price">Rs.700</span></small>
			            <input type="number" required name="quantity" min="1" max="24" class="qty">
			            <span id="unit">Kg</span>
		        	</p>
	        	</div>
	        	</form>
	      	</div>
			<div class="col-lg-3">
				<form method="POST">
          		<div class="card">
	            	<img src="Image/Cakes/32.jpg" alt="cake" class="img-fluid mb-3">
	            	<input class="btn-add-cart" type="submit" value="Add to Cart" name="Rainbow">
	            	<h5>Rainbow</h5>
	            	<p>
		            	<small><del>Rs.1750</del><span id="price">Rs.1700</span></small>
		            	<input type="number" required name="quantity" min="1" max="24" class="qty">
		            	<span id="unit">Kg</span>
	            	</p>
         		</div>
         		</form>
        	</div>
			<div class="col-lg-3">
				<form method="POST">
          		<div class="card">
	            	<img src="Image/Cakes/31.jpg" alt="cake" class="img-fluid mb-3">
	           		<input class="btn-add-cart" type="submit" value="Add to Cart" name="Chocolate-Tres-Leches">
	            	<h5>Chocolate Tres Leches</h5>
		            <p>
		              <small><del>Rs.1500</del><span id="price">Rs.1400</span></small>
		              <input type="number" required name="quantity" min="1" max="24" class="qty">
		              <span id="unit">Kg</span>
		            </p>
          		</div>
          		</form>
        	</div>
			<div class="col-lg-3">
				<form method="POST">
          		<div class="card">
		            <img src="Image/Cakes/17.jpg" alt="cake" class="img-fluid mb-3">
		            <input class="btn-add-cart" type="submit" value="Add to Cart" name="Red-Velvet">
		            <h5>Red Velvet</h5>
		            <p>
		              <small><del>Rs.1000</del><span id="price">Rs.950</span></small>
		              <input type="number" required name="quantity" min="1" max="24" class="qty">
		              <span id="unit">Kg</span>
		            </p>
          		</div>
          		</form>
        	</div>
		</div>
	</div>		
</section>
<!--End of TOP RATED Section -->



<!-- Contact us Section -->
<section class="contact-us pb-5">
	<div class="container">
		<div class="text-center py-3 mb-4">
			<h1>CONTACT US</h1>
			<hr>
			<div class="mx-auto heading-line"></div>
		</div>
		<div class="row">
			<div class="col-lg-6">
				<!-- Google map -->
				<div id="map-container-google-1" class="z-depth-1-half map-container">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2549.086836335762!2d75.3729894848963!3d11.978148459768908!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x35ad480f67437c24!2sMom&#39;s%20kitchen!5e0!3m2!1sen!2sin!4v1602239127692!5m2!1sen!2sin" width="600" height="450" frameborder="0" style="border:0; width: 100%;
					height: 420px;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
				</div>
			</div>
			<form class="col-lg-6">
				<div class="form-group">
					<label for="email">Email</label>
					<input id="email" class="form-control" type="email" name="" aria-describedby="emailHint" placeholder="Enter your Email">
				</div>
				<div class="form-group">
					<label for="name">Name</label>
					<input id="name" class="form-control" type="text " name="" placeholder="Enter your Name">
				</div>
				<div class="form-group">
					<label for="message">Message</label>
					<textarea id="message" class="form-control" type="text" name="" placeholder="Message" rows="5"></textarea>
				</div>
				<button type="submit" class="btn-contact mt-2">Submit</button>
			</form>
		</div>
	</div>
</section>
<!-- End of Contact us Section -->




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