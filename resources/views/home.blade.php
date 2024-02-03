<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Sayoc Fighting International</title>

        <!-- Favicons -->
        <link href="assets/img/SFI_logo.jpg" rel="icon"> {{-- remove background --}}
        <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

        <!-- Google Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Roboto:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Work+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

        <!-- Vendor CSS Files -->
        <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
        <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
        <link href="assets/vendor/aos/aos.css" rel="stylesheet">
        <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
        <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

        <!-- Template Main CSS File -->
        <link href="assets/css/main.css" rel="stylesheet">

        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
    </head>
    <body class="antialiased">

        @include('_header')

        <!-- ======= Hero Section ======= -->
        <section id="hero" class="hero">

            <div class="info d-flex align-items-center">
            <div class="container">
                <div class="row justify-content-center">
                <div class="col-lg-6 text-center">
                    <h2 data-aos="fade-down">SAYOC FIGHTING <span>INTERNATIONAL</span></h2>
                    <p data-aos="fade-up">Welcome to Sayoc Fighting International, the one of the  best Filipino Martial Arts School in the  area. Take a look through our site to learn about our wide selection of courses, our dedicated team, important news and updates and much more.</p>
                    <a data-aos="fade-up" data-aos-delay="200" href="#about" class="btn-get-started">Get Started</a>
                </div>
                </div>
            </div>
            </div>

            {{-- Start Carousel --}}
            <div id="hero-carousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="5000">

                <div class="carousel-item active" style="background-image: url(assets/img/SFI_logo.jpg)"></div>
                <div class="carousel-item" style="background-image: url(assets/img/hero-carousel/cover12.jpg)"></div>
                <div class="carousel-item" style="background-image: url(assets/img/hero-carousel/cover13.jpg)"></div>
                <div class="carousel-item" style="background-image: url(assets/img/hero-carousel/cover6.jpg)"></div>
                <div class="carousel-item" style="background-image: url(assets/img/hero-carousel/cover8.jpg)"></div>

                <a class="carousel-control-prev" href="#hero-carousel" role="button" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
                </a>

                <a class="carousel-control-next" href="#hero-carousel" role="button" data-bs-slide="next">
                    <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
                </a>

            </div>
            {{-- End Carousel --}}

        </section><!-- End Hero Section -->

        <main id="main">

            <!-- ======= About Section ======= -->
            <section id="about"  class="about">
                <div class="container" data-aos="fade-up">
                    <div class="row position-relative">

                        <div class="col-lg-7 about-img" style="background-image: url(assets/img/hero-carousel/cover1.jpg);"></div>

                        <div class="col-lg-7">
                            <h2 class="text-center">Sayoc Fighting International</h2>
                            <div class="our-story">
                                <h4>Est 2012</h4>
                                <h3>Our Story</h3>
                                <p>Inventore aliquam beatae at et id alias. Ipsa dolores amet consequuntur minima quia maxime autem. Quidem id sed ratione. Tenetur provident autem in reiciendis rerum at dolor. Aliquam consectetur laudantium temporibus dicta minus dolor.</p>
                                <ul>
                                <li><i class="bi bi-check-circle"></i> <span>Ullamco laboris nisi ut aliquip ex ea commo</span></li>
                                <li><i class="bi bi-check-circle"></i> <span>Duis aute irure dolor in reprehenderit in</span></li>
                                <li><i class="bi bi-check-circle"></i> <span>Ullamco laboris nisi ut aliquip ex ea</span></li>
                                </ul>
                                <p>Vitae autem velit excepturi fugit. Animi ad non. Eligendi et non nesciunt suscipit repellendus porro in quo eveniet. Molestias in maxime doloremque.</p>

                                <a href="/about" class="readmore btn btn-outline-warning"> Read more <i class="bi bi-arrow-right"></i></a>

                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- End About Section -->


            <!-- ======= Recent Blog Posts Section ======= -->
            <section id="recent-blog-posts" class="recent-blog-posts section-bg">
                <div class="container" data-aos="fade-up">

                <div class=" section-header">
                    <h2>Instructors</h2>
                    <p>In commodi voluptatem excepturi quaerat nihil error autem voluptate ut et officia consequuntu</p>
                </div>

                <div class="container py-5">
                    <div class="row text-center">
                        <!-- Team item-->
                        <div class="col-md-4 mb-5">
                            <div class="bg-white rounded shadow-sm py-5 px-4">
                                <img src="assets/img/instructor/guro1/photo1.jpg" alt="" width="150" class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm">
                                <h5 class="mb-0">Leopoldo Lasaleta Jr.</h5>
                                <span class="small text-uppercase text-muted">Punong Guro</span>
                                <ul class="social mb-0 list-inline mt-3">
                                    <li class="list-inline-item"><a href="#" class="social-link readmore btn btn-outline-warning"><span class="fa fa-facebook-f"></span></a></li>
                                    <li class="list-inline-item"><a href="#" class="social-link readmore btn btn-outline-warning"><span class="fa fa-twitter"></span></a></li>
                                    <li class="list-inline-item"><a href="#" class="social-link readmore btn btn-outline-warning"><span class="fa fa-instagram"></span></a></li>
                                    <li class="list-inline-item"><a href="#" class="social-link readmore btn btn-outline-warning"><span class="fa fa-linkedin"></span></a></li>
                                </ul>
                                <a href="/leopoldo-lasaleta" class="readmore btn btn-outline-warning mt-3"> Learn more <i class="bi bi-arrow-right"></i></a>
                            </div>
                        </div>
                        <!-- End-->

                        <!-- Team item-->
                        <div class="col-md-4 mb-5">
                            <div class="bg-white rounded shadow-sm py-5 px-4">
                                <img src="assets/img/instructor/guro2/photo1.jpg" alt="" width="150" class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm">
                                <h5 class="mb-0">Joseph Roquid</h5>
                                <span class="small text-uppercase text-muted">Vice President</span>
                                <ul class="social mb-0 list-inline mt-3">
                                    <li class="list-inline-item"><a href="#" class="social-link readmore btn btn-outline-warning"><span class="fa fa-facebook-f"></span></a></li>
                                    <li class="list-inline-item"><a href="#" class="social-link readmore btn btn-outline-warning"><span class="fa fa-twitter"></span></a></li>
                                    <li class="list-inline-item"><a href="#" class="social-link readmore btn btn-outline-warning"><span class="fa fa-instagram"></span></a></li>
                                    <li class="list-inline-item"><a href="#" class="social-link readmore btn btn-outline-warning"><span class="fa fa-linkedin"></span></a></li>
                                </ul>
                                <a href="/joseph-roquid" class="readmore btn btn-outline-warning mt-3"> Learn more <i class="bi bi-arrow-right"></i></a>
                            </div>
                        </div>
                        <!-- End-->

                        <!-- Team item-->
                        <div class="col-md-4 mb-5">
                            <div class="bg-white rounded shadow-sm py-5 px-4">
                                <img src="assets/img/instructor/guro3/photo1.jpg" alt="" width="150" class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm">
                                <h5 class="mb-0">Charlie Mengullo</h5>
                                <span class="small text-uppercase text-muted">Waray - waray fighting system</span>
                                <ul class="social mb-0 list-inline mt-3">
                                    <li class="list-inline-item"><a href="#" class="social-link readmore btn btn-outline-warning"><span class="fa fa-facebook-f"></span></a></li>
                                    <li class="list-inline-item"><a href="#" class="social-link readmore btn btn-outline-warning"><span class="fa fa-twitter"></span></a></li>
                                    <li class="list-inline-item"><a href="#" class="social-link readmore btn btn-outline-warning"><span class="fa fa-instagram"></span></a></li>
                                    <li class="list-inline-item"><a href="#" class="social-link readmore btn btn-outline-warning"><span class="fa fa-linkedin"></span></a></li>
                                </ul>
                                <a href="/charlie-mengullo" class="readmore btn btn-outline-warning mt-3"> Learn more <i class="bi bi-arrow-right"></i></a>
                            </div>
                        </div>
                        <!-- End-->

                    </div>
                </div>

                </section>

            <!-- End Recent Blog Posts Section -->

            <!-- ======= Our Projects Section ======= -->
            <section id="projects" class="projects">
            <div class="container" data-aos="fade-up">

                <div class="section-header">
                <h2>Events</h2>
                <p>Consequatur libero assumenda est voluptatem est quidem illum et officia imilique qui vel architecto accusamus fugit aut qui distinctio</p>
                </div>

                <div class="portfolio-isotope" data-portfolio-filter="*" data-portfolio-layout="masonry" data-portfolio-sort="original-order">

                <ul class="portfolio-flters" data-aos="fade-up" data-aos-delay="100">
                    <li data-filter="*" class="filter-active">All</li>
                    <li data-filter=".filter-sama-sama">Sama-sama</li>
                    <li data-filter=".filter-tournaments">Tournaments</li>
                </ul><!-- End Projects Filters -->

                <div class="row gy-4 portfolio-container" data-aos="fade-up" data-aos-delay="200">

                    <div class="col-lg-4 col-md-6 portfolio-item filter-tournaments">
                        <div class="portfolio-content h-100">
                            <div class="image-container">
                                <img src="assets/img/hero-carousel/cover16.jpg" class="img-fluid" alt="">
                            </div>
                            <div class="portfolio-info">
                                <h4>Grand Master Bo - Arnis Duelo Cup 2024</h4>
                                <div class="d-flex justify-content-center align-items-center mt-3">
                                    <a href="assets/img/hero-carousel/cover16.jpg" title="Sample content" data-gallery="portfolio-gallery-book" class="glightbox preview-link">
                                        <i class="bi bi-zoom-in"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-sama-sama">
                        <div class="portfolio-content h-100 d-flex flex-column">
                            <div class="image-container">
                                <img src="assets/img/hero-carousel/cover13.jpg" class="img-fluid" alt="">
                            </div>
                            <div class="portfolio-info">
                                <h4>Sama-Sama 2012</h4>
                                <div class="d-flex justify-content-center align-items-center mt-3">
                                    <a href="assets/img/hero-carousel/cover13.jpg" title="Sample Content" data-gallery="portfolio-gallery-remodeling" class="glightbox preview-link">
                                        <i class="bi bi-zoom-in"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div><!-- End Projects Container -->

                </div>

            </div>
            </section><!-- End Our Projects Section -->

        </main><!-- End #main -->

        @include('_footer')

        <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

        <div id="preloader"></div>

        <!-- Vendor JS Files -->
        <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="assets/vendor/aos/aos.js"></script>
        <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
        <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
        <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
        <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
        <script src="assets/vendor/php-email-form/validate.js"></script>

        <!-- Template Main JS File -->
        <script src="assets/js/main.js"></script>

    </body>
</html>
