<?php
include_once('../config/connect.php');

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    try {
        $stmt = $conn->prepare("SELECT status_sendline_user, email,ref, title,communicate, status_user FROM ccfn_form_s WHERE id = :id");
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($result['status_sendline_user'] == 0) {
            $email = $result['email'];
            $title = $result['title'];
            $status_user = $result['status_user'];
            $communicate = $result['communicate'];
            $status_user_text = '';
            $communicate_text = '';
            switch ($row['status_user']) {
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

            $message = $status_user_text .  "\n" . 'เลขอ้างอิง :  ' . $ref . "\n" . 'เรื่อง : ' . $title . "\n" . 'ด้าน : ' . $communicate_text;

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
                    'program' => 'บริการประชาสัมพันธ์สื่อออนไลน์',
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

            // อัปเดตสถานะการส่งไลน์ในฐานข้อมูล
            $stmt = $conn->prepare("UPDATE ccfn_form_s SET status_Sendline_user = 1 WHERE id = :id");
            $stmt->bindParam(':id', $id, PDO::PARAM_INT);
            $stmt->execute();
        } else {
            // echo "Status is already 1. No action needed.";
        }
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }

    // Close the connection
    $conn = null;
} else {
    // echo "ID not set.";
}
