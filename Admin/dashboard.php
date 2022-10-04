
<?php 
include 'auth_header.php';



// if(!(isset($_SESSION['id']) && isset($_SESSION['username']) && isset($_SESSION['location']))){
//   header('location:login.php');

// }

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

<div class="container-xxl flex-grow-1 container-p-y">
    <div class="row">
      <div class="col-lg-8 mb-4 order-0">
        <div class="card">
          <div class="d-flex align-items-end row">
            <div class="col-sm-7">
              <div class="card-body">
                <h5 class="card-title text-primary">
                  Welcome back  <?php  echo $_SESSION['username']?>! 🎉
                </h5>
                <p class="mb-4">
                  You have done <span class="fw-bold">72%</span> more sales
                  today. Check your new badge in your profile.
                </p>

                <a href="javascript:;" class="btn btn-sm btn-outline-primary"
                  >UPLOAD PRODUCTS</a
                >
              </div>
            </div>
            <div class="col-sm-5 text-center text-sm-left">
              <div class="card-body pb-0 px-0 px-md-4">
               <?php echo ' <img
                  src="'.$location.'"
                  height="140"
                  alt="View Badge User"
                  data-app-dark-img="illustrations/man-with-laptop-dark.png"
                  data-app-light-img="illustrations/man-with-laptop-light.png"
                />'?>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-4 order-1">
        <div class="row">
          <div class="col-lg-6 col-md-12 col-6 mb-4">
            <div class="card">
              <div class="card-body">
                <div
                  class="card-title d-flex align-items-start justify-content-between"
                >
                  <div class="avatar flex-shrink-0">
                    <img
                      src="assets/img/icons/unicons/chart-success.png"
                      alt="chart success"
                      class="rounded"
                    />
                  </div>
                  <div class="dropdown">
                    <button
                      class="btn p-0"
                      type="button"
                      id="cardOpt3"
                      data-bs-toggle="dropdown"
                      aria-haspopup="true"
                      aria-expanded="false"
                    >
                      <i class="bx bx-dots-vertical-rounded"></i>
                    </button>
                    <div
                      class="dropdown-menu dropdown-menu-end"
                      aria-labelledby="cardOpt3"
                    >
                      <a class="dropdown-item" href="javascript:void(0);"
                        >View More</a
                      >
                      <a class="dropdown-item" href="javascript:void(0);"
                        >Delete</a
                      >
                    </div>
                  </div>
                </div>
                <span class="fw-semibold d-block mb-1">PRODUCTS</span>
                <h3 class="card-title mb-2">
                <?php
                  $query = "SELECT COUNT(*) FROM products";
          $result = mysqli_query($conn,$query);
          $rows = mysqli_fetch_row($result);
          $total=  $rows[0];
          echo $total . " ";
          ?></p>


                </h3>
                <small class="text-success fw-semibold"
                  ><i class="bx bx-up-arrow-alt"></i>  products</small
                >
              </div>
            </div>
          </div>
          <div class="col-lg-6 col-md-12 col-6 mb-4">
            <div class="card">
              <div class="card-body">
                <div
                  class="card-title d-flex align-items-start justify-content-between"
                >
                  <div class="avatar flex-shrink-0">
                    <img
                      src="assets/img/icons/unicons/wallet-info.png"
                      alt="Credit Card"
                      class="rounded"
                    />
                  </div>
                  <div class="dropdown">
                    <button
                      class="btn p-0"
                      type="button"
                      id="cardOpt6"
                      data-bs-toggle="dropdown"
                      aria-haspopup="true"
                      aria-expanded="false"
                    >
                      <i class="bx bx-dots-vertical-rounded"></i>
                    </button>
                    <div
                      class="dropdown-menu dropdown-menu-end"
                      aria-labelledby="cardOpt6"
                    >
                      <a class="dropdown-item" href="javascript:void(0);"
                        >View More</a
                      >
                      <a class="dropdown-item" href="javascript:void(0);"
                        >Delete</a
                      >
                    </div>
                  </div>
                </div>
                <span>ORDERS</span>
                <h3 class="card-title text-nowrap mb-1">
                <?php
                $query = "SELECT COUNT(*) FROM orders";
            $result = mysqli_query($conn,$query);
            $rows = mysqli_fetch_row($result);
            $total=  $rows[0];
            echo $total . "  ";
            ?>
                </h3>
                <small class="text-success fw-semibold"
                  ><i class="bx bx-up-arrow-alt"></i>orders </small
                >
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Total Revenue -->
      <div class="col-12 col-lg-8 order-2 order-md-3 order-lg-2 mb-4">
        <div class="card">
          <div class="row row-bordered g-0">
            <div class="col-md-8">
              <h5 class="card-header m-0 me-2 pb-3">Total Revenue</h5>
              <div id="totalRevenueChart" class="px-2"></div>
            </div>
            <div class="col-md-4">
              <div class="card-body">
                <div class="text-center">
                  <div class="dropdown">
                    <button
                      class="btn btn-sm btn-outline-primary dropdown-toggle"
                      type="button"
                      id="growthReportId"
                      data-bs-toggle="dropdown"
                      aria-haspopup="true"
                      aria-expanded="false"
                    >
                      2022
                    </button>
                    <div
                      class="dropdown-menu dropdown-menu-end"
                      aria-labelledby="growthReportId"
                    >
                      <a class="dropdown-item" href="javascript:void(0);"
                        >2021</a
                      >
                      <a class="dropdown-item" href="javascript:void(0);"
                        >2020</a
                      >
                      <a class="dropdown-item" href="javascript:void(0);"
                        >2019</a
                      >
                    </div>
                  </div>
                </div>
              </div>
              <div id="growthChart"></div>
              <div class="text-center fw-semibold pt-3 mb-2">
                62% Company Growth
              </div>

              <div
                class="d-flex px-xxl-4 px-lg-2 p-4 gap-xxl-3 gap-lg-1 gap-3 justify-content-between"
              >
                <div class="d-flex">
                  <div class="me-2">
                    <span class="badge bg-label-primary p-2"
                      ><i class="bx bx-dollar text-primary"></i
                    ></span>
                  </div>
                  <div class="d-flex flex-column">
                    <small>2022</small>
                    <h6 class="mb-0">$32.5k</h6>
                  </div>
                </div>
                <div class="d-flex">
                  <div class="me-2">
                    <span class="badge bg-label-info p-2"
                      ><i class="bx bx-wallet text-info"></i
                    ></span>
                  </div>
                  <div class="d-flex flex-column">
                    <small>2021</small>
                    <h6 class="mb-0">$41.2k</h6>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!--/ Total Revenue -->
      <div class="col-12 col-md-8 col-lg-4 order-3 order-md-2">
        <div class="row">
          <div class="col-6 mb-4">
            <div class="card">
              <div class="card-body">
                <div
                  class="card-title d-flex align-items-start justify-content-between"
                >
                  <div class="avatar flex-shrink-0">
                    <img
                      src="assets/img/icons/unicons/paypal.png"
                      alt="Credit Card"
                      class="rounded"
                    />
                  </div>
                  <div class="dropdown">
                    <button
                      class="btn p-0"
                      type="button"
                      id="cardOpt4"
                      data-bs-toggle="dropdown"
                      aria-haspopup="true"
                      aria-expanded="false"
                    >
                      <i class="bx bx-dots-vertical-rounded"></i>
                    </button>
                    <div
                      class="dropdown-menu dropdown-menu-end"
                      aria-labelledby="cardOpt4"
                    >
                      <a class="dropdown-item" href="javascript:void(0);"
                        >View More</a
                      >
                      <a class="dropdown-item" href="javascript:void(0);"
                        >Delete</a
                      >
                    </div>
                  </div>
                </div>
                <span class="d-block mb-1">INCOME IN</span>
                <h3 class="card-title text-nowrap mb-2">$2,456</h3>
                <small class="text-danger fw-semibold"
                  ><i class="bx bx-down-arrow-alt"></i> -14.82%</small
                >
              </div>
            </div>
          </div>
          <div class="col-6 mb-4">
            <div class="card">
              <div class="card-body">
                <div
                  class="card-title d-flex align-items-start justify-content-between"
                >
                  <div class="avatar flex-shrink-0">
                    <img
                      src="assets/img/icons/unicons/cc-primary.png"
                      alt="Credit Card"
                      class="rounded"
                    />
                  </div>
                  <div class="dropdown">
                    <button
                      class="btn p-0"
                      type="button"
                      id="cardOpt1"
                      data-bs-toggle="dropdown"
                      aria-haspopup="true"
                      aria-expanded="false"
                    >
                      <i class="bx bx-dots-vertical-rounded"></i>
                    </button>
                    <div class="dropdown-menu" aria-labelledby="cardOpt1">
                      <a class="dropdown-item" href="javascript:void(0);"
                        >View More</a
                      >
                      <a class="dropdown-item" href="javascript:void(0);"
                        >Delete</a>
                      
                    </div>
                  </div>
                </div>
                <span class="fw-semibold d-block mb-1">DEALS</span>
                <h3 class="card-title mb-2">     <?php
                  $query = "SELECT COUNT(*) FROM deals";
          $result = mysqli_query($conn,$query);
          $rows = mysqli_fetch_row($result);
      $total=  $rows[0];
      echo $total . " ";
      ?></h3>
                <small class="text-success fw-semibold"
                  ><i class="bx bx-up-arrow-alt"></i> Deals</small
                >
              </div>
            </div>
          </div>
          <!-- </div>
    <div class="row"> -->
          <div class="col-12 mb-4">
            <div class="card">
              <div class="card-body">
                <div
                  class="d-flex justify-content-between flex-sm-row flex-column gap-3"
                >
                  <div
                    class="d-flex flex-sm-column flex-row align-items-start justify-content-between"
                  >
                    <div class="card-title">
                      <h5 class="text-nowrap mb-2">CATEGORIES</h5>
                      
                    </div>
                    <div class="mt-sm-auto">
                      <small class="text-success text-nowrap fw-semibold"
                        ><i class="bx bx-chevron-up"></i> <?php
                  $query = "SELECT COUNT(distinct(category)) FROM products";
          $result = mysqli_query($conn,$query);
          $rows = mysqli_fetch_row($result);
      $total=  $rows[0];
      echo $total . " ";
      ?></small >
                      <h3 class="mb-0">categories</h3>
                    </div>
                  </div>
                  <div id="profileReportChart"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>



<?php include 'auth_footer.php'?>