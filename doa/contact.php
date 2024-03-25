<?php
	include 'header.php' ;
	include_once('main/include/config.php');
	if(isset($_POST['submit']))
	{
	$name=$_POST['fullname'];
	$email=$_POST['emailid'];
	$mobileno=$_POST['mobileno'];
	$dscrption=$_POST['description'];
	$division=$_POST['division'];
	$district=$_POST['district'];
	$query=mysqli_query($con,"insert into contactus(fullname,email,contactno,description,division,district) value('$name','$email','$mobileno','$dscrption','$division','$district')");
	echo "<script>alert('Your information succesfully submitted');</script>";
	echo "<script>window.location.href ='contact.php'</script>";

	}


?>

<html>
	<head>
		<link href="css/style.css" rel="stylesheet" type="text/css"  media="all" />
		<link href='http://fonts.googleapis.com/css?family=Ropa+Sans' rel='stylesheet' type='text/css'>
	</head>
	<body>

	<br>
		</div>
		    <div class="clear"> </div>
		   <div class="wrap">
		   	<div class="contact">
		   	<div class="section group">				
				<div class="col span_1_of_3">
					
				<div class="company_address">
				     	<h2>Department of Agriculture Address  :</h2>
						    	<p>P.O. Box 11, Gannoruwa rd,</p>
						   		<p>Peradeniya,</p>
						   		<p>Sri Lanka</p>
				   		<p>Phone:(+94) 081-2388011-12-13</p>
				   		<p>Fax:(+94) 081-2388234</p>
				 	 	<p>Email: <span>director.hordi@doa.gov.lk</span></p>
				   	
				   </div>
				</div>				
				<div class="col span_2_of_3">
				  <div class="contact-form">
				  	<h2>Contact Us</h2>
					    <form name="contactus" method="post">
					    	<div>
						    	<span><label>Full Name</label></span>
						    	<span><input type="text" name="fullname" placeholder="ex: L.K.Tharindu" required="true"></span>
						    </div>
						    <div>
						    	<span><label>Email</label></span>
						    	<span><input type="email" name="email" placeholder="ex: abc@gmail.com" required="ture"></span>
						    </div>
						    <div>
						     	<span><label>Mobile Number</label></span>
						    	<span><input type="text" name="mobile" placeholder="ex: 0771234567" required="true"></span>
						    </div>
							<div>
						     	<span><label>Division</label></span>
						    	<span><input type="text" name="division" placeholder="ex: Katugastota" required="true"></span>
						    </div>
							<div>
						     	<span><label>District</label></span>
						    	<span><input type="text" name="district" placeholder="ex: Kandy" required="true"></span>
						    </div>
						    <div>
						    	<span><label>Description</label></span>
						    	<span><textarea name="description" required="true"> </textarea></span>
						    </div>
						   <div>
						   		<span><input type="submit" name="submit" value="Submit"></span>
						  </div>
					    </form>
				    </div>
  				</div>				
			  </div>
			  	 <div class="clear"> </div>
			</div>
			<div class="clear"> </div>
		</div>
	    	<div class="clear"> </div>

			<?php include 'footer.php'; ?>

	</body>
</html>

