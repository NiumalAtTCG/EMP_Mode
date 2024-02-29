
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

        <!-- Credentials -->
        <section class="credential-area">
            <div class="container">
                <div class="gx-row d-flex">
                    <div class="credential-sidebar-wrap" data-aos="zoom-in">
                        <div class="credential-sidebar text-center">
                            <div class="shadow-box">
                                <img src="assets/images/bg1.png" alt="BG" class="bg-img">
                                <div class="img-box">
                                    <img src="images/logo2.png" alt="About Me">
                                </div>
                                <h2>Stay with us</h2>
                                <p>inforudevs@gmail.com</p>
        
                                <ul class="social-links d-flex justify-content-center">
                                    <li><a href="#"><i class="iconoir-dribbble"></i></a></li>
                                    <li><a href="https://x.com/rudevs123117?t=24Lhct3H0xS5by2SlPz24A&s=09"><i class="iconoir-twitter"></i></a></li>
                                    <li><a href="https://www.instagram.com/rudevs_co?igsh=Y21mbjBsMWlmeXAz "><i class="iconoir-instagram"></i></a></li>
                                    <li><a href="https://www.facebook.com/profile.php?id=61555543592690&mibextid=ZbWKwL "><i class="iconoir-facebook-tag"></i></a></li>
                                </ul>
        
                                <a href="contact.php" class="theme-btn">Contact Us</a>
                            </div>
                        </div>
                    </div>

                    <div class="credential-content flex-1">
                        <div class="credential-about" data-aos="zoom-in">
                            <h1>Vision</h1>
                            <p class="fs-4">To revelutionize the industry by creating immersive and innovative experiences that trancend boundaries, captivate imaginations, and push the limits of virtual world.</p>
                            
                        </div>

                        <div class="credential-edc-exp credential-experience">
                            <h1 data-aos="fade-up">Mission</h1>
                            <div class="credential-edc-exp-item" data-aos="zoom-in">
                                <p class="fs-4">Empower everyone worldwide through cutting edge technology, creative story telling and unparalleled experience, fostering a global community that celebrates the joy of technology.One pixel at a time , to redefine the possibilities of interactive entertainment ancreate lasting memories</p>
                                <!-- <h4>2007 - 2017</h4>
                                <h3>Framer Designer & Developer</h3>
                                <h5>Bluebase Designs</h5>
                                <p>Sit amet luctussd fav venenatis, lectus magna fringilla inis urna, porttitor rhoncus dolor purus non enim praesent in elementum sahas facilisis leo, vel fringilla est ullamcorper eget nulla facilisi etisam dignissim diam quis enim lobortis viverra orci sagittis eu volutpat odio facilisis mauris sit.</p> -->
                            </div>
                            <div class="credential-edc-exp-item" data-aos="zoom-in">
                                <!-- <h4>2017 - 2023</h4>
                                <h3>Front-End Developer</h3>
                                <h5>Larsen & Toubro</h5>
                                <p>Sit amet luctussd fav venenatis, lectus magna fringilla inis urna, porttitor rhoncus dolor purus non enim praesent in elementum sahas facilisis leo, vel fringilla est ullamcorper eget nulla facilisi etisam dignissim diam quis enim lobortis viverra orci sagittis eu volutpat odio facilisis mauris sit.</p> -->
                            </div>
                        </div>

                        <div class="credential-edc-exp credential-education">
                            <h1 data-aos="fade-up ">Objectives</h1>
                            <br>
                            <div class="credential-edc-exp-item" data-aos="zoom-in">
                                
                                <h3>Innovation Leadership
                                </h3>
                                <p> Continously push the boundaries of technology and creativity to deliver ground braking gaming experiences that set industry standards
                                </p>
                              

                            </div>
                           
                            <div class="credential-edc-exp-item" data-aos="zoom-in">
                                <h3>Global commuity building

                                </h3>
                                <p> Cultivate vibrant and inclusive gaming community by fostering positive interactions

                                </p>
                            </div>
                            <div class="credential-edc-exp-item" data-aos="zoom-in">
                                <h3>Technological excellence
                                </h3>
                                <p> Invest in research and development to stay at the forefront of tecnological advancement

                                </p>
                            </div>
                            <div class="credential-edc-exp-item" data-aos="zoom-in">
                                <h3>Talent development
                                </h3>
                                <p> Attract, nurture and retain top-tier talent to drive creativity, innovation and excellence in every aspect of game development

                                </p>
                            </div>
                        </div>

                        <!-- <div class="skills-wrap">
                            <h2 data-aos="fade-up">Skills</h2>
                            <div class="d-grid skill-items gap-24 flex-wrap">
                                <div class="skill-item" data-aos="zoom-in">
                                    <span class="percent">85%</span>
                                    <h3 class="name">JavaScript</h3>
                                    <p>Non enim praesent</p>
                                </div>
                                <div class="skill-item" data-aos="zoom-in">
                                    <span class="percent">78%</span>
                                    <h3 class="name">Python</h3>
                                    <p>Non enim praesent</p>
                                </div>
                                <div class="skill-item" data-aos="zoom-in">
                                    <span class="percent">92%</span>
                                    <h3 class="name">Figma</h3>
                                    <p>Non enim praesent</p>
                                </div>
                                <div class="skill-item" data-aos="zoom-in">
                                    <span class="percent">90%</span>
                                    <h3 class="name">WordPress</h3>
                                    <p>Non enim praesent</p>
                                </div>
                                <div class="skill-item" data-aos="zoom-in">
                                    <span class="percent">81%</span>
                                    <h3 class="name">React</h3>
                                    <p>Non enim praesent</p>
                                </div>
                                <div class="skill-item" data-aos="zoom-in">
                                    <span class="percent">87%</span>
                                    <h3 class="name">Adobe XD</h3>
                                    <p>Non enim praesent</p>
                                </div>

                            </div>
                        </div>

                        <div class="skills-wrap awards-wrap">
                            <h2 data-aos="fade-up">Awards</h2>
                            <div class="d-grid skill-items gap-24 flex-wrap">
                                <div class="skill-item" data-aos="zoom-in">
                                    <span class="percent">14 May 2020</span>
                                    <h3 class="name">Bluebase</h3>
                                    <p>Non enim praesent</p>
                                </div>
                                <div class="skill-item" data-aos="zoom-in">
                                    <span class="percent">26 June 2018</span>
                                    <h3 class="name">Demble</h3>
                                    <p>Non enim praesent</p>
                                </div>

                            </div>
                        </div> -->
                    </div>
                </div>
            </div>
        </section>
        


        <!-- Footer -->
        <?php 
        require "footer.php";
        ?>

    </main>
    

    <script src="jquery-3.6.4.js"></script>
    <script src="bootstrap.bundle.min.js"></script>
    <script src="aos.js"></script>
    <script src="main.js"></script>
</body>

</html>