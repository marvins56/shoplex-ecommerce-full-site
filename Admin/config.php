<?php 
include 'database.php';

$errors = array();
$header ="";
$description5 = "";
$description2 = "";
$detaildescription = "";
$detaildescription2 = "";
$dates ="";
$file = "";
$discount = "";
$discount2 = "";
$price = "";
$price2 = "";
$code= "";
$code2 = "";
$category = "";
$category2 = "";
$productname = "";
$productname2 = "";
$url= "";

$width = "";
$width2 = "";
$height = "";
$height2 = "";
$packaging = "";
$packaging2 = "";
$weight2 = "";
$weight = "";
$categories = "";
if(isset($_POST['category_submit'])){
  $cat = mysqli_real_escape_string($conn, $_POST['cats']);

           if(empty($cat))
           {array_push($errors,"please enter product category");}
           if (count($errors) == 0){
// checking if user exists
$user_check_query = "SELECT * FROM category WHERE category='$cat' LIMIT 1";
$result = mysqli_query($conn, $user_check_query);
$cateexixts = mysqli_fetch_assoc($result);

      if ($cateexixts) { // if user exists
        
        if ($cateexixts['category'] === $cat) {
          array_push($errors, "Category already exists");
        }

      }else{


        $query = "INSERT INTO category (category) values ('$cat')";
        $res =  mysqli_query($conn,$query);
        if($res){
        
        echo('
        <div class="alert alert-success alert-dismissible " role="alert">
        CATEGORY UPLOADED SUCCESSFULLY
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        
        ');
          }
        else{
        echo('
        <div class="alert alert-danger alert-dismissible " role="alert">
        data entry failed
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        ');
        }
        
      }


           }
 
}

if(isset($_POST['banner'])){

  // receive all input values from the form to preventig injection
  $header = mysqli_real_escape_string($conn, $_POST['header']);
  $description1 = mysqli_real_escape_string($conn, $_POST['description']);

          //errors for the form
          if(empty($header))
          {array_push($errors,"please enter header");}

          if(empty($description1) )
          {array_push($errors,"please enter banner description");}

              if (count($errors) == 0) {


                $maxsize = 5242880; // 5MB

                          $name = $_FILES['file']['name'];
                          $target_dir = "images/";
                          $target_file = $target_dir . $_FILES["file"]["name"];

                          // Select file type
                          $videoFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

                          // Valid file extensions
                          $extensions_arr = array("jpg","png","jpeg");
                          // Check extension
                                    if( in_array($videoFileType,$extensions_arr) ){

                                        // Check file size
                                        if(($_FILES['file']['size'] >= $maxsize) || ($_FILES["file"]["size"] == 0)) {
                                            echo "File too large. File must be less than 5MB.";
                                        }else{
                                            // Upload
                                            if(move_uploaded_file($_FILES['file']['tmp_name'],$target_file)){
                                              $query= "SELECT * FROM banner";
                                              $result = mysqli_query($conn,$query);


                                              if( mysqli_num_rows($result) > 0){ 
                                                 while($row = mysqli_fetch_assoc($result)){
                                                $id3 = $row['id'];

                                              }}
                                            

                                                // Insert record
                                                $query = "UPDATE banner SET id = '$id3', header= '$header',
                                                description = '$description1',name ='".$name."', location='".$target_file."'  where id ='$id3'";
// $query = "INSERT INTO banner (header,description,name,location) values ('$header','$description1','".$name."','".$target_file."')";


                                            $res =mysqli_query($conn,$query);
                                                if($res){
                                                echo('
                                                
                                                <div class="alert alert-success alert-dismissible " role="alert">
                                                banner updated sucessfully
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                      </div>');
                                                  }

                                              else{
                                            array_push($errors,"database connection failed");
                                                }
                                            }else{
                                            array_push($errors,"upload failed");
                                            }
                                        }

                                    }else{
                                        array_push($errors,"Invalid file extension.");
                                    }

              }

}


// uploading images


if(isset($_POST['products'])){

  // receive all input values from the form to preventig injection
  $productname = mysqli_real_escape_string($conn, $_POST['productname']);
    $price = mysqli_real_escape_string($conn, $_POST['price']);
  $description5 = mysqli_real_escape_string($conn, $_POST['description']);
$detaildescription  = mysqli_real_escape_string($conn, $_POST['detaildescription']);
      $discount = mysqli_real_escape_string($conn, $_POST['discount']);
        $category = mysqli_real_escape_string($conn, $_POST['category']);
        $width = mysqli_real_escape_string($conn, $_POST['width']);
        $height =  mysqli_real_escape_string($conn, $_POST['height']);
            $weight =  mysqli_real_escape_string($conn, $_POST['weight']);
                $packaging =  mysqli_real_escape_string($conn, $_POST['packaging']);
                $code =  mysqli_real_escape_string($conn, $_POST['code']);

          //errors for the form
          if(empty($productname))
          {array_push($errors,"please enter product name");}
          if(empty($code))
          {array_push($errors,"please enter product code");}

          if(empty($description5) )
          {array_push($errors,"please enter product description");}
          if(empty($detaildescription) )
          {array_push($errors,"please enter product detailed description");}

                    if(empty($price) )
                    {array_push($errors,"please enter product price");}

                              if(empty($discount) )
                              {array_push($errors,"please enter product discount");}

                                        if(empty($category) )
                                        {array_push($errors,"please enter product category");}


              if (count($errors) == 0) {


                $maxsize = 5242880; // 5MB

                          $name = $_FILES['file']['name'];
                          $target_dir = "products/";
                          $target_file = $target_dir . $_FILES["file"]["name"];

                          // Select file type
                          $videoFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

                          // Valid file extensions
                          $extensions_arr = array("jpg","png","jpeg","gif");
                          // Check extension
                                    if( in_array($videoFileType,$extensions_arr) ){

                                        // Check file size
                                        if(($_FILES['file']['size'] >= $maxsize) || ($_FILES["file"]["size"] == 0)) {
                                            echo('<div class="p-3 mb-2 bg-warning text-white alert">FILE TOO BIG ULPAOD FILE LESS THAN 5MBS</div>');
                                        }else{
                                            // Upload
                                            if(move_uploaded_file($_FILES['file']['tmp_name'],$target_file)){
                                              $tf = $target_file;
                                                // Insert record
                                                $query = "INSERT INTO products (productname,price,description,detaildescription,width,height,weight,packaging,discount,code,name,location,category)
                                                   VALUES('$productname','$price','$description5','$detaildescription','$width','$height','$weight','$packaging','$discount','$code','".$name."','".$target_file."','$category')";

                                            $res =  mysqli_query($conn,$query);
                                                if($res){
                                                  if( mysqli_num_rows($res) > 0)
{
  echo(' 
  <div class="content-wrapper">
    
            <div class="container-xxl flex-grow-1 container-p-y">
  <div class="alert alert-success alert-dismissible w-100 ml-5 " role="alert">
  product  uploaded sucessfully
<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
</div>
</div>');
}

                            
                                                  }
                                              else{
                                              echo('
                                              <div class="content-wrapper">
    
                                              <div class="container-xxl flex-grow-1 container-p-y">
                                              <div class="alert alert-danger alert-dismissible " role="alert">
                                              data entry failed
                      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    </div>
                    </div>');
                    
                                                }
                                            }else{
                                        echo('
                                        <div class="content-wrapper">
                                        <div class="container-xxl flex-grow-1 container-p-y">
                                        <div class="alert alert-danger alert-dismissible " role="alert">
                                       PRODUCT UPLOAD FAILED
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>
              </div>
              </div>
                                        
                                        
                                       ');
                                            }
                                        }

                                    }else{
                                        array_push($errors,"Invalid file extension.");
                                    }

              }

}

// week Deals
if(isset($_POST['deals'])){

  // receive all input values from the form to preventig injection
  $productname2 = mysqli_real_escape_string($conn, $_POST['productname2']);
    $price2 = mysqli_real_escape_string($conn, $_POST['price2']);
    $code2 = mysqli_real_escape_string($conn, $_POST['code2']);
  $description2 = mysqli_real_escape_string($conn, $_POST['description2']);
$detaildescription2 = mysqli_real_escape_string($conn, $_POST['detaildescription2']);
      $discount2 = mysqli_real_escape_string($conn, $_POST['discount2']);
        $category2 = mysqli_real_escape_string($conn, $_POST['category2']);
        $width2 = mysqli_real_escape_string($conn, $_POST['width2']);
        $height2 =  mysqli_real_escape_string($conn, $_POST['height2']);
            $weight2 =  mysqli_real_escape_string($conn, $_POST['weight2']);
                $packaging2 =  mysqli_real_escape_string($conn, $_POST['packaging2']);

          //errors for the form
          if(empty($productname2))
          {array_push($errors,"please enter product name");}
          if(empty($code2))
          {array_push($errors,"please enter product code");}

          if(empty($description2) )
          {array_push($errors,"please enter product description");}
          if(empty($detaildescription2) )
          {array_push($errors,"please enter product detailed description");}


                    if(empty($price2) )
                    {array_push($errors,"please enter product price");}

                              if(empty($discount2) )
                              {array_push($errors,"please enter product discount");}

                                        if(empty($category2) )
                                        {array_push($errors,"please enter product category");}


              if (count($errors) == 0) {


                $maxsize = 5242880; // 5MB

                          $name = $_FILES['file']['name'];
                          $target_dir = "products/";
                          $target_file = $target_dir . $_FILES["file"]["name"];

                          // Select file type
                          $videoFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

                          // Valid file extensions
                          $extensions_arr = array("jpg","png","jpeg","gif");
                          // Check extension
                                    if( in_array($videoFileType,$extensions_arr) ){

                                        // Check file size
                                        if(($_FILES['file']['size'] >= $maxsize) || ($_FILES["file"]["size"] == 0)) {
                                            echo('<div class="p-3 mb-2 bg-warning text-white alert">FILE TOO BIG ULPAOD FILE LESS THAN 5MBS</div>');
                                        }else{
                                            // Upload
                                            if(move_uploaded_file($_FILES['file']['tmp_name'],$target_file)){
                                              $tf = $target_file;
                                                // Insert record
                                              $query = "INSERT INTO deals (productname,price,description,detaildescription,width,height,weight,packaging,discount,code,name,location,category)
                                                 VALUES('$productname2','$price2','$description2','$detaildescription2','$width2','$height2','$weight2','$packaging2','$discount2','$code2','".$name."','".$target_file."','$category2')";

                                            $res =  mysqli_query($conn,$query);
                                                if($res){

                                                echo('
                                                <div class="content-wrapper">
                                                <div class="container-xxl flex-grow-1 container-p-y">
                                                <div
                                                class="bs-toast toast fade show bg-success  w-100  ml-5"
                                                role="alert"
                                                aria-live="assertive"
                                                aria-atomic="true"
                                                >
                                                <div class="toast-header">
                                                  <i class="bx bx-bell me-2"></i>
                                                  <div class="me-auto fw-semibold">NOTIFICATION</div>
                                                  <small>Now</small>
                                                  <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                                                </div>
                                                <div class="toast-body">
                                                PRODUCT UPLOADED SUCCESSFULLY
                                                </div>
                                                </div>
                                                <div class="content-wrapper">
                                                <div class="container-xxl flex-grow-1 container-p-y">
                                                
                                              ');
                                                  }
                                              else{
                                              echo('
                                              <div class="content-wrapper">
                                              <div class="container-xxl flex-grow-1 container-p-y">
                                              <div
                                              class="bs-toast toast fade show bg-danger"
                                              role="alert"
                                              aria-live="assertive"
                                              aria-atomic="true"
                                              >
                                              <div class="toast-header">
                                                <i class="bx bx-bell me-2"></i>
                                                <div class="me-auto fw-semibold">NOTIFICATION</div>
                                                <small>Now</small>
                                                <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                                              </div>
                                              <div class="toast-body">
                                              data entry failed
                                              </div>
                                              </div>
                                              </div>
                                              </div>
                                              
');
                                                }
                                            }else{
                                        echo('
                                        <div class="content-wrapper">
                                        <div class="container-xxl flex-grow-1 container-p-y">
                                        <div
                                        class="bs-toast toast fade show bg-danger"
                                        role="alert"
                                        aria-live="assertive"
                                        aria-atomic="true"
                                        >
                                        <div class="toast-header">
                                          <i class="bx bx-bell me-2"></i>
                                          <div class="me-auto fw-semibold">NOTIFICATION</div>
                                          <small>Now</small>
                                          <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                                        </div>
                                        <div class="toast-body">
                                        product upload failed
                                        </div>
                                        </div>
                                        </div>
                                        </div>
                   ');
                                            }
                                        }

                                    }else{
                                        array_push($errors,"Invalid file extension.");
                                    }

              }

}
// posix_times


if(isset($_POST['time'])){

  // receive all input values from the form to preventig injection
  $dates = mysqli_real_escape_string($conn, $_POST['dates']);
  $url = $_POST['url'];

          //errors for the form
          if(empty($dates))
          {array_push($errors,"please enter dates");}
          if(empty($url))
          {array_push($errors,"please enter embeded code url");}

              if (count($errors) == 0) {


                $maxsize = 5242880; // 5MB

                          $name = $_FILES['file']['name'];
                          $target_dir = "images/";
                          $target_file = $target_dir . $_FILES["file"]["name"];

                          // Select file type
                          $videoFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

                          // Valid file extensions
                          $extensions_arr = array("jpg","png","jpeg","gif");
                          // Check extension
                                    if( in_array($videoFileType,$extensions_arr) ){

                                        // Check file size
                                        if(($_FILES['file']['size'] >= $maxsize) || ($_FILES["file"]["size"] == 0)) {
                                            echo "File too large. File must be less than 5MB.";
                                        }else{
                                            // Upload
                                            if(move_uploaded_file($_FILES['file']['tmp_name'],$target_file)){
                                              $query= "SELECT * FROM deeal_time";
                                              $result = mysqli_query($conn,$query);

                                              while($row = mysqli_fetch_assoc($result)){
                                                $id_time = $row['id'];

                                              }

                                                // Insert record
                                                $query = "UPDATE deeal_time SET id = '$id_time' , start_time = '$dates',url = '$url',name ='".$name."', location='".$target_file."'  where id ='$id_time'";


                                            $res =mysqli_query($conn,$query);
                                                if($res){
                                                echo('
                                                <div
                class="bs-toast toast fade show bg-success"
                role="alert"
                aria-live="assertive"
                aria-atomic="true"
                >
                <div class="toast-header">
                  <i class="bx bx-bell me-2"></i>
                  <div class="me-auto fw-semibold">NOTIFICATION</div>
                  <small>Now</small>
                  <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                </div>
                <div class="toast-body">
                DEAL DEADLINE SET
                </div>
                </div>
                        ');
                                                  }

                                              else{
                                            array_push($errors,"database connection failed");
                                                }
                                            }else{
                                            array_push($errors,"upload failed");
                                            }
                                        }

                                    }else{
                                        array_push($errors,"Invalid file extension.");
                                    }

              }

}


 ?>
