<?php 
include('conctn.php');
$userid=$_GET['id'];
//echo  "user=".$userid;
$sql="SELECT count(cid) as num from cart";
$res=mysqli_query($conn,$sql);
$arr=mysqli_fetch_assoc($res);//,MYSQLI_ASSOC);
$no_of_item_cart=$arr['num'];

//echo $no_of_item_cart;
//Vanilla
if(isset($_POST['Vanilla']))
{

  $sql = "SELECT price FROM products  WHERE prid=1";
  $result = mysqli_query($conn, $sql);
  $addc = mysqli_fetch_assoc($result);
  $price=$addc['price'];
  $qty=$_POST['quantity'];
  $total=$price*$qty;
  if($no_of_item_cart==0){
  $sql="INSERT into cart(cid,prid,qty,total,userid) values(1,1,'$qty','$total','$userid')";
  if(mysqli_query($conn,$sql)){echo " 0 item";}
  header('location:cart.php?uid='.$userid.'&pid=1');
 }  
 else{
  echo "enter";
  mysqli_query($conn,"UPDATE cart
  SET prid=1,qty=$qty,total=$total where cid=1");
  mysqli_query($conn,"UPDATE cart
  SET userid=$userid where cid=1");
  header('location:cart.php?uid='.$userid.'&pid=1');
  }
}

//Rafalo
if(isset($_POST['Black-Forest']))
{

  $sql = "SELECT price FROM products  WHERE prid=2";
  $result = mysqli_query($conn, $sql);
  $addc = mysqli_fetch_assoc($result);
  $price=$addc['price'];
  $qty=$_POST['quantity'];
  $total=$price*$qty;
  if($no_of_item_cart==0){
    $sql="INSERT into cart(cid,prid,qty,total,userid) values(1,2,'$qty','$total','$userid')";
    if(mysqli_query($conn,$sql))
    header('location:cart.php?uid='.$userid.'&pid=2');
  } 
  else{
  mysqli_query($conn,"UPDATE cart
  SET prid=2,qty=$qty,total=$total where cid=1");
  mysqli_query($conn,"UPDATE cart
  SET userid=$userid where cid=1");
  header('location:cart.php?uid='.$userid.'&pid=2');
  }
}

//White-Forest
if(isset($_POST['White-Forest']))
{

  $sql = "SELECT price FROM products  WHERE prid=3";
  $result = mysqli_query($conn, $sql);
  $addc = mysqli_fetch_assoc($result);
  $price=$addc['price'];
  $qty=$_POST['quantity'];
  $total=$price*$qty;
  if($no_of_item_cart==0){
  $sql="INSERT into cart(cid,prid,qty,total,userid) values(1,3,'$qty','$total','$userid')";
  if(mysqli_query($conn,$sql)){echo " 0 item";}
  header('location:cart.php?uid='.$userid.'&pid=3');
 }  
 else{
  echo "enter";
  mysqli_query($conn,"UPDATE cart
  SET prid=3,qty=$qty,total=$total where cid=1");
  mysqli_query($conn,"UPDATE cart
  SET userid=$userid where cid=1");
  header('location:cart.php?uid='.$userid.'&pid=3');
  }
}

//Chocolate
if(isset($_POST['Chocolate']))
{

  $sql = "SELECT price FROM products  WHERE prid=4";
  $result = mysqli_query($conn, $sql);
  $addc = mysqli_fetch_assoc($result);
  $price=$addc['price'];
  $qty=$_POST['quantity'];
  $total=$price*$qty;
  if($no_of_item_cart==0){
  $sql="INSERT into cart(cid,prid,qty,total,userid) values(1,4,'$qty','$total','$userid')";
  if(mysqli_query($conn,$sql)){echo " 0 item";}
  header('location:cart.php?uid='.$userid.'&pid=4');
 }  
 else{
  echo "enter";
  mysqli_query($conn,"UPDATE cart
  SET prid=4,qty=$qty,total=$total where cid=1");
  mysqli_query($conn,"UPDATE cart
  SET userid=$userid where cid=1");
  header('location:cart.php?uid='.$userid.'&pid=4');
  }
}
//Blueberry
if(isset($_POST['Blueberry']))
{

  $sql = "SELECT price FROM products  WHERE prid=5";
  $result = mysqli_query($conn, $sql);
  $addc = mysqli_fetch_assoc($result);
  $price=$addc['price'];
  $qty=$_POST['quantity'];
  $total=$price*$qty;
  if($no_of_item_cart==0){
  $sql="INSERT into cart(cid,prid,qty,total,userid) values(1,5,'$qty','$total','$userid')";
  if(mysqli_query($conn,$sql)){echo " 0 item";}
  header('location:cart.php?uid='.$userid.'&pid=5');
 }  
 else{
  echo "enter";
  mysqli_query($conn,"UPDATE cart
  SET prid=5,qty=$qty,total=$total where cid=1");
  mysqli_query($conn,"UPDATE cart
  SET userid=$userid where cid=1");
  header('location:cart.php?uid='.$userid.'&pid=5');
  }
}

//Choco-Blackberry
if(isset($_POST['Choco-Blackberry']))
{

  $sql = "SELECT price FROM products  WHERE prid=6";
  $result = mysqli_query($conn, $sql);
  $addc = mysqli_fetch_assoc($result);
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
  header('location:cart.php?uid='.$userid.'&pid=6');
  }
}
//Raspberry
if(isset($_POST['Raspberry']))
{

  $sql = "SELECT price FROM products  WHERE prid=7";
  $result = mysqli_query($conn, $sql);
  $addc = mysqli_fetch_assoc($result);
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
  header('location:cart.php?uid='.$userid.'&pid=7');
  }
}

//Strawberry
if(isset($_POST['Strawberry']))
{

  $sql = "SELECT price FROM products  WHERE prid=8";
  $result = mysqli_query($conn, $sql);
  $addc = mysqli_fetch_assoc($result);
  $price=$addc['price'];
  $qty=$_POST['quantity'];
  $total=$price*$qty;
  if($no_of_item_cart==0){
    $sql="INSERT into cart(cid,prid,qty,total,userid) values(1,8,'$qty','$total','$userid')";
    if(mysqli_query($conn,$sql))
    header('location:cart.php?uid='.$userid.'&pid=8');
  } 
  else{
  mysqli_query($conn,"UPDATE cart
  SET prid=8,qty=$qty,total=$total where cid=1");
  mysqli_query($conn,"UPDATE cart
  SET userid=$userid where cid=1");
  header('location:cart.php?uid='.$userid.'&pid=8');
  }
}

//Kiwi
if(isset($_POST['Kiwi']))
{

  $sql = "SELECT price FROM products  WHERE prid=9";
  $result = mysqli_query($conn, $sql);
  $addc = mysqli_fetch_assoc($result);
  $price=$addc['price'];
  $qty=$_POST['quantity'];
  $total=$price*$qty;
  if($no_of_item_cart==0){
  $sql="INSERT into cart(cid,prid,qty,total,userid) values(1,9,'$qty','$total','$userid')";
  if(mysqli_query($conn,$sql)){echo " 0 item";}
  header('location:cart.php?uid='.$userid.'&pid=9');
 }  
 else{
  echo "enter";
  mysqli_query($conn,"UPDATE cart
  SET prid=9,qty=$qty,total=$total where cid=1");
  mysqli_query($conn,"UPDATE cart
  SET userid=$userid where cid=1");
  header('location:cart.php?uid='.$userid.'&pid=9');
  }
}
//Mango
if(isset($_POST['Mango']))
{

  $sql = "SELECT price FROM products  WHERE prid=10";
  $result = mysqli_query($conn, $sql);
  $addc = mysqli_fetch_assoc($result);
  $price=$addc['price'];
  $qty=$_POST['quantity'];
  $total=$price*$qty;
  if($no_of_item_cart==0){
  $sql="INSERT into cart(cid,prid,qty,total,userid) values(1,10,'$qty','$total','$userid')";
  if(mysqli_query($conn,$sql)){echo " 0 item";}
  header('location:cart.php?uid='.$userid.'&pid=10');
 }  
 else{
  echo "enter";
  mysqli_query($conn,"UPDATE cart
  SET prid=10,qty=$qty,total=$total where cid=1");
  mysqli_query($conn,"UPDATE cart
  SET userid=$userid where cid=1");
  header('location:cart.php?uid='.$userid.'&pid=10');
  }
}
//Pista
if(isset($_POST['Pista']))
{

  $sql = "SELECT price FROM products  WHERE prid=11";
  $result = mysqli_query($conn, $sql);
  $addc = mysqli_fetch_assoc($result);
  $price=$addc['price'];
  $qty=$_POST['quantity'];
  $total=$price*$qty;
  if($no_of_item_cart==0){
  $sql="INSERT into cart(cid,prid,qty,total,userid) values(1,11,'$qty','$total','$userid')";
  if(mysqli_query($conn,$sql)){echo " 0 item";}
  header('location:cart.php?uid='.$userid.'&pid=10');
 }  
 else{
  echo "enter";
  mysqli_query($conn,"UPDATE cart
  SET prid=11,qty=$qty,total=$total where cid=1");
  mysqli_query($conn,"UPDATE cart
  SET userid=$userid where cid=1");
  header('location:cart.php?uid='.$userid.'&pid=11');
  }
}
//Pashion-Fruit
if(isset($_POST['Pashion-Fruit']))
{

  $sql = "SELECT price FROM products  WHERE prid=12";
  $result = mysqli_query($conn, $sql);
  $addc = mysqli_fetch_assoc($result);
  $qty=$_POST['quantity'];
  $total=$price*$qty;
  if($no_of_item_cart==0){
  $sql="INSERT into cart(cid,prid,qty,total,userid) values(1,12,'$qty','$total','$userid')";
  if(mysqli_query($conn,$sql)){echo " 0 item";}
  header('location:cart.php?uid='.$userid.'&pid=12');
 }  
 else{
  echo "enter";
  mysqli_query($conn,"UPDATE cart
  SET prid=12,qty=$qty,total=$total where cid=1");
  mysqli_query($conn,"UPDATE cart
  SET userid=$userid where cid=1");
  header('location:cart.php?uid='.$userid.'&pid=12');
  }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Classic Cakes</title>

	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" type="text/css" href="bootstrap-4/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/con-cake.css">
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
        <p><span class="p-classic">Classic</span><br>Cakes</p>
      </div>
    </div>
  </div>  
  </section>  
<!--END of Parallex Effect -->


<!--Product Section -->
<section class="collections">
  <div class="container py-5">
    <h1 class="text-center">Classic Cakes</h1>
    <div class="row py-5">
      <div class="col-lg-3">
        <form method="POST">
        <div class="card">
          <img src="Image/Cakes/1.jpg" alt="cake" class="img-fluid mb-3">
          <input class="btn-add-cart" type="submit" value="Add to Cart" name="Vanilla">
          <h5>Vanilla</h5>
          <p>
            <small><del>Rs.650</del><span id="price">Rs.500</span></small>
            <input type="number" required name="quantity" min="1" max="24" class="qty">
            <span id="unit">Kg</span>
          </p>
        </div>
      </form>
      </div>
      <div class="col-lg-3">
        <form method="POST">
        <div class="card">
          <img src="Image/Cakes/2.jpg" alt="cake" class="img-fluid mb-3">
          <input class="btn-add-cart" type="submit" value="Add to Cart" name="Black-Forest">
          <h5>Black Forest</h5>
          <p>
            <small><del>Rs.700</del><span id="price">Rs.600</span></small>
            <input type="number" required name="quantity" min="1" max="24" class="qty">
            <span id="unit">Kg</span>
          </p>
        </div>
      </form>
      </div>
      <div class="col-lg-3">
        <form method="POST">
        <div class="card">
          <img src="Image/Cakes/3.jpg" alt="cake" class="img-fluid mb-3">
          <input class="btn-add-cart" type="submit" value="Add to Cart" name="White-Forest">
          <h5>White Forest</h5>
          <p>
            <small><del>Rs.700</del><span id="price">Rs.600</span></small>
            <input type="number" required name="quantity" min="1" max="24" class="qty">
            <span id="unit">Kg</span>
          </p>
        </div>
        </form>
      </div>
      <div class="col-lg-3">
        <form method="POST">
        <div class="card">
          <img src="Image/Cakes/4.jpg" alt="cake" class="img-fluid mb-3">
          <input class="btn-add-cart" type="submit" value="Add to Cart" name="Chocolate">
          <h5>Chocolate</h5>
          <p>
            <small><del>Rs.750</del><span id="price">Rs.700</span></small>
            <input type="number" required name="quantity" min="1" max="24" class="qty">
            <span id="unit">Kg</span>
          </p>
        </div>
        </form>
      </div>
      <div class="col-lg-3">
        <form method="POST">
        <div class="card">
          <img src="Image/Cakes/5.jpg" alt="cake" class="img-fluid mb-3">
          <input class="btn-add-cart" type="submit" value="Add to Cart" name="Blueberry">
          <h5>Blueberry</h5>
          <p>
            <small><del>Rs.800</del><span id="price">Rs.700</span></small>
            <input type="number" required name="quantity" min="1" max="24" class="qty">
            <span id="unit">Kg</span>
          </p>
        </div></form>
      </div>
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
        </div></form>
      </div>
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
        </div></form>
      </div>
      <div class="col-lg-3">
        <form method="POST">
        <div class="card">
          <img src="Image/Cakes/8.jpg" alt="cake" class="img-fluid mb-3">
          <input class="btn-add-cart" type="submit" value="Add to Cart" name="Strawberry">
          <h5>Strawberry</h5>
          <p>
            <small><del>Rs.800</del><span id="price">Rs.700</span></small>
            <input type="number" required name="quantity" min="1" max="24" class="qty">
            <span id="unit">Kg</span>
          </p>
        </div></form>
      </div>
      <div class="col-lg-3">
        <form method="POST">
        <div class="card">
          <img src="Image/Cakes/9.jpg" alt="cake" class="img-fluid mb-3">
          <input class="btn-add-cart" type="submit" value="Add to Cart" name="Kiwi">
          <h5>Kiwi</h5>
          <p>
            <small><del>Rs.800</del><span id="price">Rs.700</span></small>
            <input type="number" required name="quantity" min="1" max="24" class="qty">
            <span id="unit">Kg</span>
          </p>
        </div></form>
      </div>
      <div class="col-lg-3">
        <form method="POST">
        <div class="card">
          <img src="Image/Cakes/10.jpg" alt="cake" class="img-fluid mb-3">
          <input class="btn-add-cart" type="submit" value="Add to Cart" name="Mango">
          <h5>Mango</h5>
          <p>
            <small><del>Rs.800</del><span id="price">Rs.700</span></small>
            <input type="number" required name="quantity" min="1" max="24" class="qty">
            <span id="unit">Kg</span>
          </p>
        </div></form>
      </div>
      <div class="col-lg-3">
        <form method="POST">
        <div class="card">
          <img src="Image/Cakes/11.jpg" alt="cake" class="img-fluid mb-3">
          <input class="btn-add-cart" type="submit" value="Add to Cart" name="Pista">
          <h5>Pista</h5>
          <p>
            <small><del>Rs.800</del><span id="price">Rs.700</span></small>
            <input type="number" required name="quantity" min="1" max="24" class="qty">
            <span id="unit">Kg</span>
          </p>
        </div></form>
      </div>
      <div class="col-lg-3">
        <form method="POST">
        <div class="card">
          <img src="Image/Cakes/12.jpg" alt="cake" class="img-fluid mb-3">
          <input class="btn-add-cart" type="submit" value="Add to Cart" name="Pashion-Fruit">
          <h5>Pashion Fruit</h5>
          <p>
            <small><del>Rs.800</del><span id="price">Rs.700</span></small>
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