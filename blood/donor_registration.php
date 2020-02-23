<?php 
include "conn.php";
include "menu.php";


$reg_for = '';
$showmodal = 0;

$finduserinfo = '';
  
if(isset($_POST['donor_reg']))
{

    $a =  $_POST['first_name'];
    $b =  $_POST['last_name'];
    $c =  $_POST['email'];
    $d =  $a." ".$b;

    $m =  $_POST['district'];
    $n =  $_POST['city'];


    $e =  $_POST['localtion'];
    $f =  $_POST['homeaddress'];

    $g =  $_POST['phone'];
    $h =  $_POST['homephone'];
    $i =  $_POST['bloodgroup'];
    $j =  $_POST['previousdonationdata'];
    $k =  $_POST['donateoptiontime'];
    $l =  $_POST['gender'];
    echo $m = date("Y:m:d");


    $reg_donor = mysqli_query($conn, "INSERT INTO `registered_donor`(`first_name`, `last_name`, `email`, `display_name`, `district`, `city`,`localtion`, `homeaddress`, `phone`, `homephone`, `bloodgroup`, `previousdonationdata`, `donateoptiontime`, `gender`) VALUES ('$a','$b','$c','$d','$m','$n','$e', '$f','$g','$h','$i','$j','$k','$l');");

    if($reg_donor){
      header("Location: homepage.php?sucessfull");
    }else{
      echo mysqli_error($conn);
    }



}

if(isset($_POST['registrationfor'])){

 $reg_for = $_POST['reg_for'];
 $showmodal = 1;

   if($reg_for == 1){
      $finduserinfo = mysqli_fetch_assoc(mysqli_query($conn,"SELECT * FROM `user` WHERE `email` = '$useremail'"));
     
   }else{
      $finduserinfo = mysqli_fetch_assoc(mysqli_query($conn,"SELECT * FROM `user` WHERE `email` = ''"));
   }

}





?>


<?php 

  $search_dis_location = mysqli_query($conn, "SELECT * FROM `district`");


?>



<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="../style/css/bootstrap.min.css">
  <script src="../style/js/jquery.min.js"></script>
  <script src="../style/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="../style/css/font-awesome.min.css">





</head>
<body>



<?php if($showmodal == 0){?>

  <script type="text/javascript">
    $(window).on('load',function(){
      $('#myModal').modal('show');
    });

  </script>



<div class="container">
<div class="row">
    <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">

          <div class="modal fade" id="myModal" role="dialog">
              <div class="modal-dialog">

                <!-- Modal content-->
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title"><i class="fa fa-exclamation-circle"></i>&nbsp; Donor Tye</h4>
                  </div>
                  <div class="modal-body">
                    <form method="post" action="#">
                      <label>Registration for :</label>
                      <label class="radio-inline"><input type="radio" name="reg_for" value="1">Myself</label>
                      <label class="radio-inline"><input type="radio" name="reg_for" value="2">Other User</label>
                      <br>
                      <input type="submit" name="registrationfor" value="Submit" class="btn btn-default btn-sm">
                    </form>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
                  </div>
                </div>

              </div>
          </div>


    </div>
  </div>
</div>

<?php } ?>





<div class="container">
<div class="row">
    <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
    <form method="post"  action="#" role="form">
      <h2>Donor Registration</h2>
      <div class="row">
        <div class="col-xs-12 col-sm-6 col-md-6">
          <label>Donor First Name</label>
          <div class="form-group">
           <input value="<?php  echo $finduserinfo['name']; ?>" type="text" name="first_name" id="first_name" class="form-control input-sm" placeholder="First Name" tabindex="1">
          </div>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-6">
          <label>Donor Last Name</label>
          <div class="form-group">
            <input type="text" name="last_name" id="last_name" class="form-control input-sm" placeholder="Last Name" tabindex="2">
          </div>
        </div>
      </div>

      <div class="form-group">
        <label>Email</label>
        <input value="<?php echo $finduserinfo['email']; ?>" type="email" name="email" id="email" class="form-control input-sm" placeholder="Email Address" tabindex="4">
      </div>


      <div class="row">
        <div class="col-xs-12 col-sm-6 col-md-6">
          <label>District</label>
          <div class="form-group">
            
            <select class="form-control" name="district">
              <option value="<?php echo $finduserinfo['district'] ?>" > <?php echo $finduserinfo['district'] ?> </option>
            <?php while ($districtfatch = mysqli_fetch_array($search_dis_location)) { ?>
                <option><?php echo $districtfatch['district'] ?></option>
            <?php } ?>
            </select>

          </div>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-6">
          <label>City</label>
          <div class="form-group">
            <input value="<?php echo $finduserinfo['city'] ?>" type="text" name="city" id="city" class="form-control input-sm" placeholder="City" tabindex="6">
          </div>
        </div>
      </div>



      <div class="form-group">
        <label>Location</label>
        <input type="text" name="localtion" id="localtion" class="form-control input-sm" placeholder="Location" tabindex="3">
      </div>

      <div class="form-group">
        <label>Home Address</label>
        <input type="text" name="homeaddress" id="homeaddress" class="form-control input-sm" placeholder="Home Address" tabindex="3">
      </div>


      <div class="row">
        <div class="col-xs-12 col-sm-6 col-md-6">
          <label>Phone</label>
          <div class="form-group">
            <input value="<?php echo $finduserinfo['mobile'] ?>" type="text" name="phone" id="phone" class="form-control input-sm" placeholder="Phone" tabindex="5">
          </div>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-6">
          <label>Home Phone</label>
          <div class="form-group">
            <input type="text" name="homephone" id="homephone" class="form-control input-sm" placeholder="Home Phone" tabindex="6">
          </div>
        </div>
      </div>




      <div class="row">
        <div class="col-xs-12 col-sm-6 col-md-6">
          <label>Blood Group</label>
          <select class="form-control" name="bloodgroup">
            <option>BLOOD GROUP & RH.TYPE</option>
            <option>A+</option>
            <option>A-</option>
            <option>AB+</option>
            <option>AB-</option>
            <option>O+</option>
            <option>O-</option>
          </select>

        </div>

        <div class="col-xs-12 col-sm-6 col-md-6">
          <div class="form-group">
            <label>Previous Donation Date</label>
            <input type="date" name="previousdonationdata" id="previousdonationdata" class="form-control input-sm">
          </div>
        </div>
      </div>




      <div class="row">
        <div class="col-xs-12 col-sm-6 col-md-6">
          <div class="form-group">

          <label>Option for Donate</label>
            <select class="form-control" name="donateoptiontime">
              <option>3 Month</option>
              <option>6 Month</option>
              <option>9 Month</option>
              <option>12 Month</option>

            </select>
          </div>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-6">

          <label>Gender</label>
            <select class="form-control" name="gender">
              <option>Male</option>
              <option>Female</option>
              <option>Other</option>
            </select>


        </div>
      </div>

      <div class="row">
        <button class="btn btn-danger input-sm" type="submit" name="donor_reg">Registration</button>
      </div>
    </form>
  </div>
</div>
</div>




</body>
</html>