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

    <div class="container mt-5">
        
        <div class="row mb-5">
            <div class="col-lg-6">

                <h5 class="fw-regular mb-3">Customer Login</h5>
                <hr class="border mb-5">

                <form>

                    <div class="mb-1">
                      <label for="" class="form-label">Email address</label>
                      <input type="email" class="form-control form-control-sm">
                    </div>

                    <div class="mb-3">
                      <label for="" class="form-label">Password</label>
                      <input type="password" class="form-control form-control-sm">
                    </div>

                    <button type="submit" class="btn btn-primary">Signup</button>

                    <p class="fw-light mt-3">New Customer? <a href="register.html">Register</a> </p>

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