<?php include 'config2.php'; ?>

<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>home page</title>
        <link   type="text/css" rel="stylesheet" href="style.css">
         <link type='text/css' href='bootstrap.min.css'  rel='stylesheet' >
    </head>

    <body class="reg" dir="rtl">
      <nav class="navbar navbar-expand-lg navbar-light bg-light fixed">
 <a class="navbar-brand" href="">الصفحة الرئيسية</a>
   <span class="navbar-toggler-icon"></span>
 <div class="collapse navbar-collapse" id="navbarNav">
   <ul class="navbar-nav">






       <?php
       if(isset($_SESSION['id'] )){

       echo "

         <li class='nav-item active'>
           <a style='color red;' class='nav-link' href='out.php'> تسجيل الخروج <span class='sr-only'></span></a>
         </li>
          &emsp;&emsp; &emsp;&emsp;
         <li class='nav-item active'>

           <a class='nav-link' href='not.php?id=$_SESSION[id]'> النتيجة <span class='sr-only'></span></a>
         </li>

       ";


        ?>
      


        <?php if ($_SESSION['lev'] == 2)  {  ?><br>


        <li class="nav-item active">
          <a class="nav-link" href="admin.php">ادارة الموقع <span class="sr-only"></span></a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="add_info.php">اضافة نقط<span class="sr-only"></span></a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="red_info.php">الاطلاع علي النقط<span class="sr-only"></span></a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="search.php"> بحث <span class="sr-only"></span></a>
        </li>
        <li class="nav-item active">
          <a class="nav-link"href="updat.php">تعديل<span class="sr-only"></span></a>
        </li>


        <?php  } ?>

                  <?php if ($_SESSION['lev'] == 1)  {  ?>

        <li class="nav-item active">
          <a class="nav-link" href="add_info.php">اضافة نقط<span class="sr-only"></span></a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="red_info.php">الاطلاع علي النقط<span class="sr-only"></span></a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="search.php"> بحث <span class="sr-only"></span></a>
        </li>
        <li class="nav-item active">
          <a class="nav-link"href="updat.php">تعديل<span class="sr-only"></span></a>
        </li>
        <?php }if ($_SESSION['lev'] == 0)  {  ?>


        <li class="nav-item active">
          <a class="nav-link" href="search.php" > بحث <span class="sr-only"></span></a>
        </li>
          <?php  } ?>


<?php  } else { ?>



<li class="nav-item active">
        <a class="nav-link" href="log.php" >تسجيل دخول <span class="sr-only"></span></a>
      </li>
 &emsp;&emsp; &emsp;&emsp;
      <li class="nav-item active">
        <a class="nav-link" href="reg.php" > تسجيل <span class="sr-only"></span></a>
      </li>
      
    </ul>
  </div>
</nav>




        <?php  } ?>





    </body>
</html>
