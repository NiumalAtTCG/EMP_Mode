
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RudevsCo</title>
    <link rel="icon" href="images\title.png" >

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800&amp;display=swap" rel="stylesheet">

    <link rel="stylesheet" href="css/iconoir.css">
    
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/aos.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <main class="main-aboutpage">

        <!-- Header -->
        <?php
    require "hedder.php";
    ?>
<?php
    require "loading.php"
    ?>
        <!-- Contact -->
        <section class="contact-area">
            <div class="container">
                <div class="gx-row d-flex justify-content-between gap-24">
                    <div class="contact-infos">
                        <h3 data-aos="fade-up">Contact Info</h3>
                        <ul class="contact-details">
                            <li class="d-flex align-items-center" data-aos="zoom-in">
                                <div class="icon-box shadow-box">
                                    <i class="iconoir-mail"></i>
                                </div>
                                <div class="right">
                                    <span>MAIL us</span>
                                    <h4>inforudevs@gmail.com</h4>
                                    
                                </div>
                            </li>

                            <li class="d-flex align-items-center" data-aos="zoom-in">
                                <div class="icon-box shadow-box">
                                    <i class="iconoir-phone"></i>
                                </div>
                                <div class="right">
                                    <span>Contact Us</span>
                                    <h4>+94765906977</h4>
                                    
                                </div>
                            </li>

                            <li class="d-flex align-items-center" data-aos="zoom-in">
                                <div class="icon-box shadow-box">
                                    <i class="iconoir-pin-alt"></i>
                                </div>
                                <div class="right">
                                    <span>Location</span>
                                    <h4>Kurunegala, Srilanka <br></h4>
                                </div>
                            </li>
                        </ul>

                        <h3 data-aos="fade-up">Social Info</h3>
                        <ul class="social-links d-flex align-center" data-aos="zoom-in">
                        <li><a href="https://x.com/rudevs123117?t=24Lhct3H0xS5by2SlPz24A&s=09"><i class="iconoir-twitter"></i></a></li>
                                    <li><a href="https://www.instagram.com/rudevs_co?igsh=Y21mbjBsMWlmeXAz "><i class="iconoir-instagram"></i></a></li>
                                    <li><a href="https://www.facebook.com/profile.php?id=61555543592690&mibextid=ZbWKwL "><i class="iconoir-facebook-tag"></i></a></li>
                        </ul>
                    </div>

                    <div data-aos="zoom-in" class="contact-form">
                        <div class="shadow-box">
                            <img src="assets/images/bg1.png" alt="BG" class="bg-img">
                            <img src="images/icon2.png" alt="Icon" style="width: 60px;">
                            <h1>Let’s work <span>together.</span></h1>
                            <form method="POST" action="https://wpriverthemes.com/landing/gridx-html/mailer.php">
                                <div class="alert alert-success messenger-box-contact__msg" style="display: none" role="alert">
                                    Your message was sent successfully.
                                </div>
                                <div class="input-group">
                                    <input type="text" name="full-name" id="full-name" placeholder="Name *">
                                </div>
                                <div class="input-group">
                                    <input type="email" name="email" id="email" placeholder="Email *">
                                </div>
                                <div class="input-group">
                                    <input type="text" name="subject" id="subject" placeholder="Your Subject *">
                                </div>
                                <div class="input-group">
                                    <textarea name="message" id="message" placeholder="Your Message *"></textarea>
                                </div>
                                <div class="input-group">
                                    <button class="theme-btn submit-btn" name="submit" type="submit">Send Message</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    
                </div>
            </div>
        </section>


        <!-- Footer -->
        <?php 
        require "footer.php";
        ?>

    </main>
    

    <script src="js/jquery-3.6.4.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/aos.js"></script>
    <script src="js/main.js"></script>
    <script src="js/main2.js"></script>
</body>

</html>