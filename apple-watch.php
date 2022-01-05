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
    include_once("./components/Header.php");
    require_once "./functions/auth.php";
   ?>
  

  <!-- Banner -->
  <div class="swiper mySwiper desktop_slider">
    <div class="swiper-wrapper">

      <div class="swiper-slide">
        <img src="assets/images/apple_watch/apple_watch1.png" alt="">
      </div>

    </div>

    <div class="swiper-pagination"></div>
  </div>

  <div class="swiper mySwiper mobile_slider">
    <div class="swiper-wrapper">

      <div class="swiper-slide">
        <img src="assets/images/apple_watch/apple_watch_small.png" alt="">
      </div>

    </div>

  </div>

  <div class="popular_product my-5">
    <div class="container">

        <div class="row">

          <?php

            $result->table_name = "products";
            $select = $result->selectProductWIthCategories("category", 'apple_watch');
            $rowCount = $result->stmt->rowCount();
            if($rowCount > 0){
              while($row = $result->stmt->fetch(PDO::FETCH_ASSOC)){

                $id = $row["id"];
                $name = $row["name"];
                $price = $row["price"];
                $image = $row["image"];
                $description = $row["description"];

                echo '
                <div class="col-lg-3 col-6 mb-3">
                <a href="product_details.php?detail='.$id.'  ">
                  <div class="item text-center">
                    <div class="new_festival">
                      <div class="festival">Festival Sales</div>
                    </div>
                      <img src="./upload/'.$image.' " alt="">
                      <p class="description"> '.$name.' </p>
                      <p class="price"> '.$price.' </p>
                  </div>
                </a>
            </div>
                ';
                 
              }
            }

          ?>
            
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