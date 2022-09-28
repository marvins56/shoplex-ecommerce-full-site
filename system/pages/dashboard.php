<?php include 'config.php' ?>
<?php include 'errors.php'; ?>
<!-- End Navbar -->
    <div class="container-fluid py-4">
      <div class="row">
        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
          <div class="card">
            <div class="card-header p-3 pt-2">
              <div class="icon icon-lg icon-shape bg-gradient-dark shadow-dark text-center border-radius-xl mt-n4 position-absolute">
                <i class="material-icons opacity-10 btns22">weekend</i>
              </div>
              <div class="text-end pt-1">
              <h1  class="text-sm mb-0 text-capitalize">PRODUCTS</h1>
                <p class="text-sm mb-0 text-capitalize">

                </p>

		<!-- TABLE TOP ROW HEADINGS-->


              </div>
            </div>
            <hr class="dark horizontal my-0">
            <div class="card-footer p-3">
              <p class="mb-0"><span class="text-success text-sm font-weight-bolder">
                <?php
                  $query = "SELECT COUNT(*) FROM products";
          $result = mysqli_query($conn,$query);
          $rows = mysqli_fetch_row($result);
          $total=  $rows[0];
          echo $total . "  products";
          ?></p>
              </span>

            </div>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
          <div class="card">
            <div class="card-header p-3 pt-2">
              <div class="icon icon-lg icon-shape bg-gradient-primary shadow-primary text-center border-radius-xl mt-n4 position-absolute">
                <i class="material-icons opacity-10">schedule</i>
              </div>
              <div class="text-end pt-1">

             <p class="text-sm mb-0 text-capitalize">CATEGORIES</p>
             <p class="text-sm mb-0 text-capitalize">

             </p>

              </div>
            </div>
            <hr class="dark horizontal my-0">
            <div class="card-footer p-3">
              <p class="mb-0"><span class="text-success text-sm font-weight-bolder">
                <?php
                  $query = "SELECT COUNT(distinct(category)) FROM products";
          $result = mysqli_query($conn,$query);
          $rows = mysqli_fetch_row($result);
      $total=  $rows[0];
      echo $total . " categories";
      ?></p>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
          <div class="card">
            <div class="card-header p-3 pt-2">
              <div class="icon icon-lg icon-shape bg-gradient-success shadow-success text-center border-radius-xl mt-n4 position-absolute">
                <i class="material-icons opacity-10">today</i>
              </div>
              <div class="text-end pt-1">
                <p class="text-sm mb-0 text-capitalize">WEEKLY DEALS</p>

                </p>

              </div>
            </div>
            <hr class="dark horizontal my-0">
            <div class="card-footer p-3">
              <p class="mb-0"><span class="text-success text-sm font-weight-bolder">
                <?php
                  $query = "SELECT COUNT(*) FROM deals";
          $result = mysqli_query($conn,$query);
          $rows = mysqli_fetch_row($result);
      $total=  $rows[0];
      echo $total . " Available deal(s)";
      ?></p>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
          <div class="card">
            <div class="card-header p-3 pt-2">
              <div class="icon icon-lg icon-shape bg-gradient-success shadow-success text-center border-radius-xl mt-n4 position-absolute">
                <i class="material-icons opacity-10">today</i>
              </div>
              <div class="text-end pt-1">
                <p class="text-sm mb-0 text-capitalize">ORDERS</p>

            </div>
            <hr class="dark horizontal my-0">
            <div class="card-footer p-3">
              <p class="mb-0"><span class="text-success text-sm font-weight-bolder">
                <?php
                $query = "SELECT COUNT(*) FROM orders";
            $result = mysqli_query($conn,$query);
            $rows = mysqli_fetch_row($result);
            $total=  $rows[0];
            echo $total . " availabe orders";
            ?>
              </p>

            </div>
          </div>
        </div>

      </div>
      <div class="row mt-4">
        <div class="col-lg-4 col-md-6 mt-4 mb-4">
          <div class="card z-index-2 ">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2 bg-transparent">
              <div class="bg-gradient-warning shadow-warning border-radius-lg py-3 pe-1">

                  <div class="card-body">
                    <form role="form" method="post" enctype="multipart/form-data" style="color:white;">

                      <div class="input-group input-group-outline mb-3">
                        <label class="form-label text-white">Banner Header</label>
                        <input type="text" class="form-control text-white" name="header"  value="<?php echo $header; ?>"autocomplete="off">
                      </div>
                      <div class="input-group input-group-outline mb-3">
                        <label class="form-label text-white">Banner descriptionn</label>
                        <textarea name="description" rows="5" cols="30" autocomplete="off" value="<?php echo $description; ?>" style="background: transparent; " class="text-white"></textarea>
                      </div>

                      <div class="input-group input-group-outline mb-3">

                        <input type="file" name="file" class="form-control text-white"  autocomplete="off"/>
                      </div>

                      <div class="text-center">
                        <input type="submit" name="banner"  value="submit" class="btn btn-lg bg-gradient-primary btn-lg w-100 mt-4 mb-0">
                      </div>
                    </form>
                  </div>

              </div>
            </div>
            <div class="card-body">
              <h6 class="mb-0 ">edit front page banner</h6>
              <p class="text-sm ">upload image and description of banner area</p>
              <hr class="dark horizontal">
              <div class="d-flex ">
                <i class="material-icons text-sm my-auto me-1">schedule</i>
                <p class="mb-0 text-sm"></p>
              </div>
            </div>
          </div>
        </div>




        <div class="col-lg-4 col-md-6 mt-4 mb-4">
          <div class="card z-index-2  ">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2 bg-transparent">
              <div class="bg-success shadow-secondary  border-radius-lg py-3 pe-1">
                <div class="card-body">

                  <form role="form" method="post" enctype="multipart/form-data">

                    <div class="input-group input-group-outline mb-3">
                      <label class="form-label text-white">product name</label>
                      <input type="text" class="form-control text-white" name="productname"  value="<?php echo $productname; ?> "autocomplete="off">
                    </div>
                    <div class="input-group input-group-outline mb-3">
                      <label class="form-label text-white">product price</label>
                      <input type="number" class="form-control text-white" name="price" value="<?php echo $price; ?>" autocomplete="off">
                    </div>
                    <div class="input-group input-group-outline mb-3">
                      <label class="form-label text-white"> description</label>
                      <input type="text " class="form-control text-white" name="description"  value="<?php echo $description5; ?> "autocomplete="off">
                    </div>
                    <div class="input-group input-group-outline mb-3">
                      <label class="form-label text-white">detailed description</label>
                      <input type="text " class="form-control text-white" name="detaildescription"  value="<?php echo $detaildescription; ?> "autocomplete="off">
                    </div>
                    <div class="input-group input-group-outline mb-3">
                      <label class="form-label text-white">product Width</label>
                      <input type="number" class="form-control text-white" name="width"  value="<?php echo $width; ?> "autocomplete="off">
                    </div>
                    <div class="input-group input-group-outline mb-3">
                      <label class="form-label text-white">product height</label>
                      <input type="number" class="form-control text-white" name="height"  value="<?php echo $height; ?> "autocomplete="off">
                    </div>
                    <div class="input-group input-group-outline mb-3">
                      <label class="form-label text-white">product weight</label>
                      <input type="number" class="form-control text-white" name="weight"  value="<?php echo $weight; ?> "autocomplete="off">
                    </div>
                    <div class="input-group input-group-outline mb-3">
                      <label class="form-label text-white">product packaging</label>
                      <input type="text" class="form-control text-white" name="packaging"  value="<?php echo $packaging; ?> "autocomplete="off">
                    </div>
                    <div class="input-group input-group-outline mb-3">
                      <label class="form-label text-white"> discount</label>
                      <input type="number" class="form-control text-white" name="discount"  value="<?php echo $discount; ?> "autocomplete="off">
                    </div>
                    <div class="input-group input-group-outline mb-3">
                      <label class="form-label text-white">product  category</label>
                      <input type="text" class="form-control text-white" name="category"  value="<?php echo $category; ?>" autocomplete="off">
                    </div>
                    <div class="input-group input-group-outline mb-3">
                      <label class="form-label text-white">product  code</label>
                      <input type="text" class="form-control text-white" name="code"  value="<?php echo $code; ?>" autocomplete="off">
                    </div>

                    <div class="input-group  text-white input-group-outline mb-3">
                      <input type="file" name="file" class="form-control text-white"  autocomplete="off"/>
                    </div>


                    <div class="text-center">
                      <input type="submit" name="products"  value="upload" class="btn btn-lg bg-gradient-primary btn-lg w-100 mt-4 mb-0">
                    </div>
                  </form>
                </div>
              </div>
            </div>
            <div class="card-body">
              <h6 class="mb-0 "> PRODUCT UPLOAD PART</h6>
              <p class="text-sm "> (<span class="font-weight-bolder">upload</span>) products to be shown to the user using the above form  </p>
              <hr class="dark horizontal">
              <div class="d-flex ">
                <i class="material-icons text-sm my-auto me-1">schedule</i>
                <p class="mb-0 text-sm"> ALL PRODUCT UPLOAD </p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 mt-4 mb-3">
          <div class="card z-index-2 ">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2 bg-transparent">
              <div class="bg-gradient-primary shadow-dark border-radius-lg py-3 pe-1">
                <div class="card-body">
                  <form role="form" method="post" enctype="multipart/form-data">

                    <div class="input-group input-group-outline mb-3">
                      <label class="form-label text-white">product name</label>
                      <input type="text" class="form-control text-white" name="productname2"  value="<?php echo $productname2; ?> "autocomplete="off">
                    </div>
                    <div class="input-group input-group-outline mb-3">
                      <label class="form-label text-white">product price</label>
                      <input type="number" class="form-control text-white" name="price2" value="<?php echo $price2; ?>" autocomplete="off">
                    </div>
                    <div class="input-group input-group-outline mb-3">
                      <label class="form-label text-white">deal description</label>
                      <input type="text " class="form-control text-white" name="description2"  value="<?php echo $description2; ?> "autocomplete="off">
                    </div>
                    <div class="input-group input-group-outline mb-3">
                      <label class="form-label text-white">detailed description</label>
                      <input type="text " class="form-control text-white" name="detaildescription2"  value="<?php echo $detaildescription2; ?> "autocomplete="off">
                    </div>
                    <div class="input-group input-group-outline mb-3">
                      <label class="form-label text-white">product Width</label>
                      <input type="number" class="form-control text-white" name="width2"  value="<?php echo $width2; ?> "autocomplete="off">
                    </div>
                    <div class="input-group input-group-outline mb-3">
                      <label class="form-label text-white">product height</label>
                      <input type="number" class="form-control text-white" name="height2"  value="<?php echo $height2; ?> "autocomplete="off">
                    </div>
                    <div class="input-group input-group-outline mb-3">
                      <label class="form-label text-white">product weight</label>
                      <input type="number" class="form-control text-white" name="weight2"  value="<?php echo $weight2; ?> "autocomplete="off">
                    </div>
                    <div class="input-group input-group-outline mb-3">
                      <label class="form-label text-white">product packaging</label>
                      <input type="text" class="form-control text-white" name="packaging2"  value="<?php echo $packaging2; ?> "autocomplete="off">
                    </div>
                    <div class="input-group input-group-outline mb-3">
                      <label class="form-label text-white">deal discount</label>
                      <input type="number" class="form-control text-white" name="discount2"  value="<?php echo $discount2; ?> "autocomplete="off">
                    </div>
                    <div class="input-group input-group-outline mb-3">
                      <label class="form-label text-white">product deal category</label>
                      <input type="text" class="form-control text-white" name="category2"  value="<?php echo $category2; ?>" autocomplete="off">
                    </div>
                    <div class="input-group input-group-outline mb-3">
                      <label class="form-label text-white">product deal code</label>
                      <input type="text" class="form-control text-white" name="code2"  value="<?php echo $code2; ?>" autocomplete="off">
                    </div>

                    <div class="input-group  text-white input-group-outline mb-3">
                      <input type="file" name="file" class="form-control text-white"  autocomplete="off"/>
                    </div>

                    <div class="text-center">
                      <input type="submit" name="deals"  value="upload  weekly deals" class="btn btn-lg bg-gradient-primary btn-lg w-100 mt-4 mb-0">
                    </div>
                  </form>
                </div>
              </div>
            </div>
            <div class="card-body">
              <h6 class="mb-0 ">weekly deals ulpoad from here</h6>
              <p class="text-sm ">Upload all weekly deals from here</p>
              <hr class="dark horizontal">
              <div class="d-flex ">
                <i class="material-icons text-sm my-auto me-1">schedule</i>
                <p class="mb-0 text-sm">WEEKLY DEALS HERE</p>
              </div>
            </div>
          </div>
        </div>

      </div>

       <!-- time-->
      <div class="container-fluid py-4">
        <div class="row">


            <div class="card">
              <div class="card-header p-3 pt-2">
                <div class="icon icon-lg icon-shape bg-gradient-dark shadow-dark text-center border-radius-xl mt-n4 position-absolute">
                  <i class="material-icons opacity-10 btns22">clock</i>
                </div>
                <div class="text-end pt-1">
                <h1  class="text-sm mb-0 text-capitalize">SET DEADLINE TIME</h1>
                  <p class="text-sm mb-0 text-capitalize">

                  </p>

  		<!-- TABLE TOP ROW HEADINGS-->


                </div>
              </div>
              <hr class="dark horizontal my-0">
              <div class="card-footer p-3">
                  <div class="bg-gradient-primary shadow-dark border-radius-lg py-3 pe-1">
                <div class="card-body">
                  <form role="form" method="post" enctype="multipart/form-data" >
                    <div class="input-group input-group-outline mb-3">
                      <label class="form-label text-white">DEAL DEADLINE DATE</label>
                      <input type="datetime-local" id= "datetime" class="form-control text-white" name="dates"  value="<?php echo $dates; ?> "autocomplete="off">
                    </div>
                    <div class="input-group input-group-outline mb-3">
                      <label class="form-label text-white">embeded video link </label>
                      <input type="url"  class="form-control text-white" name="url"  value="<?php echo $url; ?> "autocomplete="off">
                    </div>
                    <div class="input-group  text-white input-group-outline mb-3">
                      <input type="file" name="file" class="form-control text-white"  autocomplete="off"/>
                    </div>

                    <div class="text-center">
                      <input type="submit" name="time"  value="SET TIME" class="btn btn-lg bg-gradient-warning btn-lg w-100 mt-4 mb-0">
                    </div>
                  </form>
                </div>
              </div>
            </div>
        </div>

        </div>
          </div>
      <footer class="footer py-4  ">
        <div class="container-fluid">
          <div class="row align-items-center justify-content-lg-between">
            <div class="col-lg-6 mb-lg-0 mb-4">
              <div class="copyright text-center text-sm text-muted text-lg-start">
                © <script>
                  document.write(new Date().getFullYear())
                </script>,
               ShOpLeXUG
              </div>
            </div>

          </div>
        </div>
      </footer>
    </div>
  </main>
  <div class="fixed-plugin">
    <a class="fixed-plugin-button text-dark position-fixed px-3 py-2">
      <i class="material-icons py-2">settings</i>
    </a>
    <div class="card shadow-lg">
      <div class="card-header pb-0 pt-3">
        <div class="float-start">
          <h5 class="mt-3 mb-0">CUSTOMIZATION CENTRE</h5>

        </div>
        <div class="float-end mt-4">
          <button class="btn btn-link text-dark p-0 fixed-plugin-close-button">
            <i class="material-icons">clear</i>
          </button>
        </div>
        <!-- End Toggle Button -->
      </div>
      <hr class="horizontal dark my-1">
      <div class="card-body pt-sm-3 pt-0">
        <!-- Sidebar Backgrounds -->
        <div>
          <h6 class="mb-0">Sidebar Colors</h6>
        </div>
        <a href="javascript:void(0)" class="switch-trigger background-color">
          <div class="badge-colors my-2 text-start">
            <span class="badge filter bg-gradient-primary active" data-color="primary" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-dark" data-color="dark" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-info" data-color="info" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-success" data-color="success" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-warning" data-color="warning" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-danger" data-color="danger" onclick="sidebarColor(this)"></span>
          </div>
        </a>
        <!-- Sidenav Type -->
        <div class="mt-3">
          <h6 class="mb-0">Sidenav Type</h6>
          <p class="text-sm">Choose between 2 different sidenav types.</p>
        </div>
        <div class="d-flex">
          <button class="btn bg-gradient-dark px-3 mb-2 active" data-class="bg-gradient-dark" onclick="sidebarType(this)">Dark</button>
          <button class="btn bg-gradient-dark px-3 mb-2 ms-2" data-class="bg-transparent" onclick="sidebarType(this)">Transparent</button>
          <button class="btn bg-gradient-dark px-3 mb-2 ms-2" data-class="bg-white" onclick="sidebarType(this)">White</button>
        </div>
        <p class="text-sm d-xl-none d-block mt-2">You can change the sidenav type just on desktop view.</p>
        <!-- Navbar Fixed -->
        <div class="mt-3 d-flex">
          <h6 class="mb-0">Navbar Fixed</h6>
          <div class="form-check form-switch ps-0 ms-auto my-auto">
            <input class="form-check-input mt-1 ms-auto" type="checkbox" id="navbarFixed" onclick="navbarFixed(this)">
          </div>
        </div>
        <hr class="horizontal dark my-3">
        <div class="mt-2 d-flex">
          <h6 class="mb-0">Light / Dark</h6>
          <div class="form-check form-switch ps-0 ms-auto my-auto">
            <input class="form-check-input mt-1 ms-auto" type="checkbox" id="dark-version" onclick="darkMode(this)">
          </div>
        </div>
        <hr class="horizontal dark my-sm-4">


      </div>
    </div>
  </div>
  <!--   Core JS Files   -->
  <script src="../assets/js/core/popper.min.js"></script>
  <script src="../assets/js/core/bootstrap.min.js"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.min.js"></script>
  <script src="../assets/js/plugins/smooth-scrollbar.min.js"></script>
  <script src="../assets/js/plugins/chartjs.min.js"></script>

  <script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
  </script>
  <!-- Github buttons -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/material-dashboard.min.js?v=3.0.0"></script>
  <script src="script.js"></script>


</body>

</html>
