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

        "Authorization: Bearer FLWSECK_TEST-e67e2ac9351911695d11fcb719b9343d-X",

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

  $errors = array();
  
  if(($status != $trans_status) OR ($trans_id != $id)){
      header("Location: paymentfailed.php?txtref=$reference&status=$status");    
    exit;

  }else  if(($status == "cancelled")){
    header("Location: paymentfailed.php?txtref=$reference&status=$status");   
    exit;

  }else  if(($status == "successful")){
      header("Location: paymentsuccess.php?txtref=$reference&status=$status");   

    exit;

  }
  else{
 
      header("Location: paymentsuccess.php?txtref=$reference&status=$status");       
    exit; 
  }


  curl_close($curl);

}

?>

