<?php 
include('conctn.php');
$userid=$_GET['id'];
//echo $userid;

if(isset($_POST['change-password'])){
  $oldpass=$_POST['old'];
  $newpass=$_POST['new'];
  $repass=$_POST['re-enter'];
  if ($newpass==$repass){
    $query="UPDATE customer SET pass='$newpass' WHERE userid='$userid' AND pass='$oldpass'";
    if(mysqli_query($conn, $query)){
      echo "<script>alert('Password Changed Successfully')</script>";
    }
    else{
      echo 'query error: '. mysqli_error($conn);
    }

  }
  else{
    echo "<script>alert('New Password not matched')</script>";
  }
}

if(isset($_POST['change-mob'])){
  $number=$_POST['new-phone'];
  $password=$_POST['pass'];
  $query1="UPDATE customer SET phone=$number WHERE userid='$userid' and pass='$password' ";
    if(mysqli_query($conn, $query1)){
      echo "<script>alert('Contact Updated Successfully')</script>";
    }
    else{
      echo "<script>alert('Invalid Entry')</script>";
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<title>Your Profile</title>

	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="Image/brand-logo.gif" type="image/gif" sizes="16x16">
    <link rel="stylesheet" type="text/css" href="bootstrap-4/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/account.css">
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

<!--Profile Section-->
<section class="profile">
  <div class="container my-5">
  <h1 class="text-center my-3">Account Settings</h1><hr>
  <div id="accordion">
  <div class="card">
    <div class="card-header" id="headingOne">
      <h5 class="mb-0">
        <button class="btn btn-link change m" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          Change Password
        </button>
      </h5>
    </div>

    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
      <div class="card-body">
        <form method="POST">
          <div class="form-group">
            <label for="oldpassword">Old Password</label>
            <input type="password" class="form-control" name="old"  >         
          </div>
          <div class="form-group">
            <label for="newpassword">New Password</label>
            <input type="password" class="form-control" name="new"  >         
          </div>
          <div class="form-group">
            <label for="oldpassword">Confirm New Password</label>
            <input type="password" class="form-control" name="re-enter"  >         
          </div>
          <input class="btn btn-warning my-4" type="submit" name="change-password" value="Change Password" >
        </form>
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="headingTwo">
      <h5 class="mb-0">
        <button class="btn btn-link collapsed change" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
          Update Contact No:
        </button>
      </h5>
    </div>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
      <div class="card-body">
        <form method="POST">
          <div class="form-group">
            <label for="contact">New Contact No:</label>
            <input type="text" class="form-control" name="new-phone"  >         
          </div>
          <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" name="pass"  >         
          </div>
          <input class="btn btn-warning my-4" type="submit" name="change-mob" value="Update Contact No:" >
        </form>

      </div>
    </div>
  </div>
</div>  
  </div>
</section>
<!--END of Profile Section-->


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