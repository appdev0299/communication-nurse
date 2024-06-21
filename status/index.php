<!DOCTYPE html>
<html lang="en">

<?php include_once('../config/head.php'); ?>


<body class="starter-page-page">

    <?php include_once('../config/header.php'); ?>


    <main class="main">
        <!-- Page Title -->
        <div class="page-title" data-aos="fade">
            <div class="container d-lg-flex justify-content-between align-items-center">
                <h1 class="mb-2 mb-lg-0">ตรวจสถานะ</h1>
                <nav class="breadcrumbs">
                    <ol>
                        <li><a href="../home/index">หน้าหลัก</a></li>
                        <li class="current">ตรวจสถานะ</li>
                    </ol>
                </nav>
            </div>
        </div>
        <section id="service-details" class="service-details section">
            <div class="container">
                <div class="row gy-5">
                    <div class="col-lg-12" data-aos="fade-up" data-aos-delay="100">
                        <div class="service-box">
                            <h4>เลือกบริการ</h4>
                            <div class="row services-list">
                                <div class="col-6">
                                    <a id="service1" href="#"><i class="bi bi-arrow-right-circle"></i><span>ประชาสัมพันธ์สื่อออนไลน์</span></a>
                                </div>
                                <div class="col-6">
                                    <a id="service2" href="#"><i class="bi bi-arrow-right-circle"></i><span>ออกแบบสื่อประชาสัมพันธ์</span></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-12" data-aos="fade-up">
                        <table id="myTable" class="display nowrap dataTable dtr-inline collapsed" aria-describedby="example_info" style="width: 100%;">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>ผู้รับบริการ</th>
                                    <th>ช่องทางประชาสัมพันธ์</th>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- Data will be dynamically populated here -->
                            </tbody>
                        </table>

                    </div>
                </div>

                <script>
                    document.getElementById('service1').addEventListener('click', function(event) {
                        event.preventDefault();
                        fetchData('ประชาสัมพันธ์สื่อออนไลน์');
                    });

                    document.getElementById('service2').addEventListener('click', function(event) {
                        event.preventDefault();
                        fetchData('ออกแบบสื่อประชาสัมพันธ์');
                    });

                    function fetchData(service) {
                        var xhttp = new XMLHttpRequest();
                        xhttp.onreadystatechange = function() {
                            if (this.readyState == 4 && this.status == 200) {
                                var data = JSON.parse(this.responseText);
                                populateTable(data);
                            }
                        };
                        xhttp.open("GET", "fetch_data.php?service=" + encodeURIComponent(service), true);
                        xhttp.send();
                    }

                    function populateTable(data) {
                        var table = $('#myTable').DataTable();
                        table.clear().draw();

                        data.forEach(function(row, index) {
                            table.row.add([
                                index + 1,
                                row.fullname,
                                row.social
                            ]).draw(false);
                        });
                    }

                    $(document).ready(function() {
                        $('#myTable').DataTable({
                            // คุณสามารถเพิ่มตัวเลือก DataTable ที่ต้องการที่นี่
                            "paging": true,
                            "lengthChange": true,
                            "searching": true,
                            "ordering": true,
                            "info": true,
                            "autoWidth": false,
                            "responsive": true
                        });

                        // Load initial data
                        fetchData('ประชาสัมพันธ์สื่อออนไลน์');
                    });
                </script>


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