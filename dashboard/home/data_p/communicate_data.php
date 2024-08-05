<?php
require_once '../../../config/connect.php';

header('Content-Type: application/json');

try {
    $stmt = $conn->query("SELECT communicate, COUNT(*) as count FROM ccfn_form_p GROUP BY communicate");
    $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
    echo json_encode($data);
} catch (PDOException $e) {
    echo json_encode(["error" => $e->getMessage()]);
}
