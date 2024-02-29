
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

    <main class="main-workdetails-page">

        <!-- Header -->
        <?php
    require "hedder.php";
    ?>

        <!-- Breadcrumb -->
        <section class="breadcrumb-area">
            <div class="container">
                <div class="breadcrumb-content" data-aos="fade-up">
                    <p>HOME - BLOG</p>
                    <h1 class="section-heading"><img src="images/star-2.png" alt="Star"> Rudevs Business mode <img src="images/star-2.png" alt="Star"></h1>
                </div>
            </div>
        </section>


        <!-- Blog Items -->
        <section class="blog-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <div class="blog-items">
                            <div class="blog-item" data-aos="zoom-in">
                                <div class="img-box d-none d-lg-block">
                                    <img class="d-block d-lg-none" src="images/model.png" alt="Blog">
                                    <video controls="false" autoplay="autoplay"  controls loop style="width: 670px;border: 30px;">
                                        <source src="videos/Untitled video - Made with Clipchamp.mp4" type="video/mp4">
                                      
                                        Your browser does not support the video tag.
                                      </video>
                                     
                                </div>
                                <div class="content d-block d-lg-none   ">
                                    <span class="meta">29 February 2022 </span>
                                    <h1><a href="blog-details.html">Pixel Alchemy HQ</a></h1>
                                    <p class="fs-4"> Where Imagination Takes Form </p>
                                    
                                </div>
                            </div>

                            <div class="blog-item" data-aos="zoom-in">
                                <div class="img-box">
                                    <img src="images/ru2 (1).jpg" alt="Blog">
                                </div>
                                <!-- <div class="content">
                                    <span class="meta">25 March 2022 - Comments (4) - Share (7)</span>
                                    <h1><a href="blog-details.html">Unsatiable entreaties may collecting Power.</a></h1>
                                    <p>Sit amet luctussd fav venenatis, lectus magna fringilla inis urna, porttitor rhoncus dolor purus non enim praesent in elementum sahas facilisis leo, vel fringilla est ullamcorper eget nulla facilisi etisam dignissim diam quis enim lobortis viverra orci sagittis eu volutpat odio facilisis mauris sit.</p>
                                    <a href="blog-details.html" class="theme-btn">Read More</a>
                                </div> -->
                            </div>
                            
                            <div class="blog-item" data-aos="zoom-in">
                                <div class="img-box">
                                    <img src="images/Group 3.png" alt="Blog">
                                  
                                </div>
                                <div class="content">
                                    <span class="meta">25 March 2022 - Comments (4) - Share (7)</span>
                                    <h1><a href="blog-details.html">Impact</a></h1>
                                    <p>Pixel Alchemy HQ is more than just a building; it's a tangible expression of Rudevs' values and ambitions. It serves as a beacon of inspiration for employees, partners, and the wider tech community, showcasing the transformative power of "one pixel at a time" thinking.
                                        Remember: This is just a starting point. Feel free to add your own creative details and ideas to make Pixel Alchemy HQ truly unique and representative of Rudevs Corporation's vision.
                                        .</p>
                                    <a href="blog-details.php" class="theme-btn">Read More</a>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="blog-sidebar">
                            <div class="blog-sidebar-inner">

                                <!-- <div class="blog-sidebar-widget search-widget">
                                    <div class="blog-sidebar-widget-inner" data-aos="zoom-in">
                                        <form class="shadow-box">
                                            <input type="text" placeholder="Search Here...">
                                            <button class="theme-btn">Search</button>
                                        </form>
                                    </div>
                                </div> -->

                                <div class="blog-sidebar-widget recent-post-widget" data-aos="zoom-in">
                                    <div class="blog-sidebar-widget-inner shadow-box">
                                        <h3>Pixel Alchemy HQ</h3>

                                        <ul>
                                            <li><a href="blog-details.html"> Where Imagination Takes Form                                       
                                                
                                                </a></li>
                                            
                                        </ul>

                                    </div>
                                </div>

                                <div class="blog-sidebar-widget categories-widget" data-aos="zoom-in">
                                    <div class="blog-sidebar-widget-inner shadow-box">
                                        <h3>Concept</h3>

                                        <ul>
                                            <li><a href="blog-details.html">Imagine a colossal atom, its nucleus a vibrant sphere pulsing with light, representing the heart of Rudevs Corporation. This is Pixel Alchemy HQ, a testament to the company's dedication to crafting groundbreaking experiences, one pixel at a time.</a></li>
                                          
                                        </ul>

                                    </div>
                                </div>
                                <div class="blog-sidebar-widget categories-widget" data-aos="zoom-in">
                                    <div class="blog-sidebar-widget-inner shadow-box">
                                        <h3>Design</h3>

                                        <ul>
                                            <li><a href="blog-details.html">The building itself embodies the "one pixel at a time" philosophy. Its exterior is a mesmerizing mosaic of millions of individual tiles, each meticulously arranged to create ever-shifting patterns and animations. This facade serves as a living canvas, showcasing Rudevs' latest innovations and reflecting the company's dynamic spirit
                                                .</a></li>
                                          
                                        </ul>

                                    </div>
                                </div>

                                <div class="blog-sidebar-widget categories-widget" data-aos="zoom-in">
                                    <div class="blog-sidebar-widget-inner shadow-box">
                                        <h3>Interior</h3>

                                        <ul>
                                            <li><a href="blog-details.html">Stepping inside is akin to entering a wonderland of cutting-edge technology and boundless creativity. Collaborative workspaces seamlessly blend with art studios and research labs, fostering a culture of open exchange and experimentation.                                       
                                                </a></li>
                                          
                                        </ul>

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