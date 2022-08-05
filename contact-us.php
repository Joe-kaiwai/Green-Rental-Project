<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="./image/index-img/round_logo.png">
    <link rel="stylesheet" href="./css/index.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <title>Green Rental</title>

    <style>
      body {font-family: Arial, Helvetica, sans-serif;}
      * {box-sizing: border-box;}
      
      input[type=text], select, textarea {
        width: 100%;
        padding: 12px;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
        margin-top: 6px;
        margin-bottom: 16px;
        resize: vertical;
      }
      
      input[type=submit] {
        background-color: #04AA6D;
        color: white;
        padding: 12px 20px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
      }
      
      input[type=submit]:hover {
        background-color: #45a049;
      }
      
      .container-ContactUs {
        border-radius: 5px;
        background-color: #e7e8e78d;
      }
      </style>

</head>
<body>
<a style="z-index: 1;" href="https://www.whatsapp.com/" target="_blank"><i class="fa-brands fa-whatsapp wts fa-4x me-4 mb-3 fa-shake d-none d-sm-block"></i></a>

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
                <a class="nav-link" href="./index.php">租車</a>
            </li>
            <li class="nav-item mx-3">
            <a class="nav-link" href="./flow.php">租車流程</a>
            </li>
            <li class="nav-item mx-3">
            <a class="nav-link" href="./promotions.php">最新優惠</a>
            </li>
            <li class="nav-item mx-3">
           <a class="nav-link" href="./about-us.php">關於我們</a>
            </li>
            <li class="nav-item mx-3">
                <div class="d-flex justify-content-center"><img src="./image/index-img/navcar.png" alt="navcar" class="navcar d-none d-lg-inline-block"></div>
             <a class="nav-link active" aria-current="page" href="./contact-us.html">聯絡我們</a>
            </li>
        </ul>
        </div>
    </div>
    </nav>

    

    <div class="logo">
        <img style="z-index:2" src="./image/index-img/round_logo.png" alt="green rental logo" class="greenRentalLogo">
    </div>
    
    <div>
      <img width="100%" style="position: relative;z-index: 1;"
      src="./image/index-img/Telephone.png" alt="Telephone poster" class="img-fluid">
    </div>

    <h2 style="text-align:start; margin:20px;margin-top:15px;margin-bottom:0px; margin-left: 100px; font-weight:1000;letter-spacing: 3px; font-family:Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;font-size:100px; color: #979997;">Contact</h2>
    <h2 style="text-align:start; margin:20px; margin-top:0px; margin-left:350px;font-weight:1000; text-decoration: underline; letter-spacing: 3px ;font-family:Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;font-size:100px; color: rgb(109, 221, 118);">Us</h2>
  
    <p style="text-align:right; margin-right:170px;">Phone: +852 21231234</p>
    <p style="text-align:right; margin-right:170px;">whatsapp: 61231234</p>
    <p style="text-align: right; margin-right:170px;"><a href="mailto:someone@example.com">CS.Greenrental@gmail.com</a></p>

<div class="container container-ContactUs d-flex justify-content-center w-75 p-5 mb-5" style="border-radius:15px ;">
  <form action="./function.php?op=customerMessage" method="post">
    <label for="name">Name</label>
    <input type="text" id="name" name="name" placeholder="Your name..">
    
    <label for="Phone">Phone</label>
    <input class="form control" type="text" id="Phone" name="Phone" placeholder="Number(s) only.." oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1').replace(/^0[^.]/, '0');" minlength="8" maxlength="8" required>

    <label for="email">Email</label>
    <input type="text" id="email" name="email" placeholder="Your E-mail address..">

    <label for="Message">Message</label>
    <textarea id="Message" name="Message" placeholder="Write something.." style="height:300px"></textarea>

    <input style="align-items: center;" type="submit" value="Submit">
  </form>
</div>


<?php include('index-footer.php')?>
</div>