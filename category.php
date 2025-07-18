<?php
$products = [
    [
        "id" => "14",
        "title" => "211Ø Printed Round Can with Flush Lid",
        "description" => "211Ø Printed Round Can with Flush Lid",
        "image" => "./images/category/cat14.jpg"
    ],
    [
        "id" => "N06",
        "title" => "307Ø Round Can with Wire Shackle & Plastic Lid",
        "description" => "307Ø Round Can with Wire Shackle & Plastic Lid",
        "image" => "./images/category/ncat06.jpg"
    ],
    [
        "id" => "03",
        "title" => "406Ø Round Can with Wire Shackle & Plastic Lid",
        "description" => "406Ø Round Can with Wire Shackle & Plastic Lid",
        "image" => "./images/category/cat03.jpg"
    ],
    [
        "id" => "04",
        "title" => "509Ø Round Can with Lever Lid & Tagger",
        "description" => "509Ø Round Can with Lever Lid & Tagger",
        "image" => "./images/category/cat04.jpg"
    ],

];
$products2 = [
    [
        "id" => "01",
        "title" => "301x301 Plain Slip on Lid Can",
        "description" => "301x301 Plain Slip on Lid Can",
        "image" => "./images/category/cat01.jpg"
    ],
    [
        "id" => "02",
        "title" => "309x309 Printed Can with Square Lever Lid & Tagger",
        "description" => "309x309 Printed Can with Square Lever Lid & Tagger",
        "image" => "./images/category/cat02.jpg"
    ],
    [
        "id" => "05",
        "title" => "410x410 Plain & Printed can with Square Lever Lid & Tagger",
        "description" => "410x410 Plain & Printed can with Square Lever Lid & Tagger",
        "image" => "./images/category/cat05.jpg"
    ],
    [
        "id" => "06",
        "title" => "410x410 Plain & Printed Square can with Round Lever Lid & Tagger",
        "description" => "410x410 Plain & Printed Square can with Round Lever Lid & Tagger",
        "image" => "./images/category/cat06.jpg"
    ],
    [
        "id" => "N07",
        "title" => "410x410 Printed Square can with Slip On Lid",
        "description" => "410x410 Printed Square can with Slip On Lid",
        "image" => "./images/category/ncat07.jpg"
    ],
    [
        "id" => "N08",
        "title" => "904x904 Square Can with Lever Lid",
        "description" => "904x904 Square Can with Lever Lid",
        "image" => "./images/category/ncat08.jpg"
    ],
    [
        "id" => "N09",
        "title" => "706x706 Square Can with Lever Lid",
        "description" => "706x706 Square Can with Lever Lid",
        "image" => "./images/category/ncat09.jpg"
    ],
];
?>

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
    <link href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Squada+One&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="src/css/style.css">
</head>

