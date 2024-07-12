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
                        <li class="current"><?php echo $lang['about1'] ?></li>
                    </ol>
                </nav>
            </div>
        </div>
        <!-- End Page Title -->

        <!-- Starter Section Section -->
        <section id="contact" class="contact section">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2><?php echo $lang['about1'] ?></h2>
                <p><?php echo $lang['social1'] ?></p>
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
                                    <label for="communicate" class="form-label"><?php echo $lang['communicate']; ?></label>
                                    <select name="communicate" id="communicate" class="form-control" onchange="changeSocialOptions(this.value)">
                                        <option value=""><?php echo $lang['select'] . ' ' . $lang['communicate']; ?></option>
                                        <option value="comm1"><?php echo $lang['comm1']; ?></option>
                                        <option value="comm2"><?php echo $lang['comm2']; ?></option>
                                        <option value="comm3"><?php echo $lang['comm3']; ?></option>
                                        <option value="comm4"><?php echo $lang['comm4']; ?></option>
                                        <option value="comm5"><?php echo $lang['comm5']; ?></option>
                                    </select>
                                </div>

                                <div class="col-md-6">
                                    <label class="form-label"><?php echo $lang['social']; ?></label>
                                    <div id="social-options" class="form-group"></div>
                                </div>

                                <div class="col-md-12">
                                    <input class="form-check-input" type="radio" name="option" id="option_file" value="file">
                                    <label class="form-check-label" for="option_file">
                                        <?php echo $lang['file_upload']; ?>
                                    </label>
                                </div>

                                <div class="col-md-12">
                                    <input class="form-check-input" type="radio" name="option" id="option_url" value="url">
                                    <label class="form-check-label" for="option_url">
                                        <?php echo $lang['url_upload']; ?>
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
                                    <label for="upload_url" class="form-label"><?php echo $lang['url_upload']; ?></label>
                                    <input type="text" class="form-control" name="upload_url" id="upload_url">
                                </div>

                                <div class="col-md-6">
                                    <label for="date_a" class="form-label"><?php echo $lang['date_a']; ?></label>
                                    <input type="date" name="date_a" id="date_a" class="form-control">
                                </div>

                                <div class="col-md-6">
                                    <label for="title" class="form-label"><?php echo $lang['title']; ?></label>
                                    <input type="text" name="title" id="title" class="form-control">
                                </div>

                                <div class="col-md-12">
                                    <label for="details" class="form-label"><?php echo $lang['details']; ?></label>
                                    <textarea class="form-control" name="details" rows="6"></textarea>
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
                        <?php include_once('save_data_s.php'); ?>
                    </div>
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

    <script>
        const options = {
            comm1: ["Website", "Facebook Official (TH)", "Facebook Official (En)"],
            comm2: ["Website", "Facebook Official (TH)", "Facebook Official (En)"],
            comm3: ["Website", "Facebook Official (TH)", "Facebook Official (En)", "Line Official", "LinkedIn", "Instagram", "Twitter"],
            comm4: ["Line Official", "Website", "เสียงตามสาย", "ป้ายดิจิทัล"],
            comm5: ["Website", "Facebook Official (TH)", "Facebook Official (En)"]
        };

        function changeSocialOptions(value) {
            var socialOptions = document.getElementById("social-options");
            socialOptions.innerHTML = ""; // Clear previous options
            if (options[value]) {
                options[value].forEach(function(option) {
                    var checkbox = document.createElement("input");
                    checkbox.type = "checkbox";
                    checkbox.className = "form-check-input"; // Set the class here
                    checkbox.name = "social[]";
                    checkbox.value = option;
                    checkbox.id = option;

                    var label = document.createElement("label");
                    label.className = "form-check-label"; // Optionally set the label class
                    label.htmlFor = option;
                    label.appendChild(document.createTextNode(option));

                    var div = document.createElement("div");
                    div.className = "form-check"; // Optional div class for Bootstrap form-check
                    div.appendChild(checkbox);
                    div.appendChild(label);

                    socialOptions.appendChild(div);
                });
            }
        }
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
        });
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