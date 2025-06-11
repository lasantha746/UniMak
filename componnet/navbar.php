    <nav class="navbar px-md-5">
        <div class="container d-flex justify-content-between align-items-center">
            <a class="navbar-brand" href="#">
                <img src="./images/logo.png" alt="Unimak Logo">
            </a>

            <div class="navdeit">
                <ul>
                    <li class="active"><a href="#home">Home</a></li>
                    <li><a href="#about">About</a></li>
                    <li class="nav-item dropdown">
                        <!-- <a class="nav-item dropdown-toggle" href="" role="button" data-bs-toggle="dropdown" aria-expanded="false">Our Products</a> -->
                        <a href="#">Our Products <span class="arrow">&#9662;</span></a>
                        <ul class="dropdown-menu topsubmenu">
                            <li><a href="#product1">Electronics</a></li>
                            <li><a href="#product2">Clothing</a></li>
                            <li><a href="#product3">Home & Garden</a></li>
                            <li><a href="#product5">Books & Media</a></li>
                        </ul>
                    </li>
                    <li><a href="#innovation">Innovation Collection</a></li>
                    <li><a href="#why-us">Why Us</a></li>
                    <li><a href="#contact">Contact</a></li>
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
            <li><a href="#home">Home</a></li>
            <li><a href="#about">About</a></li>
            <li class="nav-item dropdown">
                <a class="nav-item dropdown-toggle" href="" role="button" data-bs-toggle="dropdown" aria-expanded="false">Our Products</a>
                <ul class="sidesubmenu dropdown-menu">
                    <li><a href="#product1">Electronics</a></li>
                    <li><a href="#product2">Clothing</a></li>
                    <li><a href="#product3">Home & Garden</a></li>
                    <li><a href="#product5">Books & Media</a></li>
                </ul>
            </li>
            <li><a href="#innovation">Innovation Collection</a></li>
            <li><a href="#why-us">Why Us</a></li>
            <li><a href="#contact">Contact</a></li>
        </ul>
    </div>


    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const dropdown = document.querySelector(".dropdown");

            dropdown.addEventListener("click", function(e) {
                e.preventDefault(); // Prevent link behavior
                this.classList.toggle("open");
            });

            // Optional: Close dropdown when clicking outside
            document.addEventListener("click", function(e) {
                if (!dropdown.contains(e.target)) {
                    dropdown.classList.remove("open");
                }
            });
        });
    </script>