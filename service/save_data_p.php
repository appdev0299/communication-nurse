<?php
include_once('../config/connect.php'); // Include database connection

// Check if form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Initialize an array to store missing fields
    $missing_fields = [];

    // Check each required field
    if (empty($_POST['fullname'])) {
        $missing_fields[] = "ชื่อ-สกุล";
    }

    if (empty($_POST['department'])) {
        $missing_fields[] = "ภาควิชา/หน่วยงาน";
    }

    if (empty($_POST['tel'])) {
        $missing_fields[] = "โทรศัพท์";
    }

    if (empty($_POST['personnel'])) {
        $missing_fields[] = "ประเภทบุคลากร";
    }

    if (empty($_POST['email'])) {
        $missing_fields[] = "อีเมล";
    }

    if (empty($_POST['social'])) {
        $missing_fields[] = "ช่องทางประชาสัมพันธ์";
    }

    if (empty($_POST['communicate'])) {
        $missing_fields[] = "หมวดการสื่อสาร";
    }

    // If any fields are missing, display an error and stop further execution
    if (!empty($missing_fields)) {
        $error_message = "รายละเอียด : " . implode(', ', $missing_fields);

        echo "
        <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css'>
        <script src='https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.all.min.js'></script>
        <script>
            Swal.fire({
                icon: 'error',
                title: 'กรุณากรอกข้อมูลให้ครบ',
                text: '$error_message',
                showConfirmButton: true,
                confirmButtonText: 'ตกลง'
            }).then(function() {
                window.history.back();
            });
        </script>";

        die(); // หยุดการทำงานต่อไป
    }

    $fullname = htmlspecialchars($_POST['fullname']);
    $department = htmlspecialchars($_POST['department']);
    $tel = htmlspecialchars($_POST['tel']);
    $personnel = htmlspecialchars($_POST['personnel']);
    $email = htmlspecialchars($_POST['email']);
    $option = htmlspecialchars($_POST['option']);
    $social = ''; // Initialize social as empty string

    // Process social checkbox array
    if (isset($_POST['social']) && is_array($_POST['social'])) {
        $social = implode(', ', $_POST['social']);
    }
    $date_a = htmlspecialchars($_POST['date_a']);
    $communicate = htmlspecialchars($_POST['communicate']);
    if ($option == 'send_email') {
        $file_dest = 'Email';
    } elseif ($option == 'send_url') {
        $file_dest = 'OneDrive or GoogleDrive';
    } else {
        $upload_dir = '../files/';
        $file_name = $_FILES['production']['name'];
        $file_tmp = $_FILES['production']['tmp_name'];
        $file_dest = $upload_dir . $file_name;

        // Move uploaded file to destination
        if (!move_uploaded_file($file_tmp, $file_dest)) {
            // File upload failed
            echo "
        <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css'>
        <script src='https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.all.min.js'></script>
        <script>
            Swal.fire({
                icon: 'error',
                title: 'กรุณาอัพโหลดไพล์',
                showConfirmButton: true
            }).then(function() {
                window.history.back();
            });
        </script>";
            die(); // Stop further execution
        }
    }
    function generateRandomString($length = 15)
    {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }
    try {
        $status_user = 1;
        $status_admin = 0;
        $status_ss = 0;
        $status_email = 0; // Initialize status_email as 0 (assuming it's an integer field)

        $ref = generateRandomString();

        // Prepare SQL statement for data insertion
        $stmt = $conn->prepare("INSERT INTO ccfn_form_p (fullname, department, tel, personnel, email, social, option, date_a, communicate, production_file, status_user, status_admin, status_ss, status_email, ref) 
                        VALUES (:fullname, :department, :tel, :personnel, :email, :social, :option, :date_a, :communicate, :production_file, :status_user, :status_admin, :status_ss, :status_email, :ref)");

        // Bind parameters
        $stmt->bindParam(':fullname', $fullname);
        $stmt->bindParam(':department', $department);
        $stmt->bindParam(':tel', $tel);
        $stmt->bindParam(':personnel', $personnel);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':social', $social);
        $stmt->bindParam(':option', $option);
        $stmt->bindParam(':date_a', $date_a);
        $stmt->bindParam(':communicate', $communicate);
        $stmt->bindParam(':production_file', $file_name); // Save just the file name to database
        $stmt->bindParam(':status_user', $status_user);
        $stmt->bindParam(':status_admin', $status_admin);
        $stmt->bindParam(':status_ss', $status_ss);
        $stmt->bindParam(':status_email', $status_email); // Correctly bind status_email
        $stmt->bindParam(':ref', $ref);

        // Execute SQL statement
        $stmt->execute();

        // Get the ID of the last inserted row
        $last_id = $conn->lastInsertId();

        // Extract file name for display
        $file_display_name = basename($file_name); // Get just the file name

        // Display success message using SweetAlert2
        echo "
<link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css'>
<script src='https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.all.min.js'></script>
<script>
    Swal.fire({
        position: 'top-end',
        icon: 'success',
        title: 'ส่งแบบฟอร์มร้องขอออกแบบสื่อประชาสัมพันธ์สำเร็จ',
        text: 'รายละเอียดไฟล์: $file_display_name',
        showConfirmButton: false,
        timer: 3000
    }).then(function() {
                    window.location.href = 'ccfn-form-online-status-p?id=$last_id&ref=$ref';
    });
</script>";
    } catch (PDOException $e) {
        // Display error message
        die("Error saving data: " . $e->getMessage());
    }
}
