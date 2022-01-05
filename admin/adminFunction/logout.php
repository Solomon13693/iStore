<?php

    session_start();

    if(isset($_GET["logout"])){
        $logout = $_GET["logout"];
        if($logout == true){
            unset($_SESSION['user']);
            header("Location: ../login.php");
        }
    }

?>