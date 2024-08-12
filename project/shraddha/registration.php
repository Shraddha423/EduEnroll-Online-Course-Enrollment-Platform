<?php
    include "connection.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registration</title>
  <style>
    body{
      background-color: aquamarine;
      margin-top: -20px; 
      height: 600px;
      width: 1300px;
      background-image: linear-gradient(rgba(0,0,0,0.2),rgba(0,0,0,0.4)), url('images/R1.jpg');
      background-size: cover;
      background-position: center;
      background-attachment: fixed;
      background-repeat: no-repeat;
      background-size: 100% 100%;
    }
    .header{
      color:white;
      margin-top: 30px;
      opacity:2;
      font-size:25px;
      border-width:2px;
      text-align:center;
      font-family:Arial;
    } 
    h2{
      color:white;
      text-align:center;
      font-family:Arial;
      font-size:25px;
    }
    .form label{
      color: white;
      padding-bottom: 10px;
      font-weight: 1000;
      font-size: 20px;
      font-family: Arial;
    }
    .form{
      align-items: center;
      justify-content: center;
      text-align: center;
      transform: translateY(20px);
    }
    .form input{
      border-radius: 50px;
    }
    .form button{
      font-size: 17px;
      height: 33px;
      width: 90px;
      border-style: solid;
      font-weight: 600;
      border-radius: 50px;
      margin-top: 20px;
    }
    .box{
      color: white;
      height: 1100px;
      width: 450px;
      background-color: rgba(0,0,0,0.5);
      margin: 12% 24%;
      padding: 20px;
      opacity: .8;
      margin-left: 40%;
      box-shadow:20px 20px 50px 10px rgb(8, 34, 37);
      margin-bottom: 50px;
    }
    input{
      color:white;
    }
    img{
      float: left;
      height: 100px;
      width: 100px;
      margin-top: -10.6%;
    }
    .stu{
      float: left;
      color: white;
      font-family: Arial;
    }
    .stu a{
      text-decoration: none;
      color: white;
      font-weight: bold ;
      font-size: 22px;
      padding:10px 18px 12px;
    }
    .stu a:hover, a:active{
      color:black;
      background-color: #b3ab91;
      border-radius: 50px;
    }
  </style>
