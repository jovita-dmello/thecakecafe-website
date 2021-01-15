<?php 
include('conctn.php');
$userid=$_GET['id'];
//echo  "user=".$userid;
$sql="SELECT count(cid) as num from cart";
$res=mysqli_query($conn,$sql);
$arr=mysqli_fetch_assoc($res);
$no_of_item_cart=$arr['num'];
//echo $no_of_item_cart;
//Butter-Scotch
if(isset($_POST['Butter-Scotch']))
{

  $sql = "SELECT price FROM products  WHERE prid=13";
  $result = mysqli_query($conn, $sql);
  $addc = mysqli_fetch_assoc($result);
  $price=$addc['price'];
  $qty=$_POST['quantity'];
  $total=$price*$qty;
  if($no_of_item_cart==0){
  $sql="INSERT into cart(cid,prid,qty,total,userid) values(1,13,'$qty','$total','$userid')";
  if(mysqli_query($conn,$sql)){echo " 0 item";}
  header('location:cart.php?uid='.$userid.'&pid=13');
 }  
 else{
  echo "enter";
  mysqli_query($conn,"UPDATE cart
  SET prid=13,qty=$qty,total=$total where cid=1");
  mysqli_query($conn,"UPDATE cart
  SET userid=$userid where cid=1");
  header('location:cart.php?uid='.$userid.'&pid=13');
  }
}

//Tender-Coconut
if(isset($_POST['Tender-Coconut']))
{

  $sql = "SELECT price FROM products  WHERE prid=14";
  $result = mysqli_query($conn, $sql);
  $addc = mysqli_fetch_assoc($result);
  $price=$addc['price'];
  $qty=$_POST['quantity'];
  $total=$price*$qty;
  if($no_of_item_cart==0){
    $sql="INSERT into cart(cid,prid,qty,total,userid) values(1,14,'$qty','$total','$userid')";
    if(mysqli_query($conn,$sql))
    header('location:cart.php?uid='.$userid.'&pid=14');
  } 
  else{
  mysqli_query($conn,"UPDATE cart
  SET prid=14,qty=$qty,total=$total where cid=1");
  mysqli_query($conn,"UPDATE cart
  SET userid=$userid where cid=1");
  header('location:cart.php?uid='.$userid.'&pid=14');
  }
}

//Golden-Glitter
if(isset($_POST['Golden-Glitter']))
{

  $sql = "SELECT price FROM products  WHERE prid=15";
  $result = mysqli_query($conn, $sql);
  $addc = mysqli_fetch_assoc($result);
  $price=$addc['price'];
  $qty=$_POST['quantity'];
  $total=$price*$qty;
  if($no_of_item_cart==0){
  $sql="INSERT into cart(cid,prid,qty,total,userid) values(1,15,'$qty','$total','$userid')";
  if(mysqli_query($conn,$sql)){echo " 0 item";}
  header('location:cart.php?uid='.$userid.'&pid=15');
 }  
 else{
  echo "enter";
  mysqli_query($conn,"UPDATE cart
  SET prid=15,qty=$qty,total=$total where cid=1");
  mysqli_query($conn,"UPDATE cart
  SET userid=$userid where cid=1");
  header('location:cart.php?uid='.$userid.'&pid=15');
  }
}

//White-Truffle
if(isset($_POST['White-Truffle']))
{

  $sql = "SELECT price FROM products  WHERE prid=16";
  $result = mysqli_query($conn, $sql);
  $addc = mysqli_fetch_assoc($result);
  $price=$addc['price'];
  $qty=$_POST['quantity'];
  $total=$price*$qty;
  if($no_of_item_cart==0){
  $sql="INSERT into cart(cid,prid,qty,total,userid) values(1,16,'$qty','$total','$userid')";
  if(mysqli_query($conn,$sql)){echo " 0 item";}
  header('location:cart.php?uid='.$userid.'&pid=16');
 }  
 else{
  echo "enter";
  mysqli_query($conn,"UPDATE cart
  SET prid=16,qty=$qty,total=$total where cid=1");
  mysqli_query($conn,"UPDATE cart
  SET userid=$userid where cid=1");
  header('location:cart.php?uid='.$userid.'&pid=16');
  }
}

//Red-Velvet
if(isset($_POST['Red-Velvet']))
{

  $sql = "SELECT price FROM products  WHERE prid=17";
  $result = mysqli_query($conn, $sql);
  $addc = mysqli_fetch_assoc($result);
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
  header('location:cart.php?uid='.$userid.'&pid=17');
  }
}

//Rafalo
if(isset($_POST['Rafalo']))
{

  $sql = "SELECT price FROM products  WHERE prid=18";
  $result = mysqli_query($conn, $sql);
  $addc = mysqli_fetch_assoc($result);
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
  header('location:cart.php?uid='.$userid.'&pid=18');
  }
}

//Oreo
if(isset($_POST['Oreo']))
{

  $sql = "SELECT price FROM products  WHERE prid=19";
  $result = mysqli_query($conn, $sql);
  $addc = mysqli_fetch_assoc($result);//,MYSQLI_ASSOC);
  $price=$addc['price'];
  $qty=$_POST['quantity'];
  $total=$price*$qty;
  if($no_of_item_cart==0){
  $sql="INSERT into cart(cid,prid,qty,total,userid) values(1,19,'$qty','$total','$userid')";
  if(mysqli_query($conn,$sql)){echo " 0 item";}
  header('location:cart.php?uid='.$userid.'&pid=19');
 }  
 else{
  echo "enter";
  mysqli_query($conn,"UPDATE cart
  SET prid=19,qty=$qty,total=$total where cid=1");
  mysqli_query($conn,"UPDATE cart
  SET userid=$userid where cid=1");
  header('location:cart.php?uid='.$userid.'&pid=19');
  }
}

//Chocolate-Truffle
if(isset($_POST['Chocolate-Truffle']))
{

  $sql = "SELECT price FROM products  WHERE prid=20";
  $result = mysqli_query($conn, $sql);
  $addc = mysqli_fetch_assoc($result);
  $price=$addc['price'];
  $qty=$_POST['quantity'];
  $total=$price*$qty;
  if($no_of_item_cart==0){
  $sql="INSERT into cart(cid,prid,qty,total,userid) values(1,20,'$qty','$total','$userid')";
  if(mysqli_query($conn,$sql)){echo " 0 item";}
  header('location:cart.php?uid='.$userid.'&pid=20');
 }  
 else{
  echo "enter";
  mysqli_query($conn,"UPDATE cart
  SET prid=20,qty=$qty,total=$total where cid=1");
  mysqli_query($conn,"UPDATE cart
  SET userid=$userid where cid=1");
  header('location:cart.php?uid='.$userid.'&pid=20');
  }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<title>Exotic Cakes</title>

	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" type="text/css" href="bootstrap-4/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/exotic-cakes.css">
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
  
  <!--Parallex Effect -->
  <section class="parallex">
  <div class="container py-5 text-center text-white"> 
    <div class="row py-3">
      <div class="col-lg-9">
        <p><span class="p-classic">Exotic</span><br>Cakes</p>
      </div>
    </div>
  </div>  
  </section>  
  <!--END of Parallex Effect -->


  <!--Product Section -->
  <section class="collections">
    <div class="container py-5">
      <h1 class="text-center">EXOTIC CAKES</h1><hr>
      <div class="row py-5">
        <div class="col-lg-3">
          <form method="POST">
          <div class="card">
            <img src="Image/Cakes/13.jpg" alt="cake" class="img-fluid mb-3">
            <input class="btn-add-cart" type="submit" value="Add to Cart" name="Butter-Scotch">
            <h5>Butter Scotch</h5>
            <p>
              <small><del>Rs.900</del><span id="price">Rs.800</span></small>
              <input type="number" required name="quantity" min="1" max="24" class="qty">
              <span id="unit">Kg</span>
            </p>
          </div></form>
        </div>
        <div class="col-lg-3">
          <form method="POST">
          <div class="card">
            <img src="Image/Cakes/14.jpg" alt="cake" class="img-fluid mb-3">
            <input class="btn-add-cart" type="submit" value="Add to Cart" name="Tender-Coconut">
            <h5>Tender Coconut</h5>
            <p>
              <small><del>Rs.900</del><span id="price">Rs.850</span></small>
              <input type="number" required name="quantity" min="1" max="24" class="qty">
              <span id="unit">Kg</span>
            </p>
          </div></form>
        </div>
        <div class="col-lg-3">
          <form method="POST">
          <div class="card">
            <img src="Image/Cakes/15.jpg" alt="cake" class="img-fluid mb-3">
            <input class="btn-add-cart" type="submit" value="Add to Cart" name="Golden-Glitter">
            <h5>Golden Glitter</h5>
            <p>
              <small><del>Rs.900</del><span id="price">Rs.850</span></small>
              <input type="number" required name="quantity" min="1" max="24" class="qty">
              <span id="unit">Kg</span>
            </p>
          </div></form>
        </div>
        <div class="col-lg-3">
          <form method="POST">
          <div class="card">
            <img src="Image/Cakes/16.jpg" alt="cake" class="img-fluid mb-3">
            <input class="btn-add-cart" type="submit" value="Add to Cart" name="White-Truffle">
            <h5>White Truffle</h5>
            <p>
              <small><del>Rs.950</del><span id="price">Rs.900</span></small>
              <input type="number" required name="quantity" min="1" max="24" class="qty">
              <span id="unit">Kg</span>
            </p>
          </div></form>
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
          </div></form>
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
          </div></form>
        </div>
        <div class="col-lg-3">
          <form method="POST">
          <div class="card">
            <img src="Image/Cakes/19.jpg" alt="cake" class="img-fluid mb-3">
            <input class="btn-add-cart" type="submit" value="Add to Cart" name="Oreo">
            <h5>Oreo</h5>
            <p>
              <small><del>Rs.1000</del><span id="price">Rs.950</span></small>
              <input type="number" required name="quantity" min="1" max="24" class="qty">
              <span id="unit">Kg</span>
            </p>
          </div></form>
        </div>
        <div class="col-lg-3">
          <form method="POST">
          <div class="card">
            <img src="Image/Cakes/20.jpg" alt="cake" class="img-fluid mb-3">
            <input class="btn-add-cart" type="submit" value="Add to Cart" name="Chocolate-Truffle">
            <h5>Chocolate Truffle</h5>
            <p>
              <small><del>Rs.1000</del><span id="price">Rs.950</span></small>
              <input type="number" required name="quantity" min="1" max="24" class="qty">
              <span id="unit">Kg</span>
            </p>
          </div></form>
        </div>
      </div>
    </div>    
  </section>
  <!--End of Product Section -->


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
          </a><a class="icon" href="https://instagram.com/momskitchen.knr?igshid=1k3rn5jcahgnm">
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