<?php
$pageTitle = "My Projects";
require "head.php";
include "svgs.php";
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);
?>

<body>
    <a href="#site-main" class="screen-reader-text">Skip to Content</a>

    <div class="site-wrapper">
        <div class="site-header-wrapper">
        <?php
        require "site-header.php";
        ?>
        </div>

        <main id="site-main">
            <div class="projects-page-wrapper">
                <header class="other-page-header">
                    <h1>My Projects.</h1>
                    <h2>
                        I love to code! 🌸
                    </h2>
                </header>
                <section class="showcased-projects">
                    <article>
                        <a href="project-movies.html"><img src="images/movie-love-polaroid2.jpg"
                                alt="A polaroid image with a preview of the Movie Love website"
                                class="polaroid-preview movies"></a>
                    </article>
                    <article>
                        <a href="project-abby.html"><img src="images/abby-wants-to-play-polaroid2.jpg"
                                alt="A polaroid image with a preview of the Abby Wants to Play game"
                                class="polaroid-preview abby"></a>
                    </article>
                    <article>
                        <a href="project-amazilia.html"><img src="images/amazilia-poraloid2.jpg"
                                alt="A polaroid image for the Amazilia Acrescapers project that says 'Project Ongoing'"
                                class="polaroid-preview amazilia"></a>
                    </article>
                </section>

                <div class="bottom-git-wrapper">
                    <h3>More Projects to Come! ✌</h3>
                    <p>This portfolio was made with Vanilla HTML / CSS / JavaScript.</p>
                    <a href="https://github.com/KHaftner/my-portfolio" target="_blank">View on GitHub</a>
                </div>

                <?php
                require "back-to-top.php";
                ?>
        </main>
        <?php
        require "site-footer.php";
        ?>
    </div>
    <script src="scripts/scripts.js"></script>
</body>

</html>