<?php 

    session_start();

    include ("conn.php");

    $a = '';
    $b = '';
    $c = '';
    $d = '';
    $e = '';
    $f = '';
    $registration = '';
    $errormessage = '';

    if(isset($_POST['user_registration'])){
        $a = $_POST['name'];
        $b = $_POST['email'];
        $c = $_POST['distict'];
        $d = $_POST['city'];
        $e = $_POST['mobile'];
        $f = $_POST['password'];

        

        $registration  = mysqli_query($conn, "INSERT INTO `user`( `name`, `email`, `district`, `city`, `mobile`, `password`) VALUES ('$a','$b','$c','$d','$e','$f')");


    }

    
    if(isset($_POST['user_login'])){
        $a = $_POST['email'];
        $b = $_POST['password'];

        $checkuser  = mysqli_query($conn, "SELECT * FROM `user` WHERE `email` = '$a' && `password`= '$b'");

        $countuser = mysqli_num_rows($checkuser);

        if($countuser > 0){
            $_SESSION['email'] = $a;
            header("Location: homepage.php"); /* Redirect browser */
            exit();
        }else{
            $errormessage = "Sorry You Are Not Registered User ! Please Create User First.";
        }


    }







 ?>






<!DOCTYPE html>
<html>
<head>

	<title>Blood Bank Management System</title>
    
	<link rel="stylesheet" href="../style/css/bootstrap.min.css">
	<script src="../style/js/jquery.min.js"></script>
  	<script src="../style/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">





	<style type="text/css">
		body {
		    background-image:url("style/img/B1.jpg");
		    background-repeat: no-repeat;
		    background-size: 100% 100%;
		}
		html {
		    height: 100%
		}


		.center{
		    position:absolute;
		    display:block;
		    left:10%;
		    top:80%;
		    margin-top:-50px;
		    margin-left:-50px;
		    
		}



	</style>



</head>
<body>

	<div class="container-fluid">
	<div class="row">


			<div class="center">
			    <a class="btn btn-default" href="" data-toggle="modal" data-target="#modalRegisterForm"><span class="glyphicon glyphicon-user"></span>User Registration</a>
			    <a class="btn btn-default" href="" data-toggle="modal" data-target="#modalLoginForm"><span class="glyphicon glyphicon-user"></span> Login</a>
			</div>



	</div>
	</div>




 <div class="modal fade" id="modalLoginForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header text-center">
                <h4 class="modal-title w-100 font-weight-bold">Sign in</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
    
            <form method="post" action="#">

            <div class="modal-body mx-3">
                <div class="md-form mb-5">
                    <i class="fa fa-envelope prefix grey-text"></i>
                    <label data-error="wrong" data-success="right" for="defaultForm-email">Your email</label>
                    <input type="email" name="email" id="defaultForm-email" class="form-control validate input-sm">
                    
                </div>

                <div class="md-form mb-4">
                    <i class="fa fa-lock prefix grey-text"></i>
                    <label data-error="wrong" data-success="right" for="defaultForm-pass">Your password</label>
                    <input type="password" name="password" id="defaultForm-pass" class="form-control validate input-sm">
                    
                </div>

            </div>
            <div class="modal-footer d-flex justify-content-center">
                <button class="btn btn-danger input-sm" type="submit" name="user_login">Login</button>
            </div>

            </form>

        </div>
    </div>
</div>
<div class="modal fade" id="modalRegisterForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header text-center">
                <h4 class="modal-title w-100 font-weight-bold">User Registration</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form method="post" action="#">
                
            
            <div class="modal-body mx-3">
                <div class="md-form mb-5">
                    
                    <label data-error="wrong" data-success="right" for="orangeForm-name">Your name</label>
                    <input type="text" id="orangeForm-name" name="name" class="form-control input-sm">
                    
                </div>
                <div class="md-form mb-5">
                    
                     <label data-error="wrong" data-success="right" for="orangeForm-email">Your email</label>
                    <input type="email" id="orangeForm-email" name="email" class="form-control input-sm">
				</div>

 			<div class="md-form mb-5">
                    
                     <label data-error="wrong" data-success="right" for="orangeForm-email">District</label>
                    <input type="text" id="orangeForm-email" name="distict" class="form-control input-sm">
				</div>
				<div class="md-form mb-5">
                    
                     <label data-error="wrong" data-success="right" for="orangeForm-email">City</label>
                    <input type="text" id="orangeForm-email" name="city" class="form-control input-sm">
				</div> 

				
				<div class="md-form mb-4">
                    
                      <label data-error="wrong" data-success="right" for="orangeForm-pass">Mobile</label>
                    <input type="text" id="orangeForm-pass" name="mobile" class="form-control input-sm">
				</div>
				<div class="md-form mb-4">
                    
                      <label data-error="wrong" data-success="right" for="orangeForm-pass">Password</label>
                    <input type="password" id="orangeForm-pass" name="password" class="form-control input-sm">
				</div>

            </div>
            <div class="modal-footer d-flex justify-content-center">
                <button class="btn btn-danger input-sm" type="submit" name="user_registration">Sign up</button>
            </div>

            </form>
        </div>
    </div>
</div>




<div class="container">
<div class="row">

    <br/><br/><br/><br/>

    <?php if($registration){ ?>

          <div class="alert alert-success alert-dismissible">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            <strong>Success!</strong> Registration successfull.
          </div>
            

    <?php } ?>


    <?php if($errormessage){ ?>

          <div class="alert alert-success alert-dismissible">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            <?php echo $errormessage; ?>
          </div>
            

    <?php } ?>







</div>
</div>


</body>
</html>