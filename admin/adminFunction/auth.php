<?php

    session_start();
    require_once "./adminFunction/admin_function.php";

    $mail_err = "";
    $pwd_err = "";

    if(isset($_POST["login"])){
                $email = $_POST["email"];
                $password = $_POST["password"];
                $pass = md5($password);

        
                if($email == ""){
                $mail_err = "Email field can't be empty";
                }elseif($password == ""){
                $pwd_err = "Password field can't be empty";
                }else{
                    $result->table_name = "admin";
                    $select = $result->select( $email , $password );
                    $rowCount = $result->stmt->rowCount();
                    echo $rowCount;
                    if($rowCount > 0){
                        while($rows = $result->stmt->fetch(PDO::FETCH_ASSOC)){
                            $_SESSION['id'] = $rows['id'];
                            $_SESSION['user'] = $rows['email'];
                            $_SESSION['pass'] = $rows['password'];
                            header("Location: index.php");
                        }
                    
                    } else{
                        $mail_err = "Invalid email address or password";
                    }
                }
        
    }



?>