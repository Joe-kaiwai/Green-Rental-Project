<?php include("index-header.php");?>

<?php $carQ = mysqli_query($dbConnection, 'SELECT * from `car` where `car_id`='.$_GET['car_id'].'');
$car = mysqli_fetch_assoc($carQ);
?>

  <div class="bgColor">
        
          
        
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
                  <img src="./image/index-img/round_logo.png" alt="green rental logo" class="greenRentalLogo">
              </div>
        
                <div class="container mt-5 table-responsive">
                  <table class="table table-bordered">
                    <thead>
                      <tr>
                        <th class="m-0 py-3" scope="col"><h5>預訂車輛：</h5></th>
                        <th class="m-0 py-3" scope="col" ><h5>日期：</h5></th>
                        <th class="m-0 py-3" scope="col"><h5>價錢：</h5></th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th scope="row" width="40%">
                            <img src="./image/index-img/<?php echo $car['image'];?>" width="250"> 
                            <div class="d-flex justify-content-between" style="font-size: 20px;"><h6><?php echo $car['name'];?></h6>
                            <button onclick="history.back()" class="btn btn-dark nextbutton">重選車輛</button></div>

                        </th>
                        <td>
                          <div class="d-flex justify-content-between flex-wrap">
                            <input readonly class="form-control-plaintext" type="datetime-local" value="<?php echo $_GET['pickupTime'];?>">
                            <input readonly class="form-control-plaintext" type="text" value="<?php echo $_GET['pickUpLocation'];?>">
                          </div>
                           - 
                          <div class="d-flex justify-content-between flex-wrap">
                            <input readonly class="form-control-plaintext" type="datetime-local" value="<?php echo $_GET['returnTime'];?>">
                            <input readonly class="form-control-plaintext" type="text" value="<?php echo $_GET['returnLocation'];?>">
                          </div>

                        </td>
                        <td style ="text-align: right; line-height: 30px;"  width="30%">
                          <ul class="cart-priceList" style="list-style: none;">
                            <li>租車費：$<?php echo $car['price'];?></li> 
                            <li>按金：$10,000</li>
                            <li>附加項目：$0</li>
                            <li>優惠券：N/A</li>
                            <li>稅項：$0</li>
                            <li>手續費：$0</li>
                          </ul>
                        </td>                     
                      </tr>
                      <tr>
                        <th class="m-0 py-4" style="text-align:right" scope="row" colspan="3" > 
                        <h5>合共：$13,090</h5>
                        </th>
                      </tr>
                    </tbody>
                    </table>
                </div>

              <div class="container py-3 w-75 my-5" style="border: 1px solid rgb(233, 231, 231); background-color: rgba(218, 220, 220,1); border-radius: 15px;">
                  
                  
                <form class="w-75" style="margin:auto" action="./function.php?op=createOrder" method="post">
                  <h5 class="m-0 py-4">個人資料：</h5>
                      <div class="row">
                        <div class=" col form-floating mb-4">
                          <input type="Name" class="form-control" id="floatingInput" name="name" placeholder="姓名" required>
                          <label class="ms-2" for="floatingInput">姓名：</label>
                        </div>
                        <div class="col form-floating mb-4">
                          <input  type="Phone" class="form-control" id="floatingInput" name="phone" placeholder="電話" required>
                          <label class="ms-2" for="floatingInput">電話：</label>
                        </div>
                      </div>

                      <div class="row">
                        <div class="col-7 form-floating mb-4">
                          <input type="email" class="form-control" id="floatingInput" name="email" placeholder="name@example.com" required>
                          <label class="ms-2" for="floatingInput">Email：</label>
                        </div>
                        <div class="col form-floating mb-4">
                          <input type="IDno" class="form-control" id="floatingInput" placeholder="身份證號碼" required>
                          <label class="ms-2" for="floatingInput">身份證：</label>
                        </div>
                      </div>

                      <input type="hidden" name="pickupTime" value="<?php echo $_GET['pickupTime'];?>">
                      <input type="hidden" name="returnTime" value="<?php echo $_GET['returnTime'];?>">
                      <input type="hidden" name="pickupLocation"value="<?php echo $_GET['pickUpLocation'];?>">
                      <input type="hidden" name="returnLocation" value="<?php echo $_GET['returnLocation'];?>">
                      <input type="hidden" name="car_id" value="<?php echo $_GET['car_id'];?>">

                      <div class="form-floating">
                        <input style="height: 310px; margin-bottom: 20px;" type="Remark" class="form-control" id="floatingInput" placeholder="備註">
                        <label for="floatingPassword">備註：</label>
                        </div>

                        
                        
                        <div class="container d-flex justify-content-end">
                          <button style="margin: 10px; width:100px;" type="reset" class="btn btn-primary">重設</button>
                          <button style="margin: 10px ;width:100px;" type="submit" class="btn btn-dark nextbutton">確認訂單</button> 
                        </div>
                </form>

               </div>

  <?php include("index-footer.php")?>

</div>

