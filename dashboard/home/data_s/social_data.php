<?php
require_once '../../../config/connect.php';

header('Content-Type: application/json');

try {
    $query = "SELECT social FROM ccfn_form_s";
    $stmt = $conn->query($query);
    $data = $stmt->fetchAll(PDO::FETCH_COLUMN, 0); // ดึงข้อมูลในคอลัมน์ social

    // แยกและนับประเภท
    $social_types = [
        'Website' => 0,
        'Facebook Official (TH)' => 0,
        'Facebook Official (En)' => 0,
        'Line Official' => 0,
        'LinkedIn' => 0,
        'Instagram' => 0,
        'Twitter' => 0,
        'เสียงตามสาย' => 0,
        'ป้ายดิจิทัล' => 0
    ];

    foreach ($data as $social) {
        $social_array = explode(', ', $social);
        foreach ($social_array as $type) {
            if (array_key_exists($type, $social_types)) {
                $social_types[$type]++;
            }
        }
    }

    $result = [];
    foreach ($social_types as $type => $count) {
        $result[] = ['social_type' => $type, 'count' => $count];
    }

    echo json_encode($result);
} catch (PDOException $e) {
    echo json_encode(["error" => $e->getMessage()]);
}
