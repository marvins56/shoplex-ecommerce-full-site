



<!DOCTYPE html>

<html lang="en">

<?php



$search = "";

  include 'database.php';



 ?>



<!-- molla/login.html  22 Nov 2019 10:04:03 GMT -->

<head>

    <meta charset="UTF-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>ShOpLeXUG</title>

    <meta name="keywords" content="HTML5 Template">

    <meta name="description" content="Molla - Bootstrap eCommerce Template">

    <meta name="author" content="p-themes">

    <!-- Favicon -->

    <link rel="apple-touch-icon" sizes="180x180" href="assets/images/icons/apple-touch-icon.png">

    <link rel="icon" type="image/png" sizes="32x32" href="assets/images/icons/favicon-32x32.png">

    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/icons/favicon-16x16.png">

    <link rel="manifest" href="assets/images/icons/site.html">

    <link rel="mask-icon" href="assets/images/icons/safari-pinned-tab.svg" color="#666666">

    <link rel="shortcut icon" href="assets/images/icons/favicon.ico">

    <meta name="apple-mobile-web-app-title" content="Molla">

    <meta name="application-name" content="Molla">

    <meta name="msapplication-TileColor" content="#cc9966">

    <meta name="msapplication-config" content="assets/images/icons/browserconfig.xml">

    <meta name="theme-color" content="#ffffff">

    <!-- Plugins CSS File -->

    <link rel="stylesheet" href="assets/css/bootstrap.min.css">

    <!-- Main CSS File -->

    <link rel="stylesheet" href="assets/css/style.css">
    <script src="~/assets/js/jquery-ui.js"></script>
</head>



<body>

    <div class="page-wrapper">

        <header class="header">



            <div class="header-middle sticky-header">

                <div class="container">

                    <div class="header-left">

                        <button class="mobile-menu-toggler">

                            <span class="sr-only">Toggle mobile menu</span>

                            <i class="icon-bars"></i>

                        </button>



                        <a href="index.php" class="logo">

                            <img src="assets/images/logo.png" alt="Molla Logo" width="105" height="25">

                        </a>



                        <nav class="main-nav">

                          <ul class="menu sf-arrows">

                            <li class="megamenu-container active">

                              <a href="index.php" >Home</a>

                            </li>

                            <li>

                              <a href="category.php" >Shop</a>

                            </li>

                            <li>

                              <a href="user_profile.php" >Profile</a>

                            </li>

                            <li>

                              <a href="contact.php" >Contact</a>

                            </li>

                            <li>

                              <a href="coming-soon.php" >comming soon</a>

                            </li>

                            <li>

                              <a href="login.php" >Login/ Sign up</a>

                            </li>

                            <li>

                              <a href="logout.php" >logout</a>

                            </li>

                          </ul>

                        </nav><!-- End .main-nav -->

                    </div><!-- End .header-left -->



                    <div class="header-right">

                        <div class="header-search">

                            <a href="search.php" class="search-toggle" role="button" title="Search"><i class="icon-search"></i></a>

                            <form action="search.php" method="POST">

                                <div class="header-search-wrapper">

                                    <label for="search" class="sr-only">Search</label>

                                    <input type="search" class="form-control" name="search"placeholder="Search in..." required>

                                </div><!-- End .header-search-wrapper -->

                            </form>

                        </div><!-- End .header-search -->





                        <div class="dropdown cart-dropdown">

                            <a href="#" class="dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static">

                                <i class="icon-shopping-cart"></i>

                                <span class="cart-count">



<?php







if((isset($_SESSION['id']) && isset($_SESSION['username']) && isset($_SESSION['location']))){



  $sql27 = "SELECT * from users where id = {$_SESSION['id']} ";

    $res27 = mysqli_query($conn,$sql27);



    if($res27){

      $rows1 = mysqli_fetch_assoc($res27);

        $username = $rows1['username'];

  }

      $query = "SELECT COUNT(productname) FROM cart where username = '$username'";

    $result = mysqli_query($conn,$query);

    $rows = mysqli_fetch_row($result);

    $total=  $rows[0];

    echo $total;



}

