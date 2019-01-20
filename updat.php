<?php include 'config.php'; ?>

<?php
   
     if (isset($_POST['submit'])){
    $ffname=$_POST['ffname'];
    $id=$_POST['id'] ;
    }
  
    
  if (isset($_POST['submit'])){  
$send="update`usr` set  ffname='". $ffname ."'  where id=".$id  ; 
 $query= mysqli_query( $connect,$send) ;
         if($query){
             echo '<div class="yes"> تم تحديث المعلومات</div>';
  } 
 else {
      echo '<div class="no"> فشل التحديث</div>'; 
  }
  }
 
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
     <center >
        <a href="index.php">الصفحة الرئيسية </a><br><br><br>
        <form  method="POST"  action="">

          <h1>  تحديث المعلومات </h1><br><br><br>

         new name  : <input type="text" name="ffname"><br><br>
          id  : <input type="text" name="id"><br><br>
       
<input type="submit"  name="submit" value="تحديث" > 
     </center >
   </form>
    
    </body>
</html>
