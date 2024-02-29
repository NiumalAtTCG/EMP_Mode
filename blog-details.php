
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
    <?php
    require "loading.php"
    ?>

        <!-- Breadcrumb -->
        <section class="breadcrumb-area">
            <div class="container">
                <div class="breadcrumb-content" data-aos="fade-up">
                    <p>HOME - BLOG DETAILS</p>
                    <h1 class="section-heading"><img src="images/star-2.png" alt="Star"> Key Features <img src="images/star-2.png" alt="Star"></h1>
                </div>
            </div>
        </section>


        <!-- Blog Details -->
        <section class="blog-details-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <div class="blog-details-content">
                         
                            <span class="meta">25 March 2022 - Comments (4) - Share (7)</span>
                            <h1>Atomic Core</h1>
                            <p>The central atrium, shaped like the nucleus of an atom, houses a grand auditorium with breathtaking digital installation . This ever-evolving display visualizes Rudevs' ongoing projects, pulsating with the energy of their collective vision.</p>
                            <h1>Pixel Labs</h1>
                            <p>State-of-the-art research and development labs equipped with the latest AI, IoT, and gaming technologies empower Rudevs' team to push the boundaries of the possible.</p>
                            <h1> Pixel Studios</h1>
                            <p> Immersive art studios, bathed in soft, natural light, provide the perfect environment for designers and artists to bring their imaginative visions to life.
                            </p>
                            <h1> Collaboration Hubs</h1>
                            <p>  Open, dynamic spaces designed to foster teamwork and brainstorming, featuring interactive walls, holographic displays, and comfortable seating areas.
                            </p>
                            <h1> Metaverse Gateway</h1>
                            <p> A dedicated portal to the metaverse, allowing employees and partners to explore virtual worlds, collaborate on projects, and host events in groundbreaking new ways.
                            </p>
                            <h1> The Atom</h1>
                            <p> Represents the fundamental building blocks of creation, reflecting Rudevs' focus on crafting experiences from the ground up.
                            </p>
                            <h1> The Pixe</h1>
                            <p>  Embodies the company's meticulous attention to detail and its commitment to excellence in every aspect.
                            </p>
                            <h1> The Pulsating Light</h1>
                            <p>  Symbolizes the constant innovation and dynamic nature of Rudevs' work.
                               
                                 </p>
                                 <div class="img-box">
                                    <img src="images/model01.png" alt="Blog">
                                </div>
                                <div class="img-box">
                                    <img src="images\Frame 6.svg" alt="Blog">
                                </div>
                                <div class="img-box">
                                    <img src="images\Frame 7.svg" alt="Blog">
                                </div>
                              

                            

                            

                            <!-- <div class="comments-and-form-wrap">
                                <div class="comments-and-form-wrap-inner shadow-box">
                                    <h2>2 Comments</h2>

                                    <div class="comments">

                                        <div class="comment-list">
                                            <div class="comment-avatar">
                                                <img src="assets/images/comment.png" alt="Avatar">
                                            </div>
                                            <div class="comment-body">
                                                <span class="date">25 March 2022</span>
                                                <h3>Jonathan Doe</h3>
                                                <p>Sit amet luctussd fav venenatis, lectus magna fringilla inis urna, porttitor rhoncus dolor purus non enim praesent in elementum lobs eu volutpat odio facilisis mauris sit.</p>
                                                <a href="#" class="reply-btn theme-btn">Reply</a>
                                            </div>
                                        </div>

                                        <div class="children">
                                            <div class="comment-list">
                                                <div class="comment-avatar">
                                                    <img src="assets/images/comment.png" alt="Avatar">
                                                </div>
                                                <div class="comment-body">
                                                    <span class="date">25 March 2022</span>
                                                    <h3>Jonathan Doe</h3>
                                                    <p>Sit amet luctussd fav venenatis, lectus magna fringilla inis urna, porttitor rhoncus dolor purus no odio facilisis mauris sit.</p>
                                                    <a href="#" class="reply-btn theme-btn">Reply</a>
                                                </div>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="comment-form">
                                        <h2>Leave A Reply</h2>

                                        <form>
                                            <div class="input-group">
                                                <input type="text" name="name" placeholder="Name*">
                                            </div>
                                            <div class="input-group">
                                                <input type="text" name="email" placeholder="Email*">
                                            </div>
                                            <div class="input-group">
                                                <textarea name="message" placeholder="Your Message*"></textarea>
                                            </div>
                                            <div class="input-group">
                                                <button class="theme-btn" type="submit">Send Message</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div> -->

                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="blog-sidebar">
                            <div class="blog-sidebar-inner">

                                <div class="blog-sidebar-widget search-widget">
                                    <div class="blog-sidebar-widget-inner" data-aos="zoom-in">
                                      <h1>Roadmap</h1>
                                    </div>
                                </div>

                                <div class="blog-sidebar-widget recent-post-widget" data-aos="zoom-in">
                                    <div class="blog-sidebar-widget-inner shadow-box">
                                        <h3>Phase-1 Pixel Perfection (Years 1-3)
                                        </h3>

                                        <ul>
                                            <h4>Focus: </h4>
                                            <li><a href="blog-details.html">Solidify foundation in gaming, build community, initiate AI research.</a></li>
                                            <!-- <li><a href="blog-details.html">Unsatiable entreaties may collecting Power.</a></li>
                                            <li><a href="blog-details.html">Discovery incommode earnestly no he commanded</a></li>
                                            <li><a href="blog-details.html">Unsatiable entreaties may collecting Power.</a></li> -->
                                        </ul>

                                        <h4 class="mt-4">Key Objectives (Gaming):</h4>
                                        <ul>
                                            <li><a href="">   * Release 2-3 high-quality pixel art games across multiple platforms.</a></li>
                                            <li><a href=""> * Establish a loyal gaming community through active engagement and feedback incorporation.
                                            </a></li>
                                            <li><a href="">   * Partner with academic institutions and industry leaders for knowledge sharing.

                                            </a></li>
                                            
                                        </ul>

                                        <h4 class="mt-4">AI:</h4>
                                        <ul>
                                            <li><a href="">   * Build a dedicated AI research team with top talent.</a></li>
                                            <li><a href="">   * Initiate research on AI integration in games (NPCs, content generation, personalization).

                                            </a></li>
                                            <li><a href=""> * Refine development process with data-driven insights.
                                            </a></li>
                                            
                                        </ul>
                                        

                                    </div>
                                </div>

                                <div class="blog-sidebar-widget recent-post-widget" data-aos="zoom-in">
                                    <div class="blog-sidebar-widget-inner shadow-box">
                                        <h3>Phase 2: Expanding Horizons (Years 4-6)
                                        </h3>

                                        <ul>
                                            <h4>Focus: </h4>
                                            <li><a href="blog-details.html">Infuse AI into games, explore IoT integration, showcase expertise.</a></li>
                                            <!-- <li><a href="blog-details.html">Unsatiable entreaties may collecting Power.</a></li>
                                            <li><a href="blog-details.html">Discovery incommode earnestly no he commanded</a></li>
                                            <li><a href="blog-details.html">Unsatiable entreaties may collecting Power.</a></li> -->
                                        </ul>

                                        <h4 class="mt-4">Key Objectives (AI in Gaming):</h4>
                                        <ul>
                                            <li><a href="">  * Seamlessly integrate AI advancements into new and existing games.
                                            </a></li>
                                            <li><a href=""> * Develop AI-powered tools for game developers.

                                            </a></li>
                                            <li><a href="">      * Showcase expertise at industry events and conferences.


                                            </a></li>
                                            
                                        </ul>

                                        <h4 class="mt-4">IoT Integration:</h4>
                                        <ul>
                                            <li><a href="">   * Experiment with incorporating IoT devices into gameplay for unique interactions.
                                            </a></li>
                                            <li><a href="">    * Research potential of IoT for data collection and game design refinement.


                                            </a></li>
                                            <li><a href="">   * Partner with IoT hardware manufacturers for co-creation opportunities.

                                            </a></li>
                                            
                                        </ul>
                                        

                                    </div>
                                </div>
                                <div class="blog-sidebar-widget recent-post-widget" data-aos="zoom-in">
                                    <div class="blog-sidebar-widget-inner shadow-box">
                                        <h3>Phase 2: Expanding Horizons (Years 4-6)
                                        </h3>

                                        <ul>
                                            <h4>Focus: </h4>
                                            <li><a href="blog-details.html"> Research emerging technologies, diversify into new industries, maintain leadership position.
                                            </a></li>
                                            <!-- <li><a href="blog-details.html">Unsatiable entreaties may collecting Power.</a></li>
                                            <li><a href="blog-details.html">Discovery incommode earnestly no he commanded</a></li>
                                            <li><a href="blog-details.html">Unsatiable entreaties may collecting Power.</a></li> -->
                                        </ul>

                                        <h4 class="mt-4">Key Objectives (Cutting-Edge Research):</h4>
                                        <ul>
                                            <li><a href="">    * Conduct research in brain-computer interfaces, augmented reality, and the metaverse.
                                            </a></li>
                                            <li><a href=""> * Explore potential for future gaming experiences.
                                            </a></li>
                                          
                                            
                                        </ul>

                                        <h4 class="mt-4"> Industry Diversification:</h4>
                                        <ul>
                                            <li><a href="">   * Apply AI and IoT expertise to develop innovative solutions in healthcare, education, and other sectors.

                                            </a></li>
                                            <li><a href="">    * Foster a culture of continuous learning and adaptation.


                                            </a></li>
                                       
                                            
                                        </ul>
                                        <h4 class="mt-4">  Leadership and Collaboration:</h4>
                                        <ul>
                                            <li><a href="">   * Collaborate with external partners to stay at the forefront of emerging technologies.
                                            </a></li>
                                            <li><a href="">      * Maintain a strong reputation for innovation and excellence.
                                            </a></li>

                                            <p>  * By consistently innovating, fostering collaboration, and embracing new challenges, Rudevs Corporation can solidify its position as a leader shaping the future of interactive experiences.</p>
                                       
                                            
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