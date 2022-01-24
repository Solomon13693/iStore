<?php

    session_start();

    if(isset($_GET["logout"])){
        $logout = $_GET["logout"];
        if($logout == true){
            unset( $_SESSION['customer_name']);
            unset($_SESSION['customer']);
            unset( $_SESSION['customer_id'] );
            header("Location: ../login.php");
        }
    }

?>