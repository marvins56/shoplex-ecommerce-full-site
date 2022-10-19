<?php  $search =""; 
include  'database.php';
$querybanner = "SELECT * from banner";
$resultbanner = mysqli_query($conn,$querybanner);
if($resultbanner){
  if(mysqli_num_rows($resultbanner) >
0){ 
  while( $rowbanner = mysqli_fetch_assoc($resultbanner)){ $header1 =
$rowbanner['header']; $description1= $rowbanner['description']; 
$location1 =
$rowbanner['location']; } }} ?>

<!DOCTYPE html>
<html lang="en">
  <!-- BerNie's/index-1.html  22 Nov 2019 09:55:06 GMT -->
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <title>Bernie's online Bar</title>
    <meta name="keywords" content="HTML5 Template" />
    <meta name="description" content="BerNie's - Bootstrap eCommerce Template" />
    <meta name="author" content="p-themes" />
    <!-- Favicon -->
    <link
      rel="apple-touch-icon"
      sizes="180x180"
      href="assets/images/icons/apple-touch-icon.png"
    />
    <link
      rel="icon"
      type="image/png"
      sizes="32x32"
      href="assets/images/icons/favicon-32x32.png"
    />
    <link
      rel="icon"
      type="image/png"
      sizes="16x16"
      href="assets/images/icons/favicon-16x16.png"
    />
    <link rel="manifest" href="assets/images/icons/site.html" />
    <link
      rel="mask-icon"
      href="assets/images/icons/safari-pinned-tab.svg"
      color="#666666"
    />
    <link rel="shortcut icon" href="assets/images/icons/favicon.ico" />
    <meta name="apple-mobile-web-app-title" content="BerNie's" />
    <meta name="application-name" content="BerNie's" />
    <meta name="msapplication-TileColor" content="#cc9966" />
    <meta
      name="msapplication-config"
      content="assets/images/icons/browserconfig.xml"
    />
    <meta name="theme-color" content="#ffffff" />
    <link
      rel="stylesheet"
      href="assets/vendor/line-awesome/line-awesome/line-awesome/css/line-awesome.min.css"
    />
    <!-- Plugins CSS File -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
    <link
      rel="stylesheet"
      href="assets/css/plugins/owl-carousel/owl.carousel.css"
    />
    <link
      rel="stylesheet"
      href="assets/css/plugins/magnific-popup/magnific-popup.css"
    />
    <link rel="stylesheet" href="assets/css/plugins/jquery.countdown.css" />
    <!-- Main CSS File -->
    <link rel="stylesheet" href="assets/css/style.css" />
    <link rel="stylesheet" href="assets/css/skins/skin-demo-2.css" />
    <link rel="stylesheet" href="assets/css/demos/demo-2.css" />
  </head>

  <body>
    <div class="page-wrapper">
      <header class="header header-2 header-intro-clearance">
        <div class="header-middle">
          <div class="container">
            <div class="header-left">
              <button class="mobile-menu-toggler">
                <span class="sr-only">Toggle mobile menu</span>
                <i class="icon-bars"></i>
              </button>

              <a href="index.html" class="logo">
                <img
                  src="assets/images/demos/demo-2/logo.png"
                  alt="BerNie's Logo"
                  width="105"
                  height="25"
                />
              </a>
            </div>
            <!-- End .header-left -->

            <div class="header-center">
              <div
                class="header-search header-search-extended header-search-visible header-search-no-radius d-none d-lg-block"
              >
                <a href="search.php" class="search-toggle" role="button"
                  ><i class="icon-search"></i
                ></a>
                <form action="search.php" method="post">
                  <div class="header-search-wrapper search-wrapper-wide">
                    <label for="search" class="sr-only">Search</label>
                    <button class="btn btn-primary" type="submit">
                      <i class="icon-search"></i>
                    </button>
                    <label for="q" class="sr-only">Search</label>
                    <input
                      type="search"
                      class="form-control"
                      name="search"
                      id="q"
                      value="<?php echo $search; ?>"
                      placeholder="Search product ..."
                      id="q"
                    />
                    <button class="btn btn-primary" type="submit">
                      <i class="icon-search"></i>
                    </button>
                  </div>
                  <!-- End .header-search-wrapper -->
                </form>
              </div>
              <!-- End .header-search -->
            </div>

            <div class="header-right">
              <div class="account">
                <a href="user_profile.php" title="My account">
                  <div class="icon">
                    <i class="icon-user"></i>
                  </div>
                  <p>Account</p>
                </a>
              </div>

              <!-- End .cart-dropdown -->
            </div>
            <!-- End .header-right -->
          </div>
          <!-- End .container -->
        </div>
        <!-- End .header-middle -->

        <div class="header-bottom sticky-header">
          <div class="container">
            <div class="header-left">
              <div class="dropdown category-dropdown">
                <a
                  href="#"
                  class="dropdown-toggle"
                  role="button"
                  data-toggle="dropdown"
                  aria-haspopup="true"
                  aria-expanded="false"
                  data-display="static"
                  title="Browse Categories"
                >
                  Browse Categories
                </a>

                <div class="dropdown-menu">
                  <nav class="side-nav">
                    <ul class="menu-vertical sf-arrows">
                
                      <?php 
                      $query = "SELECT * from category";
                      $result= mysqli_query($conn,$query);
                      if($result){
                        if(mysqli_num_rows($result) >0){ 
                            
                            while( $row = mysqli_fetch_assoc($result))
                            { 
                                $cat = $row['category'];  
                    echo('<li><a href="categorysearch.php?queryid='.$cat.'">'.$cat.'</a></li>');
                    } }}
                      
                      ?>
                      
                     
                    </ul>
                    <!-- End .menu-vertical -->
                  </nav>
                  <!-- End .side-nav -->
                </div>
                <!-- End .dropdown-menu -->
              </div>
              <!-- End .category-dropdown -->
            </div>
            <!-- End .header-left -->
            <div class="header-center">
              <nav class="main-nav">
                <ul class="menu sf-arrows">
                  <li class="megamenu-container active">
                    <a href="index.php">Home</a>
                  </li>
                  <li>
                    <a href="category.php">Shop</a>
                  </li>
                  <li>
                    <a href="coming-soon.php">coming soon</a>
                  </li>
                  <li>
                    <a href="contact.php">Contact us</a>
                  </li>
                </ul>
              </nav>
              <!-- End .main-nav -->
            </div>
            <!-- End .header-center -->
            <div class="header-right">
              <i class="la la-lightbulb-o"></i>
              <p>Clearance<span class="highlight">&nbsp;Up to 30% Off</span></p>
            </div>
          </div>
          <!-- End .container -->
        </div>
        <!-- End .header-bottom -->
      </header>
      <!-- End .header -->
      <main class="main">
        <div class="intro-slider-container">
          <div
            class="owl-carousel owl-simple owl-light owl-nav-inside"
            data-toggle="owl"
            data-owl-options='{"nav": false}'
          >
                   <div
              class="intro-slide"
              style="
                background-image: url('Admin/<?php echo $location1; ?>');">
           
              <div class="container intro-content">
                <h3 class="intro-subtitle"><?php echo $header1 ?></h3>
                <!-- End .h3 intro-subtitle -->
                <h1 class="intro-title"><?php echo $description1 ?></h1>
                <!-- End .intro-title -->

                <a href="category.php" class="btn btn-primary">
                  <span>Shop Now</span>
                  <i class="icon-long-arrow-right"></i>
                </a>
              </div>
              <!-- End .container intro-content -->
            </div>
            <!-- End .intro-slide -->

            <div
              class="intro-slide"
              style="
                background-image: url('Admin/<?php echo $location1; ?>');">
              "
            >
              <div class="container intro-content">
                <h3 class="intro-subtitle"><?php echo $header1 ?></h3>
                <!-- End .h3 intro-subtitle -->
                <h1 class="intro-title"><?php echo $description1 ?></h1>
                <!-- End .intro-title -->

                <a href="category.php" class="btn btn-primary">
                  <span>Shop Now</span>
                  <i class="icon-long-arrow-right"></i>
                </a>
              </div>
              <!-- End .container intro-content -->
            </div>
            <!-- End .intro-slide -->

            <div
              class="intro-slide"
              style="
                background-image: url('Admin/<?php echo $location1; ?>');">
              "
            >
              <div class="container intro-content">
                <h3 class="intro-subtitle"><?php echo $header1 ?></h3>
                <!-- End .h3 intro-subtitle -->
                <h1 class="intro-title"><?php echo $description1 ?></h1>
                <!-- End .intro-title -->

                <a href="category.php" class="btn btn-primary">
                  <span>Shop Now</span>
                  <i class="icon-long-arrow-right"></i>
                </a>
              </div>
              <!-- End .container intro-content -->
            </div>
            <!-- End .intro-slide -->
          </div>
          <!-- End .owl-carousel owl-simple -->

          <span class="slider-loader text-white"></span
          ><!-- End .slider-loader -->
        </div>
        <!-- End .intro-slider-container -->


        <div class="container">
       
        <div class="bg-light pt-5 pb-10 mb-3">
                <div class="container">
                    <div class="heading heading-center mb-3">
                        <h2 class="title-lg">New Arrivals</h2><!-- End .title -->

                        <ul class="nav nav-pills justify-content-center" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="new-all-link" data-toggle="tab" href="#new-all-tab" role="tab" aria-controls="new-all-tab" aria-selected="true">VARIETY</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="new-women-link" data-toggle="tab" href="#new-women-tab" role="tab" aria-controls="new-women-tab" aria-selected="false">PROMOTIONS</a>
                            </li>
                          
                        </ul>
                    </div><!-- End .heading -->

                    <div class="tab-content tab-content-carousel">
                        <div class="tab-pane tab-pane-shadow p-0 fade show active" id="new-all-tab" role="tabpanel" aria-labelledby="new-all-link">
                            <div class="owl-carousel owl-simple carousel-equal-height" data-toggle="owl" 
                                data-owl-options='{
                                    "nav": false, 
                                    "dots": true,
                                    "margin": 0,
                                    "loop": false,
                                    "responsive": {
                                        "0": {
                                            "items":2
                                        },
                                        "480": {
                                            "items":2
                                        },
                                        "768": {
                                            "items":3
                                        },
                                        "992": {
                                            "items":4
                                        },
                                        "1200": {
                                            "items":4,
                                            "nav": true
                                        }
                                    }
                                }'>
                                <?php
                $query3 = "SELECT * from products order by RAND() limit 10";
                $result3 = mysqli_query($conn,$query3);
                if($result3){
        			if(mysqli_num_rows($result3)> 0){
        				while ($row3  = mysqli_fetch_assoc($result3)) {
        					$id3 = $row3['id'];
        					$productname3 = $row3['productname'];
        					$price3 = $row3['price'];
        					$discount3 = $row3['discount'];
        					$location3 = $row3['location'];
                  $category3 = $row3['category'];
                  
echo '<div class="product product-3 text-center" style="padding:10px; border-radius:10px;">
<figure class="product-media p-10">
    <span class="product-label label-primary">Sale</span>
    <span class="product-label label-sale">shs '.$discount3.'  off</span>
    <a href="product.php?productid='.$id3.'">
        <img src="Admin/'.$location3.'" alt="Product image" class="product-image">
    </a>

</figure><!-- End .product-media -->

<div class="product-body">
    <div class="product-cat">
        <a href="#">'.$category3.'</a>,      
    </div><!-- End .product-cat -->
    <h3 class="product-title"><a href="product.php?productid='.$id3.'">'.$productname3.'</a></h3><!-- End .product-title -->
    <div class="product-price">
        <span class="new-price">SHS '.$price3.'</span>
    </div><!-- End .product-price -->
</div><!-- End .product-body -->
<div class="product-footer">
<div class="product-action">
  
    <a href="product.php?productid='.$id3.'" class=" btn-product btn-outline primary  p-5"><span>quick view</span></a>
</div><!-- End .product-action -->
</div>

</div>';
                }

              }
}
 ?>

                                <!-- End .product -->

                          
                            </div><!-- End .owl-carousel -->
                        </div><!-- .End .tab-pane -->
                        <div class="tab-pane tab-pane-shadow p-0 fade" id="new-women-tab" role="tabpanel" aria-labelledby="new-women-link">
                            <div class="owl-carousel owl-simple carousel-equal-height" data-toggle="owl" 
                                data-owl-options='{
                                    "nav": false, 
                                    "dots": true,
                                    "margin": 0,
                                    "loop": false,
                                    "responsive": {
                                        "0": {
                                            "items":2
                                        },
                                        "480": {
                                            "items":2
                                        },
                                        "768": {
                                            "items":3
                                        },
                                        "992": {
                                            "items":4
                                        },
                                        "1200": {
                                            "items":4,
                                            "nav": true
                                        }
                                    }
                                }'>
                                <?php

