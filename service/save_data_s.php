<?php
include_once('../config/connect.php'); // Include database connection

// Check if form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
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

    if (empty($_POST['title'])) {
        $missing_fields[] = "หัวข้อข่าว";
    }
    if (empty($_POST['details'])) {
        $missing_fields[] = "รายละเอียดข่าว";
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
    // Check if option is set and valid
    if (isset($_POST['option']) && ($_POST['option'] == 'file' || $_POST['option'] == 'url')) {
        // Initialize variables
        $file_names_str = ''; // String to store file names for DB insertion
        $allowed_extensions = array('jpg', 'jpeg', 'png', 'gif'); // Example of allowed file extensions

        // Handle file upload if option is 'file'
        if ($_POST['option'] == 'file') {
            $file_names = []; // Array to store file names

            // Check and store uploaded file names
            for ($i = 1; $i <= 6; $i++) {
                if (isset($_FILES["fileToUpload$i"]['name']) && $_FILES["fileToUpload$i"]['name'] != '') {
                    // Generate a unique file name
                    $original_name = $_FILES["fileToUpload$i"]['name'];
                    $file_extension = pathinfo($original_name, PATHINFO_EXTENSION);

                    // Validate file extension
                    if (in_array(strtolower($file_extension), $allowed_extensions)) {
                        $unique_filename = uniqid('file_') . '.' . $file_extension;

                        // Move uploaded file to upload directory with unique name
                        if (move_uploaded_file($_FILES["fileToUpload$i"]['tmp_name'], '../upload/' . $unique_filename)) {
                            // Store the unique file name for database insertion
                            $file_names[] = $unique_filename;
                        } else {
                            die("Error uploading file $i.");
                        }
                    } else {
                        die("Invalid file extension for file $i.");
                    }
                }
            }
            $file_names_str = implode(', ', $file_names);
        }

        // Retrieve form data and sanitize
        $fullname = htmlspecialchars($_POST['fullname']);
        $department = htmlspecialchars($_POST['department']);
        $tel = htmlspecialchars($_POST['tel']);
        $personnel = htmlspecialchars($_POST['personnel']);
        $email = htmlspecialchars($_POST['email']); // Add email to variables

        // Process social checkbox array
        $social = '';
        if (isset($_POST['social']) && is_array($_POST['social'])) {
            $social = htmlspecialchars(implode(', ', $_POST['social']));
        }

        $title = htmlspecialchars($_POST['title']);
        $details = htmlspecialchars($_POST['details']);
        $date_a = htmlspecialchars($_POST['date_a']);
        $communicate = htmlspecialchars($_POST['communicate']);
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
            $status_user = 1; // ร้องขอสำเร็จ 0 1
            $status_sendline_user = 0; // ส่งlineหลังร้องขอเสร็จ 0 1
            $status_admin = 0; // รอแอดมินตรวจ 0 1
            $status_sendline_admin = 0; // ส่งlineหลังแอดมินตรวจ 0 1
            $status_ss = 0; // ทำงานเสร็จทั้งหมด 0 1
            $status_sendline_ss = 0; // ส่งlineหลังเสร็จทั้งหมด 0 1
            $status_email = 0; // ส่งเมล 0 1

            $ref = generateRandomString();

            // Prepare SQL statement for data insertion
            $stmt = $conn->prepare("INSERT INTO ccfn_form_s (fullname, department, tel, personnel, email, social, `option`, title, details, date_a, communicate, file_names, upload_url, status_user, status_sendline_user, status_admin, status_sendline_admin, status_ss, status_sendline_ss, status_email, ref) 
            VALUES (:fullname, :department, :tel, :personnel, :email, :social, :option, :title, :details, :date_a, :communicate, :file_names, :upload_url, :status_user, :status_sendline_user, :status_admin, :status_sendline_admin, :status_ss, :status_sendline_ss, :status_email, :ref)");

            // Bind parameters
            $stmt->bindParam(':fullname', $fullname);
            $stmt->bindParam(':department', $department);
            $stmt->bindParam(':tel', $tel);
            $stmt->bindParam(':personnel', $personnel);
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':social', $social);
            $stmt->bindParam(':option', $_POST['option']);
            $stmt->bindParam(':title', $title);
            $stmt->bindParam(':details', $details);
            $stmt->bindParam(':date_a', $date_a);
            $stmt->bindParam(':communicate', $communicate);
            $stmt->bindParam(':file_names', $file_names_str);
            $stmt->bindParam(':upload_url', $_POST['upload_url']);
            $stmt->bindParam(':status_user', $status_user);
            $stmt->bindParam(':status_sendline_user', $status_sendline_user);
            $stmt->bindParam(':status_admin', $status_admin);
            $stmt->bindParam(':status_sendline_admin', $status_sendline_admin);
            $stmt->bindParam(':status_ss', $status_ss);
            $stmt->bindParam(':status_sendline_ss', $status_sendline_ss);
            $stmt->bindParam(':status_email', $status_email);
            $stmt->bindParam(':ref', $ref);

            // Execute SQL statement
            $stmt->execute();

            // Get the ID of the last inserted row
            $last_id = $conn->lastInsertId();

            // Get the previous page's lang parameter if it exists
            $lang = isset($_SESSION['lang']) ? $_SESSION['lang'] : '';

            // Display success message using SweetAlert2
            echo "
            <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css'>
            <script src='https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.all.min.js'></script>
            <script>
                Swal.fire({
                    position: 'top-end',
                    icon: 'success',
                    title: 'ส่งแบบฟอร์มร้องขอประชาสัมพันธ์สำเร็จ',
                    showConfirmButton: false,
                    timer: 3000
                }).then(function() {
                    window.location.href = 'ccfn-form-online-status-s?id=$last_id&ref=$ref&lang=' + encodeURIComponent('$lang');
                });
            </script>";
        } catch (PDOException $e) {
            // Display error message
            die("Error saving data: " . $e->getMessage());
        }
    } else {
        echo "
        <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css'>
        <script src='https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.all.min.js'></script>
        <script>
            Swal.fire({
                icon: 'error',
                title: 'แบบคำขอไม่ถูกต้องกรุณากรอกรายละเอียดให้ครบ',
                text: 'เลือกตัวเลือก อัปโหลดไฟล์ หรือ แชร์ผ่าน OneDrive, GoogleDrive หรืออื่นๆ',
                showConfirmButton: true,
                confirmButtonText: 'ตกลง'
            }).then(function() {
                window.history.back();
            });
        </script>";
    }
}
