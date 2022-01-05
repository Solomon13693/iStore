<?php

    session_start();

    if(!isset($_SESSION['user'])){
        header("Location: login.php");
        exit;
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- TAILWIND CSS -->
    <link href="assets/css/tailwind.css" rel="stylesheet">
    <!-- ALPINE JS -->
    <script src="assets/js/alpine.js" defer></script>

    <title>Shalom Brand</title>
</head>

<body class="antialiased bg-gray-100">
    <div class="flex relative" x-data="{navOpen: false}">

              <!-- Header -->
           <?php require_once "components/nav.php" ?>

         <main class="flex-1 h-screen overflow-y-scroll overflow-x-hidden">

            <!-- Sliderbar -->
           <?php require_once "components/sliderbar.php" ?>
         
            <section class="max-w-7xl mx-auto py-4 px-5">

                <!-- Statistics -->
                <?php require_once "components/statistics.php" ?>

                <?php require_once "./table.php" ?>

                
            </section>
            <!-- END OF PAGE CONTENT -->
        </main>
    </div>
</body>
</html>