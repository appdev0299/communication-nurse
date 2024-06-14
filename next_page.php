<?php
// ตรวจสอบว่ามีข้อมูลที่ส่งมาจากฟอร์มหรือไม่
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // เก็บข้อมูลที่ส่งมาจากฟอร์มลงในตัวแปร
    $name = $_POST['name'];
    $email = $_POST['email'];
    $flexRadioDefault = $_POST['flexRadioDefault'];
    $institution = $_POST['institution'];
    $tel = $_POST['tel'];
    // ส่งไปยังหน้าขอบคุณ
    echo "<h2>ข้อมูลที่ได้รับจากฟอร์ม:</h2>";
    echo "<p><strong>ชื่อ-สกุล:</strong> $name</p>";
    echo "<p><strong>อีเมล:</strong> $email</p>";
    echo "<p><strong>อาชีพ:</strong> $flexRadioDefault</p>";
    echo "<p><strong>หน่วยงาน/สำนักวิชา:</strong> $institution</p>";
    echo "<p><strong>โทรศัพท์:</strong> $tel</p>";
    // header("Location: thank_you_page.php");
    exit();
} else {
    // ถ้าไม่มีข้อมูลที่ส่งมาจากฟอร์ม ให้เปลี่ยนเส้นทาง URL ไปยังหน้าที่ต้องการเมื่อไม่มีการร้องขอฟอร์ม
    header("Location: error_page.php");
    exit();
}
