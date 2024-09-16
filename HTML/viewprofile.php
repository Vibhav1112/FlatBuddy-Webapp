<?php

include"connection.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" type="x-icon" href="../Media/letter-f.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../CSS/viewprofile.css">
</head>
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
                        <i><?php echo $_SESSION['user']; ?></i>
                        <a href="../HTML/viewprofile.php">View Profile</a>
                        <a href="logout.php"><i class="fa fa-sign-out"></i>Logout</a>
                    </div>
                </div>
                <?php
                } ?>

            </ul>
        </div>
    </div>

    <div class="userprofile">
        <h1>Your Profile</h1>
        <div class="profile-details">
            <?php if(isset($_SESSION['user'])and isset($_SESSION['email'])){?>
                    <label id="inp" for="name">Name&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<span><input type="text" name="name" type="text"  value="<?php echo $_SESSION['user']; ?>"></label</span><br><br><br>
                    <label id="inp" for="email">Email&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<span><input type="email" name="email" value="<?php echo $_SESSION['email']; ?>"></label</span><br><br><br>
                    <label id="inp" for="loc">Location&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<span><input type="text" name="loc" value="<?php echo ucwords($_SESSION['loc']); ?>"></label</span><br><br>
        </div>
           <?php }?>
    </div>
</body>
</html>
