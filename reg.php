       <?php include 'config2.php'; ?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link   type="text/css" rel="stylesheet" href="style.css">
         <link type='text/css' href='bootstrap.min.css'  rel='stylesheet' >
    </head>
    <body>
        <center>
    
   <?php 
   if (isset($_POST['submit'])){
       $name=$_POST['name'];
       $password=$_POST['password'];
        $mail=$_POST['mail'];
        $sl=$_POST['sl'];
         $id=$_POST['id'];
      
      if(empty($name) || empty($password) || empty($mail) || empty($id)) {
          echo '<div class="no">الرجاء ملئ جميع الحقول</div> ';
      }
 else {
          
$send="INSERT INTO `adm` (`id`, `name`, `password`, `dat add`,`mail`, `sl`) VALUES ('$id', '$name', '$password', CURRENT_TIMESTAMP, '$mail', '$sl')";
$query= mysqli_query($connect,$send) ;
         if($query){
             echo '<div class="yes"> تم التسجيل بنجاح<br><br><br></div>';
              echo '<a href="log.php" >دخول<br><br><br></a>';
  } 
 else {
      echo '<div class="no">خطا في ارسال بيانتك</div>'; 
  }
   
   }
   }
   ?>
           <br><br>
            <h1> تسجيل حديد </h1>
   <br>
   
            
 <form  method="POST"> 
  <div class="form-row" style=" width: 65%;">
     
    <div class="form-group col-md-6">
      <label for="inputPassword4">كلمة السر</label>
      <input name="password" type="password" class="form-control" id="inputPassword4" >
    </div>
      <div class="form-group col-md-6">
      <label for="inputEmail4">البريد الاكتروني</label>
      <input name="mail"  type="email" class="form-control" id="inputEmail4" >
    </div>
  </div>
  <div class="form-group" style=" width: 60%;">
    <label for="inputAddress">الاسم</label>
    <input name="name" type="text" class="form-control" id="inputAddress" >
  </div>
      <div class="col">
           <label for="inputAddress">الرقم الوطني</label>
      <input style=" width: 60px;" type="id" name="id" class="form-control" placeholder="رقم">
    </div>
     <br>     
    <div class="form-group col-md-4" >
      
      <select id="inputState" class="form-control" name="sl">
       
        <option>مدير</option>
          <option>مسؤول</option>
          <option selected>عضو</option>
      </select>
    </div>
    
   <input class="btn btn-primary" type="submit" name="submit" value="تسجيل" >
       
        </form>


   
                
            
        
        </center>
    </body>
</html>
