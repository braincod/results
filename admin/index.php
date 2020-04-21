<?php
include('auth.php');
require('dbconfig/connec.php');
require_once("includes/functions.php");

?>
<?php
	//////////////// DEFAULT NULL VALUES ///////////////
	date_default_timezone_set('Africa/Lagos');
	$date = date('d/M/Y');
	$select = "--select--";
	$oge = time();
	$time = date('H:i:s', $oge);
	$error = array();
	$year = date('Y');
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>SRMS</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Unicat project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link href="plugins/colorbox/colorbox.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" type="text/css" href="styles/courses.css">
<link rel="stylesheet" type="text/css" href="styles/courses_responsive.css">
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

									<li><div class="question"><h3 >Welcome <?php echo $_SESSION['username']; ?>!</h3>
</div></li>
									<li>
										<i class="fa fa-phone" aria-hidden="true"></i>
										<div>001-1234-88888</div>
									</li>
									<li>
										
										<div><h3 class='text-right'><span id='clockDisplay'></span></h3</div>
									</li>
									</li>
										>
									</li>
								</ul>

								<div class="top_bar_login ml-auto">
									<div class="login_button"><a href="admin/logout.php">LOGOUT</a></div>
									<div class='col-md-3 col-sm-3 col-xs-3 logout'>
						
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>				
		</div>
		</style>
		<script type="text/javascript">
		window.onload = initClock;
		 
		function initClock() {
		  var now = new Date();
		  var hr  = now.getHours();
		  var min = now.getMinutes();
		  var sec = now.getSeconds();
		  if (min < 10) min = "0" + min;  // insert a leading zero
		  if (sec < 10) sec = "0" + sec;
		  document.getElementById('clockDisplay').innerHTML
				= "Time is " + hr + ":" + min + ":" + sec;
		  setTimeout('initClock()', 500);
		}
		</script>
		
<div><h3 class='text-right'><span id='clockDisplay'></span></h3</div>+ b 
		<!-- Header Content -->
		<div class="header_container">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="header_content d-flex flex-row align-items-center justify-content-start">
							<div class="logo_container">
								<a href="#">
									<div class="logo_text">SR<span>MS</span></div>
								</a>
							</div>

							<nav class="main_nav_contaner ml-auto">
								
								<div class="dropdown" >
  <button class="dropbtn">Dashboard</button>
  <div class="dropdown-content">
    <a href="Teacheradd.php">addTeacher</a>
    <a href="EnrollPupil.php">EnrollPupil</a>
    <a href="Viewpupils.php">Viewpupils</a>
     <a href="registersubjects.php">register subjects</a>
    <a href ="promotepupil.php">promotepupil</a>
    <a href="addnewadmin.php">AddNewUser</a>
    <a href="addsubject.php">CheckResults</a>
    <a href="managesubjects.php">managesubjects</a>
  </div>
</div>

								<!-- Hamburger -->

								<div class="shopping_cart"><i class="fa fa-shopping-cart" aria-hidden="true"></i></div>
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
						
					</div>
				</div>
			</div>			
		</div>			
	</header>

	<!-- Menu -->

	<div class="menu d-flex flex-column align-items-end justify-content-start text-right menu_mm trans_400">
		<div class="menu_close_container"><div class="menu_close"><div></div><div></div></div></div>
		<div class="search">

			
		</div>
		<nav class="menu_nav">
			<ul class="menu_mm">
				<li class="menu_mm"><a href="index.php">Home</a></li>
				<li class="menu_mm"><a href="">EnrollPupil</a></li>
				<li class="menu_mm"><a href="">viewpupil</a></li>
				<li class="menu_mm"><a href="#">Courses</a></li>
				<li class="menu_mm"><a href="#">Blog</a></li>
				<li class="menu_mm"><a href="#">Page</a></li>
				<li class="menu_mm"><a href="#">Page</a></li>
				<li class="menu_mm"><a href="#">Page</a></li>
				<li class="menu_mm"><a href="#">Page</a></li>
				<li class="menu_mm"><a href="contact.html">Contact</a></li>
			</ul>
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
								<li>Courses</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>			
	</div><form action="#" class="header_search_form">
				
						<style>
.dropbtn {
  background-color: #800080;
  color: white;
  padding: 16px;
  font-size: 16px;
  border: none;
}