else{

  echo 0;

}



 ?>



                                </span>

                            </a>



                            <div class="dropdown-menu dropdown-menu-right " style="overflow:auto;height:400px;">

                                <div class="dropdown-cart-products " >



                                  <?php

                                  if((isset($_SESSION['id']) && isset($_SESSION['username']) && isset($_SESSION['location']))){

                                    $sql29 = "SELECT * from users where id = {$_SESSION['id']} ";

                                    $res29 = mysqli_query($conn,$sql29);



                                    if($res29){

                                      $rows29 = mysqli_fetch_assoc($res29);

                                        $username29 = $rows29['username'];

                                }

                                                    $queryr = "SELECT * from cart where code = 'product' && username = '$username29'";

                                                    $resultr = mysqli_query($conn,$queryr);

                                                    $res = mysqli_num_rows($resultr);

                                                    if($res > 0){



                                                      while ($rowr  = mysqli_fetch_assoc($resultr)) {

                                                          $ids = $rowr['id'];

                                                          $productname = $rowr['productname'];

                                                          $price = $rowr['price'];



                                                          $location = $rowr['location'];

                                                            echo '

                                                            <div class="product">

                                                                <div class="product-cart-details">

                                                                    <h4 class="product-title">

                                                                        <a href="#">'.$productname.'</a>

                                                                    </h4>



                                                                    <span class="cart-product-info">

                                                                        <span class="cart-product-qty"></span>

                                                                      '.$price.'

                                                                    </span>

                                                                </div><!-- End .product-cart-details -->





                                                                <figure class="product-image-container">

                                                                    <a href="#" class="product-image">

                                                                        <img src="'.$location.'" alt="product">

                                                                    </a>

                                                                </figure>



                                                                <a href="deletecart.php?deleteid='.$ids.'" class="btn-remove" title="Remove Product"><i class="icon-close"></i></a>

                                                            </div>





                                                            <!-- End .product -->

                                                            ';





                                                            }



                                                          }



                                  }else{

                                    echo "LOGIN TO ACCESS CART";

                                  }





                                ?>

                                <?php

                                if((isset($_SESSION['id']) && isset($_SESSION['username']) && isset($_SESSION['location']))){





                                $sql30 = "SELECT * from users where id = {$_SESSION['id']} ";

                                $res30 = mysqli_query($conn,$sql30);



                                if($res30){

                                $rows1 = mysqli_fetch_assoc($res30);

                                $username = $rows1['username'];

                                }

                                $querydeals = "SELECT * from cart where code = 'deal' && username = '$username'";

                                $resultdeals = mysqli_query($conn,$querydeals);

                                $resdeals = mysqli_num_rows($resultdeals);

                                if($resdeals > 0){



                                while ($rowdeals  = mysqli_fetch_assoc($resultdeals)) {

                                $iddeals = $rowdeals['id'];

                                $productnamedeals = $rowdeals['productname'];

                                $pricedeals = $rowdeals['price'];



                                $locationdeals = $rowdeals['location'];

                                echo '

                                <div class="product">

                                <div class="product-cart-details">

                                  <h4 class="product-title">

                                      <a href="#">'.$productnamedeals.'</a>

                                  </h4>



                                  <span class="cart-product-info">

                                      <span class="cart-product-qty"></span>

                                    '.$pricedeals.'

                                  </span>



                                </div><!-- End .product-cart-details -->



                                <figure class="product-image-container">

                                  <a href="#" class="product-image">

                                      <img src="'.$locationdeals.'" alt="product">

                                  </a>



                                </figure>

                                <a href="deletecart.php?deleteid='.$iddeals.'" class="btn-remove" title="Remove Product"><i class="icon-close"></i></a>

                                </div><!-- End .product -->

                                ';





                                }



                                }

                                }



                                ?>



                                  </div><!-- End .cart-product -->







                                <div class="dropdown-cart-action">

                                    <a href="cart.php" class="btn btn-primary">View Cart</a>

                                </div><!-- End .dropdown-cart-total -->

                            </div><!-- End .dropdown-menu -->

                        </div><!-- End .cart-dropdown -->

                    </div><!-- End .header-right -->

                </div><!-- End .container -->

            </div><!-- End .header-middle -->

        </header><!-- End .header -->

