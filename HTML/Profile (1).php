


<!DOCTYPE html>
<html>
<head>
	<title>Flat Buddy</title>
	<link rel="shortcut icon" type="x-icon" href="../Media/letter-f.png">
	<link rel="stylesheet" type="text/css" href="../CSS/Profile.css">
	<link rel="https://fontawesome.com/icons/phone?f=classic&s=regular">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	
</head>
<body>

	<body>
		<div class="nav flex">
			<div class="logo-box">
				<h2>Flat Buddy</h2>
	
			</div>
			<div class="menu" id="menus">
				<ul class="flex">
					<li>Home</li>
					<li>Contact Us</li>
				</ul>
			</div>
			<div class="btn-box flex">
				<li class="voilet"><a href="../HTML/login.php"> Get Started</a></li>
			</div>
			<span class="toggle-btn" onclick="toggle()">&#9776</span>
		</div>
	
		<!-- Nav bar -->
		<script type="text/javascript">
			window.addEventListener("scroll", function (){
				var header = document.querySelector("header");
				Header.classlist.toggle("sticky", window.scrollY > 0);
			});
		</script>


	<div class="container">
		<div class="header">
			<h1>Flat Profile</h1>
		</div>
		<div class="profile-pic">
			<img src="../Media/Girl 1.jpg" alt="Profile Picture">
			<h2>Florence Pugh</h2>

            <button class="button-69" role="button">Call</button>
			<div class="vl"></div>
            <button class="button-70" role="button">Chat</button>


        </div>
		<div class="flats">
			<h2>Location</h2>
			<span class="fa fa-map-marker info-icon"> New York, USA</span><br>
			<hr style="height:3px;border-width:0;color: #f3f4f6;;background-color:#f3f4f6; margin: 30px 13px 5px;">
            <h2>Basic Info</h2>
            <div class="info">
				<h5>Gender</h5>
				<h5>Approx rent</h5>
				<h5>Occupancy</h5>
				<h5>Looking For</h5>
			</div>
			<div class="info-ans" >
				<h4>&#9792 Female</h4>
				<h4>&#8377 10000</h4>
				<h4>Single</h4>
				<h4>Female</h4>
			</div>
			<hr style="height:3px;border-width:0;color: #f3f4f6;;background-color:#f3f4f6; margin: 42px 13px 0px;">
			<section class="carsousel">
				<h2>Flat Pictures</h2>
				<div class="slider-wrapper">
					<div class="slider">
						<img id="slide-1" src="../Media/Bed1.jpg" alt="Bedroom">
						<img id="slide-2" src="../Media/Balcony.jpg" alt="Balcony View">
						<img id="slide-3" src="../Media/Bathroom1.jpg" alt="Bathroom">
					</div>
					<div class="slider-nav">
						<a href="#slide-1"></a>
						<a href="#slide-2"></a>
						<a href="#slide-3"></a>
					</div>
				</div>
			</section>
			
		</div>
	</div>
</body>
</html>
