<!DOCTYPE html>

<html lang="en" class="light-style layout-menu-fixed" dir="ltr" data-theme="theme-default" data-assets-path="../assets/" data-template="vertical-menu-template-free">

<?php include_once('../config/head.php'); ?>

<body>

    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">

            <?php include_once('../config/aside.php'); ?>

            <div class="layout-page">

                <?php include_once('../config/nav.php'); ?>
                <div class="content-wrapper">
                    <div class="container-xxl flex-grow-1 container-p-y">
                        <div class="row">
                            <div class="col-xxl">
                                <?php
                                require_once '../../config/connect.php';

                                if (isset($_GET['id'])) {
                                    $id = $_GET['id'];
                                    $stmt = $conn->prepare("SELECT * FROM ccfn_form_p WHERE id = :id");
                                    $stmt->bindParam(':id', $id, PDO::PARAM_INT);
                                    $stmt->execute();
                                    $row = $stmt->fetch(PDO::FETCH_ASSOC);

                                    if ($row) {
                                        $file = $row['production_file'];
                                        $file_path = '../../files/' . $file;
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
                                        <div class="card mb-4">
                                            <div class="card-header d-flex align-items-center justify-content-between">
                                                <h5 class="mb-0">เลขอ้างอิง : <?= htmlspecialchars($row['ref']); ?></h5>
                                            </div>
                                            <div class="card-body">
                                                <form method="post">
                                                    <div class="row mb-3">
                                                        <label class="col-sm-2 col-form-label" for="basic-default-name">ผู้ติดต่อ</label>
                                                        <div class="col-sm-10">
                                                            <input type="text" class="form-control" id="fullname" name="fullname" value="<?= htmlspecialchars($row['fullname']); ?>" />
                                                        </div>
                                                    </div>
                                                    <div class="row mb-3">
                                                        <label class="col-sm-2 col-form-label" for="basic-default-company">หน่วยงาน</label>
                                                        <div class="col-sm-10">
                                                            <input type="text" class="form-control" id="department" name="department" value="<?= htmlspecialchars($row['department']); ?>" />
                                                        </div>
                                                    </div>
                                                    <!-- <div class="row mb-3">
                                                        <label class="col-sm-2 col-form-label" for="basic-default-email">อีเมล</label>
                                                        <div class="col-sm-10">
                                                            <div class="input-group input-group-merge">
                                                                <input type="text" class="form-control" id="email" name="email" value="<?= htmlspecialchars($row['email']); ?>" />
                                                            </div>
                                                        </div>
                                                    </div> -->
                                                    <div class="row mb-3">
                                                        <label class="col-sm-2 col-form-label" for="basic-default-phone">โทรศัพท์</label>
                                                        <div class="col-sm-10">
                                                            <input type="text" class="form-control phone-mask" id="tel" name="tel" value="<?= htmlspecialchars($row['tel']); ?>" />
                                                        </div>
                                                    </div>
                                                    <div class="row mb-3">
                                                        <label class="col-sm-2 col-form-label" for="basic-default-Social">ขนาดสื่อ</label>
                                                        <div class="col-sm-10">
                                                            <input type="text" class="form-control Social-mask" id="social" name="social" value="<?= htmlspecialchars($row['social']); ?>" />
                                                        </div>
                                                    </div>
                                                    <div class="row mb-3">
                                                        <label class="col-sm-2 col-form-label" for="basic-default-communicate">หมวดการประชาสัมพันธ์</label>
                                                        <?php
                                                        $communicate_text = '';
                                                        if ($row['communicate'] == 'comm1') {
                                                            $communicate_text = 'ด้านผู้บริหาร';
                                                        } elseif ($row['communicate'] == 'comm2') {
                                                            $communicate_text = 'ด้านบุคลากร';
                                                        } elseif ($row['communicate'] == 'comm3') {
                                                            $communicate_text = 'ด้านผลิตภัณฑ์ (การศึกษา การวิจัย บริการวิชาการ)';
                                                        } elseif ($row['communicate'] == 'comm4') {
                                                            $communicate_text = 'ประชุม / อบรม / สัมมนา';
                                                        } elseif ($row['communicate'] == 'comm5') {
                                                            $communicate_text = 'ทํานุบํารุงศิลปวัฒนธรรม และ สิ่งแวดลอม';
                                                        }
                                                        ?>
                                                        <div class="col-sm-10">
                                                            <input type="text" class="form-control communicate-mask" id="communicate" name="communicate" value="<?= htmlspecialchars($communicate_text); ?>" />
                                                        </div>
                                                    </div>
                                                    <div class="row mb-3">
                                                        <label class="col-sm-2 col-form-label" for="basic-default-email">ส่งมอบผ่าน</label>
                                                        <div class="col-sm-10">
                                                            <input type="text" class="form-control email-mask" id="email" name="email" value="<?= htmlspecialchars($row['option']); ?> (<?= htmlspecialchars($row['email']); ?>)" />
                                                        </div>
                                                    </div>
                                                    <div class="row mb-3">
                                                        <label class="col-sm-2 col-form-label" for="basic-default-date">วันที่ต้องการประชาสัมพันธ์</label>
                                                        <div class="col-sm-10">
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
                                                            $hour = date('H', $timestamp);
                                                            $minute = date('i', $timestamp);

                                                            $formattedDate = $day . " " . $month . " " . $year . " เวลา " . $hour . ":" . $minute . " น.";
                                                            ?>
                                                            <input type="text" class="form-control date-mask mt-2" id="date_a" name="date_a" value="<?= htmlspecialchars($formattedDate); ?>" />
                                                        </div>
                                                    </div>

                                                    <div class="row mb-3">
                                                        <label class="col-sm-2 col-form-label" for="basic-default-img">URL</label>
                                                        <div class="col-lg-10">
                                                            <a href="<?= $file_link; ?>" target="_blank"> <i class="bi bi-filetype-pdf"></i><span> <?= htmlspecialchars($file); ?></span></a>
                                                        </div>
                                                    </div>

                                                    <hr class="m-0 mb-1" />
                                                    <div class="card-header d-flex align-items-center justify-content-between">
                                                        <h5 class="mb-0">ส่วนเจ้าหน้าที่</h5>
                                                    </div>
                                                    <div class="row mb-3">
                                                        <label class="col-sm-2 col-form-label" for="basic-default-date">สถานะ</label>
                                                        <div class="col-sm-10">
                                                            <select class="form-select" id="status_user" name="status_user" aria-label="Default select example">
                                                                <option value="1" <?= $row['status_user'] == 1 ? 'selected' : ''; ?>>คำร้องสำเร็จ</option>
                                                                <option value="2" <?= $row['status_user'] == 2 ? 'selected' : ''; ?>>ดำเนินการตามคำร้องขอ</option>
                                                                <option value="3" <?= $row['status_user'] == 3 ? 'selected' : ''; ?>>ส่งกลับเพื่อแก้ไข</option>
                                                                <option value="4" <?= $row['status_user'] == 4 ? 'selected' : ''; ?>>ส่งมอบ</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="row mb-3" id="status_admin" style="display: none;">
                                                        <label class="col-sm-2 col-form-label" for="basic-default-date">หมายเหตุ</label>
                                                        <div class="col-sm-10">
                                                            <input type="text" class="form-control" id="status_admin" name="status_admin" value="<?= $row['status_admin']; ?>" />
                                                        </div>
                                                    </div>

                                                    <div class="row mb-3" id="email_option_row" style="display: none;">
                                                        <label class="col-sm-2 col-form-label" for="email_option">มอบหมาย</label>
                                                        <div class="col-sm-10">
                                                            <select class="form-select" id="email_option" name="email_option" aria-label="Default select example">
                                                                <option value="<?= $row['responsible_1']; ?>"><?= $row['responsible_1']; ?></option>
                                                                <option value="supoj.c@cmu.ac.th">นาย สุพจน์ เชี่ยวชาญ</option>
                                                                <option value="komsan.singh@cmu.ac.th">Mr.Komsan Singhthong</option>
                                                                <option value="tharika.s@cmu.ac.th">นางสาว ฑริกา สร้อยสุวรรณ์</option>
                                                                <option value="phatcharapon.p@cmu.ac.th">นาย พัชรพล ปิงยศ</option>
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div class="row justify-content-end">
                                                        <div class="col-sm-10">
                                                            <button type="submit" class="btn btn-primary">ยืนยัน</button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                            <?php
                                            include_once('statusDB/updata_p.php');
                                            include_once('linenotify/lineoa_p.php');
                                            ?>
                                        </div>
                                <?php
                                    } else {
                                        echo '<p>ไม่พบข้อมูลที่ตรงกับ ID นี้</p>';
                                    }
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                    <?php include_once('../config/footer.php'); ?>
                    <div class="content-backdrop fade"></div>
                </div>
            </div>
        </div>
        <div class="layout-overlay layout-menu-toggle"></div>
    </div>

    <script src="../assets/vendor/libs/jquery/jquery.js"></script>
    <script src="../assets/vendor/libs/popper/popper.js"></script>
    <script src="../assets/vendor/js/bootstrap.js"></script>
    <script src="../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>

    <script src="../assets/vendor/js/menu.js"></script>
    <script src="../assets/js/main.js"></script>
    <script async defer src="https://buttons.github.io/buttons.js"></script>

    <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css" />
    <script>
        $(document).ready(function() {
            $("#user-list").DataTable();
        });
    </script>

    <script>
        document.getElementById('status_user').addEventListener('change', function() {
            var statusAdminRow = document.getElementById('status_admin');
            var emailOptionRow = document.getElementById('email_option_row');
            if (this.value == '2') {
                emailOptionRow.style.display = 'flex';
                statusAdminRow.style.display = 'none';
            } else if (this.value == '3') {
                statusAdminRow.style.display = 'flex';
                emailOptionRow.style.display = 'none';
            } else {
                emailOptionRow.style.display = 'none';
                statusAdminRow.style.display = 'none';
            }
        });

        // ตรวจสอบสถานะเมื่อโหลดหน้าเว็บ
        window.onload = function() {
            var statusUserSelect = document.getElementById('status_user');
            var statusAdminRow = document.getElementById('status_admin');
            var emailOptionRow = document.getElementById('email_option_row');
            if (statusUserSelect.value == '2') {
                emailOptionRow.style.display = 'flex';
                statusAdminRow.style.display = 'none';
            } else if (statusUserSelect.value == '3') {
                statusAdminRow.style.display = 'flex';
                emailOptionRow.style.display = 'none';
            } else {
                emailOptionRow.style.display = 'none';
                statusAdminRow.style.display = 'none';
            }
        };
    </script>
</body>

</html>