<?php
session_start();
$_SESSION['url'] = $_SERVER['REQUEST_URI'];

if(!(isset($_SESSION['id']) && isset($_SESSION['username']) && isset($_SESSION['location']))){
  header('location:login.php');
}

include 'database.php';
$id = $_GET['productid'];
$query1= "SELECT * FROM deals where id = $id";
$result1 = mysqli_query($conn,$query1);
if ($result1){

while($row = mysqli_fetch_assoc($result1)){
  $productname = $row['productname'];
  $price = $row['price'];
  $discount = $row['discount'];
  $locationnew = $row['location'];
  $category = $row['category'];
  $description = $row['description'];
  $detaildescription = $row['detaildescription'];
  $width = $row['width'];
  $height = $row['height'];
  $packaging =$row['packaging'];
        $weight =$row['weight'];
          $cname =$row['cname'];
            $cnumber =$row['cnumber'];
              $cemail =$row['cemail'];
                $comment =$row['comment'];
}



}

?>

<?php
$cname= "";
$cemail= "";
$cnumber= "";
$comment= "";

$errors = array();

if(isset($_POST['comments'])){

  // receive all input values from the form to preventig injection
  $cname= mysqli_real_escape_string($conn, $_POST['cname']);
  $cemail = mysqli_real_escape_string($conn, $_POST['cemail']);
  $comment = mysqli_real_escape_string($conn, $_POST['comment']);
  $cnumber = mysqli_real_escape_string($conn, $_POST['cnumber']);


          //errors for the form
          if(empty($cname))
          {array_push($errors,"username required or invalid username length");}

          if(empty($cemail) || !preg_match("/^\w+([-+.']\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*$/", $cemail))
          {array_push($errors,"email required or invalid email format");}

if(empty($cname)&& empty($cemail)&& empty($comment) && empty($cnumber)){
  array_push($errors,"please fill in fields ");
}

                      if(empty($comment) )
                      {array_push($errors,"please enter comment");}


                                  if(empty($cnumber))
                                  {array_push($errors," password missmatch");}

              if (count($errors) == 0) {
$query = "UPDATE products SET comment = '$comment',cname = '$cname', cemail = '$cemail', cnumber = '$cnumber' WHERE id = '$id'";
                                            $res =     mysqli_query($conn,$query);
                                                if($res){
                                                echo('<div class="p-3 mb-2 alert alert-success text-white alert" role="alert" style=" position:relative; top:200px; width:80%;">COMMENT UPLOADED SUCCESSFULLY. click <a href="category.php">HERE</a> to continue shoping</div>');
                                                  }
                                              else{
                                            echo('<div class="p-3 mb-2 alert alert-danger text-white alert" role="alert" style="position:relative; top:200px; width:80%;">COMMENT UPLOAD failed. click <a href="category.php">HERE</a> to continue shoping</div>');
                                                }

                                        }

                                    }


?>





<!DOCTYPE html>
<html lang="en">


