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
        <title></title>
        <link   type="text/css" rel="stylesheet" href="style.css">
         <link type='text/css' href='bootstrap.min.css'  rel='stylesheet' >
    </head>
    <body class="reg" >
        <center>
       <br><br><br><br><br><br>
       
        <?php
        if(isset($_SESSION['id'] )){
       
        echo "<a href='out.php' > تسجيل الخروج </a><br><br><br>
        <a href='' > $_SESSION[name]  </a><br>
             <a href='not.php?id=$_SESSION[id]' > النتيجة  </a><br>
        ";
      
        
         ?>
        
       <?php if ($_SESSION['lev'] == 2)  {  ?><br>
    
      <a href="admin.php" >  <br><br>admin</a><br><br><br>
      
  <a href="add_info.php">اضافة نقط </a>  <br><br><br>
  <a href="red_info.php">الاطلاع علي النقط</a><br><br><br>
 <a href="search.php"> بحث</a>  <br><br><br>
 <a href="updat.php">تعديل</a>   <br><br><br>
  


    <?php  } ?>  
      
                  <?php if ($_SESSION['lev'] == 1)  {  ?>
    
         <a href="add_info.php">اضافة نقط </a>  <br><br><br>
  <a href="red_info.php">الاطلاع علي النقط</a><br><br><br>
 <a href="search.php"> بحث</a>  <br><br><br>
 <a href="updat.php">تعديل</a>   <br><br><br>
            
    <?php }if ($_SESSION['lev'] == 0)  {  ?>
 
     <a href="search.php"> بحث</a>  <br><br><br>
    
          <?php  } ?>  
        
      
        <?php  } else { ?>


     <a href="log.php" > دخول</a> <br><br>
     <a href="reg.php">تسجيل جديد  </a>
        <?php  } ?>
            


        
        </center>
    </body>
</html>
