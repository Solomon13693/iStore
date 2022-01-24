<?php

         require_once "./functions/auth.php";

            $full_name_err = "";
            $mail_err = "";
            $pwd_err = "";

        if(isset($_POST["register"])){
            $full_name = $_POST["full_name"];
            $email = $_POST["email"];
            $password = $_POST["password"];
            $pass = md5($password);

            if($full_name == ""){
               $full_name_err = "Name field can't be empty";
            }elseif($email == ""){
              $mail_err = "Email field can't be empty";
            }elseif($password == ""){
              $pwd_err = "Password field can't be empty";
            }else{
                $result->table_name = "customer";
                $result->insert( "fullname, email, password" , " '$full_name', '$email', '$pass' ");
                echo '
                <script>
                    window.history.go(-1);
                </script>
            ';
            }
    
        }

        if(isset($_POST["login"])){
            $email = $_POST["email"];
            $password = $_POST["password"];
            $pass = md5($password);

            if($email == ""){
              $mail_err = "Email field can't be empty";
            }elseif($password == ""){
              $pwd_err = "Password field can't be empty";
            }else{
                $result->table_name = "customer";
                $select = $result->selectLogin( $email , $pass );
                $rowCount = $result->stmt->rowCount();
                echo $rowCount;
                if($rowCount > 0){
                    while($rows = $result->stmt->fetch(PDO::FETCH_ASSOC)){
                       $_SESSION['customer_name'] = $rows['fullname'];
                       $_SESSION['customer'] = $rows['email'];
                       $_SESSION['customer_id'] = $rows['id'];
                       echo '
                       <script>
                           window.history.go(-1);
                       </script>
                   ';
                    }
                
                } else{
                    $mail_err = "Invalid email address or password";
                }
            }
    
        }

?>