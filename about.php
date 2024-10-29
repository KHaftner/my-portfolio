<?php
$pageTitle = "About Me";
require "head.php";
include "svgs.php";
?>

<!-- About Page Body. -->
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

                    <section class="about-top-content">
                        <header class="other-page-header">
                            <h1 data-aos="zoom-in" data-aos-delay="250">About Me.</h1>
                        </header>
                        <article class="about-me">
                            <div class="text-about-me">
                                <h2>Relevant Education</h2>
                                <div class="education">
                                        <h3>Bachelor of Computing Science (In Progress)</h3>
                                        <p>
                                            <strong>Thompson Rivers University (TRU)  &rarr;</strong>
                                            <em>January 2024 - Present</em>
                                        </p>
                                        <h3>Front-End Web Developer Certificate</h3>
                                        <p>
                                            <strong>British Columbia Institute of Technology (BCIT)  &rarr;</strong>
                                            <em>January 2023 - July 2023</em>
                                        </p>
                                </div>
                                <h2>Work Experience</h2>
                                <div class="experience">
                                        <h3>Web Developer</h3>
                                        <p>
                                            <strong>Freelance &rarr;</strong>
                                            <em>January 2024 - Present</em>
                                        </p>
                                        <h3>Booking Clerk</h3>
                                        <p>
                                            <strong>Vancouver Coastal Health (VCH)  &rarr;</strong>
                                            <em>November 2012 - December 2023</em>
                                        </p>
                                </div>
                            </div>
                            <figure>
                                <img src="images/kassandra-pic.jpg" alt="A photo of myself" class="me-pic" />
                            </figure>
                        </article>
                    </section>
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
                        <section class="skills-list" id="skills-list">
                            <h2 data-aos="fade-right" data-aos-delay="200">My Skillset.</h2>
                            <ul>
                            <li>
                                <svg viewBox="0 0 128 128">
                                <title>HTML Icon</title>
                                <path fill="#E44D26" d="M27.854 116.354l-8.043-90.211h88.378l-8.051 90.197-36.192 10.033z">
                                </path>
                                <path fill="#F16529" d="M64 118.704l29.244-8.108 6.881-77.076H64z"></path>
                                <path fill="#EBEBEB"
                                    d="M64 66.978H49.359l-1.01-11.331H64V44.583H36.257l.264 2.969 2.72 30.489H64zm0 28.733l-.049.013-12.321-3.328-.788-8.823H39.735l1.55 17.372 22.664 6.292.051-.015z">
                                </path>
                                <path
                                    d="M28.034 1.627h5.622v5.556H38.8V1.627h5.623v16.822H38.8v-5.633h-5.143v5.633h-5.623V1.627zm23.782 5.579h-4.95V1.627h15.525v5.579h-4.952v11.243h-5.623V7.206zm13.039-5.579h5.862l3.607 5.911 3.603-5.911h5.865v16.822h-5.601v-8.338l-3.867 5.981h-.098l-3.87-5.981v8.338h-5.502V1.627zm21.736 0h5.624v11.262h7.907v5.561H86.591V1.627z">
                                </path>
                                <path fill="#fff"
                                    d="M63.962 66.978v11.063h13.624L76.302 92.39l-12.34 3.331v11.51l22.682-6.286.166-1.87 2.6-29.127.27-2.97h-2.982zm0-22.395v11.064h26.725l.221-2.487.505-5.608.265-2.969z">
                                </path>
                            </svg>
                            HTML
                        </li>
                        <li>
                            <svg viewBox="0 0 128 128">
                                <title>CSS Icon</title>
                                <path fill="#131313"
                                    d="M89.234 5.856H81.85l7.679 8.333v3.967H73.713v-4.645h7.678l-7.678-8.333V1.207h15.521v4.649zm-18.657 0h-7.384l7.679 8.333v3.967H55.055v-4.645h7.679l-7.679-8.333V1.207h15.522v4.649zm-18.474.19h-7.968v7.271h7.968v4.839H38.471V1.207h13.632v4.839z">
                                </path>
                                <path fill="#1572B6"
                                    d="M27.613 116.706l-8.097-90.813h88.967l-8.104 90.798-36.434 10.102-36.332-10.087z"></path>
                                <path fill="#33A9DC" d="M64.001 119.072l29.439-8.162 6.926-77.591H64.001v85.753z"></path>
                                <path fill="#fff"
                                    d="M64 66.22h14.738l1.019-11.405H64V43.677h27.929l-.267 2.988-2.737 30.692H64V66.22z">
                                </path>
                                <path fill="#EBEBEB"
                                    d="M64.067 95.146l-.049.014-12.404-3.35-.794-8.883H39.641l1.561 17.488 22.814 6.333.052-.015V95.146z">
                                </path>
                                <path fill="#fff"
                                    d="M77.792 76.886L76.45 91.802l-12.422 3.353v11.588l22.833-6.328.168-1.882 1.938-21.647H77.792z">
                                </path>
                                <path fill="#EBEBEB"
                                    d="M64.039 43.677v11.137H37.136l-.224-2.503-.507-5.646-.267-2.988h27.901zM64 66.221v11.138H51.753l-.223-2.503-.508-5.647-.267-2.988H64z">
                                </path>
                            </svg>
                            CSS
                        </li>
                        <li><svg viewBox="0 0 128 128">
                                <title>Sass Icon</title>
                                <path fill-rule="evenodd" clip-rule="evenodd" fill="#CB6699"
                                    d="M1.219 56.156c0 .703.207 1.167.323 1.618.756 2.933 2.381 5.45 4.309 7.746 2.746 3.272 6.109 5.906 9.554 8.383 2.988 2.148 6.037 4.248 9.037 6.38.515.366 1.002.787 1.561 1.236-.481.26-.881.489-1.297.7-3.959 2.008-7.768 4.259-11.279 6.986-2.116 1.644-4.162 3.391-5.607 5.674-2.325 3.672-3.148 7.584-1.415 11.761.506 1.22 1.278 2.274 2.367 3.053.353.252.749.502 1.162.6 1.058.249 2.136.412 3.207.609l3.033-.002c3.354-.299 6.407-1.448 9.166-3.352 4.312-2.976 7.217-6.966 8.466-12.087.908-3.722.945-7.448-.125-11.153a11.696 11.696 0 00-.354-1.014c-.13-.333-.283-.657-.463-1.072l6.876-3.954.103.088c-.125.409-.258.817-.371 1.23-.817 2.984-1.36 6.02-1.165 9.117.208 3.3 1.129 6.389 3.061 9.146 1.562 2.23 5.284 2.313 6.944.075.589-.795 1.16-1.626 1.589-2.513 1.121-2.315 2.159-4.671 3.23-7.011l.187-.428c-.077 1.108-.167 2.081-.208 3.055-.064 1.521.025 3.033.545 4.48.445 1.238 1.202 2.163 2.62 2.326.97.111 1.743-.333 2.456-.896a10.384 10.384 0 002.691-3.199c1.901-3.491 3.853-6.961 5.576-10.54 1.864-3.871 3.494-7.855 5.225-11.792l.286-.698c.409 1.607.694 3.181 1.219 4.671.61 1.729 1.365 3.417 2.187 5.058.389.775.344 1.278-.195 1.928-2.256 2.72-4.473 5.473-6.692 8.223-.491.607-.98 1.225-1.389 1.888a3.701 3.701 0 00-.48 1.364 1.737 1.737 0 001.383 1.971 9.661 9.661 0 002.708.193c3.097-.228 5.909-1.315 8.395-3.157 3.221-2.386 4.255-5.642 3.475-9.501-.211-1.047-.584-2.065-.947-3.074-.163-.455-.174-.774.123-1.198 2.575-3.677 4.775-7.578 6.821-11.569.081-.157.164-.314.306-.482.663 3.45 1.661 6.775 3.449 9.792-.912.879-1.815 1.676-2.632 2.554-1.799 1.934-3.359 4.034-4.173 6.595-.35 1.104-.619 2.226-.463 3.405.242 1.831 1.742 3.021 3.543 2.604 3.854-.892 7.181-2.708 9.612-5.925 1.636-2.166 1.785-4.582 1.1-7.113-.188-.688-.411-1.365-.651-2.154.951-.295 1.878-.649 2.837-.868 4.979-1.136 9.904-.938 14.702.86 2.801 1.05 5.064 2.807 6.406 5.571 1.639 3.379.733 6.585-2.452 8.721-.297.199-.637.356-.883.605a.869.869 0 00-.205.67c.021.123.346.277.533.275 1.047-.008 1.896-.557 2.711-1.121 2.042-1.413 3.532-3.314 3.853-5.817l.063-.188-.077-1.63c-.031-.094.023-.187.016-.258-.434-3.645-2.381-6.472-5.213-8.688-3.28-2.565-7.153-3.621-11.249-3.788a25.401 25.401 0 00-9.765 1.503c-.897.325-1.786.71-2.688 1.073-.121-.219-.251-.429-.358-.646-.926-1.896-2.048-3.708-2.296-5.882-.176-1.544-.392-3.086-.025-4.613.353-1.469.813-2.913 1.246-4.362.223-.746.066-1.164-.646-1.5a2.854 2.854 0 00-.786-.258c-1.75-.254-3.476-.109-5.171.384-.6.175-1.036.511-1.169 1.175-.076.381-.231.746-.339 1.122-.443 1.563-.757 3.156-1.473 4.645-1.794 3.735-3.842 7.329-5.938 10.897-.227.385-.466.763-.752 1.23-.736-1.54-1.521-2.922-1.759-4.542-.269-1.832-.481-3.661-.025-5.479.339-1.356.782-2.687 1.19-4.025.193-.636.104-.97-.472-1.305-.291-.169-.62-.319-.948-.368a11.643 11.643 0 00-5.354.438c-.543.176-.828.527-.994 1.087-.488 1.652-.904 3.344-1.589 4.915-2.774 6.36-5.628 12.687-8.479 19.013-.595 1.321-1.292 2.596-1.963 3.882-.17.326-.418.613-.63.919-.17-.201-.236-.339-.235-.477.005-.813-.092-1.65.063-2.436a172.189 172.189 0 011.578-7.099c.47-1.946 1.017-3.874 1.538-5.807.175-.647.178-1.252-.287-1.796-.781-.911-2.413-1.111-3.381-.409l-.428.242.083-.69c.204-1.479.245-2.953-.161-4.41-.506-1.816-1.802-2.861-3.686-2.803-.878.027-1.8.177-2.613.497-3.419 1.34-6.048 3.713-8.286 6.568a2.592 2.592 0 01-.757.654c-2.893 1.604-5.795 3.188-8.696 4.778l-3.229 1.769c-.866-.826-1.653-1.683-2.546-2.41-2.727-2.224-5.498-4.393-8.244-6.592-2.434-1.949-4.792-3.979-6.596-6.56-1.342-1.92-2.207-4.021-2.29-6.395-.105-3.025.753-5.789 2.293-8.362 1.97-3.292 4.657-5.934 7.611-8.327 3.125-2.53 6.505-4.678 10.008-6.639 4.901-2.743 9.942-5.171 15.347-6.774 5.542-1.644 11.165-2.585 16.965-1.929 2.28.258 4.494.78 6.527 1.895 1.557.853 2.834 1.97 3.428 3.716.586 1.718.568 3.459.162 5.204-.825 3.534-2.76 6.447-5.195 9.05-3.994 4.267-8.866 7.172-14.351 9.091a39.478 39.478 0 01-9.765 2.083c-2.729.229-5.401-.013-7.985-.962-1.711-.629-3.201-1.591-4.399-2.987-.214-.25-.488-.521-.887-.287-.391.23-.46.602-.329.979.219.626.421 1.278.762 1.838.857 1.405 2.107 2.424 3.483 3.298 2.643 1.681 5.597 2.246 8.66 2.377 4.648.201 9.183-.493 13.654-1.74 6.383-1.78 11.933-4.924 16.384-9.884 3.706-4.13 6.353-8.791 6.92-14.419.277-2.747-.018-5.438-1.304-7.944-1.395-2.715-3.613-4.734-6.265-6.125C68.756 18.179 64.588 17 60.286 17h-4.31c-5.21 0-10.247 1.493-15.143 3.274-3.706 1.349-7.34 2.941-10.868 4.703-7.683 3.839-14.838 8.468-20.715 14.833-2.928 3.171-5.407 6.67-6.833 10.79a40.494 40.494 0 00-1.111 3.746m27.839 36.013c-.333 4.459-2.354 8.074-5.657 11.002-1.858 1.646-3.989 2.818-6.471 3.23-.9.149-1.821.185-2.694-.188-1.245-.532-1.524-1.637-1.548-2.814-.037-1.876.62-3.572 1.521-5.186 1.176-2.104 2.9-3.708 4.741-5.206 2.9-2.361 6.046-4.359 9.268-6.245l.243-.1c.498 1.84.735 3.657.597 5.507zM54.303 70.98c-.235 1.424-.529 2.849-.945 4.229-1.438 4.777-3.285 9.406-5.282 13.973-.369.845-.906 1.616-1.373 2.417a1.689 1.689 0 01-.283.334c-.578.571-1.126.541-1.418-.206-.34-.868-.549-1.797-.729-2.716-.121-.617-.092-1.265-.13-1.897.039-4.494 1.41-8.578 3.736-12.38.959-1.568 2.003-3.062 3.598-4.054a6.27 6.27 0 011.595-.706c.85-.239 1.372.154 1.231 1.006zm17.164 21.868l6.169-7.203c.257 2.675-4.29 8.015-6.169 7.203zm19.703-4.847c-.436.25-.911.43-1.358.661-.409.212-.544-.002-.556-.354a2.385 2.385 0 01.093-.721c.833-2.938 2.366-5.446 4.647-7.486l.16-.082c1.085 3.035-.169 6.368-2.986 7.982z">
                                </path>
                            </svg>Sass</li>
                        <li><svg viewBox="0 0 128 128">
                                <title>JavaScript Icon</title>
                                <path fill="#F0DB4F" d="M1.408 1.408h125.184v125.185H1.408z"></path>
                                <path fill="#323330"
                                    d="M116.347 96.736c-.917-5.711-4.641-10.508-15.672-14.981-3.832-1.761-8.104-3.022-9.377-5.926-.452-1.69-.512-2.642-.226-3.665.821-3.32 4.784-4.355 7.925-3.403 2.023.678 3.938 2.237 5.093 4.724 5.402-3.498 5.391-3.475 9.163-5.879-1.381-2.141-2.118-3.129-3.022-4.045-3.249-3.629-7.676-5.498-14.756-5.355l-3.688.477c-3.534.893-6.902 2.748-8.877 5.235-5.926 6.724-4.236 18.492 2.975 23.335 7.104 5.332 17.54 6.545 18.873 11.531 1.297 6.104-4.486 8.08-10.234 7.378-4.236-.881-6.592-3.034-9.139-6.949-4.688 2.713-4.688 2.713-9.508 5.485 1.143 2.499 2.344 3.63 4.26 5.795 9.068 9.198 31.76 8.746 35.83-5.176.165-.478 1.261-3.666.38-8.581zM69.462 58.943H57.753l-.048 30.272c0 6.438.333 12.34-.714 14.149-1.713 3.558-6.152 3.117-8.175 2.427-2.059-1.012-3.106-2.451-4.319-4.485-.333-.584-.583-1.036-.667-1.071l-9.52 5.83c1.583 3.249 3.915 6.069 6.902 7.901 4.462 2.678 10.459 3.499 16.731 2.059 4.082-1.189 7.604-3.652 9.448-7.401 2.666-4.915 2.094-10.864 2.07-17.444.06-10.735.001-21.468.001-32.237z">
                                </path>
                            </svg>
                            JavaScript</li>
                        <li><svg viewBox="0 0 128 128">
                                <title>React Icon</title>
                                <g fill="#61DAFB">
                                    <circle cx="64" cy="64" r="11.4"></circle>
                                    <path
                                        d="M107.3 45.2c-2.2-.8-4.5-1.6-6.9-2.3.6-2.4 1.1-4.8 1.5-7.1 2.1-13.2-.2-22.5-6.6-26.1-1.9-1.1-4-1.6-6.4-1.6-7 0-15.9 5.2-24.9 13.9-9-8.7-17.9-13.9-24.9-13.9-2.4 0-4.5.5-6.4 1.6-6.4 3.7-8.7 13-6.6 26.1.4 2.3.9 4.7 1.5 7.1-2.4.7-4.7 1.4-6.9 2.3C8.2 50 1.4 56.6 1.4 64s6.9 14 19.3 18.8c2.2.8 4.5 1.6 6.9 2.3-.6 2.4-1.1 4.8-1.5 7.1-2.1 13.2.2 22.5 6.6 26.1 1.9 1.1 4 1.6 6.4 1.6 7.1 0 16-5.2 24.9-13.9 9 8.7 17.9 13.9 24.9 13.9 2.4 0 4.5-.5 6.4-1.6 6.4-3.7 8.7-13 6.6-26.1-.4-2.3-.9-4.7-1.5-7.1 2.4-.7 4.7-1.4 6.9-2.3 12.5-4.8 19.3-11.4 19.3-18.8s-6.8-14-19.3-18.8zM92.5 14.7c4.1 2.4 5.5 9.8 3.8 20.3-.3 2.1-.8 4.3-1.4 6.6-5.2-1.2-10.7-2-16.5-2.5-3.4-4.8-6.9-9.1-10.4-13 7.4-7.3 14.9-12.3 21-12.3 1.3 0 2.5.3 3.5.9zM81.3 74c-1.8 3.2-3.9 6.4-6.1 9.6-3.7.3-7.4.4-11.2.4-3.9 0-7.6-.1-11.2-.4-2.2-3.2-4.2-6.4-6-9.6-1.9-3.3-3.7-6.7-5.3-10 1.6-3.3 3.4-6.7 5.3-10 1.8-3.2 3.9-6.4 6.1-9.6 3.7-.3 7.4-.4 11.2-.4 3.9 0 7.6.1 11.2.4 2.2 3.2 4.2 6.4 6 9.6 1.9 3.3 3.7 6.7 5.3 10-1.7 3.3-3.4 6.6-5.3 10zm8.3-3.3c1.5 3.5 2.7 6.9 3.8 10.3-3.4.8-7 1.4-10.8 1.9 1.2-1.9 2.5-3.9 3.6-6 1.2-2.1 2.3-4.2 3.4-6.2zM64 97.8c-2.4-2.6-4.7-5.4-6.9-8.3 2.3.1 4.6.2 6.9.2 2.3 0 4.6-.1 6.9-.2-2.2 2.9-4.5 5.7-6.9 8.3zm-18.6-15c-3.8-.5-7.4-1.1-10.8-1.9 1.1-3.3 2.3-6.8 3.8-10.3 1.1 2 2.2 4.1 3.4 6.1 1.2 2.2 2.4 4.1 3.6 6.1zm-7-25.5c-1.5-3.5-2.7-6.9-3.8-10.3 3.4-.8 7-1.4 10.8-1.9-1.2 1.9-2.5 3.9-3.6 6-1.2 2.1-2.3 4.2-3.4 6.2zM64 30.2c2.4 2.6 4.7 5.4 6.9 8.3-2.3-.1-4.6-.2-6.9-.2-2.3 0-4.6.1-6.9.2 2.2-2.9 4.5-5.7 6.9-8.3zm22.2 21l-3.6-6c3.8.5 7.4 1.1 10.8 1.9-1.1 3.3-2.3 6.8-3.8 10.3-1.1-2.1-2.2-4.2-3.4-6.2zM31.7 35c-1.7-10.5-.3-17.9 3.8-20.3 1-.6 2.2-.9 3.5-.9 6 0 13.5 4.9 21 12.3-3.5 3.8-7 8.2-10.4 13-5.8.5-11.3 1.4-16.5 2.5-.6-2.3-1-4.5-1.4-6.6zM7 64c0-4.7 5.7-9.7 15.7-13.4 2-.8 4.2-1.5 6.4-2.1 1.6 5 3.6 10.3 6 15.6-2.4 5.3-4.5 10.5-6 15.5C15.3 75.6 7 69.6 7 64zm28.5 49.3c-4.1-2.4-5.5-9.8-3.8-20.3.3-2.1.8-4.3 1.4-6.6 5.2 1.2 10.7 2 16.5 2.5 3.4 4.8 6.9 9.1 10.4 13-7.4 7.3-14.9 12.3-21 12.3-1.3 0-2.5-.3-3.5-.9zM96.3 93c1.7 10.5.3 17.9-3.8 20.3-1 .6-2.2.9-3.5.9-6 0-13.5-4.9-21-12.3 3.5-3.8 7-8.2 10.4-13 5.8-.5 11.3-1.4 16.5-2.5.6 2.3 1 4.5 1.4 6.6zm9-15.6c-2 .8-4.2 1.5-6.4 2.1-1.6-5-3.6-10.3-6-15.6 2.4-5.3 4.5-10.5 6-15.5 13.8 4 22.1 10 22.1 15.6 0 4.7-5.8 9.7-15.7 13.4z">
                                    </path>
                                </g>
                            </svg>React</li>
                        <li><svg viewBox="0 0 128 128">
                                <title>PHP Icon</title>
                                <defs>
                                    <path id="php-original-a"
                                        d="M64.026 96.076c33.676 0 60.976-14.361 60.976-32.076s-27.3-32.075-60.976-32.075S3.051 46.285 3.051 64s27.3 32.076 60.975 32.076">
                                    </path>
                                </defs>
                                <defs>
                                    <path id="php-original-c" d="M2.998 31.924h122.004v64.1H2.998z"></path>
                                </defs>
                                <clipPath id="php-original-b">
                                    <use xlink:href="#php-original-a" overflow="visible"></use>
                                </clipPath>
                                <clipPath id="php-original-d" clip-path="url(#php-original-b)">
                                    <use xlink:href="#php-original-c" overflow="visible"></use>
                                </clipPath>
                                <g clip-path="url(#php-original-d)">
                                    <defs>
                                        <path id="php-original-e" d="M2.998 31.924h122.004v64.1H2.998z"></path>
                                    </defs>
                                    <clipPath id="php-original-f">
                                        <use xlink:href="#php-original-e" overflow="visible"></use>
                                    </clipPath>
                                    <g clip-path="url(#php-original-f)">
                                        <image overflow="visible" width="1160" height="609"
                                            xlink:href="data:image/jpeg;base64,/9j/4AAQSkZJRgABAgECqAKoAAD/7AARRHVja3kAAQAEAAAAHgAA/+4AIUFkb2JlAGTAAAAAAQMA EAMCAwYAABe6AAAnEwAALd7/2wCEABALCwsMCxAMDBAXDw0PFxsUEBAUGx8XFxcXFx8eFxoaGhoX Hh4jJSclIx4vLzMzLy9AQEBAQEBAQEBAQEBAQEABEQ8PERMRFRISFRQRFBEUGhQWFhQaJhoaHBoa JjAjHh4eHiMwKy4nJycuKzU1MDA1NUBAP0BAQEBAQEBAQEBAQP/CABEIAmYEkwMBIgACEQEDEQH/ xAClAAEBAQADAQEAAAAAAAAAAAAAAQIEBgcFAwEBAQEBAAAAAAAAAAAAAAAAAAEDAhABAQEAAQAJ BQEBAQADAAAAAAERECBgAzM0BRUmBzBAUCUWBgInEhMEEQAAAwUIAgICAgMBAAAAAAAAAQIQkaFD NHCx0XKyA3MEQkQRohITITFBYXEVEgABBQEBAAIDAQAAAAAAAAAAYAExQUKBQzACQJAygv/aAAwD AQACEQMRAAAA775/6B5h1PoOA6nPcCnPcAc9wKc68BXPcCnOcEnOcEc9wRznBVznBHOcEc68Ac9w RznBHOcEc5wRznBWc5wRznBHOcEc5wRznBHOcEc5wRznBLznBRznBHOcEc5wYc5wRznBHOcEc5wU c6cEc5wRznBLznAHOcFHOcAc+cEc5wBznBkc+cEvOcAc5wBznAkc9wIc9wIc+cCHPfPh9CfPkv0J 8+H0J8/J9HPz4fQz8/MfRz87K/SfLh9V8ofVfKH1Xyh9V8ofVfKH1Xyh9V8ofVfKH1Xyh9V8ofVf KH1Xyh9V8ofV7n5v387iEx5j6d5j1FOoFKAqSgFFAAAWFEoAABQAAAAAAAAAAAAAQABFEWAKEJRF gBFRARYqURZEWCUSVElLJRlZEmoZmoZmoZmpLmahiahjP6ZPzz+mY/PP6ZXIAAAAAAAAAAAAHf8A oHfzuITHmXpvmXUF7gIUBQoAALZKAAAUAACCkURVSgAAAABFEVEUQAKAAAEJRFEChCUQCURZCUsB FkJRJRJqRJSyUZWRJqGZqGZqGZqS5zuGM7hjO4flN5jGd5WAAAAAAAAAAAAd/wCgd/O4hMeZ+meZ 9wXrmUoUlAAWyUAAoAAEKJSgAAAAAAAAAAAAAAIoiyAUAAIAiiBQiLACKiSiLFSokogJNSJNRZKM rIk1DM1DM1DM1JcTUMTeTGf0yfnneYxNZUAAAAAAAAAAB3/oHfzuITHmfpnmncDvkUACikACgABU lKAAABAoAAAAAAAAAAAAJQAAIqIAFACEoiwCVKIBKiAixUqJKICLIkpZKMrIk1DM1DOd5MzUlzne TOd5MZ/TBjO8y4WAAAAAAAAAADv/AEDv53EJjzT0vzTvlTuAC2SgAFACoFAABYAAAAFCIBUFQVBU FgLBQohRAAAASgARRBAKAERRAoRFglEWRFipRJUQEmpElLJYSakZmoZmoZmoZzuS4zvJnO8mMfpm Pzz+mVyAAAAAAAAAB3/oHfzuITHmvpXmvfIdwWwAKAFSUoAALAACWkEqAAAAKBAAAAAlAAWCwKlC WUAAIBQIqIFACEogAliwAiyIsVKJKiAkqJKXKwk1IzNQzNQznUjM1FxNZM4/TJ+ef0xGJrKgAAAA AAAAO/8AQO/ncQmPNfSvNe+VNOQAoApAoALABCkssAAALAAAAAQAAAFAAAAACVYKgpFogAJQEoiy AUIAiwCWLACLIixUqJKJKJKiSxZNQmdSMzUMzUMzUlxNQxneTGf0wYx+mZcLAAAAAAAAB3/oHfzu ITHm3pPm2nId8hQIpQAIFAJZZYAAWAABYAURRFsuWhFEUSaGWhlRFWQAASgAAoRYFEoAASgRZAKA ERYBLFgBBEWKlRJYJRlZLJqElhJqRmWEzqGZqS4zvJnO8n55/TEYzvKwAAAAAAADv/QO/ncQmPNv SfNtOQ05FQKACwAKQQALAAQKKJali0iiLSKIoiiKIoiiTQyok0MqMtQiywAJQAUIqUCUAJQIqIFA CIsAliwSiCIsWLIiwiwk1JZLCTUjM1DM1DE1Jc53kzneTGP0yfnneZcLAAAAAAAB3/oHfzuITHm3 pPm2nIunAUAFgCFgAWAAgtSrLFpFBRLSxRLRFEURpGWhlqEVUUZahFGWoSaiSaGZoZVZABKAEoFE oAQCpRBKAERYBLFglRJRAsWRASVEliyahM6kZmoZmskzqS4moYzvJjH6YjGd5WAAAAAAAd/6B387 iEx5t6T5vpyGvAAWCAWABYAFhbLKpKpKqyqRQVEtEURaRRFLFEUkmhlRFGVEmoRVZUZUmVGZqEWW BAKChFQtEBAKlEEoCVECpUQEWQlipUSUSUZWSyahJZEzqGZqGZrJmazLnO8mM7yfnneZcLAAAAAA B3/oHfzuITHm/pHm+vAachYIBYAFgILRUqqSqsqkqxKpKpFqxRLRFEURoZaGWoRRFGWoSaGVGVJl RlVZUZUmZqEmoQWBKAEqwtEBALFkAoQlEEqUQEERYqWRFhFkSUuVhJZGZqGZqGc6kuc6hjO8n55/ TEYzvKwAAAAADv8A0Dv53EJjzf0jzfXgNeBALAAsCwqFVShVWVYlUKUoKJaiLSKI0IoiiKIok0Mt Qk0MqMtSpNQk1DLUTKjKqzNQk1EzNQgsCUBYlWFogIBYsgFCIsAliwSokogWSokokslk1CSyJnUM zUMywzneZc51DGP0wYx+mZcAAAAAAd/6B387iEx5v6R5vrwGvEFgAWBYqyyqKqiirEqhSlBbEWkU FLLRFEWmWhloZaGVEUZUSahJomZoZmoSalZahlSZmoZVWZqJlRlZYEoAS1KoQEoEEAoRABLARZEW KlkRYRZElLlYSWRmahmayZmpLjO8mcbyYzvEYmsqAAAAA7/0Dv53EJjzf0jzfXhDbMALAsVZVBVV VJVhVWVQqFUlVZVJVItIqJaIoiiKIoijLUJNDKqyoyoypMzUJNSsqMzUTKwk1KzNRJKMrLAlAWJa llACVKIJQhKIJUsEogiBZKiSiSyWTUJLImdQzNQxNSXOdQxneTGP0xGM7wsAAAAA7/0Dv53EJjzb 0nzbbgNcwsBFlFVVVVUKhVVVJVhVWVSWgqCgoloi0y0WKIok0MtEyoy1CTUJNQk1Ky1DKjM1Eyoz NSszUJKTM1KzNRMrCCwJQlFAlACWLIBQiLAJYBLISxUsiLCLIksWTUJnUjM1kmdQznUlxNZM4/TB jG8y4WAAAADv/QO/ncQmPNvSfNtsw2zAFsVZVVVUWWFVVUVYlVVUlqFBVJaWWiLSKiLTNoijLQyo k0rKjLUMzRMzUJNQyqszUMqTM1DM1KzNQksSTUrM1EzNQgsCUJahaICUCCAVKiCVLBKJKiBZKiSj KyWSwk1IzLCZ1DOdSXOdZM53k/PO8x+c1lQAAAHf+gd/O4hMebek+bbZhtmFlsstspbKqrCqqqKs KqyqKsFCqpQVBaRaZtEWmWhloZaGVGWoSahJqEmpWWoZmokmoZmpWVGZqJmahmalZmomZqGVlSWJ JZYEoCxLUsoASpZAKERYBLARZEWKlkQElRJYslhJZGZqGc6kuc6hjO8mMfpiMY/TCwAAADv/AEDv 53EJjzb0nzbbMN8lWVVFVVWFVVUVYVVFFWFUVVKgtJaJaJaJaItjLQy0MtDKjLUrLUMtQzNDM1DL UrM1EzNQzNSpKMzUTM1DM1KzNRMzUrM1DM1EyssCUJagolCUCCUBLICWLBLISxUqJLBLCSpcrCZ1 IzNZJnUM51JcTWTGd4MZ3iXIAAAHf+gd/O4hMebek+bbZi75KsqqqrCqUqqsUq0oqwqiqqrCqS0F pLUS0stEWmWhloZaGVGWoZahmaJmalZmhmahmalZmoZmomZqVmahmaiZmoZmpWZqJmalZmomZqEF gSrEtSygBLFkAoRAqVEBBECyVElElkslhJqRmWEzrJM6kuM7yZxvJ+ed5jEsUAAB3/oHfzuITHm3 pPm2+SrrwqjUq2yxbKts1CqqqKsKoqqqwqiqKsS2rKpLRLRGkZtEUZaGWoZalZm4ZmoZahmalmZq GZqGZqVmahmaiZmpWZqGZrKSWVJYZmomZqVmaiZWWBKEtSgShKlEEoQlgEsBFkRYqWRASWRFiyWR M6hmWGZrMuc7yZxvJjG8xjOsqAAA7/0Dv53EJjzb0nzfbNV2zVVtli2VbVFWFVWpYtlLVVVhVFUV qWVRVC2JaJaJaIoiiTQy1DLUMzcMzUrM1DM1DM1EzNSszUMzUrM1lJLDM1KzNQzNRMyypLEmdSsz UTM1kBAVZZQlCAWCAVKiCVLBLISxUshLCLIksWSwk1mJLDMsjOdRcTWTGP0xGMbysAAA7/0Dv53E Jjzf0jzfbO1ds1VbZYtlW1YVVtlLVhVW2WLVFUVqVVFUVYLSWiWpZaI0MtDLUMtQy1KzNEzNQzNQ zNSs53kzNSzM1DM1kmdSszUTM1kmdSszUTM1mpLDM1EzNSszWUgsCUJVJQAlSyAUIgVLIAkqIFks hLCSpZLCSyMywmdZJnWZc51DGN5MY3mXIAAHf+gd/O4hMecej+cbZ2y7Z2rK1KWyrasNSrbNQqls 0qrDUpasNSraoqwrRLbLKpLaRoZtEahloZmhhqGZqGZvNmZqGZqGc7zWZqGZrNmZqGZrJM6lZmom ZZWZqGZrKSWVmaiZms1JYkllgShLUoEoSpYBKERYBLAQRAsESWEWSyWElkTOoZlhmWS5zrJnG8mM bxLkAADv/QO/ncQmPOfRvOds7ZduLZYupVtli1ValLZYupVtmoalLVLZqVVLVhWhVlVRaFWItItM tDM0MzQzNQzNSszUM53KxNRM53kzNSsTUMzWbMzUMyyszWUksMzUrMsSSyszWUksqSxMzWQABZZQ lCUCCUISwCWAiyIFiyICSyWSwk1IzLCZ1kmdZlzneTON4MZ1mXCwAAd/6B387iEx5z6N5ztnau3F ssWzStSxbKt1KWyxdSrbNRbNDUstqlqxao1NSqpasKoWktqxURRJoYm5ZhqGZqGJvNZmoYmpZnOo ZzvNZmsmZqWZzqGZYZms2SWGZrNSWJmalZlhM6iZllSWJBYEqyyhKEAsEAqWQEsAlkJYqWRASWRF iyWRmaySWGZZLnOsmc6yYzrMYligAO/9A7+dxCY869F862ztl24tmotlW2ai2VbZqGpS6lW2ai2a LZZbqUupqGpoallupoVYaUVZS0jQy0MzcMNQzNQxN5szNQxNZrM1kzNZszNZMzWazNRM51KzLDM1 mszUTMsrM1DMsSZ1KzLEksqZ1lILAlCWpZQAlggFSoglSwSyEsVLIiwkshLFksiZ1DMsMyyXOdZM 53k/PO8RiWKAA7/0Dv53EJjzr0XzrbO2a24tli2VbqWLZpbZYus6LZZdWU1ZY1ZVupqLZotmpbZo tWLWhVlaUW2ItMtDM0MTeaxN5M53DGd5szneaznUM51LM51DE1mpnWSZ1myZ1kksrMsSZ1KzLDM1 lJLKmdRMyypLEyssCUJaFCAlSyAUIglSwSyEsVLISwgiSxZLCSyMzWSZ1mXM1kznWTGN4jOdZUAB 3/oHfzuITHnXovnW2d1LrxbKt1KWyxdSrbLGrKt1LF1KXWdRdZ0t1LGrKas1LdZ0XUsas1LapdTU K0GiybkYm5ZiahjO81nOoZzrNmZrJnOpWc6zUzrKZms1mWGZZZmayZms1M6yklhmazUliZms1JYk zrNSWJJZYEoS0KEBKlkAoRAqWQlRJYqWQlglkSWLJYSWRM6yTOsyzOsmc6yYzrMYzrKgAO/9A7+d xCY869F862z1ZdeLZpbZYtlXVlLrOotmltljVlNWWXVlNazqLrOi6zqXWs6i6zo1ZqW6mi6ljWpq VWiTcMTUMZ3izOd5MZ3ms51msyxM51mszWTMssznWamdZJnWbJnWSZ1KzLEzLCZ1mpLEmdZqSxJn UrMsSSywJQloUICVLIBQiBUsgIksVLISwSyJLFksJLIksM51Jc51kznWTGd4jGdZUAB3/oHfzuIT Hnfonne2dsuvF1nS2yxbKurKXWdRdZ0tssaspqyy6sprWdRdZ0assutZ1F1nRrWdS61nRrWdRrWd S63jZrNkYzrNZzrNmc6yZzrNZzrNZliZzrNTOsmZZZnOskzrNTOs2TOskllZliZlhJZWZYkllZli SWVmWJJZYEoS0KEBKlkAoRAqWQESWKlkJYJZEliyWElkSWGZZGc6yuc6yZxvEYzrKgAO/wDQO/nc QmPOvRfOts9WXXi6zV1ZYtlXVlLrOous1dWWNWU1ZZdWU1rNjWs6LrOpdazTWs6jWs2XesaNazY/ S40u7mxqSFzcjFzZJckzc1M6zWZcpM6zWZYZlzZM6zUzrJM6zZM6ySXNSWJmWEzrNSWJM6zUliTO s1JYkllgShLQoQEqWQChECpZARJYqWQlglkSWLJYSWRJcklzLM6yZzrJjOsxjOsqAA7/ANA7+dxC Y869F862z1c614tlW6zotljVzpbZY1ZV1c6i6zous6i6zpdXOo1c6NazZdazo1c6jWsal1rGjdzY 3rFN3FXTIuURlBm5qRCZubGbDMuamdZqZsSZsrMsMyyzMsJmypnWUksJmypLEmbKksSZsqSxJLLA lCWhQgJUsgFCIFSyBISxUshLBLIksWSwksiZ1kmdZlmdZM51kxnWIznWVAAd/wCgd/O4hMedei+d bZ2y7caudRbKurnUWyrqyxdZ0Wyy6spq51GrnS6udRq50a1jUutY0bubGtY0bubLrWKbuKbZsVBZ IWSUiDNzUiJJc1IhM2WTNhM2VM2EzZZM6ySWVmWJM6zUlhM2JJZUzYkllSWJIWBKEtChASpZAKEQ SpYJZCWKlkJYQRJYslhJZEzYTOsyzNhnOsmMbxGc6yoADv8A0Dv53EJjzr0XzrbO2Xbi2WNWVbZY 1c6W6zY1c6NXNXWs2NXOjVzqXVzo1c6jVzTdzZd3NN3NjWsU3cpds01cU0zDUgskLJKREkQZuaZu RmyyZsJmypmxJEqS5GbKkRJLKmbCSxJnWaksSSypmxILAlCVSUAJYIBUsgJUsEshLFSyECSyEsWS yJnWSSwzLJc51kmNZM41mMSxQAHf+gd/O4hMec+jec7Z3Wbtxq51Fsq6ubGrKurmmrLGrnS3WbGr nRq5sbuautZsa1jRq5q7ubG7im7ixu4ptku2UaZGpJWpIiIWSCJTKDNlkiEiVJcjNlkiElhM2WSX JJZUlyjNlSWEiJJZZJYQWBKssoShALBASpYBLAJZCWKlkQElkILJZEzYSXJJZLnOsmc6yYzrEZli gAO/9A7+dxCY859G842z1ZduLZYus1dWWLrNXVzTVljVzpbZY1c01rNNXOpdXNN3Go1c01rFl3cU 3cU2zY0g0yNMjUgsgskqyQuUESxEJEpmwkRJLmmbCS5pmxJLkZsqSxJEqSxJLKkuUZsAAFiWiUJQ IJQhLAJYBCIFgiAkslksESJLCZ1kmdZlzLkmNZMZ1mXAAAHf+gd/O4hJ8Q65U6igoqgBQUFEUCiq CgoKQoAUFABQAAAIAEAgAQEFQEBAQIgICFICABAkBBSAAEAoCkQAAKAEQAAEAEQALAQEBBEgIEgQ AAD64fTB/9oACAECAAEFAP8AljGRkZGRkZGRkZGRkZGRkZGRkZGRkZGRkZGRkZGRkZGRkZGRkZGR kZGMYxjPu/8AnqV/z1K/46lf8dSv+OpX/HUr/jqV2fUrs+pXZ9Suz6ldl1K7LqV2XUrsupXZdSux 6ldj1K7HqV2PUrsepXY9Sux6ldj1K7HqV2PUrsepXY9Sux6ldj1K7HqV2PUrsepXY9Sux6ldj1K7 HqV/z1K//9oACAEDAAEFAL9HWta1rWta1rWta1rWta1rW/iL1KvUq9Sr1KvUr/rqV/11K/66lf8A XUr/AK6lf9dSv++pX/fUr/vqV/31K/76ldp1K7TqV2nUrtOpXadSu06ldp1K7TqV2nUrtOpXadSu 06ldp1K7TqV2nUrtOpXadSu06ldp1K7TqV2nUr/rqV//2gAIAQEAAQUA7S2dn675u9d83eu+bvXf N3rvm713zd655u9d83euebvXPN3rnm71zzd655u9c82euebPXPNnrnmz1zzZ655s9c82et+bPXPN nrnmz1zzZ635s9b82et+bPW/Nnrfmz1vzZ635s9b82et+bPW/Nnrfmz1vzZ635s9b82et+bPW/Nn rfmz1vzZ635s9b82et+bPW/Nnrfmz1vzZ635s9b82et+bPW/Nnrfmz1vzZ635s9b82et+bPW/Nnr fmz1vzZ635s9b82et+bPXPNnrnmz1zzZ635s9c82euebPXPNnrnmz1zzZ655s9c82euebvXPN3rn m71zzd655u9d83euebvXfN3rvm713zd675u9d83eu+bvXfOHr3nD17zh695w9e84evecPXvOXr/n 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 Qv4arxV4qqqqv0PjjwTte74nM4icTiczmJxETiJxOInGJGMYxjGMYxjGMYxixZxYs4vFXiqvFXm8 Veaq8Xm8VfwtVVXiqqqqr0/jjwTte7ROZzEROYicRE4nERE4icSJEnGMYxjGMYxjGMZxixZxV4qq vF4qrxVXiqqrzeavFX8JVVV4qqqqq9P448E7Xu+IiJzOYnE4iJxEREROIiIk6GJGMYxjGMYxixjO KsXirzV4qrxVXi8VebzVVeb+Gq8VVVVVVXp/HHgna93zOYicxOInERERERERERE5kScYxjGMYxjG cWLOaqqqqqqqqqrxV4q81V5vQq/havFVVVVVV6fxx4J2vd9CcRETicRE4iIiIiJxEREREScYxjGM YxjGMZxYqqqqqqqqqqqqqqvF4qqvTq/havFVVVVVV6fxx4J2vdxOZzERE4iIiIiIiIiIiIiIk4kS JGMYxjGMYsWc2Kqqqqqqqqqqqqq8VVVebzVVfwtXiqqqqqq9P448E7Xu4nM5iIicRERERERERERE REREiRIxjGMYxjFixVVVVVVVVVVVXiqqrxVVV5vNXir+Eq8VVVVVVXp/HHgnad3E5nM5icRERERE RERERERERESJxIxjGMWcVViqqqqqqqqqqqqqqrxV5vN5q8Vfwt4q8VVVVXp/HHgnad2iInM5icRO IiIiIiIiIiIiIiIiRIxjGMWLFVVVVVVVVVVVVVVXirxV5vNVV5q/hKvFVVVVVV6fxx4J2ndoiJxE 5icROIiIiIiIiIiIiIiIiREjGMWLFiqqqqqqqqqqqqqqrxV4q81eKqr0L+EvNVVVVVV6fxx4J2nd oiIiJzE4icREREREREREREREREREjFiqqqqqqqqqqqqqqqqrxV4q81VVVXoX8JeavFVVVV6fxx4J 2ndoiIiJzE4iIiIiIiIiIiIiIiIiIiIxVVVVVVVVVVVVVVVVVVVXirxVVV4q81fwlXirxVVVVen8 ceCdp3aIiIicxOIiIiIiIiIiIiIiIiIiIiVq1VVVVVVVVVVVVVVVVVVV4q8VVVVVeav4SrxV4qqq qvT+OPBO07tEROInMTiJxEREREREREREREREREStWrVVVVVVVVVVVVVVVVV4q8Veaqqqr0L+EvNV VVVVV6fxx4J2ndoiJzOYnETiIiIiIiIiIiIiIiIlRK1rVqrVVVVVVVVVVVVVVVXirxV5q8VVXmr+ EvNVVVVVV6fxx4J2ndxOInM5icROIiIiIiIiIiIiIiIiVK1rWtWrVVVVVVVVVVVVVVVXirxV5vNX i81fwlXiqqqqqq9P448E7Tu4nM5nMTiIiIiIiIiIiIiIiIiVLxrWta1rVq1VVVVVVVVVVVVVVVXi rzebzV4q/hKvFXiqqqq9P448E7Xu4nM5iIicRERERERERERERERESpWta1rWta1aqqqqqqqqqqqq qqqrxVVV5vNVVX8JV4qqqqqqvT+OPBO17tOZzEROYiIiIiJxEREREREvMrWta1rWtatbzaqqqqvF VVVVVeKq8VVVebzeKv4WrxVVVVVVen8ceCdr3fM5iInE5icRERERERERETiJeda1rWta1rW8W81V VVVVXiqqrxV5vFVV5vQv4arxVVVVVVen8ceCdr3fETmInMTiIiJxEREROIiIl6ErWta1rWta1rVq 3m1VVeKqqqrxVVV4q81eLxV5q/havFVVVVVV6fxx4J2vd8TmcziInETiIiInETiIiIlS861rWta1 rWta1vNq1VVVVV4qqqqqrxVXi81eL+JqqqqqqqqvT+OPBO17tE5nMRE6ETiJxE4iInE5iVK3jWta 1rWta1rebWreKvFVVVVVV4q9GqvN5q8VfwlVVXiqqqqr0/jjwTte7nTiJzE4nMTiInERE4nMrWta 1rWta1rWta1a1vN4qqvFVeKvN4q81V6dX8LV4q8VVVVVen8ceCdr3c6E4nM5iczmJxETmcTjW8a1 rWta1rWta1rWta3i3i8W81V4q8VV4qrxebxV5v4arxV4qqqqv0PjjwT/AKz/AOPtV7We1ntd7Ye2 Htl7ae2ntt7ce3Ht17ee3nt9+gfoX6F+ifo36N+kfpX6Z+mfp36h+ofqX6p+qfq36x+sfrX61+uf rn65+vfr369+vfr369+vfrn65+ufrX61+sfrH6t+qfqn6l+ofqH6d+mfpn6V+kfo36N+ifoX6F+g e33t57ee3Xtx7ce23tp7ae2Xth7Ye13tZ7We1XtR7Ue03tR7Ue1HtR7Ue1HtR7Ue1HtR7Ue1HtR7 Ue1HtN7Te03tN7Te0ntJ7Se0ntF7Re0XtB7Qe0Hs97Pezns57NezHst7Leynsl7Iex3sZ7Few3sJ 7Af+fv8Az9/5+/8AP3/n7/z9/wCfvJfQ/wD6n//aAAgBAgIGPwD4YIIIIIIIIIIIIIIIIIIIIIII IIIWLop0U6KdFOinRTop0U6KdFOinRTop0U6KdFPxFPxFPxFfbiK+3EU/EU/EU/EU/EU/EU/EU/E U/EU/EU/EU/EU/EU/EU/EU/EU/8AX+T0PQ2bNmzZs2bNGjRo0aNGjRZZZZZo0aNGjRo0bNmzZs2b Nnoeh6Hoeh6GzZs2bNGjRo0WWWWWX8n/2gAIAQMCBj8A/ZcyKZFMimRTIpkUyKZFMimRTIpkUyKZ FMimRTIpkUyKZFMimRTIpkUyKZFMiq6ZMmTJkyZKKKKKKKKKKK+CiiiiiiiiijJkyZMmTJkwYMmT JkyUUUUUUV+D/9oACAEBAQY/AFGX9kRmThV7jyFXuPIVe48hV7jyFUt5CqW8hVLeQqlvIVS3kKpb yFUt5CqW8hVLeQqlvIVS3kKpbyFUt5CqW8hVLeQqlvIVS3kKpbyFUt5CqW8hVLgKpcBVLeQqlvIV S3kKpbyFUt5CqW8hVLeQqlwFUuAqlwFUuAqlwFUuAqlwFUuAqlwFUuAqlwFUuAqlwFUuAqlwFUuA qlwFUuAqlwFUuAqlwFUt5CqW8hVLeQqlvIVS3kKpbyFUt5CqXAVS4CqW8hVLeQqlvIVS3kKpbyFU t5CqW8hVLeQqlvIVS3kKpbyFUt5CqW8hVLeQqlvIVS3kKpbyFUt5CqW8hVLeQq9x5Cq3HkKvceQq 9x5Cr3HkKvceQq9x5Cr3HkKvceWAq9x5YCr3HlgKvceWAq9x5YCr3HlgKvceWArNx5YCs3HlgKzc eWArNx5YCs3HlgKzceWArNx5YCs3HlgK3ceWArdx5YCt3HlgK3ceWArd15YCu3XlgK7deWArt15Y Cu3XlgK7deWArt15YCu3XlgK7deWArt15YCu3XlgK7deWArt15YCu3XlgK7deWArt15YCu3XlgK7 deWArt15YCu3XlgK7deWArt15YCu3XlgK7deWArt15YCu3XlgK7deWArt15YCu3XlgK7deWArt15 YCu3XlgK7deWArt15YDtL7u8rfUjcSSTV/gjSxeU7rEe5yp0sXlO6xHucqdLF5TusR7nKnSxeU7r Ee5yp0sXlO6xHucqdLF5TusR7nKnSxeU7rEe5yp0sXlO6xHucqdLF5TusR7nKnSxeU7rEe5yp0sX lO6xHucqdLF5TusR7nKnSxeU7rEe5yp0sXlO6xHucqdLF5TusR7nKnSxeU7rEe5yp0sXlO6xHucq dLF5TusR7nKnSxeU7rEe5yp0sXlO6xHucqdLF5TusR7nKnSxeU7rEe5yp0sXlO6xHucqdLF5TusR 7nKnSxeU7rEe5yp0sXlO6xHucqdLF5TusR7nKnSxeU7rEe5yp0sXlO6xHucqdLF5TusR7nKnSxeU 7rEe5yp0sXlO6xHucqdLF5TusR7nKnSxeU7rEe5yp0sXlO6xHucqdLF5TusR7nKnSxeU7rEe5yp0 sXlO6xHucqdLF5TusR7nKnSxeU7rEe5yp0sXlO6xHucqdLF5TusR7nKnSxeU7rEe5yp0sXlO6xHu cqdLF5TusR7nKnSxeU7rEe5yp0sXlO6xHucqdLF5TusR7nKnSxeU7rEe5yp0sXlO6xHucqdLF5Tu sR7nKnSxeU7rEe5yp0sXlO6xHucqdLF5TusR7nKnSxeU7rEe5yp0sXlO6xHucqdLF5TusR7nKnSx eU7rEe5yp0sXlO6xHucqdLF5TusR7nKnSxeU7rEe5yp0sXlO6xHucqdLF5TusR7nKnSxeU7rEe5y p0sXlO6xHucqdLF5TusR7nKnSxeU7rEe5yp0sXlO6xHucqdLF5TusR7nKnSxeU7rEe5yp0sXlO6x HucqdLF5TusR7nKnSxeU7rEe5yp0sXlO6xHucqdLF5TusR7nKnSw/wAv6+P5/wCCTESYiTESYiTE SYiTESYiTESoiVESoiVESoiVESoiVESoiVES4iXES4iXES4iXES4iXES4jwiPCI8IjwiPCI8B4Dw HgPAeA8B4jxHiPEeI8R4jwHgPAeA8B4DwHgPCI8IjwiPCIlxEuIlxEuIlxEuIlxEuIlxEqIlREqI lREqIlREqIlREqIlREmIkxEmIkxEmIkxEmIkxEmIkxEiIkREiIkREiIkREiIkREiIkREiIkREiIk REiIkREiIkREiIkREiIkREiIkREiIkREiIkREiIkREiIkREiIkREiI9eI9eI9eI9eI9eI9eI9eI9 eI9eI9aI9aI9b7D1vsPW+w9X7D1fsPV+w9X7D1fsPV+w9X7Dd/8AF/X+v8i/b+r5+Py+P4+fn/TP /9k="
                                            transform="matrix(.106 0 0 -.106 2.825 96.168)"></image>
                                    </g>
                                </g>
                                <path fill="#6181B6"
                                    d="M64.026 93.694c32.36 0 58.594-13.295 58.594-29.694S96.387 34.306 64.026 34.306 5.433 47.601 5.433 64s26.233 29.694 58.593 29.694z">
                                </path>
                                <path fill="#fff"
                                    d="M75.896 73.598l2.906-14.958c.656-3.377.11-5.896-1.62-7.486-1.677-1.54-4.523-2.288-8.703-2.288h-5.033l1.44-7.412a.955.955 0 00-.935-1.135h-6.947a.954.954 0 00-.936.771l-3.086 15.881c-.28-1.787-.973-3.323-2.079-4.591-2.038-2.332-5.261-3.515-9.58-3.515H27.856a.951.951 0 00-.935.771L20.674 81.78a.953.953 0 00.935 1.134h7.002a.953.953 0 00.936-.771l1.511-7.775h5.213c2.735 0 5.032-.296 6.827-.881 1.834-.596 3.522-1.607 5.011-3.001a15.364 15.364 0 002.96-3.676l-1.248 6.424a.95.95 0 00.935 1.134h6.947a.954.954 0 00.936-.771l3.429-17.645h4.767c2.031 0 2.626.404 2.787.578.147.159.452.718.11 2.48l-2.764 14.223a.95.95 0 00.935 1.134h7.058a.951.951 0 00.935-.769zm-32.208-12.36c-.437 2.242-1.259 3.842-2.444 4.755-1.205.927-3.132 1.397-5.727 1.397h-3.104l2.244-11.548h4.012c2.948 0 4.136.63 4.612 1.158.662.734.802 2.199.407 4.238zm61.916-8.858c-2.038-2.332-5.261-3.515-9.581-3.515H82.559a.952.952 0 00-.936.771L75.375 81.78a.953.953 0 00.935 1.134h7.003a.953.953 0 00.935-.771l1.512-7.775h5.212c2.735 0 5.033-.296 6.827-.881 1.835-.596 3.522-1.607 5.011-3.001 1.241-1.141 2.264-2.421 3.037-3.806a15.404 15.404 0 001.65-4.588c.797-4.094.16-7.363-1.893-9.712zm-7.262 8.858c-.437 2.242-1.259 3.842-2.444 4.755-1.204.927-3.131 1.397-5.727 1.397h-3.104l2.245-11.548h4.012c2.948 0 4.136.63 4.612 1.158.662.734.801 2.199.406 4.238z">
                                </path>
                                <path fill="#000004"
                                    d="M38.67 54.89c2.66 0 4.434.491 5.32 1.474.885.982 1.097 2.668.633 5.057-.484 2.488-1.416 4.264-2.798 5.328-1.382 1.063-3.485 1.595-6.308 1.595h-4.26l2.614-13.453h4.799v-.001zM21.609 81.962h7.002l1.661-8.546h5.998c2.646 0 4.823-.277 6.532-.834 1.709-.556 3.263-1.488 4.661-2.797a14.369 14.369 0 002.85-3.569c.727-1.3 1.242-2.734 1.547-4.305.741-3.811.182-6.778-1.676-8.904s-4.812-3.189-8.862-3.189H27.856l-6.247 32.144zm35.394-40.691h6.947l-1.661 8.546h6.189c3.894 0 6.58.68 8.059 2.037 1.479 1.359 1.921 3.561 1.33 6.603l-2.906 14.959h-7.058l2.763-14.223c.314-1.618.199-2.722-.347-3.311-.546-.587-1.708-.882-3.485-.882h-5.553l-3.578 18.416h-6.947l6.247-32.145zM93.324 54.89c2.66 0 4.434.491 5.319 1.474.887.982 1.097 2.668.634 5.057-.484 2.488-1.417 4.264-2.799 5.328-1.382 1.063-3.484 1.595-6.308 1.595h-4.259l2.614-13.453h4.799v-.001zm-17.06 27.072h7.002l1.661-8.546h5.997c2.646 0 4.823-.277 6.532-.834 1.71-.556 3.264-1.488 4.661-2.797a14.35 14.35 0 002.851-3.569c.726-1.3 1.242-2.734 1.547-4.305.74-3.811.182-6.778-1.676-8.904s-4.812-3.189-8.863-3.189H82.511l-6.247 32.144z">
                                </path>
                            </svg>PHP</li>
                            <li><svg viewBox="0 0 128 128">
                                <title>WordPress Icon</title>
                                <path fill-rule="evenodd" clip-rule="evenodd" fill="#337BA2"
                                    d="M43.257 121.233c.079 1.018.029 2.071.299 3.037.115.408.9.629 1.381.935l.625.401c-.235.137-.469.389-.707.392a165.82 165.82 0 01-5.598.002c-.248-.004-.491-.237-.735-.364.198-.143.388-.391.597-.408 1.251-.105 1.632-.865 1.626-1.989-.011-2.066-.006-4.134.003-6.202.005-1.152-.322-1.993-1.679-2.045-.188-.008-.366-.296-.548-.453.182-.111.366-.321.546-.318 2.39.029 4.79-.024 7.167.177 1.873.159 3.107 1.455 3.234 2.949.138 1.639-.703 2.764-2.605 3.486l-.729.272c1.225 1.158 2.31 2.29 3.516 3.272.535.437 1.293.697 1.989.817 1.393.238 2.149-.361 2.187-1.742.061-2.229.032-4.461.011-6.691-.01-1.022-.449-1.697-1.589-1.753-.215-.01-.42-.253-.629-.388.239-.14.478-.4.715-.399 2.432.02 4.875-.055 7.291.161 4.123.366 6.42 3.797 5.214 7.588-.735 2.312-2.495 3.619-4.759 3.773-3.958.27-7.938.215-11.909.243-.316.002-.706-.341-.944-.623-.914-1.085-1.776-2.213-2.668-3.316-.27-.334-.571-.641-.858-.961l-.444.147zm13.119-5.869c0 2.785-.034 5.484.036 8.18.011.414.41 1.039.78 1.187 1.457.581 3.812-.368 4.47-1.842.881-1.973.988-4.05-.203-5.922-1.175-1.847-3.132-1.663-5.083-1.603zm-13.021 4.561c1.262.032 2.653.313 3.192-1.073.302-.777.234-1.982-.183-2.69-.633-1.076-1.906-.888-3.01-.752l.001 4.515z">
                                </path>
                                <path fill-rule="evenodd" clip-rule="evenodd" fill="#515151"
                                    d="M96.77 119.35c.834-.18 1.661-.154 2.198-.537.451-.32.563-1.116.908-1.886.199.357.386.539.39.724.025 1.38.03 2.761 0 4.141-.005.216-.226.427-.347.641-.136-.114-.339-.2-.399-.346-.733-1.771-.729-1.772-2.843-1.583.309 1.382-.763 3.149.89 4.058.843.463 2.203.371 3.189.068.841-.256 1.48-1.171 2.212-1.798v3.096c-.405.036-.712.086-1.021.086-4.141.006-8.282-.012-12.422.019-.714.006-1.197-.174-1.633-.773-.857-1.182-1.799-2.302-2.725-3.432-.232-.283-.534-.508-1.021-.962 0 1.154-.042 1.981.012 2.802.056.858.469 1.427 1.418 1.534.279.032.529.325.792.5-.271.105-.54.298-.812.303-1.827.026-3.653.025-5.48.001-.28-.004-.558-.173-.866-.275l.156-.303c2.244-.906 2.25-.906 2.248-3.508a343.88 343.88 0 00-.039-4.87c-.017-1.121-.321-2.01-1.689-2.058-.197-.007-.384-.287-.577-.441.226-.113.453-.325.678-.323 2.311.022 4.635-.054 6.93.16 2.512.234 4.065 2.329 3.132 4.257-.51 1.053-1.688 1.783-2.725 2.818.984.9 2.117 2.194 3.491 3.135 1.941 1.33 3.268.571 3.317-1.748.041-1.947-.007-3.896-.015-5.845-.004-1.155-.361-1.994-1.717-2.013-.185-.003-.367-.2-.586-.33.705-.52 7.499-.709 10.448-.332l.19 3.214-.333.136c-.686-.717-.601-2.199-2.02-2.204-1.084-.005-2.168-.119-3.332-.189.003 1.356.003 2.59.003 4.063zm-12.647.566c2.61.105 3.646-.603 3.584-2.364-.061-1.698-1.195-2.383-3.584-2.121v4.485z">
                                </path>
                                <path fill-rule="evenodd" clip-rule="evenodd" fill="#3179A1"
                                    d="M11.555 120.682c.996-2.947 1.979-5.897 3.003-8.834.141-.404.486-.737.737-1.104.248.378.587.725.729 1.14.931 2.719 1.817 5.451 2.722 8.179.072.219.165.43.375.969.928-2.813 1.787-5.308 2.564-7.829.27-.873-.081-1.504-1.097-1.618-.335-.039-.66-.17-1.051-.274.676-.749 5.957-.804 6.827-.108-.236.112-.424.271-.618.279-1.65.064-2.414 1.097-2.884 2.521-1.258 3.81-2.54 7.611-3.817 11.415-.133.395-.3.778-.452 1.166l-.421.03-3.579-10.821-3.619 10.788-.354.022c-.185-.401-.412-.79-.547-1.207-1.167-3.581-2.319-7.167-3.474-10.751-.495-1.539-.99-3.069-3.012-3.167-.132-.006-.253-.229-.38-.35.158-.13.316-.373.476-.375 2.272-.024 4.546-.024 6.818.001.158.001.313.247.47.379-.169.126-.319.309-.508.367-1.82.55-1.951.761-1.378 2.526.723 2.233 1.468 4.457 2.204 6.686l.266-.03z">
                                </path>
                                <path fill-rule="evenodd" clip-rule="evenodd" fill="#4D4D4D"
                                    d="M65.484 111.25c.279-.241.435-.494.587-.491 2.957.044 5.938-.093 8.864.247 2.768.321 4.301 2.919 3.466 5.359-.748 2.189-2.593 2.874-4.68 3.064-.881.081-1.776.013-2.824.013.093 1.453.14 2.78.275 4.098.113 1.114.863 1.56 1.923 1.65.239.021.457.288.684.442-.25.126-.498.36-.75.363-2.191.029-4.384.028-6.575.002-.263-.003-.523-.219-.784-.336.218-.165.432-.463.656-.472 1.463-.056 2.012-.964 2.03-2.235.044-3.081.04-6.162.002-9.243-.016-1.31-.649-2.148-2.072-2.206-.212-.008-.422-.13-.802-.255zm5.523 6.706c2.682.278 3.703.022 4.349-1.167.648-1.192.65-2.439-.116-3.566-1.059-1.559-2.679-1.098-4.233-1.154v5.887z">
                                </path>
                                <path fill-rule="evenodd" clip-rule="evenodd" fill="#3279A1"
                                    d="M31.076 126.463c-2.396-.104-4.348-.856-5.794-2.647-2.053-2.542-1.741-5.994.711-8.192 2.645-2.37 7.018-2.472 9.733-.171 1.838 1.559 2.709 3.533 2.111 5.953-.675 2.73-2.601 4.192-5.218 4.856-.546.137-1.122.149-1.543.201zm4.544-6.249l-.224-.147c-.149-.709-.236-1.439-.458-2.125-.642-1.971-1.986-2.945-3.963-2.949-1.97-.004-3.295.975-3.939 2.967-.572 1.771-.498 3.526.383 5.18 1.315 2.468 4.829 2.931 6.549.736.802-1.023 1.116-2.43 1.652-3.662z">
                                </path>
                                <path fill-rule="evenodd" clip-rule="evenodd" fill="#505050"
                                    d="M122.748 114.317l.893-.782v4.376l-.259.195c-.209-.295-.498-.562-.615-.891-.591-1.655-1.865-2.553-3.319-2.117-.499.149-1.099.649-1.232 1.11-.109.376.285 1.12.671 1.374 1.008.664 2.131 1.156 3.214 1.703 2.356 1.192 3.198 2.845 2.401 4.736-.809 1.921-3.263 2.915-5.462 2.173-.606-.206-1.167-.544-1.728-.811l-.857 1.126-.379-.116c0-1.477-.009-2.954.015-4.431.002-.143.215-.282.33-.423.18.218.448.41.527.66.523 1.656 1.53 2.756 3.325 2.94 1.023.105 2.023-.021 2.378-1.187.324-1.067-.42-1.669-1.219-2.124-.879-.5-1.808-.909-2.708-1.37-.395-.203-.798-.404-1.153-.665-1.257-.927-1.753-2.263-1.381-3.618.332-1.211 1.523-2.237 2.997-2.28 1.091-.031 2.195.25 3.561.422zm-16.269 11.027c-.166.33-.258.607-.429.821-.103.128-.356.25-.49.208-.127-.04-.262-.294-.265-.456-.021-1.299-.021-2.599.001-3.896.002-.159.178-.314.274-.471.184.117.446.193.537.362.169.314.208.696.356 1.024.668 1.482 2.021 2.409 3.573 2.184.649-.093 1.45-.586 1.772-1.138.434-.741-.086-1.504-.814-1.925-.979-.566-1.993-1.075-3.009-1.571-2.297-1.121-3.266-2.972-2.443-4.719.818-1.737 3.33-2.46 5.429-1.556.256.11.499.25.7.354l1.078-.886c.113.317.185.426.186.535.008 1.216.005 2.431.005 3.646l-.317.212c-.211-.27-.504-.509-.619-.814-.573-1.532-1.48-2.381-2.81-2.219-.624.075-1.419.504-1.726 1.018-.45.755.2 1.361.885 1.729.963.519 1.949.992 2.926 1.483 2.418 1.213 3.269 2.898 2.434 4.824-.813 1.876-3.346 2.847-5.517 2.077-.564-.199-1.087-.52-1.717-.826z">
                                </path>
                                <path fill-rule="evenodd" clip-rule="evenodd" fill="#494949"
                                    d="M65.261 1.395C38.48.917 16.103 22.648 16.096 49c-.008 27.11 21.338 48.739 48.077 48.699 26.49-.039 47.932-21.587 47.932-48.167C112.104 23.384 90.76 1.85 65.261 1.395zm-1.148 93.887c-25.326.006-45.694-20.529-45.693-46.067.001-24.88 20.685-45.48 45.674-45.489 25.432-.008 45.695 20.654 45.687 46.587-.008 24.483-20.807 44.964-45.668 44.969zm24.395-59.347c-.994-1.638-2.216-3.227-2.778-5.013-.64-2.032-1.171-4.345-.832-6.382.576-3.454 3.225-5.169 6.812-5.497C72.086.83 41.248 7.349 29.885 27.138c4.374-.203 8.55-.468 12.729-.524.791-.011 2.1.657 2.286 1.277.416 1.385-.748 1.868-1.986 1.963-1.301.102-2.604.199-4.115.314l14.935 44.494c.359-.587.507-.752.572-.945 2.762-8.255 5.54-16.505 8.232-24.784.246-.755.124-1.755-.146-2.531-1.424-4.111-3.13-8.133-4.379-12.294-.855-2.849-1.988-4.692-5.355-4.362-.574.056-1.273-1.178-1.916-1.816.777-.463 1.548-1.316 2.332-1.328a659.24 659.24 0 0120.572.006c.786.013 1.557.889 2.335 1.364-.681.622-1.267 1.554-2.063 1.794-1.276.385-2.691.312-4.218.448l14.953 44.484c2.266-7.524 4.374-14.434 6.422-21.36 1.83-6.182.74-11.957-2.567-17.403zM52.719 88.149c-.092.267-.097.563-.168 1.007 8.458 2.344 16.75 2.175 25.24-.685l-12.968-35.52c-4.151 12.064-8.131 23.63-12.104 35.198zm-6.535-1.606L26.646 32.947c-8.814 17.217-2.109 43.486 19.538 53.596zm54.452-55.403c-.27 2.994-.082 6.327-.941 9.362-2.023 7.152-4.496 14.181-6.877 21.229-2.588 7.66-5.28 15.286-7.927 22.927 12.437-7.372 19.271-18.253 20.359-32.555.62-8.14-2.188-19.412-4.614-20.963z">
                                </path>
                            </svg>WordPress</li>
                        <li class="all design"><svg viewBox="0 0 128 128">
                                <title>Photoshop Icon</title>
                                <path fill-rule="evenodd" clip-rule="evenodd" fill="#80B5E2"
                                    d="M50.246 41.616c-3.682-.925-7.369-.628-11.26-.022 0 6.805-.014 13.427.037 20.05.002.339.511.929.841.974 4.243.573 8.463.619 12.431-1.315 4.105-2 6.196-6.182 5.654-11.092-.492-4.471-3.139-7.448-7.703-8.595zM127 63.963V3.285c0-2.096.023-2.285-2.012-2.285H3.479C1.5 1 1 1.19 1 3.186v121.509c0 2.018.252 2.021 2.209 2.021 40.555.001 81.231-.009 121.786.037 1.573.002 1.995-.417 1.991-1.959-.054-20.277.014-40.556.014-60.831zm-70.648 5.84C50.795 71.785 45 71.896 39 71.431V94H28v-1.402c0-18.895-.087-37.788-.14-56.682-.006-1.569.243-2.327 2.011-2.507 8.332-.852 16.617-1.81 24.902.133 8.906 2.087 14.041 7.975 14.431 16.11.483 10.074-3.944 16.974-12.852 20.151zm44.31 12.754c-.424 5.771-3.678 9.56-9.015 11.392-7.142 2.452-14.245 1.883-21.225-.891-1.143-.455-1.364-1.031-.987-2.196.687-2.126 1.19-4.312 1.72-6.286 2.951.866 5.757 1.947 8.664 2.458 2.053.361 4.272.149 6.359-.178 1.871-.294 3.217-1.564 3.524-3.572.312-2.041-.303-3.809-2.105-4.895-1.432-.862-3.01-1.479-4.523-2.202-2.433-1.163-5.026-2.075-7.27-3.53-8.831-5.727-5.956-16.383-.063-20.396 3.153-2.146 6.642-3.098 10.377-3.229 4.393-.154 8.623.604 12.778 2.623l-2.195 7.789c-1.74-.616-3.36-1.416-5.07-1.734-2.029-.378-4.157-.589-6.205-.422-2.746.225-4.354 2.12-4.354 4.47 0 1.392.528 2.57 1.689 3.245 1.666.969 3.434 1.768 5.186 2.579 1.896.877 3.898 1.551 5.723 2.552 4.87 2.67 7.405 6.8 6.992 12.423z">
                                </path>
                            </svg>Photoshop</li>
                        <li><svg viewBox="0 0 128 128">
                                <title>XD Icon</title>
                                <path fill="#DD80BC"
                                    d="M127 3.3c0-2.1 0-2.3-2-2.3H3.5C1.5 1 1 1.2 1 3.2v121.5c0 2 .3 2 2.2 2H125c1.6 0 2-.4 2-2-.1-20.2 0-40.5 0-60.7V3.3zM58.7 94L49 72.2 38.8 94H27.6l14.5-29.3-13.5-31 11.5.1 8.5 20.3L59 33.7h10.8L55.2 63.1 69.7 94h-11zm43.6-59.2v56.6c0 1.5-.2 2.4-1.7 2.5-7 .9-14 1.9-20.9-.1-7.5-2.1-11.8-8-12.1-16.1-.4-10 3.4-16.9 10.8-20.1 4.6-2 9.3-2.1 14.6-1.6V33.8h9.3v1zM82.8 86.2c3.3.9 6.6.6 10 0v-20c0-.3-.4-.9-.7-1-3.7-.6-7.5-.6-11 1.3-3.6 2-5.5 6.2-5.1 11.1.3 4.5 2.7 7.4 6.8 8.6z">
                                </path>
                            </svg>XD</li>
                        <li>
                            <svg viewBox="0 0 128 128">
                                <title>Illustrator Icon</title>
                                <path fill-rule="evenodd" clip-rule="evenodd" fill="#FAA625"
                                    d="M47.955 69h15.371c-2.646-9-5.252-17.32-7.816-25.776C53.022 51.71 50.498 60 47.955 69zm76.157-68H2.873C.687 1 1 1.476 1 3.585v121.394C1 127.086.687 127 2.719 127h121.547c2.031 0 2.734.086 2.734-2.022V3.739C127 1.476 126.298 1 124.112 1zM77.298 96c-1.637 0-3.28-.133-4.909-.016-1.175.088-1.568-.406-1.881-1.426-1.514-4.931-3.123-9.86-4.638-14.79-.305-.992-.741-1.354-1.816-1.341-5.523.064-11.049.058-16.573-.007-1.163-.014-1.698.296-2.03 1.45-1.406 4.904-2.944 9.768-4.365 14.667-.308 1.062-.776 1.433-1.904 1.404-3.318-.083-6.641-.032-10.274-.032.959-3.045 1.829-5.861 2.729-8.665 5.514-17.2 11.047-34.4 16.521-51.611.382-1.198.913-1.567 2.143-1.54 3.886.086 7.775.022 11.663 0 .727-.005 1.223.038 1.489.864 6.505 20.116 13.033 40.356 19.555 60.47.028.091.01.573.025.573h-5.735zM98 96H86V51h12v45zm-6.35-51.071c-3.665-.005-6.289-2.528-6.314-6.07-.024-3.532 2.707-6.159 6.406-6.163 3.728-.004 6.355 2.537 6.384 6.171.026 3.545-2.667 6.068-6.476 6.062z">
                                </path>
                            </svg>
                            Illustrator
                        </li>
                        <li><svg viewBox="0 0 128 128">
                                <title>Canva Icon</title>
                                <g fill="#00c4cc">
                                    <path
                                        d="M59.39.152c-.484.051-1.995.23-3.328.387-5.374.613-11.468 2.227-16.816 4.48C19.891 13.106 5.324 30.849 1.305 51.2.359 56.04.129 58.418.129 64c0 7.195.715 12.16 2.61 18.434 6.195 20.53 22.323 36.632 42.906 42.851 6.195 1.871 11.187 2.586 18.355 2.586 7.195 0 12.16-.715 18.434-2.61 20.53-6.195 36.632-22.323 42.851-42.906 1.871-6.195 2.586-11.187 2.586-18.355 0-3.047-.152-6.527-.332-7.809-2.074-14.796-8.168-27.238-18.328-37.402C99.07 8.703 86.68 2.586 72.19.512c-1.996-.282-11.238-.54-12.8-.36zm-20.863 40.32c1.36.41 1.996.794 2.918 1.715 1.793 1.82 2.203 2.817 2.203 5.555 0 2.051-.078 2.434-.691 3.508-1.18 1.996-3.918 3.84-5.812 3.89-1.333.028-1.278-.562.18-2.097 1.945-2.023 2.226-2.79 2.226-5.813-.024-2.917-.383-3.914-1.739-4.734-1.128-.691-2.355-.64-4.148.203-4.66 2.23-9.703 9.653-11.672 17.258-2.613 10.137 2.02 18.25 9.649 16.867 2.226-.41 6.425-2.558 8.246-4.25 1.508-1.379 1.508-1.406 1.66-3.12.336-3.587 2.867-7.169 6.25-8.833 1.558-.77 1.945-.844 4.043-.844 1.996 0 2.457.102 3.43.637 3.097 1.77 2.457 5.89-.895 5.89-1.945 0-2.945-1-1.535-1.534 1.383-.512.867-2.434-.742-2.868-1.895-.488-4.047.793-5.403 3.25-1.64 2.97-1.715 6.504-.156 8.114 1.512 1.613 3.406.336 4.867-3.329.766-1.867 1.867-2.867 3.149-2.867 1.125 0 1.332.692.843 2.793-.718 3.25-.23 4.094 1.793 3.098.664-.309 1.766-1.023 2.43-1.535l1.254-1 .848-4.43c.922-4.965 1.277-5.633 3.172-5.988 1.82-.336 2.23.562 1.562 3.402l-.36 1.59 1.333-1.36c3.148-3.226 7.015-4.812 8.347-3.48.715.715.637 1.613-.386 4.785-.485 1.512-1.153 3.895-1.457 5.25-.461 2.047-.489 2.535-.23 2.868.82.972 3.327-.028 5.554-2.204l1.305-1.277.156-2.844c.152-3.277.457-4.453 1.328-5.504.82-.972 2.305-1.687 3.098-1.484.793.207.793.973.078 3.227-1 3.097-.895 10.238.129 10.238.41 0 2.507-2.2 3.84-4.043l.996-1.36-.793-.816c-1.383-1.46-1.715-2.406-1.715-4.789 0-1.738.129-2.379.562-3.227.719-1.328 1.844-2.3 3.176-2.687 1.406-.434 3.148.281 3.863 1.562.719 1.305.54 4.223-.383 6.223l-.664 1.457h.895c1.23 0 1.715-.305 3.918-2.379 1.152-1.101 2.484-2.05 3.48-2.511 3.918-1.84 8.528-.895 9.293 1.921.64 2.254-.765 3.84-3.226 3.66-1.766-.128-2.098-.59-1.074-1.456 1.843-1.54 0-3.508-2.637-2.793-1.434.386-3.047 1.996-3.89 3.867-1.692 3.738-.794 8.14 1.636 8.14.973 0 2.691-1.921 3.355-3.789.793-2.152 2.457-3.507 3.711-3.02.692.255.743.946.309 3.122-.488 2.383-.563 4.61-.18 5.633.153.382.614 1.101 1.051 1.586.816.921.844 1.254.152 1.691-.332.23-.77.129-1.843-.46-1.485-.77-2.766-2.153-3.227-3.458l-.281-.766-1.024.766c-.59.41-1.511.871-2.047 1.023-2.125.563-4.738-.894-5.964-3.351-.489-.95-.641-3.738-.282-4.813.204-.59.204-.59-.617-.18-.433.231-1.355.485-2.07.563-1.18.13-1.36.258-2.535 1.742-1.664 2.07-4.61 4.864-5.813 5.454-2.558 1.277-3.402.918-4.07-1.72l-.461-1.765-1.102.973c-1.406 1.23-4.222 2.715-5.836 3.074-1.535.332-3.175-.156-3.84-1.18-.995-1.535-.663-4.785.922-9.164 1.176-3.25.333-3.3-2.636-.203-2.203 2.328-3.149 3.992-3.762 6.578-.64 2.688-1.41 3.66-3.148 4.07-1.051.231-1.54-.41-1.332-1.816l.152-1.129-.973.668c-1.383.946-3.125 1.817-4.328 2.149-1.203.332-2.789-.024-3.172-.692-.691-1.175-.691-1.175-1.765-.332-2.332 1.895-5.66 1.356-7.348-1.152l-.54-.793-1.687 1.562c-4.867 4.454-10.957 6.45-15.464 5.067-5.735-1.738-8.907-6.656-8.856-13.746.024-7.117 3.172-14.617 8.473-20.172 2.996-3.125 5.812-4.969 8.68-5.66 2.07-.512 3.328-.485 5.296.129zm0 0">
                                    </path>
                                    <path
                                        d="M90.418 58.676c-.563.562-.356 2.816.36 4.25.359.742.742 1.332.87 1.332.102 0 .332-.59.512-1.309.64-2.66-.512-5.504-1.742-4.273zm0 0">
                                    </path>
                                </g>
                            </svg>Canva</li>
                            <li>
                    <svg viewBox="0 0 128 128">
                        <title>Java Icon</title>
                    <path fill="#0074BD" d="M52.581 67.817s-3.284 1.911 2.341 2.557c6.814.778 10.297.666 17.805-.753 0 0 1.979 1.237 4.735 2.309-16.836 7.213-38.104-.418-24.881-4.113zm-2.059-9.415s-3.684 2.729 1.945 3.311c7.28.751 13.027.813 22.979-1.103 0 0 1.373 1.396 3.536 2.157-20.352 5.954-43.021.469-28.46-4.365z"></path><path fill="#EA2D2E" d="M67.865 42.431c4.151 4.778-1.088 9.074-1.088 9.074s10.533-5.437 5.696-12.248c-4.519-6.349-7.982-9.502 10.771-20.378.001 0-29.438 7.35-15.379 23.552z"></path><path fill="#0074BD" d="M90.132 74.781s2.432 2.005-2.678 3.555c-9.716 2.943-40.444 3.831-48.979.117-3.066-1.335 2.687-3.187 4.496-3.576 1.887-.409 2.965-.334 2.965-.334-3.412-2.403-22.055 4.719-9.469 6.762 34.324 5.563 62.567-2.506 53.665-6.524zm-35.97-26.134s-15.629 3.713-5.534 5.063c4.264.57 12.758.439 20.676-.225 6.469-.543 12.961-1.704 12.961-1.704s-2.279.978-3.93 2.104c-15.874 4.175-46.533 2.23-37.706-2.038 7.463-3.611 13.533-3.2 13.533-3.2zM82.2 64.317c16.135-8.382 8.674-16.438 3.467-15.353-1.273.266-1.845.496-1.845.496s.475-.744 1.378-1.063c10.302-3.62 18.223 10.681-3.322 16.345 0 0 .247-.224.322-.425z"></path><path fill="#EA2D2E" d="M72.474 1.313s8.935 8.939-8.476 22.682c-13.962 11.027-3.184 17.313-.006 24.498-8.15-7.354-14.128-13.828-10.118-19.852 5.889-8.842 22.204-13.131 18.6-27.328z"></path><path fill="#0074BD" d="M55.749 87.039c15.484.99 39.269-.551 39.832-7.878 0 0-1.082 2.777-12.799 4.981-13.218 2.488-29.523 2.199-39.191.603 0 0 1.98 1.64 12.158 2.294z"></path><path fill="#EA2D2E" d="M94.866 100.181h-.472v-.264h1.27v.264h-.47v1.317h-.329l.001-1.317zm2.535.066h-.006l-.468 1.251h-.216l-.465-1.251h-.005v1.251h-.312v-1.581h.457l.431 1.119.432-1.119h.454v1.581h-.302v-1.251zm-44.19 14.79c-1.46 1.266-3.004 1.978-4.391 1.978-1.974 0-3.045-1.186-3.045-3.085 0-2.055 1.146-3.56 5.738-3.56h1.697v4.667h.001zm4.031 4.548v-14.077c0-3.599-2.053-5.973-6.997-5.973-2.886 0-5.416.714-7.473 1.622l.592 2.493c1.62-.595 3.715-1.147 5.771-1.147 2.85 0 4.075 1.147 4.075 3.521v1.779h-1.424c-6.921 0-10.044 2.685-10.044 6.723 0 3.479 2.058 5.456 5.933 5.456 2.49 0 4.351-1.028 6.088-2.533l.316 2.137h3.163v-.001zm13.452 0h-5.027l-6.051-19.689h4.391l3.756 12.099.835 3.635c1.896-5.258 3.24-10.596 3.912-15.733h4.271c-1.143 6.481-3.203 13.598-6.087 19.688zm19.288-4.548c-1.465 1.266-3.01 1.978-4.392 1.978-1.976 0-3.046-1.186-3.046-3.085 0-2.055 1.149-3.56 5.736-3.56h1.701v4.667h.001zm4.033 4.548v-14.077c0-3.599-2.059-5.973-6.999-5.973-2.889 0-5.418.714-7.475 1.622l.593 2.493c1.62-.595 3.718-1.147 5.774-1.147 2.846 0 4.074 1.147 4.074 3.521v1.779h-1.424c-6.923 0-10.045 2.685-10.045 6.723 0 3.479 2.056 5.456 5.93 5.456 2.491 0 4.349-1.028 6.091-2.533l.318 2.137h3.163v-.001zm-56.693 3.346c-1.147 1.679-3.005 3.008-5.037 3.757l-1.989-2.345c1.547-.794 2.872-2.075 3.489-3.269.532-1.063.753-2.43.753-5.701V92.891h4.284v22.173c0 4.375-.348 6.144-1.5 7.867z"></path>
                        </svg>
                        Java
                    </li>
                </ul>
            </section>
        </main>
        <?php
        require "site-footer.php";
        ?>
        </div>
    </div>
    <script src="scripts/scripts.js"></script>
    <script src="node_modules/aos/dist/aos.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
</body>

</html>