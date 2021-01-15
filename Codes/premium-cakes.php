<?php 
include('conctn.php');
$userid=$_GET['id'];
//echo  "user=".$userid;
$sql="SELECT count(cid) as num from cart";
$res=mysqli_query($conn,$sql);
$arr=mysqli_fetch_assoc($res);//,MYSQLI_ASSOC);
$no_of_item_cart=$arr['num'];
//echo $no_of_item_cart;
//PREMIUM CAKES
//Dulce-de-Leche
if(isset($_POST['Dulce-de-Leche']))
{

  $sql = "SELECT price FROM products  WHERE prid=21";
  $result = mysqli_query($conn, $sql);
  $addc = mysqli_fetch_assoc($result);
  $price=$addc['price'];
  $qty=$_POST['quantity'];
  $total=$price*$qty;
  if($no_of_item_cart==0){
  $sql="INSERT into cart(cid,prid,qty,total,userid) values(1,21,'$qty','$total','$userid')";
  if(mysqli_query($conn,$sql)){echo " 0 item";}
  header('location:cart.php?uid='.$userid.'&pid=21');
 }  
 else{
  echo "enter";
  mysqli_query($conn,"UPDATE cart
  SET prid=21,qty=$qty,total=$total where cid=21");
  mysqli_query($conn,"UPDATE cart
  SET userid=$userid where cid=1");
  header('location:cart.php?uid='.$userid.'&pid=21');
  }
}

//Honey
if(isset($_POST['Honey']))
{

  $sql = "SELECT price FROM products  WHERE prid=22";
  $result = mysqli_query($conn, $sql);
  $addc = mysqli_fetch_assoc($result);
  $price=$addc['price'];
  $qty=$_POST['quantity'];
  $total=$price*$qty;
  if($no_of_item_cart==0){
    $sql="INSERT into cart(cid,prid,qty,total,userid) values(1,22,'$qty','$total','$userid')";
    if(mysqli_query($conn,$sql))
    header('location:cart.php?uid='.$userid.'&pid=22');
  } 
  else{
  mysqli_query($conn,"UPDATE cart
  SET prid=22,qty=$qty,total=$total where cid=1");
  mysqli_query($conn,"UPDATE cart
  SET userid=$userid where cid=1");
  header('location:cart.php?uid='.$userid.'&pid=22');
  }
}

//Cotton-Candy
if(isset($_POST['Cotton-Candy']))
{

  $sql = "SELECT price FROM products  WHERE prid=23";
  $result = mysqli_query($conn, $sql);
  $addc = mysqli_fetch_assoc($result);
  $price=$addc['price'];
  $qty=$_POST['quantity'];
  $total=$price*$qty;
  if($no_of_item_cart==0){
  $sql="INSERT into cart(cid,prid,qty,total,userid) values(1,23,'$qty','$total','$userid')";
  if(mysqli_query($conn,$sql)){echo " 0 item";}
  header('location:cart.php?uid='.$userid.'&pid=23');
 }  
 else{
  echo "enter";
  mysqli_query($conn,"UPDATE cart
  SET prid=23,qty=$qty,total=$total where cid=1");
  mysqli_query($conn,"UPDATE cart
  SET userid=$userid where cid=1");
  header('location:cart.php?uid='.$userid.'&pid=23');
  }
}

//Fresh-Fruit
if(isset($_POST['Fresh-Fruit']))
{

  $sql = "SELECT price FROM products  WHERE prid=24";
  $result = mysqli_query($conn, $sql);
  $addc = mysqli_fetch_assoc($result);
  $price=$addc['price'];
  $qty=$_POST['quantity'];
  $total=$price*$qty;
  if($no_of_item_cart==0){
  $sql="INSERT into cart(cid,prid,qty,total,userid) values(1,24,'$qty','$total','$userid')";
  if(mysqli_query($conn,$sql)){echo " 0 item";}
  header('location:cart.php?uid='.$userid.'&pid=24');
 }  
 else{
  echo "enter";
  mysqli_query($conn,"UPDATE cart
  SET prid=24,qty=$qty,total=$total where cid=1");
  mysqli_query($conn,"UPDATE cart
  SET userid=$userid where cid=1");
  header('location:cart.php?uid='.$userid.'&pid=24');
  }
}

//Choconut-Fantasy
if(isset($_POST['Choconut-Fantasy']))
{

  $sql = "SELECT price FROM products  WHERE prid=25";
  $result = mysqli_query($conn, $sql);
  $addc = mysqli_fetch_assoc($result);
  $price=$addc['price'];
  $qty=$_POST['quantity'];
  $total=$price*$qty;
  if($no_of_item_cart==0){
  $sql="INSERT into cart(cid,prid,qty,total,userid) values(1,25,'$qty','$total','$userid')";
  if(mysqli_query($conn,$sql)){echo " 0 item";}
  header('location:cart.php?uid='.$userid.'&pid=25');
 }  
 else{
  echo "enter";
  mysqli_query($conn,"UPDATE cart
  SET prid=25,qty=$qty,total=$total where cid=1");
  mysqli_query($conn,"UPDATE cart
  SET userid=$userid where cid=1");
  header('location:cart.php?uid='.$userid.'&pid=25');
  }
}

//Death-by-Chocolate
if(isset($_POST['Death-by-Chocolate']))
{

  $sql = "SELECT price FROM products  WHERE prid=26";
  $result = mysqli_query($conn, $sql);
  $addc = mysqli_fetch_assoc($result);
  $price=$addc['price'];
  $qty=$_POST['quantity'];
  $total=$price*$qty;
  if($no_of_item_cart==0){
  $sql="INSERT into cart(cid,prid,qty,total,userid) values(1,26,'$qty','$total','$userid')";
  if(mysqli_query($conn,$sql)){echo " 0 item";}
  header('location:cart.php?uid='.$userid.'&pid=26');
 }  
 else{
  echo "enter";
  mysqli_query($conn,"UPDATE cart
  SET prid=26,qty=$qty,total=$total where cid=1");
  mysqli_query($conn,"UPDATE cart
  SET userid=$userid where cid=1");
  header('location:cart.php?uid='.$userid.'&pid=26');
  }
}
//Ferrero-Rocher
if(isset($_POST['Ferrero-Rocher']))
{

  $sql = "SELECT price FROM products  WHERE prid=27";
  $result = mysqli_query($conn, $sql);
  $addc = mysqli_fetch_assoc($result);
  $price=$addc['price'];
  $qty=$_POST['quantity'];
  $total=$price*$qty;
  if($no_of_item_cart==0){
  $sql="INSERT into cart(cid,prid,qty,total,userid) values(1,27,'$qty','$total','$userid')";
  if(mysqli_query($conn,$sql)){echo " 0 item";}
  header('location:cart.php?uid='.$userid.'&pid=27');
 }  
 else{
  echo "enter";
  mysqli_query($conn,"UPDATE cart
  SET prid=27,qty=$qty,total=$total where cid=1");
  mysqli_query($conn,"UPDATE cart
  SET userid=$userid where cid=1");
  header('location:cart.php?uid='.$userid.'&pid=27');
  }
}

//Kit-Kat
if(isset($_POST['Kit-Kat']))
{

  $sql = "SELECT price FROM products  WHERE prid=28";
  $result = mysqli_query($conn, $sql);
  $addc = mysqli_fetch_assoc($result);
  $price=$addc['price'];
  $qty=$_POST['quantity'];
  $total=$price*$qty;
  if($no_of_item_cart==0){
    $sql="INSERT into cart(cid,prid,qty,total,userid) values(1,28,'$qty','$total','$userid')";
    if(mysqli_query($conn,$sql))
    header('location:cart.php?uid='.$userid.'&pid=28');
  } 
  else{
  mysqli_query($conn,"UPDATE cart
  SET prid=28,qty=$qty,total=$total where cid=1");
  mysqli_query($conn,"UPDATE cart
  SET userid=$userid where cid=1");
  header('location:cart.php?uid='.$userid.'&pid=28');
  }
}

//Chocolate-Mousse
if(isset($_POST['Chocolate-Mousse']))
{

  $sql = "SELECT price FROM products  WHERE prid=29";
  $result = mysqli_query($conn, $sql);
  $addc = mysqli_fetch_assoc($result);
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
  header('location:cart.php?uid='.$userid.'&pid=29');
  }
}
//Nutella
if(isset($_POST['Nutella']))
{

  $sql = "SELECT price FROM products  WHERE prid=30";
  $result = mysqli_query($conn, $sql);
  $addc = mysqli_fetch_assoc($result);
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
  header('location:cart.php?uid='.$userid.'&pid=30');
  }
}
//Chocolate-Tres-Leches
if(isset($_POST['Chocolate-Tres-Leches']))
{

  $sql = "SELECT price FROM products  WHERE prid=31";
  $result = mysqli_query($conn, $sql);
  $addc = mysqli_fetch_assoc($result);
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
  header('location:cart.php?uid='.$userid.'&pid=31');
  }
}
//Rainbow
if(isset($_POST['Rainbow']))
{

  $sql = "SELECT price FROM products  WHERE prid=32";
  $result = mysqli_query($conn, $sql);
  $addc = mysqli_fetch_assoc($result);
  $price=$addc['price'];
  $qty=$_POST['quantity'];
  $total=$price*$qty;
  if($no_of_item_cart==0){
  $sql="INSERT into cart(cid,prid,qty,total,userid) values(1,32,'$qty','$total','$userid')";
  if(mysqli_query($conn,$sql)){echo " 0 item";}
  header('location:cart.php?uid='.$userid.'&pid=32');
 }  
 else{
  echo "enter";
  mysqli_query($conn,"UPDATE cart
  SET prid=32,qty=$qty,total=$total where cid=1");
  mysqli_query($conn,"UPDATE cart
  SET userid=$userid where cid=1");
  header('location:cart.php?uid='.$userid.'&pid=32');
  }
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
	<title>Premium Cakes</title>

	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="Image/brand-logo.gif" type="image/gif" sizes="16x16">
    <link rel="stylesheet" type="text/css" href="bootstrap-4/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/premium-cake.css">
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
        <p><span class="p-classic">Premium</span><br>Cakes</p>
      </div>
    </div>
  </div>  
  </section>  
<!--END of Parallex Effect -->


  <!--Product Section -->
  <section class="collections">
    <div class="container py-5">
      <h1 class="text-center">Premium Cakes</h1><hr>
      <div class="row py-5">
        <div class="col-lg-3">
          <form method="POST">
          <div class="card">
            <img src="Image/Cakes/21.jpg" alt="cake" class="img-fluid mb-3">
            <input class="btn-add-cart" type="submit" value="Add to Cart" name="Dulce-de-Leche">
            <h5>Dulce de Leche</h5>
            <p>
              <small><del>Rs.1100</del><span id="price">Rs.1000</span></small>
              <input type="number" required name="quantity" min="1" max="24" class="qty">
              <span id="unit">Kg</span>
            </p>
          </div></form>
        </div>
        <div class="col-lg-3">
          <form method="POST">
          <div class="card">
            <img src="Image/Cakes/22.jpg" alt="cake" class="img-fluid mb-3">
            <input class="btn-add-cart" type="submit" value="Add to Cart" name="Honey">
            <h5>Honey</h5>
            <p>
              <small><del>Rs.1100</del><span id="price">Rs.1000</span></small>
              <input type="number" required name="quantity" min="1" max="24" class="qty">
              <span id="unit">Kg</span>
            </p>
          </div></form>
        </div>
        <div class="col-lg-3">
          <form method="POST">
          <div class="card">
            <img src="Image/Cakes/23.jpg" alt="cake" class="img-fluid mb-3">
            <input class="btn-add-cart" type="submit" value="Add to Cart" name="Cotton-Candy">
            <h5>Cotton Candy</h5>
            <p>
              <small><del>Rs.1350</del><span id="price">Rs.1200</span></small>
              <input type="number" required name="quantity" min="1" max="24" class="qty">
              <span id="unit">Kg</span>
            </p>
          </div></form>
        </div>
        <div class="col-lg-3">
          <form method="POST">
          <div class="card">
            <img src="Image/Cakes/24.jpg" alt="cake" class="img-fluid mb-3">
            <input class="btn-add-cart" type="submit" value="Add to Cart" name="Fresh-Fruit">
            <h5>Fresh Fruit</h5>
            <p>
              <small><del>Rs.1100</del><span id="price">Rs.1000</span></small>
              <input type="number" required name="quantity" min="1" max="24" class="qty">
              <span id="unit">Kg</span>
            </p>
          </div></form>
        </div>
        <div class="col-lg-3">
          <form method="POST">
          <div class="card">
            <img src="Image/Cakes/25.jpg" alt="cake" class="img-fluid mb-3">
            <input class="btn-add-cart" type="submit" value="Add to Cart" name="Choconut-Fantasy">
            <h5>Choconut Fantasy</h5>
            <p>
              <small><del>Rs.1300</del><span id="price">Rs.1200</span></small>
              <input type="number" required name="quantity" min="1" max="24" class="qty">
              <span id="unit">Kg</span>
            </p>
          </div></form>
        </div>
        <div class="col-lg-3">
          <form method="POST">
          <div class="card">
            <img src="Image/Cakes/26.jpg" alt="cake" class="img-fluid mb-3">
            <input class="btn-add-cart" type="submit" value="Add to Cart" name="Death-by-Chocolate">
            <h5>Death by Chocolate</h5>
            <p>
              <small><del>Rs.1300</del><span id="price">Rs.1200</span></small>
              <input type="number" required name="quantity" min="1" max="24" class="qty">
              <span id="unit">Kg</span>
            </p>
          </div></form>
        </div>
        <div class="col-lg-3">
          <form method="POST">
          <div class="card">
            <img src="Image/Cakes/27.jpg" alt="cake" class="img-fluid mb-3">
            <input class="btn-add-cart" type="submit" value="Add to Cart" name="Ferrero-Rocher">
            <h5>Ferrero Rocher</h5>
            <p>
              <small><del>Rs.1300</del><span id="price">Rs.1200</span></small>
              <input type="number" required name="quantity" min="1" max="24" class="qty">
              <span id="unit">Kg</span>
            </p>
          </div></form>
        </div>
        <div class="col-lg-3">
          <form method="POST">
          <div class="card">
            <img src="Image/Cakes/28.jpg" alt="cake" class="img-fluid mb-3">
            <input class="btn-add-cart" type="submit" value="Add to Cart" name="Kit-Kat">
            <h5>Kit-Kat</h5>
            <p>
              <small><del>Rs.1300</del><span id="price">Rs.1200</span></small>
              <input type="number" required name="quantity" min="1" max="24" class="qty">
              <span id="unit">Kg</span>
            </p>
          </div></form>
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
          </div></form>
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
          </div></form>
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
          </div></form>
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