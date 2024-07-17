<?php
require_once '../oauth/sessionlogin.php'
?>
<!DOCTYPE html>
<html lang="en">

<?php include_once('../config/head.php'); ?>

<body class="index-page">

    <?php include_once('../config/header.php'); ?>

    <main class="main">

        <section id="hero" class="hero section">
           
                <video autoplay muted loop width="100%" height="50%">
                    <source src="../assets/img/interconference_Final.mp4" type="video/mp4">
                </video>
       
        </section>


        <!-- Features Details Section -->
        <section id="about" class="features-details section">
            <div class="container">
                <div class="row gy-4 justify-content-between features-item">

                    <div class="col-lg-5 d-flex align-items-center order-2 order-lg-1" data-aos="fade-up" data-aos-delay="100">

                        <div class="content">
                            <h3><?php echo $lang['title_m'] ?></h3>
                            <p>
                                <?php echo $lang['about'] ?> </p>
                            <ul>
                                <li><i class="bi bi-easel flex-shrink-0"></i><?php echo $lang['about1'] ?></li>
                                <li><i class="bi bi-patch-check flex-shrink-0"></i> <?php echo $lang['about2'] ?></li>
                            </ul>
                            <p></p>
                        </div>

                    </div>

                    <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-up" data-aos-delay="200">
                        <img src="../assets/img/features-3.jpg" class="img-fluid" alt="">
                    </div>

                </div><!-- Features Item -->

            </div>

        </section><!-- /Features Details Section -->

        <!-- Services Section -->
        <section id="services" class="services section">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2><?php echo $lang['services'] ?></h2>
            </div><!-- End Section Title -->

            <div class="container">

                <div class="row g-5">

                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                        <div class="service-item item-cyan position-relative">
                            <i class="bi bi-newspaper icon"></i>
                            <div>
                                <h3><?php echo $lang['about1'] ?></h3>
                                <p><?php echo $lang['social1'] ?></p>
                                <a href="../service/ccfn-form-online-social?lang=<?php echo $_SESSION['lang']; ?>" class="read-more stretched-link"><?php echo $lang['services']; ?> <i class="bi bi-arrow-right"></i></a>
                            </div>
                        </div>
                    </div><!-- End Service Item -->

                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
                        <div class="service-item item-orange position-relative">
                            <i class="bi bi-bounding-box-circles icon"></i>
                            <div>
                                <h3><?php echo $lang['about2'] ?></h3>
                                <p><?php echo $lang['social2'] ?></p>
                                <a href="../service/ccfn-form-online-production?lang=<?php echo $_SESSION['lang']; ?>" class="read-more stretched-link"><?php echo $lang['services']; ?> <i class="bi bi-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </section><!-- /Services Section -->

    </main>

    <?php include_once('../config/footer.php'); ?>

    <!-- Scroll Top -->
    <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Preloader -->
    <div id="preloader"></div>

    <!-- Vendor JS Files -->
    <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../assets/vendor/php-email-form/validate.js"></script>
    <script src="../assets/vendor/aos/aos.js"></script>
    <script src="../assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="../assets/vendor/swiper/swiper-bundle.min.js"></script>

    <!-- Main JS File -->
    <script src="../assets/js/main.js"></script>

</body>

</html>