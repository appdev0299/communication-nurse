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

        <!-- Starter Section Section -->
        <section id="contact" class="contact section">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>ออกแบบสื่อประชาสัมพันธ์</h2>
                <p>อินโฟกราฟิก, โปสเตอร์, ป้ายรถไฟฟ้า, ป้ายไวนิล</p>
            </div><!-- End Section Title -->

            <div class="container" data-aos="fade-up" data-aos-delay="100">
                <div class="row gy-4 mt-1">
                    <div class="col-lg-12">
                        <form method="post" class="php-email-form" enctype="multipart/form-data" data-aos-delay="400">
                            <div class="row gy-4">
                                <div class="col-md-6">
                                    <label for="fullname" class="form-label">ชื่อ-สกุล</label>
                                    <input type="text" name="fullname" id="fullname" class="form-control">
                                </div>

                                <div class="col-md-6">
                                    <label for="email" class="form-label">อีเมล</label>
                                    <input type="email" class="form-control" name="email" id="email">
                                </div>

                                <div class="col-md-6">
                                    <label for="department" class="form-label">ภาควิชา/หน่วยงาน</label>
                                    <select name="department" id="department" class="form-control">
                                        <option value="">กรุณาเลือกข้อมูล</option>
                                        <option value="งานบริหารทั่วไป">งานบริหารทั่วไป</option>
                                        <option value="งานการเงินการคลังและพัสดุ">งานการเงิน การคลัง และพัสดุ</option>
                                        <option value="งานนโยบายและแผนและประกันคุณภาพการศึกษา">งานนโยบายและแผน และประกันคุณภาพการศึกษา</option>
                                        <option value="งานบริการการศึกษาและพัฒนาคุณภาพนักศึกษา">งานบริการการศึกษา และพัฒนาคุณภาพนักศึกษา</option>
                                        <option value="งานบริหารงานวิจัยบริการวิชาการและวิเทศสัมพันธ์">งานบริหารงานวิจัย บริการวิชาการ และวิเทศสัมพันธ์</option>
                                        <option value="ศูนย์บริการพยาบาล">ศูนย์บริการพยาบาล</option>
                                        <option value="ศูนย์ความเป็นเลิศทางการพยาบาล">ศูนย์ความเป็นเลิศทางการพยาบาล</option>
                                    </select>
                                </div>

                                <div class="col-md-6">
                                    <label for="tel" class="form-label">โทรศัพท์</label>
                                    <input type="number" class="form-control" name="tel" id="tel">
                                </div>

                                <div class="col-md-6">
                                    <label for="personnel" class="form-label">ประเภทบุคลากร</label>
                                    <select name="personnel" id="personnel" class="form-control">
                                        <option value="">กรุณาเลือกข้อมูล</option>
                                        <option value="บุคลากรสายวิชาการ">บุคลากรสายวิชาการ</option>
                                        <option value="บุคลากรสายสนับสนุน">บุคลากรสายสนับสนุน</option>
                                        <option value="นักศึกษา">นักศึกษา</option>
                                    </select>
                                </div>

                                <div class="col-md-6">
                                    <label for="social" class="form-label">ช่องทางประชาสัมพันธ์</label>
                                    <select name="social[]" id="social" class="form-control" multiple>
                                        <option value="Website คณะพยาบาลศาสตร์">Website</option>
                                        <option value="Facebook Official (TH)">Facebook Official (TH)</option>
                                        <option value="Facebook Official (Eng)">Facebook Official (Eng)</option>
                                        <option value="Line Official">Line Official</option>
                                        <option value="Email">Email</option>
                                        <option value="LinkedIn">LinkedIn</option>
                                        <option value="Twitter">Twitter</option>
                                        <option value="Instagram">Instagram</option>
                                        <option value="Youtube">Youtube</option>
                                        <option value="ป้ายดิจิทัล คณะ">ป้ายดิจิทัล คณะ</option>
                                        <option value="ป้ายประชาสัมพันธ์">ป้ายประชาสัมพันธ์</option>
                                        <option value="อื่นๆ">อื่นๆ</option>
                                    </select>
                                </div>

                                <div class="col-md-12">
                                    <input class="form-check-input" type="radio" name="option" id="sent_email" value="sent_email" checked>
                                    <label class="form-check-label" for="sent_email">ส่งไฟล์ผ่าน Email</label>
                                </div>
                                <div class="col-md-12">
                                    <input class="form-check-input" type="radio" name="option" id="sent_url" value="sent_url">
                                    <label class="form-check-label" for="sent_url">ส่งไฟล์ผ่าน OneDrive, GoogleDrive</label>
                                </div>

                                <div class="col-md-6">
                                    <label for="social" class="form-label">วันที่ต้องการใช้งาน</label>
                                    <input type="date" name="date_a" id="date_a" placeholder="วันที่ต้องการใช้งาน" class="form-control">
                                </div>

                                <div class="col-md-6">
                                    <label for="communicate" class="form-label">หมวดการสื่อสาร</label>
                                    <select name="communicate" id="communicate" class="form-control">
                                        <option value="">กรุณาเลือกข้อมูล หมวดการสื่อสาร</option>
                                        <option value="ด้านผู้บริหาร">ด้านผู้บริหาร</option>
                                        <option value="ด้านบุคลากร">ด้านบุคลากร</option>
                                        <option value="ด้านผลิตภัณฑ์(การศึกษา การวิจัย บริการวิชาการ)">ด้านผลิตภัณฑ์ (การศึกษา การวิจัย บริการวิชาการ)</option>
                                        <option value="ประชุม/อบรม/สัมมนา">ประชุม / อบรม / สัมมนา</option>
                                        <option value="กิจกรรมที่สร้างสรรค์ต่อสังคม">กิจกรรมที่สร้างสรรค์ต่อสังคม</option>
                                        <option value="อื่นๆ">อื่นๆ</option>
                                    </select>
                                </div>

                                <div class="col-md-12">
                                    <label for="social" class="form-label">แนบไฟล์เอกสาร</label>
                                    <input type="file" name="production" id="production" class="form-control">
                                </div>
                                <div>
                                    <input type="hidden" name="status_user">
                                    <input type="hidden" name="status_admin">
                                    <input type="hidden" name="status_ss">
                                </div>

                                <div class="col-md-12 text-center">
                                    <div class="loading">Loading</div>
                                    <div class="error-message"></div>
                                    <button type="submit">ยืนยันข้อมูล</button>
                                </div>
                            </div>
                        </form>

                        <script>
                            // Set min date and default date
                            document.addEventListener('DOMContentLoaded', (event) => {
                                var today = new Date();
                                var minDate = new Date();
                                minDate.setDate(minDate.getDate() + 1); // Add 1 day from today

                                today.setDate(today.getDate() + 3); // Add 3 days from today
                                var year = today.getFullYear();
                                var month = ('0' + (today.getMonth() + 1)).slice(-2);
                                var day = ('0' + today.getDate()).slice(-2);
                                var formattedDate = year + '-' + month + '-' + day;

                                var minYear = minDate.getFullYear();
                                var minMonth = ('0' + (minDate.getMonth() + 1)).slice(-2);
                                var minDay = ('0' + minDate.getDate()).slice(-2);
                                var formattedMinDate = minYear + '-' + minMonth + '-' + minDay;

                                var dateInput = document.getElementById('date_a');
                                dateInput.value = formattedDate;
                                dateInput.min = formattedMinDate;
                            });
                        </script>
                        <?php include_once('save_data_p.php'); ?>
                    </div><!-- End Contact Form -->

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
    <script src="https://cdn.jsdelivr.net/gh/habibmhamadi/multi-select-tag@3.0.1/dist/js/multi-select-tag.js"></script>
    <script>
        new MultiSelectTag('social') // id
    </script>
</body>

</html>