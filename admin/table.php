<?php
    require_once "./adminFunction/admin_function.php";
?>

 <div class="bg-white shadow rounded-sm my-2.5 overflow-x-auto mt-5">
                    <table class="min-w-max w-full table-auto">
                        
                        <thead>
                            <tr class="bg-gray-200 text-gray-600 uppercase text-sm leading-normal">
                                <th class="py-3 px-6 text-left">Project</th>
                                <th class="py-3 px-6 text-left">Client</th>
                                <th class="py-3 px-6 text-center">Status</th>
                                <th class="py-3 px-6 text-center">Actions</th>
                            </tr>
                        </thead>

                        <?php
                                    // DISPLAY ALL PRODUCTS TO ADMIN PANEL
                            $result->table_name = "products";
                            $select = $result->selectProductAll();
                            while($row = $result->stmt->fetch(PDO::FETCH_ASSOC)){
                                $id = $row["id"];
                                $name = $row["name"];
                                $category = $row["category"];
                                $price = $row["price"];
                                $image = $row["image"];
                                $description = $row["description"];
                           
                                echo '
                                <tbody class="text-gray-600 text-sm"> 
                                <tr class="border-b border-gray-200 bg-gray-50 hover:bg-gray-100">
                                <td class="py-3 px-6 text-left">
                                 '.$name.'
                                </td>
                                <td class="py-3 px-6 text-left">
                                    <div class="flex items-center">
                                        <span>'.$category.'</span>
                                    </div>
                                </td>
                                <td class="py-3 px-6 text-center">
                                    <span class="bg-green-200 text-green-600 py-1 px-3 rounded-full text-xs">'.$price.'</span>
                                </td>
                                <td class="py-3 px-6 text-center">
                                    <div class="flex item-center justify-center">
                                    
                                    <a href="./detail.php?detail='.$id.' ">
                                        <div class="w-5 mr-2 transform hover:text-purple-500 hover:scale-110 cursor-pointer">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                            </svg>
                                        </div>
                                    </a>
                                        
                                        <a href="./pages/update.php?update='.$id.' ">
                                        <div class="w-5 mr-2 transform hover:text-green-500 hover:scale-110 cursor-pointer">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                                            </svg>
                                        </div>
                                        </a>
                                       
                                        <a href="./delete.php?delete='.$id.' ">
                                        <div class="w-5 mr-2 transform hover:text-red-500 hover:scale-110 cursor-pointer">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                        </svg>
                                    </div>
                                        </a>

                                    </div>
                                </td>
                            </tr>
                            
                                ';
                            }
                        ?>

                        </tbody>
                        
                    </table>


                </div>
                <!-- END OF TABLE -->