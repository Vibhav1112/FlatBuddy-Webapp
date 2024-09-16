<?php

include "connection.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['action']) && $_POST['action'] === 'check_email') {
        // Handle AJAX request to check for email uniqueness
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $query = "SELECT COUNT(*) FROM login WHERE Email='$email'";
        $result = mysqli_query($conn, $query);
        $row = mysqli_fetch_array($result);
        echo $row[0];
        exit; // Exit after handling the AJAX request
    }

    // Handle form submission
    if (isset($_POST["name"], $_POST["email"], $_POST["pass"], $_POST["who"], $_POST["g1"], $_POST["search"])) {
        $name = $_POST["name"];
        $email = $_POST["email"];
        $pass = $_POST["pass"];
        $who = $_POST["who"];
        $gender = $_POST["g1"];
        $state = $_POST["search"];

        // Check if email already exists
        $email_check_query = "SELECT COUNT(*) FROM login WHERE Email='$email'";
        $result = mysqli_query($conn, $email_check_query);
        $row = mysqli_fetch_array($result);

        if ($row[0] > 0) {
            echo "Email already registered";
        } else {
            // Proceed with file upload
            $filename = $_FILES["uploadimage"]["name"];
            $tempname = $_FILES["uploadimage"]["tmp_name"];
            $folder = "images/" . $filename;
            move_uploaded_file($tempname, $folder);

            // Insert new record into the database
            $sql = "INSERT INTO login (Name, Email, Password, User_Type, Gender, City, Profile_Picture) VALUES ('$name', '$email', '$pass', '$who', '$gender', '$state', '$folder')";
            $res = mysqli_query($conn, $sql);

             if ($res) {
                 echo "<script>alert('Registration Successful')</script>";
                 echo '<script>window.location.href = "login.php";</script>';
                } 
            else {
                 echo "Error: " . mysqli_error($conn);
            }
        }
    }
    
    $conn->close();
}
?>
