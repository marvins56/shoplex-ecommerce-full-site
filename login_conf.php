<?php


include 'database.php';

$username= "";

$password = "";


$errors = array();
if(isset($_POST['login'])){

  // receive all input values from the form to preventig injection
  $username = mysqli_real_escape_string($conn, $_POST['username']);

  $password = mysqli_real_escape_string($conn, $_POST['password']);

          //errors for the form
          if(empty($username))
          {array_push($errors,"username required or invalid username length");}



          if(empty($password))
          {array_push($errors,"password required");}


// checking if user exists
$user_check_query = "SELECT * FROM users WHERE username='$username'  LIMIT 1";
$result = mysqli_query($conn, $user_check_query);
$user = mysqli_fetch_assoc($result);

      if ($user) {
         // if user exists
        if ($user['username'] != $username) {
          array_push($errors, "Username doesnot exists");
        }



      }

  if (count($errors) == 0) {
$pass = md5($password);
  $query = "SELECT * FROM  users WHERE (username='$username' and password='$pass')";
  $result = mysqli_query($conn, $query);

  if ($row = mysqli_fetch_array($result)) {
		$_SESSION['id'] = $row['id'];
	  $_SESSION['username']  = $row['username'];
    	  $_SESSION['location']  = $row['location'];

        if(isset($_SESSION['url'])){
        $backlink =  $_SESSION['url'];
     header("location:$backlink");
   }else{
     header("location:index.php");
   }

} else {
array_push($errors,"Incorrect Email or Password!!!");
}

  }

}


 ?>
