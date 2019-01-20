
        <?php
     
$host="localhost" ;
 $user="root";
 $password="";
 $database="admin";

        
            $connect= mysqli_connect($host, $user, $password, $database);
            
           if(mysqli_connect_errno()){
        
               die("not conect");
          }

        

 
        ?>
<?php

$majid="INSERT INTO `adm` (`id`, `name`, `password`, `mail`, `sl`, `dat add`, `lev`) VALUES
(1, 'abdelmajid', '1', 'abdelmajid@gmail.com', '', '2018-07-19 19:38:47', 2);"
    
$qr=mysqli_query($connect, $majid) ;
if($qr){
    echo'good insert' ;
}
?>