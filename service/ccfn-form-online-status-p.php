<?php include_once('sent-email-p.php'); ?>
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
                        <li class="current"><?php echo $lang['about2'] ?></li>
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
                        $id = $_GET['id'];
                        $ref = $_GET['ref'];

                        $stmt = $conn->prepare("SELECT * FROM ccfn_form_p WHERE id = :id");
                        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
                        $stmt->execute();
                        $row = $stmt->fetch(PDO::FETCH_ASSOC);

                        if ($row) {
                            $file = $row['production_file'];
                            $file_path = '../files/' . $file;
                            $status_user_text = '';
                            switch ($row['status_user']) {
                                case 1:
                                    $status_user_text = 'คำร้องสำเร็จ';
                                    break;
                                case 2:
                                    $status_user_text = 'ดำเนินการตามคำร้องขอ';
                                    break;
                                case 3:
                                    $status_user_text = 'ส่งกลับเพื่อแก้ไข';
                                    break;
                                case 0:
                                    $status_user_text = 'คำร้องขอผิดพลาด';
                                    break;
                                default:
                                    $status_user_text = 'สถานะไม่ทราบ';
                                    break;
                            }
                            if (file_exists($file_path)) {
                                $file_link = htmlspecialchars($file_path);
                            } else {
                                $file_link = '#';
                            }

                    ?>
                            <div class="col-lg-2" data-aos="fade-up" data-aos-delay="100">
                                <div class="service-box">
                                    <h4><?php echo $lang['dpdf'] ?></h4>
                                    <div class="download-catalog">
                                        <a href="pdf-form-p.php?id=<?= $id ?>&ref=<?= $ref ?>" target="_blank">
                                            <i class="bi bi-filetype-pdf"></i><span><?php echo $lang['pdf'] ?></span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-10 ps-lg-5" data-aos="fade-up" data-aos-delay="200">
                                <h5> <i class="bi bi-check-circle"></i> <?= $status_user_text; ?></h5>
                                <hr>
                                <h5><?= $row['fullname']; ?></h5>
                                <h6> <?= $row['email']; ?></h6>

                                <p>
                                    <?= $row['personnel']; ?> <?= $row['department']; ?> | <?= $row['tel']; ?>
                                </p>
                                <hr>
                                <p>
                                    <b><?php echo $lang['size'] ?> </b>: <?= htmlspecialchars($row['social']); ?>
                                </p>
                                <p>
                                    <b><?php echo $lang['communicate'] ?> </b>:
                                    <?php
                                    if ($row['communicate'] == "comm1") {
                                        echo "ด้านผู้บริหาร";
                                    } elseif ($row['communicate'] == "comm2") {
                                        echo "ด้านบุคลากร";
                                    } elseif ($row['communicate'] == "comm3") {
                                        echo "ด้านผลิตภัณฑ์ (การศึกษา การวิจัย บริการวิชาการ)";
                                    } elseif ($row['communicate'] == "comm4") {
                                        echo "ประชุม / อบรม / สัมมนา";
                                    } elseif ($row['communicate'] == "comm5") {
                                        echo "ทํานุบํารุงศิลปวัฒนธรรม และ สิ่งแวดลอม";
                                    } else {
                                        echo "ไม่ทราบ";
                                    }
                                    ?>
                                </p>
                                <p>
                                    <b>รายละเอียดไฟล์ : </b><a href="<?= $file_link; ?>" target="_blank"> <i class="bi bi-filetype-pdf"></i><span> <?= htmlspecialchars($file); ?></span></a>
                                </p>
                                <h5>
                                    <?php
                                    $months = [
                                        1 => 'มกราคม', 2 => 'กุมภาพันธ์', 3 => 'มีนาคม', 4 => 'เมษายน',
                                        5 => 'พฤษภาคม', 6 => 'มิถุนายน', 7 => 'กรกฎาคม', 8 => 'สิงหาคม',
                                        9 => 'กันยายน', 10 => 'ตุลาคม', 11 => 'พฤศจิกายน', 12 => 'ธันวาคม'
                                    ];

                                    $timestamp = strtotime($row['date_a']);
                                    $day = date('d', $timestamp);
                                    $month = $months[(int)date('m', $timestamp)];
                                    $year = date('Y', $timestamp) + 543;


                                    echo $lang['date_a'] . " : " . $day . " " . $month . " " . $year;
                                    ?>
                                </h5>
                                <hr>
                            </div>
                    <?php
                        } else {
                            echo '<p>ไม่พบข้อมูลที่ตรงกับ ID นี้</p>';
                        }
                    }
                    ?>
                </div>

            </div>

        </section>
        <?php include_once('linenotify/lineoa_1_p.php'); ?>
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