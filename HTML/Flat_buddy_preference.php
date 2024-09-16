<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" type="x-icon" href="../Media/letter-f.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../CSS/Preference.css">
    <script src="../Javascript/preference.js"></script>
    <title>Flat Buddy</title>

</head>
<body>

<form action="Cards.php" method="post" enctype="multipart/form-data">
    <h1 style="margin-top :-8px;">
    <span>Flat</span><span id="bud">Buddy</span></h1>
    <h2>Hey! you can add your flat here</h2><br><br>
        <label for="name">Your Name*</label>
        <input type="text" name="name" placeholder="Please enter your name" required><br><br>
        <label for="email">Your Email*</label>
        <input type="email" name="email" placeholder="Please enter your Email" required><br><br>
        <label for="pass">Your Password*</label>
        <input type="password" name="pass" placeholder="Please enter your Password" required><br><br>
        <label for="img">Upload Image/Select Avatar</label>
        <input type="file" name="profileimage"><br><br><br>
        <label id="iam" for="loc">Add Your Location*</label>
        <input type="text" name="loc" placeholder="Add Location..." required><br><br>
        <label for="gender">Looking For*</label>
        <input type="radio" id="ma" value="Male" name="g1" checked required>Male
        <input id="fe" type="radio" value="Female" name="g1" required>Female
        <input id="any" type="radio" value="Any" name="g1" required>Any<br><br>
        <label for="rent">Approx Rent*</label>
        <input type="text" name="rent" placeholder="&#8377; 5000" required><br><br>
        <label for="who">Occupancy*</label>
        <select id="who" name="who" required>
            <option value="Single">Single</option>
            <option value="Shared">Shared</option>
            <option value="Any">Any</option>
        </select><br><br>
        <label for="pre">Amenities available*</label><br><br>
        <div class="pref">
        <label>
            <input type="checkbox" name="amenity[]" value="wifi">
            <img src="../Media/wifi.png" alt="Wi-Fi">
            <span>Wi-Fi</span>
        </label>
        <label>
            <input type="checkbox" name="amenity[]" value="washing">
            <img src="../Media/washing-machine.png" alt="Wi-Fi">
            <span>Washing Machine</span>
        </label>
        <label>
            <input type="checkbox" name="amenity[]" value="cooking">
            <img src="../Media/cooking-tools.png" alt="Wi-Fi">
            <span>Kitchen</span>
        </label>
        <label>
            <input type="checkbox" name="amenity[]" value="fridge">
            <img src="../Media/fridge.png" alt="Wi-Fi">
            <span>Fridge</span>
        </label>
        <label>
            <input type="checkbox" name="amenity[]" value="parking">
            <img src="../Media/parking-lot.png" alt="Wi-Fi">
            <span>Parking</span>
        </label>
        <label>
            <input type="checkbox" name="amenity[]" value="tv">
            <img src="../Media/tv.png" alt="Wi-Fi">
            <span>TV</span>
        </label>
        <label>
            <input type="checkbox" name="amenity[]" value="study">
            <img src="../Media/study.png" alt="Wi-Fi">
            <span>Study</span>
        </label>
        </div>

        <label id="upd" for="img">Upload Images of your flat*</label><br>
        <div class="drop-area" id="drop-area">
            <p>Drag & drop images here or click to select files</p>
            <input type="file" name="uploadimage[]" id="uploadimage" multiple>

        </div><br><br>

        <label for="pre">Choose Highlights for your flat*</label><br>
        <div class="high">
            <div class="highlight-option">
                <label for="hl1">Gym nearby</label>
                <input type="checkbox" value="Gym" name="high[]" id="hl1">
            </div>
            <div class="highlight-option">
                <label for="hl2">Park nearby</label>
                <input type="checkbox" value="Park" name="high[]" id="hl2">
            </div>
            <div class="highlight-option">
                <label for="hl3">School nearby</label>
                <input type="checkbox" value="School" name="high[]" id="hl3">
            </div>
            <div class="highlight-option">
                <label for="hl4">Public transport</label>
                <input type="checkbox" value="Public-Transport" name="high[]" id="hl4">
            </div>
            <div class="highlight-option">
                <label for="hl5">Grocery store</label>
                <input type="checkbox" value="Grocery-Store" name="high[]" id="hl5">
            </div>
            <div class="highlight-option">
                <label for="hl6">Quiet area</label>
                <input type="checkbox" value="Ouiet-Area" name="high[]" id="hl6">
            </div>
            <div class="highlight-option">
                <label for="hl7">Pet-friendly</label>
                <input type="checkbox" value="Pet-Friendly" name="high[]" id="hl7">
            </div>
            <div class="highlight-option">
                <label for="hl8">Swimming pool</label>
                <input type="checkbox" value="Swimming-Pool" name="high[]" id="hl8">
            </div>
        </div><br><br>

        <input type="submit" name="img-upload" value="Upload">
        <p id="user">Already a user? <a href="login2.php">Login</a></p>
</form>


</body>
</html>