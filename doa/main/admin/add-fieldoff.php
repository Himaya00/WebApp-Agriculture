<?php
session_start();
error_reporting(0);
include('include/config.php');


if(isset($_POST['submit']))
{
$offname=$_POST['offname'];
$offdivision=$_POST['offdivision'];
$offdistrict=$_POST['offdistrict'];
$offposition=$_POST['offposition'];
$offcontact=$_POST['offcontact'];
$offusrname=$_POST['offusrname'];
$offemail=$_POST['offemail'];
$password=$_POST['npass'];
$distid=$_POST['distid'];
$sql=mysqli_query($con,"insert into fieldoff(name,division,distid,district,position,contactno,username,password,email) values('$offname','$offdivision','$distid','$offdistrict','$offposition','$offcontact','$offusrname','$password','$offemail')");

if($sql)
{
	$fieldoff=$con->insert_id;
	$qry=mysqli_query($con,"insert into division(distid,name,foid) values ('$distid','$offdivision','$fieldoff')");
	$ret=mysqli_query($con,"insert into users(name,division,district,contactno,email,username,password) values ('$offname','$offdivision','$offdistrict','$offcontact','$offemail','$offusrname','$password')");
	
	echo "<script>alert('Info added Successfully');</script>";
	echo "<script>window.location.href ='manage-fieldoff.php'</script>";
}
}

?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Admin | Add Field Officer</title>
		
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
<script type="text/javascript">
function valid()
{
 if(document.adddoc.npass.value!= document.adddoc.cfpass.value)
{
alert("Password and Confirm Password Field do not match  !!");
document.adddoc.cfpass.focus();
return false;
}
return true;
}
</script>

<script>
	function get_area(str) {
		if(window.XMLHttpRequest){
			xmlhttp = new XMLHttpRequest();
		}else{
			xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
		}

		xmlhttp.onreadystatechange= function(){
			if (this.readyState==4 && this.status==200) {
				document.getElementById('did').innerHTML = this.responseText;
			}
		}
		
		xmlhttp.open("GET","../../get.php?value="+str, true);
		xmlhttp.send();
	}
</script>
	</head>
	<body>
		<div id="app">		
<?php include('include/sidebar.php');?>
			<div class="app-content">
				
						<?php include('include/header.php');?>

				<div class="main-content" >
					<div class="wrap-content container" id="container">

						<section id="page-title">
							<div class="row">
								<div class="col-sm-8">
									<h1 class="mainTitle">Admin | Add Field Officer</h1>
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
													<h5 class="panel-title">Add Field Officer</h5>
												</div>
												<div class="panel-body">
									
													<form role="form" name="adddoc" method="post" onSubmit="return valid();">

					<div class="form-group">
															<label for="offdistrict">
																District
															</label>
							<select name="offdistrict" class="form-control" onchange="get_area(this.value)" required="true">
																<option>Select District</option>
																<option value="Ampara">Ampara</option>
																<option value="Anuradhapura">Anuradhapura</option>
																<option value="Badulla">Badulla</option>
																<option value="Batticaloa">Batticaloa</option>
																<option value="Colombo">Colombo</option>
																<option value="Galle">Galle</option>
																<option value="Gampaha">Gampaha</option>
																<option value="Hambantota">Hambantota</option>
																<option value="Jaffna">Jaffna</option>
																<option value="Kalutara">Kalutara</option>
																<option value="Kandy">Kandy</option>
																<option value="Kegalle">Kegalle</option>
																<option value="Kilinochchi">Kilinochchi</option>
																<option value="Kurunegala">Kurunegala</option>
																<option value="Mannar">Mannar</option>
																<option value="Matale">Matale</option>
																<option value="Matara">Matara</option>
																<option value="Monaragala">Monaragala</option>
																<option value="Mullaitivu">Mullaitivu</option>
																<option value="Nuwara Eliya">Nuwara Eliya</option>
																<option value="Polonnaruwa">Polonnaruwa</option>
																<option value="Puttalam">Puttalam</option>
																<option value="Ratnapura">Ratnapura</option>
																<option value="Trincomalee">Trincomalee</option>
																<option value="Vavuniya">Vavuniya</option>
										
							</select>
														</div>

					<div class="form-group">
															<label for="distid">
																District ID
															</label>
							<select name="distid" id="did" class="form-control">
																<option>District ID</option>	
							</select>
														</div>

					<div class="form-group">
															<label for="offdivision">
																Division
															</label>
					<input type="text" name="offdivision" class="form-control"  placeholder="ex: Katugastota" required="true">
														</div>

					<div class="form-group">
															<label for="offname">
																 Full Name
															</label>
					<input type="text" name="offname" class="form-control"  placeholder="ex: M.A.Sankalpa" required="true">
														</div>


					<div class="form-group">
															<label for="offposition">
																 Position/Rank
															</label>
					<input type="text" name="offposition" class="form-control"  placeholder="ex: FO-Grade 1" required="true"></input>
														</div>

					<div class="form-group">
															<label for="offcontact">
																 Contact Number
															</label>
					<input type="number" name="offcontact" class="form-control"  placeholder="ex: 0771234567" required="true">
														</div>

					<div class="form-group">
															<label for="offemail">
																 Email
															</label>
					<input type="email" id="offemail" name="offemail" class="form-control"  placeholder="ex: sarath@gmail.com" required="true" onBlur="checkemailAvailability()">
					<span id="email-availability-status"></span>
														</div>
				
					<div class="form-group">
															<label for="offusrname">
																 Username
															</label>	
					<input type="text" name="offusrname" class="form-control"  placeholder="Enter Valid Username" required="true">
														</div>


					<div class="form-group">
															<label for="exampleInputPassword1">
																 Password
															</label>
					<input type="password" name="npass" class="form-control"  placeholder="New Password (min 6 characters)" required="required">
														</div>
														
					<div class="form-group">
															<label for="exampleInputPassword2">
																Confirm Password
															</label>
									<input type="password" name="cfpass" class="form-control"  placeholder="Confirm Password" required="required">
														</div>
														
														<button type="submit" name="submit" id="submit" class="btn btn-o btn-primary">
															Submit
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
