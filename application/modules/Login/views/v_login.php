<!DOCTYPE html>
<html lang="en">
<head>
	<title>SISTEM INFORMASI INTERNASIONALISASI UNIVERSITAS SYIAH KUALA</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="<?php echo base_url()?>assets/images/oia-logo.jpeg"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/themes/Login_v12/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/themes/Login_v12/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/themes/Login_v12/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/themes/Login_v12/vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/themes/Login_v12/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/themes/Login_v12/vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/themes/Login_v12/css/util.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/themes/Login_v12/css/main.css">
<!--===============================================================================================-->
<style>
  .close{
    padding-left: 3.2em;
  }
  .wider{
	  width: 650px;
  }
  .alert{
	 margin-right: auto;
	 margin-left: auto;
  }
</style>
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100" style="background-image: url('images/img-01.jpg');">
			<div class="wrap-login100 p-b-30 wider">
				<form class="login100-form validate-form" method="post" action="<?php echo base_url('index.php/login/auth'); ?>">
					<div class="login100-form-avatar">
						<img src="<?php echo base_url()?>assets/images/oia-logo.jpeg" alt="AVATAR">
					</div>

					<span class="login100-form-title p-t-20 p-b-45">
						SISTEM INFORMASI INTERNASIONALISASI UNIVERSITAS SYIAH KUALA
          </span>
          
          <?php if ($this->session->flashdata('error') == TRUE) : ?>
                  <div class="alert alert-danger" style="margin-top:15px;">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    <strong><?php echo $this->session->flashdata('error')?></strong>
                  </div>
          <?php endif; ?>

          <?php if ($this->session->flashdata('sukses') == TRUE) : ?>
                  <div class="alert alert-success" style="margin-top:15px;">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    <strong><?php echo $this->session->flashdata('sukses')?></strong>
                  </div>
          <?php endif; ?>

					<div class="wrap-input100 validate-input m-b-10" data-validate = "Username is required">
						<input class="input100" type="email" name="email" placeholder="Email" id="email">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-user"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input m-b-10" data-validate = "Password is required">
						<input class="input100" type="password" name="password" id="pwd" placeholder="Password">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock"></i>
						</span>
					</div>

					<div class="container-login100-form-btn p-t-10">
						<button type="submit" class="login100-form-btn">
							Login
						</button>
					</div>

					<!-- <div class="text-center w-full p-t-25 p-b-230">
						<a href="#" class="txt1">
							Forgot Username / Password?
						</a>
					</div>

					<div class="text-center w-full">
						<a class="txt1" href="#">
							Create new account
							<i class="fa fa-long-arrow-right"></i>						
						</a>
					</div> -->
				</form>
			</div>
		</div>
	</div>
	
	

	
<!--===============================================================================================-->	
	<script src="<?php echo base_url(); ?>assets/themes/Login_v12/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url(); ?>assets/themes/Login_v12/vendor/bootstrap/js/popper.js"></script>
	<script src="<?php echo base_url(); ?>assets/themes/Login_v12/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url(); ?>assets/themes/Login_v12/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url(); ?>assets/themes/Login_v12/js/main.js"></script>

</body>
</html>