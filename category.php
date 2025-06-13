<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Unimak</title>
    <link rel="icon" href="./images/favicon.ico">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link rel="stylesheet" href="src/css/style.css">
    <style>
        .wrapper2 {
            overflow: hidden;
        }

        .content2 {
            will-change: transform;
        }
    </style>
</head>

<body>

    <!-- Page Loader -->
    <?php include('componnet/loading.php'); ?>

    
            <!-- Navigation -->
            <?php include('componnet/navbar.php'); ?>

    <div class="wrapper2" id="smooth-wrapper">
        <div class="content2" id="smooth-content">


            <!-- Hero Section -->
            <section class="hero-section" id="home">
                <img class="hero-image" src="./images/category.jpg" alt="Hero Image">
            </section>

            <!-- Products Section -->
            <section class="container" id="products">
                <div class="section-title2">
                    <div class="section-title">
                        <h2>Food Cans</h2>
                        <div class="animated-line">
                            <div class="line-fill"></div>
                        </div>
                    </div>
                </div>

                <div class="product-grid">
                    <div class="product-card wow animate__animated animate__fadeInUp" data-wow-delay="0.2s" data-product="1">
                        <img class="product-image" src="./images/category/cat01.jpg" alt="card">
                        <div class="product-info">
                            <h3 class="product-title">309 X 309 CAN WITH OR WITHOUT TAGGER</h3>
                            <div class="button-group">
                                <button class="btn-custom btn-see-more" onclick="openModal(1)"><span>See More</span></button>
                                <button class="btn-custom btn-inquire">
                                    <div class="roundicon">
                                        <i class="fa-solid fa-arrow-up-long"></i>
                                    </div>
                                    <span>Inquire Now</span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="product-card wow animate__animated animate__fadeInUp" data-wow-delay="0.3s" data-product="2">
                        <img class="product-image" src="./images/category/cat02.jpg" alt="card">
                        <div class="product-info">
                            <h3 class="product-title">309 X 309 CAN WITH OR WITHOUT TAGGER</h3>
                            <div class="button-group">
                                <button class="btn-custom btn-see-more" onclick="openModal(1)"><span>See More</span></button>
                                <button class="btn-custom btn-inquire">
                                    <div class="roundicon">
                                        <i class="fa-solid fa-arrow-up-long"></i>
                                    </div>
                                    <span>Inquire Now</span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="product-card wow animate__animated animate__fadeInUp" data-wow-delay="0.4s" data-product="3">
                        <img class="product-image" src="./images/category/cat03.jpg" alt="card">
                        <div class="product-info">
                            <h3 class="product-title">309 X 309 CAN WITH OR WITHOUT TAGGER</h3>
                            <div class="button-group">
                                <button class="btn-custom btn-see-more" onclick="openModal(1)"><span>See More</span></button>
                                <button class="btn-custom btn-inquire">
                                    <div class="roundicon">
                                        <i class="fa-solid fa-arrow-up-long"></i>
                                    </div>
                                    <span>Inquire Now</span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="product-card wow animate__animated animate__fadeInUp" data-wow-delay="0.6s" data-product="4">
                        <img class="product-image" src="./images/category/cat04.jpg" alt="card">
                        <div class="product-info">
                            <h3 class="product-title">309 X 309 CAN WITH OR WITHOUT TAGGER</h3>
                            <div class="button-group">
                                <button class="btn-custom btn-see-more" onclick="openModal(1)"><span>See More</span></button>
                                <button class="btn-custom btn-inquire">
                                    <div class="roundicon">
                                        <i class="fa-solid fa-arrow-up-long"></i>
                                    </div>
                                    <span>Inquire Now</span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="product-card wow animate__animated animate__fadeInUp" data-wow-delay="0.7s" data-product="5">
                        <img class="product-image" src="./images/category/cat05.jpg" alt="card">
                        <div class="product-info">
                            <h3 class="product-title">309 X 309 CAN WITH OR WITHOUT TAGGER</h3>
                            <div class="button-group">
                                <button class="btn-custom btn-see-more" onclick="openModal(1)"><span>See More</span></button>
                                <button class="btn-custom btn-inquire">
                                    <div class="roundicon">
                                        <i class="fa-solid fa-arrow-up-long"></i>
                                    </div>
                                    <span>Inquire Now</span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="product-card wow animate__animated animate__fadeInUp" data-wow-delay="0.8s" data-product="6">
                        <img class="product-image" src="./images/category/cat06.jpg" alt="card">
                        <div class="product-info">
                            <h3 class="product-title">309 X 309 CAN WITH OR WITHOUT TAGGER</h3>
                            <div class="button-group">
                                <button class="btn-custom btn-see-more" onclick="openModal(1)"><span>See More</span></button>
                                <button class="btn-custom btn-inquire">
                                    <div class="roundicon">
                                        <i class="fa-solid fa-arrow-up-long"></i>
                                    </div>
                                    <span>Inquire Now</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Modal -->
            <div class="modal-overlay" id="modalOverlay">
                <div class="modal-content">
                    <button class="modal-close" onclick="closeModal()">&times;</button>
                    <div class="modal-content2">
                        <div class="modal-image" id="modalImage">
                            <img class="modal-image" src="./images/category/cat01.jpg" alt="Modal Image">
                        </div>
                        <h3 id="modalTitle">309 X 309 CAN WITH OR WITHOUT TAGGER</h3>
                        <p id="modalDescription">
                            Our premium food cans are manufactured with state-of-the-art technology ensuring the highest quality and durability. Perfect for food preservation and packaging, these cans are available with or without tagger options to meet your specific requirements.
                        </p>
                        <div class="mt-4">
                            <h5>Specifications:</h5>
                            <ul>
                                <li>Size: 309 x 309</li>
                                <li>Material: High-grade metal</li>
                                <li>Available with or without tagger</li>
                                <li>Food-safe coating</li>
                                <li>Customizable design options</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Footer -->
            <?php include('componnet/footer.php'); ?>

        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
    <script src="src/js/script.js"></script>
    <!-- GSAP and ScrollSmoother scripts -->
    <script src="https://cdn.jsdelivr.net/npm/gsap@3.13.0/dist/gsap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/gsap@3.13.0/dist/ScrollTrigger.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/gsap@3.13.0/dist/ScrollSmoother.min.js"></script>

    <script>
        gsap.registerPlugin(ScrollTrigger, ScrollSmoother);

        ScrollSmoother.create({
            wrapper: "#smooth-wrapper",
            content: "#smooth-content",
            smooth: 3, // how smooth (1 is default, higher is slower & smoother)
            effects: true // enable data-speed and data-lag animations
        });
    </script>
</body>

</html>