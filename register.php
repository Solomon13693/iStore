<?php
     require_once("./functions/userAuth.php");
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

    <title> IStore | Register </title>

    <style>
      .error_msg{
        font-size: 14px !important;
        color: #c70000 !important;
      }
    </style>

  </head>
  <body>
 

  <?php
     require_once("./components/Header.php") ;
  ?>

    <div class="container mt-5">
        
        <div class="row mb-5">
            <div class="col-lg-6">

                <h5 class="fw-regular mb-3">Create Account</h5>
                <hr class="border mb-5">

                <form method="post" action="" >

                    <div class="mb-1">
                      <label for="" class="form-label">Full name</label>
                      <input type="text" name="full_name" class="form-control form-control-sm" value="<?php echo isset($_POST["full_name"]) ? $full_name : "" ?>" >
                      <div class="error_msg">
                          <?= $full_name_err ?>
                       </div> 
                    </div>

                    <div class="mb-1">
                      <label for="" class="form-label">Email address</label>
                      <input type="email" name="email" class="form-control form-control-sm" value="<?php echo isset($_POST["email"]) ? $email : "" ?>" >
                      <div class="error_msg">
                          <?= $mail_err ?>
                       </div> 
                    </div>

                    <div class="mb-3">
                      <label for="" class="form-label">Password</label>
                      <input type="password" name="password" class="form-control form-control-sm">
                      <div class="error_msg">
                          <?= $pwd_err ?>
                       </div> 
                    </div>

                    <button name="register" type="submit" class="btn btn-primary">Signup</button>

                    <p class="fw-light mt-3">Returning Customer? <a href="login.php">Login</a> </p>

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