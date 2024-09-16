<?php

include "connection.php";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" type="x-icon" href="../Media/letter-f.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Flat Buddy</title>
    <script src="../Javascript/script.js"></script>
    <link rel="stylesheet" href="../CSS/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

</head>

<body>
    <div class="nav flex">
        <div class="logo-box">
            <h2>Flat Buddy</h2>

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


    <div class="two-section flex inner">
        <div class="left">
            <h1>Find Your<span class="cy"><br>
                    Flat Buddy</span></h1>
            <div class="search lux-shadow flex">
                <i class="fa fa-map-marker icon"></i>
                <input id="city" type="text" class="s-btn" placeholder="Search Location">
                <div class="search-btn">Search</div><div id="searchresult"></div>
                
                <script>
                    $(document).ready(function(){
                        $('#city').keyup(function(){
                            var input=$(this).val();
                            // alert(input);
                            if(input !=""){
                                $.ajax({
                                    url:"livesearch.php",
                                    method:"POST",
                                    data:{input:input},
                                    success:function(data){
                                        $("#searchresult").html(data);
                                        
                                    }
                                });
                            }
                            else{
                                $("#seaarchresult").css("display","none");
                                $("#searchresult").text('');
                            }
                        });
                    });
                </script>
            </div>
        </div>
    </div>
    <div class="hero-image">

        <div class="hero-image-info flex">
            <div class="info flex">
                <i class="fa fa-phone info-icon"></i>
                <p>(000)-212-456-7890</p>
            </div>
            <div class="info flex">
                <span class="fa fa-map-marker info-icon"></span>
                <p>New Delhi, India</p>
            </div>
        </div>
        <img src="../Media/2650152.jpg" class="bgimg" alt="Background Image vector art">
    </div>
    </div>

    <!--  Cities section  -->


    <div class="city">
        <h1>View rooms in <span class="cy">Popular Cities</span></h1>

    </div>

    <div class="card">

        <img src="../Media/Delhi.jpg" alt="Delhi">

        <div class="card-details">
            <a href="/index.html">
                <p data-delhi='delhi' class="text-title">Delhi</p>
            </a>

        </div>

    </div>

    <div class="card">

        <img src="../Media/Gateway Of India.jpg" alt="Mumbai">

        <div class="card-details">
            <a href="/index.html">
                <p class="text-title">Mumbai</p>
            </a>

        </div>

    </div>

    <div class="card">

        <img src="../Media/Banglore.jpg" alt="Banglore">

        <div class="card-details">
            <a href="/index.html">
                <p class="text-title">Banglore</p>
            </a>

        </div>

    </div>

    <div class="card">

        <img src="../Media/Noida.jpg" alt="Noida">

        <div class="card-details">
            <a href="/index.html">
                <p class="text-title">Noida</p>
            </a>

        </div>

    </div>

    <div class="card">

        <img src="../Media/Gurgaon.jpg" alt="Gurgaon">

        <div class="card-details">
            <a href="/index.html">
                <p class="text-title">Gurgaon</p>
            </a>

        </div>

    </div>

    <div class="card">

        <img src="../Media/Pune.jpg" alt="Pune">

        <div class="card-details">
            <a href="/index.html">
                <p class="text-title">Pune</p>
            </a>

        </div>

    </div>

    <div class="card">

        <img src="../Media/Kolkata.jpg" alt="Kolkata">

        <div class="card-details">
            <a href="/index.html">
                <p class="text-title">Kolkata</p>
            </a>

        </div>

    </div>

    <div class="card">

        <img src="../Media/Chandigarh.jpg" alt="Chandigarh">

        <div class="card-details">
            <a href="/index.html">
                <p class="text-title">Chandigarh</p>
            </a>

        </div>

    </div>





    <!--  Flats  -->

    <div class="apartments">
        <div class="inner">
            <div class="text">
                <h1>More than 80+ <span class="cy">
                        Flats for Sharing</span></h1>
            </div>
        </div>
        <div class="flat-box flex">
            <div class="images">
                <img src="../Media/Flat inner8.jpg" height="200px" alt="Flat image">
                <div class="details">
                    <h4>Random Street apartment, S-359,New York</h4>
                    <div class="price flex">
                        <div class="p-left">
                            <h3>$2500</h3>
                        </div>
                        <div class="p-right">
                            <span class="fa fa-shower facility">
                                <h4>2 BA</h4>
                            </span>
                            <span class="fa fa-car facility">
                                <h4>2 BD</h4>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="images">
                <img src="../Media/Flat inner9.jpg" height="200px" alt="Flat image">
                <div class="details">
                    <h4>Random Street apartment, S-359,New York</h4>
                    <div class="price flex">
                        <div class="p-left">
                            <h3>$2500</h3>
                        </div>
                        <div class="p-right">
                            <span class="fa fa-shower facility">
                                <h4>2 BA</h4>
                            </span>
                            <span class="fa fa-car facility">
                                <h4>2 BD</h4>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="images">
                <img src="../Media/Flat inner1.jpg" height="200px" alt="Flat image">
                <div class="details">
                    <h4>Random Street apartment, S-359,New York</h4>
                    <div class="price flex">
                        <div class="p-left">
                            <h3>$2500</h3>
                        </div>
                        <div class="p-right">
                            <span class="fa fa-shower facility">
                                <h4>2 BA</h4>
                            </span>
                            <span class="fa fa-car facility">
                                <h4>2 BD</h4>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="images">
                <img src="../Media/Flat inner11.jpg" height="200px" alt="Flat image">
                <div class="details">
                    <h4>Random Street apartment, S-359,New York</h4>
                    <div class="price flex">
                        <div class="p-left">
                            <h3>$2500</h3>
                        </div>
                        <div class="p-right">
                            <span class="fa fa-shower facility">
                                <h4>2 BA</h4>
                            </span>
                            <span class="fa fa-car facility">
                                <h4>2 BD</h4>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="images">
                <img src="../Media/Flat inner3.jpg" height="200px" alt="Flat image">
                <div class="details">
                    <h4>Random Street apartment, S-359,New York</h4>
                    <div class="price flex">
                        <div class="p-left">
                            <h3>$2500</h3>
                        </div>
                        <div class="p-right">
                            <span class="fa fa-shower facility">
                                <h4>2 BA</h4>
                            </span>
                            <span class="fa fa-car facility">
                                <h4>2 BD</h4>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="images">
                <img src="../Media/Flat inner4.jpg" height="200px" alt="Flat image">
                <div class="details">
                    <h4>Random Street apartment, S-359,New York</h4>
                    <div class="price flex">
                        <div class="p-left">
                            <h3>$2500</h3>
                        </div>
                        <div class="p-right">
                            <span class="fa fa-shower facility">
                                <h4>2 BA</h4>
                            </span>
                            <span class="fa fa-car facility">
                                <h4>2 BD</h4>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="search-part flex">
                <div class="search-box flex">
                    <h4 class="search-text">
                        <span class="fa fa-search sar"></span>Search Location
                    </h4>
                    <button class="sar-btn">Search</button>
                </div>
                <div class="view">
                    <button><a href="../HTML/Cards.html">View All Flats</a></button>
                </div>
            </div>
        </div>
    </div>

    <script src="js/script.js"></script>

    <footer class="footer-distributed">

        <div class="footer-left">

            <h3>Flat<span>Buddy</span></h3>

            <p class="footer-links">
                <a href="#" class="link-1">Home</a>

                <a href="#">Blog</a>

                <a href="#">Pricing</a>

                <a href="#">About</a>

                <a href="#">Faq</a>

                <a href="#">Contact</a>
            </p>

            <p class="footer-company-name">Flat Buddy © 2023</p>
        </div>

        <div class="footer-center">

            <div>
                <i class="fa fa-map-marker"></i>
                <p><span>444 S. Cedros Ave</span> Solana Beach, California</p>
            </div>

            <div>
                <i class="fa fa-phone"></i>
                <p>+1.555.555.5555</p>
            </div>

            <div>
                <i class="fa fa-envelope"></i>
                <p><a href="mailto:support@company.com">support@flatbuddy.com</a></p>
            </div>

        </div>

        <div class="footer-right">

            <p class="footer-company-about">
                <span>About the company</span>
                Lorem ipsum dolor sit amet, consectateur adispicing elit. Fusce euismod convallis velit, eu auctor lacus
                vehicula sit amet.
            </p>

            <div class="footer-icons">

                <a href="#"><i class="fa fa-facebook"></i></a>
                <a href="#"><i class="fa fa-twitter"></i></a>
                <a href="#"><i class="fa fa-linkedin"></i></a>
                <a href="#"><i class="fa fa-instagram"></i></a>

            </div>

        </div>

    </footer>

</body>

</html>