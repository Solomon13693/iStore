<?php
session_start();
require_once "./adminFunction/admin_function.php";

if(isset($_GET["detail"])){
    $id = $_GET["detail"];
    $result->table_name = "products";
    $result->selectById( 'id' , $id );
    while($row = $result->stmt->fetch(PDO::FETCH_ASSOC)){
        $id = $row["id"];
        $name = $row["name"];
        $category = $row["category"];
        $price = $row["price"];
        $image = $row["image"];
        $description = $row["description"];
    }
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- TAILWIND CSS -->
    <link href="./assets/css/tailwind.css" rel="stylesheet">
    <!-- ALPINE JS -->
    <script src="./assets/js/alpine.js" defer></script>

    <title>Shalom Brand</title>
</head>

<body class="antialiased bg-gray-100">
    <div class="flex relative" x-data="{navOpen: false}">

              <!-- Header -->
           <?php require_once "./components/nav.php" ?>

         <main class="flex-1 h-screen overflow-y-scroll overflow-x-hidden">

            <!-- Sliderbar -->
           <?php require_once "./components/sliderbar.php" ?>
         
            <section class="max-w-7xl mx-auto py-4 px-5">

            <section class="text-gray-600 body-font overflow-hidden bg-white shadow px-3 py-3 rounded-lg mt-20">
                <div class="container px-5 py-10 mx-auto">
                    <div class="-my-8 divide-y-2 divide-gray-100">
                    <div class="py-8 flex flex-wrap md:flex-nowrap">
                        <div class="md:flex-grow">

                        <h2 class="text-2xl font-bold text-gray-900 title-font mb-2"><?php echo $name ?></h2>
                        <div class="mb-4">
                            <span class="font-semibold title-font text-gray-700"><?php echo $price ?> </span>
                        </div>
                        
                        <img class="mt-5 w-36 mb-10" src="../upload/<?= $image ?>" alt="<?= $name ?>">

                        <p class="leading-relaxed"><?= $description ?></p>

                        </div>
                    </div>
                    </div>
                </div>
            </section>
                
            </section>
            <!-- END OF PAGE CONTENT -->
        </main>
    </div>
</body>
</html>