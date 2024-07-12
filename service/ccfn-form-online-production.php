<?php
require_once '../oauth/sessionlogin.php'
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
                                    <label for="fullname" class="form-label"><?php echo $lang['fullname']; ?></label>
                                    <input type="text" name="fullname" id="fullname" class="form-control" value="<?php echo $prefix_th . ' ' . $fname_th . ' ' . $lname_th; ?>">
                                </div>

                                <div class="col-md-6">
                                    <label for="email" class="form-label"><?php echo $lang['email']; ?></label>
                                    <input type="email" class="form-control" name="email" id="email" value="<?php echo $cmu_account; ?>">
                                </div>

                                <div class="col-md-6">
                                    <label for="department" class="form-label"><?php echo $lang['department']; ?></label>
                                    <input type="text" class="form-control" name="department" id="department" value="<?php echo $job; ?>">
                                </div>

                                <div class="col-md-6">
                                    <label for="tel" class="form-label"><?php echo $lang['phone']; ?></label>
                                    <input type="text" class="form-control" name="tel" id="tel" value="<?php echo $tel_office; ?>">
                                </div>

                                <div class="col-md-6">
                                    <label for="personnel" class="form-label"><?php echo $lang['personnel']; ?></label>
                                    <input type="text" class="form-control" name="personnel" id="personnel" value="<?php echo $position_name; ?>">
                                </div>

                                <div class="col-md-6">
                                    <label for="social" class="form-label"><?php echo $lang['social']; ?></label>
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
                                        <option value="ป้ายดิจิทัล คณะ">ป้ายดิจิทัล</option>
                                        <option value="อื่นๆ">อื่นๆ</option>
                                    </select>
                                </div>

                                <div class="col-md-12">
                                    <input class="form-check-input" type="radio" name="option" id="sent_email" value="sent_email" checked>
                                    <label class="form-check-label" for="sent_email"><?php echo $lang['file_upload']; ?></label>
                                </div>
                                <div class="col-md-12">
                                    <input class="form-check-input" type="radio" name="option" id="sent_url" value="sent_url">
                                    <label class="form-check-label" for="sent_url"><?php echo $lang['url_upload']; ?></label>
                                </div>

                                <div class="col-md-6">
                                    <label for="date_a" class="form-label"><?php echo $lang['date_a']; ?></label>
                                    <input type="date" name="date_a" id="date_a" class="form-control">
                                </div>

                                <div class="col-md-6">
                                    <label for="communicate" class="form-label"><?php echo $lang['communicate']; ?></label>
                                    <select name="communicate" id="communicate" class="form-control">
                                        <option value=""><?php echo $lang['select'] . ' ' . $lang['communicate']; ?></option>
                                        <option value="ด้านผู้บริหาร"><?php echo $lang['comm1']; ?></option>
                                        <option value="ด้านบุคลากร"><?php echo $lang['comm2']; ?></option>
                                        <option value="ด้านผลิตภัณฑ์(การศึกษา การวิจัย บริการวิชาการ)"><?php echo $lang['comm3']; ?></option>
                                        <option value="ประชุม/อบรม/สัมมนา"><?php echo $lang['comm4']; ?></option>
                                        <option value="กิจกรรมที่สร้างสรรค์ต่อสังคม"><?php echo $lang['comm5']; ?></option>
                                        <option value="อื่นๆ">Other</option>
                                    </select>
                                </div>

                                <div class="col-md-12">
                                    <label for="production" class="form-label"><?php echo $lang['file_upload']; ?></label>
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
                                    <button type="submit"><?php echo $lang['submit']; ?></button>
                                </div>
                            </div>
                        </form>


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

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.all.min.js"></script>
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

            // ตรวจสอบวันที่ที่ช้ำกันเกิน 3 ครั้ง
            fetchUnavailableDates();

            dateInput.addEventListener('change', function() {
                checkDateAvailability(this.value);
            });
        });

        function fetchUnavailableDates() {
            var xhr = new XMLHttpRequest();
            xhr.open('POST', 'check_date_availability_p.php', true);
            xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
            xhr.onload = function() {
                if (xhr.status === 200) {
                    var unavailableDates = JSON.parse(xhr.responseText);
                    disableUnavailableDates(unavailableDates);
                }
            };
            xhr.send();
        }

        function disableUnavailableDates(unavailableDates) {
            var dateInput = document.getElementById('date_a');
            dateInput.addEventListener('input', function() {
                var selectedDate = new Date(this.value);
                var formattedDate = selectedDate.toISOString().split('T')[0];
                if (unavailableDates.includes(formattedDate)) {
                    Swal.fire({
                        icon: 'error',
                        title: 'วันที่เลือกไม่สามารถใช้งานได้',
                        text: 'เนื่องจาก วันที่เลือกมีจำนวนคำร้องขอเต็มแล้ว',
                        showConfirmButton: true,
                        confirmButtonText: 'ตกลง'
                    }).then(function() {
                        dateInput.value = ''; // ล้างค่า
                    });
                }
            });
        }
    </script>
</body>

</html>