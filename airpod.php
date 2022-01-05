<?php require_once "./functions/auth.php"; ?>

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

  <div class="container mt-5">

      <div class="row">

        <div class="col-md-6 mb-3">
          <h4 class="fw-regular">Macbook Pro | M1 Pro Chip</h4>  
          <hr class="border">
       </div>
 
       <div class="col-md-6">
           <select class="form-select w-50">
               <option value="">Price: Low to High</option>
               <option value="">Price: High to Low</option>
               <option value="">Best Selling</option>
           </select>
       </div>

      </div>

  </div>
  
  <div class="container mt-5">
      <div class="row">

          <div class="col-lg-3">

              <div>
                <h5>Capacity</h5>
                <p class="fw-light mb-0">512GB</p>
                <p class="fw-light mt-1">1TB</p>
              </div>

              <div class="mt-5">
                <h5>Color</h5>
                <p class="fw-light mb-0">Silver</p>
                <p class="fw-light">Space Grey</p>
              </div>

          </div>

          <div class="col-lg-9">
            <div class="popular_product my-5">
              <div class="container">
          
                  <div class="row">
          
                  <?php

                  $result->table_name = "products";
                  $select = $result->selectProductWIthCategories("category", 'airpod');
                  $rowCount = $result->stmt->rowCount();
                  if($rowCount > 0){
                    while($row = $result->stmt->fetch(PDO::FETCH_ASSOC)){

                      $id = $row["id"];
                      $name = $row["name"];
                      $price = $row["price"];
                      $image = $row["image"];
                      $description = $row["description"];

                      echo '
                      <div class="col-lg-4 col-6 mb-3">
                      <a href="product_details.php?detail='.$id.'  ">
                        <div class="item text-center">
                          <div class="new_festival">
                            <div class="festival">Festival Sales</div>
                          </div>
                            <img class="image" src="./upload/'.$image.' " alt="">
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