</head>
<body>
<section>
  <div class="cls" style="margin-left: 30px;">
    <img src="images/L3.png" alt="">
  </div>
  <div class="stu">
    <h2 style="float: left; margin-top: -98px; margin-left: 130px;"> STUDENT INFO. SYSTEM </h2>
    <a style="float: left; margin-top: -112px; margin-left: 1100px;" href="index.php"> HOME </a>
    <a style="float: left; margin-top: -112px; margin-left: 1200px;" href="login.php"> LOGIN </a>
    <a style="float: left; margin-top: -112px; margin-left: 1300px;" href="registration.php">SIGNUP </a>
  </div> 
  <div class="box">
    <h2 style="font-size: 30px;">Registration Form</h2>
    <form class="form" method="post"> 
      <label>Enter your Username:</label><br>
        <input style="margin-left: 30px; margin-bottom: 10px; margin-top: 3px; height: 25px; width: 400px; color: black;" type="text" name="username" required="" placeholder="  Enter your username..." /><br>
      <label>Enter your Password:</label><br>
        <input style="margin-left: 30px; margin-bottom: 10px; margin-top: 3px; height: 25px; width: 400px; color: black;" type="password" name="password" required="" placeholder="  Enter your password..." /><br>
      <label>Enter your name:</label><br>
        <input style="margin-left: 30px; margin-bottom: 10px; margin-top: 3px; height: 25px; width: 400px; color: black;" type="text" name="sname" required="" placeholder="  Enter your name..." /><br>
      <label>Enter Father's name:</label>
        <input style="margin-left: 30px; margin-bottom: 10px; margin-top: 3px; height: 25px; width: 400px; color: black;" type="text" name="fname" required="" placeholder="  Enter your fathers name..." /><br>
      <label>Enter Mother's name:</label>
        <input style="margin-left: 30px; margin-bottom: 10px; margin-top: 3px; height: 25px; width: 400px; color: black;" type="text" name="mname"  required="" placeholder=" Enter your mothers name..." /><br>
      <label>Date of birth:</label>
        <input style="color: black; margin-left: 30px; margin-bottom: 18px; margin-top: 3px; height: 25px; width: 400px;  color: black;" type="date" name="date"/><br>
      <label>Gender:</label><br>
        <input style="font-size: 30px; color: white;" type="radio" name="gender" value="Male"/><b style="padding-right: 60px; padding-top: 30px; font-size: 17px; "> MALE </b>
        <input style="font-size: 30px; color: white;" type="radio" name="gender" value="Female" checked=""/><b style="padding-right: 20px; padding-top: 30px; font-size: 17px;"> FEMALE </b><br><br>
      <label style="font-size: 20px; color: white;">Stream:</l25el>
      <select style="margin-left: 30px; margin-bottom: 10px; margin-top: 3px; height: 25px; width: 400px; border-radius: 50px;" name="dropdown"> 
        <option style="font-size: 15px; color: black;">&nbsp; None </option>
        <option style="font-size: 15px; color: black;">&nbsp;B.Sc.(Bachelor of Science)</option>
        <option style="font-size: 15px; color: black;">&nbsp;B.Com.(Bachelor of Commerce)</option>  
        <option style="font-size: 15px; color: black;">&nbsp;B.B.A.(Bachelor of Business Administration)</option> 
        <option style="font-size: 15px; color: black;">&nbsp;B.A.(Bachelor of Arts)</option>
      </select><br/>
      <label>Enter Contact no.:</label>
      <input style="margin-left: 30px; margin-bottom: 10px; margin-top: 3px; height: 25px; width: 400px; color: black;" type="text" name="contact"  required="" placeholder=" Enter your contact no."  /><br>
      <label>Enter e-mail Id:</label>
      <input style="margin-left: 30px; margin-bottom: 10px; margin-top: 3px; height: 25px; width: 400px; color: black;" type="text" name="email"  required="" placeholder=" Enter your email"  /><br>
      <label>Enter Address:</label>
      <input style="margin-left: 30px; margin-bottom: 10px; margin-top: 3px; height: 25px; width: 400px; color: black;" type="text" name="address"  required="" placeholder=" Enter your address"  /><br>
      <label>Registration date:</label><br>
      <input style="color:black; margin-left: 30px; margin-bottom: 10px; margin-top: 3px; height: 25px; width: 400px;" type="date" name="rdate" /><br>
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <input style="font-size: 20px; color:white; background-color: white;" type="checkbox" required="" />All the details are correct.<br>
      <input style="font-size: 20px; color:white; background-color: white;" type="checkbox" required="" />Rechecked all details.<br>
      <button type="submit" name="submit" value="Sign up"> SUBMIT </button>
    </form>
  </div>
</section> 
  <?php
        if(isset($_POST['submit'])){
            $count=0;
            $sql='SELECT username from `admin`';
            $res=mysqli_query($db,$sql);

            while($row=mysqli_fetch_assoc($res)){
                if($row['username']==$_POST['username']){
                    $count=$count+1;
                }
            }

        if($count==0){
            mysqli_query($db,"INSERT INTO `admin`  VALUES('','$_POST[username]','$_POST[password]','$_POST[sname]', '$_POST[fname]', '$_POST[mname]', '$_POST[date]',
            '$_POST[gender]', '$_POST[dropdown]', '$_POST[contact]', '$_POST[email]', '$_POST[address]', '$_POST[rdate]');");
    ?>
        <script type="text/javascript">
            alert("Registration Successfull");
            window.location="login.php"
        </script>
    <?php
        }
        else{
    ?>
        <script type="text/javascript">
            alert("The username already exists.");
        </script>
    <?php
        }
    }
  ?>
</body>
</html>