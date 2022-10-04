<?php
session_start();
if(isset($_SESSION['id']) && isset($_SESSION['username'])&& isset($_SESSION['location'])){
  header('location:category.php');
}

include 'login_head.php';
include 'database.php';

   $username= "";
   $email= "";
   $password= "";
   $file = "";
   $errors = array();

   if(isset($_POST['register'])){

     // receive all input values from the form to preventig injection
     $username = mysqli_real_escape_string($conn, $_POST['username']);
     $email = mysqli_real_escape_string($conn, $_POST['email']);
     $password1 = mysqli_real_escape_string($conn, $_POST['password1']);
       $password2 = mysqli_real_escape_string($conn, $_POST['password2']);

             //errors for the form
             if(empty($username))
             {array_push($errors,"username required or invalid username length");}

             if(empty($email) || !preg_match("/^\w+([-+.']\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*$/", $email))
             {array_push($errors,"email required or invalid email format");}

             if(empty($password1) )
             {array_push($errors,"enter password");}

                         if(empty($password2) )
                         {array_push($errors,"re enter password");}


                                     if($password1 != $password2)
                                     {array_push($errors," password missmatch");}

   // checking if user exists
   $user_check_query = "SELECT * FROM users WHERE username='$username' OR email='$email' LIMIT 1";
   $result = mysqli_query($conn, $user_check_query);
   $user = mysqli_fetch_assoc($result);

         if ($user) { // if user exists
           if ($user['username'] === $username) {
             array_push($errors, "Username already exists");
           }
           if ($user['email'] === $email) {
             array_push($errors, "email already exists");
           }

         }

   //if it doent exist register teh user
     // checking for errors
     // Finally, register user if there are no errors in the form
                 if (count($errors) == 0) {
                   $password1 = md5($password);//encrypt the password before saving in the database

                   $maxsize = 5242880; // 5MB

                             $name = $_FILES['file']['name'];
                             $target_dir = "profile_images/";
                             $target_file = $target_dir . $_FILES["file"]["name"];

                             // Select file type
                             $videoFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

                             // Valid file extensions
                             $extensions_arr = array("jpg","png","jpeg");
                             // Check extension
                                       if( in_array($videoFileType,$extensions_arr) ){
 $passwordhash = md5($password2);
                                           // Check file size
                                           if(($_FILES['file']['size'] >= $maxsize) || ($_FILES["file"]["size"] == 0)) {
                                               echo "File too large. File must be less than 5MB.";
                                           }else{
                                               // Upload
                                               if(move_uploaded_file($_FILES['file']['tmp_name'],$target_file)){
                                                   // Insert record
                                                   $query = "INSERT INTO users(username,email,password,name,location)
                                                    VALUES('$username','$email','$passwordhash','".$name."','".$target_file."')";

                                               $res =     mysqli_query($conn,$query);
                                                   if($res){


echo '<div class="alert alert-success" role="alert">
  registration successfull please login
</div>';
                                                     }
                                                 else{
                                               array_push($errors,"database connection failed");
                                                   }
                                               }else{
                                               array_push($errors,"upload failed");
                                               }
                                           }

                                       }else
                                       {
                                           array_push($errors,"Invalid file extension.");
                                       }

                 }

   }



 ?>
    <?php include 'loader.php';?>
         <main class="main">
             <nav aria-label="breadcrumb" class="breadcrumb-nav border-0 mb-0">
                 <div class="container">
                     <ol class="breadcrumb">
                         <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                         <li class="breadcrumb-item"><a href="#">Pages</a></li>
                         <li class="breadcrumb-item active" aria-current="page">register</li>
                     </ol>
                 </div><!-- End .container -->
             </nav><!-- End .breadcrumb-nav -->

             <div class="login-page bg-image pt-8 pb-8 pt-md-12 pb-md-12 pt-lg-17 pb-lg-17" style="background-image: url('assets/images/backgrounds/login-bg.jpg')">
             	<div class="container">
             		<div class="form-box">
             			<div class="form-tab">
 	            			<ul class="nav nav-pills nav-fill" role="tablist">

 							    <li class="nav-item">
 							        <a class="nav-link active" id="register-tab-2" data-toggle="tab" href="#register-2" role="tab" aria-controls="register-2" aria-selected="true">Register</a>
 							    </li>
 							</ul>
 							<div class="tab-content">

 							    	<form action="" method="post" enctype="multipart/form-data">
                       <p style="color:red;"> <?php include 'errors.php'; ?></p>
                       <div class="form-group">
                         <label for="register-email-2">Username*</label>
                         <input type="text"  name="username"class="form-control" id="register-email-2" required>
                       </div><!-- End .form-group -->
 							    		<div class="form-group">
 							    			<label for="register-email-2">Your email address *</label>
 							    			<input type="email"  name="email"class="form-control" id="register-email-2" required>
 							    		</div><!-- End .form-group -->

 							    		<div class="form-group">
 							    			<label for="register-password-2">Password *</label>
 							    			<input type="password" name="password1" class="form-control" id="register-password-2"  required>
 							    		</div>
                       <div class="form-group">
                         <label for="register-password-2">re-enter Password *</label>
                         <input type="password" name="password2" class="form-control" id="register-password-2"  required>
                       </div>
                       <div class="form-group">
                         <label for="register-password-2">profile_image *</label>
                         <input type="file" name="file" class="form-control"  required>
                       </div><!-- End .form-group -->

 							    		<div class="form-footer">
 							    			<input type="submit" name="register"class="btn btn-outline-primary-2">
 			                					<span>SIGN UP</span>
 			            						<i class="icon-long-arrow-right"></i>



 							    		</div><!-- End .form-footer -->
 							    	</form>
 							    	<div class="form-choice">
 								    	<p class="text-center">or sign in with</p>
 								    	<div class="row">
 								    		<div class="col-sm-6">
 								    			<a href="404.php" class="btn btn-login btn-g">
 								    				<i class="icon-google"></i>
 								    				Login With Google
 								    			</a>
 								    		</div><!-- End .col-6 -->
 								    		<div class="col-sm-6">
 								    			<a href="404.php" class="btn btn-login  btn-f">
 								    				<i class="icon-facebook-f"></i>
 								    				Login With Facebook
 								    			</a>
 								    		</div>
                        <div class="col-sm-6">
                             have an account?
                          <a href="login.php" class="btn btn-signup btn-f">

                    login
                          </a>
                        </div><!-- End .col-6 -->
 								    	</div><!-- End .row -->
 							    	</div><!-- End .form-choice -->
 							    </div><!-- .End .tab-pane -->
 							</div><!-- End .tab-content -->
 						</div><!-- End .form-tab -->
             		</div><!-- End .form-box -->
             	</div><!-- End .container -->
             </div><!-- End .login-page section-bg -->
         </main><!-- End .main -->

           <?php include 'other_footer.php'; ?>
