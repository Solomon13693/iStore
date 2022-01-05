<?php

    require_once "./adminFunction/admin_function.php";

        $pro_name = "";
        $pro_price = "";
        $pro_image = "";
        $pro_des = "";
        $pro_cat = "";

        if(isset($_POST["submit"])){
            $product_name = $_POST["product_name"];
            $product_price = $_POST["price"];
            $product_description = $_POST["product_description"];
            $product_categories = $_POST["categories"];

            $img_name = $_FILES['img_upload']['name'];
            $tmp_img_name = $_FILES['img_upload']['tmp_name'];
            $img_path = './../upload/';
            move_uploaded_file($tmp_img_name, $img_path.$img_name);

            if($product_name == ""){
              $pro_name = "Product Name can't be empty";
            }elseif($product_price == ""){
              $pro_price = "Product Price can't be empty";
            }elseif($img_name == ""){
                $pro_image = "Product Image can't be empty";
            }elseif($product_description == ""){
                $pro_des = "Product Description can't be empty";
            } else{
                    $result->table_name = "products";
                    $result->insert( "name, price, description, image, category" , " '$product_name', '$product_price', '$product_description', '$img_name', '$product_categories' ");
                }
        
        }

?>