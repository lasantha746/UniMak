<?php
$logos = [
    [
        "id" => "01",
        "name" => "Asianpaints",
        "image" => "./images/Logo/cl-14.jpg"
    ],
    [
        "id" => "02",
        "name" => "Elephant House",
        "image" => "./images/Logo/cl-15.jpg"
    ],
    [
        "id" => "03",
        "name" => "Nippon Paint",
        "image" => "./images/Logo/cl-16.jpg"
    ],
    [
        "id" => "04",
        "name" => "Lankem",
        "image" => "./images/Logo/cl-17.jpg"
    ],
    [
        "id" => "05",
        "name" => "Jones",
        "image" => "./images/Logo/cl-18.jpg"
    ],
    [
        "id" => "06",
        "name" => "CHB",
        "image" => "./images/Logo/cl-19.jpg"
    ],
    [
        "id" => "07",
        "name" => "Lipton",
        "image" => "./images/Logo/cl-20.jpg"
    ],
    [
        "id" => "08",
        "name" => "CocaCola",
        "image" => "./images/Logo/cl-21.jpg"
    ],
    [
        "id" => "09",
        "name" => "Milco",
        "image" => "./images/Logo/cl-22.jpg"
    ],
    [
        "id" => "10",
        "name" => "Van Rees",
        "image" => "./images/Logo/cl-23.jpg"
    ],
    [
        "id" => "11",
        "name" => "Finlays",
        "image" => "./images/Logo/cl-24.jpg"
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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@glidejs/glide/dist/css/glide.core.min.css">
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

    <!-- Page Loader -->
    <?php
    // include('componnet/loading.php');
    ?>


    <!-- Navigation -->
    <?php
    include('componnet/navbar.php');
    ?>

    <div class="wrapper2" id="smooth-wrapper">
        <div class="content2" id="smooth-content">

            <section class="why-choose-us pb-4" id="why" style="margin-top: 100px;">
                <div class="container ps-3 ps-md-5">
                    <div class="row">
                        <div class="col-12 col-md-6">
                            <div class="section-title">
                                <h2 class="mb-3 titleFont" data-aos="fade-right" data-aos-delay="100" data-aos-duration="1000">Why Choose Us</h2>
                                <div class="animated-line mb-3" data-aos="fade-right" data-aos-delay="300" data-aos-duration="1000">
                                    <div class="line-fill"></div>
                                </div>
                                <p class="parcontact" data-aos="fade-up" data-aos-delay="500" data-aos-duration="1000">
                                    <b>Unwavering Commitment to Quality</b><br>
                                    At the core of our operations is an uncompromising dedication to quality. We select only the
                                    highest-grade raw materials, and the superior output from our manufacturing facilities
                                    exemplifies our commitment to excellence.
                                    <br><br>
                                    <b>Lean Manufacturing for Competitive Advantage</b><br>
                                    By implementing lean manufacturing principles, we optimize efficiency and reduce costs,
                                    passing these savings onto our clients through highly competitive pricing.
                                    <br><br>
                                    <b>Modern Facilities and Skilled Workforce</b><br>
                                    Our facilities comprise three state-of-the-art factories, with a total area of 35,000 sq. ft.,
                                    equipped with advanced machinery. Supported by a team of 100+ trained
                                    professionals—led by industry experts—we are capable of delivering products of the
                                    highest quality with lead times as short as two weeks.
                                </p>

                                <button onclick="window.location.href = 'about.php';" class="btn-custom btn-inquire btn-inquire_see" data-aos="fade-up" data-aos-delay="700" data-aos-duration="1000">
                                    <div class="roundicon roundicon_see">
                                        <i class="fa-solid fa-arrow-up-long"></i>
                                    </div>
                                    <span>See More</span>
                                </button>

                            </div>
                        </div>
                        <div class="col-12 col-md-6 pt-3 pt-md-5 pb-md-5">
                            <img src="./images/whyus.jpg" alt="Bottle Cap" class="img-fluid rotate-img mt-md-5" data-aos="fade-left" data-aos-delay="500" data-aos-duration="1000" />
                            <div class="mt-3 certifications mt-4 d-flex gap-3 flex-wrap">
                                <img src="./images/fssc.png" alt="FSSC 22000" class="cert-img" data-aos="fade-up" data-aos-delay="800" data-aos-duration="1000" />
                                <img src="./images/iso.png" alt="ISO Certified" class="cert-img" data-aos="fade-up" data-aos-delay="900" data-aos-duration="1000" />
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="pb-4">
                <div class="container ps-3 ps-md-5">
                    <div class="row">
                        <div class="col-12 col-md-8 mb-lg-0">
                            <div class="section-title" style="margin-bottom: 5px;">
                                <h2 class="mb-3 titleFont" data-aos="fade-right" data-aos-delay="100" data-aos-duration="1000">Our Clients</h2>
                                <div class="animated-line" data-aos="fade-right" data-aos-delay="300" data-aos-duration="1000">
                                    <div class="line-fill"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="glide">
                                <div class="glide__track" data-glide-el="track">
                                    <ul class="glide__slides">
                                        <?php foreach ($logos as $logo): ?>
                                            <li class="glide__slide"><img src="<?php echo $logo['image']; ?>" alt="<?php echo $logo['name']; ?>"></li>
                                        <?php endforeach; ?>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </section>

            <section class="" style="background-color: #e1e4ff;">
                <div class="container ps-3 ps-md-5">
                    <div class="stats py-5 d-flex flex-wrap justify-content-between">
                        <div class="stat-item">
                            <h3 class="count-up" data-target="35">00+</h3>
                            <div class="animated-line2 mb-1" data-aos="fade-right" data-aos-delay="100" data-aos-duration="1000">
                                <div class="line-fill2"></div>
                            </div>
                            <p data-aos="fade-right" data-aos-delay="200" data-aos-duration="1000">Years</p>
                        </div>
                        <div class="stat-item">
                            <h3 class="count-up" data-target="150">00+</h3>
                            <div class="animated-line2 mb-1" data-aos="fade-right" data-aos-delay="100" data-aos-duration="1000">
                                <div class="line-fill2"></div>
                            </div>
                            <p data-aos="fade-right" data-aos-delay="200" data-aos-duration="1000">Clients</p>
                        </div>
                        <div class="stat-item">
                            <h3 class="count-up" data-target="60">00+</h3>
                            <div class="animated-line2 mb-1" data-aos="fade-right" data-aos-delay="100" data-aos-duration="1000">
                                <div class="line-fill2"></div>
                            </div>
                            <p data-aos="fade-right" data-aos-delay="200" data-aos-duration="1000">Collection</p>
                        </div>
                        <div class="stat-item">
                            <h3 class="count-up" data-target="10">00+</h3>
                            <div class="animated-line2 mb-1" data-aos="fade-right" data-aos-delay="100" data-aos-duration="1000">
                                <div class="line-fill2"></div>
                            </div>
                            <p data-aos="fade-right" data-aos-delay="200" data-aos-duration="1000">Industries</p>
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
    <script src="https://cdn.jsdelivr.net/npm/@glidejs/glide"></script>
    <script>
        new Glide('.glide', {
            type: 'carousel',
            perView: 5,
            focusAt: 'center',
            autoplay: 2000,
            hoverpause: true,
            gap: 5,
            animationDuration: 1000,
            breakpoints: {
                1024: {
                    perView: 5
                },
                768: {
                    perView: 4
                },
                480: {
                    perView: 3
                }
            }
        }).mount();
    </script>
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
        document.addEventListener("DOMContentLoaded", () => {
            const counters = document.querySelectorAll('.count-up');

            const observer = new IntersectionObserver(entries => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        const counter = entry.target;
                        const target = +counter.getAttribute('data-target');
                        let count = 0;

                        const updateCount = () => {
                            const increment = Math.ceil(target / 50);
                            if (count < target) {
                                count += increment;
                                counter.innerText = count;
                                setTimeout(updateCount, 20);
                            } else {
                                counter.innerText = target + "+";
                            }
                        };

                        updateCount();
                        observer.unobserve(counter); // run once
                    }
                });
            }, {
                threshold: 0.6
            });

            counters.forEach(counter => observer.observe(counter));
        });
    </script>

</body>

</html>