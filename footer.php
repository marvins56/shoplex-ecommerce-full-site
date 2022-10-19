
      <footer class="footer">
       
        
          <!-- End .container -->
        </div>
        <!-- End .cta -->
        <div class="footer-middle">
          <div class="container">
            <div class="row">
              <div class="col-sm-6 col-lg-3">
                <div class="widget widget-about">
                  <img
                    src="assets/images/demos/demo-4/logo-footer.png"
                    class="footer-logo"
                    alt="Footer Logo"
                    width="105"
                    height="25"
                  />
                  <p>
                At  ShOpLeXUG, We offer better and good quality products and services to all our Customers
                  </p>

                  <div class="widget-call">
                    <i class="icon-phone"></i>
                    Got Question? Call us 24/7
                    <a href="tel:#">+256 784 292153</a>
                        <a href="tel:#">+256 759143703</a>
                  </div>
                  <!-- End .widget-call -->
                </div>
                <!-- End .widget about-widget -->
              </div>
              <!-- End .col-sm-6 col-lg-3 -->

              <div class="col-sm-6 col-lg-3">
                <div class="widget">
                  <h4 class="widget-title">Useful Links</h4>
                  <!-- End .widget-title -->

                  <ul class="widget-list">
                    <li><a href="about.php">About ShOpLeXUG</a></li>
                    <li><a href="about.php">Our Services</a></li>

                    <li><a href="contact.php">Contact us</a></li>
                  </ul>
                  <!-- End .widget-list -->
                </div>
                <!-- End .widget -->
              </div>
              <!-- End .col-sm-6 col-lg-3 -->

              <div class="col-sm-6 col-lg-3">
                <div class="widget">
                  <h4 class="widget-title">Customer Service</h4>
                  <!-- End .widget-title -->

                  <ul class="widget-list">
                    <h6 class="text-third">information about the items below is </h6>
                    <li><a href="#">Payment Methods</a></li>
                    <li><a href="#">Money-back guarantee!</a></li>
                    <li><a href="#">Returns</a></li>
                    <li><a href="#">Shipping</a></li>
                    <li><a href="#">Terms and conditions</a></li>
                    <li><a href="#">Privacy Policy</a></li>
                  </ul>
                  <!-- End .widget-list -->
                </div>
                <!-- End .widget -->
              </div>
              <!-- End .col-sm-6 col-lg-3 -->

              <div class="col-sm-6 col-lg-3">
                <div class="widget">
                  <a href="user_profile.php"><h4 class="widget-title">My Account</h4></a>
                  <!-- End .widget-title -->

                  <ul class="widget-list">
                    <li><a href="login.php">Sign In</a></li>

                    <li><a href="contact.php">Help</a></li>
                  </ul>
                  <!-- End .widget-list -->
                </div>
                <!-- End .widget -->
              </div>
              <!-- End .col-sm-6 col-lg-3 -->
            </div>
            <!-- End .row -->
          </div>
          <!-- End .container -->
        </div>
        <!-- End .footer-middle -->

        <div class="footer-bottom">
          <div class="container">
            <p class="footer-copyright">
            copyright  © <script>
                  document.write(new Date().getFullYear())
                </script>,
               ShOpLeXUG
            </p>
            <!-- End .footer-copyright -->
            <figure class="footer-payments">
              <img
                src="assets/images/payments.png"
                alt="Payment methods"
                width="272"
                height="20"
              />
            </figure>
            <!-- End .footer-payments -->
          </div>
          <!-- End .container -->
        </div>
        <!-- End .footer-bottom -->
      </footer>
      <!-- End .footer -->
    </div>
    <!-- End .page-wrapper -->
    <button id="scroll-top" title="Back to Top">
      <i class="icon-arrow-up"></i>
    </button>

    <!-- Mobile Menu -->
    <div class="mobile-menu-overlay"></div>
    <!-- End .mobil-menu-overlay -->

    <div class="mobile-menu-container mobile-menu-light">
      <div class="mobile-menu-wrapper">
        <span class="mobile-menu-close"><i class="icon-close"></i></span>

        <form action="search.php" method="post" class="mobile-search">
          <label for="mobile-search" class="sr-only">Search</label>
          <input
            type="search"
            class="form-control"
            name="search"
            value="<?php echo $search; ?>"
            id="mobile-search"
            placeholder="Search in..."
            required
          />
          <button class="btn btn-primary" type="submit">
            <i class="icon-search"></i>
          </button>
        </form>

        <ul class="nav nav-pills-mobile nav-border-anim" role="tablist">
          <li class="nav-item">
            <a
              class="nav-link active"
              id="mobile-menu-link"
              data-toggle="tab"
              href="#mobile-menu-tab"
              role="tab"
              aria-controls="mobile-menu-tab"
              aria-selected="true"
              >Menu</a
            >
          </li>
          <li class="nav-item">
            <a
              class="nav-link"
              id="mobile-cats-link"
              data-toggle="tab"
              href="#mobile-cats-tab"
              role="tab"
              aria-controls="mobile-cats-tab"
              aria-selected="false"
              >Categories</a
            >
          </li>
        </ul>

        <div class="tab-content">
          <div
            class="tab-pane fade show active"
            id="mobile-menu-tab"
            role="tabpanel"
            aria-labelledby="mobile-menu-link"
          >
            <nav class="mobile-nav">
              <ul class="mobile-menu">
                <li class="active">
                  <a href="index.php">Home</a>

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
                  </ul>
                </li>


              </ul>
            </nav>
            <!-- End .mobile-nav -->
          </div>
          <!-- .End .tab-pane -->



            <!-- End .mobile-cats-nav -->
          </div>
          <!-- .End .tab-pane -->
        </div>
        <!-- End .tab-content -->

        <div class="social-icons">
          <a href="#" class="social-icon" target="_blank" title="Facebook"
            ><i class="icon-facebook-f"></i
          ></a>
          <a href="#" class="social-icon" target="_blank" title="Twitter"
            ><i class="icon-twitter"></i
          > </a>
          <a href="https://instagram.com/ShOpLeXUG" class="social-icon" target="_blank" title="Instagram"
            ><i class="icon-instagram"></i
          ></a>
          <a href="#" class="social-icon" target="_blank" title="Youtube"
            ><i class="icon-youtube"></i
          ></a>
        </div>
        <!-- End .social-icons -->
      </div>
      <!-- End .mobile-menu-wrapper -->
    </div>
    <!-- End .mobile-menu-container -->

 
    </div>
    <!-- End .modal -->

   
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script>
        var showLoader = function (text) {
            $('#resultLoading').show();
            $('#resultLoading').find('.loader-text').html(text);
        };

        jQuery(document).ready(function () {
            jQuery(window).on("beforeunload ", function () {
                showLoader('Loading, please wait...');
            });
        });

        $("#loader").fadeOut(1000);
    </script>
    <!-- Plugins JS File -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/jquery.hoverIntent.min.js"></script>
    <script src="assets/js/jquery.waypoints.min.js"></script>
    <script src="assets/js/superfish.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/bootstrap-input-spinner.js"></script>
    <script src="assets/js/jquery.plugin.min.js"></script>
    <script src="assets/js/jquery.magnific-popup.min.js"></script>
    <script src="assets/js/jquery.countdown.min.js"></script>
    <!-- Main JS File -->
    <script src="assets/js/main.js"></script>
    <script src="assets/js/demos/demo-4.js"></script>
  </body>

  <!-- molla/index-4.html  22 Nov 2019 09:54:18 GMT -->
</html>

   
