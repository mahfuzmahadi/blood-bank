
<?php include ("conn.php"); ?>
<?php 

  $a = '';
  $b = '';
  $donor_array = '';
  $donor_data_fetch = '';


  if(isset($_POST['searchdonor'])){

    $a = $_POST['location'];
    $b = $_POST['bloodgroup'];

  }
  
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



<?php include "menu.php"; ?>



<div class="container">
  <div class="row">
  
  <form method="post" action="#">

    <div class="col-sm-4 form-group">
            <select class="form-control" name="location">
            <?php 
            $search_dis_location = mysqli_query($conn, "SELECT `localtion` FROM `registered_donor`");
            while ($districtfatch = mysqli_fetch_array($search_dis_location)) { ?>
                <option><?php echo $districtfatch['localtion'] ?></option>
            <?php } ?>
            </select>
    </div>


    <div class="col-sm-4 form-group">
      <select class="form-control" name="bloodgroup">
        <option>Select Blood Group</option>
        <option>A+</option>
        <option>A-</option>
        <option>AB+</option>
        <option>AB-</option>
        <option>O+</option>
        <option>O-</option>
      </select>
    </div>


    <div class="col-sm-4 form-group">

      <input type="submit" name="searchdonor" value="Search" class="btn btn-default btn-sm">
      
    </div>

  </form>

</div>
</div>
</div>


<?php 

    if(($a !='') && ($b !='')){
      $donor_array = mysqli_query($conn,"SELECT * FROM `registered_donor` WHERE `localtion` = '$a' && `bloodgroup` = '$b'");
      $countdonor = mysqli_num_rows($donor_array);
      
      if($countdonor > 0){

?>

<div class="container">
<div class="row">
<div class="col-sm-12">
    <div class="table table-responsive">
        <table class="table" id="bloodStockInstWise">
            <thead style="background-color: #33C7FF">
                <tr>
                    <th>Donor Name</th>
                    <th>Location/Address</th>
                    <th>Phone No</th>
                    <th>Last Donate</th>                  
                    <th>Details</th>                  
                </tr>
            </thead>
            <tbody>

              <?php 
                      

              while ($donor_data_fetch = mysqli_fetch_array($donor_array)) { ?>
               
            
              <tr>
                    <td><?php echo $donor_data_fetch['first_name'] ?></td>
                    <td><?php echo $donor_data_fetch['city'] ?></td>
                    <td><?php echo $donor_data_fetch['phone'] ?></td>
                    <td><?php echo $donor_data_fetch['previousdonationdata'] ?></td>
 
                    <td><a class="btn btn-default btn-sm" href="" data-toggle="modal" data-target="#modalLoginForm<?php echo $donor_data_fetch['id'] ?>">Details</a></td>
              </tr>



 <div class="modal fade" id="modalLoginForm<?php echo $donor_data_fetch['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
              

              
                Donor Name : <?php echo $donor_data_fetch['first_name'] ?> <br>
                District : <?php echo $donor_data_fetch['district'] ?><br>
                Location : <?php echo $donor_data_fetch['localtion'] ?><br>
                Phone : <?php echo $donor_data_fetch['phone'] ?><br>
              
                
              
            </div>
        </div>
    </div>
</div>






              <?php  } ?>
              
            </tbody>
        </table>
</div>
</div>
</div>
</div>


<?php  }else{ ?>

<div class="container">
  <div class="row">
    <div class="col-sm-12">

        <div class="alert alert-success alert-dismissible">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            Sorry Blood not available.
        </div>
        
    </div>
  </div>
</div>

<?php } }?>







</body>
</html>