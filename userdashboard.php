<?php
session_start();
if (!isset($_SESSION['email']))
{
  header ("Location:index.php");
}
?>




<?php
  include("admin/functions.php");

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
					<li class="appointment-btn">
						<a class="nav-link" href="http://example.com" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							<i class="fa fa-fw  fa-bell"></i>
				
						<?php
							$query = "SELECT * from `notifications` where `status` = 'unread' order by `date` DESC";
							if(count(fetchAll($query))>0){
							?>
							<span class="badge badge-light"><?php echo count(fetchAll($query)); ?></span>
							<?php
                			}
                    	?>
              			</a>
            <div class="dropdown-menu" aria-labelledby="dropdown01" style="font-size:20px !important; background:#FF3030 !important;">
                <?php
                $query = "SELECT * from `notifications` order by `date` DESC";
                 if(count(fetchAll($query))>0){
                     foreach(fetchAll($query) as $i){
                ?>
              <a style ="
                         <?php
                            if($i['status']=='unread'){
                                echo "font-weight:bold;";
                            }
                         ?>
                         " class="dropdown-item" href="admin/view.php?id=<?php echo $i['id'] ?>">
                <small><i><?php echo date('F j, Y, g:i a',strtotime($i['date'])) ?></i></small><br/>
                  
                </a>
              <div class="dropdown-divider"></div>
                <?php
                     }
                 }else{
                     echo "No Records yet.";
                 }
                     ?>
            </div>

			</li>
					
				</ul>
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