<!-- Main home page HTML for Gearheads -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gearheads</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
</head>
<body>

    <!-- Header section for home page -->

    <header>
        <div class="nav container">
            <a href="index.php" class="logo"><i class="fa-solid fa-screwdriver-wrench" style="color: #008bf5;"></i>Gearheads</a>
            <input type="checkbox" name="" id="menu">
            <label for="menu" <i class="fa-solid fa-bars" style="color: #005eff;"id="menu-icon"></i></label>

            <ul class="navbar">
                <li><a href="#home">Home</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
            <a href="login.php" class="btn">Login</a>

        </div>
    </header>

<!-- Home section -->

    <section class="home container" id="home">
        <div class="home-text">
            <h1>AUTO MAINTENANCE<br>& REPAIR SERVICE</h1>
            <h5>
                Our Service Center ensure vehicle durability and your personal satisfaction
            </h5>
        </div>
        <div class="dropdown">
            <button class="dropbtn">Area</button>
            <div class="dropdown-content">
                <a href="doirampur.php">Doirampur</a>
                <a href="natore.php">Natore</a>
            </div>
        </div>
    </section>

<!-- About Section -->

    <section class="about container" id="about">
        <div class="about-img">
            <img src="images/about.jpg" alt="about image">
        </div>
        <div class="about-text">
            <span>About Us</span>
            <h1>We provide the nearest service point to you !</h1>
            <p>If you are having problem with your car</p>
            <p>checkout our services now. We are only here</p>
            <p>to help you.So don't be late. If you are having</p>
            <p>problem with your car checkout our services</p>
            <p>now. We provide the nearest service point to</p>
            <p>you ! If you are having problem with your car</p>
            <p>checkout our services now. We are only here</p>
            <a href="#" class="btn">Learn More</a>
        </div>
    </section>
    
<!-- Service providing section -->

    <section class="services container" id="sales">
        <div class="box">
            <i class="fa-solid fa-gears" style="color: #005eff;"></i>
            <h3>
                ENGINE REPAIR 
            </h3>
            <p>This can include things like <br>replacing a head gasket or belt or sealing<br> an oil pan. Repairs must be caught early <br> enough so that the damage doesn't extend <br>to other parts, leading to an engine replacement<br> if ignored for too long.</p>
        </div>
        <div class="box">
            <i class="fa-solid fa-car-battery" style="color: #005eff;"></i>
            <h3>
                CAR BATTERY REPAIR 
            </h3>
            <p>A battery is a device that <br>converts chemical energy contained within its active<br> materials directly into electric energy by means of an<br> electrochemical oxidation-reduction (redox) reaction. This<br> type of reaction involves the transfer of electrons from<br> one material to another via an electric circuit</p>
        </div>
        <div class="box">
            <i class="fa-sharp fa-solid fa-spray-can" style="color: #005eff;"></i>
            <h3>
                CAR WASH 
            </h3>
            <p>Valeting is a more professional hand <br>car-washing service, which is often provided <br>by someone in a mobile unit that can come to your home<br> or workplace. They use professional products and can<br> offer high-quality service, but this means they're not cheap.</p>
        </div>

    </section>

<!-- Best seller profiles -->

    <section class="properties container" id="properties">
        <div class="heading">
            <span>
                Recent
            </span>
            <h2>Best Service Providers</h2>
            <p>The all time best service man that are <br>rated by the customers is here for only you</p>
        </div>
        <div class="properties-container container">
            
            <div class="box">
                <img src="images/mortuza.jpg" alt="">
                <h3>Mortuza</h3>
                <div class="content">
                    <div class="text">
                        <h3>Mortuza Car Service</h3>
                        <p>Madrasamore, Natore</p>
                    </div>
                    <div class="icon">
                        <i class="fa-solid fa-car" style="color: #005eff;"><span>   127   </span></i>
                        <i class="fa-solid fa-spray-can-sparkles" style="color: #005eff;"><span>   200   </span></i>
                    </div>
                </div>
            </div>

            <div class="box">
                <img src="images/faruk.jpg" alt="">
                <h3>Faruk</h3>
                <div class="content">
                    <div class="text">
                        <h3>Faruk Car Service</h3>
                        <p>Doirampur, Natore</p>
                    </div>
                    <div class="icon">
                        <i class="fa-solid fa-car" style="color: #005eff;"><span>   204   </span></i>
                        <i class="fa-solid fa-spray-can-sparkles" style="color: #005eff;"><span>   109   </span></i>
                    </div>
                </div>
            </div>

            <div class="box">
                <img src="images/robin.jpg" alt="">
                <h3>Robin</h3>
                <div class="content">
                    <div class="text">
                        <h3>Robin Car Service</h3>
                        <p>Horishpur, Natore</p>
                    </div>
                    <div class="icon">
                        <i class="fa-solid fa-car" style="color: #005eff;"><span>   188   </span></i>
                        <i class="fa-solid fa-spray-can-sparkles" style="color: #005eff;"><span>   145   </span></i>
                    </div>
                </div>
            </div>

            <div class="box">
                <img src="images/ismail.jpg" alt="">
                <h3>Ismail</h3>
                <div class="content">
                    <div class="text">
                        <h3>Ismail Car Service</h3>
                        <p>Dighapatia, Natore</p>
                    </div>
                    <div class="icon">
                        <i class="fa-solid fa-car" style="color: #005eff;"><span>   107   </span></i>
                        <i class="fa-solid fa-spray-can-sparkles" style="color: #005eff;"><span>   189   </span></i>
                    </div>
                </div>
            </div>

            <div class="box">
                <img src="images/shuvo.jpg" alt="">
                <h3>Shuvo</h3>
                <div class="content">
                    <div class="text">
                        <h3>Shuvo Car Service</h3>
                        <p>Half-Rasta, Natore</p>
                    </div>
                    <div class="icon">
                        <i class="fa-solid fa-car" style="color: #005eff;"><span>   200   </span></i>
                        <i class="fa-solid fa-spray-can-sparkles" style="color: #005eff;"><span>   260   </span></i>
                    </div>
                </div>
            </div>

            <div class="box">
                <img src="images/rumi.jpg" alt="">
                <h3>Rumi</h3>
                <div class="content">
                    <div class="text">
                        <h3>Rumi Car Service</h3>
                        <p>Bongojol, Natore</p>
                    </div>
                    <div class="icon">
                        <i class="fa-solid fa-car" style="color: #005eff;"><span>   70   </span></i>
                        <i class="fa-solid fa-spray-can-sparkles" style="color: #005eff;"><span>   500   </span></i>
                    </div>
                </div>
            </div>
        </div>
    </section>

<!-- Question section -->

    <section class="newsletter container">
        <h2>Have any question in mind?<br>Let us help you</h2>
        <form action="">
            <input type="email" name="" id="email-box" placeholder="      Type your question here...." required>
            <input type="submit" value="Send" class="btn">
        </form>
    </section>

<!-- Footer section of the home page -->

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
                <h3>Developers</h3>
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