<!-- molla/product-gallery.html  22 Nov 2019 10:03:27 GMT -->
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
    <link rel="stylesheet" href="assets/css/plugins/owl-carousel/owl.carousel.css">
    <link rel="stylesheet" href="assets/css/plugins/magnific-popup/magnific-popup.css">
    <!-- Main CSS File -->
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/plugins/nouislider/nouislider.css">
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
                          </ul>
                        </nav><!-- End .main-nav -->
                    </div><!-- End .header-left -->

                    <div class="header-right">
                        <div class="header-search">
                            <a href="#" class="search-toggle" role="button" title="Search"><i class="icon-search"></i></a>
                            <form action="search.php" method="post">
                                <div class="header-search-wrapper">
                                    <label for="search" class="sr-only">Search</label>
                                    <input type="search" class="form-control" name="search" id="q" placeholder="Search in..." required>
                                </div><!-- End .header-search-wrapper -->
                            </form>
                        </div><!-- End .header-search -->


                        <div class="dropdown cart-dropdown">
                            <a href="#" class="dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static">
                                <i class="icon-shopping-cart"></i>
                                <span class="cart-count">
                                  <?php
                                  if((isset($_SESSION['id']) && isset($_SESSION['username']) && isset($_SESSION['location']))){
                                    include 'database.php';
                                    $sql23 = "SELECT * from users where id = {$_SESSION['id']} ";
                                    $res23 = mysqli_query($conn,$sql23);

                                    if($res23){
                                      while($rows = mysqli_fetch_assoc($res23)){
                                        $username = $rows['username'];
                                        $query = "SELECT COUNT(productname) FROM cart where username = '$username'";
                                      $result = mysqli_query($conn,$query);
                                      $rows = mysqli_fetch_row($result);
                                      $total=  $rows[0];
                                      echo $total;
                                      }
                                  }
                                  }else{
                                    echo 0;
                                  }

                                   ?>


                                </span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right " style="overflow:auto;height:auto;">
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
                                                                        <img src="Admin/'.$location.'" alt="product">
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
                                      <img src="Admin/'.$locationdeals.'" alt="product">
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


        <main class="main">
            <div class="page-content">
                <div class="product-details-top">
                    <div class="bg-light pb-5 mb-4">
                        <nav aria-label="breadcrumb" class="breadcrumb-nav border-0 mb-0">
                            <div class="container d-flex align-items-center">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                    <li class="breadcrumb-item"><a href="#">Products</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Gallery</li>
                                </ol>

                                <nav class="product-pager ml-auto" aria-label="Product">
                                    <a class="product-pager-link product-pager-prev" href="#" aria-label="Previous" tabindex="-1">
                                        <i class="icon-angle-left"></i>
                                        <span>Prev</span>
                                    </a>

                                    <a class="product-pager-link product-pager-next" href="#" aria-label="Next" tabindex="-1">
                                        <span>Next</span>
                                        <i class="icon-angle-right"></i>
                                    </a>
                                </nav><!-- End .pager-nav -->
                            </div><!-- End .container -->
                        </nav><!-- End .breadcrumb-nav -->
                        <div class="container">
                            <div class="product-gallery-carousel owl-carousel owl-full owl-nav-dark">
                                <figure class="product-gallery-image">

                                  	<?php echo('<img src="Admin/'.$locationnew.'" data-zoom-image="'.$locationnew.'" alt="product image">'); ?>

                                </figure><!-- End .product-gallery-image -->

                                <figure class="product-gallery-image">
	<?php echo('<img src="'.$locationnew.'" data-zoom-image="Admin/'.$locationnew.'" alt="product image">'); ?>
                       </figure><!-- End .product-gallery-image -->

                                <figure class="product-gallery-image">
                                  	<?php echo('<img src="Admin/'.$locationnew.'" data-zoom-image="'.$locationnew.'" alt="product image">'); ?>
                                </figure><!-- End .product-gallery-image -->

                                <figure class="product-gallery-image">
                                  	<?php echo('<img src="Admin/'.$locationnew.'" data-zoom-image="'.$locationnew.'" alt="product image">'); ?>
                                </figure><!-- End .product-gallery-image -->
                            </div><!-- End .owl-carousel -->
                        </div><!-- End .container -->
                    </div><!-- End .bg-light pb-5 -->

                    <div class="product-details product-details-centered product-details-separator">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-6">
                                    <?php echo '<h1 class="product-title">'.$productname.'</h1>' ?><!-- End .product-title -->


                                    <div class="product-price">

                                    </div><!-- End .product-price -->

                                    <div class="product-content">
                <?php echo '  <p>'.$description.'</p>'; ?>
                                    </div><!-- End .product-content -->


                                    <div class="details-filter-row details-row-size mb-md-1">
                                        <label>PRICE: discount</label>

                                        <div class="product-size">
                                            <a href="#" title="price">  <?php echo'<p>'.$price.' </p> ' ?></a>

                                            <a href="#" title="discount" class="active">  <?php echo'<p>'.$discount.' </p> ' ?></a>

                                        </div><!-- End .product-size -->

                                    </div><!-- End .details-filter-row -->
                                </div><!-- End .col-md-6 -->

                                <div class="col-md-6">
                                    <div class="product-details-action">
                                        <div class="details-action-col">
                                            <a href="addtochartdeal.php?productid= <?php echo $id; ?>"class="btn-product btn-cart"><span>ADD TO CART</span></a>
                                        </div><!-- End .details-action-col -->
                                        <div class="details-action-col">
                                            <a href="checkout_deal.php?productid= <?php echo $id; ?>"class="btn-product btn-cart"><span>CHECKOUT</span></a>
                                        </div><!-- End .details-action-col -->

                              <!-- End .details-action-wrapper -->
                                    </div><!-- End .product-details-action -->

                                    <div class="product-details-footer details-footer-col">
                                        <div class="product-cat">
                                            <span>Category:</span>
                                              <?php echo'<p>'.$category.' </p> ' ?>


                                        </div><!-- End .product-cat -->

                                        <div class="social-icons social-icons-sm">
                                            <span class="social-label">Share:</span>
                                            <a href="#" class="social-icon" title="Facebook" target="_blank"><i class="icon-facebook-f"></i></a>
                                            <a href="#" class="social-icon" title="Twitter" target="_blank"><i class="icon-twitter"></i></a>
                                            <a href="#" class="social-icon" title="Instagram" target="_blank"><i class="icon-instagram"></i></a>
                                            <a href="#" class="social-icon" title="Pinterest" target="_blank"><i class="icon-pinterest"></i></a>
                                        </div>
                                    </div><!-- End .product-details-footer -->
                                </div><!-- End .col-md-6 -->
                            </div><!-- End .row -->
                        </div><!-- End .container -->
                    </div><!-- End .product-details -->
                </div><!-- End .product-details-top -->

                <div class="container">
                    <div class="product-details-tab">
                        <ul class="nav nav-pills justify-content-center" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="product-desc-link" data-toggle="tab" href="#product-desc-tab" role="tab" aria-controls="product-desc-tab" aria-selected="true">Description</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="product-info-link" data-toggle="tab" href="#product-info-tab" role="tab" aria-controls="product-info-tab" aria-selected="false">Additional information</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="product-shipping-link" data-toggle="tab" href="#product-shipping-tab" role="tab" aria-controls="product-shipping-tab" aria-selected="false">Shipping & Returns</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="product-review-link" data-toggle="tab" href="#product-review-tab" role="tab" aria-controls="product-review-tab" aria-selected="false">Reviews (2)</a>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane fade show active" id="product-desc-tab" role="tabpanel" aria-labelledby="product-desc-link">
                                <div class="product-desc-content">
                                    <h3>Product Information</h3>
                                      <p><?php echo $detaildescription; ?></p>
                                </div><!-- End .product-desc-content -->
                            </div><!-- .End .tab-pane -->
                            <div class="tab-pane fade" id="product-info-tab" role="tabpanel" aria-labelledby="product-info-link">
                                <div class="product-desc-content">
                                    <h3>Information</h3>
					<div class="table-responsive">
						<table class="table">
							<tbody>
								<tr>
									<td>
										<h5>Width</P>
									</td>
									<td>
									<?php echo '	<P>'.$width.'</P>'; ?>
									</td>
								</tr>
								<tr>
									<td>
										<P>Height</P>
									</td>
									<td>
									<?php echo '	<P>'.$height.'</P>'; ?>
									</td>
								</tr>
							
						
									<td>
										<P>Weight</P>
									</td>
									<td>
										<?php echo '	<P>'.$weight.'</P>'; ?>
									</td>
								</tr>
								<tr>
									<td>
										<P>Quality checking</P>
									</td>
									<td>
										<h5>passed</h5>
									</td>
								</tr>

								<tr>
									<td>
										<h5>When packaging</h5>
									</td>
									<td>
														<?php echo '	<P>'.$packaging.'</P>'; ?>
									</td>
								</tr>

							</tbody>
						</table>
					</div>

                                </div><!-- End .product-desc-content -->
                            </div><!-- .End .tab-pane -->
                            <div class="tab-pane fade" id="product-shipping-tab" role="tabpanel" aria-labelledby="product-shipping-link">
                                <div class="product-desc-content">
                                    <h3>Delivery & returns</h3>
                                    <p>We deliver to over 10 districts around the UGANDA. For full details of the delivery options we offer, please view our <a href="#">Delivery information</a><br>
                                    We hope you’ll love every purchase, but if you ever need to return an item you can do so within a month of receipt. For full details of how to make a return, please view our <a href="#">Returns information</a></p>
                                </div><!-- End .product-desc-content -->
                            </div><!-- .End .tab-pane -->
                              <div class="tab-pane fade" id="product-review-tab" role="tabpanel" aria-labelledby="product-review-link">
    <div class="row">
      <div class="col-lg-6">
        <div class="comment_list">
