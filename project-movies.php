<?php
$pageTitle = "Movie Love";
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
                    <h2>Movie Love</h2>
                </header>

                <img src="images/movie-polaroid.jpg" alt="A polaroid image for the Movie Love React Project"
                    class="polaroid">

                <section class="my-project-info">

                    <article>
                        <h3>React | JavaScript | CSS | HTML | Git</h3>
                        <h3>Overview</h3>
                        <figure>
                            <a href="images/movie-love-mobile.jpg" target="_blank"><img
                                    src="images/movie-love-mobile.jpg"
                                    alt="A screenshot of the mobile view of Movie Love"></a>
                        </figure>
                        <figcaption>Movie Love - Mobile View.</figcaption>

                        <p>This movie database web application was the final project of the Web Scripting 3 class at
                            BCIT (Front-End Web Developer Program). I worked on this project with a partner. She's a
                            very lovely person who I've worked with many times throughout the program, and it was a
                            great experience working together again for this project as it was a pretty big one!
                            Overall, it was a very fun project. We were a bit strapped for time at the end, so we had to
                            narrow it down the "must haves" rather than everything we wanted, but I'm still pretty happy
                            with how it turned out in the end.</p>

                        <figure>
                            <a href="images/movie-love-desktop.jpg" target="_blank"><img
                                    src="images/movie-love-desktop.jpg"
                                    alt="A screenshot of the desktop view of Movie Love" loading="lazy"></a>
                        </figure>
                        <figcaption>Movie Love - Desktop View.</figcaption>

                        <hr>

                        <h3>Process</h3>
                        <p>The main goal of the project was to practice using React JS to retrieve all sorts of data
                            from the TMDb Movie Database API & output it properly in our project. That part of it was a
                            lot of fun. As it was new to me, obviously it was a bit intimidating at first, as all new
                            things are, but as the project unfolded, I began to feel more comfortable doing stuff with
                            it that I didn't think to do before. I ended up adding some optional (not required for the
                            marks) things that were fun to
                            use the API for, like the faded background on the single movie page using the big movie
                            poster image.</p>

                        <figure>
                            <a href="images/movie-love-single.jpg" target="_blank"><img
                                    src="images/movie-love-single.jpg"
                                    alt="A screenshot of the single movie view of Movie Love" loading="lazy"></a>
                        </figure>

                        <figcaption>Viewing a single movie.</figcaption>

                        <p>Also, another optional feature that I added for fun was a colour-scheme for the movie ratings
                            and
                            converted the rating
                            format to something more user-friendly. If I recall correctly, the data we retrieved was a
                            score out of 10, so I converted it using JavaScript to a percentage & changed the colour
                            that would appear based on the rating: green for anything above 70%, yellow for anything
                            above 60%, orange for above 50%, and red for movies rated below 50%.</p>

                        <p>A key part of the project requirements was getting the Favourites feature to work. The user
                            needed to be able to click on a Heart button to "Favourite" a movie and add it to their list
                            using local storage. The movies the user favourited would then show up on their list in the
                            Favourites page, and from there, they could hover over the movie poster or click on the
                            single movie page to unfavourite the movie if they choose to do so. My partner took care of
                            a lot of this part, and we got it working nicely and looking nice!</p>

                        <figure>
                            <a href="images/movie-love-favourites.jpg" target="_blank"><img
                                    src="images/movie-love-favourites.jpg"
                                    alt="A screenshot of the Movie Love Favourites screen" loading="lazy"></a>
                            <figcaption>The Favourites Screen.</figcaption>
                        </figure>

                        <div class="flex-container-fave">

                            <div class="favourite">

                                <figure>
                                    <a href="images/movie-love-favourite.jpg" target="_blank"><img
                                            src="images/movie-love-favourite.jpg"
                                            alt="A screenshot of the favourite button functionality" loading="lazy"></a>
                                </figure>
                                <figcaption>The Favourite button.</figcaption>

                            </div>

                            <div class="favourite">

                                <figure>
                                    <a href="images/movie-love-unfavourite.jpg" target="_blank"><img
                                            src="images/movie-love-unfavourite.jpg"
                                            alt="A screenshot of the unfavourite button functionality"
                                            loading="lazy"></a>
                                </figure>
                                <figcaption>The Unfavourite button.</figcaption>

                            </div>

                        </div>

                        <hr>

                        <h3>Challenges & Lessons Learned</h3>
                        <p><strong>Always style mobile-first!</strong> <em>Seriously</em>. They don't say that for
                            nothing. This assignment was a huge wake up call for
                            me on mobile-first styling and media queries. Visually, I often get distracted seeing what a
                            website looks like on desktop while I'm styling the CSS (I prefer desktop), and then I end
                            up styling that instead of the
                            mobile by accident. Well, I learned my lesson. I went backwards, and
                            it <em>sucked</em> big
                            time. I spent many hours redoing the layout to get it back to the way it was on the desktop
                            view because I had to go back and fix it for mobile/tablet. This lesson actually helped me
                            in a way
                            with my portfolio project -- I didn't make the same mistake. (Well, I did a few times, but
                            I'd say I stayed consistent like, 80% of the time. Go me!)</p>
                        <p>I found making the tablet layout the most challenging, for whatever reason... Actually, come
                            to think of it, I always find the tablet layouts to be the most challenging to style. When
                            I'm viewing them in the dev tools, I'm not always certain what the resolutions will be
                            height-wise and such, so it just feels awkward styling tablet layouts overall... Am I alone
                            in that? Not sure. I might just be weird. Anyway, it worked fine
                            and looked all right, no glitches or anything, but I felt it could look a lot more
                            optimized.
                            I'm still not entirely happy with
                            how it looks. I might go back and play around with it a bit more later to polish it up a
                            bit.</p>
                        <p>As I mentioned in the intro, we were a bit strapped for time during this project, so we had
                            to focus on the "MVP - Minimum Viable Product",
                            rather than the "Nice to Haves". Unfortunately, that means we didn't get to explore adding a
                            Search functionality like we wanted to, since it wasn't mandatory for the assignment
                            requirements. I might add that to the website in the future when time allows, again, to
                            polish it off a bit more as it's one of my example pieces.</p>
                    </article>

                    <div class="bottom-git-wrapper">
                        <a href="https://github.com/KHaftner/movie-database" target="_blank">View on GitHub</a>
                        <a href="https://khaftner.ca/movie-database" target="_blank">View Live Site</a>
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