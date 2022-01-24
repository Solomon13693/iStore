<?php

  session_start();
  if(!empty($_SESSION["cart"])){
    $qty = count($_SESSION["cart"]);
  } else {
    $qty = 0; 
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="assets/css/owl.min.css">
    <link rel="stylesheet" href="./assets/css/style.css">

    <style>
      .time_font{
        background-color: #000;
        padding: 4px 7px;
        border-radius: 50%;
        color: #fff;
      }

      .cart_qty{
        color: #FFF !important;
        background-color: red;
        border-radius: 50%;
        text-align: center;
        position: absolute;
        top: 6px;
        right: 110px;
        font-size: 12px;
        width: 20px;
      }

      .small_cart{
        display: none !important;
      }

      @media  (max-width: 991px) {
        .small_cart{
          display: block !important;
        }
        .big_cart{
          display: none !important;
        }
      }

    </style>

  </head>
  <body>
 

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container">
        <a class="navbar-brand me-lg-5" href="index.php">
          <img class="navbar_logo" src="./assets/images/istore_logo.png" alt="">
        </a>

        <ul class="nav_icons d-flex mt-2 mx-0">
            <li class="small_cart"><a href=""> <i class="fas fa-search"></i> </a></li>
            <li class="small_cart"><a href="login.php"> <i class="fas fa-user-circle"></i> </a></li>
            <li>
              <a class="small_cart" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight"> <i class="fas fa-shopping-cart cart"></i> 
              <div class="cart_qty"><?php echo $qty ?></div>
              </a
              ></li>
        </ul>

    
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="small_cart navbar-toggler-icon"></span>
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

          
          <ul class="big_cart nav_icons d-flex mt-2 mx-0">
            <li><a href=""> <i class="fas fa-search"></i> </a></li>
            <li><a href="login.php"> <i class="fas fa-user-circle"></i> </a></li>
            <li>
              <a data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight"> <i class="fas fa-shopping-cart cart"></i> 
              <div class="cart_qty"><?php echo $qty ?></div>
              </a
              ></li>
          </ul>
          
        </div>
        
      </div>


      
    </nav>


    <!-- Offset -->  
  <div class="offcanvas offcanvas-end text-center" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
    <div class="offcanvas-header">
      <h6 class="fw-bold text-center m-auto" id="offcanvasRightLabel">Shopping cart (<?php echo $qty ?>)</h6>
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
    
            <a href="cart.php">
            <button class="btn btn-primary w-100">Go to cart</button>
            </a>
        
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

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="../assets/js/bootstrap.min.js"></script>
    <script src="./assets/js/jquery.js"></script>
    <script src="./assets/js/swiper.js"></script>
    <script src="./assets/js/owl.min.js"></script>
    <script src="./assets/js/app.js"></script>

  </body>
</html>