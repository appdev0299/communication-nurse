<?php
require_once 'oauth/sessionlogin.php'
?>
<!DOCTYPE html>
<html lang="en">

<?php include_once('config/head.php'); ?>

<body class="index-page">

    <?php include_once('config/header.php'); ?>

    <main class="main">

        <script>
            setTimeout(function() {
                window.location.href = 'oauth/';
            }, 100);
        </script>

    </main>

    <?php include_once('config/footer.php'); ?>

    <!-- Scroll Top -->
    <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Preloader -->
    <div id="preloader"></div>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

    <!-- Main JS File -->
    <script src="assets/js/main.js"></script>

</body>

</html>