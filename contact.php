<?php
$title = isset($_GET['title']) ? htmlspecialchars($_GET['title']) : null;
$img = isset($_GET['img']) ? htmlspecialchars($_GET['img']) : null;
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

    <div class="mailLoder" id="mailLoder">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>

    <!-- Navigation -->
    <?php include('componnet/navbar.php'); ?>

    <div class="wrapper2" id="smooth-wrapper">
        <div class="content2" id="smooth-content">

            <!-- Hero Section -->
            <!-- <section class="hero-section" id="home">
                <img class="hero-image" src="./images/category.jpg" alt="Hero Image">
            </section> -->


            <!-- Contact Header -->
            <section class="mt-5 pt-5 mb-0 mb-md-5">
                <div class="container">
                    <div class="section-title text-center">
                        <h2 class="mb-3 titleFont" data-aos="fade-down" data-aos-delay="100" data-aos-duration="1000">Contact Us</h2>
                        <div class="animated-line mb-4 mx-auto" data-aos="fade-down" data-aos-delay="200" data-aos-duration="1000">
                            <div class="line-fill"></div>
                        </div>
                        <p class="text-muted" data-aos="fade-up" data-aos-delay="300" data-aos-duration="1000">
                            We'd love to hear from you. Reach out using the form below or find us on the map.
                        </p>
                    </div>
                </div>
            </section>

            <!-- Map & Form Section -->
            <section class="" style="margin-bottom: 50px;">
                <div class="container">
                    <div class="row gy-4">
                        <!-- Google Map -->
                        <div class="col-12 col-md-6 order-2 order-md-1" data-aos="fade-right" data-aos-delay="400" data-aos-duration="1000">
                            <div class="rounded overflow-hidden shadow">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3959.2236601978043!2d79.89873779999999!3d7.100056400000001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae2f1d1dde61e91%3A0x11eba1af3cbb5999!2sUnimak%20Private%20Limited!5e0!3m2!1sen!2slk!4v1751207705660!5m2!1sen!2slk" width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div>
                        </div>

                        <!-- Contact Form -->
                        <div class="col-12 col-md-6 order-1 order-md-2 mb-3" data-aos="fade-left" data-aos-delay="400" data-aos-duration="1000">
                            <div class="ms-0 ms-md-2">
                                <div class="mb-3">
                                    <label for="name" class="form-label fw-bold">Full Name</label>
                                    <input type="text" class="form-control" id="name" placeholder="Your Name" required />
                                </div>
                                <div class="mb-3">
                                    <label for="email" class="form-label fw-bold">Email Address</label>
                                    <input type="email" class="form-control" id="email" placeholder="name@example.com" required />
                                </div>
                                <div class="mb-3">
                                    <label for="mobile" class="form-label fw-bold">Mobile</label>
                                    <input type="text" class="form-control" id="mobile" placeholder="07########" required />
                                </div>
                                <?php if ($title && $img): ?>

                                    <input type="hidden" id="product_title" value="<?php echo $title; ?>" />
                                    <input type="hidden" id="product_img" value="<?php echo $img; ?>" />

                                    <div class="container mb-3" data-aos="zoom-in" data-aos-delay="200">
                                        <div class="card shadow-sm border-0">
                                            <div class="row g-0">
                                                <div class="col-md-4">
                                                    <img src="<?php echo $img; ?>" alt="Product Image" class="img-fluid rounded-start" style="height: 100%; object-fit: cover;">
                                                </div>
                                                <div class="col-md-8 d-flex align-items-center">
                                                    <div class="card-body">
                                                        <h5 class="card-title mb-2"><?php echo $title; ?></h5>
                                                        <p class="text-muted mb-0">You are inquiring about this product.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php endif; ?>
                                <div class="mb-3">
                                    <label for="message" class="form-label fw-bold">Message</label>
                                    <textarea class="form-control" id="message" rows="5" placeholder="Your message..." required></textarea>
                                </div>
                                <!-- <button type="submit" class="btn btn-dark px-4">Send Message</button> -->
                                <button onclick="sendContactMail();" class="btn-custom btn-inquire">
                                    <div class="roundicon">
                                        <i class="fa-solid fa-arrow-up-long"></i>
                                    </div>
                                    <span class="span_cus">Send Message</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Footer -->
            <?php include('componnet/footer.php'); ?>

        </div>
    </div>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <script src="src/js/script.js"></script>
    <!-- GSAP and ScrollSmoother scripts -->
    <script src="https://cdn.jsdelivr.net/npm/gsap@3.13.0/dist/gsap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/gsap@3.13.0/dist/ScrollTrigger.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/gsap@3.13.0/dist/ScrollSmoother.min.js"></script>
    <!-- SweetAlert2 -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

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
</body>

</html>