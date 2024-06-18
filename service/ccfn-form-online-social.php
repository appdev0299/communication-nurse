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

        <!-- Starter Section Section -->
        <section id="contact" class="contact section">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>ประชาสัมพันธ์สื่อออนไลน์</h2>
                <p>เว็บไซต์, เฟซบุ๊ก, ทวิตเตอร์, อินสตาแกรม, ยูทูป</p>
            </div><!-- End Section Title -->

            <div class="container" data-aos="fade-up" data-aos-delay="100">
                <div class="row gy-4 mt-1">
                    <div class="col-lg-12">
                        <form method="post" class="php-email-form" enctype="multipart/form-data" data-aos-delay="400">
                            <div class="row gy-4">
                                <div class="col-md-6">
                                    <input type="text" name="fullname" id="fullname" class="form-control" placeholder="ชื่อ-สกุล">
                                </div>

                                <div class="col-md-6">
                                    <input type="email" class="form-control" name="email" id="email" placeholder="Your Email">
                                </div>

                                <div class="col-md-6">
                                    <select name="department" id="department" class="form-control">
                                        <option value="">กรุณาเลือกหน่วยงาน/สำนักวิชา</option>
                                        <option value="คณะพยาบาลศาสตร์">คณะพยาบาลศาสตร์</option>
                                        <option value="คณะแพทยศาสตร์">คณะแพทยศาสตร์</option>
                                        <option value="คณะวิศวกรรมศาสตร์">คณะวิศวกรรมศาสตร์</option>
                                        <option value="คณะวิทยาศาสตร์">คณะวิทยาศาสตร์</option>
                                    </select>
                                </div>

                                <div class="col-md-6">
                                    <input type="number" class="form-control" name="tel" id="tel" placeholder="โทรศัพท์">
                                </div>

                                <div class="col-md-6">
                                    <select name="personnel" id="personnel" class="form-control">
                                        <option value="">กรุณาเลือกข้อมูล บุคลากร</option>
                                        <option value="บุคลากรสายวิชาการ">บุคลากรสายวิชาการ</option>
                                        <option value="บุคลากรสายสนับสนุน">บุคลากรสายสนับสนุน</option>
                                        <option value="นักศึกษา">นักศึกษา</option>
                                    </select>
                                </div>

                                <div class="col-md-6">
                                    <select name="social[]" id="social" class="form-control" multiple placeholder="เลือกช่องทางสื่อสาร">
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
                                        <option value="ประกาศเสียงตามสาย">ประกาศเสียงตามสาย</option>
                                        <option value="ประสานงานสื่อมวลชนเพื่อร่วมทำข่าว">ประสานงานสื่อมวลชนเพื่อร่วมทำข่าว</option>
                                        <option value="อื่นๆ">อื่นๆ</option>
                                    </select>
                                </div>
                                <div class="col-md-12">
                                    <input class="form-check-input" type="radio" name="option" id="option_file" value="file">
                                    <label class="form-check-label" for="option_file">
                                        อัปโหลดไฟล์
                                    </label>
                                </div>
                                <div class="col-md-12">
                                    <input class="form-check-input" type="radio" name="option" id="option_url" value="url">
                                    <label class="form-check-label" for="option_url">
                                        แชร์ผ่าน OneDrive, GoogleDrive หรืออื่นๆ
                                    </label>
                                </div>

                                <div class="col-md-6" id="fileUploadDiv" style="display: none;">
                                    <input type="file" class="form-control" name="fileToUpload1" id="fileToUpload1" accept="image/*">
                                    <input type="file" class="form-control" name="fileToUpload2" id="fileToUpload2" accept="image/*">
                                    <input type="file" class="form-control" name="fileToUpload3" id="fileToUpload3" accept="image/*">
                                </div>

                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <img id="preview1" src="#" alt="Image Preview 1" style="max-width: 50%; display: none;">
                                        </div>
                                        <div class="col-md-4">
                                            <img id="preview2" src="#" alt="Image Preview 2" style="max-width: 50%; display: none;">
                                        </div>
                                        <div class="col-md-4">
                                            <img id="preview3" src="#" alt="Image Preview 3" style="max-width: 50%; display: none;">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6" id="fileUploadURLDiv" style="display: none;">
                                    <input type="text" class="form-control" name="upload_url" id="upload_url" placeholder="แชร์ผ่าน OneDrive, GoogleDrive หรืออื่นๆ">
                                </div>

                                <div class="col-md-6">
                                    <input type="date" name="date_a" id="date_a" placeholder="วันที่ต้องการใช้งาน" class="form-control">
                                </div>

                                <script>
                                    document.addEventListener('DOMContentLoaded', (event) => {
                                        var today = new Date();
                                        var minDate = new Date();
                                        minDate.setDate(minDate.getDate() + 1); // เพิ่ม 1 วันจากวันที่ปัจจุบัน

                                        today.setDate(today.getDate() + 3); // เพิ่ม 3 วันจากวันที่ปัจจุบัน
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



                                <div class="col-md-6">
                                    <select name="communicate" id="communicate" class="form-control">
                                        <option value="">กรุณาเลือกข้อมูล หมวดการสื่อสาร</option>
                                        <option value="ด้านผู้บริหาร">ด้านผู้บริหาร</option>
                                        <option value="ด้านบุคลากร">ด้านบุคลากร</option>
                                        <option value="ด้านผลิตภัณฑ์ (การศึกษา การวิจัย บริการวิชาการ)">ด้านผลิตภัณฑ์ (การศึกษา การวิจัย บริการวิชาการ)</option>
                                        <option value="ประชุม / อบรม / สัมมนา">ประชุม / อบรม / สัมมนา</option>
                                        <option value="กิจกรรมที่สร้างสรรค์ต่อสังคม">กิจกรรมที่สร้างสรรค์ต่อสังคม</option>
                                        <option value="อื่นๆ">อื่นๆ</option>
                                    </select>
                                </div>

                                <div class="col-md-6">
                                    <input type="text" name="title" id="title" class="form-control" placeholder="หัวข้อข่าว">
                                </div>

                                <div class="col-md-12">
                                    <textarea class="form-control" name="details" rows="6" placeholder="รายละเอียดข่าว"></textarea>
                                </div>

                                <div>
                                    <input type="hidden" name="status_user">
                                    <input type="hidden" name="status_admin">
                                    <input type="hidden" name="status_ss">
                                </div>

                                <div class="col-md-12 text-center">
                                    <div class="loading">Loading</div>
                                    <div class="error-message"></div>
                                    <div class="sent-message">Your message has been sent. Thank you!</div>
                                    <button type="submit">ยืนยันข้อมูล</button>
                                </div>
                            </div>
                        </form>
                        <?php include_once('save_data_s.php'); ?>
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
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const optionFile = document.getElementById('option_file');
            const optionURL = document.getElementById('option_url');
            const fileUploadDiv = document.getElementById('fileUploadDiv');
            const fileUploadURLDiv = document.getElementById('fileUploadURLDiv');

            optionFile.addEventListener('change', function() {
                if (optionFile.checked) {
                    fileUploadDiv.style.display = 'block';
                    fileUploadURLDiv.style.display = 'none';
                }
            });

            optionURL.addEventListener('change', function() {
                if (optionURL.checked) {
                    fileUploadDiv.style.display = 'none';
                    fileUploadURLDiv.style.display = 'block';
                }
            });
        });
    </script>
    <script>
        // เมื่อมีการเลือกไฟล์ภาพ
        document.getElementById('fileToUpload1').addEventListener('change', function(event) {
            previewImage(event, 'preview1');
        });

        document.getElementById('fileToUpload2').addEventListener('change', function(event) {
            previewImage(event, 'preview2');
        });

        document.getElementById('fileToUpload3').addEventListener('change', function(event) {
            previewImage(event, 'preview3');
        });

        // ฟังก์ชันสำหรับแสดงภาพตัวอย่าง
        function previewImage(event, previewId) {
            const file = event.target.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    const preview = document.getElementById(previewId);
                    preview.src = e.target.result;
                    preview.style.display = 'block';
                }
                reader.readAsDataURL(file);
            }
        }
    </script>
</body>

</html>