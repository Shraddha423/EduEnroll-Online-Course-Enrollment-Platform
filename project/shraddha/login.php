<?php
    include "connection.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <style>
    body{
      margin-top: -20px; 
      min-height: 600px;
      min-width: 1300px;
      background-image: linear-gradient(rgba(0,0,0,0.1),rgba(0,0,0,0.7)), url('images/S5.jpg');
      background-size: cover;
      background-position: center;
      background-attachment: fixed;
      background-repeat: no-repeat;
      background-size: 100% 100%;
    }
    .form{
      align-items: center;
      justify-content: center;
      text-align: center;
      transform: translateY(30px);
    }
    .form input{
      margin-top: 20px;
      margin-bottom: 20px;
      height: 40px;
      width: 300px;
      border-radius: 50px;
    }
    .form label{
      color: white;
      font-size: 20px;
    }
    .form button{
      font-size: 17px;
      height: 33px;
      width: 90px;
      border-style: solid;
      font-weight: 600;
      border-radius: 50px;
    }
    .box{
      margin-top: 10px;
      background-color: rgba(0,0,0,0.5);
      height: 500px;
      width: 800px;
      margin: 10% 24%;
      box-shadow:20px 20px 50px 10px rgb(10 111 125);
    }
    h1{
      color: white;
      font-weight: bold;
      text-align: center;
      padding-top: 50px;
    }
    img{
      float: left;
      height: 100px;
      width: 100px;
      margin-top: -9%;
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
  <header>
    <div class="cls" style="margin-left: 30px;">
      <img src="images/L3.png" alt="">
    </div>
    <div class="stu">
      <h2 style="float: left; margin-top: -98px; margin-left: 130px;"> STUDENT INFO. SYSTEM </h2>
      <a style="float: left; margin-top: -110px; margin-left: 1100px;" href="index.php"> HOME </a>
      <a style="float: left; margin-top: -110px; margin-left: 1200px;" href="login.php"> LOGIN </a>
      <?php
        if(isset($_SESSION['login_user'])){
        ?>
        <a style="float: left; margin-top: -110px; margin-left: 1300px;" href="logout.php"> LOGOUT </a>
        <?php
        }
        else{
        ?>
        <a style="float: left; margin-top: -110px; margin-left: 1300px;" href="registration.php"> SIGNUP </a>
        <?php
        }
        ?>
    </div>
    <div class="box">
      <h1 style="font-family: Arial;"> USER LOG-IN <br> FORM </h1>
      <form class="form" method="post">
        <label>Username:</label> &nbsp;&nbsp;&nbsp;
        <input type="text" name="username" placeholder="    Enter username here..." required="" ><br>
        <label>Password:</label> &nbsp;&nbsp;&nbsp;
        <input type="password" name="password"  placeholder="   Enter password here..." required=""><br><br>
        <button  type="submit" name="submit" value="Login" >LOG-IN</button>
      </form>
    </div>
  </header>
  <?php
    if(isset($_POST['submit'])){
      $count=0;
      $res=mysqli_query($db,"SELECT * FROM `admin` WHERE username='$_POST[username]' && password='$_POST[password]' ;");

      $row= mysqli_fetch_assoc($res);

      $count=mysqli_num_rows($res);

      if($count==0){
          ?>
          <script type="text/javascript">
              alert("The username and password doesn't matched.");
          </script>
          <?php
      }
      else{
          // -------------- If username and password matches ------------
          
          $_SESSION['login_user'] = $_POST['username'];

          ?>
          <script type="text/javascript">
              window.location="afterlogin.php"
          </script>
          <?php
      }
    }
?>
</body>
</html>