.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover {background-color: #ddd;}

.dropdown:hover .dropdown-content {display: block;}

.dropdown:hover .dropbtn {background-color: #3e8e41;}
</style>
							






?>
<li role="presentation"><a href="index.php?administratives"><span class='glyphicon glyphicon-tasks'></span> click here to view </a></li>
 <?php
                       
                        if(isset($update_msg)){
                            echo "<p class='text-success'><b>{$update_msg}</b></p>";
                        }
                        if(isset($update_msg_error)){
                            echo "<p class='text-danger'><b>{$update_msg_error}</b></p>p>";
                        }
                    ?>
					<?php
						
						
						if(isset($_GET['administratives'])){//
								if(isset($_POST['admin_upload_btn'])){
									$school_name = inject_checker($con, strtoupper($_POST['school_name']));
									$school_motto = inject_checker($con, ucwords($_POST['school_motto']));
									
									
									if(empty($school_name)){
										echo "<p class='text-danger'><b>Error: School Name Field Can not be empty!</b></p>";
									}
									elseif(empty($school_motto)){
										echo "<p class='text-danger'><b>Error: School Address Field Can not be empty!</b></p>";
									}else{
										////////////// ATION TO UPLOAD SCHOOL LOGO INTO DB FROM ADMINISTRATIVE PAGE ///////////
										$name = $_FILES['logo']['name'];
										$tmp_name = $_FILES['logo']['tmp_name'];
										
										if(isset($name)){
											if(!empty($name)){
											$location = 'picsystem/';
												if(move_uploaded_file($tmp_name, $location.$name)){
													$image_location = $location.$name;
												}else{
													$image_location = "admin/none.jpg";
												}

											}
										}
										
										/*////////////// ATION TO UPLOAD SCHOOL STAMP/SIGNATUre not  ///////////
										$name1 = $_FILES['stamp']['name'];
										$tmp_name1 = $_FILES['stamp']['tmp_name'];
										
										if(isset($name1)){
											if(!empty($name1)){
											$location1 = 'picsystem/';
												if(move_uploaded_file($tmp_name1, $location1.$name1)){
													$image_location1 = $location.$name1;
												}else{
													$image_location1 = "admin/none.jpg";
												}

											}
										}*/
										
										$query = " INSERT INTO `administratives`(`school_name`, `school_motto`, `school_logo`, `upload_date`)
													VALUES('".mysqli_real_escape_string($con,$school_name)."', '".mysqli_real_escape_string($con,$school_motto)."', '{$image_location}', '{$date}') ";
										$run_query = mysqli_query($con, $query);
										if($run_query == true){
											echo "<p class='text-success'><b>Administratives Upload Successful</b></p>";
											header("location: index.php?administratives");
										}else{
											echo "<p class='text-danger'><b>Administratives Upload Failed</b></p>";
											header("location: index.php?administratives?error=".mysqli_error($con));
										}
									}
									
								}
								
								////////// POST ACTION TO ADD NEW SESSION INTO DATABASE ///////////////
								if(isset($_POST['add_session_btn'])){
									$add_session = inject_checker($con, $_POST['add_session']);
									
									if(empty($add_session)){
										echo "<p class='text-danger'><b><span class='glyphicon glyphicon-remove'></span> You Need to Type the Session You want to Add</b></p>";
									}else{
										$query = " SELECT * FROM `sessions` WHERE `sessions` = '".mysqli_real_escape_string($con,$add_session)."' ";
										$run_query = mysqli_query($con, $query);
										if(mysqli_num_rows($run_query) > 0){
											echo "<p class='text-danger'><b><span class='glyphicon glyphicon-remove'></span> Sorry, {$add_session} Session has Already been added</b></p>";
										}else{
											$query = " INSERT INTO `sessions`(`sessions`, `date_added`) VALUES('".mysqli_real_escape_string($con,$add_session)."', '$date') ";
											$run_query = mysqli_query($con, $query);
											if($run_query == true){
												echo "<p class='text-success'><b><span class='glyphicon glyphicon-ok'></span> New Session Successfully Added</b></p>";
											}else{
												echo "<p class='text-danger'><b><span class='glyphicon glyphicon-remove'></span> Fail to add new session</b></p>";
											}
										}
									}
								}
								
								///////////// POST ACTION TO SPECIFY CURRENT SESSION/////////
								if(isset($_POST['current_session_btn'])){
									$current_session = inject_checker($con,$_POST['current_session']);
									
									if($current_session == $select){
										echo "<p class='text-danger'><b> Error: Please Select a session to Declare Current Session</b></p>";
									}else{
										$query = " UPDATE `current_season` SET `current_session` = '{$current_session}' ";
										$run_query = mysqli_query($con, $query);
										if($run_query == true){
											echo " <p class='text-success'><b>Current Session Successfully Updated</b></p>";	
										}else{
											echo "<p class='text-danger'><b>Current Session Update Failed</b></p>";
										}
									}
								}
								
								///////////////// POST ACTION TO SPECIFY CURRENT TERM ////////////////
								if(isset($_POST['current_term_btn'])){
									$current_term = inject_checker($con, $_POST['current_term']);
									
									if($current_term == $select){
										echo "<p class='text-danger'><b> Error: Please Select a session to Declare Current Term</b></p>";
									}else{
										$query = " UPDATE `current_season` SET 	`current_term` = '$current_term' ";
										$run_query = mysqli_query($con, $query);
										
										if($run_query == true){
											echo " <p class='text-success'><b>Current Term Successfully Updated</b></p>";	
										}else{
											echo "<p class='text-danger'><b>Current Term Update Failed</b></p>";
										}
									}
								}
								
								if(isset($_POST['add_class_btn'])){
									//////// POST ACTION TO ADD A NEW CLASS INTO THE DATABASE //////////////
									$add_class = inject_checker($con, strtoupper($_POST['add_class']));
									
									if(empty($add_class)){
										echo "<p class='text-danger'><b>Please Type the Class You Want to Add</b></p>";
									}else{
										$query = " SELECT * FROM `classes` WHERE `classes` = '{$add_class}' ";
										$run_query = mysqli_query($con, $query);
										if(mysqli_num_rows($run_query) > 0){
											echo "<p class='text-danger'><b>Error: {$add_class} Class Already Exist</b></p>";
										}else{
											$query = " INSERT INTO `classes`(`classes`, `date_added`) VALUES('".mysqli_real_escape_string($con,$add_class)."', '$date') ";
											$run_query = mysqli_query($con, $query);
											
											if($run_query == true){
												echo " <p class='text-success'><b>New Class Successfully Added</b></p>";
											}else{
												echo "<p class='text-danger'><b>Addition of New Class Failed</b></p>";
											}
										}
									}
								}
							echo"
								<div class='panel panel-primary'>
									<div class='panel-heading'>
										<h2>Manage Administrative Activities</h2>
									</div>
									<div class='panel-body'>
										<p class='text-info'><b><span class='glyphicon glyphicon-bullhorn'></span> This Section Must be filled Before Using The Portal !!!</b></>
										<p class='text-warning'><b>NOTE: Please Be Informed that Changes made in this section will affect the entire School Portal System. You are Therefore Advised to make changes when due and carefully ...</b></p>
										<form method='GET' enctype='multipart/form-data' action='index.php?administratives'>
											<legend>Administratives</legend>
											<div class='input-group'>
												<span class='input-group-addon' id='basic-addon2'>School Name:</span>
												<input type='text' name='school_name' placeholder='Type Your School Name ...' class='form-control' />
											</div>
											<br />
											
											<div class='input-group'>
												<span class='input-group-addon' id='basic-addon2'>School Address:</span>
												<input type='text' name='school_motto' placeholder='Type Your School Address ...' class='form-control' />
											</div>
											<br />
											
											<div class='input-group'>
												<span class='input-group-addon' id='basic-addon2'>School Logo:</span>
												<input type='file' name='logo' required class='form-control' aria-describedby='basic-addon2'>
											</div>
											<br />
											
											
											<input type='submit' name='admin_upload_btn' value='Upload' class='btn btn-warning' />
										</form>
										<br />
										
										<form method='GET' action='index.php?administratives'>
											<input type='submit' name='view_admin_upload_btn' value='View Uploaded Admin Info' class='btn btn-info' />
										</form>
										<br />";
										
										if(isset($_POST['view_admin_upload_btn'])){
											////////// POST ACTION TO VIEW ALL THE UPLOADED ADMINISTRATIVE INFORMATION ////////////
											$query = " SELECT * FROM `administratives` ";
											$run_query = mysqli_query($con, $query);
											
											if(mysqli_num_rows($run_query) > 0){
												$i = 0;
												echo"
												<div class='table-responsive'>
													<table class='table table-striped'>
														<thead>
															<tr>
																<th>S/N</th>
																<th>SCHOOL NAME</th>
																<th>SCHOOL ADDRESS</th>
																<th>LOGO</th>
																<th>SCHOOL STAMP</th>
																<th>ACTION</th>
															</tr>
														</thead>
													";
												while($result = mysqli_fetch_assoc($run_query)){
													$i++;
													$administratives_id = $result['id'];
													$admin_name = $result['school_name'];
													$admin_motto = $result['school_motto'];
													$admin_logo = $result['school_logo'];
													//$admin_stamp = $result['school_stamp'];
													//echo "<img src='$admin_logo' />";
													echo"
														<tbody>
															<tr>
																<td>{$i}</td>
																<td>{$admin_name}</td>
																<td>{$admin_motto}</td>
																<td><img class='img-responsive' src='{$admin_logo}' /></td>
																<td><img class='img-responsive' src='{$admin_stamp}' /></td>
																<td>
																	<form method='POST' action='index.php?administrative'>
																		<input type='hidden' name='admin_id' value='{$administratives_id}' />
																		<input type='submit' name='delete_admin_btn' value='Delete' class='btn btn-xs btn-danger' />
																	</form>
																</td>
															</tr>
														</tbody>
													";
												}
												echo"</table>
												</div>";
											}
										}
										
										/////////////// POST ACTION TO DELETE ADMINISTRATIVE INFORMATION ///////////////////
										if(isset($_POST['delete_admin_btn'])){
											$admin_id = $_POST['admin_id'];
											
											$query = " DELETE FROM `schoolmanager` WHERE `id` = {$admin_id} ";
											$run_query =mysqli_query($con, $query);
											
											if($run_query == true){
												echo "<p class='text-success'><b>Admin Info Deleted Successfully</b></p>";
											}else{
												echo "<p><b>Error! Could Not Delete Record</b></p>";
											}
										}
										
										echo"
										<form method='POST' action='index.php?administratives'>
											<legend>Manage School Seasons</legend>
											<p class='text-info'><b><span class='glyphicon glyphicon-bullhorn'></span> Choose Current Session At the Beginning of Every New Academic Session !</b></p>";
											///////////// POST ACTION TO DISPLAY CURRENT SESSION //////////////
											$query = " SELECT * FROM `current_season` ";
											$run_query = mysqli_query($con, $query);

											if(mysqli_num_rows($run_query) == 1){
												while($result = mysqli_fetch_assoc($run_query)){
													$show_current_session = $result['current_session'];
													echo"
														<div class='well'>
															<h4><b>Your Current Session is {$show_current_session}</b></h4>
														</div>
													";
												}
											}
											echo"
											<div class='input-group'>
												<span class='input-group-addon' id='basic-addon2'>Change Current Session:</span>
												<select class='form-control' name='current_session' style='width: 100%; float: left;'>
													<option selected>{$select}</option>";
														$query = " SELECT * FROM `sessions` ";
														$run_query = mysqli_query($con, $query);
														if(mysqli_num_rows($run_query) > 0){
															while($result = mysqli_fetch_assoc($run_query)){
																$all_sessions = $result['sessions'];
																echo "<option>{$all_sessions}</option>";
															}
														}
										
													echo"
												</select>
											</div>
											<br />
											
											<input type='submit' name='current_session_btn' value='Specify Current Session' class='btn btn-info' />
										</form>
										<br />
										
										<form method='POST' action='index.php?administratives'>
										<p class='text-info'><b><span class='glyphicon glyphicon-bullhorn'></span> Choose Current Term At the START   of Every Term !</b></p>";
											///// POST ACTION TO DISPLAY CURRRENT TERM /////////////
											$query = " SELECT * FROM `current_season` ";
											$run_query = mysqli_query($con, $query);
											if(mysqli_num_rows($run_query) == 1){
												while($result = mysqli_fetch_assoc($run_query)){
													$show_current_term = $result['current_term'];
													echo"
														<div class='well'>
															<h4><b>Your Current Term is {$show_current_term}</b></h4>
														</div>
													";
												}
											}
											echo"
											<div class='input-group'>
												<span class='input-group-addon' id='basic-addon2'>Change Current Term:</span>
												<select class='form-control' name='current_term' style='width: 100%; float: left;'>
													<option selected>{$select}</option>";
													
													$term_array = array("First Term", "Second Term", "Third Term");
													foreach($term_array as $term){
														echo "<option>{$term}</option><br>";
													}
										
													echo"
												</select>
											</div>
											<br />
											
											<input type='submit' name='current_term_btn' value='Specify Current Term' class='btn btn-info' />
										</form>
										<br />
										
										<form method='POST' action='index.php?administratives'>
											<legend>Session Management</legend>
											<div class='input-group'>
												<span class='input-group-addon' id='basic-addon2'>Add New Session</span>
												<input type='text' name='add_session' class='form-control' placeholder='Type New Session e.g (2019/2020)' />
											</div>
											<br />
											
											<input type='submit' name='add_session_btn' value='Add Session' class='btn btn-warning' />
											<input type='submit' name='show_added_btn' value='Show Added Sessions' class='btn btn-info' />
										</form>
										<br />";
										
										if(isset($_POST['show_added_btn'])){
											///////////// POST ACTION TO SHOW ALL ADDED SESSIONS IF A BUTTON IS CLICKED /////
											$query = " SELECT * FROM `sessions` ";
											$run_query = mysqli_query($con, $query);
											if(mysqli_num_rows($run_query) > 0){
												$i = 0;
												echo"
												<div class='table-responsive'>
													<table class='table table-striped'>
														<thead>
															<tr>
																<th>S/N</th>
																<th>Sessions</th>
																<th>Action</th>
															</tr>
														</thead>";
												while($result = mysqli_fetch_assoc($run_query)){
													$i++;
													$session_id = $result['id'];
													$show_all_sessions = $result['sessions'];
													echo"
														<tbody>
															<tr>
																<td>{$i}</td>
																<td>{$show_all_sessions}</td>
																<td>
																	<form method='POST' action=''>
																		<input type='hidden' name='hide_session_del' value='{$session_id}' />
																		<input type='submit' name='delete_session_btn' value='Delete' class='btn btn-xs btn-danger' />
																	</form>
																</td>
															</tr>
														</tbody>
													";
												}
												echo"</table>
												</div>";
											}
										}
										
										//////////// POST ACTION TO DELETE UPLOADED SESSIONS ////////////////
										if(isset($_POST['delete_session_btn'])){
											$hide_session_del = $_POST['hide_session_del'];
											
											$query = " DELETE FROM `sessions` WHERE `id` = '{$hide_session_del}' ";
											$run_query = mysqli_query($con, $query);
											
											if($run_query == true){
												echo "<p class='text-success'><b>Session Deleted Successfully</b></p>";
											}else{
												echo "<p><b>Error! Could Not Delete Record</b></p>";
											}
										}
										
										echo"
										<form method='POST' action='index.php?administratives'>
											<legend>Class Management</legend>
											<p class='text-info'><b><span class='glyphicon glyphicon-bullhorn'></span> Add New Classes According to Your School SET UP!</b></p>
											<div class='input-group'>
												<span class='input-group-addon' id='basic-addon2'>Add New Class</span>
												<input type='text' name='add_class' class='form-control' placeholder='Type New Class e.g (10A,10B,11A,11B......)' />
											</div>
											<br />
											
											<input type='submit' name='add_class_btn' value='Add Class' class='btn btn-warning' />
											<input type='submit' name='view_class_btn' value='View Classes' class='btn btn-info' />
										</form>";
										
										if(isset($_POST['view_class_btn'])){
											///////////// POST ACTION TO SHOW ALL ADDED CLASS IF THE BUTTON IS CLICKED ////////////
											$query = " SELECT * FROM `classes` ";
											$run_query = mysqli_query($con, $query);
											if(mysqli_num_rows($run_query) > 0){
												$i = 0;
												echo"
												<div class='table-responsive'>
													<table class='table table-striped'>
														<thead>
															<tr>
																<th>S/N</th>
																<th>Classes</th>
																<th>Action</th>
															</tr>
														</thead>";
												while($result = mysqli_fetch_assoc($run_query)){
													$i++;
													$class_id = $result['id'];
													$all_class = $result['classes'];
													echo"
															<tbody>
																<tr>
																	<td>{$i}</td>
																	<td>$all_class</td>
																	<td>
																		<form method='POST' action=''>
																			<input type='hidden' name='hide_class_del' value='{$class_id}' />
																			<input type='submit' name='delete_class_btn' value='Delete' class='btn btn-xs btn-danger' />
																		</form>
																	</td>
																</tr>
															</tbody>
													";
												}
												echo"</table>
												</div>";
											}
										}
										echo"
									</div>
								</div>
							";
							
							///////////////// POST ACTION TO DELETE UPLOADED CLASSES ////////////
							if(isset($_POST['delete_class_btn'])){
								$hide_class_del = $_POST['hide_class_del'];
								
								$query = " DELETE FROM `classes` WHERE `id` = '{$hide_class_del}' ";
								$run_query = mysqli_query($con, $query);
								
								if($run_query == true){
									echo "<p class='text-success'><b>Class Deleted Successfully</b></p>";
								}else{
									echo "<p><b>Error! Could Not Delete Record</b></p>";
								}
							
							}
						}
						?>




										
	
<div class="sidebar_section">
							<div class="sidebar_section_title"></div>
							

				
							
							
							<!-- Course -->
							
								</div>
							</div>

							<!-- Course -->
							

							<!-- Course -->
							
							<!-- Course -->
							
						


						<!-- Categories -->
						
							

							<div class="sidebar_categories">

								
								

							
							</div>
						</div>

						<!-- Latest Course -->
						<div class="sidebar_section">
						

				
				
					
						

						<!-- Tags -->
					


						<!-- Banner -->
						<div class="sidebar_section">
							

								
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Newsletter -->


	<div class="newsletter">
		<div class="newsletter_background parallax-window" data-parallax="scroll" data-image-src="images/newsletter.jpg" data-speed="0.8"></div>
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
											<div class="footer_logo_text">SR<span>MS</span></div>
										</a>
									</div>
									<div class="footer_about_text">
										<p>Lorem ipsum dolor sit ametium, consectetur adipiscing elit.</p>
									</div>
									<div class="footer_social">
										<ul>
											<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
										</ul>
									</div>
								</div>
								
							</div>

							<div class="col-lg-3 footer_col">
					
								<!-- Footer Contact -->
								<div class="footer_section footer_contact">
									<div class="footer_title">Contact Us</div>
									<div class="footer_contact_info">
										<ul>
											<li>Email: Info.deercreative@gmail.com</li>
											<li>Phone:  +(88) 111 555 666</li>
											<li>40 Baria Sreet 133/2 New York City, United States</li>
										</ul>
									</div>
								</div>
								
							</div>

							<div class="col-lg-3 footer_col">
					
								<!-- Footer links -->
								<div class="footer_section footer_links">
									<div class="footer_title">Contact Us</div>
									<div class="footer_links_container">
										<ul>
											<li><a href="index.html">Home</a></li>
											<li><a href="about.html">About</a></li>
											<li><a href="contact.html">Contact</a></li>
											<li><a href="#">Features</a></li>
											<li><a href="courses.html">Courses</a></li>
											<li><a href="#">Events</a></li>
											<li><a href="#">Gallery</a></li>
											<li><a href="#">FAQs</a></li>
										</ul>
									</div>
								</div>
								
							</div>

							<div class="col-lg-3 footer_col clearfix">
					
								<!-- Footer links -->
								<div class="footer_section footer_mobile">
									<div class="footer_title">Mobile</div>
									<div class="footer_mobile_content">
										<div class="footer_image"><a href="#"><img src="images/mobile_1.png" alt=""></a></div>
										<div class="footer_image"><a href="#"><img src="images/mobile_2.png" alt=""></a></div>
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
<script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="plugins/parallax-js-master/parallax.min.js"></script>
<script src="plugins/colorbox/jquery.colorbox-min.js"></script>
<script src="js/courses.js"></script>


</body>

</html>
