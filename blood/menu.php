
<?php 
  session_start();


  if ($_SESSION['email'] != NULL){
       $useremail = $_SESSION['email'];                   
  }else{
    header("Location: index.php");
  }


?>

<div class="container">
 <nav class="navbar navbar-inverse">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Blood Donation</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="homepage.php">Home</a></li>
      <li><a href="check_stock_status.php">Check Stock</a></li>
      <li><a href="finddoner.php">Find Donor</a></li>
      <li><a href="donor_registration.php">Donor Registration</a></li>
      <li><a href="contact.php">Contact Us</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      
       <li style="margin-right: 10px;"><a href="index.php"><span class="glyphicon glyphicon-user"></span> Log Out</a></li>
    </ul>
 </nav> 
</div>


