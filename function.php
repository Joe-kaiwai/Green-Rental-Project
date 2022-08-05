<?php
include('database.php');

if($_GET['op']=='checkLogin'){
    checkLogin($_POST['username'],$_POST['password']);
}

if($_GET['op']=='logout'){
    logout();
}

if($_GET['op']=='resetPassword'){
    resetPassword($_POST['newPassword'],$_POST['newPasswordConfirmation']);
}

if($_GET['op']=='addNewCar'){
    addNewCar($_POST['new-carName'],$_POST['new-carRent'],$_POST['new-carImg'],$_POST['new-carEngine'],$_POST['new-carMP'],$_POST['new-carMT'],$_POST['new-carBatteryCapacity'],$_POST['new-carRange'],$_POST['new-carSeating'],$_POST['new-carWeight'],$_POST['new-carDimensions']);
}

if($_GET['op']=='deleteCar'){
    deleteCar();
}

if($_GET['op']=='createOrder'){
    createOrder();
}

if($_GET['op']=='customerMessage'){
    customerMessage($_POST['name'],$_POST['Phone'],$_POST['email'],$_POST['Message']);
}



function checkLogin($username,$password){

    global $dbConnection;

    $staffQ = mysqli_query($dbConnection,"SELECT * from `staff` where `username`='".$username."'");
    $staff = mysqli_fetch_assoc($staffQ);

    if($username == $staff['username'] && $password == $staff['password']){
        session_start();
        $_SESSION['name'] = $staff['name'];
        $_SESSION['email'] = $staff['email'];

        header("Location: ./staff-index.php");
    }else header("Location: ./staff-login.php");
}


function logout(){
    session_start();
    session_destroy();
    header('location: ./');
}


function resetPassword($newPassword,$newPasswordConfirmation){
    global $dbConnection;

    $updatePassword = "UPDATE `staff` SET `password`= '$newPassword' WHERE `staff`.`name`='{$_POST['name']}'";

    if($newPassword==$newPasswordConfirmation){

        mysqli_query($dbConnection, $updatePassword);
        echo '<script>alert("Success to reset the new password");
        window.location="./staff-index.php";</script>';

        
    }else{
        echo '<script>alert("Failed to reset the new password");window.location="./staff-index.php";</script>';

    }
}

function addNewCar($carName,$carRent,$carImg,$carEngine,$carMP,$carMT,$carBatteryCapacity,$carRange,$carSeating,$carWeight,$carDimensions){
    global $dbConnection;

    $updatePassword = "INSERT INTO `mY7D8u4FAO`.`car`(`name`, `price`, `image`, `engine type`, `max_motor_power`, `max_motor_torque`, `gross_battery_capacity`, `electric_range`, `seating`, `weight`, `dimensions`) VALUES ('$carName','$carRent','$carImg','$carEngine','$carMP','$carMT','$carBatteryCapacity','$carRange','$carSeating','$carWeight','$carDimensions')";

    if(mysqli_query($dbConnection, $updatePassword)){
        echo '<script>alert("Data Updated");
        window.location="./staff-index.php";</script>';

    }else{
        echo '<script>alert("Failed to update the data");
        window.location="./staff-index.php";</script>'; 
    }
}

function deleteCar(){
    global $dbConnection;

    $deleteCarList = "DELETE FROM `car` where `car_id`={$_GET['carList']}";
    
    if(mysqli_query($dbConnection, $deleteCarList)){
        echo '<script>alert("Data Deleted");
        window.location="./staff-index.php";</script>';

    }else{
        echo '<script>alert("Failed to delete the data");
        window.location="./staff-index.php";</script>'; 
    }
}

function createOrder(){
    global $dbConnection;

    $carQ = mysqli_query($dbConnection, "SELECT * from `car` where `car_id`='{$_POST['car_id']}'");
    $car = mysqli_fetch_assoc($carQ);

    /* $inputOrderData = "INSERT INTO `green_rental_project`.`order`(`customer_name`, `customer_email`, `customer_phone_number`,`order_car`, `pick_up_time`, `return_time`, `collect_location`, `return_location`, `order_time`) VALUES ('{$_POST['name']}','{$_POST['email']}','{$_POST['phone']}','{$car['name']}','{$_POST['pickupTime']}','{$_POST['returnTime']}','{$_POST['pickupLocation']}','{$_POST['returnLocation']}','".date('Y-m-d H:i:s')."')"; */
    $inputOrderData = "INSERT INTO `order`(`customer_name`, `customer_email`, `customer_phone_number`,`order_car`, `pick_up_time`, `return_time`, `collect_location`, `return_location`,`day`,`total_price`,`order_time`) VALUES ('{$_POST['name']}','{$_POST['email']}','{$_POST['phone']}','{$car['name']}','{$_POST['pickupTime']}','{$_POST['returnTime']}','{$_POST['pickupLocation']}','{$_POST['returnLocation']}','{$_POST['day']}','{$_POST['total_price']}','".date('Y-m-d H:i:s')."')";

    if(mysqli_query($dbConnection,$inputOrderData)){
        echo '<script>window.location="./confirmation.php";</script>';

    }else{
        echo '<script>alert("Failed to create order, please contact us");
        window.location="./index.php";</script>'; 
    }
}

function customerMessage($cp_Name,$cp_phone,$cp_Email,$cp_Message){
    global $dbConnection;

    $Message = "INSERT INTO `message`(`contact_person`,`contact_phone`,`contact_email`,`contact_message`) value ('$cp_Name','$cp_phone','$cp_Email','$cp_Message')";

    if(mysqli_query($dbConnection, $Message)){
        echo '<script>alert("Thank you for contacting us! We will reply you shortly!");
        window.location="./contact-us.php";</script>';
    }else{
        echo '<script>alert("Failed to submit message, please try again");
        window.location="./contact-us.php";</script>';
    }

}