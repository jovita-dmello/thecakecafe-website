<?php 
include('conctn.php');
$userid=$_GET['uid'];//customer id
//echo  "user=".$userid;
$prid=$_GET['pid'];


if ($prid==0){
$que2="SELECT prid from cart where userid='$userid'";
$res2=mysqli_query($conn,$que2);
$arr2=mysqli_fetch_assoc($res2);//,MYSQLI_ASSOC);
$prid=$arr2['prid'];
//echo $prid;
}

$que="SELECT pname from products where prid=$prid";
$res=mysqli_query($conn,$que);
$arr=mysqli_fetch_assoc($res);//,MYSQLI_ASSOC);
$pname=$arr['pname'];
//echo $pname;


$que1="SELECT qty,total from cart where cid=1";
$res1=mysqli_query($conn,$que1);
$arr1=mysqli_fetch_assoc($res1);//,MYSQLI_ASSOC);
$qty=$arr1['qty'];
$total=$arr1['total'];
//echo $qty;
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<title>Cart</title>

	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="icon" href="Image/brand-logo.gif" type="image/gif" sizes="16x16">
  <link rel="stylesheet" type="text/css" href="bootstrap-4/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/cart.css">
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


<!-- PHP CART CONTENT -->
<section class="cart py-5">
<div class="container">
  <h1 class="text-center">YOUR CART</h1><hr>
  <div class="row">
    <div class="col-lg-3">
      <img src="Image/Cakes/<?php echo $prid?>.jpg" alt="cake" class="img-fluid my-3 mx-auto ">
    </div>
    <div class="col-lg-7 mt-5 mx-5">
      <h1 class="mt-2">Product</h1><hr>
      <h2 class="my-3"><?php echo$pname?></h2>
      <h3 class="my-3"><span class="row_header">Total: </span><?php  echo $total; ?> </h3>
      <h3 class="my-3"><span class="row_header">Kg: </span><?php echo $qty; ?></h3><hr>
    </div>
  </div>
  <a class="proceed-checkout my-3" href="payment.php?id=<?php echo $userid;?>&pid=<?php echo $prid;?>&total=<?php echo $total;?>&qty=<?php echo $qty;?>">Proceed to Checkout</a>
</div>  
</section>
<!-- END OF PHP CART CONTENT -->


<!-- Footer -->
<footer class="page-footer font-small elegant-color bg-light mt-5">
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