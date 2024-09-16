<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" type="x-icon" href="../Media/letter-f.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Flat Buddy</title>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../CSS/Sign_up.css">
</head>
<body>
    
<form action="Signup_data.php" method="POST" enctype="multipart/form-data">
        <h1>
            <span>Flat</span><span id="bud">Buddy</span>
        </h1>
        <h2>You are Almost Done!</h2>
        <h4 style="text-align: center;margin-bottom: 20px;">Please fill below details to continue</h4>
        
        <label for="name">Your Name*</label>
        <input type="text" name="name" placeholder="Please enter your name" required><br><br>
        
        <label for="email">Your Email*</label>
        <input type="email" name="email" id="email" placeholder="Please enter your Email" required>
        <span style="color:red" id="availability"></span><br><br>
        
        <label for="pass">Your Password*</label>
        <input type="password" name="pass" placeholder="Please enter your Password" required><br><br>
        
        <label for="who">Who you are*</label>
        <select id="who" name="who" required>
            <option value="buddy">You are looking for Flat/Flatbuddy/PG</option>
            <option value="flat">You are a Flat Owner</option>
            <option value="pg">You are a PG Owner</option>
        </select><br><br>
        
        <label for="gender">Your Gender*</label>
        <input type="radio" id="ma" value="Male" name="g1" checked required>Male
        <input id="fe" type="radio" value="Female" name="g1" required>Female<br><br>
        
        <label for="search">Please select the city where you're searching* </label>
        <select name="search" id="search" required>
            <option value="sel">Select City</option>
            <option value="Ghaziabad">Ghaziabad</option>
            <option value="Delhi">Delhi</option>
            <option value="Gurgaon">Gurgaon</option>
            <option value="Noida">Noida</option>
            <option value="Lucknow">Lucknow</option>
            <option value="Banglore">Banglore</option>
            <option value="Goa">Goa</option>
            <option value="Mumbai">Mumbai</option>
            <option value="Chennai">Chennai</option>
            <option value="Prayagraj">Prayagraj</option>
            <option value="Kanpur">Kanpur</option>
            <option value="Jaipur">Jaipur</option>
            <option value="Thane">Thane</option>
            <option value="Pune">Pune</option>
            <option value="Dehradun">Dehradun</option>
            <option value="Nagpur">Nagpur</option>
            <option value="Hyderabad">Hyderabad</option>
            <option value="Gujarat">Gujarat</option>
            <option value="Indore">Indore</option>
            <option value="Bhopal">Bhopal</option>
            <option value="Surat">Surat</option>
            <option value="Faridabad">Faridabad</option>
            <option value="Rishikesh">Rishikesh</option>
        </select><br><br>
        
        <label for="img">Upload Image/Select Avatar</label>
        <input type="file" name="uploadimage" required>
        
        <h5>--OR--</h5>
        
        <input id="reg" type="submit" value="Register">
        <p id="user">Already a user? <a href="login.php">Login</a></p>
  
    </form>

    <div class="modal" id="email-verification-modal">
        <div class="modal-content">
          <span class="close">&times;</span>
          <form id="v_fom" method="post" action="">
            <label for="email">Enter Your Email:</label>
            <input type="email" id="email" name="email" required autocomplete="off" >
            <button id="m_sent" type="submit" >ENTER</button><span id="v_msg"></span>
          </form>
            <div id="Verify">
                <label for="otp">Enter OTP:</label>
                <input type="text" id="otp" required>
                <button id="m_sub" type="button">Verify</button><span id="v_otp"></span>
            </div>
        </div>
    </div>
    



</body>
</html>

<script>

$(document).ready(function() {
    $('#email').on('blur', function() {
        var email = $(this).val().trim(); // Get and trim the email input

        if (this.checkValidity()) { // Check if the email format is valid
            $.ajax({
                url: 'Signup_data.php',
                method: 'POST',
                data: { action: 'check_email', email: email },
                success: function(data) {
                    if (data.trim() !== '0') { // Email is already registered
                        $('#availability').html('<span style="color: red;">Email Already Registered</span>');
                        $('#reg').attr('disabled', true);
                    } else {
                        $('#availability').empty(); // Clear any previous message
                        $('#reg').attr('disabled', false);
                    }
                },
                error: function() {
                    console.error('AJAX request failed.');
                }
            });
        } else {
            $('#availability').html('<span style="color: red;">Invalid Email Format</span>');
            $('#reg').attr('disabled', true);
        }
    });

    $('#email').on('input', function() {
        if ($(this).val().trim() === '') {
            $('#availability').empty();
            $('#reg').attr('disabled', false);
        }
    });
});




</script>

