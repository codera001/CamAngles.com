<?php

include 'config.php';

// session_start();

// $user_id = $_SESSION['user_id'];

// if (!isset($user_id)) {
//     header('location:user_login.php');
// }

if (isset($_POST['add_to_cart'])) {

    session_start();

    $user_id = $_SESSION['user_id'];

    if (!isset($user_id)) {
        header('location:user_login.php');
    }
    $product_name = $_POST['product_name'];
    $product_price = $_POST['product_price'];
    $product_image = $_POST['product_image'];
    $product_quantity = $_POST['product_quantity'];

    $check_cart_numbers = mysqli_query($conn, "SELECT * FROM `cart` WHERE name = '$product_name' AND user_id = '$user_id'") or die('query failed');

    if (mysqli_num_rows($check_cart_numbers) > 0) {
        $message[] = 'already added to cart!';
    } else {
        mysqli_query($conn, "INSERT INTO `cart`(user_id, name, price, quantity, image) VALUES('$user_id', '$product_name', '$product_price', '$product_quantity', '$product_image')") or die('query failed');
        $message[] = 'product added to cart!';
    }
}

?>






<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

    <!-- <link rel="stylesheet" href="font awesome/fontawesome-free-6.1.2-web/css/all.css"> -->
    <link rel="stylesheet" href="camangles.css">
    <link rel="stylesheet" href="style.css">
    <title>camangles</title>
</head>

