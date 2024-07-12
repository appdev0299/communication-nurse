<?php include_once('sent-email-s.php'); ?>
<!DOCTYPE html>
<html lang="en">

<?php include_once('../config/head.php'); ?>


<body class="starter-page-page">

    <?php include_once('../config/header.php'); ?>


    <main class="main">

        <!-- Page Title -->
        <div class="page-title" data-aos="fade">
            <div class="container d-lg-flex justify-content-between align-items-center">
                <h1 class="mb-2 mb-lg-0"><?php echo $lang['services'] ?></h1>
                <nav class="breadcrumbs">
                    <ol>
                        <li><a href="../home/index?lang=<?php echo $_SESSION['lang']; ?>"><?php echo $lang['home'] ?></a></li>
                        <li class="current"><?php echo $lang['about1'] ?></li>
                    </ol>
                </nav>
            </div>
        </div>
        <!-- End Page Title -->
        <section id="service-details" class="service-details section">

            <div class="container">

                <div class="row gy-5">

                    <?php
                    require_once '../config/connect.php';

                    if (isset($_GET['id'])) {
                        $$id = $_GET['id'];
                        $ref = $_GET['ref'];
                        $stmt = $conn->prepare("SELECT * FROM ccfn_form_s WHERE id = :id");
                        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
                        $stmt->execute();
                        $row = $stmt->fetch(PDO::FETCH_ASSOC);

                        // ตรวจสอบว่าพบข้อมูลหรือไม่ก่อนแสดงผล
                        if ($row) {
                            $fileNames = explode(',', $row['file_names']);
                            $status_user_text = '';
                            switch ($row['status_user']) {
                                case 1:
                                    $status_user_text = 'คำร้องสำเร็จ';
                                    break;
                                case 0:
                                    $status_user_text = 'คำร้องขอผิดพลาด';
                                    break;
                                default:
                                    $status_user_text = 'สถานะไม่ทราบ';
                                    break;
                            }
                    ?>

                            <div class="col-lg-2" data-aos="fade-up" data-aos-delay="100">
                                <div class="service-box">
                                    <h4><?php echo $lang['dpdf'] ?></h4>
                                    <div class="download-catalog">
                                        <a href="pdf-form-s.php?id=<?= $id ?>&ref=<?= $ref ?>" target="_blank">
                                            <i class="bi bi-filetype-pdf"></i><span><?php echo $lang['pdf'] ?></span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-10 ps-lg-5" data-aos="fade-up" data-aos-delay="200">
                                <div class="timeline-grid">
                                    <h5> <i class="bi bi-check-circle"></i> <?= $status_user_text; ?></h5>
                                </div>
                                <hr>
                                <h5><?= $row['fullname']; ?> <?= $row['email']; ?></h5>
                                <p>
                                    <?= $row['personnel']; ?> <?= $row['department']; ?> | <?= $row['tel']; ?>
                                </p>
                                <hr>
                                <p>
                                    <?php echo $lang['about1'] ?> : <?= $row['social']; ?>
                                </p>
                                <p>
                                    <?php echo $lang['communicate'] ?> : <?= $row['communicate']; ?>
                                </p>
                                <p>
                                    <?php echo $lang['title'] ?> : <?= $row['title']; ?>
                                </p>
                                <p>
                                    <?php echo $lang['details'] ?> : <?= $row['details']; ?>
                                </p>
                                <p>
                                    <?php echo $lang['date_a'] ?> : <?= date('d/m/Y', strtotime($row['date_a'])); ?>
                                </p>

                                <div class="row">
                                    <?php foreach ($fileNames as $fileName) : ?>
                                        <div class="col-lg-4">
                                            <img src="../upload/<?= trim($fileName); ?>" class="img-fluid services-img" alt="">
                                        </div>
                                    <?php endforeach; ?>
                                    <?php if (!empty($row['upload_url'])) : ?>
                                        <p>
                                            แชร์ผ่าน OneDrive, GoogleDrive หรืออื่นๆ : <a href="<?= $row['upload_url']; ?>" target="_blank"><?= $row['upload_url']; ?></a>
                                        </p>
                                    <?php endif; ?>
                                </div>
                                <hr>
                            </div>
                    <?php
                        } else {
                            echo "ไม่พบข้อมูลที่ค้นหา";
                        }
                    }
                    ?>
                </div>
            </div>
        </section>
        <?php include_once('../oauth/lineoa.php'); ?>
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