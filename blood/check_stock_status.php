<!DOCTYPE html>
<html>
<head>
  <title>Blood Bank Management System</title>
    
  <link rel="stylesheet" href="style/css/bootstrap.min.css">
  <script src="style/js/jquery.min.js"></script>
  <script src="style/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="style/css/font-awesome.min.css">

</head>
<body>



<?php include "menu.php"; ?>
<?php include "conn.php"; ?>



<center><h3>Our Stock</h3></center>


<div class="container">
<div class="row">
<div class="col-sm-12">
    <div class="table table-responsive">
        <table class="table" id="bloodStockInstWise">
            <thead style="background-color: #33C7FF">
                <tr>
                    <th>Institution Name</th>
                    <th>A+</th>
                    <th>A+</th>
                    <th>A-</th>
                    <th>B+</th>
                    <th>B-</th>
                    <th>AB+</th>
                    <th>AB-</th>
                    <th>O+</th>
                    <th>O-</th>
                    <th>Updated on</th>
                    
                </tr>
            </thead>
            <tbody>
            	<tr>
            		<td>Mirpur Blood bank</td>
                    <td>23 Bag</td>
                    <td>29 Bag</td>
                    <td>53 Bag</td>
                    <td>73 Bag</td>
                    <td>45 Bag</td>
                    <td>34 Bag</td>
                    <td>12 Bag</td>
                    <td>14 Bag</td>
                    <td>23 Bag</td>
                    <td>23/07/18</td>
                    	
            	</tr>

</tbody>
</table>
</div>
</div>
</div>
</div>


<center><h3>Overall Blood Bank Stock Status</h3></center>


<div class="container">
<div class="row">
<div class="col-sm-12">
    <div class="table table-responsive">
        <table class="table" id="bloodStockInstWise">
            <thead style="background-color:#F7F3F4">
                <tr>
                    <th>Institution Name</th>
                    <th>A+</th>
                    <th>A-</th>
                    <th>B+</th>
                    <th>B-</th>
                    <th>AB+</th>
                    <th>AB-</th>
                    <th>O+</th>
                    <th>O-</th>
                    <th>Updated on</th>
                    <th>Contact</th>
                </tr>
            </thead>
            <tbody>



            <?php 

            $search_dis_location = '';
            $search_dis_location = mysqli_query($conn,"SELECT * FROM `other_blood_bank_status`");
            while ($districtfatch = mysqli_fetch_array($search_dis_location)) { ?>
                
            

            	<tr>
                    <td><?php echo $districtfatch['InstitutionName'] ?></td>
                    <td><?php echo $districtfatch['A_plus'] ?></td>
                    <td><?php echo $districtfatch['A_minus'] ?></td>
                    <td><?php echo $districtfatch['B_plus'] ?></td>
                    <td><?php echo $districtfatch['B_minus'] ?></td>
                    <td><?php echo $districtfatch['AB_plus'] ?></td>
                    <td><?php echo $districtfatch['AB_minus'] ?></td>
                    <td><?php echo $districtfatch['O_plus'] ?></td>
                    <td><?php echo $districtfatch['O_minus'] ?></td>
                    <td><?php echo $districtfatch['O_minus'] ?></td>
            		<td><?php echo $districtfatch['ins_phone'] ?></td>

                    	
            	</tr>

            


        <?php } ?>







            </tbody>
        </table>
    </div>
</div>
</div>



 <div class="modal fade" id="modalLoginForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
            	

            	<pre>
            		Mirpur Blood Bank
            		Mukttijodda Market
            		Mirpur-1
            		Dhaka -1216.
            		Phone : 01671234567
            	</pre>
            		
            	
            </div>
        </div>
    </div>
</div>



















</div>


</body>
</html>