<?php
  require_once "./functions/auth.php";
  
if(isset($_GET["detail"])){
    $id = $_GET["detail"];

    $result->table_name = "products";
    $select = $result->selectProductWIthCategories("id", $id);
    $rowCount = $result->stmt->rowCount();
    
    if($rowCount > 0){
      while($row = $result->stmt->fetch(PDO::FETCH_ASSOC)){
        $name = $row["name"];
        $price = $row["price"];
        $image = $row["image"];
        $description = $row["description"];
      }
    }
}

?>