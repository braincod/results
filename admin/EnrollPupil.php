<?php
 
 require('dbconfig/connec.php');

 function getNewID(){
	/**
	* @author Paul and Kasolo
	* @since 29/02/2020
	*  This is a simple method to update the id automatically passed on the previous ID.  
	*  The function gets the total count of students and adds a one to it then adds the rest of the known parameters
	*  <code>echo $newId; </code>
	*/

	require 'dbconfig/connec.php';

	//Count all the records from the table, in our example tblpupils
	

	$sql = "SELECT COUNT(*) as total FROM tblpupil";

	$runQuery = mysqli_query($con, $sql);

	//Create a variable to store the newId 
	$newId = '';

	if (mysqli_num_rows($runQuery) > 0) {
		# code...
		while ($rows = mysqli_fetch_assoc($runQuery)) {
			# code...
			//Get the count of variables
			$getTotalCount = $rows['total'];
			//Add a one to the last know
			$num = $getTotalCount + 1;
			if ($getTotalCount < 10) {
				# code...
				$newId = "ID0".$num;
			}else if ($getTotalCount < 100 && $getTotalCount >=10) {
				# code...
				$newId = "ID".$num;
			}
			

		}
	}else {
		$newId = "ID01";
	}

	return $newId;
}
          
if(isset($_POST['submit'])){

    // $pupilid = stripslashes($_POST['pupilid']);
    //Function call
    $pupilid = getNewID();
    $fname = stripslashes($_POST['fname']);
    $fname = mysqli_real_escape_string($con,$fname);
    $lname = stripslashes($_POST['lname']);
    $lname = mysqli_real_escape_string($con,$lname);
    $gender = stripslashes($_POST['gender']);
    $gender = mysqli_real_escape_string($con,$gender);
    $dob = stripslashes($_POST['dob']);
    $dob = mysqli_real_escape_string($con,$dob);
    $address = stripslashes($_POST['address']);
    $address = mysqli_real_escape_string($con,$address);
    $contact= stripslashes($_POST['contact']);
    $contact = mysqli_real_escape_string($con,$contact);
    $classid= stripslashes($_POST['classid']);
    $classid= mysqli_real_escape_string($con,$classid);
    $grade = stripslashes($_POST['grade']);
    $grade = mysqli_real_escape_string($con,$grade);
    $status=1;

   
        $query = "INSERT into `tblpupil` (pupilid, fname, lname, Gender,DOB,address,contact,Classid,Grade,status)
	VALUES ('$pupilid', '$fname','$lname', '$gender', '$dob','$address','$contact','$classid','$grade',$status)";
	        $result = mysqli_query($con,$query);
	 if($result){
	            echo "<div class='form'>
	<h3>pupil registered successfully.</h3>
	<br/>Click here to <a href='viewpupil.php'>view here</a></div>";
  	}
}else{
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>srms</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Unicat project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="styles/contact.css">
<link rel="stylesheet" type="text/css" href="styles/contact_responsive.css">
</head>
<body>

<div class="super_container">

	<!-- Header -->

	<header class="header">
			
		<!-- Top Bar -->
		<div class="top_bar">
			<div class="top_bar_container">
				<div class="container">
					<div class="row">
						<div class="col">
							<div class="top_bar_content d-flex flex-row align-items-center justify-content-start">
								<ul class="top_bar_contact_list">
									<li><div class="question">Pupil Enrollment</div></li>
									<li>
										<i class="fa fa-phone" aria-hidden="true"></i>
										<div></div>
									</li>
									<li>
										<i class="fa fa-envelope-o" aria-hidden="true"></i>
										<div></div>
									</li>
								</ul>
								<div class="top_bar_login ml-auto">
									
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>				
		</div>

		<!-- Header Content -->
		<div class="header_container">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="header_content d-flex flex-row align-items-center justify-content-start">
							<div class="logo_container">
								<a href="#">
									<div class="logo_text">sr<span>ms</span></div>
								</a>
							</div>
							<nav class="main_nav_contaner ml-auto">
								<ul class="main_nav">
									
								</ul>
								

								<!-- Hamburger -->

								
								<div class="hamburger menu_mm">
									<i class="fa fa-bars menu_mm" aria-hidden="true"></i>
								</div>
							</nav>

						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Header Search Panel -->
		<div class="header_search_container">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="header_search_content d-flex flex-row align-items-center justify-content-end">
							
						</div>
					</div>
				</div>
			</div>			
		</div>			
	</header>

	<!-- Menu -->

	<div class="menu d-flex flex-column align-items-end justify-content-start text-right menu_mm trans_400">
		<div class="menu_close_container"><div class="menu_close"><div></div><div></div></div></div>
		<div class="search">
			<form action="#" class="header_search_form menu_mm">
				<input type="search" class="search_input menu_mm" placeholder="Search" required="required">
				<button class="header_search_button d-flex flex-column align-items-center justify-content-center menu_mm">
					<i class="fa fa-search menu_mm" aria-hidden="true"></i>
				</button>
			</form>
		</div>
		<nav class="menu_nav">
			
		</nav>
	</div>
	
	<!-- Home -->

	<div class="home">
		<div class="breadcrumbs_container">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="breadcrumbs">
							<ul>
								<li><a href="index.php">Home</a></li>
								<li>login</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>			
	</div>

	<!-- Contact -->
	<div class="contact_info_container">
		<div class="container">
			<div class="row">
				<h2> Pupil Enrollement</h2>

<p>admins only </p>
				<!-- Contact Form -->
				<form action="#"  METHOD = "POST" class="comment_form" style="margin:100px;">
					
				</form>
			</div>
			<?
			
	if(isset($_GET['register_new_student'])){
							require_once("staff_dashboard_processor.php");
							
									foreach($error as $msg){
										echo "<h4 class='text-danger'>{$msg}</h4>";
									}
								}
									
								echo"
								<div class='panel panel-primary'>
									<div class='panel-heading'>
										<h3 class='text-center'>Register New new pupil</h3>
									</div>
									<div class='panel-body'>
										<form method='POST' enctype='multipart/form-data' action='staff_dashboard.php?register_new_student'>
											<p class='text-warning noprint'><b><u>Please Note that Registration is Unique to a particular Session, Make Sure that your Current Session has been Declared to avoid clashing of Students Registration Number. To Declare Current Session, Click on the Administratives Tab !!!</u></b></p>
											<legend>Pupil Data</legend>
											<div class='input-group'>
												<span class='input-group-addon' id='basic-addon2'>Gender:</span>
												<select class='form-control' name='reg_student_gender'>
													<option selected >"; echo $select; echo "</option>
													<option value='male'>Male</option>
													<option value='female'>Female</option>
												</select>
											</div>
											<br />
											<div class='input-group'>
												<span class='input-group-addon' id='basic-addon2'>First Name:</span>
												<input type='text' name='reg_student_firstname' required class='form-control' placeholder='Enter first name (surname)' aria-describedby='basic-addon2'>
											</div>
											<br />
											<div class='input-group'>
												<span class='input-group-addon' id='basic-addon2'>Last Name:</span>
												<input type='text' name='reg_student_lastname' required class='form-control' placeholder='Enter last name' aria-describedby='basic-addon2'>
											</div>
											<br/>
											<div class='input-group'>
												<span class='input-group-addon' id='basic-addon2'>Other Name:</span>
												<input type='text' name='reg_student_othername' class='form-control' placeholder='Enter other name (optional)' aria-describedby='basic-addon2'>
											</div>
											<br/>
											<div class='row'>
												<div class='col-md-4 col-sm-4 col-xs-12'>
													<br />
													<div class='input-group'>
														<span class='input-group-addon' id='basic-addon2'>D O B:</span>
														<select class='form-control' name='reg_student_dob' style='width: 100%; float: left;'>
															<option selected>"; echo $select; echo "</option>";
															for($dob = 1; $dob <= 31; $dob++){
																echo "<option>{$dob}</option>";
															}
												
															echo"
														</select>
													</div>
												</div>
												<div class='col-md-4 col-sm-4 col-xs-12'>
													<br />
													<div class='input-group'>
														<span class='input-group-addon' id='basic-addon2'>MONTH:</span>
														<select class='form-control' name='reg_student_mob' style='width: 100%; float: left;'>
															<option selected>"; echo $select;  echo "</option>";
											
																$month_array = array("January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December");
													
																foreach($month_array as $month){
																	echo "<option>{$month}</option><br>";
																}
																echo"
														</select>
													</div>
												</div>
												<div class='col-md-4 col-sm-4 col-xs-12'>
												<br />
												<div class='input-group'>
													<span class='input-group-addon' id='basic-addon2'>YEAR:</span>
													<select class='form-control' name='reg_student_yob' style='width: 100%; float: left;'>
														<option selected>"; echo $select; echo"</option>";
											
															for($year = 2016; $year >= 1960; $year--){
															echo"
														<option>{$year}</option>";
															}
											
														echo"
													</select>
												</div>
												</div>
											</div>
										<br />
										<legend>Contact</legend>
											<div class='input-group'>
												<span class='input-group-addon' id='basic-addon2'>Contact Phone:</span>
												<input type='phone' name='reg_student_phone' required class='form-control' placeholder='Enter nearest phone number to you' aria-describedby='basic-addon2'>
											</div>
											<br />
											<div class='input-group'>
												<span class='input-group-addon' id='basic-addon2'>Home Address:</span>
												<textarea rows='3' name='reg_student_address' required class='form-control' placeholder='...' aria-describedby='basic-addon2'></textarea>
											</div>
											<br/>
									
										<legend>Place Of Origin</legend>
										<div class='input-group'>
											<span class='input-group-addon' id='basic-addon2'>province:</span>
											<select class='form-control' name='reg_student_province'>
												<option selected >"; echo $select; echo "</option>";
												
												$province_array = array("northern","central","eastern","western","southern","north-west","muchinga","luapula","copperbelt","lusaka");
											
												foreach($province_array as $province){
													echo "<option>{$province}</option><br>";
												}
								
												echo"
											</select>
										</div>
										<br />
										<div class='input-group'>
											<span class='input-group-addon' id='basic-addon2'>Nationality:</span>
											<select class='form-control' name='reg_student_nationality'>
												<option selected >"; echo $select; echo "</option>
												<option>zambian</option>
												<option>Non-zambian</option>
											</select>
										</div>
										<br />
										<legend>Sponsor</legend>
										<div class='input-group'>
											<span class='input-group-addon' id='basic-addon2'>Name:</span>
											<input type='text' name='reg_sponsor_name' required class='form-control' placeholder='Enter sponsors name' aria-describedby='basic-addon2'>
										</div>
										<br />
										<div class='input-group'>
											<span class='input-group-addon' id='basic-addon2'>Phone:</span>
											<input type='phone' name='reg_sponsor_phone' required class='form-control' placeholder='Enter sponsors phone number' aria-describedby='basic-addon2'>
										</div>
										<br />
										<div class='input-group'>
											<span class='input-group-addon' id='basic-addon2'>Relationship:</span>
											<select class='form-control' name='reg_sponsor_relationship'>
												<option selected >";  echo $select; echo "</option>
												<option>Self</option>
												<option>Parent</option>
												<option>Sibling</option>
												<option>Guardian</option>
												<option>Others</option>
											</select>
										</div>
										<br />
								
									<legend>Academics</legend>
									<div class='input-group'>
										<span class='input-group-addon' id='basic-addon2'>Targeted Class:</span>
										<select class='form-control' name='reg_student_tc'>
											<option selected >{$select}</option>";
											$query = " SELECT * FROM `classes` ";
											$run_query = mysqli_query($con, $query);
											if(mysqli_num_rows($run_query) > 0){
												while($result = mysqli_fetch_assoc($run_query)){
													$target_classes = $result['classes'];
													echo"
														<option>{$target_classes}</option>
													";
												}
											}
											
											echo"
										</select>
									</div>
									
									<legend>image</legend>
									<div class='input-group'>
										<span class='input-group-addon' id='basic-addon2'>idimage:</span>
										<input type='file' name='file' required class='form-control' aria-describedby='basic-addon2'>
									</div>
									<br />
									
									<div class='text-center'>
										<input type='submit' name='student_reg_btn' value='REGISTER NEW STUDENT' class='btn btn-primary' />
									</div>
								</form>
								<button type='button' class='btn btn-default' onclick='window.print()' value='print a div!'><span class='glyphicon glyphicon-print'></span> Print</button>
							</div>
						</div>";
					}
					
										?>
		
		<!-- Contact Map -->
		

			<!-- Google Map -->
			
			<div class="map">
				
				</div>
			</div>

		</div>

		<!-- Contact Info -->

		
		


					<!-- Contact Info -->
					<div class="col-lg-6">
						<div class="contact_info">
							
				</div>
			</div>
		</div>
	</div>

	<!-- Newsletter -->

	<div class="newsletter">
		<div class="newsletter_background" style="background-image:url(images/newsletter_background.jpg)"></div>
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="newsletter_container d-flex flex-lg-row flex-column align-items-center justify-content-start">

						<!-- Newsletter Content -->
						<div class="newsletter_content text-lg-left text-center">
							
						</div>

						<!-- Newsletter Form -->
						<div class="newsletter_form_container ml-lg-auto">
							
						</div>

					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Footer -->

	<footer class="footer">
		<div class="footer_background" style="background-image:url(images/footer_background.png)"></div>
		<div class="container">
			<div class="row footer_row">
				<div class="col">
					<div class="footer_content">
						<div class="row">

							<div class="col-lg-3 footer_col">
					
								<!-- Footer About -->
								<div class="footer_section footer_about">
									<div class="footer_logo_container">
										<a href="#">
											<div class="footer_logo_text">sr<span>ms</span></div>
										</a>
									</div>
									<div class="footer_about_text">
										<p>Better Performance , Better performance .</p>
									</div>
									
								</div>
								
							</div>

							<div class="col-lg-3 footer_col">
					
								<!-- Footer Contact -->
								<div class="footer_section footer_contact">
									<div class="footer_title"></div>
									
								</div>
								
							</div>

							<div class="col-lg-3 footer_col">
					
								<!-- Footer links -->
								<div class="footer_section footer_links">
									<div class="footer_title"></div>
								
									
								
								</div>
								
							</div>

							<div class="col-lg-3 footer_col clearfix">
					
								<!-- Footer links -->
								<div class="footer_section footer_mobile">
								
									<div class="footer_mobile_content">
										
									</div>
								</div>
								
							</div>

						</div>
					</div>
				</div>
			</div>

			<div class="row copyright_row">
				<div class="col">
					<div class="copyright d-flex flex-lg-row flex-column align-items-center justify-content-start">
						<div class="cr_text"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></div>
						<div class="ml-lg-auto cr_links">
							<ul class="cr_list">
								<li><a href="#">Copyright notification</a></li>
								<li><a href="#">Terms of Use</a></li>
								<li><a href="#">Privacy Policy</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</footer>
</div>

<script src="js/jquery-3.2.1.min.js"></script>
<script src="styles/bootstrap4/popper.js"></script>
<script src="styles/bootstrap4/bootstrap.min.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="plugins/parallax-js-master/parallax.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyCIwF204lFZg1y4kPSIhKaHEXMLYxxuMhA"></script>
<script src="plugins/marker_with_label/marker_with_label.js"></script>
<script src="js/contact.js"></script>

</body>
</html>