<h1>last review</h1>
          <div class="review_item">
            <div class="media">

              <div class="media-body">
        <?php echo '<h4>'.$cname.'</h4>'; ?>
              <?php echo '<h4>'.$cemail.'</h4>'; ?>
                    <?php echo '<h4>'.$cnumber.'</h4>'; ?>

              </div>
            </div>
            <?php echo '<p>COMMENT::'.$comment.'</p>'; ?>
          </div>


        </div>
      </div>
      <div class="col-lg-6">
        <div class="review_box">
          <h4>Post a comment</h4>
<?php include 'errors.php'; ?>
          <form class="row contact_form" method="post" id="contactForm" >

            <div class="col-md-12">
              <div class="form-group">
                <input type="text" class="form-control" id="name" name="cname" placeholder="Your Full name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Your Full name'">
              </div>
            </div>
            <div class="col-md-12">
              <div class="form-group">
                <input type="email" class="form-control" id="email" name="cemail" placeholder="Email Address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email Address'">
              </div>
            </div>
            <div class="col-md-12">
              <div class="form-group">
                <input type="number" class="form-control" id="number" name="cnumber" placeholder="Phone Number" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Phone Number'">
              </div>
            </div>
            <div class="col-md-12">
              <div class="form-group">
                <textarea class="form-control" name="comment" id="message" rows="1" placeholder="Review" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Review'"></textarea></textarea>
              </div>
            </div>
            <div class="col-md-12 text-right">
              <button type="submit" value="submit" name="comments" class="btn-secondary">Submit Now</button>
            </div>
          </form>
        </div>
      </div>
    </div>

                            </div><!-- .End .tab-pane -->
                        </div><!-- End .tab-content -->
                    </div><!-- End .product-details-tab -->
                </div><!-- End .container -->

                <div class="container">
                    <h2 class="title text-center mb-4">You May Also Like</h2><!-- End .title text-center -->
                    <div class="owl-carousel owl-simple carousel-equal-height carousel-with-shadow" data-toggle="owl"
                        data-owl-options='{
                            "nav": false,
                            "dots": true,
                            "margin": 20,
                            "loop": false,
                            "responsive": {
                                "0": {
                                    "items":1
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
                                    "nav": true,
                                    "dots": false
                                }
                            }
                        }' >


                        <?php

                                $queryl = "SELECT * from products order by RAND() limit 10";
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
echo '

