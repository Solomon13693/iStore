<?php

require_once "./functions/auth.php";

$f_name_err = "";
$l_name_err = "";
$address_err = "";
$state_err = "";
$city_err = "";
$phone_err = "";

session_start();


$firstname = $_POST["first_name"];
$lastname = $_POST["last_name"];
$address = $_POST["address"];
$state = $_POST["state"];
$city = $_POST["city"];
$phone = $_POST["phone"];
$total = $_POST['total'];
$user_id = $_SESSION['customer_id'];


if($firstname == ""){
    $f_name_err = "First name field can't be empty";
 }elseif($lastname == ""){
   $l_name_err = "Last name field can't be empty";
 }elseif($address == ""){
   $address_err = "Address field can't be empty";
 }elseif($state == ""){
   $state_err = "State field can't be empty";
 }elseif($city == ""){
   $city_err = "City field can't be empty";
 }elseif($phone == ""){
   $phone_err = "Phone field can't be empty";
 }else{
     $result->table_name = "orders";
     $result->insert( "firstname, lastname, state, city, customer_id, address, phone, total_amout" , " '$firstname', '$lastname', '$state', '$city', '$user_id', '$address', '$phone', '$total' ");
     header("Location: paystack.php");
 }

?>