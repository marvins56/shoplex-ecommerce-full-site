<?php include ('auth_header.php'); ?>
<div class="content-wrapper">
    
            <div class="container-xxl flex-grow-1 container-p-y">
            <div class="card">
                <h5 class="card-header">PRODUCTS DEALS</h5>
                <div class="table-responsive text-nowrap">
                  <table class="table">
                    <thead>
                      <tr>
                        <th>PRODUCCT</th>
                        <th>NAME</th>
                        <th>PRICE</th>
                        <th>CUSTOMER</th>
                        <th></th>
                        <th>QTY</th>
                        <th>PAYMENT STATUS</th>
                        <th>DATE</th>
                        <th>TXT_REF</th>
                      </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                    <?php
          $query = "select * from orders";
          $result = mysqli_query($conn,$query);
          if($result){
            if(mysqli_num_rows($result)> 0){
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
                $qty = $row['quantity'];
                $dop = $row['time'];
                $status = $row['status'];
                $street= $row['street'];
                $contact = $row['contact'];
                $txtref = $row['txtref'];
if($status == "successful"){
  $status = '<span class="badge bg-label-success me-1">SUCECSSFUL</span></td>';
}else{
  $status = '<span class="badge bg-label-danger me-1">FAILED</span></td>';

}

                echo('
                <tr>
                <td>
            
               <img src="'.$location.'"  class="img-fluid avatar avatar-lg me-2cborder-radius-lg" />
                </td>
                <td>'.$productname.'</td>
                <td>
                  '. $price .'
                </td>
                <td><span class="badge bg-label-primary">'. $username .',<br /><br />'.$email.',<br /><br />'.$contact.' </span></td>
                <td>
                <td><span class="badge bg-label-primary">'. $qty .'</span></td>
          
                <td>
                '.$status.'
                </td>
                <td>
                '.$dop.'
              
                </td>
                <td>
                '.$txtref.'
              
                </td>
              </tr>
                ');
       
                
            }
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