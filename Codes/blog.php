<?php 
include('conctn.php');
$userid=$_GET['id'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Blog</title>

	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="Image/brand-logo.gif" type="image/gif" sizes="16x16">
    <link rel="stylesheet" type="text/css" href="bootstrap-4/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/blog.css">
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



<!--Start of Video Section--> 
<section class="video-slider">
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <video autoplay loop muted src="Image/Blog/v2.mp4" type="video/mp4" class="w-100"></video>
    </div>
    <div class="carousel-item">
      <video autoplay loop muted src="Image/Blog/v11.mp4" type="video/mp4" class="w-100"></video>
    </div>
    <div class="carousel-item">
      <video autoplay loop muted src="Image/Blog/v4.mp4" type="video/mp4" class="w-100"></video>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div> 
</section>
<!--END of Video Section-->  


<!-- START OF Special SECTION  -->
<section id="special" class="container-fluid">
  <div class="heading text-center">
  <h1>Our Special</h1><hr>
  <p class="quotes">Don’t  wait  until  it’s  too late. Eat that slice of cake!</p>
  </div>
  <div class="container">
    <div class="row py-5 ml-5 mr-4">
      <div class="col-lg-3 mx-4 my-5">
        <div class="card">
          <img src="Image/Cakes/23.jpg" alt="cake" class="img-fluid mb-3">
          <div class="px-3">          
          <h5 style="font-family: 'Autour One', cursive;text-align: center;">Cotton Candy</h5>
          <p>
            Cotton Candy cake has pretty marbled layers of light & fluffy cake paired with a cotton candy buttercream. All finished off with a watercolor frosting & a cloud of cotton candy!
          </p>
          </div>
        </div>
      </div>
      <div class="col-lg-3 mx-4 my-5">
        <div class="card">
          <img src="Image/Cakes/5.jpg"  alt="cake" class="img-fluid mb-3">
          <div class="px-3">          
          <h5 style="font-family: 'Autour One', cursive;text-align: center;">Blueberry</h5>
          <p>
            It is truly delectable. The secret ingredient in the recipe is cream cheese – it makes a moist, rich and amazing cake that you’ll be craving for days after it’s gone!
          </p>
          </div>
        </div>
      </div>
      <div class="col-lg-3 mx-4 my-5">
        <div class="card">
          <img src="Image/Cakes/32.jpg" alt="cake" class="img-fluid mb-3">
          <div class="px-3">          
          <h5 style="font-family: 'Autour One', cursive; text-align: center;">Rainbow</h5>
          <p>
           The moist layer of vanilla buttermilk & buttercream frosting. It feels so happy. It slices into all those gorgeous colorful layers. Rainbow cake isn't just for looks, it tastes absolutely amazing.
          </p>
          </div>
        </div>
      </div>
    </div>
  </div>

</section>

<!-- END OF Special SECTION -->

<!-- about section starts  -->
<section id="about" class="container">
    <div class="heading text-center">
    <h1>About us</h1><hr>
    </div>
    <div class="row min-vh-100">
        <div class="col-md-6 text-center text-md-left align-self-center content">
            <p>At my site,we have a passion for unique and wonderful finds. Our buyers are determined to bring you the best values in cakes, so that you will always be able to find something you adore.
            </p>
            <p>
            This site is heaven for cake lovers. Our site is truly a place for finding unique and best cakes of kannur.Our customers can always count on us to expect the best. Browse through our site now and see all that we have to offer.</p>
        </div>
        <div class="col-md-6 image">
            <img src="Image/Blog/about-us.png" class="ml-5">
        </div>
    </div>
</section>
<!-- about section ends  -->

<!--Image Gallery Section-->
<section class="gallery py-5">
  <div class="container">
    <div class="container-fluid">
      <h1 class="text-center">Gallery</h1><hr/>
      <div class="row">
        <div class="column">
          <img src="Image/Blog/g1.jpg"/>
          <img src="Image/Blog/g4.jpg"/>
          <img src="Image/Blog/b4.jpg"/>
          <img src="Image/Blog/b5.jpg"/>
        </div>
        <div class="column">
          <img src="Image/Blog/g5.jpg"/>
          <img src="Image/Blog/g6.jpg"/>
          <img src="Image/Blog/g8.jpg"/>
        </div>
        <div class="column">
          <img src="Image/Blog/b10.jpg"/>
          <img src="Image/Blog/b11.jpg"/>
          <img src="Image/Blog/g9.png"/>
          <img src="Image/Blog/b2.jpg"/>
        </div>
      </div>
    </div>
  </div>  
</section>
<!--END of Image Gallery Section-->

<!-- testimonials section ends  -->
<section class="testimonial">
  <div class="container">
    <h1>Testimonial</h1><hr>
    <div class="row">
      <div class="col-md-4 text-center">
        <div class="profile">
          <img src="Image/Blog/avatar.svg" height="300px;" width="300px;"  class="user">
          <blockquote>Thank you for a delicious cake! You made my mom's Birthday extra Special!! Thank you</blockquote>
          <h3>Gavin Dmello</h3>
        </div>
      </div>
      <div class="col-md-4 text-center">
        <div class="profile">
          <img src="Image/Blog/avatar.svg" height="300px;" width="300px;"  class="user">
          <blockquote>We loved the cake! It was so yummy, and looked fantastic!<br/>Many thanks.</blockquote>
          <h3>Mugdha</h3>
        </div>
      </div>
      <div class="col-md-4 text-center">
        <div class="profile">
          <img src="Image/Blog/avatar.svg" height="300px;" width="300px;" class="user">
          <blockquote>Thanks so much for the wonderful cake. It was a huge hit!<br/> Love You! Moms Kitchen</blockquote>
          <h3>Rithwik</h3>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- testimonials section ends  -->




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