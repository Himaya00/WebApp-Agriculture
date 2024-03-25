<?php
include ('session.php');
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Manage Account</title>
		
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
	<body>
<div id="app">		
<?php include('include/sidebar.php');?>
<div class="main-content" >
<div class="wrap-content container" id="container">

<section id="page-title">
<div class="row">
<div class="col-sm-8">
<h1 class="mainTitle">Manage Yor Account</h1>
</div>
</section>

<div class="container-fluid container-fullw bg-white">
<div class="row">
<div class="col-md-12">
<h5 class="over-title margin-bottom-15">Welcome  <span class="text-bold"><?php echo $loggedin_session; ?></span></h5>

<table border="1" class="table table-bordered">
 <tr align="center">
<td colspan="4" style="font-size:20px;color:blue">
Your Details</td></tr>
 <table class="table table-hover" id="sample-table-1">
										<thead>
											<tr>
												<th>Full Name</th>
												<th>Address</th>
												<th>City</th>
												<th>District</th>
                                                <th>Gender</th>
												<th>Mobile</th>
                                                <th>Email</th>
												<th>Action</th>
												
											</tr>
										</thead>
										<tbody>

                                        <?php
            $sql="SELECT * FROM farmer where id=$loggedin_id";
            $result=mysqli_query($con,$sql);
            ?>
            <?php
            while($rows=mysqli_fetch_array($result)){
            ?>

   <tr>
												<td><?php echo $row['fullName'];?></td>
												<td><?php echo $row['address'];?></td>
												<td><?php echo $row['city'];?>
												<td><?php echo $row['district'];?>
                                                <td><?php echo $row['gender'];?>
												<td><?php echo $row['mobile'];?>
                                                <td><?php echo $row['email'];?>
												</td>
												
												<td >
												<div class="visible-md visible-lg hidden-sm hidden-xs">
							<a href="farm-edit.php" class="btn btn-transparent btn-xs" tooltip-placement="top" tooltip="Edit"><i class="fa fa-pencil"></i></a>
													
	<a href="manage-doctors.php?id=<?php echo $row['id']?>&del=delete" onClick="return confirm('Are you sure you want to delete yor account?')"class="btn btn-transparent btn-xs tooltips" tooltip-placement="top" tooltip="Remove"><i class="fa fa-times fa fa-white"></i></a>
												</div>
 
<?php }?>
</table>
                          
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