<div class="product product-7 text-center">
    <figure class="product-media">
        <span class="product-label label-new">New</span>
        <a href="product.php?productid='.$idl.'">
  <a href="product.php?productid='.$idl.'">  <img src="'.$locationl.'" alt="Product image" class="product-image"></a>        </a>

        <div class="product-action-vertical">

        <a href="addtochart.php?productid='.$idl.'" class="btn-product-icon btn-wishlist btn-expandable"><span>add to cart</span></a>
        </div><!-- End .product-action-vertical -->

        <div class="product-action">
            <a href="addtochart.php?productid='.$idl.'" class="btn-product btn-cart"><span>add to cart</span></a>
        </div><!-- End .product-action -->
    </figure><!-- End .product-media -->

    <div class="product-body">
        <div class="product-cat">
            <a href="#">category :'.$categoryl.'</a>
        </div><!-- End .product-cat -->
        <h3 class="product-title">'.$productnamel.'</h3><!-- End .product-title -->
        <div class="product-price">
          shs '.$pricel.'
          discounted by '.$discount.'
        </div><!-- End .product-price -->

    </div><!-- End .product-body -->
</div><!-- End .product -->


';


}
}

                         ?>




                    </div><!-- End .owl-carousel -->
                </div><!-- End .container -->
            </div><!-- End .page-content -->
        </main><!-- End .main -->
<?php include 'other_footer.php'; ?>
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/bootstrap.bundle.min.js"></script>
<script src="assets/js/jquery.hoverIntent.min.js"></script>
<script src="assets/js/jquery.waypoints.min.js"></script>
<script src="assets/js/superfish.min.js"></script>
<script src="assets/js/owl.carousel.min.js"></script>
<script src="assets/js/bootstrap-input-spinner.js"></script>
<script src="assets/js/jquery.elevateZoom.min.js"></script>
<script src="assets/js/bootstrap-input-spinner.js"></script>
<script src="assets/js/jquery.magnific-popup.min.js"></script>
<!-- Main JS File -->
<script src="assets/js/main.js"></script>
