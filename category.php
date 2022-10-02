<?php
session_start();
if(!(isset($_SESSION['id']) && isset($_SESSION['username']) && isset($_SESSION['location']))){
  header('location:login.php');
}
include 'login_head.php';
include 'database.php';
$_SESSION['url'] = $_SERVER['REQUEST_URI'];


$tab_query = "SELECT * FROM category ORDER BY category_id ASC";
$tab_result = mysqli_query($conn, $tab_query);
$tab_menu = '';
$tab_content = '';
$i = 0;
while($row = mysqli_fetch_array($tab_result))
{
 if($i == 0)
 {
  $tab_menu .= '
   <li class="active"><a href="#'.$row["category_id"].'" data-toggle="tab">'.$row["category"].'</a></li>
  ';
  $tab_content .= '
   <div id="'.$row["category_id"].'" class="tab-pane fade in active">
  ';
 }
 else
 {
  $tab_menu .= '
   <li><a href="#'.$row["category_id"].'" data-toggle="tab">'.$row["category"].'</a></li>
  ';
  $tab_content .= '
   <div id="'.$row["category_id"].'" class="tab-pane fade">
  ';
 }
 $product_query = "SELECT * FROM products WHERE category_id = '".$row["category"]."'";
 $product_result = mysqli_query($conn, $product_query);
 while($rowr = mysqli_fetch_array($product_result))
 {
  $id = $rowr['id'];
  $productname = $rowr['productname'];
  $price = $rowr['price'];
  $discount = $rowr['discount'];
  $location = $rowr['location'];
    $category = $rowr['category'];

  $tab_content .= '
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
 $tab_content .= '<div style="clear:both"></div></div>';
 $i++;
}
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

                    <div class="prouducts">
                        <div class="row">

                        <ul class="nav nav-tabs">
   <?php
   echo $tab_menu;
   ?>
   </ul>
   <div class="tab-content">
   <br />
   <?php
   echo $tab_content;
   ?>
   </div>
  </div>

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
                            </div>
                            <div class="widget widget-collapsible">
                                <h3 class="widget-title">
                                    <a data-toggle="collapse" href="#widget-1" role="button" aria-expanded="true" aria-controls="widget-1">
                                        Price
                                    </a>
                                </h3><!-- End .widget-title -->

                                <div class="collapse show" id="widget-1">
                                    <div class="widget-body">
                                        <div class="filter-items filter-items-count">
                                            <div class="filter-item">
                                                <div class="custom-control custom-checkbox">
                                                <input type="hidden" id="hidden_minimum_price" value="0" />
                    <input type="hidden" id="hidden_maximum_price" value="5000000" />
                    <p id="price_show">1000 - 5000000</p>
                    <div id="price_range"></div>
                                                </div><!-- End .custom-checkbox -->
                                               
                                            </div><!-- End .filter-item -->

                                    </div><!-- End .widget-body -->
                                </div><!-- End .collapse -->
                            </div><!-- End .widget -->
<!-- End .widget -->
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
                                                   
<?php
$queryfilter = "SELECT DISTINCT(category) FROM products ORDER BY id DESC";

$results = mysqli_query($conn,$queryfilter);
$res = mysqli_num_rows($results);
if($res > 0){

while ($row  = mysqli_fetch_assoc($results))  {
  ?>
    <input type="checkbox" class="" value="<?php echo $row['category']; ?>"  >
    <label  >  <?php echo $row['category']; ?></label><br />
  
  <?php
  }


}

?>
                                                  </label>
                                                </div><!-- End .custom-checkbox -->
                                               
                                            </div><!-- End .filter-item -->

                                    </div><!-- End .widget-body -->
                                </div><!-- End .collapse -->
                            </div><!-- End .widget -->

                            <div class="widget widget-collapsible">
                                <h3 class="widget-title">
                                    <a data-toggle="collapse" href="#widget-2" role="button" aria-expanded="true" aria-controls="widget-2">
                                        width
                                    </a>
                                </h3><!-- End .widget-title -->

                                <div class="collapse show" id="widget-2">
                                    <div class="widget-body">
                                        <div class="filter-items">
                                            <div class="filter-item">
                                                <div class="custom-control custom-checkbox">
                                                <?php
$queryfilter = "SELECT DISTINCT(width) FROM products ORDER BY id DESC";

$results = mysqli_query($conn,$queryfilter);
$res = mysqli_num_rows($results);
if($res > 0){

while ($row  = mysqli_fetch_assoc($results))
{
  ?>
    <input type="checkbox" class="" value="<?php echo $row['width']; ?>"  >
    <label  >  <?php echo $row['width']; ?>
  </label><br />
  
  <?php
  }
}

?>
                                                </div><!-- End .custom-checkbox -->
                                            </div><!-- End .filter-item -->
                                        
                                        </div><!-- End .filter-items -->
                                    </div><!-- End .widget-body -->
                                </div><!-- End .collapse -->
                            </div><!-- End .widget -->
                            <div class="widget widget-collapsible">
                                <h3 class="widget-title">
                                    <a data-toggle="collapse" href="#widget-2" role="button" aria-expanded="true" aria-controls="widget-2">
                                    height
                                    </a>
                                </h3><!-- End .widget-title -->

                                <div class="collapse show" id="widget-2">
                                    <div class="widget-body">
                                        <div class="filter-items">
                                            <div class="filter-item">
                                                <div class="custom-control custom-checkbox">
                                                <?php
$queryfilter = "SELECT DISTINCT(height) FROM products ORDER BY id DESC";

$results = mysqli_query($conn,$queryfilter);
$res = mysqli_num_rows($results);
if($res > 0){

while ($row  = mysqli_fetch_assoc($results))
{
  ?>
    <input type="checkbox" class="" value="<?php echo $row['height']; ?>"  >
    <label  >  <?php echo $row['height']; ?>
  </label><br />
  
  <?php
  }
}

?>
                                                </div><!-- End .custom-checkbox -->
                                            </div><!-- End .filter-item -->
                                        
                                        </div><!-- End .filter-items -->
                                    </div><!-- End .widget-body -->
                                </div><!-- End .collapse -->
                            </div>
                            <div class="widget widget-collapsible">
                                <h3 class="widget-title">
                                    <a data-toggle="collapse" href="#widget-2" role="button" aria-expanded="true" aria-controls="widget-2">
                                    weight
                                    </a>
                                </h3><!-- End .widget-title -->

                                <div class="collapse show" id="widget-2">
                                    <div class="widget-body">
                                        <div class="filter-items">
                                            <div class="filter-item">
                                                <div class="custom-control custom-checkbox">
                                                <?php
$queryfilter = "SELECT DISTINCT(weight) FROM products ORDER BY id DESC";

$results = mysqli_query($conn,$queryfilter);
$res = mysqli_num_rows($results);
if($res > 0){

while ($row  = mysqli_fetch_assoc($results))
{
  ?>
    <input type="checkbox" class="" value="<?php echo $row['weight']; ?>"  >
    <label  >  <?php echo $row['weight']; ?>
  </label><br />
  
  <?php
  }
}

?>
                                                </div><!-- End .custom-checkbox -->
                                            </div><!-- End .filter-item -->
                                        
                                        </div><!-- End .filter-items -->
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
    <script>
$(document).ready(function(){

    filter_data();

    function filter_data()
    {
        $('.filter_data').html('<div id="loading" style="" ></div>');
        var action = 'fetch_data';
        var minimum_price = $('#hidden_minimum_price').val();
        var maximum_price = $('#hidden_maximum_price').val();
        var height = get_filter('height');
        var weight = get_filter('weight');
        var width = get_filter('width');
        $.ajax({
            url:"fetch_data.php",
            method:"POST",
            data:{action:action, minimum_price:minimum_price, maximum_price:maximum_price, height:height, weight:weight, width:width},
            success:function(data){
                $('.filter_data').html(data);
            }
        });
    }

    function get_filter(class_name)
    {
        var filter = [];
        $('.'+class_name+':checked').each(function(){
            filter.push($(this).val());
        });
        return filter;
    }

    $('.common_selector').click(function(){
        filter_data();
    });

    $('#price_range').slider({
        range:true,
        min:1000,
        max:5000000,
        values:[1000, 5000000],
        step:500,
        stop:function(event, ui)
        {
            $('#price_show').html(ui.values[0] + ' - ' + ui.values[1]);
            $('#hidden_minimum_price').val(ui.values[0]);
            $('#hidden_maximum_price').val(ui.values[1]);
            filter_data();
        }
    });

});
</script>
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
