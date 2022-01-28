<?php

require_once "./orderHandler.php";
require_once "./functions/auth.php";

if (!$_SESSION['customer_id']) {
    header("Location: login.php");
    exit;
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
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="assets/css/owl.min.css">

    <title> IStore | Checkout </title>
    <style>
        .error_msg {
            font-size: 14px !important;
            color: #c70000 !important;
        }
    </style>
</head>

<body>


    <div class="container">

        <div class="row mt-5">

            <div class="col-lg-6">
                <img class="mb-3" style="width: 200px;" src="./assets/images/checkout.png" alt="">
                <h5>Contact information</h5>
                <p class="mb-0"> <?php echo $_SESSION['customer_name'];
                                    echo " ";
                                    echo $_SESSION['customer'] ?> </p>
                <p class="mt-1"> <a href="./functions/logout.php?logout=true">Log out</a> </p>

                <div class="shipping_address">
                    <h5>Shipping address</h5>

                    <?php

                    if (isset($_SESSION["cart"])) {
                        $total = 0;
                        foreach ($_SESSION["cart"] as $key => $value) {
                            $total = $total + $value['item_price'];
                        }
                    }

                    ?>

                    <form id="paymentForm" class="mt-4" method="post">
                        <div class="row">

                            <div class="col-lg-6 mb-3">
                                <input type="text" name="first_name" placeholder="First Name" class="form-control" value="<?php echo isset($_POST["first_name"]) ? $firstname : "" ?>">
                                <div class="error_msg">
                                    <?= $f_name_err ?>
                                </div>
                            </div>

                            <div class="col-lg-6 mb-3">
                                <input type="text" name="last_name" placeholder="Last Name" class="form-control" value="<?php echo isset($_POST["last_name"]) ? $lastname : "" ?>">
                                <div class="error_msg">
                                    <?= $l_name_err ?>
                                </div>
                            </div>

                            <div class="col-12 mb-3">
                                <input type="text" name="address" placeholder="Address" class="form-control" value="<?php echo isset($_POST["address"]) ? $address : "" ?>">
                                <div class="error_msg">
                                    <?= $address_err ?>
                                </div>
                            </div>

                            <div class="col-lg-6 mb-3">
                                <input type="text" name="city" placeholder="Email address" class="form-control" value=" <?php echo $_SESSION["customer"] ?> ">
                                <div class="error_msg">
                                    <?= $city_err ?>
                                </div>
                            </div>

                            <div class="col-lg-6 mb-3">
                                <input type="text" name="state" placeholder="State" class="form-control" value="<?php echo isset($_POST["state"]) ? $state : "" ?>">
                                <div class="error_msg">
                                    <?= $state_err ?>
                                </div>
                            </div>

                            <div class="col-12 mb-3">
                                <input type="tel" name="phone" placeholder="Phone Number" class="form-control" value="<?php echo isset($_POST["phone"]) ? $phone : "" ?>">
                                <div class="error_msg">
                                    <?= $phone_err ?>
                                </div>
                            </div>

                            <input type="hidden" name="total" value="<?php echo $total ?>">

                            <div class="col-lg-4 mt-3">
                                <button type="submit" name="checkout" class="btn btn-primary">Continue Shopping</button>
                            </div>

                            <div class="col-lg-4 mt-4">
                                <a href="cart.php">Return to Cart</a>
                            </div>


                        </div>
                    </form>

                </div>

            </div>

            <div class="col-lg-6 align-items-center">

                <?php

                if (isset($_SESSION["cart"])) {
                    $total = 0;
                    foreach ($_SESSION["cart"] as $key => $value) {
                        $total = $total + $value['item_price'];

                        echo '
                        <div class="container">
                        <div class="d-flex align-items-center">
                            <img style="width: 120px;" src="./upload/' . $value['item_image'] . ' " alt="">
                            <p>' . $value['item_name'] . ' </p>
                            <p class="mx-5">₦' . $value['item_price'] . ' </p>
                        </div>
        
                        <hr class="w-100">
    
                    </div>
                    ';
                    }
                }

                echo ' 
                <div class="mx-4">
                <h5>Total</h5>
                <p class="mt-2">NGN ₦' . $total . ' </p>
                 </div>
                ';

                ?>

            </div>

        </div>

    </div>



    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="./assets/js/bootstrap.min.js"></script>
    <script src="./assets/js/jquery.js"></script>
    <script src="./assets/js/swiper.js"></script>
    <script src="./assets/js/owl.min.js"></script>
    <script src="./assets/js/app.js"></script>
    

</body>

</html>