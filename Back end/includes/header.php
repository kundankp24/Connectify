<header class="text-gray-700 body-font">





    <div class="container mx-auto flex flex-wrap p-5 flex-col md:flex-row items-center">
      <a class="flex title-font font-medium items-center text-gray-900 mb-4 md:mb-0">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-10 h-10 text-white p-2 bg-indigo-500 rounded-full" viewBox="0 0 24 24">
          <path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"></path>
        </svg>
        <span class="ml-3 text-xl">Connectify</span>
      </a>
      <nav class="md:ml-auto flex flex-wrap items-center text-base justify-center">
        <a class="mr-5 hover:text-gray-900" href="index.php">Home</a>
        <a class="mr-5 hover:text-gray-900" href="About Us.php">About us</a>
        <a class="mr-5 hover:text-gray-900" href="Books.php">Books</a>
        <a class="mr-5 hover:text-gray-900" href="Stationary.php">Stationary</a>
        <a class="mr-5 hover:text-gray-900" href="Study Material.php">Study Material</a>
        <a class="mr-5 hover:text-gray-900" href="contact.php">Contact</a>
	
<?php
                            if(!isset($_SESSION['customers'])){

                            echo "<a href='login.php' >login</a>";

                            }
                            else{
                              $row=$_SESSION['customers'];

                              $c_id = $row['customer_id'];

                              $c_name = $row['name'];
                              //$c_img = $row['image'];
                              //echo $c_img;
                      
?>
                              <!--<img class="img-circle img-thumbnail" src="image/<?php //echo $c_img; ?>">-->
                              <?php
                         
			 ?>
		<?php
$ip_add=getRealUserIp();
  ?>

			<a class="mr-5 hover:text-gray-900" href="index.php" style="color: blue;"><?php  echo "$c_name";?> </a>
			 <a class="mr-5 hover:text-gray-900" href="cart2.php?id=<?php echo $ip_add;?>">Cart</a>


			   <a class="mr-5 hover:text-gray-900" href="logout.php">Logout</a>
<?php

                          
                            }?>


      </nav>

      <!-- <button class="inline-flex items-center bg-gray-200 border-0 py-1 px-3 focus:outline-none hover:bg-gray-300 rounded text-base mt-4 md:mt-0">Butto
    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-1" viewBox="0 0 24 24">
      <path d="M5 12h14M12 5l7 7-7 7"></path>
    </svg>
  </button>
-->
    </div>
  </header>