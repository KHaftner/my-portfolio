<?php
$pageTitle = "My Blog";
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
            <div class="blog-page-wrapper">
                <header class="other-page-header">
                    <h1 data-aos="zoom-in" data-aos-delay="250">My Blog.</h1>
                    <h2 class="contact-h2">Welcome to my blog! 🌸</h2>
                </header>

                <section class="blog-content">

                <script src="scripts/blog-posts.js" defer></script>

                </section>

                <?php
                require "back-to-top.php";
                ?>


        </main>

        <?php
        require "site-footer.php";
        ?>

        <script src="scripts/scripts.js"></script>
        <script src="node_modules/aos/dist/aos.js"></script>
</body>

</html>