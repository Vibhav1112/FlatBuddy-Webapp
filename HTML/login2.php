<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" type="x-icon" href="../Media/letter-f.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FlatBuddy/Log-in</title>
    <style>
        /* Login Style CSS */

        *{
            margin: 0;
            padding: 0;
            font-family: 'Poppins', sans-serif;
            box-sizing: border-box;
        }

        .container{
            width: 40%;
            height: 90vh;
            left: 5%;
            background-image: url(../Media/6134175.jpg) ;
            background-position: center;
            background-size: cover;
            position: relative;
        }

        .form-box{
            width: 60%;
            max-width: 400px;
            position: absolute;
            top: 55%;
            left: 80%;
            transform: translate(85%,-50%);
            background: #f6f5f4;
            padding: 60px 30px 30px;
            text-align: center;
            box-shadow: 0 0 10px #a033fe;
            border-radius: 10%;
        }

        .form-box h1{
            font-size: 30px;
            margin-bottom: 60px;
            color: #A033ff;
            position: relative;
        }

        .form-box h1::after{
            content: '';
            width: 30px;
            height: 4px;
            border-radius: 3px;
            background: #A033ff;
            position: absolute;
            bottom: -12px;
            left: 50%;
            transform: translateX(-50%);
        }

        .input-field{
            background: #eaeaea;
            margin: 15px 0;
            border-radius: 8px;
            display: flex;
            align-items: center;
            max-height: 65px;
            transition: max-height 0.5s;
            overflow: hidden;
        }

        input{
            width: 100%;
            background: transparent;
            border: 0;
            outline: 0;
            padding: 18px 15px;
        }

        .input-field i{
            margin-left: 15px;
            color: black;
        }

        form p{
            text-align: left;
            font-size: 13px;
        }

        form p a{
            text-decoration: none;
            color: #A033ff;
        }

        .btn-field{
            width: 100%;
            display: flex;
            justify-content: space-between;
        }

        .btn-field button{
            flex-basis: 48%;
            background: #A033ff;
            color: white;
            height: 40px;
            border-radius: 20px;
            border: 0;
            outline: 0;
            cursor: pointer;
            /* transition: background 1s; */
        }

        .input-group{
            height: 250px;
        }

        .btn-field button.disable{
            background: #eaeaea;
            color: #555;
        }
    </style>
</head>
<body>


    <div class="container">
        <div class="form-box">
            <h1>Log-in</h1>
            <form action="" method="POST">
                <div class="input-field">
                    <input type="email" name="email" placeholder="Email">
                </div>
                <div class="input-field">
                    <input type="password" name="pass" placeholder="Password">
                </div>
                <div class="btn-field">
                    <button type="submit" name="Login">Login</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>

<?php

include "connection.php";

if(isset($_POST["Login"]))
{
    $email=$_POST["email"];
    $pass=$_POST["pass"];




/*************************************Verifying user login-info******************************/

      $cmd = "Select * from flatdata where Email='$email' and Password='$pass'";
      $result = mysqli_query($conn,$cmd);

      if(mysqli_num_rows($result)>0){

              $p=mysqli_fetch_assoc($result);

              echo "<script>alert('Hey $name Welcome to FlatBuddy')</script>";
              $_SESSION['Login'] = true;
              $_SESSION['email']=$email;
              $_SESSION['user']=$p['Name'];
              $_SESSION['loc']=$p['Location'];
              $_SESSION['pic']=$p['Profile_img'];
              header('location:website.php');
              exit();

        }
       else{
            echo "<script>alert('Wrong login-info')</script>";
        }

}

?>