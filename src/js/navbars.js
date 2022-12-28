const topnav = `
        <div class="nav">
        <a href="/index.php"><img src="img/logo.png " class="logo" /></a>
            <ul>
                <li><a href="/">Home</a></li>
                <li><a href="/#contact">Tech Support</a></li>
                <li><a href="about us.html">About Us</a></li>
                <li><a id="serviceDropTrig" href="#">Services</a></li>
                <li><a id="carsDropTrig" href="#">Cars</a></li>
                <li><a href="/university.html">About University</a></li>
            </ul>
            <!-- Dropdown -->
            <ul class="hideMenu" id="serviceDropdown">
                <li><a href="/help info.html">Help</a></li>
                
            </ul>
            <ul class="hideMenu" id="carsDropdown">
                <li><a href="/cars.html">Sport</a></li>
                <li><a href="/Classic.html">Classic</a></li>
                <li><a href="/Luxury.html">Luxury</a></li>
            </ul>
            <!-- Added Menu Button -->
            <i id="menuButton" class="fa-solid fa-bars"></i>
        </div>
`;
const mobilenav = `
        <div class="modal hideMenu" id="mobileMenu">
            <div class="modal-content">
                <div class="modal-header">
                    <h2>Menu</h2>
                    <i id="closeMenu" class="fa-solid fa-times"></i>
                </div>
                <div class="modal-body">
                    <ul>
                        <li><a href="/">Home</a></li>
                        <li><a href="/#Tech Support">Contact</a></li>
                        <li><a href="about us.html">About Us</a></li>
                        <li>
                            <a href="#" id="servicesMobileDroptrig">Services</a>
                        </li>
                        <li
                            id="servicesMobileDropdown"
                            class="mobileMenuDropdown hideMenu"
                        >
                            <ul id="serviceDropdown">
                                <li><a href="/help info.html">Help</a></li>
                                
                            </ul>
                        </li>
                        <li><a href="#" id="carsMobileDroptrig">Cars</a></li>
                        <li
                            id="carsMobileDropdown"
                            class="mobileMenuDropdown hideMenu"
                        >
                            <ul id="carsDropdown">
                                <li><a href="/cars.html">Sport</a></li>
                                <li><a href="/Classic.html">Classic</a></li>
                                <li><a href="/Luxury.html">Luxury</a></li>
                            </ul>
                        </li>
                        <li><a href="/university.html">About University</a></li>
                    </ul>
                </div>
            </div>
        </div>
`;

// add topnav html to #topnav div and mobilenav html to #mobilenav div
document.getElementById("topNav").innerHTML = topnav;
document.getElementById("mobileNav").innerHTML = mobilenav;

// making everyting functional
const menuButton = document.getElementById("menuButton");
const mobileMenu = document.getElementById("mobileMenu");
const closeMenu = document.getElementById("closeMenu");

menuButton.addEventListener("click", () => {
    mobileMenu.classList.add("showMenu");
    mobileMenu.classList.remove("hideMenu");
});

closeMenu.addEventListener("click", () => {
    mobileMenu.classList.remove("showMenu");
    mobileMenu.classList.add("hideMenu");
});

const addDropTrig = (triggerID, contentID) => {
    const menuButton = document.getElementById(triggerID);
    const contentSection = document.getElementById(contentID);

    menuButton.addEventListener("click", () => {
        if (contentSection.classList.contains("hideMenu")) {
            contentSection.classList.remove("hideMenu");
            contentSection.classList.add("showMenu");
        } else {
            contentSection.classList.remove("showMenu");
            contentSection.classList.add("hideMenu");
        }
    });

    window.addEventListener("click", (e) => {
        if (
            e.target != contentSection &&
            e.target != menuButton &&
            contentSection.classList.contains("showMenu")
        ) {
            contentSection.classList.remove("showMenu");
            contentSection.classList.add("hideMenu");
        }
    });
};

addDropTrig("serviceDropTrig", "serviceDropdown");
addDropTrig("carsDropTrig", "carsDropdown");
addDropTrig("servicesMobileDroptrig", "servicesMobileDropdown");
addDropTrig("carsMobileDroptrig", "carsMobileDropdown");
