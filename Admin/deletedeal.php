<?php

include('session.php');

include('database.php');



if(isset($_GET['deleteid'])){

$id = $_GET['deleteid'];

$query = "delete from deals where id ='$id' ";

$result = mysqli_query($conn,$query);

if($result){

    header("location:products.php?success=product_deteted_successfully");
}

 else{

   die(mysqli_error($conn));

 }

}







 ?>

