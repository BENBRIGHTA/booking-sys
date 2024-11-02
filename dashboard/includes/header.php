<?php
//base URL
  define('APPURL', 'http://localhost/booking-sys/dashboard');

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="<?php echo APPURL;?>/includes/header.css">
</head>
<body>






<nav>
    <div class="container nav__container">

      <!--   <marquee width=" 500px" behavior="" direction=""><h1 class="moving">My Booking</h1></marquee> 
      </h4> -->

      <h5 class= "moving">Booking</h5>

      <ul class="nav__menu">
        <li><a href="#">Home</a></li>
        <li><a href="hotelRoom.php">Hotel</a></li>
        <li><a href="contact1.php">contactUs</a></li>
        <li><button><a href="registration.php">Book Online</a></button></li>
        <li>
          
        <div id="google_translate_element"></div>
        <script type="text/javascript">
        function googleTranslateElementInit() {
            new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
            }
            </script>
        <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
        </li>
      </ul>
    </div>
  </nav>
