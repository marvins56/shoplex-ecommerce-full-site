<?php







 include 'head.php';



include 'database.php';


$queryid = $_GET["queryid"];

 $errors = array();

?>

  <div class="container for-you">

    <div class="products">

      <div class="row justify-content-center">

        <?php
        if(!empty($queryid)){

  $query = "SELECT * FROM products WHERE category ='$queryid'";

  $res = mysqli_query($conn,$query);

  $results = mysqli_num_rows($res);

  if($results > 0){

  while ($row  = mysqli_fetch_assoc($res)) {

  $id = $row['id'];

  $productname = $row['productname'];

  $price = $row['price'];

  $discount = $row['discount'];

  $location = $row['location'];

  $category = $row['category'];





  echo '

          <div class="col-6 col-md-4 col-lg-3">

            <div class="product product-2">

              <figure class="product-media">

                <span class="product-label label-circle label-sale"

                  >Sale</span

                >

                <a   href="product.php?productid='.$id.'">

                  <img

                    src="Admin/'.$location.'"

                    alt="Product image"

                    class="product-image"

                  />

                </a>



                <div class="product-action-vertical">

                  <a

                  href="product.php?productid='.$id.'"

                    class="btn-product-icon btn-wishlist"

                    title="Add to wishlist"

                  ></a>

                </div>

                <!-- End .product-action -->



                <div class="product-action">

                  <a

                    href="product.php?productid='.$id.'"

                    class="btn-product btn-cart"

                    title="Add to cart"

                    ><span>add to cart</span></a

                  >

                  <a

                    href="'.$location.'"

                    class="btn-product btn-quickview"

                    title="Quick view"

                    ><span>quick view</span></a

                  >

                </div>

                <!-- End .product-action -->

              </figure>

              <!-- End .product-media -->



              <div class="product-body">

                <div class="product-cat">

                  <a href="#">'.$category.'</a>

                </div>

                <!-- End .product-cat -->

                <h3 class="product-title">

                  <a href="product.php?productid='.$id.'"

                    >'.$productname.'</a

                  >

                </h3>

                <!-- End .product-title -->

                <div class="product-price">

                  <span class="new-price">shs '.$price.'</span>

                  <span class="old-price"> discount '.$discount.'</span>

                </div>

                <!-- End .product-price -->







              </div>

              <!-- End .product-body -->

            </div>

            <!-- End .product -->

          </div>



  ';

  }



  }else {

    echo '<div class="alert alert-danger " role="alert">

      '.$results.' results  found!!

    </div>';

  }



}

                              ?>





      </div>

    </div>

    </div>



<?php include 'errors.php'; ?>











<?php include 'footer.php'; ?>

