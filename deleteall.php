<?php
include('database.php');
session_start();

$username = $_SESSION['username'];
$query = "DELETE from cart where username = '$username' ";
$result = mysqli_query($conn,$query);
if($result){
  if(isset($_SESSION['url'])){
  $backlink =  $_SESSION['url'];
  header("location:$backlink");
}else{
  header("category.php");
}
}
 else{
   die(mysqli_error($conn));
 }




 ?>
