<?php
//$conn = mysqli_connect('localhost','root','','blood');


   $dbhost = 'localhost';
   $dbuser = 'root';
   $dbpass = 'Mahadi1234';
   $conn = mysqli_connect($dbhost, $dbuser, $dbpass);
   
   if(! $conn ) {
      die('Could not connect: ' . mysqli_error($conn));
   }
   
   mysqli_select_db($conn,'blood');

?>

