
<?php
session_start();
 include('./includes/connect.php');
  if(isset($_POST['login'])){

    $email = $_POST['email'];
    $password = $_POST['password'];

    $selectUser= "SELECT * FROM users WHERE email = '$email' ";
    $result = mysqli_query($conn, $selectUser);
    $fetchData = mysqli_fetch_assoc($result);
    $numOfRowsFound = mysqli_num_rows($result);

    if($numOfRowsFound>0){
      if(password_verify($password,$fetchData['user_password'])){
        //after user is successfully logged in access the session variable
        $username = $_SESSION['username'];
       header("Location: booking.php");

       // echo "<script>window.open('studentHomePage.php','_self')</script>";
      }else{
        echo"<script> alert('You have entered wrong username or password')</script>";

      }
    }else{
      echo"<script> alert('invalid credentials')</script>";

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

  <link rel="stylesheet" href="signup.css">
</head>
<body>
<!--FORM-->
<div class = "container">
<form action= "login.php" method = "post">
      <!--Username-->
      <input type="email" name="email"  require= "required" placeholder ="Enter your email"> <br >

      <!--re- password--> 
      <input type="password" name="password"  require= "required" placeholder ="Enter your password"> <br>          

      <!--submit button--> 
      <button class = "btn" type= "submit" name="login" >Add Details</button>

    </form>
   </body>
</html>
