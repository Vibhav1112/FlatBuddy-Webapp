<?php
include "connection.php";
if(!isset($_SESSION['user'])){
    header("location:website.php");
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" type="x-icon" href="../Media/letter-f.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Flat Buddy</title>
    <link rel="stylesheet" href="../CSS/Cards.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
        <script src="../HTML/cards.js"></script>
</head>

<body>

    <!-- Nav bar -->

    <div class="nav flex">
        <div class="logo-box">
            <h2><a id="tex" href="../HTML/website.php">Flat Buddy</a></h2>

        </div>
        <div class="menu" id="menus">
            <ul class="flex">
            <li><a id="fla" href="../Media/404error.jpg">FAQs</a></li>
                <li><a id="fla" href="flat_owner.php">Add Flat</a></li>
                <li><a id="fla" href="../Media/404error.jpg">Contact Us</a></li>
            </ul>
        </div>

        <div class="btn-box flex">
            <?php
            if(isset($_SESSION['user'])) { ?>

                <div class="profile-container">
                    <img id="userimg" src="<?php echo $_SESSION['pic']; ?>" alt="Profile_picture">
                    <div class="profile-popup">
                        <i><?php echo $_SESSION['user'];?></i>
                        <a href="#view-profile">View Profile</a>
                        <a href="logout.php"><i class="fa fa-sign-out"></i>Logout</a>
                    </div>
                <?php }?>

        </div>
        <span class="toggle-btn" onclick="toggle()">&#9776</span>
    </div>

    <script type="text/javascript">
        window.addEventListener("scroll", function () {
            var header = document.querySelector("header");
            Header.classlist.toggle("sticky", window.scrollY > 0);
        });
    </script>

    <!-- Cards -->

    <div class="cardsection">
        <div class="card">
            <div class="imgBx">
                <img src="../Media/Girl 1.jpg" alt="Person-1">
            </div>
            <div class="content">
                <div class="details">
                <?php
                $query="select * from flatdata";
                $res=mysqli_query($conn,$query);
                $check=mysqli_num_rows($res)>0;

                if($res){
                    while($row = mysqli_fetch_assoc($res)){?>
                       
                       <?php
                       echo $row['name'];
                    }
                }
            
            ?><div class="actionBtn">
            <a href="../HTML/Profile(2).php"><button>Check Now</button></a>
        </div>
                </div>
            </div>
        </div>

        <!-- <div class="card">
            <div class="imgBx">
                <img src="../Media/Girl 2.jpg" alt="Person-2">
            </div>
            <div class="content">
                <div class="details">
                    <h2>Isabella <br><span><i class="fa fa-map-marker"></i> New York, USA</span></h2>
                    <div class="data">
                        <h3><span>Rent</span><br>&#x20B9 9000 </h3>
                        <h3><span>Looking for</span><br>Female </h3>
                    </div>
                    <div class="actionBtn">
                        <a href="../HTML/Profile(2).php"><button>Check Now</button></a>
                    </div>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="imgBx">
                <img src="../Media/Girl 3.jpg" alt="Person-3">
            </div>
            <div class="content">
                <div class="details">
                    <h2>Elena<br><span><i class="fa fa-map-marker"></i> New York, USA</span></h2>
                    <div class="data">
                        <h3><span>Rent</span><br>&#x20B9 15000 </h3>
                        <h3><span>Looking for</span><br>Female </h3>
                    </div>
                    <div class="actionBtn">
                        <a href="../HTML/Profile(3).php"><button>Check Now</button></a>
                    </div>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="imgBx">
                <img src="../Media/Boy 1.jpg" alt="Person-4">
            </div>
            <div class="content">
                <div class="details">
                    <h2>Jacob<br><span><i class="fa fa-map-marker"></i> New York, USA</span></h2>
                    <div class="data">
                        <h3><span>Rent</span><br>&#x20B9 10000 </h3>
                        <h3><span>Looking for</span><br>Boys</h3>
                    </div>
                    <div class="actionBtn">
                        <button>Check Now</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="imgBx">
                <img src="../Media/Boy 2.jpg" alt="Person-1">
            </div>
            <div class="content">
                <div class="details">
                    <h2>Caleb<br><span><i class="fa fa-map-marker"></i> New York, USA</span></h2>
                    <div class="data">
                        <h3><span>Rent</span><br>&#x20B9 10000 </h3>
                        <h3><span>Looking for</span><br>Any</h3>
                    </div>
                    <div class="actionBtn">
                        <button>Check Now</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="imgBx">
                <img src="../Media/Boy 3.jpg" alt="Person-1">
            </div>
            <div class="content">
                <div class="details">
                    <h2>Baylen<br><span><i class="fa fa-map-marker"></i> New York, USA</span></h2>
                    <div class="data">
                        <h3><span>Rent</span><br>&#x20B9 15000 </h3>
                        <h3><span>Looking for</span><br>Female </h3>
                    </div>
                    <div class="actionBtn">
                        <button>Check Now</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="imgBx">
                <img src="../Media/Boy4.jpg" alt="Person-1">
            </div>
            <div class="content">
                <div class="details">
                    <h2>Henrik<br><span><i class="fa fa-map-marker"></i> New York, USA</span></h2>
                    <div class="data">
                        <h3><span>Rent</span><br>&#x20B9 15000 </h3>
                        <h3><span>Looking for</span><br>Female </h3>
                    </div>
                    <div class="actionBtn">
                        <button>Check Now</button>
                    </div>
                </div>
            </div>
        </div> -->

    </div>

</body>

</html>
</body>

</html>