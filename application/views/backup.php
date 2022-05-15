<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>PostGen</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="<?php echo  site_url() ?>assets/images/front-office/favicon.png" rel="icon">
    <link href="<?php echo  site_url() ?>assets/images/front-office/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Source+Sans+Pro:ital,wght@0,300;0,400;0,600;0,700;1,300;1,400;1,600;1,700&display=swap"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="<?php echo  site_url() ?>assets/vendors/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo  site_url() ?>assets/vendors/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="<?php echo  site_url() ?>assets/vendors/aos/aos.css" rel="stylesheet">
    <link href="<?php echo  site_url() ?>assets/vendors/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="<?php echo  site_url() ?>assets/vendors/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Variables CSS Files. Uncomment your preferred color scheme -->
    <!-- <link href="assets/css/variables.css" rel="stylesheet"> -->
    <!-- <link href="assets/css/variables-blue.css" rel="stylesheet"> -->
    <!-- <link href="assets/css/variables-green.css" rel="stylesheet"> -->
    <!-- <link href="assets/css/variables-orange.css" rel="stylesheet"> -->
    <link href="<?php echo  site_url() ?>assets/css/variables-purple.css" rel="stylesheet">
    <!-- <link href="assets/css/variables-red.css" rel="stylesheet"> -->
    <!-- <link href="assets/css/variables-pink.css" rel="stylesheet"> -->

    <!-- Template Main CSS File -->
    <link href="<?php echo  site_url() ?>assets/css/main.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo  site_url() ?>assets/css/style.css">



    <!-- =======================================================
  * Template Name: HeroBiz - v2.1.0
  * Template URL: https://bootstrapmade.com/herobiz-bootstrap-business-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>
    <style>
    body {
        background-color: #010101;

    }

    .hero-animated {
        background-image: url('<?php echo  site_url() ?>assets/images/front-office/background.jpg');
        background-repeat: no-repeat;
    }
    </style>
    <!-- ======= Header ======= -->
    <header id="header" class="header fixed-top" data-scrollto-offset="0">
        <div class="container-fluid d-flex align-items-center justify-content-between">

            <a href="index.php" class="logo d-flex align-items-center scrollto me-auto me-lg-0">
                <!-- Uncomment the line below if you also wish to use an image logo -->
                <!-- <img src="assets/img/logo.png" alt=""> -->
                <h1>PostGen<span>.</span></h1>
            </a>

                    <?php echo $navbar; ?>
                 

        </div>
    </header><!-- End Header -->

    <section id="hero-animated" class="hero-animated d-flex align-items-center">
        <div class="container d-flex flex-column justify-content-center align-items-center text-center position-relative"
            data-aos="zoom-out">
            <img src="<?php echo  site_url() ?>assets/images/front-office/hero-carousel/hero-carousel-3.svg" class="img-fluid animated">
            <?php echo $un; ?>
        </div>
    </section>

    <main id="main">

        <!-- ======= Featured Services Section ======= -->
        <section id="featured-services" class="featured-services">
            <div class="container">

                <div class="row gy-4">

                   <?php echo $deux; ?>

                </div>

            </div>
        </section><!-- End Featured Services Section -->
        <!-- ======= Services Section ======= -->
        <section id="services" class="services">
            <div class="container" data-aos="fade-up">

                <?php echo $trois; ?>

            </div>
        </section><!-- End Services Section -->

        <!-- ======= About Section ======= -->
        <section id="about" class="about">
            <?php echo $quatre; ?>
        </section><!-- End About Section -->



        <!-- ======= Call To Action Section ======= -->
        <section id="cta" class="cta">
            <div class="container" data-aos="zoom-out">

                <?php echo $cinq; ?>

            </div>
        </section><!-- End Call To Action Section -->

        <!-- ======= On Focus Section ======= -->
        <section id="onfocus" class="onfocus">
            <div class="container-fluid p-0" data-aos="fade-up">

                <div class="row g-0">
                    <div class="col-lg-6 video-play position-relative">
                        <a href="https://www.youtube.com/watch?v=aHpBVmZUHAs&t=3247s" class="glightbox play-btn"></a>
                    </div>
                    <?php echo $six; ?>
                </div>

            </div>
        </section><!-- End On Focus Section -->




        <!-- ======= Pricing Section ======= -->
        <section id="pricing" class="pricing">
            <div class="container" data-aos="fade-up">

                <div class="section-header">
                    <?php echo $sept; ?>
                </div>

                <div class="row gy-4">
                    <?php for($i=0;$i<3;$i++){ ?>
                    <div class="col-lg-4" data-aos="zoom-in" data-aos-delay="200">
                        <div class="pricing-item" onmouseover="hover('<?php echo $i;?>')" id="featured<?php echo $i;?>"
                            onmouseleave="removehover('<?php echo $i;?>')">

                            <div class="pricing-header">
                                <h3>Free Plan</h3>
                                <h4><sup>$</sup>30<span> / month</span></h4>
                            </div>

                            <ul>
                                <li><i class="bi bi-dot"></i> <span>Quam adipiscing vitae proin</span></li>
                                <li><i class="bi bi-dot"></i> <span>Nec feugiat nisl pretium</span></li>
                                <li><i class="bi bi-dot"></i> <span>Nulla at volutpat diam uteera</span></li>
                                <li class="na"><i class="bi bi-x"></i> <span>Pharetra massa massa ultricies</span></li>
                                <li class="na"><i class="bi bi-x"></i> <span>Massa ultricies mi quis hendrerit</span>
                                </li>
                            </ul>

                            <div class="text-center mt-auto">
                                <a href="#" class="buy-btn">Buy Now</a>
                            </div>

                        </div>
                    </div><!-- End Pricing Item -->
                    <?php }?>
                </div>

            </div>
        </section><!-- End Pricing Section -->


        <!-- ======= Team Section ======= -->
        <section id="team" class="team">
            <div class="container" data-aos="fade-up">

                <div class="section-header">
                    <?php echo $huit; ?>
                </div>

                <div class="row gy-5">

                    <div class="col-xl-4 col-md-6 d-flex" data-aos="zoom-in" data-aos-delay="200">
                        <div class="team-member">
                            <div class="member-img">
                                <img src="<?php echo  site_url() ?>assets/images/front-office/equipe/SteveCrop.jpg" class="img-fluid" alt="">
                            </div>
                            <div class="member-info">
                                <div class="social">
                                    <a href=""><i class="bi bi-twitter"></i></a>
                                    <a href=""><i class="bi bi-facebook"></i></a>
                                    <a href=""><i class="bi bi-instagram"></i></a>
                                    <a href=""><i class="bi bi-linkedin"></i></a>
                                </div>
                                <h4>Ramiandrisoa Steve</h4>
                                <span>Project manager</span>
                            </div>
                        </div>
                    </div><!-- End Team Member -->

                    <div class="col-xl-4 col-md-6 d-flex" data-aos="zoom-in" data-aos-delay="400">
                        <div class="team-member">
                            <div class="member-img">
                                <img src="<?php echo  site_url() ?>assets/images/front-office/equipe/JoharisoaCrop.jpg" class="img-fluid" alt="">
                            </div>
                            <div class="member-info">
                                <div class="social">
                                    <a href=""><i class="bi bi-twitter"></i></a>
                                    <a href=""><i class="bi bi-facebook"></i></a>
                                    <a href=""><i class="bi bi-instagram"></i></a>
                                    <a href=""><i class="bi bi-linkedin"></i></a>
                                </div>
                                <h4>Ratsirarson Joharisoa</h4>
                                <span>Developpeur fullstack</span>
                            </div>
                        </div>
                    </div><!-- End Team Member -->

                    <div class="col-xl-4 col-md-6 d-flex" data-aos="zoom-in" data-aos-delay="600">
                        <div class="team-member">
                            <div class="member-img">
                                <img src="<?php echo  site_url() ?>assets/images/front-office/equipe/RotsyCrop.jpg" class="img-fluid" alt="">
                            </div>
                            <div class="member-info">
                                <div class="social">
                                    <a href=""><i class="bi bi-twitter"></i></a>
                                    <a href=""><i class="bi bi-facebook"></i></a>
                                    <a href=""><i class="bi bi-instagram"></i></a>
                                    <a href=""><i class="bi bi-linkedin"></i></a>
                                </div>
                                <h4>Rafamantanantsoa Rotsy</h4>
                                <span>Développeur</span>
                            </div>
                        </div>
                    </div><!-- End Team Member -->

                    <!-- <div class="col-xl-4 col-md-6 d-flex" data-aos="zoom-in" data-aos-delay="600">
                        <div class="team-member">
                            <div class="member-img">
                                <img src="<?php echo  site_url() ?>assets/images/front-office/equipe/TokyCrop.jpg" class="img-fluid" alt="">
                            </div>
                            <div class="member-info">
                                <div class="social">
                                    <a href=""><i class="bi bi-twitter"></i></a>
                                    <a href=""><i class="bi bi-facebook"></i></a>
                                    <a href=""><i class="bi bi-instagram"></i></a>
                                    <a href=""><i class="bi bi-linkedin"></i></a>
                                </div>
                                <h4>Rakotovao Ratsimba Ny Toky</h4>
                                <span>Designer Web</span>
                            </div>
                        </div>
                    </div> -->

                </div>

            </div>
        </section><!-- End Team Section -->


    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer" class="footer" >

        <div class="footer-content">
            <div class="container">
                <div class="row">

                    <div class="col-lg-3 col-md-6">
                        <div class="footer-info">
                            <h3>PostGen</h3>
                            <p>
                                ITU Andoharanofotsy 101 <br>
                                Mahalavolona, Madagascar<br><br>
                                <strong>Phone:</strong> +264 34 00 000 00<br>
                                <strong>Email:</strong> enigma@gmail.com<br>
                            </p>
                        </div>
                    </div>

                    <div class="col-lg-2 col-md-6 footer-links">
                        <h4>Liens</h4>
                        <?php echo $neuf; ?>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>Nos Services</h4>
                        <ul>
                            <li><i class="bi bi-chevron-right"></i> <a href="#">Web Design</a></li>
                            <li><i class="bi bi-chevron-right"></i> <a href="#">Web Development</a></li>
                            <li><i class="bi bi-chevron-right"></i> <a href="#">Graphic Design</a></li>
                        </ul>
                    </div>

            

                </div>
            </div>
        </div>

        <div class="footer-legal text-center">
            <div
                class="container d-flex flex-column flex-lg-row justify-content-center justify-content-lg-between align-items-center">

                <div class="d-flex flex-column align-items-center align-items-lg-start">
                    <div class="copyright">
                        &copy; Copyright <strong><span>HeroBiz</span></strong>. Tous droits réservés.
                    </div>
                    <div class="credits">
                        <!-- All the links in the footer should remain intact. -->
                        <!-- You can delete the links only if you purchased the pro version. -->
                        <!-- Licensing information: https://bootstrapmade.com/license/ -->
                        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/herobiz-bootstrap-business-template/ -->
                        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
                    </div>
                </div>

                <div class="social-links order-first order-lg-last mb-3 mb-lg-0">
                    <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                    <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                    <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                    <a href="#" class="google-plus"><i class="bi bi-skype"></i></a>
                    <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
                </div>

            </div>
        </div>

    </footer><!-- End Footer -->

    <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <div id="preloader"></div>

    <!-- Vendor JS Files -->
    <script src="<?php echo  site_url() ?>assets/js/bootstrap.bundle.min.js"></script>
    <script src="<?php echo  site_url() ?>assets/vendors/aos/aos.js"></script>
    <script src="<?php echo  site_url() ?>assets/vendors/glightbox/js/glightbox.min.js"></script>
    <script src="<?php echo  site_url() ?>assets/vendors/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="<?php echo  site_url() ?>assets/vendors/swiper/swiper-bundle.min.js"></script>
    <script src="<?php echo  site_url() ?>assets/vendors/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="<?php echo  site_url() ?>assets/js/main-fo.js"></script>
    <script src="<?php echo  site_url() ?>assets/js/index.js"></script>


    <script>
    function hover(id) {
        // var elements = document.getElementsByClassName("featured" + id);
        var element = document.getElementById("featured" + id);

        element.classList.add("featured");
    }

    function removehover(id) {
        var element = document.getElementById("featured" + id);
        element.classList.remove("featured");
    }
    </script>
</body>

</html>