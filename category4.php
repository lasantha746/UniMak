<?php
$products = [
    [
        "id" => "17",
        "title" => "211Ø Plain Round Can with Easy Open Lid",
        "description" => "50g & 100g Seeds Can",
        "image" => "./images/category/cat17.jpg"
    ],
    [
        "id" => "18",
        "title" => "404Ø Round Can with Lever Lid",
        "description" => "500ml Plain Can / 01 Ltr Plain Can",
        "image" => "./images/category/cat18.jpg"
    ],
    [
        "id" => "19",
        "title" => "211Ø Printed Round Can with Easy Open Lid",
        "description" => "25g & 50g Seeds Can",
        "image" => "./images/category/cat19.jpg"
    ],
    [
        "id" => "20",
        "title" => "404Ø Printed Round Can with Double Side End",
        "description" => "250g & 400g Seeds Can",
        "image" => "./images/category/cat20.jpg"
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
                <img class="hero-image" src="./images/category4.jpg" alt="Hero Image">
            </section>

            <!-- Products Section -->
            <section class="container" id="products" style="padding-bottom: 100px;">
                <div class="section-title2">
                    <div class="section-title">
                        <h2 class="titleFont">Seeds Can</h2>
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