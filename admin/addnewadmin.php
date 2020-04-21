<?php
require('dbconfig/connec.php');
?>
<?php
	///////////////////////// POST ACTION TO REGISTER NEW USER WHEN REGISTER BUTTON IS CLICKED /////////////////////////////////
	if(isset($_POST['user_reg_btn'])){
		$control_access = inject_checker($connection, strtolower($_POST['control_access']));
		$user_title = inject_checker($connection, $_POST['user_title']);
		$user_fullname = inject_checker($connection, $_POST['user_fullname']);
		$user_address = inject_checker($connection, $_POST['user_address']);
		$user_phone = inject_checker($connection, $_POST['user_phone']);
		$user_state = inject_checker($connection, $_POST['user_state']);
		$user_lga = inject_checker($connection, $_POST['user_lga']);
		$user_nationality = inject_checker($connection, $_POST['user_nationality']);
		$user_email = inject_checker($connection, $_POST['user_email']);
		$user_password = inject_checker($connection, $_POST['user_password1']);
		$confirm_password = inject_checker($connection, $_POST['user_password2']);
		
		////////////////// ERROR-CHECKING IF SPECIFIED FIELD IS EMPTY ////////////////////
		if(empty($control_access)){
			$error[] = "Error: You Need Control Access to Add Another User";
		}
		if(empty($user_title)){
			$error[] = "Error: Title required";
		}
		if(empty($user_fullname)){
			$error[] = "Error: Fullname required";
		}
		if(empty($user_phone)){
			$error[] = "Error: Phone required";
		}
		if(!empty($user_email)){
			if(single_email_validator($user_email)){
				$query = " SELECT * FROM `users` WHERE `email` = '{$user_email}' ";
				$run_query = mysqli_query($connection, $query);
				if(mysqli_num_rows($run_query) > 0){
					$error[] = "Error: Email address already exist !";
				}
			}else{
				$error[] = "Error: Invalid Email address entered !";
			}
		}else{
			$error[] = "Error: Email Address Required";
		}
		if(empty($user_password)){
			$error[] = "Error: Password required";
		}
		if(empty($error)){
			if($user_password !== $confirm_password){
				$error[] = "Error: Password do not match !";
			}
		}
		if(empty($error)){
			$query = " SELECT * FROM `access` WHERE `control_access` ='{$control_access}' ";
			$run_query = mysqli_query($connection, $query);
			
			if(mysqli_num_rows($run_query) == 1){
				$query = "INSERT INTO `users`(`title`, `fullname`, `address`, `phone`, `state`, `lga`, `nationality`, `email`, `password`, `date_of_reg`)
						VALUES('$user_title', '$user_fullname','$user_address', '$user_phone', '$user_state', '$user_lga', '$user_nationality', '$user_email', '$user_password', '$date')";
						
				$run_query = mysqli_query($connection, $query);
				if($run_query == true){
					header("Location:successful_reg.php");
				}else{
					$msg = "<p class='text-danger'><b>... Error: Registration not successfull ...</b></p>";
				}
			}else{
				$msg = "<p class='text-danger'><b>Incorrect Control Access</b></p>";
			}
		}
	}
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
				
				<h2> Register Users</h2>
