<?php include 'config2.php'; ?>

<?php 
 //if($_SESSION['id']){ header("location: index.php" ); }

if (isset($_POST['submit'])){
       $name=$_POST['name'];
       $password=$_POST['password'];
      
      if(empty($name) || empty($password) ) {
          echo 'vide';
      }
 else {
     $select="SELECT * FROM `adm` WHERE name='$name' AND password='$password'" ;
     $result=$connect->query($select) ;
     if($result->num_rows > 0);
while ($row = $result->fetch_assoc()) {
    $_SESSION['id']=$row['id'];
    $_SESSION['name']=$row['name'];
    $_SESSION['password']=$row['password'];
     $_SESSION['lev']=$row['lev'];
    
    header("location: index.php" );
}   

 }
 
      }
 
      ?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link   type="text/css" rel="stylesheet" href="stylelog.css">
    </head>
    <body>
        <center>
        <div class="wrapper">
	<div class="container">
		<h1>Welcome</h1>
		
		<form method="POST"  class="form">
			<input type="text" placeholder="الاسم" name="name">
			<input type="password" placeholder="كلمة السر"name="password">
			 <input type="submit" name="submit" value="دخول"  id="login-button"> 
          
		</form>
	</div>
	
	
</div>
            
            
            </center>
    </body>
</html>
