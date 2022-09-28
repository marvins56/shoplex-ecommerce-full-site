<?php
include('session.php');


if(isset($_GET['deleteid'])){
$id = $_GET['deleteid'];
$query = "delete from deals where id ='$id' ";
$result = mysqli_query($conn,$query);
if($result){
header("location:tables.php");
}
 else{
   die(mysqli_error($conn));
 }
}



 ?>
