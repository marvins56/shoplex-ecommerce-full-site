
<?php
include 'database.php';
session_start();
$_SESSION['url'] = $_SERVER['REQUEST_URI'];

if(!(isset($_SESSION['id']) && isset($_SESSION['username']) && isset($_SESSION['location']))){
  header('location:login.php');

}

$sql = "SELECT * from users where id = {$_SESSION['id']} ";
$res = mysqli_query($conn,$sql);

if($res){
  while($rows = mysqli_fetch_assoc($res)){
    $profileimage = $rows['location'];
    $username = $rows['username'];
    $email = $rows['email'];
    $country1 = $rows['country'];
    $city1 =$rows['city'];
    $address1 = $rows['address'];
    $country1 = $rows['country'];
    $aboutme1 = $rows['aboutme'];
    $postcode1 =$rows['postcode'];
    $street1= $rows['street'];
    $contact1 = $rows['contact'];





  }
}
$usernames = "";
$country = "";
$city = "";
$address = "";
$country = "";
$aboutme = "";
$postcode = "";
$street= "";
$contact = "";

$errors = array();

if(isset($_POST['details'])){
  $country = mysqli_real_escape_string($conn, $_POST['country']);

  $city =mysqli_real_escape_string($conn, $_POST['city']);
  $address = mysqli_real_escape_string($conn, $_POST['address']);

  $aboutme = mysqli_real_escape_string($conn, $_POST['aboutme']);
  $postcode = mysqli_real_escape_string($conn, $_POST['postcode']);"";
  $street= mysqli_real_escape_string($conn, $_POST['street']);
  $contact = mysqli_real_escape_string($conn, $_POST['contact']);



    if(empty($contact)){
    	array_push($errors,"please enter contact");}
  if(empty($country)){
  	array_push($errors,"please enter country");}
    if(empty($city)){
    	array_push($errors,"please enter city");}
      if(empty($aboutme)){
      	array_push($errors,"please enter something about yourself");}
        if(empty($address)){
        	array_push($errors,"please enter address");}
          if(empty($street)){
          	array_push($errors,"please enter street");
}


if(count($errors) == 0){


  $sql1 = "UPDATE users SET id = {$_SESSION['id']}, username = '$username',email= '$email' ,country = '$country', city ='$city',
  address = '$address',street = '$street', postcode = '$postcode',aboutme = '$aboutme',contact = '$contact'
   where  id = {$_SESSION['id']}";

	$res = mysqli_query($conn,$sql1);

	if($res){
    echo('<div class="alert alert-success " role="alert" style=" width:80%; margin:auto; text-align:center;">UPDATE SUCCESSFULLY</div>');
	}

	else {
    echo('<div class="alert alert-danger " role="alert" style=" width:80%; margin:auto; text-align:center;"> UPDATE FAILED </div>');
	}
}

}



?>

<?php include 'login_head.php'; ?>


        <main class="main">
        	<div class="page-header text-center" style="background-image: url('assets/images/page-header-bg.jpg')">
        		<div class="container">



 <img  style="width:120px; margin: auto;border-radius:50%; border:4px solid white;" src="Admin/<?php echo $profileimage ?>" >


        		</div><!-- End .container -->
        	</div><!-- End .page-header -->
            <nav aria-label="breadcrumb" class="breadcrumb-nav mb-3">
                <div class="container">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                        <li class="breadcrumb-item"><a href="category.php">Shop</a></li>
                        <li class="breadcrumb-item active" aria-current="page">My Account</li>
                    </ol>
                </div><!-- End .container -->
            </nav><!-- End .breadcrumb-nav -->


            <div class="page-content">
            	<div class="dashboard">
	                <div class="container">
	                	<div class="row">
	                		<aside class="col-md-4 col-lg-3">
	                			<ul class="nav nav-dashboard flex-column mb-3 mb-md-0" role="tablist">
								    <li class="nav-item">
								        <a class="nav-link active" id="tab-dashboard-link" data-toggle="tab" href="#tab-dashboard" role="tab" aria-controls="tab-dashboard" aria-selected="true">Dashboard</a>
								    </li>
								    <li class="nav-item">
								        <a class="nav-link" id="tab-orders-link" data-toggle="tab" href="#tab-orders" role="tab" aria-controls="tab-orders" aria-selected="false">Orders</a>
								    </li>

								    <li class="nav-item">
								        <a class="nav-link" id="tab-address-link" data-toggle="tab" href="#tab-address" role="tab" aria-controls="tab-address" aria-selected="false">Adresses</a>
								    </li>
								    <li class="nav-item">
								        <a class="nav-link" id="tab-account-link" data-toggle="tab" href="#tab-account" role="tab" aria-controls="tab-account" aria-selected="false">Account Details</a>
								    </li>
								    <li class="nav-item">
								        <a class="nav-link" href="logout.php">Sign Out</a>
								    </li>
								          </ul>
	                		</aside><!-- End .col-lg-3 -->

	                		<div class="col-md-8 col-lg-9">
	                			<div class="tab-content">
								    <div class="tab-pane fade show active" id="tab-dashboard" role="tabpanel" aria-labelledby="tab-dashboard-link">
								    	<p>Hello <span class="font-weight-normal text-dark"><?php echo $_SESSION['username']; ?> <BR></span> ( <span class="font-weight-normal text-dark"></span>? <a href="logout.php">Log out</a>)
								    	<br>
								    	From your account dashboard you can view your <a href="#tab-orders" class="tab-trigger-link link-underline">recent orders</a>, manage your <a href="#tab-address" class="tab-trigger-link">shipping and billing addresses</a>, and <a href="#tab-account" class="tab-trigger-link">edit your password and account details</a>.</p>
