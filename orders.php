<?php

include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];

if (!isset($user_id)) {
   header('location:user_login.php');
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>orders</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="style.css">

</head>

<body>
   <div class="head">

      <?php include 'header.php'; ?>


      <div class=" container-fluid deals text-center mb-0">
         <div class="container" style="width: 100%;">
            <?php
            $select_products = mysqli_query($conn, "SELECT * FROM `discount_products`") or die('query failed');
            if (mysqli_num_rows($select_products) > 0) {
               while ($fetch_products = mysqli_fetch_assoc($select_products)) {
            ?>

                  <img class="image" src="uploaded_img/<?php echo $fetch_products['image']; ?>" alt="" style="width:40% ; height: 200px; border">

            <?php
               }
            } else {
               echo '<p class="empty">no products added yet!</p>';
            }
            ?>
         </div>
         <div class="container input">
            <h1 style="" class="card-title"><strong>MONTHLY DEALS!!!</strong></h1>
            <div class="container d-flex input-box">
               <input type="text" name="email" placeholder="Enter your emaill address here" width="70" height="30">
               <?php
               $select_products = mysqli_query($conn, "SELECT * FROM `discount_products`") or die('query failed');
               if (mysqli_num_rows($select_products) > 0) {
                  while ($fetch_products = mysqli_fetch_assoc($select_products)) {
               ?>
                     <h3>Get <h6> <?php echo $fetch_products['percent_discount']; ?>now</h3>
               <?php
                  }
               }
               ?>

            </div>
         </div>
      </div>

   </div>




   <section class="placed-orders">
      <div class="heading">
         <h3>your orders</h3>
         <p> <a href="home.php">home</a> / orders </p>
      </div>
      <h1 class="title">placed orders</h1>

      <div class="box-container">

         <?php
         $order_query = mysqli_query($conn, "SELECT * FROM `orders` WHERE user_id = '$user_id'") or die('query failed');
         if (mysqli_num_rows($order_query) > 0) {
            while ($fetch_orders = mysqli_fetch_assoc($order_query)) {
         ?>
               <div class="box">
                  <p> placed on : <span><?php echo $fetch_orders['placed_on']; ?></span> </p>
                  <p> name : <span><?php echo $fetch_orders['name']; ?></span> </p>
                  <p> number : <span><?php echo $fetch_orders['number']; ?></span> </p>
                  <p> email : <span><?php echo $fetch_orders['email']; ?></span> </p>
                  <p> address : <span><?php echo $fetch_orders['address']; ?></span> </p>
                  <p> payment method : <span><?php echo $fetch_orders['method']; ?></span> </p>
                  <p> your orders : <span><?php echo $fetch_orders['total_products']; ?></span> </p>
                  <p> total price : <span>$<?php echo $fetch_orders['total_price']; ?>/-</span> </p>
                  <p> payment status : <span style="color:<?php if ($fetch_orders['payment_status'] == 'pending') {
                                                               echo 'red';
                                                            } else {
                                                               echo 'green';
                                                            } ?>;"><?php echo $fetch_orders['payment_status']; ?></span> </p>
               </div>
         <?php
            }
         } else {
            echo '<p class="empty">no orders placed yet!</p>';
         }
         ?>
      </div>

   </section>








   <?php include 'footer.php'; ?>

   <!-- custom js file link  -->
   <script src="script.js"></script>

</body>

</html>