<!-- PHP section for doirampur -->

<?php
    require_once 'DB_connection.php';

    $allowed_address = ["doirampur", "walia", "malonchi", "dhupoil", "kajipara", "shongkorvag", "dorabpur", "sonapur", "jathiyan"];

    $address_filter = "'" . implode ("', '", $allowed_address) . "'";

    $sql = "select * from signup where uaddress in ($address_filter)";
    $all_info = $con->query($sql);

?>


<!-- HTML section for doirampur -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doirampur | Gearheads</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
</head>
<body>

    <!-- Heading section of doirampur page -->

    <header>
        <div class="nav container">
            <a href="index.php" class="logo"><i class="fa-solid fa-screwdriver-wrench" style="color: #008bf5;"></i>Gearheads</a>
            
            <a href="login.php" class="btn">Login</a>

        </div>
    </header>

    <!-- Doirampur heading section -->
    <section class="area-container">
        <h1>Doirampur Service Points</h1>
        <p>Here you can find information about all of the services provider in Natore</p>
        
        <!-- Profile cars section for doirampur page -->
        
        <?php if ($all_info->num_rows > 0): ?>
        <div class="profile-cards">
            
            <?php while($row = mysqli_fetch_assoc($all_info)): ?>
            <div class="profile-card">
                <img src="<?php echo htmlspecialchars($row["profile_picture"]); ?>" alt="Profile Photo">
                
                <h2><?php echo htmlspecialchars($row["fname"]); ?></h2>
                
                <p><i class="fa-solid fa-shop"></i> Garage Name: <?php echo htmlspecialchars($row["garage_name"]); ?></p>
                <p><i class="fa-solid fa-phone"></i> Phone: <?php echo htmlspecialchars($row["phone"]); ?></p>
                <p><i class="fa-solid fa-envelope"></i> Email: <?php echo htmlspecialchars($row["email"]); ?></p>
                <p><i class="fa-solid fa-car info-icon"></i> Cars Repaired: <?php echo htmlspecialchars($row["car_repair_count"]); ?></p>
                <p><i class="fa-solid fa-spray-can-sparkles"></i> Cars Washed: <?php echo htmlspecialchars($row["car_wash_count"]); ?></p>
                <p><i class="fa-solid fa-location-dot"></i> Address: <?php echo htmlspecialchars($row["uaddress"]); ?></p>
                
                <div class="contact-info">
                    <a href="tel:<?php echo htmlspecialchars($row["phone"]); ?>">Call</a>
                    <a href="mailto:<?php echo htmlspecialchars($row["email"]); ?>">Email</a>
                </div>

            </div>
            <?php endwhile; ?>

        </div>
        <?php else: ?>
            echo "<script type='text/javascript'>alert('No service provider available on this area'); window.location.href='index.php';</script>";
        <?php endif; ?>

    </section>

<!-- Footer section for doirampur -->

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