<li role="presentation"><a href="addnewadmin.php?register_new_admin"><span class='glyphicon glyphicon-log-in'></span> Register New admin</a></li>
<p>admins only </p>
<?
				
					
				if(isset($_GET['register_new_user'])){
						
						echo"
						<div class='col-md-10' id='log'>";
							foreach($error as $msg_failed){
								echo "<h4 class='text-danger'>{$msg_failed}</h4>";
							}
							if(isset($msg)){
								echo $msg;
							}
									echo"
							<div class='panel panel-primary'>
								<div class='panel-heading'>
									<h3 class='log-text'>Register New User</h3>
								</div>
									
								<div class='panel-body'>
									<p class='text-warning'><b>NOTE: To Register a new Admin or User, You Need a Control Access. Please Contact Our User Support ...</b></p>
									<form class='' id='login' method='POST' action='addnewadmin.php?register_new_user'>
										<div class='input-group'>
											<span class='input-group-addon' id='basic-addon2'>Control Access</span>
											<input type='password' name='control_access' placeholder='Type Admin Control Access to enable you create a new admin! ...' class='form-control' />
										</div>
										<br />
										<div>
											<label class='checkbox-inline'>
												<input type='radio' name='user_title' id='title1' value='mr' checked /> Mr
											</label>
											
											<label class='checkbox-inline'>
												<input type='radio' name='user_title' id='title2' value='mrs' /> Mrs
											</label>
											
											<label class='checkbox-inline'>
												<input type='radio' name='user_title' id='title3' value='miss' /> Miss
											</label>
										</div>
										<br />
										<div class='input-group'>
											<span class='input-group-addon' id='basic-addon2'>Fullname</span>
											<input type='text' placeholder='Type Your Fullname' class='form-control' name='user_fullname' />
										</div>
										<br />
										
										<div class='input-group'>
											<span class='input-group-addon' id='basic-addon2'>Home Address:</span>
											<textarea rows='3' name='user_address' required class='form-control' placeholder='...' aria-describedby='basic-addon2'></textarea>
										</div>
										<br/>
										
										<div class='input-group'>
											<span class='input-group-addon' id='basic-addon2'>Phone</span>
											<input type='text' placeholder='Type Phone Number' class='form-control' name='user_phone' />
										</div>
										<br />
										
										<div class='input-group'>
											<span class='input-group-addon' id='basic-addon2'>State:</span>
											<select class='form-control' name='user_state'>
												<option selected >"; echo $select; echo "</option>";
												
												$state_array = array("Abia", "Adamawa", "Akwa ibom", "Anambra", "Bauchi", "Bayelsa", "Benue", "Borno", "Cross River", "Delta", "Ebonyi", "Edo", "Ekiti", "Enugu", "Gombe", "Imo", "Jigawa", "Kaduna", "Kano", "Katsina", "Kebbi", "Kogi", "Kwara", "Lagos", "Nasarawa", "Niger", "Ogun", "Ondo", "Osun", "Oyo", "Plateau", "Rivers", "Sokoto", "Taraba", "Yobe", "Zamfara", "FCT Abuja");
											
												foreach($state_array as $state){
													echo "<option>{$state}</option><br>";
												}
								
												echo"
											</select>
										</div>
										<br />
										
										<div class='input-group'>
											<span class='input-group-addon' id='basic-addon2'>LGA:</span>
											<textarea rows='' name='user_lga' required class='form-control' placeholder='...' aria-describedby='basic-addon2'></textarea>
										</div>
										<br/>
										
										<div class='input-group'>
											<span class='input-group-addon' id='basic-addon2'>Nationality:</span>
											<select class='form-control' name='user_nationality'>
												<option selected >"; echo $select; echo "</option>
												<option>Nigerian</option>
												<option>Non-nigerian</option>
											</select>
										</div>
										<br />
										
										<div class='input-group'>
											<span class='input-group-addon' id='basic-addon2'>Email</span>
											<input type='text' placeholder='Type Email Address' class='form-control' name='user_email' />
										</div>
										<br />
										
										<div class='input-group'>
											<span class='input-group-addon' id='basic-addon2'>Password</span>
											<input type='password' placeholder='Type password' class='form-control' name='user_password1' />
										</div>
										<br />
										
										<div class='input-group'>
											<span class='input-group-addon' id='basic-addon2'>Confirm Password</span>
											<input type='password' placeholder='Retype Password' class='form-control' name='user_password2' />
										</div>
										<br />
										<p id='btnsubmit'><input type='submit' name='user_reg_btn' id='submit' value='Register' class='btn btn-large btn-success login_btn text-center' /></p>
									</form>
									<button type='button' class='btn btn-default' onclick='window.print()' value='print a div!'><span class='glyphicon glyphicon-print'></span> Print</button>
								</div>
								
							</div>
						</div>";
					}
				?>


                            <!-- <div class='input-group'>
                                <span class='input-group-addon' id='basic-addon2'>Password</span>
                                <input type='password' placeholder='Type password' class='form-control' name='user_password1' />
                            </div>
                            <br />

                            <div class='input-group'>
                                <span class='input-group-addon' id='basic-addon2'>Confirm Password</span>
                                <input type='password' placeholder='Retype Password' class='form-control' name='user_password2' />
                            </div>
                            <br /> -->

	
		
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