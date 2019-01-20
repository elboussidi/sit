
<?php include 'config.php'; ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>red_info</title>
        <link  type="text/css" rel="stylesheet" href="bootstrap.min.css"> 
        <link type="text/css" rel="stylesheet" href="style.css" >
</head>
<body dir="rtl"  ><center > 
 
    
     <!--------------------- red info  ------------------------------>
     
  
      
        <center >
           
        <form  method="POST"  action="">
<br><br><br>
          <h1> الاطلاع علي نقط الطالب 2018/2019</h1><br><br><br>

    <br><br>
       <br><div class="input-group mb-3" style=" width:50% ;">
  <input type="text"  name="name" class="form-control" placeholder="اسم الطالب" aria-label="Recipient's username" aria-describedby="button-addon2">
  <div class="input-group-append">
   <input class="btn btn-outline-secondary"  type="submit"  name="submit" value="بحث" > 
  </div>
</div>
            
            

     </center>
     <br>
   </div>              


   <?php 
    if(isset($_POST['submit'])){ 
        $name=$_POST['name'] ;
        
       
    if($name==""){
          die(' <br><div class="no">لايمكن ترك حقل البحث فارغ</div>') ;
    }
       
        
    else { 
//   '%".$id."%'"
    $red="select * from usr where ffname =  '$name'" ;
    $result= mysqli_query($connect, $red) ;
    if(!$result){
        die('<div class="no">تعدر الوصول الي البيانات</div>') ;
    }

 
   
    
     }
        
    }
        
    ?>
     
      
    
    <?php 
   if(isset($_POST['submit'])){ 
       
        
    while ($row= mysqli_fetch_assoc($result)){
        
        
       $dat=$row['dat add'];
       $geographe=$row['geographe'];
       $arab=$row['arab'];
        $id=$row['id'];
        $age=$row['anglais'];
        $ffname=$row['ffname'];
        $sum= ($age+$geographe+$arab)/3 ;
        echo " 
            <br><br> <hr> <br><br>
         <div class='a'>  المملكة المغربية <br> وزارة التربية و التعليم <br>اكاديمية مراكش-اسفي </div>
   <img alt='logo' src='2000px-Coat_of_arms_of_Morocco.svg.png' style='width: 100px ; height: 100px'>
   <table>
         <div class='dat'> بتاريخ :<br>$dat</div><br>
          <h3> بيان نقط المراقبة المستمرة </h3>
          


          <div class='name'> اسم الطالب : $ffname   <br><br>   الرقم الوطني :$id </div><br><br> <br><br> 
          <hr style='width: 50%;' ><br><br> 


 <table>
  <tr>
          <th>المادة </th>
       <th>النقطة </th>
       
  </tr> 
  <tr>
                   <th>العربية</th>
        <th>$arab </th>

  </tr>
  <tr>
   <th>الجغرافيا</th>
        <th>$geographe</th>
       
 </tr>  
     <tr>
     <th>انجليزية</th>
        <th>$age</th>
        
 </tr>  
     
     
<tr>
                <th>المعدل</th>
        <th>$sum</th>
        
 </tr>
 </table>      
    
  <br><br> <br><br> <br><br><hr> 
       " ;
        

      

   
  } }

    ?>
  
    
<!--       

       
  <a href="add_info.php">اضافة بيانات </a>  <br><br><br><br>-->
 
</center> </body>
</html>
<?php mysqli_close($connect) ?>