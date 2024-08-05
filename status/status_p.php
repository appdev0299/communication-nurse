<!DOCTYPE html>
<html lang="en">

<?php include_once('../config/head.php'); ?>


<body class="starter-page-page">

    <?php include_once('../config/header.php'); ?>


    <main class="main">
        <!-- Page Title -->
        <div class="page-title" data-aos="fade">
            <div class="container d-lg-flex justify-content-between align-items-center">
                <h1 class="mb-2 mb-lg-0"><?php echo $lang['check_status'] ?></h1>
                <nav class="breadcrumbs">
                    <ol>
                        <li><a href="../home/index?lang=<?php echo $_SESSION['lang']; ?>"><?php echo $lang['home'] ?></a></li>
                        <li class="current"><?php echo $lang['check_status'] ?></li>
                    </ol>
                </nav>
            </div>
        </div>
        <section id="service-details" class="service-details section">
            <div class="container">
                <div class="row gy-5">
                    <div class="col-lg-12" data-aos="fade-up" data-aos-delay="100">

                        <div class="service-box">
                            <?php
                            require_once '../config/connect.php';

                            $cmu_account = $_SESSION['login_info']['cmuitaccount'];

                            $stmt = $conn->prepare("SELECT * FROM ccfn_form_p WHERE email = :email");
                            $stmt->bindParam(':email', $cmu_account);
                            $stmt->execute();
                            $result = $stmt->fetchAll();
                            $result = array_reverse($result);
                            ?>

                            <div class="table-responsive">
                                <table id="myTable" class="table table-bordered" style="width: 100%;">
                                    <thead>
                                        <tr>
                                            <th><?php echo $lang['data1'] ?></th>
                                            <th><?php echo $lang['data2'] ?></th>
                                            <th><?php echo $lang['data3'] ?></th>
                                            <th><?php echo $lang['data5'] ?></th>
                                            <th>#</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $index = 1; // ตัวแปรสำหรับเก็บลำดับ
                                        foreach ($result as $t1) { ?>
                                            <tr>
                                                <td><?php echo $index++; ?></td>
                                                <td>
                                                    <div class="table-cell-content">
                                                        <div><b><?php echo htmlspecialchars($t1['fullname']); ?></b></div>
                                                        <div><?php echo htmlspecialchars($t1['email']); ?> <?php echo htmlspecialchars($t1['tel']); ?></div>
                                                        <div>
                                                            <?php
                                                            $status_user_text = '';
                                                            $badge_class = '';
                                                            switch ($t1['status_user']) {
                                                                case 1:
                                                                    $status_user_text = 'คำร้องสำเร็จ';
                                                                    $badge_class = 'bg-success';
                                                                    break;
                                                                case 2:
                                                                    $status_user_text = 'ดำเนินการตามคำร้องขอ';
                                                                    $badge_class = 'bg-primary';
                                                                    break;
                                                                case 3:
                                                                    $status_user_text = 'ส่งกลับเพื่อแก้ไข';
                                                                    $badge_class = 'bg-warning';
                                                                    break;
                                                                case 4:
                                                                    $status_user_text = 'ส่งมอบ';
                                                                    $badge_class = 'bg-info';
                                                                    break;
                                                                case 0:
                                                                    $status_user_text = 'คำร้องขอผิดพลาด';
                                                                    $badge_class = 'bg-danger';
                                                                    break;
                                                                default:
                                                                    $status_user_text = 'สถานะไม่ทราบ';
                                                                    $badge_class = 'bg-secondary';
                                                                    break;
                                                            }
                                                            ?>
                                                            <span class="badge <?php echo htmlspecialchars($badge_class); ?>"><?php echo htmlspecialchars($status_user_text); ?></span>
                                                        </div>
                                                    </div>
                                                </td>

                                                <td>
                                                    <p><a href="../files/<?php echo $t1['production_file']; ?>" target="_blank"> <i class="bi bi-filetype-pdf"></i><span> <?php echo $t1['production_file']; ?></span></a></p>
                                                </td>
                                                <td>
                                                    <p><?php echo $t1['created_at']; ?></p>
                                                </td>
                                                <td>
                                                    <div class="dropdown">
                                                        <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                                            <i class="bx bx-dots-vertical-rounded"></i>
                                                        </button>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item" href="../service/ccfn-form-online-status-s?id=<?php echo $t1['id']; ?>&ref=<?php echo $t1['ref']; ?>?lang=<?php echo $_SESSION['lang']; ?>"><i class="bx bx-edit-alt me-1"></i><?php echo $lang['data4'] ?></a>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
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

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready(function() {
            $("#myTable").DataTable();
        });
    </script>

</body>

</html>