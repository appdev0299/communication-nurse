<?php
include_once('../config/connect.php');

$sql = "SELECT date_a, communicate FROM ccfn_form_s";
$stmt = $conn->prepare($sql);
$stmt->execute();
$data = $stmt->fetchAll(PDO::FETCH_ASSOC);

// สร้างตัวแปรสำหรับเก็บข้อมูลของแต่ละวัน
$monthlyData = array();

foreach ($data as $row) {
    $date = date('Y-m', strtotime($row['date_a'])); // ดึงเดือนและปีเพื่อใช้เป็น key
    $communicate = $row['communicate'];

    if (!isset($monthlyData[$date])) {
        $monthlyData[$date] = array();
    }

    if (!in_array($communicate, $monthlyData[$date])) {
        $monthlyData[$date][] = $communicate;
    }
}

echo json_encode($monthlyData);

$conn = null; // ปิดการเชื่อมต่อกับฐานข้อมูล
?>
