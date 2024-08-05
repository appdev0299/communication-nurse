<?php
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    try {
        $stmt = $conn->prepare("SELECT status_sendline_admin, communicate, email, responsible_1, ref, title, status_user, status_sendline_user, status_user2, status_user3, status_user4, date_a, status_admin FROM ccfn_form_s WHERE id = :id");
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);

        $email = $result['email'];
        $title = $result['title'];
        $ref = $result['ref'];
        $status_user = $result['status_user'];
        $communicate = $result['communicate'];
        $status_sendline_user = $result['status_sendline_user'];
        $status_user2 = $result['status_user2'];
        $status_user3 = $result['status_user3'];
        $status_user4 = $result['status_user4'];
        $status_admin = $result['status_admin'];
        $date_a = $result['date_a'];
        $responsible_1 = $result['responsible_1']; // เพิ่มฟิลด์ responsible_1

        if ($status_user == 2) {
            $email = $responsible_1; // ใช้ email จาก responsible_1
        }

        $status_user_text = '';
        $communicate_text = '';

        switch ($status_user) {
            case 1:
                $status_user_text = 'คำร้องสำเร็จ';
                break;
            case 2:
                $status_user_text = 'ดำเนินการตามคำร้องขอ';
                break;
            case 3:
                $status_user_text = 'ส่งกลับเพื่อแก้ไข';
                break;
            case 4:
                $status_user_text = 'ส่งมอบ';
                break;
            case 0:
                $status_user_text = 'คำร้องขอผิดพลาด';
                break;
            default:
                $status_user_text = 'สถานะไม่ทราบ';
                break;
        }

        switch ($communicate) {
            case 'comm1':
                $communicate_text = 'ด้านผู้บริหาร';
                break;
            case 'comm2':
                $communicate_text = 'ด้านบุคลากร';
                break;
            case 'comm3':
                $communicate_text = 'ด้านผลิตภัณฑ์ (การศึกษา การวิจัย บริการวิชาการ)';
                break;
            case 'comm4':
                $communicate_text = 'ประชุม / อบรม / สัมมนา';
                break;
            case 'comm5':
                $communicate_text = 'ทํานุบํารุงศิลปวัฒนธรรม และ สิ่งแวดลอม';
                break;
            default:
                $communicate_text = 'ด้านไม่ทราบ';
                break;
        }

        // Convert date_a to Thai time format
        $dateTime = new DateTime($date_a, new DateTimeZone('UTC'));
        $dateTime->setTimezone(new DateTimeZone('Asia/Bangkok'));
        $formattedDateA = $dateTime->format('d/m/Y H:i:s');

        $message1 = 'เลขอ้างอิง : ' . $ref . "\n" . 'เรื่อง : ' . $title . "\n" . 'วันที่ต้องการใช้ : ' . $formattedDateA . "\n" .  "\n" . '-ระบบการบริการออนไลน์ หน่วยสื่อสารและภาพลักษณ์องค์กร-';
        $message2 = 'เลขอ้างอิง : ' . $ref . "\n" . 'เรื่อง : ' . $title . "\n" . 'กำหนดส่งมอบ : ' . $formattedDateA . "\n" .  "\n" . '-ระบบการบริการออนไลน์ หน่วยสื่อสารและภาพลักษณ์องค์กร-';
        $message3 = 'เลขอ้างอิง : ' . $ref . "\n" . 'เรื่อง : ' . $title . "\n" . 'หมายเหตุ : ' . $status_admin . "\n" .  "\n" . '-ระบบการบริการออนไลน์ หน่วยสื่อสารและภาพลักษณ์องค์กร-';
        $message4 = 'เลขอ้างอิง : ' . $ref . "\n" . 'เรื่อง : ' . $title . "\n" . 'กำหนดส่งมอบ : ' . $formattedDateA . "\n" .  "\n" . '-ระบบการบริการออนไลน์ หน่วยสื่อสารและภาพลักษณ์องค์กร-';

        $color = '';
        $program = '';

        switch ($status_user) {
            case 1:
                if ($status_sendline_user == 0) {
                    $color = '#0ead69';
                    $program = 'บริการประชาสัมพันธ์สื่อออนไลน์';

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
                            'program' => $program,
                            'email' => $email,
                            'message' => $message1,
                            'weblink' => 'https://app.nurse.cmu.ac.th/appdev/communication-nurse',
                            'color' => $color
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
                    $stmt = $conn->prepare("UPDATE ccfn_form_s SET status_sendline_user = 1 WHERE id = :id");
                    $stmt->bindParam(':id', $id, PDO::PARAM_INT);
                    $stmt->execute();
                }
                break;

            case 2:
                if ($status_user2 == 0) {
                    $color = '#219ebc';
                    $program = 'มอบหมายงาน';

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
                            'program' => $program,
                            'email' => $email,
                            'message' => $message2,
                            'weblink' => 'https://app.nurse.cmu.ac.th/appdev/communication-nurse',
                            'color' => $color
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
                    $stmt = $conn->prepare("UPDATE ccfn_form_s SET status_user2 = 1 WHERE id = :id");
                    $stmt->bindParam(':id', $id, PDO::PARAM_INT);
                    $stmt->execute();
                }
                break;

            case 3:
                if ($status_user3 == 0) {
                    $color = '#c1121f';
                    $program = 'ส่งกลับเพื่อแก้ไข';

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
                            'program' => $program,
                            'email' => $email,
                            'message' => $message3,
                            'weblink' => 'https://app.nurse.cmu.ac.th/appdev/communication-nurse',
                            'color' => $color
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
                    $stmt = $conn->prepare("UPDATE ccfn_form_s SET status_user3 = 1 WHERE id = :id");
                    $stmt->bindParam(':id', $id, PDO::PARAM_INT);
                    $stmt->execute();
                }
                break;

            case 4:
                if ($status_user4 == 0) {
                    $color = '#fca311';
                    $program = 'ส่งมอบ';

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
                            'program' => $program,
                            'email' => $email,
                            'message' => $message4,
                            'weblink' => 'https://app.nurse.cmu.ac.th/appdev/communication-nurse',
                            'color' => $color
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
                    $stmt = $conn->prepare("UPDATE ccfn_form_s SET status_user4 = 1 WHERE id = :id");
                    $stmt->bindParam(':id', $id, PDO::PARAM_INT);
                    $stmt->execute();
                }
                break;
        }
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
} else {
    echo "ID not provided";
}
