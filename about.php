<?php
$pageTitle = "About Me";
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
            <div class="about-page-wrapper">
                <header class="other-page-header">
                    <h1 data-aos="zoom-in" data-aos-delay="250">About Me.</h1>
                    <h2>I appreciate your interest! 🌸 </h2>
                </header>

                <div class="about-flex-wrapper">

                    <img src="images/kassandra-pic.jpg" alt="A photo of myself" class="me-pic" />

                    <section class="about-page-content">

                        <p class="about-paragraph">
                            <strong>Hey there!</strong> 💖 Thank you so much for taking the time to find out more about
                            me. I'm new
                            to
                            the web
                            development world and eager to get some more experience!
                            I've worked for over a decade in the clerical field of healthcare, and I'm now dipping
                            my
                            feet into the world of web dev because I want a new challenge in my life. As this field
                            is
                            constantly changing, it seems like the
                            perfect opportunity to work my brain muscles a bit and
                            develop a passion. I'm a recent graduate of the BCIT Front-End Web Developer
                            program, and I look forward to the
                            opportunities that lie ahead in this ever-changing field! (That sounds cheesy, but I
                            mean
                            it! 😎)
                        </p>

                    </section>

                    <svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 1005 77' fill='var(--purple-darker3)'>
                        <title>Squiggly Divider</title>
                        <path
                            d='M1001.89 41.09c-2.07-1.74-7.04-2.19-13.58 3.95-5.43 4.48-11.57 8.28-17.75 11.62-8.38 4.53-22.48 6.82-29.46-1.84-2.55-3.16-3.34-8.09-4.6-11.89-1.54-4.65-3.07-9.3-4.7-13.91-2.26-6.41-5.05-13.64-10.66-17.89a22.6 22.6 0 0 0-14.15-4.86c-25.2.69-26.09 20.04-38.42 34.55-9.16 10.08-22.3 14.12-32.38 12.34-2.4-.56-3.87-.91-8-4.43-7.81-6.64-12.41-16.64-18.21-24.9-5.41-7.71-12.71-17.9-22.82-19.03-4.86-.55-9.79.62-14.29 2.52-10.63 4.49-19 12.86-26.07 21.77-5.4 6.81-10.94 19.33-21.4 18.39-2.73-.24-4.3-.45-6.34-1.69-5.54-4.08-12.34-17-20.04-27.48-3.59-4.89-7.27-10.56-13.12-12.93-4.1-1.66-8.79-1.38-13.03-.09-11.15 3.4-19.11 11.28-26.57 19.81-3.34 3.82-6.65 7.68-10.44 11.05-1.64 1.46-10.75 9.46-12.99 8.23-4.19-2.3-7.37-5.88-10.07-9.71-6.68-10.27-11.34-27.96-20.31-31.62-6.19-2.55-11.34.65-16.76 4.96-9.49 7.56-20.74 21.54-24.92 27.39-1.2 1.69-5.89 8.41-7.45 9.6-5.26-.52-7.89-1.71-12.54-6.8-12.23-14.29-13.39-27.23-22.88-34.16-7.24-5.3-19.1-2.93-26.19 1.31-8.7 5.21-14.55 14.81-20.19 23.27-6.3 9.29-9.2 12.35-14.17 16.85-2.69 2.31-4.81 4.12-7.82 5.45l.92-.32c-2.78 1.12-3.24.7-4.53.11a21.87 21.87 0 0 1-4.19-2.96c-4.08-3.42-5.06-7.62-6.25-12.55-1.44-5.95-3.25-11.87-6.26-17.24-4.2-7.49-11.17-13.9-19.65-15.28-6.33-1.03-12.8.82-18.63 3.49a67.26 67.26 0 0 0-24.9 19.67c-4.07 5.21-7.41 11.07-12.37 15.45-4.95 4.37-12.21 7.03-18.24 4.32-4.25-1.91-7.03-6.03-9.44-10.02-5.94-9.84-11.55-20.63-21.41-26.54-16.54-9.91-39.12-1.52-51.3 13.42-4.85 5.95-8.59 12.83-14.06 18.22-5.48 5.38-13.51 9.16-20.82 6.8-8.43-2.71-12.45-11.99-16.39-19.92-5.42-10.92-13.58-21.77-25.43-24.63-10.77-2.6-22.17 2.18-30.6 9.37-8.42 7.19-14.57 16.61-21.31 25.4-1.53 1.99-3.17 4.01-5.41 5.13-3.63 1.79-8.09.79-11.59-1.23C83.14 33.2 81.35 10.91 66.6 2.8c-7.76-4.27-17.62-3.37-25.55.59-7.92 3.96-14.17 10.63-19.48 17.72-6.9 9.23-12.47 19.37-18.02 29.47C1.9 53.61.21 56.75.01 60.18c-.19 3.43 1.59 7.23 4.89 8.2 5.59 1.65 9.72-5.03 12.06-10.37a124.31 124.31 0 0 1 23.37-35.38c4.16-4.41 9.65-8.84 15.6-7.69 6.28 1.22 9.63 7.89 12.5 13.61 4.61 9.2 10.51 18.11 19 23.93s20 8.06 29.25 3.55c10.07-4.91 15.11-16.05 21.76-25.07 6.64-9.02 18.7-16.85 28.49-11.39 2.86 1.59 5.07 4.14 6.97 6.8 6.82 9.58 10.59 21.49 19.4 29.27 10.21 9.03 26.49 10.32 38 3.01 9.43-5.99 14.94-16.35 22-25.01 7.05-8.66 17.87-16.32 28.65-13.42 14.51 3.89 18.12 22.84 28.94 33.26 8.17 7.88 21.1 10.37 31.62 6.11 20.9-8.48 29.09-38.94 51.47-41.72 1.92-.24 3.95-.23 5.72.56 1.69.76 3.01 2.16 4.11 3.65 7.26 9.8 6.85 23.76 14.17 33.52 5.13 6.84 13.98 10.04 22.34 9.47 14.84-1.01 25.03-15.45 32.71-26.75 5.45-8.02 13.16-23.63 25.11-22.39 6.07.63 14.01 35.31 35.88 42.44 17.99 5.87 21.42-4.45 31.32-17.35 4.81-6.27 15.4-18.72 21.95-22.88 6.66 10.33 9.48 24.79 22.5 35.39 10.09 8.23 15.72 7.35 25.59 1.13 5.41-3.42 10.78-7 15.41-11.97 4.64-4.99 8.67-10.55 13.67-15.21 3.1-2.89 11.73-10.27 16.38-7.81 1.12.59 1.94 1.63 2.72 2.63 7.84 10.08 13.37 22.14 22.09 31.5 5.18 5.57 10.29 7.94 18.22 8.58 11.42.92 22.36-6.39 28.68-15.49 6.78-9.78 13.18-18.35 23.66-24.58 1.98-1.18 4.08-2.27 6.37-2.52 7.64-.85 14.64 10.86 18.17 16.28 4.74 7.27 8.83 15.13 14.93 21.39 8.35 8.57 16.02 11.58 27.35 11.05a53.04 53.04 0 0 0 27.33-9.34c7.82-5.38 13.27-12.31 17.82-20.43 7.15-12.71 9.13-16.72 17.07-17.4 2.36-.14 3.21-.21 5.34.75a7.8 7.8 0 0 1 2.97 2.64c3.89 6.4 5.68 14.1 7.93 21.17 2.47 7.72 3.98 14.55 10.08 20.47a32.78 32.78 0 0 0 5.76 4.44c7.25 4.41 16.84 6.66 25.28 5.27 7.57-1.25 14.08-5.42 20.63-9.19 6.45-3.71 12.78-7.89 17.61-13.64 5.4-6.43 4.34-9.42 1.08-12.16Z'>
                        </path>
                    </svg>

                    <section class="q-and-a">

                        <h3>Questions & Answers</h3>

                        <details>
                            <summary>What's your favourite thing about front-end web development?</summary>
                            <p>Fighting with CSS! 💗 Also, I love that feeling I get when something in JavaScript begins
                                to make more
                                sense to me and finally
                                clicks in my brain. Often, I'll feel like I understand something JS-related in
                                theory, but in practice, it takes a little while for it to pop into my head naturally as
                                a
                                solution to something. It feels so good when that happens!
                            </p>
                        </details>

                        <details>
                            <summary>What is your MBTI personality type?</summary>
                            <p>INFP - The Mediator. And yup, I agree with that result.</p>
                        </details>

                        <details>
                            <summary>What is your favourite animal?</summary>
                            <p>Dogs! Specifically my dog, Abby, who is the greatest dog to have ever roamed the
                                earth.</p>
                        </details>

                        <details>
                            <summary>What is your favourite colour?</summary>
                            <p>Hmmm, oh man, that's a <em>tough</em> one... 😂 Just kidding. Bet you're not
                                surprised to hear that it's pink. 🌸</p>
                        </details>

                        <details>
                            <summary>What kind of music do you listen to?</summary>
                            <p>Mainly classic metal, power metal, and alternative rock with clean vocals. I'm
                                not a fan of screaming
                                in music, though I don't mind a
                                well-placed Bruce Dickinson-style scream here and there. My top two favourite bands
                                are Iron Maiden and
                                Stratovarius (can't decide, declaring it a tie). My favourite albums from
                                start-to-finish are Seventh Son of a Seventh
                                Son by Iron Maiden (my #1 by far), Carolus Rex by Sabaton, Virus by Heavenly,
                                Painkiller by Judas
                                Priest, Elysium by Stratovarius, Three Cheers for Sweet
                                Revenge by MCR (teenage nostalgia!), Stormcrow by Cain's Offering, Operation: Mindcrime
                                by
                                Queensrÿche, and Billy Talent III by BT.</p>
                        </details>

                        <details>
                            <summary>What is your favourite movie?</summary>
                            <p>Interstellar. A mix of neat sci-fi and the power of love saving the day... And they
                                pulled it off brilliantly! I dig that.
                            </p>
                        </details>

                        <details>
                            <summary>What is your favourite thing to do in your free time?</summary>
                            <p>Honestly, I'm happiest during a cozy night in with my spouse and my pup. They mean
                                the world to me, and all our time together is precious.</p>
                        </details>

                        <details>
                            <summary>Do you like video games?</summary>
                            <p>Yeah! I mainly play turn-based strategy games like Fire Emblem and turn-based role
                                playing games like Trails & old school Final Fantasy. I subscribe to FF14 Online
                                during the year when I have enough time to play. I also play several phone games:
                                Langrisser Mobile, Honkai Star Rail, Princess Connect JP, Arknights, and
                                <s>Farmville 3</s> (hey, don't judge me 😂).
                            </p>
                        </details>

                        <details>
                            <summary>What is your favourite thing to eat?</summary>
                            <p>Fish & Chips!</p>
                        </details>

                        <details>
                            <summary>Do you do any crafty things?</summary>
                            <p>I like to crochet! My favourite thing to make is blankets. Nice long project to keep
                                me busy while I binge watch Friends for the 100th time (that show never gets old).
                            </p>
                        </details>

                        <details>
                            <summary>What's your favourite season?</summary>
                            <p>Spring! I love that time of the year when winter starts fading away and the cherry
                                blossom trees start to bloom.</p>
                        </details>

                    </section>

                </div>

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
    <script src="node_modules/aos/dist/aos.js"></script>
</body>

</html>