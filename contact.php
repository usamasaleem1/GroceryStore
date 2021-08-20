<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Contact Us</title>
	<link rel="icon" href="phone.png">
	<link rel="stylesheet" href="contact.css">
	

<!-- general -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	<link rel="stylesheet" type="text/css" href="project.css">

</head>
<body>

<!-- Nav bar -->
<nav class="navbar navbar-expand-md navbar-dark bg-dark">
	<img src="trolley.png" class="navbar-brand" style="width: 40px;">
	<a class="navbar-brand" href="#">Online Grocery Shopping</a>

  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
	<span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
	<ul class="navbar-nav mr-auto mx-auto">
	  <li class="nav-item active">
		<a class="nav-link" href="home.php">Home <span class="sr-only"></span></a>
	  </li>
	  <li class="nav-item active">
		<a class="nav-link" href="AllProducts.php">All Products</a>
	  </li>
	  <li class="nav-item dropdown active">
		<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
		  Aisles
		</a>
		<div class="dropdown-menu" aria-labelledby="navbarDropdown">
		  <a class="dropdown-item" href="meataisle.php">Meat</a>
		  <a id="disabled" class="dropdown-item" href="dairy.php">Dairy</a>  
		  <a id="disabled" class="dropdown-item" href="beveragesaisle.php">Beverages</a>
		  <a id="disabled" class="dropdown-item" href="detergents.php">Detergents</a>
		<a id="disabled" class="dropdown-item" href="snacks.php">Snacks</a>
		  <a id="disabled" class="dropdown-item" href="alcohol.php">Alcohol</a>
        </div>
	  </li>
	  <li class="nav-item active">
		<a class="nav-link disabled" href="contact.php">Contact Us</a>
	  </li>
	</ul>
	<br>
	<form class="form-inline my-2 my-lg-0">
	  <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" style="background-color: #343A40;">
	  <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
	        <?php if(isset($_SESSION['loggedin'])){ ?>
        <a class="btn btn-outline-primary ml-1" href="logout.php">Log Out</a>
    <?php }else{ ?>
        <a class="btn btn-outline-primary ml-1" href="signinpage.php">Sign in</a>
    <?php } ?>
	</form>
  </div>
</nav>


    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />

    <div class="whos-speaking-area speakers pad100">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title text-center">
                        <div class="title-text mb50">
                            
                            <h2><br/>teamName();</h2>
                        </div>
                    </div>
                </div>
                <!-- /col end-->
            </div>
            <!-- /.row  end-->
            <div class="row mb50">
                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-12">
                    <div class="speakers xs-mb30">
                        <div class="spk-img">
                            <img class="img-fluid" src="https://bootdey.com/img/Content/avatar/avatar1.png" alt="trainer-img" />
                            <!-- <ul>
                                <li>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-camera"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-life-ring"></i></a>
                                </li>
                            </ul> -->
                        </div>
                        <div class="spk-info">
                            <h3>Alessio Amorelli</h3>
                            <p>40176996</p>
                        </div>
                    </div>
                </div>
                <!-- /col end-->
                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-12">
                    <div class="speakers xs-mb30">
                        <div class="spk-img">
                            <img class="img-fluid" src="https://bootdey.com/img/Content/avatar/avatar2.png" alt="trainer-img" />
                            <!-- <ul>
                                <li>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-camera"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-life-ring"></i></a>
                                </li>
                            </ul> -->
                        </div>
                        <div class="spk-info">
                            <h3>Usama Saleem</h3>
                            <p>40110036</p>
                        </div>
                    </div>
                </div>
                <!-- /col end-->
                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-12">
                    <div class="speakers xs-mb30">
                        <div class="spk-img">
                            <img class="img-fluid" src="https://media.discordapp.net/attachments/867954813047013397/867957804617568286/bigdaddy.jpg" alt="trainer-img" />
                            <!-- <ul>
                                <li>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-camera"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-life-ring"></i></a>
                                </li>
                            </ul> -->
                        </div>
                        <div class="spk-info">
                            <h3>Christian Poptean</h3>
                            <p>40057016</p>
                        </div>
                    </div>
                </div>
                <!-- /col end-->
                <div class="col-xl-3 col-lg-3 d-md-none d-lg-block col-sm-12">
                    <div class="speakers">
                        <div class="spk-img">
                            <img class="img-fluid" src="https://bootdey.com/img/Content/avatar/avatar4.png" alt="trainer-img" />
                            <!-- <ul>
                                <li>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-camera"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-life-ring"></i></a>
                                </li>
                            </ul> -->
                        </div>
                        <div class="spk-info">
                            <h3>Marc Eid</h3>
                            <p>40153034</p>
                        </div>
                    </div>
                </div>
                <!-- /col end-->
            </div>
            <!-- /row end-->
            <div class="row">
                <div class="offset-2 no-gutter"></div>
                <!-- /col end-->
                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-12">
                    <div class="speakers xs-mb30">
                        <div class="spk-img">
                            <img class="img-fluid" src="https://bootdey.com/img/Content/avatar/avatar5.png" alt="trainer-img" />
                            <!-- <ul>
                                <li>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-camera"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-life-ring"></i></a>
                                </li>
                            </ul> -->
                        </div>
                        <div class="spk-info">
                            <h3>Scott Smith</h3>
                            <p>40101573</p>
                        </div>
                    </div>
                </div>
                <!-- /col end-->
            </div>
            <!-- /row end-->
        </div>
        <!-- /container end-->
    </div>

	<!-- footer -->
   	<footer class="pt-4 my-md-5 pt-md-5 border-top">
        <div class="row">
          <div class="col-12 col-md">
            <p></p>
            <small class="d-block mb-3 text-muted"></small>
          </div>
          <div class="col-6 col-md">
            <h5>Contacts</h5>
            <ul class="list-unstyled text-small">
              <li><a class="text-muted" href="contact.php">Manager</a></li>
              <li><a class="text-muted" href="contact.php">Supervisor</a></li>
              <li><a class="text-muted" href="contact.php">Our Team</a></li>
            </ul>
          </div>
          <div class="col-6 col-md">
            <h5>Careers</h5>
            <ul class="list-unstyled text-small">
              <li><a class="text-muted" href="careers.php">Meat Section</a></li>
              <li><a class="text-muted" href="careers.php">Delivery</a></li>
            </ul>
          </div>
          <div class="col-6 col-md">
            <h5>About</h5>
            <ul class="list-unstyled text-small">
              <li><a class="text-muted" href="contact.php">Team</a></li>
              <li><a class="text-muted" href="https://www.google.com/maps/place/11011+Bd+Maurice-Duplessis,+Montr%C3%A9al,+QC+H1C+1V3/@45.6660703,-73.5345729,17z/data=!3m1!4b1!4m5!3m4!1s0x4cc8e1759aa6762d:0x80db5bbbc6e3d671!8m2!3d45.6660703!4d-73.5323842" target="_blank">Location</a></li>
              <li><a class="text-muted" href="terms.php">Privacy</a></li>
              <li><a class="text-muted" href="terms.php">Terms</a></li>
            </ul>
          </div>
        </div>
      </footer>

</body>
</html>