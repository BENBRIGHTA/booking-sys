


<?php

$conn = mysqli_connect('localhost', 'root', '', 'test');

if($conn){

  //echo "<script> alert('connected successfully')</script>";
  
  }else{

    die('connection failed');

  }

session_start();

if(isset($_POST['book'])){
 $number = $_POST['number'];
 $usernam = $_SESSION['username'];
 $sql = "INSERT INTO booking (number1, username_id) VALUES ('$number','$usernam')";
 $query = mysqli_query($conn, $sql);

 if($query){
    echo"inserted";

 }
}
?>




<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">


  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css
">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js
">

  <title>Welcome, <?php echo $_SESSION['username']?></title>
</head>
<body>
  <div class="container-fluid py-4 text-center bg-secondary text-light" >
      <h2>Hello, <?php echo $_SESSION['username']?></h2>

      <p>You are welcome :)</p>
      <a href="logout.php"><button class="btn btn-info text-light">Logout</button></a>
  </div>



  <form action= "" method = "post">
      <!-- <input type="text" name="username"  require= "required" placeholder ="Username"> <br >   -->
     

      <!--re- password--> 
      <input type="text" name="number"  require= "required" placeholder ="Enter your password"> <br>          

      <!--submit button--> 
      <button class = "btn" type= "submit" name="book" >Add Details</button>

    </form>

  
</body>
</html>