
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

    <link rel="stylesheet" href="../../../cdn.jsdelivr.net/gh/iconoir-icons/iconoir%40main/css/iconoir.css">

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

        <!-- About -->
        <section class="about-area">
            <div class="container">
                <div class="about-details" data-aos="zoom-in">
                    <h1 class="section-heading " data-aos="fade-up"><img src="images/star-2.png" alt="Star">Our Products<img src="images/star-2.png" alt="Star"></h1>
                    <!-- <div class="about-details-inner shadow-box">
                        <img src="images/icon2.png" alt="Star" style="height: 100px;">
                        <h1>Hariharan Varshaan</h1>
                        <p>I am a San francisco-based product designer with a focus on web design, illustration, a visual development. I have a diverse range of experience having worked across various fields and industries.</p>
                    </div> -->

                </div>
                <div class="d-flex about-me-wrap align-items-start gap-24">
                    <div class="about-services-box info-box shadow-box mt-4 " data-aos="zoom-in">
                        <a href="about.php" class="overlay-link"></a>
                            <img src="images/model.jpg" alt="BG" class="bg-img">
                            <img src="images\tbanner.svg" alt="GFonts" style="width: 500px;">
                            <div class="d-flex align-items-center justify-content-between">
                                <div class="infos">
                                    <h1></h1>
                                    <h2> Rudevs T-shirt</h2>
                                </div>

                                <a href="blog.php" class="about-btn">
                                    <img src="images/icon.svg" alt="Button">
                                </a>

                            </div>
                        </div>

                  
                </div>

            
            </div>
        </section>


    <!-- about-4 -->


        <!-- Footer -->
        <!-- <?php 
        require "footer.php";
        ?> -->

    </main>
    

    <script src="jquery-3.6.4.js"></script>
    <script src="bootstrap.bundle.min.js"></script>
    <script src="aos.js"></script>
    <script src="main.js"></script>
</body>

</html>