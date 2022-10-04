<?php include ('auth_header.php'); ?>
<div class="content-wrapper">
    
            <div class="container-xxl flex-grow-1 container-p-y">
      <!-- Basic Bootstrap Table -->
      <div class="card">
                <h5 class="card-header">PRODUCTS</h5>
                <div class="table-responsive text-nowrap">
                  <table class="table">
                    <thead>
                      <tr>
                        <th>PRODUCCT</th>
                        <th>NAME</th>
                        <th>PRICE</th>
                        <th>CATEGORY</th>
                        <th>ACTION</th>
                      </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                    <?php
          $query = "select * from products";
          $result = mysqli_query($conn,$query);
          if($result){
            if(mysqli_num_rows($result)> 0){
                while ($row  = mysqli_fetch_assoc($result)) {
                    $id = $row['id'];
                    $productname = $row['productname'];
                    $price = $row['price'];
                    $category = $row['category'];
    
                    $description = $row['description'];
                    $location = $row['location'];}
                    echo('
                    <tr>
                    <td>
                
                   <img src="Admin/'.$location.'"  class="img-fluid avatar avatar-lg me-2cborder-radius-lg" />
                
                    </td>
                    <td>'.$productname.'</td>
                    <td>
                      '. $price .'
                    </td>
                    <td><span class="badge bg-label-primary me-1">'. $category.'</span></td>
                    <td>
                      <div class="dropdown">
                        <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                          <i class="bx bx-dots-vertical-rounded"></i>
                        </button>
                        <div class="dropdown-menu">
                          <a class="dropdown-item"  href="update.php?updateid='.$id.'" ><i class="bx bx-edit-alt me-1"></i> Edit</a>
    
                          <a class="dropdown-item" href="delete.php?deleteid='.$id.'"> <i class="bx bx-trash me-1"></i> Delete</a>
                        </div>
                      </div>
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
              <div class="mb-5 mt-2">

              </div>
              <div class="card">
                <h5 class="card-header">PRODUCTS DEALS</h5>
                <div class="table-responsive text-nowrap">
                  <table class="table">
                    <thead>
                      <tr>
                        <th>PRODUCCT</th>
                        <th>NAME</th>
                        <th>PRICE</th>
                        <th>CATEGORY</th>
                        <th>ACTION</th>
                      </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                    <?php
          $query = "select * from deals";
          $result = mysqli_query($conn,$query);

          if($result){
            if(mysqli_num_rows($result)> 0){   while ($row  = mysqli_fetch_assoc($result)) {
                $id = $row['id'];
                $productname = $row['productname'];
                $price = $row['price'];
                $category = $row['category'];

                $description = $row['description'];
                $location = $row['location'];}
                echo('
                <tr>
                <td>
            
               <img src="Admin/'.$location.'"  class="img-fluid avatar avatar-lg me-2cborder-radius-lg" />
            
                </td>
                <td>'.$productname.'</td>
                <td>
                  '. $price .'
                </td>
                <td><span class="badge bg-label-primary me-1">'. $category.'</span></td>
                <td>
                  <div class="dropdown">
                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                      <i class="bx bx-dots-vertical-rounded"></i>
                    </button>
                    <div class="dropdown-menu">
                      <a class="dropdown-item"  href="updatedeal.php?updateid='.$id.'" ><i class="bx bx-edit-alt me-1"></i> Edit</a>

                      <a class="dropdown-item" href="deletedeal.php?deleteid='.$id.'"> <i class="bx bx-trash me-1"></i> Delete</a>
                    </div>
                  </div>
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

<?php include ('auth_footer.php'); ?>