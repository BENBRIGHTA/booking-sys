


<?php

//host
define("HOST", "localhost");

// database name
define ("DBNAME", "booking_sys");

//user
define("USER", "root");

//password
define ("PASSWORD","");


try {
 //create an object of the PDO class
$conn = new PDO("mysql:host=".HOST.";dbname=".DBNAME, USER, PASSWORD);
//echo "successful";
//pdo error mode to validate the database connection
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


// if($conn==true){
//   echo "database connection was successful";
// }else{
//   echo "error";
// }

} catch (PDOException $e) {

  echo $e-> getMessage();

}




// $conn = mysqli_connect('localhost', 'root', '', 'booking_sys');

// if($conn){

//   //echo "<script> alert('connected successfully')</script>";
  
//   }else{


//     die('connection failed');

//   }

?>