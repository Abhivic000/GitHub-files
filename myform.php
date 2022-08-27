<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HTML</title>
    <!-- add icon link -->
    <!-- <link rel="stylesheet" href="44_CS&E_Abhishek_Singh.css"> -->


    <link rel="icon" href="https://www.freeiconspng.com/thumbs/fitness-icon-png/gym-icon-png-kansas-city-5.png"
        type="image/x-icon">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bona+Nova:wght@700&family=Open+Sans:wght@300&display=swap"
        rel="stylesheet">
    <script src="https://kit.fontawesome.com/37d8fb3c7f.js" crossorigin="anonymous"></script>
</head>

<body>
    <!-- <form action="backend.php" method="post"> -->
        <form method="post">
        <h1>Register Now!</h1>
        <div id=icons>
            <a target="blank" href="https://accounts.google.com/Login"><img class=social-icon
                    src="http://pluspng.com/img-png/google-logo-png-open-2000.png" alt="Google" /></a>
            <a target="blank" href="https://www.facebook.com/login.php"><img class=social-icon
                    src="https://cdn4.iconfinder.com/data/icons/social-media-icons-the-circle-set/48/facebook_circle-512.png"
                    alt="Facebook" /></a>
            <a target="blank" href="https://github.com/"><img class=social-icon
                    src="https://cdn3.iconfinder.com/data/icons/social-rounded-2/72/GitHub-1024.png" alt="Github" /></a>
            <a target="blank"
                href="https://www.linkedin.com/login?fromSignIn=true&trk=guest_homepage-basic_nav-header-signin"><img
                    class=social-icon
                    src="https://cdn4.iconfinder.com/data/icons/social-media-icons-the-circle-set/48/linkedin_circle-512.png"
                    alt="Linkedin" /></a>

        </div>
        <!-- <div>
            <img src="https://images.pexels.com/photos/1552252/pexels-photo-1552252.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" width="100vw" alt="">
        </div> -->
        <div id=input-container>
            <div>
                <h3>UserName</h3>
                <input type="text" pattern="[a-zA-z]+" required name="username" placeholder="Enter Your User Name"
                    class="input-box">
            </div>
            <div>
                <h3>Enter Your Date Of Birth</h3>
                <input type="date" name="myDate" min='1899-01-01' max='2022-12-30' required placeholder="ENTER YOUR DOB"
                    class="input-box">
            </div>

            <div>
                <h3>Email</h3>
                <input type="email" required name="email" placeholder="Email" class="input-box">
            </div>

            <div>
                <h3>Password</h3>
                <input type="password" required name="password" placeholder="Password" class="input-box">
            </div>

            <div>
                <h3>Confirm Password</h3>
                <input type="password" name="password" required placeholder="Confirm Password" class="input-box">
            </div>

             <input type="submit" id="btn-submit" value="Register"> 
            <!-- <a href="#" class="blue" ><span><input type="submit" name="submit"></span><i><i></a><br><br> -->
        </div>

    </form>

</body>
<!-- //CSS AFTER THIS -->
<style>
    body {

        background: url(https://img.freepik.com/free-photo/portrait-young-sportive-girl-training-with-dumbbells-isolated-blue-background-neon_155003-45614.jpg?w=1060&t=st=1660228083~exp=1660228683~hmac=aacd0425f48039a7f30aacebb1ea86413456a5d25bc2d62d9b541ecdc09e8d09) fixed;
        background-size: cover;
        background-position: center;
        background-attachment: fixed;
    }

    h1 {
        display: flex;
        font-size: 32px;
        Padding-Top: 56px;
        Padding-Bottom: 12px;
        align-items: center;
        justify-content: center;
        font-family:Arial, Helvetica, sans-serif;
        color: black;
    }

    #icons {
        display: flex;
        align-items: center;
        justify-content: center;
        background-color: #456dc5;
        padding: 0px 122px;
        padding-top: 8px;
    }

    .social-icon {
        width: 50px;
        height: 50px;
        padding-top: 16px;
        padding-bottom: 16px;
        padding-left: 32px;
        padding-right: 32px;
        background-color: #456dc5;
    }

    form {
        background-color: white;
        width: 700px;
        margin-left: 200px;
        margin-right: auto;
        border: 0px solid #456dc5;
        border-bottom-left-radius: 42px;
        border-top-left-radius: 3px;
        border-bottom-right-radius: 3px;
        border-top-right-radius: 42px;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
    }

    .input-box {
        font-size: 18px;
        padding-bottom: 1px;
        margin-bottom: 26px;
        border: 0;
        border-bottom: 1px solid #ccc;
        width: 100%;
    }

    #input-container {
        padding-top: 26px;
        padding-bottom: 40px;
        padding-left: 80px;
        padding-right: 80px;
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
    }

    #btn-submit {
        display: flexbox;
        align-items: center;
        justify-content: center;
        background-color:rgb(68, 49, 23) ;
        padding-top: 12px;
        padding-bottom: 12px;
        padding-left: 24px;
        padding-right: 24px;
        font-size: 18px;
        color: white;
        border: none;
    }

    #btn-submit:hover {
        color:#456dc5;
    }

    @media (max-width:100%) {
        /* body {
            display: block;
        } */

        form {
            height: 100%;
        }

        .full-size {
            height: 100vh;
        }
    }
</style>

</html>

<?php

if($_POST){   
$servername = "localhost";
$username = "root";
$password = "";
$database = "web dev";

$conn = new mysqli($servername, $username, $password,$database);

if ($conn->connect_error) {
 echo "Connection Failed<br>";
}
else{
    echo "Connection Successfull<br>";
}

$DATE=date( 'Y-m-d');

 $sql = "INSERT INTO myform (username,mydate,email,password,password,date) VALUES 
 ('$_POST[username]',$_POST[mydate],$_POST[email],$_POST[password],$_POST[password],'$DATE')";

if ($conn->query($sql) == TRUE) {
    echo "New record created successfully";
    } 
    else {
    echo "Error: " . $sql . "<br>" . $conn->error;
    }
    }
    ?>