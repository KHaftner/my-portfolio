<?php
$pageTitle = "Abby Wants to Play!";
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
                    <h2>Abby Wants to Play!</h2>
                </header>

                <img src="images/abby-polaroid.jpg"
                    alt="A polaroid image for the Abby Wants to Play project" class="polaroid">

                <section class="my-project-info">

                    <article>
                        <h3>JavaScript | CSS | HTML</h3>
                        <h3>Overview</h3>
                        <figure>
                            <img src="images/abby-mole-pic.png"
                                alt="The little cutout picture of Abby that I used as the game's 'mole'">
                        </figure>
                        <figcaption>"Hey, you! Wanna play?"</figcaption>

                        <p>This project was a lot of fun! I completed it at the end of my Web Scripting 1 course in the
                            Front-End Web Developer
                            program at BCIT. The goal was to create a functional JavaScript-based web game that follows
                            the
                            pattern of Whack-A-Mole (that's the game I chose from the suggested list), with my own
                            personal twist to it! Abby (my lovely dog) had been upset with me for focusing too much on
                            school, so I decided to make a game out of it. My friends and spouse had a good laugh from
                            this
                            game. Going forward, I
                            definitely want to make some more silly games like this to practice my vanilla JS some more.
                        </p>
                        <figure>
                            <a href="images/abby-wants-to-play-pre-screen.jpg" target="_blank"><img
                                    src="images/abby-wants-to-play-pre-screen.jpg"
                                    alt="A screenshot of the opening screen of Abby Wants to Play!"></a>
                        </figure>
                        <figcaption>The opening screen of the game.</figcaption>
                        <figure>
                            <a href="images/abby-wants-to-play.jpg" target="_blank"><img
                                    src="images/abby-wants-to-play.jpg"
                                    alt="A screenshot of the main game screen of Abby Wants to Play!"
                                    loading="lazy"></a>
                        </figure>
                        <figcaption>The main game board screen.</figcaption>

                        <hr>

                        <h3>Process</h3>
                        <p>I began the process by researching how Whack-A-Mole games work (mainly as a refresher of the
                            rules). I wrote down all
                            of the requirements and my personal touches that I wanted to add to the game. I then decided
                            on
                            how I wanted the game to run, and I wrote down all of the steps that I needed to do in order
                            to
                            "translate" the steps into code. I used a CSS Grid for the game board, and made Abby appear
                            on
                            the game board and disappear from the game board after a certain amount of milliseconds. I
                            created
                            Easy, Normal, and Hard difficulties based on the milliseconds. Interestingly, I noticed that
                            even though the jump from Normal to Hard was minimal, that seemed to be the threshold from
                            "easy-ish" to "almost impossible". </p>
                        <p>To win the game, the player has to catch Abby at least 20 times in 30 seconds. The player
                            clicks
                            a button to start the game, and then the timer and score tracker start going. Every time the
                            player clicks on Abby successfully, a point is added to their score. If the player wins the
                            game,
                            they get the "good" ending screen at the end, and they can see how many times they clicked
                            on
                            Abby as well. If the player loses the game, they get the "bad" ending screen at the end
                            instead.
                            Pretty straightfoward. There's also a Play Again button on the ending screens, which reloads
                            the
                            game.</p>
                        <figure>
                            <a href="images/abby-wants-to-play-win.jpg" target="_blank"><img
                                    src="images/abby-wants-to-play-win.jpg" alt="A screenshot of the Win screen"
                                    loading="lazy"></a>
                        </figure>
                        <figcaption>The "Good" Ending.</figcaption>

                        <figure>
                            <a href="images/abby-wants-to-play-lose.jpg" target="_blank"><img
                                    src="images/abby-wants-to-play-lose.jpg" alt="A screenshot of the Lose screen"
                                    loading="lazy"></a>
                        </figure>
                        <figcaption>The "Bad" Ending.</figcaption>

                        <hr>

                        <h3>Challenges & Lessons Learned</h3>
                        <p>We started this project back when JavaScript was still brand-new to us, so it was quite the
                            challenge at first! When the project was first assigned, I was very intimidated by it. As we
                            approached the final stretch of Web Scripting 1, the pieces began to fall more into place
                            for
                            me, but I still needed to look up a lot of stuff online. I learned so much along the way as
                            little bugs came up... Seems that bugs are one of the best ways to learn, since when you
                            know
                            what causes them, you know how to avoid them going forward.</p>
                        <p>For example, one bug that I recall encountering was from a conditional that led you to the
                            "bad"
                            ending if you clicked the button to end the game early. I wasn't specific enough at first,
                            and
                            after testing the game several times, I found the bug. Pretty much, if the player racked up
                            20
                            points already and then ended the game after obtaining the "win" condition, the bad ending
                            screen would pop up (as I wanted), BUT, once the timer was due to run out, the good ending
                            would
                            pop up as well... I had to modify the conditionals to make them more specific. I'm glad I
                            caught
                            that and that I was able to use it as a learning experience. After all, computers do exactly
                            what you tell them to... <em><strong>Exactly</strong> what you tell them to.</em> Haha.</p>
                        <p>Our focus on this project was on JavaScript rather than responsiveness, so this game is
                            currently not mobile-friendly. I want to add this in the future to polish this example off a
                            bit
                            more since it feels incomplete without responsiveness (now that I've been doing this
                            longer, I can't imagine not making things responsive).</p>
                    </article>

                    <div class="bottom-git-wrapper">
                        <a href="https://github.com/KHaftner/abby-wants-to-play" target="_blank">View on GitHub</a>
                        <a href="https://khaftner.ca/abby-wants-to-play" target="_blank">View Live Site</a>
                    </div>

                    <a href="projects.php" class="bottom-projects">Back to Projects?</a>
            </div>
            </section>

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