<?php

require_once "./adminFunction/admin_function.php";

if(isset($_GET["delete"])){
    $id = $_GET["delete"];
    $result->table_name = "products";
    $result->delete( 'id' , $id );
    header("Location: ./index.php");
}

?>