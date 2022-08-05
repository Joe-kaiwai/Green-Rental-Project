<?php include('header.php');?>

<?php if(!isset($_SESSION['name']))
header("location: ./staff-login.php");?>

<!-- header -->
<nav class="navbar container-fluid d-flex justify-content-between mt-2">
    <div class="navbar-brand staff-footer-companyName">
      <img src="./image/index-img/round_logo.png" alt="green rental logo" class="staff-greenRentalLogo">
      <h2 class="fw-bolder d-inline-block" style="color: rgb(41, 119, 101)">Green-Rental CMS</h2>
    </div>

    <div>

      <a class="btn btn-primary" data-bs-toggle="offcanvas" href="#offcanvasExample" aria-controls="offcanvasExample" style="background-color:#fff;border: 0;">
      <i class="fa-solid fa-circle-user fa-3x me-4" style="color:rgb(73, 73, 151)"></i>
      </a>

      <div class="offcanvas offcanvas-end rounded-start" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
        <div class="offcanvas-header">
          <h5 class="offcanvas-title" id="offcanvasExampleLabel"></h5>
          <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>

        <div class="offcanvas-body">
          <div>
            <div class="row mb-3 my-3">
              <i class="fa-solid fa-circle-user fa-6x me-5 col-12 d-flex justify-content-center mb-4" style="color:rgb(73, 73, 151)"></i>
              <h2 class="col-12 text-center"><?php echo $_SESSION['name'];?></h2>
              <p class="col-12 text-center"><?php echo $_SESSION['email'];?></p>
            </div><hr>

            <div class="row py-5 container-fluid my-5">
              <div class="col-4 staff-info-manageAccount d-flex align-items-center fw-bold fs-5">Manage Your Account</div>
              <div class="col staff-info-manageAccount-op d-flex align-items-center justify-content-center">
                <div>
                  <button class="d-block my-4 staff-resetPasswordBtn p-2 fw-bold" data-bs-toggle="modal" data-bs-target="#resetPassword-modal">Reset Password</button>
                  <a href="./function.php?op=logout"><button class="d-block my-4 w-100 staff-logoutBtn p-2 fw-bold">Logout</button></a>
                </div>
              </div>
            </div>

            <div class="staff-info-company">
              <p class="text-center">Green-Rental Company CMS</p>
            </div>

          </div>
        </div>
      </div>
    </div>


    <!-- reset password-model -->
    <div class="modal fade" id="resetPassword-modal" tabindex="-1" aria-labelledby="resetPassword-modalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header d-flex justify-content-center">
            <i class="fa-solid fa-key fa-2x me-2" style="color: rgb(46, 63, 59);"></i>
            <h5 class="modal-title" id="resetPassword-modalLabel">Reset Password</h5>
          </div>
          <div class="modal-body">
            <form action="./function.php?op=resetPassword" method="post">
              <div class="mb-3">
                <input type="hidden" name="name" value="<?php echo $_SESSION['name']?>">

                <label for="newPassword" class="col-form-label">New Password:</label>
                <input type="text" class="form-control" id="newPassword" name="newPassword">

                <label for="newPasswordConfirmation" class="col-form-label">Confirm Password:</label>
                <input type="text" class="form-control" id="newPasswordConfirmation" name="newPasswordConfirmation">
              </div>
      
              <div class="modal-footer d-flex justify-content-center">
                <input type="submit" class="btn btn-warning" value="Reset Password">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancal</button>
              </div>
          </form>
        </div>
      </div>
    </div>


</nav><hr class="vehicleList-hr">

<!-- horizon nav -->
<ul class="nav nav-pills mb-3 d-md-none ms-3" id="v-pills-tab" role="tablist">
  <li class="nav-item" role="presentation">
    <button class="nav-link active" id="v-pills-home-tab" data-bs-toggle="pill" data-bs-target="#v-pills-home" type="button" role="tab" aria-controls="v-pills-home" aria-selected="true">Customer Order</button>
  </li>
  <li class="nav-item" role="presentation">
    <button class="nav-link" id="v-pills-profile-tab" data-bs-toggle="pill" data-bs-target="#v-pills-profile" type="button" role="tab" aria-controls="v-pills-profile" aria-selected="false">Vehicle List</button>
  </li>
  <li class="nav-item" role="presentation">
    <button class="nav-link" id="v-pills-messages-tab" data-bs-toggle="pill" data-bs-target="#v-pills-messages" type="button" role="tab" aria-controls="v-pills-messages" aria-selected="false">Message</button>
  </li>
</ul>






