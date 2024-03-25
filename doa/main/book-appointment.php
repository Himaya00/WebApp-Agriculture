<?php
include('session.php');

if(isset($_POST['submit']))
{
$qdistrict=$_POST['qdistrict'];
$qdivision=$_POST['qdivision'];
$qfname=$_POST['qfname'];
$qdesc=$_POST['qdesc'];
$appdate=$_POST['appdate'];
$time=$_POST['apptime'];
$foid=$_POST['foid'];
$query=mysqli_query($con,"insert into queries(district,division,fname,appointmentTime,postingDate,description,fieldoffid,farmid) values('$qdistrict','$qdivision','$qfname','$time','$appdate','$qdesc','$foid',$loggedin_id)");
	if($query)
	{
		echo "<script>alert('Your appointment successfully recorded');</script>";
	}

}
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Book Appointment</title>
	
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

<script>
	function get_area(str) {
		if(window.XMLHttpRequest){
			xmlhttp = new XMLHttpRequest();
		}else{
			xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
		}

		xmlhttp.onreadystatechange= function(){
			if (this.readyState==4 && this.status==200) {
				document.getElementById('div').innerHTML = this.responseText;
			}
		}
		
		xmlhttp.open("GET","../get.php?value="+str, true);
		xmlhttp.send();
	}
</script>

</head>

<?php $query=mysqli_query($con,"SELECT * FROM farmer where id='$loggedin_id'")or die(mysqli_error($con));
		$row=mysqli_fetch_array($query); 
?>

	<body>
		<div id="app">		
<?php include('include/sidebar.php');?>
			<div class="app-content">

				<div class="main-content" >
					<div class="wrap-content container" id="container">

						<section id="page-title">
							<div class="row">
								<div class="col-sm-8">
									<h1 class="mainTitle">Book Appointment</h1>
								</div>
						</section>

						<div class="container-fluid container-fullw bg-white">
							<div class="row">
								<div class="col-md-12">
									
									<div class="row margin-top-30">
										<div class="col-lg-8 col-md-12">
											<div class="panel panel-white">
												<div class="panel-heading">
													<h5 class="panel-title">Book Appointment</h5>
												</div>
												<div class="panel-body">
		
													<form role="form" name="book" method="post" >

														
					<div class="form-group">
															<label for="qfname">
																Full Name
															</label>
					<input type="text" name="qfname" class="form-control"  value="<?php echo $row['fullName']; ?>" required>
														</div>

					<div class="form-group">
															<label for="qdistrict">
																District
															</label>
					<input type="text" name="qdistrict" class="form-control"  value="<?php echo $row['district']; ?>" required>
														</div>

					<input type="hidden" name="foid" class="form-control"  value="<?php echo $row['fieldoffid']; ?>">


					<div class="form-group">
															<label for="qdesc">
																 Description
															</label>
                    <textarea type="text" name="qdesc" class="form-control" required></textarea>
														</div>
														
					<div class="form-group">
															<label for="AppointmentDate">
																Date
															</label>
					<input class="form-control datepicker" name="appdate"  required="required" data-date-format="yyyy-mm-dd">
	
														</div>
														
					<div class="form-group">
															<label for="Appointmenttime">
														
														Time
													
															</label>
					<input class="form-control" name="apptime" id="timepicker1" required="required">eg : 10:00 PM

														</div>														
														
														<button type="submit" name="submit" class="btn btn-o btn-primary">
															Submit
														</button>
													</form>
												</div>
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

			$('.datepicker').datepicker({
    format: 'yyyy-mm-dd',
    startDate: '-1d'
});
		</script>
		  <script type="text/javascript">
            $('#timepicker1').timepicker();
        </script>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js"></script>

	</body>
</html>
