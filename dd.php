<div class="intro-slider-container mb-5">
  <div
    class="intro-slider owl-carousel owl-theme owl-nav-inside owl-light"
    data-toggle="owl"
    data-owl-options='{
                "dots": true,
                "nav": false,
                "responsive": {
                    "1200": {
                        "nav": true,
                        "dots": false
                    }
                }
            }'
  >
  <?php echo '  <div
      class="intro-slide"
      style="
        background-image: url(system/pages/'.$location1.');
      "
    >'; ?>
      <div class="container intro-content">
        <div class="row justify-content-end">
          <div class="col-auto col-sm-7 col-md-6 col-lg-5">
          <?php echo '  <h3 class="intro-subtitle text-third " >
            '.$header1.'
            </h3>' ?>
            <!-- End .h3 intro-subtitle -->
          <?php echo '  <h1 class="intro-title text-primary " >'.$description1.'</h1>' ?>

            <!-- End .intro-title -->

            <div class="intro-price">
              <sup class="intro-old-price text-danger">discounted</sup>
              <span class="text-third" > prices<sup>at</sup> </span>
            </div>
            <!-- End .intro-price -->

            <a href="category.php" class="btn btn-primary btn-round">
              <span>Shop More</span>
              <i class="icon-long-arrow-right"></i>
            </a>
          </div>
          <!-- End .col-lg-11 offset-lg-1 -->
        </div>
        <!-- End .row -->
      </div>
      <!-- End .intro-content -->
    </div>
    <!-- End .intro-slide -->
    <?php

    $query2 = "SELECT * from deals limit 1";
    $result2 = mysqli_query($conn,$query2);
    if($result2){
      if(mysqli_num_rows($result2) > 0){

       while( $row2  = mysqli_fetch_assoc($result2)){
        $productname = $row2['productname'];
                  $price= $row2['price'];
                      $discount= $row2['discount'];
        $description= $row2['description'];
        $location2 = $row2['location'];


    }
      }}

     ?>
     <?php echo '  <div
         class="intro-slide"
         style="
           background-image: url(system/pages/'.$location2.');
         "
       >'; ?>
      <div class="container intro-content">
        <div class="row justify-content-end">
          <div class="col-auto col-sm-7 col-md-6 col-lg-5">
            <h3 class="intro-subtitle text-primary">New Arrival</h3>

            <?php echo '     <h3 class="intro-subtitle text-primary">  discountd by  '.$discount.'</h3>' ?>
            <!-- End .h3 intro-subtitle -->
      <?php echo '    <h1 class="intro-title">

        '.$productname.'
          </h1>' ?>
            <!-- End .intro-title -->

            <div class="intro-price">
              <sup>Today:</sup>
            <?php echo '  <span class="text-primary">'.$price.' </span>'; ?>
            </div>
            <!-- End .intro-price -->

            <a href="category.php" class="btn btn-primary btn-round">
              <span>Shop More</span>
              <i class="icon-long-arrow-right"></i>
            </a>
          </div>
          <!-- End .col-md-6 offset-md-6 -->
        </div>
        <!-- End .row -->
      </div>
      <!-- End .intro-content -->
    </div>
    <!-- End .intro-slide -->
  </div>
  <!-- End .intro-slider owl-carousel owl-simple -->





  <span class="slider-loader"></span
  ><!-- End .slider-loader -->
</div>
