<?php

include "connection.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" type="x-icon" href="../Media/letter-f.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Flat Buddy</title>
    <link rel="stylesheet" href="../CSS/flat_owner.css">
</head>
<body>
    <div class="container">
        <aside class="sidebar">
            <div class="brand">
                <h2>Flat Owner</h2>
                <h3><?php
                if(isset($_SESSION['user'])){?>
                <img id="userimg" src="<?php echo $_SESSION['pic']; ?>" alt="Profile_picture"><br><br><?php
                    echo $_SESSION['user'];
                }
                ?></h3>
            </div>
        </aside>
        <main class="main-content">
            <header class="header">
                <h1>Manage Flats</h1>
                <nav class="navigation">
                    <ul>
                        <li><a href="website.php">Home</a></li>
                        <li><a href="Flat_buddy_preference.php">Add New Flat</a></li>
                        <li><a href="#">Notifications</a></li>
                        <li><a href="logout.php"><i class="fa fa-sign-out"></i>Logout</a></li>
                    </ul>
                </nav>
            </header>
            <section class="content">
                <div class="card">
                    <h2>Flat 101</h2>
                    <p>Status: Available</p>
                    <button>View Details</button>
                </div>
                <div class="card">
                    <h2>Flat 102</h2>
                    <p>Status: Occupied</p>
                    <button>View Details</button>
                </div>
                <div class="card">
                    <h2>Flat 103</h2>
                    <p>Status: Maintenance</p>
                    <button>View Details</button>
                </div>
                <!-- Add more flats as needed -->
            </section>
        </main>
    </div>
</body>
</html>
