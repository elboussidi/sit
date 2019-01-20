<?php include 'config2.php'; ?>





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
            <h2 > <br>  ادارة  <br><br></h2>
      

                
              <table id='mytable'class='table table-bordered'>
                 <tr>
                   
                      <td>رت</td>
                       <td>صفة</td>
                       <td>الاسم </td>
                        <td>البريد</td> 
                     <td>صفة المطلوبة</td>
                       
                       
                        
                  </tr>
    
<?php
if(isset($_GET['id'])){
          $id=$_GET['id']; 
 

$sql= "SELECT * FROM `adm` where id='$id'" ;
           $querye= mysqli_query($connect, $sql) ;
if($querye){
    
    
    

    while ($row= mysqli_fetch_assoc($querye)){
    
    $id=$row['id'];
    $usrname=$row['name'];
    $dat=$row['dat add'];
    $lev=$row['lev'];
    $mail=$row['mail']; 
     $sl=$row['sl'];
   

echo "
    <form method='post'>
    <tr>
   
    <td>  $id </td>
          <td> <input type='text' name='lv'  value='$lev'> </td>
 <td>$usrname</td>
    <td>$mail</td>
    <td>$sl</td>
   </tr>
    


<br><input  type='submit' value='تحديث' name='submit' /><br>
</form>
";

}}}
 if(isset($_POST['submit'])){
    $nlev=$_POST['lv'];
  
 $r2="update adm set lev='$nlev'  where id='$id' "   ;       
$querye= mysqli_query($connect, $r2) ;
if (!$querye){echo 'تعدر جلب معلومات الادارة';} ;

}

?>
    
       
  
        
</table>

                
            </div>
            
        </div>
	</div>


 
          
   

      <!-- /.modal-dialog --> 

    
    
    
      
            <?php 
        
        if(isset($_POST['submit'])){
          
          header("location:admin.php");
      }
       
        ?> 
        
    </body>
</html>





