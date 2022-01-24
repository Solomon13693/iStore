<?php

    session_start();

    $cart_id = $_GET["cart_id"];

    if(isset($_SESSION["cart"])){
        $checker = array_column($_SESSION["cart"], 'item_name', 'item_id' );
        if(in_array($_GET['cart_name'], $checker)){
            echo '
                <script>
                    alert("Product already in cart")
                    window.history.go(-1);
                </script>
            ';
        } else {
                $count = count($_SESSION["cart"]);
                $_SESSION["cart"][$count] = array('item_id' => $_GET['cart_id'], 'item_name' => $_GET['cart_name'], 'item_price' => $_GET['cart_price'], 'item_image' => $_GET['cart_image']);
                echo '
                <script>
                   window.history.go(-1);
                </script>
            ';
            }
    }
    else {
        $_SESSION["cart"][0] = array('item_id' => $_GET['cart_id'], 'item_name' => $_GET['cart_name'], 'item_price' => $_GET['cart_price'], 'item_image' => $_GET['cart_image']);
        echo '
        <script>
            window.history.go(-1);
        </script>
    ';
    }

    print_r($_SESSION['cart'])

?>