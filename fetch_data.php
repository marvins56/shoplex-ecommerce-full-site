<?php


if(isset($_POST["action"]))
{
	$query = "
		SELECT * FROM products
	";
	if(isset($_POST["minimum_price"], $_POST["maximum_price"]) && !empty($_POST["minimum_price"]) && !empty($_POST["maximum_price"]))
	{
		$query .= "
		 AND price BETWEEN '".$_POST["minimum_price"]."' AND '".$_POST["maximum_price"]."'
		";
	}
	if(isset($_POST["weight"]))
	{
		$brand_filter = implode("','", $_POST["weight"]);
		$query .= "
		 AND weight IN('".$brand_filter."')
		";
	}
	if(isset($_POST["height"]))
	{
		$height_filter = implode("','", $_POST["height"]);
		$query .= "
		 AND height IN('".$height_filter."')
		";
	}
	if(isset($_POST["width"]))
	{
		$width_filter = implode("','", $_POST["width"]);
		$query .= "
		 AND width IN('".$width_filter."')
		";
	}

	$statement = $connect->prepare($query);
	$statement->execute();
	$result = $statement->fetchAll();
	$total_row = $statement->rowCount();
	$output = '';
	if($total_row > 0)
	{
		foreach($result as $row)
		{
			$output .= '
			<div class="col-6 col-md-4 col-lg-4 col-xl-3">
    <div class="product">
        <figure class="product-media">
            <span class="product-label label-new">New</span>
            <a href="product.html">
              <a href="product.php?productid='.$row['id'].'">  <img src="system/pages/'.$row['location'].'" alt="Product image" class="product-image"></a>
            </a>

            <div class="product-action-vertical">
                <a href="addtochart.php?productid='.$row['id'].'" class="btn-product-icon btn-wishlist btn-expandable"><span>add to chart</span></a>
            </div><!-- End .product-action -->

            <div class="product-action action-icon-top">
                <a href="addtochart.php?productid='.$row['id'].'"class="btn-product btn-cart"><span>add to cart</span></a>
                <a href="product.php?productid='.$row['id'].'"class="btn-product btn-cart"><span>view detail</span></a>

            </div><!-- End .product-action -->
        </figure><!-- End .product-media -->

        <div class="product-body">
            <div class="product-cat">
                <a href="#">category :'.$row['category'].'</a>
            </div><!-- End .product-cat -->
            <h3 class="product-title">'.$row['productname'].'</h3><!-- End .product-title -->
            <div class="product-price">
              shs '.$row['price'].'
            </div><!-- End .product-price -->

        </div><!-- End .product-body -->
    </div><!-- End .product -->
</div><!-- End .col-sm-6 col-lg-4 col-xl-3 -->
			';
		}
	}
	else
	{
		$output = '<h3>No Data Found</h3>';
	}
	echo $output;
}

?>