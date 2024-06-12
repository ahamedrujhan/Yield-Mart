<header class="header">

   <div class="flex">



      <nav class="navbar">
         <a href="#" class="logo">Home</a>
         &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="#">Profile</a>
         &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="#">Add Products</a>
         &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a href="#">View Orders</a>
         &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;

      </nav>

      <?php
      $sql = "SELECT * FROM `products`";
      $select_rows = mysqli_query($conn, $sql) or die('query failed');
      $row_count = mysqli_num_rows($select_rows);

      ?>
      <nav class="navbar">
         <a href="">view stocks</a>
      </nav>
      <div class="cart">
         <span><?php echo $row_count; ?></span>
      </div>

      <div class="navbar"> <a href="#">Notifications</a>
         <a href="../../logout.php">
            <button class="logout" onclick="return confirm('Are you going to logout?')">Logout</button>
         </a>
      </div>



   </div>

</header>