$queryl = "SELECT * from deals order by RAND() limit 10";
        $resultl= mysqli_query($conn,$queryl);
        $resl = mysqli_num_rows($resultl);
        if($resl > 0){

          while ($rowl  = mysqli_fetch_assoc($resultl)) {
              $idl = $rowl['id'];
              $productnamel = $rowl['productname'];
              $pricel = $rowl['price'];
              $discountl = $rowl['discount'];
              $locationl = $rowl['location'];
                $categoryl = $rowl['category'];

                echo '<div class="product product-3 text-center" style="padding:10px; border-radius:10px;">
                <figure class="product-media p-10">
                    <span class="product-label label-primary">Sale</span>
                    <span class="product-label label-sale">shs '.$discountl.'  off</span>
                    <a href="product_deal.php?productid='.$idl.'">
                        <img src="Admin/'.$locationl.'" alt="Product image" class="product-image">
                    </a>
                
                </figure><!-- End .product-media -->
                
                <div class="product-body">
                    <div class="product-cat">
                        <a href="#">'.$categoryl.'</a>,      
                    </div><!-- End .product-cat -->
                    <h3 class="product-title"><a href="product_deal.php?productid='.$idl.'">'.$productnamel.'</a></h3><!-- End .product-title -->
                    <div class="product-price">
                        <span class="new-price">SHS '.$pricel.'</span>
                    </div><!-- End .product-price -->
                </div><!-- End .product-body -->
                <div class="product-footer">
                <div class="product-action">
                  
                    <a href="product_deal.php?productid='.$idl.'" class=" btn-product btn-outline primary  p-5"><span>quick view</span></a>
                </div><!-- End .product-action -->
                </div>
                
                </div>';
              }
              }
              
                                       ?>
