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

                            $stmt = $conn->prepare("SELECT * FROM ccfn_form_s WHERE email = :email");
                            $stmt->bindParam(':email', $cmu_account);
                            $stmt->execute();
                            $result = $stmt->fetchAll();
                            $result = array_reverse($result);
                            ?>

                            <div class="table-responsive">
                                <table id="myTable" class="table table-bordered" style="width: 100%;">
                                    <thead>
                                        <tr>
                                            <th>ลำดับ</th>
                                            <th>ข้อมูลติดต่อ</th>
                                            <th>หัวข้อ</th>
                                            <th>รายละเอียด</th>
                                            <th>เพิ่มเติม</th>
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
                                                        <div><strong><?php echo $t1['fullname']; ?> <?php echo $t1['department']; ?></strong></div>
                                                        <div><?php echo $t1['email']; ?> <?php echo $t1['tel']; ?></div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="table-cell-content">
                                                        <textarea class="form-control" style="height: 150px; width: 250px; border: none; resize: none;" disabled><?php echo $t1['title']; ?></textarea>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="table-cell-content">
                                                        <textarea class="form-control" style="height: 150px; width: 540px; border: none; resize: none;" disabled><?php echo $t1['details']; ?></textarea>
                                                        <div><?php echo $t1['social']; ?></div>
                                                    </div>
                                                </td>
                                                <td><a class="btn btn-primary" href="#" role="button">ตรวจสอบ</a></td>
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