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
    $query=mysqli_query($con,"SELECT * FROM fieldoff where id='$loggedin_id'")or die(mysqli_error($con));
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
                    <input type="text" name="foname" class="form-control" value="<?php echo $row['name']; ?>" required>
														</div>

                                                        <div class="form-group">
															<label for="fodivision">
																Division
															</label>
                    <input type="text" name="fodivision" class="form-control" value="<?php echo $row['division']; ?>" required>
														</div>

                                                        <div class="form-group"> 
															<label for="fodistrict">
																 District
															</label>
                    <input type="text" name="fodistrict" class="form-control" value="<?php echo $row['district']; ?>" required>
														</div>

                                                        <div class="form-group">
															<label for="foposition">
																 Position
															</label>
                    <input type="text" name="foposition" class="form-control" value="<?php echo $row['position']; ?>" required>
														</div>

                                                        <div class="form-group">
															<label for="focontact">
																 Contact Number
															</label>
                    <input type="text" name="focontact" class="form-control" value="<?php echo $row['contactno']; ?>" required>
														</div>

                                                        <div class="form-group">
															<label for="foemail">
																 Email
															</label>
                    <input type="text" name="foemail" class="form-control" value="<?php echo $row['email']; ?>" required>
														</div>

                                                        <div class="form-group">
															<label for="fousername">
																 Username
															</label>
                    <input type="text" name="fousername" class="form-control" value="<?php echo $row['username']; ?>" required>
														</div>

                                                        <div class="form-group">
															<label for="fopassword">
																 Password
															</label>
                    <input type="text" name="fopassword" class="form-control" value="<?php echo $row['password']; ?>" required>
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
        $name = $_POST['foname'];
        $divi = $_POST['fodivision'];
        $dist = $_POST['fodistrict'];
        $posi = $_POST['foposition'];
        $contct = $_POST['focontact'];
        $email = $_POST['foemail'];
        $username = $_POST['fousername'];
        $password = $_POST['fopassword'];

        $query = "UPDATE fieldoff SET (name = '$name',
                      division = '$divi',  
                      district = '$dist', 
                      position = '$posi',
                      contactno = '$contct',  
                      email = $email,
                      username = $username,
                      password = $password,
                      WHERE id = '$loggedin_id')";
                    $result = mysqli_query($con, $query) or die(mysqli_error($con));
                    ?>
        <script type="text/javascript">
            alert("Update Successfull.");
            window.location = "dashboard.php";
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
