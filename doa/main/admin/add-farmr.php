<?php
session_start();
error_reporting(0);
include('include/config.php');

if(isset($_POST['submit']))
{
$fname=$_POST['full_name'];
$address=$_POST['address'];
$city=$_POST['city'];
$gender=$_POST['gender'];
$email=$_POST['email'];
$mobile=$_POST['mobile'];
$usrname=$_POST['usrname'];
$password=$_POST['password'];
$foid=$_POST['foid'];
$disname=$_POST['disname'];
$query=mysqli_query($con,"insert into farmer(fullName,address,city,gender,email,username,password,district,fieldoffid,mobile) values('$fname','$address','$city','$gender','$email','$usrname','$password','$disname','$foid','$mobile')");
$ret=mysqli_query($con,"insert into users(name,division,district,contactno,email,username,password) values ('$fname','$city','$disname','$mobile','$email','$usrname','$password')");
{
	echo "<script>alert('Successfully Registered');</script>";
	echo "<script>window.location.href ='dashboard.php'</script>";
}
}
?>


<!DOCTYPE html>
<html lang="en">

	<head>
		<title>Admin | Farmer Registration</title>
		
		<link href="http://fonts.googleapis.com/css?family=Lato:300,400,400italic,600,700|Raleway:300,400,500,600,700|Crete+Round:400italic" rel="stylesheet" type="text/css" />
		<link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="vendor/fontawesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="vendor/themify-icons/themify-icons.min.css">
		<link href="vendor/animate.css/animate.min.css" rel="stylesheet" media="screen">
		<link href="vendor/perfect-scrollbar/perfect-scrollbar.min.css" rel="stylesheet" media="screen">
		<link href="vendor/switchery/switchery.min.css" rel="stylesheet" media="screen">
		<link rel="stylesheet" href="assets/css/styles.css">
		<link rel="stylesheet" href="assets/css/plugins.css">
		<link rel="stylesheet" href="assets/css/themes/theme-1.css" id="skin_color" />
		
		<script type="text/javascript">
function valid()
{
 if(document.registration.password.value!= document.registration.password_again.value)
{
alert("Password and Confirm Password Field do not match  !!");
document.registration.password_again.focus();
return false;
}
return true;
}
</script>


</head>

	<body class="login">
	<?php include('include/sidebar.php');?>
        <div class="app-content">
				
            <?php include('include/header.php');?>
		    <div class="main-content" >
					<div class="wrap-content container" id="container">

						<section id="page-title">
							<div class="row">
								<div class="col-sm-8">
									<h1 class="mainTitle">Admin | Add Farmer</h1>
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
													<h5 class="panel-title">Add Farmer</h5>
												</div>
												<div class="panel-body">
					<form name="form" name="adddoc" method="post" onSubmit="return valid();">
						<fieldset>

							<p>
								Enter personal details below:
							</p>
														<label>Full Name</label>
							<div class="form-group">
								<input type="text" class="form-control" name="full_name" placeholder="ex: M.G.Danushka" required>
							</div>
														<label>Address</label>
							<div class="form-group">
								<input type="text" class="form-control" name="address" placeholder="ex: 12/B, Rakwana road" required>
							</div>
														<label>City</label>
							<div class="form-group">
								<input type="text" class="form-control" name="city" placeholder="ex: Katugasitota" required>
							</div>
                                                        <label>Division</label>
							<div class="form-group">
								<select name="foid" id="offdivi" class="form-control" required>
									<option value="0">--Select Division--</option>
										<?php
											$sqll = mysqli_query($con, "SELECT foid,name From division");
											$row = mysqli_num_rows($sqll);
											while ($row = mysqli_fetch_array($sqll)){
											echo '<option value="'. $row['foid'] .'">'.$row['name'].'</option>' ;
											}
										?>
								</select>
							</div>
														<label>District</label>
                            <div class="form-group">
								<select name="disname" id="disname" class="form-control" required>
									<option value="0">--Select District--</option>
										<?php
											$sqly = mysqli_query($con, "SELECT name From district");
											$row1 = mysqli_num_rows($sqly);
											while ($row1 = mysqli_fetch_array($sqly)){
											echo '<option value="'. $row1['name'] .'">'.$row1['name'].'</option>' ;
											}
										?>
								</select>
							</div>

							<div class="form-group">
														<label class="block">
															Gender
														</label>
								<div class="clip-radio radio-primary">
									<input type="radio" id="rg-female" name="gender" value="female" >
									<label for="rg-female">
										Male
									</label>
									<input type="radio" id="rg-male" name="gender" value="male">
									<label for="rg-male">
										Female
									</label>
								</div>
							</div>
							<p>
								Enter account details below:
							</p>
														<label>Email</label>
							<div class="form-group">
								<span class="input-icon">
									<input type="email" class="form-control" name="email" id="email" onBlur="userAvailability()"  placeholder="ex: abc@gmail.com" required>
									<i class="fa fa-envelope"></i> </span>
									 <span id="user-availability-status1" style="font-size:12px;"></span>
							</div>
														<label>Mobile Number</label>
							<div class="form-group">
								<input type="text" class="form-control" name="mobile" placeholder="ex: 0771234567" required>
							</div>
														<label>Username</label>
							<div class="form-group">
								<span class="input-icon">
									<input type="username" class="form-control" name="usrname" id="usrname"  placeholder="Enter valid Username" required>
									<i class="fa fa-lock"></i> </span>
							</div>
														<label>Password</label>
							<div class="form-group">
								<span class="input-icon">
									<input type="password" class="form-control" id="password" name="password" placeholder="Enter Min 6 Digits Password" required>
									<i class="fa fa-lock"></i> </span>
							</div>
														<label>Confirm Password</label>
							<div class="form-group">
								<span class="input-icon">
									<input type="password" class="form-control"  id="password_again" name="password_again" placeholder="Password Again" required>
									<i class="fa fa-lock"></i> </span>
							</div>
							<div class="form-group">
								<div class="checkbox clip-check check-primary">
									<input type="checkbox" id="agree" value="agree" checked="true" readonly=" true">
									<label for="agree">
										I agree
									</label>
								</div>
							</div>
							<div class="form-actions">

								<button type="submit" class="btn btn-primary pull-right" id="submit" name="submit">
									Submit <i class="fa fa-arrow-circle-right"></i>
								</button>
							</div>
						</fieldset>
						<?php include 'include/footer.php'; ?>
					</form>

				</div>

			</div>

		</div>
		<script src="vendor/jquery/jquery.min.js"></script>
		<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
		<script src="vendor/modernizr/modernizr.js"></script>
		<script src="vendor/jquery-cookie/jquery.cookie.js"></script>
		<script src="vendor/perfect-scrollbar/perfect-scrollbar.min.js"></script>
		<script src="vendor/switchery/switchery.min.js"></script>
		<script src="vendor/jquery-validation/jquery.validate.min.js"></script>
		<script src="assets/js/main.js"></script>
		<script src="assets/js/login.js"></script>
		<script>
			jQuery(document).ready(function() {
				Main.init();
				Login.init();
			});
		</script>
		
	<script>
        function userAvailability() {
        $("#loaderIcon").show();
        jQuery.ajax({
        url: "check_availability.php",
        data:'email='+$("#email").val(),
        type: "POST",
        success:function(data){
        $("#user-availability-status1").html(data);
        $("#loaderIcon").hide();
        },
        error:function (){}
        });
        }
    </script>
    		
	</body>

</html>