<div class="d-flex align-items-start my-5 container-fluid flex-column flex-sm-row">

  <!-- vertical nav -->
  <div class="nav flex-column nav-pills me-3 d-md-flex d-none" id="v-pills-tab" role="tablist" aria-orientation="vertical">
    <button class="nav-link active my-3" id="v-pills-home-tab" data-bs-toggle="pill" data-bs-target="#v-pills-home"
      type="button" role="tab" aria-controls="v-pills-home" aria-selected="true";>Customer Order</button>
    <button class="nav-link my-3" id="v-pills-profile-tab" data-bs-toggle="pill" data-bs-target="#v-pills-profile"
      type="button" role="tab" aria-controls="v-pills-profile" aria-selected="false">Vehicle List </button>
    <button class="nav-link my-3" id="v-pills-messages-tab" data-bs-toggle="pill" data-bs-target="#v-pills-messages"
      type="button" role="tab" aria-controls="v-pills-messages" aria-selected="false">Message</button>


  </div>





<div class="tab-content container" id="v-pills-tabContent">
    <!--------- nav content-1 ----------->
    <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab"
        tabindex="0">

      <div class="d-flex justify-content-start align-items-center">
        <label for="searchOrderId" class="me-2">Order Number</label>
        <input type="text" class="me-2" id="searchOrderId" style="width:80px" maxlength="4" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1').replace(/^0[^.]/, '0');">
        <button class="order-fitter-icon ms-3" style="border:0;"><i class="fa-solid fa-filter fa-2x " onclick="filterOrder()"></i></button>
        <a href="" class="mx-2">All</a>
      </div>

        <div class="card my-4">
          
        <div class="card-body table-responsive my-4 overflow-auto" style="max-height:600px">
          <table class="table table-striped table-hover ">
            <thead>
              <tr>
                <th scope="col">Order Number</th>
                <th scope="col">Customer Name</th>
                <th scope="col">Customer Email</th>
                <th scope="col">Customer Phone</th>
                <th scope="col">Vehicle</th>
                <th scope="col">Pick-up Time</th>
                <th scope="col">Return Time</th>
                <th scope="col">Collect Location</th>
                <th scope="col">Return Location</th>
                <th scope="col">Day</th>
                <th scope="col">Total Price</th>
                <th scope="col">Order Time</th>
              </tr>
            </thead>
            <tbody>
            <?php $orderQ = mysqli_query($dbConnection,"SELECT * from `order`");
              while($order = mysqli_fetch_assoc($orderQ)){
                echo '<tr id="'.$order['order_id'].'" class="table-row orderList" >
                <th scope="row">'.$order['order_id'].'</th>
                <td>'.$order['customer_name'].'</td>
                <td>'.$order['customer_email'].'</td>
                <td>'.$order['customer_phone_number'].'</td>
                <td>'.$order['order_car'].'</td>
                <td>'.$order['pick_up_time'].'</td>
                <td>'.$order['return_time'].'</td>
                <td>'.$order['collect_location'].'</td>
                <td>'.$order['return_location'].'</td>
                <td>'.$order['day'].'</td>
                <td>'.$order['total_price'].'</td>
                <td>'.$order['order_time'].'</td>
              </tr>'
              ;}
            ?>
            </tbody>
          </table>
        </div>
      </div>
</div>




    <!--------- nav content-2 ----------->
