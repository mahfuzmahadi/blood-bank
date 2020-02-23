<!DOCTYPE html>
<html>
  <title>Blood Bank Management System</title>
    
  <link rel="stylesheet" href="../style/css/bootstrap.min.css">
  <script src="../style/js/jquery.min.js"></script>
  <script src="../style/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="../style/css/font-awesome.min.css">


<style type="text/css">
  
.content {
    padding: 30px 0;
}

/***
Pricing table
***/
.pricing {
  position: relative;
  margin-bottom: 15px;
  border: 3px solid #eee;
}

.pricing-active {
  border: 3px solid #36d7ac;
  margin-top: -10px;
  box-shadow: 7px 7px rgba(54, 215, 172, 0.2);
}

.pricing:hover {
  border: 3px solid #36d7ac;
}

.pricing:hover h4 {
  color: #36d7ac;
}

.pricing-head {
  text-align: center;
}

.pricing-head h3,
.pricing-head h4 {
  margin: 0;
  line-height: normal;
}

.pricing-head h3 span,
.pricing-head h4 span {
  display: block;
  margin-top: 5px;
  font-size: 14px;
  font-style: italic;
}

.pricing-head h3 {
  font-weight: 300;
  color: #fafafa;
  padding: 12px 0;
  font-size: 27px;
  background: #36d7ac;
  border-bottom: solid 1px #41b91c;
}

.pricing-head h4 {
  color: #bac39f;
  padding: 5px 0;
  font-size: 54px;
  font-weight: 300;
  background: #fbfef2;
  border-bottom: solid 1px #f5f9e7;
}

.pricing-head-active h4 {
  color: #36d7ac;
}

.pricing-head h4 i {
  top: -8px;
  font-size: 28px;
  font-style: normal;
  position: relative;
}

.pricing-head h4 span {
  top: -10px;
  font-size: 14px;
  font-style: normal;
  position: relative;
}

/*Pricing Content*/
.pricing-content li {
  color: #888;
  font-size: 12px;
  padding: 7px 15px;
  border-bottom: solid 1px #f5f9e7;
}

/*Pricing Footer*/
.pricing-footer {
  color: #777;
  font-size: 11px;
  line-height: 17px;
  text-align: center;
  padding: 0 20px 19px;
}

/*Priceing Active*/
.price-active,
.pricing:hover {
  z-index: 9;
}

.price-active h4 {
  color: #36d7ac;
}

.no-space-pricing .pricing:hover {
  transition: box-shadow 0.2s ease-in-out;
}

.no-space-pricing .price-active .pricing-head h4,
.no-space-pricing .pricing:hover .pricing-head h4 {
  color: #36d7ac;
  padding: 15px 0;
  font-size: 80px;
  transition: color 0.5s ease-in-out;
}

.yellow-crusta.btn {
  color: #FFFFFF;
  background-color: #f3c200;
}
.yellow-crusta.btn:hover,
.yellow-crusta.btn:focus,
.yellow-crusta.btn:active,
.yellow-crusta.btn.active {
    color: #FFFFFF;
    background-color: #cfa500;
}


</style>











</head>
<body>

<?php include ("conn.php"); ?>
<?php include "menu.php"; ?>

<div class="container">
  <div class="row">


<?php 

  $reg = '';
  if(isset($_GET['sucessfull'])){

    echo '<div class="alert alert-success alert-dismissible">
  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  Registration Successfull;
</div>';


  }


?>

<?php 

	$tot_donor = mysqli_query($conn,"SELECT * FROM `registered_donor` WHERE 1");
	$tot_donor_count = mysqli_num_rows($tot_donor);




?>






  </div>
</div>



<div class="container content">
  <div class="row">
    <!-- Pricing -->
    <div class="col-md-3">
      <div class="pricing hover-effect">
        <div class="pricing-head"><h3>Stock <span>Blood Stock Status</span></h3></div>
    
        <ul class="pricing-content list-unstyled">
          <li>
            <!-- <?php echo $useremail ?> -->
            Our Total Stock 
          </li>
          <li>
            Mirpur Blood Bank
          </li>
          <li>
            Others Blood bank
          </li>
          <li>
            Total 
          </li>
          <li>
            Blood need
          </li>
        </ul>
        <div class="pricing-footer">
          <p>
             Check the availability of bloodstock in hospitals nearby or get the list based on your search.
          </p>
          <a href="check_stock_status.php" class="btn yellow-crusta">
          Check Stock
          </a>
        </div>
      </div>
    </div>


    <div class="col-md-3">
      <div class="pricing hover-effect">
        <div class="pricing-head"><h3>Donor Search <span>Find Donor</span></h3></div>
    
        <ul class="pricing-content list-unstyled">
          <li>
            Total Registered Donor <span class="badge"><?php echo $tot_donor_count ?></span> 
          </li>
          <li>
            Available Donor <span class="badge"><?php echo '2' ?></span> 
          </li>
          <li>
            City Donor <span class="badge"><?php echo '2' ?></span>
          </li>
          <li>
            Ut non libero
          </li>
          <li>
            Consecte adiping elit
          </li>
        </ul>
        <div class="pricing-footer">
          <p>
             Donor can search donor by blood group and location. They can send SMS or Contact to others donor for blood donation
          </p>
          <a href="finddoner.php" class="btn yellow-crusta">
          Search Donors
          </a>
        </div>
      </div>
    </div>


    <div class="col-md-3">
      <div class="pricing hover-effect">
        <div class="pricing-head"><h3>Donor Registration <span>Blood Dolor Registration</span></h3></div>
    
        <ul class="pricing-content list-unstyled">
          <li>
            Donor Name
          </li>
          <li>
            Donor blood group
          </li>
          <li>
            Previous Donation Date
          </li>
          <li>
            Ut non libero
          </li>
          <li>
            Option for Donate
          </li>
        </ul>
        <div class="pricing-footer">
          <p>
             Register to be a blood donor, give blood and save lives.</br>Sign up as a Blood donor 
          </p>
          <a href="donor_registration.php" class="btn yellow-crusta">
          Registration
          </a>
        </div>
      </div>
    </div>


    <div class="col-md-3">
      <div class="pricing hover-effect">
        <div class="pricing-head"><h3>About Us <span>About & Contact Us</span></h3></div>
    
        <ul class="pricing-content list-unstyled">
          <li>
            Contact
          </li>
          <li>
            Email
          </li>
          <li>
             Phone
          </li>
          <li>
            Massege
          </li>
          <li>
            Location
          </li>
        </ul>
        <div class="pricing-footer">
          <p>
             Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut non libero magna psum olor .
          </p>
          <a href="contact.php" class="btn yellow-crusta">
          Send Email
          </a>
        </div>
      </div>
    </div>












   
    
    </div>
  
</div>

<br>
<br>


</body>
</html>