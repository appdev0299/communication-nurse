<?php
require_once '../oauth/session.php'
?>
<!DOCTYPE html>
<html lang="en">

<?php include_once('../config/head.php'); ?>

<body class="index-page">

    <?php include_once('../config/header.php'); ?>

    <main class="main">

        <section id="hero" class="hero section">
            <div class="hero-bg">
                <img src="../assets/img/hero-bg-light.svg" alt="">
            </div>
            <div class="container text-center">
                <div class="d-flex flex-column justify-content-center align-items-center">
                    <h1 data-aos="fade-up"><span><?php echo $lang['title_m'] ?></span></h1>
                    <p data-aos="fade-up" data-aos-delay="100"><?php echo $lang['title1'] ?><br></p>
                    <div class="d-flex" data-aos="fade-up" data-aos-delay="200">
                    </div>
                </div>
            </div>

        </section>
        <section id="services" class="services section">
            <div class="container">
                <div class="row g-5">
                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                        <div class="service-item item-cyan position-relative">
                            <div>
                                <h3>โหมดผู้ใช้งาน</h3>
                                <a href="" class="read-more stretched-link">เลือก<i class="bi bi-arrow-right"></i></a>
                            </div>
                        </div>
                    </div><!-- End Service Item -->

                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
                        <div class="service-item item-orange position-relative">
                            <div>
                                <h3>โหมดผู้ดูแลระบบ</h3>
                                <a href="" class="read-more stretched-link">เลือก<i class="bi bi-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </section>

    </main>


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