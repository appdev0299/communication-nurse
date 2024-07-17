<?php
require_once "../phpmailer/PHPMailerAutoload.php";
include_once '../config/connect.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    try {
        // เตรียมการเชื่อมต่อฐานข้อมูล
        $stmt = $conn->prepare("SELECT fullname, email, status_email FROM ccfn_form_p WHERE id = :id");
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($result) {
            // ดึงข้อมูลจากฐานข้อมูล
            $fullname = $result['fullname'];
            $email_receiver = $result['email'];
            $status_email = $result['status_email'];

            // ตรวจสอบเงื่อนไข status_email
            if ($status_email == 0) {
                // ตั้งค่า PHPMailer
                $mail = new PHPMailer;
                $mail->CharSet = "UTF-8";
                $mail->isSMTP();
                $mail->Host = 'smtp.gmail.com';
                $mail->Port = 587;
                $mail->SMTPSecure = 'tls';
                $mail->SMTPAuth = true;

                $gmail_username = "nursecmu.edonation@gmail.com";
                $gmail_password = "hhhp ynrg cqpb utzi";

                $sender = "Communication-nurseCMU";
                $email_sender = "nursecmu.edonation@gmail.com";
                $subject = "no-reply"; // ปรับหัวเรื่องตามต้องการ

                $mail->Username = $gmail_username;
                $mail->Password = $gmail_password;
                $mail->setFrom($email_sender, $sender);
                $mail->addAddress($email_receiver);
                $mail->Subject = $subject;

                // เนื้อหาอีเมล
                $email_content = "
                    <!DOCTYPE html>
                    <html lang='th'>
                    <head>
                        <meta charset='UTF-8'>
                        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
                        <title>Centered Heading with Background</title>
                        <style>
                            body {
                                font-family: 'Noto Sans Thai', sans-serif;
                                background-color: #f4f4f4;
                                margin: 0;
                                padding: 0;
                            }
                            .container {
                                max-width: 600px;
                                margin: 0 auto;
                                background-color: #ffffff;
                                padding: 20px;
                                border: 1px solid #dddddd;
                            }
                            .header {
                                text-align: center;
                                padding: 10px 0;
                                border-bottom: 1px solid #dddddd;
                            }
                            .logo {
                                max-width: 150px;
                                margin-bottom: 10px;
                            }
                            .content {
                                padding: 20px;
                                line-height: 1.6;
                            }
                            .footer {
                                text-align: center;
                                padding: 10px 0;
                                border-top: 1px solid #dddddd;
                                font-size: 12px;
                                color: #999999;
                            }
                            .button {
                                display: inline-block;
                                padding: 10px 20px;
                                background-color: #007bff;
                                color: #ffffff;
                                text-decoration: none;
                                border-radius: 5px;
                            }
                        </style>
                        <link href='https://fonts.googleapis.com/css2?family=Noto+Sans+Thai:wght@100;300;400;500;700&display=swap' rel='stylesheet'>
                    </head>
                    <body>
                        <div class='container'>
                            <div class='header'>
                                <h1>ขอบคุณสำหรับการใช้บริการ</h1>
                            </div>
                            <div class='content'>
                                <p>สวัสดี $fullname</p>
                                <p>ขอบคุณสำหรับการใช้บริการร้องขอการออกแบบ ของหน่วยสื่อสารและภาพลักษณ์องค์กร</p>
                                <p>อีเมลนี้เป็นระบบอัตโนมัติ กรุณาอย่าตอบกลับ</p>
                                <p style='text-align: center;'>
                                    <a href='[Verification Link]' class='button'>ตรวจสอบข้อมูล</a>
                                </p>
                                <p>ขอแสดงความนับถือ,</p>
                                <p>หน่วยสื่อสารและภาพลักษณ์องค์กร</p>
                            </div>
                            <div class='footer'>
                                <p>&copy; 2024 หน่วยสื่อสารและภาพลักษณ์องค์กร. สงวนลิขสิทธิ์</p>
                                <p>คณะพยาบาลศาสตร์ มหาวิทยาลัยเชียงใหม่ 110/406 ถนนอินทวโรรส ตำบลสุเทพ อำเภอเมือง จังหวัดเชียงใหม่ 50200</p>
                            </div>
                        </div>
                    </body>
                    </html>
                ";
                $mail->msgHTML($email_content);

                if ($mail->send()) {
                    // อัพเดทค่า status_email เป็น 1
                    $update_stmt = $conn->prepare("UPDATE ccfn_form_p SET status_email = 1 WHERE id = :id");
                    $update_stmt->bindParam(':id', $id);
                    $update_stmt->execute();

                    echo "Email sent successfully and status_email updated.";
                } else {
                    echo "Email sending failed: " . $mail->ErrorInfo;
                }
            } else {
                // echo "No email sent as status_email is not 0.";
            }
        } else {
            echo "Fullname not found for ID: $id";
        }
    } catch (PDOException $e) {
        echo "Error fetching fullname: " . $e->getMessage();
    }
} else {
    echo "ID parameter not found.";
}
