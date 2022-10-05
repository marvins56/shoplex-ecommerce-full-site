<?php

include('database.php');

if(isset($_GET["transaction_id"]) AND isset($_GET["status"])  AND isset($_GET["tx_ref"])){

    $trans_id = htmlspecialchars($_GET['transaction_id']);

    $trans_status = htmlspecialchars($_GET['status']);

    $trans_ref = htmlspecialchars($_GET['tx_ref']);

    //Verify Endpoint

    $url = "https://api.flutterwave.com/v3/transactions/".$trans_id."/verify";



    //Create cURL session

    $curl = curl_init($url);



    //Turn off SSL checker

    curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, 0);



    //Decide the request that you want

    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);



    curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "GET");



    //Set the API headers

    curl_setopt($curl, CURLOPT_HTTPHEADER, [

        "Authorization: Bearer FLWSECK-019c7aede86c7e57cbd57a33d12e5268-X",

        "Content-Type: Application/json"

    ]);



    //Run cURL

    $run = curl_exec($curl);



    //Check for erros

    $error = curl_error($curl);

    if($error){

        die("Curl returned some errors: " . $error);

    }



   //echo"<pre>" . $run . "</pre>";

   //Convert to json obj

   $result = json_decode($run);


  $status = $result->data->status;

  $message = $result->message;

  $id = $result->data->id;

  $reference =  $result->data->tx_ref;

  $amount =  $result->data->amount;

  $charged_amount = $result->data->charged_amount;

  $fullName =  $result->data->customer->name;

  $email =  $result->data->customer->email;

  $phone =  $result->data->customer->phone_number;

  
  if(($status != $trans_status) OR ($trans_id != $id)){

    $randrefs = (int)$_SESSION['random_ref'];
    $query = "UPDATE orders SET status = '$status'  where random_ref ='$randrefs'";
    
    $resultr = mysqli_query($conn,$query);
   
    if($resultr){
     header("Location: paymentfailed.php");
    }
    exit;
  }
  
  else if(($status == "cancelled")){

    $randrefs = (int)$_SESSION['random_ref'];
    $query = "UPDATE orders SET status = '$status'  where random_ref ='$randrefs'";
    $resultr = mysqli_query($conn,$query);
    
    if($resultr){
     header("Location: paymentfailed.php");
    }
    exit;

  }
  
  else{
 
    $randref = $_SESSION['random_ref'];
    $query = "UPDATE orders SET status = '$status'  where random_ref ='$randref'";
    
    $resultr = mysqli_query($conn,$query);
    
    if($resultr){
        header("Location: paymentsuccess.php");   
    }
    exit;
  }

  curl_close($curl);

}

?>

