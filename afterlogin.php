<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Courses </title>
    <style>
        body{
            margin-top: -20px; 
            min-height: 600px;
            min-width: 1300px;
            background-image: linear-gradient(rgba(0,0,0,0.1),rgba(0,0,0,0.7)), url('images/A4.jpg');
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            background-repeat: no-repeat;
            background-size: 100% 100%;
        }
        .stu{
            float: right;
            /* margin-top: 35px; */
            /* align-items: right; */
            margin-top: -30px;
        }
        .stu a
        {   
            display:inline-flex;
            padding: 7px 15px;
            border-radius:20px;
            text-decoration: none;
            color: white;
            font-size: 23px;
            flex-direction: row;
             transform: translateX(-10px);
             transform: translateY(-35px);
             justify-content: space-between;
        }
        .stu a:hover,
        section .stu  a.active
        {
            background: linear-gradient(rgba(0,0,0,0.4),rgba(0,0,0,0.4));

        }
        img{
            margin-top: 20px;
            height: 100px;
            width: 100px;
        }
        .box{
            background: linear-gradient(rgba(0,0,0,0.4),rgba(0,0,0,0.4));
            transform: translateY(30px);
            height: 70vh;
            width: 92%;
            margin-left: 25px;
            border-radius: 20px;
            padding: 30px;
        }
        .box .course
        {
            text-align:center;
            color:white;
            font-weight:600;
            margin-top:70px;
            font-size:20px;
            flex-direction: column;
            display:flex;
        }
        .box .course form p  a
        {
            margin-top:50px;
            background:#5b869b;
            padding:5px 10px;
            border-radius:20px;
            color:white;
        }
        .box .course form p  a:hover
        {
            background-color:#91aab9;
            color:black;
        }
       .box h2 b:hover
       {
           transform:scale( 1.2px);
           color:black;
       }
    </style>
</head>
<body>
    <section class="one">
        <div class="cls" style="margin-left: 30px;">
            <img src="images/L3.png" alt="">
        </div>
        <h2 style="float: left; margin-top: -68px; margin-left: 130px; color: white;"> <b> STUDENT INFO. SYSTEM </b> </h2>
        <div class="stu">
            <a href="index.php" >HOME</a>
            <a href="index.php">LOG-OUT</a>
        </div>
    </section>
    <section>
        <div class="box">
            <h2 style="color: white; margin-top: -10px; font-size: 30px; margin-left: 40%; transition:1s;"> <b> AVAILABLE COURSES</b> </h2>
        <div class="course">
            <form action="ontouch.php">
            <P>  <a style="text-decoration: none;" href="ontouch.php"> HINDI </a></P>
            </form>

            <form action="ontouch.php">
            <P> <a href="ontouch.php" style="text-decoration: none;"> ENGLISH </a></p>
            </form>
            <form action="ontouch.php">
             <P> <a href="ontouch.php" style="text-decoration: none;"> IT </a></p>
             </form>
             <form action="ontouch.php">
             <P> <a href="ontouch.php" style="text-decoration: none;"> MATHS </a></p>
             </form>
             <form action="ontouch.php">
             <P> <a href="ontouch.php" style="text-decoration: none;"> PHYSICS </a></p>
             </form>
             <form action="ontouch.php">
             <P> <a href="ontouch.php" style="text-decoration: none;"> COMPUTER SCIENCE </a></p>
             </form>
        </div>
        </div>
    </section>
</body>
</html>