<div class="alert alert-dark text-white">
 <?php include 'errors.php'; ?>

</div>
                    </div><!-- .End .tab-pane -->

								    <div class="tab-pane fade" id="tab-orders" role="tabpanel" aria-labelledby="tab-orders-link">
                      <table class="table table-cart table-mobile">
                      <thead>
                      <tr>
                      <th>Product</th>
                      <th>Price</th>
                      <th>payment Status</th>
                      <th>Action</th>
                      <th></th>
                      </tr>
                      </thead>

                      <tbody>

                      <?php

                      $queryr = "SELECT * from orders where  username = '$username'";
                      $resultr = mysqli_query($conn,$queryr);
                      $res = mysqli_num_rows($resultr);
                      if($res > 0){
                      while ($rowr  = mysqli_fetch_assoc($resultr)) {
                      $ids = $rowr['id'];
                      $productname = $rowr['productname'];
                      $price = $rowr['price'];
                      $status = $rowr['status'];

                      $location = $rowr['location'];
                      echo '
                      <tr>
                      <td class="product-col">
                      <div class="product">
                      <figure class="product-media">
                      <a href="#">
                      <img src="Admin/'.$location.'" alt="Product image">
                      </a>
                      </figure>

                      <h3 class="product-title">
                      <a href="#">'.$productname.'</a>
                      </h3><!-- End .product-title -->
                      </div><!-- End .product -->
                      </td>
                      <td class="price-col">PRICE:     '.$price.'</td>
                      <td class="quantity-col">
                                <div class="cart-product-quantity">

<p class="btn btn-outline-secondary">'.$status.'</p>

                                </div><!-- End .cart-product-quantity -->
                                  <div class="cart-product-quantity">
                                      </div><!-- End .cart-product-quantity -->
                            </td>
                            <td class="quantity-col">
                                                      <div class="cart-product-quantity">


                      </tr>

                      ';
                      }
                    }else{
                      echo '  	<p>No order has been made yet.</p>';
                    }


                      ?>
                    </tbody>
  								</table>


								    	<a href="category.php" class="btn btn-outline-primary-2"><span>GO SHOP</span><i class="icon-long-arrow-right"></i></a>
								    </div><!-- .End .tab-pane -->

								 <!-- .End .tab-pane -->

								    <div class="tab-pane fade" id="tab-address" role="tabpanel" aria-labelledby="tab-address-link">
								    	<h3 class="text-success">The following addresses will be used on the checkout page by default.</h3>

								    	<div class="row">
								    		<div class="col-lg-6">
								    			<div class="card card-dashboard">
								    				<div class="card-body">
								    					<h3 class="card-title">Billing Address</h3><!-- End .card-title -->



<?php
echo "NAME: " . $username . "<BR>";
echo "EMAIL: " .  $email. "<BR>";
echo "COUNTRY: ".$country1. "<BR>";
echo  " ZIP CODE: " .$postcode1 . "<BR>";
echo "CITY: " .$city1 . "<BR>";
echo "ADDRESS: ".$address1 . "<BR>";
echo " STREET: " .$street1 . "<BR>";
echo "TEL: ". $contact1 . "<BR>";
echo "INFO: " .$aboutme1 . "<BR>";

 ?>
 <a class="nav-link" id="tab-account-link" data-toggle="tab" href="#tab-account" role="tab" aria-controls="tab-account" aria-selected="false">EDIT<i class="icon-edit"></i></a>


								    				</div><!-- End .card-body -->
								    			</div><!-- End .card-dashboard -->
								    		</div><!-- End .col-lg-6 -->

								    		<div class="col-lg-6">
								    			<div class="card card-dashboard">
								    				<div class="card-body">
								    					<h3 class="card-title">Shipping Address</h3><!-- End .card-title -->

												<?php
