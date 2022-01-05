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
        
        <div class="row mb-5">
            <div class="col-lg-6">

                <h5 class="fw-regular mb-3">Create Account</h5>
                <hr class="border mb-5">

                <form>

                    <div class="mb-1">
                      <label class="form-label">First name</label>
                      <input type="text" class="form-control form-control-sm">
                    </div>

                    <div class="mb-1">
                      <label for="" class="form-label">Last name</label>
                      <input type="text" class="form-control form-control-sm">
                    </div>

                    <div class="mb-1">
                      <label for="" class="form-label">Email address</label>
                      <input type="email" class="form-control form-control-sm">
                    </div>

                    <div class="mb-3">
                      <label for="" class="form-label">Password</label>
                      <input type="password" class="form-control form-control-sm">
                    </div>

                    <button type="submit" class="btn btn-primary">Signup</button>

                    <p class="fw-light mt-3">Returning Customer? <a href="login.html">Login</a> </p>

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