<!-- PHP section for login page -->

<?php
session_start();
include("DB_connection.php");

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $email = $_POST['mail'];
    $password = $_POST['pass'];

    if (!empty($email) && !empty($password) && !is_numeric($email)) {
        $query = "SELECT * FROM signup WHERE email = '$email' LIMIT 1";
        $result = mysqli_query($con, $query);

        if ($result && mysqli_num_rows($result) > 0) {
            $user_data = mysqli_fetch_assoc($result);

            if ($user_data['pass'] == $password) {
                // Store user information in session
                $_SESSION['user_id'] = $user_data['id']; 
                $_SESSION['user_email'] = $user_data['email'];
                
                header("Location: profile.php");
                die;
            }
        }
        echo "<script type='text/javascript'>alert('Wrong Username or Password');</script>";
    } else {
        echo "<script type='text/javascript'>alert('Wrong Username or Password');</script>";
    }
}
?>

<!-- HTML design for the login page -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | Gearheads</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
</head>
<body>

    <!-- Header section of login page -->

    <header>
        <div class="nav container">
            <a href="index.php" class="logo"><i class="fa-solid fa-screwdriver-wrench" style="color: #008bf5;"></i>Gearheads</a>
            
            <a href="sign-up.php" class="btn">Sign Up</a>

        </div>
    </header>

<!-- Login section -->

    <div class="login container">
        <div class="login-container">
            <h2>Login To Continue</h2>
            <p>Log in with your data that you entered<br>during your registration</p>

            <form method="POST">
                <span>Enter your email address</span>
                <input type="email" name="mail" id="" placeholder="yourmail@gmail.com" required>
                <span>Enter your password</span>
                <input type="password" name="pass" id="" placeholder="Password" required>
                
                <input type="submit" value="Login" class="buttom">
                <a href="#">Forget Password ?</a>
            </form>
            <a href="sign-up.php" class="btn">Sign up now</a>
        </div>
        <div class="login-image">
            <img src="images/login-photo.png" style="height:75rem;" alt="">
        </div>
    </div>

<!-- Footer section of login page -->

<section class="footer" id="contact">
        <div class="footer-container container">
            <h1>Gearheads</h1>
            <div class="footer-box">
                <h3>Page</h3>
                <a href="#home"><i class="fa-solid fa-house"></i> Home</a>
                <a href="#about"><i class="fa-solid fa-address-card"></i> About</a>
                <a href="#contact"><i class="fa-solid fa-address-book"></i> Contact</a>
            </div>

            <div class="footer-box">
                <h3>Legal</h3>
                <a href="#"><i class="fa-solid fa-shield-halved"></i> Privacy Policy</a>
                <a href="#"><i class="fa-solid fa-barcode"></i> Cookie Policy</a>
                <a href="#"><i class="fa-solid fa-list-check"></i> Website Policy</a>
            </div>

            <div class="footer-box">
                <h3>Contact</h3>
                <a href="#"><i class="fa-solid fa-mobile-screen-button"></i> 01724-074434</a>
                <a href="#"><i class="fa-solid fa-tty"></i> 024566629</a>
                <a href="#"><i class="fa-solid fa-envelope"></i> arshourov40@gmail.com</a>
                <div class="social">
                    <a href="#"><i class="fa-brands fa-square-facebook" style="color: #fcfcfc;"></i></a>
                    <a href="#"><i class="fa-brands fa-square-twitter" style="color: #ffffff;"></i></a>
                    <a href="#"><i class="fa-brands fa-square-instagram" style="color: #ffffff;"></i></a>
                </div>

            </div>

            <div class="footer-box">
                <h3>Designer</h3>
                <a href="#"><i class="fa-solid fa-user"></i> Engr. AR Shourov</a>
                <a href="#"><i class="fa-solid fa-user"></i> Engr. Tasnuva</a>
                <a href="#"><i class="fa-solid fa-user"></i> Engr. Waliul</a>
                <a href="#"><i class="fa-solid fa-user"></i> Engr. Shariar</a>
            </div>
        </div>
    </section>

    <div class="copyright">
        <p>&#169; Team-ZXY-999 All Right Reserved</p>
    </div>

</body>
</html>