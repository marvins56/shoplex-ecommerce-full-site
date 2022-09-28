
<?php

include 'header.php';

$errors = array();
$id = $_GET['updateid'];
$query= "SELECT * FROM products where id = $id";
$result = mysqli_query($conn,$query);

$row = mysqli_fetch_assoc($result);
$price = "";
$productname = "";
$discount = "";
$category = "";
$description = "";
$description2 = "";


// week Deals
if(isset($_POST['products'])){

  // receive all input values from the form to preventig injection
  $productname = mysqli_real_escape_string($conn, $_POST['productname']);
    $price = mysqli_real_escape_string($conn, $_POST['price']);
  $description2 = mysqli_real_escape_string($conn, $_POST['description2']);

      $discount = mysqli_real_escape_string($conn, $_POST['discount']);
        $category = mysqli_real_escape_string($conn, $_POST['category']);

          //errors for the form
          if(empty($productname))
          {array_push($errors,"please enter product name");}

          if(empty($description2) )
          {array_push($errors,"please enter product description");}

                    if(empty($price) )
                    {array_push($errors,"please enter product price");}

                              if(empty($discount) )
                              {array_push($errors,"please enter product description");}

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


  $query = "UPDATE products SET id = '$id',productname = '$productname', price = '$price',
  description = '$description2',discount = '$discount',name ='".$name."', location='".$target_file."', category ='$category' where id ='$id'";

                                            $res =  mysqli_query($conn,$query);
                                                if($res){
                                                echo '<div class="p-3 mb-2 alert alert-success text-white alert" role="alert">SUCCESSFULLY UPDATED,   click <a href="tables.php">Here</a> to view changes</div>
                                                <div class="">

                                                </div>
                                                ';
                                                  }
                                              else{
                                              echo('<div class="p-3 mb-2 alert alert-danger text-white alert" role="alert">data entry failed</div>');
                                                }
                                            }else{
                                        echo('<div class="p-3 mb-2 alert alert-danger text-white alert" role="alert">product upload failed</div>');
                                            }
                                        }

                                    }else{
                                        array_push($errors,"Invalid file extension.");
                                    }

              }

}


?>


<div class="p-3 mb-2 alert alert-danger text-white alert" role="alert"><?php include 'errors.php'; ?></div>

  <div class="bg-gradient-secondary shadow-dark border-radius-lg py-3 pe-1">
    <div class="card-body">
      <form role="form" method="post" enctype="multipart/form-data">


        <div class="input-group input-group-outline mb-3">
          <label class="form-label text-white">product name</label>
          <input type="text" class="form-control text-white" name="productname" value="<?php echo $productname; ?>" autocomplete="off">
        </div>
        <div class="input-group input-group-outline mb-3">
          <label class="form-label text-white">product price</label>
          <input type="number" class="form-control text-white" name="price"  value="<?php echo $price; ?>" autocomplete="off">
        </div>
        <div class="input-group input-group-outline mb-3">
          <label class="form-label text-white">product description</label>
          <input type="text " class="form-control text-white" name="description2"  value="<?php echo $description2; ?>" autocomplete="off">
        </div>
        <div class="input-group input-group-outline mb-3">
          <label class="form-label text-white">product discount</label>
          <input type="number" class="form-control text-white" name="discount"  value="<?php echo $discount; ?>" autocomplete="off">
        </div>
        <div class="input-group input-group-outline mb-3">
          <label class="form-label text-white">product category</label>
          <input type="text" class="form-control text-white" name="category"  value="<?php echo $category; ?>"autocomplete="off">
        </div>

        <div class="input-group  text-white input-group-outline mb-3">
          <input type="file" name="file" class="form-control text-white"  autocomplete="off"/>
        </div>

        <div class="text-center">
          <input type="submit" name="products"  value="update" class="btn btn-lg bg-gradient-primary btn-lg w-100 mt-4 mb-0">
        </div>
      </form>
    </div>
        </div>
