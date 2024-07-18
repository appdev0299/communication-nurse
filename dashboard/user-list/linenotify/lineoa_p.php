<?php
include_once('../../config/connect.php');

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    try {
        $stmt = $conn->prepare("SELECT status_sendline_admin, email, ref, status_user FROM ccfn_form_p WHERE id = :id");
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);

        // ตรวจสอบว่า status_user เท่ากับ 3 หรือไม่
        if ($result['status_user'] == 3) {
            // ตรวจสอบว่า status_sendline_admin เป็น 0 หรือไม่
            if ($result['status_sendline_admin'] == 0) {
                $email = $result['email'];
                $ref = $result['ref'];
                $status_user = $result['status_user'];
                $status_user_text = '';
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
                $message = $status_user_text . ' : ' . ' เลขอ้างอิง ' . $ref;

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
                        'color' => '#FF6A00'
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
                $stmt = $conn->prepare("UPDATE ccfn_form_p SET status_sendline_admin = 1 WHERE id = :id");
                $stmt->bindParam(':id', $id, PDO::PARAM_INT);
                $stmt->execute();
            } else {
                // echo "Status is already 1. No action needed.";
            }
        } else {
            // echo "Status user is not 3. No action needed.";
        }
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }

    // ปิดการเชื่อมต่อฐานข้อมูล
    $conn = null;
} else {
    echo "ID not set.";
}
