<?php
if (isset($message)) {
    foreach ($message as $message) {
        echo '
      <div class="message">
         <span>' . $message . '</span>
         <i class="fas fa-times" onclick="this.parentElement.remove();"></i>
      </div>
      ';
    }
}
?>




<?php include 'config.php';
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

    <link rel="stylesheet" href="font awesome/fontawesome-free-6.1.2-web/css/all.css">
    <link rel="stylesheet" href="camangles.css">
    <link rel="stylesheet" href="style.css">
    <title>camangles</title>
</head>

<body>

    <!-- header starts -->





    <div class="container-fluid d-flex justify-content-between header  " style="margin: 0;">
        <h4 class=" shop-now flex-fill fa-solid fa-phone" href="#" >CALL 07089488528 TO ORDER
            NOW</h4>
       
    </div>




    <!-- nav  section starts here -->
    <div class=" container-fluid nav-section">
        <nav class="navbar navbar-expand-lg navbar-light  first-nav">
            <div class="container-fluid">
                <ul class="navbar-nav  w-100 justify-content-center" >
                    <li class="nav-item " style="margin-right: 3rem; background-color:var(--red); padding:5px 15px; border-radius:5px;">
                        <a class="nav-link dropdown-toggle " href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="color:var(--white);font-size:15px;  font-family: Rubik, sans-serif;">
                            <strong>OVERVIEW</strong>
                        </a>
                        <div class="dropdown-menu  container-fluid">
                            <div class="row ">
                                <ul class="dropdown col-sm " aria-labelledby="navbarDropdown">
                                    <li><a class="dropdown-header text-dark" href="#">About Us</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item text-dark" href="#">Unique Value</a></li>
                                    <li><a class="dropdown-item text-dark " href="#">Tenacity</a></li>
                                    <li><a class="dropdown-item text-dark" href="#">Customer-centric Approach</a></li>
                                    <li><a class="dropdown-item text-dark" href="#">Good Marketing</a></li>
                                    <li><a class="dropdown-item text-dark" href="#">Strong Vision</a></li>
                                    <li><a class="dropdown-item text-dark" href="#">Adaptability</a></li>
                                    <li><a class="dropdown-item text-dark" href="#">Diversity</a></li>
                                </ul>
                                <ul class="dropdown col-sm" aria-labelledby="navbarDropdown">
                                    <li><a class="dropdown-header text-dark" href="#">Our Uniqueness</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item text-dark" href="#">Leadership</a></li>
                                    <li><a class="dropdown-item text-dark" href="#">Innovation</a></li>
                                    <li><a class="dropdown-item text-dark" href="#">Flexibility</a></li>
                                    <li><a class="dropdown-item text-dark" href="#">Motivation</a></li>
                                    <li><a class="dropdown-item text-dark" href="#">Descisiveness</a></li>
                                    <li><a class="dropdown-item text-dark" href="#">Risk Tolerance</a></li>
                                    <li><a class="dropdown-item text-dark" href="#">Persistence</a></li>

                                </ul>
                                <ul class="dropdown col-sm" aria-labelledby="navbarDropdown">
                                    <li><a class="dropdown-header text-dark" href="#">Vision</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item text-dark" href="#">To build a place where people can <br>
                                            easily access and buy all types of<br>
                                            camping tools/equipments. Inorder <br>
                                            to make camping more fun and<br> achievable. </a></li>
                                </ul>
                                <ul class="dropdown col-sm" aria-labelledby="navbarDropdown">
                                    <li><a class="dropdown-header  text-dark" href="#">Mission</a></li>

                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item text-dark" href="#">Helping and improving People's <br>
                                            Lives through Innovation</a></li>
                                </ul>
                            </div>
                        </div>
                    </li>

                    <li class="nav-item flex-center " style="margin-right: 3rem; background-color:var(--red); padding:5px 15px; border-radius:5px;">
                        <a class="nav-link" href="shop.php" style="font-size:15px; color:var(--white)"><strong>PRODUCTS</strong></a>
                    </li>
                    <li class="nav-item flex-center" style="margin-right: 3rem; background-color:var(--red); padding:5px 15px; border-radius:5px;">
                        <a class="nav-link dropdown-toggle " href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false"  style="color:var(--white); font-size:15px;  font-family: Rubik, sans-serif;">
                            <strong>SERVICES</strong>
                        </a>
                        <div class="dropdown-menu container-fluid ">
                            <div class="row">
                                <ul class="dropdown col-sm " aria-labelledby="navbarDropdown">
                                    <li><a class="dropdown-header text-dark" href="#">Distinct Value</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item text-dark" href="#">Unique Value</a></li>
                                    <li><a class="dropdown-item text-dark" href="#">Tenacity</a></li>
                                    <li><a class="dropdown-item text-dark" href="#">Diversity</a></li>
                                </ul>


                                <ul class="dropdown col-sm justify-content-end" aria-labelledby="navbarDropdown">
                                    <img src="uploaded_img/23.jpg" alt="" style="height:350px ; width:600px; border :2px solid white ; border-radius: 30px;">



                                </ul>
                            </div>
                        </div>
                    </li>

                </ul>

            </div>
            <ul class="navbar-nav  navbar-right me-auto   ">
                <li style="padding:5px 10px;  background-color:var(--red);  border-radius:10px; margin:0 1rem;"><a href="user_login.php" class="nav-link  " style="color:var(--white);  font-size:15px; " ><strong>LOGIN</strong></a></li>
                <li style="padding:5px 10px; border-radius:10px; border:3px solid var(--red); "><a href="user_register.php" class="nav-link " style="color:var(--black);  font-size:15px; "><strong>REGISTER</strong></a></li>

            </ul>
        </nav>





        <div class=" container  nav-2">
          <div>
          <h1 class=" logo" style="color:var(--black)"><i class="fas fa-compass fa-spin" style="color: var(--red); font-size:50px"></i> <b>CAMANGLES</b></h1>

          </div>
            <ul class="navbar" style="list-style: none;">
                <li><a href="home.php" ><b>Home</b></a></li>
                <li><a href="about.php" ><b>About</b></a></li>
                <li> <a href="shop.php" ><b>Shop</b></a></li>
                <li><a href="contacts.php"><b>Contact</b></a></li>
                <li><a href="orders.php" ><b>Orders</b></a></li>
            </ul>

            <div class="icons">
                <i id="menu-btn" class="fas fa-bars"  ></i>
                <a href="search_page.php" class="fas fa-search" ></a>
                <i id="user-btn" class="fas fa-user"  ></i>
                <?php
                $select_cart_number = mysqli_query($conn, "SELECT * FROM `cart` ") or die('query failed');
                $cart_rows_number = mysqli_num_rows($select_cart_number);
                ?>
                <a href="carts.php" > <i class="fas fa-shopping-cart"></i> <span>(<?php echo $cart_rows_number; ?>)</span> </a>
            </div>

            <div class="user-box">
                <p>username : <span><?php echo $_SESSION['user_name']; ?></span></p>
                <p>email : <span><?php echo $_SESSION['user_email']; ?></span></p>
                <a href="user_logout.php" class="delete-btn">logout</a>
            </div>


        </div>
    </div>

    <script src="script.js"></script>
</body>