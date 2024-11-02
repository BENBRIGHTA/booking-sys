




<?php
include('./includes/connect.php');

  if(isset($_POST['submit'])){
    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];
    $passwordHash= password_hash($password, PASSWORD_DEFAULT);

    $selectUser= "SELECT * FROM users WHERE email = '$email' ";
    $result = mysqli_query($conn, $selectUser);
    $numOfRowsFound = mysqli_num_rows($result);
    //echo $numOfRowsFound;
    if($fullname === "" ||  $email ==="" ||  $mobile==="" || $password ==="" ||  $confirm_password ===""){
      echo  "<script> alert('Please, all fields must be filled')</script>";
      echo "<script>window.open('register.php','_self')</script>";
     exit();
   }

    if($numOfRowsFound>0){
      echo  "<script> alert('This username already exists')</script>";
      echo "<script>window.open('register.php','_self')</script>";

    }elseif (  $password!== $confirm_password){
      echo  "<script> alert('Passwords do not match')</script>";

    }else{
     $sql = "INSERT INTO users (username, email, mobile, user_password)
     VALUES ('$username', '$email', '$mobile' ,'$passwordHash')";
     $result = mysqli_query($conn, $sql);

     if($result){

       echo  "<script> alert('data inserted succesfully')</script>";
       echo "<script>window.open('login.php','_self')</script>";
       
  
  
    }else{
  
      die(mysqli_error($conn));
       
     }

   }
   
 }

?>





<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css
">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js
">

  <link rel="stylesheet" href="includes/style.css">
</head>
<body>
<!--FORM-->
<div class = "container">
<form action= "" method = "post">
      <!--Username-->
      <input type="text" name="username"  require= "required" placeholder ="Enter your fullname"> <br >
    
       <!--Email-->
      <input type="email" name="email"  require= "required"  placeholder ="Enter your email address"> <br>

       <!--mobile number--> 
       <input type="text" name="mobile"  require= "required"  
                placeholder ="Enter your mobile number" minLength="11" maxLength= "11"> <br>

           <!--password--> 
           <input type="password" name="password"  require= "required" placeholder ="Enter your password"> <br>

      <!--re- password--> 
      <input type="password" name="confirm_password"  require= "required" placeholder ="Confirm your password again"> <br>          

      <!--submit button--> 
      <button class = "btn" type= "submit" name="submit" >Add Details</button>

       <!--submit button--> 
       <button class = "btn" type= "submit" name="submit1" >Add onee Details</button>


     

    </form>
</body>
</html>
