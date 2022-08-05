<?php
 //$dbConnection = mysqli_connect("localhost","root","","green_rental_project");
$dbConnection = mysqli_connect("remotemysql.com","mY7D8u4FAO","bj4MWMsIj2","mY7D8u4FAO");
if(mysqli_connect_errno()){
    echo 'Failed to connect to MySQL';
    exit();
}
?>