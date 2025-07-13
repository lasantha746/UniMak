    <nav class="navbar px-md-5">
        <div class="container d-flex justify-content-between align-items-center">
            <a class="navbar-brand" href="index.php">
                <img src="./images/logo.png" alt="Unimak Logo">
            </a>

            <div class="navdeit">
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="about.php">About Us</a></li>
                    <li class="nav-item dropdown">
                        <!-- <a class="nav-item dropdown-toggle" href="" role="button" data-bs-toggle="dropdown" aria-expanded="false">Our Products</a> -->
                        <a href="#">Our Products <span class="arrow">&#9662;</span></a>
                        <ul class="dropdown-menu topsubmenu">
                            <li><a class="me-4" onclick="window.location.href = 'category.php';">Tea Cans</a></li>
                            <li><a class="me-4" onclick="window.location.href = 'category2.php';">General Cans</a></li>
                            <!-- <li><a onclick="window.location.href = 'category3.php';">Innovational Can</a></li> -->
                            <li><a class="me-4" onclick="window.location.href = 'category4.php';">Seeds Can</a></li>
                            <li><a class="me-4" onclick="window.location.href = 'category5.php';">Metal Closures (Crown Cork)</a></li>
                        </ul>
                    </li>
                    <li><a href="category3.php">Cans for Spices</a></li>
                    <li><a href="contact.php">Contact Us</a></li>
                </ul>
            </div>

            <button class="menu-toggle" id="menuToggle">
                <i class="fas fa-bars"></i>
            </button>
        </div>
    </nav>
    <!-- Side Navigation -->
    <div class="side-nav-overlay" id="sideNavOverlay"></div>
    <div class="side-nav" id="sideNav">
        <button class="side-nav-close" id="sideNavClose">
            <i class="fas fa-times"></i>
        </button>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="about.php">About Us</a></li>
            <li class="nav-item dropdown">
                <a class="nav-item dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Our Products</a>
                <ul class="sidesubmenu dropdown-menu">
                    <li><a href="category.php">Tea Cans</a></li>
                    <li><a href="category2.php">General Cans</a></li>
                    <!-- <li><a href="category3.php">Innovational Can</a></li> -->
                    <li><a href="category4.php">Seeds Can</a></li>
                    <li><a href="category5.php">Metal Closures(Crown Cork)</a></li>
                </ul>
            </li>
            <li><a href="category3.php">Cans for Spices</a></li>
            <li><a href="contact.php">Contact Us</a></li>
        </ul>
    </div>



    <!-- Scroll to Top Button -->
    <button onclick="scrollToTop()" id="scrollBtn" title="Go to top"> <i class="fas fa-arrow-up"></i></button>



    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const currentPath = window.location.pathname.split("/").pop(); // get the current page filename
            const navLinks = document.querySelectorAll(".navdeit ul li a");

            navLinks.forEach(link => {
                const linkPath = link.getAttribute("href");

                if (linkPath === currentPath) {
                    // Remove active from all
                    document.querySelectorAll(".navdeit ul li").forEach(li => li.classList.remove("active"));
                    // Add active to current
                    link.parentElement.classList.add("active");
                }
            });
        });
    </script>

    <script>
        // document.addEventListener("DOMContentLoaded", function() {
        //     const dropdown = document.querySelector(".dropdown");

        //     dropdown.addEventListener("click", function(e) {
        //         e.preventDefault(); // Prevent link behavior
        //         this.classList.toggle("open");
        //     });

        //     // Optional: Close dropdown when clicking outside
        //     document.addEventListener("click", function(e) {
        //         if (!dropdown.contains(e.target)) {
        //             dropdown.classList.remove("open");
        //         }
        //     });
        // });
        document.addEventListener("DOMContentLoaded", function() {
            const dropdown = document.querySelector(".dropdown");

            dropdown.addEventListener("mouseenter", function() {
                this.classList.add("open");
            });

            dropdown.addEventListener("mouseleave", function() {
                this.classList.remove("open");
            });
        });
    </script>


    <script>
        // Show button when scroll down
        window.onscroll = function() {
            const scrollBtn = document.getElementById("scrollBtn");
            const fullHeight = document.documentElement.scrollHeight - document.documentElement.clientHeight;
            const currentScroll = document.documentElement.scrollTop || document.body.scrollTop;

            if (currentScroll > fullHeight / 2) {
                scrollBtn.style.display = "block";
            } else {
                scrollBtn.style.display = "none";
            }
        };


        // Smooth scroll to top
        function scrollToTop() {
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        }
    </script>