<div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab" tabindex="0">

  <div class="row row-cols-1 row-cols-md-2 d-flex justify-content-center">
      <?php $carQ = mysqli_query($dbConnection, "SELECT * from `car`");

      while($car=mysqli_fetch_assoc($carQ)){
      echo '<div class="card mb-3 me-md-5 col" style="max-width:600px">';
      echo '<div class="d-flex justify-content-between container"><div><p class="my-2"><small>Vehicle ID: '.$car['car_id'].'</small></p></div><div class="d-flex align-items-center"><a type="button" id="delCarBtn" data-bs-toggle="modal" data-bs-target="#carList'.$car['car_id'].'"><i class="fa-solid fa-circle-minus delcarIcon" style="color: rgb(235, 60, 60);"></i></a></div></div><hr class="mt-0 vehicleList-hr">';
      echo '<div class="row g-0 row-cols-md-2">';
      echo '<div class="col-md-6">';
      echo '<img src="./image/index-img/'.$car['image'].'" class="img-fluid rounded-start" alt="car_items">';
      echo '</div>';
      echo '<div class="col-md-6">';
      echo '<div class="card-body">';
      echo '<h5 class="card-title">'.$car['name'].'</h5>';
      echo '<p class="">$ '.$car['price'].' / Day</p>';
      echo '</div></div></div></div>';
    



    echo '<div class="modal fade" id="carList'.$car['car_id'].'" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-header d-flex justify-content-center">
              <h5 class="modal-title" id="staticBackdropLabel"><i class="fa-solid fa-triangle-exclamation fa-2x" style="color: #ffc107;"></i></h5>
            </div>
            <div class="modal-body d-flex justify-content-center align-items-center">
              <p class="fw-bold d-flex align-items-center"><a class="text-danger pe-2">'.$car['name'].'</a> will be <a class="text-uppercase text-danger px-2">deleted</a> in database.</p>
            </div>
            <div class="modal-footer d-flex justify-content-center">
              <a href="./function.php?op=deleteCar&carList='.$car['car_id'].'"><button type="button" class="btn btn-danger fw-bold">Delete</button></a>
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancal</button>
            </div>
          </div>
        </div>
      </div>';}
    ?>

  </div>


  <div class="d-flex justify-content-center my-4">
    <button class=" me-md-5 p-2 addCarBtn" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@getbootstrap">Add New Vehicle</button>
  </div>



  <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header d-flex justify-content-center">
        <i class="fa-solid fa-database fa-2x me-3" style="color:rgb(41, 119, 101)"></i>
        <h5 class="modal-title" id="exampleModalLabel">New Vehicle Date</h5>
      </div>
      <div class="modal-body">

        <form class="row row-cols-md-2 row-cols-1" action="./function.php?op=addNewCar" method="post">
          <div class="mb-3 col">
            <label for="new-carName" class="col-form-label">Name:</label>
            <input type="text" class="form-control" id="new-carName" name="new-carName" required>
          </div>
          <div class="mb-3 col">
            <label for="new-carRent" class="col-form-label">Daily Rent:</label>
            <input class="form-control" id="new-carRent" name="new-carRent" required>
          </div>
          <div class="mb-3 col">
            <label for="new-carImg" class="col-form-label">Image:</label>
            <input class="form-control" id="new-carImg" name="new-carImg" required>
          </div>
          <div class="mb-3 col">
            <label for="new-carEngine" class="col-form-label">Engine Type:</label>
            <input class="form-control" id="new-carEngine" name="new-carEngine" required>  
          </div>
          <div class="mb-3 col">
            <label for="new-carMP" class="col-form-label">Maximum Motor Power:</label>
            <input class="form-control" id="new-carMP" name="new-carMP" required>
          </div>
          <div class="mb-3 col">
            <label for="new-carMT" class="col-form-label">Maximum Motor Torque:</label>
            <input class="form-control" id="new-carMT" name="new-carMT" required>
          </div>
          <div class="mb-3 col">
            <label for="new-carBatteryCapacity" class="col-form-label">Gross Battery Capacity:</label>
            <input class="form-control" id="new-carBatteryCapacity" name="new-carBatteryCapacity" required>
          </div>
          <div class="mb-3 col">
            <label for="new-carRange" class="col-form-label">Range:</label>
            <input class="form-control" id="new-carRange" name="new-carRange" required>
          </div>
          <div class="mb-3 col">
            <label for="new-carSeating" class="col-form-label">Seating:</label>
            <input type="number" class="form-control" id="new-carSeating" name="new-carSeating" required>
          </div>
          <div class="mb-3 col">
            <label for="new-carWeight" class="col-form-label">Weight:</label>
            <input class="form-control" id="new-carWeight" name="new-carWeight" required>
          </div>
          <div class="mb-3 col w-100">
            <label for="new-carDimensions" class="col-form-label">Dimensions:</label>
            <input class="form-control" id="new-carDimensions" name="new-carDimensions" placeholder="lengthmm x widthmm x Heightmm" required>
          </div>
        
      </div>
      <div class="modal-footer d-flex justify-content-center">
        <input type="submit" class="btn btn-success" value="Add Data">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancal</button>
      </div>
    </form>
    </div>
  </div>
</div>

</div>
    <!--------- nav content-3 ----------->
  <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab" tabindex="0">

    <div class="row row-cols-md-3 row-cols-lg-4 ">
      <?php $messageQ = mysqli_query($dbConnection, 'SELECT * from `message`');
        while($message = mysqli_fetch_assoc($messageQ)){
          echo '<div class="messageCard col p-2 my-2">
                  <h2 class="">'.$message['contact_person'].'</h2>
                  <p class="messagePhone my-1">'.$message['contact_phone'].'</p>
                  <p class="messageEmail my-1">'.$message['contact_email'].'</p>
                  <div style="margin: 24px 0;" class="messageDiv overflow-auto">
                    '.$message['contact_message'].'
                  </div>
                  <button class="replyBtn">Reply</button>
                </div>'
        ;}
      ?>
    </div>
    
  </div>














<?php include('staff-footer.php');?>

