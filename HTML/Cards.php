<?php

// Database connection
include"connection.php";

// Retrieve the id from the URL
$Location = $_REQUEST['Location'];

// Agar koi direct page kholne ki koshish kre toh
if($Location ==NULL)
{
	$Location = 1;
}

if(!isset($_SESSION['user'])){
    header("location:website.php");
}

// Check if the form is submitted
if (isset($_POST['img-upload'])) {
    // Define the directory for uploads
    $uploadDir = __DIR__ . '/flatpics/';

    // Create the directory if it does not exist
    if (!is_dir($uploadDir)) {
        mkdir($uploadDir, 0755, true);
    }

    // Initialize variables
    $uploadedFiles = [];

    // Check if multiple files are being uploaded
    if (is_array($_FILES['uploadimage']['error'])) {
        foreach ($_FILES['uploadimage']['error'] as $index => $error) {
            if ($error === UPLOAD_ERR_OK) {
                $filename = basename($_FILES['uploadimage']['name'][$index]);
                $fileTmpName = $_FILES['uploadimage']['tmp_name'][$index];
                $folder = $uploadDir . $filename;

                // Move the uploaded file to the target directory
                if (move_uploaded_file($fileTmpName, $folder)) {
                    $uploadedFiles[] = $filename;
                }
            }
        }
    } else {
        // Handle single file upload
        if ($_FILES['uploadimage']['error'] === UPLOAD_ERR_OK) {
            $filename = basename($_FILES['uploadimage']['name']);
            $fileTmpName = $_FILES['uploadimage']['tmp_name'];
            $folder = $uploadDir . $filename;

            if (move_uploaded_file($fileTmpName, $folder)) {
                $uploadedFiles[] = $filename;
            }
        }
    }

    // Prepare data for insertion
    $name = $_REQUEST["name"];
    $email = $_REQUEST["email"];
    $pass = $_REQUEST["pass"];

    //user image
    $filename = $_FILES["profileimage"]["name"];
    $tempname = $_FILES["profileimage"]["tmp_name"];
    $folder = "images/" . $filename;
    move_uploaded_file($tempname,$folder);

    $loc = $_POST['loc'];
    $a = strtolower($loc);
    $gender = $_POST["g1"];
    $rent = $_POST['rent'];
    $who = $_POST["who"];
    $amenities= $_POST["amenity"];
    $amenities1= implode(",",$amenities);
    $highlight = $_POST['high'];
    $highlight1 = implode(",", $highlight);
    $image = implode(",", $uploadedFiles);

    // Insert data into the database
    $sql ="insert into flatdata (Name, Email, Password, Profile_img, Location, Looking_for, Rent, Occupancy,Amenities, Flat_photos, Highlights)
            values('$name', '$email', '$pass', '$folder', '$a', '$gender', '$rent', '$who', '$amenities1', '$image', '$highlight1')";

    $res=mysqli_query($conn,$sql);

    if($res) {
        // Success alert
        echo "<script>alert('Your flat is now registered with Flatbuddy')</script>";
        echo '<script>window.location.href = "login2.php";</script>';
    }
    else {
        echo "Error inserting record: ";
    }
}

?>



<!-- -------------------------------Testing------------------------------- -->

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
                        <a href="../HTML/viewprofile.php">View Profile</a>
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
        
    <?php
                $location = mysqli_real_escape_string($conn, $_GET['Location']);
                $query="select * from flatdata where Location = '$location'";
                $res=mysqli_query($conn,$query);
                $check=mysqli_num_rows($res)>0;

                if($res){
                    
                    while($row = mysqli_fetch_assoc($res))
                    {
                        ?>
                       <div class="card">
                       <div class="imgBx">
                           <img src="<?php echo $row["Profile_img"];?>" alt="Person-3">
                       </div>
                       <div class="content">
                           <div class="details">
                               <h2><?php echo $row["Name"];?>  <br><span><i class="fa fa-map-marker"></i>  <?php echo $row["Location"];?>  </span></h2>
                               <div class="data">
                                   <h3><span>Rent</span><br>&#x20B9 <?php echo $row["Rent"];?> </h3>
                                   <h3><span>Looking for</span><br><?php echo $row["Looking_for"];?> </h3>
                               </div>
                               <div class="actionBtn">
                                    <a href="Profile.php?ID=<?php echo $row['ID']; ?>"> <button>Check Now</button></a>
                               </div>
                           </div>
                       </div>
                   </div>
                   <?php
                    }
                }   
            
    ?>

    </div>

</body>

</html>
</body>

</html>


