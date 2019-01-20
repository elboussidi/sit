<?php header("location:red_info.php")     ?>

<?php include 'config.php'; ?>
        <?php 
    
    $red="delete  FROM `usr` where id=".$_GET['id'];
    $result= mysqli_query($connect, $red) ;
    if(!$result){
        die('<div class="no"> فشل الحدف </div>') ;
    }
 else {
        echo ' <div class="yes"> تم الحدف'. ' بنجاح</div>';
    
    }
    ?>
  <!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>insert_info</title>
        <link   type="text/css" rel="stylesheet" href="style.css">
</head>
<body dir="rtl">
<center >

    
    <a href="index.php">الصفحة الرئيسية </a><br><br><br>
    <a href="red_info.php"> الاطلاع علي البيانات</a><br><br><br>




    

</center>
</body>
</html>