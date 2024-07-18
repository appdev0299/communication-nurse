<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $data = [
        'id' => $_GET['id'],
        'status_user' => $_POST['status_user'],
        'status_admin' => $_POST['status_admin'],
        'responsible_1' => $_POST['email_option']
    ];

    $stmt = $conn->prepare("UPDATE ccfn_form_s SET status_user=:status_user, status_admin=:status_admin, responsible_1=:responsible_1 WHERE id=:id");
    $stmt->bindParam(':id', $data['id'], PDO::PARAM_INT);
    $stmt->bindParam(':status_user', $data['status_user'], PDO::PARAM_INT);
    $stmt->bindParam(':status_admin', $data['status_admin'], PDO::PARAM_STR);
    $stmt->bindParam(':responsible_1', $data['responsible_1'], PDO::PARAM_STR);

    if ($stmt->execute()) {
        echo "
            <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css'>
            <script src='https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.all.min.js'></script>
            <script>
                Swal.fire({
                    icon: 'success',
                    title: 'อัพเดทข้อมูลสำเร็จ',
                    showConfirmButton: false,
                    timer: 3000
                }).then(function() {
                    window.history.back();
                });
            </script>";
    } else {
        echo "
            <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css'>
            <script src='https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.all.min.js'></script>
            <script>
                Swal.fire({
                    icon: 'error',
                    title: 'เกิดข้อผิดพลาดในการอัพเดทข้อมูล',
                    showConfirmButton: false,
                    timer: 3000
                }).then(function() {
                    window.history.back();
                });
            </script>";
    }
}
