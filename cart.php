<?php
session_start();
if(!(isset($_SESSION['id']) && isset($_SESSION['username']) && isset($_SESSION['location']))){
  header('location:login.php');
}
 include 'login_head.php';
$_SESSION['url'] = $_SERVER['REQUEST_URI'];
$username = $_SESSION['username'];
 ?>

        <main class="main">
        	<div class="page-header text-center" style="background-image: url('assets/images/page-header-bg.jpg')">
        		<div class="container">
        			<h1 class="page-title">Shopping Cart<span>Shop</span></h1>
        		</div><!-- End .container -->
        	</div><!-- End .page-header -->
            <nav aria-label="breadcrumb" class="breadcrumb-nav">
                <div class="container">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                        <li class="breadcrumb-item"><a href="category.php">Shop</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Shopping Cart</li>
                    </ol>
                </div><!-- End .container -->
            </nav><!-- End .breadcrumb-nav -->

            <div class="page-content">
            	<div class="cart">
	                <div class="container">
	                	<div class="row">
	                		<div class="col-lg-9">
	                			<table class="table table-cart table-mobile">
									<thead>
										<tr>
											<th>Product</th>
											<th>Price</th>
											<th>Action</th>
											<th>#</th>
											<th></th>
										</tr>
									</thead>

									<tbody>

<?php

$queryr = "SELECT * from cart where code = 'product' && username = '$username'";
$resultr = mysqli_query($conn,$queryr);
$res = mysqli_num_rows($resultr);
if($res > 0){
  while ($rowr  = mysqli_fetch_assoc($resultr)) {
      $ids = $rowr['id'];
      $productname = $rowr['productname'];
      $price = $rowr['price'];

      $location = $rowr['location'];
      echo '
      <tr>
        <td class="product-col">
          <div class="product">
            <figure class="product-media">
              <a href="#">
                <img src="system/pages/'.$location.'" alt="Product image">
              </a>
            </figure>

            <h3 class="product-title">
              <a href="#">'.$productname.'</a>
            </h3><!-- End .product-title -->
          </div><!-- End .product -->
        </td>
        <td class="price-col">'.$price.'</td>
        <td class="quantity-col">
                                  <div class="cart-product-quantity">
                                  <a href="cartcheckout.php?proid='.$ids.'" class="btn btn-outline-primary-2 btn-order btn-block">CHECKOUT</a>

                                  </div><!-- End .cart-product-quantity -->
                                    <div class="cart-product-quantity">
                                        </div><!-- End .cart-product-quantity -->
                              </td>
                              <td class="quantity-col">
                                                        <div class="cart-product-quantity">
                                                        <td class="remove-col"><a href="deletecart.php?deleteid='.$ids.'" class="btn-remove"><i class="icon-close"></i></button></td>

                                                        </div><!-- End .cart-product-quantity -->

                                                    </td>

      </tr>

      ';


}
}


 ?>
<?php

$querydeals = "SELECT * from cart where code = 'deal' && username = '$username' ";
$resultdeals = mysqli_query($conn,$querydeals);
$resdeals = mysqli_num_rows($resultdeals);
if($resdeals > 0){

  while ($rowdeals  = mysqli_fetch_assoc($resultdeals)) {
      $iddeals = $rowdeals['id'];
      $productnamedeals = $rowdeals['productname'];
      $pricedeals = $rowdeals['price'];

      $locationdeals = $rowdeals['location'];


      echo '
      <tr>
        <td class="product-col">
          <div class="product">
            <figure class="product-media">
              <a href="#">
                <img src="system/pages/'.$locationdeals.'" alt="Product image">
              </a>
            </figure>

            <h3 class="product-title">
              <a href="#">'.$productnamedeals.'</a>
            </h3><!-- End .product-title -->
          </div><!-- End .product -->
        </td>
        <td class="price-col">'.$pricedeals.'</td>
        <td class="quantity-col">
                                  <div class="cart-product-quantity">
                                  <a href="cartcheckoutdeal.php?dealids='.$iddeals.'" class="btn btn-outline-primary-2 btn-order btn-block">CHECKOUT</a>
                                  </div><!-- End .cart-product-quantity -->

                              </td>
                              <td class="quantity-col">
                                                        <div class="cart-product-quantity">
                                                        <td class="remove-col"><a href="deletecart.php?deleteid='.$iddeals.'" class="btn-remove"><i class="icon-close"></i></button></td>

                                                        </div><!-- End .cart-product-quantity -->

                                                    </td>
      </tr>

      ';
    }
  }
 ?>





									</tbody>
								</table><!-- End .table table-wishlist -->


	                		</div><!-- End .col-lg-9 -->
	                		<aside class="col-lg-3">
	                			<div class="summary summary-cart">
	                				<h3 class="summary-title">Cart Total</h3><!-- End .summary-title -->



	                					</tbody>
	                				</table><!-- End .table table-summary -->

	                				<a href="deleteall.php" class="btn btn-outline-primary-2 btn-order btn-block">EMPTY CART</a>
	                			</div><!-- End .summary -->

		            			<a href="category.php" class="btn btn-outline-dark-2 btn-block mb-3"><span>CONTINUE SHOPPING</span><i class="icon-refresh"></i></a>
	                		</aside><!-- End .col-lg-3 -->
	                	</div><!-- End .row -->
	                </div><!-- End .container -->
                </div><!-- End .cart -->
            </div><!-- End .page-content -->
        </main><!-- End .main -->

        <?php include 'other_footer.php'; ?>
