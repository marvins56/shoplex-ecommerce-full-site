<?php
session_start();
if(!(isset($_SESSION['id']) && isset($_SESSION['username']) && isset($_SESSION['location']))){
  header('location:login.php');
}

include 'login_head.php';
include 'database.php';



$errors = array();
$id = $_GET['productid'];
$query= "SELECT * FROM deals where id = $id";
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

    if(empty($country)){
      array_push($errors,"please enter country");}
      if(empty($city)){
        array_push($errors,"please enter city");}
      if(empty($address)){
        array_push($errors,"please enter address");}

        if(empty($aboutme)){
          array_push($errors,"please enter product info ");}

          if(empty($postcode)){
            array_push($errors,"please enter postcode");}

            if(empty($street)){
              array_push($errors,"please enter street");}

              if(empty($contact)){

                array_push($errors,"please enter contact");}
  if(empty($quantity)){
  	array_push($errors,"please enter quantity");}

    if(count($errors) == 0){

      $sql6= "SELECT * from users where id = {$_SESSION['id']} ";
      $res6 = mysqli_query($conn,$sql6);

      if($res6){

        while($rows = mysqli_fetch_assoc($res6)){

          $username = $rows['username'];
          $email = $rows['email'];}}



$query_sql = "INSERT into orders (productname,price,country,city,address,street,postcode,aboutme,name,location,contact,quantity,username,email)
VALUES ('$productname','$price','$country','$city','$address','$street','$postcode','$aboutme','$name','$location','$contact','$quantity','$username','$email')";

$resQ =mysqli_query($conn,$query_sql);
    if($resQ){
    echo('<div class="alert alert-success " role="alert" style=" width:80%; margin:auto; text-align:center;">ORDER PLACED SUCCESSFULLY</div>');
      }

  else{
echo('<div class="alert alert-danger " role="alert" style=" width:80%; margin:auto; text-align:center;">ORDER PLACEMENT FAILED</div>');
    }



    }
}

 ?>

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

            			<form action="" method="post" >
		                	<div class="row">
		                		<div class="col-lg-9">
		                			<h2 class="checkout-title">Billing Details</h2><!-- End .checkout-title -->

                          	      <label>quantity *</label>
                          	    <input type="number"  name="quantity" class="form-control" required>
	            						<label>Country *</label>
	            						<input type="text"  name="country" class="form-control" required>

	            						<label>Street address *</label>
	            						<input type="text" name="street" class="form-control" placeholder="House number and Street name" required>


	            						<div class="row">
		                					<div class="col-sm-6">
		                						<label>Town / City *</label>
		                						<input type="text" name="city"class="form-control" required>
		                					</div><!-- End .col-sm-6 -->

		                					<div class="col-sm-6">
		                						<label>State / home address*</label>
		                						<input type="text" name="address" class="form-control" required>
		                					</div><!-- End .col-sm-6 -->
		                				</div><!-- End .row -->

		                				<div class="row">
		                					<div class="col-sm-6">
		                						<label>Postcode / ZIP *</label>
		                						<input type="number"  name="postcode"class="form-control" required>
		                					</div><!-- End .col-sm-6 -->

		                					<div class="col-sm-6">
		                						<label>Phone *</label>
		                						<input type="number"  name ="contact" class="form-control" required>
		                					</div><!-- End .col-sm-6 -->
		                				</div><!-- End .row -->



	                					<label>Order notes (optional)</label>
	        							<textarea class="form-control" cols="30" rows="4" placeholder="Notes about your order, e.g. special notes for delivery" name="aboutme"></textarea>
		                		</div><!-- End .col-lg-9 -->

		                		<aside class="col-lg-3">
		                			<div class="summary">
		                				<h3 class="summary-title">Your Order</h3><!-- End .summary-title -->
                            <div class="alert alert-warning text-white" role="alert">
                              <?php include 'errors.php'; ?>
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
				<a href="#"><img src="system/pages/'.$location.'" alt="" style="width:100px;"></a>
			</div>'; ?>
		                						<?php echo '<td>'.$price.'</td>' ?>
		                						</tr>


                                <tr class="summary-subtotal">
		                							<td>Subtotal:</td>
		                						<?php echo '<td>'.$price.'</td>' ?>
		                						</tr><!-- End .summary-subtotal -->
		                						<tr>
		                							<td>Shipping:</td>
		                							<td>payment at cash on delivery</td>
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
                                      unavailable please use CASH ON DELIVERY
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
	                </div><!-- End .container -->
                </div><!-- End .checkout -->
            </div><!-- End .page-content -->
        </main><!-- End .main -->
    <?php include 'other_footer.php'; ?>
