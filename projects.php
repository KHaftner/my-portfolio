<?php
$pageTitle = "My Projects";
require "head.php";
include "svgs.php";
?>

<!-- Projects Page Body. -->
<body>
    <!-- For Screen Readers: Skip to Content. -->
    <a href="#site-main" class="screen-reader-text">Skip to Content</a>

    <!-- Site wrapper for everything in the body. -->
    <div class="site-wrapper">

        <!-- Site header goes here. -->
        <?php
        require "site-header.php";
        ?>

        <!-- Wrapper for the main site content including the footer. -->
        <div class="main-content-and-footer">
            <main id="site-main">

                <section class="showcased-projects">
                    <header class="other-page-header">
                        <h1 data-aos="zoom-in" data-aos-delay="250">My Projects.</h1>
                    </header>

                    <!-- Slider main container. -->
                    <div class="swiper">
                        <!-- Additional required wrapper. -->
                        <div class="swiper-wrapper">

                            <!-- Slides. -->

                            <div class="swiper-slide">
                                <a class="project-card" href="project-abby.php">
                                    <article>
                                        <figure>
                                            <img src="images/project01.png" alt="A polaroid image with a preview of the Abby Wants to Play game" class="polaroid-preview abby bottom">
                                            <figcaption>Abby Wants to Play!</figcaption>
                                        </figure>
                                    </article>
                                </a>
                            </div>

                            <div class="swiper-slide">                        
                                <a class="project-card" href="project-movies.php">
                                    <article>
                                        <figure>
                                            <img src="images/project02.png" alt="A polaroid image with a preview of the Movie Love website" class="polaroid-preview movies bottom">
                                            <figcaption>Movie Love</figcaption>
                                        </figure>
                                    </article>
                                </a>
                            </div>

                            <div class="swiper-slide">
                                <a class="project-card" href="project-portfolio.php">
                                    <article>
                                        <figure>
                                            <img src="images/project03.png" alt="A polaroid image with a preview of the Movie Love website" class="polaroid-preview movies bottom">
                                            <figcaption>Portfolio Version One</figcaption>
                                        </figure>
                                    </article>
                                </a>
                            </div>

                            <div class="swiper-slide">
                                <a class="project-card" href="project-amazilia.php">
                                    <article>
                                        <figure>
                                            <img src="images/project04.png" alt="A polaroid image for the Amazilia Acrescapers project" class="polaroid-preview amazilia bottom">
                                            <figcaption>Amazilia Acrescapers</figcaption>
                                        </figure>
                                    </article>
                                </a>
                            </div>

                            <div class="swiper-slide">
                                <a class="project-card" href="project-lostonboard.php">
                                    <article>
                                        <figure>
                                            <img src="images/project05.png" alt="A polaroid image with a preview of the Abby Wants to Play game" class="polaroid-preview abby bottom">
                                            <figcaption>Lost on Board</figcaption>
                                        </figure>
                                    </article>
                                </a>
                            </div>

                            <div class="swiper-slide">
                                <a class="project-card" href="project-puppersonpatrol.php">
                                    <article>
                                        <figure>
                                            <img src="images/project06.png" alt="A polaroid image for the Amazilia Acrescapers project" class="polaroid-preview amazilia bottom">
                                            <figcaption>Puppers on Patrol</figcaption>
                                        </figure>
                                    </article>
                                </a>
                            </div>

                        </div>

                        <!-- Pagination. -->
                        <div class="swiper-pagination"></div>

                        <!-- Navigation Buttons. -->
                        <div class="swiper-button-prev"></div>
                        <div class="swiper-button-next"></div>

                    </div>

                    <?php
                    require "site-footer.php";
                    ?>
                </section>
            </main>
        </div>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="scripts/scripts.js"></script>
    <script src="node_modules/aos/dist/aos.js"></script>
</body>

</html>