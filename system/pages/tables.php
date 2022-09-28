<?php include 'header.php'; ?>
<nav aria-label="breadcrumb">
  <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
    <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Pages</a></li>
    <li class="breadcrumb-item text-sm text-dark active" aria-current="page">STATISTICS</li>
  </ol>
  <h6 class="font-weight-bolder mb-0">statistics</h6>
</nav>
    <div class="container-fluid py-4">
      <div class="row">
        <div class="col-12">
          <div class="card my-4">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
              <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                <h6 class="text-white text-capitalize ps-3">products</h6>
              </div>
            </div>
            <div class="card-body px-0 pb-2">
              <div class="table-responsive p-0">
                <table class="table align-items-center mb-0">
                  <thead>
                    <tr>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">IMAGE</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">NAME</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">PRICE</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">CATEGORY</th>
                      <th class="text-secondary opacity-7"></th>
                    </tr>
                  </thead>
                  <tbody>
      <?php
          $query = "select * from products";
          $result = mysqli_query($conn,$query);
          if($result){

            while ($row  = mysqli_fetch_assoc($result)) {
                $id = $row['id'];
                $productname = $row['productname'];
                $price = $row['price'];
                $category = $row['category'];

                $description = $row['description'];
                $location = $row['location'];

echo('

<tr>
  <td>
    <div class="d-flex px-2 py-1">
      <div>

<img src="'.$location.'" alt="profile_image"class="avatar avatar-sm me-3 border-radius-lg" alt="user1"> <br>

      </div>
      <div class="d-flex flex-column justify-content-center">
        <h6 class="mb-0 text-sm"> </h6>
        <p class="text-xs text-secondary mb-0"></p>
      </div>
    </div>
  </td>
  <td>
    <p class="text-xs font-weight-bold mb-0"></p>
    <p class="text-xs text-secondary mb-0">'.$productname.'</p>
  </td>
  <td class="align-middle text-center text-sm">
    <span class="badge badge-sm bg-gradient-success">shs '.$price.'.000</span>
  </td>
  <td class="align-middle text-center">
    <span class="text-secondary text-xs font-weight-bold">'.$category.'</span>
  </td>
  <td class="align-middle">
  <button type="button" name="button" class="btn  bg-gradient-success text-white ">  <a class="text-white "  href="update.php?updateid='.$id.'">update</a> </button>
  <button type="button" name="button"  class="btn bg-gradient-danger text-white "> <a class="text-white "href="delete.php?deleteid='.$id.'">delete</a> </button>
  </td>
</tr>

');

            }
          }
                 ?>


                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>




      <div class="row">
        <div class="col-12">
          <div class="card my-4">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
              <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                <h6 class="text-white text-capitalize ps-3">WEEKLY DEALS</h6>
              </div>
            </div>
            <div class="card-body px-0 pb-2">
              <div class="table-responsive p-0">
                <table class="table align-items-center mb-0">
                  <thead>
                    <tr>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">IMAGE</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">NAME</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">PRICE</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">CATEGORY</th>
                      <th class="text-secondary opacity-7"></th>
                    </tr>
                  </thead>
                  <tbody>
      <?php
          $query = "select * from deals";
          $result = mysqli_query($conn,$query);
          if($result){

            while ($row  = mysqli_fetch_assoc($result)) {
                $id = $row['id'];
                $productname = $row['productname'];
                $price = $row['price'];
                $category = $row['category'];

                $description = $row['description'];
                $location = $row['location'];

echo('

<tr>
  <td>
    <div class="d-flex px-2 py-1">
      <div>

<img src="'.$location.'" alt="profile_image"class="avatar avatar-sm me-3 border-radius-lg" alt="user1"> <br>

      </div>
      <div class="d-flex flex-column justify-content-center">
        <h6 class="mb-0 text-sm"> </h6>
        <p class="text-xs text-secondary mb-0"></p>
      </div>
    </div>
  </td>
  <td>
    <p class="text-xs font-weight-bold mb-0"></p>
    <p class="text-xs text-secondary mb-0">'.$productname.'</p>
  </td>
  <td class="align-middle text-center text-sm">
    <span class="badge badge-sm bg-gradient-success">shs '.$price.'.000</span>
  </td>
  <td class="align-middle text-center">
    <span class="text-secondary text-xs font-weight-bold">'.$category.'</span>
  </td>
  <td class="align-middle">
  <button type="button" name="button" class="btn  bg-gradient-success text-white">  <a class="text-white "  href="updatedeal.php?updateid='.$id.'">update</a> </button>
  <button type="button" name="button"  class="btn  bg-gradient-danger text-white "> <a class="text-white "href="deletedeal.php?deleteid='.$id.'">delete</a> </button>
  </td>
</tr>

');

            }
          }
                 ?>


                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>



      <div class="row">
        <div class="col-12">
          <div class="card my-4">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
              <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                <h6 class="text-white text-capitalize ps-3">ORDERS</h6>
              </div>
            </div>
            <div class="card-body px-0 pb-2">
              <div class="table-responsive p-0">
                <table class="table align-items-center mb-0">
                  <thead>
                    <tr>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">IMAGE</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">NAME</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">PRICE</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">CLIENT DETAILS</th>
                      <th class="text-secondary opacity-7">CONTACTS</th>
                    </tr>
                  </thead>
                  <tbody>
      <?php
          $query = "select * from orders";
          $result = mysqli_query($conn,$query);
          if($result){

            while ($row  = mysqli_fetch_assoc($result)) {
                $id = $row['id'];
                $productname = $row['productname'];
                $price = $row['price'];
                $contact = $row['contact'];
                $location = $row['location'];
                $username = $row['username'];
                $email = $row['email'];
                $country = $row['country'];
                $city =$row['city'];
                $address = $row['address'];
                $country = $row['country'];

                $street= $row['street'];
                $contact = $row['contact'];

echo('

<tr>
  <td>
    <div class="d-flex px-2 py-1">
      <div>

<img src="'.$location.'" alt="profile_image"class="avatar avatar-sm me-3 border-radius-lg" alt="user1"> <br>

      </div>
      <div class="d-flex flex-column justify-content-center">
        <h6 class="mb-0 text-sm"> </h6>
        <p class="text-xs text-secondary mb-0"></p>
      </div>
    </div>
  </td>
  <td>
    <p class="text-xs font-weight-bold mb-0"></p>
    <p class="text-xs text-secondary mb-0">'.$productname.'</p>
  </td>
  <td class="align-middle text-center text-sm">
    <span class="badge badge-sm bg-gradient-success">shs '.$price.'.000</span>
  </td>
  <td class="align-middle text-center">
    <span class="text-secondary text-xs font-weight-bold">'.$address.'</span><br>
      <span class="text-secondary text-xs font-weight-bold">'.$street.'</span><br>
      <span class="text-secondary text-xs font-weight-bold">'.$email.'</span><br>
        <span class="text-secondary text-xs font-weight-bold">'.$username.'</span>

  </td>
  <td class="align-middle text-center">
    <span class="text-secondary text-xs font-weight-bold">'.$contact.'</span><br>

  </td>
  <td class="align-middle">

  <button type="button" name="button"  class="btn  bg-gradient-danger text-white"> <a class="text-white "href="deleteorder.php?deleteid='.$id.'">delete</a> </button>
  </td>
</tr>

');

            }
          }
                 ?>


                  </tbody>
                </table>
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

    <div class="modal fade" id="myModal" role="dialog">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">user credential</h4>
      </div>
      <div class="modal-body">

      <form method="post">

                  <div class="form-outline mb-4">
                    <input type="email"  name="email" id="form3Example1cg" class="form-control form-control-lg" placeholder="eg example@gmail.com" value="<?php echo $email;?>"/>
                    <label class="form-label" for="form3Example1cg">email</label>
                  </div>

                  <div class="form-outline mb-4">
                    <input type="number"  name="contact" id="form3Example3cg" class="form-control form-control-lg"  placeholder="telphone number" value="<?php echo $contact;?>"/>
                    <label class="form-label" for="form3Example3cg">Tel:</label>
                  </div>

                  <div class="form-outline mb-4">
                    <input type="text" name="code" id="form3Example4cg" class="form-control form-control-lg"  placeholder="enter producr code"  value="<?php echo $code;?>"/>
                    <label class="form-label" for="form3Example4cg">Product code</label>
                  </div>

                  <div class="d-flex justify-content-center">
                  <input type="submit" name="submit" value="send" class="btn btn-success btn-block btn-lg gradient-custom-4 text-body">
                  </div>


                </form>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

  </main>
  <div class="fixed-plugin">
    <a class="fixed-plugin-button text-dark position-fixed px-3 py-2">
      <i class="material-icons py-2">settings</i>
    </a>
    <div class="card shadow-lg">
      <div class="card-header pb-0 pt-3">
        <div class="float-start">
          <h5 class="mt-3 mb-0">CUSTOMISATION CENTRE</h5>
          <p>See our dashboard options.</p>
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
</body>

</html>
