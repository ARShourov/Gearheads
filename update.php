<!-- PHP section of update page -->

<?php
    session_start();
    include("DB_connection.php");

    $user_id = $_SESSION['user_id'];

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    // Retrieve form data
    $full_name = mysqli_real_escape_string($con, $_POST['fname']);
    $address = mysqli_real_escape_string($con, $_POST['uaddress']);
    $phone = mysqli_real_escape_string($con, $_POST['phone']);
    $garage_name = mysqli_real_escape_string($con, $_POST['garage_name']);
    $car_repair_count = (int)$_POST['car_repair_count'];
    $car_wash_count = (int)$_POST['car_wash_count'];
    
    // Handleing file upload
    $profile_picture = $_FILES['profile_picture']['name'];
    $profile_picture_tmp = $_FILES['profile_picture']['tmp_name'];
    
    // Geting the existing profile picture
    $existing_query = mysqli_query($con, "SELECT profile_picture FROM signup WHERE id='$user_id'");
    $existing_data = mysqli_fetch_assoc($existing_query);
    $existing_picture = $existing_data['profile_picture'];

    if ($profile_picture) {
        
        $target_dir = "images/";
        $target_file = $target_dir . basename($profile_picture);
        if (move_uploaded_file($profile_picture_tmp, $target_file)) {
            // If upload is successful, useing the new file path
            $new_picture = $target_file;
        } else {
            // Handle file upload error
            $new_picture = $existing_picture;
        }
    } else {
        // Keep the current profile picture if no new file is uploaded
        $new_picture = $existing_picture;
    }

    // Update the user's data in the database
    $query = "UPDATE signup SET fname='$full_name', uaddress='$address', phone='$phone', garage_name='$garage_name', car_repair_count='$car_repair_count', car_wash_count='$car_wash_count', profile_picture='$new_picture' WHERE id='$user_id'";
    
    if (mysqli_query($con, $query)) {
        echo "<script type='text/javascript'>alert('Profile updated successfully!'); window.location.href='profile.php';</script>";
    } else {
        echo "Error updating record: " . mysqli_error($con);
    }

    mysqli_close($con);
}
?>

<!-- HTML design for update page -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Profile | Gearheads</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
</head>
<body>

    <!-- Header section of update page -->

    <header>
        <div class="nav container">
            <a href="index.php" class="logo"><i class="fa-solid fa-screwdriver-wrench" style="color: #008bf5;"></i>Gearheads</a>
            <a href="login.php" class="btn">Logout</a>
        </div>
    </header>

    <!-- Update section -->
    
    <div class="uprofile container">
        <div class="uprofile-container">
            <h2>My Profile</h2>

           <!-- <?php
                $query = mysqli_query($con, "SELECT * FROM signup WHERE id = '$user_id'") or die('Query failed');
                if (mysqli_num_rows($query) > 0) {
                    $fetch = mysqli_fetch_assoc($query);
                }
            ?>-->

            <form action="" method="POST" enctype="multipart/form-data">
                <span>Full Name</span>
                <input type="text" name="fname" value="<?php echo htmlspecialchars($fetch['fname']); ?>" placeholder="Your Name" required>
                
                <span>Address</span>
                <input type="text" name="uaddress" value="<?php echo htmlspecialchars($fetch['uaddress']); ?>" placeholder="Your Address" required>
                
                <span>Phone Number</span>
                <input type="tel" name="phone" value="<?php echo htmlspecialchars($fetch['phone']); ?>" placeholder="Enter your phone number" required>
                
                <span>Garage Name</span>
                <input type="text" name="garage_name" value="<?php echo htmlspecialchars($fetch['garage_name']); ?>" placeholder="Your Garage Name">
                
                <span>Number of Car Repairs</span>
                <input type="number" name="car_repair_count" value="<?php echo htmlspecialchars($fetch['car_repair_count']); ?>" min="0">
                
                <span>Number of Car Washes</span>
                <input type="number" name="car_wash_count" value="<?php echo htmlspecialchars($fetch['car_wash_count']); ?>" min="0">

                <span>Profile Picture</span>
                <input type="file" name="profile_picture" accept="image/*">
                
                <input type="submit" value="Save" class="button">
            </form>
        </div>
    </div>

<!-- Footer section of update page -->

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