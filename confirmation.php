<?php include("index-header.php");?>
<?php
$orderQ = mysqli_query($dbConnection, "SELECT * FROM `order` ORDER BY `order_id` DESC LIMIT 1;");
$order = mysqli_fetch_assoc($orderQ);

$order_carName = $order['order_car'];
$carQ = mysqli_query($dbConnection, "SELECT * FROM `car` WHERE `name`='$order_carName'");
$car = mysqli_fetch_assoc($carQ);
?> 


<div class="bgColor"><br><br>
        
        
    <nav class="navbar navbar-expand-lg navBg">   
      <div class="container-fluid d-flex justify-content-end">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
        <div class="collapse navbar-collapse d-flex justify-content-end" id="navbarNav">
          <ul class="navbar-nav fw-bold fs-5 me-5">
            <li class="nav-item mx-3">
              <div class="d-flex justify-content-center">
                <img src="./image/index-img/navcar.png" alt="navcar" class="navcar d-none d-lg-inline-block">
              </div>
              <a class="nav-link active" aria-current="page" href="./index.php">租車</a>
            </li>
            <li class="nav-item mx-3">
              <a class="nav-link" aria-current="page" href="./flow.php">租車流程</a>
            </li>
            <li class="nav-item mx-3">
              <a class="nav-link" href="./promotions.php">最新優惠</a>
            </li>
            <li class="nav-item mx-3">
              <a class="nav-link" href="./about-us.php">關於我們</a>
            </li>
            <li class="nav-item mx-3">
              <a class="nav-link" href="./contact-us.php">聯絡我們</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <div class="logo">
        <img style="z-index:2 ;" src="./image/index-img/round_logo.png" alt="green rental logo" class="greenRentalLogo">
    </div>

    <div class="container">
      <div class="alert alert-secondary" style="margin-top: 30px;" role="alert"><i style="margin-right:10px;" class="fa-solid fa-circle-check fa-1x"></i>
        A confirmation email has been sent to <span class="fw-bold"><?php echo $order['customer_email']?></span>
      </div>
         
      <p style="font-size: 60px; font-family:Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif; letter-spacing: 1px; color:rgb(128, 130, 129);margin-bottom: 10px;">Thank you for your order !</p>
      <p style="font-size: 20px; margin-bottom: 10px;">Your order number is : <span class="fw-bold"><?php echo '#'.$order['order_id']?></span></p>


      <div class="row row-cols-1 row-cols-sm-2 ms-4 ms-sm-0" style="margin-bottom: 50px;">
          <div class="card col-4 me-5 mb-5" style="width: 26rem;border-color: black;border-style: solid; border-radius: 15px; border-width: 1px; background-color: rgb(253, 247, 239);">
            <div class="card-body">
             <h3 id="取車地點" style="margin-left: 20px; text-align: start;font-weight: 450; font-size: 25px;"><br><i style="margin-right: 10px;" class="fa-solid fa-location-dot"></i>取車地點 :</h3>
             <p class="py-2" style="margin-left: 20px; font-size: 17px;"><span class="fw-bold locationcheck1"><?php echo $order['collect_location']?></span><br><a class="showmap1" href="https://goo.gl/maps/D1bYPYAGmVsz7H3AA">按此顯示地圖</a></p>
                  
               
             <h3 id="取車日期和時間" style="margin-left: 20px;  text-align: start;font-weight: 450; font-size: 25px;"><br><i style="margin-right: 10px;" class="fa-solid fa-clock"></i>取車日期和時間 :</h3>
             <p style="margin-left: 20px; margin-bottom: 30px; font-size: 17px;"><input readonly class="form-control-plaintext date1" type="datetime-local" value="<?php echo $order['pick_up_time'];?>"></p>
            </div>
          </div>

          <div class="card col-4 me-5 mb-5" style="width: 26rem;border-color: black;border-style: solid; border-radius: 15px; border-width: 1px; background-color: rgb(253, 247, 239);">
            <div class="card-body">
             <h3 id="還車地點" style="margin-left: 20px; text-align: start;font-weight: 450; font-size: 25px;"><br><i style="margin-right: 10px;" class="fa-solid fa-location-dot"></i>還車地點 :</h3>
             <p class="py-2" style="margin-left: 20px; font-size: 17px;"><span class="fw-bold locationcheck2"><?php echo $order['return_location']?></span><br><a class="showmap2" href="https://goo.gl/maps/hMskNwCdmrrGaPy19">按此顯示地圖</a></p>
                  
                  
             <h3 id="還車日期和時間" style="margin-left: 20px;  text-align: start;font-weight: 450; font-size: 25px;"><br><i style="margin-right: 10px;" class="fa-solid fa-clock"></i>還車日期和時間 :</h3>
             <p  style="margin-left: 20px; margin-bottom: 30px; font-size: 17px;"><input readonly class="form-control-plaintext date2" type="datetime-local" value="<?php echo $order['return_time'];?>"></p>
            </div>
          </div>
     </div>
      
      
        
    <div class="container row mt-5" style="margin-bottom: 50px;">
      <div class="col">
        <p style="font-weight: 450; font-size: 20px;">預訂車輛 :<span class="fw-bold"><?php echo $car['name']?></span></p>
        <img style=" margin: 7px; margin-bottom: 30px; width:400px" src="./image/index-img/<?php echo $car['image']?>" alt="booking Car Image">
      </div>

      <div class="col">
        <div class="d-flex justify-content-between" style="color:rgb(109, 204, 109);">
          <h3>合共：</h3>
          <div class="d-flex justify-content-end">
          <h3 class="me-2">$</h3>
          <h3 class="totalPrice"></h3>
          </div>
        </div><hr>
        <div class="d-flex justify-content-between  fs-5 my-3 mt-4">
          <span >日租：</span>
          <div class="d-flex justify-content-end">
            <span class="me-2">$</span>
            <span class="rentFee"><?php echo $car['price'];?></span>
          </div>
        </div>
        <div class="d-flex justify-content-between fs-5 my-3">
          <span>日數：</span>
          <span class="rentDay"></span>
        </div>
        <div class="d-flex justify-content-between fs-5 my-3">
          <span>按金：</span>
          <div class="d-flex justify-content-end">
            <span class="me-2">$</span>
            <span class="deposit">10000</span>
          </div>
        </div>
      </div>
    </div>
 </div>

  <?php include("index-footer.php")?>
