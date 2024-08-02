<?php
require_once '../oauth/sessionlogin.php'
?>
<!DOCTYPE html>
<html lang="en">

<?php include_once('../config/head.php'); ?>

<body class="starter-page-page">

    <?php include_once('../config/header.php'); ?>


    <main class="main">
        <div class="page-title" data-aos="fade">
            <div class="container d-lg-flex justify-content-between align-items-center">
                <h1 class="mb-2 mb-lg-0"><?php echo $lang['about3'] ?></h1>
                <nav class="breadcrumbs">
                    <ol>
                        <li><a href="../home/index?lang=<?php echo $_SESSION['lang']; ?>"><?php echo $lang['home'] ?></a></li>
                        <li class="current"><?php echo $lang['about3'] ?></li>
                    </ol>
                </nav>
            </div>
        </div>
        <?php include_once('../config/404.php'); ?>
    </main>

    <?php include_once('../config/footer.php'); ?>

    <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <div id="preloader"></div>

    <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../assets/vendor/aos/aos.js"></script>
    <script src="../assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="../assets/vendor/swiper/swiper-bundle.min.js"></script>

    <!-- Main JS File -->
    <script src="../assets/js/main.js"></script>
</body>

</html>