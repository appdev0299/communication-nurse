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
                        <div class="card" style="padding: 20px;">
                            <div class="table-responsive text-nowrap">
                                <table id="example" class="table table-borderless" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>ผู้ติดต่อ</th>
                                            <th>ตัวอย่างและเลขอ้างอิง</th>
                                            <th>Start date</th>
                                            <th>#</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        require_once '../../config/connect.php';
                                        $api_url = 'https://mis.nurse.cmu.ac.th/misnew/Personnel/GetPersonInfo';
                                        $curl = curl_init($api_url);
                                        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
                                        $response = curl_exec($curl);

                                        if (curl_errno($curl)) {
                                            echo 'Error:' . curl_error($curl);
                                            die();
                                        }

                                        curl_close($curl);
                                        $api_data = json_decode($response, true);
                                        $stmt = $conn->prepare("SELECT * FROM ccfn_form_s ORDER BY id DESC");
                                        $stmt->execute();
                                        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
                                        $countrow = 1;

                                        foreach ($result as $t1) {
                                            foreach ($api_data as $person) {
                                                if (isset($t1['email']) && $t1['email'] == $person['cmu_account']) {
                                        ?>
                                                    <tr>
                                                        <td><?= $countrow ?></td>
                                                        <td>
                                                            <ul class="list-unstyled users-list m-0 avatar-group d-flex align-items-center">
                                                                <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" class="avatar avatar-md pull-up" title="<?= $t1['department']; ?>">
                                                                    <img src="https://mis.nurse.cmu.ac.th/mis/images/person2/<?= $person['images'] ?>" alt="Avatar" class="rounded-circle" />
                                                                </li>
                                                                <li class="user-details" style="padding: 10px;">
                                                                    <strong><?= $t1['fullname']; ?></strong><br>
                                                                    อีเมล : <?= $t1['email']; ?><br>
                                                                    โทรศัพท์ : <?= $t1['tel']; ?>
                                                                </li>
                                                            </ul>
                                                        </td>
                                                        <td>
                                                            <ul class="list-unstyled users-list m-0 avatar-group d-flex align-items-center">
                                                                <li class="user-details" style="padding: 10px;">
                                                                    <strong><?= $t1['ref']; ?></strong><br>
                                                                </li>
                                                            </ul>
                                                        </td>
                                                        <td>
                                                            <?php
                                                            $status_user = $t1['status_user'];
                                                            if ($status_user == 0) {
                                                                echo '<span class="badge bg-label-primary me-1">คำร้องขอผิดพลาด</span>';
                                                            } elseif ($status_user == 1) {
                                                                echo '<span class="badge bg-label-secondary me-1">คำร้องสำเร็จ</span>';
                                                            } elseif ($status_user == 2) {
                                                                echo '<span class="badge bg-label-info me-1">ดำเนินการตามคำร้องขอ</span>';
                                                            } elseif ($status_user == 3) {
                                                                echo '<span class="badge bg-label-warning me-1">ส่งกลับเพื่อแก้ไข</span>';
                                                            } elseif ($status_user == 4) {
                                                                echo '<span class="badge bg-label-success me-1">ส่งมอบ</span>';
                                                            } else {
                                                                echo '<span class="badge bg-label-primary me-1">คำร้องขอผิดพลาด</span>';
                                                            }
                                                            ?>
                                                        </td>
                                                        <td>
                                                            <div class="dropdown">
                                                                <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                                                    <i class="bx bx-dots-vertical-rounded"></i>
                                                                </button>
                                                                <div class="dropdown-menu">
                                                                    <a class="dropdown-item" href="details-s?id=<?= $t1['id']; ?>?ref=<?= $t1['ref']; ?>"><i class="bx bx-edit-alt me-1"></i>เปิด</a>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                        <?php
                                                    $countrow++;
                                                }
                                            }
                                        }
                                        ?>
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>#</th>
                                            <th>ผู้ติดต่อ</th>
                                            <th>ตัวอย่างและเลขอ้างอิง</th>
                                            <th>Start date</th>
                                            <th>#</th>
                                        </tr>
                                    </tfoot>
                                </table>

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


    <script defer src="https://cdn.datatables.net/2.0.8/js/dataTables.js"></script>
    <script defer src="https://cdn.datatables.net/2.0.8/js/dataTables.bootstrap5.js"></script>
    <script>
        $(document).ready(function() {
            $('#example').DataTable();
        });
    </script>
</body>

</html>