echo "NAME: " . $username . "<BR>";
                         echo "ADDRESS: ".$address1 . "<BR>";
                        echo " STREET: " .$street1 . "<BR>";
                        echo "TEL: ". $contact1 . "<BR>";
                         ?>
                         <a class="nav-link" id="tab-account-link" data-toggle="tab" href="#tab-account" role="tab" aria-controls="tab-account" aria-selected="false">EDIT<i class="icon-edit"></i></a>
								    				</div><!-- End .card-body -->
								    			</div><!-- End .card-dashboard -->
								    		</div><!-- End .col-lg-6 -->
								    	</div><!-- End .row -->
								    </div><!-- .End .tab-pane -->

								    <div class="tab-pane fade" id="tab-account" role="tabpanel" aria-labelledby="tab-account-link">
                      <div class="card-body">

            <p class="alert alert-dark text-white" style="color:white;"> <?php include 'errors.php'; ?></p>
                        <form method="post">

                          <h6  id="edit" class="heading-small text-muted mb-4">User information</h6>
                          <div class="pl-lg-4">
                            <div class="row">
                              <div class="col-lg-6">
                                <div class="form-group focused">
                                  <label class="form-control-label" for="input-username">Username</label>
                                  <input type="text" id="input-username" name="usernames" class="form-control form-control-alternative" placeholder="Username" value="sorry cant change this" readonly>
                                </div>
                              </div>
                              <div class="col-lg-6">
                                <div class="form-group">
                                  <label class="form-control-label" for="input-email">Email address</label>
                                  <input type="email" id="input-email" name="emails" class="form-control form-control-alternative" placeholder="sorry cnt change thi" readonly>
                                </div>
                              </div>
                            </div>

                          </div>
                          <hr class="my-4">
                          <!-- Address -->
                          <h6 class="heading-small text-muted mb-4">Contact information</h6>
                          <div class="pl-lg-4">
                            <div class="row">
                              <div class="col-md-12">
                                <div class="form-group focused">
                                  <label class="form-control-label" for="input-address">Address</label>
                                  <input id="input-address" name="address" class="form-control form-control-alternative" placeholder="Home Address" value="Bld Mihail Kogalniceanu, nr. 8 Bl 1, Sc 1, Ap 09" type="text">
                                </div>
                              </div>
                            </div>
                            <div class="row">
                              <div class="col-lg-4">
                                <div class="form-group focused">
                                  <label class="form-control-label" for="input-city">City</label>
                                  <input type="text" id="input-city"  name="city" class="form-control form-control-alternative" placeholder="City" value="New York">
                                </div>
                              </div>
                              <div class="col-lg-4">
                                <div class="form-group focused">
                                  <label class="form-control-label" for="input-city">Street</label>
                                  <input type="text" id="input-city"  name="street" class="form-control form-control-alternative" placeholder="City" value="New York">
                                </div>
                              </div>
                              <div class="col-lg-4">
                                <div class="form-group focused">
                                  <label class="form-control-label" for="input-country">Country</label>
                                  <input type="text" id="input-country" name="country" class="form-control form-control-alternative" placeholder="Country" value="United States">
                                </div>
                              </div>
                              <div class="col-lg-4">
                                <div class="form-group">
                                  <label class="form-control-label" for="input-country">Postal code</label>
                                  <input type="number" id="input-postal-code" name="postcode" class="form-control form-control-alternative" placeholder="Postal code">
                                </div>
                              </div>
                              <div class="col-lg-4">
                                  <div class="form-group">
                                    <label class="form-control-label" for="input-country">contact</label>
                                    <input type="number" id="input-postal-code" name="contact" class="form-control form-control-alternative" placeholder="contact">
                                  </div>
                                </div>
                            </div>
                          </div>
                          <hr class="my-4">
                          <!-- Description -->
                          <h6 class="heading-small text-muted mb-4">About me</h6>
                          <div class="pl-lg-4">
                            <div class="form-group focused">
                              <label>About Me</label>
                              <textarea rows="4"  name="aboutme" class="form-control form-control-alternative" placeholder="A few words about you ..."></textarea>
                            </div>
                          </div>
                          <div class="col-lg-4">
                            <div class="form-group">
                              <label class="form-control-label" for="input-country">submit</label>
                              <input type="submit"  value="save"id="input-postal-code" name="details" class="form-control form-control-alternative btn btn-info" >
                            </div>
                          </div>
                        </form>
                      </div>
								    </div><!-- .End .tab-pane -->
								</div>
	                		</div><!-- End .col-lg-9 -->
	                	</div><!-- End .row -->
	                </div><!-- End .container -->
                </div><!-- End .dashboard -->
            </div><!-- End .page-content -->
        </main><!-- End .main -->
<?php include 'other_footer.php'; ?>
