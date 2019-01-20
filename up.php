<?php include 'config.php'; ?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
         <link   type="text/css" rel="stylesheet" href="style.css">
    </head>
    <body >
        
        <br><br><br><br><br><br>
        <form method='POST' action='' >
        <?php
       if(isset($_GET['id'])){
          $id=$_GET['id']; 
          
           $sql= "SELECT * FROM `usr` where id=$id" ;
           $query= mysqli_query($connect, $sql) ;
          
           if($query){
           echo " 
             <div class='tot'>  
             
<table >
             <tr>
              <td> حدف</td>
          
              <td> انجليزية </td>
             <td> جغرافيا  </td>
             <td >  عربية</td>
               <td> اسم الطالب  </td>
             <td> رت  </td>
             
            </tr>    "; 
  
       
 while ($row= mysqli_fetch_assoc($query)){
        
        
       
       $dat=$row['dat add'];
       $geographe=$row['geographe'];
       $arab=$row['arab'];
        $id=$row['id'];
        $anglais=$row['anglais'];
        $ffname=$row['ffname'];
        
        echo "
           
            
    <tr style='border:2px solid red ;' > 
            <td> <a href='del.php?id=$row[id];'>حدف</a> <a href='up.php?id=$row[id];'>تعديل</a>  </td>
        
            <td>  <input type='text' name='nanglais' value='$anglais '> </td>
            <td>  <input type='text' name='ngeographe' value='$geographe'> </td>
            <td > <input type='text' name='narab' value='$arab'>  </td>
            <td> <input type='text' name='nffname' value='$ffname'>  </td>
             <td> $id  </td>
                        
                       
    </tr>
</table>

<input type='submit' name='submit' value='تحديث'>

     </div> " ; 
        
  
         if(isset($_POST['submit'])){
           
                $nanglais=$_POST['nanglais'];
                $ngeographe=$_POST['ngeographe'];
                $narab=$_POST['narab'];
                  $nffname=$_POST['nffname'];
                  
     $sqli="update usr set ffname=' $nffname' , arab='$narab' , geographe='$ngeographe',  anglais='$nanglais' where id=$id "   ;       
      $query= mysqli_query($connect, $sqli) ;  
      
         if($query){ echo 'تم تحديث'; }
             
             else { echo 'فشل التحديث'; }
            
         
         
 
              
           
      }}           
      }
        
      } 
      
      
      if(isset($_POST['submit'])){
          
          header("location:red_info.php");
      }
       
        ?>
          </form>
    </body>
</html>
