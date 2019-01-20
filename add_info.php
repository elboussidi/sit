<?php require  'config.php'; ?>


?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>insert_info</title>
       
    <link   type="text/css" rel="stylesheet" href="bootstrap.min.css">
    <style>
        
    </style>
</head>
<body dir="rtl">
<center >

    
    <!--  --------------------     add info insert page     ----------------------- -->
 <?php
   
     if (isset($_POST['submit'])){
    $arab=$_POST['arab'];
   $ffname=$_POST['ffname'];
    $anglais=$_POST['anglais'];
    $geographe=$_POST['geographe'];
     $id=$_POST['id'];
   

$send="INSERT INTO `usr`(`id`, `ffname`, `arab`, `geographe`, `anglais`, `dat add`) VALUES ('$id','$ffname','$arab','$geographe','$anglais',CURRENT_TIMESTAMP)";
 $query= mysqli_query( $connect,$send) ;
         if($query){
             echo '<div class="yes"> تمت اضافة البيانات بنجاح </div>';
  } 
 else {
      echo '<div class="no"> عفوا ....!تعدر الارسال   </div>'; 
  }
  }
 
?>
     
<form  method="POST"  >

          <h1> قم بادخال نقط و اسم الطالب </h1><br><br><br>
      

    
  <div class="form-row" style=" width:65% ;">
    <div class="col-7">
      <input type="text" name="ffname" class="form-control" placeholder="اسم الطالب">
    </div>
   <br>
    <div class="col">
      <input type="text" name="arab" class="form-control" placeholder="arab">
    </div>
    <div class="col">
      <input type="text" name="geographe" class="form-control" placeholder="geo">
    </div><div class="col">
      <input type="text" name="anglais" class="form-control" placeholder="anglsh">
    </div>
   <div class="col">
      <input type="id" name="id" class="form-control" placeholder="رقم">
    </div>
  </div><br><br><br>
       <input  class="btn btn-outline-success" type="submit"  name="submit" value="اضافة" >    
</form> 
    
    

</center>
</body>
</html>