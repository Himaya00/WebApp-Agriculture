<?php
include ('session.php');
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Edit Profile</title>
		
		<link href="http://fonts.googleapis.com/css?family=Lato:300,400,400italic,600,700|Raleway:300,400,500,600,700|Crete+Round:400italic" rel="stylesheet" type="text/css" />
		<link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="vendor/fontawesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="vendor/themify-icons/themify-icons.min.css">
		<link href="vendor/animate.css/animate.min.css" rel="stylesheet" media="screen">
		<link href="vendor/perfect-scrollbar/perfect-scrollbar.min.css" rel="stylesheet" media="screen">
		<link href="vendor/switchery/switchery.min.css" rel="stylesheet" media="screen">
		<link href="vendor/bootstrap-touchspin/jquery.bootstrap-touchspin.min.css" rel="stylesheet" media="screen">
		<link href="vendor/select2/select2.min.css" rel="stylesheet" media="screen">
		<link href="vendor/bootstrap-datepicker/bootstrap-datepicker3.standalone.min.css" rel="stylesheet" media="screen">
		<link href="vendor/bootstrap-timepicker/bootstrap-timepicker.min.css" rel="stylesheet" media="screen">
		<link rel="stylesheet" href="assets/css/styles.css">
		<link rel="stylesheet" href="assets/css/plugins.css">
		<link rel="stylesheet" href="assets/css/themes/theme-1.css" id="skin_color" />
	</head>

<?php
    $query=mysqli_query($con,"SELECT * FROM farmer where id='$loggedin_id'")or die(mysqli_error($con));
    $row=mysqli_fetch_array($query);
?>

	<body>
		<div id="app">	
			<?php include('include/sidebar.php');?>	
				<div class="main-content" >
					<div class="wrap-content container" id="container">

						<section id="page-title">
							<div class="row">
								<div class="col-sm-8">
									<h1 class="mainTitle">Edit Profile</h1>
								</div>
							</div>
						</section>

						<div class="container-fluid container-fullw bg-white">
							<div class="row">
								<div class="col-md-12">
									
									<div class="row margin-top-30">
										<div class="col-lg-8 col-md-12">
											<div class="panel panel-white">
												<div class="panel-heading">
													<h5 class="panel-title">Please Fill-out All Fields</h5>
												</div>
												<div class="panel-body">
									
													<form role="form" name="adddoc" method="post" onSubmit="return valid();">

		                                                <div class="form-group">
															<label for="name">
                                                                Fullname
															</label>
                    <input type="text" name="fname" class="form-control" value="<?php echo $row['fullName']; ?>" required>
														</div>

                                                        <div class="form-group">
															<label for="address">
																Address
															</label>
                    <input type="text" name="faddress" class="form-control" value="<?php echo $row['address']; ?>" required>
														</div>

                                                        <div class="form-group"> 
															<label for="city">
																 City
															</label>
                    <input type="text" name="fcity" class="form-control" value="<?php echo $row['city']; ?>" required>
														</div>

														<div class="form-group"> 
															<label for="dist">
																 District
															</label>
                    <input type="text" name="fdist" class="form-control" value="<?php echo $row['district']; ?>" required>
														</div>

                                                        <div class="form-group">
															<label for="gender">
																 Gender
															</label>
                    <input type="text" name="fgender" class="form-control" value="<?php echo $row['gender']; ?>" required>
														</div>

                                                        <div class="form-group">
															<label for="email">
																 Email
															</label>
                    <input type="text" name="femail" class="form-control" value="<?php echo $row['email']; ?>" required>
														</div>

														<div class="form-group">
															<label for="fmobile">
																 Mobile Number
															</label>
                    <input type="text" name="fmobile" class="form-control" value="<?php echo $row['mobile']; ?>" required>
														</div>

                                                        <div class="form-group">
															<label for="username">
																 Username
															</label>
                    <input type="text" name="fusername" class="form-control" value="<?php echo $row['username']; ?>" required>
														</div>

                                                        <div class="form-group">
															<label for="password">
																 Password
															</label>
                    <input type="text" name="fpassword" class="form-control" value="<?php echo $row['password']; ?>" required>
														</div>
								
														<button type="submit" name="submit" id="submit" class="btn btn-o btn-primary">
															Update
														</button>
													</form>
												</div>
											</div>
										</div>
											
											</div>
										</div>
									<div class="col-lg-12 col-md-12">
											<div class="panel panel-white">
												
												
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>	
					</div>
				</div>
			</div>

    <?php
      if(isset($_POST['submit'])){
        $name = $_POST['fname'];
        $address = $_POST['faddress'];
        $city = $_POST['fcity'];
		$dist = $_POST['fdist'];
        $gender = $_POST['fgender'];
        $email = $_POST['femail'];
		$mobile = $_POST['fmobile'];
        $username = $_POST['fusername'];
        $password = $_POST['fpassword'];

        $query = "UPDATE farmer SET fullName = '$name',
                      address = '$address',  
                      city = '$city', 
					  district = '$dist',
                      gender = '$gender', 
                      email = $email,
                      username = $username,
                      password = $password,
					  mobile = $mobile,
                      WHERE id = '$loggedin_id'";
                    $result = mysqli_query($con, $query) or die(mysqli_error($con));
                    ?>
        <script type="text/javascript">
            alert("Update Successfull.");
            window.location = "farm-manage.php";
        </script>
        <?php
             }               
    ?>  

	<?php include('include/footer.php');?>


	
			

		</div>

		<script src="vendor/jquery/jquery.min.js"></script>
		<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
		<script src="vendor/modernizr/modernizr.js"></script>
		<script src="vendor/jquery-cookie/jquery.cookie.js"></script>
		<script src="vendor/perfect-scrollbar/perfect-scrollbar.min.js"></script>
		<script src="vendor/switchery/switchery.min.js"></script>


		<script src="vendor/maskedinput/jquery.maskedinput.min.js"></script>
		<script src="vendor/bootstrap-touchspin/jquery.bootstrap-touchspin.min.js"></script>
		<script src="vendor/autosize/autosize.min.js"></script>
		<script src="vendor/selectFx/classie.js"></script>
		<script src="vendor/selectFx/selectFx.js"></script>
		<script src="vendor/select2/select2.min.js"></script>
		<script src="vendor/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
		<script src="vendor/bootstrap-timepicker/bootstrap-timepicker.min.js"></script>


		<script src="assets/js/main.js"></script>

		<script src="assets/js/form-elements.js"></script>
		<script>
			jQuery(document).ready(function() {
				Main.init();
				FormElements.init();
			});
		</script>

	</body>
</html>