<body>


    <!-- header starts -->
    <div class="head">
        <?php include 'header.php'; ?>


        <div class=" container-fluid d-flex px-3">
            <div class=" container header-text ">
                <h1>The Best Online store for you <span class="typed-cursor" style="opacity:1;  animation: blink 0.7s infinite; box-sizing:border-box">|</span></h1>


                <h3 style="color:var(--black)">Search through now and place your orders<br>No credit card
                    required</h3>
                <button class="btn "> <a class="text-white" href="shop.php">SHOP NOW</a></button>

                <div class="learn-more">
                    <a href="shop.php" class="background-text-link " style="font-size: 25px;"><ins> LEARN MORE
                            <span>→</span> </ins>
                    </a>
                </div>



            </div>

            <!-- carousel section -->
            <div class="container">

                <div class="carousel-container ">
                    <!-- data-bs-interval: the amount of time to delay between automatically cycling an item. If false, carousel will not automatically cycle -->
                    <!-- data-bs wrap: whether the carousel should cycle continuously (i.e go from first to last and vice-versa) -->
                    <div id="vertical-carousel" class="carousel slide pointer-event" data-bs-ride="carousel" data-bs-interval="true" data-bs-wrap="true">

                        <div class="carousel-inner">
                            <!-- Carousel item represents each slide -->
                            <div class="carousel-item active" data-bs-interval="5000">
                                <!-- <img src="uploaded_img/handcompass.png" alt="">
                                <div class="carousel-caption   header-body"> -->

                                <?php
                                $select_products = mysqli_query($conn, "SELECT image FROM `carousel_products` WHERE id=1") or die('query failed');
                                if (mysqli_num_rows($select_products) > 0) {
                                    while ($fetch_products = mysqli_fetch_assoc($select_products)) {
                                ?>

                                        <img class="image" src="uploaded_img/<?php echo $fetch_products['image']; ?>" alt="">

                                <?php
                                    }
                                } else {
                                    echo '<p class="empty">no products added yet!</p>';
                                }
                                ?>

                            </div>

                            <div class="carousel-item" data-bs-interval="2000">
                                <!-- <img src="uploaded_img/45-removebg-preview.png" alt="">
                              <div class="carousel-caption   header-body">

                                </div> -->
                                <?php
                                $select_products = mysqli_query($conn, "SELECT image FROM `carousel_products` WHERE id=2") or die('query failed');
                                if (mysqli_num_rows($select_products) > 0) {
                                    while ($fetch_products = mysqli_fetch_assoc($select_products)) {
                                ?>

                                        <img class="image" src="uploaded_img/<?php echo $fetch_products['image']; ?>" alt="">

                                <?php
                                    }
                                } else {
                                    echo '<p class="empty">no products added yet!</p>';
                                }
                                ?>
                            </div>
                            <div class="carousel-item" data-bs-interval="2000">
                                <!-- <img src="uploaded_img/IMG-7747-removebg-preview.png" alt="">
                                <div class="carousel-caption   header-body">

                                 </div> -->
                                <?php
                                $select_products = mysqli_query($conn, "SELECT image FROM `carousel_products` WHERE id=3") or die('query failed');
                                if (mysqli_num_rows($select_products) > 0) {
                                    while ($fetch_products = mysqli_fetch_assoc($select_products)) {
                                ?>

                                        <img class="image" src="uploaded_img/<?php echo $fetch_products['image']; ?>" alt="">

                                <?php
                                    }
                                } else {
                                    echo '<p class="empty">no products added yet!</p>';
                                }
                                ?>
                            </div>
                           
                            <div class="carousel-item" data-bs-interval="2000">
                                <!-- <img src="uploaded_img/IMG-7748-removebg-preview.png" alt="">
                                 <div class="carousel-caption   header-body">

                                </div> -->
                                <?php
                                $select_products = mysqli_query($conn, "SELECT image FROM `carousel_products` WHERE id=4") or die('query failed');
                                if (mysqli_num_rows($select_products) > 0) {
                                    while ($fetch_products = mysqli_fetch_assoc($select_products)) {
                                ?>

                                        <img class="image" src="uploaded_img/<?php echo $fetch_products['image']; ?>" alt="">

                                <?php
                                    }
                                } else {
                                    echo '<p class="empty">no products added yet!</p>';
                                }
                                ?>
                            </div>
                            
                            <div class="carousel-item" data-bs-interval="2000">
                                <!-- <img src="uploaded_img/IMG-7763-removebg-preview.png" alt="">
                                <div class="carousel-caption   header-body">

                                 </div> -->
                                <?php
                                $select_products = mysqli_query($conn, "SELECT image FROM `carousel_products` WHERE id=5") or die('query failed');
                                if (mysqli_num_rows($select_products) > 0) {
                                    while ($fetch_products = mysqli_fetch_assoc($select_products)) {
                                ?>

                                        <img class="image" src="uploaded_img/<?php echo $fetch_products['image']; ?>" alt="">

                                <?php
                                    }
                                } else {
                                    echo '<p class="empty">no products added yet!</p>';
                                }
                                ?>
                            </div>
                          
                            <div class="carousel-item" data-bs-interval="2000">
                                <!-- <img src="uploaded_img/IMG-7779-removebg-preview.png" alt="">
                                 <div class="carousel-caption   header-body">

                                 </div> -->
                                <?php
                                $select_products = mysqli_query($conn, "SELECT image FROM `carousel_products` WHERE id=6") or die('query failed');
                                if (mysqli_num_rows($select_products) > 0) {
                                    while ($fetch_products = mysqli_fetch_assoc($select_products)) {
                                ?>

                                        <img class="image" src="uploaded_img/<?php echo $fetch_products['image']; ?>" alt="">

                                <?php
                                    }
                                } else {
                                    echo '<p class="empty">no products added yet!</p>';
                                }
                                ?>
                            </div>
                            <div class="carousel-item" data-bs-interval="2000">
                                <!-- <img src="uploaded_img/46-removebg-preview.png" alt="">
                                  <div class="carousel-caption   header-body">

                                 </div> -->
                                <?php
                                $select_products = mysqli_query($conn, "SELECT image FROM `carousel_products` WHERE id=7") or die('query failed');
                                if (mysqli_num_rows($select_products) > 0) {
                                    while ($fetch_products = mysqli_fetch_assoc($select_products)) {
                                ?>

                                        <img class="image" src="uploaded_img/<?php echo $fetch_products['image']; ?>" alt="">

                                <?php
                                    }
                                } else {
                                    echo '<p class="empty">no products added yet!</p>';
                                }
                                ?>
                            </div>
                            
                            <div class="carousel-item" data-bs-interval="2000">
                                <!-- <img src="uploaded_img/43-removebg-preview.png" alt="">
                                 <div class="carousel-caption   header-body">

                                </div> -->
                                <?php
                                $select_products = mysqli_query($conn, "SELECT image FROM `carousel_products` WHERE id=8") or die('query failed');
                                if (mysqli_num_rows($select_products) > 0) {
                                    while ($fetch_products = mysqli_fetch_assoc($select_products)) {
                                ?>

                                        <img class="image" src="uploaded_img/<?php echo $fetch_products['image']; ?>" alt="">

                                <?php
                                    }
                                } else {
                                    echo '<p class="empty">no products added yet!</p>';
                                }
                                ?>
                            </div>
                            
                            <div class="carousel-item" data-bs-interval="2000">
                                <!-- <img src="uploaded_img/44-removebg-preview.png" alt="">
                               <div class="carousel-caption   header-body">

                               </div> -->
                                <?php
                                $select_products = mysqli_query($conn, "SELECT image FROM `carousel_products` WHERE id=9") or die('query failed');
                                if (mysqli_num_rows($select_products) > 0) {
                                    while ($fetch_products = mysqli_fetch_assoc($select_products)) {
                                ?>

                                        <img class="image" src="uploaded_img/<?php echo $fetch_products['image']; ?>" alt="">

                                <?php
                                    }
                                } else {
                                    echo '<p class="empty">no products added yet!</p>';
                                }
                                ?>
                            </div>
                            
                            <div class="carousel-item" data-bs-interval="2000">
                                <!-- <img src="uploaded_img/IMG-7749-removebg-preview.png" alt="">
                                 <div class="carousel-caption   header-body">

                                 </div> -->
                                <?php
                                $select_products = mysqli_query($conn, "SELECT image FROM `carousel_products` WHERE id=10") or die('query failed');
                                if (mysqli_num_rows($select_products) > 0) {
                                    while ($fetch_products = mysqli_fetch_assoc($select_products)) {
                                ?>

                                        <img class="image" src="uploaded_img/<?php echo $fetch_products['image']; ?>" alt="">

                                <?php
                                    }
                                } else {
                                    echo '<p class="empty">no products added yet!</p>';
                                }
                                ?>
                            </div>
                            
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>



    <section class=" container-fluid products ">
        <div class="container-fluid deals text-center  ">
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

        <div class="box-container">

            <?php
            $select_products = mysqli_query($conn, "SELECT * FROM `products` LIMIT 10") or die('query failed');
            if (mysqli_num_rows($select_products) > 0) {
                while ($fetch_products = mysqli_fetch_assoc($select_products)) {
            ?>
                    <form action="" method="post" class="box">
                        <img class="image" src="uploaded_img/<?php echo $fetch_products['image']; ?>" alt="">
                        <div class="name"><?php echo $fetch_products['name']; ?></div>
                        <div class="price">₦<?php echo $fetch_products['price']; ?>/-</div>
                        <input type="number" min="1" name="product_quantity" value="1" class="qty">
                        <input type="hidden" name="product_name" value="<?php echo $fetch_products['name']; ?>">
                        <input type="hidden" name="product_price" value="<?php echo $fetch_products['price']; ?>">
                        <input type="hidden" name="product_image" value="<?php echo $fetch_products['image']; ?>">
                        <input type="submit" value="add to cart" name="add_to_cart" class="cart">
                    </form>
            <?php
                }
            } else {
                echo '<p class="empty">no products added yet!</p>';
            };
            ?>



        </div>


        <div class="load-more" style="margin-top: 2rem; text-align:center;">
            <a href="shop.php" class="option-btn">load more</a>
        </div>



    </section>


    <!-- section-two starts here -->
    <div class=" container-fluid  section-two text pt-5" style="background-color:rgba(128, 128, 128, 0.209) ; color:black">
        <h1 style="font-size: 60px;"><b>CA<sub>M</sub> ANGLES <br> FOR EVERY PURPOSE</b>
        </h1>
        <p> Start a new era of stress free <br> purposeful outdoor camping activities.</p>
        <br>
        <p><b>Achieve all you goals of camping today</b></p>


        <div class=" container-fluid text-image  ">
            <ul class="text-image-list">
                <li><a href="" class="text-dark">Online store</a></li>
                <li><a href="" class="text-dark">Online store</a></li>
                <li><a href="" class="text-dark">Online store</a></li>
                <li><a href="" class="text-dark">Online store</a></li>
                <li><a href="" class="text-dark">Online store</a></li>
                <li><a href="" class="text-dark">Online store</a></li>

                <li style="padding-top:2rem ;"><a href="shop.php" style="font-size:20px;" class="text-dark"><ins>EXPLORE ALL
                            PRODUCTS
                            <span>→</span></ins></a></li>
            </ul>

            <div class="container website-example2 ">
                <h1 class="text-center" style=" font-size: 20px; font-weight: bolder; padding-top: 1rem;">
                    CA<sub>M</sub>ANGLES
                </h1>

                <div class=" container-fluid navbarr  d-flex  ">
                    <ul class="d-flex">
                        <li class=" fab fa-instagram "></li>
                        <li class=" fab fa-twitter "></li>
                    </ul>
                    <ul class=" nav-list" style="font-size: 10px; text-transform: uppercase;">
                        <li>overview</li>
                        <li>products</li>
                        <li>services</li>
                    </ul>
                    <div class="shop-icon fas fa-cart-shopping "></div>
                </div>
                <div class="d-flex">
                    <div class="" style="width:50% ;"><img src="uploaded_img/22.jpg" alt="" style="width:90% ; height:250px ; margin-left: 2rem; border-radius: 30px;"></div>
                    <div class="" style="width:50%; height:200px;margin:1rem 0; text-align:center; background-color:rgba(128, 128, 128, 0.061)">
                        <h4 style="padding-top:1rem;"><b>Life</b></h4>
                        <p>Made easier</p>
                        <button class="white-button" style="display: block; margin-left: 6rem;">Order now</button>
                    </div>
                </div>
            </div>

        </div>


        <div class="container-fluid socials">
            <a href="" class="fab fa-instagram"></a>
            <a href="" class="fab fa-facebook"></a>
            <a href="" class="fab fa-twitter"></a>
            <a href="" class="fab fa-youtube"></a>
        </div>

    </div>
    <!-- SECTION-TWO ends here -->





    <!-- socials starts here -->






    <!-- footer section starts here -->
    <?php include 'footer.php'; ?>

    <script src="script.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>