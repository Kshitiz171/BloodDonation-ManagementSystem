<?php

class DB{
	public $host="localhost";
	public $user="root";
	public $pass="";
	public $db="bloodmanagement";
	public $con;
//include_once ("connect.php");
	public function __construct(){
		$this->con=new mysqli($this->host,$this->user,$this->pass,$this->db);
	}
	public function insertdata(){


		if(isset($_POST['submit'])){
			$name=$_POST['name'];
			$gender=$_POST['gender'];
			$email=$_POST['email'];
			$password=$_POST['password'];
			$dob=$_POST['dob'];
			$role=$_POST['role'];  

			$sql="insert into signup (name,gender,email,password,dob,role) value 
			('$name','$gender','$email','$password','$dob','$role')";
			$res=$this->con->query($sql);
			if ($res){
				echo "success";
// header('Location:adminview.php');

			}	}   
		}

		public function login(){
SESSION_START();
			if(isset($_POST['submit1'])){
				$email=$_POST['email'];
				$password=$_POST['password'];

				$sql="select * from signup where email='$email' and password='$password'";
				$nums=$this->con->query($sql);


				if (mysqli_num_rows($nums)>0){
					$_SESSION['email']=$email;
					while ($check=mysqli_fetch_array($nums)) {


						if ($check['role']==1){
//echo "Success";
							header ("Location:userdashboard.php");

						}else{
							header ("location:../bloodmanagement/admin/admindashboard.php");
   // echo "Not";
						}

					}

				}   
			}
		}
	}
	$obj=new DB;
	$obj->insertdata();

	$obj1=new DB;
	$obj1->login();


	?>







	<!DOCTYPE html>
	<html lang="en">
	<head>

		<title>Web Portal on Blood Donation System.</title>

		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=Edge">
		<meta name="description" content="">
		<meta name="keywords" content="">
		<meta name="author" content="Tooplate">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="css/font-awesome.min.css">
		<link rel="stylesheet" href="css/animate.css">
		<link rel="stylesheet" href="css/owl.carousel.css">
		<link rel="stylesheet" href="css/owl.theme.default.min.css">



		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>


		<script src="js/jquery-3.2.1.min.js" type="text/javascript"></script>
		<script src="script_file.js" type="text/javascript"></script>

		<link rel="stylesheet" href="css/tooplate-style.css">

		<script src="https://code.jquery.com/jquery-3.2.1.js"></script>

		<style type="text/css">
			.error_form{
				padding-bottom: 10px;
			}
		</style>
		
	</head>
	<body id="top" data-spy="scroll" data-target=".navbar-collapse" data-offset="50">

		<section class="preloader">
			<div class="spinner">
				<span class="spinner-rotate"></span>
			</div>
		</section>


		<header>
			<div class="container">
				<div class="row">
					<div class="col-md-4 col-sm-5">
						<p>Welcome to a Professional Blood Donation system.</p>
					</div>
					<div class="col-md-8 col-sm-7 text-align-right">
						<span class="phone-icon"><i class="fa fa-phone"></i> 010-060-0160</span>
						<span class="date-icon"><i class="fa fa-calendar-plus-o"></i> 6:00 AM - 10:00 PM (Mon-Fri)</span>
						<span class="email-icon"><i class="fa fa-envelope-o"></i> <a href="#">info@company.com</a></span>
					</div>
				</div>
			</div>
		</header>


		<section class="navbar navbar-default navbar-static-top" role="navigation">
			<div class="container">
				<div class="navbar-header">
					<button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
						<span class="icon icon-bar"></span>
						<span class="icon icon-bar"></span>
						<span class="icon icon-bar"></span>
					</button>
					<a href="index.html" class="navbar-brand"><span class="icons">B</span>lood Donation.</a>
				</div>
				<div class="collapse navbar-collapse">
					<ul class="nav navbar-nav navbar-right">
						<li><a href="#top" class="smoothScroll">Home</a></li>
						<li><a href="#about" class="smoothScroll">About Us</a></li>
						<li class="appointment-btn"><a href="#google-map">Login</a></li>
					</ul>
				</div>
			</div>
		</section>


		<section id="home" class="slider" data-stellar-background-ratio="0.5">
			<div class="container">
				<div class="row">

					<div class="owl-carousel owl-theme">
						<div class="item item-first">
							<div class="caption">
								<div class="col-md-offset-1 col-md-10">
									<h3>Blood is meant to circulate.</h3>
									<h1>Pass it Around.</h1>
									<a href="#team" class="section-btn btn btn-default smoothScroll">Meet Our Doctors</a>
								</div>
							</div>
						</div>

						<div class="item item-second">
							<div class="caption">
								<div class="col-md-offset-1 col-md-10">
									<h3>You dont have to be a doctor to save a life.</h3>
									<h1>Just Donate Blood.</h1>
									<a href="#about" class="section-btn btn btn-default btn-gray smoothScroll">More About Us</a>
								</div>
							</div>
						</div>

						<div class="item item-third">
							<div class="caption">
								<div class="col-md-offset-1 col-md-10">
									<h3>Save a life.</h3>
									<h1>Give Blood.</h1>
									<a href="#news" class="section-btn btn btn-default btn-blue smoothScroll">Read Stories</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section id="about">
			<div class="container">
				<div class="row">

					<div class="col-md-6 col-sm-6">
						<div class="about-info">
							<h2 class="wow fadeInUp" data-wow-delay="0.6s">Welcome to Blood donation system.</h2>
							<div class="wow fadeInUp" data-wow-delay="0.8s">
								<p>"This is a gift anyone can give. It has no cost and it can be tremendously powerful."</p>
								<p>"To The Young And Healthy It's No Lose. To Sick It's Hope Of Life. DONATE BLOOD To Give Back Life."</p>
							</div>
							<figure class="profile wow fadeInUp" data-wow-delay="1s">
								<img src="images/author-image.jpg" class="img-responsive" alt="">
								<figcaption>
									<h3>Dr. Amir Poudel.</h3>
									<p>General Principal</p>
								</figcaption>
							</figure>
						</div>
					</div>

				</div>
			</div>
		</section>

		<section id="google-map">







			<section id="appointment" data-stellar-background-ratio="3">
				<div class="container">
					<div class="row">
						<div class="col-md-6 col-sm-6">
							<img src="images/a.jpg" class="img-responsive" alt="">
						</div>
						<div class="col-md-6 col-sm-6">
							<ul class="nav nav-tabs">
								<li class="active"><a data-toggle="tab" href="#menu1">LOGIN</a></li>
								<li><a data-toggle="tab" href="#menu2">REGISTER</a></li>
							</ul>
							<div class="tab-content">
								<div id="menu1" class="tab-pane fade in active">
									<form id="appointment-form" role="form" method="post" action="#">
										<div class="section-title wow fadeInUp" data-wow-delay="0.4s">
											<h2 style="padding-top:40px; padding-bottom:20px;">Login</h2>
										</div>
										<div class="wow fadeInUp" data-wow-delay="0.8s">
											<div class="col-md-6 col-sm-6">
												<label for="email">Email</label>
												<input type="email" class="form-control" id="email" name="email" placeholder="Your Email" autocomplete="off" >>
											</div>
											<div class="col-md-6 col-sm-6">
												<label for="email">Password</label>
												<input type="password" class="form-control" id="email" name="password" placeholder="Your Password" autocomplete="off">
											</div>


											<div class="col-md-12 col-sm-12">							                                       
												<button  type="submit" class="form-control" id="cf-submit" name="submit1">Login</button>
											</div> 
											<div class="form-group">
												<div class="form-check">
													<label class="form-check-label">
														<input class="form-check-input" type="checkbox"> Remember Password</label>
													</div>
												</div>
												
											</div>
										</form>
									</div>


									<div id="menu2" class="tab-pane fade">
										<form id="appointment-form" role="form" method="post" action="">
											<div class="section-title wow fadeInUp" data-wow-delay="0.4s">
												<h2 style="padding-top:40px; padding-bottom:20px;">SignUp Now.</h2>
											</div>
											<div class="wow fadeInUp" data-wow-delay="0.8s">
												<div class="col-md-6 col-sm-6">
													<label for="name" style="padding-bottom: px;">
														<input required type="text" class="form-control" id="form_fname" name="name" placeholder="Full Name" autocomplete="off"></br>
														<span class="error_form" id="fname_error_message" style="display:inline-block;"></span>
													</label>
												</div>
												<div class="col-md-12 col-sm-6">
													<label for="gender">
														<select name="gender" value="" class="form-control">

															<option value="male">Male</option>
															<option value="female">Female</option>
															<option value="other">Other</option>
														</label>
													</div>

													<div class="col-md-6 col-sm-6">
														<label for="email">
															<input type="email" required class="form-control" id="form_email" name="email" placeholder="Your Email" autocomplete="off"></br>
															<span class="error_form" id="email_error_message"  style="display:inline-block;"></span>
														</label>
													</div>
													<div class="col-md-6 col-sm-6">
														<label for="email">
															<input type="password" required class="form-control" id="form_password" name="password" placeholder="Password" autocomplete="off">
															<span class="error_form" id="password_error_message"  style="display:inline-block;"></span>
														</label>
													</div>
													<div class="col-md-6 col-sm-6">
														<label for="email">
															<input type="password" required class="form-control" id="form_retype_password"  name="confirmpassword" placeholder="Confirm Password" autocomplete="off">
															<span class="error_form" id="retype_password_error_message"  style="display:inline-block;"></span>
														</label>
													</div>
													<div class="col-md-6 col-sm-6">
														<label for="date">DOB</label>
														<input type="date" name="dob" value="" class="form-control">
													</div>

													<input type="hidden" name="role" value="1">
													<button type="submit" class="form-control" id="cf-submit" name="submit">Register</button>

												</div>
											</form>
										</div>
									</div>
								</div>

							</div>
						</div>
					</section>
				</section>           


				<footer data-stellar-background-ratio="5">
					<div class="container">
						<div class="row">

							<div class="col-md-4 col-sm-4">
								<div class="footer-thumb"> 
									<h4 class="wow fadeInUp" data-wow-delay="0.4s">Contact Info</h4>
									<p>We are open everyday during the time of emergency. Don't hesitate to contact us.</p>
									<div class="contact-info">
										<p><i class="fa fa-phone"></i> 010-070-0170</p>
										<p><i class="fa fa-envelope-o"></i> <a href="#">info@company.com</a></p>
									</div>
								</div>
							</div>

							<div class="col-md-4 col-sm-4"> 
								<div class="footer-thumb">
									<div class="opening-hours">
										<h4 class="wow fadeInUp" data-wow-delay="0.4s">Opening Hours</h4>
										<p>Monday - Friday <span>06:00 AM - 10:00 PM</span></p>
										<p>Saturday <span>09:00 AM - 08:00 PM</span></p>
										<p>Sunday <span>Closed</span></p>
									</div> 
									<ul class="social-icon">
										<li><a href="#" class="fa fa-facebook-square" attr="facebook icon"></a></li>
										<li><a href="#" class="fa fa-twitter"></a></li>
										<li><a href="#" class="fa fa-instagram"></a></li>
									</ul>
								</div>
							</div>
							<div class="col-md-12 col-sm-12 border-top">
								<div class="col-md-4 col-sm-6">
									<div class="copyright-text"> 
										<p>Copyright &copy; 2018 Your Company 
											| Design: <a rel="nofollow" href="https://www.facebook.com/tooplate" target="_parent">Tooplate</a></p>
										</div>
									</div>
									<div class="col-md-6 col-sm-6">
										<div class="footer-link"> 
											<a href="#">Laboratory Tests</a>
											<a href="#">Departments</a>
											<a href="#">Insurance Policy</a>
											<a href="#">Careers</a>
										</div>
									</div>
									<div class="col-md-2 col-sm-2 text-align-center">
										<div class="angle-up-btn"> 
											<a href="#top" class="smoothScroll wow fadeInUp" data-wow-delay="1.2s"><i class="fa fa-angle-up"></i></a>
										</div>
									</div>   
								</div>

							</div>
						</div>
					</footer>


					<script type="text/javascript">
						$(function() {

							$("#fname_error_message").hide();
							$("#email_error_message").hide();
							$("#password_error_message").hide();
							$("#retype_password_error_message").hide();

							var error_fname = false;
							var error_email = false;
							var error_password = false;
							var error_retype_password = false;

							$("#form_fname").focusout(function(){
								check_fname();
							});
							$("#form_email").focusout(function() {
								check_email();
							});
							$("#form_password").focusout(function() {
								check_password();
							});
							$("#form_retype_password").focusout(function() {
								check_retype_password();
							});

							function check_fname() {
								var pattern = /^[a-zA-Z]*$/;
								var fname = $("#form_fname").val();
								if (pattern.test(fname) && fname !== '') {
									$("#fname_error_message").hide();
									$("#form_fname").css("border-bottom","2px solid #34F458");
								} else {
									$("#fname_error_message").html("Should contain only Characters");
									$("#fname_error_message").show();
									$("#form_fname").css("border-bottom","2px solid #F90A0A");
									error_fname = true;
								}
							}


							function check_password() {
								var password_length = $("#form_password").val().length;
								if (password_length < 8) {
									$("#password_error_message").html("Atleast 8 Characters");
									$("#password_error_message").show();
									$("#form_password").css("border-bottom","2px solid #F90A0A");
									error_password = true;
								} else {
									$("#password_error_message").hide();
									$("#form_password").css("border-bottom","2px solid #34F458");
								}
							}

							function check_retype_password() {
								var password = $("#form_password").val();
								var retype_password = $("#form_retype_password").val();
								if (password !== retype_password) {
									$("#retype_password_error_message").html("Passwords Did not Matched");
									$("#retype_password_error_message").show();
									$("#form_retype_password").css("border-bottom","2px solid #F90A0A");
									error_retype_password = true;
								} else {
									$("#retype_password_error_message").hide();
									$("#form_retype_password").css("border-bottom","2px solid #34F458");
								}
							}

							function check_email() {
								var pattern = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
								var email = $("#form_email").val();
								if (pattern.test(email) && email !== '') {
									$("#email_error_message").hide();
									$("#form_email").css("border-bottom","2px solid #34F458");
								} else {
									$("#email_error_message").html("Invalid Email");
									$("#email_error_message").show();
									$("#form_email").css("border-bottom","2px solid #F90A0A");
									error_email = true;
								}
							}

							$("#registration_form").submit(function() {
								error_fname = false;

								error_email = false;
								error_password = false;
								error_retype_password = false;

								check_fname();

								check_email();
								check_password();
								check_retype_password();

								if (error_fname === false &&  error_email === false && error_password === false && error_retype_password === false) {
									alert("Registration Successfull");
									return true;
								} else {
									alert("Please Fill the form Correctly");
									return false;
								}


							});
						});
</script>


<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.sticky.js"></script>
<script src="js/jquery.stellar.min.js"></script>
<script src="js/wow.min.js"></script>
<script src="js/smoothscroll.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/custom.js"></script>

</body>
</html>