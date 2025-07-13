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
    <link rel="stylesheet" href="src/css/style.css">
</head>

<body>

    <!-- Page Loader -->
    <?php
    include('componnet/loading2.php');
    ?>


    <!-- Navigation -->
    <?php
    include('componnet/navbar.php');
    ?>

    <div class="wrapper2" id="smooth-wrapper">
        <div class="content2" id="smooth-content">

            <!-- Hero Section -->
            <!-- <section class="hero-section" id="home">
                <img class="hero-image" src="./images/home.jpg" alt="Hero Image">
            </section> -->

            <div class="slider">
                <div class="slides">

                    <!-- Slide 04 -->
                    <div class="slide active" id="slide04">
                        <div class="container_ani" onload="">
                            <img src="images/Slider/04/9.png" class="layer2 ice" style="top: 0; z-index: 1" />

                            <img src="images/Slider/04/8.png" class="layer2 tineCan" style="top: 0; z-index: 7" />
                            <img src="images/Slider/04/7.png" class="layer2 tineCan" style="top: 0; z-index: 2" />
                            <img src="images/Slider/04/6.png" class="layer2 tineCan" style="top: 0; z-index: 3" />
                            <img src="images/Slider/04/5.png" class="layer2 tineCan" style="top: 0; z-index: 4" />
                            <img src="images/Slider/04/4.png" class="layer2 tineCan" style="top: 0; z-index: 5" />
                            <img src="images/Slider/04/3.png" class="layer2 tineCan" style="top: 0; z-index: 6" />
                            <img src="images/Slider/04/2.png" class="layer2 ice" style="top: 0; z-index: 8" />
                            <img src="images/Slider/04/1a.png" class="layer2 smoke smoke1" style="top: 0; z-index: 9" />
                            <img src="images/Slider/04/1b.png" class="layer2 smoke smoke2" style="top: 0; z-index: 10" />
                        </div>
                        <audio id="tineSound" src="images/Slider/music/s3.mp3" preload="auto"></audio>
                    </div>
                    <!-- End Slide 04 -->

                    <!-- Slide 03 -->
                    <div class="slide" id="slide03">
                        <div class="container_ani" onload="">
                            <img src="images/Slider/03/12.png" class="layer ice" style="top: 0; z-index: 1" />

                            <img src="images/Slider/03/9.png" class="layer tineRight" style="top: 0; z-index: 4" />
                            <img src="images/Slider/03/8.png" class="layer tineRight" style="top: 0; z-index: 2" />
                            <img src="images/Slider/03/13.png" class="layer tineRight" style="top: 0; z-index: 7" />
                            <img src="images/Slider/03/10.png" class="layer tineRight" style="top: 0; z-index: 5" />

                            <img src="images/Slider/03/7.png" class="layer tineLeft" style="top: 0; z-index: 3" />
                            <img src="images/Slider/03/11.png" class="layer tineLeft" style="top: 0; z-index: 6" />

                            <img src="images/Slider/03/1.png" class="layer" style="top: 0; z-index: 8" />

                            <img src="images/Slider/03/2.png" class="layer line01" style="top: 0; z-index: 9" />
                            <img src="images/Slider/03/3.png" class="layer line02" style="top: 0; z-index: 10" />
                            <img src="images/Slider/03/4.png" class="layer line01" style="top: 0; z-index: 11" />
                            <img src="images/Slider/03/5.png" class="layer line02" style="top: 0; z-index: 12" />

                            <img src="images/Slider/03/6.png" class="layer" style="top: 0; z-index: 13" />

                        </div>
                        <audio id="slide3Sound" src="images/Slider/music/s4.mp3" preload="auto"></audio>
                    </div>
                    <!-- End Slide 03 -->

                    <!-- Slide 01 -->
                    <div class="slide" id="slide01">
                        <div class="container_ani" onload="">
                            <img src="images/Slider/01/11.jpg" class="layer ice" style="top: 0; z-index: 1" />

                            <img src="images/Slider/01/10.png" class="layer bottle" style="top: 0; z-index: 2" />
                            <img src="images/Slider/01/10a.png" class="layer bottle" style="top: 0%; z-index: 3" />

                            <img src="images/Slider/01/9.png" class="layer ice" style="top: 0; z-index: 4" />

                            <img src="images/Slider/01/8.png" class="layer bottle" style="top: 0; z-index: 5" />
                            <img src="images/Slider/01/8a.png" class="layer bottle" style="top: 0; z-index: 6" />

                            <img src="images/Slider/01/7.png" class="layer ice" style="top: 0; z-index: 7" />
                            <img src="images/Slider/01/6.png" class="layer ice" style="top: 0; z-index: 8" />
                            <img src="images/Slider/01/5.png" class="layer ice" style="top: 0; z-index: 9" />
                            <img src="images/Slider/01/4.png" class="layer ice" style="top: 0; z-index: 10" />
                            <img src="images/Slider/01/3.png" class="layer ice" style="top: 0; z-index: 11" />

                            <img src="images/Slider/01/2j.png" class="layer tonic" style="top: 0; z-index: 12" />
                            <img src="images/Slider/01/2i.png" class="layer tonic" style="top: 0; z-index: 13" />
                            <img src="images/Slider/01/2h.png" class="layer tonic" style="top: 0; z-index: 14" />
                            <img src="images/Slider/01/2g.png" class="layer tonic" style="top: 0; z-index: 15" />
                            <img src="images/Slider/01/2f.png" class="layer tonic" style="top: 0; z-index: 16" />
                            <img src="images/Slider/01/2e.png" class="layer tonic" style="top: 0; z-index: 17" />
                            <img src="images/Slider/01/2l.png" class="layer tonic" style="top: 0; z-index: 12" />
                            <img src="images/Slider/01/2d.png" class="layer tonic" style="top: 0; z-index: 18" />
                            <img src="images/Slider/01/2c.png" class="layer tonic" style="top: 0; z-index: 19" />
                            <img src="images/Slider/01/2b.png" class="layer tonic" style="top: 0; z-index: 20" />
                            <img src="images/Slider/01/2a.png" class="layer tonic" style="top: 0; z-index: 21" />

                            <img src="images/Slider/01/1.png" class="layer ice" style="top: 0; z-index: 22" />
                        </div>
                        <audio id="bottleSound" src="images/Slider/music/s1.mp3" preload="auto"></audio>
                        <audio id="tonicSound" src="images/Slider/music/s2.mp3" preload="auto"></audio>
                    </div>
                    <!-- End Slide 01 -->

                    <!-- Slide 02 -->
                    <div class="slide" id="slide02">
                        <div class="container_ani" onload="">
                            <img src="images/Slider/02/7.jpg" class="layer ice" style="top: 0; z-index: 1" />
                            <img src="images/Slider/02/6.png" class="layer ice" style="top: 0; z-index: 7" />

                            <img src="images/Slider/02/5.png" class="layer hand" style="top: 0; z-index: 6" />

                            <img src="images/Slider/02/4.png" class="layer tonik" style="top: 0; z-index: 5" />
                            <img src="images/Slider/02/3.png" class="layer tonik" style="top: 0; z-index: 4" />
                            <img src="images/Slider/02/2.png" class="layer tonik" style="top: 0; z-index: 3" />
                            <img src="images/Slider/02/1.png" class="layer tonik" style="top: 0; z-index: 2" />


                        </div>
                        <audio id="slide4Sound" src="images/Slider/music/s4.mp3" preload="auto"></audio>
                    </div>
                    <!-- End Slide 02 -->

                </div>
                <div class="dots">
                    <span class="dot active" onclick="currentSlide(0)"></span>
                    <span class="dot" onclick="currentSlide(1)"></span>
                    <span class="dot" onclick="currentSlide(2)"></span>
                    <span class="dot" onclick="currentSlide(3)"></span>
                </div>

                <!-- <button id="soundToggleBtn" style="z-index: 100; position: relative; bottom: 55px; right: -20px; background: white; border: 2px solid black; cursor: pointer; width: 35px; height: 35px; border-radius: 50%;">
                    <img id="soundIcon" src="./images/sound-off.png" alt="Sound Toggle" width="20" height="20">
                </button> -->
            </div>

            <!-- Section -->
            <section class="container px-0 px-sm-3 px-md-5">
                <div class="mt-0 mt-md-5 px-0 px-sm-3 px-md-5">
                    <div class="section-title d-flex flex-column align-items-center text-center" data-aos="fade-up" data-aos-delay="100" data-aos-duration="1000">
                        <h2>State of the art Manufacturing Plant with
                            Impressive Production Capacity</h2>
                        <div class="animated-line" data-aos="fade-right" data-aos-delay="100" data-aos-duration="1000">
                            <div class="line-fill"></div>
                        </div>
                    </div>
                </div>
                <div class="px-0 px-sm-3 px-md-5">
                    <div class="section-title d-flex flex-column align-items-center text-center" data-aos="fade-up" data-aos-delay="300" data-aos-duration="1000">
                        <span class="text-black titlehome">
                            We manufacture and deliver beverage Cans and Ends to some of the world’s most loved beverage
                            brands. As the leader in beverage packaging in South Asia, Ceylon Beverage Can passionately deliver
                            more than just a beverage Can & End that make an attractive impact of your beverage brand on
                            retailer shelves. We produce range of standard aluminium Cans and Can Ends, supported by an exemplary
                            customer service.
                        </span>
                    </div>
                </div>
                <div class="px-0 px-sm-3 px-md-5">
                    <div class="section-title d-flex flex-column align-items-center text-center" data-aos="fade-up" data-aos-delay="500" data-aos-duration="1000">
                        <button onclick="window.location.href = 'about.php';" class="btn-custom btn-inquire btn-inquire_see">
                            <div class="roundicon roundicon_see">
                                <i class="fa-solid fa-arrow-up-long"></i>
                            </div>
                            <span>See More</span>
                        </button>
                    </div>
                </div>
            </section>

            <section class="subIMG-section d-flex flex-column align-items-center" id="home">
                <img class="mt-0 mt-md-5" src="./images/homesubbg.png" alt="Hero Image">
                <img class="mt-4 mt-md-5 subIMG" src="./images/homesub.png" alt="Hero Image" data-aos="fade-up" data-aos-delay="500" data-aos-duration="1000">
                <div class="d-none d-md-block row d-flex flex-column align-items-center see_btn">
                    <div class="col-12 d-flex justify-content-end text-end">
                        <h2 data-aos="fade-left" data-aos-delay="700" data-aos-duration="1000">
                            Cans for Spices
                        </h2>
                    </div>
                    <div class="col-12 d-flex justify-content-end">
                        <div class="d-flex justify-content-end" style="height: 34px;" data-aos="fade-left" data-aos-delay="900" data-aos-duration="1000">
                            <button onclick="window.location.href = 'category3.php';" class="btn-custom btn-inquire btn-inquire_see">
                                <div class="roundicon roundicon_see">
                                    <i class="fa-solid fa-arrow-up-long"></i>
                                </div>
                                <span>See More</span>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="d-block d-md-none row d-flex flex-column align-items-center mt-5" style="z-index: 10;">
                    <div class="col-12 d-flex justify-content-center text-center mt-3">
                        <h2 data-aos="fade-left" data-aos-delay="700" data-aos-duration="1000">
                            Cans for Spices
                        </h2>
                    </div>
                    <div class="col-12 d-flex justify-content-center">
                        <div class="d-flex justify-content-end" style="height: 34px;" data-aos="fade-left" data-aos-delay="900" data-aos-duration="1000">
                            <button onclick="window.location.href = 'category3.php';" class="btn-custom btn-inquire btn-inquire_see">
                                <div class="roundicon roundicon_see">
                                    <i class="fa-solid fa-arrow-up-long"></i>
                                </div>
                                <span>See More</span>
                            </button>
                        </div>
                    </div>
                </div>
            </section>

            <section class="mt-5" style="overflow: hidden; background-color: #e1ffdb;">
                <div class="container px-0 px-sm-3 px-md-5">
                    <div class="section-title2">
                        <div class="section-title">
                            <h2>Main Product Range</h2>
                            <div class="animated-line">
                                <div class="line-fill"></div>
                            </div>
                        </div>
                    </div>

                    <div class="product-grid_home px-5 px-md-0">
                        <div onclick="window.location.href = 'category.php';" data-aos="fade-up" data-aos-delay="100" data-aos-duration="1000">
                            <div class="product-card_home mb-5" data-product="1">
                                <div class="product-info_home">
                                    <h3 class="product-title_home">Tea Cans</h3>
                                </div>
                                <div class="imagecontent">
                                    <img class="product-image_home" src="./images/productRange/mpr01.png" alt="card">
                                </div>
                            </div>
                        </div>
                        <div onclick="window.location.href = 'category2.php';" data-aos="fade-up" data-aos-delay="300" data-aos-duration="1000">
                            <div class="product-card_home mb-5" data-product="1">
                                <div class="product-info_home">
                                    <h3 class="product-title_home">General Cans</h3>
                                </div>
                                <div class="imagecontent">
                                    <img class="product-image_home" src="./images/productRange/mpr02.png" alt="card">
                                </div>
                            </div>
                        </div>
                        <h2></h2>
                    </div>
                    <div class="product-grid_home2 px-5 px-md-0">
                        <h2></h2>
                        <div onclick="window.location.href = 'category4.php';" data-aos="fade-up" data-aos-delay="100" data-aos-duration="1000">
                            <div class="product-card_home mb-5" data-product="1">
                                <div class="product-info_home">
                                    <h3 class="product-title_home">Seeds Cans</h3>
                                </div>
                                <div class="imagecontent">
                                    <img class="product-image_home" src="./images/productRange/mpr03.png" alt="card">
                                </div>
                            </div>
                        </div>
                        <div onclick="window.location.href = 'category5.php';" data-aos="fade-up" data-aos-delay="300" data-aos-duration="1000">
                            <div class="product-card_home mb-5" data-product="1">
                                <div class="product-info_home">
                                    <h3 class="product-title_home">Metal Closures (Crown Cork)</h3>
                                </div>
                                <div class="imagecontent">
                                    <img class="product-image_home" src="./images/productRange/mpr04.png" alt="card">
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </section>

            <section class="">
                <div class="container ps-3 ps-md-5">
                    <div class="row">
                        <div class="col-12 col-md-6 mb-4 mb-lg-0 mt-0 mt-md-0 mt-lg-5 pt-0 pt-lg-5">
                            <div class="section-title">
                                <h2 class="mb-3" data-aos="fade-right" data-aos-delay="100" data-aos-duration="1000">
                                    Think Sustainable. <br>
                                    Choose Unimak.
                                </h2>
                                <div class="animated-line mb-3" data-aos="fade-right" data-aos-delay="300" data-aos-duration="1000">
                                    <div class="line-fill"></div>
                                </div>
                                <p class="parcontact" data-aos="fade-up" data-aos-delay="500" data-aos-duration="1000">
                                    At Unimak, sustainability is not a choice - it's our promise.
                                    Proudly made in Sri Lanka, our metal packaging solutions combine
                                    environmental responsibility with trusted quality to meet
                                    your needs today and beyond
                                </p>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 text-center d-flex justify-content-center align-items-center">
                            <img src="./images/homeGIF.gif" alt="Bottle Cap" class=" rotate-img2" data-aos="fade-left" data-aos-delay="500" data-aos-duration="1000" />
                        </div>
                    </div>
                </div>
            </section>

            <section class="why-choose-us pb-4">
                <div class="container ps-3 ps-md-5">
                    <div class="row">
                        <div class="col-12 col-md-6">
                            <div class="section-title">
                                <h2 class="mb-3" data-aos="fade-right" data-aos-delay="100" data-aos-duration="1000">Why Choose Us</h2>
                                <div class="animated-line mb-3" data-aos="fade-right" data-aos-delay="300" data-aos-duration="1000">
                                    <div class="line-fill"></div>
                                </div>
                                <p class="parcontact" data-aos="fade-up" data-aos-delay="500" data-aos-duration="1000">We do not compromise on quality. The raw material we use are of the highest grade and the output of our manufacturing plants are testimony to this work ethic. <br><br>
                                    We adhere to lean manufacturing practices enabling us to transfer its benefits to our clientele by way of competitive prices. <br><br>
                                    The factory with an extent of 20,000 sq.ft, houses state-of-the-art machinery. Our 100 strong staff are trained by experts in the industry and are dedicated to offering the best quality in all our products with lead times as short as two weeks.</p>

                                <button class="btn-custom btn-inquire btn-inquire_see" data-aos="fade-up" data-aos-delay="700" data-aos-duration="1000">
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
                                <h2 class="mb-3" data-aos="fade-right" data-aos-delay="100" data-aos-duration="1000">Our Clients</h2>
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
                            <h3 class="count-up" data-target="30">00+</h3>
                            <div class="animated-line2 mb-1" data-aos="fade-right" data-aos-delay="100" data-aos-duration="1000">
                                <div class="line-fill2"></div>
                            </div>
                            <p data-aos="fade-right" data-aos-delay="200" data-aos-duration="1000">Years</p>
                        </div>
                        <div class="stat-item">
                            <h3 class="count-up" data-target="100">00+</h3>
                            <div class="animated-line2 mb-1" data-aos="fade-right" data-aos-delay="100" data-aos-duration="1000">
                                <div class="line-fill2"></div>
                            </div>
                            <p data-aos="fade-right" data-aos-delay="200" data-aos-duration="1000">Clients</p>
                        </div>
                        <div class="stat-item">
                            <h3 class="count-up" data-target="200">00+</h3>
                            <div class="animated-line2 mb-1" data-aos="fade-right" data-aos-delay="100" data-aos-duration="1000">
                                <div class="line-fill2"></div>
                            </div>
                            <p data-aos="fade-right" data-aos-delay="200" data-aos-duration="1000">Collection</p>
                        </div>
                        <div class="stat-item">
                            <h3 class="count-up" data-target="15">00+</h3>
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
    <!-- Slider-->
    <script>
        //image all load
        function waitForImagesToLoad(callback) {
            const images = document.images;
            let loadedCount = 0;
            const total = images.length;

            // Create a promise that resolves after all images are loaded
            const imagesLoadedPromise = new Promise((resolve) => {
                if (total === 0) return resolve();

                for (let img of images) {
                    if (img.complete) {
                        loadedCount++;
                        if (loadedCount === total) resolve();
                    } else {
                        img.addEventListener('load', () => {
                            loadedCount++;
                            if (loadedCount === total) resolve();
                        });
                        img.addEventListener('error', () => {
                            loadedCount++;
                            if (loadedCount === total) resolve();
                        });
                    }
                }
            });

            // Create a promise that resolves after 5 seconds
            const minimumWait = new Promise((resolve) => setTimeout(resolve, 5000));

            // Wait for both
            Promise.all([imagesLoadedPromise, minimumWait]).then(callback);
        }

        window.addEventListener("load", () => {
            waitForImagesToLoad(() => {
                // Fade out loader
                const loader = document.querySelector('.page-loader');
                if (loader) {
                    loader.style.opacity = "0";
                    setTimeout(() => {
                        loader.style.display = "none";
                    }, 600);
                }

                //setupSoundToggle();
                // Start animation
                startAnimation2();

                // Optional: auto slide
                setInterval(() => {
                    slideIndex = (slideIndex + 1) % slides.length;
                    showSlide(slideIndex);
                    if (slideIndex === 0) {
                        startAnimation2();
                        //clear
                        resetAnimation3();
                    } else if (slideIndex === 1) {
                        startSlide03Animation();
                        //clear
                        resetAnimation4();
                    } else if (slideIndex === 2) {
                        startAnimation();
                        //clear
                        resetAnimation();
                    } else if (slideIndex === 3) {
                        startAnimation4();
                        //clear
                        resetAnimation2();
                    } else {
                        setTimeout(() => {
                            resetAnimation();
                            resetAnimation2();
                            resetAnimation3();
                            resetAnimation4();
                        }, 1000);
                    }
                }, 7000);
            });
        });


        let soundVolume = false;
        let userSoundPreference = false;
        let autoMuted = false;

        // Slider 01 ***************
        const bottles = document.querySelectorAll('.bottle');
        const tonics = document.querySelectorAll('.tonic');
        const bottleSound = document.getElementById('bottleSound');
        const tonicSound = document.getElementById('tonicSound');

        function playSound(sound) {
            if (soundVolume) {
                return sound.play().catch((e) => {
                    console.warn("Sound play failed:", e);
                });
            }
        }

        async function showBottles(index = 0) {
            if (index < bottles.length) {
                bottles[index].classList.add('active');
                await playSound(bottleSound);
                setTimeout(() => {
                    showBottles(index + 1);
                }, 200);
            } else {
                setTimeout(() => {
                    dropTonics();
                }, 500);
            }
        }

        async function dropTonics(index = 0) {
            if (index < tonics.length) {
                const tonic = tonics[index];
                tonic.classList.add('active');
                tonic.classList.add('animate');
                await playSound(tonicSound);
                setTimeout(() => {
                    dropTonics(index + 1);
                }, 100);
            }
        }

        function startAnimation() {
            // alert("Start Animation");
            // document.getElementById('startScreen').style.display = 'none';
            setTimeout(() => {
                showBottles();
            }, 10);
        }

        function resetAnimation() {
            bottles.forEach(bottle => {
                bottle.classList.remove('active');
            });

            tonics.forEach(tonic => {
                tonic.classList.remove('active', 'animate');
            });

        }


        // Slider 2 ***********/
        async function startAnimation2() {
            const tineCans = document.querySelectorAll("#slide04 .tineCan");
            const smokeLayers = document.querySelectorAll("#slide04 .smoke");
            const tineSound = document.getElementById("tineSound");

            // Animate each tineCan one by one
            await playSound(tineSound);

            tineCans.forEach((img, index) => {
                setTimeout(() => {
                    img.classList.add("animate");
                    // img.style.animation = "moveFromLeft 1s ease-out forwards";
                }, index * 200); // delay between each image
            });

        };

        function resetAnimation2() {
            const tineCans = document.querySelectorAll("#slide04 .tineCan");
            tineCans.forEach(tineCan => {
                tineCan.classList.remove('animate');
            });
        }

        // Slider 3 *********************
        async function startSlide03Animation() {
            const tineLefts = document.querySelectorAll("#slide03 .tineLeft");
            const tineRights = document.querySelectorAll("#slide03 .tineRight");
            const line01 = document.querySelectorAll("#slide03 .line01");
            const line02 = document.querySelectorAll("#slide03 .line02");
            const tineLeftGroup = document.querySelectorAll("#slide03 .tineLeftGroup");
            const audio = document.getElementById("slide3Sound");

            // Play the sound at the start
            await playSound(audio);

            // Animate left and right images at the same time (but each set one-by-one)
            const maxCount = Math.max(tineLefts.length, tineRights.length);
            for (let i = 0; i < maxCount; i++) {
                if (i < tineLefts.length) {
                    tineLefts[i].classList.add("animate");
                }
                if (i < tineRights.length) {
                    tineRights[i].classList.add("animate2");
                }
                await new Promise(resolve => setTimeout(resolve, 200));
            }

            // tineLeftGroup.forEach((img) => {
            //     img.classList.add("animate");
            // });
            // line01.forEach((img) => {
            //     img.classList.add("animateFline");
            // });
            // line02.forEach((img) => {
            //     img.classList.add("animateFline");
            // });

            // await new Promise(resolve => setTimeout(resolve, 1200));

            line01.forEach((img) => {
                // img.style.animation = "lineAni 3s ease-out forwards";
                img.classList.add("animateline");
            });
            line02.forEach((img) => {
                // img.style.animation = "lineAni 3s ease-out forwards";
                img.classList.add("animateline2");
            });
        }

        function resetAnimation3() {
            const tineLefts = document.querySelectorAll("#slide03 .tineLeft");
            const tineRights = document.querySelectorAll("#slide03 .tineRight");
            const line01 = document.querySelectorAll("#slide03 .line01");
            const line02 = document.querySelectorAll("#slide03 .line02");
            const tineLeftGroup = document.querySelectorAll("#slide03 .tineLeftGroup");
            tineLefts.forEach(tineLeft => {
                tineLeft.classList.remove('animate');
            });
            tineLeftGroup.forEach(tineLeftGrou => {
                tineLeftGrou.classList.remove('animate');
            });
            tineRights.forEach(tineRight => {
                tineRight.classList.remove('animate2');
            });
            line01.forEach(tineRight => {
                // tineRight.classList.remove('animateFline');
                tineRight.classList.remove('animateline');
            });
            line02.forEach(tineRight => {
                // tineRight.classList.remove('animateFline');
                tineRight.classList.remove('animateline2');
            });
        }

        // Slider 4 ***********/
        async function startAnimation4() {
            const tonik = document.querySelectorAll("#slide02 .tonik");
            const hand = document.querySelectorAll("#slide02 .hand");
            const slide4Sound = document.getElementById("slide4Sound");

            // Animate each tineCan one by one
            await playSound(slide4Sound);

            tonik.forEach((img, index) => {
                setTimeout(() => {
                    img.classList.add("animatetonik");
                }, index * 200);
            });
            hand.forEach((img, index) => {
                setTimeout(() => {
                    img.classList.add("animatehand");
                }, index * 200);
            });

        };

        function resetAnimation4() {
            const tonik = document.querySelectorAll("#slide02 .tonik");
            const hand = document.querySelectorAll("#slide02 .hand");
            tonik.forEach(toniks => {
                toniks.classList.remove('animatetonik');
            });
            hand.forEach(hands => {
                hands.classList.remove('animatehand');
            });
        }

        // Slider With Dots *********************
        let slideIndex = 0;
        const slides = document.querySelectorAll(".slide");
        const dots = document.querySelectorAll(".dot");

        function showSlide(index) {
            slides.forEach((slide, i) => {
                slide.classList.remove("active");
                dots[i].classList.remove("active");
                if (i === index) {
                    slide.classList.add("active");
                    dots[i].classList.add("active");
                }
            });
        }

        // function currentSlide(index) {
        //     slideIndex = index;
        //     showSlide(slideIndex);
        //     if (slideIndex === 0) {
        //         startAnimation();
        //     } else {
        //         setTimeout(() => {
        //             resetAnimation();
        //         }, 1000);
        //     }
        // }

        function setupSoundToggle() {
            const soundBtn = document.getElementById('soundToggleBtn');
            const soundIcon = document.getElementById('soundIcon');

            soundBtn.addEventListener('click', () => {
                soundVolume = !soundVolume;
                userSoundPreference = soundVolume;

                // Play feedback click sound if sound turned on
                if (soundVolume) {
                    soundIcon.src = "./images/sound-on.png";
                } else {
                    soundIcon.src = "./images/sound-off.png";
                }
            });
        }
        // Scroll detection to mute/unmute
        window.addEventListener('scroll', () => {
            const viewportHeight = window.innerHeight;
            const scrollThreshold = viewportHeight;
            const scrolledDown = window.scrollY > scrollThreshold;

            if (scrolledDown && !autoMuted) {
                autoMuted = true;
                soundVolume = false;
            } else if (!scrolledDown && autoMuted) {
                autoMuted = false;
                soundVolume = userSoundPreference;
            }
        });
    </script>
</body>

</html>