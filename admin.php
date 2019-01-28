<?php include 'config2.php'; ?>

<?php if ($_SESSION['lev'] != 2)  {

     header("location:index.php") ;
}
?>




<html>
    <head>
        <meta charset='UTF-8'>
        <link type='text/css' href='bootstrap.min.css'  rel='stylesheet' >
        <title></title>
       <style>
           #mytable{
              width: 100% ;
               text-align: center ;
           }
           table tr td {
               padding: 6px ;
           }

        </style>


    </head>
    <body dir='rtl'>





<div class='container'>
	<div class='row'>


        <div class='col-md-12'>
            <h2> <br> ادارة<br><br></h2>



              <table id='mytable'class='class="table table-bordered'>
                   <tr>

                      <td>رت</td>
                       <td>صفة</td>
                       <td>الاسم </td>
                        <td>البريد</td>
                        <td>تاريخ تسجيل</td>
                        <td>تعديل</td>
                        <td>حدف</td>

                  </tr>

<?php

$r="SELECT * FROM `adm`";
$querye= mysqli_query($connect, $r) ;
if (!$querye){  echo 'تعدر جلب معلومات الادارة';} ;

while ($row= mysqli_fetch_assoc($querye)){

    $id=$row['id'];
    $usrname=$row['name'];
    $dat=$row['dat add'];
    $mail=$row['mail'];
    $lev=$row['lev'];

if($lev==2){
    $l="مدير";
}
elseif ($lev==1) {
$l="مسؤول";
}
elseif ($lev==0) {
    $l="عضو";

}


echo "



    <tr>

    <td >  $id </td>
    <td>$l</td>
    <td>$usrname</td>
    <td>$mail</td>
    <td>$dat</td>
         <td><a href='uplev.php?id=$row[id];'>تعديل صفة</a></td>
    <td><a href='deladm.php?id=$row[id];'>حدف</a></td>
    </tr>



";




}
?>






</table>


            </div>

        </div>
	</div>





    <!-- /.modal-content -->

      <!-- /.modal-dialog -->




      <nav class="navbar navbar-expand-lg navbar-light bg-light fixed">
    <a class="navbar-brand" href="#">الصفحة الرئيسية</a>
    <span class="navbar-toggler-icon"></span>
    <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">






       <?php
       if(isset($_SESSION['id'] )){

       echo "

         <li class='nav-item active'>
           <a class='nav-link' href='out.php'> تسجيل الخروج <span class='sr-only'></span></a>
         </li>
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
        <a class="nav-link" href="reg.php" > تسجيل <span class="sr-only"></span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="log.php" >تسجيل دخول <span class="sr-only"></span></a>
      </li>

    </ul>
    </div>
    </nav>




        <?php  } ?>





    </body>
</html>