<!-- End .product -->
                            </div><!-- End .owl-carousel -->
                        </div><!-- .End .tab-pane -->
                    
                    </div><!-- End .tab-content -->
                </div><!-- End .container -->
            </div><!-- End .bg-light -->

            <?php
include 'database.php';
$query6= "SELECT * FROM deeal_time";
$result6 = mysqli_query($conn,$query6);
if($result6){
if(mysqli_num_rows($result6)> 0){

while($row6 = mysqli_fetch_assoc($result6)){
  $id_time = $row6['id'];
$datetimes = $row6['start_time'];
$locationdeal = $row6['location'];
$dec = $row6['url'];
  }
}

}

 ?>

        <div class="bg-light deal-container pt-5 pb-3 mb-5">
          <div class="container">
            <div class="row">
              <div class="col-lg-12">
                <div class="deal">
                  <div class="deal-content">
                    <h4>Limited Quantities</h4>
                    <h2><?php  echo $dec ?></h2>


                    <div class="product-price">
                    
                      <div class="coming-countdown countdown-separator"></div>
                    </div>
                    <!-- End .product-price -->

                    <div class="deal-countdown" data-until="+10h"></div>
                    <!-- End .deal-countdown -->

                    <a href="Category.php" class="btn btn-primary">
                      <span>Shop Now</span><i class="icon-long-arrow-right"></i>
                    </a>
                  </div>
                  <!-- End .deal-content -->
                  <div class="deal-image">
                    <a href="product.html">
                      <img
                        src="Admin/<?php echo $locationdeal; ?>" 
                        alt="image"
                      />
                    </a>
                  </div>
                  <!-- End .deal-image -->
                </div>
                <!-- End .deal -->
              </div>
              <!-- End .col-lg-9 -->

            
            </div>
            <!-- End .row -->
          </div>
          <!-- End .container -->
        </div>
        <!-- End .bg-light -->

        <div class="mb-6"></div>
      

        <div class="container">
          <hr class="mt-1 mb-6" />
        </div>
        <!-- End .container -->

          <div class="container">
                <div class="cta cta-separator cta-border-image cta-half mb-0" style=" background-image: url('Admin/<?php echo $location1; ?>');">
                    <div class="cta-border-wrapper bg-white">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="cta-wrapper cta-text text-center">
                                    <h3 class="cta-title">Shop Social</h3><!-- End .cta-title -->
                                    <p class="cta-desc">Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit amet orci. </p><!-- End .cta-desc -->
                            
                                    <div class="social-icons social-icons-colored justify-content-center">
                                        <a href="#" class="social-icon social-facebook" title="Facebook" target="_blank"><i class="icon-facebook-f"></i></a>
                                        <a href="#" class="social-icon social-twitter" title="Twitter" target="_blank"><i class="icon-twitter"></i></a>
                                        <a href="#" class="social-icon social-instagram" title="Instagram" target="_blank"><i class="icon-instagram"></i></a>
                                        <a href="#" class="social-icon social-youtube" title="Youtube" target="_blank"><i class="icon-youtube"></i></a>
                                        <a href="#" class="social-icon social-pinterest" title="Pinterest" target="_blank"><i class="icon-pinterest"></i></a>
                                    </div><!-- End .soial-icons -->
                                </div><!-- End .cta-wrapper -->
                            </div><!-- End .col-lg-6 -->

                            <div class="col-lg-6">
                                <div class="cta-wrapper text-center">
                                    <h3 class="cta-title">Get the Latest Deals</h3><!-- End .cta-title -->
                                    <p class="cta-desc">and <br>receive <span class="text-primary">$20 coupon</span> for first shopping</p><!-- End .cta-desc -->
                            
                                    <form action="#">
                                        <div class="input-group">
                                            <input type="email" class="form-control" placeholder="Enter your Email Address" aria-label="Email Adress" required>
                                            <div class="input-group-append">
                                                <button class="btn btn-primary btn-rounded" type="submit"><i class="icon-long-arrow-right"></i></button>
                                            </div><!-- .End .input-group-append -->
                                        </div><!-- .End .input-group -->
                                    </form>
                                </div><!-- End .cta-wrapper -->
                            </div><!-- End .col-lg-6 -->
                        </div><!-- End .row -->
                    </div><!-- End .bg-white -->
                </div><!-- End .cta -->
            </div>
      </main>

      <?php include 'footer.php'; ?>
    <script>
    $(function() {
        "use strict";
        if ($.fn.countdown) {
            $('.coming-countdown').countdown({
                until: new Date(<?php echo "'$datetimes'" ?>), // 7th month = August / Months 0 - 11 (January  - December)
                format: 'DHMS',
                padZeroes: true
            });

            // Pause
            // $('.coming-countdown').countdown('pause');
        }
    });
    </script>
