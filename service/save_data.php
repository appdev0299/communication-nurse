<?php
include_once('../config/connect.php'); // Include database connection

// Check if form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if option is set and valid
    if (isset($_POST['option']) && ($_POST['option'] == 'file' || $_POST['option'] == 'url')) {
        // Initialize variables
        $file_names_str = ''; // String to store file names for DB insertion
        $allowed_extensions = array('jpg', 'jpeg', 'png', 'gif'); // Example of allowed file extensions

        // Handle file upload if option is 'file'
        if ($_POST['option'] == 'file') {
            $file_names = []; // Array to store file names

            // Check and store uploaded file names
            for ($i = 1; $i <= 3; $i++) {
                if (isset($_FILES["fileToUpload$i"]['name']) && $_FILES["fileToUpload$i"]['name'] != '') {
                    // Generate a unique file name
                    $original_name = $_FILES["fileToUpload$i"]['name'];
                    $file_extension = pathinfo($original_name, PATHINFO_EXTENSION);

                    // Validate file extension
                    if (in_array($file_extension, $allowed_extensions)) {
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

        try {
            $status_user = 1;
            $status_admin = 0;
            $status_ss = 0;

            // Prepare SQL statement for data insertion
            $stmt = $conn->prepare("INSERT INTO ccfn_form (fullname, department, tel, personnel, email, social, `option`, title, details, date_a, communicate, file_names, upload_url, status_user, status_admin, status_ss) 
                                    VALUES (:fullname, :department, :tel, :personnel, :email, :social, :option, :title, :details, :date_a, :communicate, :file_names, :upload_url, :status_user, :status_admin, :status_ss)");

            // Bind parameters
            $stmt->bindParam(':fullname', $fullname);
            $stmt->bindParam(':department', $department);
            $stmt->bindParam(':tel', $tel);
            $stmt->bindParam(':personnel', $personnel);
            $stmt->bindParam(':email', $email); // Bind email parameter
            $stmt->bindParam(':social', $social);
            $stmt->bindParam(':option', $_POST['option']);
            $stmt->bindParam(':title', $title);
            $stmt->bindParam(':details', $details);
            $stmt->bindParam(':date_a', $date_a);
            $stmt->bindParam(':communicate', $communicate);
            $stmt->bindParam(':file_names', $file_names_str);
            $stmt->bindParam(':upload_url', $_POST['upload_url']);
            $stmt->bindParam(':status_user', $status_user);
            $stmt->bindParam(':status_admin', $status_admin);
            $stmt->bindParam(':status_ss', $status_ss);


            // Execute SQL statement
            $stmt->execute();

            // Get the ID of the last inserted row
            $last_id = $conn->lastInsertId();

            // Display success message using SweetAlert2
            echo "
            <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css'>
            <script src='https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.all.min.js'></script>
            <script>
                Swal.fire({
                    position: 'top-end',
                    icon: 'success',
                    title: 'ยืนยันการส่งแบบคำร้อง',
                    showConfirmButton: false,
                    timer: 3000
                }).then(function() {
                    window.location.href = 'ccfn-form-online-status?id=$last_id';
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
                    position: 'top-end',
                    icon: 'error',
                    title: 'แบบคำขอไม่ถูกต้องกรุณากรอกรายละเอียดให้ครบ',
                    showConfirmButton: false,
                    timer: 3500
                }).then(function() {
                    window.location.href = 'ccfn-form-online-social'; // Redirect to success page or any other page
                });
            </script>";
    }
}
