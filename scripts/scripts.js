const currentYear = document.getElementById("current-year");

// Display current year in the footer.

currentYear.innerHTML = new Date().getFullYear();

// Make the nav bar opaque and a wee bit smaller when scrolling.

const navBar = document.querySelector(".site-header");

window.addEventListener("scroll", () => {
    if (window.scrollY > 96) {
        navBar.classList.add("scrolled");
    } else {
        navBar.classList.remove("scrolled");
    }
});

document.addEventListener("DOMContentLoaded", function () {
    // Get references to the buttons and the list
    const allBtn = document.getElementById("allBtn");
    const designBtn = document.getElementById("designBtn");
    const developmentBtn = document.getElementById("developmentBtn");
    const listItems = document.querySelectorAll("#front-end-skills li");

    // Function to show all list items
    function showAllItems() {
        for (let i = 0; i < listItems.length; i++) {
            listItems[i].style.display = "flex";
        }

        // Update button classes
        allBtn.classList.add("active");
        designBtn.classList.remove("active");
        developmentBtn.classList.remove("active");
    }

    // Function to show only design items
    function showDesignItems() {
        for (let i = 0; i < listItems.length; i++) {
            if (listItems[i].classList.contains("design")) {
                listItems[i].style.display = "flex";
            } else {
                listItems[i].style.display = "none";
            }
        }

        // Update button classes
        allBtn.classList.remove("active");
        designBtn.classList.add("active");
        developmentBtn.classList.remove("active");
    }

    // Function to show only development items
    function showDevelopmentItems() {
        for (let i = 0; i < listItems.length; i++) {
            if (listItems[i].classList.contains("development")) {
                listItems[i].style.display = "flex";
            } else {
                listItems[i].style.display = "none";
            }
        }

        // Update button classes
        allBtn.classList.remove("active");
        designBtn.classList.remove("active");
        developmentBtn.classList.add("active");
    }

    // Add click event listeners to the buttons
    allBtn.addEventListener("click", showAllItems);
    designBtn.addEventListener("click", showDesignItems);
    developmentBtn.addEventListener("click", showDevelopmentItems);

    // Initially show all items (default)
    showAllItems();
});
