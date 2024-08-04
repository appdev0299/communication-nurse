<?php
include_once('../config/connect.php');

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    try {
        // Query the record from the database
        $stmt = $conn->prepare("SELECT status_sendline_user, status_sendline_ss,fullname, email, ref, communicate, status_user,tel ,date_a FROM ccfn_form_p WHERE id = :id");
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);

        // Output result for debugging
        // echo '<pre>';
        // print_r($result);
        // echo '</pre>';

        $email = $result['email'];
        $ref = $result['ref'];
        $tel = $result['tel'];
        $fullname = $result['fullname'];
        $communicate = $result['communicate'];
        $status_user = $result['status_user'];
        $status_user_text = '';
        $communicate_text = '';

        // Prepare message text based on status_user and communicate fields
        switch ($status_user) {
            case 1:
                $status_user_text = 'คำร้องสำเร็จ';
                break;
            case 2:
                $status_user_text = 'กำเนินการตามคำร้องขอ';
                break;
            case 3:
                $status_user_text = 'ส่งกลับเพื่อแก้ไข';
                break;
            case 0:
                $status_user_text = 'คำร้องขอผิดพลาด';
                break;
            default:
                $status_user_text = 'สถานะไม่ทราบ';
                break;
        }

        if ($communicate == 'comm1') {
            $communicate_text = 'ด้านผู้บริหาร';
        } elseif ($communicate == 'comm2') {
            $communicate_text = 'ด้านบุคลากร';
        } elseif ($communicate == 'comm3') {
            $communicate_text = 'ด้านผลิตภัณฑ์ (การศึกษา การวิจัย บริการวิชาการ)';
        } elseif ($communicate == 'comm4') {
            $communicate_text = 'ประชุม / อบรม / สัมมนา';
        } elseif ($communicate == 'comm5') {
            $communicate_text = 'ทํานุบํารุงศิลปวัฒนธรรม และ สิ่งแวดลอม';
        } else {
            $communicate_text = 'ด้านไม่ทราบ';
        }

        // Convert date_a to Thai time format
        $dateTime = new DateTime($result['date_a'], new DateTimeZone('UTC')); // Assuming date_a is in UTC
        $dateTime->setTimezone(new DateTimeZone('Asia/Bangkok'));
        $formattedDateA = $dateTime->format('d/m/Y');

        $message = 'เลขอ้างอิง : ' . $ref . "\n" . 'วันที่ต้องการใช้ : ' . $formattedDateA;

        // Process the notification for status_sendline_user = 0
        if ($result['status_sendline_user'] == 0) {
            $curl = curl_init();
            curl_setopt_array($curl, array(
                CURLOPT_URL => 'https://mis.nurse.cmu.ac.th/LineConnext/API/SendLineOA',
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_ENCODING => '',
                CURLOPT_MAXREDIRS => 10,
                CURLOPT_TIMEOUT => 30,
                CURLOPT_FOLLOWLOCATION => true,
                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                CURLOPT_CUSTOMREQUEST => 'POST',
                CURLOPT_POSTFIELDS => json_encode(array(
                    'program' => 'บริการออกแบบสื่อประชาสัมพันธ์',
                    'email' => $email,
                    'message' => $message,
                    'weblink' => 'https://app.nurse.cmu.ac.th/appdev/communication-nurse',
                    'color' => '#0ead69'
                )),
                CURLOPT_HTTPHEADER => array(
                    'Authorization: FON_ConnectAPI01',
                    'Content-Type: application/json'
                ),
            ));

            $response = curl_exec($curl);

            if ($response === false) {
                echo "cURL Error: " . curl_error($curl);
            } else {
                echo $response;
            }
            curl_close($curl);

            // Update the status_sendline_user field to 1 after sending the notification
            $stmt = $conn->prepare("UPDATE ccfn_form_p SET status_sendline_user = 1 WHERE id = :id");
            $stmt->bindParam(':id', $id, PDO::PARAM_INT);
            $stmt->execute();
        }

        // Process the notification for status_sendline_ss = 0
        if ($result['status_sendline_ss'] == 0) {
            $email = 'phatcharapon.p@cmu.ac.th'; // Override email for this specific case
            $message = 'เลขอ้างอิง : ' . $ref . "\n" . 'วันที่ต้องการใช้ : ' . $formattedDateA . "\n" . 'คำขอจาก : ' . $fullname . "\n" . 'โทร : ' . $tel;
            $curl = curl_init();
            curl_setopt_array($curl, array(
                CURLOPT_URL => 'https://mis.nurse.cmu.ac.th/LineConnext/API/SendLineOA',
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_ENCODING => '',
                CURLOPT_MAXREDIRS => 10,
                CURLOPT_TIMEOUT => 30,
                CURLOPT_FOLLOWLOCATION => true,
                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                CURLOPT_CUSTOMREQUEST => 'POST',
                CURLOPT_POSTFIELDS => json_encode(array(
                    'program' => 'คำขอใหม่',
                    'email' => $email,
                    'message' => $message,
                    'weblink' => 'https://app.nurse.cmu.ac.th/appdev/communication-nurse',
                    'color' => '#415a77'
                )),
                CURLOPT_HTTPHEADER => array(
                    'Authorization: FON_ConnectAPI01',
                    'Content-Type: application/json'
                ),
            ));

            $response = curl_exec($curl);

            if ($response === false) {
                echo "cURL Error: " . curl_error($curl);
            } else {
                echo $response;
            }
            curl_close($curl);

            // Update the status_sendline_ss field to 1 after sending the notification
            $stmt = $conn->prepare("UPDATE ccfn_form_p SET status_sendline_ss = 1 WHERE id = :id");
            $stmt->bindParam(':id', $id, PDO::PARAM_INT);
            $stmt->execute();
        }
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }

    // Close the connection
    $conn = null;
} else {
    // Optionally, you can output a message or log if ID is not set
    // echo "ID not set.";
}
