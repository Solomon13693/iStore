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

    <title> IStore | Cart </title>
  </head>
  <body>
 

   <?php require_once("./components/Header.php") ?>

   <div class="container my-5">
   <?php

        if(isset($_SESSION["cart"])){
        $total = 0;
        foreach($_SESSION["cart"] as $key => $value ){
            $total = $total + $value['item_price'];
            echo '
            <hr>
            <div class="row d-flex align-items-center">

            <div class="col-6 d-flex align-items-center">
                <img style="width: 100px;" src="./upload/'.$value['item_image'].'" alt="">
                <p style="font-size: 14px;" class="lead fw-bold"> '.$value['item_name'].' </p>
            </div>
 
             <div class="col-6 d-flex justify-content-end">
                  <p style="font-size: 15px;"  class="lead"> ₦ '.$value['item_price'].' </p>
             </div>
            
        </div>
            ';
            echo '<hr>';
          }
        }

    ?>

        <div class="container">
            <div class="row">
                <div class="col-6"></div>
                <div class="col-3 d-flex align-items-center justify-content-end"><h5 >Subtotal:</h5> </div>
                <div class="col-3 d-flex align-items-center justify-content-end"> 
                    <h5> ₦<?php echo $total ?> </h5>
                </div>
            </div>
            
            <button onclick="location.href='checkouts.php' " class="btn btn-primary w-100 mt-5"> <i class="fas fa-lock"></i> Check out</button>

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