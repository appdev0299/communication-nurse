<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $data = [
        'id' => $_GET['id'],
        'status_user' => $_POST['status_user'],
        'status_admin' => $_POST['status_admin'],
        'responsible_1' => $_POST['email_option']
    ];

    $stmt = $conn->prepare("UPDATE ccfn_form_p SET status_user=:status_user, status_admin=:status_admin, responsible_1=:responsible_1 WHERE id=:id");
    $stmt->bindParam(':id', $data['id'], PDO::PARAM_INT);
    $stmt->bindParam(':status_user', $data['status_user'], PDO::PARAM_INT);
    $stmt->bindParam(':status_admin', $data['status_admin'], PDO::PARAM_STR);
    $stmt->bindParam(':responsible_1', $data['responsible_1'], PDO::PARAM_STR);

    if ($stmt->execute()) {
        echo "
            <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/sweetalert2@11.7.27/dist/sweetalert2.min.css'>
            <script src='https://cdn.jsdelivr.net/npm/sweetalert2@11.7.27/dist/sweetalert2.all.min.js'></script>
            <script>
                Swal.fire({
                    title: 'สำเร็จ',
                    text: 'บันทึกข้อมูลเรียบร้อยแล้ว',
                    icon: 'success',
                    confirmButtonColor: '#003049',
                    confirmButtonText: 'ตกลง'
                }).then((result) => {
                    if (result.isConfirmed) {
                        window.location.href = window.location.href;
                    }
                });
            </script>
        ";
    } else {
        echo "
            <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/sweetalert2@11.7.27/dist/sweetalert2.min.css'>
            <script src='https://cdn.jsdelivr.net/npm/sweetalert2@11.7.27/dist/sweetalert2.all.min.js'></script>
            <script>
                Swal.fire({
                    title: 'ผิดพลาด',
                    text: 'เกิดข้อผิดพลาดในการบันทึกข้อมูล',
                    icon: 'error',
                    confirmButtonColor: '#003049',
                    confirmButtonText: 'ตกลง'
                });
            </script>
        ";
    }
}
