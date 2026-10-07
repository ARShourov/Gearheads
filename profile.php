<!-- PHP section for profile page -->

<?php
session_start();
include("DB_connection.php");

// Check if the user is logged in
if (isset($_SESSION['user_id'])) {
    $user_id = $_SESSION['user_id'];

    // Query to fetch the logged-in user's data
    $query = "SELECT fname, email, profile_picture FROM signup WHERE id = '$user_id' LIMIT 1";
    $result = mysqli_query($con, $query);

    // Fetch user data if the query was successful
    if ($result && mysqli_num_rows($result) > 0) {
        $user_data = mysqli_fetch_assoc($result);
    } else {
        echo "Error fetching data: " . mysqli_error($con);
    }
} else {
    // Redirect to login page if not logged in
    header("Location: login.php");
    die;
}
// Close the database connection
mysqli_close($con); 

?>

<!-- HTML design for profile page -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile | Gearheads</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
</head>
<body>

    <!-- Header section for profile page -->

    <header>
        <div class="nav container">
            <a href="index.php" class="logo"><i class="fa-solid fa-screwdriver-wrench" style="color: #008bf5;"></i>Gearheads</a>
            <a href="login.php" class="btn">Logout</a>
        </div>
    </header>

    <!-- Profile card section for profile page -->
    <div class="profile container">
        <?php if (isset($user_data)): ?>
            <img src="<?php echo htmlspecialchars($user_data['profile_picture']) ?: 'images/Profile.png'; ?>" alt="Profile Picture" class="profile-pic">
            <div class="profile-container">
                <div class="profile-info">
                    <p><strong>Name:</strong> <?php echo htmlspecialchars($user_data['fname']); ?></p>
                    <p><strong>Email:</strong> <?php echo htmlspecialchars($user_data['email']); ?></p>
                </div>
            </div>
            <button class="btn update-btn" onclick="window.location.href='update.php'">Update Profile</button>
            <button class="btn back-btn" onclick="window.location.href='login.php'">Back</button>
        <?php else: ?>
            <p>No user data found.</p>
        <?php endif; ?>
    </div>

    <!-- Footer Section for profile page -->
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