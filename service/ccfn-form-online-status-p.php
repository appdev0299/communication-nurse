<!DOCTYPE html>
<html lang="en">

<?php include_once('../config/head.php'); ?>


<body class="starter-page-page">

    <?php include_once('../config/header.php'); ?>


    <main class="main">

        <!-- Page Title -->
        <div class="page-title" data-aos="fade">
            <div class="container d-lg-flex justify-content-between align-items-center">
                <h1 class="mb-2 mb-lg-0">บริการออนไลน์</h1>
                <nav class="breadcrumbs">
                    <ol>
                        <li><a href="../hoem/index">หน้าหลัก</a></li>
                        <li class="current">บริการออนไลน์</li>
                    </ol>
                </nav>
            </div>
        </div>
        <!-- End Page Title -->
        <section id="service-details" class="service-details section">

            <div class="container">

                <div class="row gy-5">

                    <div class="col-lg-2" data-aos="fade-up" data-aos-delay="100">

                        <div class="service-box">
                            <h4>Download Catalog</h4>
                            <div class="download-catalog">
                                <a href="#"><i class="bi bi-filetype-pdf"></i><span>Catalog PDF</span></a>
                                <a href="#"><i class="bi bi-file-earmark-word"></i><span>Catalog DOC</span></a>
                            </div>
                        </div>

                    </div>
                    <?php
                    require_once '../config/connect.php';

                    if (isset($_GET['id'])) {
                        $id = $_GET['id'];

                        $stmt = $conn->prepare("SELECT * FROM ccfn_form_p WHERE id = :id");
                        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
                        $stmt->execute();
                        $row = $stmt->fetch(PDO::FETCH_ASSOC);



                    ?>
                        <div class="col-lg-10 ps-lg-5" data-aos="fade-up" data-aos-delay="200">
                            <div class="timeline-grid">
                                <div>
                                    <ul>
                                        <?php if ($row['status_user'] == 1) : ?>
                                            <li><i class="bi bi-check-circle"></i> <span>ร้องขอสำเร็จ</span></li>
                                        <?php elseif ($row['status_user'] == 0) : ?>
                                            <li><i class="bi bi-exclamation-circle"></i> <span>เกิดข้อผิดพลาด</span></li>
                                        <?php else : ?>
                                            <li><i class="bi bi-question-circle"></i> <span>สถานะไม่ทราบ</span></li>
                                        <?php endif; ?>
                                    </ul>
                                </div>
                                <div>
                                    <ul>
                                        <?php if ($row['status_admin'] == 1) : ?>
                                            <li><i class="bi bi-check-circle"></i> <span>ผ่านการตรวจสอบจากเจ้าหน้าที่</span></li>
                                        <?php elseif ($row['status_admin'] == 0) : ?>
                                            <li><i class="bi bi-exclamation-circle"></i> <span>ไม่ผ่านการตรวจสอบจากเจ้าหน้าที่</span></li>
                                        <?php else : ?>
                                            <li><i class="bi bi-question-circle"></i> <span>สถานะไม่ทราบ</span></li>
                                        <?php endif; ?>
                                    </ul>
                                </div>
                                <div>
                                    <ul>
                                        <?php if ($row['status_ss'] == 1) : ?>
                                            <li><i class="bi bi-check-circle"></i> <span>ร้องขอสำเร็จ</span></li>
                                        <?php elseif ($row['status_ss'] == 0) : ?>
                                            <li><i class="bi bi-exclamation-circle"></i> <span>เกิดข้อผิดพลาด</span></li>
                                        <?php else : ?>
                                            <li><i class="bi bi-question-circle"></i> <span>สถานะไม่ทราบ</span></li>
                                        <?php endif; ?>
                                    </ul>
                                </div>
                            </div>

                            <hr>
                            <h5><?= $row['fullname']; ?> | <?= $row['email']; ?></h5>
                            <p>
                                <?= $row['personnel']; ?> | <?= $row['department']; ?> | <?= $row['tel']; ?>
                            </p>
                            <hr>
                            <p>
                                ประชาสัมพันธ์สื่อผ่านช่องทาง : <?= $row['social']; ?>
                            </p>
                            <p>
                                หนวดการสื่อสาร : <?= $row['communicate']; ?>
                            </p>
                            <p>
                                เผยแพร่วันที่ : <?= $row['date_a']; ?>
                            </p>
             
                            <hr>
                        </div>
                    <?php
                    }
                    ?>
                </div>

            </div>

        </section>

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