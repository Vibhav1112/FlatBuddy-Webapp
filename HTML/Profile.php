<?php

// Database connection
include"connection.php";

// Retrieve the id from the URL
$ID = $_GET['ID'];

// Agar koi direct page kholne ki koshish kre toh
if($ID ==NULL)
{
	$ID = 1;
}

?>

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
		   <h2><a id="tex" href="../HTML/website.php">Flat Buddy</a></h2>

        </div>
        <div class="menu" id="menus">
            <ul class="flex">
                <?php
                if(isset($_SESSION['user'])){?>
                    <li><a id="fla" href="flat_owner.php">Add Flat</a></li><?php
                }
                ?>
                
                <!-- <li> <a id="fla" href="../HTML/Cards.php"> Flats</a></li> -->
                <li><a id="fla" href="../Media/404error.jpg">Contact Us</a></li>
                <?php
                if(isset($_SESSION['user'])){?>

                    <div class="profile-container">
                    <img class="profile-image" id="userimg" src="<?php echo $_SESSION['pic']; ?>" alt="Profile_picture">
                    <div class="profile-popup">
                        <i><?php echo $_SESSION['user'];?></i>
                        <a href="../HTML/viewprofile.php">View Profile</a>
                        <a href="logout.php"><i class="fa fa-sign-out"></i>Logout</a>
                    </div>
                </div><?php
                }else{
                    echo "<a id='fla' href='choice.php'> Get started</a>";
                } ?>

            </ul>
        </div>
    </div>
	
		<!-- Nav bar -->
		<script type="text/javascript">
			window.addEventListener("scroll", function (){
				var header = document.querySelector("header");
				Header.classlist.toggle("sticky", window.scrollY > 0);
			});
		</script>

<?php
                $query="select * from flatdata where ID = $ID";
                $res=mysqli_query($conn,$query);
                $check=mysqli_num_rows($res)>0;

                if($res){
                    
                    while($row = mysqli_fetch_assoc($res))
                    {
                        ?>
                       <div class="container">
		<div class="header">
			<h1>Flat Profile</h1>
		</div>
		<div class="profile-pic">
			<img src="<?php echo $row["Profile_img"];?>" alt="Profile Picture">
			<h2><?php echo $row["Name"];?></h2>

            <a href="../Media/404error.jpg"><button class="button-69" role="button">Call</button></a>
			<div class="vl"></div>
            <a href="../Media/404error.jpg"><button class="button-70" role="button">Chat</button></a>


        </div>
		<div class="flats">
			<h2>Location</h2>
			<span class="fa fa-map-marker info-icon"><span id="location_name"><?php echo $row["Location"];?></span></span><br>
			<hr style="height:3px;border-width:0;color: #f3f4f6;;background-color:#f3f4f6; margin: 30px 13px 5px;">
            <h2>Basic Info</h2>
            <div class="info">
				<h5>Approx rent</h5>
				<h5>Occupancy</h5>
				<h5>Looking For</h5>
			</div>
			<div class="info-ans" >
				<h4>&#8377 <?php echo $row["Rent"];?></h4>
				<h4><?php echo $row["Occupancy"];?></h4>
				<h4><?php echo $row["Looking_for"];?></h4>
			</div>
			<hr style="height:3px;border-width:0;color: #f3f4f6;;background-color:#f3f4f6; margin: 42px 13px 0px;">
			<section class="carsousel">
				<h2>Flat Pictures</h2>
				<div class="slider-wrapper">
						<!-- changes from here -->
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
						<!-- changes till here -->

				</div>
			</section>
			
		</div>
	</div>
                   <?php
                    }
                }   
            
    ?>

	
</body>
</html>
