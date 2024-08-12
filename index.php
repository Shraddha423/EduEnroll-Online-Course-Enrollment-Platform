<?php
    include "connection.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title> Student Information System </title>
  <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>
  <link rel="stylesheet" href="style.css">
  <style>
    img{
      margin-top: -3px;
      height: 100px;
      width: 100px;
    }
    .stu{
      float: left;
      margin-top: 15px;
    }
    #sec{
      background-image: linear-gradient(rgba(0,0,0,0),rgba(0,0,0,0)), url('images/S8.jpg');
      background-size: cover;
      background-position: center;
      background-attachment: fixed;
      background-repeat: no-repeat;
      background-size: 100% 100%;
    }
    #about h2{
      margin-left: 45%;
    }
    .about{
      margin-top: 20vh;
    }
  </style>
</head>
<body>
  <header>
    <div id="main">
      <div class="cls">
        <img src="images/L3.png" alt="">
      </div>
      <div class="stu">
        <h5> STUDENT INFO. SYSTEM </h5>
      </div>
      <div class="menu">
        <ul> 
          <li><a href="index.php"> HOME </a></li>
          <li><a href="login.php"> LOGIN </a></li>
          <li><a href="registration.php">SIGNUP </a></li>
          <li><a href="#about"> ABOUT </a></li>
          <li><a href="#contact"> CONTACT </a></li>
        </ul>
      </div>
    </div>  
  </header>
<section id="about">
    <h2 style="font-size: 50px; color: white; padding-top: 20px; "> About <span style="font-size: 50px; color: #b3ab91;"> Us</span></h2>
    <p style="padding: 60px 170px; font-size: 25px; color: white; letter-spacing: 0.04em;">
        &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
        &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
        The main objective of this website is to decrease the manual work of data entries 
        of the students in any educational institutes. <br><br>
        The website will store the details/information of the students through online 
        registration from filled by the student. It will be easy for the institution
        to manage the details of their students rather than registers and files. <br><br>

    </p>
</section>
<footer id="contact" style="background-color:#0d0e00b3; padding: 10px;">
    <h3 style="color: white; text-align: center;"> Contact us through social media. </h3><br>
    <div class="icons" style="margin: 0% 41.5%;">
        <a href="#"><ion-icon name="logo-facebook"></ion-icon></a>
        <a href="#"><ion-icon name="logo-instagram"></ion-icon></a>
        <a href="#"><ion-icon name="logo-twitter"></ion-icon></a>
        <a href="#"><ion-icon name="logo-github"></ion-icon></a>
        <a href="#"><ion-icon name="logo-linkedin"></ion-icon></a>
    </div>
    <br>
    <p style="color: white;text-align: center;">
        Email: &nbsp; nishixyz@gmail.com <br><br>
        Mobile: &nbsp; +91 81034 47793
    </p><br>
    <p style="color: white;text-align: center;">Copyright ©2k22 NISHI VISHWAKARMA...<br><br> All rights reserved....</p>
</footer>
</body>
</html>