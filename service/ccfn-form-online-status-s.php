<?php
require_once "../phpmailer/PHPMailerAutoload.php";
include_once '../config/connect.php';

// Check if ID is received via GET parameter
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    try {
        // Prepare SQL statement to fetch fullname based on the provided ID
        $stmt = $conn->prepare("SELECT fullname,email FROM ccfn_form_s WHERE id = :id");
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($result) {
            $fullname = $result['fullname'];
            $email_receiver = $result['email'];
            // Your existing PHPMailer setup continues here
            $mail = new PHPMailer;
            $mail->CharSet = "UTF-8";
            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com';
            $mail->Port = 587;
            $mail->SMTPSecure = 'tls';
            $mail->SMTPAuth = true;

            $gmail_username = "nursecmu.edonation@gmail.com";
            $gmail_password = "hhhp ynrg cqpb utzi";

            $sender = "noreply@NurseCMU E-Donation";
            $email_sender = "nursecmu.edonation@gmail.com";
            $email_receiver = $email_receiver;

            $subject = "Booking Id: $id NRC: New Booking"; // Modify the subject as needed

            $mail->Username = $gmail_username;
            $mail->Password = $gmail_password;
            $mail->setFrom($email_sender, $sender);
            $mail->addAddress($email_receiver);
            $mail->Subject = $subject;

            // Email content HTML
            $email_content = "
                <!DOCTYPE html>
                <html>
                <head>
                    <meta charset='utf-8'>
                </head>
                <body>
                    <h1 style='background: #FF6A00; padding: 10px 0 10px 10px; margin-bottom: 10px; font-size: 20px; color: white;'>
                        <p>Research Support Services Booking</p>
                    </h1>
                    <div style='padding: 20px;'>
                        <div style='margin-top: 10px;'>
                            <h3 style='font-size: 18px;'>Automatic e-mail booking confirmation research support services booking</h3>
                            <h4 style='font-size: 16px; margin-top: 10px;'>Dear Recipient</h4>
                            <p style='font-size: 16px; margin-top: 10px;'>Fullname: $fullname</p>
                        </div>

                        <div style='margin-top: 10px;'>
                        </div>
                    </div>
                    <div style='background: #FF6A00; color: #ffffff; padding: 30px;'>
                        <div style='text-align: center'>
                            2023 © Research Support Services Booking
                        </div>
                    </div>
                </body>
                </html>
            ";

            $mail->msgHTML($email_content);

            if (!$mail->send()) {
                echo "Email sending failed: " . $mail->ErrorInfo;
            } else {
                echo "Email sent successfully.";
            }
        } else {
            echo "Fullname not found for ID: $id";
        }
    } catch (PDOException $e) {
        echo "Error fetching fullname: " . $e->getMessage();
    }
} else {
    echo "ID parameter not found.";
}
?>

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
                        <li><a href="../home/index">หน้าหลัก</a></li>
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
                            <h4>ดาวน์โหลดแบบฟอร์ม</h4>
                            <div class="download-catalog">
                                <a href="#"><i class="bi bi-filetype-pdf"></i><span>แบบฟอร์มการรับบริการหน่วยสื่อสารและภาพลักษณ์องค์กร</span></a>
                            </div>
                        </div>

                    </div>
                    <?php
                    require_once '../config/connect.php';

                    if (isset($_GET['id'])) {
                        $id = $_GET['id'];

                        $stmt = $conn->prepare("SELECT * FROM ccfn_form_s WHERE id = :id");
                        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
                        $stmt->execute();
                        $row = $stmt->fetch(PDO::FETCH_ASSOC);

                        // ตรวจสอบว่าพบข้อมูลหรือไม่ก่อนแสดงผล
                        if ($row) {
                            $fileNames = explode(',', $row['file_names']); // แยกอาเรย์ของ file_names โดยใช้ comma (,) เป็นตัวแยก

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
                                            <?php elseif ($row['status_admin'] == 2) : ?>
                                                <!-- ปิดการแสดงผลเมื่อ status_admin เท่ากับ 2 -->
                                            <?php else : ?>
                                                <li><i class="bi bi-question-circle"></i> <span>สถานะไม่ทราบ</span></li>
                                            <?php endif; ?>
                                        </ul>
                                    </div>

                                    <div>
                                        <ul>
                                            <?php if ($row['status_ss'] == 1) : ?>
                                                <li><i class="bi bi-check-circle"></i> <span>สำเร็จ</span></li>
                                            <?php elseif ($row['status_ss'] == 0) : ?>
                                                <li><i class="bi bi-exclamation-circle"></i> <span>เกิดข้อผิดพลาด</span></li>
                                            <?php elseif ($row['status_ss'] == 2) : ?>
                                                <!-- ปิดการแสดงผลเมื่อ status_admin เท่ากับ 2 -->
                                            <?php else : ?>
                                                <li><i class="bi bi-question-circle"></i> <span>สถานะไม่ทราบ</span></li>
                                            <?php endif; ?>
                                        </ul>
                                    </div>
                                </div>

                                <hr>
                                <h5><?= $row['fullname']; ?> <?= $row['email']; ?></h5>
                                <p>
                                    <?= $row['personnel']; ?> <?= $row['department']; ?> | <?= $row['tel']; ?>
                                </p>
                                <hr>
                                <p>
                                    ประชาสัมพันธ์สื่อผ่านช่องทาง : <?= $row['social']; ?>
                                </p>
                                <p>
                                    หนวดการสื่อสาร : <?= $row['communicate']; ?>
                                </p>
                                <p>
                                    หัวข้อข่าว : <?= $row['title']; ?>
                                </p>
                                <p>
                                    รายละเอียดข่าว : <?= $row['details']; ?>
                                </p>
                                <p>
                                    เผยแพร่วันที่ : <?= $row['date_a']; ?>
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