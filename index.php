
<?php include 'head.php';

?>

<?php
include  'database.php';
$querybanner = "SELECT * from banner";
$resultbanner = mysqli_query($conn,$querybanner);
if($resultbanner){
  if(mysqli_num_rows($resultbanner) > 0){

   while( $rowbanner  = mysqli_fetch_assoc($resultbanner)){
    $header1 = $rowbanner['header'];
    $description1= $rowbanner['description'];
    $location1 = $rowbanner['location'];


}
  }}

 ?>
      <main class="main">

        <!-- End .intro-slider-container -->
        <div class="intro-slider-container mb-0">
            <div class="intro-slider owl-carousel owl-theme owl-nav-inside owl-light" data-toggle="owl" data-owl-options='{"nav": false, "dots": false}'>
                <div class="intro-slide" style="background-image: url(system/pages/<?php echo $location1; ?>);">
                    <div class="container intro-content text-center">
                     
                      <h1 class=" text-white"><?php echo $description1; ?></h1><!-- End .intro-title -->
                        <h3 class="intro-subtitle text-white"><?php echo $header1; ?></h3><!-- End .h3 intro-subtitle -->
                        <a href="category.php" class="btn btn-primary">Discover NOW</a>
                    </div><!-- End .intro-content -->
                </div><!-- End .intro-slide -->
                <div class="intro-slide" style="background-image: url(system/pages/<?php echo $location1; ?>);">
                    <div class="container intro-content text-center">
                    <h1 class=" text-white"><?php echo $description1; ?></h1><!-- End .intro-title -->
                        <h3 class="intro-subtitle text-white"><?php echo $header1; ?></h3><!-- End .h3 intro-subtitle -->
                        <div class="intro-text text-white">Up to 50% off</div><!-- End .intro-text -->
                        <a href="category.php" class="btn btn-primary">Shop NOW</a>
                    </div><!-- End .intro-content -->
                </div><!-- End .intro-slide -->
            </div><!-- End .intro-slider owl-carousel owl-theme -->

            <span class="slider-loader text-white"></span><!-- End .slider-loader -->
        </div><!-- End .intro-slider-container -->
        <div class="container">
          <h2 class="title text-center mb-4">Explore Popular Categories</h2>
          <!-- End .title text-center -->

          <div class="cat-blocks-container">
            <div class="row">
              <div class="col-6 col-sm-4 col-lg-2">
                <a href="category.php" class="cat-block">
                  <figure>
                    <span>
                      <img
                        src="assets/images/demos/demo-4/cats/1.png"
                        alt="Category image"
                      />
                    </span>
                  </figure>

                  <h3 class="cat-block-title">Computer & Laptop</h3>
                  <!-- End .cat-block-title -->
                </a>
              </div>
              <!-- End .col-sm-4 col-lg-2 -->

              <div class="col-6 col-sm-4 col-lg-2">
                <a href="category.php" class="cat-block">
                  <figure>
                    <span>
                      <img
                        src="assets/images/demos/demo-4/cats/2.png"
                        alt="Category image"
                      />
                    </span>
                  </figure>

                  <h3 class="cat-block-title">Digital Cameras</h3>
                  <!-- End .cat-block-title -->
                </a>
              </div>
              <!-- End .col-sm-4 col-lg-2 -->

              <div class="col-6 col-sm-4 col-lg-2">
                <a href="category.php" class="cat-block">
                  <figure>
                    <span>
                      <img
                        src="assets/images/demos/demo-4/cats/3.png"
                        alt="Category image"
                      />
                    </span>
                  </figure>

                  <h3 class="cat-block-title">Smart Phones</h3>
                  <!-- End .cat-block-title -->
                </a>
              </div>
              <!-- End .col-sm-4 col-lg-2 -->

              <div class="col-6 col-sm-4 col-lg-2">
                <a href="category.php" class="cat-block">
                  <figure>
                    <span>
                      <img
                        src="assets/images/demos/demo-4/cats/4.png"
                        alt="Category image"
                      />
                    </span>
                  </figure>

                  <h3 class="cat-block-title">Televisions</h3>
                  <!-- End .cat-block-title -->
                </a>
              </div>
              <!-- End .col-sm-4 col-lg-2 -->

              <div class="col-6 col-sm-4 col-lg-2">
                <a href="category.php" class="cat-block">
                  <figure>
                    <span>
                      <img
                        src="assets/images/demos/demo-4/cats/5.png"
                        alt="Category image"
                      />
                    </span>
                  </figure>

                  <h3 class="cat-block-title">Audio</h3>
                  <!-- End .cat-block-title -->
                </a>
              </div>
              <!-- End .col-sm-4 col-lg-2 -->

              <div class="col-6 col-sm-4 col-lg-2">
                <a href="category.php" class="cat-block">
                  <figure>
                    <span>
                      <img
                        src="assets/images/demos/demo-4/cats/6.png"
                        alt="Category image"
                      />
                    </span>
                  </figure>

                  <h3 class="cat-block-title">Smart Watches</h3>
                  <!-- End .cat-block-title -->
                </a>
              </div>
              <!-- End .col-sm-4 col-lg-2 -->
            </div>
            <!-- End .row -->
          </div>
          <!-- End .cat-blocks-container -->
        </div>
        <!-- End .container -->

        <div class="mb-4"></div>
        <!-- End .mb-4 -->

        <!-- End .container -->

        <div class="mb-3"></div>
        <!-- End .mb-5 -->


        <div class="page-content">
              <div class="video-banner bg-image text-center pt-8 pb-8" style="background-image: url(assets/images/video/bg-2.jpg)">
                  <div class="container">
                    <div class="row">
                      <div class="col-sm-10 offset-sm-1 col-md-8 offset-md-2">
                        <div class="video-poster">
                          <img src="assets/images/video/poster-2.jpg" alt="poster">

                          <?php

                        $query6= "SELECT * FROM deeal_time";
                        $result6 = mysqli_query($conn,$query6);
                        if($result6){
                        if(mysqli_num_rows($result6)> 0){

                        while($row6 = mysqli_fetch_assoc($result6)){
                          $id_time = $row6['id'];
                        $datetimes = $row6['start_time'];
                            $url = $row6['url'];


                          }
                        }

                        }

                         ?>
                          <div class="video-poster-content">
                            <h3 class="h4 video-poster-title text-white">Womens New Arrivals</h3><!-- End .video-poster-title -->


                            <a href="<?php echo $url ?>" class="btn-video btn-iframe"><i class="icon-play"></i></a>
                          </div><!-- End .video-poster-content -->
                        </div><!-- End .video-poster -->
                      </div><!-- End .col-sm-10 offset-sm-1 col-md-10 offset-md-2 -->
                    </div><!-- End .row -->
                  </div><!-- End .container -->
              </div>
                </div>
        <div class="mb-6"></div>
        <!-- End .mb-6 -->


        <!-- End .container -->

        <div class="container">
          <div class="heading text-center mb-3">
            <h2 class="title">Deals & Outlet</h2>
            <!-- End .title -->
            <p class="title-desc">Today’s deal and more</p>
            <!-- End .title-desc -->
          </div>
          <!-- End .heading -->


          <!-- End .more-container -->
        </div>
        <!-- End .container -->

       

        <!-- End .bg-light pt-5 pb-6 -->

        <div class="mb-5"></div>
        <!-- End .mb-5 -->

        <div class="container for-you">
          <div class="heading heading-flex mb-3">
            <div class="heading-left">
              <h2 class="title">Recommendation For You</h2>
              <!-- End .title -->
            </div>
            <!-- End .heading-left -->

            <div class="heading-right">
              <a href="category.php" class="title-link"
                >View All Recommendadion <i class="icon-long-arrow-right"></i
              ></a>
            </div>
            <!-- End .heading-right -->
          </div>
          <!-- End .heading -->

          <div class="products">
            <div class="row justify-content-center">
              <?php
                $query3 = "SELECT * from products order by RAND() limit 12";
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


                  echo'
                  <div class="col-6 col-md-4 col-lg-4 col-xl-3">
                      <div class="product">
                          <figure class="product-media">
                              <span class="product-label label-new">sales</span>
                              <a href="product.html">
                                <a href="product.php?productid='.$id3.'">  <img src="system/pages/'.$location3.'" alt="Product image" class="product-image"></a>
                              </a>



                              <div class="product-action action-icon-top">
                                  <a href="product.php?productid='.$id3.'"class="btn-product btn-cart"><span>view detail</span></a>

                              </div><!-- End .product-action -->

                          </figure><!-- End .product-media -->

                          <div class="product-body">
                              <div class="product-cat">
                                  <a href="#">category :'.$category3.'</a>
                              </div><!-- End .product-cat -->
                              <h3 class="product-title">'.$productname3.'</h3><!-- End .product-title -->
                              <div class="product-price">
                                shs '.$price3.'
                              </div><!-- End .product-price -->

                          </div><!-- End .product-body -->
                      </div><!-- End .product -->
                  </div><!-- End .col-sm-6 col-lg-4 col-xl-3 -->

                  ';


                  }

                  }
}
                                                                  ?>







              <!-- End .col-sm-6 col-md-4 col-lg-3 -->






              <!-- End .col-sm-6 col-md-4 col-lg-3 -->
            </div>
            <!-- End .row -->
          </div>
          <!-- End .products -->
        </div>
        <!-- End .container -->

        <div class="mb-4"></div>
        <!-- End .mb-4 -->

        <div class="container">
          <hr class="mb-0" />
        </div>
        <!-- End .container -->

        <div class="icon-boxes-container bg-transparent">
          <div class="container">
            <div class="row">
              <div class="col-sm-6 col-lg-3">
                <div class="icon-box icon-box-side">
                  <span class="icon-box-icon text-dark">
                    <i class="icon-rocket"></i>
                  </span>
                  <div class="icon-box-content">
                    <h3 class="icon-box-title">Free Shipping</h3>
                    <!-- End .icon-box-title -->
                    <p>Orders $50 or more</p>
                  </div>
                  <!-- End .icon-box-content -->
                </div>
                <!-- End .icon-box -->
              </div>
              <!-- End .col-sm-6 col-lg-3 -->

              <div class="col-sm-6 col-lg-3">
                <div class="icon-box icon-box-side">
                  <span class="icon-box-icon text-dark">
                    <i class="icon-rotate-left"></i>
                  </span>

                  <div class="icon-box-content">
                    <h3 class="icon-box-title">Free Returns</h3>
                    <!-- End .icon-box-title -->
                    <p>Within 30 days</p>
                  </div>
                  <!-- End .icon-box-content -->
                </div>
                <!-- End .icon-box -->
              </div>
              <!-- End .col-sm-6 col-lg-3 -->

              <div class="col-sm-6 col-lg-3">
                <div class="icon-box icon-box-side">
                  <span class="icon-box-icon text-dark">
                    <i class="icon-info-circle"></i>
                  </span>

                  <div class="icon-box-content">
                    <h3 class="icon-box-title">Get 20% Off 1 Item</h3>
                    <!-- End .icon-box-title -->
                    <p>when you sign up</p>
                  </div>
                  <!-- End .icon-box-content -->
                </div>
                <!-- End .icon-box -->
              </div>
              <!-- End .col-sm-6 col-lg-3 -->

              <div class="col-sm-6 col-lg-3">
                <div class="icon-box icon-box-side">
                  <span class="icon-box-icon text-dark">
                    <i class="icon-life-ring"></i>
                  </span>

                  <div class="icon-box-content">
                    <h3 class="icon-box-title">We Support</h3>
                    <!-- End .icon-box-title -->
                    <p>24/7 amazing services</p>
                  </div>
                  <!-- End .icon-box-content -->
                </div>
                <!-- End .icon-box -->
              </div>
              <!-- End .col-sm-6 col-lg-3 -->
            </div>
            <!-- End .row -->
          </div>
          <!-- End .container -->
        </div>
        <!-- End .icon-boxes-container -->
      </main>
      <!-- End .main -->
<?php include 'footer.php'; ?>
