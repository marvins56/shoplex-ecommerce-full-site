<?php
session_start();
if(!(isset($_SESSION['id']) && isset($_SESSION['username']) && isset($_SESSION['location']))){
  header('location:login.php');
}
include 'database.php';

$username = $_SESSION['username'];

$id = $_GET['productid'];
$query1= "SELECT * FROM deals where id = $id";
$result1 = mysqli_query($conn,$query1);

if ($result1){
$row = mysqli_fetch_assoc($result1);
  $productname = $row['productname'];
  $price = $row['price'];
    $price = $row['price'];
    $name = $row['name'];
      $code = $row['code'];
  $discount = $row['discount'];
  $location = $row['location'];
  $category = $row['category'];
  $description = $row['description'];
  $detaildescription = $row['detaildescription'];
  $width = $row['width'];
  $height = $row['height'];
  $packaging =$row['packaging'];
        $weight =$row['weight'];
          $cname =$row['cname'];
            $cnumber =$row['cnumber'];
              $cemail =$row['cemail'];
                $comment =$row['comment'];

$sql = "INSERT INTO cart (productname,price,name,location,username,code) values
('$productname','$price','$name','$location','$username','$code')";
$runquery = mysqli_query($conn,$sql);
if($runquery){
if(isset($_SESSION['url'])){
$backlink =  $_SESSION['url'];
header("location:$backlink");
}else{
  header("location:category.php");
}

}else{
  echo'<div class="alert alert-danger" role="alert">
    connection to database failed
  </div>';
}



}else{
 echo'<div class="alert alert-danger" role="alert">
    connection  failed
  </div>';
}
?>
