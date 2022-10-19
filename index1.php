<?php  $search =""; 
include  'database.php';
$querybanner = "SELECT * from banner";
$resultbanner = mysqli_query($conn,$querybanner);
if($resultbanner){
  if(mysqli_num_rows($resultbanner) >
0){ while( $rowbanner = mysqli_fetch_assoc($resultbanner)){ $header1 =
$rowbanner['header']; $description1= $rowbanner['description']; $location1 =
$rowbanner['location']; } }} ?>

<!DOCTYPE html>
<html lang="en">
  <!-- molla/index-1.html  22 Nov 2019 09:55:06 GMT -->
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <title>Bernie's online Bar</title>
    <meta name="keywords" content="HTML5 Template" />
    <meta name="description" content="Molla - Bootstrap eCommerce Template" />
    <meta name="author" content="p-themes" />
    <!-- Favicon -->
    <link
      rel="apple-touch-icon"
      sizes="180x180"
      href="assets/images/icons/apple-touch-icon.png"
    />
    <link
      rel="icon"
      type="image/png"
      sizes="32x32"
      href="assets/images/icons/favicon-32x32.png"
    />
    <link
      rel="icon"
      type="image/png"
      sizes="16x16"
      href="assets/images/icons/favicon-16x16.png"
    />
    <link rel="manifest" href="assets/images/icons/site.html" />
    <link
      rel="mask-icon"
      href="assets/images/icons/safari-pinned-tab.svg"
      color="#666666"
    />
    <link rel="shortcut icon" href="assets/images/icons/favicon.ico" />
    <meta name="apple-mobile-web-app-title" content="Molla" />
    <meta name="application-name" content="Molla" />
    <meta name="msapplication-TileColor" content="#cc9966" />
    <meta
      name="msapplication-config"
      content="assets/images/icons/browserconfig.xml"
    />
    <meta name="theme-color" content="#ffffff" />
    <link
      rel="stylesheet"
      href="assets/vendor/line-awesome/line-awesome/line-awesome/css/line-awesome.min.css"
    />
    <!-- Plugins CSS File -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
    <link
      rel="stylesheet"
      href="assets/css/plugins/owl-carousel/owl.carousel.css"
    />
    <link
      rel="stylesheet"
      href="assets/css/plugins/magnific-popup/magnific-popup.css"
    />
    <link rel="stylesheet" href="assets/css/plugins/jquery.countdown.css" />
    <!-- Main CSS File -->
    <link rel="stylesheet" href="assets/css/style.css" />
    <link rel="stylesheet" href="assets/css/skins/skin-demo-2.css" />
    <link rel="stylesheet" href="assets/css/demos/demo-2.css" />
  </head>

  <body>
    <div class="page-wrapper">
      <header class="header header-2 header-intro-clearance">
        <div class="header-middle">
          <div class="container">
            <div class="header-left">
              <button class="mobile-menu-toggler">
                <span class="sr-only">Toggle mobile menu</span>
                <i class="icon-bars"></i>
              </button>

              <a href="index.html" class="logo">
                <img
                  src="assets/images/demos/demo-2/logo.png"
                  alt="Molla Logo"
                  width="105"
                  height="25"
                />
              </a>
            </div>
            <!-- End .header-left -->

            <div class="header-center">
              <div
                class="header-search header-search-extended header-search-visible header-search-no-radius d-none d-lg-block"
              >
                <a href="search.php" class="search-toggle" role="button"
                  ><i class="icon-search"></i
                ></a>
                <form action="search.php" method="post">
                  <div class="header-search-wrapper search-wrapper-wide">
                    <label for="search" class="sr-only">Search</label>
                    <button class="btn btn-primary" type="submit">
                      <i class="icon-search"></i>
                    </button>
                    <label for="q" class="sr-only">Search</label>
                    <input
                      type="search"
                      class="form-control"
                      name="search"
                      id="q"
                      value="<?php echo $search; ?>"
                      placeholder="Search product ..."
                      id="q"
                    />
                    <button class="btn btn-primary" type="submit">
                      <i class="icon-search"></i>
                    </button>
                  </div>
                  <!-- End .header-search-wrapper -->
                </form>
              </div>
              <!-- End .header-search -->
            </div>

            <div class="header-right">
              <div class="account">
                <a href="user_profile.php" title="My account">
                  <div class="icon">
                    <i class="icon-user"></i>
                  </div>
                  <p>Account</p>
                </a>
              </div>

              <!-- End .cart-dropdown -->
            </div>
            <!-- End .header-right -->
          </div>
          <!-- End .container -->
        </div>
        <!-- End .header-middle -->

        <div class="header-bottom sticky-header">
          <div class="container">
            <div class="header-left">
              <div class="dropdown category-dropdown">
                <a
                  href="#"
                  class="dropdown-toggle"
                  role="button"
                  data-toggle="dropdown"
                  aria-haspopup="true"
                  aria-expanded="false"
                  data-display="static"
                  title="Browse Categories"
                >
                  Browse Categories
                </a>

                <div class="dropdown-menu">
                  <nav class="side-nav">
                    <ul class="menu-vertical sf-arrows">
                
                      <?php 
                      $query = "SELECT * from category";
                      $result= mysqli_query($conn,$query);
                      if($result){
                        if(mysqli_num_rows($result) >0){ 
                            
                            while( $row = mysqli_fetch_assoc($result))
                            { 
                                $cat = $row['category'];  
                    echo('<li><a href="categorysearch.php?queryid='.$cat.'">'.$cat.'</a></li>');
                    } }}
                      
                      ?>
                      
                     
                    </ul>
                    <!-- End .menu-vertical -->
                  </nav>
                  <!-- End .side-nav -->
                </div>
                <!-- End .dropdown-menu -->
              </div>
              <!-- End .category-dropdown -->
            </div>
            <!-- End .header-left -->

            <div class="header-center">
              <nav class="main-nav">
                <ul class="menu sf-arrows">
                  <li class="megamenu-container active">
                    <a href="index.php">Home</a>
                  </li>
                  <li>
                    <a href="category.php">Shop</a>
                  </li>
                  <li>
                    <a href="coming-soon.php">coming soon</a>
                  </li>
                  <li>
                    <a href="contact.php">Contact us</a>
                  </li>
                </ul>
              </nav>
              <!-- End .main-nav -->
            </div>
            <!-- End .header-center -->

            <div class="header-right">
              <i class="la la-lightbulb-o"></i>
              <p>Clearance<span class="highlight">&nbsp;Up to 30% Off</span></p>
            </div>
          </div>
          <!-- End .container -->
        </div>
        <!-- End .header-bottom -->
      </header>
      <!-- End .header -->

      <main class="main">
        <div class="intro-slider-container">
          <div
            class="owl-carousel owl-simple owl-light owl-nav-inside"
            data-toggle="owl"
            data-owl-options='{"nav": false}'
          >
            <div
              class="intro-slide"
              style="
                background-image: url(assets/images/demos/demo-2/slider/slide-1.jpg);
              "
            >
              <div class="container intro-content">
                <h3 class="intro-subtitle">Bedroom Furniture</h3>
                <!-- End .h3 intro-subtitle -->
                <h1 class="intro-title">Find Comfort <br />That Suits You.</h1>
                <!-- End .intro-title -->

                <a href="category.html" class="btn btn-primary">
                  <span>Shop Now</span>
                  <i class="icon-long-arrow-right"></i>
                </a>
              </div>
              <!-- End .container intro-content -->
            </div>
            <!-- End .intro-slide -->

            <div
              class="intro-slide"
              style="
                background-image: url(assets/images/demos/demo-2/slider/slide-2.jpg);
              "
            >
              <div class="container intro-content">
                <h3 class="intro-subtitle">Deals and Promotions</h3>
                <!-- End .h3 intro-subtitle -->
                <h1 class="intro-title">
                  Ypperlig <br />Coffee Table <br /><span class="text-primary"
                    ><sup>$</sup>49,99</span
                  >
                </h1>
                <!-- End .intro-title -->

                <a href="category.html" class="btn btn-primary">
                  <span>Shop Now</span>
                  <i class="icon-long-arrow-right"></i>
                </a>
              </div>
              <!-- End .container intro-content -->
            </div>
            <!-- End .intro-slide -->

            <div
              class="intro-slide"
              style="
                background-image: url(assets/images/demos/demo-2/slider/slide-3.jpg);
              "
            >
              <div class="container intro-content">
                <h3 class="intro-subtitle">Living Room</h3>
                <!-- End .h3 intro-subtitle -->
                <h1 class="intro-title">
                  Make Your Living Room <br />Work For You.<br />
                  <span class="text-primary">
                    <sup class="text-white font-weight-light">from</sup
                    ><sup>$</sup>9,99
                  </span>
                </h1>
                <!-- End .intro-title -->

                <a href="category.html" class="btn btn-primary">
                  <span>Shop Now</span>
                  <i class="icon-long-arrow-right"></i>
                </a>
              </div>
              <!-- End .container intro-content -->
            </div>
            <!-- End .intro-slide -->
          </div>
          <!-- End .owl-carousel owl-simple -->

          <span class="slider-loader text-white"></span
          ><!-- End .slider-loader -->
        </div>
        <!-- End .intro-slider-container -->

        <div
          class="brands-border owl-carousel owl-simple"
          data-toggle="owl"
          data-owl-options='{
                    "nav": false, 
                    "dots": false,
                    "margin": 0,
                    "loop": false,
                    "responsive": {
                        "0": {
                            "items":2
                        },
                        "420": {
                            "items":3
                        },
                        "600": {
                            "items":4
                        },
                        "900": {
                            "items":5
                        },
                        "1024": {
                            "items":6
                        },
                        "1360": {
                            "items":7
                        }
                    }
                }'
        >
          <a href="#" class="brand">
            <img src="assets/images/brands/1.png" alt="Brand Name" />
          </a>

          <a href="#" class="brand">
            <img src="assets/images/brands/2.png" alt="Brand Name" />
          </a>

          <a href="#" class="brand">
            <img src="assets/images/brands/3.png" alt="Brand Name" />
          </a>

          <a href="#" class="brand">
            <img src="assets/images/brands/4.png" alt="Brand Name" />
          </a>

          <a href="#" class="brand">
            <img src="assets/images/brands/5.png" alt="Brand Name" />
          </a>

          <a href="#" class="brand">
            <img src="assets/images/brands/6.png" alt="Brand Name" />
          </a>

          <a href="#" class="brand">
            <img src="assets/images/brands/7.png" alt="Brand Name" />
          </a>
        </div>
        <!-- End .owl-carousel -->

        <div class="mb-3 mb-lg-5"></div>
     
        <!-- End .mb-6 -->

        <div class="container">
          <ul
            class="nav nav-pills nav-border-anim nav-big justify-content-center mb-3"
            role="tablist"
          >
            <li class="nav-item">
              <a
                class="nav-link active"
                id="products-featured-link"
                data-toggle="tab"
                href="#products-featured-tab"
                role="tab"
                aria-controls="products-featured-tab"
                aria-selected="true"
                >SAMPLE PRODUCTS</a
              >
            </li>
            <li class="nav-item">
              <a
                class="nav-link"
                id="products-sale-link"
                data-toggle="tab"
                href="#products-sale-tab"
                role="tab"
                aria-controls="products-sale-tab"
                aria-selected="false"
                >DEALS</a
              >
            </li>
        
          </ul>
        </div>
        <!-- End .container -->

        <div class="container-fluid">
          <div class="tab-content tab-content-carousel">
            <div
              class="tab-pane p-0 fade show active"
              id="products-featured-tab"
              role="tabpanel"
              aria-labelledby="products-featured-link"
            >
              <div
                class="owl-carousel owl-simple carousel-equal-height carousel-with-shadow"
                data-toggle="owl"
                data-owl-options='{
                                "nav": false, 
                                "dots": true,
                                "margin": 20,
                                "loop": false,
                                "responsive": {
                                    "0": {
                                        "items":2
                                    },
                                    "480": {
                                        "items":2
                                    },
                                    "768": {
                                        "items":3
                                    },
                                    "992": {
                                        "items":4
                                    },
                                    "1200": {
                                        "items":5
                                    },
                                    "1600": {
                                        "items":6,
                                        "nav": true
                                    }
                                }
                            }'
              >
                <div class="product product-11 text-center">
                  <figure class="product-media">
                    <a href="product.html">
                      <img
                        src="assets/images/demos/demo-2/products/product-1-1.jpg"
                        alt="Product image"
                        class="product-image"
                      />
                      <img
                        src="assets/images/demos/demo-2/products/product-1-2.jpg"
                        alt="Product image"
                        class="product-image-hover"
                      />
                    </a>

                    <div class="product-action-vertical">
                      <a href="#" class="btn-product-icon btn-wishlist"
                        ><span>add to wishlist</span></a
                      >
                    </div>
                    <!-- End .product-action-vertical -->
                  </figure>
                  <!-- End .product-media -->

                  <div class="product-body">
                    <h3 class="product-title">
                      <a href="product.html">Butler Stool Ladder</a>
                    </h3>
                    <!-- End .product-title -->
                    <div class="product-price">$251,00</div>
                    <!-- End .product-price -->
                  </div>
                  <!-- End .product-body -->
                  <div class="product-action">
                    <a href="#" class="btn-product btn-cart"
                      ><span>add to cart</span></a
                    >
                  </div>
                  <!-- End .product-action -->
                </div>
                <!-- End .product -->

                <div class="product product-11 text-center">
                  <figure class="product-media">
                    <a href="product.html">
                      <img
                        src="assets/images/demos/demo-2/products/product-2-1.jpg"
                        alt="Product image"
                        class="product-image"
                      />
                      <img
                        src="assets/images/demos/demo-2/products/product-2-2.jpg"
                        alt="Product image"
                        class="product-image-hover"
                      />
                    </a>

                    <div class="product-action-vertical">
                      <a href="#" class="btn-product-icon btn-wishlist"
                        ><span>add to wishlist</span></a
                      >
                    </div>
                    <!-- End .product-action-vertical -->
                  </figure>
                  <!-- End .product-media -->

                  <div class="product-body">
                    <h3 class="product-title">
                      <a href="product.html">Octo 4240</a>
                    </h3>
                    <!-- End .product-title -->
                    <div class="product-price">$746,00</div>
                    <!-- End .product-price -->

                    <div class="product-nav product-nav-dots">
                      <a href="#" class="active" style="background: #1f1e18"
                        ><span class="sr-only">Color name</span></a
                      >
                      <a href="#" style="background: #e8e8e8"
                        ><span class="sr-only">Color name</span></a
                      >
                    </div>
                    <!-- End .product-nav -->
                  </div>
                  <!-- End .product-body -->
                  <div class="product-action">
                    <a href="#" class="btn-product btn-cart"
                      ><span>add to cart</span></a
                    >
                  </div>
                  <!-- End .product-action -->
                </div>
                <!-- End .product -->

                <div class="product product-11 text-center">
                  <figure class="product-media">
                    <span class="product-label label-circle label-new"
                      >New</span
                    >
                    <a href="product.html">
                      <img
                        src="assets/images/demos/demo-2/products/product-3-1.jpg"
                        alt="Product image"
                        class="product-image"
                      />
                      <img
                        src="assets/images/demos/demo-2/products/product-3-2.jpg"
                        alt="Product image"
                        class="product-image-hover"
                      />
                    </a>

                    <div class="product-action-vertical">
                      <a href="#" class="btn-product-icon btn-wishlist"
                        ><span>add to wishlist</span></a
                      >
                    </div>
                    <!-- End .product-action-vertical -->
                  </figure>
                  <!-- End .product-media -->

                  <div class="product-body">
                    <h3 class="product-title">
                      <a href="product.html">Flow Slim Armchair</a>
                    </h3>
                    <!-- End .product-title -->
                    <div class="product-price">$970,00</div>
                    <!-- End .product-price -->
                  </div>
                  <!-- End .product-body -->
                  <div class="product-action">
                    <a href="#" class="btn-product btn-cart"
                      ><span>add to cart</span></a
                    >
                  </div>
                  <!-- End .product-action -->
                </div>
                <!-- End .product -->

                <div class="product product-11 text-center">
                  <figure class="product-media">
                    <span class="product-label label-circle label-sale"
                      >Sale</span
                    >
                    <a href="product.html">
                      <img
                        src="assets/images/demos/demo-2/products/product-4-1.jpg"
                        alt="Product image"
                        class="product-image"
                      />
                      <img
                        src="assets/images/demos/demo-2/products/product-4-2.jpg"
                        alt="Product image"
                        class="product-image-hover"
                      />
                    </a>

                    <div class="product-action-vertical">
                      <a href="#" class="btn-product-icon btn-wishlist"
                        ><span>add to wishlist</span></a
                      >
                    </div>
                    <!-- End .product-action-vertical -->
                  </figure>
                  <!-- End .product-media -->

                  <div class="product-body">
                    <h3 class="product-title">
                      <a href="product.html">Roots Sofa Bed</a>
                    </h3>
                    <!-- End .product-title -->
                    <div class="product-price">
                      <span class="new-price">$337,00</span>
                      <span class="old-price">Was $449,00</span>
                    </div>
                    <!-- End .product-price -->

                    <div class="product-nav product-nav-dots">
                      <a href="#" class="active" style="background: #878883"
                        ><span class="sr-only">Color name</span></a
                      >
                      <a href="#" style="background: #dfd5c2"
                        ><span class="sr-only">Color name</span></a
                      >
                    </div>
                    <!-- End .product-nav -->
                  </div>
                  <!-- End .product-body -->
                  <div class="product-action">
                    <a href="#" class="btn-product btn-cart"
                      ><span>add to cart</span></a
                    >
                  </div>
                  <!-- End .product-action -->
                </div>
                <!-- End .product -->

                <div class="product product-11 text-center">
                  <figure class="product-media">
                    <a href="product.html">
                      <img
                        src="assets/images/demos/demo-2/products/product-5-1.jpg"
                        alt="Product image"
                        class="product-image"
                      />
                      <img
                        src="assets/images/demos/demo-2/products/product-5-2.jpg"
                        alt="Product image"
                        class="product-image-hover"
                      />
                    </a>

                    <div class="product-action-vertical">
                      <a href="#" class="btn-product-icon btn-wishlist"
                        ><span>add to wishlist</span></a
                      >
                    </div>
                    <!-- End .product-action-vertical -->
                  </figure>
                  <!-- End .product-media -->

                  <div class="product-body">
                    <h3 class="product-title">
                      <a href="product.html">Petite Table Lamp</a>
                    </h3>
                    <!-- End .product-title -->
                    <div class="product-price">$675,00</div>
                    <!-- End .product-price -->

                    <div class="product-nav product-nav-dots">
                      <a href="#" class="active" style="background: #74543e"
                        ><span class="sr-only">Color name</span></a
                      >
                      <a href="#" style="background: #e8e8e8"
                        ><span class="sr-only">Color name</span></a
                      >
                    </div>
                    <!-- End .product-nav -->
                  </div>
                  <!-- End .product-body -->
                  <div class="product-action">
                    <a href="#" class="btn-product btn-cart"
                      ><span>add to cart</span></a
                    >
                  </div>
                  <!-- End .product-action -->
                </div>
                <!-- End .product -->

                <div class="product product-11 text-center">
                  <figure class="product-media">
                    <a href="product.html">
                      <img
                        src="assets/images/demos/demo-2/products/product-6-1.jpg"
                        alt="Product image"
                        class="product-image"
                      />
                      <img
                        src="assets/images/demos/demo-2/products/product-6-2.jpg"
                        alt="Product image"
                        class="product-image-hover"
                      />
                    </a>

                    <div class="product-action-vertical">
                      <a href="#" class="btn-product-icon btn-wishlist"
                        ><span>add to wishlist</span></a
                      >
                    </div>
                    <!-- End .product-action-vertical -->
                  </figure>
                  <!-- End .product-media -->

                  <div class="product-body">
                    <h3 class="product-title">
                      <a href="product.html">Elephant Armchair</a>
                    </h3>
                    <!-- End .product-title -->
                    <div class="product-price">$457,00</div>
                    <!-- End .product-price -->
                  </div>
                  <!-- End .product-body -->
                  <div class="product-action">
                    <a href="#" class="btn-product btn-cart"
                      ><span>add to cart</span></a
                    >
                  </div>
                  <!-- End .product-action -->
                </div>
                <!-- End .product -->

                <div class="product product-11 text-center">
                  <figure class="product-media">
                    <a href="product.html">
                      <img
                        src="assets/images/demos/demo-2/products/product-1-1.jpg"
                        alt="Product image"
                        class="product-image"
                      />
                      <img
                        src="assets/images/demos/demo-2/products/product-1-2.jpg"
                        alt="Product image"
                        class="product-image-hover"
                      />
                    </a>

                    <div class="product-action-vertical">
                      <a href="#" class="btn-product-icon btn-wishlist"
                        ><span>add to wishlist</span></a
                      >
                    </div>
                    <!-- End .product-action-vertical -->
                  </figure>
                  <!-- End .product-media -->

                  <div class="product-body">
                    <h3 class="product-title">
                      <a href="product.html">Butler Stool Ladder</a>
                    </h3>
                    <!-- End .product-title -->
                    <div class="product-price">$251,00</div>
                    <!-- End .product-price -->
                  </div>
                  <!-- End .product-body -->
                  <div class="product-action">
                    <a href="#" class="btn-product btn-cart"
                      ><span>add to cart</span></a
                    >
                  </div>
                  <!-- End .product-action -->
                </div>
                <!-- End .product -->
              </div>
              <!-- End .owl-carousel -->
            </div>
            <!-- .End .tab-pane -->
            <div
              class="tab-pane p-0 fade"
              id="products-sale-tab"
              role="tabpanel"
              aria-labelledby="products-sale-link"
            >
              <div
                class="owl-carousel owl-simple carousel-equal-height carousel-with-shadow"
                data-toggle="owl"
                data-owl-options='{
                                "nav": false, 
                                "dots": true,
                                "margin": 20,
                                "loop": false,
                                "responsive": {
                                    "0": {
                                        "items":2
                                    },
                                    "480": {
                                        "items":2
                                    },
                                    "768": {
                                        "items":3
                                    },
                                    "992": {
                                        "items":4
                                    },
                                    "1200": {
                                        "items":5
                                    },
                                    "1600": {
                                        "items":6,
                                        "nav": true
                                    }
                                }
                            }'
              >
                <div class="product product-11 text-center">
                  <figure class="product-media">
                    <a href="product.html">
                      <img
                        src="assets/images/demos/demo-2/products/product-5-1.jpg"
                        alt="Product image"
                        class="product-image"
                      />
                      <img
                        src="assets/images/demos/demo-2/products/product-5-2.jpg"
                        alt="Product image"
                        class="product-image-hover"
                      />
                    </a>

                    <div class="product-action-vertical">
                      <a href="#" class="btn-product-icon btn-wishlist"
                        ><span>add to wishlist</span></a
                      >
                    </div>
                    <!-- End .product-action-vertical -->
                  </figure>
                  <!-- End .product-media -->

                  <div class="product-body">
                    <h3 class="product-title">
                      <a href="product.html">Petite Table Lamp</a>
                    </h3>
                    <!-- End .product-title -->
                    <div class="product-price">$675,00</div>
                    <!-- End .product-price -->

                    <div class="product-nav product-nav-dots">
                      <a href="#" class="active" style="background: #74543e"
                        ><span class="sr-only">Color name</span></a
                      >
                      <a href="#" style="background: #e8e8e8"
                        ><span class="sr-only">Color name</span></a
                      >
                    </div>
                    <!-- End .product-nav -->
                  </div>
                  <!-- End .product-body -->
                  <div class="product-action">
                    <a href="#" class="btn-product btn-cart"
                      ><span>add to cart</span></a
                    >
                  </div>
                  <!-- End .product-action -->
                </div>
                <!-- End .product -->

                <div class="product product-11 text-center">
                  <figure class="product-media">
                    <a href="product.html">
                      <img
                        src="assets/images/demos/demo-2/products/product-6-1.jpg"
                        alt="Product image"
                        class="product-image"
                      />
                      <img
                        src="assets/images/demos/demo-2/products/product-6-2.jpg"
                        alt="Product image"
                        class="product-image-hover"
                      />
                    </a>

                    <div class="product-action-vertical">
                      <a href="#" class="btn-product-icon btn-wishlist"
                        ><span>add to wishlist</span></a
                      >
                    </div>
                    <!-- End .product-action-vertical -->
                  </figure>
                  <!-- End .product-media -->

                  <div class="product-body">
                    <h3 class="product-title">
                      <a href="product.html">Elephant Armchair</a>
                    </h3>
                    <!-- End .product-title -->
                    <div class="product-price">$457,00</div>
                    <!-- End .product-price -->
                  </div>
                  <!-- End .product-body -->
                  <div class="product-action">
                    <a href="#" class="btn-product btn-cart"
                      ><span>add to cart</span></a
                    >
                  </div>
                  <!-- End .product-action -->
                </div>
                <!-- End .product -->

                <div class="product product-11 text-center">
                  <figure class="product-media">
                    <a href="product.html">
                      <img
                        src="assets/images/demos/demo-2/products/product-1-1.jpg"
                        alt="Product image"
                        class="product-image"
                      />
                      <img
                        src="assets/images/demos/demo-2/products/product-1-2.jpg"
                        alt="Product image"
                        class="product-image-hover"
                      />
                    </a>

                    <div class="product-action-vertical">
                      <a href="#" class="btn-product-icon btn-wishlist"
                        ><span>add to wishlist</span></a
                      >
                    </div>
                    <!-- End .product-action-vertical -->
                  </figure>
                  <!-- End .product-media -->

                  <div class="product-body">
                    <h3 class="product-title">
                      <a href="product.html">Butler Stool Ladder</a>
                    </h3>
                    <!-- End .product-title -->
                    <div class="product-price">$251,00</div>
                    <!-- End .product-price -->
                  </div>
                  <!-- End .product-body -->
                  <div class="product-action">
                    <a href="#" class="btn-product btn-cart"
                      ><span>add to cart</span></a
                    >
                  </div>
                  <!-- End .product-action -->
                </div>
                <!-- End .product -->
              </div>
              <!-- End .owl-carousel -->
            </div>
            <!-- .End .tab-pane -->
            <div
              class="tab-pane p-0 fade"
              id="products-top-tab"
              role="tabpanel"
              aria-labelledby="products-top-link"
            >
              <div
                class="owl-carousel owl-simple carousel-equal-height carousel-with-shadow"
                data-toggle="owl"
                data-owl-options='{
                                "nav": false, 
                                "dots": true,
                                "margin": 20,
                                "loop": false,
                                "responsive": {
                                    "0": {
                                        "items":2
                                    },
                                    "480": {
                                        "items":2
                                    },
                                    "768": {
                                        "items":3
                                    },
                                    "992": {
                                        "items":4
                                    },
                                    "1200": {
                                        "items":5
                                    },
                                    "1600": {
                                        "items":6,
                                        "nav": true
                                    }
                                }
                            }'
              >
                <div class="product product-11 text-center">
                  <figure class="product-media">
                    <a href="product.html">
                      <img
                        src="assets/images/demos/demo-2/products/product-2-1.jpg"
                        alt="Product image"
                        class="product-image"
                      />
                      <img
                        src="assets/images/demos/demo-2/products/product-2-2.jpg"
                        alt="Product image"
                        class="product-image-hover"
                      />
                    </a>

                    <div class="product-action-vertical">
                      <a href="#" class="btn-product-icon btn-wishlist"
                        ><span>add to wishlist</span></a
                      >
                    </div>
                    <!-- End .product-action-vertical -->
                  </figure>
                  <!-- End .product-media -->

                  <div class="product-body">
                    <h3 class="product-title">
                      <a href="product.html">Octo 4240</a>
                    </h3>
                    <!-- End .product-title -->
                    <div class="product-price">$746,00</div>
                    <!-- End .product-price -->

                    <div class="product-nav product-nav-dots">
                      <a href="#" class="active" style="background: #1f1e18"
                        ><span class="sr-only">Color name</span></a
                      >
                      <a href="#" style="background: #e8e8e8"
                        ><span class="sr-only">Color name</span></a
                      >
                    </div>
                    <!-- End .product-nav -->
                  </div>
                  <!-- End .product-body -->
                  <div class="product-action">
                    <a href="#" class="btn-product btn-cart"
                      ><span>add to cart</span></a
                    >
                  </div>
                  <!-- End .product-action -->
                </div>
                <!-- End .product -->

                <div class="product product-11 text-center">
                  <figure class="product-media">
                    <span class="product-label label-circle label-new"
                      >New</span
                    >
                    <a href="product.html">
                      <img
                        src="assets/images/demos/demo-2/products/product-3-1.jpg"
                        alt="Product image"
                        class="product-image"
                      />
                      <img
                        src="assets/images/demos/demo-2/products/product-3-2.jpg"
                        alt="Product image"
                        class="product-image-hover"
                      />
                    </a>

                    <div class="product-action-vertical">
                      <a href="#" class="btn-product-icon btn-wishlist"
                        ><span>add to wishlist</span></a
                      >
                    </div>
                    <!-- End .product-action-vertical -->
                  </figure>
                  <!-- End .product-media -->

                  <div class="product-body">
                    <h3 class="product-title">
                      <a href="product.html">Flow Slim Armchair</a>
                    </h3>
                    <!-- End .product-title -->
                    <div class="product-price">$970,00</div>
                    <!-- End .product-price -->
                  </div>
                  <!-- End .product-body -->
                  <div class="product-action">
                    <a href="#" class="btn-product btn-cart"
                      ><span>add to cart</span></a
                    >
                  </div>
                  <!-- End .product-action -->
                </div>
                <!-- End .product -->

                <div class="product product-11 text-center">
                  <figure class="product-media">
                    <span class="product-label label-circle label-sale"
                      >Sale</span
                    >
                    <a href="product.html">
                      <img
                        src="assets/images/demos/demo-2/products/product-4-1.jpg"
                        alt="Product image"
                        class="product-image"
                      />
                      <img
                        src="assets/images/demos/demo-2/products/product-4-2.jpg"
                        alt="Product image"
                        class="product-image-hover"
                      />
                    </a>

                    <div class="product-action-vertical">
                      <a href="#" class="btn-product-icon btn-wishlist"
                        ><span>add to wishlist</span></a
                      >
                    </div>
                    <!-- End .product-action-vertical -->
                  </figure>
                  <!-- End .product-media -->

                  <div class="product-body">
                    <h3 class="product-title">
                      <a href="product.html">Roots Sofa Bed</a>
                    </h3>
                    <!-- End .product-title -->
                    <div class="product-price">
                      <span class="new-price">$337,00</span>
                      <span class="old-price">Was $449,00</span>
                    </div>
                    <!-- End .product-price -->

                    <div class="product-nav product-nav-dots">
                      <a href="#" class="active" style="background: #878883"
                        ><span class="sr-only">Color name</span></a
                      >
                      <a href="#" style="background: #dfd5c2"
                        ><span class="sr-only">Color name</span></a
                      >
                    </div>
                    <!-- End .product-nav -->
                  </div>
                  <!-- End .product-body -->
                  <div class="product-action">
                    <a href="#" class="btn-product btn-cart"
                      ><span>add to cart</span></a
                    >
                  </div>
                  <!-- End .product-action -->
                </div>
                <!-- End .product -->
              </div>
              <!-- End .owl-carousel -->
            </div>
            <!-- .End .tab-pane -->
          </div>
          <!-- End .tab-content -->
        </div>
        <!-- End .container-fluid -->

        <div class="mb-5"></div>
        <!-- End .mb-5 -->

        <div class="bg-light deal-container pt-5 pb-3 mb-5">
          <div class="container">
            <div class="row">
              <div class="col-lg-9">
                <div class="deal">
                  <div class="deal-content">
                    <h4>Limited Quantities</h4>
                    <h2>Deal of the Day</h2>

                    <h3 class="product-title">
                      <a href="product.html">POÄNG</a>
                    </h3>
                    <!-- End .product-title -->

                    <div class="product-price">
                      <span class="new-price">$149.00</span>
                      <span class="old-price">Was $240.00</span>
                    </div>
                    <!-- End .product-price -->

                    <div class="deal-countdown" data-until="+10h"></div>
                    <!-- End .deal-countdown -->

                    <a href="product.html" class="btn btn-primary">
                      <span>Shop Now</span><i class="icon-long-arrow-right"></i>
                    </a>
                  </div>
                  <!-- End .deal-content -->
                  <div class="deal-image">
                    <a href="product.html">
                      <img
                        src="assets/images/demos/demo-2/deal/product-1.jpg"
                        alt="image"
                      />
                    </a>
                  </div>
                  <!-- End .deal-image -->
                </div>
                <!-- End .deal -->
              </div>
              <!-- End .col-lg-9 -->

              <div class="col-lg-3">
                <div
                  class="banner banner-overlay banner-overlay-light text-center d-none d-lg-block"
                >
                  <a href="#">
                    <img
                      src="assets/images/demos/demo-2/banners/banner-5.jpg"
                      alt="Banner"
                    />
                  </a>

                  <div
                    class="banner-content banner-content-top banner-content-center"
                  >
                    <h4 class="banner-subtitle">The Best Choice</h4>
                    <!-- End .banner-subtitle -->
                    <h3 class="banner-title">AGEN</h3>
                    <!-- End .banner-title -->
                    <div class="banner-text text-primary">$49.99</div>
                    <!-- End .banner-text -->
                    <a href="#" class="btn btn-outline-gray banner-link"
                      >Shop Now<i class="icon-long-arrow-right"></i
                    ></a>
                  </div>
                  <!-- End .banner-content -->
                </div>
                <!-- End .banner -->
              </div>
              <!-- End .col-lg-3 -->
            </div>
            <!-- End .row -->
          </div>
          <!-- End .container -->
        </div>
        <!-- End .bg-light -->

        <div class="mb-6"></div>
        <!-- End .mb-6 -->

        <div class="container">
          <div class="heading heading-center mb-3">
            <h2 class="title">Top Selling Products</h2>
            <!-- End .title -->

            <ul
              class="nav nav-pills nav-border-anim justify-content-center"
              role="tablist"
            >
              <li class="nav-item">
                <a
                  class="nav-link active"
                  id="top-all-link"
                  data-toggle="tab"
                  href="#top-all-tab"
                  role="tab"
                  aria-controls="top-all-tab"
                  aria-selected="true"
                  >All</a
                >
              </li>
              <li class="nav-item">
                <a
                  class="nav-link"
                  id="top-fur-link"
                  data-toggle="tab"
                  href="#top-fur-tab"
                  role="tab"
                  aria-controls="top-fur-tab"
                  aria-selected="false"
                  >Furniture</a
                >
              </li>
              <li class="nav-item">
                <a
                  class="nav-link"
                  id="top-decor-link"
                  data-toggle="tab"
                  href="#top-decor-tab"
                  role="tab"
                  aria-controls="top-decor-tab"
                  aria-selected="false"
                  >Decoration</a
                >
              </li>
              <li class="nav-item">
                <a
                  class="nav-link"
                  id="top-light-link"
                  data-toggle="tab"
                  href="#top-light-tab"
                  role="tab"
                  aria-controls="top-light-tab"
                  aria-selected="false"
                  >Lighting</a
                >
              </li>
            </ul>
          </div>
          <!-- End .heading -->

          <div class="tab-content">
            <div
              class="tab-pane p-0 fade show active"
              id="top-all-tab"
              role="tabpanel"
              aria-labelledby="top-all-link"
            >
              <div class="products">
                <div class="row justify-content-center">
                  <div class="col-6 col-md-4 col-lg-3 col-xl-5col">
                    <div class="product product-11 text-center">
                      <figure class="product-media">
                        <a href="product.html">
                          <img
                            src="assets/images/demos/demo-2/products/product-7-1.jpg"
                            alt="Product image"
                            class="product-image"
                          />
                          <img
                            src="assets/images/demos/demo-2/products/product-7-2.jpg"
                            alt="Product image"
                            class="product-image-hover"
                          />
                        </a>

                        <div class="product-action-vertical">
                          <a href="#" class="btn-product-icon btn-wishlist"
                            ><span>add to wishlist</span></a
                          >
                        </div>
                        <!-- End .product-action-vertical -->
                      </figure>
                      <!-- End .product-media -->

                      <div class="product-body">
                        <div class="product-cat">
                          <a href="#">Lighting</a>
                        </div>
                        <!-- End .product-cat -->
                        <h3 class="product-title">
                          <a href="product.html">Petite Table Lamp</a>
                        </h3>
                        <!-- End .product-title -->
                        <div class="product-price">$401,00</div>
                        <!-- End .product-price -->
                      </div>
                      <!-- End .product-body -->
                      <div class="product-action">
                        <a href="#" class="btn-product btn-cart"
                          ><span>add to cart</span></a
                        >
                      </div>
                      <!-- End .product-action -->
                    </div>
                    <!-- End .product -->
                  </div>
                  <!-- End .col-sm-6 col-md-4 col-lg-3 -->

                  <div class="col-6 col-md-4 col-lg-3 col-xl-5col">
                    <div class="product product-11 text-center">
                      <figure class="product-media">
                        <a href="product.html">
                          <img
                            src="assets/images/demos/demo-2/products/product-8-1.jpg"
                            alt="Product image"
                            class="product-image"
                          />
                          <img
                            src="assets/images/demos/demo-2/products/product-8-2.jpg"
                            alt="Product image"
                            class="product-image-hover"
                          />
                        </a>

                        <div class="product-action-vertical">
                          <a href="#" class="btn-product-icon btn-wishlist"
                            ><span>add to wishlist</span></a
                          >
                        </div>
                        <!-- End .product-action-vertical -->
                      </figure>
                      <!-- End .product-media -->

                      <div class="product-body">
                        <div class="product-cat">
                          <a href="#">Decor</a>
                        </div>
                        <!-- End .product-cat -->
                        <h3 class="product-title">
                          <a href="product.html">Madra Log Holder</a>
                        </h3>
                        <!-- End .product-title -->
                        <div class="product-price">$401,00</div>
                        <!-- End .product-price -->

                        <div class="product-nav product-nav-dots">
                          <a href="#" class="active" style="background: #333333"
                            ><span class="sr-only">Color name</span></a
                          >
                          <a href="#" style="background: #927764"
                            ><span class="sr-only">Color name</span></a
                          >
                        </div>
                        <!-- End .product-nav -->
                      </div>
                      <!-- End .product-body -->
                      <div class="product-action">
                        <a href="#" class="btn-product btn-cart"
                          ><span>add to cart</span></a
                        >
                      </div>
                      <!-- End .product-action -->
                    </div>
                    <!-- End .product -->
                  </div>
                  <!-- End .col-sm-6 col-md-4 col-lg-3 -->

                  <div class="col-6 col-md-4 col-lg-3 col-xl-5col">
                    <div class="product product-11 text-center">
                      <figure class="product-media">
                        <span class="product-label label-circle label-sale"
                          >Sale</span
                        >
                        <a href="product.html">
                          <img
                            src="assets/images/demos/demo-2/products/product-9-1.jpg"
                            alt="Product image"
                            class="product-image"
                          />
                          <img
                            src="assets/images/demos/demo-2/products/product-9-2.jpg"
                            alt="Product image"
                            class="product-image-hover"
                          />
                        </a>

                        <div class="product-action-vertical">
                          <a href="#" class="btn-product-icon btn-wishlist"
                            ><span>add to wishlist</span></a
                          >
                        </div>
                        <!-- End .product-action-vertical -->
                      </figure>
                      <!-- End .product-media -->

                      <div class="product-body">
                        <div class="product-cat">
                          <a href="#">Furniture</a>
                        </div>
                        <!-- End .product-cat -->
                        <h3 class="product-title">
                          <a href="product.html">Garden Armchair</a>
                        </h3>
                        <!-- End .product-title -->
                        <div class="product-price">
                          <span class="new-price">$94,00</span>
                          <span class="old-price">Was $94,00</span>
                        </div>
                        <!-- End .product-price -->
                      </div>
                      <!-- End .product-body -->
                      <div class="product-action">
                        <a href="#" class="btn-product btn-cart"
                          ><span>add to cart</span></a
                        >
                      </div>
                      <!-- End .product-action -->
                    </div>
                    <!-- End .product -->
                  </div>
                  <!-- End .col-sm-6 col-md-4 col-lg-3 -->

                  <div class="col-6 col-md-4 col-lg-3 col-xl-5col">
                    <div class="product product-11 text-center">
                      <figure class="product-media">
                        <a href="product.html">
                          <img
                            src="assets/images/demos/demo-2/products/product-10-1.jpg"
                            alt="Product image"
                            class="product-image"
                          />
                          <img
                            src="assets/images/demos/demo-2/products/product-10-2.jpg"
                            alt="Product image"
                            class="product-image-hover"
                          />
                        </a>

                        <div class="product-action-vertical">
                          <a href="#" class="btn-product-icon btn-wishlist"
                            ><span>add to wishlist</span></a
                          >
                        </div>
                        <!-- End .product-action-vertical -->
                      </figure>
                      <!-- End .product-media -->

                      <div class="product-body">
                        <div class="product-cat">
                          <a href="#">Lighting</a>
                        </div>
                        <!-- End .product-cat -->
                        <h3 class="product-title">
                          <a href="product.html"
                            >Carronade Large Suspension Lamp</a
                          >
                        </h3>
                        <!-- End .product-title -->
                        <div class="product-price">$401,00</div>
                        <!-- End .product-price -->

                        <div class="product-nav product-nav-dots">
                          <a href="#" class="active" style="background: #e8e8e8"
                            ><span class="sr-only">Color name</span></a
                          >
                          <a href="#" style="background: #333333"
                            ><span class="sr-only">Color name</span></a
                          >
                        </div>
                        <!-- End .product-nav -->
                      </div>
                      <!-- End .product-body -->
                      <div class="product-action">
                        <a href="#" class="btn-product btn-cart"
                          ><span>add to cart</span></a
                        >
                      </div>
                      <!-- End .product-action -->
                    </div>
                    <!-- End .product -->
                  </div>
                  <!-- End .col-sm-6 col-md-4 col-lg-3 -->

                  <div class="col-6 col-md-4 col-lg-3 col-xl-5col">
                    <div class="product product-11 text-center">
                      <figure class="product-media">
                        <a href="product.html">
                          <img
                            src="assets/images/demos/demo-2/products/product-11-1.jpg"
                            alt="Product image"
                            class="product-image"
                          />
                          <img
                            src="assets/images/demos/demo-2/products/product-11-2.jpg"
                            alt="Product image"
                            class="product-image-hover"
                          />
                        </a>

                        <div class="product-action-vertical">
                          <a href="#" class="btn-product-icon btn-wishlist"
                            ><span>add to wishlist</span></a
                          >
                        </div>
                        <!-- End .product-action-vertical -->
                      </figure>
                      <!-- End .product-media -->

                      <div class="product-body">
                        <div class="product-cat">
                          <a href="#">Decor</a>
                        </div>
                        <!-- End .product-cat -->
                        <h3 class="product-title">
                          <a href="product.html">Original Outdoor Beanbag</a>
                        </h3>
                        <!-- End .product-title -->
                        <div class="product-price">$259,00</div>
                        <!-- End .product-price -->
                      </div>
                      <!-- End .product-body -->
                      <div class="product-action">
                        <a href="#" class="btn-product btn-cart"
                          ><span>add to cart</span></a
                        >
                      </div>
                      <!-- End .product-action -->
                    </div>
                    <!-- End .product -->
                  </div>
                  <!-- End .col-sm-6 col-md-4 col-lg-3 -->

                  <div class="col-6 col-md-4 col-lg-3 col-xl-5col">
                    <div class="product product-11 text-center">
                      <figure class="product-media">
                        <span class="product-label label-circle label-new"
                          >New</span
                        >
                        <a href="product.html">
                          <img
                            src="assets/images/demos/demo-2/products/product-12-1.jpg"
                            alt="Product image"
                            class="product-image"
                          />
                          <img
                            src="assets/images/demos/demo-2/products/product-12-2.jpg"
                            alt="Product image"
                            class="product-image-hover"
                          />
                        </a>

                        <div class="product-action-vertical">
                          <a href="#" class="btn-product-icon btn-wishlist"
                            ><span>add to wishlist</span></a
                          >
                        </div>
                        <!-- End .product-action-vertical -->
                      </figure>
                      <!-- End .product-media -->

                      <div class="product-body">
                        <div class="product-cat">
                          <a href="#">Furniture</a>
                        </div>
                        <!-- End .product-cat -->
                        <h3 class="product-title">
                          <a href="product.html">2-Seater</a>
                        </h3>
                        <!-- End .product-title -->
                        <div class="product-price">$3.107,00</div>
                        <!-- End .product-price -->
                      </div>
                      <!-- End .product-body -->
                      <div class="product-action">
                        <a href="#" class="btn-product btn-cart"
                          ><span>add to cart</span></a
                        >
                      </div>
                      <!-- End .product-action -->
                    </div>
                    <!-- End .product -->
                  </div>
                  <!-- End .col-sm-6 col-md-4 col-lg-3 -->

                  <div class="col-6 col-md-4 col-lg-3 col-xl-5col">
                    <div class="product product-11 text-center">
                      <figure class="product-media">
                        <a href="product.html">
                          <img
                            src="assets/images/demos/demo-2/products/product-13-1.jpg"
                            alt="Product image"
                            class="product-image"
                          />
                          <img
                            src="assets/images/demos/demo-2/products/product-13-2.jpg"
                            alt="Product image"
                            class="product-image-hover"
                          />
                        </a>

                        <div class="product-action-vertical">
                          <a href="#" class="btn-product-icon btn-wishlist"
                            ><span>add to wishlist</span></a
                          >
                        </div>
                        <!-- End .product-action-vertical -->
                      </figure>
                      <!-- End .product-media -->

                      <div class="product-body">
                        <div class="product-cat">
                          <a href="#">Furniture</a>
                        </div>
                        <!-- End .product-cat -->
                        <h3 class="product-title">
                          <a href="product.html">Wingback Chair</a>
                        </h3>
                        <!-- End .product-title -->
                        <div class="product-price">$2.486,00</div>
                        <!-- End .product-price -->
                      </div>
                      <!-- End .product-body -->
                      <div class="product-action">
                        <a href="#" class="btn-product btn-cart"
                          ><span>add to cart</span></a
                        >
                      </div>
                      <!-- End .product-action -->
                    </div>
                    <!-- End .product -->
                  </div>
                  <!-- End .col-sm-6 col-md-4 col-lg-3 -->

                  <div class="col-6 col-md-4 col-lg-3 col-xl-5col">
                    <div class="product product-11 text-center">
                      <figure class="product-media">
                        <a href="product.html">
                          <img
                            src="assets/images/demos/demo-2/products/product-14-1.jpg"
                            alt="Product image"
                            class="product-image"
                          />
                          <img
                            src="assets/images/demos/demo-2/products/product-14-2.jpg"
                            alt="Product image"
                            class="product-image-hover"
                          />
                        </a>

                        <div class="product-action-vertical">
                          <a href="#" class="btn-product-icon btn-wishlist"
                            ><span>add to wishlist</span></a
                          >
                        </div>
                        <!-- End .product-action-vertical -->
                      </figure>
                      <!-- End .product-media -->

                      <div class="product-body">
                        <div class="product-cat">
                          <a href="#">Decor</a>
                        </div>
                        <!-- End .product-cat -->
                        <h3 class="product-title">
                          <a href="product.html">Cushion Set 3 Pieces</a>
                        </h3>
                        <!-- End .product-title -->
                        <div class="product-price">$199,00</div>
                        <!-- End .product-price -->
                      </div>
                      <!-- End .product-body -->
                      <div class="product-action">
                        <a href="#" class="btn-product btn-cart"
                          ><span>add to cart</span></a
                        >
                      </div>
                      <!-- End .product-action -->
                    </div>
                    <!-- End .product -->
                  </div>
                  <!-- End .col-sm-6 col-md-4 col-lg-3 -->

                  <div class="col-6 col-md-4 col-lg-3 col-xl-5col">
                    <div class="product product-11 text-center">
                      <figure class="product-media">
                        <a href="product.html">
                          <img
                            src="assets/images/demos/demo-2/products/product-15-1.jpg"
                            alt="Product image"
                            class="product-image"
                          />
                          <img
                            src="assets/images/demos/demo-2/products/product-15-2.jpg"
                            alt="Product image"
                            class="product-image-hover"
                          />
                        </a>

                        <div class="product-action-vertical">
                          <a href="#" class="btn-product-icon btn-wishlist"
                            ><span>add to wishlist</span></a
                          >
                        </div>
                        <!-- End .product-action-vertical -->
                      </figure>
                      <!-- End .product-media -->

                      <div class="product-body">
                        <div class="product-cat">
                          <a href="#">Decor</a>
                        </div>
                        <!-- End .product-cat -->
                        <h3 class="product-title">
                          <a href="product.html">Cushion Set 3 Pieces</a>
                        </h3>
                        <!-- End .product-title -->
                        <div class="product-price">$199,00</div>
                        <!-- End .product-price -->
                      </div>
                      <!-- End .product-body -->
                      <div class="product-action">
                        <a href="#" class="btn-product btn-cart"
                          ><span>add to cart</span></a
                        >
                      </div>
                      <!-- End .product-action -->
                    </div>
                    <!-- End .product -->
                  </div>
                  <!-- End .col-sm-6 col-md-4 col-lg-3 -->

                  <div class="col-6 col-md-4 col-lg-3 col-xl-5col">
                    <div class="product product-11 text-center">
                      <figure class="product-media">
                        <a href="product.html">
                          <img
                            src="assets/images/demos/demo-2/products/product-16-1.jpg"
                            alt="Product image"
                            class="product-image"
                          />
                          <img
                            src="assets/images/demos/demo-2/products/product-16-2.jpg"
                            alt="Product image"
                            class="product-image-hover"
                          />
                        </a>

                        <div class="product-action-vertical">
                          <a href="#" class="btn-product-icon btn-wishlist"
                            ><span>add to wishlist</span></a
                          >
                        </div>
                        <!-- End .product-action-vertical -->
                      </figure>
                      <!-- End .product-media -->

                      <div class="product-body">
                        <div class="product-cat">
                          <a href="#">Lighting</a>
                        </div>
                        <!-- End .product-cat -->
                        <h3 class="product-title">
                          <a href="product.html">Carronade Table Lamp</a>
                        </h3>
                        <!-- End .product-title -->
                        <div class="product-price">$499,00</div>
                        <!-- End .product-price -->
                      </div>
                      <!-- End .product-body -->
                      <div class="product-action">
                        <a href="#" class="btn-product btn-cart"
                          ><span>add to cart</span></a
                        >
                      </div>
                      <!-- End .product-action -->
                    </div>
                    <!-- End .product -->
                  </div>
                  <!-- End .col-sm-6 col-md-4 col-lg-3 -->
                </div>
                <!-- End .row -->
              </div>
              <!-- End .products -->
            </div>
            <!-- .End .tab-pane -->
            <div
              class="tab-pane p-0 fade"
              id="top-fur-tab"
              role="tabpanel"
              aria-labelledby="top-fur-link"
            >
              <div class="products">
                <div class="row justify-content-center">
                  <div class="col-6 col-md-4 col-lg-3 col-xl-5col">
                    <div class="product product-11 text-center">
                      <figure class="product-media">
                        <span class="product-label label-circle label-sale"
                          >Sale</span
                        >
                        <a href="product.html">
                          <img
                            src="assets/images/demos/demo-2/products/product-9-1.jpg"
                            alt="Product image"
                            class="product-image"
                          />
                          <img
                            src="assets/images/demos/demo-2/products/product-9-2.jpg"
                            alt="Product image"
                            class="product-image-hover"
                          />
                        </a>

                        <div class="product-action-vertical">
                          <a href="#" class="btn-product-icon btn-wishlist"
                            ><span>add to wishlist</span></a
                          >
                        </div>
                        <!-- End .product-action-vertical -->
                      </figure>
                      <!-- End .product-media -->

                      <div class="product-body">
                        <div class="product-cat">
                          <a href="#">Furniture</a>
                        </div>
                        <!-- End .product-cat -->
                        <h3 class="product-title">
                          <a href="product.html">Garden Armchair</a>
                        </h3>
                        <!-- End .product-title -->
                        <div class="product-price">
                          <span class="new-price">$94,00</span>
                          <span class="old-price">Was $94,00</span>
                        </div>
                        <!-- End .product-price -->
                      </div>
                      <!-- End .product-body -->
                      <div class="product-action">
                        <a href="#" class="btn-product btn-cart"
                          ><span>add to cart</span></a
                        >
                      </div>
                      <!-- End .product-action -->
                    </div>
                    <!-- End .product -->
                  </div>
                  <!-- End .col-sm-6 col-md-4 col-lg-3 -->

                  <div class="col-6 col-md-4 col-lg-3 col-xl-5col">
                    <div class="product product-11 text-center">
                      <figure class="product-media">
                        <span class="product-label label-circle label-new"
                          >New</span
                        >
                        <a href="product.html">
                          <img
                            src="assets/images/demos/demo-2/products/product-12-1.jpg"
                            alt="Product image"
                            class="product-image"
                          />
                          <img
                            src="assets/images/demos/demo-2/products/product-12-2.jpg"
                            alt="Product image"
                            class="product-image-hover"
                          />
                        </a>

                        <div class="product-action-vertical">
                          <a href="#" class="btn-product-icon btn-wishlist"
                            ><span>add to wishlist</span></a
                          >
                        </div>
                        <!-- End .product-action-vertical -->
                      </figure>
                      <!-- End .product-media -->

                      <div class="product-body">
                        <div class="product-cat">
                          <a href="#">Furniture</a>
                        </div>
                        <!-- End .product-cat -->
                        <h3 class="product-title">
                          <a href="product.html">2-Seater</a>
                        </h3>
                        <!-- End .product-title -->
                        <div class="product-price">$3.107,00</div>
                        <!-- End .product-price -->
                      </div>
                      <!-- End .product-body -->
                      <div class="product-action">
                        <a href="#" class="btn-product btn-cart"
                          ><span>add to cart</span></a
                        >
                      </div>
                      <!-- End .product-action -->
                    </div>
                    <!-- End .product -->
                  </div>
                  <!-- End .col-sm-6 col-md-4 col-lg-3 -->

                  <div class="col-6 col-md-4 col-lg-3 col-xl-5col">
                    <div class="product product-11 text-center">
                      <figure class="product-media">
                        <a href="product.html">
                          <img
                            src="assets/images/demos/demo-2/products/product-13-1.jpg"
                            alt="Product image"
                            class="product-image"
                          />
                          <img
                            src="assets/images/demos/demo-2/products/product-13-2.jpg"
                            alt="Product image"
                            class="product-image-hover"
                          />
                        </a>

                        <div class="product-action-vertical">
                          <a href="#" class="btn-product-icon btn-wishlist"
                            ><span>add to wishlist</span></a
                          >
                        </div>
                        <!-- End .product-action-vertical -->
                      </figure>
                      <!-- End .product-media -->

                      <div class="product-body">
                        <div class="product-cat">
                          <a href="#">Furniture</a>
                        </div>
                        <!-- End .product-cat -->
                        <h3 class="product-title">
                          <a href="product.html">Wingback Chair</a>
                        </h3>
                        <!-- End .product-title -->
                        <div class="product-price">$2.486,00</div>
                        <!-- End .product-price -->
                      </div>
                      <!-- End .product-body -->
                      <div class="product-action">
                        <a href="#" class="btn-product btn-cart"
                          ><span>add to cart</span></a
                        >
                      </div>
                      <!-- End .product-action -->
                    </div>
                    <!-- End .product -->
                  </div>
                  <!-- End .col-sm-6 col-md-4 col-lg-3 -->
                </div>
                <!-- End .row -->
              </div>
              <!-- End .products -->
            </div>
            <!-- .End .tab-pane -->
            <div
              class="tab-pane p-0 fade"
              id="top-decor-tab"
              role="tabpanel"
              aria-labelledby="top-decor-link"
            >
              <div class="products">
                <div class="row justify-content-center">
                  <div class="col-6 col-md-4 col-lg-3 col-xl-5col">
                    <div class="product product-11 text-center">
                      <figure class="product-media">
                        <a href="product.html">
                          <img
                            src="assets/images/demos/demo-2/products/product-8-1.jpg"
                            alt="Product image"
                            class="product-image"
                          />
                          <img
                            src="assets/images/demos/demo-2/products/product-8-2.jpg"
                            alt="Product image"
                            class="product-image-hover"
                          />
                        </a>

                        <div class="product-action-vertical">
                          <a href="#" class="btn-product-icon btn-wishlist"
                            ><span>add to wishlist</span></a
                          >
                        </div>
                        <!-- End .product-action-vertical -->
                      </figure>
                      <!-- End .product-media -->

                      <div class="product-body">
                        <div class="product-cat">
                          <a href="#">Decor</a>
                        </div>
                        <!-- End .product-cat -->
                        <h3 class="product-title">
                          <a href="product.html">Madra Log Holder</a>
                        </h3>
                        <!-- End .product-title -->
                        <div class="product-price">$401,00</div>
                        <!-- End .product-price -->

                        <div class="product-nav product-nav-dots">
                          <a href="#" class="active" style="background: #333333"
                            ><span class="sr-only">Color name</span></a
                          >
                          <a href="#" style="background: #927764"
                            ><span class="sr-only">Color name</span></a
                          >
                        </div>
                        <!-- End .product-nav -->
                      </div>
                      <!-- End .product-body -->
                      <div class="product-action">
                        <a href="#" class="btn-product btn-cart"
                          ><span>add to cart</span></a
                        >
                      </div>
                      <!-- End .product-action -->
                    </div>
                    <!-- End .product -->
                  </div>
                  <!-- End .col-sm-6 col-md-4 col-lg-3 -->

                  <div class="col-6 col-md-4 col-lg-3 col-xl-5col">
                    <div class="product product-11 text-center">
                      <figure class="product-media">
                        <a href="product.html">
                          <img
                            src="assets/images/demos/demo-2/products/product-11-1.jpg"
                            alt="Product image"
                            class="product-image"
                          />
                          <img
                            src="assets/images/demos/demo-2/products/product-11-2.jpg"
                            alt="Product image"
                            class="product-image-hover"
                          />
                        </a>

                        <div class="product-action-vertical">
                          <a href="#" class="btn-product-icon btn-wishlist"
                            ><span>add to wishlist</span></a
                          >
                        </div>
                        <!-- End .product-action-vertical -->
                      </figure>
                      <!-- End .product-media -->

                      <div class="product-body">
                        <div class="product-cat">
                          <a href="#">Decor</a>
                        </div>
                        <!-- End .product-cat -->
                        <h3 class="product-title">
                          <a href="product.html">Original Outdoor Beanbag</a>
                        </h3>
                        <!-- End .product-title -->
                        <div class="product-price">$259,00</div>
                        <!-- End .product-price -->
                      </div>
                      <!-- End .product-body -->
                      <div class="product-action">
                        <a href="#" class="btn-product btn-cart"
                          ><span>add to cart</span></a
                        >
                      </div>
                      <!-- End .product-action -->
                    </div>
                    <!-- End .product -->
                  </div>
                  <!-- End .col-sm-6 col-md-4 col-lg-3 -->

                  <div class="col-6 col-md-4 col-lg-3 col-xl-5col">
                    <div class="product product-11 text-center">
                      <figure class="product-media">
                        <a href="product.html">
                          <img
                            src="assets/images/demos/demo-2/products/product-14-1.jpg"
                            alt="Product image"
                            class="product-image"
                          />
                          <img
                            src="assets/images/demos/demo-2/products/product-14-2.jpg"
                            alt="Product image"
                            class="product-image-hover"
                          />
                        </a>

                        <div class="product-action-vertical">
                          <a href="#" class="btn-product-icon btn-wishlist"
                            ><span>add to wishlist</span></a
                          >
                        </div>
                        <!-- End .product-action-vertical -->
                      </figure>
                      <!-- End .product-media -->

                      <div class="product-body">
                        <div class="product-cat">
                          <a href="#">Decor</a>
                        </div>
                        <!-- End .product-cat -->
                        <h3 class="product-title">
                          <a href="product.html">Cushion Set 3 Pieces</a>
                        </h3>
                        <!-- End .product-title -->
                        <div class="product-price">$199,00</div>
                        <!-- End .product-price -->
                      </div>
                      <!-- End .product-body -->
                      <div class="product-action">
                        <a href="#" class="btn-product btn-cart"
                          ><span>add to cart</span></a
                        >
                      </div>
                      <!-- End .product-action -->
                    </div>
                    <!-- End .product -->
                  </div>
                  <!-- End .col-sm-6 col-md-4 col-lg-3 -->

                  <div class="col-6 col-md-4 col-lg-3 col-xl-5col">
                    <div class="product product-11 text-center">
                      <figure class="product-media">
                        <a href="product.html">
                          <img
                            src="assets/images/demos/demo-2/products/product-15-1.jpg"
                            alt="Product image"
                            class="product-image"
                          />
                          <img
                            src="assets/images/demos/demo-2/products/product-15-2.jpg"
                            alt="Product image"
                            class="product-image-hover"
                          />
                        </a>

                        <div class="product-action-vertical">
                          <a href="#" class="btn-product-icon btn-wishlist"
                            ><span>add to wishlist</span></a
                          >
                        </div>
                        <!-- End .product-action-vertical -->
                      </figure>
                      <!-- End .product-media -->

                      <div class="product-body">
                        <div class="product-cat">
                          <a href="#">Decor</a>
                        </div>
                        <!-- End .product-cat -->
                        <h3 class="product-title">
                          <a href="product.html">Cushion Set 3 Pieces</a>
                        </h3>
                        <!-- End .product-title -->
                        <div class="product-price">$199,00</div>
                        <!-- End .product-price -->
                      </div>
                      <!-- End .product-body -->
                      <div class="product-action">
                        <a href="#" class="btn-product btn-cart"
                          ><span>add to cart</span></a
                        >
                      </div>
                      <!-- End .product-action -->
                    </div>
                    <!-- End .product -->
                  </div>
                  <!-- End .col-sm-6 col-md-4 col-lg-3 -->
                </div>
                <!-- End .row -->
              </div>
              <!-- End .products -->
            </div>
            <!-- .End .tab-pane -->
            <div
              class="tab-pane p-0 fade"
              id="top-light-tab"
              role="tabpanel"
              aria-labelledby="top-light-link"
            >
              <div class="products">
                <div class="row justify-content-center">
                  <div class="col-6 col-md-4 col-lg-3 col-xl-5col">
                    <div class="product product-11 text-center">
                      <figure class="product-media">
                        <a href="product.html">
                          <img
                            src="assets/images/demos/demo-2/products/product-7-1.jpg"
                            alt="Product image"
                            class="product-image"
                          />
                          <img
                            src="assets/images/demos/demo-2/products/product-7-2.jpg"
                            alt="Product image"
                            class="product-image-hover"
                          />
                        </a>

                        <div class="product-action-vertical">
                          <a href="#" class="btn-product-icon btn-wishlist"
                            ><span>add to wishlist</span></a
                          >
                        </div>
                        <!-- End .product-action-vertical -->
                      </figure>
                      <!-- End .product-media -->

                      <div class="product-body">
                        <div class="product-cat">
                          <a href="#">Lighting</a>
                        </div>
                        <!-- End .product-cat -->
                        <h3 class="product-title">
                          <a href="product.html">Petite Table Lamp</a>
                        </h3>
                        <!-- End .product-title -->
                        <div class="product-price">$401,00</div>
                        <!-- End .product-price -->
                      </div>
                      <!-- End .product-body -->
                      <div class="product-action">
                        <a href="#" class="btn-product btn-cart"
                          ><span>add to cart</span></a
                        >
                      </div>
                      <!-- End .product-action -->
                    </div>
                    <!-- End .product -->
                  </div>
                  <!-- End .col-sm-6 col-md-4 col-lg-3 -->

                  <div class="col-6 col-md-4 col-lg-3 col-xl-5col">
                    <div class="product product-11 text-center">
                      <figure class="product-media">
                        <a href="product.html">
                          <img
                            src="assets/images/demos/demo-2/products/product-10-1.jpg"
                            alt="Product image"
                            class="product-image"
                          />
                          <img
                            src="assets/images/demos/demo-2/products/product-10-2.jpg"
                            alt="Product image"
                            class="product-image-hover"
                          />
                        </a>

                        <div class="product-action-vertical">
                          <a href="#" class="btn-product-icon btn-wishlist"
                            ><span>add to wishlist</span></a
                          >
                        </div>
                        <!-- End .product-action-vertical -->
                      </figure>
                      <!-- End .product-media -->

                      <div class="product-body">
                        <div class="product-cat">
                          <a href="#">Lighting</a>
                        </div>
                        <!-- End .product-cat -->
                        <h3 class="product-title">
                          <a href="product.html"
                            >Carronade Large Suspension Lamp</a
                          >
                        </h3>
                        <!-- End .product-title -->
                        <div class="product-price">$401,00</div>
                        <!-- End .product-price -->

                        <div class="product-nav product-nav-dots">
                          <a href="#" class="active" style="background: #e8e8e8"
                            ><span class="sr-only">Color name</span></a
                          >
                          <a href="#" style="background: #333333"
                            ><span class="sr-only">Color name</span></a
                          >
                        </div>
                        <!-- End .product-nav -->
                      </div>
                      <!-- End .product-body -->
                      <div class="product-action">
                        <a href="#" class="btn-product btn-cart"
                          ><span>add to cart</span></a
                        >
                      </div>
                      <!-- End .product-action -->
                    </div>
                    <!-- End .product -->
                  </div>
                  <!-- End .col-sm-6 col-md-4 col-lg-3 -->

                  <div class="col-6 col-md-4 col-lg-3 col-xl-5col">
                    <div class="product product-11 text-center">
                      <figure class="product-media">
                        <a href="product.html">
                          <img
                            src="assets/images/demos/demo-2/products/product-16-1.jpg"
                            alt="Product image"
                            class="product-image"
                          />
                          <img
                            src="assets/images/demos/demo-2/products/product-16-2.jpg"
                            alt="Product image"
                            class="product-image-hover"
                          />
                        </a>

                        <div class="product-action-vertical">
                          <a href="#" class="btn-product-icon btn-wishlist"
                            ><span>add to wishlist</span></a
                          >
                        </div>
                        <!-- End .product-action-vertical -->
                      </figure>
                      <!-- End .product-media -->

                      <div class="product-body">
                        <div class="product-cat">
                          <a href="#">Lighting</a>
                        </div>
                        <!-- End .product-cat -->
                        <h3 class="product-title">
                          <a href="product.html">Carronade Table Lamp</a>
                        </h3>
                        <!-- End .product-title -->
                        <div class="product-price">$499,00</div>
                        <!-- End .product-price -->
                      </div>
                      <!-- End .product-body -->
                      <div class="product-action">
                        <a href="#" class="btn-product btn-cart"
                          ><span>add to cart</span></a
                        >
                      </div>
                      <!-- End .product-action -->
                    </div>
                    <!-- End .product -->
                  </div>
                  <!-- End .col-sm-6 col-md-4 col-lg-3 -->
                </div>
                <!-- End .row -->
              </div>
              <!-- End .products -->
            </div>
            <!-- .End .tab-pane -->
          </div>
          <!-- End .tab-content -->
        </div>
        <!-- End .container -->

        <div class="container">
          <hr class="mt-1 mb-6" />
        </div>
        <!-- End .container -->

        <div class="blog-posts">
          <div class="container">
            <h2 class="title text-center">From Our Blog</h2>
            <!-- End .title-lg text-center -->

            <div
              class="owl-carousel owl-simple carousel-with-shadow"
              data-toggle="owl"
              data-owl-options='{
                            "nav": false, 
                            "dots": true,
                            "items": 3,
                            "margin": 20,
                            "loop": false,
                            "responsive": {
                                "0": {
                                    "items":1
                                },
                                "600": {
                                    "items":2
                                },
                                "992": {
                                    "items":3
                                }
                            }
                        }'
            >
              <article class="entry entry-display">
                <figure class="entry-media">
                  <a href="single.html">
                    <img
                      src="assets/images/demos/demo-2/blog/post-1.jpg"
                      alt="image desc"
                    />
                  </a>
                </figure>
                <!-- End .entry-media -->

                <div class="entry-body text-center">
                  <div class="entry-meta">
                    <a href="#">Nov 22, 2018</a>, 0 Comments
                  </div>
                  <!-- End .entry-meta -->

                  <h3 class="entry-title">
                    <a href="single.html">Sed adipiscing ornare.</a>
                  </h3>
                  <!-- End .entry-title -->

                  <div class="entry-content">
                    <a href="single.html" class="read-more">Continue Reading</a>
                  </div>
                  <!-- End .entry-content -->
                </div>
                <!-- End .entry-body -->
              </article>
              <!-- End .entry -->

              <article class="entry entry-display">
                <figure class="entry-media">
                  <a href="single.html">
                    <img
                      src="assets/images/demos/demo-2/blog/post-2.jpg"
                      alt="image desc"
                    />
                  </a>
                </figure>
                <!-- End .entry-media -->

                <div class="entry-body text-center">
                  <div class="entry-meta">
                    <a href="#">Dec 12, 2018</a>, 0 Comments
                  </div>
                  <!-- End .entry-meta -->

                  <h3 class="entry-title">
                    <a href="single.html">Fusce lacinia arcuet nulla.</a>
                  </h3>
                  <!-- End .entry-title -->

                  <div class="entry-content">
                    <a href="single.html" class="read-more">Continue Reading</a>
                  </div>
                  <!-- End .entry-content -->
                </div>
                <!-- End .entry-body -->
              </article>
              <!-- End .entry -->

              <article class="entry entry-display">
                <figure class="entry-media">
                  <a href="single.html">
                    <img
                      src="assets/images/demos/demo-2/blog/post-3.jpg"
                      alt="image desc"
                    />
                  </a>
                </figure>
                <!-- End .entry-media -->

                <div class="entry-body text-center">
                  <div class="entry-meta">
                    <a href="#">Dec 19, 2018</a>, 2 Comments
                  </div>
                  <!-- End .entry-meta -->

                  <h3 class="entry-title">
                    <a href="single.html">Quisque volutpat mattis eros.</a>
                  </h3>
                  <!-- End .entry-title -->

                  <div class="entry-content">
                    <a href="single.html" class="read-more">Continue Reading</a>
                  </div>
                  <!-- End .entry-content -->
                </div>
                <!-- End .entry-body -->
              </article>
              <!-- End .entry -->
            </div>
            <!-- End .owl-carousel -->

            <div class="more-container text-center mt-2">
              <a href="blog.html" class="btn btn-outline-darker btn-more"
                ><span>View more articles</span
                ><i class="icon-long-arrow-right"></i
              ></a>
            </div>
            <!-- End .more-container -->
          </div>
          <!-- End .container -->
        </div>
        <!-- End .blog-posts -->
      </main>
      <?php include 'footer.php'; ?>

