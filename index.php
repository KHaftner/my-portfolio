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
                    <article  data-aos="flip-left" data-aos-delay="200">
                        <div class="overlay-card">
                            <a href="projects.php">
                                <svg width="900" height="600" viewBox="0 0 900 600" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <title>Code Symbol Image</title>
                                    <path fill="transparent" d="M0 0h900v600H0z" />
                                    <path
                                        d="m692.054 349.078-.907 4.951c-7.751 41.772-36.35 75.257-75.128 85.896a97.006 97.006 0 0 1-15.231 2.917c-37.184 4.143-76.821-13.139-101.593-44.32-14.57-18.336-24.994-41.649-44.616-53.391-25.557-15.297-56.438-5.295-83.05 4.952-26.637 10.271-57.541 20.174-83.05 4.755-15.967-9.633-26.269-27.676-31.665-46.159-14.349-48.905 2.183-102.835 34.78-138.134 32.597-35.3 79.077-53.612 126.194-59.47 65.979-8.188 136.962 7.648 191.511 51.282 54.549 43.635 89.844 116.661 82.755 186.721z"
                                        fill="url(#a)" />
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M319.902 124.045c-21.78 0-39.437 17.656-39.437 39.437v8.974h353.638v-8.974c0-21.781-17.656-39.437-39.437-39.437H319.902zm314.201 99.331H280.465v214.87c0 21.78 17.657 39.437 39.437 39.437h274.764c21.781 0 39.437-17.657 39.437-39.437v-214.87z"
                                        fill="#987eb2" />
                                    <path
                                        d="M280.465 172.456h-14.788c0 8.167 6.621 14.789 14.788 14.789v-14.789zm353.638 0v14.789c8.168 0 14.789-6.622 14.789-14.789h-14.789zm0 50.92h14.789c0-8.168-6.621-14.789-14.789-14.789v14.789zm-353.638 0v-14.789c-8.167 0-14.788 6.621-14.788 14.789h14.788zm14.789-59.894c0-13.613 11.035-24.648 24.648-24.648v-29.578c-29.948 0-54.225 24.278-54.225 54.226h29.577zm0 8.974v-8.974h-29.577v8.974h29.577zm-14.789 14.789h353.638v-29.578H280.465v29.578zm338.849-23.763v8.974h29.578v-8.974h-29.578zm-24.648-24.648c13.613 0 24.648 11.035 24.648 24.648h29.578c0-29.948-24.278-54.226-54.226-54.226v29.578zm-274.764 0h274.764v-29.578H319.902v29.578zm314.201 69.753H280.465v29.578h353.638v-29.578zM295.254 438.246v-214.87h-29.577v214.87h29.577zm24.648 24.648c-13.613 0-24.648-11.036-24.648-24.648h-29.577c0 29.948 24.277 54.225 54.225 54.225v-29.577zm274.764 0H319.902v29.577h274.764v-29.577zm24.648-24.648c0 13.612-11.035 24.648-24.648 24.648v29.577c29.948 0 54.226-24.277 54.226-54.225h-29.578zm0-214.87v214.87h29.578v-214.87h-29.578z"
                                        fill="#987eb2" />
                                    <rect x="668.3" y="466.301" width="52.18" height="6.079" rx="3.04"
                                        transform="rotate(-45 668.3 466.301)" fill="#d795ad" />
                                    <rect x="688.307" y="466.443" width="19.375" height="6.079" rx="3.04"
                                        transform="rotate(-45 688.307 466.443)" fill="#d795ad" />
                                    <rect x="238.81" y="125.351" width="33.993" height="3.96" rx="1.98"
                                        transform="rotate(135 238.81 125.351)" fill="#d795ad" />
                                    <rect x="225.776" y="125.258" width="12.622" height="3.96" rx="1.98"
                                        transform="rotate(135 225.776 125.258)" fill="#d795ad" />
                                    <rect x="196.979" y="395.608" width="46.128" height="5.374" rx="2.687"
                                        transform="rotate(-45 196.979 395.608)" fill="#d795ad" />
                                    <rect x="214.665" y="395.734" width="17.128" height="5.374" rx="2.687"
                                        transform="rotate(-45 214.665 395.734)" fill="#d795ad" />
                                    <rect x="698.044" y="229.548" width="43.102" height="5.022" rx="2.511"
                                        transform="rotate(135 698.044 229.548)" fill="#d795ad" />
                                    <rect x="681.518" y="229.43" width="16.004" height="5.022" rx="2.511"
                                        transform="rotate(135 681.518 229.43)" fill="#d795ad" />
                                    <path clip-rule="evenodd"
                                        d="m722.395 380.129-11.248-10.712 11.248-10.711 11.247 10.711-11.247 10.712z"
                                        stroke="#d795ad" stroke-width="5.471" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                    <path
                                        d="M213.424 295.773c0 5.919-4.798 10.711-10.724 10.711s-10.7-4.815-10.7-10.711c0-5.92 4.797-10.712 10.724-10.712 5.926 0 10.7 4.792 10.7 10.712z"
                                        stroke="#d795ad" stroke-width="5.378" stroke-miterlimit="10" />
                                    <ellipse cx="382.828" cy="148.961" rx="10.181" ry="10.521"
                                        transform="rotate(105 382.828 148.961)" fill="#fff" />
                                    <circle r="10.726" transform="scale(-1 1) rotate(75 -542.784 -296.98)"
                                        fill="#987eb2" />
                                    <ellipse rx="6.592" ry="5.394" transform="scale(-1 1) rotate(75 -403.382 -316.052)"
                                        fill="#fff" />
                                    <path
                                        d="M225.808 190.447h.218c1.29 17.143 14.89 17.407 14.89 17.407s-14.997.275-14.997 20.084c0-19.809-14.996-20.084-14.996-20.084s13.594-.264 14.885-17.407zm451.026-40.834h.187c1.106 13.715 12.763 13.926 12.763 13.926s-12.854.22-12.854 16.067c0-15.847-12.854-16.067-12.854-16.067s11.652-.211 12.758-13.926z"
                                        fill="#d795ad" />
                                    <rect x="298.742" y="474.477" width="41.019" height="4.779" rx="2.389"
                                        transform="rotate(-45 298.742 474.477)" fill="#fff" />
                                    <rect x="319.71" y="474.477" width="41.019" height="4.779" rx="2.389"
                                        transform="rotate(-45 319.71 474.477)" fill="#fff" />
                                    <rect x="341.988" y="474.477" width="41.019" height="4.779" rx="2.389"
                                        transform="rotate(-45 341.988 474.477)" fill="#fff" />
                                    <path
                                        d="M584.434 476.587c10.057.012 24.531-2.607 36.388-14.034 11.854-11.429 5.19-18.531-6.579-19.818-11.77-1.287-25.884 4.08-35.023 15.574-9.139 11.494-3.042 18.269 5.214 18.278z"
                                        fill="url(#b)" />
                                    <path
                                        d="m398.34 372.335-39.293-39.294 39.293-39.293m117.882 0 39.293 39.293-39.293 39.294m-43.694-98.23-32.751 117.88"
                                        stroke="#fff" stroke-width="28" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                    <defs>
                                        <linearGradient id="a" x1="462.874" y1="-78.512" x2="470.689" y2="807.326"
                                            gradientUnits="userSpaceOnUse">
                                            <stop stop-color="#fff" />
                                            <stop offset="1" stop-color="#EEE" />
                                        </linearGradient>
                                        <linearGradient id="b" x1="637.595" y1="480.347" x2="546.095" y2="428.686"
                                            gradientUnits="userSpaceOnUse">
                                            <stop stop-color="#fff" />
                                            <stop offset="1" stop-color="#EEE" />
                                        </linearGradient>
                                    </defs>
                                </svg>

                                <div class="overlay">
                                    <div class="overlay-text">
                                        <p class="overlay-p">Projects.</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="card-text-content">
                            <a href="projects.php">
                                <h3>My Projects.</h3>
                            </a>
                            <p>Curious about my creations? 😎</p>
                        </div>
                    </article>
                </div>
                <div class="main-card">
                    <article  data-aos="flip-left" data-aos-delay="300">
                        <div class="overlay-card">
                            <a href="about.php">
                                <svg width="900" height="600" viewBox="0 0 900 600" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <title>Smiley Face & Heart</title>
                                    <path fill="transparent" d="M0 0h900v600H0z" />
                                    <path
                                        d="M717.245 355.561c3.785 69.748-132.578 211.572-300.654 159.078-78.171-24.417-71.549-64.942-130.99-118.352-35.43-31.833-86.336-55.905-100.495-102.176-12.231-39.94-4.73-82.868 16.475-110.791 47.69-62.796 143.966-105.796 238.829-6.856 94.863 98.941 267.053-.788 276.835 179.097z"
                                        fill="url(#a)" />
                                    <path
                                        d="M679.865 201.816c-13.264 23.671-42.313 26.924-88.851 22.425-35-3.389-66.917-6.012-101.919-25.096-24.5-13.348-43.893-31.407-58.047-48.947-15.339-19.001-36.747-40.687-26.252-62.232 14.423-29.595 97.829-54.521 178.82-13.76 88.969 44.791 109.224 104.474 96.249 127.61z"
                                        fill="url(#b)" />
                                    <path
                                        d="M342.267 491.321c-30.9-43.228-62.545-89.173-103.976-111.803-42.734-23.353-50.615-8.96-53.573 13.922-2.959 22.882 10.226 77.098 68.546 107.946 58.336 30.856 117.916 30.393 89.003-10.065z"
                                        fill="url(#c)" />
                                    <path
                                        d="M711.026 247.201c-13.882 3.289-28.564-8.484-28.564-8.484s7.835-17.099 21.721-20.377c13.882-3.288 28.56 8.474 28.56 8.474s-7.835 17.099-21.717 20.387z"
                                        fill="url(#d)" />
                                    <path
                                        d="M335.011 102.414c14.615 10.066 36.942 3.03 36.942 3.03s-1.382-23.355-16.007-33.412c-14.614-10.066-36.932-3.04-36.932-3.04s1.383 23.355 15.997 33.422z"
                                        fill="url(#e)" />
                                    <path
                                        d="M584.039 160.166c15.844 16.125 45.471 12.726 45.471 12.726s3.921-29.546-11.938-45.661c-15.844-16.126-45.456-12.736-45.456-12.736s-3.921 29.545 11.923 45.671z"
                                        fill="url(#f)" />
                                    <ellipse cx="652.209" cy="379.707" rx="11.774" ry="11.263"
                                        transform="rotate(180 652.209 379.707)" fill="#987eb2" />
                                    <ellipse cx="532.928" cy="511.274" rx="13.31" ry="13.822"
                                        transform="rotate(180 532.928 511.274)" fill="#987eb2" />
                                    <ellipse cx="250.851" cy="436.02" rx="15.87" ry="15.358"
                                        transform="rotate(180 250.851 436.02)" fill="#987eb2" />
                                    <circle r="5.631" transform="matrix(-1 0 0 1 229.35 248.139)" fill="#987eb2" />
                                    <circle r="10.751" transform="matrix(-1 0 0 1 674.734 155.991)" fill="#987eb2" />
                                    <ellipse rx="10.751" ry="10.239" transform="matrix(-1 0 0 1 638.898 477.998)"
                                        fill="#d795ad" />
                                    <ellipse rx="11.263" ry="10.239" transform="matrix(-1 0 0 1 185.835 343.871)"
                                        fill="#d795ad" />
                                    <circle r="3.584" transform="matrix(-1 0 0 1 299.997 487.725)" fill="#d795ad" />
                                    <circle r="5.119" transform="matrix(-1 0 0 1 573.883 125.787)" fill="#d795ad" />
                                    <circle r="5.003" transform="scale(1 -1) rotate(-75 -75.86 -313.944)"
                                        fill="#d795ad" />
                                    <circle r="6.655" transform="matrix(-1 0 0 1 252.899 192.85)" fill="#d795ad" />
                                    <ellipse rx="5.119" ry="4.095" transform="matrix(-1 0 0 1 659.888 311.108)"
                                        fill="#d795ad" />
                                    <circle r="10.411" transform="scale(1 -1) rotate(-75 163.916 -334.471)"
                                        fill="#d795ad" />
                                    <path
                                        d="M733.538 309.06h.134c.793 11.237 9.149 11.41 9.149 11.41s-9.215.179-9.215 13.163c0-12.984-9.214-13.163-9.214-13.163s8.353-.173 9.146-11.41zM293.735 131.93h.231c1.366 19.664 15.758 19.967 15.758 19.967s-15.87.315-15.87 23.036c0-22.721-15.87-23.036-15.87-23.036s14.386-.303 15.751-19.967z"
                                        fill="#d795ad" />
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M609.383 300.301c0 89.174-72.275 161.45-161.449 161.45s-161.449-72.276-161.449-161.45c0-89.173 72.275-161.449 161.449-161.449s161.449 72.276 161.449 161.449z"
                                        fill="#987eb2" stroke="#987eb2" stroke-width="26.897" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                    <path
                                        d="M396.057 358.684s19.805 12.235 52.835 12.235c33.029 0 52.835-12.235 52.835-12.235"
                                        stroke="#fff" stroke-width="22.048" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                    <path
                                        d="M408.686 284.268c0 14.302-11.867 25.915-26.53 25.915s-26.53-11.613-26.53-25.915 11.867-25.916 26.53-25.916 26.53 11.614 26.53 25.916zm132.601 0c0 14.302-11.867 25.915-26.53 25.915s-26.53-11.613-26.53-25.915 11.867-25.916 26.53-25.916 26.53 11.614 26.53 25.916z"
                                        fill="#fff" stroke="#fff" />
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M392.455 191.337c0 33.408-27.078 60.485-60.485 60.485-33.408 0-60.485-27.077-60.485-60.485s27.077-60.485 60.485-60.485c33.407 0 60.485 27.077 60.485 60.485z"
                                        fill="#fff" stroke="#987eb2" stroke-width="13.917" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M346.974 161.852c12.877 0 21.511 11.92 21.511 23.02 0 22.532-35.847 40.98-36.5 40.98-.653 0-36.5-18.448-36.5-40.98 0-11.1 8.634-23.02 21.511-23.02 7.36 0 12.195 3.62 14.989 6.844 2.794-3.224 7.628-6.844 14.989-6.844z"
                                        fill="#987eb2" />
                                    <defs>
                                        <linearGradient id="a" x1="554.263" y1="773.641" x2="299.189" y2="-377.164"
                                            gradientUnits="userSpaceOnUse">
                                            <stop stop-color="#fff" />
                                            <stop offset="1" stop-color="#EEE" />
                                        </linearGradient>
                                        <linearGradient id="b" x1="590.512" y1="355.23" x2="472.29" y2="-176.009"
                                            gradientUnits="userSpaceOnUse">
                                            <stop stop-color="#fff" />
                                            <stop offset="1" stop-color="#EEE" />
                                        </linearGradient>
                                        <linearGradient id="c" x1="307.764" y1="633.231" x2="206.384" y2="164.399"
                                            gradientUnits="userSpaceOnUse">
                                            <stop stop-color="#fff" />
                                            <stop offset="1" stop-color="#EEE" />
                                        </linearGradient>
                                        <linearGradient id="d" x1="658.75" y1="255.378" x2="780.272" y2="197.967"
                                            gradientUnits="userSpaceOnUse">
                                            <stop stop-color="#fff" />
                                            <stop offset="1" stop-color="#EEE" />
                                        </linearGradient>
                                        <linearGradient id="e" x1="391.941" y1="135.443" x2="276.899" y2="14.134"
                                            gradientUnits="userSpaceOnUse">
                                            <stop stop-color="#fff" />
                                            <stop offset="1" stop-color="#EEE" />
                                        </linearGradient>
                                        <linearGradient id="f" x1="647.253" y1="215.248" x2="532.711" y2="35.694"
                                            gradientUnits="userSpaceOnUse">
                                            <stop stop-color="#fff" />
                                            <stop offset="1" stop-color="#EEE" />
                                        </linearGradient>
                                    </defs>
                                </svg>
                                <div class="overlay">
                                    <div class="overlay-text">
                                        <p class="overlay-p">About Me.</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="card-text-content">
                            <a href="about.php">
                                <h3>About Me.</h3>
                            </a>
                            <p>Find out more about me! 😄</p>
                        </div>
                    </article>
                </div>

                <div class="main-card">
                    <article  data-aos="flip-left" data-aos-delay="400">
                        <div class="overlay-card">
                            <a href="contact.php">
                                <svg width="900" height="600" viewBox="0 0 900 600" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <title>Phone and Message Image</title>
                                    <path fill="transparent" d="M0 0h900v600H0z" />
                                    <path
                                        d="M677.359 371.454c-2.243 56.886-123.7 161.581-256.088 106.18-61.572-25.769-53.111-58.149-97.276-106.017-26.325-28.531-65.799-51.942-73.763-90.568-6.882-33.341 2.475-67.604 21.809-88.647 43.482-47.323 124.883-74.881 194.322 12.632 69.44 87.513 216.762 19.705 210.996 166.42z"
                                        fill="url(#a)" />
                                    <path
                                        d="M711.644 197.184c-12.089 21.576-38.565 24.54-80.982 20.44-31.901-3.089-60.991-5.48-92.894-22.874-22.33-12.166-40.006-28.626-52.907-44.612-13.98-17.319-33.493-37.085-23.927-56.722 13.145-26.974 89.166-49.693 162.985-12.54 81.09 40.823 99.552 95.221 87.725 116.308z"
                                        fill="url(#b)" />
                                    <path
                                        d="M783.616 251.73c-24.61 12.207-57.273-3.49-57.273-3.49s7.259-35.483 31.882-47.674c24.61-12.208 57.261 3.472 57.261 3.472s-7.26 35.484-31.87 47.692z"
                                        fill="url(#c)" />
                                    <path
                                        d="M118.578 335.719c26.238 15.726 63.882 1.189 63.882 1.189s-4.922-40.028-31.176-55.736c-26.239-15.726-63.867-1.207-63.867-1.207s4.922 40.028 31.161 55.754z"
                                        fill="url(#d)" />
                                    <circle r="7.559" transform="matrix(-1 0 0 1 740.431 457.158)" fill="#d795ad" />
                                    <circle r="10.918" transform="matrix(-1 0 0 1 161.049 402.971)" fill="#d795ad" />
                                    <circle r="8.31" transform="matrix(-1 0 0 1 778.923 382.427)" fill="#d795ad" />
                                    <circle r="9.238" transform="matrix(-1 0 0 1 690.741 125.547)" fill="#d795ad" />
                                    <circle r="8.296" transform="matrix(0 1 1 0 112.283 229.21)" fill="#d795ad" />
                                    <circle r="11.036" transform="matrix(-1 0 0 1 400.453 68.015)" fill="#d795ad" />
                                    <ellipse rx="8.489" ry="6.792" transform="matrix(-1 0 0 1 748.678 336.398)"
                                        fill="#d795ad" />
                                    <circle r="17.265" transform="scale(1 -1) rotate(-75 259.231 -410.402)"
                                        fill="#d795ad" />
                                    <path
                                        d="M223.857 173.201h.121c.716 10.147 8.262 10.303 8.262 10.303s-8.321.163-8.321 11.887c0-11.724-8.321-11.887-8.321-11.887s7.543-.156 8.259-10.303zm-12.642 265.606h.116c.688 10.116 7.933 10.272 7.933 10.272s-7.99.162-7.99 11.852c0-11.69-7.989-11.852-7.989-11.852s7.242-.156 7.93-10.272z"
                                        fill="#d795ad" />
                                    <path
                                        d="M450.243 327.359H181.569c-19.586 0-35.449-15.863-35.449-35.449V138.382c0-19.586 15.863-35.448 35.449-35.448h268.674c19.586 0 35.449 15.862 35.449 35.448V291.91c0 19.586-15.863 35.449-35.449 35.449z"
                                        fill="#fff" stroke="#d795ad" stroke-width="5.866" />
                                    <path
                                        d="M392.669 160.505h19.191c8.973 0 16.257 7.284 16.257 16.258v19.191c0 8.973-7.284 16.258-16.257 16.258h-19.191c-8.974 0-16.258-7.285-16.258-16.258v-19.191c0-8.974 7.284-16.258 16.258-16.258z"
                                        fill="#fff" stroke="#d795ad" stroke-width="5.866" />
                                    <path d="M258.333 215.146H200.76m95.954 57.574H200.76" stroke="#d795ad"
                                        stroke-width="5.866" stroke-linecap="round" stroke-linejoin="round" />
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M627.922 269.973c-10.551-22.888-24.622-42.399-40.524-57.779-3.367-3.24-8.448-3.945-12.693-1.988l-16.022 7.386c-13.127 6.051-26.688 1.048-31.973-10.416l-10.579-22.947c-7.043-15.278-.369-33.37 14.91-40.413l12.74-5.885c14.496-6.683 31.402-5.463 45.495 2.984 34.737 20.835 67.619 57.612 89.705 105.52 22.086 47.909 28.695 96.797 21.979 136.743-2.731 16.202-12.782 29.85-27.278 36.532l-12.736 5.871c-15.278 7.043-33.37.369-40.413-14.91l-10.579-22.946c-5.284-11.464-.276-25.04 11.183-30.311l17.679-8.138c4.245-1.957 7.023-6.273 6.732-10.943-1.382-22.087-7.088-45.477-17.626-68.36z"
                                        fill="#987eb2" />
                                    <path
                                        d="M364.293 246.453c73.064-34.492 160.255-3.223 194.746 69.84 34.492 73.064 3.224 160.255-69.84 194.747-73.064 34.491-160.255 3.223-194.746-69.841-34.492-73.064-3.223-160.255 69.84-194.746z"
                                        fill="#987eb2" />
                                    <path
                                        d="M360.104 472.695c1.563 1.636.849 4.345-1.317 4.999l-74.527 22.481c-2.329.703-4.495-1.485-3.77-3.807l23.657-75.703c.689-2.204 3.491-2.86 5.087-1.19l50.87 53.22z"
                                        fill="#987eb2" />
                                    <path
                                        d="M473.751 381.524c.19 10.84 9.129 19.437 19.97 19.247 10.84-.19 19.437-9.129 19.247-19.97-.19-10.841-9.129-19.437-19.97-19.247-10.841.228-19.437 9.129-19.247 19.97zm-68.126 2.889c1.103 10.764 10.765 18.6 21.529 17.497 10.765-1.103 18.601-10.765 17.498-21.529-1.103-10.765-10.765-18.601-21.53-17.498-10.764 1.141-18.6 10.765-17.497 21.53zm-64.056 1.179c1.103 10.765 10.764 18.601 21.529 17.498 10.765-1.103 18.601-10.765 17.497-21.53-1.103-10.764-10.764-18.6-21.529-17.497-10.765 1.103-18.601 10.727-17.497 21.529z"
                                        fill="#fff" />
                                    <defs>
                                        <linearGradient id="a" x1="513.254" y1="698.292" x2="393.946" y2="-254.971"
                                            gradientUnits="userSpaceOnUse">
                                            <stop stop-color="#fff" />
                                            <stop offset="1" stop-color="#EEE" />
                                        </linearGradient>
                                        <linearGradient id="b" x1="630.204" y1="337.013" x2="522.451" y2="-147.183"
                                            gradientUnits="userSpaceOnUse">
                                            <stop stop-color="#fff" />
                                            <stop offset="1" stop-color="#EEE" />
                                        </linearGradient>
                                        <linearGradient id="c" x1="689.111" y1="289.809" x2="892.095" y2="129.248"
                                            gradientUnits="userSpaceOnUse">
                                            <stop stop-color="#fff" />
                                            <stop offset="1" stop-color="#EEE" />
                                        </linearGradient>
                                        <linearGradient id="d" x1="220.113" y1="386.339" x2="8.99" y2="190.178"
                                            gradientUnits="userSpaceOnUse">
                                            <stop stop-color="#fff" />
                                            <stop offset="1" stop-color="#EEE" />
                                        </linearGradient>
                                    </defs>
                                </svg>
                                <div class="overlay">
                                    <div class="overlay-text">
                                        <p class="overlay-p">Contact Me.</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="card-text-content">
                            <a href="contact.php">
                                <h3>Contact Me.</h3>
                            </a>
                            <p>Looking to get in touch? 😊</p>
                        </div>
                    </article>
                </div>
                <?php
                require "back-to-top.php";
                ?>
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