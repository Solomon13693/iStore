<?php

    session_start();
    require_once "./adminFunction/addProduct.php";

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
         
            <section class="max-w-7xl mx-auto px-5">

                <div class="mt-32">
                        <div class="">
                            <div class="mt-5 md:mt-0 md:col-span-2">
                            <form method="POST" enctype="multipart/form-data" >
                                <div class="shadow overflow-hidden sm:rounded-md">

                                <div class="px-4 py-5 bg-white sm:p-6">
                        
                                    <div class="">

                                    <div class="col-span-6 sm:col-span-6 lg:col-span-2 mb-2">
                                        <label for="city" class="block text-sm font-medium text-gray-700 mb-3">Product Name</label>
                                        <input type="text" name="product_name"  class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" value="<?php echo isset($_POST["product_name"]) ? $product_name : "" ?>" >
                                        <div class="text-red-500">
                                            <?= $pro_name ?>
                                        </div>
                                    </div>

                                    <div class="col-span-6 sm:col-span-6 lg:col-span-2 mb-2">
                                        <label for="city" class="block text-sm font-medium text-gray-700 mb-3">Price</label>
                                        <input type="text" name="price"  class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" value="<?php echo isset($_POST["price"]) ? $product_price : "" ?>" >
                                        <div class="text-red-500">
                                            <?= $pro_price ?>
                                        </div>
                                    </div>

                                    <div class="col-span-6 sm:col-span-6 lg:col-span-2 mb-2">
                                        <label for="city" class="block text-sm font-medium text-gray-700 mb-3">Product Image</label>
                                        <input type="file" name="img_upload"  class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" >
                                        <div class="text-red-500"  value="<?php echo isset($_POST["img_upload"]) ? $product_image : "" ?>" >
                                            <?= $pro_image ?>
                                        </div>
                                    </div>

                                    <div class="col-span-6 sm:col-span-6 lg:col-span-2 mb-2">
                                        <label for="city" class="block text-sm font-medium text-gray-700 mb-3">Product Description</label>
                                        <input type="text" name="product_description"  class="mt-1 block w-full py-5 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"  value="<?php echo isset($_POST["product_description"]) ? $product_description : "" ?>"  >
                                        <div class="text-red-500">
                                            <?= $pro_des ?>
                                        </div>
                                    </div>

                                    <div class="col-span-6 sm:col-span-3">
                                        <label for="country" class="block text-sm font-medium text-gray-700 mb-3">Product Category</label>
                                        <select name="categories" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                        <option value="mac" >Mac Book</option>
                                        <option value="iphone" >iPhone</option>
                                        <option value="ipad" >iPad</option>
                                        <option value="airpod" >Airpod</option>
                                        <option value="apple_watch" >Apple watch</option>
                                        </select>
                                        <div class="text-red-500">
                                            <?= $pro_cat ?>
                                        </div>
                                    </div>

                                    </div>
                                </div>
                                
                                <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                                    <button name="submit" type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                    Save
                                    </button>
                                </div>

                                </div>
                            </form>
                            </div>
                        </div>
                </div>
                
            </section>
            <!-- END OF PAGE CONTENT -->
        </main>
    </div>
</body>
</html>