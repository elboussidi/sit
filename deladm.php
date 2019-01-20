<?php include 'config2.php'; ?>
<?php header("location:admin.php")     ?>

        <?php 
    
    $red="delete  FROM `adm` where id=".$_GET['id'];
    $result= mysqli_query($connect, $red) ;
    if(!$result){
        die('<div class="no"> فشل الحدف </div>') ;
    }
 else {
        echo ' <div class="yes"> تم الحدف'. ' بنجاح</div>';
    
    }
    ?>