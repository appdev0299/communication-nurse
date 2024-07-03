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
                        <div class="card">
                            <h5 class="card-header">Bordered Table</h5>
                            <div class="card-body">
                                <div class="table-responsive text-nowrap">
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th>ลำดับ</th>
                                                <th>ชื่อ-สกุล</th>
                                                <th>โทรศัพท์</th>
                                                <th>Status</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody id="data-table-body">
                                            <!-- ข้อมูลจาก API จะถูกแสดงที่นี่ -->

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- / Content -->

                    <!-- Footer -->
                    <?php include_once('../config/footer.php'); ?>
                    <!-- / Footer -->

                    <div class="content-backdrop fade"></div>
                </div>
                <!-- Content wrapper -->
            </div>
            <!-- / Layout page -->
        </div>

        <!-- Overlay -->
        <div class="layout-overlay layout-menu-toggle"></div>
    </div>
    <!-- / Layout wrapper -->



    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->
    <script src="../assets/vendor/libs/jquery/jquery.js"></script>
    <script src="../assets/vendor/libs/popper/popper.js"></script>
    <script src="../assets/vendor/js/bootstrap.js"></script>
    <script src="../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>

    <script src="../assets/vendor/js/menu.js"></script>
    <!-- endbuild -->

    <!-- Vendors JS -->

    <!-- Main JS -->
    <script src="../assets/js/main.js"></script>

    <!-- Page JS -->

    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>

    <script>
        $(document).ready(function() {
            // ใช้ jQuery สำหรับดึงข้อมูลจาก API
            $.ajax({
                url: 'http://localhost/github-appdev/communication-nurse/dashboard/api.php', // URL ของ API ที่ใช้ดึงข้อมูล
                method: 'GET',
                dataType: 'json',
                success: function(response) {
                    // เรียกฟังก์ชันเพื่อแสดงข้อมูลในตาราง
                    displayData(response);
                },
                error: function(xhr, status, error) {
                    console.error('Error fetching data:', error);
                }
            });

            // ฟังก์ชันสำหรับแสดงข้อมูลในตาราง
            function displayData(data) {
                var tableBody = $('#data-table-body');
                tableBody.empty(); // ล้างข้อมูลที่อาจมีอยู่ในตารางก่อนหน้านี้

                $.each(data, function(index, item) {
                    var row = $('<tr>');

                    // เพิ่มคอลัมน์ "ลำดับ" โดยใช้ตัวแปร index + 1
                    row.append($('<td>').text(index + 1));

                    // เพิ่มคอลัมน์แต่ละคอลัมน์และเพิ่มข้อมูล
                    row.append($('<td>').text(item.fullname));
                    row.append($('<td>').text(item.tel));
                    row.append($('<td>').text(item.department));

                    // เพิ่มเมนูดรอปดาวน์เพื่อแก้ไขและลบ
                    var actionsCell = $('<td>');
                    var dropdown = $('<div>').addClass('dropdown');
                    var dropdownToggle = $('<button>').addClass('btn p-0 dropdown-toggle hide-arrow').attr('type', 'button').attr('data-bs-toggle', 'dropdown').html('<i class="bx bx-dots-vertical-rounded"></i>');
                    var dropdownMenu = $('<div>').addClass('dropdown-menu');

                    // สร้างลิงก์สำหรับแก้ไขและลบ โดยส่ง id ไปยังหน้า update-user.php
                    var editLink = $('<a>').addClass('dropdown-item').attr('href', 'update-user.php?id=' + item.id).html('<i class="bx bx-edit-alt me-1"></i> Edit');
                    var deleteLink = $('<a>').addClass('dropdown-item').attr('href', 'javascript:void(0);').html('<i class="bx bx-trash me-1"></i> Delete');

                    dropdownMenu.append(editLink);
                    dropdownMenu.append(deleteLink);
                    dropdown.append(dropdownToggle);
                    dropdown.append(dropdownMenu);
                    actionsCell.append(dropdown);
                    row.append(actionsCell);

                    // เพิ่มแถวลงในตาราง
                    tableBody.append(row);
                });
            }
        });
    </script>

</body>

</html>