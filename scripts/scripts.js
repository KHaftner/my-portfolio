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

/* Add this later, no time right now...

// https://www.w3schools.com/howto/tryit.asp?filename=tryhow_js_tab_img_gallery

*/
