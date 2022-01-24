<?php

    session_start();

     require_once("./functions/userAuth.php");

     if(isset($_SESSION['customer'])){
      header("Location: index.php");
      exit;
    }
     
?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="./assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="./assets/css/swiper.css">
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="assets/css/owl.min.css">

    <title> IStore | Login </title>

    <style>
      .error_msg{
        font-size: 14px !important;
        color: #c70000 !important;
      }
    </style>

  </head>
  <body>
 

  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container">
        <a class="navbar-brand me-lg-5" href="index.php">
          <img class="navbar_logo" src="./assets/images/istore_logo.png" alt="">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          
          <ul class="navbar-nav me-auto mb-2 mb-lg-0 mx-5">

            <li class="nav-item">
              <a class="nav-link" style="color: red !important; font-weight: 500;" href="all.php">All Deals</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="mac.php">Mac</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="iphone.php">Iphone</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="ipad.php">Ipad</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="apple-watch.php">Apple Watch</a>
              </li>

            <li class="nav-item">
              <a class="nav-link" href="airpod.php">Airpods</a>
            </li>

            <li class="nav-item">
              <a class="nav-link " href="accessories.php">Accessories</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="support.php">Support</a>
            </li>

          </ul>

          
          <ul class="nav_icons d-flex mt-2 mx-0">
            <li><a href=""> <i class="fas fa-search"></i> </a></li>
            <li><a href="login.php"> <i class="fas fa-user-circle"></i> </a></li>
            <li><a data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight"> <i class="fas fa-shopping-cart cart"></i> </a></li>
          </ul>
          
        </div>
        
      </div>
      
    </nav>

    <!-- Offset -->  
  <div class="offcanvas offcanvas-end text-center" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
    <div class="offcanvas-header">
      <h6 class="fw-bold text-center m-auto" id="offcanvasRightLabel">Shopping cart (0)</h6>
      <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>

    <hr class="w-100">
    <div class="offcanvas-body">
      
        <?php

          if(isset($_SESSION["cart"])){
            $total = 0;
            foreach($_SESSION["cart"] as $key => $value ){
              $total = $total + $value['item_price'];
              echo '
              <div class="row">
              <div class="col-3">
                <img src="./upload/'.$value['item_image'].'" alt="Hello wolrd">
              </div>
              <div class="col-7 text-left">
                <p class="fw-light mb-0"> '.$value['item_name'].' </p>
                <p class="fw-light text-left">₦ '.$value['item_price'].' </p>
              </div>
              <div class="col-2">
              <i class="fas fa-times time_font"></i>
              </div>
            </div>
            <hr >';
            }
            echo '
            <div class="row px-0">
            <div class="col-6">
               <p class="fw-light"> Subtotal:</p>
            </div>
            <div class="col-6">
                <p class="fw-light">₦ '.$total.' </p>
            </div>
          </div>
    
    
        <button class="btn btn-primary w-100">Go to cart</button>
            ';
          } else {
            echo '
            <i class="fas fa-shopping-cart cart fa-2x"></i>
            <p class="fw-light mt-4 mb-0">Your Cart is Empty</p>
            <p class="fw-light mt-2"><a href="all.php">Continue Shopping</a></p>
            ';
          }
          
      ?>

    </div>
  </div>

    <div class="container mt-5">
        
        <div class="row mb-5">
            <div class="col-lg-6">

                <h5 class="fw-regular mb-3">Customer Login</h5>
                <hr class="border mb-5">

                <form method="POST" >

                    <div class="mb-1">
                      <label for="" class="form-label">Email address</label>
                      <input type="email" name="email" class="form-control form-control-sm" value="<?php echo isset($_POST["email"]) ? $email : "" ?>" >
                      <div class="error_msg">
                          <?= $mail_err ?>
                       </div> 
                    </div>

                    <div class="mb-3">
                      <label for="" class="form-label">Password</label>
                      <input type="password" name="password" class="form-control form-control-sm" >
                      <div class="error_msg">
                          <?= $pwd_err ?>
                       </div> 
                    </div>

                    <button name="login" type="submit" class="btn btn-primary">Signup</button>

                    <p class="fw-light mt-3">New Customer? <a href="register.php">Register</a> </p>

                  </form>

            </div>
        </div>

    </div>

    <?php include_once("./components/Footer.php") ?>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="./assets/js/bootstrap.min.js"></script>
    <script src="./assets/js/jquery.js"></script>
    <script src="./assets/js/swiper.js"></script>
    <script src="./assets/js/owl.min.js"></script>
    <script src="./assets/js/app.js"></script>

  </body>
</html>