<?php
session_start();
if (!isset($_SESSION['email']))
{
  header ("Location:index.php");
}
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

	<script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>



<link rel="stylesheet" href="css/tooplate-style.css">

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
					<p>Welcome to a User Homepage.</p>
				</div>
				<div class="col-md-8 col-sm-7 text-align-right">
<div class="dropdown">
		<a class="nav-link dropdown-toggle" href="" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
			<i class="fa fa-fw  fa-cog fa-3x" style:"height:24px;"></i>		
        </a>
		<ul class="dropdown-menu" style="z-index:100000; position: absoulte; left:500px !important; right:0px;">
		<li><a href='change_password.php?id=$row[id]'>Change password</a></li>
		<li><a href="logout.php">Log Out</a></li>
		</ul>
		</div>
        
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

					
				<li class="appointment-btn"><a href="userdashboard.php">Home</a></li>
					<li class="appointment-btn"><a href="addpersonaldetailsg.php">Donate</a></li>
					<li class="appointment-btn"><a href="viewdonors.php">View Donor.</a></li>
					<li class="appointment-btn"><a href="viewpersonaldetails.php">View Recipient.</a></li>
					<li class="appointment-btn"><a href="faq.php">FAQ.</a></li>
			
				</ul>
			</div>
		</div>
	</section>




<div class="container">
			<div class="row">

				<div class="col-md-4 col-sm-4">
					<div class="footer-thumb"> 
						<h4 style="color:#8B0000;">How does the blood donation process work?</h4>
						Donating blood is a simple thing to do, but can make a big difference in the lives of others.
						 The donation process from the time you arrive until the time you leave takes about an hour. 
						 The donation itself is only about 8-10 minutes on average. 


<li>
You will complete donor registration, which includes information such as your name, address, phone number, and donor identification number (if you have one).
You will be asked to show a donor card, driver’s license or two other forms of ID.
Health History and Mini Physical</li>
<li>
You will answer some questions during a private and confidential interview about your health history and the places you have traveled.
You will have your temperature, hemoglobin, blood pressure and pulse checked.
Donation
</li>
We will cleanse an area on your arm and insert a brand–new, sterile needle for the blood draw. This feels like a quick pinch and is over in seconds.
You will have some time to relax while the bag is filling. (For a whole blood donation, it is about 8-10 minutes. If you are donating platelets, red cells or plasma by apheresis the collection can take up to 2 hours.)
When approximately a pint of blood has been collected, the donation is complete and a staff person will place a bandage on your arm. 
Refreshments
<li>
You will spend a few minutes enjoying refreshments to allow your body time to adjust to the slight decrease in fluid volume.
After 10-15 minutes you can then leave the donation site and continue with your normal daily activities.
Enjoy the feeling of accomplishment knowing that you have helped to save lives.
Your gift of blood may help up to three people. Donated red blood cells do not last forever. They have a shelf-life of up to 42 days. A healthy donor may donate every 56 days.
	</li>					
					</div>
				</div>

<div class="col-md-4 col-sm-4">
					<div class="footer-thumb"> 
						<h4 style="color:#8B0000;">How often can I donate blood?</h4>
You must wait at least eight weeks (56 days) between donations of
 whole blood and 16 weeks (112 days) between Power Red donations. 
 Platelet apheresis donors may give every 7 days up to 24 times per year. Regulations are
  different for those giving blood for themselves (autologous donors).			
		<h4 style="color:#8B0000;">Who can donate blood?</h4>
In most states, donors must be age 17 or older. Some states allow donation 
by 16-year-olds with a signed parental consent form. Donors must weigh at least 110 
pounds and be in good health. Additional eligibility criteria apply.		
<h4 style="color:#8B0000;">How long will it take to replenish the pint of blood I donate?</h4>
The plasma from your donation is replaced within about 24 hours. Red cells need about
 four to six weeks for complete replacement. That’s why at least eight weeks are required between whole blood donations.
  		</div>
				</div>


<div class="col-md-4 col-sm-4">
					<div class="footer-thumb"> 
						<h4 style="color:#8B0000;">What should I do after donating blood?</h4>
				<li>	Drink an extra four glasses (eight ounces each) of non-alcoholic liquids.</li>
<li>Keep your bandage on and dry for the next five hours, and do not do heavy exercising or lifting.</li>
<li>If the needle site starts to bleed, raise your arm straight up and press on the site until the bleeding stops.</li>
<li>Because you could experience dizziness or loss of strength, use caution if you plan to do anything that could put 
you or others at risk of harm. For any hazardous occupation or hobby, follow 
applicable safety recommendations regarding your return to these activities following a blood donation.</li>
<li>Eat healthy meals and consider adding iron-rich foods to your regular diet, or discuss taking an
 iron supplement with your health care provider, to replace the iron lost with blood donation.
<li>If you get a bruise:  Apply ice to the area intermittently for 10-15 minutes during the first 24 hours.
 Thereafter, apply warm, moist heat to the area intermittently for 10-15 minutes. A rainbow of colors may occur for about 10 days.</li>
<li>If you get dizzy or lightheaded:  Stop what you are doing, lie down, and raise your feet until the feeling 
passes and you feel well enough to safely resume activities.</li>
<li>And remember to enjoy the feeling of knowing you have helped save lives!</li>
<li>Schedule your next appointment.</li>
					</div>
				</div>


			</div>
		</div>






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