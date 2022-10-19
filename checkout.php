<?php
session_start();
if(!(isset($_SESSION['id']) && isset($_SESSION['username']) && isset($_SESSION['location']))){
  header('location:login.php');
}


include 'database.php';

$sqlite = "SELECT * from users where id = {$_SESSION['id']}";
$rinningsql = mysqli_query($conn,$sqlite);
if($rinningsql){
  while($rowsql = mysqli_fetch_assoc($rinningsql)){
    $country1 = $rowsql['country'];
    $city1 = $rowsql['city'];
    $address1 =  $rowsql['address'];

    $aboutme1 =  $rowsql['aboutme'];
    $postcode1 = $rowsql['postcode'];
    $street1=  $rowsql['street'];
    $contact1 =  $rowsql['contact'];
  }
}

$errors = array();
$id = $_GET['productid'];
$query= "SELECT * FROM products where id = $id";
$result = mysqli_query($conn,$query);

if ($result){
	while($row = mysqli_fetch_assoc($result)){
		$productname = $row['productname'];
		$price = $row['price'];
		$discount = $row['discount'];
		$location = $row['location'];
		$category = $row['category'];
		$description = $row['description'];
		$name= $row['name'];
	}

}


if(isset($_POST['qty'])){
  $quantity = $_POST['quantity'];

    $country = $_POST['country'];
    $city = $_POST['city'];
    $address =  $_POST['address'];

    $aboutme =  $_POST['aboutme'];
    $postcode = $_POST['postcode'];
    $street=  $_POST['street'];
    $contact =  $_POST['contact'];


  if(empty($quantity)){
  	array_push($errors,"please enter quantity");}

      if(empty($city)){
        array_push($errors,"please enter city");}

      if(empty($address)){
        array_push($errors,"please enter address");}

              if(empty($contact)){
                array_push($errors,"please enter contact");}
    if(count($errors) == 0){
      $sql6= "SELECT * from users where id = {$_SESSION['id']} ";
      $res6 = mysqli_query($conn,$sql6);

      if($res6){

        while($rows = mysqli_fetch_assoc($res6)){

          $username = $rows['username'];
          $email = $rows['email'];}}


// payment processing********************************



$productcost = $quantity * $price;
//**********************************
$random_ref = rand();
$initial_status = "pending";
$trnsref = "null";

$curenttime = date('d-m-y h:i:s');
$query_sql = "INSERT into orders (productname,price,country,city,address,street,postcode,aboutme,name,location,contact,quantity,username,email,status,random_ref,time,txtref)
VALUES ('$productname','$productcost','$country','$city','$address','$street','$postcode','$aboutme','$name','$location','$contact','$quantity','$username','$email','$initial_status','$random_ref','$curenttime','$trnsref')";
$resQ =mysqli_query($conn,$query_sql);

      
    if($resQ){

      setcookie("random_ref", $random_ref, time()+3600, "/","", 0);
        
      //Integrate Rave pament
      $endpoint = "https://api.flutterwave.com/v3/payments";

      //Required Data
      $postdata = array(
          "tx_ref" => uniqid().uniqid(),
          "currency" => "UGX",
          'payment_options' => 'Mobile Money',
          "amount" => $productcost,
          "customer" =>array(
              "name" => $username,
              "email" => $email,

          ),
          "customizations" =>array(
              "title" => "BerNie's Checkout",
              "description" => "payment for ". $productname,
          ),

          "meta" =>array(
              "reason" => "payment for ". $productname,
          ),
         "redirect_url" =>  "https://BerNie's.42web.io/verify.php"
      );

      //Init cURL handler
      $ch = curl_init();

      //Turn of SSL checking
      curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);

      //Set the endpoint
      curl_setopt($ch, CURLOPT_URL, $endpoint);

      //Turn on the cURL post method
      curl_setopt($ch, CURLOPT_POST, 1);

      //Encode the post field
      curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($postdata));

      //Make it reurn data
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

      //Set the waiting timeout
      curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 200);
      curl_setopt($ch, CURLOPT_TIMEOUT, 200);

      //Set the headers from endpoint
      curl_setopt($ch, CURLOPT_HTTPHEADER, array(
         "Authorization: Bearer FLWSECK_TEST-e67e2ac9351911695d11fcb719b9343d-X",
         "Content-Type: Application/json",
         "Cache-Control: no-cahe"
      ));

      //Execute the cURL session
      $request = curl_exec($ch);

      $result = json_decode($request);
      header("Location: ".$result->data->link);
      //var_dump($result);
      //Close the cURL session
      curl_close($ch);
  //  echo('<div class="alert alert-success " role="alert" style=" width:80%; margin:auto; text-align:center;">ORDER PLACED SUCCESSFULLY</div>');

      }

  else{
echo('<div class="alert alert-danger " role="alert" style=" width:80%; margin:auto; text-align:center;">ORDER PLACEMENT FAILED</div>');
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
     <title>BerNie's</title>
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
 <?php include 'loader.php';?>
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


        <main class="main">
        	<div class="page-header text-center" style="background-image: url('assets/images/page-header-bg.jpg')">
        		<div class="container">
        			<h1 class="page-title">Checkout<span>Shop</span></h1>
        		</div><!-- End .container -->
        	</div><!-- End .page-header -->
            <nav aria-label="breadcrumb" class="breadcrumb-nav">
                <div class="container">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Shop</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Checkout</li>
                    </ol>
                </div><!-- End .container -->
            </nav><!-- End .breadcrumb-nav -->

            <div class="page-content">
              
            	<div class="checkout">
	     <div class="container">
      <div class="alert alert-warning alert-dismissible show mb-3" role="alert">
  <strong>NOTE</strong> </br> please Populate the location details in the profile page to prevent entering the same details on checout.

  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
            			<form action="" method="post" >
		                	<div class="row">
		                		<div class="col-lg-9">
		                			<h2 class="checkout-title">Billing Details</h2><!-- End .checkout-title -->

                                                    	      <label>quantity *</label>
                                                    	    <input type="number"  name="quantity" class="form-control" required>
	            						<label>Country *</label>
	            						<input type="text"  name="country" class="form-control" required>

	            						<label>Street address *</label>
	            						<input type="text" name="street" class="form-control" placeholder="House number and Street name" value="<?php echo $street1; ?>"required>


	            						<div class="row">
		                					<div class="col-sm-6">
		                						<label>Town / City *</label>
		                						<input type="text" name="city"class="form-control" value="<?php echo $city1; ?>"required>
		                					</div><!-- End .col-sm-6 -->

		                					<div class="col-sm-6">
		                						<label>State / home address*</label>
		                						<input type="text" name="address" class="form-control"value="<?php echo $address1; ?>" required>
		                					</div><!-- End .col-sm-6 -->
		                				</div><!-- End .row -->

		                				<div class="row">
		                					<div class="col-sm-6">
		                						<label>Postcode / ZIP *</label>
		                						<input type="number"  name="postcode"class="form-control" value="<?php echo $postcode1; ?>" required>
		                					</div><!-- End .col-sm-6 -->

		                					<div class="col-sm-6">
		                						<label>Phone *</label>
		                						<input type="number"  name ="contact" class="form-control" required>
		                					</div><!-- End .col-sm-6 -->
		                				</div><!-- End .row -->



	                					<label>Order notes (optional)</label>
	        							<textarea class="form-control" cols="30" rows="4" placeholder="Notes about your order, e.g. special notes for delivery"  value="<?php echo $aboutme1; ?>"name="aboutme"></textarea>
		                		</div><!-- End .col-lg-9 -->
		                		<aside class="col-lg-3">
		                			<div class="summary">

		                				<h3 class="summary-title">Your Order</h3><!-- End .summary-title -->
                            <div class="alert alert-warning text-white" role="alert">
                              <?php include 'errors.php'; ?>
                            </div>
</div>
		                				<table class="table table-summary">
		                					<thead>
		                						<tr>
		                							<th>Product</th>
		                							<th>Total</th>
		                						</tr>
		                					</thead>

		                					<tbody>
		                						<tr>
                                  <?php echo '<div class="single-related-product d-flex">
				<a href="#"><img src="Admin/'.$location.'" alt="" style="width:100px;"></a>
			</div>'; ?>

		                						</tr>


		                						<tr class="summary-subtotal">
		                							<td>Subtotal:</td>
		                						<?php echo '<td>'.$price.'</td>' ?>
		                						</tr><!-- End .summary-subtotal -->
		                						<tr>
		                							<td>Shipping:</td>
		                							<td>payment at MOBILEMONEY/CARD/BANK</td>
		                						</tr>
		                						<tr class="summary-total">
		                							<td>Total:</td>
		                								<?php echo '<td>'.$price.'</td>' ?>
		                						</tr><!-- End .summary-total -->
		                					</tbody>
		                				</table><!-- End .table table-summary -->

		                				<div class="accordion-summary" id="accordion-payment">
										    <div class="card">
										        <div class="card-header" id="heading-1">
										            <h2 class="card-title">
										                <a role="button" data-toggle="collapse" href="#collapse-1" aria-expanded="true" aria-controls="collapse-1" class="text-primary">
										                    Direct bank transfer
										                </a>
										            </h2>
										        </div><!-- End .card-header -->
										        <div id="collapse-1" class="collapse show" aria-labelledby="heading-1" data-parent="#accordion-payment">
										            <div class="card-body text-danger" >
										                <p style="color:red;">
                                      unavailable please use MOBILEMONEY/CARD/BANK
                                    </p>
										        </div><!-- End .collapse -->
										    </div><!-- End .card -->



										    <div class="card">
										        <div class="card-header" id="heading-3">
										            <h2 class="card-title">
										                <a class="collapsed" role="button" data-toggle="collapse" href="#collapse-3" aria-expanded="false" aria-controls="collapse-3">
										                  MOBILE MONEY/ CARD/BANK
										                </a>
										            </h2>
										        </div><!-- End .card-header -->
										        <div id="collapse-3" class="collapse" aria-labelledby="heading-3" data-parent="#accordion-payment">
										            <div class="card-body">
                                  <p style="color:green;">
                                    AVAILABLE
                                  </p>

										        </div><!-- End .collapse -->
										    </div><!-- End .card -->

										    <div class="card">
										        <div class="card-header" id="heading-4">
										            <h2 class="card-title">
										                <a class="collapsed" role="button" data-toggle="collapse" href="#collapse-4" aria-expanded="false" aria-controls="collapse-4">
										                    PayPal <small class="float-right paypal-link">What is PayPal?</small>
										                </a>
										            </h2>
										        </div><!-- End .card-header -->
										        <div id="collapse-4" class="collapse" aria-labelledby="heading-4" data-parent="#accordion-payment">
										            <div class="card-body">
                                  <p style="color:red;">
                                    unavailable please use mobile money or by card
                                  </p>
     </div><!-- End .card-body -->
										        </div><!-- End .collapse -->
										    </div><!-- End .card -->

										    <div class="card">
										        <div class="card-header" id="heading-5">
										            <h2 class="card-title">
										                <a class="collapsed" role="button" data-toggle="collapse" href="#collapse-5" aria-expanded="false" aria-controls="collapse-5">
										                    Credit Card (Stripe)
										                    <img src="assets/images/payments-summary.png" alt="payments cards">
										                </a>
										            </h2>
										        </div><!-- End .card-header -->
										        <div id="collapse-5" class="collapse" aria-labelledby="heading-5" data-parent="#accordion-payment">
										            <div class="card-body">
                                  <p style="color:red;">
                                    unavailable please use mobile money or by card
                                  </p>
           </div><!-- End .card-body -->
										        </div><!-- End .collapse -->
										    </div><!-- End .card -->
										</div><!-- End .accordion -->

		                				<input type="submit"  name="qty"class="btn btn-outline-primary-2 btn-order btn-block" value="Place Order">


		                				</button>
		                			</div><!-- End .summary -->
		                		</aside><!-- End .col-lg-3 -->
		                	</div><!-- End .row -->
            			</form>
	                </div>
           <!-- End .container -->
                </div>
                <!-- End .checkout -->
            </div><!-- End .page-content -->
        </main>
     
    <?php include 'other_footer.php'; ?>
