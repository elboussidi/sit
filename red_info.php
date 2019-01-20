
<?php include 'config.php'; ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>red_info</title>
         <link   type="text/css" rel="stylesheet" href="style.css">
</head>
<body><center > 
  
     <!--------------------- red info  ------------------------------>
         
   <table  id="tt" >
      
   <?php 
    
    $red="SELECT * FROM `usr` ";
    $result= mysqli_query($connect, $red) ;
  
    if(!$result){
        die('<div class="no">تعدر الوصول الي البيانات</div>') ;
    }
 else {
      //  echo ' <div class="yes"> تم الوصول الي البيانات بنجاح</div>';
        echo '<br><br>';
    
    } 
    echo "
             <tr>
              <td> حدف</td>
             <td> تاريخ التسجيل </td>
              <td> انجليزية </td>
             <td> جغرافيا  </td>
             <td >  عربية</td>
               <td> اسم الطالب  </td>
             <td> رت  </td>
             
            </tr>
   ";
       
    
     $tot= mysqli_num_rows($result) ;
    while ($row= mysqli_fetch_assoc($result)){
        
        
       
       $dat=$row['dat add'];
       $geographe=$row['geographe'];
       $arab=$row['arab'];
        $id=$row['id'];
        $age=$row['anglais'];
        $ffname=$row['ffname'];
        
        echo "
            
            <tr style='border:2px solid black  ; padding:10px; width:80%;'  >
      <td> <a href='del.php?id=$row[id];'>حدف</a> <a href='up.php?id=$row[id];'>تعديل</a>  </td>
                <td> $dat  </td> 
                  <td> $age  </td>
              <td> $geographe </td>
                    <td >  $arab</td>
                     <td> $ffname  </td>
                    <td> $id  </td>
                       
            </tr>";

          
    }
    ?>
     
       <h3> عد الطلاب المسجلين بالقسم : <?php echo  $tot?> </h3>
       
       
    </table>
</center> </body>
</html>
<?php mysqli_close($connect) ?>