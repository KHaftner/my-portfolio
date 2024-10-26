const currentYear = document.getElementById("current-year");

// Display current year in the footer.
currentYear.innerHTML = new Date().getFullYear();

/* */ /* */

const navBar = document.querySelector(".site-header");

// Make the top navigation bar transparent at the top of the page, and solid when scrolled down.
window.addEventListener("scroll", () => {
    if (window.scrollY > 96) {
        navBar.classList.add("scrolled");
    } else {
        navBar.classList.remove("scrolled");
    }
});

/* */ /* */

/*

const allBtn = document.getElementById("allBtn");
const designBtn = document.getElementById("designBtn");
const developmentBtn = document.getElementById("developmentBtn");
const listItems = document.querySelectorAll("#front-end-skills li");

// Filter Skills List by All, Development, and Design.
document.addEventListener("DOMContentLoaded", function () {
    // Function to show all list items.
    function showAllItems() {
        for (let i = 0; i < listItems.length; i++) {
            listItems[i].style.display = "flex";
        }

        // Update the button classes.
        allBtn.classList.add("active");
        designBtn.classList.remove("active");
        developmentBtn.classList.remove("active");
    }

    // Function to show only the design items.
    function showDesignItems() {
        for (let i = 0; i < listItems.length; i++) {
            if (listItems[i].classList.contains("design")) {
                listItems[i].style.display = "flex";
            } else {
                listItems[i].style.display = "none";
            }
        }

        // Update the button classes.
        allBtn.classList.remove("active");
        designBtn.classList.add("active");
        developmentBtn.classList.remove("active");
    }

    // Function to show only the development items.
    function showDevelopmentItems() {
        for (let i = 0; i < listItems.length; i++) {
            if (listItems[i].classList.contains("development")) {
                listItems[i].style.display = "flex";
            } else {
                listItems[i].style.display = "none";
            }
        }

        // Update the button classes.
        allBtn.classList.remove("active");
        designBtn.classList.remove("active");
        developmentBtn.classList.add("active");
    }

    // Add click event listeners to the buttons.
    allBtn.addEventListener("click", showAllItems);
    designBtn.addEventListener("click", showDesignItems);
    developmentBtn.addEventListener("click", showDevelopmentItems);

    // Initially show all items (default)...
    showAllItems();
});

*/

// Initialize AOS

document.addEventListener("DOMContentLoaded", function () {
    AOS.init();
});

/* Add this later, no time right now...

// https://www.w3schools.com/howto/tryit.asp?filename=tryhow_js_tab_img_gallery

*/

const swiper = new Swiper(".swiper", {
    slidesPerView: 1,
    slidesPerGroup: 1,
    slidesPerGroupSkip: 1,
    rewind: true,
    loop: false,
    speed: 800,
    spaceBetween: 0,

    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
        renderBullet: function (index, className) {
            return '<span class="' + className + '">' + (index + 1) + "</span>";
        },
    },
    keyboard: {
        enabled: true,
    },
    breakpoints: {
        600: {
            slidesPerView: 2,
            slidesPerGroup: 1,
        },
        800: {
            slidesPerView: 2.5,
            slidesPerGroup: 1,
        },

        1000: {
            slidesPerView: 3,
            slidesPerGroup: 1,
        },

        1200: {
            slidesPerView: 3.5,
            slidesPerGroup: 1,
        },
    },
    grabCursor: true,
    slidesPerView: "auto",
});
