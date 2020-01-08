
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
			
			$image=$_FILES['image']['name'];
			$filename=$_FILES['image']['tmp_name'];  
			$destination="upload/";
			move_uploaded_file($filename,$destination.$image);
			$name=$_POST['name'];
			$bloodtype=$_POST['bloodtype'];
			$hospitalname=$_POST['hospitalname'];
			$location=$_POST['location'];
			$phone=$_POST['phone'];


			$sql="insert into addpatient(image,name,bloodtype,hospitalname,location,phone) value 
			('$image','$name','$bloodtype','$hospitalname','$location','$phone')";
			$res=$this->con->query($sql);

			if ($res){
				echo "<h1>Thanks for Applying...Your CV has been sent to following Company....</h1>";
   //header('Location:userdashboard.php');
			}
			else {

				echo "Sorry";
			}
		} 
	}
}
$obj=new DB;
$obj->insertdata();
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



	<link rel="stylesheet" href="css/tooplate-style.css">

</head>
<body id="top" data-spy="scroll" data-target=".navbar-collapse" data-offset="50">

	<section class="preloader">
		<div class="spinner">
			<span class="spinner-rotate"></span>
		</div>
	</section>


	<header>
	
	</header>


	<section class="navbar navbar-default navbar-static-top" role="navigation">
		<div class="container">
			<div class="navbar-header">
				<button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
					<span class="icon icon-bar"></span>
					<span class="icon icon-bar"></span>
					<span class="icon icon-bar"></span>
				</button>
				<a href="viewdonors.php" class="navbar-brand"><span class="icons">B</span>ack to home.</a>
			</div>
			<div class="collapse navbar-collapse">
				
			</div>
		</div>
	</section>




	<section id="appointment" data-stellar-background-ratio="3">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-sm-6">
					<img src="images/a.jpg" class="img-responsive" alt="">
				</div>
				<div class="col-md-6 col-sm-6">
					<div class="tab-content">


						<form id="appointment-form" role="form" method="post" action="#" enctype="multipart/form-data">
							<div class="section-title wow fadeInUp" data-wow-delay="0.4s">
								<h2 style="padding-top:40px; padding-bottom:20px;">Add Patient Details.</h2>
							</div>
							<div class="wow fadeInUp" data-wow-delay="0.8s">
								<div class="col-md-6 col-sm-6">
									<label for="name">Patient's Photo</label>
									
									<input type="file" class="form-control" id="name" name="image">
								</div>

								<div class="col-md-6 col-sm-6">
									<label for="name">Full Name</label>
									<input type="text" class="form-control" id="name" name="name" placeholder="Full Name" autocomplete="off">
								</div>
								



								<div class="col-md-6 col-sm-6">
									<label for="select">Blood Group</label>
									<select class="form-control" name="bloodtype">
										<option>A+</option>
										<option>A-</option>
										<option>B+</option>
										<option>B-</option>
										<option>O+</option>
										<option>O-</option>
										<option>AB+</option>
										<option>AB-</option>
									</select>
								</div>

								<div class="col-md-6 col-sm-6">
									<label for="name">Hospital Name</label>
									<input type="text" class="form-control" id="name" name="hospitalname" placeholder="Hospital Name" autocomplete="off">
								</div>

								<div class="col-md-6 col-sm-6">
									<label for="name">Location</label>
									<input type="text" class="form-control" id="name" name="location" placeholder="Hospital Location" autocomplete="off">
								</div>
								<div class="col-md-6 col-sm-6">
									<label for="name">Contact No.</label>
									<input type="text" class="form-control" id="name" name="phone" placeholder="Contact Number" autocomplete="off">
								</div>

								<button type="submit" class="form-control" id="cf-submit" name="submit" onclick="alert(' Successfully Requested!...')">Add</button>

							</div>
						</form>

					</div>
				</div>

			</div>
		</div>
	</section>
</section>           






<section id="google-map">








	<footer data-stellar-background-ratio="5">
		<div class="container">
			<div class="row">

				<div class="col-md-4 col-sm-4">
					<div class="footer-thumb"> 
						<h4 class="wow fadeInUp" data-wow-delay="0.4s">Contact Info</h4>
						<p>Fusce at libero iaculis, venenatis augue quis, pharetra lorem. Curabitur ut dolor eu elit consequat ultricies.</p>
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