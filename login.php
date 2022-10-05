<?php
session_start();
if(isset($_SESSION['id']) && isset($_SESSION['username'])&& isset($_SESSION['location'])){

  if(isset($_SESSION['url'])){
  $backlink =  $_SESSION['url'];
  header("location:$backlink");

}else{

    header('location:category.php');
}}

include 'login_conf.php';
include 'login_head.php';

 ?>
        <main class="main">
            <nav aria-label="breadcrumb" class="breadcrumb-nav border-0 mb-0">
                <div class="container">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Pages</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Login</li>
                    </ol>
                </div><!-- End .container -->
            </nav><!-- End .breadcrumb-nav -->

            <div class="login-page bg-image pt-8 pb-8 pt-md-12 pb-md-12 pt-lg-17 pb-lg-17" style="background-image: url('assets/images/backgrounds/login-bg.jpg')">
            	<div class="container">
            		<div class="form-box">
            			<div class="form-tab">
	            			<ul class="nav nav-pills nav-fill" role="tablist">
							    <li class="nav-item">
							        <a class="nav-link" id="signin-tab-2" data-toggle="tab" href="#signin-2" role="tab" aria-controls="signin-2" aria-selected="false">Sign In</a>
							    </li>

							</ul>
							<div class="tab-content">
							    	<form  method="post">
                       <p style="color:red;"> <?php include 'errors.php'; ?></p>
							    		<div class="form-group">
							    			<label for="singin-email-2">Username *</label>
							    			<input type="text" name="username" class="form-control" id="singin-email-2" required>
							    		</div><!-- End .form-group -->

							    		<div class="form-group">
							    			<label for="singin-password-2">Password *</label>
							    			<input type="password"  name="password" class="form-control" id="singin-password-2" required>
							    		</div><!-- End .form-group -->

							    		<div class="form-footer">
							    			<input type="submit" name="login" class="btn btn-outline-primary-2 w-100">
			           
							    		</div><!-- End .form-footer -->
							    	</form>
							    	<div class="form-choice">
								    	<div class="row">
								    
                        <div class="col-sm-12">
                            dont have an account? <br>
                          <a href="register.php" class=" mt-3 btn btn-primary w-50">

                        Register
                          </a>
                        </div><!-- End .col-6 -->
								    	</div><!-- End .row -->
							    	</div><!-- End .form-choice -->
							    </div><!-- .End .tab-pane -->

							</div><!-- End .tab-content -->
					<!-- End .form-tab -->
            		</div><!-- End .form-box -->
            	</div><!-- End .container -->
            </div><!-- End .login-page section-bg -->
        </main><!-- End .main -->

          <?php include 'other_footer.php'; ?>
