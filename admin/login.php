<?php

    require_once "./adminFunction/auth.php";

      if(isset($_SESSION['user'])){
            header("Location: index.php");
            exit;
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="./assets/css/auth.css">
    <title>iStore Admin | Login</title>
</head>
<body>

<div class="auth-page">
        <div class="container-fluid p-0">
            <div class="row g-0">

                <div class="col-xxl-3 col-lg-4 col-md-5">
                    <div class="auth-full-page-content d-flex p-sm-5 p-4">
                        <div class="w-100">
                            <div class="d-flex flex-column h-100">
                                <div class="auth-content my-auto ">
                                    <div class="text-center">
                                        <h5 class="mb-0">iStore admin account</h5>
                                    </div>
                                    <form method="post" class="needs-validation mt-4 pt-2" novalidate action="">

                                        <div class="mb-3">
                                            <label for="useremail" class="form-label">Email</label>
                                            <input type="email" class="form-control" name="email" placeholder="Enter email" value="<?php echo isset($_POST["email"]) ? $email : "" ?>">  
                                            <div class="error_msg">
                                                <?= $mail_err ?>
                                            </div>      
                                        </div>
                
                                        <div class="mb-3">
                                            <label for="userpassword" class="form-label">Password</label>
                                            <input type="password" class="form-control" name="password" placeholder="Enter password">
                                            <div class="error_msg">
                                              <?= $pwd_err ?>
                                            </div>       
                                        </div>

                                        <div class="mb-3">
                                            <button class="btn btn-primary w-100 waves-effect waves-light" type="submit" name="login" >Login</button>
                                        </div>
                                    </form>

                                </div>
                                <div class="text-center">
                                    <p class="mb-0">© <script>document.write(new Date().getFullYear())</script> iStore Admin </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end auth full page content -->
                </div>
                
                <!-- end col -->
                <div class="col-xxl-9 col-lg-8 col-md-7 ">
                    <div class="auth-bg pt-md-5 p-4 d-flex">
                        <div class="bg-overlay"></div>
                            <img src="./assets/img/login-bg.26a96a34.svg" alt="">
                    </div>
                </div>
                <!-- end col -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container fluid -->
    </div>







</body>

</html>