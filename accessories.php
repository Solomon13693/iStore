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

    <title> IStore | Home </title>
  </head>
  <body>
 

  <?php include_once("./components/Header.php") ?>

    <!-- Offset -->  
  <div class="offcanvas offcanvas-end text-center" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
    <div class="offcanvas-header">
      <h6 class="fw-bold text-center m-auto" id="offcanvasRightLabel">Shopping cart (0)</h6>
      <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>

    <hr class="w-100">
    <div class="offcanvas-body">
      
      <i class="fas fa-shopping-cart cart fa-2x"></i>
      <p class="fw-light mt-4 mb-0">Your Cart is Empty</p>
      <p class="fw-light mt-2"><a href="">Continue Shopping</a></p>
    </div>
  </div>
  

  <!-- Banner -->
  <div class="swiper mySwiper desktop_slider">
    <div class="swiper-wrapper">

      <div class="swiper-slide">
        <img src="assets/images/accessories/accessories01.png" alt="">
      </div>

    </div>

  </div>

  <div class="swiper mySwiper mobile_slider">
    <div class="swiper-wrapper">

      <div class="swiper-slide">
        <img src="assets/images/accessories/accessories02.png" alt="">
      </div>

    </div>

  </div>

  <div class="popular_product my-5">
    <div class="container">

        <div class="row">

            <div class="col-md-4 mb-3">
                <img src="assets/images/accessories/accessories03.png" alt="">
            </div>
            
            <div class="col-md-4 mb-3">
                <img src="assets/images/accessories/accessories04.png" alt="">
            </div>
            
            <div class="col-md-4 mb-3">
                <img src="assets/images/accessories/accessories05.png" alt="">
            </div>
            
            <div class="col-md-4 mb-3">
                <img src="assets/images/accessories/accessories06.png" alt="">
            </div>
            
            <div class="col-md-4 mb-3">
                <img src="assets/images/accessories/accessories07.png" alt="">
            </div>
            
            <div class="col-md-4 mb-3">
                <img src="assets/images/accessories/accessories08.png" alt="">
            </div>
            
            <div class="col-md-4 mb-3">
                <img src="assets/images/accessories/accessories09.png" alt="">
            </div>
            
            <div class="col-md-4 mb-3">
                <img src="assets/images/accessories/accessories10.png" alt="">
            </div>
            
            <div class="col-md-4 mb-3">
                <img src="assets/images/accessories/accessories11.png" alt="">
            </div>
            
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