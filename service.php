
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

    <main class="main-homepage">

    <?php
    require "hedder.php";
    ?>
    <?php
    require "loading.php"
    ?>

        <!-- Service -->
        <section class="service-area">
            <div class="container">
                <h1 class="section-heading" data-aos="fade-up"><img src="images/star-2.png" alt="Star"> My Offerings <img src="images/star-2.png" alt="Star"></h1>
                
                <div class="row">

                    <!-- Sidebar -->
                    <div class="col-md-3">
                        <div class="service-sidebar" data-aos="fade-right">
                            <div class="service-sidebar-inner shadow-box">
                                <ul>
                                    <li>
                                        <i class="iconoir-camera icon"></i>
                                        Game Development
                                    </li>
                                    <li>
                                        <i class="iconoir-design-pencil icon"></i>
                                        Web Designing
                                    </li>
                                    <li>
                                        <i class="iconoir-color-filter icon"></i>
                                        Mobile Application Development
                                    </li>
                                    <li>
                                        <i class="iconoir-dev-mode-phone icon"></i>
                                       Portfolio
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- Content -->
                    <div class="col-md-9">
                        <h1 class="section-heading" data-aos="fade-up"><img src="images/star-2.png" alt="Star"> Our Offerings <img src="images/star-2.png" alt="Star"></h1>

                        <div class="service-content-wrap" data-aos="zoom-in">
                            <div class="service-content-inner shadow-box">
                                <div class="service-items">
                                    <div class="service-item text-center">
                                        <h2>Game Development</h2>
                                        <img class="mt-4" src="images\rudevs g-1.png"  >
                                    </div>
                                    <div class="service-item text-center">
                                        <h2 >Web Designing</h2>
                                        <img class="mt-4" src="images/image 5.png"  >
                                    </div>
                                    <div class="service-item text-center">
                                        <h2>Mobile Application Development</h2>
                                        <img class="mt-4" src="images/Screenshot 2023-06-27 113919 1.png" style="width: 105px;" >
                                    </div>
                                    <div class="service-item text-center">
                                        <h2>Portfolio</h2>
                                        <img class="mt-4" src="images/boxing prtfolioo.png"  >
                                    </div>
                                </div>
                            </div>
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
    

    <script src="jquery-3.6.4.js"></script>
    <script src="bootstrap.bundle.min.js"></script>
    <script src="aos.js"></script>
    <script src="main.js"></script>
</body>

</html>