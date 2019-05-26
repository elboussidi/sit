
<?php include 'config.php'; ?>






<html>
    <head>
        <meta charset='UTF-8'>
          <link   type="text/css" rel="stylesheet" href="bootstrap.min.css">
        <link type="text/css" rel="stylesheet" href="style.css" >
        <title></title>



    </head>
    <body dir='rtl'>

        <center>



<?php
 if(isset($_GET['id'])){
         $iid=$_GET['id'] ;
     }


//   '%".$id."%'"
    $red="select * from usr where id =  '$iid'" ;
    $result= mysqli_query($connect, $red) ;



    while ($row= mysqli_fetch_assoc($result)){


       $dat=$row['dat add'];
       $geographe=$row['geographe'];
       $arab=$row['arab'];
        $id=$row['id'];
        $age=$row['anglais'];
        $ffname=$row['ffname'];
        $sum= ($age+$geographe+$arab)/3 ;
        if ($sum>=10){
            $fin="ينتقل" ;
        }
 else {
     $fin="يكرر";
 }
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
<br><br>
<div class='not'> نتيجة : $fin </div>
    <br><br><hr>
  

       " ;





  }

  ?>
<input type="button" class="btn btn-secondary"value="طبع النتيجة" onclick="window.print ( ) ;" />
           </center>
            </div>

        </div>
	</div>





    </body>
</html>
