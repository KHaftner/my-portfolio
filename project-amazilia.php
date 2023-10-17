<?php
$pageTitle = "Amazilia Acrescapers";
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
                    <h2>Amazilia Acrescapers</h2>
                </header>

                <img src="images/amazilia-polaroid.jpg"
                    alt="A polaroid image for the Amazilia Acrescapers project that says 'Project Ongoing'"
                    class="polaroid">

                <section class="my-project-info">

                    <article>

                        <h3>WordPress CMS | Sass CSS | HTML | PHP | JavaScript | Git</h3>
                        <h3>Overview</h3>
                        <h3>Process</h3>
                        <h3>Challenges & Lessons Learned</h3>

                        <p class="ongoing">Project Ongoing - Writeup Coming Soon!</p>

                        <div class="bottom-git-wrapper">

                            <a href="https://github.com/htpwebdesign/amazilia" target="_blank">View on GitHub</a>
                            <a href="https://amazilia.bcitwebdeveloper.ca/" target="_blank">View Live Site</a>
                        </div>

                    </article>

                    <a href="projects.php" class="bottom-projects">Back to Projects?</a>

                </section>
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