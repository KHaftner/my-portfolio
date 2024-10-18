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
                        I'm a freelance web developer based in Metro Vancouver, British Columbia.
                    </p>
                    <p>I appreciate you taking the time to check out my work! Currently, I'm a student at Thompson Rivers University, working towards a Bachelor of Computing Science.</p>
                    <p>In addition to my current studies, I have also completed the Front-End Web Developer program at BCIT.</p>
                    <p>If you're looking for some help or collaboration on a web development project, I'd be happy to help you out.</p>

                    <a href="#skills-list"><svg class="the-down-button" clip-rule="evenodd" fill-rule="evenodd"
                            stroke-linejoin="round" stroke-miterlimit="2" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <title>Down Button</title>
                            <path
                                d="m16.843 10.211c.108-.141.157-.3.157-.456 0-.389-.306-.755-.749-.755h-8.501c-.445 0-.75.367-.75.755 0 .157.05.316.159.457 1.203 1.554 3.252 4.199 4.258 5.498.142.184.36.29.592.29.23 0 .449-.107.591-.291 1.002-1.299 3.044-3.945 4.243-5.498z" />
                        </svg></a>
                </div>

            </div>

            <div class="bottom-img-wrapper">
                <img src="images/abby-computer.png" alt="A dog sitting at a computer with a cup of coffee" loading="lazy" data-aos="zoom-in-left" data-aos-delay="200" />
            </div>

        </section>

        <div class="bottom-below-fold"></div>

        <section class="skills-list" id="skills-list">
            <div class="skills-top-wrapper">
                <h2 data-aos="fade-right" data-aos-delay="200">Toolkit.</h2>
                <div class="skills-top-svg">
                    <svg width="900" height="600" viewBox="0 0 900 600" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <title>Code Symbol Drawing</title>
                        <path fill="transparent" d="M0 0h900v600H0z" />
                        <path clip-rule="evenodd"
                            d="M588.179 387.428h42.605c11.759 0 21.303 9.543 21.303 21.302v42.605c0 11.759-9.544 21.302-21.303 21.302h-42.605c-11.759 0-21.302-9.543-21.302-21.302V408.73c0-11.759 9.543-21.302 21.302-21.302zM289.945 89.194h42.605c11.759 0 21.302 9.543 21.302 21.302v42.605c0 11.759-9.543 21.302-21.302 21.302h-42.605c-11.759 0-21.302-9.543-21.302-21.302v-42.605c0-11.759 9.543-21.302 21.302-21.302z"
                            stroke="#d795ad" stroke-width="8" stroke-linecap="round" stroke-linejoin="round" />
                        <path clip-rule="evenodd"
                            d="M439.062 238.311h42.605c11.759 0 21.303 9.543 21.303 21.302v42.605c0 11.759-9.544 21.303-21.303 21.303h-42.605c-11.759 0-21.302-9.544-21.302-21.303v-42.605c0-11.759 9.543-21.302 21.302-21.302z"
                            stroke="#d795ad" stroke-width="12" stroke-linecap="round" stroke-linejoin="round" />
                        <path
                            d="M439.062 131.798h170.42c23.539 0 42.605 19.066 42.605 42.605v63.908c0 23.539-19.066 42.604-42.605 42.604h-42.605m-85.21 149.118H311.248c-23.54 0-42.605-19.066-42.605-42.605V323.52c0-23.539 19.065-42.604 42.605-42.604h42.604"
                            stroke="#d795ad" stroke-width="8" stroke-linecap="round" stroke-linejoin="round" />
                        <circle cx="467.383" cy="280.993" r="78.733" fill="#987eb2" stroke="#987eb2"
                            stroke-width="11.812" stroke-linecap="round" stroke-linejoin="round" />
                        <path
                            d="m475.715 251.834-16.663 58.321m-18.756-20.832-16.656-16.656 16.656-16.666m54.159 49.987 16.665-16.665-16.665-16.656"
                            stroke="#fff" stroke-width="9.45" stroke-linecap="round" stroke-linejoin="round" />
                        <rect x="692.86" y="131.702" width="158.467" height="7.35" rx="3.675" fill="#d795ad" />
                        <rect x="669.726" y="299.423" width="158.467" height="7.35" rx="3.675" fill="#d795ad" />
                        <rect x="97.163" y="206.887" width="158.467" height="7.35" rx="3.675" fill="#d795ad" />
                        <rect x="89.066" y="445.166" width="158.467" height="7.35" rx="3.675" fill="#d795ad" />
                        <rect x="692.86" y="169.873" width="158.467" height="7.35" rx="3.675" fill="#d795ad" />
                        <rect x="669.726" y="337.593" width="158.467" height="7.35" rx="3.675" fill="#d795ad" />
                        <rect x="97.163" y="245.058" width="158.467" height="7.35" rx="3.675" fill="#d795ad" />
                        <rect x="89.066" y="483.337" width="158.467" height="7.35" rx="3.675" fill="#d795ad" />
                        <path
                            d="M764.964 231.931c15.739-3.729 32.386 9.619 32.386 9.619s-8.884 19.386-24.628 23.103c-15.739 3.729-32.381-9.607-32.381-9.607s8.884-19.386 24.623-23.115z"
                            fill="url(#a)" />
                        <circle cx="207.865" cy="321.348" r="15.854" fill="#987eb2" />
                        <circle r="11.903" transform="matrix(1 0 0 -1 840.096 236.43)" fill="#987eb2" />
                        <circle r="11.903" transform="matrix(1 0 0 -1 584.467 186.693)" fill="#987eb2" />
                        <circle r="22.725" transform="matrix(1 0 0 -1 326.936 505.194)" fill="#987eb2" />
                        <circle r="12.683" transform="matrix(1 0 0 -1 609.537 430.377)" fill="#d795ad" />
                        <circle r="10.821" transform="matrix(1 0 0 -1 439.955 494.447)" fill="#d795ad" />
                        <circle r="10.575" transform="scale(-1 1) rotate(-75 -106.451 688.544)" fill="#d795ad" />
                        <circle r="14.068" transform="matrix(1 0 0 -1 729.916 108.021)" fill="#d795ad" />
                        <ellipse rx="10.821" ry="8.657" transform="matrix(1 0 0 -1 59.403 293.31)" fill="#d795ad" />
                        <circle r="15.545" transform="scale(-1 1) rotate(-75 -45.443 183.402)" fill="#d795ad" />
                        <path
                            d="M129.51 372.474h-.283c-1.677-23.752-19.341-24.117-19.341-24.117s19.479-.38 19.479-27.825c0 27.445 19.478 27.825 19.478 27.825s-17.657.365-19.333 24.117zm14.285-231.006h-.205c-1.217-17.696-14.04-17.968-14.04-17.968s14.14-.284 14.14-20.73c0 20.446 14.139 20.73 14.139 20.73s-12.817.272-14.034 17.968z"
                            fill="#d795ad" />
                        <defs>
                            <linearGradient id="a" x1="824.233" y1="222.66" x2="686.453" y2="287.752"
                                gradientUnits="userSpaceOnUse">
                                <stop stop-color="#fff" />
                                <stop offset="1" stop-color="#EEE" />
                            </linearGradient>
                        </defs>
                    </svg>
                </div>
            </div>

            <div class="filter-buttons">
                <button id="allBtn" class="active">All</button>
                <button id="developmentBtn">Development</button>
                <button id="designBtn">Design</button>
            </div>

            <ul id="front-end-skills">
                <li class="all development">
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
                <li class="all development">
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
                <li class="all development"><svg viewBox="0 0 128 128">
                        <title>Sass Icon</title>
                        <path fill-rule="evenodd" clip-rule="evenodd" fill="#CB6699"
                            d="M1.219 56.156c0 .703.207 1.167.323 1.618.756 2.933 2.381 5.45 4.309 7.746 2.746 3.272 6.109 5.906 9.554 8.383 2.988 2.148 6.037 4.248 9.037 6.38.515.366 1.002.787 1.561 1.236-.481.26-.881.489-1.297.7-3.959 2.008-7.768 4.259-11.279 6.986-2.116 1.644-4.162 3.391-5.607 5.674-2.325 3.672-3.148 7.584-1.415 11.761.506 1.22 1.278 2.274 2.367 3.053.353.252.749.502 1.162.6 1.058.249 2.136.412 3.207.609l3.033-.002c3.354-.299 6.407-1.448 9.166-3.352 4.312-2.976 7.217-6.966 8.466-12.087.908-3.722.945-7.448-.125-11.153a11.696 11.696 0 00-.354-1.014c-.13-.333-.283-.657-.463-1.072l6.876-3.954.103.088c-.125.409-.258.817-.371 1.23-.817 2.984-1.36 6.02-1.165 9.117.208 3.3 1.129 6.389 3.061 9.146 1.562 2.23 5.284 2.313 6.944.075.589-.795 1.16-1.626 1.589-2.513 1.121-2.315 2.159-4.671 3.23-7.011l.187-.428c-.077 1.108-.167 2.081-.208 3.055-.064 1.521.025 3.033.545 4.48.445 1.238 1.202 2.163 2.62 2.326.97.111 1.743-.333 2.456-.896a10.384 10.384 0 002.691-3.199c1.901-3.491 3.853-6.961 5.576-10.54 1.864-3.871 3.494-7.855 5.225-11.792l.286-.698c.409 1.607.694 3.181 1.219 4.671.61 1.729 1.365 3.417 2.187 5.058.389.775.344 1.278-.195 1.928-2.256 2.72-4.473 5.473-6.692 8.223-.491.607-.98 1.225-1.389 1.888a3.701 3.701 0 00-.48 1.364 1.737 1.737 0 001.383 1.971 9.661 9.661 0 002.708.193c3.097-.228 5.909-1.315 8.395-3.157 3.221-2.386 4.255-5.642 3.475-9.501-.211-1.047-.584-2.065-.947-3.074-.163-.455-.174-.774.123-1.198 2.575-3.677 4.775-7.578 6.821-11.569.081-.157.164-.314.306-.482.663 3.45 1.661 6.775 3.449 9.792-.912.879-1.815 1.676-2.632 2.554-1.799 1.934-3.359 4.034-4.173 6.595-.35 1.104-.619 2.226-.463 3.405.242 1.831 1.742 3.021 3.543 2.604 3.854-.892 7.181-2.708 9.612-5.925 1.636-2.166 1.785-4.582 1.1-7.113-.188-.688-.411-1.365-.651-2.154.951-.295 1.878-.649 2.837-.868 4.979-1.136 9.904-.938 14.702.86 2.801 1.05 5.064 2.807 6.406 5.571 1.639 3.379.733 6.585-2.452 8.721-.297.199-.637.356-.883.605a.869.869 0 00-.205.67c.021.123.346.277.533.275 1.047-.008 1.896-.557 2.711-1.121 2.042-1.413 3.532-3.314 3.853-5.817l.063-.188-.077-1.63c-.031-.094.023-.187.016-.258-.434-3.645-2.381-6.472-5.213-8.688-3.28-2.565-7.153-3.621-11.249-3.788a25.401 25.401 0 00-9.765 1.503c-.897.325-1.786.71-2.688 1.073-.121-.219-.251-.429-.358-.646-.926-1.896-2.048-3.708-2.296-5.882-.176-1.544-.392-3.086-.025-4.613.353-1.469.813-2.913 1.246-4.362.223-.746.066-1.164-.646-1.5a2.854 2.854 0 00-.786-.258c-1.75-.254-3.476-.109-5.171.384-.6.175-1.036.511-1.169 1.175-.076.381-.231.746-.339 1.122-.443 1.563-.757 3.156-1.473 4.645-1.794 3.735-3.842 7.329-5.938 10.897-.227.385-.466.763-.752 1.23-.736-1.54-1.521-2.922-1.759-4.542-.269-1.832-.481-3.661-.025-5.479.339-1.356.782-2.687 1.19-4.025.193-.636.104-.97-.472-1.305-.291-.169-.62-.319-.948-.368a11.643 11.643 0 00-5.354.438c-.543.176-.828.527-.994 1.087-.488 1.652-.904 3.344-1.589 4.915-2.774 6.36-5.628 12.687-8.479 19.013-.595 1.321-1.292 2.596-1.963 3.882-.17.326-.418.613-.63.919-.17-.201-.236-.339-.235-.477.005-.813-.092-1.65.063-2.436a172.189 172.189 0 011.578-7.099c.47-1.946 1.017-3.874 1.538-5.807.175-.647.178-1.252-.287-1.796-.781-.911-2.413-1.111-3.381-.409l-.428.242.083-.69c.204-1.479.245-2.953-.161-4.41-.506-1.816-1.802-2.861-3.686-2.803-.878.027-1.8.177-2.613.497-3.419 1.34-6.048 3.713-8.286 6.568a2.592 2.592 0 01-.757.654c-2.893 1.604-5.795 3.188-8.696 4.778l-3.229 1.769c-.866-.826-1.653-1.683-2.546-2.41-2.727-2.224-5.498-4.393-8.244-6.592-2.434-1.949-4.792-3.979-6.596-6.56-1.342-1.92-2.207-4.021-2.29-6.395-.105-3.025.753-5.789 2.293-8.362 1.97-3.292 4.657-5.934 7.611-8.327 3.125-2.53 6.505-4.678 10.008-6.639 4.901-2.743 9.942-5.171 15.347-6.774 5.542-1.644 11.165-2.585 16.965-1.929 2.28.258 4.494.78 6.527 1.895 1.557.853 2.834 1.97 3.428 3.716.586 1.718.568 3.459.162 5.204-.825 3.534-2.76 6.447-5.195 9.05-3.994 4.267-8.866 7.172-14.351 9.091a39.478 39.478 0 01-9.765 2.083c-2.729.229-5.401-.013-7.985-.962-1.711-.629-3.201-1.591-4.399-2.987-.214-.25-.488-.521-.887-.287-.391.23-.46.602-.329.979.219.626.421 1.278.762 1.838.857 1.405 2.107 2.424 3.483 3.298 2.643 1.681 5.597 2.246 8.66 2.377 4.648.201 9.183-.493 13.654-1.74 6.383-1.78 11.933-4.924 16.384-9.884 3.706-4.13 6.353-8.791 6.92-14.419.277-2.747-.018-5.438-1.304-7.944-1.395-2.715-3.613-4.734-6.265-6.125C68.756 18.179 64.588 17 60.286 17h-4.31c-5.21 0-10.247 1.493-15.143 3.274-3.706 1.349-7.34 2.941-10.868 4.703-7.683 3.839-14.838 8.468-20.715 14.833-2.928 3.171-5.407 6.67-6.833 10.79a40.494 40.494 0 00-1.111 3.746m27.839 36.013c-.333 4.459-2.354 8.074-5.657 11.002-1.858 1.646-3.989 2.818-6.471 3.23-.9.149-1.821.185-2.694-.188-1.245-.532-1.524-1.637-1.548-2.814-.037-1.876.62-3.572 1.521-5.186 1.176-2.104 2.9-3.708 4.741-5.206 2.9-2.361 6.046-4.359 9.268-6.245l.243-.1c.498 1.84.735 3.657.597 5.507zM54.303 70.98c-.235 1.424-.529 2.849-.945 4.229-1.438 4.777-3.285 9.406-5.282 13.973-.369.845-.906 1.616-1.373 2.417a1.689 1.689 0 01-.283.334c-.578.571-1.126.541-1.418-.206-.34-.868-.549-1.797-.729-2.716-.121-.617-.092-1.265-.13-1.897.039-4.494 1.41-8.578 3.736-12.38.959-1.568 2.003-3.062 3.598-4.054a6.27 6.27 0 011.595-.706c.85-.239 1.372.154 1.231 1.006zm17.164 21.868l6.169-7.203c.257 2.675-4.29 8.015-6.169 7.203zm19.703-4.847c-.436.25-.911.43-1.358.661-.409.212-.544-.002-.556-.354a2.385 2.385 0 01.093-.721c.833-2.938 2.366-5.446 4.647-7.486l.16-.082c1.085 3.035-.169 6.368-2.986 7.982z">
                        </path>
                    </svg>Sass</li>
                <li class="all development"><svg viewBox="0 0 128 128">
                        <title>JavaScript Icon</title>
                        <path fill="#F0DB4F" d="M1.408 1.408h125.184v125.185H1.408z"></path>
                        <path fill="#323330"
                            d="M116.347 96.736c-.917-5.711-4.641-10.508-15.672-14.981-3.832-1.761-8.104-3.022-9.377-5.926-.452-1.69-.512-2.642-.226-3.665.821-3.32 4.784-4.355 7.925-3.403 2.023.678 3.938 2.237 5.093 4.724 5.402-3.498 5.391-3.475 9.163-5.879-1.381-2.141-2.118-3.129-3.022-4.045-3.249-3.629-7.676-5.498-14.756-5.355l-3.688.477c-3.534.893-6.902 2.748-8.877 5.235-5.926 6.724-4.236 18.492 2.975 23.335 7.104 5.332 17.54 6.545 18.873 11.531 1.297 6.104-4.486 8.08-10.234 7.378-4.236-.881-6.592-3.034-9.139-6.949-4.688 2.713-4.688 2.713-9.508 5.485 1.143 2.499 2.344 3.63 4.26 5.795 9.068 9.198 31.76 8.746 35.83-5.176.165-.478 1.261-3.666.38-8.581zM69.462 58.943H57.753l-.048 30.272c0 6.438.333 12.34-.714 14.149-1.713 3.558-6.152 3.117-8.175 2.427-2.059-1.012-3.106-2.451-4.319-4.485-.333-.584-.583-1.036-.667-1.071l-9.52 5.83c1.583 3.249 3.915 6.069 6.902 7.901 4.462 2.678 10.459 3.499 16.731 2.059 4.082-1.189 7.604-3.652 9.448-7.401 2.666-4.915 2.094-10.864 2.07-17.444.06-10.735.001-21.468.001-32.237z">
                        </path>
                    </svg>
                    JavaScript</li>
                <li class="all development"><svg viewBox="0 0 128 128">
                        <title>React Icon</title>
                        <g fill="#61DAFB">
                            <circle cx="64" cy="64" r="11.4"></circle>
                            <path
                                d="M107.3 45.2c-2.2-.8-4.5-1.6-6.9-2.3.6-2.4 1.1-4.8 1.5-7.1 2.1-13.2-.2-22.5-6.6-26.1-1.9-1.1-4-1.6-6.4-1.6-7 0-15.9 5.2-24.9 13.9-9-8.7-17.9-13.9-24.9-13.9-2.4 0-4.5.5-6.4 1.6-6.4 3.7-8.7 13-6.6 26.1.4 2.3.9 4.7 1.5 7.1-2.4.7-4.7 1.4-6.9 2.3C8.2 50 1.4 56.6 1.4 64s6.9 14 19.3 18.8c2.2.8 4.5 1.6 6.9 2.3-.6 2.4-1.1 4.8-1.5 7.1-2.1 13.2.2 22.5 6.6 26.1 1.9 1.1 4 1.6 6.4 1.6 7.1 0 16-5.2 24.9-13.9 9 8.7 17.9 13.9 24.9 13.9 2.4 0 4.5-.5 6.4-1.6 6.4-3.7 8.7-13 6.6-26.1-.4-2.3-.9-4.7-1.5-7.1 2.4-.7 4.7-1.4 6.9-2.3 12.5-4.8 19.3-11.4 19.3-18.8s-6.8-14-19.3-18.8zM92.5 14.7c4.1 2.4 5.5 9.8 3.8 20.3-.3 2.1-.8 4.3-1.4 6.6-5.2-1.2-10.7-2-16.5-2.5-3.4-4.8-6.9-9.1-10.4-13 7.4-7.3 14.9-12.3 21-12.3 1.3 0 2.5.3 3.5.9zM81.3 74c-1.8 3.2-3.9 6.4-6.1 9.6-3.7.3-7.4.4-11.2.4-3.9 0-7.6-.1-11.2-.4-2.2-3.2-4.2-6.4-6-9.6-1.9-3.3-3.7-6.7-5.3-10 1.6-3.3 3.4-6.7 5.3-10 1.8-3.2 3.9-6.4 6.1-9.6 3.7-.3 7.4-.4 11.2-.4 3.9 0 7.6.1 11.2.4 2.2 3.2 4.2 6.4 6 9.6 1.9 3.3 3.7 6.7 5.3 10-1.7 3.3-3.4 6.6-5.3 10zm8.3-3.3c1.5 3.5 2.7 6.9 3.8 10.3-3.4.8-7 1.4-10.8 1.9 1.2-1.9 2.5-3.9 3.6-6 1.2-2.1 2.3-4.2 3.4-6.2zM64 97.8c-2.4-2.6-4.7-5.4-6.9-8.3 2.3.1 4.6.2 6.9.2 2.3 0 4.6-.1 6.9-.2-2.2 2.9-4.5 5.7-6.9 8.3zm-18.6-15c-3.8-.5-7.4-1.1-10.8-1.9 1.1-3.3 2.3-6.8 3.8-10.3 1.1 2 2.2 4.1 3.4 6.1 1.2 2.2 2.4 4.1 3.6 6.1zm-7-25.5c-1.5-3.5-2.7-6.9-3.8-10.3 3.4-.8 7-1.4 10.8-1.9-1.2 1.9-2.5 3.9-3.6 6-1.2 2.1-2.3 4.2-3.4 6.2zM64 30.2c2.4 2.6 4.7 5.4 6.9 8.3-2.3-.1-4.6-.2-6.9-.2-2.3 0-4.6.1-6.9.2 2.2-2.9 4.5-5.7 6.9-8.3zm22.2 21l-3.6-6c3.8.5 7.4 1.1 10.8 1.9-1.1 3.3-2.3 6.8-3.8 10.3-1.1-2.1-2.2-4.2-3.4-6.2zM31.7 35c-1.7-10.5-.3-17.9 3.8-20.3 1-.6 2.2-.9 3.5-.9 6 0 13.5 4.9 21 12.3-3.5 3.8-7 8.2-10.4 13-5.8.5-11.3 1.4-16.5 2.5-.6-2.3-1-4.5-1.4-6.6zM7 64c0-4.7 5.7-9.7 15.7-13.4 2-.8 4.2-1.5 6.4-2.1 1.6 5 3.6 10.3 6 15.6-2.4 5.3-4.5 10.5-6 15.5C15.3 75.6 7 69.6 7 64zm28.5 49.3c-4.1-2.4-5.5-9.8-3.8-20.3.3-2.1.8-4.3 1.4-6.6 5.2 1.2 10.7 2 16.5 2.5 3.4 4.8 6.9 9.1 10.4 13-7.4 7.3-14.9 12.3-21 12.3-1.3 0-2.5-.3-3.5-.9zM96.3 93c1.7 10.5.3 17.9-3.8 20.3-1 .6-2.2.9-3.5.9-6 0-13.5-4.9-21-12.3 3.5-3.8 7-8.2 10.4-13 5.8-.5 11.3-1.4 16.5-2.5.6 2.3 1 4.5 1.4 6.6zm9-15.6c-2 .8-4.2 1.5-6.4 2.1-1.6-5-3.6-10.3-6-15.6 2.4-5.3 4.5-10.5 6-15.5 13.8 4 22.1 10 22.1 15.6 0 4.7-5.8 9.7-15.7 13.4z">
                            </path>
                        </g>
                    </svg>React</li>
                <li class="all development"><svg viewBox="0 0 128 128">
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
                <li class="all development">
                    <svg viewBox="0 0 128 128">
                        <title>MySQL Icon</title>
                        <path fill="#00618A"
                            d="M2.001 90.458h4.108V74.235l6.36 14.143c.75 1.712 1.777 2.317 3.792 2.317s3.003-.605 3.753-2.317l6.36-14.143v16.223h4.108V74.262c0-1.58-.632-2.345-1.936-2.739-3.121-.974-5.215-.131-6.163 1.976l-6.241 13.958-6.043-13.959c-.909-2.106-3.042-2.949-6.163-1.976C2.632 71.917 2 72.681 2 74.261v16.197zm31.898-13.206h4.107v8.938c-.038.485.156 1.625 2.406 1.661 1.148.018 8.862 0 8.934 0V77.208h4.117c.019 0-.004 14.514-.004 14.574.022 3.58-4.441 4.357-6.499 4.417H33.988v-2.764c.022 0 12.963.003 12.995-.001 2.645-.279 2.332-1.593 2.331-2.035v-1.078h-8.731c-4.062-.037-6.65-1.81-6.683-3.85-.002-.187.089-9.129-.001-9.219z">
                        </path>
                        <path fill="#E48E00"
                            d="M56.63 90.458h11.812c1.383 0 2.727-.289 3.793-.789 1.777-.816 2.646-1.922 2.646-3.372v-3.002c0-1.185-.987-2.292-2.923-3.028-1.027-.396-2.292-.605-3.517-.605h-4.978c-1.659 0-2.449-.5-2.646-1.606-.039-.132-.039-.237-.039-.369v-1.87c0-.105 0-.211.039-.342.197-.843.632-1.08 2.094-1.212l.395-.026h11.733v-2.738H63.504c-1.659 0-2.528.105-3.318.342-2.449.764-3.517 1.975-3.517 4.082v2.396c0 1.844 2.095 3.424 5.61 3.793.396.025.79.053 1.185.053h4.267c.158 0 .316 0 .435.025 1.304.105 1.856.343 2.252.816a.98.98 0 01.315.737v2.397c0 .289-.197.658-.592.974-.355.316-.948.527-1.738.58l-.435.026H56.63v2.738zm43.881-4.766c0 2.817 2.094 4.397 6.32 4.714.395.026.79.052 1.185.052h10.706V87.72h-10.784c-2.41 0-3.318-.606-3.318-2.055V71.497h-4.108v14.195zm-23.008.142v-9.765c0-2.48 1.742-3.985 5.186-4.46a7.8 7.8 0 011.108-.079h7.799c.396 0 .752.026 1.147.079 3.444.475 5.187 1.979 5.187 4.46v9.765c0 2.014-.74 3.09-2.445 3.792l4.048 3.653h-4.771l-3.274-2.956-3.296.209h-4.395a9.075 9.075 0 01-2.414-.343c-2.613-.712-3.88-2.085-3.88-4.355zm4.434-.237c0 .132.039.265.079.423.237 1.135 1.307 1.768 2.929 1.768h3.732l-3.428-3.095h4.771l2.989 2.7c.552-.295.914-.743 1.041-1.32.039-.132.039-.264.039-.396v-9.368c0-.105 0-.238-.039-.37-.238-1.056-1.307-1.662-2.89-1.662h-6.216c-1.82 0-3.008.792-3.008 2.032v9.288z">
                        </path>
                        <path fill="#00618A"
                            d="M122.336 66.952c-2.525-.069-4.454.166-6.104.861-.469.198-1.216.203-1.292.79.257.271.297.674.502 1.006.394.637 1.059 1.491 1.652 1.938.647.489 1.315 1.013 2.011 1.437 1.235.754 2.615 1.184 3.806 1.938.701.446 1.397 1.006 2.082 1.509.339.247.565.634 1.006.789v-.071c-.231-.294-.291-.698-.503-1.006l-.934-.934c-.913-1.212-2.071-2.275-3.304-3.159-.982-.705-3.18-1.658-3.59-2.801l-.072-.071c.696-.079 1.512-.331 2.154-.503 1.08-.29 2.045-.215 3.16-.503l1.508-.432v-.286c-.563-.578-.966-1.344-1.58-1.867-1.607-1.369-3.363-2.737-5.17-3.879-1.002-.632-2.241-1.043-3.304-1.579-.356-.181-.984-.274-1.221-.575-.559-.711-.862-1.612-1.293-2.441a93.068 93.068 0 01-2.585-5.458c-.544-1.245-.9-2.473-1.579-3.59-3.261-5.361-6.771-8.597-12.208-11.777-1.157-.677-2.55-.943-4.021-1.292l-2.37-.144c-.481-.201-.983-.791-1.436-1.077-1.802-1.138-6.422-3.613-7.756-.358-.842 2.054 1.26 4.058 2.011 5.099.527.73 1.203 1.548 1.58 2.369.248.54.29 1.081.503 1.652.521 1.406.976 2.937 1.651 4.236.341.658.718 1.351 1.149 1.939.264.36.718.52.789 1.077-.443.62-.469 1.584-.718 2.369-1.122 3.539-.699 7.938.934 10.557.501.805 1.681 2.529 3.303 1.867 1.419-.578 1.103-2.369 1.509-3.95.092-.357.035-.621.215-.861v.072l1.293 2.585c.957 1.541 2.654 3.15 4.093 4.237.746.563 1.334 1.538 2.298 1.867v-.073h-.071c-.188-.291-.479-.411-.719-.646-.562-.551-1.187-1.235-1.651-1.867-1.309-1.776-2.465-3.721-3.519-5.745-.503-.966-.94-2.032-1.364-3.016-.164-.379-.162-.953-.502-1.148-.466.72-1.149 1.303-1.509 2.154-.574 1.36-.648 3.019-.861 4.739l-.144.071c-1.001-.241-1.352-1.271-1.724-2.154-.94-2.233-1.115-5.83-.287-8.401.214-.666 1.181-2.761.789-3.376-.187-.613-.804-.967-1.148-1.437a11.222 11.222 0 01-1.149-2.011c-.77-1.741-1.129-3.696-1.938-5.457-.388-.842-1.042-1.693-1.58-2.441-.595-.83-1.262-1.44-1.724-2.442-.164-.356-.387-.927-.144-1.293.077-.247.188-.35.432-.431.416-.321 1.576.107 2.01.287 1.152.479 2.113.934 3.089 1.58.468.311.941.911 1.508 1.077h.646c1.011.232 2.144.071 3.088.358 1.67.508 3.166 1.297 4.524 2.155 4.139 2.614 7.522 6.334 9.838 10.772.372.715.534 1.396.861 2.154.662 1.528 1.496 3.101 2.154 4.596.657 1.491 1.298 2.996 2.227 4.237.488.652 2.374 1.002 3.231 1.364.601.254 1.585.519 2.154.861 1.087.656 2.141 1.437 3.16 2.155.509.362 2.076 1.149 2.154 1.798zM90.237 39.593a5.124 5.124 0 00-1.293.144v.071h.072c.251.517.694.849 1.005 1.293l.719 1.508.071-.071c.445-.313.648-.814.646-1.58-.179-.188-.205-.423-.359-.646-.204-.3-.602-.468-.861-.719z">
                        </path>
                    </svg>
                    MySQL
                </li>
                <li class="all development"><svg viewBox="0 0 128 128">
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
                <li class="all development"><svg viewBox="0 0 128 128">
                        <title>WooCommerce</title>
                        <path fill="#7f54b3"
                            d="M116.3 89.1H11.7C5.2 89.1 0 83.9 0 77.4v-40C0 31 5.2 25.8 11.7 25.8h104.7c6.4 0 11.7 5.2 11.7 11.7v40c-.1 6.4-5.3 11.6-11.8 11.6z">
                        </path>
                        <path fill="#FFF"
                            d="M13.8 76.7s2.8 11.8 8.5 3.9 11.2-20.3 11.2-20.3.4-3.1 2 3.7S44 80 44 80s6.3 7.9 8.9-.4c-1-11 2.8-31 6.7-40.6 1.6-8.5-7.3-6.1-8.1-4.1s-6.3 14.8-6.7 28.2c0 0-4.7-12.8-5.1-17.4-.4-4.7-5.3-5.9-8.1-1.4S20.3 66.2 20.3 66.2l-5.5-28.4s-5.5-7.3-8.7 1.6c0 0 5.7 34.9 7.7 37.3zM87 45.7c-8.5-14.2-21.1-3.4-21.1-3.4s-9.6 11.1-5.3 26.2c6.9 14.9 16.6 8.3 19.2 7.1 2.7-1.3 14.1-14.3 7.2-29.9zm-6.5 12.5c0 5.9-4.9 11.4-8.9 10.2-2.2-1.3-3.6-4.8-3.6-10.8 2-9.7 6.4-11 8.7-10.8 4.3 2.3 4.1 7.4 3.8 11.4zM118.9 45.7c-8.5-14.2-21.1-3.4-21.1-3.4s-9.6 11.1-5.3 26.2c6.9 14.9 16.6 8.3 19.2 7.1 2.6-1.3 14.1-14.3 7.2-29.9zm-6.5 12.5c0 5.9-4.9 11.4-8.9 10.2-2.2-1.3-3.6-4.8-3.6-10.8 2-9.7 6.4-11 8.7-10.8 4.2 2.3 4 7.4 3.8 11.4z">
                        </path>
                        <path fill="#7f54b3" d="M61.3 89.1l22.3 13.1-4.7-13.1-12.8-3.6z"></path>
                    </svg>Woo<br>Commerce</li>
                <li class="all development">
                    <title>Shopify Icon</title>
                    <?php echo '<?xml version="1.0" encoding="utf-8"?>'; ?>
                    <svg version="1.1" id="Layer_1"
                        xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                        viewBox="0 0 108.44 122.88" style="enable-background:new 0 0 108.44 122.88"
                        xml:space="preserve">
                        <style type="text/css">
                            .st0 {
                                fill-rule: evenodd;
                                clip-rule: evenodd;
                                fill: #95BF47;
                            }

                            .st1 {
                                fill-rule: evenodd;
                                clip-rule: evenodd;
                                fill: #5E8E3E;
                            }

                            .st2 {
                                fill-rule: evenodd;
                                clip-rule: evenodd;
                                fill: #FFFFFF;
                            }
                        </style>
                        <g>
                            <path class="st0"
                                d="M94.98,23.66c-0.09-0.62-0.63-0.96-1.08-1c-0.45-0.04-9.19-0.17-9.19-0.17s-7.32-7.1-8.04-7.83 c-0.72-0.72-2.13-0.5-2.68-0.34c-0.01,0-1.37,0.43-3.68,1.14c-0.38-1.25-0.95-2.78-1.76-4.32c-2.6-4.97-6.42-7.6-11.03-7.61 c-0.01,0-0.01,0-0.02,0c-0.32,0-0.64,0.03-0.96,0.06c-0.14-0.16-0.27-0.32-0.42-0.48c-2.01-2.15-4.58-3.19-7.67-3.1 c-5.95,0.17-11.88,4.47-16.69,12.11c-3.38,5.37-5.96,12.12-6.69,17.35c-6.83,2.12-11.61,3.6-11.72,3.63 c-3.45,1.08-3.56,1.19-4.01,4.44C9.03,39.99,0,109.8,0,109.8l75.65,13.08l32.79-8.15C108.44,114.73,95.06,24.28,94.98,23.66 L94.98,23.66z M66.52,16.63c-1.74,0.54-3.72,1.15-5.87,1.82c-0.04-3.01-0.4-7.21-1.81-10.83C63.36,8.47,65.58,13.58,66.52,16.63 L66.52,16.63z M56.69,19.68c-3.96,1.23-8.29,2.57-12.63,3.91c1.22-4.67,3.54-9.33,6.38-12.38c1.06-1.14,2.54-2.4,4.29-3.12 C56.38,11.52,56.73,16.39,56.69,19.68L56.69,19.68z M48.58,3.97c1.4-0.03,2.57,0.28,3.58,0.94C50.55,5.74,49,6.94,47.54,8.5 c-3.78,4.06-6.68,10.35-7.83,16.43c-3.6,1.11-7.13,2.21-10.37,3.21C31.38,18.58,39.4,4.23,48.58,3.97L48.58,3.97z" />
                            <path class="st1"
                                d="M93.9,22.66c-0.45-0.04-9.19-0.17-9.19-0.17s-7.32-7.1-8.04-7.83c-0.27-0.27-0.63-0.41-1.02-0.47l0,108.68 l32.78-8.15c0,0-13.38-90.44-13.46-91.06C94.9,23.04,94.35,22.7,93.9,22.66L93.9,22.66z" />
                            <path class="st2"
                                d="M57.48,39.52l-3.81,14.25c0,0-4.25-1.93-9.28-1.62c-7.38,0.47-7.46,5.12-7.39,6.29 c0.4,6.37,17.16,7.76,18.11,22.69c0.74,11.74-6.23,19.77-16.27,20.41c-12.05,0.76-18.69-6.35-18.69-6.35l2.55-10.86 c0,0,6.68,5.04,12.02,4.7c3.49-0.22,4.74-3.06,4.61-5.07c-0.52-8.31-14.18-7.82-15.04-21.48c-0.73-11.49,6.82-23.14,23.48-24.19 C54.2,37.88,57.48,39.52,57.48,39.52L57.48,39.52z" />
                        </g>
                    </svg>
                    Shopify
                </li>
                <li class="all development"><svg viewBox="0 0 128 128">
                        <title>VS Code Icon</title>
                        <path
                            d="M3.656 45.043s-3.027-2.191.61-5.113l8.468-7.594s2.426-2.559 4.989-.328l78.175 59.328v28.45s-.039 4.468-5.757 3.976zm0 0"
                            fill="#2489ca"></path>
                        <path
                            d="M23.809 63.379L3.656 81.742s-2.07 1.543 0 4.305l9.356 8.527s2.222 2.395 5.508-.328l21.359-16.238zm0 0"
                            fill="#1070b3"></path>
                        <path d="M59.184 63.531l36.953-28.285-.239-28.297S94.32.773 89.055 3.99L39.879 48.851zm0 0"
                            fill="#0877b9"></path>
                        <path
                            d="M90.14 123.797c2.145 2.203 4.747 1.48 4.747 1.48l28.797-14.222c3.687-2.52 3.171-5.645 3.171-5.645V20.465c0-3.735-3.812-5.024-3.812-5.024L98.082 3.38c-5.453-3.379-9.027.61-9.027.61s4.593-3.317 6.843 2.96v112.317c0 .773-.164 1.53-.492 2.214-.656 1.332-2.086 2.57-5.504 2.051zm0 0"
                            fill="#3c99d4"></path>
                    </svg>VS Code</li>
                <li class="all development"><svg viewBox="0 0 128 128">
                        <title>Git Icon</title>
                        <path fill="#F34F29"
                            d="M124.737 58.378L69.621 3.264c-3.172-3.174-8.32-3.174-11.497 0L46.68 14.71l14.518 14.518c3.375-1.139 7.243-.375 9.932 2.314 2.703 2.706 3.461 6.607 2.294 9.993l13.992 13.993c3.385-1.167 7.292-.413 9.994 2.295 3.78 3.777 3.78 9.9 0 13.679a9.673 9.673 0 01-13.683 0 9.677 9.677 0 01-2.105-10.521L68.574 47.933l-.002 34.341a9.708 9.708 0 012.559 1.828c3.778 3.777 3.778 9.898 0 13.683-3.779 3.777-9.904 3.777-13.679 0-3.778-3.784-3.778-9.905 0-13.683a9.65 9.65 0 013.167-2.11V47.333a9.581 9.581 0 01-3.167-2.111c-2.862-2.86-3.551-7.06-2.083-10.576L41.056 20.333 3.264 58.123a8.133 8.133 0 000 11.5l55.117 55.114c3.174 3.174 8.32 3.174 11.499 0l54.858-54.858a8.135 8.135 0 00-.001-11.501z">
                        </path>
                    </svg>
                    Git</li>
                <li class="all development"><svg viewBox="0 0 128 128">
                        <title>GitHub Icon</title>
                        <g fill="#181616">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M64 5.103c-33.347 0-60.388 27.035-60.388 60.388 0 26.682 17.303 49.317 41.297 57.303 3.017.56 4.125-1.31 4.125-2.905 0-1.44-.056-6.197-.082-11.243-16.8 3.653-20.345-7.125-20.345-7.125-2.747-6.98-6.705-8.836-6.705-8.836-5.48-3.748.413-3.67.413-3.67 6.063.425 9.257 6.223 9.257 6.223 5.386 9.23 14.127 6.562 17.573 5.02.542-3.903 2.107-6.568 3.834-8.076-13.413-1.525-27.514-6.704-27.514-29.843 0-6.593 2.36-11.98 6.223-16.21-.628-1.52-2.695-7.662.584-15.98 0 0 5.07-1.623 16.61 6.19C53.7 35 58.867 34.327 64 34.304c5.13.023 10.3.694 15.127 2.033 11.526-7.813 16.59-6.19 16.59-6.19 3.287 8.317 1.22 14.46.593 15.98 3.872 4.23 6.215 9.617 6.215 16.21 0 23.194-14.127 28.3-27.574 29.796 2.167 1.874 4.097 5.55 4.097 11.183 0 8.08-.07 14.583-.07 16.572 0 1.607 1.088 3.49 4.148 2.897 23.98-7.994 41.263-30.622 41.263-57.294C124.388 32.14 97.35 5.104 64 5.104z">
                            </path>
                            <path
                                d="M26.484 91.806c-.133.3-.605.39-1.035.185-.44-.196-.685-.605-.543-.906.13-.31.603-.395 1.04-.188.44.197.69.61.537.91zm2.446 2.729c-.287.267-.85.143-1.232-.28-.396-.42-.47-.983-.177-1.254.298-.266.844-.14 1.24.28.394.426.472.984.17 1.255zM31.312 98.012c-.37.258-.976.017-1.35-.52-.37-.538-.37-1.183.01-1.44.373-.258.97-.025 1.35.507.368.545.368 1.19-.01 1.452zm3.261 3.361c-.33.365-1.036.267-1.552-.23-.527-.487-.674-1.18-.343-1.544.336-.366 1.045-.264 1.564.23.527.486.686 1.18.333 1.543zm4.5 1.951c-.147.473-.825.688-1.51.486-.683-.207-1.13-.76-.99-1.238.14-.477.823-.7 1.512-.485.683.206 1.13.756.988 1.237zm4.943.361c.017.498-.563.91-1.28.92-.723.017-1.308-.387-1.315-.877 0-.503.568-.91 1.29-.924.717-.013 1.306.387 1.306.88zm4.598-.782c.086.485-.413.984-1.126 1.117-.7.13-1.35-.172-1.44-.653-.086-.498.422-.997 1.122-1.126.714-.123 1.354.17 1.444.663zm0 0">
                            </path>
                        </g>
                    </svg>GitHub</li>
                <li class="all development"><svg viewBox="0 0 128 128">
                        <title>Gulp Icon</title>
                        <path fill-rule="evenodd" clip-rule="evenodd" fill="#EB4A4B"
                            d="M36.965 35.459c.877 9.232 1.747 18.412 2.637 27.798 1.451-2.495 2.501-4.888 4.085-6.848 1.475-1.826 3.334-3.511 5.357-4.678 2.641-1.524 6.104-.089 6.96 2.614.23.725-.319 1.697-.511 2.556-.646-.341-1.479-.529-1.901-1.051-1.793-2.217-2.873-2.479-4.856-.563-3.699 3.576-5.779 8.056-6.573 13.091-.153.974.456 2.067.713 3.105 1.011-.348 2.185-.476 3.002-1.084 2.656-1.977 4.302-4.666 5.21-7.88.197-.696 1.265-1.145 1.933-1.708.32.658 1.05 1.433.897 1.954a373.814 373.814 0 01-4.536 14.429c-.162.484-1.051.725-1.604 1.079-.223-.636-.692-1.302-.617-1.901.168-1.358.605-2.683.91-3.927l-7.24 3.333c.405 4.622.825 9.807 1.323 14.985.382 3.954 1.029 4.978 4.923 5.728 4.544.875 9.173 1.434 13.792 1.774a60.391 60.391 0 0020.23-1.904c2.472-.664 3.458-2.29 3.635-4.717.162-2.235.524-4.456.775-6.685.493-4.391.972-8.783 1.476-13.358-1.667 1.056-2.978 2.238-4.511 2.739-1.116.365-2.524-.169-3.803-.303.245-1.174.23-2.497.796-3.487.922-1.618 2.224-3.021 3.364-4.515l-.491-.591c-.817.483-1.832.8-2.413 1.485-1.182 1.394-2.339 2.886-3.13 4.52-1.324 2.735-2.333 5.622-3.518 8.426-.515 1.216-.959 3.076-2.684 2.366-1.845-.761-.547-2.386-.114-3.542.689-1.844 1.599-3.606 2.215-4.962-1.746.208-3.516.459-5.294.614-.752.064-1.646-.348-2.261-.07-2.045.924-3.341.553-3.766-1.711-.947.615-1.749 1.448-2.694 1.672-1.147.273-2.703.452-3.543-.121-.673-.459-.918-2.184-.688-3.196.457-2.012 1.311-3.946 2.122-5.859.502-1.185 1.007-3.077 2.701-2.253 1.674.813.154 2.185-.232 3.286-.599 1.702-1.209 3.401-1.813 5.101l.96.58c.914-.794 2.053-1.441 2.693-2.415 1.048-1.592 1.681-3.452 2.673-5.086.411-.677 1.296-1.065 1.967-1.584.136.862.462 1.748.354 2.58-.107.841-.698 1.61-.981 2.442-.425 1.246-.768 2.52-1.2 3.969 2.043.078 2.918-.782 3.495-2.299 1.826-4.793 3.672-9.581 5.679-14.3.343-.808 1.509-1.264 2.296-1.884.091.974.525 2.078.216 2.899-1.645 4.349-3.492 8.62-5.228 12.935-.293.727-.387 1.534-.572 2.304 3.059-1.375 5.612-2.895 6.544-6.146.228-.79 1.162-1.377 1.771-2.058l1.416 1.5c.43-.362.824-.774 1.291-1.075 1.47-.947 3.053-1.782 4.603-.315 1.604 1.517.39 2.995-.448 4.307-.912 1.431-2.029 2.73-3.057 4.086 2.312-1.49 5.469-2.158 5.889-5.378 1.024-7.865 1.924-15.746 2.837-23.625.271-2.332.416-4.679.627-7.109-18.21 4.409-36.029 4.436-54.088-.069zm7.816 61.369c.877 2.317 2.209 4.593 2.558 7.011.737 5.147.924 10.372 1.446 15.554.076.755.565 1.792 1.175 2.124 8.98 4.88 18.047 5.726 27.209.389 1.367-.796 1.62-1.847 1.797-3.325.857-7.181-1.051-14.798 3.54-21.56-12.856 3.189-25.403 3.288-37.725-.193zm30.991-60.08c4.362-.421 8.671-1.445 12.985-2.291.813-.159 1.535-.778 2.299-1.185-1.007-.885-1.878-1.311-2.788-1.418-4.53-.535-9.076-.947-13.603-1.508-.684-.085-1.905-.929-1.854-1.083 1.321-3.98 1.256-8.485 4.254-11.839 3.789-4.24 7.617-8.443 11.416-12.648-2.826-3.04-2.864-3.044-5.425-.383-1.448 1.504-2.771 3.15-4.342 4.512-5.813 5.038-9.896 11.005-10.692 18.872-.183 1.805-1.174 2.457-3.069 2.485-6.256.091-12.519.263-18.761.674-3.093.203-6.148.997-9.221 1.523l-.028 1.149c1.923.593 3.809 1.372 5.773 1.749 10.944 2.098 21.991 2.458 33.056 1.391zM72.276 34c-2.477 2-4.524 2-6.501 0h6.501z">
                        </path>
                    </svg>Gulp</li>
                <li class="all design"><svg viewBox="0 0 128 128">
                        <title>Photoshop Icon</title>
                        <path fill-rule="evenodd" clip-rule="evenodd" fill="#80B5E2"
                            d="M50.246 41.616c-3.682-.925-7.369-.628-11.26-.022 0 6.805-.014 13.427.037 20.05.002.339.511.929.841.974 4.243.573 8.463.619 12.431-1.315 4.105-2 6.196-6.182 5.654-11.092-.492-4.471-3.139-7.448-7.703-8.595zM127 63.963V3.285c0-2.096.023-2.285-2.012-2.285H3.479C1.5 1 1 1.19 1 3.186v121.509c0 2.018.252 2.021 2.209 2.021 40.555.001 81.231-.009 121.786.037 1.573.002 1.995-.417 1.991-1.959-.054-20.277.014-40.556.014-60.831zm-70.648 5.84C50.795 71.785 45 71.896 39 71.431V94H28v-1.402c0-18.895-.087-37.788-.14-56.682-.006-1.569.243-2.327 2.011-2.507 8.332-.852 16.617-1.81 24.902.133 8.906 2.087 14.041 7.975 14.431 16.11.483 10.074-3.944 16.974-12.852 20.151zm44.31 12.754c-.424 5.771-3.678 9.56-9.015 11.392-7.142 2.452-14.245 1.883-21.225-.891-1.143-.455-1.364-1.031-.987-2.196.687-2.126 1.19-4.312 1.72-6.286 2.951.866 5.757 1.947 8.664 2.458 2.053.361 4.272.149 6.359-.178 1.871-.294 3.217-1.564 3.524-3.572.312-2.041-.303-3.809-2.105-4.895-1.432-.862-3.01-1.479-4.523-2.202-2.433-1.163-5.026-2.075-7.27-3.53-8.831-5.727-5.956-16.383-.063-20.396 3.153-2.146 6.642-3.098 10.377-3.229 4.393-.154 8.623.604 12.778 2.623l-2.195 7.789c-1.74-.616-3.36-1.416-5.07-1.734-2.029-.378-4.157-.589-6.205-.422-2.746.225-4.354 2.12-4.354 4.47 0 1.392.528 2.57 1.689 3.245 1.666.969 3.434 1.768 5.186 2.579 1.896.877 3.898 1.551 5.723 2.552 4.87 2.67 7.405 6.8 6.992 12.423z">
                        </path>
                    </svg>Photoshop</li>
                <li class="all design"><svg viewBox="0 0 128 128">
                        <title>XD Icon</title>
                        <path fill="#DD80BC"
                            d="M127 3.3c0-2.1 0-2.3-2-2.3H3.5C1.5 1 1 1.2 1 3.2v121.5c0 2 .3 2 2.2 2H125c1.6 0 2-.4 2-2-.1-20.2 0-40.5 0-60.7V3.3zM58.7 94L49 72.2 38.8 94H27.6l14.5-29.3-13.5-31 11.5.1 8.5 20.3L59 33.7h10.8L55.2 63.1 69.7 94h-11zm43.6-59.2v56.6c0 1.5-.2 2.4-1.7 2.5-7 .9-14 1.9-20.9-.1-7.5-2.1-11.8-8-12.1-16.1-.4-10 3.4-16.9 10.8-20.1 4.6-2 9.3-2.1 14.6-1.6V33.8h9.3v1zM82.8 86.2c3.3.9 6.6.6 10 0v-20c0-.3-.4-.9-.7-1-3.7-.6-7.5-.6-11 1.3-3.6 2-5.5 6.2-5.1 11.1.3 4.5 2.7 7.4 6.8 8.6z">
                        </path>
                    </svg>XD</li>
                <li class="all design">
                    <svg viewBox="0 0 128 128">
                        <title>Illustrator Icon</title>
                        <path fill-rule="evenodd" clip-rule="evenodd" fill="#FAA625"
                            d="M47.955 69h15.371c-2.646-9-5.252-17.32-7.816-25.776C53.022 51.71 50.498 60 47.955 69zm76.157-68H2.873C.687 1 1 1.476 1 3.585v121.394C1 127.086.687 127 2.719 127h121.547c2.031 0 2.734.086 2.734-2.022V3.739C127 1.476 126.298 1 124.112 1zM77.298 96c-1.637 0-3.28-.133-4.909-.016-1.175.088-1.568-.406-1.881-1.426-1.514-4.931-3.123-9.86-4.638-14.79-.305-.992-.741-1.354-1.816-1.341-5.523.064-11.049.058-16.573-.007-1.163-.014-1.698.296-2.03 1.45-1.406 4.904-2.944 9.768-4.365 14.667-.308 1.062-.776 1.433-1.904 1.404-3.318-.083-6.641-.032-10.274-.032.959-3.045 1.829-5.861 2.729-8.665 5.514-17.2 11.047-34.4 16.521-51.611.382-1.198.913-1.567 2.143-1.54 3.886.086 7.775.022 11.663 0 .727-.005 1.223.038 1.489.864 6.505 20.116 13.033 40.356 19.555 60.47.028.091.01.573.025.573h-5.735zM98 96H86V51h12v45zm-6.35-51.071c-3.665-.005-6.289-2.528-6.314-6.07-.024-3.532 2.707-6.159 6.406-6.163 3.728-.004 6.355 2.537 6.384 6.171.026 3.545-2.667 6.068-6.476 6.062z">
                        </path>
                    </svg>
                    Illustrator
                </li>
                <li class="all design"><svg viewBox="0 0 128 128">
                        <title>Figma Icon</title>
                        <path fill="#0acf83"
                            d="M45.5 129c11.9 0 21.5-9.6 21.5-21.5V86H45.5C33.6 86 24 95.6 24 107.5S33.6 129 45.5 129zm0 0">
                        </path>
                        <path fill="#a259ff"
                            d="M24 64.5C24 52.6 33.6 43 45.5 43H67v43H45.5C33.6 86 24 76.4 24 64.5zm0 0"></path>
                        <path fill="#f24e1e" d="M24 21.5C24 9.6 33.6 0 45.5 0H67v43H45.5C33.6 43 24 33.4 24 21.5zm0 0">
                        </path>
                        <path fill="#ff7262" d="M67 0h21.5C100.4 0 110 9.6 110 21.5S100.4 43 88.5 43H67zm0 0"></path>
                        <path fill="#1abcfe"
                            d="M110 64.5c0 11.9-9.6 21.5-21.5 21.5S67 76.4 67 64.5 76.6 43 88.5 43 110 52.6 110 64.5zm0 0">
                        </path>
                    </svg>Figma</li>
                <li class="all design"><svg viewBox="0 0 128 128">
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
                <li class="all design">
                <?php echo '<?xml version="1.0" encoding="utf-8"?>'; ?>
                    <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512"
                        style="enable-background:new 0 0 512 512;" xml:space="preserve">
                        <title>InVision Icon</title>
                        <style type="text/css">
                            .st0000 {
                                fill: #FF3366;
                            }

                            .st1111 {
                                fill: #FFFFFF;
                            }
                        </style>
                        <g id="XMLID_1_">
                            <path id="XMLID_3_" class="st0000"
                                d="M465.57,0H46.43C20.76,0,0,20.76,0,46.43v419.14C0,491.24,20.76,512,46.43,512h419.14
                                                                            c25.67,0,46.43-20.76,46.43-46.43V46.43C512,20.76,491.24,0,465.57,0z" />
                            <path id="XMLID_4_" class="st1111"
                                d="M171.13,161.03c16.97,0,31.28-13.33,31.28-30.86s-14.31-30.86-31.28-30.86
                                                                            s-31.28,13.33-31.28,30.86S154.16,161.03,171.13,161.03z" />
                            <path id="XMLID_5_" class="st1111" d="M106.33,326.14c-1.82,7.86-2.81,16.27-2.81,23.15c0,27.07,14.73,45.17,46.01,45.17
                                                                            c25.95,0,46.99-15.43,62.14-40.26l-9.26,37.17h51.48l29.46-118.11c7.29-29.88,21.6-45.45,43.2-45.45
                                                                            c16.97,0,27.63,10.52,27.63,28.05c0,5.05-0.42,10.52-2.24,16.55L336.8,326.7c-2.24,7.86-3.23,15.71-3.23,23
                                                                            c0,25.81,15.15,44.61,46.85,44.61c27.07,0,48.82-17.53,60.74-59.34l-20.2-7.86c-10.1,28.05-18.8,33.1-25.81,33.1
                                                                            c-6.87,0-10.52-4.63-10.52-13.75c0-4.21,0.98-8.7,2.24-14.31l14.73-52.88c3.65-12.48,5.05-23.43,5.05-33.53
                                                                            c0-39.56-23.99-60.18-52.88-60.18c-27.07,0-54.71,24.41-68.59,50.22l10.1-46.29h-78.69l-11.08,40.68h36.75l-22.72,90.76
                                                                            c-17.81,39.56-50.5,40.26-54.57,39.28c-6.73-1.54-11.08-4.07-11.08-12.76c0-5.05,0.98-12.34,3.23-21.04l34.51-136.91h-87.39
                                                                            l-11.08,40.68h36.61L106.33,326.14z" />
                        </g>
                    </svg>InVision
                </li>

            </ul>

        </section>

        <div class="skills-bottom-svg">

            <a href="#bottom-content"><svg clip-rule="evenodd" class="the-down-button" fill-rule="evenodd"
                    stroke-linejoin="round" stroke-miterlimit="2" viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg">
                    <title>Down Button</title>
                    <path
                        d="m16.843 10.211c.108-.141.157-.3.157-.456 0-.389-.306-.755-.749-.755h-8.501c-.445 0-.75.367-.75.755 0 .157.05.316.159.457 1.203 1.554 3.252 4.199 4.258 5.498.142.184.36.29.592.29.23 0 .449-.107.591-.291 1.002-1.299 3.044-3.945 4.243-5.498z" />
                </svg></a>
        </div>

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