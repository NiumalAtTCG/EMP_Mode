
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gridx - Personal Portfolio HTML Template</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800&amp;display=swap" rel="stylesheet">

    <link rel="stylesheet" href="iconoir.css">
    
    <link rel="stylesheet" href="bootstrap.min.css">
    <link rel="stylesheet" href="aos.css">
    <link rel="stylesheet" href="style.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/latest/TweenMax.min.js"></script>

    
</head>
<body>


    <?php
    require "hedder.php";
    ?>
    <main class="main-homepage">
    <?php
    require "loading.php"
    ?>
        <!-- About -->
        <section class="about-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-6" data-aos="zoom-in">
                        <div class="about-me-box shadow-box">
                            <a class="overlay-link" href=""></a>
                            <img src="images\bg12.png" alt="BG" class="bg-img">
                            <div class="img-box">
                                <img src="images\bg12.png" alt="About Me">
                            </div>
                            <div class="infos">
                                <h4>World class Game Develpoing</h4>
                                <h1>One pixel at a time</h1>
                                <p>A Roadmap to the Future</p>
                                <a href="#" class="about-btn">
                                    <img src="images/icon.svg" alt="Button">
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="about-credentials-wrap">
                            <div data-aos="zoom-in">
                                <div class="banner shadow-box">
                                    <div class="marquee"style="overflow: hidden;">
                                        <div>
                                          <span class="fs-5" >Welcome To &nbsp <b>Rudevs Coperation</b>&nbsp <b>We are glade you're here</b> Welcome To <b>Rudevs Coperation</b> Welcome To <b>FEATURED</b> Rudevs Coperation  LATEST WORK AND <b>FEATURED</b> LATEST WORK AND  <img src="assets/images/star1.svg" alt="Star"></span>
                                        </div>
                                      </div>
                                </div>

                            </div>

                            <div class="gx-row d-flex gap-24">
                                <div data-aos="zoom-in">
                                    <div class="about-crenditials-box info-box shadow-box h-full">
                                        <a class="overlay-link" href="credentials.php"></a>
                                        <img src="images/Frame 2.png" alt="BG" class="bg-img" >
                                        <img src="images/.png" alt="" style="width: 30px;">
                                        <div class="d-flex align-items-center justify-content-between">
                                            <div class="infos">
                                                <h4></h4>
                                                <h2 class="mt-5">Vision & Mission</h2>
                                            </div>
                                          
    
                                            <a href="credentials.html" class="about-btn">
                                                <img class="" src="images/icon.svg" alt="Button">
                                            </a>
    
                                        </div>
                                    </div>
                                </div>
                                <div class="gx-row d-flex gap-24">
                                <div data-aos="zoom-in">
                                    <div class="about-crenditials-box info-box shadow-box h-full">
                                        <a class="overlay-link" href="works.php"></a>
                                        <img src="images/Frame4.png" alt="BG" class="bg-img" >
                                        <img src="images/.png" alt="" style="width: 30px;">
                                        <div class="d-flex align-items-center justify-content-between">
                                            <div class="infos">
                                                <h4></h4>
                                                <h2 class="mt-5">All Projects</h2>
                                            </div>
                                          
    
                                            <a href="credentials.html" class="about-btn">
                                                <img class="" src="images/icon.svg" alt="Button">
                                            </a>
    
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="row mt-24">
                    <div class="col-md-12">
                        <div class="blog-service-profile-wrap d-flex gap-24">
                            <div data-aos="zoom-in" class="col-5">
                                <div class="about-services-box info-box shadow-box ">
                                    <a href="service.php" class="overlay-link"></a>
                                    <img src="assets/images/bg1.png" alt="BG" class="bg-img">
                                    <div class="icon-boxes d-none d-lg-block">
                                        <i class="iconoir-camera"></i>
                                        <i class="iconoir-design-pencil"></i>
                                        <i class="iconoir-color-filter"></i>
                                        <i class="iconoir-dev-mode-phone"></i>
                                        
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between">
                                        <div class="infos">
                                            <h4>specialization</h4>
                                            <h2>Services Offering</h2>
                                        </div>
    
                                        <a href="service.html" class="about-btn">
                                            <img src="images/icon.svg" alt="Button">
                                        </a>
                                        


    
                                    </div>
                                    <!-- <img src="images/lap.png"  > -->
                                </div>
                                <div class="about-services-box info-box shadow-box mt-4 " data-aos="zoom-in">
                                <a href="about.php" class="overlay-link"></a>
                                    <img src="images/model.jpg" alt="BG" class="bg-img">
                                    <img src="images\rudevs_tshirt.png" alt="GFonts">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <div class="infos">
                                            <h4>Blog</h4>
                                            <h2> About Us</h2>
                                        </div>
    
                                        <a href="blog.php" class="about-btn">
                                            <img src="images/icon.svg" alt="Button">
                                        </a>
    
                                    </div>
                                </div>
                            </div>
                            
                            <div data-aos="zoom-in" class="flex-1">
                                <div class="about-blog-box info-box shadow-box " >
                                    <a href="blog.php" class="overlay-link"></a>
                                    <img src="images/model.jpg" alt="BG" class="bg-img">
                                    <img src="images/model01.png" alt="GFonts">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <div class="infos">
                                            <h4>Blog</h4>
                                            <h2> Business model</h2>
                                        </div>
    
                                        <a href="blog.php" class="about-btn">
                                            <img src="images/icon.svg" alt="Button">
                                        </a>
    
                                    </div>
                                </div>
                                <div class="about-blog-box info-box shadow-box mt-4 " data-aos="zoom-in">
                                    <a href="product.php" class="overlay-link"></a>
                                    <img src="images/Group 7.png" alt="BG" class="bg-img" >
                                    <img src="images\tbanner.svg" style="width: 500px;">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <div class="infos">
                                            <h4>Blog</h4>
                                            <h2>Our Products</h2>
                                        </div>
    
                                        <a href="product.php" class="about-btn">
                                            <img src="images/icon.svg" alt="Button">
                                        </a>
    
                                    </div>
                                </div>
                            </div>

                            

                            <!-- <div data-aos="zoom-in">
                                <div class="about-profile-box info-box shadow-box h-full">
                                    <img src="assets/images/bg1.png" alt="BG" class="bg-img">
                                    <div class="inner-profile-icons shadow-box">
                                        <a href="#">
                                            <i class="iconoir-dribbble"></i>
                                        </a>
                                        <a href="#">
                                            <i class="iconoir-twitter"></i>
                                        </a>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between">
                                        <div class="infos">
                                            <h4>Stay with me</h4>
                                            <h1>Profiles</h1>
                                        </div>
    
                                        <a href="contact.html" class="about-btn">
                                            <img src="images/icon.svg" alt="Button">
                                        </a>
    
                                    </div>
                                </div>
                            </div> -->
                            
                        </div>
                    </div>
                    
                </div>

                <div class="row mt-24">
                    <div class="col-md-8" data-aos="zoom-in">
                            
                        <div class="about-client-box info-box shadow-box">
                            <img src="assets/images/bg1.png" alt="BG" class="bg-img">
                            <div class="clients d-flex align-items-start gap-24 justify-content-center">
                                <div class="client-item">
                                    <h1>01</h1>
                                    <p>Years <br>Experience</p>
                                </div>

                                <div class="client-item">
                                    <h1>+6</h1>
                                    <p>CLIENTS <br>WORLDWIDE</p>
                                </div>

                                <div class="client-item">
                                    <h1>+10</h1>
                                    <p>Total <br>Projects</p>
                                </div>
                                <div class="client-item">
                                    <h1>12</h1>
                                    <p>Project<br>Developers</p>
                                </div>
                                
                                
                            </div>
                        </div>

                    </div>
                    <div class="col-md-4" data-aos="zoom-in">
                            
                        <div class="about-contact-box info-box shadow-box">
                            <a class="overlay-link" href="contact.php"></a>
                            <img src="assets/images/bg1.png" alt="BG" class="bg-img">
                            <img src="images/icon2.png" alt="Icon" class="star-icon" style="height: 90px;">
                            <h1>Let's <br>work <span>together.</span></h1>
                            <a href="#" class="about-btn">
                                <!-- <img src="images/icon.svg" alt="Button"> -->
                            </a>
                        </div>

                    </div>
                </div>
            </div>
        </section>

        <?php 
        require "footer.php";
        ?>

    </main>
    
      
    <script src="jquery-3.6.4.js"></script>
    <script src="bootstrap.bundle.min.js"></script>
    <script src="aos.js"></script>
    <script src="main.js"></script>
    <script src="main2.js"></script>
</body>

</html>