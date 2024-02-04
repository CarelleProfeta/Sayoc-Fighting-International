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

        <main id="main">

            <!-- ======= Breadcrumbs ======= -->
            <div class="breadcrumbs d-flex align-items-center" style="background-image: url('assets/img/about/about1.jpg');">
                <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">

                <h2>Joseph Roquid</h2>
                <ol>
                    <li><a href="/home">Home</a></li>
                    <li>Instructor</li>
                </ol>
                </div>
            </div><!-- End Breadcrumbs -->

            <!-- ======= Alt Services Section 2 ======= -->
            <section id="alt-services-2" class="alt-services">
                <div class="container" data-aos="fade-up">

                <div class="row justify-content-around gy-4">
                    <div class="col-lg-5 d-flex flex-column justify-content-center">
                    <h3>Instructor's Background</h3>
                    <p>Maxime quia dolorum alias perspiciatis. Earum voluptatem sint at non. Ducimus maxime minima iste magni sit praesentium assumenda minus. Amet rerum saepe tempora vero.</p>

                    <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="100">
                        <i class="bi bi-easel flex-shrink-0"></i>
                        <div>
                        <h4><a href="" class="stretched-link">Lorem Ipsum</a></h4>
                        <p>Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident</p>
                        </div>
                    </div><!-- End Icon Box -->

                    <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="200">
                        <i class="bi bi-patch-check flex-shrink-0"></i>
                        <div>
                        <h4><a href="" class="stretched-link">Nemo Enim</a></h4>
                        <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque</p>
                        </div>
                    </div><!-- End Icon Box -->

                    <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="300">
                        <i class="bi bi-brightness-high flex-shrink-0"></i>
                        <div>
                        <h4><a href="" class="stretched-link">Dine Pad</a></h4>
                        <p>Explicabo est voluptatum asperiores consequatur magnam. Et veritatis odit. Sunt aut deserunt minus aut eligendi omnis</p>
                        </div>
                    </div><!-- End Icon Box -->

                    <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="400">
                        <i class="bi bi-brightness-high flex-shrink-0"></i>
                        <div>
                        <h4><a href="" class="stretched-link">Tride clov</a></h4>
                        <p>Est voluptatem labore deleniti quis a delectus et. Saepe dolorem libero sit non aspernatur odit amet. Et eligendi</p>
                        </div>
                    </div><!-- End Icon Box -->
                    </div>

                    <div class="col-lg-6 img-bg" style="background-image: url(assets/img/hero-carousel/cover2.jpg);" data-aos="zoom-in" data-aos-delay="100"></div>
                </div>

                </div>
            </section>
            <!-- End Alt Services Section 2 -->

            <!-- ======= Training Schedule Section ======= -->
            <section id="recent-blog-posts" class="recent-blog-posts section-bg">
                <div class="container" data-aos="fade-up">
                    <div class="section-header">
                        <h2>Training Schedule</h2>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <table class="table-custom">
                                <!-- Schedule 1 -->
                                <thead>
                                    <tr>
                                        <th colspan="2">Casa Hacienda</th>
                                    </tr>
                                </thead>
                                <tbody class="table-group-divider">
                                    <tr>
                                        <td>Sunday</td>
                                        <td>2:00pm - 5:00pm</td>
                                    </tr>
                                    <tr>
                                        <td>Tuesday</td>
                                        <td>8:00am - 10:00am</td>
                                    </tr>
                                    <tr>
                                        <td>Friday</td>
                                        <td>9:00am - 11:00am</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                        <div class="col-md-6">
                            <table class="table-custom">
                                <!-- Schedule 2 -->
                                <thead>
                                    <tr>
                                        <th colspan="2">Adamson University</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Monday</td>
                                        <td>3:00pm - 6:00pm</td>
                                    </tr>
                                    <tr>
                                        <td>Thursday</td>
                                        <td>1:00pm - 3:00pm</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </section>
            <!-- ======= Training Schedule Section End ======= -->


            <!-- ======= Get Started Section ======= -->
            <section id="get-started" class="get-started">
                <div class="container">

                <div class="row justify-content-between gy-4">

                    <div class="col-lg-6 d-flex align-items-center" data-aos="fade-up" style="background-image: url(assets/img/hero-carousel/cover2.jpg);">
                    </div>

                    <div class="col-lg-5" data-aos="fade">
                    <form action="forms/quote.php" method="post" class="php-email-form">
                        <h3>JOIN US TODAY</h3>
                        <p>Vel nobis odio laboriosam et hic voluptatem. Inventore vitae totam. Rerum repellendus enim linead sero park flows.</p>
                        <div class="row gy-3">

                        <div class="col-md-12">
                            <input type="text" name="name" class="form-control" placeholder="Name" required>
                        </div>

                        <div class="col-md-12 ">
                            <input type="email" class="form-control" name="email" placeholder="Email" required>
                        </div>

                        <div class="col-md-12">
                            <input type="text" class="form-control" name="phone" placeholder="Phone" required>
                        </div>

                        <div class="col-md-12">
                            <textarea class="form-control" name="message" rows="6" placeholder="Message" required></textarea>
                        </div>

                        <div class="col-md-12 text-center">
                            <div class="loading">Loading</div>
                            <div class="error-message"></div>
                            <div class="sent-message">Your quote request has been sent successfully. Thank you!</div>

                            <button type="submit">Send a message</button>
                        </div>

                        </div>
                    </form>
                    </div><!-- End Quote Form -->

                </div>

                </div>
            </section>
            <!-- End Get Started Section -->

        </main>
        <!-- End #main -->

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