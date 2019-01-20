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
   
    
    
    
      
        
        
    </body>
</html>





