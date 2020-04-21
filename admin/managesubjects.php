<?php
require('dbconfig/connec.php');
?>





<!DOCTYPE html>
<html lang="en">
<head>
<title>loginadmin</title>
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
									<li><div class="question">strictly admins view only </div></li>
									<li>
										<i class="fa fa-phone" aria-hidden="true"></i>
										<div>+260-1234-88888</div>
									</li>
									<li>
										<i class="fa fa-envelope-o" aria-hidden="true"></i>
										<div>info.srms@gmail.com</div>
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
								<li><a href="index.html">Home</a></li>
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
				<h2> Register Users</h2>

<p>admins only </p>
				<!-- Contact Form -->
				<li role="presentation"><a href="managesubjects.php?manage_subjects"><span class='glyphicon glyphicon-blackboard'></span> Manage Subjects</a></li>
					<?
					if(isset($_GET['manage_subjects'])){
						/////////////////// POST ACTION TO SPECIFY SUBJECTS OFFERED BY JUNIOR (JSS) CLASSES //////////////////
						if(isset($_POST['specify_junior_subjects_btn'])){
							$specify_junior_subjects = inject_checker($connection, $_POST['specify_junior_subjects']);
							if($specify_junior_subjects == $select){
								echo "<p class='text-danger'><b><span class='glyphicon glyphicon-remove'></span>Please Select Subject to Specify</b></p>";
							}else{
								$query = " SELECT * FROM `jss` WHERE `jss_subjects` = '{$specify_junior_subjects}' ";
								$run_query = mysqli_query($connection, $query);
								if(mysqli_num_rows($run_query) > 0){
									echo "<p class='text-danger'><b><b><span class='glyphicon glyphicon-remove'></span> Sorry {$specify_junior_subjects} has Already been specified for Junior Classes</b></p>";
								}else{
									$query = " INSERT INTO `jss`(`jss_subjects`, `upload_date`) VALUES('$specify_junior_subjects', '$date') ";
									$run_query = mysqli_query($connection, $query);
									
									if($run_query == true){
										echo "<p class='text-success'><b><span class='glyphicon glyphicon-ok'></span> Specification of {$specify_junior_subjects} for Junior Classes Successful</b></p>";
									}else{
										echo "<p class='text-success'><b><span class='glyphicon glyphicon-remove'></span>Specification Failed</b></p>";
									}
								}
							}
						}
						
						/////////////////// POST ACTION TO SPECIFY SUBJECTS OFFERED BY SENIOR (SSS) CLASSES //////////////////
						if(isset($_POST['specify_senior_subjects_btn'])){
							$specify_senior_subjects = inject_checker($connection, $_POST['specify_senior_subjects']);
							if($specify_senior_subjects == $select){
								echo "<p class='text-danger'><b><span class='glyphicon glyphicon-remove'></span>Please Select Subject to Specify</b></p>";
							}else{
								$query = " SELECT * FROM `sss` WHERE `sss_subjects` = '{$specify_senior_subjects}' ";
								$run_query = mysqli_query($connection, $query);
								if(mysqli_num_rows($run_query) > 0){
									echo "<p class='text-danger'><b><span class='glyphicon glyphicon-remove'></span>Sorry {$specify_senior_subjects} has Already been specified for Senior Classes</b></p>";
								}else{
									$query = " INSERT INTO `sss`(`sss_subjects`, `upload_date`) VALUES('$specify_senior_subjects', '$date') ";
									$run_query = mysqli_query($connection, $query);
									
									if($run_query == true){
										echo "<p class='text-success'><b><span class='glyphicon glyphicon-ok'></span> Specification of {$specify_senior_subjects} for Senior Classes Successful</b></p>";
									}else{
										echo "<p class='text-success'><b><span class='glyphicon glyphicon-remove'></span>Specification Failed</b></p>";
									}
								}
							}
						}
						
						//////////////POST ACTION TO DECLARE NUMBER OF SUBJECTS OFFERED BY JSS CLASS ////////////////
						if(isset($_POST['number_of_junior_subjects_btn'])){
							$number_of_junior_subjects = $_POST['number_of_junior_subjects'];
							
							if($number_of_junior_subjects == $select){
								echo "<p class='text-danger'>Please Select Number of Subjects<b></b></p>";
							}else{
								$query = " SELECT * FROM `jss_subject_number` ";
								$run_query = mysqli_query($connection, $query);
								
								if(mysqli_num_rows($run_query) == 1){
									$query = " UPDATE `jss_subject_number` SET `number_of_subject` = '{$number_of_junior_subjects}' ";
									$run_query = mysqli_query($connection, $query);
									
									if($run_query == true){
										echo "<p class='text-success'><b>Number of Subjects Offered by JSS class Updated Successfully</b></p>";
									}else{
										echo "<p class='text-danger'><b>Number of Subjects Update Failed</b></p>";
									}
								}else{
									$query = " INSERT INTO `jss_subject_number`(`number_of_subject`, `declared_date`) VALUES('$number_of_junior_subjects', '$date') ";
									$run_query = mysqli_query($connection, $query);
									
									if($run_query == true){
										echo "<p class='text-success'><b>Number of Subjects Offered by JSS class Declared Successfully</b></p>";
									}else{
										echo "<p class='text-danger'><b>Number of Subjects Declaration Failed</b></p>";
									}
								}
							}
						}
						
						
						////////////// POST ACTION TO DECLARE NUMBER OF SUBJECTS OFFERED BY SSS CLASS ////////////////
						if(isset($_POST['number_of_senior_subjects_btn'])){
							$number_of_senior_subjects = $_POST['number_of_senior_subjects'];
							
							if($number_of_senior_subjects == $select){
								echo "<p class='text-danger'><b>Please Select Number of Subjects</b></p>";
							}else{
								$query = " SELECT * FROM `sss_subject_number` ";
								$run_query = mysqli_query($connection, $query);
								
								if(mysqli_num_rows($run_query) == 1){
									$query = " UPDATE `sss_subject_number` SET `number_of_subject` = '{$number_of_senior_subjects}' ";
									$run_query = mysqli_query($connection, $query);
									
									if($run_query == true){
										echo "<p class='text-success'><b>Number of Subjects Offered by SSS class Updated Successfully</b></p>";
									}else{
										echo "<p class='text-danger'><b>Number of Subjects Update Failed</b></p>";
									}
								}else{
									$query = " INSERT INTO `sss_subject_number`(`number_of_subject`, `declared_date`) VALUES('$number_of_senior_subjects', '$date') ";
									$run_query = mysqli_query($connection, $query);
									
									if($run_query == true){
										echo "<p class='text-success'><b>Number of Subjects Offered by SSS class Declared Successfully</b></p>";
									}else{
										echo "<p class='text-danger'><b>Number of Subjects Declaration Failed</b></p>";
									}
								}
							}
						}
						echo"
							<div class='panel panel-primary'>
								<div class='panel-heading'>
									<h2>Manage Class Subjects</h2>
								</div>
								<div class='panel-body'>
									<form method='POST' action='staff_dashboard.php?manage_subjects'>
										<legend>Specify Subjects for Junior (JSS) Class</legend>
										<div class='row'>
											<div class='col-md-6'>
												<div class='input-group'>
													<span class='input-group-addon' id='basic-addon2'>JSS Class Subjects:</span>
													<select class='form-control' name='specify_junior_subjects'>
														<option selected >{$select}</option>";
															$junior_subject_array = array("Mathematics", "English Language", "Agric Science", "Christian Religious Knowledge", "Home Economics", "Business Studies", "Social Studies", "Physical & Health Education", "Computer Science", "Basic Education", "Civic Education", "Introductory Technology", "French", "Literature in English");
																
															foreach($junior_subject_array as $junior_subject){
																echo "<option>{$junior_subject}</option><br>";
															}
															echo"
													</select>
												</div>
												<br />
											</div>
											
											<div class='col-md-6'>
												<input type='submit' name='specify_junior_subjects_btn' value='SPECIFY' class='btn btn-success' />
												<input type='submit' name='show_junior_subjects_btn' value='SHOW ALL SPECIFIED SUBJECT' class='btn btn-warning' />
											</div>
											
										</div>
									</form>";
									
									/////////////////////// POST ACTION TO SHOW ALL SPECIFIED SUBJECTS FOR JUNIOR STUDENTS //////////
									if(isset($_POST['show_junior_subjects_btn'])){
										$query = " SELECT * FROM `jss` ";
										$run_query = mysqli_query($connection, $query);
										
										if(mysqli_num_rows($run_query) > 0){
											$i = 0;
											echo"
												<div class='table-responsive'>
													<table class='table table-striped'>
														<thead>
															<tr>
																<th>S/N</th>
																<th>JUNIOR CLASSES SUBJECTS</th>
																<th>ACTION</th>
															</tr>
														</thead>
											";
											while($result = mysqli_fetch_assoc($run_query)){
												$i++;
												$subject_id_junior = $result['id'];
												$junior_subjects = $result['jss_subjects'];
												echo"
													
													<tbody>
														<tr>
															<td>{$i}</td>
															<td>{$junior_subjects}</td>
															<td>
																<form method='POST' action=''>
																	<input type='hidden' name='hide_subject_id' value='{$subject_id_junior}' />
																	<input type='submit' name='del_specify_btn' value='Delete' class='btn-xs btn-danger' />
																</form>
															</td>
														</tr>
													</tbody>
												";
											}
										}echo"
											</table>
										</div>";
									}
									
									if(isset($_POST['del_specify_btn'])){
										$hidden_subject_id = $_POST['hide_subject_id'];
										
										$query = " DELETE FROM `jss` WHERE `id` = '{$hidden_subject_id}' ";
										$run_query = mysqli_query($connection, $query);
										
										if($run_query == true){
											echo "<p class='text-success'><b>Subject Deleted Successfully</b></p>";
										}else{
											echo "<p><b>Error! Could Not Delete Record</b></p>";
										}
									}
									
									echo"
									<br />									
									<form method='POST' action='staff_dashboard.php?manage_subjects'>
										<legend>Specify Subjects for Senior (SSS) Class</legend>
										<div class='row'>
											<div class='col-md-6'>
												<div class='input-group'>
													<span class='input-group-addon' id='basic-addon2'>SSS Class Subjects:</span>
													<select class='form-control' name='specify_senior_subjects'>
														<option selected >{$select}</option>";
															$senior_subject_array = array("Mathematics", "English Language", "Biology", "Agric Science", "Chemistry", "Physics", "Further Maths", "Economics", "Government", "Home Management", "Accounting", "Commerce", "Literature", "History", "Christian Religious Education", "Geography");
															foreach($senior_subject_array as $senior_subject){
																echo "<option>{$senior_subject}</option><br />";
															}
															echo"
													</select>
												</div>
												<br />
											</div>
											
											<div class='col-md-6'>
												<input type='submit' name='specify_senior_subjects_btn' value='SPECIFY' class='btn btn-success' />
												<input type='submit' name='show_senior_subjects_btn' value='SHOW ALL SPECIFIED SUBJECT' class='btn btn-warning' />
											</div>
											
										</div>
									</form>";
									
									/////////////////////// POST ACTION TO SHOW ALL SPECIFIED SUBJECTS FOR SENIOR STUDENTS //////////
									if(isset($_POST['show_senior_subjects_btn'])){
										$query = " SELECT * FROM `sss` ";
										$run_query = mysqli_query($connection, $query);
										
										if(mysqli_num_rows($run_query) > 0){
											$i = 0;
											echo"
												<div class='table-responsive'>
													<table class='table table-striped'>
														<thead>
															<tr>
																<th>S/N</th>
																<th>SENIOR CLASSES SUBJECTS</th>
																<th>ACTION</th>
															</tr>
														</thead>
											";
											while($result = mysqli_fetch_assoc($run_query)){
												$i++;
												$subject_id_senior = $result['id'];
												$senior_subjects = $result['sss_subjects'];
												echo"
													
													<tbody>
														<tr>
															<td>{$i}</td>
															<td>{$senior_subjects}</td>
															<td>
																<form method='POST' action=''>
																	<input type='hidden' name='hidden_subject_id' value='{$subject_id_senior}' />
																	<input type='submit' name='delete_specify_btn' value='Delete' class='btn-xs btn-danger' />
																</form>
															</td>
														</tr>
													</tbody>
														
												";
											}
										}echo"
											</table>
										</div>";
									}
									
									if(isset($_POST['delete_specify_btn'])){
										$hidden_subject_id = $_POST['hidden_subject_id'];
										
										$query = " DELETE FROM `sss` WHERE `id` = '{$hidden_subject_id}' ";
										$run_query = mysqli_query($connection, $query);
										
										if($run_query == true){
											echo "<p class='text-success'><b>Subject Deleted Successfully</b></p>";
										}else{
											echo "<p><b>Error! Could Not Delete Record</b></p>";
										}
									}
									
									echo"
									<br />
									<form method='POST' action='staff_dashboard.php?manage_subjects'>
										<legend>Specify Number of Subjects offered by Junior (JSS) Class</legend>
										<div class='row'>
											<div class='col-md-6'>
												<div class='input-group'>
													<span class='input-group-addon' id='basic-addon2'>JSS No. of Sub:</span>
													<select class='form-control' name='number_of_junior_subjects'>
														<option selected >{$select}</option>";
															for($i=1; $i <= 20; $i++){
																echo "<option>{$i}</option>";
															}
															echo"
													</select>
												</div>
												<br />
												
												<div>
													<input type='submit' name='number_of_junior_subjects_btn' value='DECLARE' class='btn btn-success' />
												</div>
												<br />
											</div>
											
											
											
											<div class='col-md-6'>";
												///////////////// QUERY TO SHOW NUMBER OF SUBJECTS TO BE OFFERED BY JSS CLASSES ///////////
												$query = " SELECT * FROM `jss_subject_number` ";
												$run_query = mysqli_query($connection, $query);
												
												if(mysqli_num_rows($run_query) == 1){
													while($result = mysqli_fetch_assoc($run_query)){
														$subject_number_declared = $result['number_of_subject'];
													}
													echo"
														<div class='well'>
															<h4>Number Of Subjects offered by JSS CLASSES is <span class='text-danger'><u>{$subject_number_declared}</u></span></h4>
														</div>
													";
												}else{
													echo"
														<div class='well'>
															<h4>Number of Subjects Offered Not Declared !!!</h4>
														</div>
													";
												}
											echo"
											</div>
										</div>
									</form>
									<br />
									
									<form method='POST' action='staff_dashboard.php?manage_subjects'>
										<legend>Specify Number of Subjects offered by Senior (SSS) Class</legend>
										<div class='row'>
											<div class='col-md-6'>
												<div class='input-group'>
													<span class='input-group-addon' id='basic-addon2'>SSS No. of Sub:</span>
													<select class='form-control' name='number_of_senior_subjects'>
														<option selected >{$select}</option>";
															for($i=1; $i <= 20; $i++){
																echo "<option>{$i}</option>";
															}
															echo"
													</select>
												</div>
												<br />
												
												<div>
													<input type='submit' name='number_of_senior_subjects_btn' value='DECLARE' class='btn btn-success' />
												</div>
												<br />
											</div>
											<div class='col-md-6'>";
												///////////////// QUERY TO SHOW NUMBER OF SUBJECTS TO BE OFFERED BY SSS CLASSES ///////////
												$query = " SELECT * FROM `sss_subject_number` ";
												$run_query = mysqli_query($connection, $query);
												
												if(mysqli_num_rows($run_query) == 1){
													while($result = mysqli_fetch_assoc($run_query)){
														$subject_number_declared = $result['number_of_subject'];
													}
													echo"
														<div class='well'>
															<h4>Number Of Subjects offered by SSS CLASSES is <span class='text-danger'><u>{$subject_number_declared}</u></span></h4>
														</div>
													";
												}else{
													echo"
														<div class='well'>
															<h4>Number of Subjects Offered Not Declared !!!</h4>
														</div>
													";
												}
											echo"
											</div>
											
										</div>
									</form><br />
									
								</div>
							</div>
						";
					}
					?>
						
					<div>
						<button type="submit" class="comment_button trans_200">submit now</button>   <button type="submit" class="comment_button trans_201">Reset</button>
					</div>
			
			</div>
	
	
		
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