<body>

    <!-- Navigation -->
    <?php include('componnet/navbar.php'); ?>

    <div class="wrapper2" id="smooth-wrapper">
        <div class="content2" id="smooth-content">

            <!-- Hero Section -->
            <section class="hero-section" id="home">
                <img class="hero-image" src="./images/category.jpg" alt="Hero Image">
            </section>


            <!-- Products Section -->
            <section class="container" id="products" style="padding-bottom: 50px;">
                <div class="section-title2">
                    <div class="section-title">
                        <h2 class="titleFont">Square Cans</h2>
                        <div class="animated-line">
                            <div class="line-fill"></div>
                        </div>
                    </div>
                </div>

                <div class="product-grid">
                    <?php foreach ($products2 as $product): ?>
                        <div data-aos="fade-up" data-aos-delay="100" data-aos-duration="1000">
                            <div class="product-card" data-product="1">
                                <img class="product-image" src="<?php echo $product['image']; ?>" alt="card">
                                <div class="product-info">
                                    <h3 class="product-title"><?php echo $product['title']; ?></h3>
                                    <div class="button-group">
                                        <button class="btn-custom btn-see-more inquire_see" onclick="openModal('<?php echo $product['id']; ?>')"><span>See More</span></button>
                                        <button onclick="window.location.href = 'contact.php?title=<?php echo urlencode($product['title']); ?>&img=<?php echo urlencode($product['image']); ?>';" class="btn-custom btn-inquire">
                                            <div class="roundicon">
                                                <i class="fa-solid fa-arrow-up-long"></i>
                                            </div>
                                            <span>Inquire Now</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>

                </div>
            </section>

            <!-- Products Section -->
            <section class="container" id="products" style="padding-bottom: 100px;">
                <div class="section-title2">
                    <div class="section-title">
                        <h2 class="titleFont">Round Cans</h2>
                        <div class="animated-line">
                            <div class="line-fill"></div>
                        </div>
                    </div>
                </div>

                <div class="product-grid">
                    <?php foreach ($products as $product): ?>
                        <div data-aos="fade-up" data-aos-delay="100" data-aos-duration="1000">
                            <div class="product-card" data-product="1">
                                <img class="product-image" src="<?php echo $product['image']; ?>" alt="card">
                                <div class="product-info">
                                    <h3 class="product-title"><?php echo $product['title']; ?></h3>
                                    <div class="button-group">
                                        <button class="btn-custom btn-see-more inquire_see" onclick="openModal('<?php echo $product['id']; ?>')"><span>See More</span></button>
                                        <button onclick="window.location.href = 'contact.php?title=<?php echo urlencode($product['title']); ?>&img=<?php echo urlencode($product['image']); ?>';" class="btn-custom btn-inquire">
                                            <div class="roundicon">
                                                <i class="fa-solid fa-arrow-up-long"></i>
                                            </div>
                                            <span>Inquire Now</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                    <div></div>
                </div>

            </section>

            <!-- Footer -->
            <?php include('componnet/footer.php'); ?>

        </div>
    </div>

    <?php foreach ($products as $product): ?>
        <!-- Modal -->
        <div class="modal-overlay" id="modalOverlay_<?php echo $product['id']; ?>">
            <div class="modal-content">
                <button class="modal-close" onclick="closeModal('<?php echo $product['id']; ?>')">&times;</button>
                <div class="modal-content2">
                    <div class="modal-image" id="modalImage">
                        <img class="modal-image" src="<?php echo $product['image']; ?>" alt="Modal Image">
                    </div>
                    <h3 id="modalTitle"><?php echo $product['title']; ?></h3>
                    <p id="modalDescription">
                        <?php echo $product['description']; ?>
                    </p>
                    <!-- <div class="mt-4">
                        <h5>Specifications:</h5>
                        <ul>
                            <li>Size: 309 x 309</li>
                            <li>Material: High-grade metal</li>
                            <li>Available with or without tagger</li>
                            <li>Food-safe coating</li>
                            <li>Customizable design options</li>
                        </ul>
                    </div> -->
                </div>
            </div>
        </div>
    <?php endforeach; ?>
    <?php foreach ($products2 as $product): ?>
        <!-- Modal -->
        <div class="modal-overlay" id="modalOverlay_<?php echo $product['id']; ?>">
            <div class="modal-content">
                <button class="modal-close" onclick="closeModal('<?php echo $product['id']; ?>')">&times;</button>
                <div class="modal-content2">
                    <div class="modal-image" id="modalImage">
                        <img class="modal-image" src="<?php echo $product['image']; ?>" alt="Modal Image">
                    </div>
                    <h3 id="modalTitle"><?php echo $product['title']; ?></h3>
                    <p id="modalDescription">
                        <?php echo $product['description']; ?>
                    </p>
                    <!-- <div class="mt-4">
                        <h5>Specifications:</h5>
                        <ul>
                            <li>Size: 309 x 309</li>
                            <li>Material: High-grade metal</li>
                            <li>Available with or without tagger</li>
                            <li>Food-safe coating</li>
                            <li>Customizable design options</li>
                        </ul>
                    </div> -->
                </div>
            </div>
        </div>
    <?php endforeach; ?>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
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
    <script>
        AOS.init();
    </script>
    <script>
        function openModal(id) {
            const modal = document.getElementById("modalOverlay_" + id);
            modal.classList.add("active");
            document.body.style.overflow = "hidden";
        }

        function closeModal(id) {
            const modal = document.getElementById("modalOverlay_" + id);
            modal.classList.remove("active");
            document.body.style.overflow = "auto";
        }

        // Optional: Close modal when clicking outside the content
        window.addEventListener('click', function(event) {
            document.querySelectorAll(".modal-overlay").forEach(modal => {
                if (event.target === modal) {
                    modal.classList.remove("active");
                    document.body.style.overflow = "auto";
                }
            });
        });
    </script>

</body>

</html>