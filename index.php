<?php
$pageTitle = "Web Developer";
require "head.php";
include "svgs.php";
?>

<!-- Index Page Body. -->
<body>
    <!-- For Screen Readers: Skip to Content. -->
    <a href="#index-site-main" class="screen-reader-text">Skip to Content</a>

    <!-- Site wrapper for everything in the body. -->
    <div class="site-wrapper">

        <!-- Site header goes here. -->
        <?php
        require "site-header.php";
        ?>

        <!-- Wrapper for the main site content including the footer. -->
        <div class="main-content-and-footer">

            <main id="index-site-main">

                <!-- Note to self: Maybe try cleaning up/removing some divs later. -->
                <div class="index-top-wrapper">

                    <div class="above-fold-wrapper">

                        <div class="page-header-wrapper">
                            <header class="index-page-header">
                                <div class="animation" data-aos="fade-up" data-aos-delay="400">
                                    <h1>Web Development <br><span class="h1-part2">in</span> <span class="h1-part3">Full Bloom</span></h1>
                                    <h2>Kassandra Haftner's Portfolio.</h2>
                                </div>
                            </header>
                        </div>

                        <div class="down-button">
                            <a href="#below-fold-content">
                                <svg class="arrows">
                                    <title>Down Button</title>
                                    <path class="a1" d="M0 0 L30 32 L60 0"></path>
                                    <path class="a2" d="M0 20 L30 52 L60 20"></path>
                                    <path class="a3" d="M0 40 L30 72 L60 40"></path>
                                </svg>
                            </a>
                        </div>

                    </div>

                </div>

                <section class="below-fold-content" id="below-fold-content">

                    <div class="intro-message">

                        <h2 data-aos="zoom-in-right" data-aos-delay="200">Welcome.</h2>
                        <div class="p-container">
                            <p class="intro-p">I appreciate you taking the time to check out my work!<br> I'm a freelance web developer looking to take on some extra projects while I work towards my degree in Computing Science at TRU. In addition to my current studies, I've also completed the Front-End Web Development program at BCIT.</p>
                        </div>

                        <div class="down-button">
                            <a href="#bottom-content">
                                <svg class="arrows">
                                    <title>Down Button</title>
                                    <path class="a1" d="M0 0 L30 32 L60 0"></path>
                                    <path class="a2" d="M0 20 L30 52 L60 20"></path>
                                    <path class="a3" d="M0 40 L30 72 L60 40"></path>
                                </svg>
                            </a>
                        </div>

                    </div>

                </section>

                <div class="bottom-and-footer">

                    <section class="bottom-content" id="bottom-content">

                        <div class="bottom-content-top">
                            <h2 data-aos="zoom-in" data-aos-delay="100">Explore.</h2>
                        </div>

                        <div class="bottom-content-wrapper" data-aos="flip-up" data-aos-delay="100">

                            <a class="main-card" href="about.php">
                                <article class="about-card" >
                                    <figure>
                                        <img src="images/about-me.jpg" alt="An image of an open book with flowers sprinkled about.">
                                        <figcaption>
                                            About Me
                                        </figcaption>
                                    </figure>
                                </article>
                            </a>

                            <a class="main-card" href="projects.php">
                                <article class="projects-card">
                                    <figure>
                                        <img src="images/my-projects.jpg" alt="An image of a computer, pens, and sticky notes on a table.">
                                        <figcaption>
                                            My Projects
                                        </figcaption>
                                    </figure>
                                </article>
                            </a>

                            <a class="main-card" href="contact.php">
                                <article class="contact-card">
                                    <figure>
                                        <img src="images/contactme.jpg" alt="Someone dialing an old school phone.">
                                        <figcaption>
                                            Contact Me
                                        </figcaption>
                                </article>
                            </a>

                        </div>
            
                    </section>
                    <div class="bottom-page-content">

                        <div class="back-to-top">
                            <a href="#top"> 
                                <svg width="24" height="24" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd">
                                    <title>Back to Top</title>
                                    <path d="M11 2.206l-6.235 7.528-.765-.645 7.521-9 7.479 9-.764.646-6.236-7.53v21.884h-1v-21.883z">
                                </svg>
                                <p>Back to the top?</p>
                            </a>
                        </div>
                        
                        <!-- Site Footer -->
                        <?php
                        require "site-footer.php";
                        ?>
                    </div>

                </div>

            </main>

        </div>

    </div>

    <script src="scripts/scripts.js"></script>
    <script src="node_modules/aos/dist/aos.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

</body>
</html>