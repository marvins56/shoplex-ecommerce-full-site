
<?php  $search =""; ?>
<!DOCTYPE html>
<html lang="en">
  <!-- molla/index-4.html  22 Nov 2019 09:53:08 GMT -->
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <title>shoplexug</title>
    <meta name="keywords" content="HTML5 Template" />
    <meta name="description" content="eccommerce" />
    <meta name="author" content="shoplexug" />
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
    <link rel="stylesheet" href="assets/css/skins/skin-demo-4.css" />
    <link rel="stylesheet" href="assets/css/demos/demo-4.css" />
    <link rel="stylesheet" href="assets/css/demos/demo-5.css">

  </head>

  <body>
    <div class="page-wrapper">
      <header class="header header-intro-clearance header-4">
        <div class="header-top">
          <div class="container">
            <div class="header-left">
              <a href="tel:#"><i class="icon-phone"></i>Call: +256 759 143703/ 078429153</a>
            </div>
            <!-- End .header-left -->

            <div class="header-right">
              <ul class="top-menu">
                <li>
                  <a href="#">Links</a>
                  <ul>
                    <li>
                      <a href="login.php" data-toggle="modal"
                        >Sign in / Sign up</a
                      >
                    </li>
                  </ul>
                </li>
              </ul>
              <!-- End .top-menu -->
            </div>
            <!-- End .header-right -->
          </div>
          <!-- End .container -->
        </div>
        <!-- End .header-top -->

        <div class="header-middle">
          <div class="container">
            <div class="header-left">
              <button class="mobile-menu-toggler">
                <span class="sr-only">Toggle mobile menu</span>
                <i class="icon-bars"></i>
              </button>

              <a href="index.php" class="logo">
                <img
                  src="assets/images/demos/demo-4/logo.png"
                  alt="Molla Logo"
                  width="105"
                  height="25"
                />
              </a>
            </div>
            <!-- End .header-left -->

            <div class="header-center">
              <div
                class="header-search header-search-extended header-search-visible d-none d-lg-block"
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
                    <input
                      type="search"
                      class="form-control"
                      name="search"
                      id="q"
                      value="<?php echo $search; ?>"
                      placeholder="Search product ..."
                      required
                    />
                  </div>
                  <!-- End .header-search-wrapper -->
                </form>
              </div>
              <!-- End .header-search -->
            </div>

            <div class="header-right">



              <!-- End .compare-dropdown -->


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
             
            </div>
            <!-- End .header-left -->

            <div class="header-center">
              <nav class="main-nav">
                <ul class="menu sf-arrows">
                  <li class="megamenu-container active">
                    <a href="index.php" >Home</a>
                  </li>
                  <li>
                    <a href="category.php" >Shop</a>
                  </li>
                  <li>
                    <a href="user_profile.php" >Profile</a>
                  </li>

                  <li>
                    <a href="coming-soon.php" >coming soon</a>
                  </li>
                  <li>
                    <a href="contact.php" >Contact us</a>
                  </li>
                  <li>
                    <a href="login.php" >LOGIN</a>
                  </li>
                  <li>
                    <a href="logout.php" >logout</a>
                  </li>
                </ul>
                <!-- End .menu -->
              </nav>
              <!-- End .main-nav -->
            </div>
            <!-- End .header-center -->

          </div>
          <!-- End .container -->
        </div>
        <!-- End .header-bottom -->
      </header>
      <!-- End .header -->
