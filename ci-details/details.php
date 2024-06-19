<!DOCTYPE html>
<html lang="en">

<?php include_once('../config/head.php'); ?>


<body class="starter-page-page">

    <?php include_once('../config/header.php'); ?>


    <main class="main">
        <!-- Page Title -->
        <div class="page-title" data-aos="fade">
            <div class="container d-lg-flex justify-content-between align-items-center">
                <h1 class="mb-2 mb-lg-0">Ci Brand</h1>
                <nav class="breadcrumbs">
                    <ol>
                        <li><a href="../home/index">หน้าหลัก</a></li>
                        <li class="current">Ci Brand</li>
                    </ol>
                </nav>
            </div>
        </div>
        <!-- End Page Title -->
        <!-- Service Details Section -->
        <section id="service-details" class="service-details section">

            <div class="container">
                <div class="row gy-5">
                    <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
                        <div class="service-box">
                            <h4>ตัวเลือก</h4>
                            <div class="services-list">
                                <?php
                                include_once('../config/connect.php');
                                $stmt = $conn->prepare("SELECT * FROM ci_brand");
                                $stmt->execute();
                                $result = $stmt->fetchAll();
                                foreach ($result as $t1) {
                                    $imageURL = "../assets/img/clients/" . $t1['img_file'];
                                    $filesURL = $t1['download'] ? "../assets/img/clients/" . $t1['download'] : ''; // Assume you have a download column in ci_brand table
                                ?>
                                    <a id="brand-<?= $t1['id']; ?>" class="brand-link" data-title="<?= $t1['title']; ?>" data-details="<?= $t1['details']; ?>" data-img="<?= $t1['img_file']; ?>" data-files="<?= $filesURL; ?>">
                                        <i class="bi bi-arrow-right-circle"></i>
                                        <span><?= $t1['header']; ?></span>
                                    </a>
                                <?php } ?>
                            </div>
                        </div>

                    </div>
                    <div class="col-lg-8 ps-lg-5" data-aos="fade-up" data-aos-delay="200" id="brand-details">
                        <img src="" alt="" class="img-fluid services-img" id="brand-img">
                        <h3 id="brand-title"></h3>
                        <p id="brand-details-text"></p>
                        <a href="" id="brand-files" class="btn btn btn-custom mt-3" download style="display: none;"><i class="bi bi-filetype-pdf"></i> Download File</a>
                    </div>
                </div>

                <script>
                    document.querySelectorAll('.brand-link').forEach(function(link) {
                        link.addEventListener('click', function() {
                            var title = this.getAttribute('data-title');
                            var details = this.getAttribute('data-details');
                            var img = this.getAttribute('data-img');
                            var files = this.getAttribute('data-files');

                            document.getElementById('brand-img').src = "../assets/img/clients/" + img;
                            document.getElementById('brand-title').textContent = title;
                            document.getElementById('brand-details-text').textContent = details;

                            var downloadLink = document.getElementById('brand-files');
                            if (files) {
                                downloadLink.href = files;
                                downloadLink.style.display = 'block';
                                downloadLink.innerHTML = '<i class="bi bi-file-earmark-zip"></i> Download File';
                            } else {
                                downloadLink.style.display = 'none';
                            }
                        });

                        // เพิ่ม event listener เพื่อเปลี่ยนสีเมื่อ hover
                        link.addEventListener('mouseover', function() {
                            var downloadLink = document.getElementById('brand-files');
                            downloadLink.classList.add('btn-hover');
                        });

                        // เพิ่ม event listener เพื่อกลับสู่สีเดิมเมื่อไม่ hover
                        link.addEventListener('mouseout', function() {
                            var downloadLink = document.getElementById('brand-files');
                            downloadLink.classList.remove('btn-hover');
                        });
                    });
                </script>


            </div>
        </section><!-- /Service Details Section -->
    </main>

    <?php include_once('../config/footer.php'); ?>


    <!-- Scroll Top -->
    <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Preloader -->
    <div id="preloader"></div>

    <!-- Vendor JS Files -->
    <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../assets/vendor/aos/aos.js"></script>
    <script src="../assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="../assets/vendor/swiper/swiper-bundle.min.js"></script>

    <!-- Main JS File -->
    <script src="../assets/js/main.js"></script>

</body>

</html>