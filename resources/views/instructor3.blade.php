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
            <div class="breadcrumbs d-flex align-items-center" style="background-image: url('assets/img/header/Sayoc_tribal_logo.png');">
                <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">

                    <!-- Make the name mobile responsive -->
                    <h2 class="text-center text-md-left">Charlie Mengullo</h2>

                    <ol class="text-center text-md-left">
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

                    <div class="col-lg-6 img-bg" style="background-image: url(assets/img/instructor/guro3/photo2.jpg);" data-aos="zoom-in" data-aos-delay="100"></div>
                </div>

                </div>
            </section>
            <!-- End Alt Services Section 2 -->

            <!-- ======= Training Schedule Section ======= -->
            <section id="recent-blog-posts" class="recent-blog-posts section-bg">
                <div class="container" data-aos="fade-up">
                    <div class="training-header">
                        <h2>SFI Training Centers</h2>
                    </div>

                    <div class="row">
                        <div class="col-md-6 mb-4">
                            <table class="shadow-lg mb-5 bg-white table table-custom training-table">
                                <!-- Schedule 1 -->
                                <thead>
                                    <tr>
                                        <th colspan="2" class="text-center text-md-left">Casa Hacienda, Rosario </th>
                                    </tr>
                                </thead>
                                <tbody class="table-group-divider">
                                    <tr>
                                        <td>Friday</td>
                                        <td>1:00pm - 5:00pm</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                        <div class="col-md-6 mb-4">
                            <table class="shadow-lg mb-5 bg-white table table-custom training-table">
                                <!-- Schedule 1 -->
                                <thead>
                                    <tr>
                                        <th colspan="2" class="text-center text-md-left">Bucal, Maragondon</th>
                                    </tr>
                                </thead>
                                <tbody class="table-group-divider">
                                    <tr>
                                        <td>Saturday</td>
                                        <td>7:00am - 10:00am</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                        <div class="col-md-6 mb-4">
                            <table class="shadow-lg mb-5 bg-white table table-custom training-table">
                                <!-- Schedule 1 -->
                                <thead>
                                    <tr>
                                        <th colspan="2" class="text-center text-md-left">Luneta Park, Manila</th>
                                    </tr>
                                </thead>
                                <tbody class="table-group-divider">
                                    <tr>
                                        <td>Saturday</td>
                                        <td>3:00pm - 5:00pm</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                        <div class="col-md-6 mb-4">
                            <table class="shadow-lg mb-5 bg-white table table-custom training-table">
                                <!-- Schedule 1 -->
                                <thead>
                                    <tr>
                                        <th colspan="2" class="text-center text-md-left">Sapa, Rosario</th>
                                    </tr>
                                </thead>
                                <tbody class="table-group-divider">
                                    <tr>
                                        <td>Sunday</td>
                                        <td>3:00pm - 5:00pm</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                        <div class="col-md-6 mb-4 mx-auto">
                            <table class="shadow-lg mb-5 bg-white table table-custom training-table">
                                <!-- Schedule 2 -->
                                <thead>
                                    <tr>
                                        <th colspan="2" class="text-center text-md-left">Adamson University, Manila</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Saturday</td>
                                        <td>1:00pm - 3:00pm</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                    <div class="row mt-4">
                        <div class="col-md-12 text-center">
                            <p class="text-muted">Note: Training schedules are subject to change based on instructor availability.</p>
                        </div>
                    </div>
                </div>
            </section>
            <!-- ======= Training Schedule Section End ======= -->


            <!-- ======= Training Scheme Section ======= -->
            <section class="training-header">
                <div class="container" data-aos="fade-up">
                    <div class="section-header">
                        <h2>Training Schemes</h2>
                    </div>

                    <div class="row">
                        <div class="col-md-6 mb-4">
                            <div class="training-box d-flex flex-column justify-content-center align-items-center">
                                <h3>Regular Classes</h3>
                                <p>
                                    Join our regular classes held at our training centers. These sessions provide comprehensive martial arts training and are suitable for all skill levels.
                                </p>
                            </div>
                        </div>

                        <div class="col-md-6 mb-4">
                            <div class="training-box d-flex flex-column justify-content-center align-items-center">
                                <h3>Virtual Classes</h3>
                                <p>
                                    Attend virtual classes from the comfort of your home. Our online sessions bring the training experience to you, allowing flexibility in your schedule.
                                </p>
                            </div>
                        </div>

                        <div class="col-md-6 mb-4">
                            <div class="training-box d-flex flex-column justify-content-center align-items-center">
                                <h3>Tutorial Classes</h3>
                                <p>
                                    Receive personalized attention with our tutorial classes. Perfect for individuals seeking focused guidance and customized training plans.
                                </p>
                            </div>
                        </div>

                        <div class="col-md-6 mb-4">
                            <div class="training-box d-flex flex-column justify-content-center align-items-center">
                                <h3>Specialized Classes</h3>
                                <p>
                                    Explore specialized classes tailored to specific martial arts disciplines. Enhance your skills and knowledge in niche areas of interest.
                                </p>
                            </div>
                        </div>

                        <div class="col-md-6 mb-4 mx-auto">
                            <div class="training-box d-flex flex-column justify-content-center align-items-center">
                                <h3>Instructional Course</h3>
                                <p>
                                    Enroll in our instructional courses for an in-depth exploration of martial arts principles and techniques. Ideal for those looking for a structured learning program.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- ======= Training Scheme Section End ======= -->

            <!-- ======= Get Started Section ======= -->
            <section id="get-started" class="get-started section-bg">
                <div class="container">

                <div class="row justify-content-between gy-4">

                    <div class="col-lg-6 d-flex align-items-center" data-aos="fade-up" style="background-image: url(assets/img/instructor/guro3/photo3.jpg); background-size: contain; background-position: center; background-repeat: no-repeat;">
                    </div>

                    <div class="col-lg-5" data-aos="fade">
                    <form action="{{ route('contact.instructor3') }}" method="post" class="php-email-form">
                        @csrf
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
