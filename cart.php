<?php session_start(); ?>
<?php include('dbcon.php'); ?>

<?php 

$connect = mysqli_connect('remotemysql.com:3306', 'HTADFpjYkD', 'wfJDJmJgdL', 'HTADFpjYkD');

if (isset($_POST['add'])) {
  if (isset($_SESSION['cart'])) {
    $item_array_id = array_column($_SESSION['cart'], "product_id");
    if (!in_array($_GET['id'] ,  $item_array_id)) {
      $count = count($_SESSION['cart']);
      $item_array = array(
        "product_id" => $_GET['id'],
        "item_name" => $_POST['hidden_name'],
        "product_price" => $_POST["hidden_price"],
        "item_quantity" => $_POST['quantity']

      );
      $_SESSION['cart'][$count] = $item_array;
      echo '<script>window.location="cart.php" </script>';
    }
    else{
      echo '<script>alert("product is already added to cart")</script>';
      echo '<script>window.location="cart.php" </script>';
    }

  }
  else{
    $item_array = array(
      "product_id" => $_GET['id'],
      "item_name" => $_POST['hidden_name'],
      "product_price" => $_POST["hidden_price"],
      "item_quantity" => $_POST['quantity']
    );
    $_SESSION['cart'][0] = $item_array;
  }
}

if (isset($_GET['action'])) {
  if ($_GET['action'] == "delete") {
    foreach ($_SESSION['cart'] as $keys => $value) {
      if ($value["product_id"] == $_GET['id']) {
        unset($_SESSION['cart'][$keys]);
        echo '<script> alert("product has been removed") </script>';
        echo '<script>window.location="cart.php" </script>';
      }
    }
  }

}

?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <link rel="stylesheet" type="text/css" href="project.css">
  
  <title>Online Grocery Shop</title>
  <link rel="icon" href="trolley.png">
  <script type="text/javascript" src="cart.js"></script>

  <!-- some styling -->
  <style type="text/css">
  table, th, tr{
    text-align: center;
  }
  .title2{
    text-align: center;
    color: #66afe;
    background-color: #efefef;
    padding: 2%;
  }
  table th{
    background-color: #efefef;
  }



</style>


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



<!-- go to cart -->
<div class="d-flex flex-column flex-md-row align-items-center p-2 px-md-4 bg-white border-bottom box-shadow">
  <h2 class="my-0 mr-md-auto font-weight-normal" style="margin: auto;">Your Shopping Cart</h2>
  <nav class="my-2 my-md-0 mr-md-3">
  </nav>
  <a class="btn btn-outline-primary" href="cart.php">Refresh Cart <img src="trolley.png" width="30px" height="30px"> </a>
</div>





<!-- Main body -->
<main>
 <!--Section: Block Content-->
 <section>


  <!------------------------------------ testing cart functionality---------------------------------- -->
  <div class="row">
    <div class="col-lg-8">
      <div class="mb-3">
        <div class="pt-4 wish-list col-xl-9 ">

          <?php
          
          $query = "SELECT * FROM products ORDER BY id ASC";
          $result = mysqli_query($connect, $query);
          ?>
          
          <h3 class="title2">Shopping Cart Details </h3>
          <div class="table-responsive">
            <table class="table table-bordered">
              <tr>
                <th width="30%">Product Name</th>
                <th width="10%">Quantity</th>
                <th width="13%">Price Details</th>
                <th width="10%">Item Total</th>
                <th width="17%">Remove Item</th>
              </tr>

              <?php
              if (!empty($_SESSION["cart"])) {
                $total = 0;
                foreach ($_SESSION['cart'] as $key => $value) {
                  ?>

                  <tr>
                    <td> <?php echo $value["item_name"]; ?> </td>
                    <td> <?php echo $value["item_quantity"]; ?> </td>
                    <td>$ <?php echo $value["product_price"]; ?> </td>
                    <td>$ <?php echo number_format( $value["item_quantity"] * $value["product_price"], 2 ); ?></td>
                    <td><a href="cart.php?action=delete&id=<?php echo $value["product_id"]; ?>"><span class="text-danger">Remove</span></a></td>
                  </tr>
                  <?php 
                  $total = $total + ($value["item_quantity"] * $value["product_price"]);
                }
                $gst = $total * 0.05;
                $qst = $total * 0.0975;
                ?>
                <tr>
                  <td colspan="3" align="right">Total</td>
                  <th align="right">$ <?php echo number_format($total,2); ?></th>
                  <td></td>
                </tr>
                <?php 
              }

              ?>
            </table>
          </div>





        </div>
      </div>
    </div>
  </div>


  <!-- ------------------------------------------------------------ -->
 

  <!--Grid row-->
  <div class="row ml-4">

    <div class="col-lg-4">

      <!-- Card -->
      <div class="mb-3">
        <div class="pt-4">

          <h5 class="mb-3">Total Price</h5>

          <ul class="list-group list-group-flush">
            <li class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 pb-0">
              Total excluding tax: 
              <span id="amount"><?php echo "$".$total?></span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center px-0">
              GST
              <span id="gst"><?php echo "$".$gst?></span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center px-0">
              QST
              <span id="qst"><?php echo "$".$qst?></span>
            </li>


            <li class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 mb-3">
              <div>
                <strong>Total Amount</strong>
                <strong>
                  <p class="mb-0">(including VAT)</p>
                </strong>
              </div>
              <span><strong id="totalAmount">test1</strong></span>
            </li>
          </ul>

          <button type="button" class="btn btn-primary btn-block">go to checkout</button>

          <a href="groceryshop.php">
            <button type="button" class="btn btn-secondary btn-block mt-1">Continue Shopping</button>
          </a>
        </div>
      </div>




    </div>
    <!--Grid column-->

  </div>
  <!-- Grid row -->

</section>
<!--Section: Block Content-->


</main>









<!--special offer  -->
<main>
  <div class="jumbotron">
    <h2>Special Offer!</h2>
    <p class="lead">Free Delivery for orders over $150</p>
  </div>
</main>  


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