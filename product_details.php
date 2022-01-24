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
 

  <?php 
  require_once("./components/Header.php");
  require_once "./functions/selectProducts.php";
  ?>
  
  <div class="container mt-5">

    <p class="fw-light breadcrumb_link"> <a href="index.php">Home</a> <i class="fas fa-arrow-right"></i> <?php echo $name ?></p>

      <div class="row">

            <div class="col-lg-6 mb-3 ">
                <img src="./upload/<?php echo $image ?>" alt="">
            </div>

            <div class="col-lg-6 d-flex flex-column align-self-center">
                <h5 class="name mb-4"> <?php echo $name ?> </h5>
                <p>₦ <?php echo $price ?></p>

                <div class="row my-5">
                    <div class="col-6">
                      <div class="handle-counter" id="handleCounter">

                        <button class="counter-minus btn btn-dark">-</button>
                      
                        <input disabled class="form-control" type="text" value="1">
                      
                        <button class="counter-plus btn btn-dark">+</button>
                      
                      </div>
                      
                    </div>
                    <div class="col-6">
                        <button onclick="location.href='cartHandler.php?cart_id=<?php echo $id ?>&cart_name=<?php echo $name ?>&cart_price=<?php echo $price ?>&cart_image=<?php echo $image ?> ' " class="btn btn-primary w-100"><i class="fas fa-shopping-cart cart"></i> Add to cart</button>
                    </div>
                </div>

                <p class="fw-bold mb-1">Product Details</p>
                <p class="fw-light"> <?php echo $description ?></p>
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

    <script>
        	$('#handleCounter').handleCounter({
		  minimum: 1,
		  maximize:null,
		})
    </script>

  </body>
</html>