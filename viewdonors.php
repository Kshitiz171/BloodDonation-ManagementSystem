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
	<script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?key=AIzaSyA1z4ph7k_6ID3vkYnbrrfMyE5Vu0TevCk&sensor=false"></script>
	<script type="text/javascript">
		$(document).ready(function() {





var id="#id";

			var mapCenter = new google.maps.LatLng(27.70169, 85.3206); 
			var map;
	map_initialize(); // initialize google map
	function map_initialize()
	{
		var googleMapOptions = 
		{ 
			center: mapCenter, 
			zoom: 17, 
			maxZoom: 18,
			minZoom: 16,
			zoomControlOptions: {
				style: google.maps.ZoomControlStyle.SMALL 
			},
			scaleControl: true, 
			mapTypeId: google.maps.MapTypeId.ROADMAP 
		};
		
		map = new google.maps.Map(document.getElementById("google_map"), googleMapOptions);			
			//Load Markers from the XML File
			$.get("map_process.php", function (data) {
				$(data).find("marker").each(function () {
					var name 		= $(this).attr('name');
					var bloodtype 	= '<p>'+ $(this).attr('bloodtype') +'</p>';
					var phone 		= $(this).attr('phone');
					var point 	= new google.maps.LatLng(parseFloat($(this).attr('lat')),parseFloat($(this).attr('lng')));
					create_marker(point, name, bloodtype,phone, false, false, false, "icons/pin_blue.png");
				});
			});	
}





function create_marker(MapPos, MapTitle, MapDesc ,MapPhone, InfoOpenDefault, DragAble, Removable, iconPath)
{	  	  		  	
		//new marker
		var marker = new google.maps.Marker({
			position: MapPos,
			map: map,
			draggable:DragAble,
			animation: google.maps.Animation.DROP,
			title:"View Profile!!!",
			icon: iconPath
		});
		
		var contentString = $('<div class="marker-info-win">'+
			'<div class="marker-inner-win"><span class="info-content">'+
			'<h1 class="marker-heading">'+MapTitle+'</h1>'+
			MapDesc+ MapPhone+


			'</span><button name="remove-marker" class="remove-marker" title="Remove Marker">Remove Marker</button>'+
						'</span><a href="makeappoinment.php?id=$row[id]"><button name="remove-marker" class="remove-marker" title="Remove Marker">Make appointment</button></a>'+
			'</div></div>');	

		var infowindow = new google.maps.InfoWindow();
		infowindow.setContent(contentString[0]);

		var removeBtn 	= contentString.find('button.remove-marker')[0];
		var saveBtn 	= contentString.find('button.save-marker')[0];

		google.maps.event.addDomListener(removeBtn, "click", function(event) {
			remove_marker(marker);
		});
		
		if(typeof saveBtn !== 'undefined') 
		{
			
			google.maps.event.addDomListener(saveBtn, "click", function(event) {
				var mReplace = contentString.find('span.info-content'); 
				var mName = contentString.find('input.save-name')[0].value; 
				var mDesc  = contentString.find('input.save-desc')[0].value; 
				var mType = contentString.find('select.save-type')[0].value; 
				
				if(mName =='' || mDesc =='')
				{
					alert("Please enter Name and Description!");
				}else{
					save_marker(marker, mName, mDesc, mType, mReplace); 
				}
			});
		}
		
		google.maps.event.addListener(marker, 'click', function() {
			infowindow.open(map,marker);  
		});

		if(InfoOpenDefault) 
		{
			infowindow.open(map,marker);
		}
	}
	
	function remove_marker(Marker)
	{
		
		if(Marker.getDraggable()) 
		{
			Marker.setMap(null); 
		}
		else
		{
			
			var mLatLang = Marker.getPosition().toUrlValue(); 
			var myData = {del : 'true', latlang : mLatLang}; 
			$.ajax({
				type: "POST",
				url: "map_process.php",
				data: myData,
				success:function(data){
					Marker.setMap(null); 
					alert(data);
				},
				error:function (xhr, ajaxOptions, thrownError){
					alert(thrownError); 
				}
			});
		}

	}
	
	
	function save_marker(Marker, mName, mAddress, mType, replaceWin)
	{
		
		var mLatLang = Marker.getPosition().toUrlValue(); 
		var myData = {name : mName, bloodtype : mAddress, latlang : mLatLang, phone : mType }; 
		console.log(replaceWin);		
		$.ajax({
			type: "POST",
			url: "map_process.php",
			data: myData,
			success:function(data){
				replaceWin.html(data); 
				Marker.setDraggable(false); 
				Marker.setIcon('icons/pin_blue.png'); 
			},
			error:function (xhr, ajaxOptions, thrownError){
				alert(thrownError); 
			}
		});
	}

});
</script>

<style type="text/css">
	h1.heading{padding:0px;margin: 0px 0px 10px 0px;text-align:center;font: 18px Georgia, "Times New Roman", Times, serif;}

	/* width and height of google map */
	#google_map {width: 100%; height: 300px;margin-top:0px;margin-left:auto;margin-right:auto;}

	/* Marker Edit form */
	.marker-edit label{display:block;margin-bottom: 5px;}
	.marker-edit label span {width: 100px;float: left;}
	.marker-edit label input, .marker-edit label select{height: 24px;}
	.marker-edit label textarea{height: 60px;}
	.marker-edit label input, .marker-edit label select, .marker-edit label textarea {width: 60%;margin:0px;padding-left: 5px;border: 1px solid #DDD;border-radius: 3px;}

	/* Marker Info Window */
	h1.marker-heading{color: #585858;margin: 0px;padding: 0px;font: 18px "Trebuchet MS", Arial;border-bottom: 1px dotted #D8D8D8;}
	div.marker-info-win {max-width: 300px;margin-right: -20px;}
	div.marker-info-win p{padding: 0px;margin: 10px 0px 10px 0;}
	div.marker-inner-win{padding: 5px;}
	button.save-marker, button.remove-marker{border: none;background: rgba(0, 0, 0, 0);color: #00F;padding: 0px;text-decoration: underline;margin-right: 10px;cursor: pointer;
	}
</style>


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




	<section id="appointment" data-stellar-background-ratio="3">
		<div class="container">
			<div class="row">

				<div class="col-md-6 col-sm-6">
					




					<h1 class="heading">My Google Map</h1>
					<div align="center">Right Click to Drop a New Marker</div>

    					<div id="google_map"></div>

				</div>
<div class="container">
			<div class="row">

				<div class="col-md-4 col-sm-4">
					<div class="footer-thumb"> 
						<h4 class="wow fadeInUp" data-wow-delay="0.4s">Search Donor from nearby Location.</h4>
						<li>Here, Blue marker represents location of Donor.</li>
						<li>Search Location conveniently.</li>
						<li>CLick on the Marker.</li>
						<li>Make an appointment.</li>
						
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