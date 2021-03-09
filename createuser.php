<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create User</title>
    <link rel="stylesheet" href="css/createUser.css">
    <link rel="stylesheet" href="css/navBarr.css">

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  
</head>
<body style="border-top:2px grey solid">
  <?php
    include 'config.php';

    if(isset($_POST['submit'])){
       
    $name=$_POST['name'];
    $email=$_POST['email'];
    $balance=$_POST['balance'];
    $sql="insert into users(name,email,balance) values('{$name}','{$email}','{$balance}')";
    $result=mysqli_query($conn,$sql);
    if($result){
               echo "<script> alert('Hurray! User created');
                               window.location='transfermoney.php';
                     </script>";
                    
    }
  }
?>

     
     <?php
  include 'navbar.php';
  ?>
  
  
  <center><h2 style="color:white;margin-top : 15px">
  CREATE A USER</h2>

  <div style="border:2px black solid; border-color: black" class="outer">
<img src="img/user3.png">
      <form method="post">
      <div class="formm" style="width:57%;height:340px">
         NAME 
         <input class="inp" required name="name" type="text">
     EMAIL<input class="inp" required name="email" type="email">
         BALANCE<input class="inp" required name="balance" type="number">
          
      </div>
      <h1>  &nbsp;</h1>
      <input style="float:left margin:20px" class="btn btn-outline-dark"   type="submit" value="CREATE" name="submit">
   

      </form>
 
  </div>
  
  
  </center>
   <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
  
</body>
</html>