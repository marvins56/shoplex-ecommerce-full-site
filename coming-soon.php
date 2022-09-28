<!DOCTYPE html>
<html lang="en">


<!-- molla/coming-soon.html  22 Nov 2019 10:04:05 GMT -->
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
    <link rel="stylesheet" href="assets/css/plugins/jquery.countdown.css">
    <!-- Main CSS File -->
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>

  <?php
include 'database.php';
$query6= "SELECT * FROM deeal_time";
$result6 = mysqli_query($conn,$query6);
if($result6){
if(mysqli_num_rows($result6)> 0){

while($row6 = mysqli_fetch_assoc($result6)){
  $id_time = $row6['id'];
$datetimes = $row6['start_time'];
$locationdeal = $row6['location'];

  }
}

}

 ?>
    <div class="soon">
        <div class="container">
            <div class="row">
                <div class="col-md-9 col-lg-8">
                    <div class="soon-content text-center">
                        <div class="soon-content-wrapper">
                            <img src="assets/images/logo.png" alt="Logo" class="soon-logo mx-auto">
                            <h1 class="soon-title">Coming Soon</h1><!-- End .soon-title -->
                            <div class="coming-countdown countdown-separator"></div><!-- End .coming-countdown -->
                            <hr class="mt-2 mb-3 mt-md-3">
                            <p>We are currently working on an awesome new offers. Stay tuned for more information.
                                Subscribe to our newsletter to stay updated on our progress.</p>

                                <?php

if(isset($_POST['newsletter'])){

  $email = $_POST['email'];

  if(empty($email)){
  echo '<div class="alert alert-danger" role="alert">
  please enter email
  </div>';
  }else{
$sql = "INSERT into newsletter (email) values ('$email')";
$results = mysqli_query($conn,$sql);
if($results){
  echo '<div class="alert alert-success" role="alert">
thanks for subscribing,we shall inform you of new offers

  </div>';
}else{
  echo '<div class="alert alert-danger" role="alert">
server error!!
  </div>';
}

  }
}

                                 ?>
                            <form action="" method="post">
                                <div class="input-group mb-5">
                                    <input type="email" class="form-control bg-transparent" placeholder="Enter your Email Address"  name="email"required>
                                    <div class="input-group-append">
                                        <input name ="newsletter"class="btn btn-outline-primary-2" type="submit">
                                            <span></span>



                                    </div>
                                </div>
                            </form>

                            <div class="social-icons justify-content-center mb-0">
                                <a href="#" class="social-icon" target="_blank" title="Facebook"><i class="icon-facebook-f"></i></a>
                                <a href="#" class="social-icon" target="_blank" title="Twitter"><i class="icon-twitter"></i></a>
                                <a href="#" class="social-icon" target="_blank" title="Instagram"><i class="icon-instagram"></i></a>
                                <a href="#" class="social-icon" target="_blank" title="Youtube"><i class="icon-youtube"></i></a>
                                <a href="#" class="social-icon" target="_blank" title="Pinterest"><i class="icon-pinterest"></i></a>
                                <button class="btn btn-outline-primary-2 text-white"  >
                                    <a href="index.php"><span>BACK TO HOME</span></a>
                                    <i class="icon-long-arrow-up"></i>
                                </button>
                            </div>
                            <!-- End .soial-icons -->
                        </div><!-- End .soon-content-wrapper -->
                    </div><!-- End .soon-content -->
                </div><!-- End .col-md-9 col-lg-8 -->
            </div><!-- End .row -->
        </div><!-- End .container -->
        <?php echo '<div class="soon-bg bg-image" style="background-image: url(system/pages/'.$locationdeal.')"></div>' ?>
        <!-- End .soon-bg bg-image -->
    </div><!-- End .soon -->
    <!-- Plugins JS File -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/jquery.plugin.min.js"></script>
    <script src="assets/js/jquery.countdown.min.js"></script>
    <!-- Main JS File -->
    <script src="assets/js/main.js"></script>
    <script>
    $(function() {
        "use strict";
        if ($.fn.countdown) {
            $('.coming-countdown').countdown({
                until: new Date(<?php echo "'$datetimes'" ?>), // 7th month = August / Months 0 - 11 (January  - December)
                format: 'DHMS',
                padZeroes: true
            });

            // Pause
            // $('.coming-countdown').countdown('pause');
        }
    });
    </script>

</body>


<!-- molla/coming-soon.html  22 Nov 2019 10:04:05 GMT -->
</html>