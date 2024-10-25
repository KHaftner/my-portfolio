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
                <section class="projects-top-content">
                    <header class="other-page-header">
                        <h1 data-aos="zoom-in" data-aos-delay="250">My Projects.</h1>
                        <h2>I'll be updating this page regularly to document projects that I have worked on in my development career.</h2>
                    </header>
                </section>
                <section class="showcased-projects">
                    <div class="projects-container">
                        <a class="main-card" href="project-movies.php">
                            <article>
                                <figure>
                                    <img src="images/project02.png" alt="A polaroid image with a preview of the Movie Love website" class="polaroid-preview movies bottom">
                                    <figcaption>Movie Love</figcaption>
                                </figure>
                            </article>
                        </a>
                        <a class="main-card" href="project-abby.php">
                            <article>
                                <figure>
                                    <img src="images/project01.png" alt="A polaroid image with a preview of the Abby Wants to Play game" class="polaroid-preview abby bottom">
                                    <figcaption>Abby Wants to Play!</figcaption>
                                </figure>
                            </article>
                        </a>
                        <a class="main-card" href="project-amazilia.php">
                            <article>
                                <figure>
                                    <img src="images/project04.png" alt="A polaroid image for the Amazilia Acrescapers project" class="polaroid-preview amazilia bottom">
                                    <figcaption>Amazilia Acrescapers</figcaption>
                                </figure>
                            </article>
                        </a>
                        <a class="main-card" href="project-portfolio.php">
                            <article>
                                <figure>
                                    <img src="images/project03.png" alt="A polaroid image with a preview of the Movie Love website" class="polaroid-preview movies bottom">
                                    <figcaption>Portfolio Version One</figcaption>
                                </figure>
                            </article>
                        </a>
                        <a class="main-card" href="project-lostonboard.php">
                            <article>
                                <figure>
                                    <img src="images/project05.png" alt="A polaroid image with a preview of the Abby Wants to Play game" class="polaroid-preview abby bottom">
                                    <figcaption>Lost on Board</figcaption>
                                </figure>
                            </article>
                        </a>
                        <a class="main-card" href="project-puppersonpatrol.php">
                            <article>
                                <figure>
                                    <img src="images/project06.png" alt="A polaroid image for the Amazilia Acrescapers project" class="polaroid-preview amazilia bottom">
                                    <figcaption>Puppers on Patrol</figcaption>
                                </figure>
                            </article>
                        </a>
                    </div>

                    <?php
                    require "site-footer.php";
                    ?>
                </section>
            </main>
            </div>
    </div>
    <script src="scripts/scripts.js"></script>
    <script src="node_modules/aos/dist/aos.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
</body>

</html>