<!DOCTYPE html>
<html lang="en">

<?php include_once('config/head.php'); ?>

<body class="starter-page-page">

    <?php include_once('config/header.php'); ?>

    <main class="main">

        <!-- Page Title -->
        <div class="page-title" data-aos="fade">
            <div class="container d-lg-flex justify-content-between align-items-center">
                <h1 class="mb-2 mb-lg-0">Starter Page</h1>
                <nav class="breadcrumbs">
                    <ol>
                        <li><a href="index.html">Home</a></li>
                        <li class="current">Starter Page</li>
                    </ol>
                </nav>
            </div>
        </div><!-- End Page Title -->

        <!-- Contact Section -->
        <section id="contact" class="contact section">
            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>แบบฟอร์มการรับบริการ</h2>
                <p>หน่วยสื่อสารและภาพลักษณ์องค์กร</p>
            </div><!-- End Section Title -->

            <div class="container" data-aos="fade-up" data-aos-delay="100">
                <div class="col-lg-12">
                    <div class="formbold-form-wrapper">
                        <form action="" method="POST">
                            <div class="formbold-steps">
                                <ul>
                                    <li class="formbold-step-menu1 active">
                                        <span>1</span>
                                        Sign Up
                                    </li>
                                    <li class="formbold-step-menu2">
                                        <span>2</span>
                                        Message
                                    </li>
                                    <li class="formbold-step-menu3">
                                        <span>3</span>
                                        Confirm
                                    </li>
                                </ul>
                            </div>

                            <div class="formbold-form-step-1 active">
                                <div class="formbold-input-flex">
                                    <div>
                                        <label for="fullname" class="formbold-form-label">ชื่อ-สกุล</label>
                                        <input type="text" name="fullname" placeholder="ชื่อ-สกุล" id="fullname" class="formbold-form-input" />
                                    </div>
                                    <div>
                                        <label for="department" class="formbold-form-label">หน่วยงาน/สำนักวิชา</label>
                                        <select name="department" id="department" class="formbold-form-input">
                                            <option value="">กรุณาเลือกหน่วยงาน/สำนักวิชา</option>
                                            <option value="คณะพยาบาลศาสตร์">คณะพยาบาลศาสตร์</option>
                                            <option value="คณะแพทยศาสตร์">คณะแพทยศาสตร์</option>
                                            <option value="คณะวิศวกรรมศาสตร์">คณะวิศวกรรมศาสตร์</option>
                                            <option value="คณะวิทยาศาสตร์">คณะวิทยาศาสตร์</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="formbold-input-flex">
                                    <div>
                                        <label for="tel" class="formbold-form-label">โทรศัพท์</label>
                                        <input type="number" name="tel" placeholder="โทรศัพท์" id="tel" class="formbold-form-input" />
                                    </div>
                                    <div>
                                        <label for="personnel" class="formbold-form-label">บุคลากร</label>
                                        <select name="personnel" id="personnel" class="formbold-form-input">
                                            <option value="">บุคลากร</option>
                                            <option value="บุคลากรสายวิชาการ">บุคลากรสายวิชาการ</option>
                                            <option value="บุคลากรสายสนับสนุน">บุคลากรสายสนับสนุน</option>
                                            <option value="นักศึกษา">นักศึกษา</option>
                                        </select>
                                    </div>
                                </div>
                                <hr>
                                <div>
                                    <label for="tel" class="formbold-form-label">ประชาสัมพันธ์ข่าวสาร/กิจกรรม ผ่าน</label>
                                    <select name="social[]" id="countries" class="formbold-form-input" multiple>
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
                                <hr>
                                <div class="formbold-input-flex-radio row">
                                    <div class="col-6 col-md-6">
                                        <input type="radio" name="option" id="option_file" class="formbold-form-input" />
                                        <label for="option_file" class="formbold-form-label">อัปโหลดไฟล์</label>
                                        <div class="col-12 col-md-12" id="fileUploadDiv" style="display: none;">
                                            <input type="file" name="fileToUpload1" placeholder="fileToUpload1" class="formbold-form-input" />
                                            <input type="file" name="fileToUpload2" placeholder="fileToUpload2" class="formbold-form-input" />
                                            <input type="file" name="fileToUpload3" placeholder="fileToUpload3" class="formbold-form-input" />
                                        </div>
                                    </div>
                                    <div class="col-6 col-md-6">
                                        <input type="radio" name="option" id="option_url" class="formbold-form-input" />
                                        <label for="option_url" class="formbold-form-label">แชร์ผ่าน OneDrive, GoogleDrive หรืออื่นๆ</label>
                                        <div class="col-12 col-md-12" id="fileUploadURLDiv" style="display: none;">
                                            <input type="text" name="fileToUploadURL" placeholder="fileToUploadURL" class="formbold-form-input" />
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <div class="formbold-input-flex">
                                    <div>
                                        <label for="title" class="formbold-form-label">หัวข้อข่าว</label>
                                        <input type="text" name="title" placeholder="หัวข้อข่าว" id="title" class="formbold-form-input" />
                                    </div>
                                    <div>
                                        <label for="details" class="formbold-form-label">รายละเอียดข่าว (รายละเอียดอื่นๆ)</label>
                                        <input type="text" name="details" placeholder="รายละเอียดข่าว (รายละเอียดอื่นๆ)" id="details" class="formbold-form-input" />
                                    </div>
                                </div>
                                <div class="formbold-input-flex">
                                    <div>
                                        <label for="date_a" class="formbold-form-label">วันที่ต้องการใช้งาน</label>
                                        <input type="date" name="date_a" placeholder="วันที่ต้องการใช้งาน" id="date_a" class="formbold-form-input" />
                                    </div>
                                    <div>
                                        <label for="communicate" class="formbold-form-label">หมวดการสื่อสาร</label>
                                        <select name="communicate" id="communicate" class="formbold-form-input">
                                            <option value="ด้านผู้บริหาร">ด้านผู้บริหาร</option>
                                            <option value="ด้านบุคลากร">ด้านบุคลากร</option>
                                            <option value="ด้านผลิตภัณฑ์ (การศึกษา การวิจัย บริการวิชาการ)">ด้านผลิตภัณฑ์ (การศึกษา การวิจัย บริการวิชาการ)</option>
                                            <option value="ประชุม / อบรม / สัมมนา">ประชุม / อบรม / สัมมนา</option>
                                            <option value="กิจกรรมที่สร้างสรรค์ต่อสังคม">กิจกรรมที่สร้างสรรค์ต่อสังคม</option>
                                            <option value="อื่นๆ">อื่นๆ</option>
                                        </select>
                                    </div>

                                </div>
                            </div>

                            <div class="formbold-form-step-2">
                                <div class="formbold-input-flex">
                                    <div>
                                        <label for="fullname_step2" class="formbold-form-label">ชื่อ-สกุล</label>
                                        <input type="text" name="fullname_step2" placeholder="ชื่อ-สกุล" id="fullname_step2" class="formbold-form-input" />
                                    </div>
                                    <div>
                                        <label for="department_step2" class="formbold-form-label">หน่วยงาน/สำนักวิชา</label>
                                        <input type="text" name="department_step2" placeholder="หน่วยงาน/สำนักวิชา" id="department_step2" class="formbold-form-input" />
                                    </div>
                                </div>
                                <div class="formbold-input-flex">
                                    <div>
                                        <label for="tel_step2" class="formbold-form-label">โทรศัพท์</label>
                                        <input type="text" name="tel_step2" placeholder="โทรศัพท์" id="tel_step2" class="formbold-form-input" />
                                    </div>
                                    <div>
                                        <label for="personnel_step2" class="formbold-form-label">บุคลากร</label>
                                        <input type="text" name="personnel_step2" placeholder="บุคลากร" id="personnel_step2" class="formbold-form-input" />
                                    </div>
                                </div>
                                <div class="formbold-input-flex">
                                    <div>
                                        <label for="social_step2" class="formbold-form-label">social</label>
                                        <input type="text" name="social_step2" placeholder="social" id="social_step2" class="formbold-form-input" />
                                    </div>
                                    <div>
                                        <label for="option_file_step2" class="formbold-form-label">option_file</label>
                                        <input type="text" name="option_file_step2" placeholder="option_file" id="option_file_step2" class="formbold-form-input" />
                                    </div>
                                </div>
                                <div class="col-12 col-md-12" class="formbold-input-flex">
                                    <label for="imagePreviewContainer" class="formbold-form-label">ตัวอย่างรูปภาพ</label>
                                    <div id="imagePreviewContainer">
                                    </div>
                                </div>
                                <div class="formbold-input-flex">
                                    <div>
                                        <label for="title_step2" class="formbold-form-label">หัวข้อข่าว</label>
                                        <input type="text" name="title_step2" placeholder="หัวข้อข่าว" id="title_step2" class="formbold-form-input" />
                                    </div>
                                    <div>
                                        <label for="details_step2" class="formbold-form-label">รายละเอียดข่าว (รายละเอียดอื่นๆ)</label>
                                        <input type="text" name="details_step2" placeholder="details" id="details_step2" class="formbold-form-input" />
                                    </div>
                                </div>
                                <div class="formbold-input-flex">
                                    <div>
                                        <label for="date_a_step2" class="formbold-form-label">วันที่ต้องการใช้งาน</label>
                                        <input type="text" name="date_a_step2" placeholder="วันที่ต้องการใช้งาน" id="date_a_step2" class="formbold-form-input" />
                                    </div>
                                    <div>
                                        <label for="communicate_step2" class="formbold-form-label">หมวดการสื่อสาร</label>
                                        <input type="text" name="communicate_step2" placeholder="หมวดการสื่อสาร" id="communicate_step2" class="formbold-form-input" />
                                    </div>
                                </div>
                            </div>

                            <div class="formbold-form-step-3">
                                <div class="formbold-form-confirm">
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.
                                    </p>

                                    <div>
                                        <button class="formbold-confirm-btn active">
                                            <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <circle cx="11" cy="11" r="10.5" fill="white" stroke="#DDE3EC" />
                                                <g clip-path="url(#clip0_1667_1314)">
                                                    <path d="M9.83343 12.8509L15.1954 7.48828L16.0208 8.31311L9.83343 14.5005L6.12109 10.7882L6.94593 9.96336L9.83343 12.8509Z" fill="#536387" />
                                                </g>
                                                <defs>
                                                    <clipPath id="clip0_1667_1314">
                                                        <rect width="14" height="14" fill="white" transform="translate(4 4)" />
                                                    </clipPath>
                                                </defs>
                                            </svg>
                                            Yes! I want it.
                                        </button>

                                        <button class="formbold-confirm-btn">
                                            <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <circle cx="11" cy="11" r="10.5" fill="white" stroke="#DDE3EC" />
                                                <g clip-path="url(#clip0_1667_1314)">
                                                    <path d="M9.83343 12.8509L15.1954 7.48828L16.0208 8.31311L9.83343 14.5005L6.12109 10.7882L6.94593 9.96336L9.83343 12.8509Z" fill="#536387" />
                                                </g>
                                                <defs>
                                                    <clipPath id="clip0_1667_1314">
                                                        <rect width="14" height="14" fill="white" transform="translate(4 4)" />
                                                    </clipPath>
                                                </defs>
                                            </svg>
                                            No! I don’t want it.
                                        </button>
                                    </div>
                                </div>
                            </div>

                            <div class="formbold-form-btn-wrapper">
                                <button class="formbold-back-btn">
                                    Back
                                </button>

                                <button class="formbold-btn">
                                    Next Step
                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <g clip-path="url(#clip0_1675_1807)">
                                            <path d="M10.7814 7.33312L7.20541 3.75712L8.14808 2.81445L13.3334 7.99979L8.14808 13.1851L7.20541 12.2425L10.7814 8.66645H2.66675V7.33312H10.7814Z" fill="white" />
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_1675_1807">
                                                <rect width="16" height="16" fill="white" />
                                            </clipPath>
                                        </defs>
                                    </svg>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <script>
            document.addEventListener("DOMContentLoaded", function() {
                const socialInput = document.querySelector('#social_step2');
                const highlightedTextDiv = document.querySelector('#highlightedText');

                socialInput.addEventListener('input', function() {
                    const text = socialInput.value;
                    highlightedTextDiv.innerHTML = highlightText(text);
                });

                function highlightText(text) {
                    // Replace '[]' with styled brackets
                    const highlighted = text.replace(/\[(.*?)\]/g, '<span class="highlight">[$1]</span>');
                    return highlighted;
                }
            });
        </script>
        <script>
            document.addEventListener("DOMContentLoaded", function() {
                const optionFileRadio = document.querySelector('#option_file');
                const optionUrlRadio = document.querySelector('#option_url');
                const fileUploadDiv = document.querySelector('#fileUploadDiv');
                const fileUploadURLDiv = document.querySelector('#fileUploadURLDiv');

                const imagePreviewContainer = document.querySelector('#imagePreviewContainer');

                optionFileRadio.addEventListener('change', function() {
                    fileUploadDiv.style.display = 'block';
                    fileUploadURLDiv.style.display = 'none';
                });

                optionUrlRadio.addEventListener('change', function() {
                    fileUploadDiv.style.display = 'none';
                    fileUploadURLDiv.style.display = 'block';
                });

                const fileInputs = fileUploadDiv.querySelectorAll('input[type="file"]');
                fileInputs.forEach(input => {
                    input.addEventListener('change', handleFileSelect);
                });

                function handleFileSelect(event) {
                    imagePreviewContainer.innerHTML = ''; // Clear previous previews

                    fileInputs.forEach(input => {
                        const files = input.files;

                        for (let i = 0; i < files.length; i++) {
                            const file = files[i];
                            const reader = new FileReader();

                            reader.onload = function(e) {
                                const img = document.createElement('img');
                                img.src = e.target.result;
                                img.style.maxWidth = '200px'; // Set a max width for the preview images
                                img.style.margin = '10px';
                                imagePreviewContainer.appendChild(img);
                            }

                            reader.readAsDataURL(file);
                        }
                    });
                }

                const stepMenuOne = document.querySelector('.formbold-step-menu1');
                const stepMenuTwo = document.querySelector('.formbold-step-menu2');
                const stepMenuThree = document.querySelector('.formbold-step-menu3');

                const stepOne = document.querySelector('.formbold-form-step-1');
                const stepTwo = document.querySelector('.formbold-form-step-2');
                const stepThree = document.querySelector('.formbold-form-step-3');

                const formSubmitBtn = document.querySelector('.formbold-btn');
                const formBackBtn = document.querySelector('.formbold-back-btn');

                formSubmitBtn.addEventListener("click", function(event) {
                    event.preventDefault();

                    if (stepMenuOne.classList.contains('active')) {
                        // Gather data from step 1
                        const fullname = document.querySelector('#fullname').value;
                        const department = document.querySelector('#department').value;
                        const tel = document.querySelector('#tel').value;
                        const personnel = document.querySelector('#personnel').value;
                        const socialSelect = document.querySelector('#countries');
                        const socialOptions = Array.from(socialSelect.selectedOptions).map(option => option.value);
                        const socialString = socialOptions.join(', ');
                        const title = document.querySelector('#title').value;
                        const details = document.querySelector('#details').value;
                        const date_a = document.querySelector('#date_a').value;
                        const communicate = document.querySelector('#communicate').value;

                        let optionFile = '';
                        if (optionFileRadio.checked) {
                            optionFile = 'Files: ' + Array.from(document.querySelectorAll('input[type="file"]'))
                                .map(fileInput => fileInput.value)
                                .filter(fileName => fileName)
                                .join(', ');
                        } else if (optionUrlRadio.checked) {
                            optionFile = 'URL: ' + document.querySelector('input[name="fileToUploadURL"]').value;
                        }

                        // Transfer data to step 2
                        document.querySelector('#fullname_step2').value = fullname;
                        document.querySelector('#department_step2').value = department;
                        document.querySelector('#tel_step2').value = tel;
                        document.querySelector('#personnel_step2').value = personnel;
                        document.querySelector('#social_step2').value = socialString;
                        document.querySelector('#option_file_step2').value = optionFile;
                        document.querySelector('#title_step2').value = title;
                        document.querySelector('#details_step2').value = details;
                        document.querySelector('#date_a_step2').value = date_a;
                        document.querySelector('#communicate_step2').value = communicate;

                        // Move to step 2
                        stepMenuOne.classList.remove('active');
                        stepMenuTwo.classList.add('active');

                        stepOne.classList.remove('active');
                        stepTwo.classList.add('active');

                        formBackBtn.classList.add('active');
                        formBackBtn.addEventListener("click", function(event) {
                            event.preventDefault();

                            stepMenuOne.classList.add('active');
                            stepMenuTwo.classList.remove('active');

                            stepOne.classList.add('active');
                            stepTwo.classList.remove('active');

                            formBackBtn.classList.remove('active');
                        });

                    } else if (stepMenuTwo.classList.contains('active')) {
                        stepMenuTwo.classList.remove('active');
                        stepMenuThree.classList.add('active');

                        stepTwo.classList.remove('active');
                        stepThree.classList.add('active');

                        formBackBtn.classList.add('active');
                        formSubmitBtn.textContent = 'Submit';
                    } else if (stepMenuThree.classList.contains('active')) {
                        document.querySelector('form').submit();
                    }
                });
            });
        </script>
    </main>

    <?php include_once('config/footer.php'); ?>

    <!-- Scroll Top -->
    <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Preloader -->
    <div id="preloader"></div>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

    <!-- Main JS File -->
    <script src="assets/js/main.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/habibmhamadi/multi-select-tag@latest/dist/js/multi-select-tag.js"></script>
    <script>
        new MultiSelectTag('countries') // id
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
</body>

</html>