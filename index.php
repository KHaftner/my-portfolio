<?php
$pageTitle = "Web Developer";
require "head.php";
include "svgs.php";
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);
?>

<body>
    <a href="#index-site-main" class="screen-reader-text">Skip to Content</a>

    <div class="site-wrapper">
        <?php
        require "site-header.php";
        ?>
        <div class="index-top-wrapper">
            <main id="index-site-main">
                <div class="above-fold-wrapper">
                    <div class="page-header-wrapper">
                        <header class="index-page-header">
                            <div class="animation" data-aos="fade-up" data-aos-delay="400">
                                <h1>Web Development <br><span class="h1-part2">in</span> <span class="h1-part3">Full Bloom</span></h1>
                                <h2>Kassandra Haftner's Portfolio.</h2>
                            </div>
                        </header>
                    </div>

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

        <section class="below-fold-content" id="below-fold-content">

            <div class="intro-message">
                <h2 data-aos="zoom-in-right" data-aos-delay="200">Welcome.</h2>
                <div class="p-container">
                    <p class="intro-p">
                    I appreciate you taking the time to check out my work!<br> I'm a freelance web developer looking to take on some extra projects while I work towards my degree in Computing Science at TRU. In addition to my current studies, I've also completed the Front-End Web Development program at BCIT.</p>
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

        </section>

        <div class="bottom-below-fold"></div>

        <section class="bottom-content" id="bottom-content">
            <div class="bottom-content-top">
                <h2 data-aos="zoom-in" data-aos-delay="100">Explore.</h2>
            </div>

            <div class="bottom-content-wrapper">

                <div class="main-card">
                    <article data-aos="flip-left" data-aos-delay="200">
                        <div class="overlay-card">
                            <a href="projects.php">
                                <div class="overlay">
                                </div>
                            </a>
                        </div>
                        <div class="card-text-content">
                                <p>My Projects.</p>
                        </div>
                    </article>
                </div>
                <div class="main-card">
                    <article  data-aos="flip-left" data-aos-delay="300">
                        <div class="overlay-card">
                            <a href="about.php">
                                <div class="overlay">
                                </div>
                            </a>
                        </div>
                        <div class="card-text-content">
                                <p>About Me.</p>
                        </div>
                    </article>
                </div>

                <div class="main-card">
                    <article  data-aos="flip-left" data-aos-delay="400">
                        <div class="overlay-card">
                            <a href="contact.php">
                                <div class="overlay">
                                </div>
                            </a>
                        </div>
                        <div class="card-text-content">
                                <p>Contact Me.</p>
                        </div>
                    </article>
                </div>

        
            </div>

        </section>
        </main>

        <?php
        require "site-footer.php";
        ?>
    </div>

    <script src="scripts/scripts.js"></script>
    <script src="node_modules/aos/dist/aos.js"></script>
</body>

</html>