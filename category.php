<?php
session_start();
if(!(isset($_SESSION['id']) && isset($_SESSION['username']) && isset($_SESSION['location']))){
  header('location:login.php');
}
include 'login_head.php';
include 'database.php';
$_SESSION['url'] = $_SERVER['REQUEST_URI'];


?>

        <main class="main">
        	<div class="page-header text-center" style="background-image: url('assets/images/page-header-bg.jpg')">
        		<div class="container">
        			<h1 class="page-title">PRODUCTS <span>SHOP</span></h1>
        		</div><!-- End .container -->
        	</div><!-- End .page-header -->
            <nav aria-label="breadcrumb" class="breadcrumb-nav mb-2">
                <div class="container">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page"><a href="category.php">category</a></li>
                    </ol>
                </div><!-- End .container -->
            </nav><!-- End .breadcrumb-nav -->

            <div class="page-content">
                <div class="container">
        			<div class="toolbox">
        				<div class="toolbox-left">
                            <a href="#" class="sidebar-toggler"><i class="icon-bars"></i>Filters</a>
        				</div><!-- End .toolbox-left -->




        			</div><!-- End .toolbox -->

                    <div class="products">
                        <div class="row">

                          <?php
                      										$queryr = "SELECT * from products order by RAND() limit 50";
                      										$resultr = mysqli_query($conn,$queryr);
                      										$res = mysqli_num_rows($resultr);
                      										if($res > 0){

                      											while ($rowr  = mysqli_fetch_assoc($resultr)) {
                      													$id = $rowr['id'];
                      													$productname = $rowr['productname'];
                      													$price = $rowr['price'];
                      													$discount = $rowr['discount'];
                      													$location = $rowr['location'];
                                                	$category = $rowr['category'];

echo'
<div class="col-6 col-md-4 col-lg-4 col-xl-3">
    <div class="product">
        <figure class="product-media">
            <span class="product-label label-new">New</span>
            <a href="product.html">
              <a href="product.php?productid='.$id.'">  <img src="system/pages/'.$location.'" alt="Product image" class="product-image"></a>
            </a>

            <div class="product-action-vertical">
                <a href="addtochart.php?productid='.$id.'" class="btn-product-icon btn-wishlist btn-expandable"><span>add to chart</span></a>
            </div><!-- End .product-action -->

            <div class="product-action action-icon-top">
                <a href="addtochart.php?productid='.$id.'"class="btn-product btn-cart"><span>add to cart</span></a>
                <a href="product.php?productid='.$id.'"class="btn-product btn-cart"><span>view detail</span></a>

            </div><!-- End .product-action -->
        </figure><!-- End .product-media -->

        <div class="product-body">
            <div class="product-cat">
                <a href="#">category :'.$category.'</a>
            </div><!-- End .product-cat -->
            <h3 class="product-title">'.$productname.'</h3><!-- End .product-title -->
            <div class="product-price">
              shs '.$price.'
            </div><!-- End .product-price -->

        </div><!-- End .product-body -->
    </div><!-- End .product -->
</div><!-- End .col-sm-6 col-lg-4 col-xl-3 -->

';


}

}

                                                ?>


                        </div><!-- End .row -->

                        <div class="load-more-container text-center">
                            <a href="deals.php" class="btn btn-outline-darker btn-load-more">More Products <i class="icon-refresh"></i></a>
                        </div><!-- End .load-more-container -->
                    </div><!-- End .products -->

                    <div class="sidebar-filter-overlay"></div><!-- End .sidebar-filter-overlay -->
                    <aside class="sidebar-shop sidebar-filter">
                        <div class="sidebar-filter-wrapper">
                            <div class="widget widget-clean">
                                <label><i class="icon-close"></i>Filters</label>
                                <a href="#" class="sidebar-filter-clear text-danger">FILTERS UNAVAILABLE</a>
                            </div><!-- End .widget -->
                            <div class="widget widget-collapsible">
                                <h3 class="widget-title">
                                    <a data-toggle="collapse" href="#widget-1" role="button" aria-expanded="true" aria-controls="widget-1">
                                        Category
                                    </a>
                                </h3><!-- End .widget-title -->

                                <div class="collapse show" id="widget-1">
                                    <div class="widget-body">
                                        <div class="filter-items filter-items-count">
                                            <div class="filter-item">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="cat-1">
                                                    <label class="custom-control-label" for="cat-1">Dresses</label>
                                                </div><!-- End .custom-checkbox -->
                                                <span class="item-count">3</span>
                                            </div><!-- End .filter-item -->

                                            <div class="filter-item">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="cat-2">
                                                    <label class="custom-control-label" for="cat-2">T-shirts</label>
                                                </div><!-- End .custom-checkbox -->
                                                <span class="item-count">0</span>
                                            </div><!-- End .filter-item -->

                                            <div class="filter-item">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="cat-3">
                                                    <label class="custom-control-label" for="cat-3">Bags</label>
                                                </div><!-- End .custom-checkbox -->
                                                <span class="item-count">4</span>
                                            </div><!-- End .filter-item -->

                                            <div class="filter-item">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="cat-4">
                                                    <label class="custom-control-label" for="cat-4">Jackets</label>
                                                </div><!-- End .custom-checkbox -->
                                                <span class="item-count">2</span>
                                            </div><!-- End .filter-item -->

                                            <div class="filter-item">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="cat-5">
                                                    <label class="custom-control-label" for="cat-5">Shoes</label>
                                                </div><!-- End .custom-checkbox -->
                                                <span class="item-count">2</span>
                                            </div><!-- End .filter-item -->

                                            <div class="filter-item">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="cat-6">
                                                    <label class="custom-control-label" for="cat-6">Jumpers</label>
                                                </div><!-- End .custom-checkbox -->
                                                <span class="item-count">1</span>
                                            </div><!-- End .filter-item -->

                                            <div class="filter-item">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="cat-7">
                                                    <label class="custom-control-label" for="cat-7">Jeans</label>
                                                </div><!-- End .custom-checkbox -->
                                                <span class="item-count">1</span>
                                            </div><!-- End .filter-item -->

                                            <div class="filter-item">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="cat-8">
                                                    <label class="custom-control-label" for="cat-8">Sportwear</label>
                                                </div><!-- End .custom-checkbox -->
                                                <span class="item-count">0</span>
                                            </div><!-- End .filter-item -->
                                        </div><!-- End .filter-items -->
                                    </div><!-- End .widget-body -->
                                </div><!-- End .collapse -->
                            </div><!-- End .widget -->

                            <div class="widget widget-collapsible">
                                <h3 class="widget-title">
                                    <a data-toggle="collapse" href="#widget-2" role="button" aria-expanded="true" aria-controls="widget-2">
                                        Size
                                    </a>
                                </h3><!-- End .widget-title -->

                                <div class="collapse show" id="widget-2">
                                    <div class="widget-body">
                                        <div class="filter-items">
                                            <div class="filter-item">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="size-1">
                                                    <label class="custom-control-label" for="size-1">XS</label>
                                                </div><!-- End .custom-checkbox -->
                                            </div><!-- End .filter-item -->

                                            <div class="filter-item">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="size-2">
                                                    <label class="custom-control-label" for="size-2">S</label>
                                                </div><!-- End .custom-checkbox -->
                                            </div><!-- End .filter-item -->

                                            <div class="filter-item">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" checked id="size-3">
                                                    <label class="custom-control-label" for="size-3">M</label>
                                                </div><!-- End .custom-checkbox -->
                                            </div><!-- End .filter-item -->

                                            <div class="filter-item">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" checked id="size-4">
                                                    <label class="custom-control-label" for="size-4">L</label>
                                                </div><!-- End .custom-checkbox -->
                                            </div><!-- End .filter-item -->

                                            <div class="filter-item">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="size-5">
                                                    <label class="custom-control-label" for="size-5">XL</label>
                                                </div><!-- End .custom-checkbox -->
                                            </div><!-- End .filter-item -->

                                            <div class="filter-item">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="size-6">
                                                    <label class="custom-control-label" for="size-6">XXL</label>
                                                </div><!-- End .custom-checkbox -->
                                            </div><!-- End .filter-item -->
                                        </div><!-- End .filter-items -->
                                    </div><!-- End .widget-body -->
                                </div><!-- End .collapse -->
                            </div><!-- End .widget -->

                            <div class="widget widget-collapsible">
                                <h3 class="widget-title">
                                    <a data-toggle="collapse" href="#widget-3" role="button" aria-expanded="true" aria-controls="widget-3">
                                        Colour
                                    </a>
                                </h3><!-- End .widget-title -->

                                <div class="collapse show" id="widget-3">
                                    <div class="widget-body">
                                        <div class="filter-colors">
                                            <a href="#" style="background: #b87145;"><span class="sr-only">Color Name</span></a>
                                            <a href="#" style="background: #f0c04a;"><span class="sr-only">Color Name</span></a>
                                            <a href="#" style="background: #333333;"><span class="sr-only">Color Name</span></a>
                                            <a href="#" class="selected" style="background: #cc3333;"><span class="sr-only">Color Name</span></a>
                                            <a href="#" style="background: #3399cc;"><span class="sr-only">Color Name</span></a>
                                            <a href="#" style="background: #669933;"><span class="sr-only">Color Name</span></a>
                                            <a href="#" style="background: #f2719c;"><span class="sr-only">Color Name</span></a>
                                            <a href="#" style="background: #ebebeb;"><span class="sr-only">Color Name</span></a>
                                        </div><!-- End .filter-colors -->
                                    </div><!-- End .widget-body -->
                                </div><!-- End .collapse -->
                            </div><!-- End .widget -->

                            <div class="widget widget-collapsible">
                                <h3 class="widget-title">
                                    <a data-toggle="collapse" href="#widget-4" role="button" aria-expanded="true" aria-controls="widget-4">
                                        Brand
                                    </a>
                                </h3><!-- End .widget-title -->

                                <div class="collapse show" id="widget-4">
                                    <div class="widget-body">
                                        <div class="filter-items">
                                            <div class="filter-item">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="brand-1">
                                                    <label class="custom-control-label" for="brand-1">Next</label>
                                                </div><!-- End .custom-checkbox -->
                                            </div><!-- End .filter-item -->

                                            <div class="filter-item">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="brand-2">
                                                    <label class="custom-control-label" for="brand-2">River Island</label>
                                                </div><!-- End .custom-checkbox -->
                                            </div><!-- End .filter-item -->

                                            <div class="filter-item">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="brand-3">
                                                    <label class="custom-control-label" for="brand-3">Geox</label>
                                                </div><!-- End .custom-checkbox -->
                                            </div><!-- End .filter-item -->

                                            <div class="filter-item">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="brand-4">
                                                    <label class="custom-control-label" for="brand-4">New Balance</label>
                                                </div><!-- End .custom-checkbox -->
                                            </div><!-- End .filter-item -->

                                            <div class="filter-item">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="brand-5">
                                                    <label class="custom-control-label" for="brand-5">UGG</label>
                                                </div><!-- End .custom-checkbox -->
                                            </div><!-- End .filter-item -->

                                            <div class="filter-item">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="brand-6">
                                                    <label class="custom-control-label" for="brand-6">F&F</label>
                                                </div><!-- End .custom-checkbox -->
                                            </div><!-- End .filter-item -->

                                            <div class="filter-item">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="brand-7">
                                                    <label class="custom-control-label" for="brand-7">Nike</label>
                                                </div><!-- End .custom-checkbox -->
                                            </div><!-- End .filter-item -->

                                        </div><!-- End .filter-items -->
                                    </div><!-- End .widget-body -->
                                </div><!-- End .collapse -->
                            </div><!-- End .widget -->

                            <div class="widget widget-collapsible">
                                <h3 class="widget-title">
                                    <a data-toggle="collapse" href="#widget-5" role="button" aria-expanded="true" aria-controls="widget-5">
                                        Price
                                    </a>
                                </h3><!-- End .widget-title -->

                                <div class="collapse show" id="widget-5">
                                    <div class="widget-body">
                                        <div class="filter-price">
                                            <div class="filter-price-text">
                                                Price Range:
                                                <span id="filter-price-range"></span>
                                            </div><!-- End .filter-price-text -->

                                            <div id="price-slider"></div><!-- End #price-slider -->
                                        </div><!-- End .filter-price -->
                                    </div><!-- End .widget-body -->
                                </div><!-- End .collapse -->
                            </div><!-- End .widget -->
                        </div><!-- End .sidebar-filter-wrapper -->
                    </aside><!-- End .sidebar-filter -->
                </div><!-- End .container -->
            </div><!-- End .page-content -->
        </main><!-- End .main -->


      <footer class="footer">
       
        
          <!-- End .container -->
        </div>
        <!-- End .cta -->
        <div class="footer-middle">
          <div class="container">
            <div class="row">
              <div class="col-sm-6 col-lg-3">
                <div class="widget widget-about">
                  <img
                    src="assets/images/demos/demo-4/logo-footer.png"
                    class="footer-logo"
                    alt="Footer Logo"
                    width="105"
                    height="25"
                  />
                  <p>
                At  ShOpLeXUG, We offer better and good quality products and services to all our Customers
                  </p>

                  <div class="widget-call">
                    <i class="icon-phone"></i>
                    Got Question? Call us 24/7
                    <a href="tel:#">+256 784 292153</a>
                        <a href="tel:#">+256 759143703</a>
                  </div>
                  <!-- End .widget-call -->
                </div>
                <!-- End .widget about-widget -->
              </div>
              <!-- End .col-sm-6 col-lg-3 -->

              <div class="col-sm-6 col-lg-3">
                <div class="widget">
                  <h4 class="widget-title">Useful Links</h4>
                  <!-- End .widget-title -->

                  <ul class="widget-list">
                    <li><a href="about.php">About ShOpLeXUG</a></li>
                    <li><a href="about.php">Our Services</a></li>

                    <li><a href="contact.php">Contact us</a></li>
                  </ul>
                  <!-- End .widget-list -->
                </div>
                <!-- End .widget -->
              </div>
              <!-- End .col-sm-6 col-lg-3 -->

              <div class="col-sm-6 col-lg-3">
                <div class="widget">
                  <h4 class="widget-title">Customer Service</h4>
                  <!-- End .widget-title -->

                  <ul class="widget-list">
                    <h6 class="text-third">information about the items below is </h6>
                    <li><a href="#">Payment Methods</a></li>
                    <li><a href="#">Money-back guarantee!</a></li>
                    <li><a href="#">Returns</a></li>
                    <li><a href="#">Shipping</a></li>
                    <li><a href="#">Terms and conditions</a></li>
                    <li><a href="#">Privacy Policy</a></li>
                  </ul>
                  <!-- End .widget-list -->
                </div>
                <!-- End .widget -->
              </div>
              <!-- End .col-sm-6 col-lg-3 -->

              <div class="col-sm-6 col-lg-3">
                <div class="widget">
                  <a href="user_profile.php"><h4 class="widget-title">My Account</h4></a>
                  <!-- End .widget-title -->

                  <ul class="widget-list">
                    <li><a href="login.php">Sign In</a></li>

                    <li><a href="contact.php">Help</a></li>
                  </ul>
                  <!-- End .widget-list -->
                </div>
                <!-- End .widget -->
              </div>
              <!-- End .col-sm-6 col-lg-3 -->
            </div>
            <!-- End .row -->
          </div>
          <!-- End .container -->
        </div>
        <!-- End .footer-middle -->

        <div class="footer-bottom">
          <div class="container">
            <p class="footer-copyright">
            copyright  © <script>
                  document.write(new Date().getFullYear())
                </script>,
               ShOpLeXUG
            </p>
            <!-- End .footer-copyright -->
            <figure class="footer-payments">
              <img
                src="assets/images/payments.png"
                alt="Payment methods"
                width="272"
                height="20"
              />
            </figure>
            <!-- End .footer-payments -->
          </div>
          <!-- End .container -->
        </div>
        <!-- End .footer-bottom -->
      </footer>
      <!-- End .footer -->
    </div>
    <!-- End .page-wrapper -->
    <button id="scroll-top" title="Back to Top">
      <i class="icon-arrow-up"></i>
    </button>

    <!-- Mobile Menu -->
    <div class="mobile-menu-overlay"></div>
    <!-- End .mobil-menu-overlay -->

    <div class="mobile-menu-container mobile-menu-light">
      <div class="mobile-menu-wrapper">
        <span class="mobile-menu-close"><i class="icon-close"></i></span>

        <form action="search.php" method="post" class="mobile-search">
          <label for="mobile-search" class="sr-only">Search</label>
          <input
            type="search"
            class="form-control"
            name="search"
            value="<?php echo $search; ?>"
            id="mobile-search"
            placeholder="Search in..."
            required
          />
          <button class="btn btn-primary" type="submit">
            <i class="icon-search"></i>
          </button>
        </form>

        <ul class="nav nav-pills-mobile nav-border-anim" role="tablist">
          <li class="nav-item">
            <a
              class="nav-link active"
              id="mobile-menu-link"
              data-toggle="tab"
              href="#mobile-menu-tab"
              role="tab"
              aria-controls="mobile-menu-tab"
              aria-selected="true"
              >Menu</a
            >
          </li>
          <li class="nav-item">
            <a
              class="nav-link"
              id="mobile-cats-link"
              data-toggle="tab"
              href="#mobile-cats-tab"
              role="tab"
              aria-controls="mobile-cats-tab"
              aria-selected="false"
              >Categories</a
            >
          </li>
        </ul>

        <div class="tab-content">
          <div
            class="tab-pane fade show active"
            id="mobile-menu-tab"
            role="tabpanel"
            aria-labelledby="mobile-menu-link"
          >
            <nav class="mobile-nav">
              <ul class="mobile-menu">
                <li class="active">
                  <a href="index.php">Home</a>

                </li>
                <li>
                  <a href="category.php" >Shop</a>
                </li>
                <li>
                  <a href="user_profile.php" >Profile</a>
                </li>

                <li>
                  <a href="coming-soon.php" >coming soon</a>
                </li>
                <li>
                  <a href="contact.php" >Contact us</a>
                </li>
                <li>
                  <a href="login.php" >LOGIN</a>
                </li>
                  </ul>
                </li>


              </ul>
            </nav>
            <!-- End .mobile-nav -->
          </div>
          <!-- .End .tab-pane -->



            <!-- End .mobile-cats-nav -->
          </div>
          <!-- .End .tab-pane -->
        </div>
        <!-- End .tab-content -->

        <div class="social-icons">
          <a href="#" class="social-icon" target="_blank" title="Facebook"
            ><i class="icon-facebook-f"></i
          ></a>
          <a href="#" class="social-icon" target="_blank" title="Twitter"
            ><i class="icon-twitter"></i
          > </a>
          <a href="https://instagram.com/ShOpLeXUG" class="social-icon" target="_blank" title="Instagram"
            ><i class="icon-instagram"></i
          ></a>
          <a href="#" class="social-icon" target="_blank" title="Youtube"
            ><i class="icon-youtube"></i
          ></a>
        </div>
        <!-- End .social-icons -->
      </div>
      <!-- End .mobile-menu-wrapper -->
    </div>
    <!-- End .mobile-menu-container -->

    </div><!-- End .modal -->

    <!-- Plugins JS File -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/jquery.hoverIntent.min.js"></script>
    <script src="assets/js/jquery.waypoints.min.js"></script>
    <script src="assets/js/superfish.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/wNumb.js"></script>
    <script src="assets/js/bootstrap-input-spinner.js"></script>
    <script src="assets/js/jquery.magnific-popup.min.js"></script>
    <script src="assets/js/nouislider.min.js"></script>
    <!-- Main JS File -->
    <script src="assets/js/main.js"></script>
</body>


<!-- molla/category-boxed.html  22 Nov 2019 10:03:02 GMT -->
</html>
